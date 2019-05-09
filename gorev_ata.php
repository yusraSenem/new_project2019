<?php

if(isset($_POST["gorev_ata"])){
 $pers_gorev=[
	$id=$_POST["personel"],
 	$gorev_kod=$_POST["gorev"]
 ];

	require("vt_baglanti.php");
  	$sorgu=$db->prepare("INSERT INTO personel_gorev VALUES (?,?)");
  	$ata=$sorgu->execute($pers_gorev);
  	if($ata){
  		$lastid=$db->lastInsertId();
  		echo "Atama işlemi başarılı.";

  	}
  	else{
  		echo "Atama işlemi başarısız.";
  	}
}
else{
	echo "post edilmedi";
}




?>