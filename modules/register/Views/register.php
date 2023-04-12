<main class="container cards">
    <section class="card">
        <h2 class="card__title">Complete o seu cadastro <?php var_dump($errors); ?>!</h2>
        <form action="" method="POST" class="form">
            <fieldset>
                <legend class="form__title">Informações Básicas</legend>
                    <div class="input-container">
                        <input name="first_name" id="firstName" class="input" type="text">
                        <label class="input-label" for="firstName">Nome</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input name="last_name" id="lastName" class="input" type="text">
                        <label class="input-label" for="lastName">Sobrenome</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input name="birth_date" id="birthDate" class="input" type="text">
                        <label class="input-label" for="birthDate">Data de Nascimento</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input name="email" id="email" class="input" type="email">
                        <label class="input-label" for="email">Email</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input name="password" id="pass" class="input" type="password">
                        <label class="input-label" for="pass">Senha</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input name="password_confirm" id="confirmPassword" class="input" type="password">
                        <label class="input-label" for="confirmPassword">Confirmar senha</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
            </fieldset>
            <fieldset>
                <legend class="form__title">Endereço</legend>
                    <div class="input-container">
                        <input name="address" class="input" type="text">
                        <label class="input-label" for="">Morada</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input name="city" class="input" type="text">
                        <label class="input-label" for="">Cidade</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input name="postal_code" class="input" type="text">
                        <label class="input-label" for="">Código Postal</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
            </fieldset>
            <fieldset>
                <div>
                    <a href="?route=login">Já tem uma conta? Fazer login</a>
                </div>
            </fieldset>
            <div>
                <button class="button" type="submit">Register</button>
            </div>
        </form>
    </section>
</main>