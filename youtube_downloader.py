import yt_dlp
import os

def download_with_choice():
    # Display copyright information
    print("=" * 50)
    print("YouTube Downloader")
    print("Copyright: Asikur Rahman Saju")
    print("=" * 50)
    
    url = input("Enter YouTube URL: ").strip()
    
    if not url:
        print("Please enter a URL")
        return
    
    download_dir = os.path.join(os.path.expanduser("~"), "Desktop", "YouTube_Downloads")
    os.makedirs(download_dir, exist_ok=True)
    
    try:
        with yt_dlp.YoutubeDL({'quiet': True}) as ydl:
            # Get available formats
            info = ydl.extract_info(url, download=False)
            formats = info.get('formats', [])
            
            # Find available MP4 formats with resolution
            mp4_formats = []
            for f in formats:
                if f.get('ext') == 'mp4' and f.get('vcodec') != 'none' and f.get('height'):
                    mp4_formats.append(f)
            
            # Sort by resolution descending
            mp4_formats.sort(key=lambda x: x['height'], reverse=True)
            
            print(f"\n Title: {info.get('title', 'Unknown')}")
            print("Available MP4 formats:")
            for i, fmt in enumerate(mp4_formats, 1):
                res = fmt.get('height', 'N/A')
                size = fmt.get('filesize', 0)
                size_mb = f"{size/(1024*1024):.1f}MB" if size else "Unknown"
                print(f"{i}. {res}p - {size_mb}")
            
            # Let user choose
            choice = input("\nChoose format (number) or Enter for highest quality: ").strip()
            
            if choice.isdigit() and 1 <= int(choice) <= len(mp4_formats):
                format_id = mp4_formats[int(choice)-1]['format_id']
                format_str = format_id
            else:
                format_str = 'best[ext=mp4]'
                print("Selecting highest quality...")
            
    except Exception as e:
        print(f" Error getting formats: {e}")
        format_str = 'best[ext=mp4]'
    
    # Download with selected format
    ydl_opts = {
        'outtmpl': os.path.join(download_dir, '%(title)s.%(ext)s'),
        'format': format_str,
        'quiet': False,
        'progress_hooks': [progress_hook],
    }
    
    try:
        with yt_dlp.YoutubeDL(ydl_opts) as ydl:
            print("Downloading...")
            ydl.download([url])
            print("Download completed!")
    except Exception as e:
        print(f"Download error: {e}")

def progress_hook(d):
    if d['status'] == 'downloading':
        percent = d.get('_percent_str', '0%')
        speed = d.get('_speed_str', 'N/A')
        eta = d.get('_eta_str', 'N/A')
        print(f"\r Progress: {percent} | Speed: {speed} | ETA: {eta}", end='', flush=True)
    elif d['status'] == 'finished':
        print(f"\r Download complete!{' ' * 50}")

if __name__ == "__main__":
    download_with_choice()
    print("\n" + "=" * 50)
    print("Thank you for using YouTube Downloader")
    print("Copyright Asikur Rahman Saju")
    print("=" * 50)
    input("Press Enter to exit...")
