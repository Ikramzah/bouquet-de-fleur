<?php
include 'index.php';
if( isset($_GET["num_pro"])) {
    $num = $_GET["num_pro"];

$sql = "DELETE FROM produit WHERE num_pro=$num";
$result = mysqli_query($connection,$sql);

if($result){
    //header('location: index.php'); 
}
else{
    die(mysqli_error($connection));
}
}

?>