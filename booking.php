<?php
require_once 'partials/config.php';
require_once 'partials/db.php';
require_once 'partials/func.php';
?>

<?php require_once 'partials/header.php' ?>

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
            <li class="nav-item">
                <a class="nav-link" href="careers.php">Careers</a>
            </li>
            <li class="nav-item active">
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
<div class="container-fluid contact__picture">
    <div class="main__header__text">
        <h1 class="stroke main-title">Book your appointment!</h1>
    </div>
</div>
<!-- JUMBOTRON ENDS -->


<main class="mb-5 mt-5">
    <div class="container-fluid">

        <!-- BOOKING ADMIN OPTIONS -->
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="mb-3 text-right">
                    <?php
                    if(isset($_SESSION['user_data'])) {
                        echo "<a href='viewAll.php' class='btn btn-success'>View All</a> ";
                        echo "<a href='profile.php' class='btn btn-primary'>Profile</a> ";
                        echo "<a href='logout.php' class='btn btn-danger'>Exit</a>";
                    } else {
                        echo "<a href='login.php' class='btn btn-success'>Login</a>";
                    }
                ?>

                </div>
            </div>
        </div>
        <!-- ADMIN OPTIONS END -->
                <!-- INSTRUCTIONS -->
        <div class="alternate-1 instructions row">
            <div class="col-sm-12 col-lg-8 container mx-auto">
                <div class="text-center instructions__header">
                    <h1 class="heading-style">Instructions</h1>
                </div>
                <div>
                    <ul class="instructions__list">
                        <li><i class="fas fa-check-circle mr-3"></i>Fill out the booking form entirely and submit</li>
                        <li><i class="fas fa-check-circle mr-3"></i>Download the referal form <a class="btn-accent p-1 text-center"href="../docs/referal_form.pdf" target="_blank">here</a> if it's your first time</li>
                        <li><i class="fas fa-check-circle mr-3"></i>You can also download the referal form for anybody else at any given time.</li>
                        <li><i class="fas fa-check-circle mr-3"></i>Wait for our confirmation call, we will contact you shortly.</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- INSTRUCTIONS ENDS -->

        <!-- BOOKING FORM START -->
        <div class="row">
            <div class="col-sm-12 col-lg-10 mx-auto">
                <div class="card mb-5 mt-5">
                    <div class="card-header">
                        <div class="text-center">
                            <h1 class="heading-style">Booking Form</h1>
                            <p>Please fill out entirely and read the instructions below</p>
                        </div>
                        <p>
                            <?php
                                $times = getTimes();
                                foreach($times as $t){
                                    if($t['start_time'] == ''){
                                        echo "<strong style='width:100px; display:inline-block; text-align:right'>{$t['day']}:</strong> Not available";
                                    } else {
                                        echo "<strong style='width:100px; display:inline-block; text-align:right'>{$t['day']}:</strong> {$t['start_time']} to {$t['end_time']}<br>";
                                    }
                                }
                            ?>
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="text-success">
                            <?php
                            if(isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                            ?>
                        </div>
                        <div class="text-danger">
                            <?php
                            if(isset($_SESSION['msgErr'])){
                                echo $_SESSION['msgErr'];
                                unset($_SESSION['msgErr']);
                            }
                            ?>
                        </div>
                        <form action="partials/process.php" method="post">
                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Full Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="" placeholder="Full name"
                                        required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="" placeholder="Email"
                                        required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Date (Press to select)</label>
                                <div class="col-sm-10">
                                    <input type="date" name="date" id="date" onchange="loadTimes()" class="form-control"
                                        required placeholder="Elija una fecha">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Hour</label>
                                <div class="col-sm-10">
                                    <select name="time" id="time" class="form-control" required>
                                        <option selected>First select a date</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">Location</label>
                                <div class="col-sm-10 mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="purpose[]" type="checkbox"
                                            id="inlineCheckbox1" value="Home">
                                        <label class="form-check-label" for="inlineCheckbox1">Home</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="purpose[]" type="checkbox"
                                            id="inlineCheckbox2" value="Onsite">
                                        <label class="form-check-label" for="inlineCheckbox2">Onsite</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="purpose[]" type="checkbox"
                                            id="inlineCheckbox3" value="Otro">
                                        <label class="form-check-label" for="inlineCheckbox3">Other</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-sm-2 col-form-label">More details (Optional)</label>
                                <div class="col-sm-10">
                                    <textarea name="description" class="form-control"
                                        placeholder="Write here..."></textarea>
                                </div>
                            </div>

                            <button type="submit" name="add_appointment"
                                class="btn btn-secondary offset-sm-2">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- BOOKING FORM ENDS -->

    </div>
</main>

<?php require_once 'partials/footer.php' ?>
