<?php

if($_POST){

	//echo "post edildi";

	if(isset($_POST["giris_eposta"])){

		$email=strip_tags(trim($_POST["giris_eposta"]));

	}
	else{
		echo "eposta requesti olmadı.";

	}
	if(isset($_POST["giris_sifre"])){

		$password=strip_tags(trim($_POST["giris_sifre"]));
	}
	else{
		echo "password requesti olmadı.";
	}

	require("vt_baglanti.php");
	//echo "veri tabanına bağlantı yapıldı.";
	$sorgu=$db->query("SELECT p_email,sifre FROM personeller WHERE p_email='".$email."' AND sifre='".$password."'")->fetch(PDO::FETCH_ASSOC);
		if ($sorgu){
			
			header('Location: yonetici_paneli.php');

		}
		else{
			echo "kullanıcı adı veya şifre başarısız.";
		}


	
}
else{
	echo "post edilmedi";
}


?>