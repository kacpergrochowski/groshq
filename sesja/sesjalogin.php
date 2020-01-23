<?php




/*$LOGIN = [];
$LOGIN['login'] = $_POST['login'];
$LOGIN['haslo'] = $_POST['haslo']; 

$login5 = serialize($LOGIN);

file_put_contents($_POST['login'], $login5);*/

if(file_exists('./data/'.$_POST['login'].'.dat'))
{
    $login = file_get_contents('./data/'.$_POST['login'].'.dat');
    $loginunserialize = unserialize($login);
    if($loginunserialize['haslo1'] == md5($_POST['haslo']))
    {
        session_start();

        $_SESSION['login'] = $_POST['login'];
        $_SESSION['haslo'] = md5($_POST['haslo']);
        $_SESSION['is_auth'] = true;
        
        header('Location:dashboard.php');
    }
    else{
        echo "haslo jest niepoprawne";
    }
}
else{
    echo "nie odnalexiono danego usera";
}