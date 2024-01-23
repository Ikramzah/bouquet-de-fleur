<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "projet filali";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);


$name = "";
$num= "";
$pttc = "";
$pht = "";
$qstc ="";
$cara = "";
$typep = "";
$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $name = $_POST['nom_pro'];
                $num = $_POST['num_pro'];
                $pttc = $_POST['prix_ttc'];
                $pht = $_POST['prix_ht'];
                $qstc = $_POST['qte_stc'];
                $cara = $_POST['caracteristiques'];
                $typep =  $_POST['type_prod'];
    
    
        //add new products to the data base
        $sql = "UPDATE `produit` SET nom_pro= '$name', num_pro = '$num', prix_ttc = '$pttc', prix_ht = '$pht', qte_stc = '$qstc',  caracteristiques = '$cara', type_prod = '$typep'
           WHERE num_pro = $num";
        $result = $connection->query($sql);       
        $name = "";
        $num = "";
        $pttc = "";
        $pht = "";
        $qstc ="";
        $cara = "";
        $typep = "";

        $successMessage = "Produit ajouté";

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <div class="container my-5">
        <h2>Modifier un Produit</h2>

        <?php
        if(isset($_GET['num_pro'])){
            $num = mysqli_real_escape_string($connection,$_GET['num_pro']);
            $query = "SELECT * FROM produit WHERE num_pro='$num'";
            $query_run = mysqli_query($connection,$query);

            if(mysqli_num_rows($query_run) > 0){
                $produit = mysqli_fetch_array($query_run);

            }
            else{
                echo "<h4>No such id found</h4>";
            }
        }
        ?>

<center><form method="post">
<input type="hidden" name="num_pro" value="<?php echo $num;?>">
    <div class="form-group">
    <label>Nom du produit:</label>
        <input type="text" name="nom_pro" class="form-control" value="<?php echo $name;?>">
</div>
</br>
<div class="form-group">
    <label>Numéro du produit:</label>
        <input type="text" name="num_pro" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" value="<?php echo $num;?>">
</div>
</br>
<div class="form-group">
    <label>Prix TTC:</label>        
        <input type="number" name="prix_ttc" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" value="<?php echo $pttc;?>">
</div> 
</br>
<div class="form-group">
    <label>Prix HT:</label>          
        <input type="number" name="prix_ht" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" value="<?php echo $pht;?>">
</div>
</br> 
<div class="form-group">
    <label>Qte du stock:</label>                
        <input type="number" name="qte_stc" onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" value="<?php echo $qstc;?>">
</div>
</br>   
<div class="form-group">
    <label>Carctéristiques:</label>     
        <textarea name="caracteristiques" value="<?php echo $cara;?>"></textarea>
</div>
</br>
<div class="form-group">
    <label>Type du produit:</label>                 
        <input type="text" name="type_prod" value="<?php echo $typep;?>">
</div>
</br>  

<?php
 if(!empty($successMessage)){
    echo"
    <div class='row mb-3'>
    <div class='offset-sm-3 col-sm-6'>
    <div class='alert alert-warning alert-dismissible fade show' role='alert>'
     <strong>$successMessage</strong>
     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
     </div>
     ";

}
?>



<div class="row mb-3">
<style>button {
  background-color: #8A0157;
  width: 100px;
  font-size: 15px;
  padding: 5px;
  border-radius: 5px;
  color: white;
  cursor: pointer;
}
</style>
    <div class="offset-sm-3 col-sm-3 d-grid">
        <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
</div>
<div class="col-sm-3 d-grid">
<button><a class="btn btn-outline-primary" href="index.php" role="botton">Annuler</a></button>    
</form></center>
</body>
</html>

