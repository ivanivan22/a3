<?php


 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "";
 $db_name = "a3";
 $tbl_name = "usuarios";


 $db= mysqli_connect($host_db, $user_db, $pass_db, $db_name, $tbl_name);


 ?>

 <?php

include('registrousuario.php')


?>



