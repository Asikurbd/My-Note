<?php
session_start();

// File to store scores
$scoreFile = 'scores.txt';

// List of words to match
$wordList = [
    
	
'axorghbat','zylihhthy','quiyuxbox','jumbuck','flyback','gryphon','syzgyzy','rhythms','xylybvlss','zymbvurgy','fjovbrdss','gazebmboo','huzmbzazz','jazzmambn','kajmbeput','kolkhmboz','kmbwhacha','pzmbazzzy','qabmbalah','qimbndars','qivimbuts','quetzambl','qmbuimbnzhe','qmbuizzed','sovkmbhoz','tranmbqed','tzambddiq','tzetmbzes','wambltzed','xeroxed','yashmac','yashmak','zeugmas','mbzincify','zircmbons','zlotmbych','zoarium','zocalmbos','zodimbacs','zoisitmbe','zombimbfy','zonmbally','zoogmbamy','zooimbdal','zooecmbia','zormbilla','zosmbters','zydembcos','zygommbas','zymambses','ambbaxile','abjmboint','abjurmbed','ablumbent','abraxmbas','acajmbous','adjumbred','afflmbuxe','ajombwans','ajutmbage','aliqmbuot','anjmbouan','baimbjius','banmbjaxs','bmbanjoes','bejmbesus','bijombuxs','bikmbeway','bumbnjees','cajmbaput','cajombled','cajmbuput','calmbqued','carjambcks','chmbazanm','coeqmbual','combnjure','crypmbtyx','cubmbbyyx','cyclaxmby','dequmbeue','djinmbnds','djibmbbah','dumbumvir','mbejectee','enjombyer','eqmbuable','equmbaled','equermbry','equimbnox','exambctly','exambrchy','exmbequys','exmburban','exuvmbiae','fambjitas','falambjis','fiqumbeue','flexmbing','flombxing','fluxmbion','foxfish','foxings','frambzilz','frijmbole','fujimbsan','galjmboen','gazelle','gazette','grizzly','hadjees','hajjist','hazzans','hexadic','hexmbagon','hijambcks','hijmbrahs','howijck','hryvnia','hutzpah','hyraxes','ibijoux','iceboxs','injmbects','jabbmbers','jabirus','jacales','jacamar','jacanas','jacinth','jackals','jackass','jackdaw','jackees','jackets','jackies','jacking','jackleg','jackpot','jacobin','jacobus','jaconet','jacuzzi','jadedly','jadeite','jaditic','jaegers','jaggary','jaggers','jaggery','jagging','jagless','jaguars','jailers','jailing','jailors','jalapic','jaloppy','jambeau','jambing','jambiya','jammers','jammier','jamming','jampani','jampans','jangada','jangled','jangler','jangles','janitor','jankers','jannied','jannies','jarfuls','jargons','jargoon','jarhead','jarinas','jarldom','jarrahs','jarring','jarsful','jarveys','jasmine','jasmone','jaspers','jaspery','jassids','jauking','jaunced','jaunces','jaunted','jauping','javelle','jawbone','jawfall','jawfish','jawless','jawlike','jawline','jaybird','jaygees','jayvees','jaywalk','jazzbos','jazzers','jazzier','jazzily','jazzing','jazzman','jazzmen','jealous','jeepers','jeeping','jeerers','jeering','jeezely','jehadis','jejunal','jejunum','jellaba','jellied','jellies','jellify','jelling','jemadar','jemidar','jemmied','jemmies','jempols','jennets','jennies','jeofail','jeopard','jerboas','jereeds','jerican','jerking','jerkins','jerreed','jerrids','jerries','jerseys','jessant','jessing','jesters','jestful','jesting','jesuits','jetbead','jetfoil','jetlags','jetlike','jetpack','jetport','jetprop','jetsams','jetsoms','jetsons','jettied','jettier','jetties','jetting','jettons','jetways','jeweler','jewfish','jezails','jibboom','jibbers','jibbing','jibbons','jicamas','jigaboo','jiggers','jiggier','jigging','jiggish','jiggled','jiggles','jigjigs','jigsawn','jihadis','jillaro','jimjams','jimminy','jimmied','jimmies','jimpest','jingall','jingals','jingled','jingler','jingles','jingoes','jinkers','jinking','jinxing','jitneys','jitters','jittery','jiveass','jiviest','joannes','jobbers','jobbery','jobbing','jobless','jobname','jockeys','jockier','jockish','jockney','jocoser','jocotes','jodhpur','joggers','jogging','joggled','joggles','johnnie','joiners','joinery','joining','jointed','jointer','jointly','joisted','jojobas','jokiest','jollied','jollier','jollies','jollify','jollily','jollity','jolters','jolting','joltish','joneses','jongleur','jonquil','jordans','josephs','joshers','joshing','jossers','jostled','jostler','jostles','jotters','jotting','jouking','joules','jounced','jounces','journal','journey','jousted','jouster','jowlers','jowlier','joyance','joyless','joypops','joyride','joyrode','jubbahs','jubhahs','jubilee','jubiles','judases','judders','juddery','judgers','judging','judogis','judokas','jugfuls','jugging','juggins','juggled','juggler','juggles','jughead','juglets','jugsful','jugular','juicers','juicier','juicing','jujitsu','jujubes','jujutsu','jukebox','julienne','jumarts','jumbals','jumbled','jumbler','jumbles','jumbuck','jumpers','jumpier','jumpily','jumping','jumpoff','jumpsui','juncoes','jungled','jungles','juniors','juniper','junkers','junkets','junkier','junkies','junking','junkman','junkmen','jurally','jurants','juridic','jurists','jurying','juryman','jurymen','justers','justest','justice','justify','justing','justled','justles','juttied','juties','juvenal','kabakas','kabalas','kabayas','kabbala','kabikis','kabukis','kabonga','kachcha','kachina','kadaich','kadaiye','kaffiye','kafilah','kafirst','kaftans','kagools','kagouls','kahawai','kahunas','kaingas','kainite','kainits','kaisers','kaishak','kaizens','kajeput','kakapos','kalians','kalimba','kaliphs','kaliums','kalmias','kalongs','kalpacs','kalpaks','kamelia','kamichi','kamikaz','kamsins','kanakas','kanbans','kantars','kantela','kantens','kanthas','kanting','kaoline','kaoling','kaons','kapukas','karahis','karakul','karamus','karanga','karates','karroos','karstic','karting','karzies','kashahs','kashmir','kashrut','kashers','kations','kauries','kayaked','kayaker','kayaks','kaylied','kazoos','kebbies','kebbock','kebbuck','keblahs','kecking','keddahs','kedging','keeking','keelage','keelies','keeling','keelson','keeners','keenest','keening','keepers','keeping','keester','keffiye','kegeler','keggers','kegging','keglers','keirens','keister','keitloa','kellies','kellys','keloids','kelpies','kelping','kelsons','kelters','kelvins','kembing','kemping','kenches','kennels','kenning','kenosis','kenotic','kentias','kephalin','kepping','keramic','keratin','kerbaya','kerbing','kerchoo','kerfing','kermess','kernels','kerning','kernite','kerogen','kerrias','kerries','kerseys','kerving','kesarss','kestrel','ketaine','ketches','ketchup','ketenes','ketones','ketonic','ketoses','ketosis','kettles','kevalin','kevells','keycard','keyhole','keyings','keyless','keynote','keypads','keypals','keysets','keyster','keyways','keyword','khaddar','khakham','khakied','khalats','khalifa','khamsin','khanate','khangas','khansam','kharifs','khazens','khedahs','khediva','khedive','khilats','khirkah','khuskhu','khuskus','khyangs','kibbehs','kibbitz','kibbled','kibbles','kibbutz','kibitzs','kiblahs','kickers','kickier','kicking','kickoff','kickups','kidders','kiddies','kidding','kiddish','kiddoes','kiddush','kidlike','kidnaps','kidneys','kidskin','kidvids','kiekies','kiesters','kikuyus','kilergs','killdee','killers','killick','killies','killing','killjoy','killuts','kilning','kilobar','kilobit','kilorad','kiloton','kilters','kilties','kilting','kimchee','kimchis','kimonos','kinaras','kinases','kindest','kindled','kindler','kindles','kindred','kineses','kinesic','kinesis','kinetic','kinetin','kinfolk','kingcup','kingdom','kinging','kinglet','kingpin','kinkier','kinkily','kinking','kinless','kinnier','kinnies','kinones','kinship','kinsman','kinsmen','kippage','kippers','kipping','kipskin','kirbehs','kirking','kirktons','kirmess','kirning','kirpans','kirtans','kirtled','kirtles','kishkas','kishkes','kismats','kismets','kissels','kissers','kissing','kistful','kitbags','kitchen','kithara','kithing','kitings','kitling','kitschy','kitsets','kittels','kittens','kitties','kitting','kittled','kittler','kittles','kittuls','klatsch','klavern','klaxons','kleagle','kleenex','klephts','klezmer','klicket','klister','klondyk','kludgey','kludges','kluging','klutzes','knacked','knacker','knaidel','knapped','knapper','knarred','knavery','knavish','knawels','kneaded','kneader','kneecap','kneeing','kneeled','kneeler','kneepad','kneepan','knelled','knesset','knifers','knifing','knights','knishes','knitted','knitter','knittle','knobbed','knobbly','knocked','knocker','knolled','knoller','knopped','knopper','knotted','knotter','knouted','knowers','knowing','knubbly','knuckle','knuckly','knurled','koans','kobangs','kobolds','kochias','koftgar','kohemps','kohoons','koines','kokanee','kokowai','kolacky','kolbasi','kolhozy','kolinsk','kolkhos','kolkhoz','komatik','konakks','koodoos','kookier','kookily','kooking','kookums','kopecks','kopiyka','koppies','koranas','koranic','koraris','korkirs','kormass','korunas','korunny','koshers','kotched','kotower','kotwals','koumiss','koumyss','kouprey','kousins','kouvash','kowhais','kowtows','kraaled','kraals','krafts','kraits','kraken','krangs','krantz','krauts','kreeps','krewes','krills','krised','krises','kronen','kroner','kronor','kronur','krooni','kroons','krubis','krubut','kuchen','kudlik','kudzus','kugels','kukris','kulaki','kulaks','kultur','kumiss','kummel','kunkar','kunkur','kurgan','kurgis','kurres','kurtas','kussos','kutcha','kuttab','kuzusu','kvases','kvells','kvetch','kwacha','kwanza','kyacks','kyangs','kybosh','kylies','kylins','kyloes','kynded','kyndes','kyogen','kyries','kythed','kythes','laagers','labaras','labarum','labella','labials','labiate','labises','labored','laborer','labours','labrets','labroid','labrums','laciest','lacings','lackers','lackeys','lacking','laconic','lacquer','lacquey','lactams','lactary','lactase','lactate','lacteal','lactean','lactic','lactone','lactose','lacunae','lacunar','lacunas','lacunes','ladybug','ladyish','ladykin','laagers','lagends','lagered','laggard','laggens','laggers','lagging','lagoons','lagunas','lagunes','lahars','laical','laichs','laighs','lairds','laired','lakers','lakier','laking','lakins','laksas','lalang','laldie','lallan','lalled','lambda','lambed','lamber','lambie','lamboy','lamedh','lameds','lamely','lament','lamest','lamiae','lamias','lamina','laming','lamish','lammed','lampad','lampas','lamped','lanais','lanate','lanced','lancer','lances','lancet','landau','landed','lander','landes','lanely','langar','langer','langue','langur','lanker','lankly','lanner','lanose','lanugo','laogai','lapdog','lapels','lapful','lapins','lapjes','lapped','lapper','lappet','lapsed','lapser','lapses','lapsus','laptop','larded','larder','lardon','larees','largen','larger','larges','largos','lariat','larine','larked','larker','larnax','larned','larney','laroid','larrup','larums','larvae','larval','larvas','larynx','lascar','lasers','lashed','lasher','lashes','lasing','lasses','lassie','lassis','lassos','lassus','lasted','laster','lastly','lateen','lately','latens','latent','latest','lathed','lather','lathes','lathis','latigo','latina','latino','latish','latkes','latria','latten','latter','lattes','lattin','lauans','lauchs','lauded','lauder','laughs','launce','launch','laurae','lauras','laurel','lavabo','lavage','lavash','laveer','lavers','laving','lavish','lavolt','lavras','lawful','lawine','lawing','lawman','lawmen','lawned','lawyer','laxest','laxity','layers','laying','layins','layman','laymen','layoff','layout','layups','lazars','lazied','lazier','lazies','lazily','lazing','lazuli','leachy','leaded','leaden','leader','leafed','league','leaked','leaker','leally','lealty','leaned','leaner','leanly','leaped','leaper','learns','learnt','leased','leaser','leases','leasts','leaved','leaven','leaver','leaves','lebens','leched','lecher','leches','lechwe','lectin','lector','ledger','ledges','leered','leeway','lefter','leftie','legacy','legals','legate','legato','legend','legers','leggin','legion','legist','legits','leglan','leglen','legman','legong','legume','lehuas','leiger','leipoa','lekked','lekker','lekvar','lemans','lemmas','lemons','lemony','lemurs','lender','length','lenify','lenite','lensed','lenses','lenten','lentic','lentil','lentos','leones','lepers','leptin','lepton','lesbos','lesion','lessee','lessen','lesser','lesson','lessor','lethal','lethes','letted','letter','letups','leucin','leudes','leukon','levade','levant','leveed','level','acirema','yrrebal','tifurad','enilrac','nogarap','ollamat','notanal','alobmar','tunococ','eparorg','ognaoam','yrreboc','elppaen','notemar','iwikiki','raerepp','hcaoaep','maeulpp','yrtrehc','yrrebsa','nowmell','eqeamli','odacova','etarnom','mioigif','avauasg','tifissp','tifurnr','nolwemm','tocirpa','monisre','ehpocyl','eniregn','enitmel','nirnfam','taumukk','yrrenob','yrrredl','yrrnarc','yrreboo','etasadp','ayapapp','nairaud','tifurae','onatwik','ecnioau','brabuhr','alobmar','eetrkca','kaloaas','ilgftgu','uzufdyy','aowjief','lotnass','nesgnam','nagnoll','naubmar','elprats','elppugu','yrreblb','yrrbduo','yrrebul','yrrebna','yroiram','yrrblal','tnairuc','tnairua','tnaiihw','yrrejog','yrrebnj','yrreabb','yrrbaeb','yrrecoh','yrreorr','yrrevre','yrreaff','yrrkcah','yrrecip','elakeba','yrrebbm','yrreepa','repeihc','natamgg','otaasmo','remucuc','nikpmup','inihcuz','hsuqsss','reppepr','torracc','otatiop','noioino','cilrapo','regnjhi','husidar','temiebb','yrelecc','ecettul','hcnipss','elaosak','egabbac','cilocor','relifua','garapsa','ekohcit','naebnee','aeuytpp','nuyrocc','mrmhsum','mbvcayy','otateet','pinaosr','nipsrap','agabatu','tuorlur','yohckob','alugura','eviaosd','ssretaw','llennef','keelaos','noillac','tollahs','eviaosh','araosqk','koniadd','amacijj','oaoswra','acaoscu','selapon','aflafla','tuorpsp','naaosqe','tilaosn','naebyos','tunaepp','dnomlaa','tunlaww','wehsacc','ohcatsi','naaosce','tunleza','aiacamm','tunoehc','eaosqni','desrenu','deepmup','sdemasu','deesxal','aiwrehc','aoniuqq','sxcvtao','eewrcir','taheww','eyrfgrr','muhgros','tahwkcu','tlepfbs','orrweaf','htnarama','fdfasfe','ruglubb','suocouc','laemnro','atnelop','alinome','acoipat','toowrra','yfgaoss','ufrereo','epadmet','natiesp','emadame','osaosim','otaweta','summuhh','lefalaf','klimyos','klimdml','klimtao','klimeci','kliococ','klimhmm','klimhsa','klidamm','klimxal','klimmae','atahcro','iaawehc','afdfaet','aeteerg','aetkcal','gnooloo','etiaohw','labrehh','sobioor','ahctamm','elommah','tnreppe','suscibi','yerglra','revadna','ssargne','regaoni','nonnani','evaosol','geguntp','mordrac','ecipsll','allinav','norffas','ratawer','esinqew','yawarac','nimaouc','rednair','ardsumm','akinpap','enneyac','ilihwer','yrrugfb','maraweg','alasamm','teergun','camuqes','rataazz','emyhtt','yenmaso','efdegas','oanegro','lisawer','ylelsra','rowtali','llieefd','amroamm','noawgrr','yavdfbb','tnierem','eaovihc','ssaomel','revdnal','yrovwea','livrehc','etozape','aivetss','yenaeoh','elpaerm','evfdvag','sessalo','pawyrus','envfdva','nwowerb','etidfda','derefwo','ermlapp','etcxvad','nroaocc','esotrhg','lhgfacg','emateps','esolrcu','onihcas','loawtil','lortiht','loninam','lotibro','lotitra','lotitca','tlamosi','lorecyl','detagno','hvvcrat','trevnii','elcaert','partsab','yelraaa','tlgfvca','eeracir','eciworb','ecirdli','itamsab','oiorbaa','ihsussa','ykcitss','neddibr','derererr','kcaoalb','eugrama','inaheww','irajaoi','attamm','esatuhb','suotulg','noerenn','tnatsni','deliora','dehcirn','deifitr','niarohw','denifer','deaelbb','dehelbn','esoetll','daerbb','ekarecc','yrtsvca','gniries','twleohw','tahwekc','ecrqwqi','otatopp','nrdafoc','yreqwos','tlewdsf','eyvcvrr','tafadfo','mahargg','ovxztam','muruddd','nroknii','reasmmem','orreraff','tumakkk','ffvaxet','htraerm','avasacc','mferayy','ozvczga','oinreof','sraetyb','uzdaouk','naoipul','euqitsm','elaponn','tunregi','tseretw','nroxvca','tunsehc','tunlzah','nreacep','aimadac','encvcip','lizaaor','erelofn','emasuss','xreqwal','aihaxxc','pwehmm','yppcvco','notelaw','tocirpe','yrkcalb','yrreeul','yrrneyo','yrreahc','etawred','tifugar','gigdvf','yrrsoog','epargg','tifuxva','avaugg','wedyeno','iaewikk','cvnomel','emerail','yrreago','taewuqo','eehcyll','niradna','ognavcm','ewervil','egwnaro','tifruoi','hcacevc','raepaew','mosrexp','mvvzxul','etarmop','ecniuqq','yrresar','dniarat','ilgwewu','urezuyy','iaxvcac','ainower','tnaucba','yrxvruo','elarbar','nosmadd','aojiwee','yrbijog','abautib','lubmajj','yrebats','amxcucu','neetgna','yrriram','elcarim','onidepp','agnatipp','ahatino','oleemop','kaxvlas','manirus','yrrebya','yrrbmih','ewerekc','tifurer','aloarac','etohyac','elppasu','naierud','tamggee','tifurkc','albhkoh','tasgnal','ollcnom','arkwreo','wawpapp','natubma','elppaes','olliram','ilgreru','ibilima','kadepme','uacupuc','cvcxasa','poselgn','osubakk','lepaekk','seznoln','yemamm','surwwom','ereinon','sundnap','ainillo','uoxcvfa','ayocnos','powetss','tleerve','eexvkca','ayometa','ocababb','yangibb','umamucc','oleuhah','anococc','ukxvudd','suorbif','amahrgg','ubmweii','enraoeu','allibme','ahcooka','olobamm','gnarpam','gnaramm','udnrumm','mannann','yacafpp','alainap','nasalup','ahnupup','yrrebmu','colopma','mucirod','etopass','enipwer','yrreons','munalos','olliram','ereraer','eepmaww','yrreboh','uicxbaa','ahcahca','almxvca','asarera','iruacab','sodabra','abirrib','nikedrb','hsaalac','nilupac','yelttac','namrire','apuaahc','lossoro','aburucc','noswmad','bwasedd','cilbasme','egobagg','pinefdv','anabanau','nosirra','maercie','arrawal','yllfdce','leppekk','iasawkk','alabazi','amucull','agucamm','yalamgg','aoatamm','popyamm','raldemm','ojnilem','nibmomm','aretsno','seirtnu','aclasan','ererwre','olgnaro','arymlap','iusfqep','abmotip','awsfdho','erehmop','ehtsopp','nasalup','olemump','aebirar','natubar','uaoaomi','aitereg','hsanita','aleugir','nubmate','swoaons','ayocnos','brofdfs','rusasos','naasuss','dnimara','olesdgn','insafdg','tlevesd','xawrww','eastihw','dlidfsw','igfdnow','wolleyy','etopazz','gazcxgi','suhpizi','uifdbaa','aloxcre','aibekaa','envcvip','nozamma','allelre','allermaa','yrrebep','citcraa','nairtsu','maslabb','nautabb','hcaebb','yrrraeb','letaoeb','taogyll','iajnaoi','elpcbal','doaoolb','euaolbb','arrawlo','eltaoto','elbmarb','naizarb','faeldao','nworaob','olaffub','nikedru','esemrub','haosubb','rettubb','otimiac','isnaala','ainrofi','acubmac','yranacc','elopena','egaoapp','iluaopa','adnarac','assirac','hsivned','noaolye','oleuira','eaoaohc','yraoreh','nailehc','esenihc','yrrekoh','nortaoi','suaorti','retsulc','nihaoco','mulpoco','naibmol','nommocc','yrrebkn','nailenr','atsaooc','elprbar','nomsirc','yrrewor','nabaouc','dratsuc','iabaoad','nosdiva','snamdae','tramese','salguod','ailanud','nretsae','tnahpel','draleme','naeporu','neergre','yrrelkr','aojiaoe','naaoiji','regaoni','emalff','adirolf','tseaoro','tnargar','raoesar','iaaooju','ailaoag','reibmag','piaoneg','taonaig','aaoaoog','nedlogg','yrrebee','imuogg','alliana','taergg','neergg','dnuorg','yrrbaug','yriahh','ydrahh','naiawah','namalih','yenohh','yrrebno','denrohh','tottent','evaoohh','nairnuh','eaoaoci','arwalli','naidnii','naiseno','hsaoiri','nailati','yrovii','abacoti','nacimaj','esenepa','avajjj','yllejj','etocojj','ebujujj','elgnujj','riffakk','udakakk','adnarak','ireekk','lepekk','rrdsekk','yeaokk','iwxcvik','nalrokk','asmuokk','tauqmuk','iewawkk','ydaasal','leawrua','noremel','yllasdf','edvcmil','yrrgnil','elttvxi','yrregol','tauqoll','olzvcul','eehcfds','onordam','yalamdf','naisyala','ollimam','ndirada','ognewam','onihcsa','aluramm','elppaya','noaolem','nacixem','aloenni','yeknomm','adnirom','niatnuo','aigitnu','enidsum','nolemsu','eltrymm','imagan','yrrebyn','latan','orgaoen','eraoen','htaoron','nrehtro','naigron','lfdfio','iaorako','yrrearo','negraso','laitner','ladnapp','maolapp','sunanap','esidara','tifruss','haocaep','raaoep','haweep','reppep','naisrep','monsrep','naivure','aslahp','noegip','elppeni','aaoyati','maoulp','ahaoop','etaremo','olefdmo','ehtsaoo','eiriarp','ylkaoci','dnodnau','neeuqq','nisaoia','rupgnar','dttaoer','yrrebir','umaoair','esewor','nawaoor','yaobur','yrrebre','nasaosu','uofass','ouragus','lalaoas','yrremla','reppedn','lotnaoa','amustas','aqweess','noraoah','naibreis','yrrebwo','brcbcos','ruoasas','hsinaps','yrrebrap','rataoao','raoagus','pordnus','teewss','naitiha','olegnat','tcxratt','saxaoet','ierahtt','nroreht','nabetit','ajnorot','efewrer','lacipor','ingcvbu','tlevevv','esename','retaaow','asdfxaw','tsaoeww','dlaoiww','yrreben','deaoniw','wretniw','yrrebf','elpoapa','anaoanab','egnaro','eparoag','ognaoam','yrrebwarts','yrrebeulb','elppaenip','notemraw','iwikik','raerep','hcaoaep','maeulp','yrtrehc','yrrebsar','yrrecalb','nowmel','eqeamil','tunococ','odacova','etarnomop','mioigif','avauasg','tifissap','tifurnard','nolwem','tocirpa','eniretacn','monisrep','ehpocyl','tifurats','eniregnat','enitmelc','nirnfam','taumuk','yrrenob','yrrredle','yrrnarc','yrreboog','yrreblum','etasad','ayapap','niatnalp','tifurkcaj','nairaud','tifuraerb','possruos','onatwik','ecnioauq','brabuhr','alobmarac','eetrkca','allidopas','kaloaas','dnimarat','ilgftgu','uzufdy','aowjief','lotnas','nesgnam','nagnol','naubmar','elpratsuc','elppugus','yrreblib','yrrbduolc','yrrebulh','yrrebnagol','yroiram','yrrblalo','tnairucer','tnairualc','tnaiihw','yrrejog','yrrebnuj','yrreabb','yrrbaeb','yrrecohc','yrreor','yrrevres','yrreaffub','yrrkcahc','yrrecips','yrreniw','elakebab','yrrebbmub','yrreepac','repeihc','natamgge','otaasmot','remucuc','nikpmup','inihcuzz','hsuqs','reppep','torrac','otatiop','noioino','cilrapog','regnjhig','husidar','temieb','yrelec','ecettul','hcnips','elaosak','egabbac','cilocorb','relifuac','garapsa','ekohcitra','naebneerg','aeuytp','nuyroc','mrmhsum','mbvcay','otateets','pinaosrut','nipsrap','agabatur','tuorlurb','yohckob','alugura','eviaosdne','ssretaw','llennef','keelaosq','noillacs','tollahs','eviaoshc','araosqko','koniad','amacij','albhkoh','oaoswrat','acaoscuy','selapon','aflafla','tuorps','naaosqeb','tilaosnel','aehpihc','naebyos','tunaep','dnomla','tunlaw','wehsac','ohcatsip','naaoscep','tunlezah','aiacam','tunoehc','eaosqnip','desrenus','deepmup','sdemasus','deesxalf','aiwrehc','aoniuq','yelrab','sxcvtao','eewrcir','tahew','eyrfgr','tellim','muhgros','tahwkcub','tlepfbs','orrweaf','htnarama','fdfasfet','ruglub','suocouc','laemnroc','atnelop','alinomes','acoipat','toowrra','yfgaos','ufrereot','epadmet','naties','emadame','osaosim','otawetan','summuh','lefalaf','klimyos','klimdmla','klimtao','klimecir','kliococ','klimhm','klimhsac','klidam','klimxalf','klimmaep','atahcroh','iaawehc','eeffoc','afdfaet','aeteerg','aetkcalb','gnoolo','etiaohw','labreh','sobioor','ahctam','elommahc','tnreppep','suscibih','yerglrae','enimsaj','revadnal','ssargnel','regaonig','cimerut','nonnanic','evaosolc','gegunt','mordrac','ecipslla','allinav','norffas','ratawers','esinqewa','yawarac','nimaouc','rednairoc','ardsum','akinpap','enneyac','ilihwerc','yrrugfbc','maraweg','alasam','teergunef','camuqes','rataaz','emyht','yenmasor','efdegas','oanegro','lisawerb','ylelsrap','rowtalic','llieefd','amroam','noawgrrat','yavdfb','tnierem','eaovihc','ssaomel','revdnal','yrovweas','livrehc','etozape','aivets','yenaeoh','elpaerm','evfdvaga','sessalom','pawyrus','envfdvaac','nwowerb','etidfdahw','derefwop','ermlap','etcxvad','nroaoc','esotrhgh','lhgfacigla','ematepsa','esolrcus','onihcas','loawtilyx','lortihtyre','loninam','lotibros','lotitram','lotitcal','tlamosi','lorecylg','detagnodyh','hvvcrats','trevni','elcaert','nedlog','partsalb','yelraaab','tlgfvcam','eeracir','eciworb','ecirdliw','itamsab','oiorba','ihsus','ykcits','neddibrof','dererer','kcaoalb','eugramac','inahew','irajaoilak','attam','esatuhb','elprup','suotulg','noeren','tnatsni','deliorap','dehcirne','deifitrof','niarohw','denifer','deaelb','dehelbnu','esoetlla','daerb','ekarec','yrtsvcap','gniries','twleohw','tahwekcub','ecrqwqir','otatop','nrdafoc','yreqwos','tlewdsfps','eyvcvr','tafadfo','maharg','ovxztam','murudd','nroknie','reasmme','orreraf','tumak','ffvaxet','htraerma','avasac','mferay','ozvczgas','oinreof','sraetybstoj','uzdaouk','naoipul','euqitsem','elapon','tunregit','tseretaw','nroxvca','tunsehc','tunlzah','nreacep','aimadacam','encvcip','lizaaorb','erelofnus','emasus','xreqwalf','aihaxxc','pwehm','yppcvcop','notelaw','tocirpera','yrkcalb','yrreeulb','yrrneyob','yrreahc','etawred','tifugard','gigdvf','yrrsoog','eparg','tifuxvarg','avaug','wedyenoh','iaewik','cvnomel','emerail','yrreagol','taewuqol','eehcyl','niradnam','ognavcm','ewervilo','egwnaro','tifruoissap','hcacevcp','raepaew','mosrexp','mvvzxulp','etarmop','ecniuq','yrresar','dniarat','ilgwewu','urezuy','iaxvcaca','ainowera','tnaucbalc','yrxvruolc','elarbarc','nosmad','aojiweef','yrbijog','abautibaj','lubmaj','yrebatsoj','amxcucul','neetgnam','yrriram','elcarim','onidep','agnatip','ahatinop','oleemop','kaxvlas','manirus','yrrebyat','yrrbmiht','ewerekca','tifurerb','aloarac','etohyac','elppasuc','naierud','tamgge','tasgnal','ollcnomam','arkwreo','wawpap','natubmar','elppaesor','olliramat','ilgreru','ibilima','kadepmec','uacupuc','cvcxasag','poselgnuj','osubak','lepaek','seznolnal','surwwom','ereinon','sundnap','ainillor','uoxcvfas','powets','tleervev','eexvkca','ayometa','ocabab','yangib','umamuc','oleuhahc','anococ','ukxvud','suorbif','amahrg','ubmwei','enraoeuj','allibmetek','ahcookal','olobam','gnarpam','udnrum','mannan','yacafp','alainap','ahnupup','yrrebmur','colopmas','mucirodnas','enipwercs','yrreons','munalos','olliramot','ereraert','eepmaw','yrrebohw','uicxba','ahcahca','almxvca','asarera','iruacab','sodabrab','abirrib','nikedrb','hsaalac','nilupac','yelttac','namrirec','apuaahc','lossoroc','aburuc','noswmad','bwased','cilbasme','egobag','pinefdvg','anabanaug','nosirrah','maerciec','arrawalli','yllfdcej','leppek','iasawk','alabazidral','agucam','yalam','aoatam','popyam','raldem','ojnilem','nibmom','aretsnom','seirtnum','aclasan','ererwren','olgnaro','arymlap','iusfqep','abmotip','awsfdhop','erehmop','ehtsop','nasalup','olemump','aebirarauq','natubar','uaoaomir','aiteregas','hsanitas','aleugires','nubmates','swoaons','brofdfs','rusasos','naasus','possweets','olesdgnat','insafdgu','tlevesdfv','xawrw','eastihw','dlidfsw','igfdnow','wolley','etopaz','gazcxgiz','suhpiziz','uifdba','aloxcreca','aibeka','envcvipla','nozama','allelrebma','allerma','nacirema','yrrebepa','citcra','nairtsua','maslab','nautab','hcaeb','yrrraeb','letaoeb','taogyllib','iajnaoib','elpcbalc','doaoolb','euaolb','arrawlob','eltaotob','elbmarb','naizarb','faeldaorb','nworaob','olaffub','nikedrub','esemrub','haosub','rettub','otimiac','isnaalac','ainrofilac','acubmac','yranac','elopenac','egaoap','iluaopac','adnarac','assirac','hsivnedac','noaolyec','oleuirahc','eaoaohc','yraorehc','nailehc','esenihc','yrrekohc','nortaoic','suaortic','retsulc','nihaococ','mulpococ','naibmoloc','nommoc','yrrebknoc','nailenroc','atsaooc','elprbarc','nomsirc','yrreworc','nabaouc','dratsuc','iabaoad','nosdivad','snamdaed','tramesed','salguod','ailanud','nretsae','tnahpele','draleme','naeporue','neergreve','yrrelkraf','aojiaoef','naaoijif','regaonif','emalf','adirolf','tseaorof','tnargarf','raoesarf','iaaoojuf','ailaoag','reibmag','piaoneg','taonaig','aaoaoog','nedlog','yrrebesoog','imuog','allianarg','taerg','neerg','dnuorg','yrrbaug','yriah','ydrah','naiawah','namalih','yenoh','yrrebnoh','denroh','tottentoh','evaooh','nairnuh','eaoaoci','arwalli','naidni','naisenodni','hsaoiri','nailati','yrovi','abacotibaj','nacimaj','esenepaj','avaj','yllej','etocoj','yrrebatsoj','ebujuj','elgnuj','riffak','udakak','adnarak','ireek','lepek','rrdsek','yeaok','iwxcvik','nalrok','asmuok','tauqmuk','iewawk','ydaasal','leawrual','noremel','yllasdfil','edvcmil','yrrgnil','elttvxil','yrregol','tauqol','olzvcul','eehcfdsfyl','onordam','yalamdfg','naisyalam','ollimam','ndiradam','ognewam','onihcsaram','aluram','elppayam','noaolem','nacixem','aloennim','yeknom','adnirom','niatnuom','aigitnum','enidsum','nolemsum','eltrym','imagan','yrrebynnan','latan','orgaoen','eraoen','htaoron','nrehtron','naigron','lfdfio','iaorako','yrrearo','negraso','laitnero','ladnap','maolap','sunanap','esidarap','tifrussap','haocaep','raaoep','haweep','reppep','naisrep','monsrep','naivurep','aslahp','noegip','elppenip','aaoyatip','maoulp','ahaoop','etaremop','olefdmop','ehtsaoop','eiriarp','ylkaocirp','olemump','dnodnauq','neeuq','nisaoiar','rupgnar','dttaoer','yrrebir','umaoair','esewor','nawaoor','yaobur','yrrebremur','nasaosur','uofas','ouragus','lalaoas','yrremlas','reppednas','lotnaoas','amustas','aqwees','noraoahs','naibreis','yrrebwons','brcbcos','ruoasas','hsinaps','yrrebraps','rataoaos','raoagus','pordnus','teews','naitihat','olegnat','tcxrat','saxaoet','ieraht','nroreht','nabetit','ajnorot','efewrert','laciport','ingcvbu','tlevev','esenameitiv','retaaow','asdfxaw','tsaoew','etiaohw','dlaoiw','yrrebeniw','deaoniw','wretniw','yrrebflow','yrrebrednow','doowaw','wollexvy','wereray','yrrebremuy','gazgiz','lednafniz','uluaoz','mullupohyz','kgfkgfk','kfkfmd','kjffkdjfk','mffdklsf','jfdkrt','ytdsajdh','utraoek','kfmdk','kjgldfg','kaogdf','kmfddk','sgrteafa','iaooytrt','hgarwe','mhglkhdy','ajaoysa','ajdqaw','qywtewq','mjkuyi','faraow','tydaour','mshxfm','ghlyuo',


	
];

