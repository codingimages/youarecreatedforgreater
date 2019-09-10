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
      <p>If you are looking for a job in the health landscape, you have come to the right place, we currently have openings.  Please apply below.</p>
      <a class="btn-accent mx-auto mt-3 p-2 text-center d-block" href="https://www.monster.com/career-advice/article/resume-writing-help">HELP WITH RESUME</a>
    </div>
  </section>

  <section class="container-fluid welcome mt-3 mb-3 alternate-1">
    <div class="container">
      <div class="text-center">
        <h1 class="heading-style mb-0">Openings</h1>
      </div>
      <div class="row">
        <div class="col col-12 col-md-5 col-lg-4">
          <img class="welcome-logo" id="logo" src="img/logowithletters.png" alt="Created for greater logo">
        </div>
        <div class="col col-12 col-md-7 col-lg-8 mt-3 mb-3 text-block">
          <h3 class="accent-text">Your dream job starts here!</h3>
          <p>At Created for Greater we offer competitive salaries, comprehensive benefits package that includes but not limited to: Leave Accrual, Medical, Dental, Vision, Short Term Disability, Long Term Disability, Life Insurance, 401K and more.  Fill out the applicatiopn below and we will keep in touch.</p>
          <div class="positions-listed">
          <p class="mt-5 mb-3"><b><i>We currently have the following openings, click to see description:</i></b></p>
            <p class="careers__name mb-3">Rehabilitation Specialist</p>

            <p class="careers__name mb-3">Clinical Supervisor</p>

            <p class="careers__name mb-3">OMHC Therapist</p>

            <p class="careers__name mb-3">Psychiatrist Medical Director</p>

            <p class="careers__name mb-3">Residential Counselor</p>
          </div>

          <p class="mt-5 mb-2">You can also visit indeed for more posts (see below):</p>
          <div class="mb-5 indeedjobs-widget" data-id="ceaaba848eb3e9edcdf9" data-theme="light" data-height="320"></div> 
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
                      <p >Are you legally allowed to work in the U.S.?</p>
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
                      <p class="mt-5">Are you a veteran of the U.S. Army?</p>
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
                      <p class="mt-5">What is your available start day?</p>
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
          <a href="mailto:info@createdforgreater.net">info@createdforgreater.net</a>
          <br>
          <a href="mailto:cnorville@createdforgreater.net">cnorville@createdforgreater.net</a>
          <br>
          <a target="_blank" href=https://goo.gl/maps/ZXYvSjCkvzQNtZ4g9>5411 Old Frederick Rd. Suite 8<br> Baltimore, MD,
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
<!-- Rehab Specialist -->
<div class="container-fluid article mx-auto p-4 position p-5">
  <div class="container article-container">
  <a class="close"><i class="fas fa-window-close text-danger"></i></a></i>
  <h3>Rehabilitation Specialist</h3>
  <p class="mb-3">The Rehabilitation Specialist directs the organization's overall rehabilitation for all clients on caseload and ensures COMAR regulations are followed. </p>
  
  <h4>Essential duties and responsibilities</h4>
  <ol>
    <li>Supervise and train Rehabilitation Counselors (RCs) to facilitate the development and implementation of the Psychiatric Rehabilitation Program (PRP) that reflect the needs of clients and ensuring that the clients are receiving the appropriate services, as outlined in their Individual Rehabilitation Plan (IRP).</li>
    <li>Being able to educate, monitor, supervise and support RCs in the PRP.</li>
    <li>Review and approve all assigned Rehabilitation Counselor clinical documentation including client charts/binders, assessments, IRPs, progress notes, monthly summaries, therapists’ collaborations and discharge plans.</li>
    <li>Facilitate monthly staff meetings.</li>
    <li>Provides leadership for employee relations through effective communication, coaching, and development.</li>
    <li>Carries out supervisory responsibilities in accordance with the organization's policies and applicable laws.</li>
    <li>Responsibilities include interviewing, hiring, and training employees; planning, assigning, and directing work; appraising performance; rewarding and disciplining employees; addressing complaints and resolving problems.</li>
    <li>Provides monthly supervision to Rehabilitation counselors</li>
    <li>Enforce company policies, CARF Standards and COMAR regulatory requirements.</li>
  </ol>
    <h3>Qualifications</h3>
    <ol>
      <li>Licensed LGSW, LCSW-C, LGPC, LCPC.</li>
      <li>2 year of supervisory experience working with youth and adult with mental health issues. </li>
    </ol>
    </div>
</div>

