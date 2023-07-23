<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="lg.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Contact Us</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Merriweather&display=swap");

    .text-centerd {
        float: right;
        text-align: left;
        padding-left: 770px;
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

    /* social buttons */
    /* Style for Extra Large Screen */
    @media (max-width:3920px) {
        .btn-sq-responsive {
            width: 200px !important;
            max-width: 100% !important;
            max-height: 100% !important;
            height: 200px !important;
            font-size: 24px;
        }
    }

    /* Style for Large Screen */
    @media (max-width:991px) {
        .btn-sq-responsive {
            width: 150px !important;
            max-width: 100% !important;
            max-height: 100% !important;
            height: 150px !important;
            font-size: 18px;
        }
    }

    /* Style for Medium Screen */
    @media (max-width:767px) {
        .btn-sq-responsive {
            width: 100px !important;
            /* whatever width you want for medium screen */
            max-width: 100% !important;
            max-height: 100% !important;
            height: 100px !important;
            /* whatever height you want for medium screen */
            font-size: 12px;
        }
    }

    /* Style for Small Screen */
    @media (max-width:575px) {
        .btn-sq-responsive {
            width: 50px !important;
            /* whatever width you want for mobile screen */
            max-width: 100% !important;
            max-height: 100% !important;
            height: 50px !important;
            /* whatever height you want for mobile screen */
            font-size: 5px;
            padding: 0px;
            font-size: 7px;
        }
    }
</style>

<body>
    <!-- NavBar -->
    <!-- Image and text -->
    <!-- Image and text -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <img src="lg.png" width="5%" height="3.5%" class="d-inline-block align-top">
        <a class="navbar-brand" href="home.php">Gujarat Tourism</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-black" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./places.php">Places <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./virtual.php">Virtual Places</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./aboutus.php">AboutUs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./contactus.php">ContactUs</a>
                </li>
            </ul>
        </div>
    </nav>
    <br><br><br><br>
    <center>
        <br><br>
        <h1>Contact Us</h1><br><br>
    </center>
    <div class="container text-white">
        <a href="https://www.instagram.com/gujarattourism/" class="btn btn-dark btn-sq-responsive" role="button" aria-pressed="true">
            <div>
                <i class="fa fa-instagram" style="font-size:190px;color:white"></i>
            </div>
        </a>
        <a href="https://www.facebook.com/gujtourism/" class="btn btn-dark btn-sq-responsive" role="button" aria-pressed="true">
            <div>
                <i class="fa fa-facebook" style="font-size:190px;color:white"></i>
            </div>
        </a>
        <a href="https://twitter.com/GujaratTourism" class="btn btn-dark btn-sq-responsive" role="button" aria-pressed="true">
            <div>
                <i class="fa fa-twitter" style="font-size:190px;color:white"></i>
            </div>
        </a>
        <a href="mailto:info@gujarattourism.com" class="btn btn-dark btn-sq-responsive" role="button" aria-pressed="true">
            <svg xmlns="http://www.w3.org/2000/svg" height="190" viewBox="58 96 960 960" width="190" style="color: white;">
                <path d="M140 896q-24 0-42-18t-18-42V316q0-24 18-42t42-18h680q24 0 42 18t18 42v520q0 24-18 42t-42 18H140Zm340-302L140 371v465h680V371L480 594Zm0-60 336-218H145l335 218ZM140 371v-55 520-465Z" fill="#ffffff" />
            </svg>
        </a>
    </div>
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
                        Subscribe <br>
                        <div class="input-container">
                            <input type="email" placeholder="email" />
                        </div><br><br>
                        ©Gujarat Tourism
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>