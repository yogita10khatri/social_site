<?php

include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Clone</title>
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Header */
        header {
            background-color: #1877f2;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        /* Main content */
        .feed {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        /* Post */
        .post {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .post img {
            max-width: 100%; /* Ensure image width doesn't exceed container width */
            max-height: 200px; /* Set maximum height for images */
            cursor: pointer; /* Add cursor pointer for clickable effect */
        }

        .post p {
            margin: 10px 0;
        }

        /* Buttons */
        .post-buttons {
            display: flex;
            justify-content: flex-end; /* Align buttons to the right */
            margin-top: 10px;
        }

        .post-buttons img {
            width: 50px; /* Set width for like image */
            cursor: pointer;
            margin-left: 5px; /* Add space between buttons */
        }

        .comment-button {
            background-color: #4caf50;
            color: #fff;
        }

        /* Comment input */
        .comment-input {
            display: none; /* Initially hide the comment input */
            width: 70%;
            padding: 5px;
            margin-right: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .submit-comment-button {
            display: none; /* Initially hide the submit button */
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* Comment section */
        .comment-section {
            margin-top: 10px;
        }

        .comment {
            margin-bottom: 5px;
            padding-left: 10px;
            border-left: 2px solid #4caf50;
            position: relative; /* Added for positioning delete button */
        }

        .delete-comment-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 5px; /* Adjust the distance from the right side */
            background-color: #ff3333;
            color: #fff;
            border: none;
            padding: 2px 5px;
            border-radius: 50%;
            cursor: pointer;
        }

        /* Full-screen overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 9999;
            display: none;
            justify-content: center;
            align-items: center;
        }

        .overlay img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Facebook</h1>
    </header>
    <div class="container">
        <div class="feed">
            <div class="post">
                <img src="assets\user-profile.jpg" alt="User Profile" onclick="showFullScreenImage(this.src)">
                <p>First Caption! </p>
                <div class="post-buttons">
                    <img class="like-button" src="assets\unlikedicon.png" alt="Like" onclick="toggleLike(this)">
                    <button class="comment-button" onclick="toggleCommentInput(this)">Comment</button>
                </div>
                <input type="text" class="comment-input" placeholder="Write a comment...">
                <button class="submit-comment-button" onclick="submitComment(this)">Submit</button>
                <div class="comment-section"></div>
            </div>
            <div class="post">
                <img src="assets\juhy.jpg" alt="Friend Profile" onclick="showFullScreenImage(this.src)">
                <p>Chotu Chai Wali ☕</p>
                <div class="post-buttons">
                    <img class="like-button" src="assets\unlikedicon.png" alt="Like" onclick="toggleLike(this)">
                    <button class="comment-button" onclick="toggleCommentInput(this)">Comment</button>
                </div>
                <input type="text" class="comment-input" placeholder="Write a comment...">
                <button class="submit-comment-button" onclick="submitComment(this)">Submit</button>
                <div class="comment-section"></div>
            </div>
            <div class="post">
                <img src="assets\jsk.jpg" alt="Friend Profile" onclick="showFullScreenImage(this.src)">
                <p>Jay Shree Ram! 🛕</p>
                <div class="post-buttons">
                    <img class="like-button" src="assets\unlikedicon.png" alt="Like" onclick="toggleLike(this)">
                    <button class="comment-button" onclick="toggleCommentInput(this)">Comment</button>
                </div>
                <input type="text" class="comment-input" placeholder="Write a comment...">
                <button class="submit-comment-button" onclick="submitComment(this)">Submit</button>
                <div class="comment-section"></div>
            </div>
            
            <!-- Add more posts here -->
        </div>
    </div>
    <!-- Full-screen overlay -->
    <div class="overlay" onclick="hideFullScreenImage()">
        <img id="fullScreenImage" src="" alt="Full Screen Image">
    </div>
    <script>
        function toggleLike(element) {
            if (element.src.includes('unlikedicon.png')) {
                element.src = 'assets/likedicon.png';
            } else {
                element.src = 'assets/unlikedicon.png';
            }
        }

        function toggleCommentInput(button) {
            var post = button.closest('.post');
            var commentInput = post.querySelector('.comment-input');
            var submitButton = post.querySelector('.submit-comment-button');

            if (commentInput.style.display === 'none' || commentInput.style.display === '') {
                commentInput.style.display = 'inline-block';
                submitButton.style.display = 'inline-block';
            } else {
                commentInput.style.display = 'none';
                submitButton.style.display = 'none';
            }
        }

        function submitComment(button) {
            var post = button.closest('.post');
            var commentInput = post.querySelector('.comment-input');
            var commentText = commentInput.value;

            if (commentText.trim() !== '') {
                var commentSection = post.querySelector('.comment-section');
                var comment = document.createElement('div');
                comment.classList.add('comment');
                comment.textContent = commentText;
                
                // Add delete button for the comment
                var deleteButton = document.createElement('button');
                deleteButton.classList.add('delete-comment-button');
                deleteButton.textContent = 'x';
                deleteButton.onclick = function() {
                    comment.remove();
                };
                comment.appendChild(deleteButton);
                
                commentSection.appendChild(comment);
                commentInput.value = '';
                commentInput.style.display = 'none';
                button.style.display = 'none';
            }
        }

        // Function to show full-screen image
        function showFullScreenImage(src) {
            var fullScreenImage = document.getElementById('fullScreenImage');
            fullScreenImage.src = src;
            document.querySelector('.overlay').style.display = 'flex';
        }

        // Function to hide full-screen image
        function hideFullScreenImage() {
            document.querySelector('.overlay').style.display = 'none';
        }
    </script>
</body>
</html>
