<?php
if(isset($_POST["Gebruikersnaam"]))
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) OR strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }
    $db = new PDO("mysql:host=localhost;dbname=fwebdev", "root", "");

    $username = filter_var($_POST["Gebruikersnaam"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);

    $statement = $db->prepare("SELECT Gebruikersnaam FROM gebruikers WHERE Gebruikersnaam='".$username."'");
    $statement->execute();
    if($statement->fetch()){
        die('<img src="Design/Plaatjes/not-available.png" />');
    }else{
        die('<img src="Design/Plaatjes/available.png" />');
    }
}
?>
