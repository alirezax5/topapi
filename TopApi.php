<?php 
//= key ==
$keyapi = "1";
/* دریافت اطلاعات پروفایل اینستاکرام */
function instgramprofile($key,$url){
$api = json_decode(file_get_contents("https://topapi.ir/instagram/?apikey=$key&url=$url"));
return $api;
}
/* $insp = instgramprofile("key","link");  = ارسال اطلاعات به فانکشن
  مثال : $insp = instgramprofile($keyapi,"https://www.instagram.com/alirezax5/");
*/
/* دریافت اطلاعات پست ایسنتاگرام */
function instgrampost($key,$url){
$api = json_decode(file_get_contents("https://topapi.ir/instagram/post.php?apikey=$key&url=$url"));
return $api;
}
/* ارسال اطلاعات :  $insp = instgrampost("key","link");
مثال : $insp = instgrampost($keyapi,"https://instagram.com/p/BRLy0raDPOs"); 
 * */
/*فیلتر عکس */
function filterphoto($key,$file,$filter,$photo){
file_put_contents("$file",file_get_contents("http://topapi.ir/filterphoto/index.php?filter=$filter&photo=$photo&apikey=$key"));
}
/* filterphoto($keyapi,"adress file","filter","url photo"); 
 *  مثال : filterphoto($keyapi,"1.png",aqua,"http://topapi.ir/filterphoto/photo_2017-09-21_18-07-37.jpg"); 
 * شما باید مسیر url.ir/1.png رو در خروجی نمایش بدید
فیلتر ها : aqua,boost,bubbles,colorise,cool,fuzzy,gray,light,old,old2,old3,sepia)
 */
/*اطلاعات کانال باهم*/
function bahamchannel($key,$url){
$api = json_decode(file_get_contents("http://topapi.ir/baham/index.php?url=$url&apikey=$key"));
return $api;
}
/* ارسال اطلاعات : $bahamchannel= bahamchannel("key","link");
مثال : $bahamchannel= bahamchannel("$keyapi","http://ba-ham.com/ch/tarsangiz");
 */
/*اطلاعات صفحه ویسگون*/
function wisgoon($key,$url){
$api = json_decode(file_get_contents("http://topapi.ir/wisgoon/index.php?url=$url&apikey=$key"));
return $api;
}
/* ارسال اطلاعات : $wisgoon= wisgoon("key","link");
 مثال : $wisgoon = wisgoon("$keyapi","http://wisgoon.com/x5agha/");
 */
/*دریافت 10 پست جدید دیسلاو موزیک*/
function mydlovemusic($key){
$api = json_decode(file_get_contents("http://topapi.ir/mydlovemusic.org/index.php?apikey=$key"));
return $api;
}
/* ارسال اطلاعات : $mydlovemusicn= mydlovemusic("key");
 مثال : $mydlovemusic = mydlovemusic("$keyapi");
 */
/*دریافت اطلاعات  پست  دیسلاو موزیک*/
function mydlovemusicpost($key,$url){
$api = json_decode(file_get_contents("http://topapi.ir/mydlovemusic.org/dl.php?apikey=$key&url=$url"));
return $api;
}
/* ارسال اطلاعات : $mydlovemusicpost= mydlovemusicpost("key","link");
 مثال : $mydlovemusicpost = mydlovemusicpost("$keyapi","http://mydlovemusic.org/?p=16612");
 */
/*دریافت عکس از دسته بندی ویسگون*/
function categorywisgoon($key,$id){
$api = json_decode(file_get_contents("http://topapi.ir/wisgoon/category.php?apikey=$key&id=$id"));
return $api;
}
/* ارسال اطلاعات : $categorywisgoon = categorywisgoon("key","idcat");
 مثال : $categorywisgoon = categorywisgoon("$keyapi","10");
 */
