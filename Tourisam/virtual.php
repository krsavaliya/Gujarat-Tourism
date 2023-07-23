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
    <title>Virtual Places</title>
</head>
<style>
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
    <!-- NavBar -->
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
                    <a class="nav-link active" href="./virtual.php">Virtual Places</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./aboutus.php">AboutUs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contactus.php">ContactUs</a>
                </li>
            </ul>
        </div>
    </nav>
    <br><br><br><br>
    <div class="container">
        <div class="video">
            <iframe width="425" height="300" src="https://www.youtube.com/embed/3ID37q4IRPU" frameborder="0"></iframe>
            <iframe width="425" height="300" src="https://www.youtube.com/embed/vbxnPdogypc" frameborder="0"></iframe>
            <iframe width="425" height="300" src="https://www.youtube.com/embed/N5XPBoA6lmM" frameborder="0"></iframe>
            <iframe width="425" height="300" src="https://www.youtube.com/embed/YTG64L2WvMs" frameborder="0"></iframe>
            <iframe width="425" height="300" src="https://www.youtube.com/embed/MSW_HusTQnk" frameborder="0"></iframe>
            <iframe width="425" height="300" src="https://www.youtube.com/embed/aLw4NkXKSaI" frameborder="0"></iframe>
            <iframe width="425" height="300" src="https://www.youtube.com/embed/j60Su79iWH4" frameborder="0"></iframe>
            <iframe width="425" height="300" src="https://www.youtube.com/embed/00M83mZ--7E" frameborder="0"></iframe>
        </div>
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
</body>

</html>