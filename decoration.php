<!DOCTYPE html>
<html>
<head>
	<title>Flower Shop</title>
</head>
<body>


<style>
    .button {
      background-color: white
      border: none;
      color: #8A0157;
      padding: 18px 36px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 20px;
      margin: 8px 6px;
      transition-duration: 0.4s;
      cursor: pointer;
    }
    
    .button1:hover {
      background-color: #9bd2f2; 
      color: black; 
      border: 2px solid #8A0157;
	  border-radius: 50%;
    }
    
    .button1 {
      background-color: #8A0157;
      color: white;
	  border-radius: 50%;
    }
    
    .button2:hover {
      background-color: #9bd2f2; 
      color: black; 
      border: 2px solid #8A0157;
	  border-radius: 50%;
    }
    
    .button2 {
      background-color: #8A0157;
      color: white;
	  border-radius: 50%;
    }
    
    .button3:hover {
      background-color: #9bd2f2; 
      color: black; 
      border: 2px solid #8A0157;
	  border-radius: 50%;
    }
    
    .button3 {
      background-color: #8A0157;
      color: white;
	  border-radius: 50%;
    }
	.button4:hover {
      background-color: #9bd2f2; 
      color: black; 
      border: 2px solid #8A0157;
	  border-radius: 50%;
    }
    
    .button4 {
      background-color: #8A0157;
      color: white;
	  border-radius: 50%;
    }
    </style>
<header>
    <img src="logo.jpg"/>
    <span class="titre"><h1>Wild Rose</h1></span>
    <nav role="main">
      <ul>
        <li><a href="accueil.php">Home</a></li>
        <li><a href="homeuser.php?idclient=<?php echo $value ;?>">utilisateur</a></li>
        <li><a href="login1[1].php">admin</a></li>
        
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
    color:#FFFCEB
  }
  
  nav li:active {
    background-color: #6585f7;
    color:#FFFCEB
  }
  
  main {
    padding-top: 10px;
    }</style>

<body>
<?php $value = $_GET ['idclient']; ?></br></br>
<center><button class="button button1"><a class="link2" href="bouquet.php?idclient=<?php echo $value ?>">Bouquet</a></button>
    <button class="button button2"><a class="link2" href="chocolat.php?idclient=<?php echo $value ?>">Chocolat</a></button>
    <button class="button button3"><a class="link2" href="decoration.php?idclient=<?php echo $value ?>">Decoration</a></button> 
	<button class="button button4"><a class="link2" href="yourownbouquet.php?idclient=<?php echo $value ?>">Ton propre bouquet</a></button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a  href="panier.php?idclient=<?php echo $value ?>"><img src="panier.jfif" width="50" height="50"></a> </center></br></br>
	
	
<form method="GET" action="prodetails.php"><table>  
		<?php
      
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "projet filali";
                
      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
                
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());}
		$value = $_GET ['idclient']; 
		$query = "SELECT * FROM produit WHERE type_prod='decoration'";
		$result = mysqli_query($conn, $query);
		$j=0;
		while($j <= 1000){$i = 0;echo'<tr>';	
		while ($i <=3) {
		if($row = mysqli_fetch_assoc($result)){
			$nom=$row['nom_pro'];
			$imagepath=$row['image'];	   
		echo'<style>td{width:350px;height:300px;}</style>';
        echo '<td>'.'<img src="'.$imagepath.'"height="200" width="200"/></br>'.$row['nom_pro'].
		
		'</br></br>'.$row['prix_ttc'].'dhs'.
        
        '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp'.'
		<style>a{margin:9px;}.bye {border-radius: 100px;font-size:40px;
			line-height: 10px;color:#8A0157;border-color:#8A0157;background-color:#8A0157;}
			.bye:hover{background-color:#6585f7;color:#FFFCEB;border-color:#FFFCEB;}</style>
            <span class="bye"><a href="prodetails.php?orderID='.$row['num_pro'].'&idclient='.$value.'">
			 + </a></span></td>';$i++;}
			else{$i = 4;$j = 1001;}}
				echo'</tr>';
				$j++;}
            mysqli_close($conn);?> 
			</tbody>
		</table></form>
	</div>
</body>
</html>
