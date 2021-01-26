<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Çiftçi Forum</title>
    <link rel="icon" href="logoo.ico" type="image/x-icon">
  
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
  <link href="css/blog-home.css" rel="stylesheet">

</head>

<body >
    <input type="hidden" value="anasayfa" id="anasayfa" />
<?php include("bag.php"); session_start();?>
  <!-- Navigation -->
  
<?php include("navbar.php"); ?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      
      <div class="col-md-8">
          <?php 
          if(isset($_SESSION['k_adi']))
          {
          ?>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="card my-4">
          <h5 class="card-header">Gönderi yaz:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                  <img style="position:absolute;width:4%;" src="img/filebg.png"/>
                  <label style="position:absolute;opacity:0.7;" class="ml-5" for="photo">Fotoğraf Seçiniz</label><input class="custom-file-input col-2" name="photo"  id="photo" type="file"/>
                  <label id="photolabel" class="text-danger"></label>
                  <input class="form-control btn-sm" type="text" name="baslik" placeholder="Başlık"/>
                  <label id="basliklabel" class="text-danger"></label>
                  <input type="hidden" value="<?php if(isset($_SESSION['id'])){ echo $_SESSION['id']; } ?>"/>
                <textarea name="aciklama" placeholder="İçerik" class="form-control mt-5" rows="3"></textarea>
                  <label id="basliklabel" class="text-danger"></label>
              </div>
              <input name="kaydet" type="submit" class="btn btn-primary" value="Gönder" />
            </form>
          </div>
        </div></form>
          <?php } 
          if(isset($_POST['kaydet']))
          { 
              $kaydet= $_POST['kaydet']; 
          
          
          if(isset($_POST['baslik']))
          { 
              $baslik= $_POST['baslik']; 
          }
          else
          {
              
              $baslik=null;
              ?><script type="text/javascript"> alert("sdfsdfdsf"); </script><?php
              break;
          }
           if(isset($_POST['aciklama']))
          { 
              $aciklama=$_POST['aciklama']; 
          }
          else
          {
              $aciklama=null;
          }
          
          
          if(isset($_SESSION['id']))
          { 
              $uid= $_SESSION['id']; 
          }
          if(isset($_FILES['photo']['tmp_name']))
        {
            $yolu=$_FILES['photo']['tmp_name'];
        }
        else
        {
             $yolu=null;
        }
         if(isset($_FILES['photo']['name']))
        {
            $isim=$_FILES['photo']['name'];
        }
        
        else
        {
             $isim=null;
        }
         
          $p_tarihi=date("Y-m-d H:i:s");
            $kayityeri2="img/postimg/".$isim;
        
          mysql_query("INSERT INTO `post` (`id`, `baslik`, `aciklama`, `img`, `p_tarihi`, `user_id`) VALUES (NULL, '$baslik', '$aciklama', '$kayityeri2', '$p_tarihi', '$uid');");

             if(move_uploaded_file($yolu,$kayityeri2))
            {
            
           
            }
            else
            {

          
            }
          
          }
          else
          {
              $kaydet=null;
          }
          
          ?>
          
        <h1 class="my-4" >Forum
          <small>Tarım</small>
        </h1>

        <?php
          $post=mysql_query("select * from post order by id desc");
          while($postdizi=mysql_fetch_array($post))
          {
              $join=mysql_query("select * from users where id=$postdizi[5]");
              $joindizi=mysql_fetch_array($join);
          ?>
        <div class="card mb-4">
          <img class="card-img-top post-img"  src="<?php echo $postdizi['img']; ?>" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><?php echo $postdizi['baslik']; ?></h2>
            <p class="card-text"><?php echo substr($postdizi['aciklama'],0,30); ?>...</p>
            <a href="post.php?id=<?php echo $postdizi['id']; ?>" class="btn btn-primary">Daha Fazla&rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Gönderi Eylül 1, 2018 tarafından 
            <a href="#"><?php echo $joindizi['k_adi']; ?></a>
          </div>
        </div>

       <?php } ?>
       


        <!-- Pagination -->
        <ul style="display:none;" class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Önceki</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Sonraki &rarr;</a>
          </li>
        </ul>

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
      <p class="m-0 text-center text-white">Copyright &copy; Tüm hakkı saklıdır. 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
