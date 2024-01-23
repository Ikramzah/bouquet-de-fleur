<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="GET" action="homeuser"

<?php 
session_start(); 
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "projet filali";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}


if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		echo'<script>alert("Veuillez entrez votre login ");
		window.location.href = "login1.php";
		</script>';
	    exit();
	}else if(empty($pass)){
        echo'<script>alert("Veuillez entrez votre mot de passe");
		window.location.href = "login1.php";</script>';
	    exit();
	}else{
		$sql = "SELECT * FROM client WHERE login_cl='$uname' AND pass_cl='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['login_cl'] === $uname && $row['pass_cl'] === $pass) {
            	$_SESSION['user_name'] = $row['login_cl'];
            	$_SESSION['name'] = $row['nom_cl'];
            	$_SESSION['id'] = $row['id_cl'];
				$idcl=$row['id_cl'];
            	header("Location:homeuser.php?idclient=$idcl");
		        exit();
            }else{
				echo'<script>alert("Accés non autorisé :Utilisateur inconnu ou mauvais mot de passe");
		        window.location.href = "login1.php";</script>';
				exit();
			}
		}else{
			echo'<script>alert("Accés non autorisé :Utilisateur inconnu ou mauvais mot de passe");
		    window.location.href = "login1.php";</script>';
			
			exit();
		}
	}
	
}else{
	header("Location: login1.php");
	
	exit();
}?>
</body>
</html>