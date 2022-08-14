<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Başlıksız Belge</title>
<link rel="stylesheet" type="text/css" href="bs/bootstrap.min.css"/>
<script type="text/javascript" src="bs/jquery.min.js"></script>
<script type="text/javascript" src="bs/bootstrap.min.js"></script>
<style>

  .bosluk{
    
    padding: 20px;
    }
    a:link {
  color: #FFF;
}


</style>
</head>

<?
include 'baglanti.php';

$bilgisor = $db->query("select * from tbl_resimler");
$bilgicek = $bilgisor->fetch(PDO::FETCH_ASSOC);


?>

<body class="bg-dark">
                        <!-- Menü Kısmı -->
<div class="container-fluid bg-dark">
  <div class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.php"><h5>Saadet Kuaför</h5></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php#hakkimizda">Hakkımızda</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.#fiyat">Fiyat Listesi</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="galeri.html">Galeri</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.html#iletisim">İletişim</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled" href="#">Saadet Akbulak</a>
    </li>
  </ul>
</nav>
</div>
</div>

                      <!-- 2.Kısım Slider -->
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
 
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Resimler/1.jpeg" width="100%" height="600"/>
      <div class="carousel-caption">
    <h3>Hayatta saçtan daha önemli şeyler var.</h3>
    <p>Ama saç başlamak için iyi bir nokta!</p>
    </div>
      </div>      
    <div class="carousel-item">
      <img src="Resimler/2.jpg" width="100%" height="600"/>
      <div class="carousel-caption">
    <h3>Gelin, en iyi değişimi saçlarınızla yapalım.</h3>
    <p>Cildinize uygun saç rengini belirleyelim ve mükemmel görünüme kavuşun!</p>
    </div>
    </div>
    <div class="carousel-item">
      <img src="Resimler/3.jpg" width="100%" height="600"/>
      <div class="carousel-caption">
    <h3>Son Rütuş!</h3>
    <p>Uygun saç renginden sonra son dokunuşlarımızla yeni görünümünüzle herkesi etkileyin!</p>
    </div>
    </div>
  </div>
</div>
</div>
<hr style="border-color: white">
<div class="container-fluid">
    	<h2 class="text-light text-center m-4 bosluk">—✄—GALERİ—✄—</h2>
        <div class="row">
        <div class="col-md-4 text-right">
        	<img src="galeri/1.JPG" class="img-thumbnail" height="350" width="350"/>
      </div>
        <div class="col-md-4 text-center">
        	<img src="galeri/7.JPG" class="img-thumbnail" height="350" width="350"/>
      </div>
        <div class="col-md-4 text-left">
        	<img src="galeri/8.JPG" class="img-thumbnail" height="350" width="350"/>
        </div>
        </div>
</div>

<h2 class="text-light text-center m-4 bosluk">—✄——✄——✄—</h2>

<div class="container-fluid">
        <div class="row">
        <div class="col-md-4 text-right">
        	<img src="galeri/5.JPG" class="img-thumbnail" height="350" width="350"/>
      </div>
        <div class="col-md-4 text-center">
        	<img src="galeri/2.JPG" class="img-thumbnail" height="350" width="350"/>
      </div>
        <div class="col-md-4 text-left">
        	<img src="galeri/6.JPG" class="img-thumbnail" height="350" width="350"/>
        </div>
        </div>
</div>

<h2 class="text-light text-center m-4 bosluk">—✄——✄——✄—</h2>

<div class="container-fluid">
        <div class="row">
        <div class="col-md-4 text-right">
        	<img src="galeri/3.JPG" class="img-thumbnail" height="350" width="350"/>
      </div>
        <div class="col-md-4 text-center">
        	<img src="galeri/12.JPG" class="img-thumbnail" height="350" width="350"/>
      </div>
        <div class="col-md-4 text-left">
        	<img src="galeri/4.JPG" class="img-thumbnail" height="350" width="350"/>
        </div>
        </div>
</div>
<h2 class="text-light text-center m-4 bosluk">—✄——✄——✄—</h2>

<div class="container-fluid">
        <div class="row">
        <div class="col-md-4 text-right">
        	<img src="galeri/9.JPG" class="img-thumbnail" height="350" width="350"/>
      </div>
        <div class="col-md-4 text-center">
        	<img src="galeri/15.JPG" class="img-thumbnail" height="350" width="350"/>
      </div>
        <div class="col-md-4 text-left">
        	<img src="galeri/16.JPG" class="img-thumbnail" height="350" width="350"/>
        </div>
        </div>
</div>

<h2 class="text-light text-center m-4 bosluk">—✄——✄——✄—</h2>

<div class="container-fluid">
        <div class="row">
        <div class="col-md-4 text-right">
        	<img src="galeri/10.JPG" class="img-thumbnail" height="350" width="350"/>
      </div>
        <div class="col-md-4 text-center">
        	<img src="galeri/14.JPG" class="img-thumbnail" height="350" width="350"/>
      </div>
        <div class="col-md-4 text-left">
        	<img src="galeri/17.JPG" class="img-thumbnail" height="350" width="350"/>
        </div>
        </div>
</div>
<h2 class="text-light text-center m-4 bosluk">—✄——✄——✄—</h2>

<div class="container-fluid">
        <div class="row">
        <div class="col-md-4 text-right">
        	<img src="galeri/k1.JPG" class="img-thumbnail" height="350" width="350"/>
      </div>
        <div class="col-md-4 text-center">
        	<img src="galeri/k2.JPG" class="img-thumbnail" height="350" width="350"/>
      </div>
        <div class="col-md-4 text-left">
        	<img src="galeri/k3.JPG" class="img-thumbnail" height="350" width="350"/>
        </div>
        </div>
</div>

<h2 class="text-light text-center m-4 bosluk">—✄——✄——✄—</h2>



</body>
</html>
