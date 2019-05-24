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
      <a class="btn-accent mx-auto mt-3 p-2 text-center d-block" href="https://www.monster.com/career-advice/article/resume-writing-help">HELP WITH RESUME</a>
    </div>
  </section>

  <section class="container-fluid welcome mt-3 mb-3 alternate-1">
    <div class="container">
      <div class="text-center">
        <h1 class="heading-style mb-0">Positions</h1>
      </div>
      <div class="row">
        <div class="col col-12 col-md-5 col-lg-4">
          <img class="welcome-logo" id="logo" src="img/logowithletters.png" alt="Created for greater logo">
        </div>
        <div class="col col-12 col-md-7 col-lg-8 mt-3 mb-3 text-block">
          <h3 class="accent-text">Your dream job starts here!</h3>
          <p>At Created for Greater we offer competitive salaries, comprehensive benefits package that includes but not limited to: Leave Accrual, Medical, Dental, Vision, Short Term Disability, Long Term Disability, Life Insurance, 401K and more.  Fill put the applicatiopn below and we will keep in touch.</p>
        </div>
      </div>
      <div class="careers mt-5">
          <p class="careers__name">Medical Director</p>
          <a class="careers__description" href="#" onclick=openMedical()>DESCRIPTION</a>
          <p class="careers__name">Psychiatrist</p>
          <a class="careers__description" href="#" onclick=openPsych()>DESCRIPTION</a>
          <p class="careers__name">Rehabilitation Specialist</p>
          <a class="careers__description" href="#" onclick=openRehab()>DESCRIPTION</a>
          <p class="careers__name">Clinical Supervisor</p>
          <a class="careers__description" href="#" onclick=openClinical()>DESCRIPTION</a>
          <p class="careers__name">Rehabilitation Counselor</p>
          <a class="careers__description" href="#" onclick=openCounselor()>DESCRIPTION</a>
          <p class="careers__name">Addictions Counselor</p>
          <a class="careers__description" href="#" onclick=openAddict()>DESCRIPTION</a>
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

<!-- MODALS -->
<!-- Medical -->
<div class="article container mx-auto p-3 position" id="modal1">
  <div>
    <i class="fas fa-window-close text-danger close" onclick=closeMedical()></i>
  </div>
  <div class="position__title">
    <h3>Medical Director</h3>
  </div>
  <div class="position__description">
    <p>The Medical Director reports directly to and advises the CEO. The medical director monitors clinical performance to ensure medical services and operations are in compliance with all applicable regulatory and licensing agencies. As a member of the leadership team, the Medical director is responsible for implementing, reviewing, and developing clinical protocols, performance objectives, productivity, benchmarks, compliance measures, provider workflow planning and continuous clinical quality improvement. </p>
  </div>
  <div class="position__duties mt-3">
    <h3>Essential duties and responsibilities</h3>
    <ol>
      <li>Participate in administrative meetings, general staff meetings, team leader (compliance) meetings, personnel meetings, assist as appropriate with the development of and implementation of new programs.</li>
      <li>Work with the CEO and administrative team staff to develop and communicate the organizations vision/plans for improving the health of their patients</li>
      <li>Works closely with the behavioral health specialists to provide continuity of care for the behavior health population</li>
      <li>Establish and oversee quality assurance regarding health care services-the clinical (evidence based clinical quality standards), safety, billing and practice polices and procedures to ensure appropriate federal and state regulations and professional guidelines are met.</li>
      <li>Champion of delivery of quality care as a priority for the medical and clinical staff and develop and coordinate systems/processes for controlling operational costs.</li>
      <li>Serve as the liaison to the area medical and clinical community -at -large</li>
    </ol>
  </div>
  <div class="position__qualifications mt-3">
    <h3>Qualifications</h3>
    <ol>
      <li>Licensed physician in the state of Maryland.</li>
      <li>3-5 years supervisory experience is preferred</li>
      <li>Experience running and outpatient mental health clinic - preferred</li>
    </ol>
  </div>
