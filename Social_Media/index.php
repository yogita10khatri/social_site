<?php

include 'connect.php';
?>

<html class="index">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="indexstyles.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
            function openPage(url) {
                window.location.href = url;
            }
        </script>
    </head>
    <body class="index">
        <div class="wrapper">
            <div class="icon facebook" onclick="openPage('facebook.php')">
                <div class="tooltip">Facebook</div>
                <span><i class="fa fa-facebook"></i></span>
            </div>
            <div class="icon twitter" onclick="openPage('http://localhost/twitter-clone-master/index.php')">
                <div class="tooltip">Twitter</div>
                <span><i class="fa fa-twitter"></i></span>
            </div>
            <div class="icon instagram" onclick="openPage('http://localhost/Instagram/index.php')">
                <div class="tooltip">Instagram</div>
                <span><i class="fa fa-instagram"></i></span>
            </div>
            <div class="icon github" onclick="openPage('github.php')">
                <div class="tooltip">Github</div>
                <span><i class="fa fa-github"></i></span>
            </div>
            <div class="icon youtube" onclick="openPage('youtube.php')">
                <div class="tooltip">Youtube</div>
                <span><i class="fa fa-youtube-play"></i></span>
            </div>
        </div>
    </body>
</html>
