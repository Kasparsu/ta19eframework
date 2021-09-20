<?php
namespace App\Controllers;

class HomeController {
    public function index() {
        var_dump($_SESSION);
        var_dump($_COOKIE);
        setcookie('somecoolcookie', 'sadasdad', time()+60*60*24*30);
        $myName = 'kaspar';
        view('index', compact('myName'));
    }

    public function upload() {
        move_uploaded_file(
            $_FILES['image']['tmp_name'],
            __DIR__ . '/../../public/' . $_FILES['image']['name']
        );
        header('Location: /');
    }

    public function login(){
        if($_POST['username'] === 'user' && $_POST['password'] === 'pass'){
            $_SESSION['isLoggedIn'] = true;
        }
        header('Location: /');
    }
    public function logout(){
        unset($_SESSION['isLoggedIn']);
        header('Location: /');
    }
}