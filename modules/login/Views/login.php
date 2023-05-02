<main class="container ">
    <div></div>
    <div class="cards login-area">
        <section class="card">
            <h2 class="card__title">Bem-Vindo de Volta!</h2>
            <?=get_flash_message()?>
            <form action="" method="POST" class="login-form">
                <fieldset>
                    <legend class="form__title">Fazer login:</legend>
                    <div class="input-container">
                        <input name="email" id="email-login" class="input" type="email" required>
                        <label class="input-label" for="email">Email</label>
                        <?php $error = form_error("email"); ?>
                        <?php if(isset($error)): ?>
                        <span class="input-message-error">
                        <?=$error['message'];?></span>
                        <?php endif; ?>
                    </div>
                    <div class="input-container">
                        <input name="password" id="pass-login" class="input" type="password" required>
                        <label class="input-label" for="password">Senha</label>
                        <?php $error = form_error("password");?>
                        <?php if(isset($error)): ?>
                        <span class="input-message-error">
                        <?=$error['message']; ?></span>
                        <?php endif; ?>
                    </div>
                </fieldset>
                <fieldset>
                    <div>
                        <a href="">Esqueceu sua senha?</a>
                    </div>
                </fieldset>
                <fieldset></fieldset>
                <fieldset>
                    <div>
                        <button class="button" type="submit">Entrar</button>
                    </div>
                    <fieldset>
                        <div>
                            <a href="?route=register"> Não é cliente? Cadastre-se aqui!</a>
                        </div>
                    </fieldset>
                </fieldset>
            </form>
        </section>
    </div>
</main>