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
                    <h2 class="text-info">Registra tu mascota</h2>
                </div>
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="form-label">DNI</label>
                        <input type="text" class="form-control" placeholder="Su dni" name="dni">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" placeholder="Su Nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Fecha de Nacimiento</label>
                        <input type="Date" class="form-control" name="fechaNac">
                    </div>
                    <div class="mb-3 form-check">
                        <input name="genero" Type = "Radio" value="Macho"><label for="" class="form-label">Macho</label>
                        <input name="genero" Type = "Radio" value="Hembra"><label for="" class="form-label">Hembra</label>
                    </div>
                    <div class="mb-3">
                        <select name = "raza" class="form-select">
                            <Option value = "Pitbull"> Pitbull
                            <Option value = "Bulldog"> Bulldog
                            <Option value = "Shichu"> Shichu
                            <Option value = "Pequines"> Pequines
                            <Option value = "San Bernardo"> San Bernardo
                            <Option value = "Chiguahua"> Chiguahua
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type = "file" name = "foto" >
                    </div>
                    <button class="btn btn-primary" type="submit" name="registrar_perro">Registrar</button>

                    <!--VALIDACION PHP-->
                    <?php include("validar-registrar-mascota.php"); ?>

                </form>
            </div>
        </section>
    </main>

<?php include("includes/footer.php"); ?>