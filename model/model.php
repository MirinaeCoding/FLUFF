<?php

class model {

    private $pdo;

    public function __construct()
    {

        $this->pdo = null;

        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=fluff', 'root', '');
        } catch (PDOException $e) {
            echo 'Connexion to database failed';
            echo $e;
        }
    }

    public function sign_up($id, $password, $email)
    {

        $sql = "INSERT INTO members VALUES(null, :id, :password, :email)";

        $p = $this->pdo->prepare($sql);

        $data = array(
            ":id" => htmlspecialchars($id),
            ":password" => htmlspecialchars($password),
            ":email" => htmlspecialchars($email)
        );

        $p->execute($data);

    }

    public function get_all($table)
    {
        $sql = "select * from $table";
        return $this->pdo->query($sql)->fetchAll();

    }

    public function find_id($id)
    {
        $sql = "select * from members where id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function find_email($email)
    {
        $sql = "select * from members where email = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch();
    }

}

?>