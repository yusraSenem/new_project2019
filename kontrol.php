<?php

ob_start();
session_start();

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
	$sorgu=$db->query("SELECT p_email,sifre,yetki_id FROM personeller WHERE p_email='".$email."' AND sifre='".$password."'")->fetch(PDO::FETCH_ASSOC);
		if ($sorgu){
			$_SESSION["login"] = "true";
    		$_SESSION["user"] = $email;
    		$_SESSION["pass"] = $password;
    		if($sorgu["yetki_id"]=="1"){

				header('Location: yonetici_paneli.php');

			}
			else if($sorgu["yetki_id"]=="2"){

				header('Location: personel_sahife.php');

			}





		}
		else{
			if($email=="" or $password==""){

				echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
			}
			else{
				echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
			}
			
			echo "kullanıcı adı veya şifre başarısız.";
		}


	
}
else{
	echo "post edilmedi";
}
ob_end_flush();

?>