/*دریافت و جستجو پست در براتو*/
function barato($key,$q,$page){
if ($q != null and $page !=null){
$api = json_decode(file_get_contents("http://topapi.ir/barato/index.php?&apikey=$key&q=$q&page=$page"));

}elseif ($q != null){
$api = json_decode(file_get_contents("http://topapi.ir/barato/index.php?&apikey=$key&q=$q"));

}elseif ($page != null){
$api = json_decode(file_get_contents("http://topapi.ir/barato/index.php?&apikey=$key&page=$page"));

}else{
$api = json_decode(file_get_contents("http://topapi.ir/barato/index.php?&apikey=$key"));
}
return $api;
}
/* ارسال اطلاعات : $barato = barato("key","text","page"); or $barato = barato("key","text"); or  $barato = barato("key");
 مثال : $barato = barato("$keyapi","telegram","2"); or $barato = barato("$keyapi","telegram"); or $barato = barato("$keyapi");
 */

/*دانلود  پست در براتو*/
function baratodl($key,$link){
$api = json_decode(file_get_contents("http://topapi.ir/barato/dl.php?&apikey=$key&post=$link"));
return $api;
}
/* ارسال اطلاعات : $baratodl = baratodl("key","link");
 مثال : $baratodl = baratodl("$keyapi","http://barato.ir/dubsmash/");
 */
/*جستجو در آپارات*/
function aparat($key,$q,$page){
if ($q != null and $page !=null){
$api = json_decode(file_get_contents("http://topapi.ir/aparat/search.php?apikey=$key&q=$q&page=$page"));

}elseif ($q != null){
$api = json_decode(file_get_contents("http://topapi.ir/aparat/search.php?apikey=$key&q=$q"));

}else{
$api = null;
}
return $api;
}
/* ارسال اطلاعات : $aparat = aparat("key","text"); or  $aparat = aparat("key","text","page");
 مثال : $aparatl = aparat("$keyapi","roonx"); or $aparatl = aparat("$keyapi","roonx","2");
  */
/*اطلاعات پست آپارات*/
function aparatinfo($key,$link){
	$api = json_decode(file_get_contents("http://topapi.ir/aparat/infopost.php?&apikey=$key&url=$link"));
	return $api;
}
/* ارسال اطلاعات : $aparatinfo = aparatinfo("key","link");
 مثال : $aparatinfo = aparatinfo("$keyapi","http://www.aparat.com/v/rU1kW");
 */

/*جستجو در نکس وان*/
function nexonemusic($key,$q,$page){
	if ($q != null and $page !=null){
		$api = json_decode(file_get_contents("http://topapi.ir/nex1music/?apikey=$key&q=$q&page=$page"));

	}elseif ($q != null){
		$api = json_decode(file_get_contents("http://topapi.ir/nex1music/?apikey=$key&q=$q"));

	}else{
		$api = null;
	}
	return $api;
}
/* ارسال اطلاعات : $nexonemusic = nexonemusic("key","text"); or  $nexonemusic = nexonemusic("key","text","page");
 مثال : $nexonemusic = nexonemusic("$keyapi","sasan"); or $nexonemusic = nexonemusic("$keyapi","sasan","2");
 */
/*اطلاعات پست نکس وان موزیک*/
function nexonemusicdl($key,$link){
	$api = json_decode(file_get_contents("http://topapi.ir/nex1music/dl.php?&apikey=$key&url=$link"));
	return $api;
}
/* ارسال اطلاعات : $nexonemusicdl = nexonemusicdl("key","link");
 مثال : $nexonemusicdl= nexonemusicdl("$keyapi","http://nex1music.ir/post/36664/");
 */
/*دریافت سایز فایل*/
function sizefile($key,$link){
	$api = json_decode(file_get_contents("http://topapi.ir/file/filesize.php?&apikey=$key&url=$link"));
	return $api;
}
/* ارسال اطلاعات : $sizefile = sizefile("key","link");
 مثال : $sizefile = sizefile("$keyapi","https://hw6.asset.aparat.com/aparat-video/25328d5567b330302144da324b8ae6268266020-720p__54192.mp4");
 */
