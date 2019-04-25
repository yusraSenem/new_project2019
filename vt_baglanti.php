<?php
$baglanti=mysqli_connect("localhost","root","","level_up"); 
if ($baglanti){
	echo "bağlantı yapıldı.";
}
else{
	echo "bağlantı yapılmadı.";
}



?>