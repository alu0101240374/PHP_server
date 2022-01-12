<?php
require __DIR__ . '/../functions.php';
$db = mysqli_connect('fdb34.awardspace.net','4013223_php',
'vx{TL0)m8YmgbY*/','4013223_php') or die('Error al conectar al servidor MySQL.');

$query = "SELECT * FROM PRODUCTOS";
$products = mysqli_query($db, $query) or die('Error al buscar en la base de datos.');

mysqli_close($db);
?>
<html>
<head>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <a href="/index.php">Inicio</a><br>
  <form action="../phpHandlers/createProduct.php" method="POST" enctype="multipart/form-data">
    <input name="nombre" type="text" placeholder="nombre">
    <input name="familia" type="text" placeholder="familia">
    <input name="id" type="text" placeholder="ID">
    <input name="descripcion" type="text" placeholder="descripcion">
    <input name="stock" type="text" placeholder="stock">
    <input name="dimensiones" type="text" placeholder="dimensiones">
    <input name="peso" type="text" placeholder="peso">
    <input name="pvp" type="text" placeholder="pvp">
    <input name="imagen" type="file" placeholder="imagen">
    <button type="submit" name="submit">Crear</button>
  </form>
  <table>
    <tr>
      <th> Nombre </th>
      <th> Familia </th>
      <th> ID </th>
      <th> Descripcion </th>
      <th> Stock </th>
      <th> Dimensiones </th>
      <th> Peso </th>
      <th> PVP </th>
      <th> Imagen </th>
    </tr>
    <?php printTable($products);?>
    <br>
  </body>
</html>