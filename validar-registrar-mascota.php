<?php          
if(isset($_POST['registrar_perro'])){
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];
    $fechaNac = $_POST['fechaNac'];
    $raza = $_POST['raza'];
    $genero = $_POST['genero'];

    /*
    echo "datos capturados en la variable global POST:<br><br>";
    echo $dni."<br>";
    echo $nombre."<br>";
    echo $fechaNac."<br>";
    echo $genero."<br>";
    echo $raza."<br>";

    print_r($_FILES);*/

    $nombreArchivo = $_FILES['foto']['name'];
    $guardado = $_FILES['foto']['tmp_name'];

    if (!file_exists('archivos')) {
        mkdir('archivos', 0777, true);
        if (file_exists('archivos')) {
            if (move_uploaded_file($guardado, 'archivos/' . $nombreArchivo)) {
                echo "Archivo guardado con exito";
            } else {
                echo "Archivo no se pudo guardar";
            }
        }
    } else {
        if (move_uploaded_file($guardado, 'archivos/' . $nombreArchivo)) {
            echo "Archivo guardado con exito";
        } else {
            echo "Archivo no se pudo guardar";
        }
    }

    $query = "INSERT INTO perros(dni, nombre, raza, genero, fechaNac, foto) VALUES ('$dni', '$nombre','$raza','$genero', '$fechaNac', '$nombreArchivo');";

    include("db.php");
    $res = mysqli_query($con, $query);

    if(!$res){
        die("Query faileeed");
    }

    echo "GUARDADO";

}
?>