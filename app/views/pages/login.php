<?php include 'app/views/layouts/header.php'; ?>

<section style="background: var(--bg-light); min-height: 70vh; display: flex; align-items: center; justify-content: center;">
    <div style="background: #fff; padding: 40px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); width: 100%; max-width: 400px;">
        <h3 style="margin-bottom: 30px;">Acesso Restrito</h3>
        <form method='post' style="display: flex; flex-direction: column; gap: 15px;">
            <input type='email' name="email" placeholder='E-mail de Acesso' required style="grid-column: span 2;">
            <input type='password' name="password" placeholder='Senha' required style="grid-column: span 2;">
            <button type="submit" style="grid-column: span 2;">Entrar no Painel</button>
        </form>
        <p style="text-align: center; margin-top: 20px; font-size: 14px;"><a href="?" style="color: var(--primary-color); text-decoration: none;">Voltar para o site</a></p>
    </div>
</section>

<?php include 'app/views/layouts/footer.php'; ?>
