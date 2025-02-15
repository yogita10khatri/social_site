<?php

include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home / Twitter</title>  

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

      <link rel="stylesheet" href="node_modules/reset.css/reset.css">


      <link rel="stylesheet" href="twtuistyles.css">

      <link rel="icon" href="favicon.png">

</head>
<body>

    <!-- nav bar starts -->
    <nav >
        <div class="nav_logo-wrapper">
            <svg class="nav_logo" viewBox="0 0 24 24" aria-hidden="true" class="r-1cvl2hr r-4qtqp9 r-yyyyoo r-16y2uox r-8kz0gk r-dnmrzs r-bnwqim r-1plcrui r-lrvibr r-lrsllp"><g><path d="M23.643 4.937c-.835.37-1.732.62-2.675.733.962-.576 1.7-1.49 2.048-2.578-.9.534-1.897.922-2.958 1.13-.85-.904-2.06-1.47-3.4-1.47-2.572 0-4.658 2.086-4.658 4.66 0 .364.042.718.12 1.06-3.873-.195-7.304-2.05-9.602-4.868-.4.69-.63 1.49-.63 2.342 0 1.616.823 3.043 2.072 3.878-.764-.025-1.482-.234-2.11-.583v.06c0 2.257 1.605 4.14 3.737 4.568-.392.106-.803.162-1.227.162-.3 0-.593-.028-.877-.082.593 1.85 2.313 3.198 4.352 3.234-1.595 1.25-3.604 1.995-5.786 1.995-.376 0-.747-.022-1.112-.065 2.062 1.323 4.51 2.093 7.14 2.093 8.57 0 13.255-7.098 13.255-13.254 0-.2-.005-.402-.014-.602.91-.658 1.7-1.477 2.323-2.41z"></path></g></svg>
        </div>

        <div class="Menu_options active">
            <span class="material-icons">home</span>
            <h2>Home</h2>
        </div>

        <div class="Menu_options">
            <span class="material-icons">tag</span>
            <h2>Explore</h2>
        </div>

        <div class="Menu_options">
            <span class="material-icons">group</span>
            <h2>Community</h2>
        </div>

        <div class="Menu_options">
            <span class="material-icons">notifications</span>
            <h2>Notification</h2>
        </div>

        <div class="Menu_options">
            <span class="material-icons">email</span>
            <h2>Messages</h2>
        </div>

        <div class="Menu_options">
            <span class="material-icons">bookmark</span>
            <h2>Bookmarks</h2>
        </div> 

        <div class="Menu_options">
            <span class="material-icons">person</span>
            <h2>Profile</h2>
        </div> 

        <div class="Menu_options">
            <span class="material-icons">more_horiz</span>
            <h2>More</h2>
        </div> 

        <button class="tweet_btn">Tweet</button>


    </nav>
    <!-- nav bar end -->

  
    <!-- main section start -->
    <main>
        <div class="header">
            <h2>Home</h2>
        </div>

        <div class="tweet_box">
            <form>
                <div class="tweet_box-input">
                    <img src="assets/twtuipfp.png" alt="profile imagw">
                    <input type="text" placeholder="What's happening?">
                    <button class="">Tweet</button>

                </div>
            </form>

        </div>

        <div class="post">
            <div class="post_profile-image">
                <img src="assets/page-profile-image.png" alt="java-logo">

            </div>

            <div class="post_body">
                <div class="post_header">
                    <div class="post_header-text">
                        <h3>Java
                            <span class="header-icon-section">
                                <span class="material-icons post_badge">verified</span>@java
                            </span>
                        </h3>
                    </div>

                    <div class="post_header-discription">
                        <p>Java 18 is now available! #Java18 #JDK18 #openjdk </p>
                        <br>
                        <p>Download now: https://social.ora.cl/6012KoqQ0 <br>
                            Release notes: https://social.ora.cl/6013KoqQF <br>
                            API Javadoc: https://social.ora.cl/6015KoqQN <br>
                            Features: https://social.ora.cl/6016KoqQ4 <br>
                            </p>
                    </div>
                    
                </div>
                <img src="assets/post-image.jpeg" alt="java18">

                <div class="post_footer">

                    <span class="material-icons">chat</span>
                    <span class="material-icons">repeat</span>
                    <span class="material-icons">favorite_border</span>
                    <span class="material-icons">file_upload</span>
                    

                </div>

            </div>

        </div>

        <div class="post">
            <div class="post_profile-image">
                <img src="assets/page-profile-image.png" alt="java-logo">

            </div>

            <div class="post_body">
                <div class="post_header">
                    <div class="post_header-text">
                        <h3>Java
                            <span class="header-icon-section">
                                <span class="material-icons post_badge">verified</span>@java
                            </span>
                        </h3>
                    </div>

                    <div class="post_header-discription">
                        <p>Java 18 is now available! #Java18 #JDK18 #openjdk </p>
                        <br>
                        <p>Download now: https://social.ora.cl/6012KoqQ0 <br>
                            Release notes: https://social.ora.cl/6013KoqQF <br>
                            API Javadoc: https://social.ora.cl/6015KoqQN <br>
                            Features: https://social.ora.cl/6016KoqQ4 <br>
                            </p>
                    </div>
                    
                </div>
                <img src="assets/post-image.jpeg" alt="java18">

                <div class="post_footer">

                    <span class="material-icons">chat</span>
                    <span class="material-icons">repeat</span>
                    <span class="material-icons">favorite_border</span>
                    <span class="material-icons">file_upload</span>
                    

                </div>

            </div>

        </div>


        <div class="post">
            <div class="post_profile-image">
                <img src="assets/page-profile-image.png" alt="java-logo">

            </div>

            <div class="post_body">
                <div class="post_header">
                    <div class="post_header-text">
                        <h3>Java
                            <span class="header-icon-section">
                                <span class="material-icons post_badge">verified</span>@java
                            </span>
                        </h3>
                    </div>

                    <div class="post_header-discription">
                        <p>Java 18 is now available! #Java18 #JDK18 #openjdk </p>
                        <br>
                        <p>Download now: https://social.ora.cl/6012KoqQ0 <br>
                            Release notes: https://social.ora.cl/6013KoqQF <br>
                            API Javadoc: https://social.ora.cl/6015KoqQN <br>
                            Features: https://social.ora.cl/6016KoqQ4 <br>
                            </p>
                    </div>
                    
                </div>
                <img src="assets/post-image.jpeg" alt="java18">

                <div class="post_footer">

                    <span class="material-icons">chat</span>
                    <span class="material-icons">repeat</span>
                    <span class="material-icons">favorite_border</span>
                    <span class="material-icons">file_upload</span>
                    

                </div>

            </div>

        </div>

    </main>
    <!-- main section end -->

    <!-- aside element start -->
    <aside>

        <div class="aside_input">
            <span class="material-icons aside_search-icon">search</span>
            <input type="text" placeholder="Search Twitter">
 
        </div>

        <div class="aside_container">
            <h2>What's happening?</h2>
            <blockquote class="twitter-tweet"><p lang="en" dir="ltr">Save the date, because <a href="https://twitter.com/hashtag/JavaOne?src=hash&amp;ref_src=twsrc%5Etfw">#JavaOne</a> is back! Join the world’s premier <a href="https://twitter.com/hashtag/developer?src=hash&amp;ref_src=twsrc%5Etfw">#developer</a> conference in Las Vegas at <a href="https://twitter.com/Oracle?ref_src=twsrc%5Etfw">@Oracle</a> CloudWorld October 16–20, 2022.<br><br>Subscribe for the latest news about registration, the call for papers, luminary speakers, and more. <a href="https://t.co/hhSf3dMGc1">https://t.co/hhSf3dMGc1</a> <a href="https://t.co/OeDFukcM8K">pic.twitter.com/OeDFukcM8K</a></p>&mdash; Java (@java) <a href="https://twitter.com/java/status/1506310994112483328?ref_src=twsrc%5Etfw">March 22, 2022</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        </div>
        
    </aside>
    <!-- aside element ends -->

    
</body>
</html>