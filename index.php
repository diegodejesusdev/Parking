<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parking</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="resources/icons/car.png" alt="Car">
                <span>PARKING</span>
            </div>
            <div class="user-icon">
                <img src="resources/icons/user.png" alt="User">
            </div>
        </div>
    </header>
    <main>
        <div class="my-account">
            <h2>MY ACCOUNT</h2>
        </div>
        <div class="account-container">
            <div class="tabs">
                <div id="sign-in-tab" class="active">Sign In</div>
                <div id="register-tab">I'm New Here</div>
            </div>

            <div id="sign-in-form" class="form-container active">
                <label>Email Address<input type="email" required></label>
                <label>Password<input type="password" required></label>
                <div class="forgot-password"><a href="#">Forgot your password?</a></div>
                <button class="sign-in-btn">Sign In</button>
                <p>OR</p>
                <button class="google-btn">
                    <img src="google_icon.png" alt="Google"> Continue with Google
                </button>
            </div>

            <div id="register-form" class="form-container">
                <label>Full Name<input type="text" required></label>
                <label>Email Address<input type="email" required></label>
                <label>Phone<input type="number" required></label>
                <label>Address<input type="text"></label>
                <label>Password<input type="password" required></label>
                <button class="register-btn">Register</button>
            </div>
        </div>
    </main>
    <script src="scripts/script.js"></script>
</body>
</html>