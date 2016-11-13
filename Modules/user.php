<?php
class user
{
    public function registerUser($Username, $Email, $Password)
    {
        $options = [
            'cost' => 11,
            'salt' => mcrypt_create_iv(22, MCRYPT_DEV_URANDOM),
        ];
        $Hash = password_hash($Password, PASSWORD_BCRYPT, $options);
        $db = new PDO("mysql:host=localhost;dbname=fwebdev", "root", "");
        $IP = self::get_client_ip_env();
        $sql = $db->prepare("SELECT * FROM gebruikers WHERE IP = '".$IP."'");
        $sql->execute();
        if ($sql->rowCount() == 0) {
            $sql = "INSERT INTO gebruikers (Gebruikersnaam, Email, Wachtwoord, IP) VALUES ('".$Username."', '".$Email."', '".$Hash."', '".$IP."')";
            $db->query($sql);
        }
        else {
            print("Dit ip is al gebonden aan een account");
        }

    }
    public function userLogin($Username, $Password)
    {

    }
    function get_client_ip_env() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';

        return $ipaddress;
    }

}
?>
