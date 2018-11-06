#!/bin/bash
<?php

#Variable declaration
$time = date("l");
$path = "/home/john/Work/Password_Database";
$mon = fopen("$path/Files/Monday_pwd","r") or die("Unable to open file!\n");
$tue = fopen("$path/Files/Tuesday_pwd","r") or die("Unable to open file!\n");
$wed = fopen("$path/Files/Wednesday_pwd","r") or die("Unable to open file!\n");
$thu = fopen("$path/Files/Thursday_pwd","r") or die("Unable to open file!\n");
$fri = fopen("$path/Files/Friday_pwd","r") or die("Unable to open file!\n");
$sat = fopen("$path/Files/Saturday_pwd","r") or die("Unable to open file!\n");
$sun = fopen("$path/Files/Sunday_pwd","r") or die("Unable to open file!\n");
#End variable declaration

#Script
if ($time == "Monday"){
	echo fread($mon,filesize("$path/Files/Monday_pwd"));
	fclose($mon);
}
elseif ($time == "Tuesday"){
        echo fread($tue,filesize("$path/Files/Tuesday_pwd"));
        fclose($tue);
}
elseif ($time == "Wednesday"){
	echo fread($wed,filesize("$path/Files/Wednesday_pwd"));
	fclose($wed);
}
elseif ($time == "Thursday"){
	echo fread($thu,filesize("$path/Files/Thursday_pwd"));
	fclose($thu);
}
elseif ($time == "Friday"){
	echo fread($fri,filesize("$path/Files/Friday_pwd"));
	fclose($fri);
}
elseif ($time == "Saturday"){
	echo fread($sat,filesize("$path/Files/Saturday_pwd"));
	fclose($sat);
}
elseif ($time == "Sunday"){
	echo fread($sun,filesize("$path/Files/Sunday_pwd"));
	fclose($sun);
}
else{
	echo "Error to run script, please check files pwd or day settings";
}
#End script
?>