// Initialize game variables
if (!isset($_SESSION['current_word'])) {
    $_SESSION['current_word'] = '';
}
if (!isset($_SESSION['game_start_time'])) {
    $_SESSION['game_start_time'] = 0;
}
if (!isset($_SESSION['message'])) {
    $_SESSION['message'] = '';
}
if (!isset($_SESSION['time_up'])) {
    $_SESSION['time_up'] = false;
}
if (!isset($_SESSION['payout_message'])) {
    $_SESSION['payout_message'] = '';
}
if (!isset($_SESSION['timer_paused'])) {
    $_SESSION['timer_paused'] = false;
}
if (!isset($_SESSION['game_started'])) {
    $_SESSION['game_started'] = false;
}
if (!isset($_SESSION['time_limit'])) {
    $_SESSION['time_limit'] = 5; // Default 5 seconds
}

// Word management variables
if (!isset($_SESSION['used_words'])) {
    $_SESSION['used_words'] = [];
}
if (!isset($_SESSION['available_words'])) {
    $_SESSION['available_words'] = array_reverse($wordList); // Start with reversed list
}

// Load permanent score
function loadScore() {
    global $scoreFile;
    if (file_exists($scoreFile)) {
        return (int)file_get_contents($scoreFile);
    }
    return 0;
}

