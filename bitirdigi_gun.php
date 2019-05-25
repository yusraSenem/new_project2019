<?php 

require("vt_baglanti.php");
date_default_timezone_set('Europe/Istanbul');
function fark(){
	global $db;
	if($_POST){

		$pers=$_POST["pers"];
		$gor=$_POST["gor"];
		$date = new datetime();//şu anki tarih alındı.
		$simdi=$date->format('Y-m-d');//tarih formatı belirlendi.

		$baslama=$db->prepare("SELECT baslama_tarihi FROM gorevler,personeller,personel_gorev WHERE personeller.p_id=personel_gorev.p_id AND gorevler.gorev_kod=personel_gorev.gorev_kod AND gorevler.gorev_kod= :gor AND personeller.p_id = :pers");

		$baslama->execute([":gor" => $gor,":pers" => $pers]);
		$baslangic = $baslama->fetch(PDO::FETCH_OBJ);//veri obje olarak alındı.
		
		$baslama = $date->createFromFormat('Y-m-d', $baslangic->baslama_tarihi);//tarih formatına çevrildi.
		$tarih=$baslama->format("Y-m-d");//tarih formatı ayarlandı.
		
		$simdi = strtotime($simdi);//şimdiki tarih makine diline çevrildi.
		$tarih = strtotime($tarih);//gorev başlama tarihi makine diline çevrildi.

		$interval=  ($simdi-$tarih)/86400;//personelin gorevini kaç günde bitirdiğini gösteriyor.
		
		$gercek_sure=$db->prepare("SELECT  DATEDIFF(gorevler.bitis_tarihi,gorevler.baslama_tarihi) as fark
			FROM gorevler,personeller,personel_gorev WHERE personeller.p_id=personel_gorev.p_id AND gorevler.gorev_kod=personel_gorev.gorev_kod AND gorevler.gorev_kod= :gor AND personeller.p_id = :pers");
		$gercek_sure->execute([":gor" => $gor,":pers" => $pers]);
		$gorev_fark = $gercek_sure->fetch(PDO::FETCH_OBJ);
		$gorev_fark= number_format($gorev_fark->fark);//personelin max kaç günü oldgunu gsteriyor.Number formata cvrldi.

		$gorev_bitis=$gorev_fark-$interval;//personelin kaç gün erken bitirdiğini gösterir formül
		
		$erken_bitirme_orani=($gorev_bitis/$gorev_fark)*100;//tasarruf edilen zaman oranı

		$dize=[$interval,$gorev_fark,$gorev_bitis,$erken_bitirme_orani,$gor,$pers];//veriler array e dönüştürüldü.
		 
		$herseyi_guncelle=$db->prepare("UPDATE `personel_gorev` SET `gorev_gunde_bitti`=?,`max_gorev_suresi`=?,`tasarruflu_zaman`=?,`erken_bitirme_orani`=? WHERE personel_gorev.gorev_kod= ? AND personel_gorev.p_id = ?"); 
	    $haydi=$herseyi_guncelle->execute($dize);
		 
		if($haydi){
			$silinen_gorev=$db->prepare("DELETE FROM `personel_gorev` WHERE p_id=:pers AND gorev_kod=:gor");
			$silinen_gorev->execute([":gor" => $gor,":pers" => $pers]);
			header('Location: personel_sahife.php');
		}
		else{
			echo "guncelleme başarısız.";
		}
		
		

	}
	else{
		echo "post edilmedi";
	}

		

}

fark();

?>