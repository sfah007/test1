<?php
ob_start();
define('API_KEY','1261726970:AAFGxiqC1i2t3sj4BqGETlgAgyUiSs-JChM');
/*
سوالف المزعطه و الفروخ بطلها لخاطر دينك 🖕🏼
تخمط و تعدل وتكتب كتابتي قسم بالله انشرك بكروب الفروخ 
حتلو تعدل علملف اكتب اصل الملف للباشا
 */
 /*
 قنوات البوت الرسميه 
 @REXO_TEAM + @dev_ahvaz
 */
function bot($method,$datas=[]){
$url = 'https://api.telegram.org/bot'.API_KEY.'/'.$method;
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
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text; 
$fn = $message->from->first_name;
$message_id = $update->callback_query->message->message_id;
$message_id2 = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$from_id = $update->message->from->id;
$username = $update->message->from->username;
$t =$message->chat->title;



##### السترات #####
if($text == "/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"~ اهلا بك عزيزي 🖤👌🏻 | $fn |
~ في بوت تنزيل الصور و الفديوات من الانستا، ♥️👏🏻
~ ارسل رابط الفديو او الصوره للتنزيل 🥂💚' 
~ لمتابعة تحديثات البوت ، 🌼☕' ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- قنآة ألبوت 📡️ ، 1",'url'=>"t.me/DEV_AHVAZ"],
['text'=>"- المطور 🗣️ ،",'url'=>"t.me/ARBI_DEV"]],
[['text'=>"- بوت ألتواصل 📮 ،",'url'=>"t.me/CKKKBOT"]], ]])]);
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>"
  ٭هذا دخل للبوت 🔰؛
• المعرف ؛ @$username ،
• اليوم ؛ " . date("j") . "\n" . "
",]);}
if(preg_match('/(videos)/',$text)){
    bot('sendMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>'- أنتظر قليلاً من فضلك ✔  ، ',
'reply_to_message_id'=>$message->message_id,]);}
if($text != "/start"){ 
if($text){
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>"$text",
'caption'=>"- تم التنزيل بنجاح ، ✅❕ ’ .",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"channel dev 📡",'url'=>"t.me/REXO_TEAM"]],]])]);}}

if($text != "/start"){ 
if($text){ 
    bot('sendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"$text",
'caption'=>"- تم التنزيل بنجاح ، ✅❕ ’ .",]); }  }
