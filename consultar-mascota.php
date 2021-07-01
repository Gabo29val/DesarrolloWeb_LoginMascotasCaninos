<?php 
session_start();
$usser = $_SESSION['usser'];
if($usser == null || $usser = ''){
    echo "<script>alert('Usted no tiene autorización');</script>";
    header("Location:login.php");
    //die();
}
$usser = $_SESSION['usser'];
?>
<?php include("includes/header.php"); ?>
<?php include("includes/navbar-usuario.php"); ?>
<main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Consulta tu mascota</h2>
                </div>
                <form method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" placeholder="Su Nombre" name="nombre">
                    </div>
                    <button class="btn btn-primary" type="submit" name="buscar">Buscar</button>
                    
                </form>
                <!--VALIDACION PHP-->
                <?php include("validar-consultar-mascota.php"); ?>
            </div>
        </section>
    </main>
<?php include("includes/footer.php"); ?>