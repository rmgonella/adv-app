</main>
<footer>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; margin-bottom: 60px;">
        <div>
            <img src="img/cps-logo.png" alt="CPS ADVOCACIA" style="height: 50px; filter: brightness(0) invert(1); margin-bottom: 20px;">
            <p>Excelência jurídica com foco em resultados e na defesa intransigente dos direitos de nossos clientes.</p>
        </div>
        <div>
            <h4 style="margin-bottom: 20px; font-size: 18px;">Links Rápidos</h4>
            <ul style="list-style: none;">
                <li style="margin-bottom: 10px;"><a href="index.php" style="color: rgba(255,255,255,0.7); text-decoration: none;">Início</a></li>
                <li style="margin-bottom: 10px;"><a href="index.php?page=sobre" style="color: rgba(255,255,255,0.7); text-decoration: none;">Sobre Nós</a></li>
                <li style="margin-bottom: 10px;"><a href="index.php?page=servicos" style="color: rgba(255,255,255,0.7); text-decoration: none;">Serviços</a></li>
                <li style="margin-bottom: 10px;"><a href="index.php?page=contato" style="color: rgba(255,255,255,0.7); text-decoration: none;">Contato</a></li>
            </ul>
        </div>
        <div>
            <h4 style="margin-bottom: 20px; font-size: 18px;">Contato</h4>
            <p style="margin-bottom: 10px;"><i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i> Rua Peru, nº 1536, salas 02 e 03, Cond. Silva & Assunção, Bairro América, Barretos/SP, CEP 14783-186 </p>
            <p style="margin-bottom: 10px;"><i class="fas fa-phone" style="margin-right: 10px;"></i> 17 3043 1687</p>
			<p style="margin-bottom: 10px;"><i class="fab fa-whatsapp" style="margin-right: 10px;"></i> 17 99113 4808</p>
            <p><i class="fas fa-envelope" style="margin-right: 10px;"></i> cicero@cpsadvocacia.com.br</p>
        </div>
    </div>
    <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 30px; text-align: center;">
        <p>&copy; <?php echo date("Y"); ?> CPS ADVOCACIA. Todos os direitos reservados. desenvolvido por Techinnovationbr</p>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const menuBtn = document.getElementById('mobile-menu-btn');
    const nav = document.getElementById('main-nav');
    const header = document.getElementById('main-header');
    const body = document.body;
    const navLinks = nav ? nav.querySelectorAll('a') : [];

    function closeMenu() {
        if (nav && menuBtn) {
            nav.classList.remove('active');
            menuBtn.querySelector('i').classList.replace('fa-times', 'fa-bars');
            body.style.overflow = 'auto';
        }
    }

    if (menuBtn && nav) {
        menuBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            nav.classList.toggle('active');
            const icon = menuBtn.querySelector('i');
            if (nav.classList.contains('active')) {
                icon.classList.replace('fa-bars', 'fa-times');
                body.style.overflow = 'hidden';
            } else {
                icon.classList.replace('fa-times', 'fa-bars');
                body.style.overflow = 'auto';
            }
        });
    }

    // Fechar menu ao clicar em um link
    navLinks.forEach(link => {
        link.addEventListener('click', closeMenu);
    });

    // Fechar menu ao clicar fora
    document.addEventListener('click', function(e) {
        if (nav && nav.classList.contains('active') && !nav.contains(e.target) && e.target !== menuBtn) {
            closeMenu();
        }
    });

    // Efeito de scroll
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});
</script>
</body>
</html>