<!-- Clinical Supervisor -->
<div class="container-fluid article mx-auto p-4 position p-5">
  <div class="container article-container">
  <a class="close"><i class="fas fa-window-close text-danger"></i></a></i>
  <h3>Clinical Supervisor</h3>
  <p class="mb-3">The primary role of this position is to provide clinical therapeutic services to the children and adults, that we serve. The supervisor provides clinical supervision for assigned clinicians for the purpose of increasing their effectiveness in the delivery of clinical services. </p>
  
  <h4>The Clinical Supervisor is responsible for:</h4>
  <ol>
    <li>Provides direct, individual clinical supervision for licensed and unlicensed clinical staff.</li>
    <li>Monitor caseloads and ensure that supervisees comply with all agency and clinical, legal and ethical practices. Review and co-sign supervisees’ progress notes, clinical forms and correspondences when indicated.</li>
    <li>Provides ongoing, regular feedback and evaluation to clinicians on the quality and timeliness of their clinical work as well as their caseload. Also solicits feedback from clinicians regarding supervision and whether needs are being met.</li>
    <li>Administrative oversight and monitoring of billable hours requirement. Provide support, training, and remediation where needed to assist supervisees in meeting the program’s billing expectations and caseload requirements, charting, record keeping, documentation standards and all other quality assurance standards.</li>
    <li>Communicates any concerns about quality of clinician’s work to Program Director in a timely manner.</li>
    <li>Ensures that clinician complies with all legal and ethical practices; co-signs unlicensed clinicians’ progress notes, clinical forms, and correspondence as a legal representative of Created for Greater.</li>
    <li>Facilitates group supervision or case-conferences as required. </li>
    <li>Participates in Created for Greater meetings, administrative program meetings and trainings as required.</li>
    <li>Contributes to 90 day and annual performance evaluations of clinicians. </li>
    <li>Adheres to requirements for supervisors as stipulated by Created for Greater policies and procedures, and COMAR regulations. </li>
    <li>Identifies training needs and makes recommendations to the Program Director. </li>
    <li>Provides support and training where needed to assist clinicians in meeting CREATED FOR GREATER billable hours requirements, charting, caseload, record keeping and documentation standards, and all other quality assurance standards. </li>
    <li>Helps clinicians identify professional development goals for the year, and collaboratively monitors progress toward those goals. </li>
    <li>Maintain a caseload of 6-10 clients.</li>
    <li>Provide 3 hours of individual supervision to all LGPC’s working in the health systems.</li>
    <li>Reviewing and approving all notes submitted by the LGPC’s no later than noon on Monday.</li>
    <li>Submit timesheet weekly to HR no later than midnight on Sunday.</li>
  </ol>
    <h3>REQUIREMENTS and/or EXPERIENCE</h3>
    <ol>
      <li>Must be a licensed clinical social worker (LCSW-C, LICSW).</li>
      <li>A minimum of 2 years’ experience in providing clinical therapeutic direct care services to children and adults.</li>
      <li>A minimum of 1-year experience providing supervision.</li>
      <li>Experience in writing clinical protocols.</li>
    </ol>
    </div>
</div>

<!-- OMHC Therapist -->
<div class="container-fluid article mx-auto p-4 position p-5">
  <div class="container article-container">
  <a class="close"><i class="fas fa-window-close text-danger"></i></a></i>
  <h3>OMHC Therapist</h3>
  <p class="mb-3">The primary role of this position is to provide clinical therapeutic services to children and adults, conduct weekly behavioral and therapeutic groups. In addition, provide Diagnostic IRPs and assess medical necessity for services provided through careful review of clinical documentation and Initial Rehabilitation Plan (IRP).</p>
  
  <h4>The Licensed Clinical Mental Health Professional is responsible for:</h4>
  <ol>
    <li>Providing clinical therapeutic services to children and adults.</li>
    <li>Providing behavioral and therapeutic groups on a weekly basis.</li>
    <li>Overall supervision of all medical/clinical aspects of the services delivered associated with an on-call emergency.</li>
    <li>Advise the program director regarding development and implementation of rehabilitation service that reflect the need of the clients served by the program for an on-call emergency.</li>
    <li>Developing and assuring that rehabilitation services meet the needs of the individuals served by the program with an on-call emergency.</li>
    <li>Providing oversight for the on-call emergencies of rehabilitation services.</li>
    <li>Perform/participate in any other needs of the program that is within the scope of the Licensed Clinical Mental Health Professional.</li>
    <li>Ensures that all required medical documentation is generated and appropriate through quality assurance audits in accordance with 10.21.29.06.</li>
    <li>Participates in on-call service for clients in accordance to 10.21.29.07 as needed.</li>
    <li>Assists and supports the Direct Care Staff as needed.</li>
  </ol>
    <h3>REQUIREMENTS and/or EXPERIENCE </h3>
    <ol>
      <li>Licensed clinical mental health professional (LGPC, LCSW-C, LGPC, LCPC)</li>
      <li>A minimum of 2 year’s experience in providing clinical therapeutic direct care services to children and adults.</li>
      <li>A minimum of 1-year experience in providing clinical therapeutic group therapy.</li>
      <li>Preferred experience in supervisory position with developing protocols.</li>
    </ol>
    </div>
</div>

