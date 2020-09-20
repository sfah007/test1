<?php

ob_start();
$MROAN = "1261726970:AAFGxiqC1i2t3sj4BqGETlgAgyUiSs-JChM";
define('API_KEY',$MROAN);
echo file_get_contents("https://api.telegram.org/bot$MROAN/setwebhook?url=".$_SERVER['SERVER_NAME']."".$_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$php88 = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$php88";
$php88 = file_get_contents($url);
return json_decode($php88);}
#====================================================================================================================================================================================================================================================================================#

#By@mroan8
#ch@php88
#ملف مقدم من قناتي لا تخمط وتصير فرخ ماشي #
#====================================================================================================================================================================================================================================================================================#

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message = $update->message;
$usernamek= $message->from->username;
$message_id2 = $update->callback_query->message->message_id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$Name = $update->callback_query->from->first_name;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$useree = $update->callback_query->message->chat->id;
$username = $message->from->username;
$fn = $message->from->first_name;
$user_id = $message->from->id;
$to =  file_get_contents("webhook/$from_id/tokens.txt");
$url =file_get_contents("webhook/$from_id/url.txt");
mkdir("webhook");
$SR=file_get_contents("https://api.telegram.org/bot$text/getwebhookinfo");
$get = file_get_contents("https://api.telegram.org/bot$text/getme"); 
$mr= json_decode($get);
$mt = $mr->result;
$username = $mt->username;
$user = $mt->first_name;
$id = $mt->id;
$ho=json_decode($SR);
$gf=$ho->result;
$urlo=$gf->url;
$admin = "175279237";
$MROAN = file_get_contents("MROAN.txt");
$MROAN0 = file_get_contents("MROAN0.txt");
$MROAN1= file_get_contents("MROAN1.txt");
$MROAN5 = file_get_contents("MROAN2.txt");
$MROAN6 = file_get_contents("MROAN3.txt");
$MROAN20 = json_decode(file_get_contents('php://input'));
$MROAN18 = $update->message;
$MROAN13 = $MROAN18->chat->id;
$MROAN17 = $MROAN18->text;
$meme = $MROAN20->callback_query->data;
$MROAN12 = $MROAN20->callback_query->message->chat->id;
$MROAN14 =  $MROAN20->callback_query->message->message_id;
$MROAN15 = $MROAN18->from->first_name;
$MROAN16 = $MROAN18->from->username;
$MROAN11 = $MROAN18->from->id;
$MROAN2 = explode("\n",file_get_contents("MROAN4.txt"));
$MROAN3 = count($MROAN2)-1;
if ($MROAN18 && !in_array($MROAN11, $MROAN2)) {
    file_put_contents("MROAN4.txt", $MROAN11."\n",FILE_APPEND);
  }
