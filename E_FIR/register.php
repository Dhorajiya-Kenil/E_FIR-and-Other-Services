<?php
include "DBconfig.php";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstname =$_POST['First_Name'];
    $middlename =$_POST['middle_name'];
    $lastname=$_POST['last_name'];
    $username=$_POST['username'];
    $mobilenumber=$_POST['mobile_number'];
    $address=$_POST['Address'];
    $occupation=$_POST['occupation'];
    $gender=$_POST['Gender'];
    $religion=$_POST['Religion'];
    $dateofbirth=$_POST['Date_Of_Birth'];
    $nationality=$_POST['nationality'];
    $pincode=$_POST['pincode'];
    // $uploaddocument=$_POST['Upload_Document'];
    $documenttype=$_POST['Document_Type'];
    $documentno=$_POST['document_no'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirm_password'];
    $emailaddress=$_POST['E-mail_address'];
    $selectquestion=$_POST['Select_Question'];
    $answere=$_POST['answere'];

    // file upload
    if (isset($_FILES['reg_doc'])) {
        $file_name = $_FILES["reg_doc"]["name"];
        $file_size = $_FILES["reg_doc"]["size"];
        $file_tmp = $_FILES["reg_doc"]["tmp_name"];
        $file_type = $_FILES["reg_doc"]["type"];

        // print_r($_FILES);
        if ($file_type == 'application/pdf' || $file_type == 'image/jpeg' || $file_type == 'image/png') {
            $res =  move_uploaded_file($file_tmp, "registration_doc/" . $file_name);
            if ($res) {
                $sql='INSERT INTO `user_master` (`address`, `que_id`, `nationality_id`, `user_fname`, `user_mname`, `user_lname`, `contact_no`, `user_dob`, `username`, `password`, `user_email`, `q_ans`, `gender`, `religion_id`, `occupation`, `pincode`, `document_id`, `doc_no`, `reg_date`) VALUES ( "'.$address.'",'.$selectquestion.' , '.$nationality.', "'.$firstname.'", "'.$middlename.'", "'.$lastname.'", '.$mobilenumber.', "'.$dateofbirth.'", "'.$username.'", "'.$password.'", "'.$emailaddress.'", "'.$answere.'", "'.$gender.'", '.$religion.', "'.$occupation.'", '.$pincode.', '.$documenttype.', "'.$documentno.'", current_timestamp());';
                try
                {
                $result=mysqli_query($con,$sql);
                if($result){
                    echo "<script>alert('Register Successfully...')</script>";
                    echo "<script> window.location = './index.php';</script>";
                }
                else{
                    echo "<script>alert('Registration Failed , Please Check Information..')</script>";
                }
                        throw new Exception;
                }
                catch (Exception $e)
                {
                    echo "<script>alert('May Be Information Already Exist.. Please check Username or Contact Number')</script>";

                }
               

                
            }
        } else {
            // $docalert = true;
            echo "<script>alert('The uploaded file is in incorrect format...')</script>";
        }
    }

   

}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Regestration Form</title>
    <!-- website logo -->
    <link rel="icon" href="img\weblogo1.ico" type="image/icon">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap">
    <link rel="stylesheet" href="css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>


