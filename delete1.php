<?php
include 'homeadmincli.php';
if( isset($_GET["id_cl"])) {
    $id = $_GET["id_cl"];

$sql = "DELETE FROM client WHERE id_cl=$id";
$result = mysqli_query($connection,$sql);

if($result){
    //header('location: homeadmincli.php');
}
else{
    die(mysqli_error($connection));
}
}

?>