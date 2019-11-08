<?php

    session_start();

    
     

  ?>


  <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet"   crossorigin="anonymous" href="
    style.css">
    
    
</head>

<body>
  <div class="title">
   
  
    <section>
        <div class="formulario_registro">

            <h2>Login</h2>
            <form action="dashboard.php" method="post"> 
 <hr />
 <div class="header">
 <h3>Iniciar Sesion</h3>
</div>
 <!--Nombre Usuario-->
 <label for="nombre">Nombre de Usuario:</label><br>
 <input type="text" name="username" maxlength="32" required>
 <br/><br/>

 <!--Password-->
 <label for="pass">Password:</label><br>
 <input type="password" name="password" maxlength="8" required>
 <br/><br/>

 <br/><br/>
 <input type="submit" name="submit" value="Login">

 <p>
    Aún no eres un miembro? <a href="registrar.php">Registrate</a>
 </p>
 </form>
        </div>
    </section>
</body>
</html>