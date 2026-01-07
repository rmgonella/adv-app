<?php include 'app/views/layouts/header.php'; ?>

<section class='hero'>
    <div class="hero-subtitle">CPS Advocacia e Consultoria</div>
    <h2>Ubi societas, ibi jus - <span>"onde há sociedade, há Direito"</span></h2>
    <a href="index.php?page=contato" class="btn-hero">Entre em Contato</a>
</section>

<section id="servicos">
    <div class="section-header" style="text-align: center; margin-bottom: 60px;">
        <span style="color: var(--primary-color); font-weight: 600; text-transform: uppercase; letter-spacing: 2px;">Nossos Serviços</span>
        <h3 style="margin-top: 10px;">Soluções Jurídicas Especializadas</h3>
    </div>
    <div class="services-grid">
        <div class="service-card">
            <i class="fas fa-balance-scale"></i>
            <h4>Direito Empresarial</h4>
            <p>Suporte jurídico abrangente para empresas de todos os tamanhos, garantindo conformidade e crescimento.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-gavel"></i>
            <h4>Litígio Civil</h4>
            <p>Representação especializada em disputas civis, protegendo seus interesses dentro e fora dos tribunais.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-user-shield"></i>
            <h4>Defesa Criminal</h4>
            <p>Estratégias de defesa dedicadas para proteger seus direitos e garantir um julgamento justo.</p>
        </div>
    </div>
</section>

<section style="background: var(--bg-light);">
    <div class="about-section" style="display: flex; align-items: center; gap: 60px; flex-wrap: wrap;">
        <div class="about-image-container" style="flex: 1; min-width: 280px; position: relative;">
            <img src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Advogado" style="width: 100%; border-radius: 5px; display: block;">
            <div style="position: absolute; bottom: -30px; right: -30px; background: var(--primary-color); padding: 40px; color: #fff; border-radius: 5px;">
                <h2 style="font-size: 48px; margin: 0;">25+</h2>
                <p style="margin: 0; font-weight: 600;">Anos de Experiência</p>
            </div>
        </div>
        <div style="flex: 1; min-width: 280px;">
            <span style="color: var(--primary-color); font-weight: 600; text-transform: uppercase;">Sobre Nosso Escritório</span>
            <h3 style="text-align: left; margin: 20px 0;">Lutamos pela sua Justiça com Experiência</h3>
            <p>A CPS ADVOCACIA é um escritório de advocacia de elite dedicado a fornecer serviços jurídicos excepcionais. Nossa equipe de advogados experientes traz um vasto conhecimento e um compromisso com a excelência em cada caso que atendemos.</p>
            <div style="margin-top: 30px;">
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                    <i class="fas fa-check-circle" style="color: var(--primary-color);"></i>
                    <span style="font-weight: 600;">Garantia de Dedicação Total</span>
                </div>
                <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 15px;">
                    <i class="fas fa-check-circle" style="color: var(--primary-color);"></i>
                    <span style="font-weight: 600;">Avaliação Gratuita de Casos</span>
                </div>
                <div style="display: flex; align-items: center; gap: 15px;">
                    <i class="fas fa-check-circle" style="color: var(--primary-color);"></i>
                    <span style="font-weight: 600;">Aconselhamento Jurídico Especializado</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'app/views/layouts/footer.php'; ?>
