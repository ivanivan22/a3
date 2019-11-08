<?php



 include 'conexion.php';
 include 'registrar.php';
 session_start();

 $error= false;
 
 if (isset($_POST['registro'])) {
    
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);

  if($password != $password2){

  	$error= true;
  	$password2 = "Contraseñas distintas";
  }

   
 if (!$error) {

     if(mysqli_query($db, "INSERT INTO usuarios (usuario,correo,password) VALUES ('". $username."', '". $correo . "', '" . $password . "')"))
   {
   	echo "Registrado!" <a href="index.php">Click aqui para Login</a>
   }

   else {
   	echo "Error, Por favor , Intentalo de nuevo";
   }
 }



 }



?>