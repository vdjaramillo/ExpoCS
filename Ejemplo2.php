
<?php
$enlace = new mysqli('localhost', 'root', '123456789', 'table');
if (!$enlace) {
    echo 'No pudo conectarse a mysql'.$enlace->connect_error;
    exit;
}else{
    echo 'Conectado';
}
$quer = 'INSERT INTO usuario (nombre, contrasena) VALUES ("'.$_POST['j_username'].'","'.$_POST['j_password'].'");';

if (!($enlace->query($quer)===TRUE)) {
	echo "Error de BD, no se pudo consultar la base de datos\n".$enlace->connect_error;
}

$enlace->close();
?>
