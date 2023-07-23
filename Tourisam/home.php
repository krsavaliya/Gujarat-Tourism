<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="lg.png" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#exampleModalCenter2").modal('show');
        });
        $('.carousel').carousel({
            interval: 1000
        });
    </script>
    <title>Home Page</title>
</head>
<style>
    .text-centerd {
        float: right;
        text-align: left;
        padding-left: 650px;
    }

    .input-container {
        position: relative;
        margin-bottom: 25px;
    }

    .input-container label {
        position: absolute;
        top: 0px;
        left: 0px;
        font-size: 16px;
        color: #fff;
        transition: all 0.5s ease-in-out;
    }

    .input-container input {
        border: 0;
        border-bottom: 1px solid #FFEECB55;
        background: transparent;
        width: 100%;
        padding: 8px 0 5px 0;
        font-size: 16px;
        color: #fff;
    }

    .input-container input:focus {
        border: none;
        outline: none;
        border-bottom: 1px solid #D9A21B;
    }

    .input-container input:focus~label,
    .input-container input:valid~label {
        top: -12px;
        font-size: 12px;

    }
</style>

<body>
    <div class="text-center">
        <!-- <?php
                // session_start();
                // 
                ?>
        // <?php
            // $_SESSION["user"] = " ";
            // 
            ?>
        // <?php
            // session_start();
            // echo "user id:" . $_SESSION["user"] . "</br>";
            // if (!isset($_SESSION['counter'])) {
            //     $_SESSION['counter'] = 1;
            // } else {
            //     $_SESSION['counter']++;
            // }
            // echo "Page views: " . $_SESSION['counter'];
            // session_destroy();
            // 
            ?>
        // <br>
        // <?php
            // if (!isset($_COOKIE['count'])) {
            //     $cookie = 1;
            //     setcookie("count", $cookie);
            // } else {
            //     $cookie = ++$_COOKIE['count'];
            //     setcookie("count", $cookie, time() + 12);
            //     echo "using cookies: " . $cookie;
            // }
            ?> -->
    </div>
    <!-- carsousel -->
    <div id="carouselExampleIndicators" styel="width:75%; height:75%;" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="imgs/Akshardham.jpg" alt="First slide" style="aspect-ratio:16/9; object-fit: cover; object-position: 100% 0;">
                <div class="carousel-caption d-none d-md-block" style="text-shadow: #ff8d29 1px 0 10px;">
                    <h1>Akshardham Temple</h1>
                    <p>A Modern-Day Architectural Marvel </p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="imgs/Champaner.jpeg" alt="Second slide" style="aspect-ratio:16/9; object-fit: cover; object-position: 100% 0;">
                <div class="carousel-caption d-none d-md-block" style="text-shadow: #ff8d29 1px 0 10px;">
                    <h1>Champaner - Pavagadh Archaeological Park</h1>
                    <p>A Spectacular Site for History Lovers</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="imgs/Dwarkadhish.jpeg" alt="Third slide" style="aspect-ratio:16/9; object-fit: cover; object-position: 100% 0;">
                <div class="carousel-caption d-none d-md-block" style="text-shadow: #ff8d29 1px 0 10px;">
                    <h1>Dwarkadhish Temple</h1>
                    <p>A Sacred Place for Hindu Pilgrimage/p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-50-strong fixed-top">
        <img src="lg.png" width="5%" height="3.5%" class="d-inline-block align-top">
        <a class="navbar-brand text-white" href="#">Gujarat Tourism</a>
        <button class="navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="places.php">Places <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./virtual.php">Virtual Places</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./aboutus.php">AboutUs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./contactus.php">ContactUs</a>
                </li>
            </ul>
            <div class="text-centerd">
                <button type="button" data-toggle="modal" class="btn btn-warning" data-target="#exampleModalCenter1"> &nbsp;&nbsp; LogIn &nbsp;&nbsp; </button>
                <button type="button" data-toggle="modal" class="btn btn-warning" data-target="#exampleModalCenter2">Register</button>
            </div>
        </div>
    </nav>
    <br>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-center" style="height:5%;">
            <div class="col-md-6">
                <!-- <div class="text-center">
                    <button type="button" data-toggle="modal" class="btn btn-primary btn-lg" data-target="#exampleModalCenter1"> &nbsp;&nbsp; LogIn &nbsp;&nbsp; </button>
                    <button type="button" data-toggle="modal" class="btn btn-secondary btn-lg" data-target="#exampleModalCenter2">Register</button>
                </div> -->
            </div>
        </div>
    </div>
    <!--login Modal -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">SignIn</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="validationCustom01">Email ID</label>
                            <input type="email" class="form-control" id="validationCustom01" aria-describedby="emailHelp" name="email" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="validationCustom02">Password</label>
                            <input type="password" class="form-control" id="validationCustom02" name="password" placeholder="password" required>
                        </div>
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                            </div>

                            <div class="col d-flex justify-content-center">
                                <!-- Simple link -->
                                <p><button type="button" data-dismiss="modal" data-toggle="modal" class="btn btn-link" data-target="#exampleModalCenter3">Forgot Password</button></p>

                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not registerd yet? <button type="button" data-dismiss="modal" data-toggle="modal" class="btn btn-link" data-target="#exampleModalCenter2">Register</button></p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <a class="nav-link" href="https://www.facebook.com/gujtourism/" target=”_blank”>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg>
                                </a>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <a class="nav-link" href="https://twitter.com/GujaratTourism" target=”_blank”>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                    </svg>
                                </a> </button>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <a class="nav-link" href="https://www.instagram.com/gujarattourism/" target=”_blank”>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg>
                                </a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--login Modal close-->
    <!--forgot Modal -->
    <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">ForgotPassword</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="forgot.php" method="post">
                        <div class="form-group">
                            <label for="validationCustom01">Email ID</label>
                            <input type="email" class="form-control" id="validationCustom01" aria-describedby="emailHelp" name="email" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="validationCustom02">BirthDate</label>
                            <input type="date" class="form-control" id="validationCustom02" name="birthdate" placeholder="BirthDate" required>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>

                        <!-- Register buttons -->
                        <div class="text-right">
                            <p><button type="button" data-dismiss="modal" data-toggle="modal" class="btn btn-link" data-target="#exampleModalCenter2">Register</button></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- forgot modal close-->
    <!-- Register modal -->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="needs-validation" action="connect.php" method="post" novalidate>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md">
                                    <label for="validationCustom01">First name</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="firstname" required>
                                    <div class="invalid-feedback">
                                        Please enter firstname!
                                    </div>
                                </div>
                                <div class="col-md">
                                    <label for="validationCustom01">Last name</label>
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" name="lastname" required>
                                    <div class="invalid-feedback">
                                        Please enter lastname!
                                    </div>
                                </div>
                                </sdiv>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="validationCustom03">Email</label>
                                <input type="email" class="form-control" id="validationCustom03" placeholder="Email Id" name="email" required>
                                <div class="invalid-feedback">
                                    Please provide a valid email address.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom04">Birth Date</label>
                                <input type="Date" class="form-control" id="validationCustom04" name="birthdate" placeholder="Birth Date" required>
                                <div class="invalid-feedback">
                                    Please provide a valid Date.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">Gender</label>
                                <select class="custom-select" name="gender" required>
                                    <option value="m" name="gender">Male</option>
                                    <option value="f" name="gender">Female</option>
                                    <option value="o" name="gender">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="form-row">
                                <div class="col-md">
                                    <label for="validationCustom05">Password</label>
                                    <input type="password" class="form-control" id="validationCustom04" name="password" placeholder="password" required>
                                    <div class="invalid-feedback">
                                        Please Enter a Password.
                                    </div>
                                </div>
                                <div class="col-md">
                                    <label for="validationCustom05">Confirm Password</label>
                                    <input type="password" class="form-control" id="validationCustom05" placeholder="Confirm Password" required>
                                    <div class="invalid-feedback">
                                        Please Enter a password.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block mb-4" type="submit" name="btn_submit">Submit form</button>
                    </form>
                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function() {
                            'use strict';
                            window.addEventListener('load', function() {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function(form) {
                                    form.addEventListener('submit', function(event) {
                                        if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }
                                        form.classList.add('was-validated');
                                    }, false);
                                });
                            }, false);
                        })();
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!-- register modal close -->
    <br><br>
    <footer>
        <div class="end" style="padding: 50px auto; background-color: #484E5C;">
            <div class="container text-white" style="padding: 50px 0;">
                <div class="row">
                    <div class="col-md-4">
                        <b>Registered office:</b><br>

                        Udyog Bhavan, Block No. 16,<br>
                        4th Floor, Sector-11,<br>
                        Gandhinagar - 382 010.<br><br>

                        Tel:079-23977219, 079-23977229. <br>
                        Fax: Not In Use <br>
                        Toll Free Number:1800 203 1111<br>
                        E -mail: info@gujarattourism.com<br>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <img src="./lg.png" alt="logo" style="max-width:70%; max-height:45%; width:auto; height: auto;">
                    </div>
                    <div class="col-md-4 text-right">
                        Subscribe <br><br>
                        <div class="input-container">
                            <input type="email" placeholder="email" />
                        </div><br><br>
                        ©Gujarat Tourism
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>