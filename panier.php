<!DOCTYPE html>
<html>
<head>
    <title>Panier</title>
    
</head>
<body>
<header>
    <img src="logo.jpg"/>
    <span class="titre"><h1>Wild Rose</h1></span>
    <nav role="main">
      <ul><?php $idclient = $_GET['idclient']; ?>
        <li><a href="accueil.php">Home</a></li>
        <li><a href="homeuser.php?idclient=<?php echo $idclient ;?>">utilisateur</a></li>
        
      </ul>
    </nav>
  </header>
  <style>
  * {
  box-sizing: border-box;
  /* permet de définir la boîte de chaque élément de la page comme une boîte en bordure de la zone, incluant les bordures et les marges */
}

/* Style pour le corps de la page */
body {
  font-family: sans-serif;
  margin: 0px;
  /* défini la famille de police de caractère utilisée pour le texte de la page */
}header {
    background-color: #FFFCEB;
    padding:auto;
    display: flex;
    justify-content: space-between;
    position: sticky;
    height: 80px;
    top: 0px;
    right: 0px;
    left:0px;}
    /* permet de créer une section en haut de la page qui contient un en-tête et une barre de navigation */
  img{
    border: 1px solid #ddd;
    border-radius: 4px;
    padding-left: 3px;
    width: auto;
  
  }
  span.titre {
    color: #8A0157;
    font-family: 'Lucida Handwriting','Segoe Script', Times, serif;
    margin:0% 0%;
    position: absolute;
    left: 90px;
    top:-10px;
  }
  nav  ul {
    list-style-type: none;
    margin: 13% 5%;
    padding: 0;
    display: flex;
    justify-content:flex-end;
    /* permet de définir une liste d'éléments pour la barre de navigation et d'aligner les éléments sur le côté droit de la barre de navigation */
  }
  
  nav  li {
    margin: 5% 35%;
    padding: 2% 10%;
    text-align: center;
    background-color:#8A0157;
    border-radius: 30px;
    /* permet de définir une marge de 10 pixels entre chaque élément de la liste de la barre de navigation */
  }
  a{
    outline: none;
    text-decoration: none;
    padding: 2px 1px 0;
    color:#feacf1;
  }
  
  nav li:hover {
    border-bottom: 1px solid;
    background-color: #6585f7;
    color:#FFFCEB;
  }
  
  nav li:active {
    background-color: #6585f7;
    color:#FFFCEB;
  }
  
  main {
    padding-top: 10px;
    }</style>
    <?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projet filali";  
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) { die("Connection failed: " .mysqli_connect_error());}
    $idclient = $_GET['idclient'];

    $sql = "SELECT num_com, num_pro,nbr_pro,date_livr,total,adr_livr FROM commande WHERE id_cl=".$idclient;
    $resultat = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($resultat);

    $sql2 = "SELECT  id_com,date_livr FROM commande2 WHERE id_cl=".$idclient;
    $resultat2 = mysqli_query($conn, $sql2);
    


    

    

    ?>
    <h2>Votre panier</h2>
    <table>
        <thead>
            <tr><th colspan="6">En cas de problème dans votre commande, veuillez nous communiquer l'ID affiché près de votre commande.

            </th></tr><tr><th>ID commande </th>
                <th></th>
                <th>Nom du produit</th>
                <th>Quantité</th>
                <th>Date de livraison </th>
                <th>Total </th>
            </tr>
        </thead>
        <tbody><?php
            while($row = mysqli_fetch_assoc($resultat)){
                $numpro=$row['num_pro'];
                $sql1="SELECT nom_pro,image FROM produit WHERE num_pro=".$numpro;
                $result = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_assoc($result);
                $imagepath=$row1['image'];
                $nom=$row1['nom_pro'];
                $quantite=$row['nbr_pro'];
                $idcom=$row['num_com'];
                $date=$row['date_livr'];
                $total=$row['total'];
            echo'<tr><td>'.$idcom.'</td>
                <td><img src="'.$imagepath.'"height="200" width="200"/></td>
                <td>'.$nom.'</td>
                <td>'.$quantite.'</td>
                <td>'.$date.'</td>
                <td>'.$total.'</td>
                
            </tr></br>';}?>
            
           
            <?php
            while($row2 = mysqli_fetch_assoc($resultat2)){
                $idcom=$row2['id_com'];
                $datelivr=$row2['date_livr'];
                
                $sql3 = "SELECT  num_pro,prix,quantite FROM commande2_produit WHERE id_com=".$idcom;
                $resultat3 = mysqli_query($conn, $sql3);
                
                while($row3 = mysqli_fetch_assoc($resultat3)){
                    $prix=$row3['prix'];
                    $numpro=$row3['num_pro'];
                    $quantite=$row3['quantite'];
                    $sql4 = "SELECT  type_fleur,image FROM fleur WHERE id_type_fleur=".$numpro;
                    $resultat4 = mysqli_query($conn, $sql4);
                    $row4 = mysqli_fetch_assoc($resultat4);
                    $imagepath=$row4['image'];
                    $nom=$row4['type_fleur'];
                    echo'<tr><td>'.$idcom.'</td>
                    <td><img src="'.$imagepath.'"height="200" width="200"/></td>
                    <td>'.$nom.'</td>
                    <td>'.$quantite.'</td>
                    <td>'.$datelivr.'</td>
                    <td>'.$prix.'</td>
                    
                </tr>';
                }
                
            echo '</br>';}?>

            <style>
body, h2 {
    margin: 0;
    padding: 0;
}

h2 {
    text-align: center;
    color: #8A0157;
    font-family: 'Lucida Handwriting','Segoe Script', Times, serif;
    margin-bottom: 0px;
}

table {
    margin: 0 auto; /* Center align the table */
    width: 90%; /* Set the table width */
    border-collapse: collapse; /* Collapse the borders between cells */
}

/* Style the table header */
thead {
    background-color: #f2f2f2; /* Add a light background color */
    color:#8A0157;
    position:sticky;
    top: 80px;
}

/* Style table header cells */
th {
    padding: 15px; 
    text-align: left; /* Left align the text */
    position:sticky;
}

/* Style table body cells */
td {
    padding: 10px;
    text-align: left;
}


tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}
</style>
        </tbody>
    </table>
</body>
</html>
