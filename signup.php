<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="login-form">
        <h1><b>WELCOME TO BAJAJ BHAKTAPUR</b></h1>
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2>Sign Up</h2>
    <?php if (isset($_SESSION['signup_message'])) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['signup_message']; ?>
        </div>
        <?php unset($_SESSION['signup_message']);  ?>
    <?php endif; ?>
                    <form action="signup_process.php" method="post">
                        <b>FirstName:</b><input type="text" name="firstname" id="firstname" placeholder="First Name" required autofocus>
                        <b>LastName:</b><input type="text" name="lastname" id="lastname" placeholder="Last Name" required autofocus>
                        <b>Email:</b><input type="email" name="email" id="email" placeholder="Email" required autofocus>
                        <b>Username:</b><input type="text" name="username" id="username" placeholder="Username" required autofocus>
                        <b>Phone Number:</b><input type="text" name="phonenumber" id="phonenumber" placeholder="Phone Number" required autofocus>
                        <b>Password:</b><input type="password" name="password" id="password" placeholder="Password" required autofocus>
                        <button class="btn" type="submit">Sign Up</button>
                    </form>
                    <p class="account">Already have an account? <a href="login.php">Log In</a></p>
                </div>
                <div class="form-img">
                    <img src="images/nsred.png" alt="loginimg">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
