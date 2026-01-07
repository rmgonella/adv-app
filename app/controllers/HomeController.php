<?php
class HomeController {
    public function index(){
        $page = $_GET['page'] ?? 'home';
        
        switch($page) {
            case 'sobre':
                include 'app/views/pages/sobre.php';
                break;
            case 'servicos':
                include 'app/views/pages/servicos.php';
                break;
            case 'portfolio':
                include 'app/views/pages/portfolio.php';
                break;
            case 'blog':
                include 'app/views/pages/blog.php';
                break;
            case 'contato':
                include 'app/views/pages/contato.php';
                break;
            default:
                include 'app/views/pages/home.php';
                break;
        }
    }
}
?>
