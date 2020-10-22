<?php
class LoginController
{
    public function index()
    {


        unset($_SESSION['login_incorrect']);
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            header("location: /");
            exit;
        }
        require 'views/login.view.php';
    }
    public function logout()
    {
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]) {
            unset($_SESSION['loggedIn']);
        }
        header("location: /login");
        exit;
    }

    public function login(){
        // POST LOGIN
        $user =  new UserModel();
        $user->find2($_POST['username']);
       // $naam=$user->getusername();
       // $wachtwoord=$user->getPassword();
        //echo $wachtwoord;
        //echo "<br>".$naam."<br>";
        //print_r($_POST);
       // exit;


        

        
        if (password_verify($_POST['password'],$user->getPassword())){
            $_SESSION['loggedIn'] = true;
            $_SESSION['naam'] = $user->getUserName();

            header("location: /");
        } else {
            $_SESSION['login_incorrect'] = "Password or username not correct";
            header('location: /login');
            require 'views/login.view.php';
        }
    }
}