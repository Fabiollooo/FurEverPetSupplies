<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furever Pet Supplies</title>
  <link rel="stylesheet" href="../public/assets/styles/style.css">
</head>


<body>
  <section class="hero-section">
   
    <div class="carousel-container">
      <div class="carousel-slide"></div>
      <div class="carousel-slide"></div>
      <div class="carousel-slide"></div>
      <div class="carousel-slide"></div>
      <div class="carousel-slide"></div>
    </div>
    
    
    <div class="carousel-overlay"></div>
    
   
    <div class="hero-content">
      <h2>Your One-Stop Pet Supply Shop</h2>
      <p>Everything your furry friends need — from food to toys and more.</p>
      <a href="<?= base_url('itemshop')?>" class="btn-shop-now">Shop Now</a>
    </div>
    
   
    <div class="carousel-indicators">
      <div class="indicator"></div>
      <div class="indicator"></div>
      <div class="indicator"></div>
      <div class="indicator"></div>
      <div class="indicator"></div>
    </div>
  </section>

  <section id="about" class="about-section">
    <div class="container about-row">
      <div class="about-image">
        <img src="../public/assets/images/site/logo.png" alt="Our Story">
      </div>
      <div class="about-text">
        <h3>Our Story</h3>
        <p>Founded in 2025 in Co. Limerick, Ireland, our pet supply journey began with a simple goal, to bring high-quality, reliable, and affordable products to pets and the people who love them. What started as a small local idea quickly grew into a mission to support pet owners everywhere, ensuring every families loved pet enjoys a happier and healthier life. With Irish roots and a passion for community, we continue to grow while staying committed to quality, care and the overall well-being of our pets all accross the country.</p>
      </div>
    </div>
  </section>

  <section class="about-section">
    <div class="container about-row reverse">
      <div class="about-image">
        <img src="../public/assets/images/site/fifi.jpg" alt="Our Vision" >
      </div>
      <div class="about-text">
        <h3>Our Vision</h3>
        <p>Everyone, meet "Fifi"! He’s one of many happy pets enjoying our products at home. We love seeing how our supplies help pets like Fifi stay happy, healthy, and full of energy.</p>
        <br>
        <p>Our mission is to make pet care simple and enjoyable for everyone. From tasty treats to cozy accessories, every product is chosen with love and care to help pets live their best lives. Whether it’s playtime, snack time, or just lounging at home, we’re here to make every moment special.</p>
        <!--Note: I took this picture, its my aunties cat. So no copyright :) -->
      </div>
    </div>
  </section>

  <section class="about-section">
    <div class="container about-row">
      <div class="map_wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d763.1001242580594!2d-8.64910625174889!3d52.673703330080144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sie!4v1762039539447!5m2!1sen!2sie" width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
      </div>
      <div class="about-text">
        <h3>Our Team</h3>
        <p>Located in the heart of Co. Limerick, Ireland, our store proudly serves local pet lovers and their furry companions. We chose Limerick in 2025 as our home because of its strong community spirit and love for animals. Whether you're nearby or visiting the area, you're always welcome to stop in, explore our products, and chat with our friendly team. Your pet’s happiness starts right here.</p>
      </div>
    </div>
  </section>
</body>
