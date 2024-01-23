<?php 
$conn = mysqli_connect("localhost", "root", "", "projet filali");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (!isset($_GET['numpro']) || !isset($_GET['prix']) || !isset($_GET['quantite']) || !isset($_GET['idclient'])) {
    echo "Error: Missing parameters.";
    exit;
}

$produit = $_GET['numpro']; 
$prix = intval($_GET['prix']); 
$quantite = intval($_GET['quantite']); 
$clientid = $_GET['idclient'];

if ($quantite <= 0) {
    echo "Error: Invalid quantity.";
    exit;
}
echo "Produit: " . $produit . "<br>";
echo "Prix: " . $prix . "<br>";
echo "Quantité: " . $quantite . "<br>";
echo "Client ID: " . $clientid . "<br>";

$total = $prix * $quantite;

$c = "SELECT id_com FROM commande2 WHERE id_com = (SELECT max(id_com) FROM commande2)";
$result = mysqli_query($conn, $c);
$row = mysqli_fetch_assoc($result);
$c = $row['id_com'];
$c++;

$sql1 = "INSERT INTO `commande2_produit` (id_com, num_pro, quantite, prix) 
         VALUES ('$c', '$produit', '$quantite', '$total')";

echo "SQL Statement: " . $sql1 . "<br>";

if(mysqli_query($conn, $sql1)) {
    echo "Record added successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}

header("Location: yourownbouquet.php?idclient=" . $clientid);
mysqli_close($conn);
?>