</div>

<!-- Psychiatrist -->
<div class="article container mx-auto p-3 position" id="modal2">
  <div>
    <i class="fas fa-window-close text-danger close" onclick=closePsych()></i>
  </div>
  <div class="position__title">
    <h3>Psychiatrist</h3>
  </div>
  <div class="position__description">
    <p>The Psychiatrist positions diagnoses, prescribes medication, monitors medication side effects and participates in the treatment process. The psychiatrist will perform face to face visits and document all encounters in the EMR. As an integral part of the healthcare team the psychiatrist must also participate in the interdisciplinary team meetings. </p>
  </div>
  <div class="position__duties mt-3">
    <h3>Essential duties and responsibilities</h3>
    <ol>
      <li>Provide evaluation and treatment to an assigned caseload of patients in an outpatient community mental health setting</li>
      <li>Prescribe treatments or medications to treat mental, emotional, or behavioral disorders.</li>
      <li>Collaborate with psychotherapist, psychiatric nurses, or other professionals to discuss treatment plans and progress.</li>
      <li>Design individualized care plans, using a variety of treatments.</li>
      <li>Conduct diagnostic evaluations, medication management, and individual therapy.</li>
      <li>Develop treatment plans based on scientific rationale, standards of care, and professional practice guidelines</li>
      <li>Recommend interventions to modify behaviors associated with health risks</li>
      <li>Refer patients as necessary based upon diagnosis and assessment</li>
      <li>Gather and maintain patient information and records, including social or medical history obtained from patients, relatives, or other professionals.</li>
      <li>Review and evaluate treatment procedures and outcomes of other psychiatrists or medical professionals.</li>
      <li>Coordinate with the management team in the training of staff on matters of psychopharmacology and assessment and diagnosis.</li>
    </ol>
  </div>
  <div class="position__qualifications mt-3">
    <h3>Qualifications</h3>
    <ol>
      <li>Medical OR Doctoral degree from an Accredited Medical Institution;</li>
      <li>Board certification in Child and Adolescent Psychiatry;</li>
      <li>Board certified in General Psychiatry;</li>
    </ol>
  </div>
</div>

<!-- Modal3 -->
<div class="article container mx-auto p-3 position" id="modal3">
    <div>
      <i class="fas fa-window-close text-danger close" onclick=closeRehab()></i>
    </div>
    <div class="position__title">
      <h3>Rehabilitation Specialist</h3>
    </div>
    <div class="position__description">
      <p>The Rehabilitation Specialist directs the organization's overall rehabilitation for all clients on caseload and ensures COMAR regulations are followed. </p>
    </div>
    <div class="position__duties mt-3">
      <h3>Essential duties and responsibilities</h3>
      <ol>
        <li>•	Supervise and train Rehabilitation Counselors (RCs) to facilitate the development and implementation of the Psychiatric Rehabilitation Program (PRP) that reflect the needs of clients and ensuring that the clients are receiving the appropriate services, as outlined in their Individual Rehabilitation Plan (IRP).</li>
        <li>Being able to educate, monitor, supervise and support RCs in the PRP.</li>
        <li>Review and approve all assigned Rehabilitation Counselor clinical documentation including client charts/binders, assessments, IRPs, progress notes, monthly summaries, therapists’ collaborations and discharge plans.</li>
        <li>Facilitate monthly staff meetings.</li>
        <li>Provides leadership for employee relations through effective communication, coaching, and development.</li>
        <li>Carries out supervisory responsibilities in accordance with the organization's policies and applicable laws.</li>
        <li>Responsibilities include interviewing, hiring, and training employees; planning, assigning, and directing work; appraising performance; rewarding and disciplining employees; addressing complaints and resolving problems.</li>
        <li>Provides monthly supervision to Rehabilitation counselors.</li>
        </li>Enforce company policies, CARF Standards and COMAR regulatory requirements.</li>
      </ol>
    </div>
    <div class="position__qualifications mt-3">
      <h3>Qualifications</h3>
      <ol>
        <li>Licensed LGSW, LCSW-C, LGPC, LCPC</li>
        <li>2 year of supervisory experience working with youth and adult with mental health issues.</li>
      </ol>
    </div>
  </div>
