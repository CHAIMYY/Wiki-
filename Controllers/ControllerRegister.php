<?php


class ControllerRegister
{

    public function __construct()
    {
        $this->index();
    }
    public function index()
    {

        $view = new View("Register");
        $view->generateSimple();
    }

    static  public function register()
    {
        

        if (isset($_POST['submit'])) {
            $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT); 
            echo $hashedPassword ;
  //fetch_OBJ
            $data = array(

                'Firstname' => $_POST['first_Name'],
                'Lastname' => $_POST['last_Name'],
                'Email' => $_POST['email'],
                'passwordHash' => $hashedPassword,
              
               
                // 'password_repaet' => $_POST['repeat_password'],

            );


            $email = User::FindEmail($_POST['email']);
            if ($email == NULL ) {
                $result = User::insertUser($data);
                // if ($result === 'ok') {

                //     Redirect::to('login');
                // }
            }
        }
    }
}