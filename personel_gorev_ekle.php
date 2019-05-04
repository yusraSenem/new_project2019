<?php include "sidebar.php" ?>

<div class="container-fluid">
  <form>
    <div class="form-group">
      <label for="p_ad">Personelin Adı</label>
      <input type="text" class="form-control" id="p_ad" placeholder="Personelin adını giriniz.">
    </div>
    <div class="form-group">
      <label for="p_soyad">Personelin Soyadı</label>
      <input type="text" class="form-control" id="p_soyad" placeholder="Personelin soyadını giriniz.">
    </div>
    <div class="form-group">
      <label for="p_unvan">Personelin Unvanı</label>
      <input type="text" class="form-control" id="p_unvan" placeholder="Personelin ünvanını giriniz.">
    </div>
    <div class="form-group">
      <label for="p_bolum">Departman</label>
      <input type="text" class="form-control" id="p_bolum" placeholder="Personelin çalıştığı departmanı giriniz.">
    </div>
    <div class="form-group">
      <label for="p_email">E-Posta Adresi</label>
      <input type="email" class="form-control" id="p_email" aria-describedby="emailHelp" placeholder="E-posta">
    </div>
    <div class="form-group">
      <label for="p_sifre">Şifre</label>
      <input type="password" class="form-control" id="p_sifre" placeholder="Şifre">
    </div>
  
    <button type="submit" class="btn btn-primary">Ekle</button>
  </form>
</div>





<?php include "topbar.php" ?>
