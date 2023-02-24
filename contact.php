<?php
$conn = mysqli_connect('localhost' , 'root','','weddingwebsite');

if(isset($_POST['send'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $plan = $_POST['plan'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    $insert = "INSERT INTO `contact_form`(`name`, `email`, `number`, `plan`, `address`, `message`) VALUES ('$name','$email','$number','$plan','$address','$message')";
    mysqli_query($conn, $insert);
    header('location:contact.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device, initial-scale=1.0">
        <title>Contact</title>

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

    <section class="contact"> 
        <h1 class="heading">Contact Us </h1>
        <form action="" method="post">
            <div class="flex">
                <div class="inputBox">
                    <span>your name</span>
                    <input type="text" placeholder="Entre your name" name="name" required>
                </div>


                <div class="inputBox">
                    <span>your email</span>
                    <input type="email" placeholder="Entre your email" name="email" required>
                </div>

                <div class="inputBox">
                    <span>your number</span>
                    <input type="number" placeholder="Entre your number" name="number" required>
                </div>

                <div class="inputBox">
                    <span>choose plan</span>
                    <select name="plan">
                        <option value="basic">Basic plan</option>
                        <option value="premium">Premium</option>
                        <option value="ultimate">Ultimate</option>
                    </select>
                </div>

                <div class="inputBox">
                    <span>your address</span>
                    <textarea name="address" placeholder="enter your address" required cols="30" rows="10"></textarea>
                </div>

                <div class="inputBox">
                    <span>your message</span>
                    <textarea name="message" placeholder="enter your message" required cols="30" rows="10"></textarea>
                </div>

                <input type="submit" value="send message" name="send" class="btn"> </input>

                

</form>









</section>

    <?php @include 'footer.php'; ?>

    </div>

    <!-- header section -->































<!-- swiper js link -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <!-- Link javascript -->

    <script src="js/script.js"></script>
    </body>
</html>