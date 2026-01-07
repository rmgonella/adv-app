<?php include 'app/views/layouts/header.php'; ?>

<section style="background: var(--primary-color); color: #fff; padding: 60px 10%; text-align: center;">
    <h2 style="font-size: 48px; margin-bottom: 10px; color: #fff;">Blog Jurídico</h2>
    <p style="color: var(--light-blue);">Informação de qualidade e atualizações sobre o mundo do direito.</p>
</section>

<section>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 40px;">
        <article style="background: #fff; border: 1px solid #eee; border-radius: 5px; overflow: hidden; transition: 0.3s;">
            <img src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Post 1" style="width: 100%; height: 250px; object-fit: cover;">
            <div style="padding: 30px;">
                <span style="color: var(--primary-color); font-weight: 600; font-size: 12px; text-transform: uppercase;">Direito Civil</span>
                <h4 style="margin: 15px 0; font-size: 20px;">As novas regras para o divórcio extrajudicial em 2024</h4>
                <p style="font-size: 14px; color: #666; margin-bottom: 20px;">Entenda o que mudou e como o processo ficou mais ágil para casais sem filhos menores...</p>
                <a href="#" style="color: var(--primary-color); font-weight: 700; text-decoration: none; font-size: 14px;">Ler Mais <i class="fas fa-arrow-right" style="margin-left: 5px;"></i></a>
            </div>
        </article>
        <article style="background: #fff; border: 1px solid #eee; border-radius: 5px; overflow: hidden; transition: 0.3s;">
            <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Post 2" style="width: 100%; height: 250px; object-fit: cover;">
            <div style="padding: 30px;">
                <span style="color: var(--primary-color); font-weight: 600; font-size: 12px; text-transform: uppercase;">Direito Empresarial</span>
                <h4 style="margin: 15px 0; font-size: 20px;">LGPD: Como adequar sua pequena empresa de forma simples</h4>
                <p style="font-size: 14px; color: #666; margin-bottom: 20px;">A proteção de dados não é apenas para gigantes. Veja os passos essenciais para estar em conformidade...</p>
                <a href="#" style="color: var(--primary-color); font-weight: 700; text-decoration: none; font-size: 14px;">Ler Mais <i class="fas fa-arrow-right" style="margin-left: 5px;"></i></a>
            </div>
        </article>
        <article style="background: #fff; border: 1px solid #eee; border-radius: 5px; overflow: hidden; transition: 0.3s;">
            <img src="https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Post 3" style="width: 100%; height: 250px; object-fit: cover;">
            <div style="padding: 30px;">
                <span style="color: var(--primary-color); font-weight: 600; font-size: 12px; text-transform: uppercase;">Direito do Trabalho</span>
                <h4 style="margin: 15px 0; font-size: 20px;">Home Office: Direitos e deveres de empregados e empresas</h4>
                <p style="font-size: 14px; color: #666; margin-bottom: 20px;">O trabalho remoto veio para ficar. Saiba o que a legislação diz sobre equipamentos e jornada...</p>
                <a href="#" style="color: var(--primary-color); font-weight: 700; text-decoration: none; font-size: 14px;">Ler Mais <i class="fas fa-arrow-right" style="margin-left: 5px;"></i></a>
            </div>
        </article>
    </div>
</section>

<?php include 'app/views/layouts/footer.php'; ?>
