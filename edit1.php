<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "projet filali";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);


$log = "";
$pass= "";
$nom = "";
$prenom = "";
$id ="";
$errorMessage = "";
$successMessage = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $log = $_POST['login_cl'];
    $pass = $_POST['pass_cl'];
    $nom = $_POST['nom_cl'];
    $prenom = $_POST['prenom_cl'];
    $id = $_POST['id_cl'];
    
    
        //add new products to the data base
        $sql = "UPDATE `client` SET login_cl= '$log', pass_cl = '$pass', nom_cl = '$nom', prenom_cl = '$prenom', id_cl = '$id'
           WHERE id_cl = $id";
        $result = $connection->query($sql);       
        $log = "";
        $pass= "";
        $nom = "";
        $prenom = "";
        $id =""; 
        $successMessage = "Client ajouté";

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
        <h2>Modifier un Client</h2>

        <?php
        if(isset($_GET['id_cl'])){
            $id = mysqli_real_escape_string($connection,$_GET['id_cl']);
            $query = "SELECT * FROM client WHERE id_cl='$id'";
            $query_run = mysqli_query($connection,$query);

            if(mysqli_num_rows($query_run) > 0){
                $client = mysqli_fetch_array($query_run);

            }
            
        }
        ?>
 
 <center><form method="post">
    
    <div class="form-group">
    <label>Login Du Client:</label>
        <input type="text" name="login_cl" class="form-control" value="<?php echo $log;?>">
</div>
</br>
<div class="form-group">
    <label>Password Du Client:</label>
        <input type="text" name="pass_cl" class="form-control" value="<?php echo $pass;?>">
</div>
</br>
<div class="form-group">
    <label>Nom Du Client:</label>
        <input type="text" name="nom_cl" class="form-control" value="<?php echo $nom;?>">
</div>
</br>
<div class="form-group">
    <label>Prenom Du Client:</label>
        <input type="text" name="prenom_cl" class="form-control" value="<?php echo $prenom;?>">
</div>
</br>
<div class="form-group">
    <label>Id Du Client:</label>
        <input type="text" name="id_cl" class="form-control" value="<?php echo $id;?>">
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
<button><a class="btn btn-outline-primary" href="homeadmincli.php" role="botton">Annuler</a></button>    
</form></center>
</body>
