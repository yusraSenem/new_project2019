<?php

if(isset($_POST["p_gun"])){

	$upd=$_POST["personel_g"];

	require("vt_baglanti.php");
	$sorgu=$db->prepare("SELECT * FROM personeller WHERE p_id=$upd ");
	$goster=$sorgu->execute([$upd]);





}









?>