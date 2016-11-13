<?php
    if (isset($_POST["Gebruikersnaam"]) AND isset($_POST["Email"]) AND isset($_POST["Wachtwoord"])) {
        user::RegisterUser($_POST["Gebruikersnaam"], $_POST["Email"], $_POST["Password"]);
    }
    user::RegisterUser($_POST["Gebruikersnaam"], $_POST["Email"], $_POST["Password"]);
?>
