<?php
include("include/config.php");
$msg = "";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="48x48" href="img/daan logo.jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>DAAN</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo" src="img/daan logo.jpg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="NGOregister.php">Register as NGO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="userRegister.php">Register as User</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><!-- //NAVBAR -->
    <!-- HERO -->
    <div class="hero vh-100 d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h1 class="display-4 text-white">Welcome to DAAN</h1>
                    <p class="text-white my-3">Let's Donate and spread Love </p>
                    <a href="#services" class="btn me-2 btn-primary">Make Daan</a>
                </div>
            </div>
        </div>
    </div><!-- //HERO -->
    <!-- SERVICES -->
    <section id="services">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">SERIVCES</h6>
                    <h1>Our Services</h1>
                    <p>We help you to connect the nearest <strong>NGO</strong> so that you can donate fast and easy</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect bounceInUp">
                        <div class="iconbox">
                            <span class="iconify" data-icon="bx:closet"></span>
                        </div>
                        <h5 class="mt-4 mb-2">Donate Clothes</h5>
                        <p>Stuck with where and whom to donate your old clothes??? Don't worry we're here to help you!!
                            Schedule a donation pickup.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <span class="iconify" data-icon="bx:book-open"></span>
                        </div>
                        <h5 class="mt-4 mb-2">Donate Books</h5>
                        <p>Want to donate books?? You are at right place.. Just fill the details and donate your books
                            easily!! Register to donate. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <span class="iconify" data-icon="bx:walk"></span>
                        </div>
                        <h5 class="mt-4 mb-2">Donate Shoes</h5>
                        <p> it's always better to donate your shoes than to dump them in your trash can, which would
                            eventually get dumped in a landfill.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- SERVICES -->
    <section id="team">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">TEAM</h6>
                    <h1>Meet Our Crew Members</h1>
                    <p>Intuitive design is how we give the user new superpowers.</p>
                </div>
            </div>
            <div class="row text-center g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/omkar.jpg" alt="">
                        <h5 class="mb-0 mt-4">Omkar savoikar</h5>
                        <p class="mb-0">Backend Developer</p>
                        <p class="mt-0">2104</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/ramjeet.jpg" alt="">
                        <h5 class="mb-0 mt-4">Ramjeet Faldessai</h5>
                        <p class="mb-0">Backend Developer</p>
                        <p class="mt-0">2114</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/suraj.jpg" alt="">
                        <h5 class="mb-0 mt-4">Suraj Pandey</h5>
                        <p class="mb-0">Marketing</p>
                        <p class="mt-0">2122</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/varad.jpg" alt="">
                        <h5 class="mb-0 mt-4">Varad Prabhugaonkar</h5>
                        <p class="mb-0">FrontEnd Developer</p>
                        <p class="mt-0">2123</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">CONTACT</h6>
                    <h1>Get In Touch</h1>
                    <p></p>
                </div>
            </div>
            <form action="" class="row g-3 justify-content-center" method="post" autocomplete="off">
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Full Name" name="fullname" required>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Enter E-mail" name="email" required>
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" placeholder="Enter Subject" name="subject" required>
                </div>
                <div class="col-md-10">
                    <textarea cols="30" rows="5" class="form-control" placeholder="Enter Message" name="message" required></textarea>
                </div>
                <div class="col-md-10 d-grid">
                    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                </div>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $msg = "";
                $username = mysqli_real_escape_string($db,$_POST['fullname']);
                $emailid = mysqli_real_escape_string($db,$_POST['email']);
                $subject = mysqli_real_escape_string($db,$_POST['subject']);
                $message = mysqli_real_escape_string($db,$_POST['message']);
            
                $sql = "INSERT INTO `contact` (`Name`, `EmailID`, `Subject`, `Message`) VALUES ('$username','$emailid','$subject','$message')";
                $result = mysqli_query($db,$sql);
            
                if ($result) {
                    $msg = "Your message is recorded.";
                } else {
                    $msg = "Sorry, your message couldn't be recorded. Try again.";
                }
            }
            ?>
            <div class="row justify-content-center">
                <?php
                if ($msg != NULL)
                    echo $msg;
                ?>
            </div>
        </div>
    </section><!-- CONTACT -->
    <footer>
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <img class="logo" src="img/daan logo.jpg" alt="">
                    </div>
                    <div class="col-lg-2">
                        <h5 class="text-white">Site</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Pricing</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="text-white">Contact</h5>
                        <ul class="list-unstyled">
                            <li>Address: Goa University</li>
                            <li>Email: sbsi.daan@gmail.com</li>
                            <li>Phone: 8322471</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="mb-0">© 2022 copyright all right reserved | Designed by<a class="text-white">CORE</a>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>