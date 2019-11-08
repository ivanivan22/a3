
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="stylereg.css" crossorigin="anonymous">
    
    <title>Registro</title>
</head>

<body>
  
    <section>
<div class="foto">
        <div id="formulario_regcdistro">

            <h2>Formulario registro</h2>
            <form action="index.php" method="post"> 

  <hr />
 <h3>Crea una cuenta</h3>

 <!--Nombre Usuario-->
 <label for="nombre">Nombre de Usuario:</label><br>
 <input type="text" name="username" maxlength="32" required>
 <br/><br/>

 <!--Password-->
 <label for="pass">Password:</label><br>
 <input type="password" name="password" maxlength="8" required>
 <br/><br/>

  <label for="pass">Confirmar Password:</label><br>
 <input type="password" name="password" maxlength="8" required>
 <br/><br/>


<label for="pass">Correo:</label><br>
 <input type="correo" name="correo" maxlength="20" required>
 <br/><br/>

 <label for="pass">Edad:</label><br>
 <input type="Edad" name="Edad" maxlength="20" required>
 <br/><br/>

 <br/><br/>
 <input type="submit" name="registro" value="Registrarme">

 <p>
    Ya eres un miembro? <a href="index.php">Entrar</a>
 </p>
 </form>
        </div>
    </div>
    </section>
</body>
</html>