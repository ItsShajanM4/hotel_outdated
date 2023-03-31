<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hotel Montclair </title>

    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- custome css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- header section starts -->
    <header>
    <div id="menu-bar" class="fas fa-bars"></div>
    <a href="#" class="logo"><span>H</span>otel</a>
    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#packages">Packages</a>
        <a href="#services">Services</a>
        <a href="#gallery">Gallery</a>
        <a href="#review">Review</a>
        <a href="#contact">Contact</a>
        <a href="#book">Book</a>
    </nav>
    <div class="icons">
        <a href="http://localhost/hotel/login/login_form.php" id="login-btn" class="signin-btn animated-button">Sign In</a>
        <a href="http://localhost/hotel/login/register_form.php" id="register-btn" class="register-btn animated-button">Register</a>
    </div>
</header>

<style>
    /* Style the login and register buttons */
    .signin-btn, .register-btn {
        display: inline-block;
        background-color: #ffaa00;
        color: #fff;
        padding: 12px 24px;
        border-radius: 5px;
        font-weight: 700;
        font-size: 18px;
        text-decoration: none;
        margin-left: 10px;
        position: relative;
        overflow: hidden;
    }
    
    /* Style the register button to be slightly different from the login button */
    .register-btn {
        background-color: #ffa500;
    }

    /* Add styles for the animated buttons */
    .animated-button {
        transition-duration: 0.4s;
        transition-property: transform, background-color, box-shadow;
    }
    .animated-button:after {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        background-color: rgba(255, 255, 255, 0.5);
        border-radius: 100%;
        transform: translate(-50%, -50%);
        opacity: 0;
    }
    .animated-button:hover:after {
        width: 200%;
        height: 200%;
        opacity: 1;
    }
    .animated-button:hover {
        transform: scale(1.1);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
    }
</style>

<script>
    // Get the login and register button elements
    const loginBtn = document.getElementById("login-btn");
    const registerBtn = document.getElementById("register-btn");
    
    // Add an event listener to the login button to redirect to login_form.php
    loginBtn.addEventListener("click", function() {
        window.location.href = "http://localhost/hotel/login/login_form.php";
    });
    
    // Add an event listener to the register button to redirect to register_form.php
    registerBtn.addEventListener("click", function() {
        window.location.href = "http://localhost/hotel/login/register_form.php";
    });
</script>


<!-- header section ends -->

<!-- login form container -->



<!-- home section starts -->

<section class="home" id="home">
    <div class="content">
        <h3>WELCOME TO HOTEL MONTCLAIR</h3>
        <p>dicover new places with us, luxury awaits</p>
        <a href="#" class="btn">discover more</a>
    </div>


    <div class="video-container">
        <video src="img/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>


<!-- home section ends -->



<!-- packages section starts -->

<section class="rooms" id="rooms">
  <h2 class="heading">Accommodations</h2>

  <div class="room-list-container">
    <div class="room-list">
      <div class="room">
        <img src="img/room-1.jpg" alt="Standard Room">
        <div class="room-info">
          <h3>Standard Room</h3>
          <p>Our cozy Standard Room is perfect for a weekend getaway or business trip. With one king-size bed or two twin-size beds, it can accommodate up to two guests. Amenities include a flat-screen TV, free Wi-Fi, and a private bathroom with a shower.</p>
          <div class="price">$100.00 <span>/night</span></div>
        </div>
      </div>

      <div class="room">
        <img src="img/room-2.jpg" alt="Deluxe Room">
        <div class="room-info">
          <h3>Deluxe Room</h3>
          <p>Our spacious Deluxe Room is ideal for a family vacation or longer stay. With two queen-size beds, it can accommodate up to four guests. Amenities include a flat-screen TV, free Wi-Fi, and a private bathroom with a bathtub and shower.</p>
          <div class="price">$150.00 <span>/night</span></div>
        </div>
      </div>

      <div class="room">
        <img src="img/room-3.jpg" alt="Executive Room">
        <div class="room-info">
          <h3>Executive Room</h3>
          <p>Our luxurious Executive Room is perfect for a special occasion or VIP guest. With one king-size bed, it can accommodate up to two guests. Amenities include a flat-screen TV, free Wi-Fi, a private bathroom with a spa tub, and access to our exclusive Executive Lounge.</p>
          <div class="price">$200.00 <span>/night</span></div>
        </div>
      </div>
    </div>
  </div>

  <div class="reservation-form-container">
    <div class="reservation-form">
      <h3>Check Availability</h3>
      <form>
        <div class="form-group">
          <label for="check-in-date">Check In</label>
          <input type="date" id="check-in-date" name="check-in-date">
        </div>
        <div class="form-group">
          <label for="check-out-date">Check Out</label>
          <input type="date" id="check-out-date" name="check-out-date">
        </div>
        <button type="submit" class="btn submit">Check Availability</button>
      </form>
    </div>
  </div>

