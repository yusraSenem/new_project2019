<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Giriş Sayfası</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- css kodları-->
    <link href="css_code.css" rel="stylesheet">
</head>

<body class="bg-primary">

  <div class="container">

    
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- tab -->
            <div class="row">
              <div style="height: 40px;width: 920px; background-color: white;">
              <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#yk">Yönetici Girişi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#pk">Personel Girişi</a>
                </li>
              </ul>
            </div>
            <div class="tab-content">
            <div id="yk" class="row ">
              <div class="col-lg-6 d-none d-lg-block bg-login-image">
                <img src="login_image.jpg" style="">
              </div>
              <div class="col-lg-6">

                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Giriş Ekranı</h1>
                  </div>
                  <form class="user" method="post" action="kontrol.php">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="giris_eposta" name="giris_eposta" aria-describedby="emailHelp" placeholder="E-posta adresinizi giriniz">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="giris_sifre" name="giris_sifre" placeholder="Şifrenizi giriniz">
                    </div>
                    
                    <input type="submit" class="btn btn-primary btn-user btn-block" name="giris_gonder">
                     
                    </input>
                    
                    
                  </form>
                  
                  
                </div>
              </div>
            </div>


           </div>
          </div>
        </div>
        </div>
      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>