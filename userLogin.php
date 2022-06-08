<?php
include("include/config.php");
$msg = "";
ob_start();
session_start();
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

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" style="background-image: url('img/donate_two.jpeg')">
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
                        <a class="nav-link" href="index.php#features">Features</a>
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
    <!-- CONTACT -->
    <section id="contact">
        <div class="container" style="background-color: white;">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">GET IN TOUCH WITH THE NGO's</h6>
                    <h1 id="clothform">REGISTER USER</h1>
                    <p>Happiness doesn't result from what we get, but from what we give</p>
                </div>
            </div>
            <form action="" class="row g-3 justify-content-center" method="post" autocomplete="off">
                <div class="col-md-5">
                    <input type="email" class="form-control" placeholder="Enter E-mail" name="emailid" required>
                </div>
                <div class="col-md-5">
                    <input type="password" class="form-control" placeholder="Enter your password" minlength="5" name="password" required>
                </div>
                <div class="col-md-10 d-grid">
                    <input class="btn btn-primary" type="submit" name="submit" value="Login">
                </div>
                <div class="col-md-4">
                    <a href="userRegister.php">Don't have an account? Register now.</a>
                </div>
            </form>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $msg = "";
                $emailid = mysqli_real_escape_string($db,$_POST['emailid']);
                $password1 = mysqli_real_escape_string($db,$_POST['password']);
                if (($emailid == "admin@admin.com") && ($password1 == "admin")) {
                    $_SESSION['userid'] = "0";
                    header("location: admin.php");
                }
                $password = md5($password1);
                $sql = "SELECT * FROM `user` WHERE `EmailId` = '$emailid' AND `Password` = '$password'";
                $result = mysqli_query($db,$sql);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                $count = mysqli_num_rows($result);
                if ($count == 1) {
                    $userid = $row['UserID'];
                    $_SESSION['userid'] = $userid;
                    $sql = "SELECT `Taluka` FROM `user` WHERE `userid` = '$userid'";
                    $result = mysqli_query($db,$sql);
                    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                    $taluka = $row['Taluka'];
                    $_SESSION['taluka'] = $taluka;
                    header("location: home.php");
                } else {
                    $msg = "Error. Entered details are wrong. Please enter proper details";
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
                            <li><a href="index.php">About</a></li>
                            <li><a href="index.php">Services</a></li>
                            <li><a href="index.php">Features</a></li>
                            <li><a href="index.php">Pricing</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4">
                        <h5 class="text-white">Contact</h5>
                        <ul class="list-unstyled">
                            <li>Address: Goa University</li>
                            <li>Email: jackson.graham@example.com</li>
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
                        <p class="mb-0">© 2022 copyright all right reserved | Designed with by<a
                                href="https://www.youtube.com/channel/UCYMEEnLzGGGIpQQ3Nu_sBsQ"
                                class="text-white">CORE</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>