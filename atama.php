<?php include "sidebar.php" ?>
<?php
 echo "<select class='custom-select custom-select-lg mb-3'>";
     

	include("vt_baglanti.php");
	$soru=$db->query("SELECT concat(p_ad,' ',p_soyad,' ',unvan) as p_ad_soyad FROM personeller WHERE yetki_id=2 ORDER BY p_ad_soyad",PDO::FETCH_ASSOC);

	foreach ($soru as $row) {
		# code...
		echo "<option>".$row['p_ad_soyad']."</option>";
	}

echo "</select>";
	

echo "<select class='custom-select custom-select-lg mb-3'>";
	include("vt_baglanti.php");
	$soru2=$db->query("SELECT concat(gorev_kod,' ',gorev_ad) as gorev_kodad FROM gorevler ORDER BY gorev_kodad",PDO::FETCH_ASSOC);

	foreach ($soru2 as $row2) {
		# code...
		echo "<option>".$row2['gorev_kodad']."</option>";
	}


echo "</select>";

?>

<button type="submit" class="btn btn-outline-primary btn-sm">Görev Ata</button>



<?php include "topbar.php" ?>