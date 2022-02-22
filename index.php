<?php 

    //data realtime api covid-19
    $url = file_get_contents('https://apicovid19indonesia-v2.vercel.app/api/indonesia/');
    $data = json_decode($url, true);
    //merubah fromat angka

    $data_covid1 = $data['positif'];
    $data_covid2 = $data['sembuh'];
    $data_covid3 = $data['dirawat'];
    $data_covid4 = $data['meninggal'];
  
    $data_covid1_result = number_format($data_covid1,0,',','.');
    $data_covid2_result = number_format($data_covid2,0,',','.');
    $data_covid3_result = number_format($data_covid3,0,',','.');
    $data_covid4_result = number_format($data_covid4,0,',','.');


    //data api provinsi ??
    // $dataProvinsi = file_get_contents('https://apicovid19indonesia-v2.vercel.app/api/indonesia');
    // $provinsi = json_decode($dataProvinsi, true);


    //data api vaksin 
    // $url = file_get_contents('https://cekdiri.id/vaksinasi/');
    // $dataVaksin = json_decode($url, true);
    // $dataVaksin = $dataVaksin["monitoring"];

    // $dataVaksin = end($dataVaksin);
    // //total sasaran vaksinasi
    // $total_sasaran_vaksinasi = number_format($dataVaksin['total_sasaran_vaksinasi'],0,',','.');

    // //vaksin1
    // $vaksinasi1 = number_format($dataVaksin['vaksinasi1'],0,',','.');
    // $persentaseVaksinasi1 = $dataVaksin['cakupan']['vaksinasi1'];
    // $lansia1 = $dataVaksin['cakupan']['lansia_vaksinasi1'];    
    // $masyarakatumum1 = $dataVaksin['cakupan']['masyarakat_umum_vaksinasi1'];    
    // $kelompok_usia1 = $dataVaksin['cakupan']['kelompok_usia_12_17_vaksinasi1'];


    // //vaksin2
    // $vaksinasi2 = number_format($dataVaksin['vaksinasi2'],0,',','.');
    // $persentaseVaksinasi2 = $dataVaksin['cakupan']['vaksinasi2'];
    // $tenagaKesehatan2 = $dataVaksin['cakupan']['sdm_kesehatan_vaksinasi2'];
    // $lansia2 = $dataVaksin['cakupan']['lansia_vaksinasi2'];
    // $petugasPublik2 = $dataVaksin['cakupan']['petugas_publik_vaksinasi2'];
    // $masyarakatumum2 = $dataVaksin['cakupan']['masyarakat_umum_vaksinasi2'];
    // $kelompok_usia2 = $dataVaksin['cakupan']['kelompok_usia_12_17_vaksinasi2'];

    //data api covid-19 news
    $url = file_get_contents('https://dekontaminasi.com/api/id/covid19/news');
    $news = json_decode($url, true);
    date_default_timezone_set('Asia/Jakarta');


    //data api hoax news
    $url = file_get_contents('https://dekontaminasi.com/api/id/covid19/hoaxes');
    $hoax = json_decode($url, true);
    date_default_timezone_set('Asia/Jakarta');

    //rubah format language date to indonesian
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
    <!-- font-awesome icons css -->
    <link rel="stylesheet" href="css/all.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- web icon -->
<link rel="shortcut icon" href="img/logo/virus.svg">
<!-- web icon -->  

<!-- icon love-->
<!-- <link href='//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'/>
 -->
 <div class="preloader">
   <span></span>
 </div>

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
              <a class="nav-link active" data-scroll-nav="0" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-scroll-nav="1" href="#">Indonesia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-scroll-nav="2" href="#">Vaksin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rumah-sakit.php">Rumah Sakit</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-scroll-nav="3" href="#">Portal Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-scroll-nav="4" href="#">Donasi</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Navbar End-->

<!-- mengakali padding atas -->
  <section class="mengakali">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </section>
<!-- akhir dari padding atas -->

