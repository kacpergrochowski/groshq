<?php

$user             = [];
$user['imie']     = $_POST['imie'];
$user['nazwisko'] = $_POST['nazwisko'];
$user['login']    = $_POST['login'];
$user['haslo1'] = md5($_POST['haslo1']);

if ( md5($_POST['haslo1']) !== md5($_POST['haslo2']) ) {
echo "Hasla sa rozne";
die();
}

if ( ! file_exists( 'data' ) ) {
mkdir( 'data' );
echo "Utworzono katalog data<br/>";
}

$userS = serialize( $user );

$targetFile = $user["login"] . ".dat";
if ( file_exists( "data/{$targetFile}" ) ) {
echo "Dane zaktualizowano";
} else {
echo "Dodano nowego usera";
}

file_put_contents( "data/" . $targetFile, $userS );