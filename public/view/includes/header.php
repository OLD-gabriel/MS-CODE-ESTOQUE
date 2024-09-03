<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title?></title>

    <link rel="shortcut icon" href="/assets/images/carts.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/bf7e05c402.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="/assets/css/styles.css" rel="stylesheet">
</head>

<body>
    <main>
        <div class="border-bottom mb-2">
            <div class="container">
                <header class="d-flex flex-wrap justify-content-center align-items-center py-3">
                    <a href="/"
                        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        <img class="me-3" src="/assets/images/logotipo.svg" width="53">
                        <span class="fs-4">MS Code - Estoque</span>
                    </a>

                    <ul class="nav nav-pills d-flex align-items-center">
                        <li class="nav-item"><a href="/app" class="nav-link active" aria-current="page">Início</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Vendas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/vendas/realizadas">Vendas realizadas</a></li>
                                <li><a class="dropdown-item" href="/nova/venda">Nova venda</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Produtos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/app">Estoque</a></li>
                                <li><a class="dropdown-item active" href="/categorias">Categorias</a></li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item"><a href="#" class="btn btn-outline-danger m-0 ms-4" aria-current="page">Sair</a></li> -->
                        <li>
                            <a data-bs-toggle="offcanvas" href="#offcanvasRight" role="button"
                                aria-controls="offcanvasRight">
                                <i class="fas fa-user-circle fa-2x" style="color: #0d6efd;"></i>
                            </a>

                        </li>
                    </ul>
                </header>
            </div>
        </div>


        <div class="offcanvas offcanvas-end" style="width: 250px;" tabindex="-1" id="offcanvasRight"
            aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header bg-dark text-white">
                <h5 id="offcanvasRightLabel" class="mb-0 align-items-center">Painel de Usuário</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column justify-content-between p-2 bg-light">
                <div class="user-info text-center mb-4">
                    <i class="fas fa-user-circle fa-4x mb-2 text-primary"></i>
                    <h6 class="mb-0"><?= $_SESSION["NOME"]; ?></h6>
                    <p class="text-muted mb-2" style="font-size: 0.875rem;"><?= $_SESSION["EMAIL"]; ?></p>
                </div>



                <div class="mt-auto">
                    <a href="/sair" class="btn btn-outline-danger w-100" aria-current="page">
                        <i class="fas fa-sign-out-alt me-2"></i>Sair
                    </a>
                </div>
            </div>
        </div>