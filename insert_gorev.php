<?php 

if(isset($_POST["gorev_ekle"])){
  $gorev_veri=[

  $gorev=strip_tags(trim($_POST["gorev"])),
  $gorev_ad=strip_tags(trim($_POST["gorev_ad"])),
  $tanim=strip_tags(trim($_POST["tanim"])),
  $baslama=strip_tags(trim($_POST["baslama"])),
  $bitis=strip_tags(trim($_POST["bitis"]))
];

  require("vt_baglanti.php");
  $sorgu_gorev=$db->prepare("INSERT INTO gorevler VALUES (?,?, ?,?,?)");
  $eklemek_gorev=$sorgu_gorev->execute($gorev_veri);
  if($eklemek_gorev){
    
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