<!-- MODALS ENDS-->

<!-- Modal4 -->
<div class="article container mx-auto p-3 position" id="modal4">
    <div>
      <i class="fas fa-window-close text-danger close" onclick=closeClinical()></i>
    </div>
    <div class="position__title">
      <h3>Clinical Supervisor</h3>
    </div>
    <div class="position__description">
      <p>This position is responsible for providing clinical supervision to therapists. Must be able to work collaboratively with a broad array of behavioral health professions, including social workers, psychiatrists, counselors, and psychologists. The clinical supervisor is responsible for directing care of patients, clinic policies and procedures. Must maintain working knowledge of Code of Maryland Annotated Regulations COMAR and CARF standards.</p>
    </div>
    <div class="position__duties mt-3">
      <h3>Essential duties and responsibilities</h3>
      <ol>
        <li>Provide clinical supervision of clinical staff and ensures compliance with state and federal regulations, CARF standards and clinic policies and procedures;</li>
        <li>Make staff assignments and creates schedules; updates support staff when changes are made;</li>
        <li>Monitors counselor’s compliance with productivity requirements and develops improvement when requirements are not met;</li>
        <li>Ensures quality patient care, conduct treatment plan review as needed.</li>
        <li>Maintain knowledge of mental health treatment models</li>
        <li>Perform chart audits and communicates result of audits to staff;</li>
        <li>May also be involved in crisis intervention and work as a liaison within the community;</li>
        <li>Assist with recruitment, hiring and training of qualified clinical staff;</li>
        <li>Oversees key projects such as process improvements or capital investment projects.</li>
        <li>Provides leadership for employee relations through effective communication, coaching, and development.</li>
        <li>Manages assigned supervisory and non-supervisory staff.</li>
        <li>Is responsible for the overall direction, coordination, and evaluation of various units.</li>
        <li>Carries out supervisory responsibilities in accordance with the organization's policies and applicable laws.</li>
        <li>Responsibilities include interviewing, hiring, and training employees; planning, assigning, and directing work; appraising performance; rewarding and disciplining employees; addressing complaints and resolving problems.</li>
        <li>Ensures ethical and professional conduct by clinical staff; and, </li>
        <li>Perform other duties as assigned</li>
      </ol>
    </div>
    <div class="position__qualifications mt-3">
      <h3>Qualifications</h3>
      <ol>
        <li>Master’s degree in social work with at least one year of experience in clinical supervision</li>
        <li>LCSW-C, LCPC-S, LCADC required as well as approval from Maryland Board of Social Work as a supervisor</li>
      </ol>
    </div>
  </div>
<!-- MODALS ENDS-->

