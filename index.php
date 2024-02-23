<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/84d44af34d.js" crossorigin="anonymous"></script>
  <title>BAJAJ BHAKTAPUR</title>
</head>
<body>
  <header>
    <a href="#" class="logo">
      <img src="images/bajajlogo.png" alt="Bajaj Bhaktapur Logo">
      <span><b>BAJAJ BHAKTAPUR</b></span>
    </a>
    <!-- Navigation -->
    <nav class="navbar">
      <a href="index.php" class="active">Home</a>
      <a href="Product.php">Product</a>
      <a href="blog.php">Blog/Experience</a>
      <a href="Services.php">Services</a>
      <a href="Aboutus.php">About us</a>
    </nav>
    <div class="icons">  
      <i class="fas fa-bars" id="menu-bar"></i>
      <i class="fas fa-search" id="search-icon"></i>
      <a href="login.php" class="fas fa-user" id="user"></a>
    </div>
  </header>
  <form action="" id="search-form">
    <input type="search" id="search-box" placeholder="Search here...">
    <button type="submit" id="search-btn" class="fas fa-search"></button>
    <i class="fas fa-times" id="close"></i>
  </form>
  <!-- Content section -->
  <section class="home" id="home">
    <div class="swiper mySwiper home-slider">
      <div class="swiper-wrapper wrapper">
        <div class="swiper-slide slide">
          <div class="image"><img src="images/avenger.png" alt="avenger"></div>
          <div class="content">
            <span>Our Mission</span>
            <h3>Avenger</h3>
            <p>The best selling bike most comfortable beautiful awesome dashing riding bajaj bhaktapur.</p>
            <a href="#" class="btn">Check Out</a>
          </div>
        </div>
        <div class="swiper-slide slide">
          <div class="image"><img src="images/dominar.png" alt="dominar"></div>
          <div class="content">
            <span>Our Mission</span>
            <h3>Dominar</h3>
            <p>The best selling bike most comfortable beautiful awesome dashing riding bajaj bhaktapur.</p>
            <a href="#" class="btn">Check Out</a>
          </div>
        </div>
        <div class="swiper-slide slide">
          <div class="image"><img src="images/ns200.png" alt="ns200"></div>
          <div class="content">
            <span>Our Mission</span>
            <h3>NS200</h3>
            <p>The best selling bike most comfortable beautiful awesome dashing riding bajaj bhaktapur.</p>
            <a href="#" class="btn">Check Out</a>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
