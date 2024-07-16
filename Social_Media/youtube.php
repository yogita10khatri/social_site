<?php

include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youtube Clone</title>

    <link rel="stylesheet" href="ytstyles.css">

</head>
<body>
    <nav class="navbar">
        <div class="toggle-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <img src="assets/ytlogo.PNG" class="logo" alt="">
        <div class="search-box">
            <input type="text" class="search-bar" placeholder="search">
            <button class="search-btn"><img src="assets/search.PNG" alt=""></button>
        </div>
        <div class="user-options">
            <img src="assets/video.PNG" class="icon" alt="">
            <img src="assets/grid.PNG" class="icon" alt="">
            <img src="assets/bell.PNG" class="icon" alt="">
            <a href="ytsign.php"> <div class="user-dp">
                <img src="assets/yk_image.jpg" alt="">
            </div></a>
        </div>
    </nav>

    <!-- sidebar -->
    <div class="side-bar">
        <a href="#" class="links active"><img src="assets/home.PNG" alt="">home</a>
        <a href="#" class="links"><img src="assets/explore.PNG" alt="">explore</a>
        <a href="#" class="links"><img src="assets/subscription.PNG" alt="">subscription</a>
        <hr class="seperator">
        <a href="#" class="links"><img src="assets/library.PNG" alt="">library</a>
        <a href="#" class="links"><img src="assets/history.PNG" alt="">history</a>
        <a href="#" class="links"><img src="assets/your-video.PNG" alt="">your video</a>
        <a href="#" class="links"><img src="assets/watch-later.PNG" alt="">watch later</a>
        <a href="#" class="links"><img src="assets/liked video.PNG" alt="">like video</a>
        <a href="#" class="links"><img src="assets/show more.PNG" alt="">show more</a>
    </div>

    <!-- filters -->
    <div class="filters">
        <button class="filter-options active">all</button>
        <button class="filter-options">CSS</button>
        <button class="filter-options">web development</button>
        <button class="filter-options">python</button>
        <button class="filter-options">entertainment</button>
        <button class="filter-options">marvel</button>
        <button class="filter-options">javascript</button>
        <button class="filter-options">artificial intelligence</button>
        <button class="filter-options">machine learning</button>
        <button class="filter-options">trending</button>
    </div>

    <!-- videos -->
    <div class="video-container">
    <!--- <div class="video">
            <img src="/assets/Youtube/profile-pic.png" class="thumbnail" alt="">
            <div class="content">
                <img src="/assets/Youtube/profile-pic.png" class="channel-icon" alt="">
                <div class="info">
                    <h4 class="title">youtube clone 2021 | create working youtube clone</h4>
                    <p class="channel-name">modern web</p>
                </div>
            </div>
        </div> -->
    </div>

    <script src="https://apis.google.com/js/api.js"></script>
    <script src="yt.js"></script>
    
</body>
</html>