<?php

$conexion = fsockopen('mail.finlandinstitute.com', 465, $errno, $errstr, 15);

if (!$conexion) {
    echo "ERROR: $errno - $errstr";
} else {
    echo "Conexion SMTP exitosa";
    fclose($conexion);
}