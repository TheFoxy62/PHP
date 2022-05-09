<?php

session_start();
    // le tableau $_POST contient des données 

if($_POST){
  //vérification de l'existence de la clé 'password' dans le tableau $_POST
    if(isset($_POST['password'])){
        if($_POST['password']== '123'){
            // la clé 'password' existe
// le mot est correct
            $_SESSION['authentificated']=true;
// on déclare que l'utilisateur est authentifié
            $url = '/private-page.php';

            header("Location:$url",302);
            
            exit();
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form action="/login.php" method="post">
        <input type="text" name="password" placeholder="password">
        <button type="submit">Ok</button>
    </form>
</body>
</html>