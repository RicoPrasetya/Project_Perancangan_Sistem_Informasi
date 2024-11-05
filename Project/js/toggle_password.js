document.addEventListener("DOMContentLoaded", function () {
    const togglePassword = document.getElementById("toggle-password");
    const passwordField = document.getElementById("password");
    const eyeIcon = document.getElementById("eye-icon");

    togglePassword.addEventListener("click", function () {
        // Toggle jenis input dari 'password' menjadi 'text' untuk melihat password
        const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
        passwordField.setAttribute("type", type);

        // Ganti icon berdasarkan kondisi password
        if (type === "password") {
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
        } else {
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
        }
    });

    // Untuk form Sign Up
    const toggleNewPassword = document.getElementById("toggle-new-password");
    const newPasswordField = document.getElementById("new-password");
    const eyeIconNewPassword = document.getElementById("eye-icon-new-password");

    toggleNewPassword.addEventListener("click", function () {
        const type = newPasswordField.getAttribute("type") === "password" ? "text" : "password";
        newPasswordField.setAttribute("type", type);

        // Ganti icon
        if (type === "password") {
            eyeIconNewPassword.classList.remove("fa-eye");
            eyeIconNewPassword.classList.add("fa-eye-slash");
        } else {
            eyeIconNewPassword.classList.remove("fa-eye-slash");
            eyeIconNewPassword.classList.add("fa-eye");
        }
    });
});
