<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="prodetails.css">
    <title>more details </title>
</head>
<body><form method="POST" >
    <?php
       include 'header.html';
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "projet filali";
       $quantity = "";$day = "";
       $idclient = $_GET ['idclient']; 
       $conn = mysqli_connect($servername, $username, $password, $dbname);
       $query = "SELECT * FROM produit";
	   $result = mysqli_query($conn, $query); 
       $row1 = mysqli_fetch_assoc($result);
       if (!$conn) { die("Connection failed: " . mysqli_connect_error());}
       $value = $_GET['orderID'];  
       $sql = "SELECT type_prod, image,num_pro,caracteristiques,prix_ttc,prix_ht, nom_pro FROM produit WHERE num_pro=".$value;
       $resultat = mysqli_query($conn, $sql);
       $row = mysqli_fetch_assoc($resultat);
       echo '<tr><td><div class="hello"><img src="'.$row['image'].'" width="120"height="400"/></div>
       </td><div class="bye"><td><p>'.$row['nom_pro'].
       '</p></br></br>&nbsp;&nbsp;&nbsp;HT&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
       .$row['prix_ht'].'.00dh</br></br>&nbsp;&nbsp;&nbsp;TTC:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
       .$row['prix_ttc'].'.00dh<h5>'.$row['caracteristiques'].'</h5></br>&nbsp;&nbsp;&nbsp;Quantité:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="number" name="quantite"  />&nbsp;&nbsp;</br></br></br>&nbsp;&nbsp;
       Date Livraison:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="date" name="dateliv"/>
       </br></br>&nbsp;&nbsp;&nbsp;Adresse livraison:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <input type="text" size="50" name="adresse"  />
       
       </div><div class="ajout"></br><input class="ajouter" type="submit" name="submit" value="confirmer"/></div></td><style>input{border-radius:20px;width:180px;font-size:20px ;}.ajout{
        color: #8A0157;border-radius:20px;position:absolute;width:145px;font-size:30px;right:170px;top:620px;margin:30px;}
        .ajouter{
            background-color: #8A0157;height:50px;color: white;border-radius: 50%;}
        .bye{
            margin-left:150px;
        }</style></tr>';
        if(isset($_POST['submit'])){
        $prix=$row['prix_ttc'] ;
        $adresse = $_POST['adresse'];
        $quantity = $_POST['quantite'];
        $total=$prix*$quantity;
        $day = $_POST['dateliv'];
        $sql1 = "INSERT INTO `commande` (num_pro, nbr_pro, date_livr,adr_livr,total,id_cl) 
        VALUES('$value', '$quantity', '$day','$adresse','$total','$idclient')";
        $result = mysqli_query($conn,$sql1);
        echo'<script>alert("Votre commande est validé ");
		window.location.href = "panier.php?idclient='.$idclient.'";
		</script>';
       }
       ?>
    </form><script> 
        
    </script>
</body>

</html>

