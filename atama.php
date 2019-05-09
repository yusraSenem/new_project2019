<?php include "sidebar.php" ?>

<?php 
	
?>

<form action="gorev_ata.php" method="Post">
<?php
 echo "<select class='custom-select custom-select-lg mb-3'  name='personel'>";
     

	include("vt_baglanti.php");
	$soru=$db->query("SELECT p_id,concat(p_ad,' ',p_soyad,' ',unvan) as p_ad_soyad FROM personeller WHERE yetki_id=2 ORDER BY p_ad_soyad",PDO::FETCH_ASSOC);

	foreach ($soru as $row) {
		# code...
		echo '<option value="'.$row['p_id'].'">'.$row['p_ad_soyad'].'</option>';
	}

echo "</select>";
	

echo "<select class='custom-select custom-select-lg mb-3' name='gorev'>";
	include("vt_baglanti.php");
	$soru2=$db->query("SELECT gorev_kod,concat(gorev_kod,' ',gorev_ad) as gorev_kodad FROM gorevler ORDER BY gorev_kodad",PDO::FETCH_ASSOC);

	foreach ($soru2 as $row2) {
		# code...
		echo '<option value="'.$row2['gorev_kod'].'">'.$row2['gorev_kodad'].'</option>';
	}


echo "</select>";

?>

<button type="submit" class="btn btn-outline-primary btn-sm" name="gorev_ata">Görev Ata</button>
</form>


<?php include "topbar.php" ?>