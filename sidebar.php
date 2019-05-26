<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>

  <title>Yönetici Paneli</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  
  

  <!-- Bootstrap core CSS -->
  <link href="dashboard.css" rel="stylesheet">

  <!-- Custom styles for this template -->


</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Kullanıcı</div>
      <div class="list-group list-group-flush">
       
        <a href="yonetici_paneli.php" class="list-group-item list-group-item-action bg-light">Gösterge Paneli</a>
        


        

        <a href="personel.php" class="list-group-item list-group-item-action bg-light">Personeller</a>
        <a href="personel_gorev_ekle.php" class="list-group-item list-group-item-action bg-light">Personel/Görev Ekle</a>
        <a href="atama.php" class="list-group-item list-group-item-action bg-light">Atama İşlemleri</a>
       
        <a href="#" class="list-group-item list-group-item-action bg-light">Profil</a>
        <a href="logout.php" class="list-group-item list-group-item-action bg-light">Güvenli Çıkış</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">==</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="yonetici_paneli.php">Anasayfa <span class="sr-only">(current)</span></a>
            </li>      
          </ul>
        </div>
      </nav>

   