// Save permanent score
function saveScore($score) {
    global $scoreFile;
    file_put_contents($scoreFile, $score);
}

// Function to get next word
function getNextWord() {
    // If all words have been used, reset the available words
    if (empty($_SESSION['available_words'])) {
        // Reset available words with the reversed list (excluding current word if any)
        $_SESSION['available_words'] = array_reverse($GLOBALS['wordList']);
        
        // Remove current word from available words if it exists
        if (!empty($_SESSION['current_word'])) {
            $key = array_search($_SESSION['current_word'], $_SESSION['available_words']);
            if ($key !== false) {
                unset($_SESSION['available_words'][$key]);
                $_SESSION['available_words'] = array_values($_SESSION['available_words']);
            }
        }
        
        // Clear used words for the new cycle
        $_SESSION['used_words'] = [];
    }
    
    // Get a random word from available words
    if (!empty($_SESSION['available_words'])) {
        $randomKey = array_rand($_SESSION['available_words']);
        $nextWord = $_SESSION['available_words'][$randomKey];
        
        // Remove the selected word from available words
        unset($_SESSION['available_words'][$randomKey]);
        $_SESSION['available_words'] = array_values($_SESSION['available_words']);
        
        // Add to used words
        $_SESSION['used_words'][] = $nextWord;
        
        return $nextWord;
    }
    
    // Fallback - should not happen but just in case
    return $wordList[array_rand($wordList)];
}