$MROAN9 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MROAN0&user_id=".$MROAN11);
$MROAN10 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$MROAN1&user_id=".$MROAN11);
if($MROAN18 && (strpos($MROAN9,'"status":"left"') or strpos($MROAN9,'"Bad Request: USER_ID_INVALID"') or strpos($MROAN9,'"status":"kicked"') or strpos($MROAN10,'"status":"left"') or strpos($MROAN10,'"Bad Request: USER_ID_INVALID"') or strpos($MROAN10,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$MROAN13,
'text'=>'- ▫️ عذراً عزيزي  ، 🔰
▪️ يجب عليك الإشتراك في قناة المطور أولاً ⚜️؛

- اشترك ثم ارسل { /start }📛!

'.$MROAN0.'
'.$MROAN1,
]);return false;}
if($MROAN17 == "/admin" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>"مرحبآ بك ،  [$fn](tg://user?id=$chat_id)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
'reply_to_message_id'=>$message->message_id,
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"MROAN0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"MROAN2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"MROAN4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"MROAN"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"MROAN5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"MROAN6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"MROAN7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"MROAN"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"MROAN9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"MROAN10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"MROAN"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"MROAN11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"MROAN12"]],
   ] 
   ])
]);
}
if($meme == "MROAN" ){
bot('EditMessageText',[
'chat_id'=>$MROAN12,
'message_id'=>$MROAN14,
"text"=>"  • مرحبا بك ، [$Name](tg://user?id=$chat_id2)
- هذه لوحة التحكم الخاصة بك ، 🔰
- يمكنك التحكم بجميع اوامر البوت من هنا ، 🐬
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'- أوامر الإشتراك الإجباري الأول ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• وضع قناة ، 🌚🤞🏻' ,'callback_data'=>"MROAN0"],['text'=>'• حذف قناة ، 🌚🤙🏻' ,'callback_data'=>"delete11"]],
[['text'=>'- أوامر الإشتراك الإجباري الثاني ، 📢' ,'callback_data'=>"MROAN"]],
[['text'=>'• وضع قناة ، 🌝🤞🏻' ,'callback_data'=>"MROAN2"],['text'=>'• حذف قناة ، 🌝🤙🏻' ,'callback_data'=>"delete22"]],
[['text'=>'- عرض قنوات الإشتراك ، 📛' ,'callback_data'=>"MROAN4"]],
[['text'=>'- أوامر الإذاعه ، 🗣' ,'callback_data'=>"MROAN"]],
[['text'=>'• رسالة توجيه ، ☝️🏻💚' ,'callback_data'=>"MROAN5"],['text'=>'• رسالة نصية ، ☝️🏻💛' ,'callback_data'=>"MROAN6"]],
[['text'=>'- عدد المشتركين ، 🐳' ,'callback_data'=>"MROAN7"]],
[['text'=>'- التنبيه عند دخول أحد للبوت ، ⚠️' ,'callback_data'=>"MROAN"]],
[['text'=>'• تفعيل التنبيه ، ✅' ,'callback_data'=>"MROAN9"],['text'=>'• تعطيل التنبيه ، ❎' ,'callback_data'=>"MROAN10"]],
[['text'=>'- توجيه رسائل من الأعضاء ، 🔁' ,'callback_data'=>"MROAN"]],
[['text'=>'• تفعيل التوجيه ، ✅' ,'callback_data'=>"MROAN11"],['text'=>'• تعطيل التوجيه ، ❎' ,'callback_data'=>"MROAN12"]],
   ] 
   ])
]);
unlink("MROAN.txt");
}
if($meme == "MROAN0"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الأولى ، 📢
#مثال :
▪️@php88',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN0");
}
if($MROAN17 and $MROAN == "MROAN0" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN0.txt","$MROAN17");
unlink("MROAN.txt");
}
if($meme == "delete11"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫
',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'MROAN'],
['text'=>'• نعم ، ✅','callback_data'=>'MROAN1'],
]    
]])
]);    
}
if($meme == "MROAN1"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- لقد تم حذف القناة الاولى من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN0.txt");
}
if($meme == "MROAN2"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- حسناً ، الآن قم بإرسال معرف قناتك ليتم وضعه في خدمة الإشتراك الإجباري للقناة الثانية ، 📢
#مثال :
▪️@php88',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN1");
}
if($MROAN17 and $MROAN == "MROAN1" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- لقد تم وضع القناة بنجاح ، 📣
- قم برفع البوت أدمن داخل القناة ، 🗞',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN1.txt","$MROAN17");
unlink("MROAN.txt");
}
if($meme == "delete22"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- حسناً هل أنت متأكد من أنك تريد حذف القناة من الإشتراك الإجباري ، 🚫',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>'• لا ، ❎', 'callback_data'=>'MROAN'],
['text'=>'• نعم ، ✅','callback_data'=>'MROAN3'],
]    
]])
]);    
}
if($meme == "MROAN3"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- لقد تم حذف القناة الثانية من الإشتراك الإجباري بنجاح ، 📮',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN1.txt");
}
if($meme == "MROAN4"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"- هذه قائمة القنوات الأشتراك الاجباري ، 🔰
- القناة الاولى ،  $MROAN0 📢 
- القناة الثانية ،  $MROAN1 📣
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
}
if($meme == "MROAN5"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"~ أرسل رسالتك وسيتم توجيهها لـ [ $MROAN3 ] مشترك ، 🐙 ",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN2");
}
if($MROAN18 and $MROAN == "MROAN2" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- تم التوجيه بنجاح 🦕',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
for($i=0;$i<count($MROAN2); $i++){
bot('forwardMessage', [
'chat_id'=>$MROAN2[$i],
'from_chat_id'=>$MROAN11,
'message_id'=>$MROAN18->message_id
]);
unlink("MROAN.txt");
}
}
if($meme == "MROAN6"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"~ أرسل رسالتك وسيتم إرسالها لـ [ $MROAN3 ] مشترك ، 🐠",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN.txt","MROAN3");
}
if($MROAN17 and $MROAN == "MROAN3" and $MROAN11 == $admin){
bot("sendmessage",[
"chat_id"=>$MROAN13,
"text"=>'- تم النشر بنجاح 🐋',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
for($i=0;$i<count($MROAN2); $i++){
bot('sendMessage', [
'chat_id'=>$MROAN2[$i],
'text'=>$MROAN17
]);
unlink("MROAN.txt");
}
}
if($meme == "MROAN7"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>"- عدد مشتركين البوت  [ $MROAN3 ] مشترك ، 🦑",
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
}
if($meme == "MROAN9"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- تم تفعيل دخول المشتركين ، 🐎',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN2.txt","MROAN");
}
if($MROAN17 == "/start" and $MROAN5 == "MROAN" and $MROAN11 != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"- عضو جديد قام بالدخول الى البوت ، 🛡
- الاسم ، [$MROAN15](tg://user?id=$chat_id) ، 🦕
- المعرف ، [@$MROAN16](tg://user?id=$chat_id) ، 🐢
- الايدي ، [$MROAN11](tg://user?id=$chat_id) ، 🐝 
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
~  عدد المشتركين ، { $MROAN3 } ، 🦑 ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($meme == "MROAN10"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- تم تعطيل دخول المشتركين ، 🦍 ',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN2.txt");
}
if($meme == "MROAN11"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- تم تفعيل توجيه الرسائل ، 🦇',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
file_put_contents("MROAN3.txt","MROAN");
}
if($MROAN18 and $MROAN6 == "MROAN" and $MROAN11 != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$MROAN11,
'message_id'=>$MROAN18->message_id
]);
}
if($MROAN18 and $MROAN6 == "MROAN" and $MROAN11 == $admin){
bot('sendMessage',[
'chat_id'=>$MROAN18->reply_to_message->forward_from->id,
    'text'=>$MROAN17,
    ]);
}
if($meme == "MROAN12"){
bot('EditMessageText',[
    'chat_id'=>$MROAN12,
    'message_id'=>$MROAN14,
'text'=>'- تم تعطيل توجيه الرسائل ، 🐌',
 'reply_markup'=>json_encode([ 
      'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MROAN"]],
]])
]);
unlink("MROAN.txt");
unlink("MROAN3.txt");
}

if($text ==  '/start' ){
mkdir("webhook/$user_id");
unlink("webhook/$user_id/make.txt");
unlink("webhook/$from_id/urlp.txt");
unlink("webhook/$from_id/tokens.txt");
unlink("webhook/$from_id/ifno.txt");
unlink("webhook/$from_id/url.txt");
unlink("webhook/$from_id/deates.txt");
bot('sendMessage',[ 
'chat_id'=>$chat_id,
 'text'=>" • اهلآ بك ،  [$fn](tg://user?id=$chat_id)
`• مرحبا بك في بوت 💭 عمل ويب هوك وحذف 🌙 ويب هوك بلأضافه الى 📃 استخراج معلومات التوكن ☑️ •`
*Hi. Thank You for using me you can make web hook and 
delete web hook and can you find info  about  token bot*
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" -  عمل ويب هوك 🔧", 'callback_data'=>'make'],['text'=>" -  حذف ويب هوك 💧", 'callback_data'=>'delet']],
[['text'=>"- معلومات التوكن📝", 'callback_data'=>'ifno']],
[['text'=>"-معلومات اكثر💡", 'callback_data'=>'bev']],
[['text'=>"-اضغط هنا وتابع جديدنا 📌",'url'=>'T.me/php88']],
]
])]);
}

