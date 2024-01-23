<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "projet filali";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);


$nump = "";
$nbr= "";
$date = "";
$tot = "";
$adr ="";
$numc="";
$errorMessage = "";
$successMessage = "";

if(isset($_POST['submit'])){
                $nump = $_POST['num_pro'];
                $nbr = $_POST['nbr_pro'];
                $date = $_POST['date_livr'];
                $tot = $_POST['total'];
                $adr = $_POST['adr_livr'];
                $numc = $_POST['num_com'];
    
    
        //add new client to the data base
        $sql = "INSERT INTO `commande` (num_pro, nbr_pro, date_livr, total, adr_livr, num_com) 
               VALUES('$nump', '$nbr', '$date', '$tot', '$adr', '$numc')";
        $result = mysqli_query($connection,$sql);       
        if($result){
            echo"data inserted successfully";
        }else{
            die(mysqli_error($connection));
        }
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
        <h2>Nouvelle Commande</h2>
<center><form method="post">
    
    <div class="form-group">
    <label>Numéro Du Produit:</label>
        <input type="number" name="num_pro" class="form-control" value="<?php echo $nump;?>">
</div>
</br>
<div class="form-group">
    <label>Nombre de produit:</label>
        <input type="number" name="nbr_pro" class="form-control" value="<?php echo $nbr;?>">
</div>
</br>
<div class="form-group">
    <label>Date de livraison:</label>
        <input type="date" name="date_livr" class="form-control" value="<?php echo $date;?>">
</div>
</br>
<div class="form-group">
    <label>Total:</label>
        <input type="number" name="total" class="form-control" value="<?php echo $tot;?>">
</div>
</br>
<div class="form-group">
    <label>Adresse De Livraison:</label>
        <input type="text" name="adr_livr" class="form-control" value="<?php echo $adr;?>">
</div>
</br>
<div class="form-group">
    <label>Numéro de commande:</label>
        <input type="number" name="num_com" class="form-control" value="<?php echo $numc;?>">
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
        <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
</div>
<div class="col-sm-3 d-grid">
<button><a class="btn btn-outline-primary" href="homeadmincom.php" role="botton">Annuler</a></button>    
</form></center>
</body>
