<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "projet filali";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);


$name = "";
$pre= "";
$ema = "";
$msg = "";

if(isset($_POST['submit'])){
                $name = $_POST['nom_cl'];
                $pre = $_POST['prenom_cl'];
                $ema = $_POST['email'];
                $msg = $_POST['message'];
    
            //add new client to the data base
        $sql = "INSERT INTO `email` (nom_cl, prenom_cl, email, message) 
               VALUES('$name', '$pre', '$ema', '$msg')";
        $result = mysqli_query($connection,$sql);     
        if($result){
            echo"data inserted successfully";
        }else{
            die(mysqli_error($connection));
        }
}

?>

  
  
    <form method="POST">
      <label for="nom_cl">Prenom :</label>
      <input type="text" id="nom_cl" name="nom_cl" value="<?php echo $name;?>"><br>

      <label for="prenom_cl">Nom :</label>
      <input type="text" id="prenom_cl" name="prenom_cl" value="<?php echo $pre;?>"><br>

      <label for="email">Adresse e-mail :</label>
      <input type="email" id="email" name="email" value="<?php echo $ema;?>"><br>

      <label for="message">Message :</label>
      <textarea id="message" name="message" value="<?php echo $msg;?>"></textarea><br>

      <button type="submit" class="btn btn-primary" name="submit">Envoyer</button>
      <img src="admin.png" class="button button1" alt="Image de formulaire" class="form-image">

    </form>
  
</div>
<style>


.form-image {
position: absolute;
top: 0;
right: 0;
}

.image-container {
float: left;
margin-right: 10px;
}



form {
background-color: #8d637e;
padding: 20px;
}

label {
display: block;
margin-bottom: 10px;
}

input[type="email"],
textarea {
width: 100%;
padding: 10px;
border: 1px solid #111010;
border-radius: 4px;
box-sizing: border-box;
margin-bottom: 20px;
}

input[type="submit"] {
background-color: #8c2e69;
color: rgb(9, 8, 8);
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
}
input[type="text"] {
width: 100%;
padding: 10px;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
margin-bottom: 20px;
}
.button {
    background-color: white;
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
    border-radius: 50%;
  }
  
  .button1 {
    background-color: #59B4EA; 
    color: black; 
    border: 2px solid #8A0157;
    border-radius: 50%;
  }
  
  .button1:hover {
    background-color: #8A0157;
    color: white;
    border-radius: 50%;
  }
</style>