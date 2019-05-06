<?php include "sidebar.php" ?>

<div class="container-fluid">
  <div class="row">
    <div class="col border border-primary">
  <form method="post" action="insert_personel.php">
    <h2>Personel Ekle</h2>
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
    
    <div class="form-group">
      <label for="bolum_k">Birim Kodu</label>
      <input type="text" class="form-control" id="bolum_k" name="bolum_k" placeholder="Birim kodunu giriniz." required="">
    </div>
  
    <button type="submit" class="btn btn-primary" name="ekle">Ekle</button>
  </form>
</div>

    <div class="col border border-primary">
  <form method="post" action="insert_personel.php">
    <h2>Görev Ekle</h2>
    <div class="form-group">
      <label for="gorev">Görev Kod</label>
      <input type="text" class="form-control" id="gorev" name="gorev" placeholder="Görev kodunu giriniz." required="">
    </div>

    <div class="form-group">
      <label for="gorev_ad">Görev Adı</label>
      <input type="text" class="form-control" id="gorev_ad" name="gorev_ad" placeholder="Görev adını giriniz." required="">
    </div>

    <div class="form-group">
      <label for="tanim">Görev Tanımı</label>
      <input type="text" class="form-control" id="tanim" name="tanim" placeholder="Görev tanımını giriniz." required="">
    </div>

    <div class="form-group">
      <label for="baslama">Baslama Tarihi</label>
      <input type="date" class="form-control" id="baslama" name="baslama" aria-describedby="emailHelp" placeholder="Görev başlangıç tarihi" required="">
    </div>

    <div class="form-group">
      <label for="bitis">Bitis Tarihi</label>
      <input type="date" class="form-control" id="bitis" name="bitis" placeholder="Görev bitiş tarihi" required="">
    </div>
    
  
    <button type="submit" class="btn btn-primary" name="gorev_ekle">Ekle</button>
  </form>
</div>



</div>
</div>





<?php include "topbar.php" ?>