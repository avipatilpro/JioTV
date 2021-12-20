<?php

# © 2021 Avishkar Patil DO NOT EDIT ANYTHING TO KEEP RUNNING

# Here I Put Token which Available Publicly I Recommended Use Your Own Token Here 
# For Suppport @Avishkarpatil at Telegram or proavipatil@gmail.com



$jctBase = "cutibeau2ic";

$ssoToken = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWUiOiI0N2RlZDFmMC0wZjU2LTQ3YzctYThiYS04NmQwODVhODM3YjYiLCJ1c2VyVHlwZSI6IlJJTHBlcnNvbiIsImF1dGhMZXZlbCI6IjEwIiwiZGV2aWNlSWQiOm51bGwsImp0aSI6IjgyNWI2YWVkLTQyNmItNGVkZi04ODZlLWIxMGY5ZTNmNDQ0YSIsImlhdCI6MTYzOTk2MzQ5M30.Jfoc1rDPtfB14BaqRieH0vuFuIHynKLiBxJ8W3lF35E"; #Change This with your SSOTOKEN 
function tokformat($str)
{
$str= base64_encode(md5($str,true));
return str_replace("\n","",str_replace("\r","",str_replace("/","_",str_replace("+","-",str_replace("=","",$str)))));
}
function generateJct($st, $pxe) 
{
 global $jctBase;
 return trim(tokformat($jctBase . $st . $pxe));
}
function generatePxe() {
return time() + 6000000;
}
function generateSt() {
global $ssoToken;
return tokformat($ssoToken);
}
function generateToken() {
$st = generateSt();
$pxe = generatePxe();
$jct = generateJct($st, $pxe);
return "?jct=" . $jct . "&pxe=" . $pxe . "&st=" . $st;
}

# © 2021 Avishkar Patil DO NOT EDIT ANYTHING TO KEEP RUNNING


echo generateToken();
?>
