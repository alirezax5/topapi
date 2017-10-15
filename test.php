<?php 
include 'TopApi.php';
//اسکن فایل
$scannerfile = scannerfile("$keyapi","http://topapi.ir/falhafez/image/1.jpg");
if ($scannerfile->response_code == 1){
// دریافت اسکن ای دی
$scanid = $scannerfile->scan_id;
//5 ثانیه
sleep("5");
//ارسال ریپورت
$reportscannerfile = reportscannerfile("$keyapi","$scanid");
// دریافت ریپورت
if ($reportscannerfile->response_code == "1"){
	if ($reportscannerfile->scan->Rising->detected == false){
		echo "فایل ویروس ندارد";
		
	}else{
		echo "فایل ویروسی";
	}
}else{
	echo "خطا در ریپورت فایل";
}
}else{
	echo "خطا در اسکن فایل";
}
?>