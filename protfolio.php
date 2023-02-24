<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device, initial-scale=1.0">
        <title>Protfolio</title>

        <!-- swiper css link -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

        <!-- font awesome link from cdnjs -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="styleshhet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">
        <!-- link css file -->
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>

    <div class="container">

    <?php @include 'header.php'; ?>

    <section class="portfolio">

    <h1 class="heading">Our Portfolio</h1>

    <div class="portfolio-container">

        <a href="images/3333.jpg" class="box">
            <div class="image">
            <img src="images/4444.jpg" alt="">
            </div>
            <h3>Wedding Ceremony</h3>
        </a>

        <a href="images/3333.jpg" class="box">
            <div class="image">
            <img src="images/4444.jpg" alt="">
            </div>
            <h3>Wedding Ceremony</h3>
        </a>

        <a href="images/3333.jpg" class="box">
            <div class="image">
            <img src="images/4444.jpg" alt="">
            </div>
            <h3>Wedding Ceremony</h3>
        </a>

        <a href="images/3333.jpg" class="box">
            <div class="image">
            <img src="images/4444.jpg" alt="">
            </div>
            <h3>Wedding Ceremony</h3>
        </a>

        



    </div>

        





    </section>

    <?php @include 'footer.php'; ?>

    </div>

    <!-- header section -->






























<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lg-fb-comment-box.min.css"></script>
<!-- swiper js link -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    

<!-- Link javascript -->
    <script src="js/script.js"></script>

    <script>

        lightGallery(document.querySelector('.portfolio .portfolio-container'));


    </script>
    </body>
</html>