</section>

<!-- packages section ends -->

<!-- services section starts -->

<section class="services" id="services">
    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-hotel"></i>
                <h3>Affordable Hotels</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
                <h3>Food and Drinks</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
                <h3>Safty Guide</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
                <h3>Around The World</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
                <h3>Fastest Travel</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
                <h3>Adventures</h3>
                <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                    Lorem Ipsum is simply dummy text of the farhan and typesetting industry</p>
        </div>
    </div>
</section>


<!-- services section ends -->

<!-- gallery section starts -->

<section class="gallery" id="gallery">
    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>


<div class="box-container">
    <div class="box">
        <img src="img/g-1.jpg" alt="">
        <div class="content">
            <h3>Amazing Places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img src="img/g-2.jpg" alt="">
        <div class="content">
            <h3>Amazing Places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img src="img/g-3.jpg" alt="">
        <div class="content">
            <h3>Amazing Places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img src="img/g-4.jpg" alt="">
        <div class="content">
            <h3>Amazing Places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img src="img/g-5.jpg" alt="">
        <div class="content">
            <h3>Amazing Places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img src="img/g-6.jpg" alt="">
        <div class="content">
            <h3>Amazing Places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img src="img/g-7.jpg" alt="">
        <div class="content">
            <h3>Amazing Places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img src="img/g-8.jpg" alt="">
        <div class="content">
            <h3>Amazing Places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img src="img/g-9.jpg" alt="">
        <div class="content">
            <h3>Amazing Places</h3>
            <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
</div>
</section>

<!-- gallery section ends -->

<!-- review section start -->

<section class="review" id="review">
    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>
    <div class="swiper mySwiper review-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/pic1.png" alt="">
                    <h3>Lalisa Bey</h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                        Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                        Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                        farhan and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img src="img/pic2.png" alt="">
                    <h3>Edward Bey</h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                        Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                        Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                        farhan and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img src="img/pic3.png" alt="">
                    <h3>Jenna Bey</h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                        Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                        Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                        farhan and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img src="img/pic4.png" alt="">
                    <h3>Edward Bey</h3>
                    <p>Lorem Ipsum is simply dummy text of the farhan and typesetting industry.
                        Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                        Lorem Ipsum is simply dummy text of the farhan and typesetting industry
                        farhan and typesetting industry.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
                </div>
        </div>
    </div>
</section>


<!-- review section ends -->

<!-- contact section starts -->

<section class="contact" id="contact">
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>
    <div class="row">
        <div class="img">
            <img src="img/contact-img.svg" alt="">
        </div>
        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="message" name="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>
    </div>
</section>

<!-- contact section ends -->

<!-- brand section -->

<section class="brand-container">
    <div class="swiper mySwiper brand-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide"><img src="img/1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="img/6.jpg" alt=""></div>
        </div>
    </div>
</section>

<!-- book section starts -->

<section class="book" id="book">
    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">
        <div class="img">
            <img src="img/book-img.svg" alt="">
        </div>

        <form action="">
              <div class="inputBox">
                  <h3>where to</h3>
                  <input type="text" placeholder="place name">
              </div>
              <div class="inputBox">
                <h3>how many</h3>
                <input type="number" placeholder="number of guests">
            </div>
            <div class="inputBox">
                <h3>arrivals</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>leaving</h3>
                <input type="date">
            </div>
            <input type="submit" class="btn" value="book now">
        </form>
    </div>
</section>
<!-- book section ends -->

<!-- footer section -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Totam natus asperiores voluptas aliquam vitae odio. Beatae doloribus facere nostrum magni.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">USA</a>
            <a href="#">india</a>
            <a href="#">japan</a>
            <a href="#">philippines</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">package</a>
            <a href="#">service</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
            <a href="#">book</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">likedin</a>
        </div>
    </div>
    <h1 class="credit"> created by <span>Dailywebdesign</span> | all rights reserved!! </h1>
</section>







































<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custome js file link -->
    <script src="main.js"></script>
</body>
</html>