<?php include "sidebar.php" ?>

<div class="container">

	<?php
	require("vt_baglanti.php");
	$pers_cek= $db ->query("SELECT personeller.p_ad,personeller.p_soyad,personeller.unvan
		FROM personeller",PDO::FETCH_ASSOC);
	$cikti=$pers_cek->fetch(PDO::FETCH_ASSOC);

	echo "<table class='table' border='1'>";
	echo "<thead class='thead-dark'>";
	echo "<tr>";
	echo "<th>personel adı</th>";
	echo "<th>personel soyadı</th>";
	echo "<th>unvan</th>";
	
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

	<a href="gorevlipersonel.php"><button type="button" class="btn btn-primary">görevli personelleri göster</button></a>
	<a href="personelekle.php"><button type="button" class="btn btn-primary">personel ekle</button></a>





</div>







<?php include "topbar.php" ?>