<!-- Modal5 -->
<div class="article container mx-auto p-3 position" id="modal5">
    <div>
      <i class="fas fa-window-close text-danger close" onclick=closeCounselor()></i>
    </div>
    <div class="position__title">
      <h3>Rehabilitation Counselor</h3>
    </div>
    <div class="position__description">
      <p>We are looking for an energetic, dynamic individual to join our team. As a Rehabilitation Counselor you are responsible for providing rehabilitation services to clients and ensuring that the goals and objectives that are outlined on the Individual Rehabilitation Plan (IRP) are implemented. Rehabilitation counselors’ hours vary depending on their caseload. Hours can vary from 10-20 hours a week.</p>
    </div>
    <div class="position__duties mt-3">
      <h3>Essential duties and responsibilities</h3>
      <ol>
        <li>Responsible for understanding and implementing the rehabilitation activities as outlined in the client's IRP</li>
        <li>Communicates and coordinates with the Rehabilitation Specialist and Program Director on the progress and status of goal achieve for each client</li>
        <li>Provides the Immediate Supervisor/Rehabilitation Specialist and Program Director with needed information regarding client to support customized goal achievement</li>
        <li>Communicate with the Program Director and Immediate Supervisor/Rehabilitation Specialist about resources that are needed to appropriately implement the rehabilitation activities as outlined in the client's IRP</li>
        <li>Conduct diagnostic evaluations, medication management, and individual therapy.</li>
        <li>Generates and submits in a timely fashion all required documentation with the appropriate information from encounters according to program policy</li>
        <li>Facilitates and assists in emergency response services as needed according to program policy</li>
        <li>Performs/participates in any other needs of the program that is within the scope of the Direct Care Staff (Rehab counselor)</li>
      </ol>
    </div>
    <div class="position__qualifications mt-3">
      <h3>Qualifications</h3>
      <ol>
        <li>At least a high school diploma or equivalency diploma</li>
        <li>Preferably Associate's Degree/ Bachelor’s Degree in a health-related field</li>
        <li>Have 60 hours PRP training before independently providing PRP services (COMAR 10.21.29.09)</li>
        <li>Must have at least 1-year work experience in a supervised mental health setting</li>
        <li>First Aid & CPR Certified.</li>
      </ol>
    </div>
  </div>

  <!-- Modal6 -->
<div class="article container mx-auto p-3 position" id="modal6">
    <div>
      <i class="fas fa-window-close text-danger close" onclick=closeAddict()></i>
    </div>
    <div class="position__title">
      <h3>Adictions Counselor</h3>
    </div>
    <div class="position__description">
      <p>The Addictions Counselor provides critical alcohol and other drug assessment and referral services to the clients that are referred to the clinic.</p>
    </div>
    <div class="position__duties mt-3">
      <h3>Essential duties and responsibilities</h3>
      <ol>
        <li>Performs admission intake functions by interviewing applicants and contacting referring professionals to assess and evaluate applicants' physical, psychological, social, and vocational status.</li>
        <li>Assures incoming patients have psycho-social assessment and interpretive summary </li>
        <li>Completes, with patient participation, a Preliminary Treatment Plan </li>
        <li>Completes a Quarterly Case Consult </li>
        <li>Completes a Treatment Plan Review and update for each patient after completion of the Comprehensive Treatment Plan </li>
        <li>Prepares an aftercare transition plan for all patients at the earliest possible time and to review prior to discharge.</li>
        <li>Prepare annual review, BPS update, annual case consults and annual bill of rights for each patient on a yearly basis.</li>
        <li>Follows up, according to the Follow-Up Policy and Plan with each discharged patient.</li>
        <li>Provides individual addiction counseling according to the Comprehensive Treatment Plan.</li>
        <li>Documents each individual, group, case management or other patient contacts by way of progress note written in “DAP” formula </li>
        <li>Ensures all paperwork is filed into patient charts in a timely manner</li>
        <li>Ensure that patient has an accurate form of funding and that authorizations are reviewed in a timely manner to ensure payment for services.</li>
        <li>Completes all paperwork that is associated with take homes and state exceptions.</li>
        <li>Attend required clinical and treatment team meetings on a weekly basis to allow consultations of current caseload.</li>
      </ol>
    </div>
    <div class="position__qualifications mt-3">
      <h3>Qualifications</h3>
      <ol>
        <li>Certification as a Certified Alcoholism Counselor (CAC), or Certified Chemical Dependency Counselor (CCDC), or Certified Supervised Counselor (CSC) is required.</li>
        <li>Two years of alcohol and drug treatment/counseling experience in a health care related setting, or equivalent work experience, is required.</li>
        <li>Must be licensed by the Maryland Board of Professional Counselors</li>
      </ol>
    </div>
  </div>
<!-- MODALS ENDS-->
<!-- MODALS ENDS-->

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
<!-- CUSTOM JAVASCRIPT -->
  <script src="modals.js"></script>
<!-- CUSTOM JAVASCRIPT ENDS -->
  </body>
</html>