<!-- Psychiatric Medical Director -->
<div class="container-fluid article mx-auto p-4 position p-5">
  <div class="container article-container">
  <a class="close"><i class="fas fa-window-close text-danger"></i></a></i>
  <h3>Psychiatrist / Medical Director</h3>
  <p class="mb-3">The Psychiatrist/Medical Director positions diagnoses, prescribes medication, monitors medication side effects and participates in the treatment process. The Psychiatrist/Medical Director will perform face to face visits and document all encounters in the EMR. As an integral part of the healthcare team the psychiatrist must also participate in the interdisciplinary team meetings.</p>
  
  <h4>Essential duties and responsibilities</h4>
  <ol>
    <li>Provide evaluation and treatment to an assigned caseload of patients in an outpatient community mental health setting.</li>
    <li>Prescribe treatments or medications to treat mental, emotional, or behavioral disorders.</li>
    <li>Collaborate with psychotherapist, psychiatric nurses, or other professionals to discuss treatment plans and progress.</li>
    <li>Design individualized care plans, using a variety of treatments.</li>
    <li>Conduct diagnostic evaluations, medication management, and individual therapy.</li>
    <li>Develop treatment plans based on scientific rationale, standards of care, and professional practice guidelines.</li>
    <li>Recommend interventions to modify behaviors associated with health risks.</li>
    <li>Refer patients as necessary based upon diagnosis and assessment.</li>
    <li>Gather and maintain patient information and records, including social or medical history obtained from patients, relatives, or other professionals.</li>
    <li>Review and evaluate treatment procedures and outcomes of other psychiatrists or medical professionals.</li>
    <li>Coordinate with the management team in the training of staff on matters of psychopharmacology and assessment and diagnosis.</li>
  </ol>
    <h3>Qualifications</h3>
    <ol>
      <li>Medical degree from an Accredited Medical Institution.</li>
      <li>Board certification in Child and Adolescent Psychiatry.</li>
      <li>Board certified in General Psychiatry.</li>
      <li>Current medical license for state of residence and work.</li>
      <li>Clinical and Private Practice expertise preferred.</li>
    </ol>
    </div>
</div>

<!-- Residential Counselor -->
<div class="container-fluid article mx-auto p-4 position p-5">
    <div class="container article-container">
    <a class="close"><i class="fas fa-window-close text-danger"></i></a></i>
    <h3>Residential Counselor</h3>
    <p class="mb-3">The Residential Counselor participates in the initial assessment, intervention, planning and re-evaluation of residents needs based on behaviors. Acts as case manager for assigned residents. Serves as a role model for residents on and off grounds for various activities. Instructs, assists, and monitors residents in accordance with rehabilitation plans. Assists in providing a safe and therapeutic environment according to established policies and procedures.</p>
    
    <h4>Essential duties and responsibilities</h4>
    <ol>
      <li>Create a supportive home environment for chronically mentally ill clients enrolled in the housing program.</li>
      <li>Instruct, supervise and participate in performing household tasks with residents such as cleaning, meal preparation, household budget planning, grocery shopping, etc.</li>
      <li>Assist residents in the development of daily living skills by identifying and meeting social, environmental and health care needs.</li>
      <li>Plan, coordinate and participate in residential social activities.</li>
      <li>Transport residents to and from home, social activities, appointments and community locations as required.</li>
      <li>Perform crisis intervention, emergency counseling and assistance; notify supervisor or on call person of clinical crisis and other emergencies in accordance to company policy.</li>
      <li>Communicate and document activities and behaviors of residents in reports and records as assigned.</li>
      <li>Inspect housing units periodically and report repairs and maintenance, as necessary.</li>
      <li>Monitor and document medication compliance and report changes in symptoms, side effects, or over/under medication to the supervisor.</li>
      <li>Assist and instruct clients in all areas of personal hygiene.</li>
      <li>Provide assistance in independent living skills.</li>
      <li>Monitor and document client medication.</li>
      <li>Satisfactory completion of all client-related assessments, notes and reports.</li>
      <li>Engage in therapeutic interventions with residents within treatment parameters, while maintaining appropriate boundaries.</li>
      <li>Ensure resident safety and collaborate with coworkers to maintain an environment that is positive, respectful, clean and therapeutic.</li>
    </ol>
      <h3>Qualifications</h3>
      <ol>
        <li>AA (preferably in Human Services) with at least 1-year experience or BA (preferably in Psychology or Human Services).</li>
        <li>Prior experience in a community residential setting preferred.</li>
      </ol>
      </div>
  </div>
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

<!-- Indeed script -->
> <script> (function(d, id) { if (d.getElementById(id)) return; var js = d.createElement('script'); js.id = id; js.src = 'https://www.indeedjobs.com/widget.js'; d.head.appendChild(js); })(document, 'indeedjobs-js'); </script>
<!-- CUSTOM JAVASCRIPT -->
  <script src="modals.js"></script>
<!-- CUSTOM JAVASCRIPT ENDS -->
  </body>
</html>
