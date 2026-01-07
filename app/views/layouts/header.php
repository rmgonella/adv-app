<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>CPS Advocacia - Excelência Jurídica</title>
    <link rel='stylesheet' href='css/style.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<header id="main-header">
    <div class="header-container">
        <div class="logo-container">
            <a href="index.php">
                <img src="img/cps-logo.png" alt="CPS ADVOCACIA" class="logo-img">
            </a>
        </div>

        <nav id="main-nav">
            <a href='index.php' class="<?php echo (!isset($_GET['page']) || $_GET['page'] == 'home') ? 'active' : ''; ?>">Início</a>
            <a href='index.php?page=sobre' class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'sobre') ? 'active' : ''; ?>">Sobre Nós</a>
            <a href='index.php?page=servicos' class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'servicos') ? 'active' : ''; ?>">Serviços</a>
            <a href='index.php?page=portfolio' class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'portfolio') ? 'active' : ''; ?>">Portfólio</a>
            <a href='index.php?page=blog' class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'blog') ? 'active' : ''; ?>">Blog</a>
            <a href='index.php?page=contato' class="<?php echo (isset($_GET['page']) && $_GET['page'] == 'contato') ? 'active' : ''; ?>">Contato</a>
        </nav>
        
        <button class="menu-toggle" id="mobile-menu-btn" aria-label="Abrir Menu">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</header>
<main>
