<?php

if (isset($_POST['sign_up'])) {
	if (strlen($_POST['usser']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['email'])) {
		$user = trim($_POST['usser']);
		$password = trim($_POST['password']);
		$passEncrip = md5($password);
		$email = trim($_POST['email']);		
		include("db.php");

		$query = "INSERT INTO usuarios(usser, password, email) VALUES ('$user', '$passEncrip', '$email');";
		$resultado = mysqli_query($con, $query);
		if ($resultado) {
			?> 
			<h3 class="ok">¡Te has registrado correctamente!</h3>
		<?php
		} else {
			?> 
			<h3 class="bad">¡Ups ha ocurrido un error!</h3>
		<?php
		}
	}else{
		?> 
		<h3 class="bad">¡Por favor complete los campos!</h3>
		<?php
		
	}
}
?>