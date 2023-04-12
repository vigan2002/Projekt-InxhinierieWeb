<?php 
include 'includes/configuration.php';
include 'includes/header/homehead.php';


include 'model/Posts.model.php';
$posti = new Posts;
$postat = $posti->fetchpostet();

$nr = 1;
?>

<!-- login -->

<div class="login-form-container">

    <div id="close-login-btn" class="fas fa-times"></div>

    <form action="">
        <h3>Sign in</h3>
        <span>Username</span>
        <input type="email" name="" class="box" placeholder="enter your email" id="">
        <span>Password</span>
        <input type="password" name="" class="box" placeholder="enter your password" id="">
        <div class="checkbox">
            <input type="checkbox" name="" id="remember-me">
            <label for="remember-me"> Remember me</label>
        </div>
        <input type="submit" value="sign in" class="btn">
        <p>Forget password ? <a href="#">Click here</a></p>
        <p>Don't have an account ? <a href="#">Create one</a></p>
    </form>

</div>

<!--Produktet-->>

<style>
      .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
      }

      .square {
        border-radius: 2%;
        height: 325x;
        width: 325px;
        margin: 10px;
        background-color: #ff3a09;
        border: 1px groove #444;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: start;
      }

      .square img {
        height: 325x;
        width: 325px;
        border-radius: 2%;
      }

      .info {
        margin-top: 10px;
        font-size: 18px;
        color: #eee;
        text-align: center;
      }

	</style>

<!--Produktet-->>
<section class="home" id="home">

   


    <div class="container">
    <?php foreach ($postat as $pos): ?>
		<div class="square">
        <a href="/post?id=<?php echo $pos['post_id'] ?>"> 
			<img src="/assets/post/<?php echo $pos['post_image'] ?>" class="fotoja" alt="Photo 1">
			<div class="info"><?php echo $pos['post_title'] ?></div>
            </a></div>
    <?php endforeach; ?>
	</div>


</section>



<!-- Footer -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3 class="vintage">Locations</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Kosovo </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Albania </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Turkey </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Germany </a>
        </div>

        <div class="box">
            <h3 class="vintage">quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> arrivals </a>
        </div>

        <div class="box">
            <h3 class="vintage">contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +383 43 749 712 </a>
            <a href="#"> <i class="fas fa-phone"></i> +383 45 459 797 </a>
            <a href="#"> <i class="fas fa-envelope"></i> vcp@posters.com</a>
        </div>
        
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit vintage"> created by Vigan-Albin Co | all rights reserved! </div>

</section>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- JS -->
<script src="/assets/js/script.js"></script>

</body>
</html>