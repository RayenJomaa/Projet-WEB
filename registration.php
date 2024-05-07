<?php
    include("database.php");
    set_error_handler(function(int $errno, string $errstr) {
        if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
            return false;
        } else {
            return true;
        }
    }, E_WARNING);
    $name=$_POST["Full_name"];
    $password = $_POST["mdp"];
    $verif_password = $_POST["mdp2"];
    if($password != $verif_password){
        echo '<script type="text/javascript">';
        echo 'alert("That\'s not the password");';
        echo '</script>';

    }else{
        $sql = "SELECT * FROM users WHERE username = '$name' AND password = '$password'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            echo '<script type="text/javascript">';
            echo 'alert("user already exists");';
            echo '</script>';
        }else{
            $sql = "INSERT INTO users(username,password) VALUES ('$name','$password')";
            $result = mysqli_query($conn,$sql);
            // header('location: index.html');//redirection to registraion page
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/contact-icon-17.png"/>
    <title>Contact Us</title>
    <!-- <link rel="stylesheet" href="assets/css/contact.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
</head>
<body>
    <div class="resume_box">
        
         <h1 class="heading">SIGN UP</h1>
        <div class="ff">
            <div class="input">
                <form method = "POST" action="" onsubmit="return tester()">
                    <div>
                        <label for="Fullname" class="name">Full Name:</label><br>
                        <input type="text" id="first_name" name="Full_name">
                    </div>
                    <br>
                    <div>
                        <label for="mdp" class="input_label" id="pn">mot de passe:</label><br>
                        <input type="tel" id="mdp" name="mdp">
                    </div>
                    <br>
                    <div>
                        <label for="mdp" class="input_label" id="pn">verifier mot de passe:</label><br>
                        <input type="tel" id="mdp" name="mdp2">
                    </div>
                    <br>
                    <br><br>
                    <button type="submit" id="submit">SIGN UP</button>
                </form>
            </div>
            <div class="inf">
                <h3>contact :</h3>
                <p>Gym_wave@gmail.tn</p>
                <h3>based in :</h3>
                <p>Tunis</p>
                <div class="ext">
                    <i class='bx bxl-facebook-circle' id="facebook"></i>
                    <i class='bx bxl-instagram' id="instagram"></i>
                    <i class='bx bxl-twitter' id="twitter"></i>
                </div>
            </div>
        </div>
    </div>
    <script src="contact.js"></script>
</body>
</html>
