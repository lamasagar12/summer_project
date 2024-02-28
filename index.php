<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://kit.fontawesome.com/84d44af34d.js" crossorigin="anonymous"></script>
  
  <title>BAJAJ BHAKTAPUR</title>
</head>
<body>
 <?php include 'header.php'; ?>
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
  <?php include'footer.php' ?>
</body>
</html>
