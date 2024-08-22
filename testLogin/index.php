<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="wrapper">
        <div class="title-text">
            <div class="title login">Login Form</div>
            <div class="title signup">Signup Form</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Login</label>
                <label for="signup" class="slide signup">Signup</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <form action="api.php" class="login" method="post">
                    <input type="hidden" name="act" value="login">
                    <div class="field">
                        <input type="text" placeholder="Username" name="username" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" name="pass" required>
                    </div>
                    <div class="pass-link"><a href="#">Forgot password?</a></div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Login">
                    </div>
                    <div class="signup-link">Not a member? <a href="">Signup now</a></div>
                </form>
                <form action="api.php" class="signup" method="post">
                    <input type="hidden" name="act" value="signup">
                    <div class="field">
                        <input type="text" placeholder="First name" name="fname" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Last name" name="lname" required>
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Username" name="username" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Password" name="pass" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Confirm password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Signup">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>

</html>