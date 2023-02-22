<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device, initial-scale=1.0">
        <title>Home</title>

        <!-- swiper css link -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

        <!-- font awesome link from cdnjs -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

        <!-- link css file -->
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>

    <div class="container">

    <?php @include 'header.php'; ?>
    <section class="home">
<!-- Slider Home And swiper-->
    <div class="swiper home-slider">
    <div class="swiper-wrapper">
    
    <div class="swiper-slide slide" style="background:url(images/2222.jpg) no-repeat">
    <div class="content">
        <h3>Plan Your Wedding</h3>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi in molestias magnam ea unde exercitationem. Id facilis repellendus dolorem rem deserunt libero! Voluptatem esse tempore recusandae sit unde sed pariatur.</p>
        <a href="about.php" class="btn">Discover more</a>
    </div>
</div>

<div class="swiper-slide slide" style="background:url(images/3333.jpg) no-repeat">
    <div class="content">
        <h3>Plan Your Wedding</h3>
        <p> BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB</p>
        <a href="about.php" class="btn">Discover more</a>
    </div>
</div>
<div class="swiper-slide slide" style="background:url(images/4444.jpg) no-repeat">
    <div class="content">
        <h3>Plan Your Wedding</h3>
        <p> CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC</p>
        <a href="about.php" class="btn">Discover more</a>
       </div>
    </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>
</section>

<section class="services">
    <h1 class="heading"> Our services</h1>

<div class="swiper service-slider"> 

    <div class="swiper-wrapper" >


        <div class="swiper-slide slide" >
            <img src="images/service1.jpg" alt="">
            <div class="content">
                <h3>Photography</h3>
                <p>lllorrrrrrem</p>
                <a href="about.php" class="btn">About Us </a>
            </div>
        </div>

        <div class="swiper-slide slide" >
            <img src="images/service2.jpg" alt="">
            <div class="content">
                <h3>Wedding Registory</h3>
                <p>lllorrr22222rrrem</p>
                <a href="about.php" class="btn">About Us </a>
            </div>
        </div>

        <div class="swiper-slide slide" >
            <img src="images/service3.jpg" alt="">
            <div class="content">
                <h3>Guest List</h3>
                <p>lllorrrrrrem</p>
                <a href="about.php" class="btn">About Us </a>
            </div>
        </div>

        <div class="swiper-slide slide" >
            <img src="images/service4.jpg" alt="">
            <div class="content">
                <h3>Wedding Cake</h3>
                <p>lllorrrrrrem</p>
                <a href="about.php" class="btn">About Us </a>
            </div>
        </div>





    </div>

    <div class="swiper-pagination"></div>
</div>

</section>


    <?php @include 'footer.php'; ?>

    </div>
































<!-- swiper js link -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- Link javascript -->

    <script src="js/script.js"></script>
    </body>
</html>