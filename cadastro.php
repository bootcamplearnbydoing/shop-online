
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro | Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/asset/css/base/base.css">
    <link rel="stylesheet" href="/asset/css/cadastro.css">
    <link rel="stylesheet" href="/asset/css/componentes/cartoes.css">
</head>

<body>
    <header class="container flex flex--column cadastro-cabecalho">
        <img class="cadastro-cabecalho__logo" src="./asset/img/logoshop.jpg" alt="Logo do Shop">
        <h1 class="cadastro-cabecalho__titulo">ShopOnline</h1>
    </header>
    <main class="container cartoes">
        <section class="cartao">
            <h2 class="cartao__titulo">Complete o seu cadastro!</h2>
            <form action="" class="formulario">
            <fieldset>
                <legend class="formulario__titulo">Informações Básicas</legend>
                    <div>
                        <input class="input" type="text">
                        <label class="input-label" for="">Nome</label>
                        <span class="input-mensagem-erro">Este campo não está válido!</span>
                    </div>
                    <div>
                        <input class="input" type="text">
                        <label class="input-label" for="">Email</label>
                        <span class="input-mensagem-erro">Este campo não está válido!</span>
                    </div>
                    <div>
                        <input class="input" type="text">
                        <label class="input-label" for="">Senha</label>
                        <span class="input-mensagem-erro">Este campo não está válido!</span>
                    </div>
            </fieldset>
            <fieldset>
                <legend class="formulario__titulo">Informações Pessoais</legend>
                    <div>
                        <input class="input" type="text">
                        <label class="input-label" for="">Data de Nascimento</label>
                        <span class="input-mensagem-erro">Este campo não está válido!</span>
                    </div>
                    <div>
                        <input class="input" type="text">
                        <label class="input-label" for="">CPF</label>
                        <span class="input-mensagem-erro">Este campo não está válido!</span>
                    </div>
            </fieldset>
            <fieldset>
                <legend class="formulario__titulo">Endereço</legend>
                    <div>
                        <input class="input" type="text">
                        <label class="input-label" for="">CEP</label>
                        <span class="input-mensagem-erro">Este campo não está válido!</span>
                    </div>
                    <div>
                        <input class="input" type="text">
                        <label class="input-label" for="">Logradouro</label>
                        <span class="input-mensagem-erro">Este campo não está válido!</span>
                    </div>
                    <div>
                        <input class="input" type="text">
                        <label class="input-label" for="">Cidade</label>
                        <span class="input-mensagem-erro">Este campo não está válido!</span>
                    </div>
                    <div>
                        <input class="input" type="text">
                        <label class="input-label" for="">Estado</label>
                        <span class="input-mensagem-erro">Este campo não está válido!</span>
                    </div>
            </fieldset>
            </form>
        </section>
    </main>
</body>

</html>