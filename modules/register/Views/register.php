<main class="container cards">
    <section class="card">
        <h2 class="card__title">Complete o seu cadastro!</h2>
        <?php if (isset($errors)) : ?>
            <ul>
                <?php foreach ($errors as $error) : ?>
                    <li><?=$error['message']?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <form action="" method="POST" class="form">
            <fieldset>
                <legend class="form__title">Informações Básicas</legend>
                    <div class="input-container">
                        <input name="first_name" id="firstName" class="input" type="text" placeholder="Nome" required>
                        <label class="input-label" for="firstName">Nome</label>
                        <?php $error = form_error($errors, 'first_name'); ?>
                        <?php if (isset($error)) : ?>
                            <span class="input-message-error"><?=$error['message']?></span>
                        <?php endif; ?>
                    </div>
                    <div class="input-container">
                        <input name="last_name" id="lastName" class="input" type="text" placeholder="Sobrenome" required>
                        <label class="input-label" for="lastName">Sobrenome</label>
                        <?php $error = form_error($errors, 'last_name'); ?>
                        <?php if (isset($error)) : ?>
                            <span class="input-message-error"><?=$error['message']?></span>
                        <?php endif; ?>
                    </div>
                    <div class="input-container">
                        <input name="birth_date" id="birthDate" class="input" type="text" placeholder="Data de Nascimento" required>
                        <label class="input-label" for="birthDate">Data de Nascimento</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input name="email" id="email" class="input" type="email" placeholder="Email" required>
                        <label class="input-label" for="email">Email</label>
                        <?php $error = form_error($errors, 'email'); ?>
                        <?php if (isset($error)) : ?>
                            <span class="input-message-error"><?=$error['message']?></span>
                        <?php endif; ?>
                    </div>
                    <div class="input-container">
                        <input name="password" id="pass" class="input" type="password" placeholder="Senha" required>
                        <label class="input-label" for="pass">Senha</label>
                        <?php $error = form_error($errors, 'password'); ?>
                        <?php if (isset($error)) : ?>
                            <span class="input-message-error"><?=$error['message']?></span>
                        <?php endif; ?>
                    </div>
                    <div class="input-container">
                        <input name="password_confirm" id="confirmPassword" class="input" type="password">
                        <label class="input-label" for="confirmPassword">Confirmar senha</label>
                        <?php $error = form_error($errors, 'password_confirm'); ?>
                        <?php if (isset($error)) : ?>
                            <span class="input-message-error"><?=$error['message']?></span>
                        <?php endif; ?>
                    </div>
            </fieldset>
            <fieldset>
                <legend class="form__title">Morada</legend>
                    <div class="input-container">
                        <input name="address" class="input" type="text" placeholder="Morada" required>
                        <label class="input-label" for="">Morada</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input name="city" class="input" type="text" placeholder="Cidade" required>
                        <label class="input-label" for="">Cidade</label>
                        <span class="input-message-error">Este campo não está válido!</span>
                    </div>
                    <div class="input-container">
                        <input name="postal_code" class="input" type="text" placeholder="" required>
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