<?php
session_start();
print("<link rel='icon' href='favicon.ico' type='image/x-icon' />");
foreach (glob("Modules/*.php") as $file) {
    require($file);
}
$pagina = new pagina();
$pagina->body();
?>
