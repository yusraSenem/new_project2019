<?php
require("vt_baglanti.php");

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


	if ($baglanti){
	//echo "veri tabanına bağlantı yapıldı.";
	$sorgu=mysqli_query($baglanti,"SELECT email,password FROM kullanici WHERE email='".$email."' AND password='".$password."'");
		if (mysqli_num_rows($sorgu)>0){
			$row=$sorgu->fetch_array(MYSQLI_ASSOC);
			echo "hoşgeldin"." ".$row["email"];

		}
		else{
			echo "kullanıcı adı veya şifre başarısız.";
		}
	}
	else{
	echo die(" veri tabanına bağlantı yapılmadı.");
	}


	
}
else{
	echo "post edilmedi";
}


?>