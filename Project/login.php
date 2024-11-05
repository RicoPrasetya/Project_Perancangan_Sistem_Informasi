<?php include 'css_version.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
</head>

<body class="login-form">
    <div class="login">
        <h1>Login Pengguna</h1>
        <div class="toggle-buttons">
            <button id="signin-btn"> sign in </button>
            <button id="signup-btn"> sign up </button>
        </div>

        <!-- Sign In Form -->
        <form id="signin-form" class="form-login active">
            <input type="text" class="text-login input-login" name="username">
            <span class="span-login">username</span>
            <div class="password-container">
                <input type="password" class="input-login text-login" id="password" name="password">
                <button type="button" id="toggle-password" class="toggle-password">
                    <i class="fas fa-eye-slash" id="eye-icon"></i>
                </button>
            </div>
            <span class="span-login">Password</span>
            <input type="checkbox" id="checkbox-1-1" class="custom-checkbox" />
            <label for="checkbox-1-1" class="checkbox-text">Keep me Signed in</label>
            <button class="signin">Sign In</button>
            <hr>
            <a href="#">Forgot Password?</a>
        </form>

        <!-- Sign Up Form -->
        <form id="signup-form" class="form-login hidden">
            <input type="text" class="input-login text-login" name="new-username">
            <span class="span-login">Username</span>
            <input type="email" class="input-login text-login" name="email">
            <span class="span-login">Email</span>
            <div class="password-container">
                <input type="password" class="input-login text-login" id="new-password" name="new-password">
                <button type="button" id="toggle-new-password" class="toggle-password">
                    <i class="fas fa-eye-slash" id="eye-icon-new-password"></i>
                </button>
            </div>
            <span class="span-login">Password</span>
            <button class="signin">Sign Up</button>
            <hr>
            <a href="#">Already have an account?</a>
        </form>
    </div>

    <!-- Link to external JavaScript file -->
    <script src="js/toggle.js"></script>
    <script src="js/toggle_password.js"></script>
</body>

</html>