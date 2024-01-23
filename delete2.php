<?php
include 'homeadmincom.php';
if( isset($_GET["num_com"])) {
    $numc = $_GET["num_com"];

$sql = "DELETE FROM commande WHERE num_com=$numc";
$result = mysqli_query($connection,$sql);

if($result){
    //header('location: homeadmincom.php');
}
else{
    die(mysqli_error($connection));
}
}

?>