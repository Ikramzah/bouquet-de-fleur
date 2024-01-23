<!DOCTYPE html>
<html>
<head>
	<title>Bouquets Shop</title>
	<link rel="stylesheet" type="text/css" href="accueil.css">
</head>
<body>
  <div class="hi">YOU CAN DO IT !!</div>
  <header>
    <img src="logo.jpg"/>
    <span class="titre"><h1>Wild Rose</h1></span>
    <nav role="main">
      <ul>
      <li><a href="accueil.php">Home</a></li>
        
        <li><a href="login1.php">Utilisateur</a></li>
        <li><a href="homeadmin.php">Administrateur</a></li>
      </ul>
    </nav>
  </header>
</head>
<tbody>
                <style>
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
    
    .button2 {
      background-color: #59B4EA; 
      color: black; 
      border: 2px solid #8A0157;
      border-radius: 50%;
    }
    
    .button2:hover {
      background-color: #8A0157;
      color: white;
      border-radius: 50%;
    }
    
    .button3 {
      background-color: #59B4EA; 
      color: black; 
      border: 2px solid #8A0157;
      border-radius: 50%;
    }
    
    .button3:hover {
      background-color: #8A0157;
      color: white;
      border-radius: 50%;
    }
    .button4 {
      background-color: #59B4EA; 
      color: black; 
      border: 2px solid #8A0157;
      border-radius: 50%;
    }
    
    .button4:hover {
      background-color: #8A0157;
      color: white;
      border-radius: 50%;
    }
    
    </style>
 <style>
.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 100%;
  height: auto;
}

.container .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: purple;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.container .btn:hover {
  background-color: black;
}
.m{
   
   border: 1px solid #ddd;
   border-radius: 4px;
   padding: 5px;
   width: 150px;
 
     }
   td {
     text-align: center;
     vertical-align: middle;
     padding: 10px;
   }
   button {
     margin-top: 10px;
   }
</style>
</head>
<body>

<div class="container">
<table>
  <tr>
    <td>
    <img class="m" src="client.jpeg" alt="cli">
      <button class="button button1"><a href="homeadmincli.php">CLIENT</a></button>
    </td>
    <td>
    <img class="m" src="produit.jpeg"><br>
    <button class="button button2"><a href="homeadminpro.php">PRODUIT</a></button>
    </td>
    <td>
    <img class="m" src="commande1.png" alt="com"><br>
    <button class="button button3"><a href="homeadmincom.php">COMMANDE</a></button>
    </td>
    <td>
    <img class="m" src="email2.jpeg" alt="com"><br>
    <button class="button button4"><a href="homeadminema.php">EMAIL</a></button>
    </td>
  </tr>
</table>
</div>

</body>
</html>