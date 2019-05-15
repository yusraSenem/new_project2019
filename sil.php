<?php include "sidebar.php" ?>

<?php 
	
?>

<form action="dlt.php" method="Post">
<?php
echo '<div class="container" >';
 echo '<div class="row" style="padding:10px;">';
 echo "<h3>Personel</h3>";
 echo "<select class='custom-select custom-select-lg mb-3'  name='personel_s'>";
     

	include("vt_baglanti.php");
	$soru=$db->query("SELECT p_id,concat(p_ad,' ',p_soyad,' ',unvan) as p_ad_soyad FROM personeller WHERE yetki_id=2 ORDER BY p_ad_soyad",PDO::FETCH_ASSOC);

	foreach ($soru as $row) {
		# code...
		echo '<option value="'.$row['p_id'].'">'.$row['p_ad_soyad'].'</option>';
	}

echo "</select>";
echo '<button class="btn btn-outline-danger btn-sm" type="submit" name="p_sil">Sil</button>';
echo "</div>";
echo "</form>";

echo '<form action="gorev_dlt.php" method="Post">';
echo '<div class="row" style="padding:10px;">';
echo "<h3>Görev</h3>";
echo "<select class='custom-select custom-select-lg mb-3' name='gorev_s'>";
	require("vt_baglanti.php");
	$soru2=$db->query("SELECT gorev_kod,concat(gorev_kod,' ',gorev_ad) as gorev_kodad FROM gorevler ORDER BY gorev_kodad",PDO::FETCH_ASSOC);

	foreach ($soru2 as $row2) {
		# code...
		echo '<option value="'.$row2['gorev_kod'].'">'.$row2['gorev_kodad'].'</option>';
	}


echo "</select>";
echo '<button class="btn btn-outline-danger btn-sm" type="submit" name="g_sil">Sil</button>';
echo "</div>";
echo "</div>";
echo "</form>";
?>





<?php include "topbar.php" ?>