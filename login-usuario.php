<?php

if(isset($_POST['login'])){
    $usser = trim($_POST['usser']);
    $password = trim($_POST['password']);
    $passEncrip = md5($password);

    session_start();
    $_SESSION['usser']=$usser;

    $query = "SELECT * FROM usuarios WHERE usser like '$usser' and password like '$passEncrip';";
    
    include("db.php");

    $res = mysqli_query($con, $query);
    $num_resultados = mysqli_num_rows($res);

    if($num_resultados){
        header("location:home.php");
    }else{
?>
      <h4 class="bad">ERROR DE AUTENTIFICACION</h1>
      <?php
    }
    
}
?>