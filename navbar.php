<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
    <div class="container">
        <img width="40px" src="img/logo.png"/>
      <a class="ml-lg-1 navbar-brand" href="#">Çiftçi Forum</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            
          <li class="nav-item " id="anasayfanav" onclick="return loadPage()">
            <a class="nav-link" href="index.php">Anasayfa
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Forum</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">Hakkında</a>
          </li>
            <li class="nav-item">
            <a class="nav-link" href="#">İletişim</a>
          </li>
            <li class="nav-item ">
            <a class="nav-link" href="signin.php"><?php
                if(isset($_SESSION['k_adi']))
                {
                    echo $_SESSION['k_adi'];
                }
                else
                {
                    echo "Üye Girişi";
                }
                
                
                
                ?></a>
          </li>
            <li class="nav-item">
                <?php
                if(isset($_SESSION['k_adi']))
                {?>
            <a class="ml-5 nav-link  " href="signout.php">Çıkış</a><?php } ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>