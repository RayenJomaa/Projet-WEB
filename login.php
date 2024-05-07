<?php
  include("database.php");
  set_error_handler(function(int $errno, string $errstr) {
    if ((strpos($errstr, 'Undefined array key') === false) && (strpos($errstr, 'Undefined variable') === false)) {
        return false;
    } else {
        return true;
    }
  }, E_WARNING);
  $name=$_POST["username"];
  $password = $_POST["password"];
  if (isset($_POST["checkbx"]) && $_POST["checkbx"]=="1"){
    $sql = "SELECT * FROM users WHERE username = '$name' AND password = '$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
      header('Location: index.html');
    }else{
      header('location: contact.html');//redirection to registraion page
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href= "assets/img/mot-de-passe.png" />
  <title>GYM WAVE - Login</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <div class="login-container">
    <h1>GYM WAVE</h1>
    <form  method="post" action="login.php">
      <input  type="text" name="username" placeholder="Username" required> <br> <br> 
      <input  type="password" name="password" placeholder="Password" required>
      <input type="checkbox"  name="checkbx" value = "1">
      <label class="check"> Je ne suis pas un robot</label><br>
      <button class="buttonlogin"><a  class="ktiba">SUMBIT</a></button>
    </form>

    <div class="social-media">
      <a href="https://www.facebook.com/your_facebook_page"><i class="fab fa-facebook-f"></i></a>
      <a href="https://twitter.com/your_twitter_page"><i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/your_instagram_page"><i class="fab fa-instagram"></i></a>
    </div>
  </div>

</body>
</html>
