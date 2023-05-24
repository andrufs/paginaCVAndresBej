<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nombre = $_POST['nombre'];
  $telefono = $_POST['telefono'];

  // Crear una cadena con los datos ingresados
  $datos = "Nombre: " . $nombre . "\nTeléfono: " . $telefono . "\n";

  // Abrir el archivo de bloc de notas en modo de escritura
  $archivo = fopen("datos.txt", "a");

  // Escribir los datos en el archivo
  fwrite($archivo, $datos);

  // Cerrar el archivo
  fclose($archivo);

  echo "Los datos se han almacenado en el archivo datos.txt";
}
?>