<?php
session_start();
$_SESSION['login'] = false;


// $_SESSION['logout']= false;
// Import database connection configuration
include_once "DBconfig.php";


$errmsg = false;


// login logic

if (isset($_POST['login'])) {
  
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       // store username & password
       $usernm = $_POST['username'];
       $password = $_POST['password'];


       // fetch from db and verifying..
       $qry = "SELECT * FROM `user_master` WHERE `username` ='" . $usernm . "' and `password` ='" . $password . "'";

       $result = mysqli_query($con, $qry);
       $rowcount = mysqli_num_rows($result); //return no of rows

       if ($rowcount > 0) {

           while ($row = mysqli_fetch_assoc($result)) {


               // category checking


               $_SESSION["userid"] = $row["user_id"];
               $_SESSION['userfname'] = $row['user_fname'];
               $_SESSION['userlname'] = $row['user_lname'];
               $_SESSION['login'] = true;
               header("location:index.php");

            //    echo "LOGGED in";
               // echo "<script>alert('Please ensure..! Category Not Matched !');</script>";

           }
       } else {
           $errmsg = true;
           // and show alert message
           
       }
   }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in / Sign up</title>
    <!-- website logo -->
    <link rel="icon" href="img\weblogo1.ico" type="image/icon">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: rgb(4 4 4 / 40%);"> 


    
           
<div class="modal-content " style="height: 400px; width: 500px; margin-top: 150px;">
<span class="close-form"> &nbsp;</span>

    <div class="form-box">
        <img src="img/user.png" class="user-img">
        <p style="text-align: center;"><small>Please identify yourself</small></p>

        <div class="text-center">
            <div>
                <div class="form-body">
                    <p style="text-align: center;"> <b> Sign in to start your session </b></p>
                    <form action="#" method="POST">
                        <input type="text" name="username" placeholder="Username" required> <br>
                        <input type="password" name="password" placeholder="Password" required>
                    
                    <div id="log" style="margin-right: 10.7em;">
                        
                        <button type="submit" name="login" value="login">Login</button>
                        <button type="reset">Reset</button>
                       
                    
                    </div>
                    </form>
                    <div class="login-links">
                        
                        <a href="register.php" style="float: left; text-decoration: none;">Register</a>
                        <a href="password.php" style="float: right; text-decoration: none;">Forgot Password</a>
                    </div>
                </div>
            </div>
        </div>


    </div>




</div>


<!-- sweet alert cdn path -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
// error message
if ($errmsg == true) {

    echo "<script>
    Swal.fire(
        'Invalide Credentials..!',
        'Username & Password Does not Matched',
        'error')
    </script>";
}
?>

</body>
</html>