CRUD php pg 
<?php 

$contraseña = "6b4b3689cc69d05ca17b16c509dac33b4a1bd961c3efe64fd554ac3ddfb356dc";
$usuario = "mfeavnsxdipavd";
$nombreBaseDeDatos = "ddb5abrgnl1ug";
# Puede ser 127.0.0.1 o el nombre de tu equipo; o la IP de un servidor remoto
$rutaServidor = "ec2-54-81-126-150.compute-1.amazonaws.com";
$puerto = "5432";
try {
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado";
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}

?>