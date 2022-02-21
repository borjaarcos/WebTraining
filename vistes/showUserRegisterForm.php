<!DOCTYPE html>
<html>
    <head>
    <title> Tienda de TDIW </title>
 <link rel="stylesheet" type="text/css" href="css/registerForm.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="js/functions.js"></script>
        </head>
    <body>
    <header>

            <h1  class="title"> <a href="index.php">VidiUAB</a></h1>

    </header>
    <h2>Registro</h2>
    <div id="forms">
     <form method="post" action="resource_fillRegister.php">
        <div class="formbox">
           <span>Nom:</span> <input id="nombre" name="nom" type="text" class="nombre" placeholder="Nom i cognoms" required>
        </div>
        <div class="formbox">
            <span>Correu:</span> <input id="Correu" name="correu" type="email" class="correo" required placeholder="Correu electrònic">
        </div>
         <div class="formbox">
            <span>Adreça:</span> <input id="adresa" name="adresa" type="text" class="correo" required placeholder="Adreça" maxlength="30">
        </div>
         <div class="formbox">
            <span>Població:</span> <input id="poble" name="poblacio" type="text" class="correo" required placeholder="Població" maxlength="30">
        </div>
         <div class="formbox">
            <span>CP:</span> <input id="CP" type="text" name="codiPostal" class="correo" required placeholder="CP" pattern="\d{5}$">
        </div>
        <span>Paraula secreta:</span> <input id="pass" name="contrasenya" type="password" class="contrasenya" placeholder="Contrasenya nova">
        <input id="repPass" type="password" class="contrasenya" placeholder="Repeteix la contrasenya" required title="Les contrasenyes tenen que ser iguals">

        <br /><br />
        <div>
          <button type="submit" id="button2" >Registrar-se</button>
        </div>
     </form>

    </div>
    </body>
</html>
