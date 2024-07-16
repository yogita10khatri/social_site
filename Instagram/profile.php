<!DOCTYPE html>
<?php
    include_once 'connect.php';
    $curr_us = isset($_GET['curr_us']) ? $_GET['curr_us'] : null;
    $us = isset($_GET['profile_for']) ? $_GET['profile_for'] : null;

    if ($us === null) {
        // Handle the case where profile_for is not provided, for example, by redirecting or showing an error
        echo "User profile not specified.";
        exit;
    }
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Profile | Instaclone</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link href="css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    </head>
    <body>
        <nav class="navigation">
            <a href="feed.php?username=<?php echo htmlspecialchars($curr_us) ?>">
                <img 
                    src="images/navLogo.png"
                    alt="logo"
                    title="logo"
                    class="navigation__logo"
                />
            </a>
            <div class="navigation__icons">
                <a href="explore.php?curr=<?php echo $us?>&for=_&get=search" class="navigation__link">
                    <i class="fa fa-compass"></i>
                </a>
                <a href="#" class="navigation__link">
                    <i class="fa fa-heart-o"></i>
                </a>
                <a href="profile.php?username=<?php echo htmlspecialchars($us) ?>" class="navigation__link">
                    <i class="fa fa-user-o"></i>
                </a>
            </div>
        </nav>
        <main class="profile-container">
        <?php
            $result = mysqli_query($conn,  "SELECT
                                                (
                                                    SELECT 1 
                                                    FROM followings
                                                    WHERE username = '$curr_us' 
                                                          AND following = '$us'
                                                ) AS is_follower,
                                                profile_name,
                                                profile_picture,
                                                bio, 												
                                                posts,
                                                followings,
                                                followers
                                            FROM users
                                            WHERE username = '$us'"
                                  );
            $row = mysqli_fetch_array($result);
            
            $is_follower     = $row['is_follower'] ?? 0;  // Provide default values if null
            $profile_name    = $row['profile_name'] ?? '';
            $profile_picture = $row['profile_picture'] ?? 'images/avatar.svg';  // Default to avatar if null
            $bio             = $row['bio'] ?? '';
            $posts           = $row['posts'] ?? 0;
            $followers       = $row['followers'] ?? 0;
            $followings      = $row['followings'] ?? 0;
        ?>

            <section class="profile">
                <header class="profile__header">
                    <div class="profile__avatar-container">
                        <img 
                            src="<?php echo htmlspecialchars($profile_picture); ?>"
                            class="profile__avatar"
                         />
                    </div>
                    <div class="profile__info">
                        
                        <div class="profile__name">
                            <h1 class="profile__title"><?php echo htmlspecialchars($us); ?>
                                <img src="images/verified.png" />
                            </h1>
                            <?php 
                                if($curr_us == $us){
                            ?>
                                    <a href="edit-profile.php?username=<?php echo htmlspecialchars($curr_us); ?>" class="profile__button u-fat-text">Edit profile</a>
                                    <i class="fa fa-cog fa-2x" id="cog"></i>
                            <?php
                                } else {
                                    if($is_follower == 1){
                            ?>
                                        <a href="unfollow.php?follower=<?php echo htmlspecialchars($curr_us); ?>&unfollowing=<?php echo htmlspecialchars($us); ?>&return=profile" class="profile__button u-fat-text">Following</a>
                            <?php
                                    } else {
                            ?>
                                        <a href="follow.php?follower=<?php echo htmlspecialchars($curr_us); ?>&following=<?php echo htmlspecialchars($us); ?>&return=profile" class="profile__button u-fat-text">Follow</a>
                            <?php
                                    }
                                }
                            ?>
                        </div>

                        <ul class="profile__numbers">
                            <li class="profile__posts">
                                <span class="profile__number u-fat-text"><?php echo htmlspecialchars($posts); ?></span> posts
                            </li>
                            <li class="profile__followers">
                                <a href="explore.php?curr=<?php echo htmlspecialchars($curr_us); ?>&for=<?php echo htmlspecialchars($us); ?>&get=followers" class="profile__number u-fat-text">
                                    <?php echo htmlspecialchars($followers); ?> followers
                                </a>
                            </li>
                            <li class="profile__following">
                                <a href="explore.php?curr=<?php echo htmlspecialchars($curr_us); ?>&for=<?php echo htmlspecialchars($us); ?>&get=followings" class="profile__number u-fat-text">
                                    <?php echo htmlspecialchars($followings); ?> followings
                                </a>
                            </li>
                        </ul>
                        <div class="profile__bio">
                            <span class="profile__full-name u-fat-text"><?php echo htmlspecialchars($profile_name); ?></span>
                            <br>
                            <p class="profile__full-bio"><?php echo htmlspecialchars($bio); ?></p>
                        </div>
                    </div>
                </header>
                
                <div class="profile__pictures">
        
                <?php
                    $result = mysqli_query($conn, "SELECT 
                                                        post_id,
                                                        photo,
                                                        likes,
                                                        comments,
                                                        datediff(now(), time_stamp) AS created_at
                                                    FROM posts
                                                    WHERE username = '$us'
                                                    ORDER BY time_stamp DESC;"
                                           );

                    while($row = mysqli_fetch_array($result)){
                        $post_id    =  $row['post_id'];
                        $photo      =  $row['photo'];
                        $likes      =  $row['likes'];
                        $comments   =  $row['comments'];
                        $created_at =  $row['created_at'];
                ?>

                    <a href="image-detail.php?post_id=<?php echo htmlspecialchars($post_id); ?>&curr_us=<?php echo htmlspecialchars($curr_us); ?>" class="profile-picture">
                        <img
                            height="300"
                            width="300"
                            src="<?php echo htmlspecialchars($photo); ?>"
                            class="profile-picture__picture"
                        />
                        <div class="profile-picture__overlay">
                            <span class="profile-picture__number">
                                <i class="fa fa-heart"></i> <?php echo htmlspecialchars($likes); ?>
                            </span>
                            <span class="profile-picture__number">
                                <i class="fa fa-comment"></i> <?php echo htmlspecialchars($comments); ?>
                            </span>
                        </div>
                    </a>
                
                <?php
                    }
                ?>
                </div>
            </section>
        </main>
        <footer class="footer">
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__list-item"><a href="#" class="footer__link">about us</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">support</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">blog</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">press</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">api</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">jobs</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">privacy</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">terms</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">directory</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">language</a></li>
                </ul>
            </nav>
            <span class="footer__copyright">© 2017 instagram</span>
        </footer>
        <div class="popUp">
            <i class="fa fa-times fa-2x" id="closePopUp"></i>
            <div class="popUp__container">
                <div class="popUp
