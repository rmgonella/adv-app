
<?php
class AdminController {
    public function dashboard(){
        if(!isset($_SESSION['user'])){ header('Location:?page=login'); }
        include 'app/views/admin/dashboard.php';
    }
}
?>