/*دریافت پسئوند فایل*/
function fileext($key,$link){
	$api = json_decode(file_get_contents("http://topapi.ir/file/fileext.php?&apikey=$key&url=$link"));
	return $api;
}
/* ارسال اطلاعات : $fileext = fileext("key","link");
 مثال : $fileext = fileext("$keyapi","https://hw6.asset.aparat.com/aparat-video/25328d5567b330302144da324b8ae6268266020-720p__54192.mp4");
 */
/*دریافت پسئوند فایل*/
function falhafez($key){
	$api = json_decode(file_get_contents("http://topapi.ir/falhafez/index.php?apikey=$key"));
	return $api;
}
/* ارسال اطلاعات : $falhafez = falhafez("key");
 مثال : $falhafez = falhafez("$keyapi");
 */
/*دریافت اطلاعات کانال تلگرام*/
function channeltel($key,$link){
	$api = json_decode(file_get_contents("http://topapi.ir/telegram/infopage.php?apikey=$key&url=$link"));
	return $api;
}
/* ارسال اطلاعات : $channeltel = channeltel("key","link);
 مثال : $channeltel = channeltel("$keyapi","https://t.me/alireza_x5");
 */
/*مترجم yandex*/
function yandex($key,$lang,$text){
	$api = json_decode(file_get_contents("http://topapi.ir/translate/yandex.php?apikey=$key&lang=$lang&text=$text"));
	return $api;
}
/* ارسال اطلاعات : $yandex = yandex("key","lang","text");
 مثال : $yandex = yandex("$keyapi","fa-en","سلام");
 */
/*مترجم google*/
function google($key,$lang,$langto,$text){
	$api = json_decode(file_get_contents("http://topapi.ir/translate/google.php?apikey=$key&lang=$lang&langto=$langto&text=$text"));
	return $api;
}
/* ارسال اطلاعات : $google = google("key","lang","langto","text");
 مثال : $google = google("$keyapi","fa","en","سلام");
 */
/*اوقات شرعی*/
function owghat($key,$month,$day,$longitude,$latitude,$showseconds,$lan){
	$api = json_decode(file_get_contents("http://topapi.ir/owghat/?apikey=$key&month=$month&day=$longitude&longitude=$latitude&latitude=$latitude&showseconds=$showseconds&lan=$lan"));
	return $api;
}
/* ارسال اطلاعات : $owghat = owghat("key","month","day","longitude","latitude","$showseconds","$lan");
 مثال : $owghat = owghat("$keyapi","07","11","59.57","36.27","0","0");
 */
/*تغییر فرمت*/
function fatoen($key,$lan,$number){
	$api = json_decode(file_get_contents("https://topapi.ir/fa-en/?apikey=$key&lan=$lan&number=$number"));
	return $api;
}
/* ارسال اطلاعات : $fatoen = fatoen("key","lang","number");
 مثال : $fatoen= fatoen("$keyapi","en","۹۶");
 */
/*تاریخ و ساعت*/
function timeanddate($key,$timezone){
	$api = json_decode(file_get_contents("https://topapi.ir/date-time/?apikey=$key&timezone=$timezone"));
	return $api;
}
/* ارسال اطلاعات : $timeanddate = timeanddate("key","timezone");
 مثال : $timeanddate = timeanddate("$keyapi","Asia/Tehran");
 */
/*تبدیل ساعت به یونیکس*/
function timetounix($key,$time){
	$api = json_decode(file_get_contents("http://topapi.ir/unix/?apikey=$key&time=$time"));
	return $api;
}
/* ارسال اطلاعات : $timetounix = timetounix("key","time");
 مثال : $timetounix = timetounix("$keyapi","1:30");
 */
/*جمع و تفریق ساعت*/
function subsum($key,$time,$time2){
	$api = json_decode(file_get_contents("https://topapi.ir/sub-sum/?apikey=$key&time=$time&num=$time2"));
	return $api;
}
/* ارسال اطلاعات : $subsum = subsum("key","time","time2");
 مثال : $subsum = subsum("$keyapi","7:30","5");
 */
