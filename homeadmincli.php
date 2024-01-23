<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>CLIENT</title>
    <button><a class="btn btn-primary" href="create1.php" role="button">Nouveau Client</a></button>
    <link rel="stylesheet" type="text/css" href="homeuser.css">
    
</head>
<body>
    <div class="container my-5">

        <table class="table">
        <thead>
            <tr>
                <th>Login Du Client</th>
                <th>Password Du Client</th>
                <th>Nom Du Client</th>
                <th>Prénom Du Client</th>
                <th>Id Du Client</th>
                <th colspan="2">Operation</th>
            </tr>
        </thead>
       <tbody>
        <?php
        include 'header1.html';
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "projet filali";

        //Create connection
        $connection = new mysqli($servername, $username, $password, $database);

        //Check connection
        if($connection->connect_error) {
            die("Connection failed: ". $connection->connect_error);
        }

        //read all rows from the database table
        $sql = "SELECT * FROM client";
        $result = $connection->query($sql);

        if(!$result){
            die("Invalid query:".$connection->error);
        }

        //read data of each row
        while($row = $result->fetch_assoc()){
           echo"
           <tr>
           <td>$row[login_cl]</td>
           <td>$row[pass_cl]</td>
           <td>$row[nom_cl]</td>
           <td>$row[prenom_cl]</td>
           <td>$row[id_cl]</td>
           <td>
            <button><a class='btn btn-primary btn-sm' href='edit1.php?id_cl=$row[id_cl]'>Modifier</a></button>
            <button><a class='btn btn-danger btn-sm' href='delete1.php?id_cl=$row[id_cl]'>Supprimer</a></button>
           </td>
           </tr>   
            ";
            }
        ?>
       </tbody> 
        </table>
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
    </div>
</body>
</html>