<body>


    <section class="header">
        <nav>
            <a href="index.php" class="logo">

            </a>

            <div class="nav-links" id="navLinks">

                <ul>
                    <li class="select active"><a href="index.php"><i class="fa fa-home"></i>Home</a></li>


                    <li><a href="Form.php" target="_blank"><i class="fa fa-file"></i>Online Form</a></li>
                    <li><a href="Gallery.php"><i class="fa fa-image"></i>Photo Gallery</a></li>
                    <li><a href="Department.php"><i class="fa fa-star"></i>Know Home Department</a></li>
                    <li><a href="UserGuideline_En.pdf" target="_blank"><i class="fa fa-users"></i>User Guideline</a></li>
                    <li><a href="Absconder.php"><i class="fa fa-list"></i>Absconder List</a></li>
                    <li><a href="Contact.php"><i class="fa fa-mobile"></i>Contact Details</a></li>
                    <li><a href="Notice.php"><i class="fa fa-book"></i>Lookout Notice</a></li>
                </ul>
            </div>

        </nav>


        <div>
            <div>
                <div class="t">
                    <h2> <b>Registration Form</b> </h2>
                </div>

                <form action="#" method='POST' enctype="multipart/form-data">
                    <div class="app1">
                        <div class="app2">
                            <div class="r1">
                                <div class="r2">
                                    <div class="r3">
                                        <label for="exampleInputEmail1" class="r4">First Name</label>
                                        <span class="r5">*</span>
                                        <input type="text" class="r6" id="exampleInputEmail1" aria-describedby="emailHelp"  name="First_Name" required>
                                    </div>
                                </div>
                                <div class="r2">
                                    <div class="r3">
                                        <label for="exampleInputEmail1" class="r4">Mid Name</label>
                                        <span class="r5">*</span>
                                        <input type="text" class="r6" id="exampleInputEmail1" aria-describedby="emailHelp" name="middle_name"
                                        required>

                                    </div>
                                </div>
                                <div class="r2">
                                    <div class="r3">
                                        <label for="exampleInputEmail1" class="r4">Last Name</label>
                                        <span class="r5">*</span>
                                        <input type="text" class="r6" id="exampleInputEmail1" aria-describedby="emailHelp" name="last_name" required>
                                    </div>
                                </div>
                            </div>


                            <div class="r1">
                                <div class="r2">
                                    <div class="r3">
                                        <label for="Username" class="r4">Username</label>
                                        <span class="r5">*</span>
                                        <input type="text" class="r6" id="Username" aria-describedby="emailHelp" name="username" required>
                                    </div>
                                </div>
                                <div class="r2">
                                    <div class="r3">
                                        <label for="nummber" class="r4">Mobile Number</label>
                                        <span class="r5">*</span>
                                        <input type="tel" class="r6" id="nummber" aria-describedby="emailHelp" name="mobile_number" maxlength="10" minlength="10"     pattern="[0-9]{10}" required>
                                    </div>
                                </div>
                                <div class="r2">
                                    <div class="r3">
                                        <label for="nummber" class="r4">Address</label>
                                        <span class="r5">*</span>
                                        <input type="text" class="r6" id="nummber" aria-describedby="emailHelp" name="Address" maxlength="60" required>
                                    </div>
                                </div>

                            </div>

                            <div class="r1">
                                <div class="r2">
                                    <div class="r3">
                                        <label for="exampleInputPassword1" class="r4">Occupation</label>
                                        <span class="r5">*</span>
                                        <input type="text" class="r6" id="exampleInputPassword1" required name="occupation">
                                    </div>
                                </div>
                                <div class="r2">
                                    <div class="r3">
                                        <label for="exampleInputPassword1" class="r4">Gender</label>
                                        <span class="r5">*</span>
                                        <select class="r6" aria-label="Default select example" name="Gender" id="select">
                                            <option selected>SELECT</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="r2">
                                    <div class="r3">
                                        <label for="exampleInputEmail1" class="r4">Religion</label>
                                        <span class="r5">*</span>
                                        <select class="r6" aria-label="Default select example" name="Religion" id="select">
                                                    <option selected>-Select-</option>
                                                    <option value="1">Buddhist</option>
                                                    <option value="2">Christian</option>
                                                    <option value="3">Donyipolo</option>
                                                    <option value="4">Hindu</option>
                                                    <option value="5">Islam</option>
                                                    <option value="6">Jain</option>
                                                    <option value="7">Jews/Yehudi</option>
                                                    <option value="8">Muslim</option>
                                                    <option value="9">Other</option>
                                                    <option value="10">Parsi</option>
                                                    <option value="11">Sikh</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="r1">
                                <div class="r2">
                                    <div class="r3">
                                        <label for="exampleInputEmail1" class="r4">Date Of Birth</label>
                                        <span class="r5">*</span>
                                        <input type="date" class="r6" id="exampleFormControlInput1" placeholder="" name="Date_Of_Birth">
                                    </div>
                                </div>
                                <div class="r2">
                                    <div class="r3">
                                        <label for="exampleInputEmail1" class="r4">Nationality</label>
                                        <span class="r5">*</span>
                                        <select class="r6" aria-label="Default select example" name="nationality" id="select">
                                                <option selected>Select</option>
                                                <option value="1">Indian</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="r2">
                                    <div class="r3">
                                        <label for="exampleInputEmail1" class="r4">Pincode</label>
                                        <span class="r5">*</span>
                                        <input type="number" class="r6" id="Username" aria-describedby="emailHelp" name="pincode" maxlength="06" required>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <div class="r1">
                                    <div class="r2">
                                        <div class="r3">
                                            <label class=""> <h6>Upload Document</h6></label>
                                            <span class="r5">*</span>
                                            <input type="file" class="r6" ids="up1" aria-describedby="emailHelp" name="reg_doc" style="margin-top: 0.5em;">
                                        </div>

                                    </div>
                                    <div class="r2">
                                    <div class="r3">
                                        <label for="exampleInputPassword1" class="r4">Document Type</label>
                                        <span class="r5">*</span>
                                        <select class="r6" aria-label="Default select example" name="Document_Type" id="select">
                                            <option selected>SELECT</option>
                                            <option value="1">Aadhar card</option>
                                            <option value="2">Pan card</option>
                                            <option value="3">VoterId</option>
                                        </select>
                                    </div>
                                   
                                </div>
                                <div class="r2">
                                        <div class="r3">
                                            <label class=""> <h6>Document no</h6></label>
                                            <span class="r5">*</span>
                                            <input type="text" class="r6" ids="up1" aria-describedby="emailHelp" name="document_no" style="margin-top: 0.5em;"  maxlength="12">
                                        </div>

                                    </div>


                                </div>
                               

                                <div class="r1">
                                    <div class="r2">
                                        <div class="r3">
                                            <label for="exampleInputPassword1" class="r4">Password</label>
                                            <span class="r5">*</span>
                                            <input type="password" class="r6" id="exampleInputPassword1" required name="password">
                                        </div>
                                    </div>
                                    <div class="r2">
                                        <div class="r3">
                                            <label for="exampleInputPassword1" class="r4">Confirm Password</label>
                                            <span class="r5">*</span>

                                            <input type="password" class="r6" id="exampleInputPassword1" required name="confirm_password">
                                        </div>
                                    </div>
                                </div>
                                <div class="r1">
                                    <div class="r2">
                                        <div class="r3">  
                                            <label for="exampleFormControlInput1" class="r4">Email address</label>
                                            <input type="email" class="r6" id="exampleFormControlInput1" placeholder="name@example.com" name="E-mail_address">
                                        </div>
                                    </div>
                                    <div class="r2">
                                        <div class="r3">
                                            <label for="exampleFormControlInput1" class="r4">Select Question</label>
                                            <span class="r5">*</span>
                                            <select class="r6" aria-label="Default select example" name="Select_Question" id="select">

                                            <option selected>Select Question</option>
                                                <option value="1">What is your favourite cricketer?</option>
                                                <option value="2">What is your primary school name?</option>
                                                <option value="3">What was your childhood nickname?</option>
                                                <option value="4">What was the name of the first school you attended?</option>
                                                <option value="5">Who is your favourite super hero?</option>
                                                <option value="6">What is your Favourite Food?</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="r2">
                                        <div class="r3">
                                            <label for="exampleFormControlInput1" class="r4">Answere</label>
                                            <span class="r5">*</span>
                                            <input type="text" class="r6" id="exampleFormControlInput1" placeholder="Answere" required name="answere">
                                        </div>
                                    </div>
                                </div>









                                <label for=""><u><b>User Agreement</b></u></label>

                                <div class="form-check py-2">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                                    <label class="form-check-label" for="flexCheckChecked">
                         I have read, understood and agreed to the<a href="#">Terms</a> · <a href="#">Conditions</a>
                        </label>
                                </div>



                                <div>
                                    <center class="">
                                        <button type="submit" class="boot1">submit</button>
                                        <button type="reset" class="boot2">reset</button>
                                        <button type="Cancel"  class="boot3">Cancel</button>
                                    </center>

                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </div>


        </form>


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










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
        </script>
</body>

</html>