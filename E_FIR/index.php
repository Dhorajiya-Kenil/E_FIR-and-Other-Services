<?php
// hide warning message
error_reporting(E_ERROR | E_PARSE);
// ------------------------------------------
session_start();
$_SESSION['login'] == false;
// Import database connection configuration
include_once "DBconfig.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- website logo -->
    <link rel="icon" href="img\weblogo1.ico" type="image/icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->

    <!-- boostrap -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>

<body>

    <section class="header">


        <nav>
            <a href="index.php" class="logo">

            </a>

            
  
            <div class="nav-links" id="navLinks">

                <ul>
                    <li class="select active"><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li><a href="Form.php"><i class="fa fa-file"></i>Online Form</a></li>
                    <li><a href="Gallery.php"><i class="fa fa-image"></i>Photo Gallery</a></li>
                    <li><a href="Department.php"><i class="fa fa-star"></i>Know Home Department</a></li>

                    <li><a href="Absconder.php"><i class="fa fa-list"></i>Absconder List</a></li>
                    <li><a href="Contact.php"><i class="fa fa-mobile"></i>Contact Details</a></li>
                    <li><a href="Notice.php"><i class="fa fa-book"></i>Lookout Notice</a></li>
                    
                </ul>
                
            </div>

        </nav>

<script>

