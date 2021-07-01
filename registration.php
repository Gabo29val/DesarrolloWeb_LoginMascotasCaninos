<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>

    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registro</h2>
                </div>
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label" for="name">Usuario</label>
                        <input class="form-control item" type="text" id="name" name="usser">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Contraseña</label>
                        <input class="form-control item" type="password" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control item" type="email" id="email" name="email">
                    </div>
                    <button class="btn btn-primary" type="submit" name="sign_up">Sign Up</button>
                    <?php include("registrar-usuario.php"); ?>
                </form>
            </div>
        </section>
    </main>
<?php include("includes/footer.php"); ?>