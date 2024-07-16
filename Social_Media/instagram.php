<?php

include 'connect.php';


if(isset($_POST['submit'])){
    $username = $_POST['uname']; 
    $password = $_POST['password']; 


    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $query = "SELECT * FROM users WHERE username ='$username' AND userpass ='$password'";
    $result = $conn->query($query);

 
    if ($result && $result->num_rows == 1) {
    
        header("Location: instaui.php");
        exit(); 
    } else {
      
        header("Location: instagram.php?error=1");
        exit(); 
    }
}
?>

<html>
<html>
    <head>
        <link rel="stylesheet" href="instastyles.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <title>Instagram</title>
    </head>
    <body class="insta">
        <main>
            <img src="assets/IG.jpeg" alt="" class="phoneImg">
            <div class="form-div">
                <form action=""  method="post">
                    <img class="instaLogo" src="assets/instaLogo.png" alt="logo">
                    <input type="text" class="input" name ="uname" placeholder="Username or Email">
                    <input type="password" class="input" name="password" placeholder="Password">
                    <button class="login-btn" name="submit">Log In</button>
                    <p id="or">or</p>
                    <a href="facebook.php" class="fb-login"><i class='bx bxl-facebook-square'></i> Log in with Facebook</a>
                </form>
                <div class="sign-up">
                    <p>Don't have an account? <a href="#" class="sign-link">Sign up</a></p>
                </div>
                <div class="get-app">
                    <p>Get the app</p> 
                    <div class="store">
                        <a href="https://play.google.com/store/search?q=instagram&c=apps&hl=en_US&gl=US"><img id="play" src="assets/playStore.png" alt=""></a>
                        <a href="https://apps.microsoft.com/detail/9nblggh5l9xt?hl=en-us&gl=US"><img id="microsoft" src="assets/getMicrosoft.png" alt=""></a>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>