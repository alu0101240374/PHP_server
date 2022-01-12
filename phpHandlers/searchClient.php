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
printTable($result);
//echo "<script> location.href='../Clients/searchClientsPage.php'; </script>";
exit();
?>