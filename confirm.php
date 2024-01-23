<!DOCTYPE html>
<html>
<head>
	<title>Flower Shop</title>
</head>
<body>

	<form method="POST" >
<?php
include 'header.html';
$conn = mysqli_connect("localhost", "root", "", "projet filali");
$value = $_GET ['idclient']; 
$totalprix=$_GET['totalprix'];

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}?>
    <form><table><tr><td colspan="2">
    <div class="confirm">Pour confirmer votre commande veuillez remplir les champs ci-dessous: </div></br></br></br>
</td></tr>
    <tr><td>Date de livraison : </td><td><input type="date" name="dateliv" id="dateliv" ></td></tr>
    
    <tr><td></br></br></br></br></br>Adresse de livraison : </td><td></br></br></br></br></br>
    <input type="text" name="adrliv" id="adrliv" ></td></tr>
    <tr><td></td><td><input type="submit" name="submit" value="confirm"></td></tr>
    <tr><td colspan="2"></br></br></br>
    <div class="alert">Veuillez noter qu'une fois vous validez votre commande vous n'aurez pas la possibilité</br></br> ni 
        de la modifier ni de l'annuler sauf si vous contactez l'un des numéros ci-dessous </br></br>Ils vous 
        informeront sur les modalités de remboursement : </br></br></br>Bureau de remboursement:&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+212 999999999</br></br>Bureau de plainte:&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;+212 111111111</div></br></br></br></br></br></br>
</td></tr>
</table></form>
<?php 
$idclient=$_GET['idclient'];
if(isset($_POST['submit'])){
$adresse = $_POST['adrliv'];
$date = $_POST['dateliv'];
$sql1 = "INSERT INTO `commande2` (id_cl, adr_livr, date_livr,total_prix) 
VALUES('$value', '$adresse','$date','$totalprix')";
$result = mysqli_query($conn,$sql1);
echo'<script>alert("Votre commande est validé ");
window.location.href = "panier.php?idclient='.$idclient.'";
</script>';}
?>
<style>
    table{
        margin:0 auto;
        margin-top:70px;
        width: 100%;
        text-align: center;
    }
    .confirm{
        background-color:#feacf1;
    color: #8A0157;text-align: center;
    font-family: 'Lucida Handwriting','Segoe Script', Times, serif;
    }.alert{
        background-color:#f2f2f2;;
    color: #8A0157;text-align: center;
    font-family: 'Times New Roman', Times, serif;
    font-size:large;
    }
</style>
</body></html>