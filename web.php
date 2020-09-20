<?php

ob_start();
$API_KEY = "1261726970:AAFGxiqC1i2t3sj4BqGETlgAgyUiSs-JChM";
define("API_KEY",$API_KEY);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}
$update = json_decode(file_get_contents("php://input"));
if(isset($update->message)){
$message = $update->message;
$mid = $message->message_id;
$text = $message->text;
$chat_id = $message->chat->id;

if(strlen($text) > 4 and $text !="/start"){
if(preg_match('/([a-z])|([A-Z])/i',$text)){
$text_line = explode("\n",$text);
for($i=0;$i<count($text_line); $i++){
$check = file_get_contents("https://botathomd.xyz/chek.php?user=$text_line[$i]");
if($check == "متاح ➕"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$check - $text_line[$i]",
]);
}}}
}}
