<?php
<!-- telegram: @corup / @api_web-->
if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
$admin = '@$ADMIN';
include 'madeline.php';
$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$user = readline("UserName: @");
$start = time();
$x = 0;
$MadelineProto->messages->sendMessage(['peer' => $admin, 'message' => "▪Turbo (CORUP) Has Been Launched"]);
do{
try{
ob_start();
$MadelineProto->messages->getPeerDialogs(['peers'=> [$user]]);
echo 'No:'.$user." - ".$x." Bad in:".date('s')."\n";
$x++;
}catch(Exception $e){
$MadelineProto->account->updateUsername(['username' => $user]);
$end = time() - $start;
$MadelineProto->messages->sendMessage(['peer' => $admin, 'message' => "▪User-Taken -> @$user"]);
echo "DONE -> @$user \n";
exit;
}
ob_end_flush();
}while(true);
<!-- telegram: @corup / @api_web-->
