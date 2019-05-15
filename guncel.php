<?php include "sidebar.php" ?>
<div class="container">
	<div class="card">
	  <div class="card-body">
	  	<form action="gun.php" method="Post">

	  		<?php
	  		echo "personel seçin";
	  		echo "<select class='custom-select custom-select-lg mb-3'  name='personel_g'>";
     

			include("vt_baglanti.php");
			$soru=$db->query("SELECT p_id,concat(p_ad,' ',p_soyad,' ',unvan) as p_ad_soyad FROM personeller WHERE yetki_id=2 ORDER BY p_ad_soyad",PDO::FETCH_ASSOC);

			foreach ($soru as $row) {
			# code...
			echo '<option value="'.$row['p_id'].'">'.$row['p_ad_soyad'].'</option>';
			}

			echo "</select>";
			echo '<button class="btn btn-outline-info btn-sm" type="submit" name="p_gun">Düzenle</button>';
			?>







	    </form>
	  </div>
	</div>
</div>











<?php include "topbar.php" ?>