/*اطلاعات تاریخ تولد*/
function Agecalculator($key,$date){
	$api = json_decode(file_get_contents("https://topapi.ir/Age-calculator/?apikey=$key&birthdate=$date"));
	return $api;
}
/* ارسال اطلاعات : $Agecalculator = Agecalculator("key","date");
 مثال : $Agecalculator = Agecalculator("$keyapi","1396/01/01");
 */
/*دانلود از کافه بازار*/
function cafebazaardl($key,$packagename){
	$api = json_decode(file_get_contents("http://topapi.ir/cafebazaar/dl.php?apikey=$key&packagename=$packagename"));
	return $api;
}
/* ارسال اطلاعات : $cafebazaardl = cafebazaardl("key","packagename");
 مثال : $cafebazaardl = cafebazaardl("$keyapi","com.wisgoon.android");
 */
/*جستجو در کافه بازار*/
function cafebazaarse($key,$text){
	$api = json_decode(file_get_contents("http://topapi.ir/cafebazaar/search.php?apikey=$key&q=$text"));
	return $api;
}
/* ارسال اطلاعات : $cafebazaarse = cafebazaarse("key","text");
 مثال : $cafebazaarse = cafebazaarse("$keyapi","تلگرام");
 */
/*استخاره با قرآن*/
function estekhareh($key){
	$api = json_decode(file_get_contents("http://topapi.ir/estekhareh/index.php?apikey=$key"));
	return $api;
}
/* ارسال اطلاعات : $estekhareh = estekhareh("key");
 مثال : $estekhareh = estekhareh("$keyapi");
 */
/*گیف ساز*/
function creatgif($key,$text,$color,$size,$rl,$ud,$ro,$pic,$speed,$font,$file){
$api = file_put_contents("$file",file_get_contents("https://topapi.ir/gif/index.php?apikey=$key&text=$text&color=$color&size=$size&RL=$rl&UD=$ud&RO=$ro&pic=$pic&speed=$speed&font=$font"));
}
/* ارسال اطلاعات : $creatgif = creatgif("key","text","color","size","right(+) left(-)","up(-) down(+)","Rotation","photo","spped","font","adress file");
 مثال : $creatgif = creatgif("$keyapi","roonx","red","60","+1","-1","0","20","30","yekanb","newfile.gif");
 */
/*کم کردن حجم عکس*/
function photosize($key,$url,$qu,$file){
	$api = file_put_contents("$file",file_get_contents("http://topapi.ir/file/photosize.php?apikey=$key&url=$url&qu=$qu"));
}
/* ارسال اطلاعات : $photosize = photosize("key","url pic","Quality","adress file");
 مثال : $photosize = photosize("$keyapi","http://topapi.ir/falhafez/image3/115.jpg","80","photosize.png");
 */
/*تغییر اندازه عکس*/
function resizechange($key,$url,$height,$Width,$file){
	$api = file_put_contents("$file",file_get_contents("http://topapi.ir/file/resizechange.php?apikey=$key&url=$url&height=$height&Width=$Width"));
}
/* ارسال اطلاعات : $resizechange = resizechange("key","url pic","height","Width","adress file");
 مثال : $resizechange = resizechange("$keyapi","http://topapi.ir/falhafez/image3/115.jpg","200","500","resizechange.png");
 */
/*سکن فایل*/
function scannerfile($key,$file){
	$api = json_decode(file_get_contents("http://topapi.ir/virus/index.php?apikey=$key&url=$file"));
	return $api;
}
/* ارسال اطلاعات : $scannerfile = scannerfile("key","url file");
 مثال : $scannerfile = scannerfile("$keyapi","http://topapi.ir/falhafez/image/1.jpg");
 */
/*دریافت نتیجه  اسکن*/
function reportscannerfile($key,$id){
	$api = json_decode(file_get_contents("http://topapi.ir/virus/report.php?apikey=$key&scanid=$id"));
	return $api;
}
/* ارسال اطلاعات : $reportscannerfile= reportscannerfile("key","scanid");
 مثال : $reportscannerfile = reportscannerfile("$keyapi","039f13f50101635e661a4722b437440577610d6f8ac2123bcf4ff83925d9edad-1507662614");
 */
?>