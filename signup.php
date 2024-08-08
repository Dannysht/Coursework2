<?php include('header.php'); ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="signup.css"> <!-- Link to the CSS file -->
<body>

    <div class="container">
        <div class="form-box">
            <h1 id="title">Login</h1>
            <form id="registration-form">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="user   name" placeholder="Username">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    <div class="error" id="email-error"></div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Password" oninput="checkPassword()">
                        <div class="error" id="password-length-error"></div>
                    </div>
                        
                    <div class="error" id="password-numbers-error"></div>
                    <div class="error" id="password-uppercase-error"></div>
                    <div class="error" id="password-lowercase-error"></div>
                    <div class="password-check">
                        <div id="check0" class="disable password-check-field">
                            <i class="fa fa-check-circle"></i> <span> Length should be at least 6 characters.</span>
                        </div>
                        <div id="check2" class="disable password-check-field">
                            <i class="fa fa-check-circle"></i> <span> Contains lowercase letter.</span>
                        </div>
                        <div id="check3" class="disable password-check-field">
                            <i class="fa fa-check-circle"></i> <span> Contains uppercase letter.</span>
                        </div>
                        <div id="check4" class="disable password-check-field">
                            <i class="fa fa-check-circle"></i> <span> Contains number.</span>
                        </div>
                    </div>
                    
                </div>

                <div class="btn-field">
                    <button type="button" class="disable" id="signUpBtn">Sign up</button>
                    <button type="button" id="signInBtn">Login</button>
                </div>
                <h4 class="wrong-credentials" id="wrong-credentials-msg">Incorrect email or password.</h4>
                <div class="registration-success" id="registration-success">
                    <h4>Registration successful</h4>
                    <h4>Please log in</h4>
                </div>
            </form>
            <div class="error" id="username-exists-error">User with this email already exists.</div>
            <div class="error" id="email-exists-error"></div>
        </div>
    </div>

</body>
<script src="./signup.js"></script>

</html>
<?php include('footer.php'); ?>
