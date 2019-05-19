<?php include "sidebar.php" ?>
<?php
ob_start();
session_start();
if(!isset($_SESSION["login"])){
    header("Location:index.html");
}
else {
    echo "<center>Admin sayfasina hosgeldiniz..! ";
    echo "<a href=logout.php></a>";
}
?>

<div>kjsdhjkmdnbfhlsjkfnjfıdouhjrıofjd</div>






<?php include "topbar.php" ?>