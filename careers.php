<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description"
    content="You are created for greater, we can help you be the best you can.  Know about our services!">
  <meta name="keywords" content="phsychiatric, rehabilitation, program, we can help, mental, health">
  <meta name="author" content="codingimages.com">
  <!-- ADOBE FONTS -->
  <link rel="stylesheet" href="https://use.typekit.net/ruz6ule.css">
  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="button.css">
  <!-- FAVICON & TITLE -->
  <link rel="shortcut icon" type="image/png" href=img/favicon.png> <title>Created for Greater Physchiatric
  Rehabilitation | HOME</title>
</head>

<body>

  <!-- Navbar start -->
  <nav class="navbar fixed-top navbar-expand-md navbar-dark">
    <img src="img/logoalone.png" width="auto" height="40px" class="d-inline-block align-middle" alt="logo">
    <a class="navbar-brand nav-title main-title-nav" href="index.html">Created for Greater</a>

    <!-- Responsive button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.html">Services</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="careers.php">Careers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="booking.php">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbar end -->

<!-- JUMBOTRON -->
<div class="container-fluid careers__picture">
  <div class="main__header__text">
    <h1 class="stroke main-title">Here is your career!</h1>
  </div>
</div>
<!-- JUMBOTRON ENDS -->

  <!-- Section informativa -->
  <section class="container-fluid alternate-2">
    <div class="container">
      <div class="text-center">
        <h1 class="heading-style mb-3">Welcome</h1>
      </div>
      <p>If you are looking for a job in the health landscape, you have come to the right place, we currently have openings on <strong>mental health therapist</strong>, <strong>rehabilitation specialist</strong> and <strong>PRP counselor</strong>.  If interested, please apply below.</p>
      <a class="btn-accent mx-auto mt-3 p-2 text-center d-block" href="https://www.monster.com/career-advice/article/resume-writing-help">Help with my resume</a>
    </div>
  </section>

  <section class="container-fluid welcome mt-3 mb-3 alternate-1">
    <div class="container">
      <div class="row">
        <div class="col col-12 col-md-5 col-lg-4">
          <img class="welcome-logo" id="logo" src="img/logowithletters.png" alt="Created for greater logo">
        </div>
        <div class="col col-12 col-md-7 col-lg-8 mt-3 mb-3 text-block">
          <h3 class="accent-text">Your dream job starts here!</h3>
          <p>At Created for Greater we offer competitive salaries, comprehensive benefits package that includes but not limited to: Leave Accrual, Medical, Dental, Vision, Short Term Disability, Long Term Disability, Life Insurance, 401K and more.  Fill put the applicatiopn below and we will keep in touch.</p>
        </div>
      </div>
    </div>
  </section>

  <div class="section container" id="aplicar">
    <h4><i>Please fill all the application blanks and remeber that is mandatory to attach your resume.  If you have any questions please <a class="accent-text" href="#footer">call</a> or contact us <a class="accent-text" href="contact.php">here</a>.</i></h4>
  </div>

  <!-- Content start -->
  <div class="container form-green-text" id="form-red-text">
    <div class="row">
        <div class="col-md-12">
            <div class="contact-form text-dark mb-5 px-4 py-5">
                <h3 class="text-center mb-3">Application</h3>
                <div class="text-center text-danger">
                    <?php
                    
                    if(isset($_SESSION['msg'])){
                        echo $_SESSION['msg'];
                        unset($_SESSION['msg']);
                    } else if(isset($_SESSION['msgFields'])){
                        echo $_SESSION['msgFields'];
                        unset($_SESSION['msgFields']);
                    }
                    
                    ?>
                </div>
                
                <form action="SendGrid-API/f_process2.php" method="post" enctype="multipart/form-data">

                    <div class="row mb-3">
                        <div class="form-group col-md-6">
                            <label for="first">First Name<span>*</span></label>
                            <input type="text" name="first" class="form-control text-dark">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="last">Last Name<span>*</span></label>
                            <input type="text" name="last" class="form-control text-dark">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="calle">Street<span>*</span></label>
                            <input type="text" name="calle" class="form-control text-dark">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ciudad">City<span>*</span></label>
                            <input type="text" name="ciudad" class="form-control text-dark">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="estado">State<span>*</span></label>
                            <input type="text" name="estado" class="form-control text-dark">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="zip">Zip Code<span>*</span></label>
                            <input type="text" name="zip" class="form-control text-dark">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Phone Number<span>*</span></label>
                            <input type="text" name="phone" class="form-control text-dark">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email<span>*</span></label>
                            <input type="text" name="email" class="form-control text-dark">
                        </div>
                    </div>

                    <div class="row d-block p-4">
                      <p >¿Are you legally allowed to work in the U.S.?</p>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="legal" id="exampleRadios1" value="Yes">
                        <label class="form-check-label" for="exampleRadios1">
                          Yes
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="legal" id="exampleRadios1" value="No">
                        <label class="form-check-label" for="exampleRadios1">
                          No
                        </label>
                      </div>
                      <p class="mt-5">¿Are you a veteran of the U.S. Army?</p>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="veteran" id="exampleRadios2" value="Yes">
                        <label class="form-check-label" for="exampleRadios2">
                          Yes
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="veteran" id="exampleRadios2" value="No">
                        <label class="form-check-label" for="exampleRadios2">
                          No
                        </label>
                      </div>
                      <p class="mt-5">¿When is your start day?</p>
                      <div class="select-date">
                      <input type="date" id="datepicker" name='startdate' size='9' value="start-date" />
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label for="Name">Applying for:
                          <span>*</span>
                        </label>
                        <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="What job are you applying for?"></textarea>
                      </div>
                    </div>

                    <div class="row p-3">
                        <div class="form-group col-md-12">
                            <label for="File">Upload Resume <span>*required</span></label><br>
                            <input type="file" name="file" class="file"><br>
                            <span class="text-muted">
                                <?php
                                if(isset($_SESSION['msgFile'])){
                                    echo $_SESSION['msgFile'];
                                    unset($_SESSION['msgFile']);
                                }
                                ?>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-accent mt-3">Send application</button>
                </form>
            </div>
        </div>
    </div>
