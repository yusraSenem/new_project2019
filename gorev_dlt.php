<?php
if(isset($_POST["g_sil"])){
	
	$kod=$_POST["gorev_s"];


	require("vt_baglanti.php");
  	$sorgu_sg=$db->prepare("DELETE FROM gorevler WHERE gorev_kod=$kod");
  	$sil=$sorgu_sg->execute([$kod]);


  	if($sil){

  		echo "görev silindi.";

  	}
  	else{

  		echo "sorguda hata var.";
  	}
}
else{

	echo "post edilmedi.";

}

 ?>
