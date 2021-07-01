<?php 
session_start();
$usser = $_SESSION['usser'];
if($usser == null || $usser = ''){
    echo "<script>alert('Usted no tiene autorización');</script>";
    //header("Location:login.php");
    //die();
}
$usser = $_SESSION['usser'];
?>

<?php include("includes/header.php"); ?>
<?php include("includes/navbar-usuario.php"); ?>

<main class="page landing-page">
<section class="clean-block clean-hero" style="background-image:url(&quot;assets/img/tech/imagen5.jpg&quot;);color:rgba(80, 80, 80, 0.50);">
            <div class="text">
                <h2>¡Bienvenido <?php echo $usser?>!</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                <button class="btn btn-outline-light btn-lg" type="button">Learn More</button>
            </div>
        </section>
        </main>

<?php include("includes/footer.php"); ?>