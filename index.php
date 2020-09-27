<?php 
include('./include/db.php'); 
$query = "SELECT * FROM basic_setup,personal_setup,aboutus_setup";
$runquery = mysqli_query($connection,$query);
if(!$connection){
    header("location:index-2.html");
}
$data = mysqli_fetch_array($runquery);
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?=$data['title']?></title>
    <meta content="<?=$data['description']?>" name="description">
    <meta content="<?=$data['keyword']?>" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/<?=$data['icon']?>" rel="icon">
    <link href="assets/img/<?=$data['icon']?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header-tops">
    <div class="container">

    <a href="index.php">

<img src="./assets/img//hmiyed hassan.png" style="width: 50%;" alt="">

</a>
     
      <a href="index.php" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      
      <h2>I'm a passionate <span>Web Developer</span> from Morocco</h2>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#resume">Resume</a></li>
          <!-- <li><a href="#services">Services</a></li> -->
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class="social-links">
        <a href="<?=$data['twitter']?>" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="<?=$data['facebook']?>" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="<?=$data['instagram']?>" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="<?=$data['skype']?>" class="google-plus"><i class="icofont-skype"></i></a>
        <a href="<?=$data['linkedin']?>" class="linkedin"><i class="icofont-linkedin"></i></a>
        <a href="<?=$data['github']?>" class="github"><i class="icofont-github"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

    

<div class="section-title">
    <h2>About</h2>
    <p><?=$data['shortdesc']?></p>
</div>

<div class="row">
    <div class="col-lg-4" data-aos="fade-right">
        <img src="./assets/img/<?=$data['profilepic']?>" class="img-fluid" alt="">
    </div>
    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3><?=$data['heading']?></h3>
       
        <div>
            <ul class="row">
                <li class="col-lg-6"><i class="icofont-rounded-right"></i> <strong>Birthday :</strong> <?=$data['dob']?></li>
                <li class="col-lg-6"><i class="icofont-rounded-right"></i> <strong>Email :</strong> <?=$data['emailid']?></li>
                <li class="col-lg-5"><i class="icofont-rounded-right"></i> <strong>Mobile :</strong> <?=$data['mobile']?></li>
               
                
                


            </ul>
        </div>
        <p>
            <?=$data['longdesc']?>
        </p>
    </div>
</div>

</div>
    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="count-box">
            <i class="icofont-simple-smile"></i>
            <span data-toggle="counter-up">Not yet</span>
            <p>Happy Clients</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="icofont-document-folder"></i>
            <span data-toggle="counter-up">14</span>
            <p>Projects</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="icofont-live-support"></i>
            <span data-toggle="counter-up">24</span>
            <p>Available daily hours</p>
          </div>
        </div>

      </div>

    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

                    <div class="row col-lg-12" data-aos="fade-up">

        <?php
                    $query3 = "SELECT * FROM skills";
$runquery3= mysqli_query($connection,$query3);
while($row = mysqli_fetch_array($runquery3)){

          $id = $row['id'];
          $skill = $row['skill'];
          $score = $row['score'];

    ?>
         

          <div class="progress col-lg-6">

            <span class="skill"><?php echo"$skill"?> <i class="val"><?php echo"$score"?>%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo"$score"?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

<?php } ?>

        

        </div>

      </div>

    </div><!-- End Skills -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="icofont-football-alt" style="color: #5578ff;"></i>
            <h3>Football</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="icofont-motor-biker" style="color: #b2904f;"></i>
            <h3>Road trip</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="icofont-read-book" style="color: #e80368;"></i>
            <h3>Reading</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="icofont-code-alt" style="color: #e361ff;"></i>
            <h3>Coding</h3>
          </div>
       
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Education</h3>
                        <?php
                    $query4 = "SELECT * FROM resume WHERE category='e'";
                    $runquery4= mysqli_query($connection,$query4);
                    while($data4=mysqli_fetch_array($runquery4)){ ?>
                    <div class="resume-item">
                            <h4><?=$data4['title']?></h4>
                            <h5><?=$data4['year']?></h5>
                            <p><em><?=$data4['ogname']?></em></p>
                            <p><?=$data4['workdesc']?></p>
                        </div>
                                <?php }   ?>
                        
                        
                        
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        
                        <?php
                    $query4 = "SELECT * FROM resume WHERE category='pe'";
                    $runquery4= mysqli_query($connection,$query4);
                    while($data4=mysqli_fetch_array($runquery4)){
                       ?>
                    <div class="resume-item">
                            <h4><?=$data4['title']?></h4>
                            <h5><?=$data4['year']?></h5>
                            <p><em><?=$data4['ogname']?></em></p>
                            <p><?=$data4['workdesc']?></p>
                        </div>
                                <?php
}
                    ?>
                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->   
 

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-front">Front end</li>
            <li data-filter=".filter-back">Back end</li>
            <li data-filter=".filter-design">Design</li>
            
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

      <?php
                    $query5 = "SELECT * FROM portfolio";
$runquery5= mysqli_query($connection,$query5);
while($data5=mysqli_fetch_array($runquery5)){
    ?>


        <div class="col-lg-4 col-md-6 portfolio-item filter-<?=$data5['filter']?>">
          <div class="portfolio-wrap">
            
            <img src="assets/img/<?=$data5['projectpic']?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?=$data5['projectname']?></h4>
              <p><a href="<?=$data5['projectlink']?>"><?=$data5['projectlink']?></a></p>
              <div class="portfolio-links">
                
                <a href="assets/img/<?=$data5['projectpic']?>" data-gall="portfolioGallery" class="venobox" title="Zooming picture"><i class="bx bx-plus"></i></a>
                
              </div>
            </div>
          </div>
        </div>
            <?php }?>



      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p><?=$data['location']?></p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
            <div class="social-links">
              <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
              <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
              <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
              <a href="#" class="google-plus"><i class="icofont-skype"></i></a>
              <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><a href="mailto:<?=$data['emailid']?>"><?=$data['emailid']?></a></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p><?=$data['mobile']?></p>
          </div>
        </div>
      </div>

      <form action="./include/contact.php" method="post" role="form" class="php-email-form mt-4">
        <div class="form-row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class="validate"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validate"></div>
        </div>
        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message bg-success"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
                Developed by <a href="https://www.facebook.com/hosni.hmiyed.5">Hassan Hmiyed</a>
            </div>

  <!-- JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script type="text/javascript" src="assets/vendor/typed/typed.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>