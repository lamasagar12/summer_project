<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/84d44af34d.js" crossorigin="anonymous"></script>
</head>
<body>  
    <div class="login-form">
    <h1><b>WELCOME TO BAJAJ BHAKTAPUR</b></h1>
        <div class="container">
            <div class="main">
                <div class="content">
                    <h2>Log In</h2>
 <!-- Display alert if login error message is set -->
    <?php if (isset($_SESSION['login_error'])) : ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['login_error']; ?>
        </div>
        <?php unset($_SESSION['login_error']); // Clear the session variable after displaying the alert ?>
    <?php endif; ?>
                    <form action="login_process.php" method="post">
                       <b> Username:</b><input type="text" name="username" id="username" placeholder="Username" required autofocus>
                       <b>Password:</b> <input type="password" name="password" id="password" placeholder="Password" required autofocus>
                        <button class="btn" type="submit">Login</button>
                    </form>
                    <p class="account">Don't have an account? <a href="signup.php">Signup</a></p>
                </div>
                <div class="form-img">
                    <img src="images/frontaveng.png" alt="loginimg">
                </div>
            </div>
        </div>
    </div>
</body>
<?php include'footer.php';?>
</html>