if($data=="make"){
file_put_contents("webhook/$useree/make.txt","ok");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
`حسنا عزيزي 🔬 الان قم بارسال التوكن`
*• Now send token 💯*
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"🔙 الرجوع ",'callback_data'=>'hom']],]])]);}


$Makex =file_get_contents("webhook/$from_id/make.txt");
if($Makex=="ok"){
if ($text and$mr->ok !="true" ){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"التوكن غير صالح",
  ]);
 }else{
file_put_contents("webhook/$from_id/urlp.txt","ok");
file_put_contents("webhook/$from_id/make.txt","no");
file_put_contents("webhook/$from_id/tokens.txt",$text);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>" حسنا عزيزي 🔬 الان قم بارسال 🔖 رابط الملف 🕸",
]);
}}


$xurl =file_get_contents("webhook/$from_id/urlp.txt");
if($xurl=="ok"){
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$text)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"",
  ]);
 }else{
file_put_contents("webhook/$from_id/oooo.txt","ok");
file_put_contents("webhook/$from_id/urlp.txt","no");
file_put_contents("webhook/$from_id/url.txt",$text);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"• انتظر قليلا ⚡️ جار العمل ⚙ • ",
]);
bot('SendMessage',[
 'chat_id'=>$chat_id,
    'text'=>"• هل انت متاكد 💧 من عمل الويب هوك 🍥 •
    • توكن البوت 📢 •
   ` $to`
• رابط الملف 🖱 •
    ***$text***  
• الان ارسل امر ⚡️ •
    /setwebhook",
  'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"🔙 الرجوع ",'callback_data'=>'hom']],]])]); }
}



$seat=file_get_contents("webhook/$from_id/oooo.txt");
if($seat=="ok"){
if($text == "/setwebhook"){
file_get_contents("https://api.telegram.org/bot$to/setwebhook?url=$url");
unlink("webhook/$from_id/tokens.txt");
unlink("webhook/$from_id/url.txt");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"• انتظر قليلا 📡 من فضلك 🍥 •",
]);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
'text'=>"• تم عمل الويب ⚡️ هوك بنجاح !! 🗒 •",
]);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
'text'=>"`• مرحبا بك في بوت 💭 عمل ويب هوك وحذف 🌙 ويب هوك بلأضافه الى 📃 استخراج معلومات التوكن ☑️ •`
*Hi. Thank You for using me you can make web hook and 
delete web hook and can you find info  about  token bot*
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
   'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" -  عمل ويب هوك 🔧", 'callback_data'=>'make'],['text'=>" -  حذف ويب هوك 💧", 'callback_data'=>'delet']],
