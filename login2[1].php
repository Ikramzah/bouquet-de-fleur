<?php 
session_start(); 
$sname_1= "localhost";
$unmae_1= "root";
$password_1 = "";

$db_name = "projet filali";

$conn = mysqli_connect($sname_1, $unmae_1, $password_1, $db_name);

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

	$uname_1 = validate($_POST['uname']);
	$pass_1 = validate($_POST['password']);

	if (empty($uname_1)) {
		echo'<script>alert("Veuillez entrer votre login et mot de passe");
		window.location.href = "login1[1].php";
	    </script>';
	    exit();
	}else if(empty($pass_1)){
        echo'<script>alert("Veuillez entrer votre mot de passe");
		window.location.href = "login1[1].php";
	    </script>';
	    exit();
	}else{
		$sql = "SELECT * FROM administrateur WHERE login_ad='$uname_1' AND pass_ad='$pass_1'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['login_ad'] === $uname_1 && $row['pass_ad'] === $pass_1) {
            	$_SESSION['user_name'] = $row['login_ad'];
            	$_SESSION['name'] = $row['nom_ad'];
            	$_SESSION['id'] = $row['id_ad'];
            	header("Location: homeadmin.php");
		        exit();
            }else{ 
				echo'<script>alert("ACCES NON AUTORISE");
		        window.location.href = "login1[1].php";
	            </script>';
		        exit();
			}
		}else{
		    echo'<script>alert("ACCES NON AUTORISE");
		        window.location.href = "login1[1].php";
	            </script>';
	        exit();
		}
	}
	
}else{
	echo'<script>alert("ACCES NON AUTORISE");
	window.location.href = "login1[1].php";
	</script>';
	exit();
}
