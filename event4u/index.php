<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event4U - The Perfect Event Management Finder</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    


<header class="header">



    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#gallery">gallery</a>
        <a href="#contact">contact</a>
        <a href="register.php">Become an Event Manager</a>
    </nav>

    <div id="menu-bars" class="fas fa-bars"></div>

</header>



<section class="home" id="home">

    <div class="content">
        <h3> Event4U - The Perfect Event Management Finder <span>  </span></h3>
        <a href="filterdb.php" class="btn">Find your Events</a>
    </div>

    <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/slide-1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-2.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-6.jpg" alt=""></div>
        </div>
    </div>

</section>

<section class="about" id="about">

<h1 class="heading"><span>about</span> us </h1>

<div class="row">

    <div class="image">
        <img src="images/about-img.jfif" alt="">
    </div>

    <div class="content">
        <h3>Want an event management team? Find one RIGHT HERE. RIGHT NOW.</h3>
        <p>Event4U is an event Management Team finder which helps its clients to find a perfect event management team for their events...whether it be a small birthday party or a grand destination wedding, we are here to help u with your desired event management team to make your event a memorable one!!</p>
    
        <a href="#contact" class="btn">contact us</a>
    </div>

</div>

</section>


<section class="gallery" id="gallery">

    <h1 class="heading">our <span>gallery</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="https://www.instagram.com/event4u_com/?igshid=YmMyMTA2M2Y="> <i class="fab fa-instagram" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/g-2.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="https://www.instagram.com/event4u_com/?igshid=YmMyMTA2M2Y="> <i class="fab fa-instagram" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>
        
    </div>

</section>


<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <form
  action="https://formspree.io/f/xqknywwr"
  method="POST">
        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="name" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#about"> <i class="fas fa-arrow-right"></i> about Us</a>
            <a href="#gallery"> <i class="fas fa-arrow-right"></i>Gallery</a>
            <a href="#contact"> <i class="fas fa-arrow-right"></i> contact </a>
               <a href="register.php"> <i class="fas fa-arrow-right"></i> Become an Event Manager </a>

        </div>
        </div>

        <div class="box">
            <h3>follow us on</h3>
            <a href="https://www.instagram.com/event4u_com/?igshid=YmMyMTA2M2Y="> <i class="fab fa-instagram"></i> instagram </a>
           
        </div>

    </div>

    <div class="credit"> created by <span>Aaryan Kukade</span></div>

</section>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>
</html>