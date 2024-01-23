<?php
include 'homeadminema.php';
if( isset($_GET["nom_cl"])) {
    $name = $_GET["nom_cl"];

$sql = "DELETE FROM email WHERE nom_cl='$name'";
$result = mysqli_query($connection,$sql);

if($result){
    //header('location: homeadminema.php');
}
else{
    die(mysqli_error($connection));
}
}

?>