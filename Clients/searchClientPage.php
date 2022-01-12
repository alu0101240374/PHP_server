<?php 
require __DIR__ . '/../functions.php';
$db = mysqli_connect('fdb34.awardspace.net','4013223_php',
'vx{TL0)m8YmgbY*/','4013223_php') or die('Error al conectar al servidor MySQL.');

$query = "SELECT * FROM CLIENTE WHERE 1 = 1";
foreach ($_POST as $key => $value) {
  if ($value != '')
    $query = $query . " AND $key LIKE '" . $value ."'";
}

$result = mysqli_query($db, $query) or die("Error: " . $query . mysqli_error($db));
mysqli_close($db);
?>
<html>
<head>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <a href="/index.php">Inicia</a><br>
  <p>Introduzca los campos en los que desea buscar: </p>
  <form action="" method="POST">
    <input name="NOMBRE" type="text" placeholder="nombre">
    <input name="APELLIDOS" type="text" placeholder="apellidos">
    <input name="EMAIL" type="text" placeholder="email">
    <input name="TELEFONO" type="text" placeholder="telefono">
    <input name="DIRECCION_POSTAL" type="text" placeholder="direccion">
    <input name="CODIGO_POSTAL" type="text" placeholder="codigo postal">
    <input name="DNI" type="text" placeholder="DNI">
    <button type="submit">Crear</button>
  </form>
  <table>
    <tr>
      <th> Nombre </th>
      <th> Apellido </th>
      <th> Email </th>
      <th> Telefono </th>
      <th> Direccion </th>
      <th> Codigo postal </th>
      <th> DNI </th>
    </tr>
    <?php printTable($result); ?>
    <br>
  </table>
</body>
</html>