
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furever Pet Supplies</title>
  <link rel="stylesheet" href="../public/assets/styles/style.css">
  
</head>

  <section class="hero-section">  
   
    <div class="carousel-container">
      <div class="carousel-slide"></div>
      <div class="carousel-slide"></div>
      <div class="carousel-slide"></div>
      <div class="carousel-slide"></div>
      <div class="carousel-slide"></div>
    </div>
    
    <!-- NOTEL: All of these pictures are also all taken by me. -->
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

<body>
  <section class="categories-section">
    <h2 class="categories-title">Shop by Category</h2>
    <div class="categories-grid">
      <a href="itemshop?category=Accessories"><div class="category-card" id="accessory">Accessories</div></a>
      <a href="itemshop?category=Birds"><div class="category-card" id="bird">Birds</div></a>
      <a href="itemshop?category=Cats"><div class="category-card" id="cat">Cats</div></a>
      <a href="itemshop?category=Dogs"><div class="category-card" id="dog">Dogs</div></a>
      <a href="itemshop?category=Fish"><div class="category-card" id="fish">Fish</div></a>
      <a href="itemshop?category=PetFood"><div class="category-card" id="petfood">Pet Food</div></a>
      <a href="itemshop?category=Reptile"><div class="category-card" id="reptile">Reptile</div></a>
      <a href="itemshop?category=Toys"><div class="category-card" id="toys">Toys</div></a>
      <a href="itemshop?category=Treats"><div class="category-card" id="treats">Treats</div></a>
    </div>
  </section>

 
  <div class="form_contactME" id="contactMe_section">
    <div class="form_container">    
        <h1><center>Contact Us!</center></h1>
        <div class="contact-wrapper">
            
            <div class="contact-info">
                <h3>Get In Touch</h3>
                <p>We'd love to hear from you! Send us a message and we'll respond as soon as possible.</p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <i class="icon">📍</i>
                        <div>
                            <strong>Address</strong>
                            <p>Co. Limerick, Ireland</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="icon">📧</i>
                        <div>
                            <strong>Email</strong>
                            <p>info@fureverpets.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="icon">📞</i>
                        <div>
                            <strong>Phone</strong>
                            <p>+353 1 234 5678</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="icon">🕒</i>
                        <div>
                            <strong>Opening Hours</strong>
                            <p>Mon-Fri: 9AM-6PM<br>Sat-Sun: 10AM-4PM</p>
                        </div>
                    </div>
                </div>
            </div>
            
          
            <div class="contact-form">
                <form action="https://formsubmit.co/13e5f2c2b4c05db14cc10a435d59b30e" method="POST">
                    <input type="hidden" name="_next" value="/">
                    <input type="hidden" name="_captcha" value="false">

                    <div class="form-row">
                        <input class="input-box" type="text" name="fname" id="name" placeholder="Name" autocomplete="off" required>
                        <input class="input-box" type="email" name="email" id="email" placeholder="E-mail" required>
                    </div>
                    <input class="input-box" type="text" name="subject" id="subject" placeholder="Subject" autocomplete="off" required>
                    <textarea class="input-box" id="comment" name="query" placeholder="Enter your comment" required></textarea>
                    <div class="form-buttons">
                        <input type="submit" value="Submit" id="submit-btn">
                        <input type="reset" value="Clear">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
