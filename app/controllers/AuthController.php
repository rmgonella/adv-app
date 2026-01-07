
<?php
class AuthController {
    public function login(){
        if($_POST){
            $_SESSION['user'] = 'admin';
            header('Location:?page=admin');
        }
        include 'app/views/pages/login.php';
    }
}
?>
