<?php require __DIR__.'/skeletonPortada.php';?>
<head>
    <title> Tienda de TDIW </title>
    <link rel="stylesheet" type="text/css" href="css/modifyData.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/functions.js"></script>
</head>
<h2>Login</h2>
<div id="forms">
 <form method="post" action="resource_userLogin.php">
 <span>Email:</span> <input type="text" class="correo" name="email" /><br />
 <span>Pass:</span> <input type="text" class="contrasenya" name="pass" /><br />
 <br /><br />
 <input type="submit" value="Login" id="button2"/>
 </form>
    </div>
</body>