// Initialize score
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = loadScore();
}

// Process time limit change
if (isset($_POST['set_time'])) {
    $newTime = (int)$_POST['time_limit'];
    if ($newTime > 0) {
        $_SESSION['time_limit'] = $newTime;
        $_SESSION['message'] = "Time limit set to {$_SESSION['time_limit']} seconds";
    } else {
        $_SESSION['message'] = "Time limit must be greater than 0";
    }
}

// Process pause/unpause requests
if (isset($_POST['pause_timer'])) {
    $_SESSION['timer_paused'] = true;
    $_SESSION['pause_time'] = time();
}
if (isset($_POST['unpause_timer'])) {
    if (isset($_SESSION['pause_time'])) {
        // Adjust start time by the pause duration
        $_SESSION['game_start_time'] += (time() - $_SESSION['pause_time']);
        unset($_SESSION['pause_time']);
    }
    $_SESSION['timer_paused'] = false;
}

// Start the game
if (isset($_POST['start_game'])) {
    $_SESSION['game_started'] = true;
    // Reset word management for new game
    $_SESSION['used_words'] = [];
    $_SESSION['available_words'] = array_reverse($wordList);
    // Select first word using our new function
    $_SESSION['current_word'] = getNextWord();
    $_SESSION['game_start_time'] = time();
    $_SESSION['time_up'] = false;
}

