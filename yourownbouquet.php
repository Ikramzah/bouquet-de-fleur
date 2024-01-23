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
	<form method="GET" action="yourownbouquet2.php" >
<?php
include 'header.html';?>
<?php $value = $_GET ['idclient']; ?>
    <center><button class="button button1"><a href="bouquet.php?idclient=<?php echo $value ?>">Bouquet</a></button>
    <button class="button button2"><a href="chocolat.php?idclient=<?php echo $value ?>">Chocolat</a></button>
    <button class="button button3"><a href="decoration.php?idclient=<?php echo $value ?>">Decoration</a></button> 
	<button class="button button4"><a href="yourownbouquet.php?idclient=<?php echo $value ?>">Ton propre bouquet</a></button></center> 
	
<table class="order-table">
</br>
<thead><tr class="com"><td colspan="3"> Votre commande </td></tr>
                <th>Nom de la fleur</th>
                <th>Quantité</th>
                <th>Prix </th>
                </tr></thead>
<?php
$conn = mysqli_connect("localhost", "root", "", "projet filali");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}

	
	$query = "SELECT * FROM fleur";
	$result4 = mysqli_query($conn, $query);

	$max_id_com = 0;
	$c2 = "SELECT max(id_com) as max_id_com FROM commande2";
	$result = mysqli_query($conn, $c2);
	if (mysqli_num_rows($result) >= 0) {
	$row = mysqli_fetch_assoc($result);
	$max_id_com = intval($row['max_id_com']);}
	$c = $max_id_com + 1;

	  
	
	$query2 = "SELECT * FROM commande2_produit WHERE id_com=".$c;
	$result2 = mysqli_query($conn, $query2);
	$row = mysqli_fetch_assoc($result2);
	$totalprix=0;
	while($row = mysqli_fetch_assoc($result2)){
	$numpro=$row['num_pro'];
	$sql1="SELECT type_fleur FROM fleur WHERE id_type_fleur=".$numpro;
	$result = mysqli_query($conn, $sql1);
	$row1 = mysqli_fetch_assoc($result);
	$nom=$row1['type_fleur'];
	$quantite=$row['quantite'];
	$total=$row['prix'];
	$totalprix=$totalprix+$total;
	echo '<tr><td>'.$nom.'</td>
	<td>'.$quantite.'</td>
	<td>'.$total.'.00dhs</td>
	</tr></br>';
	}echo'</tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	Total :</td><td>'.$totalprix.'.00dhs</td>';
	
echo '</table></br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="confirm"><a href="confirm.php?idclient='.$value.'&totalprix='.$totalprix.'"> OK </a></span>';
echo'</br></br></br></br><div class="ajouter">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ajoutez plus de fleurs à votre bouquet : </div>
	</br></br><table>';
	$j=0;
		while($j <= 1000){$i = 0;echo'<tr>';	
		while ($i <=3) {
		if($row = mysqli_fetch_assoc($result4)){
			$nom=$row['type_fleur'];
			$imagepath=$row['image'];
			$prix=$row['prix_fleur'];
			$id_type_fleur=$row['id_type_fleur'];	

			?><style>td{width:350px;height:350px;border:transparent;}</style>
            <td><img src="<?php echo $imagepath; ?>"height="200" width="200" /></br><?php echo $nom ;?>
		
		   </br></br><?php echo $prix;?> dhs
		   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   </br></br>quantité:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   <input id="quantity_<?php echo $id_type_fleur; ?>" type="number" name="quantite" ></br>
		   </br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<span class="bye">
		<a href="#" onclick="addToCart('<?php echo $id_type_fleur; ?>', '<?php echo $value;?>', '<?php echo $prix;?>', document.getElementById('quantity_<?php echo $id_type_fleur; ?>'))">+</a>
		</span></br></br>
			<script>
function addToCart(productId, clientId, productPrice, quantityInput) {
    var quantity = quantityInput.value;
    var url = 'yourownbouquet2.php?numpro=' + productId + '&idclient=' + clientId + '&prix=' + productPrice + '&quantite=' + quantity;
    window.location.href = url;
}
</script>

		   <style>a{margin:9px; }
			input{width:40px;}
			.ajout{color: #8A0157;border-radius:20px;width:145px;height:40px;
		   font-size:30px;right:170px;top:620px;margin:30px;}</style>
			
			</td><?php $i++; }
			else{$i = 4;$j = 1001;}}
				echo'</tr>';
				$j++;}
			

            mysqli_close($conn);?>
			</table></form>
			<style>
thead {
    background-color: #f2f2f2; /* Add a light background color */
    color:#8A0157;
    top: 80px;
	margin: 0;
}.order-table {
  width: 70%;
  margin: 0 auto;
  margin-top: 0px; 
}
  .order-table td {
  height:50px;text-align: center;
  }
.ajouter{
	color: #8A0157;
    font-family: 'Lucida Handwriting','Segoe Script', Times, serif;
	background-color:#feacf1;
}
.com{
	color: #8A0157;text-align: center;
    font-family: 'Lucida Handwriting','Segoe Script', Times, serif;
	margin-bottom:0px;
}
.bye {border-radius: 100px;
	  font-size:40px;
	  color:#feacf1;
	  line-height: 10px;
	  border-color:#8A0157;
	  background-color:#8A0157;}
.bye:hover{background-color:#6585f7;
           color:#FFFCEB;
		   border-color:#FFFCEB;}
.confirm{
	background-color:#8A0157;
	position:absolute;
}

</style>
</body>
</html>
