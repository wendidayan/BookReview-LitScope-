document.addEventListener("DOMContentLoaded", function () {
    // Check if full-screen mode should be enabled
    if (localStorage.getItem("fullscreen") === "true") {
        enterFullscreen();
    }

    document
        .getElementById("fullscreen-btn")
        .addEventListener("click", function () {
            enterFullscreen();
            // Set the flag in localStorage
            localStorage.setItem("fullscreen", "true");
        });

    function enterFullscreen() {
        if (document.documentElement.requestFullscreen) {
            document.documentElement.requestFullscreen();
        } else if (document.documentElement.mozRequestFullScreen) {
            // Firefox
            document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullscreen) {
            // Chrome, Safari, Opera
            document.documentElement.webkitRequestFullscreen();
        } else if (document.documentElement.msRequestFullscreen) {
            // IE/Edge
            document.documentElement.msRequestFullscreen();
        }
    }

    function exitFullscreen() {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.mozCancelFullScreen) {
            // Firefox
            document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
            // Chrome, Safari, Opera
            document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) {
            // IE/Edge
            document.msExitFullscreen();
        }
    }
});
