<?php

class DB
{
    //attributs

    private string $db_user = 'root';

    private string $bd_pass = 'password';

    private string $db_name = 'Stage_Formulaire';

    private string $db_host = '172.0.0.1';

    private object $dbh;

    //methode

    public function connexion()
    {
        $dsn = 'mysql:dbname=' . $this->db_name . '.host=' . $this->db_host;

        $this->dbh = new PDO($dsn, $this->db_user, $this->db_pass);


    }

    public function findAllEtudiant()
    {
        $sql = 'SELECT * FROM eleve';

        $stmt = $this->dbh->query($sql);

        


        if ($stmt) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return false;
        }
    }
}