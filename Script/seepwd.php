#!/etc/php -q
<?php

#Variable declaration
$time = date("l");
$mon = fopen("/home/john/Desktop/Password_DataBase/Files/Monday_pwd","r") or die("Unable to open file!");
$tue = fopen("/home/john/Desktop/Password_DataBase/Files/Tuesday_pwd","r") or die("Unable to open file!");
$wed = fopen("/home/john/Desktop/Password_DataBase/Files/Wednesday_pwd","r") or die("Unable to open file!");
$thu = fopen("/home/john/Desktop/Password_DataBase/Files/Thursday_pwd","r") or die("Unable to open file!");
$fri = fopen("/home/john/Desktop/Password_DataBase/Files/Friday_pwd","r") or die("Unable to open file!");
$sat = fopen("/home/john/Desktop/Password_DataBase/Files/Saturday_pwd","r") or die("Unable to open file!");
$sun = fopen("/home/john/Desktop/Password_DataBase/Files/Sunday_pwd","r") or die("Unable to open file!");
#End variable declaration

#Script
if ($time == "Monday"){
	echo fread($mon,filesize("/home/john/Desktop/Password_DataBase/Files/Monday_pwd"));
	fclose($mon);
}
elseif ($time == "Tuesday"){
        echo fread($tue,filesize("/home/john/Desktop/Password_DataBase/Files/Tuesday_pwd"));
        fclose($tue);
}
elseif ($time == "Wednesday"){
	echo fread($wed,filesize("/home/john/Desktop/Password_DataBase/Files/Wednesday_pwd"));
	fclose($wed);
}
elseif ($time == "Thursday"){
	echo fread($thu,filesize("/home/john/Desktop/Password_DataBase/Files/Thursday_pwd"));
	fclose($thu);
}
elseif ($time == "Friday"){
	echo fread($fri,filesize("/home/john/Desktop/Password_DataBase/Files/Friday_pwd"));
	fclose($fri);
}
elseif ($time == "Saturday"){
	echo fread($sat,filesize("/home/john/Desktop/Password_DataBase/Files/Saturday_pwd"));
	fclose($sat);
}
elseif ($time == "Sunday"){
	echo fread($sun,filesize("/home/john/Desktop/Password_DataBase/Files/Sunday_pwd"));
	fclose($sun);
}
else{
	echo "Error to run script, please check files pwd or day settings";
}
#End script
?>