</script>

        <!-- log in / log out button -->
        <div>

        </div>

        <div class="boot">

            <?php
            if ($_SESSION['login'] == false) {
                echo '
                
                <button type="button" id="bootn" style="color: aliceblue; text-decoration: none; margin-right:"><a href="login.php" style="color: white;"><i class="fa fa-key" style="margin-right: 1em;"></i>Log in/Registration</a></button>
                ';
            } else {
                echo '   <h4 id="wcmsg"> Welcome  ' . $_SESSION['userfname'] . '  ' . $_SESSION['userlname'] . '    </h4>';
                echo '
                <button type="button" id="bootn11" style="color: aliceblue; text-decoration: none;"><a href="logout.php" style="color: white;"><i class="fa fa-user" style="margin-right: 1em;"></i>Log Out</a></button>
                ';
            }
            ?>

        </div>



        <script>
            var modal = document.getElementById("myModal");
            var btn = document.getElementById("bootn");

            var span = document.getElementsByClassName("close")[0];


            btn.onclick = function() {
                modal.style.display = "block";
            }


            span.onclick = function() {
                modal.style.display = "none";
            }


            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>




        <div class="first">
            <img src="img/police.png" class="police">

            <div class="para">
                <p class="citizen">CITIZEN PORTAL, GUJARAT POLICE</p>
                <p class="home">(HOME DEPARTMENT, GOVERNMENT OF GUJARAT) </p>

            </div>


        </div>



        <div class="course">
            <div class="box-border1">
                <strong>Our Services</strong>
            </div>
            <div class="PageBlock">

                <div class="verticalLine"></div>
                <div class="Clear"></div>
            </div>

            <div class="raw">

                <!-- <div class="row">
                    <div class="course-col">
                        <div class="img">
                            <a href="FIR.php" id="img_link">
                                <img height="35%" width="45%" src="img\Fir.png">
                                <p class="p1">Get a Copy of FIR</p>
                            </a>

                        </div>
                    </div>
                </div> -->
                <div class="row1">
                    <div class="course-col">
                        <div class="img">
                            <a href="e-FIR.php" id="img_link">
                                <img height="35%" width="45%" src="img/2.png">
                                <p class="p1">e-FIR</p>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="row3">
                    <div class="course-col">
                        <div class="img">
                            <a href="e-application.php" id="img_link">
                                <img height="35%" width="45%" src="img/Eapplication.png">
                                <p class="p1">e-Application</p>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="row4">
                    <div class="course-col">
                        <div class="img">
                            <a href="Missing Person.php" id="img_link">
                                <img height="35%" width="45%" src="img/ReportMissingPerson.png">
                                <p class="p1">Report Missing Person</p>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="row5">
                    <div class="course-col">
                        <div class="img">
                            <a href="Senior Citizen Registration.php" id="img_link">
                                <img height="35%" width="45%" src="img/SeniorRegi.png">
                                <p class="p1">Senior Citizen Registration</p>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <center>
            <button type="button" id="butn"><a href="News.php" style="color: aliceblue; text-decoration: none;">News &
                    Announcement</a></button>
        </center>

    </section>


    <section class="campus">
        <div class="PageBlock">
            <div class="verticalLine"></div>
            <div class="Clear"></div>
        </div>
        <div class="tour">
            <h1>TAKE OUR VIRTUAL TOUR</h1>
        </div>
        <div class="roww">
            <div class="campus-col">
                <img src="img/Ahemdabad.jpg" alt="">
                <div class="layer">
                    <h3>AHEMDABAD</h3>
                </div>
            </div>
            <div class="campus-col">
                <img height="280px" src="img/Amreli.jpg" alt="">
                <div class="layer">
                    <h3>AMRELI</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="img/surat.jpg" alt="">
                <div class="layer">
                    <h3>SURAT</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- logo -->
    <section>
        <div>
            <button type="button" id="butn2"><a href="#" style="color: rgb(0, 0, 0); text-decoration: none;">Information
                    For The Public</a></button>
        </div>
        <div class="Slider">
            <div class="slider" style="display: flex;">

                <a href="https://police.gujarat.gov.in/dgp/default.aspx" target="_blank">
                    <img src="img/GujaratPolice.jpg" class="line1">
                </a>

                <a href="https://gujaratindia.gov.in" target="_blank">
                    <img src="img/gujarat-india.jpg" class="line3">
                </a>

                <a href="https://www.mha.gov.in" target="_blank">
                    <img src="img/MHA.jpg" class="line4">
                </a>

                <a href="https://www.digitalgujarat.gov.in" target="_blank">
                    <img src="img/DigitalGujarat.jpg" class="line5">
                </a>

                <!-- <a href="https://ncrb.gov.in" target="_blank">
                    <img src="img/ncrb5.jpg" class="line1">
                </a>


                <a href="https://surakshasetu.org" target="_blank">
                    <img src="img/surakshasetu_logo_110.jpg" class="line1">
                </a>

                <a href="https://home.gujarat.gov.in/homedepartment/default.aspx" target="_blank">
                    <img src="img/HomeDeptgujarat.jpg" class="line1">
                </a> -->

            </div>
            <div class="slider2" style="display: flex;">

                <a href="https://www.nic.in" target="_blank">
                    <img src="img/NIC.jpg" class="line2">
                </a>

                <!-- <a href="https://gad.gujarat.gov.in" target="_blank">
                    <img src="img/GAD.jpg" class="line6">
                </a> -->

                <a href="https://digitalpolice.gov.in" target="_blank">
                    <img src="img/DigitalPolice.jpg" class="line7">
                </a>



            </div>

            <div class="slider3" style="display: flex;">




            </div>
        </div>
    </section>



    <section class="footer">

        <h4><a href="PDF/T_And_C.pdf" target="_blank" class="term">Terms & Conditions</a></h4>
        <h4><a href="PDF/F_And_Q.pdf" target="_blank" class="faq">FAQ</a></h4>
        <h4><a href="PDF/P_And_p.pdf" target="_blank" class="pp">Privacy Policy</a></h4>
        <h4><a href="feedback.php" target="" class="feed">Feedback</a></h4>
        <!-- <h4><a href="#.php">Visitors : 1674785</a></h4> -->

        <div class="follow">
            <h6>Follow Us</h6>
        </div>

        <div class="icons" id="ir">
            <a href="https://www.facebook.com/dgpgujaratofficial/" target="_blank">
                <h3 class="face"><i class="fab fa-facebook-f"></i> Facebook</h3>
            </a>
            <a href="https://www.instagram.com/gujaratpolice_/" target="_blank">
                <h3 class="face2"><i class="fab fa-instagram"></i> Instagram </h3>
            </a>
            <a href="https://twitter.com/GujaratPolice" target="_blank">
                <h3 class="face3"><i class="fab fa-twitter"></i> Twitter </h3>
            </a>


        </div>

    </section style="margin-bottom: 5px;">


    <script src="script.js"></script>



</body>

</html>