<!-- Home -->
  <section class="home pt-4" data-scroll-index="0">
  <div class="home-img">
    <div class="img-1">
      <img src="img/components/planets.svg" alt="">
    </div>
    <div class="img-2">
      <img src="img/components/partikel.svg" alt="">
    </div>
  </div>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7">
          <div class="home-box">
          <h1 class="font-weight-bold">Informasi Covid-19</h1>
          <p>Tetap semangat, Tetap kompak, Sayangi dirimu, Sayangi Keluargamu dengan tetap</p>
          <p>#dirumahsaja</p>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-background">
          <img src="img/assets/belajar.svg">
          </div>
        </div>
      </div>
    </div>
  </section>          
<!-- Akhir Home -->



<section class="coba" data-scroll-index="1">
 <!-- API Covid -->
  <section>
    <div class="api-real1 text-center pt-4 ">
     <div class ="container">
        <div class ="row">
          <div class = "col-sm-12">
            <div class="col-sm-12 ">
              <h3 class="font-weight-bold">Data <span>Real-Time</span></h3>
              <p class="font-weight-bold">COVID-19 di Indonesia</p> 
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- akhir dari header data covid indo -->

<!-- covid indo data Api -->
    <div class="api-real text-center mt-2">
     <div class ="container">
        <div class ="row">
          <div class = "col-sm-6">
            <div class = "box mt-2">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="number font-weight-bold"><span class="count"><?= $data_covid1_result;?></span></h4>
                    <p class="text-danger">Terkonfirmasi</p>
                  </div>
                </div>
            </div>
          </div>

      <div class = "col-sm-6">
            <div class = "box mt-2">
                <div class="row">
                  <div class="col-sm-12">
                   <h4 class="number font-weight-bold"><span class="count"><?= $data_covid2_result;?></span></h4>
                    <p class="text-warning">Dirawat</p>
                  </div>
                </div>
            </div>
          </div>

      <div class = "col-sm-6">
            <div class = "box mt-2">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="number font-weight-bold"><span class="count"><?= $data_covid3_result;?></span></h4>
                    <p class="text-success">Sembuh</p>
                  </div>
                </div>
            </div>
          </div>

      <div class = "col-sm-6">
            <div class = "box mt-2">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="number font-weight-bold"><span class="count"><?= $data_covid4_result;?></span></h4>
                    <p style="color:#AE60C6;">Meninggal</p>
                  </div>
                </div>
            </div>
          </div>
         </div>
        </div>
      </div>
  </section>
  <!-- Akhir dari API data covid -->

  <!-- last updated -->
  <section>
  <div class="lastupdate">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
           <div class="text1 align-self-start">
            <div class="d-flex justify-content-between">
             <h5>
              Pembaruan Terakhir
            </h5>
            <a href="provinsi.html" class="text2" style="font-size: 1.3em;">Details >></a>
            </div>
            <p>
              <?= $data['lastUpdate'];?>
            </p>
           </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  </section>
  <!-- Akhir dari last update -->

