<?php

class pagina
{
    public static function body() {
        $paginaDirectory = "Paginas/".$_GET['p'].".php";
        if (isset($_GET['p'])) {
            if (file_exists($paginaDirectory) || is_readable($paginaDirectory))
            {
                require($paginaDirectory);
            } else {
                header("Location: ?p=Home");
            }
        } else {
            header("Location: ?p=Home");
        }
    }
    public static function menu() {require("Design/Onderdelen/Menu.php");}
    public static function commend() {require("Design/Onderdelen/Commend.php");}
    public static function info() {require("Design/Onderdelen/Info.php");}
	public static function footer() {require("Design/Onderdelen/Footer.php");}
    public static function loginModal() {require("Design/Onderdelen/LoginBox.php");}
}
?>
