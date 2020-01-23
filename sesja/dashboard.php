<?php
    session_start();
    if(isset($_SESSION['is_auth']) && $_SESSION['is_auth'] == 1)
    {
        echo 'Witaj '.$_SESSION['login'];
    }
    else{
        header('Location:logowanie.php');
        
    }

    
?>  




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="logoff.php" action="post"> <input type="submit" value="Wyloguj się" name="logoff"></form>
</body>
</html>