<?php 
	
	  $dataRS = file_get_contents('https://dekontaminasi.com/api/id/covid19/hospitals');
  	  $hospital = json_decode($dataRS, true);

 ?>
<!DOCTYPE html>
<html lang="en">
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
              <a class="nav-link" data-scroll-nav="0" href="#">Rumah Sakit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Portal Berita</a>
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



<!-- Header page -->

<section class="rumah-sakit pt-4 pb-3">
	<div class="container">
		<div class="row">
		<div class="col-sm-12">
		<h5 class="font-weight-bold">
			Data rumah sakit rujukan.
		</h5>
		<p>Kami juga menyajikan data rumah sakit rujukan, berisi data penting berupa nama, alamat dan nomor yang bisa dihubungi.</p>
		</div>
    </div>
	</div>
</section>
<!-- Akhir dari header page -->



<!-- Data Rumah Sakit rujukan -->
	<section class="hospitals pb-5">
		<div class="container">
         <div class="card">
          <div class="card-header text-center">
            <p class="font-weight-bold" style="font-size: 0.8em;">Data Rumah Sakit Rujukan Pasien Corona</p>
          </div>
            <div class="card-body">
              <div class="scroll">
              <table class="table table-bordered table-striped table-responsive">
            <thead>
              <p>
                <th class="atasbro" scope="col">No.</th>
                <th class="atasbro" scope="col">Rumah Sakit</th>
                <th class="atasbro" scope="col">Alamat</th>
                <th class="atasbro" scope="col">Wilayah</th>
                <th class="atasbro" scope="col">No. Telp</th>
              </p>
            </thead>
            <tbody class="badan">
              <?php
                  $b=1;
                  foreach($hospital as $hospt) :
              ?>
              <tr>
                <p>
                  <td><?= $b++; ?></td>
                  <td><span><?= $hospt['name'];?></span></td>
                  <td><span><?= $hospt['address'];?></span></td>
                  <td><span><?= $hospt['region'];?></span></td>
                  <td><span><?= $hospt['phone'];?></span></td>
                </p>
              </tr>
              <?php
              endforeach;
              ?>
           </tbody>
               </table>
               </div>
             </div>
           </div>
        </div> 
      </section>
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



<!-- Akhir Data Provinsi -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



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
<!-- Remove Background -->
<script src="js/removeBanner.js"></script>
</body>

</html>