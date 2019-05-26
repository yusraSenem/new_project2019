<?php include "sidebar.php" ?>
<?php

ob_start();
session_start();
if(!isset($_SESSION["login"])){
    header("Location:index.html");
}
else {
    
    echo "<a href=logout.php></a>";
}
?>
<?php 
$p_adsoyad ="";
$max ="";
$gercek ="";

require("vt_baglanti.php");
$toplu_veri=$db->query("SELECT concat(personeller.p_ad,' ',personeller.p_soyad) as ad_soyad,silinen_gorevler.max_gorev_suresi,silinen_gorevler.gorev_gunde_bitti
	FROM personeller,silinen_gorevler,gorevler
	WHERE personeller.p_id=silinen_gorevler.p_id AND gorevler.gorev_kod=silinen_gorevler.gorev_kod",PDO::FETCH_ASSOC);
foreach ($toplu_veri as $row) {
	$p_adsoyad=$p_adsoyad .'"'. $row['ad_soyad'] .'",';
	$max=$max .'"'. $row['max_gorev_suresi'] .'",';
	$gercek=$gercek .'"'. $row['gorev_gunde_bitti'] .'",';
	

}
$p_adsoyad =trim($p_adsoyad,",");
$max =trim($max,",");
$gercek =trim($gercek,",");

?>

<div class="container-fluid" style="background-color: lightblue;">
	<div class="card card-body" style="width: 700px; height: 400px;">
	<canvas id="chart" style=""></canvas>
	<h3>Gün Tasarrufu</h3>

		<script>
			var grafik = document.getElementById("chart").getContext("2d");
			var myChart = new Chart(grafik,{
				type: 'bar',
				data:{
					labels:[<?php echo $p_adsoyad; ?>],
					datasets:[{
						label:"max. görev bitirme süresi",
						data:[<?php echo $max; ?>],
						backgroundColor:["#123edf","#123edf","#123edf","#123edf"]


					},
					{

						label:"Görevin bittiği süre",
						data:[<?php echo $gercek; ?>],
						backgroundColor:["#4eeda1","#4eeda1","#4eeda1","#4eeda1"]
					}
					]
				}
			})



		</script>
		</div>

<!--ikinci grafik -->
<?php 
$p_adsoyad2 ="";
$erken ="";


require("vt_baglanti.php");
$toplu_veri2=$db->query("SELECT concat(personeller.p_ad,' ',personeller.p_soyad) as ad_soyad2, round(silinen_gorevler.erken_bitirme_orani,2) as bitirme_orani
	FROM personeller,silinen_gorevler,gorevler
	WHERE personeller.p_id=silinen_gorevler.p_id AND gorevler.gorev_kod=silinen_gorevler.gorev_kod",PDO::FETCH_ASSOC);
foreach ($toplu_veri2 as $row2) {
	$p_adsoyad2=$p_adsoyad2 .'"'. $row2['ad_soyad2'] .'",';
	$erken=$erken .'"'. $row2['bitirme_orani'] .'",';
	

}
$p_adsoyad2 =trim($p_adsoyad,",");
$erken =trim($erken,",");


?>

<div class="card card-body" style="width: 700px; height: 300px;">
	<canvas id="chart2" style=""></canvas>
	

		<script>
			var grafik = document.getElementById("chart2").getContext("2d");
			var myChart = new Chart(grafik,{
				type: 'polarArea',
				data:{
					labels:[<?php echo $p_adsoyad2; ?>],
					datasets:[{
						label:"Erken bitirme oranı",
						data:[<?php echo $erken; ?>],
						backgroundColor:["#123edf","#4eeda1","#F333FF","#EDFF33"]


					}
					
					]
				}
			})



		</script>
		</div>





</div>
<?php include "topbar.php" ?>