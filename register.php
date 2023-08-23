<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header">

   <nav class="navbar nav-1">
      <section class="flex">
        <a href="home.html" class="logo"><i class="fas fa-house"></i><b style="color:cyan">Hunt Ur Dream House</b></a>

         <ul>
            <li><a href="post_property.html">post property<i class="fas fa-paper-plane"></i></a></li>
         </ul>
      </section>
   </nav>

   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="#">buy<i class="fas fa-angle-down"></i></a>
                  <ul>
                    <li><a href="#">Greater Community</a></li>
                     <li><a href="#">flat</a></li>
                     <li><a href="#">shop</a></li>
                     <li><a href="#">individual</a></li>
                     <li><a href="#">Duplex</a></li>
                     <li><a href="#">ready to move</a></li>
                  </ul>
               </li>
               <li><a href="#">sell<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="#">post property</a></li>
                     <li><a href="#">dashboard</a></li>
                  </ul>
               </li>
               <li><a href="#">rent<i class="fas fa-angle-down"></i></a>
                  <ul>
                    <li><a href="#">Greater Community</a></li>
                    <li><a href="#">flat</a></li>
                    <li><a href="#">shop</a></li>
                    <li><a href="#">individual</a></li>
                    <li><a href="#">Duplex</a></li>
                    <li><a href="#">ready to move</a></li>
                  </ul>
               </li>
               <li><a href="#">help<i class="fas fa-angle-down"></i></a>
                  <ul>
                     <li><a href="about.html">about us</a></i></li>
                     <li><a href="contact.html">contact us</a></i></li>
                     <li><a href="contact.html#faq">FAQ</a></i></li>
                  </ul>
               </li>
            </ul>
         </div>

         <ul>
            <li><a href="#">saved <i class="far fa-heart"></i></a></li>
            <li><a href="#">account <i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="login.html">login</a></li>
                  <li><a href="register.html">register</a></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->

<!-- register section starts  -->
<div class="list" style="background-color: lightgrey;">
<section class="form-container">

   <form action="login.html">
      <h3>create an account!</h3>
      <input type="tel" name="name" required maxlength="50" placeholder="enter your name" class="box">
      <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
      <input type="password" name="pass" required maxlength="20" placeholder="enter your password" class="box">
      <input type="password" name="c_pass" required maxlength="20" placeholder="confirm your password" class="box">
      <p>already have an account? <a href="login.html">login now</a></p>
      <input type="submit" value="register now" name="submit" class="btn">
   </form>

</section>
</div>
<!-- register section ends -->












<!-- footer section starts  -->

<footer class="footer">

   <section class="flex">

      <div class="box">
        <a href="tel:8712169299"><i class="fas fa-phone"></i><span>8712169299</span></a>
        <a href="tel:9949331144"><i class="fas fa-phone"></i><span>9949331144</span></a>
        <a href="mailto:kaivalyakammella@gmail.com"><i class="fas fa-envelope"></i><span>kaivalyakammella@gmail.com</span></a>
        <a href="#"><i class="fas fa-map-marker-alt"></i><span>Visakhapatnam, india - 530046</span></a>
      </div>

      <div class="box">
         <a href="home.html"><span>home</span></a>
         <a href="about.html"><span>about</span></a>
         <a href="contact.html"><span>contact</span></a>
         <a href="listings.html"><span>all listings</span></a>
         <a href="#"><span>saved properties</span></a>
      </div>

      <div class="box">
         <a href="#"><span>facebook</span><i class="fab fa-facebook-f"></i></a>
         <a href="#"><span>twitter</span><i class="fab fa-twitter"></i></a>
         <a href="#"><span>linkedin</span><i class="fab fa-linkedin"></i></a>
         <a href="#"><span>instagram</span><i class="fab fa-instagram"></i></a>

      </div>

   </section>
   <hr style="height:1px;border-width:20%;color: white;background-color:white">
   <div class="credit">&copy; copyright @ 2023 by <span>Team web-designers</span> | all rights reserved!</div>

</footer>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>