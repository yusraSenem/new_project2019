<?php include "sidebar.php" ?>
<link href="grafik.css" rel="stylesheet">
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
$toplu_veri=$db->query("SELECT concat(personeller.p_ad,' ',personeller.p_soyad,' ',personeller.unvan) as ad_soyad,silinen_gorevler.max_gorev_suresi,silinen_gorevler.gorev_gunde_bitti
	FROM personeller,silinen_gorevler,gorevler,projeler,proje_gorev
	WHERE personeller.p_id=silinen_gorevler.p_id AND gorevler.gorev_kod=silinen_gorevler.gorev_kod and projeler.proje_kod=proje_gorev.proje_kod and proje_gorev.gorev_kod=gorevler.gorev_kod
	 and projeler.proje_kod='TICWEB'",PDO::FETCH_ASSOC);
foreach ($toplu_veri as $row) {
	$p_adsoyad=$p_adsoyad .'"'. $row['ad_soyad'] .'",';
	$max=$max .'"'. $row['max_gorev_suresi'] .'",';
	$gercek=$gercek .'"'. $row['gorev_gunde_bitti'] .'",';
	

}
$p_adsoyad =trim($p_adsoyad,",");
$max =trim($max,",");
$gercek =trim($gercek,",");

?>

<div class="container-fluid" style="">
	<div class="card card-header">
	<div class="row b">
	<div class="card card-body col-md-6 border  rounded a" style="" >
	<canvas id="chart" style=""></canvas>
	<h4>E ticaret 23Mayıs2019-28Temmuz2019</h4>

		<script>
			var grafik = document.getElementById("chart").getContext("2d");
			var myChart = new Chart(grafik,{
				type: 'bar',
				data:{
					labels:[<?php echo $p_adsoyad; ?>],
					datasets:[{
						label:"max. görev bitirme süresi",
						data:[<?php echo $max; ?>],
						backgroundColor:["#123edf","#123edf","#123edf","#123edf","#123edf","#123edf"]


					},
					{

						label:"Görevin bittiği süre",
						data:[<?php echo $gercek; ?>],
						backgroundColor:["#4eeda1","#4eeda1","#4eeda1","#4eeda1","#4eeda1","#4eeda1"]
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
$toplu_veri2=$db->query("SELECT concat(personeller.p_ad,' ',personeller.p_soyad,' ',personeller.unvan) as ad_soyad2, round(silinen_gorevler.erken_bitirme_orani,2) as bitirme_orani
	FROM personeller,silinen_gorevler,gorevler,projeler,proje_gorev
	WHERE personeller.p_id=silinen_gorevler.p_id AND gorevler.gorev_kod=silinen_gorevler.gorev_kod and projeler.proje_kod=proje_gorev.proje_kod and proje_gorev.gorev_kod=gorevler.gorev_kod
	 and projeler.proje_kod='TICWEB'
	",PDO::FETCH_ASSOC);
foreach ($toplu_veri2 as $row2) {
	$p_adsoyad2=$p_adsoyad2 .'"'. $row2['ad_soyad2'] .'",';
	$erken=$erken .'"'. $row2['bitirme_orani'] .'",';
	

}
$p_adsoyad2 =trim($p_adsoyad,",");
$erken =trim($erken,",");


?>

<div class="card card-body col-md-6 border  rounded a" >
	<canvas id="chart2" style=""></canvas>
	<h4>E ticaret 23Mayıs2019-28Temmuz2019</h4>

		<script>
			var grafik = document.getElementById("chart2").getContext("2d");
			var myChart = new Chart(grafik,{
				type: 'polarArea',
				data:{
					labels:[<?php echo $p_adsoyad2; ?>],
					datasets:[{
						label:"Erken bitirme oranı",
						data:[<?php echo $erken; ?>],
						backgroundColor:["#123edf","#4eeda1","#F333FF","#EDFF33","#A333FF","#FF9633"]


					}
					
					]
				}
			})



		</script>
		</div>
</div><!--row divi -->

<!--üçüncü grafik -->
<?php 
$p_adsoyad3 ="";
$max3 ="";
$gercek3 ="";

require("vt_baglanti.php");
$toplu_veri3=$db->query("SELECT concat(personeller.p_ad,' ',personeller.p_soyad) as ad_soyad,silinen_gorevler.max_gorev_suresi,silinen_gorevler.gorev_gunde_bitti
	FROM personeller,silinen_gorevler,gorevler,projeler,proje_gorev
	WHERE personeller.p_id=silinen_gorevler.p_id AND gorevler.gorev_kod=silinen_gorevler.gorev_kod and projeler.proje_kod=proje_gorev.proje_kod and proje_gorev.gorev_kod=gorevler.gorev_kod
	 and projeler.proje_kod='VRPSIKO'",PDO::FETCH_ASSOC);
foreach ($toplu_veri3 as $row3) {
	$p_adsoyad3=$p_adsoyad3 .'"'. $row3['ad_soyad'] .'",';
	$max3=$max3 .'"'. $row3['max_gorev_suresi'] .'",';
	$gercek3=$gercek3 .'"'. $row3['gorev_gunde_bitti'] .'",';
	

}
$p_adsoyad3 =trim($p_adsoyad3,",");
$max3 =trim($max3,",");
$gercek3 =trim($gercek3,",");

?>
<div class="row b">
	<div class="card card-body col-md-6 border  rounded a" >
	<canvas id="chart3" style=""></canvas>
	<h4>VRPSI 20Mayıs2018-5Ekim2018</h4>

		<script>
			var grafik = document.getElementById("chart3").getContext("2d");
			var myChart = new Chart(grafik,{
				type: 'bar',
				data:{
					labels:[<?php echo $p_adsoyad3; ?>],
					datasets:[{
						label:"max. görev bitirme süresi",
						data:[<?php echo $max3; ?>],
						backgroundColor:["#FF33E0","#FF33E0","#FF33E0","#FF33E0","#FF33E0","#FF33E0","#FF33E0"]


					},
					{

						label:"Görevin bittiği süre",
						data:[<?php echo $gercek3; ?>],
						backgroundColor:["#EAFF33","#EAFF33","#EAFF33","#EAFF33","#EAFF33","#EAFF33","#EAFF33"]
					}
					]
				}
			})



		</script>
	</div>

<!--dördüncü grafik -->
<?php 
$p_adsoyad4 ="";
$erken4 ="";


require("vt_baglanti.php");
$toplu_veri4=$db->query("SELECT concat(personeller.p_ad,' ',personeller.p_soyad) as ad_soyad2, round(silinen_gorevler.erken_bitirme_orani,2) as bitirme_orani
	FROM personeller,silinen_gorevler,gorevler,projeler,proje_gorev
	WHERE personeller.p_id=silinen_gorevler.p_id AND gorevler.gorev_kod=silinen_gorevler.gorev_kod and projeler.proje_kod=proje_gorev.proje_kod and proje_gorev.gorev_kod=gorevler.gorev_kod
	 and projeler.proje_kod='VRPSIKO'
	",PDO::FETCH_ASSOC);
foreach ($toplu_veri4 as $row4) {
	$p_adsoyad4=$p_adsoyad4 .'"'. $row4['ad_soyad2'] .'",';
	$erken4=$erken4 .'"'. $row4['bitirme_orani'] .'",';
	

}
$p_adsoyad4 =trim($p_adsoyad4,",");
$erken4 =trim($erken4,",");


?>	

<div class="card card-body col-md-6 border  rounded a" >
	<canvas id="chart4" style=""></canvas>
	<h4>VRPSI 20Mayıs2018-5Ekim2018</h4>

		<script>
			var grafik = document.getElementById("chart4").getContext("2d");
			var myChart = new Chart(grafik,{
				type: 'polarArea',
				data:{
					labels:[<?php echo $p_adsoyad4; ?>],
					datasets:[{
						label:"Erken bitirme oranı",
						data:[<?php echo $erken4; ?>],
						backgroundColor:["#123edf","#4eeda1","#F333FF","#A333FF","#FF9633","#EAFF33","#33EEFF"]


					}
					
					]
				}
			})



		</script>
		</div>

</div><!--ikinci row divi -->

<!--beşinci grafik -->
<?php 
$gorev_ad="";
$gorev_sure ="";
$bitis ="";


require("vt_baglanti.php");
$toplu_veri5=$db->query("SELECT  gorevler.gorev_ad,datediff(gorevler.bitis_tarihi,gorevler.baslama_tarihi) as gorev_suresi,silinen_gorevler.gorev_gunde_bitti
	FROM gorevler,proje_gorev,projeler,silinen_gorevler,personeller
	WHERE gorevler.gorev_kod=proje_gorev.gorev_kod AND proje_gorev.proje_kod=projeler.proje_kod AND projeler.proje_kod='VRPSIKO'
	AND gorevler.gorev_kod=silinen_gorevler.gorev_kod AND personeller.p_id=silinen_gorevler.p_id
	GROUP BY gorevler.gorev_kod",PDO::FETCH_ASSOC);
foreach ($toplu_veri5 as $row5) {
	$gorev_ad=$gorev_ad .'"'. $row5['gorev_ad'] .'",';
	$gorev_sure=$gorev_sure .'"'. $row5['gorev_suresi'] .'",';
	$bitis=$bitis .'"'. $row5['gorev_gunde_bitti'] .'",';
	

}
$gorev_ad =trim($gorev_ad,",");
$gorev_sure =trim($gorev_sure,",");
$bitis =trim($bitis,",");


?>	
<div class="row b">
<div class="card card-body col-md-6 border  rounded a" >
	<canvas id="chart5" style=""></canvas>
	<h4>VRPSI görev süreleri</h4>

		<script>
			var grafik = document.getElementById("chart5").getContext("2d");
			var myChart = new Chart(grafik,{
				type: 'line',
				data:{
					labels:[<?php echo $gorev_ad; ?>],
					datasets:[{
						label:"max Görev tamamlanma süresi",
						data:[<?php echo $gorev_sure; ?>],
						backgroundColor:["200, 0, 0, 0.3"]


					},
					{

						label:"Görevin bittiği süre",
						data:[<?php echo $bitis; ?>],
						backgroundColor:["120, 100%, 25%, 0.5"]
					}
					
					]
				}
			})



		</script>
		</div>

	</div><!--üçüncü row divi -->
</div>
</div>
<?php include "topbar.php" ?>