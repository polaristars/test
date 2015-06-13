<?php
class Bdd
{
    public function __construct()
    {
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=portfolio;unix_socket=/home/pade_m/.mysql/mysql.sock', 'root', '');
            $this->bdd=$bdd;
        }
        catch(PDOException $e) {
            die('Erreur :' . $e->getMessage());
        }
    }
}
?>