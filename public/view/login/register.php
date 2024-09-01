<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MS Code - Estoque 2024</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/assets/css/styles.css" rel="stylesheet">
    <link href="/assets/css/register.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <main class="form-signin text-center p-4 rounded shadow-lg bg-white">
        <form action="/register/autenticar" method="POST">
            <div class="mb-4">
                <img class="mb-3" src="/assets/images/logotipo.svg" width="64" height="64" alt="Logotipo">
                <h1 class="h4 fw-bold">MS Code - Estoque</h1>
            </div>

            <div class="form-floating mb-2">
                <input type="text" name="username" class="form-control" id="username" placeholder="Nome de Usuário" required>
                <label for="username">Nome de Usuário</label>
            </div>

            <div class="form-floating mb-2">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                <label for="email">Email</label>
            </div>

            <div class="form-floating mb-2">
                <input type="password" name="password" class="form-control" id="senha" placeholder="Senha" required>
                <label for="senha">Senha</label>
            </div>

            <div class="form-floating mb-4">
                <input type="password" name="confirm_password" class="form-control" id="confirm_senha" placeholder="Confirmar Senha" required>
                <label for="confirm_senha">Confirmar Senha</label>
            </div>

            <button class="btn btn-primary w-100 py-2 mb-3" type="submit">Acessar</button>
            <a href="/login" class="btn btn-outline-secondary w-100">Já tem sua conta? faça login.</a>
            <p class="mt-4 mb-3 text-muted">&copy; 2017–2024</p>
        </form>
    </main>

    <?php if(isset($_SESSION["SenhaIncorreta"])){ ?>
    <div class="modal fade" id="SenhaIncorreta" tabindex="-1" aria-labelledby="SenhaIncorretaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="SenhaIncorretaLabel">SENHA INCORRETA!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>As senhas digitadas não coincidem. Por favor, verifique se ambas as senhas são idênticas e tente novamente.</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        var senhaModal = new bootstrap.Modal(document.getElementById('SenhaIncorreta'));
        senhaModal.show();
    </script>
    <?php unset($_SESSION["SenhaIncorreta"]); } ?>


    <script src="/assets/js/PopUps.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
