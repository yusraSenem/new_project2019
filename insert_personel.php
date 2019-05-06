<?php

if(isset($_POST["ekle"])){
  $pers_veri=[

  $ad=strip_tags(trim($_POST["p_ad"])),
  $soyad=strip_tags(trim($_POST["p_soyad"])),
  $gsm=strip_tags(trim($_POST["gsmp"])),
  $eposta=strip_tags(trim($_POST["p_email"])),
  $sifre=strip_tags(trim($_POST["p_sifre"])),
  $bolum=strip_tags(trim($_POST["bolum_k"])),
  $unvan=strip_tags(trim($_POST["p_unvan"]))
];

  require("vt_baglanti.php");
  $sorgu=$db->prepare("INSERT INTO personeller VALUES (null, ?,?, ?,?,?,?,?,2)");
  $eklemek=$sorgu->execute($pers_veri);
  if($eklemek){
    $id=$db->lastInsertId();
    echo "işlem başarılı";
  }
  else{
    echo "ekleme işlemi başarısız.";
  }


}

else{
  echo "post edilmedi.";
}


?>
