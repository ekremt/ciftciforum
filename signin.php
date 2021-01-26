<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<title>Çiftçi Forum</title>
    <link rel="icon" href="logoo.ico" type="image/x-icon">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">
 
</head>

<body>
<?php include("bag.php"); ?>
  <!-- Navigation -->
    <?php include("navbar.php"); ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
 
      <!-- Post Content Column -->
      <div class="col-lg-8">

          <div class="text-center">
              <h4 class="mt-5 ">Üye Girişi</h4>
              <form action="" method="post" id="myForm" >
                  <input class="form-control btn-sm mt-5 col-8 offset-2 col-lg-4 offset-lg-4" name="k_adi" placeholder="Kullanıcı Adı" type="text" />
                   <input class="form-control btn-sm mt-3 col-8 offset-2 col-lg-4 offset-lg-4" name="sifre"  placeholder="Şifre" type="password" />
                                 
                  <input type="button" class="mt-5 btn-sm btn btn-outline-success mt-2 col-2" value="Kayıt Ol"/> 
                  <input type="submit" class=" mt-5 btn-sm btn btn-outline-info mt-2 col-2" value="Giriş"/>
              </form>
              <?php 
               session_start();
              if(isset($_POST['k_adi']))
              {
                  $k_adi=$_POST['k_adi'];
                  $k_adi=$_POST['k_adi'];
              }
              else
              {
                  
              }
              if(isset($_POST['sifre']))
              {
                  $sifre=$_POST['sifre'];
              }
              else
              {
                  
              }
            
              $sorgu=mysql_query("select * from users where k_adi='$k_adi' and sifre='$sifre'");
              while($sorgudizi=mysql_fetch_array($sorgu))
             
              {
                  $_SESSION['k_adi']=$sorgudizi['k_adi'];
                  $_SESSION['id']=$sorgudizi['id'];
                  header("Location:index.php");
              }
              ?>
          </div>
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Arama</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Arama için...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Ara</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Kategoriler</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Tarım</a>
                  </li>
                  <li>
                    <a href="#">Hayvancılık</a>
                  </li>
                  <li>
                    <a href="#">İlaçlama</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Teşvik</a>
                  </li>
                  <li>
                    <a href="#">Yeni Kanunlar</a>
                  </li>
                  <li>
                    <a href="#">Bilimsel Verimlilik</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Alım - Satım</h5>
            <div class="card-body">
               <a href="https://ticaret.tmo.gov.tr" title="ticaret.tmo.gov.tr" target="_blank" style="margin-left: 32px;"><img style="width: 140px;" alt="randevu.tmo.gov.tr" src="img/widget/elus.jpg"></a>
            </div>            
            <div class="card-body">
            <a href="http://randevu.tmo.gov.tr" title="randevu.tmo.gov.tr" target="_blank" style="margin-left: 32px;"><img style="width: 140px;" alt="randevu.tmo.gov.tr" src="img/widget/TmoHars.jpg"></a>
            </div>
            <div class="card-body">
            <a href="http://www.ekmekisrafetme.com" title="www.ekmekisrafetme.com" target="_blank" style="margin-left: 32px;"><img alt="ekmekisrafetme" src="img/widget/ekmekisrafetme1.jpg" width="140" height="auto"></a>
            </div>
            <div class="card-body">
            <a href="https://hubas.tmo.gov.tr/hashas" title="https://hubas.tmo.gov.tr/hashas" target="_blank" style="margin-left: 32px;"><img alt="ekmekisrafetme" src="img/widget/hubas.jpg" width="140" height="auto"></a>
            </div>
            <div class="card-body">
            <a href="document/Yillaritibariylehububatsatisfiyatlari.pdf" title="Yıllara Göre Hububat satış Fiyatları" target="_blank" style="margin-left: 32px;"><img alt="Yıllara Göre Hububat Satış Fiyatları" src="img/widget/hububat.jpg" width="140" height="auto"></a>
            </div>
            
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Çiftçi Forum 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
