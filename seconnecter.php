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

if(isset($_POST['submit'])){
                $log = $_POST['login_cl'];
                $pass = $_POST['pass_cl'];
                $nom = $_POST['nom_cl'];
                $prenom = $_POST['prenom_cl'];
    
    
        //add new client to the data base
        $sql = "INSERT INTO `client` (login_cl, pass_cl, nom_cl, prenom_cl) 
               VALUES('$log', '$pass', '$nom', '$prenom')";
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
<body><div id="loading">
        <video id="bgvideo" loop autoplay muted> 
        <source src=video.mp4.mp4 type=video/mp4>
        </video></div>
    <div class="container my-5"></br></br>
       <center> <h2><span style="color:white">Créer votre compte :</span></h2></center>
<center><form method="post">
    
    <div class="form-group">
    <label>Login:</label>
        <input type="text" name="login_cl" class="form-control" value="<?php echo $log;?>">
</div>
</br>
<div class="form-group">
    <label>Password:</label>
        <input type="text" name="pass_cl" class="form-control" value="<?php echo $pass;?>">
</div>
</br>
<div class="form-group">
    <label>Nom:</label>
        <input type="text" name="nom_cl" class="form-control" value="<?php echo $nom;?>">
</div>
</br>
<div class="form-group">
    <label>Prénom:</label>
        <input type="text" name="prenom_cl" class="form-control" value="<?php echo $prenom;?>">
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
        <button type="submit" class="btn btn-primary" href="homeuser.php" name="submit">Enregistrer</button>
</div>
<div class="col-sm-3 d-grid">
<button><a class="btn btn-outline-primary" href="login1.php" role="botton">Annuler</a></button>    
</form></center><style>#loading {
    display: block;
    overflow: hidden;
    z-index: -100;
    position: fixed;
    top: 0;
    left: 0;
    
  }
  
  #bgvideo {
    position: fixed;
    right: 0;
    bottom: 0;
    width: 100%; 
    min-height: 100%;
  }
  </style>
</body>
