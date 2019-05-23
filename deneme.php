<?php
require("vt_baglanti.php");
$sorgu=$db->query("SELECT baslama_tarihi FROM gorevler");
$sorgu->execute();
$sorgu = $sorgu->fetchAll(PDO::FETCH_OBJ);

foreach ($sorgu as $s) {
	echo $s->baslama_tarihi."<br >";
}


 ?>