</div>
  <!-- Content ends -->
 
  <!-- footer start -->
  <footer class="footer text-white accent-bg pt-5 pb-5" id="footer">
    <div class="container">
      <div class="row">
        <div class="col col-12 col-md-4">
          <h5>
            <strong>Navigation</strong>
          </h5>
          <a href="index.html">Home</a>
          <br>
          <a href="about.html">About</a>
          <br>
          <a href="services.html">Services</a>
          <br>
          <a href="careers.php">Careers</a>
          <br>
          <a href="booking.php">Booking</a>
          <br>
          <a href="contact.php">Contact</a>
          <br>
          <br>
        </div>
        <div class="col col-12 col-md-4">
          <img src="img/logoalone.png" alt="">
        </div>
        <div class="col col-12 col-md-4">
          <h5>
            <strong>Contact</strong>
          </h5>
          <a href="tel:4433155007">443-315-5007</a>
          <br>
          <a href="mailto:lthompson@createrforgreater.com">lthompson@createrforgreater.com</a>
          <br>
          <a target="_blank" href=https://goo.gl/maps/ZXYvSjCkvzQNtZ4g9>5411 Old Frederick Rd. <br> Baltimore, MD,
            21229</a>
          <br>
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col col-12">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3088.0003773439835!2d-76.72064408433506!3d39.288241979512385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c81c11b9e103e9%3A0xf59f66d2e9e91e38!2s5411+Old+Frederick+Rd%2C+Baltimore%2C+MD+21229!5e0!3m2!1sen!2sus!4v1557889414877!5m2!1sen!2sus"
            width="300" height="225" frameborder="0" style="border:0" allowfullscreen></iframe>
          <div class="col col-12 col-md-12 mt-2 mb-2">
            <h5>
              <strong>Appreciate you</strong>
            </h5>
            <p id=pfooter>Our goal is your success, see you soon!.</p>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          © 2018 Rights Reserved
          <a href="index.html">Created for Greater</a>
        </div>
      </div>
  </footer>
  <!-- footer ends -->


<!-- back to top button -->
<button onclick="topFunction()" id="myBtn" title="Go to top">
  <i class="fas fa-arrow-up"></i>
</button>
<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function () {
    scrollFunction()
  };
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("myBtn").style.display = "block";
    } else {
      document.getElementById("myBtn").style.display = "none";
    }
  }
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- back to top button ends -->

<!-- bootstrap jquery plugins -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
  integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
  integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<!-- bootstrap jquery plugins ends-->
  </body>
</html>
