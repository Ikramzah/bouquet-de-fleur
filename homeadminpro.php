<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PRODUIT</title>
    <button><a class="btn btn-primary" href="create.php" role="button">Nouveau Produit</a></button>
    <link rel="stylesheet" type="text/css" href="homeuser.css">
    
</head>
<body>
    <div class="container my-5">

        <table class="table">
        <thead>
            <tr>
                <th>Nom produit</th>
                <th>Numéro du produit</th>
                <th>Prix TTC</th>
                <th>Prix HT</th>
                <th>Qte du stock</th>
                <th>Carctéristiques</th>
                <th>Type du produit</th>
                <th colspan="2">Operation</th>
            </tr>
        </thead>
       <tbody>
        <?php
        include 'header1.html';
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
        $sql = "SELECT * FROM produit";
        $result = $connection->query($sql);

        if(!$result){
            die("Invalid query:".$connection->error);
        }

        //read data of each row
        while($row = $result->fetch_assoc()){
           echo"
           <tr>
           <td>$row[nom_pro]</td>
           <td>$row[num_pro]</td>
           <td>$row[prix_ttc]</td>
           <td>$row[prix_ht]</td>
           <td>$row[qte_stc]</td>
           <td>$row[caracteristiques]</td>
           <td>$row[type_prod]</td>
           <td>
            <button><a class='btn btn-primary btn-sm' href='edit.php?num_pro=$row[num_pro]'>Modifier</a></button>
            <button><a class='btn btn-danger btn-sm' href='delete.php?num_pro=$row[num_pro]'>Supprimer</a></button>
           </td>
           </tr>   
            ";
            }
        ?>
       </tbody> 
        </table></br></br></br></br>
        <div class="ajouter">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    Les bouquets personnalisés : </div>
    <table class="yourownbouquet">
        <thead>
            <tr>
                <th>Nom produit</th>
                <th>Numéro du produit</th>
                <th>Prix </th>
                <th colspan="2">Operation</th>
            </tr>
        </thead>
        <tbody>
<?php $sql1 = "SELECT * FROM fleur";
        $result1 = $connection->query($sql1);

        if(!$result1){
            die("Invalid query:".$connection->error);
        }

        //read data of each row
        while($row1 = $result1->fetch_assoc()){
           echo"
           <tr>
           <td>$row1[type_fleur]</td>
           <td>$row1[id_type_fleur]</td>
           <td>$row1[prix_fleur]</td>
           <td>
            <button><a class='btn btn-primary btn-sm' href='edit.php?num_pro=$row1[id_type_fleur]'>Modifier</a></button>
            <button><a class='btn btn-danger btn-sm' href='delete.php?num_pro=$row1[id_type_fleur]'>Supprimer</a></button>
           </td>
           </tr>   
            ";
            }          ?>
        </tbody> 
        <style>.ajouter{
	color: #8A0157;
    font-family: 'Lucida Handwriting','Segoe Script', Times, serif;
	background-color:#feacf1;
}
        button {
  background-color: #8A0157;
  width: 100px;
  font-size: 15px;
  padding: 5px;
  border-radius: 5px;
  color: white;
  cursor: pointer;
}
</style>
    </div>
</body>
</html>