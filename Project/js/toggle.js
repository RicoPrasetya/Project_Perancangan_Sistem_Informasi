document.addEventListener("DOMContentLoaded", function() {
    const signinBtn = document.getElementById("signin-btn");
    const signupBtn = document.getElementById("signup-btn");
    const signinForm = document.getElementById("signin-form");
    const signupForm = document.getElementById("signup-form");

    signinBtn.addEventListener("click", function() {
        // Tambahkan class active ke tombol Sign In dan hidden ke Sign Up
        signinBtn.classList.add("active");
        signupBtn.classList.remove("active");

        // Tampilkan form Sign In, sembunyikan form Sign Up
        signinForm.classList.add("active");
        signinForm.classList.remove("hidden");
        signupForm.classList.add("hidden");
        signupForm.classList.remove("active");
    });

    signupBtn.addEventListener("click", function() {
        // Tambahkan class active ke tombol Sign Up dan hidden ke Sign In
        signupBtn.classList.add("active");
        signinBtn.classList.remove("active");

        // Tampilkan form Sign Up, sembunyikan form Sign In
        signupForm.classList.add("active");
        signupForm.classList.remove("hidden");
        signinForm.classList.add("hidden");
        signinForm.classList.remove("active");
    });
});
