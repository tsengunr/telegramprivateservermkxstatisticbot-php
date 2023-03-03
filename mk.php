<?php

function fayl($name,$txt){ $myfile = fopen($name,"w") or die("Unable to open file!"); fwrite($myfile, $txt);fclose($myfile); }

 function fy($n,$txt){ unlink($_SERVER['DOCUMENT_ROOT'].'/'.$n); fayl($n,$txt); }

require('function.php');
require('heroes.php');
Table('mk'," `last` INT(9) NOT NULL,`mes2` INT(9) NOT NULL, `mesid` INT(9) NOT NULL ");



echo $last=last("stata_mk");
$total = mysql_result(mysql_query("SELECT COUNT(*) FROM `mk` WHERE `last`='$last'"), 0);
if ($total==0){

$mm=get($last,"stata_mk");
If (stripos($mm,"STATAMK")<1){ exit; }
$mm=kesish("Ставим","STATAMK",$mm);
$m2=$mm;
$e=explode(chr(10),$mm);
$d=explode(' ',$e[0]);
$hour=substr($d[2],0,2);
$date=substr($d[1],0,2);
$newhour=$hour+6;
$newdate=$date;
If ($hour>=18){ $newhour=$newhour-24; $newdate=$newdate+1; }
If (strlen($newhour)==1){ $newhour='0'.$newhour; }
If (strlen($newdate)==1){ $newdate='0'.$newdate; }

$change=$d[0].' '.$newdate.substr($d[1],2).' '.$newhour.substr($d[2],2);
$m2=str_replace($e[0],$change,$m2);



$k1=substr($e[2],$stre=stripos($e[2],"#")+1,stripos($e[2],"_")-$stre);
$k2=kesish("boshi","_","boshi".$e[2]);
$m2=str_replace($k1,$hero[$k1],$m2);
$m2=str_replace($k2,$hero[$k2],$m2);
$m2=str_replace($k1,$hero[$k1],$m2);
$m2=str_replace($k2,$hero[$k2],$m2);

$mes2=Post($m2,"-1001715400660");




mysql_query("DELETE FROM `mk` WHERE `last` = '".($last-6)."';");
$lastmy=last("rezultat_mk");

If (hisob("mknew","`mesid`='$lastmy' ")>0){ $lastmy++; }
If (hisob("mknew","`mes2`='$mes2' ")>0){ $mes2++; }
mysql_query("INSERT INTO `mk` SET `last`='$last', `mes2`='$mes2', `mesid`='$lastmy';");


}




$tota = mysql_result(mysql_query("SELECT COUNT(*) FROM `mk` WHERE `last`>'".($last-5)."'"), 0);
if ($tota> 0) {
$req = mysql_query("SELECT * FROM `mk` WHERE `last`>'".($last-7)."' ORDER BY `id` DESC");
while ($res = mysql_fetch_assoc($req)) {
$m= get($res['last'],"stata_mk");
$m=kesish("Ставим","STATAMK",$m);
edit($res['mesid'], $m, "@rezultat_mk");
$m2=str_replace("ТБ","OV",$m);
$m2=str_replace("ТМ","UN",$m2);
$m2=str_replace("OVБ","OV+",$m2);
$m2=str_replace("UNМ","UN+",$m2);
$m2=str_replace("П1","W1",$m2);
$m2=str_replace("П2","W2",$m2);
$m2=str_replace("R", "N",$m2);
$m2=str_replace("B","<b>B</b>",$m2);
$m2=str_replace("F","<i>F</i>",$m2);
$m2=str_replace("сухарь","R5",$m2);
$m2=str_replace("ЧП","FW",$m2);



$e=explode(chr(10),$m2);
 $e[0];
$d=explode(' ',$e[0]);
$hour=substr($d[2],0,2);
$date=substr($d[1],0,2);
$newhour=$hour+6;
$newdate=$date;
If ($hour>=18){ $newhour=$newhour-24; $newdate=$newdate+1; }
If (strlen($newhour)==1){ $newhour='0'.$newhour; }
If (strlen($newdate)==1){ $newdate='0'.$newdate; }
$change=$d[0].' '.$newdate.substr($d[1],2).' '.$newhour.substr($d[2],2);
$m2=str_replace($e[0],$change,$m2);

$k1=substr($e[2],$stre=stripos($e[2],"#")+1,stripos($e[2],"_")-$stre);
$k2=kesish("boshi","_","boshi".$e[2]);
$m2=str_replace($k1,$hero[$k1],$m2);
$m2=str_replace($k2,$hero[$k2],$m2);
$m2=str_replace($k1,$hero[$k1],$m2);
$m2=str_replace($k2,$hero[$k2],$m2);

edit($res['mes2'], $m2, "-1001715400660");

}} else {
echo 'xatlar yoq';}