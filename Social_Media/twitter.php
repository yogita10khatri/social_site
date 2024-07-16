<?php

include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Twitter</title>
    <link rel="stylesheet" href="twtstyles.css">
</head>
<body class="twitter">
    <div class="twtlogin">
        <img src="assets/twtlogo.jpg" class="logo">
        <h2>Sign in to Twitter</h2>
        <button id="googleSignIn"><img src="assets/google.png">Sign in with Google</button>
        <button id="appleSignIn"><img src="assets/apple.png">Sign in with Apple</button>
        <hr>
        <span>Or</span>
        <form id="createAccountForm" >
            <button id="createAccountBtn">Create account</button>
        </form>
        <br><hr><br>
        <p>Already have an account?</p>
        <button id="signInBtn" style="background-color: black; color: #1D9BF0; font-weight: bolder; font-size: 15px;">Sign In</button>
    </div>

    <script>
        // Function to redirect to twtui.html
        function redirectToUIPage() {
            window.location.href = "twtui.php";
        }

        // Event listeners for the buttons
        document.getElementById("googleSignIn").addEventListener("click", redirectToUIPage);
        document.getElementById("appleSignIn").addEventListener("click", redirectToUIPage);
        document.getElementById("signInBtn").addEventListener("click", redirectToUIPage);
        document.getElementById("createAccountBtn").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent form submission
            redirectToUIPage();
        });
    </script>
</body>
</html>
