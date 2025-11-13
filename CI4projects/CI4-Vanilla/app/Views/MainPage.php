
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furever Pet Supplies</title>
  <link rel="stylesheet" href="../public/assets/styles/style.css">
  
</head>
<!-- Now when i think about it, i will move the contents of this version's MainPage to its own page of "About Me". 
    And instead on the main page i will have just like categories of which the user may press and then it will bring the user to the "itemshop" page with the appropiate items of the given pressed category -->


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
      <h2><center>Contact Us!</center></h2>    
          <form action="https://formsubmit.co/13e5f2c2b4c05db14cc10a435d59b30e" method="POST">
            <input type="hidden" name="_next" value="/">
              <input type="hidden" name="_captcha" value="false">

              <p><input class="input-box" type="text" name="fname" id="name" placeholder="Name" autocomplete="off" required></p>
              <p><input class="input-box" type="email" name="email" id="email" placeholder="E-mail" required></p>
              <p><input class="input-box" type="text" name="subject" id="subject" placeholder="Subject" autocomplete="off" required></p>
              <textarea class="input-box" id="comment" name="query" placeholder="Enter your comment" required></textarea>
              <p>
                <input type="submit" value="Submit" id="submit-btn">
                <input type="reset">
              </p>
          </form>
      </div>
  </div>




</body>
