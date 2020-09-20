# ch :- @php_i # Dev :- @dev_a #

# تنشر اذكر المصدر #

<?php
if($_GET['user']){
 $_GET['user'] = trim($_GET['user'],'@');
  $dev_a = file_get_contents('http://t.me/'.$_GET['user'],null,null,0,1334);
preg_match('/property="og:description" content="(.*)">/',$dev_a,$match);
if($match[1] == ""){
echo "متاح ✔️";
}else{
echo "غير متاح ✖️";
}
}  
# ch :- @php_i # Dev :- @dev_a #
