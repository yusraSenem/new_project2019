<?php include "sidebar.php" ?>

<div class="container">
	<div class="row">
	<a href="gorevlipersonel.php"><button type="button" class="btn btn-outline-primary btn-sm">Görevli Personelleri Göster</button></a>
	<a href="personel_gorev_ekle.php"><button type="button" class="btn btn-outline-secondary btn-sm">Personel Ekle</button></a>
	<a href="#"><button class="btn btn-outline-info btn-sm">Güncelle</button></a>
	<a href="sil.php"><button class="btn btn-outline-danger btn-sm">Sil</button></a>
	</div>
	<div class="row">
	<?php
	require("vt_baglanti.php");
	$pers_cek= $db ->query("SELECT personeller.p_ad,personeller.p_soyad,personeller.unvan
		FROM personeller",PDO::FETCH_ASSOC);
	$cikti=$pers_cek->fetch(PDO::FETCH_ASSOC);

	echo "<table class='table table-striped' border='1'>";
	echo "<thead class='thead-dark'>";
	echo "<tr>";
	echo "<th scope='col'>personel adı</th>";
	echo "<th scope='col'>personel soyadı</th>";
	echo "<th scope='col'>unvan</th>";
	
	echo "</tr>";
	echo "</thead>";
	echo "<tr>";
	foreach( $pers_cek as $row ){
		echo "<td>".$row['p_ad']."</td>";
		echo "<td>".$row['p_soyad']."</td>";
		echo "<td>".$row['unvan']."</td>";
		
		echo "</tr>";

	}
	echo "</table>";
	?>

	</div>





</div>







<?php include "topbar.php" ?>
