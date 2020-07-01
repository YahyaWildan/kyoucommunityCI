
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KyouCommunity</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url()."assets/"; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo base_url()."assets/"; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()."assets/"; ?>css/agency.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">KyouCommunity</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Daftar Anggota</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url()."index.php/depan/login"; ?>" style="color:#c59301;">login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Tidak Perlu Bingung Mencari Komunitas IT</div>
        <div class="intro-heading text-uppercase">Kyou Community</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Yuk Join</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Divisi</h2>
          <h3 class="section-subheading text-muted">Kami Mempunyai Beberapa Divisi </h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Programming</h4>
          <p class="text-muted">Belajar Pemprogramman </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-palette fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Multimedia</h4>
          <p class="text-muted">Belajar Desain </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-network-wired fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Networking</h4>
          <p class="text-muted">Belajar Jaringan</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Dokumentasi</h2>
          <h3 class="section-subheading text-muted">Beberapa Acara yang telah dilakukan per devisi</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url()."assets/"; ?>img/portfolio/p.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Sharing Divisi Programming</h4>
            <p class="text-muted">VueJS</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url()."assets/"; ?>img/portfolio/m.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Sharing Divisi Multimedia</h4>
            <p class="text-muted">Inkscape</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url()."assets/"; ?>img/portfolio/j.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Sharing Divisi Jaringan</h4>
            <p class="text-muted">Git</p>
          </div>
        </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">Beberapa hal tentang kita </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url()."assets/"; ?>img/about/1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>1 November 2019</h4>
                  <h4 class="subheading">Awal ide membuat web KyouCommunity</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Awal ide membuat web KyouCommunity muncul karena saya ingin membantu orang - orang yang lebih membutuhkan dan saya ingin menyalurkan bantuan-bantuan dari orang lain untuk orang yang lebih membutuhkan .</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="<?php echo base_url()."assets/"; ?>img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>1 Januari 2020</h4>
                  <h4 class="subheading">WEB Launching</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">Akhirnya web saya launching <i class="fa fa-heart" aria-hidden="true"></i></p>
                  <p class="text-muted">Saya bekerja sama dengan beberapa orang dalam pembuatan web ini. Semoga dengan adanya web ini orang-orang yang kebingungan ingin membantu sanak sodara yang menjadi korban bencana alam atau yang lainnya dapat bergabung untuk donasi yang terpercaya di Kita Bantu .</p>
                </div>
              </div>
            </li>

            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Be Part
                  <br>Of Our
                  <br>Story!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
          <h3 class="section-subheading text-muted">this is my team</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url()."assets/"; ?>img/team/1.jpg" alt="">
            <h4>Wild </h4>
            <p class="text-muted">CEO</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/ywild.id">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url()."assets/"; ?>img/team/3.jpeg" alt="">
            <h4>May</h4>
            <p class="text-muted">CTO</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/ygofficialblink">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/jennierubyjane">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url()."assets/"; ?>img/team/2.jpeg" alt="">
            <h4>Sat</h4>
            <p class="text-muted">CMO</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/rvsmtown">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/renebaebae/">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">Orang-orang yang sangat berpengaruh bagi saya dalam pembuatan web ini . Sukses dan sehat selalu</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="<?php echo base_url()."assets/"; ?>img/logos/envato.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="<?php echo base_url()."assets/"; ?>img/logos/designmodo.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="<?php echo base_url()."assets/"; ?>img/logos/themeforest.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="<?php echo base_url()."assets/"; ?>img/logos/creative-market.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Daftar Anggota</h2>
          <h3 class="section-subheading text-muted">Silahkan Mendaftar!</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form action="<?php echo base_url()."index.php/depan/proses_daftar_anggota"; ?>" method="POST">
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-xs-4 col-md-6 text-center">
                <div class="form-group">
                  <input name="username" class="form-control" id="name" type="text" placeholder="Username" required="required" data-validation-required-message="Masukan username">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input name="email" class="form-control" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Masukan email">
                  <p class="help-block text-danger"></p>
                  <div id="result-email">
                    
                   
                  </div>
                </div>
                <div class="form-group">
                  <input name="password" class="form-control" id="phone" type="tel" placeholder="Password" required="required" data-validation-required-message="Masukkan Password">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="col-lg-12 text-center">
                <div id="success"></div>
                <input class="btn btn-primary btn-xl text-uppercase" type="submit" value="Daftar">
              </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; KyouCommunity </span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Bantu korban corona virus</h2>
                <p class="item-intro text-muted">Bantu corona virus di Semarang</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url()."assets/"; ?>img/portfolio/corona.jpg" alt="">
                <p>Donasi Insan OJK Program peduli Covid-19<p>
                <p>1000 baju Hamzat & 380 Boks Masker Medis<p> 
                <p>Diberikan kepada Palang Merah Indonesia dan nantinya akan diberikan kepada rumah sakit yang menangani COVID-19 diSemarang<p>
                <ul class="list-inline">
                  <li>Tanggal : 20 mei 2020</li>
                  <li>Tempat : Jakarta</li>
                  <li>kepada Palang Merah Indonesia </li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Bantu Korban Gunung Merapi</h2>
                <p class="item-intro text-muted">Bantu Korban Gunung Merapi Yogjakarta</p>
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url()."assets/"; ?>img/portfolio/merapi.jpg" alt="">
                <p>Bantuan dari Badan Nasional Penanggulangan Bencana (BNPB)  yang diberikan langsung kepada Korban Bencana gunung merapi di Kecamatan Tawangsari</p>
                <p>Beberapa bantuan yang diberikan :</p>
                <p>📍 Bantuan Logistik </p>
                <p>📍 Bantuan untuk penerima program peningkatan kesejahteraan</p>
                <p>📍 Bantuan disabilitas, peralatan pertanian, pendidikan, kendaraan operasional dan bibit tanaman untuk petani di Sukoharjo.</p>
                <p>📍 Bantuan alat dengar bagi warga disabilitas, bantuan pendidikan dan pembinaan untuk pelajar berprestasi.</p>
                <ul class="list-inline">
                  <li>Tanggal : 5 april 2020</li>
                  <li>Tempat : di Kecamatan Tawangsari, Kabupaten Sukoharjo, Jateng </li>
                  <li>kepada Korban Bencana gunung merapi di Kecamatan Tawangsari </li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Bantu Korban Tanah Longsor</h2>
                <p class="item-intro text-muted">Bantu Korban Tanah Longsor Bogor </p>
                <img class="img-fluid d-block mx-auto" src="<?php echo base_url()."assets/"; ?>img/portfolio/bogor.jpg" alt="">
                <p>Laboratorium Klinik CITO Cabang Bogor menyalurkan bantuan secara langsung kepada para korban bencana di Kecamatan Sukajaya, Kabupaten Bogor. </p>
                <p>Selain menyerahkan bantuan, Laboratorium Klinik CITO juga melakukan pemeriksaan kesehatan bagi para warga yang terkena bencana alam ini.</p>
                <p>Dengan bantuan ini diharapkan dapat membantu meringankan beban para korban dan untuk memantau kondisi kesehatan mereka.</p>
                <ul class="list-inline">
                  <li>Tanggal : 4 Maret 2020</li>
                  <li>Tempat : di kec. Sukajaya, kab.bogor </li>
                  <li>kepada Korban Banjir Bandang & Tanah Longsor kec. Sukajaya, kab.bogor</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url()."assets/"; ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url()."assets/"; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo base_url()."assets/"; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="<?php echo base_url()."assets/"; ?>js/jqBootstrapValidation.js"></script>
  <script src="<?php echo base_url()."assets/"; ?>js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url()."assets/"; ?>js/agency.min.js"></script>

  <script>
    $("#email").change(function(){
      var emailnya = $("#email").val();
      console.log(emailnya);
      $.ajax({
        type: "POST",
        data: {email: emailnya},
        url: '<?php echo base_url();?>index.php/depan/email_ada',
        success: function(msg){
          if(msg=='1'){
            $('#result-email').html('<label style="color:#dd4b39;">Maaf email sudah ada, silahkan ganti yang lain</label>');
          }else{
            $('#result-email').html('<label style="color:#00a65a;">Yeay, Email bisa digunakan</label>');
          }
        }
      });
    });
  </script>

</body>

</html>
