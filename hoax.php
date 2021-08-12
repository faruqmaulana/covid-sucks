<?php 
	
	$url = file_get_contents('https://dekontaminasi.com/api/id/covid19/hoaxes');
    $data = json_decode($url, true);

	date_default_timezone_set('Asia/Jakarta');
  include('date_helper.php');
 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>
      Pantau penyebaran covid-19
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font-awesome icons css -->
    <link rel="stylesheet" href="css/all.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/prov.css">
</head>
<body>

<!-- web icon -->
<link rel="shortcut icon" href="img/logo/virus.svg">
<!-- web icon -->  


<!-- icon love-->
<link href='//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'/>


<!-- Navbar Start-->
 <nav class="navbar navbar-expand-md fixed-top">
    <div class="container">  
      <!-- Brand -->
      <a class="navbar-brand" href="index.php" class="font-weight-bold">Covid-19</a>

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <i class="fas fa-bars"></i>
      </button>

       <!-- Navbar links -->
       <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Indonesia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Vaksin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rumah-sakit.php">Rumah Sakit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-scroll-nav="0" href="#">Portal Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Donasi</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Navbar End-->

<!-- mengakali padding atas -->
  <section class="mengakali1" data-scroll-index="0">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </section>
<!-- akhir dari padding atas -->

<!-- Hoaxs news -->

  <section class="hoax-news mt-4 ">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="d-flex justify-content-between">
            <h2 class="pl-3">Cek Fakta</h2>
            <div class="text1 align-self-center">
            <a type="button" href="index.php" style="font-size: 0.9em;">Kembali</a>
            </div>
          </div>
        </div>
        <?php foreach ($data as $hoaxs) : ?>
        <div class="col-sm-6">
        <div class="hoax1 mt-2">
          <a href="<?=$hoaxs["url"];?>"
          class="pl-2 pt-1" type="button"><?=$hoaxs["title"]; ?></a>
          <div class="d-flex justify-content-end">
          	<div class="text1 align-self-end">
          	  <p class="mt-2">
          	  	<?= indonesian_date(date("d F Y", round($hoaxs["timestamp"]/1000)))?></p>
          	</div>
          </div>
          </div>
          </div>
      	<?php endforeach; ?>
      </div>
    </div>
  </section>
<!-- Akhir dari Hoaxs -->

<!-- Footer -->
   <footer class="text-center text-light pt-3 pb-3">
      Made with <i class="fa fa-heart" aria-hidden="true" style="color:#be1931"></i> <a type="button" href="https://www.instagram.com/faruq.maulanaa/" target="_blank"> by Promise</a>
   </footer>
<!-- Akhir dari footer -->


<!-- Theme -->

  <div class="toggle-theme">
    <i class="fas "></i>
  </div>

<!-- Akhir Theme -->






<!-- jquery js -->
<script src="js/jquery.min.js"></script>
<!-- popper js -->
<script src="js/popper.min.js"></script>  
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- main js -->
<script src="js/main.js"></script>  
<!-- scroll js -->
<script src="js/scrollIt.min.js"></script>
<!-- Provinsi  -->
<script src="js/removeBanner.js"></script>
</body>


</html>