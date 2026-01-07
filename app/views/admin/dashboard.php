<?php include 'app/views/layouts/header.php'; ?>

<div class="admin-container">
    <aside class="sidebar">
        <h4 style="margin-bottom: 20px; color: var(--primary-color);">Painel Admin</h4>
        <nav style="display: flex; flex-direction: column; gap: 10px;">
            <a href="?page=admin" style="color: var(--secondary-color); text-decoration: none; font-weight: bold;"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
            <a href="#" style="color: #666; text-decoration: none;"><i class="fas fa-envelope"></i> Mensagens</a>
            <a href="#" style="color: #666; text-decoration: none;"><i class="fas fa-users"></i> Clientes</a>
            <a href="#" style="color: #666; text-decoration: none;"><i class="fas fa-cog"></i> Configurações</a>
            <hr>
            <a href="?page=logout" style="color: #d9534f; text-decoration: none;"><i class="fas fa-sign-out-alt"></i> Sair</a>
        </nav>
    </aside>
    
    <main class="main-content">
        <h3>Bem-vindo ao Painel de Controle</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">
            <div style="background: #fff; padding: 20px; border-radius: 8px; border-left: 4px solid var(--primary-color); box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                <p style="color: #888; font-size: 12px; text-transform: uppercase;">Novas Mensagens</p>
                <h2 style="margin: 10px 0;">12</h2>
            </div>
            <div style="background: #fff; padding: 20px; border-radius: 8px; border-left: 4px solid #28a745; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                <p style="color: #888; font-size: 12px; text-transform: uppercase;">Casos Ativos</p>
                <h2 style="margin: 10px 0;">45</h2>
            </div>
            <div style="background: #fff; padding: 20px; border-radius: 8px; border-left: 4px solid #17a2b8; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
                <p style="color: #888; font-size: 12px; text-transform: uppercase;">Consultas Hoje</p>
                <h2 style="margin: 10px 0;">08</h2>
            </div>
        </div>
        
        <div style="margin-top: 40px; background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
            <h4>Últimas Mensagens de Contato</h4>
            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                <thead>
                    <tr style="text-align: left; border-bottom: 2px solid #eee;">
                        <th style="padding: 10px;">Nome</th>
                        <th style="padding: 10px;">Assunto</th>
                        <th style="padding: 10px;">Data</th>
                        <th style="padding: 10px;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px;">João Silva</td>
                        <td style="padding: 10px;">Dúvida sobre contrato</td>
                        <td style="padding: 10px;">29/12/2025</td>
                        <td style="padding: 10px;"><button style="padding: 5px 10px; font-size: 12px; width: auto;">Ver</button></td>
                    </tr>
                    <tr style="border-bottom: 1px solid #eee;">
                        <td style="padding: 10px;">Maria Oliveira</td>
                        <td style="padding: 10px;">Divórcio consensual</td>
                        <td style="padding: 10px;">28/12/2025</td>
                        <td style="padding: 10px;"><button style="padding: 5px 10px; font-size: 12px; width: auto;">Ver</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>

<?php include 'app/views/layouts/footer.php'; ?>
