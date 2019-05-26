<?php session_start();  ?>
<?php include("pers_side.php") ?>
<?php

$email=$_SESSION["user"];
require("vt_baglanti.php");
$sorgu=$db->query("SELECT * FROM personeller,gorevler,personel_gorev WHERE gorevler.gorev_kod=personel_gorev.gorev_kod and personeller.p_id=personel_gorev.p_id ",PDO::FETCH_ASSOC);


	echo "<table class='table table-striped' border='1'>";
	echo "<thead class='thead-dark'>";
	echo "<tr>";
	echo "<th scope='col'>personel adı</th>";
	echo "<th scope='col'>personel soyadı</th>";
	echo "<th scope='col'>unvan</th>";
	echo "<th scope='col'>gorev adı</th>";
	echo "<th scope='col'>gorev başlangıç tarihi</th>";
	echo "<th scope='col'>gorev bitiş tarihi</th>";
	echo "<th scope='col'>görevi sonlandır</th>";
	echo "</tr>";
	echo "</thead>";
	echo "<tr>";
	


foreach ($sorgu as $row) {

	# code... 
	if($row["p_email"]==$email){

echo "<form action='bitirdigi_gun.php' method='POST'>";
echo '<td>'. $row["p_ad"] .'</td>';
echo "<td>".$row['p_soyad']."</td>";
echo "<td>".$row['unvan']."</td>";
echo "<td>".$row['gorev_ad']."</td>";
echo "<td>".$row['baslama_tarihi']."</td>";
echo "<td>".$row['bitis_tarihi']."</td>";


echo "<td><button type='submit' type='hidden' class='btn btn-outline-danger btn-sm'>görevi sonlandır</button></td>";
echo '<input type="hidden" id="pers" name="pers" value='.$row['p_id'].'>';
echo '<input type="hidden" id="gor" name="gor" value='.$row['gorev_kod'].'>';


echo "</tr>";
echo "</form";


	
}

};

echo "</table>";
?>
<?php include("pers_top.php") ?>