<?php
require("vt_baglanti.php");

if($_POST){

	echo "post edildi";

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

	echo "epostanız:".$email."sifreniz:".$password;
}
else{
	echo "post edilmedi";
}


?>