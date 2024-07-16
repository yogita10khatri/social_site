function validateForm() {
    var emailOrPhone = document.getElementById("emailOrPhone").value;
    var password = document.getElementById("password").value;

    // Perform your validation here
    if (emailOrPhone === "rajveer20" && password === "yogita10") {
        // If credentials are valid, proceed to the next page
        window.location.href = "fbui.html";
        return false; // Prevent form submission
    } else {
        // If credentials are not valid, display an error message or handle it accordingly
        alert("Invalid username or password. Please try again.");
        return false; // Prevent form submission
    }
}