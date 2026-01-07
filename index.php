<?php
// Habilitar exibição de erros para depuração (opcional, mas útil para o usuário ver se algo mais falhar)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'config/config.php';
require_once 'config/database.php';

$page = $_GET['page'] ?? 'home';

if($page == 'logout'){
    session_destroy();
    header('Location: ?');
    exit;
}

if($page == 'contato_submit'){
    // Simulação de envio de contato
    echo "<script>alert('Mensagem enviada com sucesso! Entraremos em contato em breve.'); window.location.href='?';</script>";
    exit;
}

switch($page){
    case 'login': 
        include 'app/controllers/AuthController.php'; 
        (new AuthController)->login(); 
        break;
    case 'admin': 
        include 'app/controllers/AdminController.php'; 
        (new AdminController)->dashboard(); 
        break;
    default: 
        include 'app/controllers/HomeController.php'; 
        (new HomeController)->index();
}
?>