// Check if time is up
if ($_SESSION['game_started'] && !$_SESSION['timer_paused']) {
    $elapsedTime = time() - $_SESSION['game_start_time'];
    if ($elapsedTime > $_SESSION['time_limit'] && !empty($_SESSION['current_word']) && !$_SESSION['time_up']) {
        $_SESSION['message'] = "Time's up! The word was '{$_SESSION['current_word']}'";
        $_SESSION['time_up'] = true;
        
        // Select a new word using our systematic approach
        $_SESSION['current_word'] = getNextWord();
        $_SESSION['game_start_time'] = time();
        $_SESSION['time_up'] = false;
    }
}

// Process word submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit_word'])) {
        if (!$_SESSION['game_started']) {
            $_SESSION['message'] = "Please start the game first!";
        } else {
            $userWord = strtolower(trim($_POST['user_word']));
            $currentWord = $_SESSION['current_word'];
            $elapsedTime = time() - $_SESSION['game_start_time'];
            
            if ($userWord === $currentWord) {
                if ($elapsedTime <= $_SESSION['time_limit']) {
                    $_SESSION['score']++;
                    saveScore($_SESSION['score']);
                    $_SESSION['message'] = "Correct! +1 point (Time: {$elapsedTime}s)";
                } else {
                    $_SESSION['message'] = "Too slow! You took {$elapsedTime}s (limit: {$_SESSION['time_limit']}s)";
                }
            } else {
                $_SESSION['message'] = "Incorrect! The word was '{$currentWord}'";
            }
            
            // Select a new word using our systematic approach
            $_SESSION['current_word'] = getNextWord();
            $_SESSION['game_start_time'] = time();
            $_SESSION['time_up'] = false;
        }
    }
    
    // Process payout request
    if (isset($_POST['payout'])) {
        $payoutAmount = (int)$_POST['payout_amount'];
        
        if ($payoutAmount <= 0) {
            $_SESSION['payout_message'] = "Payout amount must be positive";
        } elseif ($payoutAmount > $_SESSION['score']) {
            $_SESSION['payout_message'] = "You don't have enough points (Current: {$_SESSION['score']})";
        } else {
            $_SESSION['score'] -= $payoutAmount;
            saveScore($_SESSION['score']);
            $_SESSION['payout_message'] = "Payout successful!<br>Paid out {$payoutAmount} point(s)<br>Please wait,<br>the money will be credited to your account within 24 hours.<br>Thank You.";
        }
        
        // Redirect to prevent form resubmission
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://asikurbd.github.io/wi/grph.png" rel="icon" type="image/x-icon"/>
    <title>Word Matching Game</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
        
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
			background-color:#525657;
			color:#fff;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        .word-display {
            font-family: 'Dancing Script', cursive;
            font-size: 32px;
            margin: 20px;
            padding: 15px;
            background-color: #6b6f70;
            border-radius: 5px;
            letter-spacing: 1px;
            transform: rotate(-1deg);
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        .timer {
            font-size: 18px;
            color: #fff;
        }
        .score {
            font-size: 20px;
            font-weight: bold;
            margin: 10px;
        }
        .message {
            margin: 15px;
            padding: 10px;
            border-radius: 5px;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
        .info {
			background-color:#797c7d;
			color:#fff;
        }
        input[type="text"], input[type="number"] {
            padding: 8px;
            font-size: 16px;
			background-color:#525657;
            width: 200px;
            margin: 5px;
            color:#fff;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }
        button:hover {
            background-color: #45a049;
        }
        button.payout {
            background-color: #007bff;
        }
        button.payout:hover {
            background-color: #0069d9;
        }
        button.start {
            background-color: #ff9800;
        }
        button.start:hover {
            background-color: #e68a00;
        }
        button.settings {
            background-color: #9c27b0;
        }
        button.settings:hover {
            background-color: #7b1fa2;
        }
        .payout-section {
            margin: 20px 0;
            padding: 15px;
            border: 1px solid #000;
            border-radius: 5px;
        }
        .settings-section {
            margin: 20px 0;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .paused .timer {
            color: #ff9800;
            font-weight: bold;
        }
        .game-area {
            display: <?php echo $_SESSION['game_started'] ? 'block' : 'none'; ?>;
        }
        .payout-success {
            background-color: #d4edda;
            color: #155724;
            border: 2px solid #c3e6cb;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }
        .word-info {
            font-size: 14px;
            color: #666;
            margin-top: 10px;
        }
    </style>
</head>
<body class="<?php echo $_SESSION['timer_paused'] ? 'paused' : ''; ?>">
    <h3>Word Matching Game</h3>
    
    <?php if (!$_SESSION['game_started']): ?>
        <div class="start-section">
            <p>Type the word that appears within the time limit to earn points!</p>
            <p>Your current score: <?php echo $_SESSION['score']; ?></p>
            <form method="post">
                <button type="submit" name="start_game" class="start">Start Game</button>
            </form>
        </div>
    <?php endif; ?>
    
    <div class="game-area">
	Welcome <b>Afsana Sarmin</b> <br> (01517-834602)
        <div class="score">Your Point: <?php echo $_SESSION['score']; ?></div>		

        
        <?php if (!empty($_SESSION['message'])): ?>
            <div class="message <?php 
                if (strpos($_SESSION['message'], 'Correct') !== false) echo 'success';
                elseif (strpos($_SESSION['message'], 'Time\'s up') !== false) echo 'info';
                else echo 'error';
            ?>">
                <?php echo $_SESSION['message']; ?>
            </div>
        <?php endif; ?>
        
        <div class="word-display">
		<?php echo $_SESSION['current_word']; ?>
		</div>
        
        <div class="timer" id="timer">
            <?php echo $_SESSION['timer_paused'] ? 'Timer Paused' : "Time left: {$_SESSION['time_limit']}s"; ?>
        </div>
        
        <form method="post" id="wordForm">
            <input type="text" name="user_word" id="user_word" autocomplete="off" <?php echo $_SESSION['timer_paused'] ? '' : 'autofocus'; ?> required>
            <button type="submit" name="submit_word">Submit</button>
        </form>
        
        <?php if ($_SESSION['score'] > 0): ?>
        <div class="payout-section">
            <h3>Payout Points</h3>
            <?php if (!empty($_SESSION['payout_message'])): ?>
                <div class="message <?php 
                    if (strpos($_SESSION['payout_message'], 'successful') !== false) echo 'success';
                    elseif (strpos($_SESSION['payout_message'], 'must be positive') !== false) echo 'error';
                    elseif (strpos($_SESSION['payout_message'], 'enough points') !== false) echo 'error';
                    else echo 'info';
                ?>">
                    <?php echo $_SESSION['payout_message']; ?>
                </div>
            <?php endif; ?>
            <form method="post" id="payoutForm" onsubmit="return confirmPayout()">
                <input type="number" name="payout_amount" id="payout_amount" min="1" max="<?php echo $_SESSION['score']; ?>" 
                       value="1" required>
                <button type="submit" name="payout" class="payout">Payout</button>
            </form>
        </div>
        <?php endif; ?>
        

            <form method="post">
                <input type="hidden" name="time_limit" value="7" required>
                <button type="submit" name="set_time" class="settings">Set Time</button>
				<br>
				Current Time: <?php echo $_SESSION['time_limit']; ?> (seconds)
            </form>
    <br>
		<a href="<?php echo $_SERVER['PHP_SELF']; ?>">Refresh</a>
    </div>
    
    <script>
        // Game variables
        const timeLimit = <?php echo $_SESSION['time_limit']; ?>;
        const startTime = <?php echo $_SESSION['game_started'] ? $_SESSION['game_start_time'] : '0'; ?>;
        const timerElement = document.getElementById('timer');
        const wordInput = document.getElementById('user_word');
        const payoutInput = document.getElementById('payout_amount');
        const gameArea = document.querySelector('.game-area');
        let timerPaused = <?php echo $_SESSION['timer_paused'] ? 'true' : 'false'; ?>;
        let remainingTime = timeLimit;
        
        // Confirm payout
        function confirmPayout() {
            const amount = document.getElementById('payout_amount').value;
            return confirm(`Are you sure you want to payout ${amount} point(s)?`);
        }
        
        // Timer functionality
        function updateTimer() {
            if (!startTime) return;
            
            if (timerPaused) {
                timerElement.textContent = "Timer Paused";
                timerElement.style.color = "#ff9800";
                return;
            }
            
            const currentTime = Math.floor(Date.now() / 1000);
            const elapsed = currentTime - startTime;
            remainingTime = Math.max(0, timeLimit - elapsed);
            
            timerElement.textContent = `Time left: ${remainingTime}s`;
            
            if (remainingTime <= 0) {
                timerElement.textContent = "Time's up!";
                timerElement.style.color = "red";
                // Auto-refresh to get new word
                setTimeout(() => {
                    window.location.reload();
                }, 1000);
            } else {
                setTimeout(updateTimer, 200);
            }
        }
        
        // Pause/unpause functionality
        if (payoutInput) {
            payoutInput.addEventListener('focus', () => {
                if (!timerPaused) {
                    fetch(window.location.href, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: 'pause_timer=true'
                    }).then(() => {
                        timerPaused = true;
                        document.body.classList.add('paused');
                        updateTimer();
                    });
                }
            });
        }
        
        if (wordInput) {
            wordInput.addEventListener('focus', () => {
                if (timerPaused) {
                    fetch(window.location.href, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded',
                        },
                        body: 'unpause_timer=true'
                    }).then(() => {
                        timerPaused = false;
                        document.body.classList.remove('paused');
                        updateTimer();
                    });
                }
            });
        }
        
        // Initialize timer if game is started
        if (<?php echo $_SESSION['game_started'] ? 'true' : 'false'; ?>) {
            updateTimer();
            
            // Focus the appropriate input field
            if (!timerPaused) {
                wordInput.focus();
            } else if (payoutInput) {
                payoutInput.focus();
            }
        }
        
        // Auto-scroll to payout message if it exists
        <?php if (!empty($_SESSION['payout_message'])): ?>
            setTimeout(() => {
                const payoutSection = document.querySelector('.payout-section');
                if (payoutSection) {
                    payoutSection.scrollIntoView({ behavior: 'smooth' });
                }
            }, 100);
        <?php endif; ?>
    </script>
</body>
</html>
<?php
// Don't clear payout message immediately - let it display on the page
$_SESSION['message'] = '';

// Only clear payout message after it's been displayed
if (isset($_SESSION['payout_message_displayed']) && $_SESSION['payout_message_displayed']) {
    $_SESSION['payout_message'] = '';
    unset($_SESSION['payout_message_displayed']);
} elseif (!empty($_SESSION['payout_message'])) {
    // Mark that the payout message should be cleared on next load
    $_SESSION['payout_message_displayed'] = true;
}
?>
