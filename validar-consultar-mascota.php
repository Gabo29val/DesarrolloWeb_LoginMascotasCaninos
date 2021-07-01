<?php

if(isset($_POST['buscar'])){
    $nombre = $_POST['nombre'];

    //echo "datos capturados en la variable global POST:<br><br>";
    //echo $nombre."<br>";

    $query = "SELECT * FROM perros WHERE nombre like '$nombre';";

    //echo $query;
    
    include("db.php");
    $res = mysqli_query($con, $query);
    $num_resultados = mysqli_num_rows($res);
    //echo "RESULTADOS DE LA BUSQUEDA<br>";
    //echo "La selección devolvió ".$num_resultados." filas";
    
    ?>
    <div class="container d-flex">
    <?php
    for ($i=0; $i <$num_resultados; $i++) {  
        $row = mysqli_fetch_array($res); 
        ?>
        <div class="card" style="width: 18rem; margin: 50px;">
            <img src="archivos/<?php echo $row['foto'];?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Datos</h5>
                <p class="card-text">DNI: <?php echo $row['dni'];?><br>
                Nombre: <?php echo $row['nombre'];?><br>
                Raza: <?php echo $row['raza'];?><br>
                Genero: <?php echo $row['genero'];?><br>
                Nacio en: <?php echo $row['fechaNac'];?></p>
                <a href="#" class="btn btn-primary">Más detalles</a>
            </div>
        </div>
        <?php
    }

    ?>
    </div>
    <?php

    if(!$res){
        die("Query faileeed");
    }
}
?>