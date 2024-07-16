const toggleSwitch = document.getElementById('darkModeToggle');
const labels = document.querySelectorAll('.label');
const signupText = document.querySelector('.signup span');
const modeImage = document.querySelector('.icon-gtb img');
const signInText = document.querySelector('.head-gtb');

// Event listener for dark mode toggle switch
toggleSwitch.addEventListener('change', function(e){
    if (e.target.checked) {
        // Adding dark mode class to body
        document.body.classList.add('dark-mode');
        // Changing font color to white for labels, signup text, and sign in text
        labels.forEach(label => {
            label.style.color = 'white';
        });
        
        signupText.style.color = 'white';
        signInText.style.color = 'white';
        // Changing icon image to white
        modeImage.src = 'assets/gtbiconwhite.png';
    } else {
        // Removing dark mode class from body
        document.body.classList.remove('dark-mode');
        // Resetting font color to default for labels, signup text, and sign in text
        labels.forEach(label => {
            label.style.color = ''; // Reset to default color
        });
        signupText.style.color = ''; // Reset to default color
        signInText.style.color = ''; // Reset to default color
        // Changing icon image to black
        modeImage.src = 'assets/gtbiconblack.png';
    }
});
