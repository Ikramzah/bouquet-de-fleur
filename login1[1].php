<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div id="loading">
        <video id="bgvideo" loop autoplay muted> 
        <source src=video.mp4.mp4 type=video/mp4>
        </video></div>
    <form action="login2[1].php" method="post">
        <div class="container">
                <form method="POST" action="login2[1].php">
                    <span class="logintitle">Connexion</span>
                    <div class="form-input">
                        <input type="text" name="uname" placeholder="nom utilisateur"/>	
                    </div>
                    <div class="form-input">
                        <input type="password" name="password" placeholder="password"/>
                    </div>
                    <input type="submit" value="LOGIN" class="btn-login"/></br>
                </form>
            </div>
    </form>
</body>
</html>
