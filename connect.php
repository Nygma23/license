<?php 

try {

$db=new PDO("mysql:host=localhost;dbname=license_db;charset=utf8",'root','13801380mert');

} catch (PDOException $e) {													

	echo $e->getmessage();
}

 ?>