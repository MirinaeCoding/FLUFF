<?php

require('../model/model.php');

class controller {

    private $pdo;
    private $model;

    public function __construct()
    {

        $this->pdo = null;
        $this->model = new model();

        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=fluff', 'root', '');
        } catch (PDOException $e) {
            echo 'Connexion to database failed';
            echo $e;
        }
    }

//----------- SIGN UP----------//

    public function sign_up($id, $password, $password_confirm, $email)
    {
        $members_id = $this->model->find_id(htmlspecialchars($id));
        var_dump($members_id);

        if ($password === $password_confirm) {





            if ($id == $members_id) {
                return true;
            } else {

                header('Location: ../vue/sign_up.php?iderror');
            }

            $members_email = $this->model->find_email(htmlspecialchars($email));

            if ($email == $members_email) {
                return true;
            } else {

                header('Location: ../vue/sign_up.php?emailerror');
            }

            $this->model->sign_up($id, $password, $email);

            header('Location: ../vue/sign_up.php?success');

        } else {

            header('Location: ../vue/sign_up.php?passworderror');
        }
    }
    

    
//----------- SIGN IN----------//

    public function sign_in($id, $password)
    {
        $members = $this->model->get_all('members');

        foreach ($members as $member) {
            if ($member['id'] === $id) {

                if ($member['password'] === $password) {
                    $_SESSION['id'] = $member['id'];
                    $_SESSION['password'] = $member['password'];
                    header('Location: ../vue/home.php?kitchen');
                } 
            } else {
                header('Location: ../vue/sign_in.php?error');
            }
        }


    }

//----------Changer l'environnement----------//

    public function change_room(){
        
    }

}

?>