<?php

$serverName = "inventariogamer.database.windows.net"; // Reemplaza con el nombre de tu servidor
$connectionOptions = array(
    "Database" => "tienda",
    "Uid" => "juanjotsp576", // Reemplaza con tu usuario de Azure SQL
    "PWD" => "#Mahecha3."  // Reemplaza con tu contraseña de Azure SQL
);

// Establece la conexión
$conexion = sqlsrv_connect($serverName, $connectionOptions);

// Verifica la conexión
if ($conexion === false) {
    die(print_r(sqlsrv_errors(), true));
}

?>
