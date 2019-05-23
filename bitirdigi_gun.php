<?php 

		require("vt_baglanti.php");
date_default_timezone_set('Europe/Istanbul');
function fark(){
	global $db;
	if($_POST){

		$pers=$_POST["pers"];
		$gor=$_POST["gor"];
		$date = new datetime();
		$simdi=$date->format('Y-m-d');

		$baslama=$db->prepare("SELECT baslama_tarihi FROM gorevler,personeller,personel_gorev WHERE personeller.p_id=personel_gorev.p_id AND gorevler.gorev_kod=personel_gorev.gorev_kod AND gorevler.gorev_kod= :gor AND personeller.p_id = :pers");

		$baslama->execute([":gor" => $gor,":pers" => $pers]);
		$baslangic = $baslama->fetch(PDO::FETCH_OBJ);
		
		$baslama = $date->createFromFormat('Y-m-d', $baslangic->baslama_tarihi);
		$tarih=$baslama->format("Y-m-d");
		
		$simdi = strtotime($simdi);
		$tarih = strtotime($tarih);

		$interval=  ($simdi-$tarih)/86400;
		echo $interval;
		
		

	}
	else{
		echo "post edilmedi";
	}

		

}

fark();

?>