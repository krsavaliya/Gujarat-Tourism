<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Places</title>
    <link rel="stylesheet" href="places.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="lg.png" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        body {
            background-image: url('/imgs/saradar.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
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
</head>

<body bgcolor="#800000">
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
        <img src="lg.png" width="5%" height="3.5%" class="d-inline-block align-top">
        <a class="navbar-brand" href="home.php">Gujarat Tourism</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-black" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="./places.php">Places <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./virtual.php">Virtual Places</a>
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
        <div class="row">
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/StatueofUnity.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Statue of Unity</h5>
                        <p class="card-text" style="text-align: justify;">World’s Tallest Statue</p>
                        <p><b>Best Time to Visit:</b> October to March <br>
                            <b>Visiting Time:</b> 8:00 am to 6:00 pm, Mondays closed <br>
                            <b>Entry Fee:</b> Rs 120 + Rs 30 (Bus Charges) for adults and Rs 60 + Rs 30 (Bus Charges) for children <br>
                            <b>Observation Deck:</b> Rs 350 + Rs 30 (Bus Charges) for adults and Rs 200 + Rs 30 (Bus Charges) <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/AdalajVav.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Adalaj Vav(Stepwell)</h5>
                        <p class="card-text" style="text-align: justify;">An Example of Exquisite Architecture </p>
                        <p><b>Best Time to Visit:</b> July to March
                            <b>Visiting Time:</b> 8:00 am to 6:00 pm
                            <b>Entry Fee:</b> Rs 25
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Ahmedabad.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pols of Ahmedabad </h5>
                        <p class="card-text" style="text-align: justify;">A Look inside Harmoniums Community Living </p>
                        <p><b>Best Time to Visit:</b> October to March</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Ahmedpur.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Ahmedpur Mandvi Beach</h5>
                        <p class="card-text" style="text-align: justify;"></p>
                        <p><b>Best Time to Visit:</b> September to May</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/AkshardhamTemple.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Akshardham Temple</h5>
                        <p class="card-text" style="text-align: justify;">A Modern-Day Architectural Marvel </p>
                        <p><b>Best Time to Visit:</b> Throughout the Year <br>
                            <b>Visiting Time:</b> 7:30 am to 7:30 pm, Mondays are closed <br>
                            <b>Entry Fee:</b> Free<br>
                            <b>Exhibition:</b> Adults (Age 11+): Rs 60 and Children (Age 3 – 11): Rs 40
                            <b>Water Show Tickets:</b> Adults (Age 11+): ₹ 100 and Children (Age 3 – 11): ₹ 70
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Ambaji.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Shri Arasuri Ambaji Mata Temple</h5>
                        <p class="card-text" style="text-align: justify;">A Sacred Shaktipeetha for Hindu Pilgrimage</p>
                        <p><b>Best Time to Visit:</b> Throughout the Year and Bhadrapad Purnima and Navratri <br>
                            <b>Visiting Time:</b> 7:30 am to 11:45 am, 12:15 pm to 4:15 pm, 7:00 pm to 11:00 pm <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Balasinor.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Balasinor Dinosaur Museum</h5>
                        <p class="card-text" style="text-align: justify;">
                            <b>Timings</b> 8 :00 am to 6:00pm. It is closed every Monday.
                            <b>Ticket</b> 50 INR Per Person and 500 INR extra for Camera, 20 INR for children aged 5-12 years.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Blackbuck.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Wild life Sanctuary</h5>
                        <p class="card-text" style="text-align: justify;">A One of its Kind Wildlife Sanctuary</p>
                        <p><b>Best Time to Visit:</b> October to March<br>
                            <b>Visiting Time:</b> 7:00 am to 1:00 pm and 2:30 pm to 6:30 pm <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Champaner.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Champaner</h5>
                        <p class="card-text" style="text-align: justify;">A Spectacular Site for History Lovers</p>
                        <p><b>Best Time to Visit:</b> October to March
                            <b>Visiting Time:</b> 8:30 am to 5:00 pm
                            <b>Entry Fee:</b> Rs 30 for Indians and Rs 500 for foreigners
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Dholavira.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Dholavira</h5>
                        <p class="card-text" style="text-align: justify;">The Second-Largest Harappan Site in India</p>
                        <p><b>Best Time to Visit:</b> October to March
                            <b>Visiting Time:</b> 9:00 am to 6:00 pm
                            <b>Entry Fee:</b> Free
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Dwarkadhish.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Dwarkadhish Temple</h5>
                        <p class="card-text" style="text-align: justify;">A Sacred Place for Hindu Pilgrimage</p>
                        <p><b> Best Time to Visit:</b> November to February and during Janmashtami <br>
                            <b>Visiting Time:</b> 7:00 am to 12:00 pm and 5:00 pm to 9:00 pm <br>
                            <b>Sudama Setu Timings:</b> 7:00 am to 1:00 pm and 4:00 pm to 7:30 pm
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Idar.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Idar Hill Fort</h5>
                        <p class="card-text" style="text-align: justify;">An Offbeat Yet Spectacular Site to See</p>
                        <p><b> Best Time to Visit:</b> November to March </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Junagadh.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Gir National Park</h5>
                        <p class="card-text" style="text-align: justify;">Largest Home for the Asiatic Lions</p>
                        <p><b> Best Time to Visit:</b> October to may <br>
                            <b>Summers Visiting Time:</b> 6:00 am to 9:00 am and 4: 00 pm to 7: 00 pm <br>
                            <b>Winters Visiting Timings:</b> 6:45 am to 9:45 am and 3:00 pm to 6:00 pm
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/LaxmiVilas.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Laxmi Vilas Palace</h5>
                        <p class="card-text" style="text-align: justify;">A Reflection of Gujarat's Plush History</p>
                        <p><b>Best Time to Visit:</b> Throughout the Year<br>
                            <b>Visiting Time:</b> 9:30 am to 5:00 pm <br>
                            <b>Entry Fee:</b> Rs 150<br>
                            <b>Musseum:</b> Rs 60<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Lothal.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Lothal</h5>
                        <p class="card-text" style="text-align: justify;">An Ancient Harappan Port Town Ideal for History Lovers</p>
                        <p><b>Best Time to Visit:</b> July to March<br>
                            <b>Visiting Time:</b> 10:00 am to 5:00 pm, Fridays closed<br>
                            <b>Entry Fee:</b> Rs 5
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Marine.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Marine National Park</h5>
                        <p class="card-text" style="text-align: justify;">India’s First Marine National Park </p>
                        <p><b>Best Time to Visit:</b> November to March<br>
                            <b>Visiting Time:</b> Entry is allowed between the two high tides, which means every day, the timings change
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Palitana.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Palitana Jain Temple</h5>
                        <p class="card-text" style="text-align: justify;">Home to 3000 Spectacular Temples</p>
                        <p><b>Best Time to Visit:</b> October to March</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Polo.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Polo Monument and Vijaynagar Forest</h5>
                        <p class="card-text" style="text-align: justify;">A Perfect Destination for Camping and Hiking </p>
                        <p><b>Best Time to Visit:</b> October to March</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/RaniKiVav.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Rani Ki Vav</h5>
                        <p class="card-text" style="text-align: justify;">A Stunning Stepwell Recognized by UNESCO</p>
                        <p><b>Best Time to Visit:</b> October to March <br>
                            <b>Visiting Time:</b> 8:00 am to 6:00 pm <br>
                            <b>Entry Fee:</b> Rs 15 for Indians and Rs 200 for foreigners
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/RannOfKatchh.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">White Desert/Great Rann of Kutch</h5>
                        <p class="card-text" style="text-align: justify;">A Spectacular Site of Sprawling Salt Desert</p>
                        <p><b>Best Time to Visit:</b> November to March <br>
                            <b>Visiting Time:</b> Rs 100 for adults and Rs 50 for children
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Sabarmati.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Sabarmati Ashram</h5>
                        <p class="card-text" style="text-align: justify;">A Comprehensive Collection Throwing Light on the Life of Mahatma Gandhi</p>
                        <p><b>Best Time to Visit:</b> Throughout the Year <br>
                            <b>Visiting Time:</b> 8:30 am to 6:30 pm <br>
                            <b>Entry Fee:</b> Free
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Sanctuary.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Kutch Great Indian Bustard Sanctuary</h5>
                        <p class="card-text" style="text-align: justify;">Home to One of the Heaviest Flying Birds in the World</p>
                        <p><b>Best Time to Visit:</b> Augaust to March</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Saputara.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Saputara</h5>
                        <p class="card-text" style="text-align: justify;">An Ideal Getaway to Find Respite for Summer Heat</p>
                        <p><b>Best Time to Visit:</b> Throughout the Year <br></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Somnath.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Somnath Temple</h5>
                        <p class="card-text" style="text-align: justify;">The Jyotirlinga that Withstood the Test of Time</p>
                        <p><b>Best Time to Visit:</b> October to March <br>
                            <b>Visiting Time:</b><br> Morning - 7:30 am to 11:30 am <br>
                            Afternoon - 12:30 pm to 6:30 pm<br>
                            Evening - 7:30 pm to 10:00 pm<br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/SunTemple.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Sun Temple</h5>
                        <p class="card-text" style="text-align: justify;">An Architectural Marvel to Not Miss Out</p>
                        <p><b>Best Time to Visit:</b> October to March and during Modhera Dance Festival <br>
                            <b>Visiting Time:</b> 8:00 am to 6:00 pm
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Udvada.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Udvada</h5>
                        <p class="card-text" style="text-align: justify;">A Parsi Village that is Home to the Oldest Zoroastrian Fire Temple in India</p>
                        <p><b>Best Time to Visit:</b> July to March <br>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/Uparkot.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Uparkot Fort</h5>
                        <p class="card-text" style="text-align: justify;">A Place Taking Back in Time </p>
                        <p><b>Best Time to Visit:</b> October to March <br>
                            <b>Visiting Time:</b> 9:00 am to 6:00 pm
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style=" padding-bottom: 10px;">
                <div class="card">
                    <img class="card-img-top" src="imgs/VijayVilas.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Vijay Vilas Palace</h5>
                        <p class="card-text" style="text-align: justify;">A Favourite Film Shooting Location</p>
                        <p><b>Best Time to Visit:</b> Throughout the Day <br>
                            <b>Visiting Time:</b> 9:00 am to 1:00 pm and 3:00 pm to 6:00 pm <br>
                            <b>Entry Fee:</b> Rs 10 <br>
                            <b>Camera Fee:</b> Rs 50<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                            <input type="email" placeholder="email"/>
                        </div><br><br>
                        ©Gujarat Tourism
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>