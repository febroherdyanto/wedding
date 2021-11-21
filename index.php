<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rega Fitrian & Gita Puspitasari</title>
  <meta content="Wedding Invitation - Rega Fitrian & Gita Puspitasari on Jaunary 15th, 2022" name="description">
  <meta content="Wedding Invitation" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/favicon.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/cssku.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="assets/js/jsbaru.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style2.css" rel="stylesheet">
  <link href="assets/css/fontlatin.css" rel="stylesheet">
  <script src="assets/js/maps.js"></script>
  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6pOhRHkx4cWjPijOGwQznSKrmSfL8DDA&callback=initMap&libraries=&v=weekly"
      async
    ></script>



  <style>
    .zoom1 {
  padding: 10px;
  transition: transform .9s;
}
.zoom1:hover {
  transform: scale(1.1);
}
  </style>


  <script>
    // Set the date we're counting down to
    // #Febro Wedding var countDownDate = new Date("Sept 22, 2022 10:00:00").getTime();
    // #Rega Weddiing
    var countDownDate = new Date("Jan 15, 2022 10:00:00").getTime();

    // Update the count down every 1 second

    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
      document.getElementById("demo").innerHTML = days + " Days " + hours + " Hr "
      + minutes + " Min " + seconds + " Sec ";

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
    </script>

  <!-- =======================================================
  * Template Name: MyResume - v4.3.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Our Profile</span></a></li>
        <li><a href="#story" class="nav-link scrollto"><i class="bx bx-heart"></i> <span>Our Story</span></a></li>
        <li><a href="#event" class="nav-link scrollto"><i class="bx bx-calendar-heart"></i> <span>Event</span></a></li>
        <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-images"></i> <span>Our Pictures</span></a></li>
        <?php //<li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li> ?>
        <li><a href="#testimonials" class="nav-link scrollto"><i class="bx bx-face"></i> <span>Wish</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h2 class="fontlatin">The Wedding</h2><br>
      <h1 class="fontlatin">Rega Fitrian & Gita Puspitasari</h1>
      <br>
      <p><span class="typed" data-typed-items="A perfect love is when a couple fall in love for many times and always with the same person, In silence I fight for your love in my dua, Marriage is the golden ring in a chain whose beginning is a glance and whose ending is eternity"></span></p>
      
      <br>
      <h1 id="demo" class="countdown py-4 newfonts"></h1>
      
      <?php /*
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      */?>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>OUR PROFILE</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>


        <div class="row" style="text-align: center;"> <!-- === DEFINE PERSONAL DETAIL ===-->
          <div class="col-lg-5" data-aos="fade-up">
            <div class="" style="">
              <img src="assets/img/febro.jpg" class="zoom1" style="border-radius:50%;" width="300px" height="300px">
              <div class="col-lg-12 content" >
                <h3>Rega Fitrian</h3>
                <p class="fst-italic">
                  Pria kelahiran tahun 1993.<br>
                  Putra ketiga dari Bapak Eddy Irianto dan Ibu Herry Sri Iswati.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-2" data-aos="fade-up" style="text-align: center;"><br><img src="assets/img/simboldan.png" width="150" height="200px"><br></div>
        
          <div class="col-lg-5" data-aos="fade-up">
            <div class="">
              <img src="assets/img/mustika.jpeg" class="zoom1" style="border-radius:50%;" width="300px" height="300px">
              <div class="col-lg-12 content">
                <h3>Gita Puspitasari</h3>
                <p class="fst-italic">
                  Wanita kelahiran 1999. <br>
                  Putri kedua dari Bapak Suratman dan Ibu Ranti.
                </p>
              </div>
            </div>
        </div>
        </div>  <!-- === END DEFINE PERSONAL DETAIL ===-->
      </div>
    </section><!-- End About Section -->


    <!-- ======= OUR STORY ======= -->
    <section id="story" class="story">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><i class="bx bx-heart"></i> LOVE STORY</h2>
          <p><i>Rega Fitrian & Gita Puspitasari</i></p>
        </div>


        <div class="row">
          <div class="col-lg-1"> </div>
          <div class="col-lg-9">
            <div class="resume">
              <h3 class="resume-title">Perjalanan Kisah Cinta Kami</h3>
                <div class="resume-item">
                  <h4>First Meet</h4>
                  <h5>2016</h5>
                  <p><em>Caruban, Madiun</em></p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio maxime consectetur veritatis iste tempore minima officia fugiat, maiores eaque ipsum at, sunt sapiente dolores odit. Illo pariatur incidunt facere error deleniti temporibus consequuntur exercitationem iure eaque, laborum, sint, voluptas fugiat?</p>
                </div>
                <div class="resume-item">
                  <h4>Dating</h4>
                  <h5>April 2016</h5>
                  <p><em>Caruban, Madiun</em></p>
                  <p>LLorem ipsum dolor sit amet consectetur, adipisicing elit. Optio maxime consectetur veritatis iste tempore minima officia fugiat, maiores eaque ipsum at, sunt sapiente dolores odit. Illo pariatur incidunt facere error deleniti temporibus consequuntur exercitationem iure eaque, laborum, sint, voluptas fugiat?</p>
                </div>
                <div class="resume-item">
                  <h4>Engagement</h4>
                  <h5>2016 - 2019</h5>
                  <p><em>Madiun - Cikarang</em></p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio maxime consectetur veritatis iste tempore minima officia fugiat, maiores eaque ipsum at, sunt sapiente dolores odit. Illo pariatur incidunt facere error deleniti temporibus consequuntur exercitationem iure eaque, laborum, sint, voluptas fugiat?</p>
                </div>
                <div class="resume-item">
                  <h4>Wedding</h4>
                  <h5>Mei 2021</h5>
                  <p><em>Caruban, Madiun</em></p>
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio maxime consectetur veritatis iste tempore minima officia fugiat, maiores eaque ipsum at, sunt sapiente dolores odit. Illo pariatur incidunt facere error deleniti temporibus consequuntur exercitationem iure eaque, laborum, sint, voluptas fugiat?</p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= END OUR STORY ======= -->

    <section id="event" class="event">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><i class="bx bx-heart"></i> EVENT SCHEDULE</h2>
          <p><i>Wedding</i></p>
        </div>
        
        <div class="row">
          <section class="design-process-section" id="process-tab">
            <div class="container">
              <div class="row">
                <div class="col-lg-12"> 
                  
                  <!-- design process steps--> 
                  <!-- Nav tabs -->
                  <div class="row">
                    <div class="col-lg-12" style="text-align: center;">

                      
                      <div class="col-lg-12">
                      <ul class="nav nav-pills" style="text-align: center; font-size: 20px; font-color: black;">
                        <li class="nav-item">
                          <a class="nav-link" href="#jakad" aria-controls="jakad" role="tab" data-toggle="tab"><i class="bx bx-home-heart" aria-hidden="true"></i> <p>Akad Nikah</p></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#jresepsi" aria-controls="jresepsi" role="tab" data-toggle="tab"><i class="bx bx-building-house" aria-hidden="true"></i></i>
                          <p>Resepsi</p></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#jngunduh" aria-controls="jngunduh" role="tab" data-toggle="tab"><i class="bx bxs-institution" aria-hidden="true"></i>
                          <p>Ngunduh</p></a>
                        </li>
                      </ul>
                      </div>


                    </div>
                  </div>
                  <!-- end design process steps--> 
                  
                  
                  
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="row tab-pane in active" id="jakad">
                      <div class="design-process-content">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="col-lg-8">
                              <h3 class="semi-bold fontlatin" style="text-align: center;">Akad Nikah</h3>
                              <p style="font-size: ; line-height: ;">InsyaAllah Akad Nikah akan diselenggarakan pada : </p>
                              <p style="font-size: ;"><i class="bx bx-calendar" aria-hidden="true"></i> Hari, Tanggal : ............... <br>
                              <i class="bx bx-time" aria-hidden="true"></i> Pukul : ............... <br>
                              <i class="bx bx-home" aria-hidden="true"></i> Alamat : ............... <br>
                              </p>
                            </div>
                            <div class="col-lg-4" style="text-align: center;">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6653.017618957977!2d111.63500860575547!3d-7.475417458373998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMjgnMjYuMyJTIDExMcKwMzgnMTguMyJF!5e0!3m2!1sid!2sid!4v1635677669334!5m2!1sid!2sid" width="350" height="250" style="border:0; border-radius: 3%;" allowfullscreen="" loading="lazy"></iframe>
                              <img src="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div role="tabpanel" class="row tab-pane" id="jresepsi">
                    <div class="design-process-content">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="col-lg-8">
                              <h3 class="semi-bold fontlatin" style="text-align: center;">Resepsi Pernikahan</h3>
                              <p style="font-size: ; line-height: ;">InsyaAllah Resepsi Pernikahan akan diselenggarakan pada : </p>
                              <p style="font-size: ;"><i class="bx bx-calendar" aria-hidden="true"></i> Hari, Tanggal : ............... <br>
                              <i class="bx bx-time" aria-hidden="true"></i> Pukul : ............... <br>
                              <i class="bx bx-home" aria-hidden="true"></i> Alamat : ............... <br>
                              </p>
                            </div>
                            <div class="col-lg-4" style="text-align: center;">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6653.017618957977!2d111.63500860575547!3d-7.475417458373998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMjgnMjYuMyJTIDExMcKwMzgnMTguMyJF!5e0!3m2!1sid!2sid!4v1635677669334!5m2!1sid!2sid" width="350" height="250" style="border:0; border-radius: 3%;" allowfullscreen="" loading="lazy"></iframe>
                              <img src="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div role="tabpanel" class="row tab-pane" id="jngunduh">
                    <div class="design-process-content">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="col-lg-8">
                              <h3 class="semi-bold fontlatin" style="text-align: center;">Ngunduh Mantu</h3>
                              <p style="font-size: ; line-height: ;">InsyaAllah Ngunduh Mantu akan diselenggarakan pada : </p>
                              <p style="font-size: ;"><i class="bx bx-calendar" aria-hidden="true"></i> Hari, Tanggal : ............... <br>
                              <i class="bx bx-time" aria-hidden="true"></i> Pukul : ............... <br>
                              <i class="bx bx-home" aria-hidden="true"></i> Alamat : ............... <br>
                              </p>
                            </div>
                            <div class="col-lg-4" style="text-align: center;">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6653.017618957977!2d111.63500860575547!3d-7.475417458373998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwMjgnMjYuMyJTIDExMcKwMzgnMTguMyJF!5e0!3m2!1sid!2sid!4v1635677669334!5m2!1sid!2sid" width="350" height="250" style="border:0; border-radius: 3%;" allowfullscreen="" loading="lazy"></iframe>
                              <img src="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
        </div>
      </div>
    </section>
    <!-- ======= END EVENT SECTION ======= -->



    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Facts</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>Portfolio

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
    

    <?php /*
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="">Sed Perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="bx bx-slideshow"></i>
              </div>
              <h4><a href="">Dele Cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bx bx-arch"></i>
              </div>
              <h4><a href="">Divera Don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
    */ ?>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>WISH FROM OUR FRIENDS</h2>
        </div>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>RSPV <i class="bx bx-envelope-open"></i></h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              
                <div class="form-group mt-3">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" required>
                </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor Handphone / WhatsApp (08xxxxx)" required>
              </div>
              <div class="form-group mt-3">
              <select class="form-control form-select" name="hadir" aria-label="Default select example" required>
                <option selected>Pilih Kehadiran Undangan</option>
                <option value="YA">Menghadiri Undangan</option>
                <option value="TIDAK">Tidak Menghadiri Undangan</option>
              </select>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Doa dan harapan untuk Pengantin" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Rega & Gita</h3>
      <p>Wedding Invitation</p>
      <div class="copyright" style="font-size: 10px;">
        &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved | 
          <span style="font-size: 10px;">Designed by <a href="">BootstrapMade</a> </span> <br>
          <span style="font-size: 15px;">Modify with &hearts; by. <a href="https://febroherdyanto.id">Febro Herdyanto</a></span><br><br>
          <div class="social-links">
            <a href="mailto:febroherdyanto@outlook.com" class="google-plus"><i class="bx bx-envelope"></i></a>
            <a href="https://linkedin.com/in/febroherdyanto" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            <a href="https://github.com/febroherdyanto" class="twitter"><i class="bx bxl-github"></i></a>
            <a href="https://t.me/febroherdyanto" class="telegram"><i class="bx bxl-telegram"></i></a>
            <a href="https://twitter.com/febroherdyanto" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="https://www.facebook.com/FebroHerdyantoAlmura" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://instagram.com/febroherdyanto" class="instagram"><i class="bx bxl-instagram"></i></a>
          </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
