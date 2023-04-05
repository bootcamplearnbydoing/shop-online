<main class="container cards">
    <section class="card">
        <h2 class="card__title">Complete o seu cadastro!</h2>
        <form action="" method="POST" class="form">
            <fieldset>
                <legend class="form__title">Informações Básicas</legend>
                    <div class="input-container">
                        <input name="name" class="input" type="text">
                        <label class="input-label" for="name">Nome</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input name="surname" class="input" type="text">
                        <label class="input-label" for="surname">Sobrenome</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input name="dataNascimento" class="input" type="text">
                        <label class="input-label" for="">Data de Nascimento</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input name="email" class="input" type="email">
                        <label class="input-label" for="">Email</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input name="pass" class="input" type="password">
                        <label class="input-label" for="pass">Senha</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input name="confirmPass" class="input" type="password">
                        <label class="input-label" for="ConfirmPass">Confirmar senha</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
            </fieldset>
            <fieldset>
                <legend class="form__title">Endereço</legend>
                    <div class="input-container">
                        <input class="input" type="text">
                        <label class="input-label" for="">CEP</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input class="input" type="text">
                        <label class="input-label" for="">Logradouro</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input class="input" type="text">
                        <label class="input-label" for="">Cidade</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input class="input" type="text">
                        <label class="input-label" for="">Estado</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
            </fieldset>
            <fieldset>
                <div>
                    <a href="#">Já tem uma conta? Fazer login</a>
                </div>
            </fieldset>
            <div>
                <button class="button" type="submit">Register</button>
            </div>
        </form>
    </section>
</main>