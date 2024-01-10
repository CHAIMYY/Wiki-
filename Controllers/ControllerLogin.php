<?php

class ControllerLogin
{

    public function __construct()
    {
        $this->index();
    }
    public function index()
    {

        $view = new View("Login");

        $view->generateSimple();
    }

    static public function auth()
    {
        session_start();
        if (isset($_POST["submit"])) {
            $data['Email'] = $_POST["email"];
            $result = User::login($data);
        

            if ($_POST['email'] === $result['Email'] && password_verify($_POST['password'],$result['PasswordHash']) ) { //$result['password_user']
             

                $_SESSION['id'] = $result['ID_User'];
                $_SESSION['UserRole'] = $result['UserRole'];
                switch ($result['UserRole']) {
                    case 'admin':
                        $_SESSION['email'] = $data['Email'];
                        Redirect::to("register");
                    case 'auteur':
                        $_SESSION['email'] = $data['Email'];
                        Redirect::to("register");
                        
                }
            }else{
                return  "L'email ou le mot de passe est incorrect.";

            }
            
        } 

    }
}
