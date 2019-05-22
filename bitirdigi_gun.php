<?php 
date_default_timezone_set('Europe/Istanbul');

function fark(){
	if($_POST){

		$pers=$_POST["pers"];
		$gor=$_POST["gor"];
		$date = new datetime();
		$simdi=$date->format('Y-m-d');
		require("vt_baglanti.php");
		$baslama=$db->query("SELECT baslama_tarihi FROM gorevler WHERE gorev_kod=$gor");
		$baslangic=$baslama->execute();
		
		echo $simdi-$baslangic;
		

	}
	else{
		echo "post edilmedi";
	}

		

}

fark();

?>