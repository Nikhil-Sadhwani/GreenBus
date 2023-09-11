<?php
  include '../_dbconnect.php';
  include './Navbar.php';
?>

 

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Welcome to the <span>AjaymerU</span></h1>
            <h2>The Only Place for public transport in Ajmer</h2>
            <div class="text-center text-lg-start">
              <a href="#schedule" class="btn-get-started scrollto">Schedule</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="Video for Green Bus.mp4" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>How can this website help you?</h3>
            <p>Basically this website helps you to get to use public transport in a safe and simple way.</p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Schedule</a></h4>
              <p class="description">It can help you getting the right time of the bus arrival at your near by bus stop.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Effortless work</a></h4>
              <p class="description">While using this website you are free to work from any location </p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Book</a></h4>
              <p class="description">Check the bus you are traveling on and book your preferd seat. </p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->





    <!--  -->
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden" id="schedule">
      <style>
        .background-radial-gradient {
          background-color: hsl(186, 40%, 15%);
          background-image: radial-gradient(650px circle at 0% 0%,
              hsl(185, 41%, 35%) 15%,
              hsl(186, 41%, 30%) 35%,
              hsl(180, 41%, 20%) 75%,
              hsl(189, 44%, 22%) 80%,
              transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
              hsl(180, 41%, 45%) 15%,
              hsl(171, 41%, 30%) 35%,
              hsl(187, 41%, 20%) 75%,
              hsl(185, 40%, 19%) 80%,
              transparent 100%);
        }

        #radius-shape-1 {
          height: 220px;
          width: 220px;
          top: -60px;
          left: -130px;
          background: radial-gradient(#006b62, #1ffbff);
          overflow: hidden;
        }

        #radius-shape-2 {
          border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
          bottom: -60px;
          right: -110px;
          width: 300px;
          height: 300px;
          background: radial-gradient(#00646b, #1ff0ff);
          overflow: hidden;
        }

        .bg-glass {
          background-color: hsla(0, 0%, 100%, 0.9) !important;
          backdrop-filter: saturate(200%) blur(25px);
        }
      </style>

      <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
          <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
            <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(191, 84%, 95%)">
              Enter the palce <br />
              <span style="color: hsl(189, 81%, 75%)">You want to go</span>
            </h1>
            <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
              First choose your location of area then enter the place where you want to go and then click on the button
              it will find nearest busstand.

            </p>
          </div>

          <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

            <div class="card bg-glass">
              <div class="card-body px-4 py-5 px-md-5">
                <form method="post">
                  
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <!-- <input type="text" id="form3Example3" required name="start" class="form-control" />
                    <label class="form-label" for="form3Example3">From</label> -->
                    <div class="movie-container">
                        <label>From</label>
                        <select id="movie" name="start" required>
                        <option value="" disabled selected>Choose Location</option>
                            <option value="Ajmer">Ajmer</option>
                            <option value="pushkar">Pushkar</option>
                            <option value="kishangarh">Kishangarh</option>
                            <option value="badliya">Badliya</option>
                            <option value="Daurai">Daurai</option>
                            <option value="Foysagar">Foysagar</option>
                            <option value="Hatundi">Hatundi</option>
                            <option value="Makdwali">Makdwali</option>
                            <option value="Nosar">Nosar</option>
                            <option value="Nareli">Nareli</option>
                            <option value="JananaHospital">JananaHospital</option>
                        </select>
                    </div>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <!-- <input type="text" id="form3Example4" required name="end" class="form-control" />
                    <label class="form-label" for="form3Example4">To</label> -->
                    <div class="movie-container">
                        <label>To</label>
                        <select id="movie" name="end" required style="margin-left: 47px;">
                        <option value="" disabled selected>Choose Location</option>
                        <option value="Ajmer">Ajmer</option>
                            <option value="pushkar">Pushkar</option>
                            <option value="kishangarh">Kishangarh</option>
                            <option value="badliya">Badliya</option>
                            <option value="Daurai">Daurai</option>
                            <option value="Foysagar">Foysagar</option>
                            <option value="Hatundi">Hatundi</option>
                            <option value="Makdwali">Makdwali</option>
                            <option value="Nosar">Nosar</option>
                            <option value="Nareli">Nareli</option>
                            <option value="JananaHospital">JananaHospital</option>
                        </select>
                  </div>

                  <!-- Submit button -->
                  <button type="submit" name="sub2" class="btn btn-dark">Let's go</button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>

                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                </form>
                  <?php
                    if(isset($_POST['sub2'])==true){
                      
                      if(!empty($_POST['start'])) {
                        $selected = $_POST['start'];
                        if(!empty($_POST['end'])) {
                          $end = $_POST['end'];
                        
                          if($selected == "pushkar"){
                            // echo "<script>alert('Logged In Successfully');</script>";
                            echo "<script>document.location='Ajmerp.php';</script>";
                          }
                          else if($selected == "kishangarh"){
                              echo "<script>document.location='Ajmerk.php';</script>";
                          }
                          else if($selected == "Nareli"){
                              echo "<script>document.location='hatundiN.php';</script>";
                          }
                          else if($selected == "JananaHospital"){
                              echo "<script>document.location='DauraiJ.php';</script>";
                          }
                          else{
                            echo "<script>document.location='$end.php';</script>";
                          }
                        }
                      }
                      
                    } 
                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- Section: Design Block -->



    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>F.A.Q</h2>
          <p>Frequently Asked Questions</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                data-bs-target="#faq-list-1">How this website can help you? <i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  You can book your seats online and check schedule of buses from comfort of your home.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2"
                class="collapsed">How to check schedule of buses? <i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                    Enter the place or destination in given column of website then click on button given below.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3"
                class="collapsed">How to book tickets?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  After entering the destination. A table will appear check your preferd bus and then click on "Book" button.  
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4"
                class="collapsed">Why use this website?<i
                  class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  This website can help you save time and you can do frictionless work without any effort.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5"
                class="collapsed">Want any help? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  you may contact us if you have any Query or question provide your details in contact us form.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Contact Me</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>vaishali nagar,Ajmer,305001</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>XYZ@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+91 7xxxxx36xx</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="" method="post" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="cname" class="form-control" id="name" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="cemail" id="email" placeholder="Your Email" required>
                </div>

              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="csubject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="cmessage" rows="5" placeholder="Message" required></textarea>
              </div>
             
             <button name="btnSendMsg" type="submit">Send Message</button>
            </form>
            
          </div>
          <?php 
              if(isset($_POST['btnSendMsg'])==true){
                $name = $_POST['cname'];
                $email = $_POST['cemail'];
                $subject = $_POST['csubject'];
                $message = $_POST['cmessage'];

                $sql = "INSERT INTO contactinfo (name , email , subject , message) VALUES ('$name' , '$email' ,'$subject' , '$message')";
                $res = mysqli_query($conn ,$sql);
                
                echo "<script>alert('Message Sent Successfully');</script>";
              }
          ?>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
 

<?php  include './Footer.php' ?>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    const seats = document.querySelectorAll(".row .seat:not(.occupied)");
    const seatContainer = document.querySelector(".row-container");
    const count = document.getElementById("count");
    const total = document.getElementById("total");
    const movieSelect = document.getElementById("movie")
  </script>

</body>

</html>