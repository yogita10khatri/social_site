<?php

include 'connect.php';
?>

<html>
    <head>
        <title>Github</title>
        <link rel="stylesheet" href="gtbstyles.css">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </head>
    <body class="gtb">
        
        <div class="parent-box-gtb">
            
            <div class="icon-gtb" id="modeImage">
                <img src="assets\gtbiconblack.png" alt="" class="icon-image">
            </div>
            <p class="head-gtb">Sign in to Github</p>
            <div class="login-box-gtb">
                <div class="input-box">
                    <div class="label">Username or Email address</div>
                    <input type="text" name="" id="username">
                </div>
                <div class="input-box">
                    <div class="label">
                        <span>Password</span>
                        <a href="">Forgot password?</a>
                    </div>
                    <input type="password" name="" id="password">
                </div>
                <input type="submit" class="btn" value="Sign In">
            </div>
            <div class="signup">
                <span>New to Github?</span> &nbsp;
                <a href="">Create an account</a>
            </div>
            <div class="dark-mode-toggle-container">
                <label class="switch">
                    <input type="checkbox" id="darkModeToggle">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <script src="gtbscript.js"></script>
    </body>
</html>