[['text'=>"- معلومات التوكن📝", 'callback_data'=>'ifno']],
[['text'=>"-معلومات اكثر💡", 'callback_data'=>'bev']],
[['text'=>"-اضغط هنا وتابع جديدنا 📌",'url'=>'T.me/php88']],
]
])]);}}

if($data=="delet"){
file_put_contents("webhook/$useree/deates.txt","ok");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
`حسنا عزيزي 🔬 الان قم بارسال التوكن`
*• Now send token 💯*
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"🔙 الرجوع ",'callback_data'=>'hom']],]])]);
unlink("webhook/$from_id/deates.txt");
}
$dddd =file_get_contents("webhook/$from_id/deates.txt");
if($dddd=="ok"){
if ($text and$mr->ok !="true" ){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"التوكن غير صالح",
  ]);
 }else{
file_get_contents("https://api.telegram.org/bot$text/deletewebhook");
unlink("webhook/$from_id/deates.txt");
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
• تم حذف الويب ⚡️ هوك بنجاح !! 🗒 •
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"🔙 الرجوع ",'callback_data'=>'hom']],]])]);}}

if($data=="ifno"){
file_put_contents("webhook/$useree/ifno.txt","ok");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
`حسنا عزيزي 🔬 الان قم بارسال التوكن`
*• Now send token 💯*
",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"🔙 الرجوع ",'callback_data'=>'hom']],]])]);}

$mmmm =file_get_contents("webhook/$from_id/ifno.txt");
if($mmmm=="ok"){
if ($text and$mr->ok !="true" ){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"التوكن غير صالح",
  ]);
 }else{
file_put_contents("webhook/$from_id/ifno.txt","no");
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
معلومات التوكن 📈
- الاسم البوت ، [$user](https://t.me/$username) ، 🍬⚡
- المعرف البوت ، [@$username](https://t.me/$username) ، 🍀
- الايدي البوت، [$id ](https://t.me/$username) ، 🐬
***$urlo***
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"🔙 الرجوع ",'callback_data'=>'hom']],]])]);}}

if($data=="hom"){
unlink("webhook/$user_id/make.txt");
unlink("webhook/$from_id/urlp.txt");
unlink("webhook/$from_id/tokens.txt");
unlink("webhook/$from_id/ifno.txt");
unlink("webhook/$from_id/url.txt");
unlink("webhook/$from_id/deates.txt");
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
'text'=>"`• مرحبا بك في بوت 💭 عمل ويب هوك وحذف 🌙 ويب هوك بلأضافه الى 📃 استخراج معلومات التوكن ☑️ •`
*Hi. Thank You for using me you can make web hook and 
delete web hook and can you find info  about  token bot*
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
",
   'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>" -  عمل ويب هوك 🔧", 'callback_data'=>'make'],['text'=>" -  حذف ويب هوك 💧", 'callback_data'=>'delet']],
[['text'=>"- معلومات التوكن📝", 'callback_data'=>'ifno']],
[['text'=>"-معلومات اكثر💡", 'callback_data'=>'bev']],
[['text'=>"-اضغط هنا وتابع جديدنا 📌",'url'=>'T.me/php88']],
]
])]);}
$api_time = file_get_contents("https://bnmbnm66.000webhostapp.com/MROANAPI/tiem.php"); 
$MR= json_decode($api_time);
$time = $MR->time;
$year= $MR->year;
$month= $MR->month;
$seconds=$MR->seconds;
$hours=$MR->hours;
$minutest=$MR->minutest;
$day=$MR->day;
$date=$MR->date;
if($data == "bev"){bot('answerCallbackQuery',['callback_query_id'=>$update->callback_query->id,'message_id'=>$message_id,
'text'=>"
DV: ۦٰ ⱮℜᎧÂＮ☬℡³¹³
CH:@PHP88
Day:$day
Date:$date
-عدد مشتركين البوت  [ $MROAN3 ] مشترك ،
",'show_alert'=>true]);}

#====================================================================================================================================================================================================================================================================================#

#By@mroan8
#ch@php88
#خليك زلمه ونشره بدون تغير#
#ملف مقدم من قناتي لا تخمط وتصير فرخ ماشي #
#====================================================================================================================================================================================================================================================================================#


