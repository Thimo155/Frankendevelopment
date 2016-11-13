<?php
class reviews
{
    public static function getReviews() {
        $db = new PDO("mysql:host=localhost;dbname=fwebdev", "root", "");
        $statement = $db->prepare("SELECT * FROM reviews");
        $statement->execute();
        return $statement;
    }
}
?>