<!-- vaksin -->
<section>
  <div class="vaksin-box" data-scroll-index="2">
  <div class="container">
    <div class="row">
      <div class="col-sm-7 text-center">
        <div class="d-flex justify-content-center">
          <div class="col-sm-6">
            <h1 class="font-weight-bold mt-4">Vaksin</h1>
            <hr class="mb-5">
            </div>
          </div>
        <img src="img/vaksin1.svg" class="mt-5">
      </div>

      <div class="col-sm-5">
        <div class="vaksin1">
          <div class="row">
            <div class="vaksin-box1 col-sm-12 mb-3">
             <h2 class="text-center font-weight-bold">Vaksinasi 1</h2>
              <div class="d-flex justify-content-center mt-3">
                <h3 class="text font-weight-bold"><?= $vaksinasi1;?></h3>
                  <p>&nbsp;</p>
                    <div class="text1 align-self-end">
                  <p>Dosis telah diberikan</p>
                </div>
              </div>
              <p class="persentase"><span><?= $persentaseVaksinasi1;?> dari <?= $total_sasaran_vaksinasi;?> telah divaksin</p></span>
            <div class="d-flex justify-content-between text-warning">
            <p>Tenaga Kesehatan</p>
            <p>100%</p>
            </div>
              <div class="d-flex justify-content-between text-info">
                  <p>lansia</p>
                  <p><?= $lansia1;?></p>
              </div>
                <div class="d-flex justify-content-between text-success">
                  <p>Petugas Publik</p>
                  <p>100%</p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="text4"><span>Masyarakat Umum</span></p>
                  <p class="text4"><span><?=$masyarakatumum1;?></span></p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="text5"><span>Kelompok Usia 12-17 tahun</span></p>
                  <p class="text5"><span><?=$kelompok_usia1;?></span></p>
                </div>
              </div>
              <div class="vaksin-box1 col-sm-12 mb-3">
             <h2 class="text-center font-weight-bold">Vaksinasi 2</h2>
              <div class="d-flex justify-content-center mt-3">
                <h3 class="text font-weight-bold"><?= $vaksinasi2;?></h3>
                  <p>&nbsp;</p>
                    <div class="text1 align-self-end">
                  <p>Dosis telah diberikan</p>
                </div>
              </div>
              <p class="persentase"><span><?= $persentaseVaksinasi2;?> dari <?= $total_sasaran_vaksinasi;?> telah divaksin</span></p>
            <div class="d-flex justify-content-between text-warning">
            <p>Tenaga Kesehatan</p>
            <p><?= $tenagaKesehatan2;?></p>
            </div>
              <div class="d-flex justify-content-between text-info">
                  <p>lansia</p>
                  <p><?= $lansia2;?></p>
              </div>
                <div class="d-flex justify-content-between text-success">
                  <p>Petugas Publik</p>
                  <p><?= $petugasPublik2;?></p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="text4"><span>Masyarakat Umum</span></p>
                  <p class="text4"><span><?=$masyarakatumum2;?></span></p>
                </div>
                <div class="d-flex justify-content-between">
                  <p class="text5"><span>Kelompok Usia 12-17 tahun</span></p>
                  <p class="text5"><span><?=$kelompok_usia2;?></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="text3 align-self-start">
             <h5>
              Pembaruan Terakhir
            </h5>
            <p>
              <?= $dataVaksin['date'];?>
            </p>
           </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Akhir dari Vaksin -->



<!-- Covid Prevention -->

  <section class="covid-prevention text-center">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 mb-4">
        <h3 class="font-weight-bold"><span>Pencegahan </span>Covid-19</h3>
        </div>
        <div class="col-sm-6 mb-3">
          <div class="prevention-box">
            <div class="d-flex justify-content-center">
              <img src="img/covid-prevention1/wearing-mask.png">
            </div>
            <p>1. Pakai Masker</p>
          </div>
        </div>
          <div class="col-sm-6 mb-3">
            <div class="prevention-box">
              <div class="d-flex justify-content-center">
                <img src="img/covid-prevention1/wash-hand.png">
              </div>
              <p>2. Cuci Tangan</p>
            </div>
        </div>
          <div class="col-sm-6 mb-3">
            <div class="prevention-box">
              <div class="d-flex justify-content-center">
                <img src="img/covid-prevention1/clean.png">
              </div>
              <p>3. Jaga Kebersihan</p>
            </div>
        </div>
          <div class="col-sm-6 mb-3">
            <div class="prevention-box">
              <div class="d-flex justify-content-center">
                <img src="img/covid-prevention1/social-distance.png">
              </div>
              <p>4. Jaga Jarak</p>
            </div>
        </div>
      </div>
    </div>
  </section>

<!-- Akhir dari Covid Prevention -->


