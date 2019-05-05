<?php include "sidebar.php" ?>

<div class="container-fluid">
  <form method="post" action="insert_personel.php">
    <h2>Personel Bilgileri</h2>
    <div class="form-group">
      <label for="p_ad">Personelin Adı</label>
      <input type="text" class="form-control" id="p_ad" name="p_ad" placeholder="Personelin adını giriniz." required="">
    </div>

    <div class="form-group">
      <label for="p_soyad">Personelin Soyadı</label>
      <input type="text" class="form-control" id="p_soyad" name="p_soyad" placeholder="Personelin soyadını giriniz." required="">
    </div>

    <div class="form-group">
      <label for="gsmp">GSM</label>
      <input type="text" class="form-control" id="gsmp" name="gsmp" placeholder="Telefon numarasını giriniz." required="">
    </div>

    <div class="form-group">
      <label for="p_email">E-Posta Adresi</label>
      <input type="email" class="form-control" id="p_email" name="p_email" aria-describedby="emailHelp" placeholder="E-posta" required="">
    </div>

    <div class="form-group">
      <label for="p_sifre">Şifre</label>
      <input type="password" class="form-control" id="p_sifre" name="p_sifre" placeholder="Şifre" required="">
    </div>

    <div class="form-group">
      <label for="p_unvan">Personelin Unvanı</label>
      <input type="text" class="form-control" id="p_unvan" name="p_unvan" placeholder="Personelin ünvanını giriniz." required="">
    </div>
    
  
    <button type="submit" class="btn btn-primary" name="ekle">Ekle</button>
  </form>
</div>






<?php include "topbar.php" ?>