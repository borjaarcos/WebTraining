<?php require __DIR__.'/skeletonPortada.php';?>
<head>
    <title> Tienda de TDIW </title>
    <link rel="stylesheet" type="text/css" href="css/modifyData.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/functions.js"></script>
</head>
<h2>Mis datos</h2>
<div id="forms">
    <form method="post" action="index.php?action=clickmodificar">
        <div class="formbox">
            <span>Nom:</span> <input id="nombre" name="nom" type="text" class="nombre" placeholder="Nom i cognoms" value="<?php echo $_SESSION['nom_usuari'];?>" required>
        </div>
        <div class="formbox">
            <span>Correu:</span> <input id="Correu" name="correu" type="email" class="correo" placeholder="Correu electrònic" value="<?php  echo $_SESSION['correu_usuari'];?>"required>
        </div>
        <div class="formbox">
            <span>Adreça:</span> <input id="adresa" name="adresa" type="text" class="correo" placeholder="Adreça" maxlength="30" value="<?php  echo $_SESSION['adresa_usuari'];?>"required>
        </div>
        <div class="formbox">
            <span>Població:</span> <input id="poble" name="poblacio" type="text" class="correo" placeholder="Població" maxlength="30" value="<?php  echo $_SESSION['poblacio_usuari'];?>"required>
        </div>
        <div class="formbox">
            <span>CP:</span> <input id="CP" type="text" name="codiPostal" class="correo" placeholder="CP" pattern="\d{5}$" value="<?php  echo $_SESSION['codiPostal_usuari'];?>"required>
        </div>
        <span>Paraula secreta:</span> <input id="pass" name="contrasenya" type="password" class="contrasenya" placeholder="Contrasenya nova">
        <input id="repPass" type="password" class="contrasenya" placeholder="Repeteix la contrasenya" title="Les contrasenyes tenen que ser iguals">

        <br /><br />
        <div>
            <button type="submit" id="button2" >Modificar dades</button>
        </div>
    </form>

</div>
</body>
</html>


