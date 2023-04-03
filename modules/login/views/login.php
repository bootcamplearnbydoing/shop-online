<form class="login-form" method="post" action=""> <!-- redirecionar para controlador que verifica login-->
        <div class="login-itens">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email <abbr
                        title="campo obrigatório">*</abbr></label>
                <input type="email" class="form-control" value="email" id="exampleInputEmail1"
                    aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha<abbr title="campo obrigatório">*</abbr></label>
                <input type="password" class="form-control" value="password" required>
            </div>
            <div class="login-links">
                <a href="">Esqueceu sua senha?</a>
                <a href=""> Não é cliente? Cadastre-se aqui!</a>
            </div>
            <div class="login-button">
                <button type="submit" class="btn btn-primary button">Entrar</button>
            </div>
        </div>
    </form> 