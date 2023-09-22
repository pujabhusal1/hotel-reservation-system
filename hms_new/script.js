document.addEventListener("DOMContentLoaded", function() {
    var logoutButton = document.getElementById("logoutButton");

    logoutButton.addEventListener("click", function() {
        var confirmLogout = confirm("Are you sure you want to logout?");
        
        if (confirmLogout) {
            // Perform actual logout actions here, such as redirecting or clearing session
            alert("Logged out successfully!");
        }
    });
});
