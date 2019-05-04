<?php
$vt_username="root";
$vt_password="";
$vt_server="localhost";


try{

$db = new PDO("mysql:host=localhost; dbname=level_up;charset=utf8",$vt_username, $vt_password);


}
catch (Exception $e){
	print "bağlantı hatası:".$e->getMessage()."<br/>";
	die();
}

?>