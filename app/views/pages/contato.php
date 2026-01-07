<?php include 'app/views/layouts/header.php'; ?>

<section style="background: var(--primary-color); color: #fff; padding: 60px 10%; text-align: center;">
    <h2 style="font-size: 48px; margin-bottom: 10px; color: #fff;">Contato</h2>
    <p style="color: var(--light-blue);">Estamos prontos para ouvir você e ajudar no seu caso.</p>
</section>

<section>
    <div style="display: flex; gap: 60px; flex-wrap: wrap;">
        <div style="flex: 1; min-width: 300px;">
            <h3 style="text-align: left; margin-bottom: 30px;">Envie uma Mensagem</h3>
            <form style="display: flex; flex-direction: column; gap: 20px;">
                <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                    <input type="text" placeholder="Seu Nome" style="flex: 1; padding: 15px; border: 1px solid #ddd; border-radius: 5px; outline: none;">
                    <input type="email" placeholder="Seu E-mail" style="flex: 1; padding: 15px; border: 1px solid #ddd; border-radius: 5px; outline: none;">
                </div>
                <input type="text" placeholder="Assunto" style="padding: 15px; border: 1px solid #ddd; border-radius: 5px; outline: none;">
                <textarea placeholder="Sua Mensagem" rows="6" style="padding: 15px; border: 1px solid #ddd; border-radius: 5px; outline: none; resize: none;"></textarea>
                <button type="submit" class="btn-hero" style="background: var(--primary-color); color: #fff; border-color: var(--primary-color); cursor: pointer; width: 100%;">Enviar Mensagem</button>
            </form>
        </div>
        <div style="flex: 1; min-width: 300px;">
            <h3 style="text-align: left; margin-bottom: 30px;">Informações de Contato</h3>
            <div style="margin-bottom: 40px;">
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                    <div style="width: 50px; height: 50px; background: var(--light-blue); color: var(--primary-color); display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 20px;">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h5 style="font-size: 18px; margin-bottom: 5px;">Endereço</h5>
                        <p style="color: #666;">Av. Paulista, 1000, São Paulo - SP</p>
                    </div>
                </div>
                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 25px;">
                    <div style="width: 50px; height: 50px; background: var(--light-blue); color: var(--primary-color); display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 20px;">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <h5 style="font-size: 18px; margin-bottom: 5px;">Telefone</h5>
                        <p style="color: #666;">(11) 99999-9999</p>
                    </div>
                </div>
                <div style="display: flex; align-items: center; gap: 20px;">
                    <div style="width: 50px; height: 50px; background: var(--light-blue); color: var(--primary-color); display: flex; align-items: center; justify-content: center; border-radius: 50%; font-size: 20px;">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h5 style="font-size: 18px; margin-bottom: 5px;">E-mail</h5>
                        <p style="color: #666;">contato@cpsadvocacia.com.br</p>
                    </div>
                </div>
            </div>
            <div style="width: 100%; height: 250px; background: #eee; border-radius: 5px; display: flex; align-items: center; justify-content: center;">
                <p style="color: #999;"><i class="fas fa-map" style="margin-right: 10px;"></i> Mapa será carregado aqui</p>
            </div>
        </div>
    </div>
</section>

<?php include 'app/views/layouts/footer.php'; ?>
