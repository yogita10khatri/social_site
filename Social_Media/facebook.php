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
    
        header("Location: fbui.php");
        exit(); 
    } else {
      
        header("Location: facebook.php?error=1");
        exit(); 
    }
}

?>

<html>
<head>
    <title>Facebook</title>
    <link rel="stylesheet" href="fbstyles.css">
    <script src="fbscript.js"></script>
</head>
<body class="facebook">
    <div class="container">
        <div class="leftpart">
            <h1>Facebook</h1>
            <h3>Facebook helps you connect and share with the people in your life</h3>
        </div>
        <div class="rightpart">
            <div class="loginpage">
                <form class="fb" method ="post">
                    <input id="emailOrPhone" type="text" name ="uname" placeholder="user name ">
                    <input id="password" name ="password" type="password" placeholder="Password">
                    <input type="submit" name="submit">
                </form>
                <p>Forgot Password?</p>
                <hr>
                <div class="createaccount">
                    Create a new account
                </div>
            </div>
            <span>Create a Page for a celebrity, brand or business.</span>
        </div>
    </div>
</body>
</html>
