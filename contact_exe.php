<?php 
$name=$_POST ['name'];
$email=$_POST ['email'];
$phone=$_POST ['phone'];
$message=$_POST ['message'];
$msg =
"
Име и презиме на клиент $name\n
Емаил на клиент $email\n
Телефонски број од клиент $phone\n
Порака на клиент $message
"
;
mail("online@viktoridizajn.com","Порака од $name од вебстрана",$msg);

header ("location: contact.php");