<?php include("includes/header.php"); ?>
<?php include("includes/navbar.php"); ?>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Log In</h2>
                </div>
                <form method="POST">
                    <div class="mb-3"><label class="form-label" for="usser">Usser</label>
                        <input class="form-control item" id="usser" name="usser">
                    </div>
                    <div class="mb-3"><label class="form-label" for="password">Password</label>
                        <input class="form-control" type="password" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="checkbox">
                            <label class="form-check-label" for="checkbox">Remember me</label>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" name = "login">Log In</button>

                    <?php include("login-usuario.php"); ?>
                </form>
            </div>
        </section>
    </main>
    
<?php include("includes/footer.php"); ?>
    