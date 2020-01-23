<?php

session_start();

if($_SESSION['is_auth']){
    var_dump($_SESSION);
    $_SESSION['is_auth'] = false;
    header('Location:logowanie.php');
    session_abort();
}