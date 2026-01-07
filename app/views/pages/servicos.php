<?php include 'app/views/layouts/header.php'; ?>

<section style="background: var(--primary-color); color: #fff; padding: 60px 10%; text-align: center;">
    <h2 style="font-size: 48px; margin-bottom: 10px; color: #fff;">Nossos Serviços</h2>
    <p style="color: var(--light-blue);">Soluções jurídicas completas para você e sua empresa.</p>
</section>

<section>
    <div class="services-grid">
        <div class="service-card">
            <i class="fas fa-building"></i>
            <h4>Direito Empresarial</h4>
            <p>Consultoria e assessoria para empresas, contratos, fusões e aquisições, e conformidade legal.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-users"></i>
            <h4>Direito de Família</h4>
            <p>Divórcios, guarda de filhos, inventários e planejamento sucessório com sensibilidade e técnica.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-briefcase"></i>
            <h4>Direito do Trabalho</h4>
            <p>Defesa dos direitos trabalhistas, tanto para empregados quanto para empregadores.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-gavel"></i>
            <h4>Direito Civil</h4>
            <p>Responsabilidade civil, cobranças, contratos e disputas de propriedade.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-user-shield"></i>
            <h4>Direito Criminal</h4>
            <p>Defesa criminal estratégica em todas as instâncias do judiciário.</p>
        </div>
        <div class="service-card">
            <i class="fas fa-file-invoice-dollar"></i>
            <h4>Direito Tributário</h4>
            <p>Planejamento tributário e defesa em processos administrativos e judiciais.</p>
        </div>
    </div>
</section>

<section style="background: var(--bg-light); text-align: center;">
    <h3 style="margin-bottom: 30px;">Precisa de uma consultoria personalizada?</h3>
    <p style="max-width: 700px; margin: 0 auto 40px;">Nossos especialistas estão prontos para analisar seu caso e oferecer a melhor estratégia jurídica.</p>
    <a href="index.php?page=contato" class="btn-hero" style="background: var(--primary-color); color: #fff; border-color: var(--primary-color);">Agendar Consulta</a>
</section>

<?php include 'app/views/layouts/footer.php'; ?>
