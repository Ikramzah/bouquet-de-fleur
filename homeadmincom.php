<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>COMMANDE</title>
    <button><a class="btn btn-primary" href="create2.php" role="button">Nouvelle Commande</a></button>
    <link rel="stylesheet" type="text/css" href="homeuser.css">
    
</head>
<body>
    <div class="container my-5">

        <table class="table">
        <thead>
            <tr>
                <th>Numéro du Produit</th>
                <th>Nombre de produit commandé</th>
                <th>Date de livraison</th>
                <th>Total</th>
                <th>Adresse de livraison</th>
                <th>Numéro de commande</th>
                <th colspan="2">Operation</th>
            </tr>
        </thead>
       <tbody>
        <?php
        include 'header.html';
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "projet filali";

        //Create connection
        $connection = new mysqli($servername, $username, $password, $database);

        //Check connection
        if($connection->connect_error) {
            die("Connection failed: ". $connection->connect_error);
        }

        //read all rows from the database table
        $sql = "SELECT * FROM commande";
        $result = $connection->query($sql);

        if(!$result){
            die("Invalid query:".$connection->error);
        }

        //read data of each row
        while($row = $result->fetch_assoc()){
           echo"
           <tr>
           <td>$row[num_pro]</td>
           <td>$row[nbr_pro]</td>
           <td>$row[date_livr]</td>
           <td>$row[total]</td>
           <td>$row[adr_livr]</td>
           <td>$row[num_com]</td>
           <td>
            <button><a class='btn btn-primary btn-sm' href='edit2.php?num_com=$row[num_com]'>Modifier</a></button>
            <button><a class='btn btn-danger btn-sm' href='delete2.php?num_com=$row[num_com]'>Supprimer</a></button>
           </td>
           </tr>   
            ";
            }
        ?>
       </tbody> 
        </table>
        </br></br></br></br>
        <div class="ajout">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Les Bouquets Personnalisés : </div>
        <table class="yourownbouquet">
        <thead>
            <tr>
                <th>Numéro du Produit</th>
                <th>Nombre de produit commandé</th>
                <th>Date de livraison</th>
                <th>Total</th>
                <th>Adresse de livraison</th>
                <th>Numéro de commande</th>
                <th colspan="2">Operation</th>
            </tr>
        </thead>
        <tbody>
       <?php $sql2 = "SELECT  id_com,date_livr,adr_livr FROM commande2 ";
    $resultat2 = mysqli_query($connection, $sql2);
    while($row2 = mysqli_fetch_assoc($resultat2)){
        $idcom=$row2['id_com'];
        $datelivr=$row2['date_livr'];
        $adrlivr=$row2['adr_livr'];
        
        $sql3 = "SELECT  num_pro,prix,quantite,id_com2_pro FROM commande2_produit WHERE id_com=".$idcom;
        $resultat3 = mysqli_query($connection, $sql3);
        
        while($row3 = mysqli_fetch_assoc($resultat3)){
            $idcom2pro=$row3['id_com2_pro'];
            $prix3=$row3['prix'];
            $numpro=$row3['num_pro'];
            $quantite=$row3['quantite'];
            $sql4 = "SELECT  type_fleur FROM fleur WHERE id_type_fleur=".$numpro;
            $resultat4 = mysqli_query($connection, $sql4);
            $row4 = mysqli_fetch_assoc($resultat4);
            $nom=$row4['type_fleur'];
            echo"<tr><td>$numpro</td>
                    <td>$quantite</td>
                    <td>$datelivr</td>
                    <td>$prix3</td>
                    <td>$adrlivr</td>
                    <td>$idcom</td>
                    <td>
                    <button><a class='btn btn-primary btn-sm' href='edit2.php?num_com=$row3[id_com2_pro]'>Modifier</a></button></br>
                    <button><a class='btn btn-danger btn-sm' href='delete2.php?num_com=$row3[id_com2_pro]'>Supprimer</a></button>
                   </td>
                   </tr>   
                    ";
                    }} ?>
                



        </tbody> 
        <style>button {
  background-color: #8A0157;
  width: 100px;
  font-size: 15px;
  padding: 5px;
  border-radius: 5px;
  color: white;
  cursor: pointer;
}
.ajout{
	color: #8A0157;
    font-family: 'Lucida Handwriting','Segoe Script', Times, serif;
	background-color:#feacf1;
}
</style>
    </div>
</body>
</html>
