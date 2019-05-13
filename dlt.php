<?php


if(isset($_POST["p_sil"])){
	
	$idd=$_POST["personel_s"];

	require("vt_baglanti.php");
  	$sorgu_s=$db->prepare("DELETE FROM personeller WHERE p_id=$idd");
  	$sil=$sorgu_s->execute([$idd]);

  	if($sil){

  		echo "personel silindi.";

  	}
  	else{
  		echo "sorguda hata var.";
  	}
}
else{

	echo "post edilmedi.";

}


