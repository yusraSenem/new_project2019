<?php include "sidebar.php" ?>
<div class="container">

	<?php
	require("vt_baglanti.php");
	$pers_cek= $db ->query("SELECT personeller.p_ad,personeller.p_soyad,personeller.unvan,departmanlar.bolum_ad,projeler.proje_ad,gorevler.gorev_ad,gorevler.baslama_tarihi,gorevler.bitis_tarihi
		FROM personeller,gorevler,projeler,departmanlar,personel_gorev,proje_gorev WHERE personeller.bolum_kod=departmanlar.bolum_kod AND personeller.p_id=personel_gorev.p_id AND personel_gorev.gorev_kod=gorevler.gorev_kod AND
			proje_gorev.gorev_kod=gorevler.gorev_kod AND projeler.proje_kod=proje_gorev.proje_kod",PDO::FETCH_ASSOC);
	


	echo "<table class='table' border='1'>";
	echo "<thead class='thead-dark'>";
	echo "<tr>";
	echo "<th>personel adı</th>";
	echo "<th>personel soyadı</th>";
	echo "<th>unvan</th>";
	echo "<th>Birim Adı</th>";
	echo "<th>Bulunduğu Proje</th>";
	echo "<th>Bulunduğu Görev</th>";
	echo "<th>Görev Başlangıç Tarihi</th>";
	echo "<th>Görev Bitiş Tarihi</th>";
	
	echo "</tr>";
	echo "</thead>";
	echo "<tr>";
	foreach( $pers_cek as $row ){
		echo "<td>".$row['p_ad']."</td>";
		echo "<td>".$row['p_soyad']."</td>";
		echo "<td>".$row['unvan']."</td>";
		echo "<td>".$row['bolum_ad']."</td>";
		echo "<td>".$row['proje_ad']."</td>";
		echo "<td>".$row['gorev_ad']."</td>";
		echo "<td>".$row['baslama_tarihi']."</td>";
		echo "<td>".$row['bitis_tarihi']."</td>";
		
		echo "</tr>";

	}
	echo "</table>";
	?>

	
	





</div>




<?php include "topbar.php" ?>