<!-- Berita Covid -->

  <section class="covid-news pt-5" data-scroll-index="3">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 pb-3" id="portal-berita">
          <div class="row align-items-center">
            <div class="col-sm-7">
          <h2 class= "text-center">Portal <span>Berita</span>
          </h2>
          <br>
          <p>
            Mengingat banyak sekali berita hoax yang muncul ditengah keresahan masyarakat, kami mencoba menyajikan berita secara aktual dan terpercaya untuk memastikan anda tidak termakan berita hoax.
          </p>
        </div>
        <div class="col-sm-5">
          <img src="img/Questions-pana1.svg">
        </div>
        </div>
      </div>
        <div class="col-sm-12 pb-1">
          <div class="berita d-flex justify-content-between">
            <h2>Berita Covid-19</h2>
            <div class="text1 align-self-center">
            <a type="button" href="news.php" style=
            "font-size: 0.8em;" >Baca selengkapnya>>
            </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
        <div class="news mt-2">
          <a href="<?=$news[0]["url"];?>"
           type="button"><?=$news[0]["title"]; ?></a>
          <div class="d-flex justify-content-end pt-3">
          <p><?= indonesian_date(date("d F Y", round($news[0]["timestamp"]/1000)))?></p>
          </div>
          </div>
          </div>
        <div class="col-sm-6">
        <div class="news mt-2">
          <a href="<?=$news[1]["url"];?>"
           type="button"><?=$news[1]["title"]; ?></a>
          <div class="d-flex justify-content-end pt-3">
            <p><?= indonesian_date(date("d F Y", round($news[1]["timestamp"]/1000)))?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Hoaxs news -->
    <div class="hoax-news">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 pb-1">
            <div class="d-flex justify-content-between">
              <h2>Cek Hoax</h2>
              <div class="text1 align-self-center">
              <a type="button" href="hoax.php" style=
              "font-size: 0.9em;">Baca selengkapnya>>
              </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
          <div class="hoax mt-2">
            <a href="<?=$hoax[0]["url"];?>"
             type="button"><?=$hoax[0]["title"]; ?></a>
            <div class="d-flex justify-content-end pt-3">
            <p><?= indonesian_date(date("d F Y", round($hoax[0]["timestamp"]/1000)))?></p>
            </div>
            </div>
            </div>
          <div class="col-sm-6">
          <div class="hoax mt-2">
              <a href="<?=$hoax[1]["url"];?>"
               type="button"><?=$hoax[1]["title"]; ?></a>
              <div class="d-flex justify-content-end pt-3">
              <p><?= indonesian_date(date("d F Y", round($hoax[1]["timestamp"]/1000)))?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Akhir dari Hoaxs -->
  </section>


<!-- Akhir Berita Covid -->



<!-- Donasi -->

  <section class="donasi" data-scroll-index="4">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="font-weight-bold text-center">Donasi</h1>
          <div class="col-sm-4 offset-sm-4">
          <hr>
          </div>
          <p >
          Kasus virus Corona di Indonesia terus bertambah. Untuk bersama-sama menghadapi COVID-19, ada beberapa cara yang bisa kamu lakukan. Kitabisa mengajak para #OrangBaik untuk gotong royong saling memberi informasi dan membantu berbagai kebutuhan yang diperlukan.
          </p>
          <br>
          <div class="d-flex justify-content-center pb-4">
          <button class="btn btn-outline-secondary font-weight-bold" type="button" id="refresh"  style="font-size: 1.5em;"><a href="https://kitabisa.com/campaign/indonesialawancorona/donation-amount?slug=indonesialawancorona&utm_campaign=bersama_lawan_corona&utm_medium=homepage&utm_source=microsite_lawancorona_web_ktbs" target="_blank" type="button">Donasi Sekarang</a></button>
          </div>
          <p>#TetapKompakWalauBerjarak
          #dirumahsaja</p>
        </div>
      </div>
    </div>
  </section>


<!-- Akhir dari donasi -->
   
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