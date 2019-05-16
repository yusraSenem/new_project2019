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
			
			?>
	<div class="form-group">
      <label for="p_ad">Personelin Adı</label>
      <input type="text" class="form-control" id="p_ad" name="p_ad" placeholder="Personelin adını giriniz." >
    </div>

    <div class="form-group">
      <label for="p_soyad">Personelin Soyadı</label>
      <input type="text" class="form-control" id="p_soyad" name="p_soyad" placeholder="Personelin soyadını giriniz." >
    </div>

    <div class="form-group">
      <label for="gsmp">GSM</label>
      <input type="text" class="form-control" id="gsmp" name="gsmp" placeholder="Telefon numarasını giriniz." >
    </div>

    <div class="form-group">
      <label for="p_email">E-Posta Adresi</label>
      <input type="email" class="form-control" id="p_email" name="p_email" aria-describedby="emailHelp" placeholder="E-posta" >
    </div>

    <div class="form-group">
      <label for="p_sifre">Şifre</label>
      <input type="password" class="form-control" id="p_sifre" name="p_sifre" placeholder="Şifre" >
    </div>

    <div class="form-group">
      <label for="p_unvan">Personelin Unvanı</label>
      <input type="text" class="form-control" id="p_unvan" name="p_unvan" placeholder="Personelin ünvanını giriniz." >
    </div>
    
    <div class="form-group">
      <label for="bolum_k">Birim Kodu</label>
      <input type="text" class="form-control" id="bolum_k" name="bolum_k" placeholder="Birim kodunu giriniz." >
    </div>
    <button class="btn btn-outline-info btn-sm" type="submit" name="p_gun">Düzenle</button>






	    </form>
	  </div>
	</div>
</div>











<?php include "topbar.php" ?>