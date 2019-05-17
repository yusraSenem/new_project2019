<?php

if(isset($_POST["p_gun"])){
	 $pers_veri=[

  $ad=strip_tags(trim($_POST["p_ad"])),
  $soyad=strip_tags(trim($_POST["p_soyad"])),
  $gsm=strip_tags(trim($_POST["gsmp"])),
  $eposta=strip_tags(trim($_POST["p_email"])),
  $sifre=strip_tags(trim($_POST["p_sifre"])),
  $bolum=strip_tags(trim($_POST["bolum_k"])),
  $unvan=strip_tags(trim($_POST["p_unvan"])),
  $upd=$_POST["personel_g"]
  
];



	require("vt_baglanti.php");
	$sorgu=$db->prepare("UPDATE personeller SET p_ad=?, p_soyad=?, p_gsm=?, p_email=?, sifre=?, bolum_kod=?, unvan=? WHERE p_id=?" );
	$guncelle=$sorgu->execute($pers_veri);
	if($guncelle){

		echo "başarıyla güncellendi.";

	}
	else{
		echo "sorguda hata var.";
	}





}
else{
	echo "veriler gelmedi";
}








?>