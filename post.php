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
  <?php
        if(isset($_GET['id']))
        {
        $p_id=$_GET['id'];
        }
        $post=mysql_query("select * from post where id=$p_id");
          while($postdizi=mysql_fetch_array($post))
          {
               $join=mysql_query("select * from users where id=$postdizi[5]");
              $joindizi=mysql_fetch_array($join);
          ?>
      <!-- Post Content Column -->
      <div class="col-lg-8 ">

        <!-- Title -->
        <h1 class="mt-4"><?php echo $postdizi['baslik']; ?></h1>

        <!-- Author -->
        <p class="lead">
          tarafından
          <a href="#"><?php echo $joindizi['k_adi']; ?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Gönderildi Eylül 1, 2018 12:00 </p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded post-img" src="<?php echo $postdizi['img']; ?>" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead"><?php echo $postdizi['aciklama']; ?></p>

        <blockquote class="blockquote">
          <p class="mb-0">asdfasf asf asf safsf sdf asdf s</p>
          <footer class="blockquote-footer">sdf asdf asdf
            <cite title="Kaynak Başlığı">ciftcitarım.com</cite>
          </footer>
        </blockquote>

        <p>dasfasdf asdf asdfasd fasdf asdf asdf asdf asdf sdf a f</p>

        <p>asdfas dfasdf asdf asdf asdf asdf asdf asdf asdf</p>

        <hr>

        <!-- Comments Form -->
        <div class="card my-4">
          <h5 class="card-header">Görüşünüz:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Gönder</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Emin Ekşi</h5>
           sadas dasd asd asd asd asd as d
          </div>
        </div>

        <!-- Comment with nested comments -->
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Mertcan Akdemir</h5>
          asdasdas das das das dasd asd.

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">ekremtnss</h5>
                asd asdas dasd asd asd asd as.
              </div>
            </div>

            <div class="media mt-4">
              <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
              <div class="media-body">
                <h5 class="mt-0">Mertcan Akdemir</h5>
                asdasd asd asd asd asd as.
              </div>
            </div>

          </div>
        </div>

      </div>
<?php } ?>
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
