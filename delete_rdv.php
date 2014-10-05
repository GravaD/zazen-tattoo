<?php

require 'include/db.php';

$db=dbconnect();
$id = mysqli_real_escape_string($db, $_GET['id_rdv']);
$query = "DELETE FROM `rdv` WHERE id_rdv='".$id."'";
$result = mysqli_query($db, $query) or die ('Erreur SQL !<br>'.$query.'<br>'. mysql_error());



header("Location: rdv.php");

?>