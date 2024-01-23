<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Email</title>
    <link rel="stylesheet" type="text/css" href="homeuser.css">
    
</head>
<body>
    <div class="container my-5">

        <table class="table">
        <thead>
            <tr>
                <th>Nom du client</th>
                <th>Prenom du client</th>
                <th>Email du client</th>
                <th>Message</th>
                <th>Operation</th>
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
        $sql = "SELECT * FROM email";
        $result = $connection->query($sql);

        if(!$result){
            die("Invalid query:".$connection->error);
        }

        //read data of each row
        while($row = $result->fetch_assoc()){
           echo"
           <tr>
           <td>$row[nom_cl]</td>
           <td>$row[prenom_cl]</td>
           <td>$row[email]</td>
           <td>$row[message]</td>
           <td>
            <button><a class='btn btn-danger btn-sm' href='delete3.php?nom_cl=$row[nom_cl]'>Supprimer</a></button>
           </td>
           </tr>   
            ";
            }
        
        ?>
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
</tbody> 
</table>