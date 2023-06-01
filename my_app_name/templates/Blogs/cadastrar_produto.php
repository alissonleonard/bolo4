<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
        <link
            rel="icon"
            type="image/png"
            sizes="192x192"
            href="/bolo4/my_app_name/webroot/img/favicon/android-icon-192x192.png"
        >
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="/bolo4/my_app_name/webroot/img/favicon/favicon-32x32.png"
        >
        <link
            rel="icon"
            type="image/png"
            sizes="96x96"
            href="/bolo4/my_app_name/webroot/img/favicon/favicon-96x96.png"
        >
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="/bolo4/my_app_name/webroot/img/favicon/favicon-16x16.png"
        >
        <link rel="manifest" href="/bolo4/my_app_name/img/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/bolo4/my_app_name/img/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="/bolo4/my_app_name/webroot/css/bootstrap.min.css">
        <link rel="stylesheet" href="/bolo4/my_app_name/webroot/css/bootstrap-icons.css">
        <link rel="stylesheet" href="/bolo4/my_app_name/webroot/css/style.css">


        <title>Mago dos Games :: Página Principal :: Cadastro de Produtos</title>
    </head>
    <body>
        <div class="d-flex flex-column wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark bg-danger border-bottom shadow-sm mb-3">
                <div class="container">
                    <a class="navbar-brand" href="/">
                        <b>Mago dos Games</b>
                    </a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target=".navbar-collapse"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/bolo4/my_app_name/blogs/home">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/bolo4/my_app_name/blogs/contato">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/Alisson/mago_dos_games/index.php">Cadastrar Produto</a>
                        </li>
                        </ul>
                        <div class="align-self-end">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="/cadastro.html" class="nav-link text-white">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/login.html" class="nav-link text-white">Entrar</a>
                                </li>
                                <li class="nav-item">
                                    <span class="badge rounded-pill bg-light text-danger position-absolute ms-4 mt-0" title="5 produto(s) no carrinho">
                                        <small>5</small>
                                    </span>
                                    <a href="/carrinho.html" class="nav-link text-white">
                                        <i class="bi-cart" style="font-size:24px;line-height:24px;"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <main class="flex-fill">
                <div class="container">
                    <div class="header">
                        <span>Cadastro de Produtos</span>
                        <button onclick="openModal()" id="new">Incluir</i></button>
                      </div>
                  
                      <div class="divTable">
                        <table>
                          <thead>
                            <tr>
                              <th>Produto</th>
                              <th>Estado</th>
                              <th>Valor</th>
                              <th class="acao">Editar</th>
                              <th class="acao">Excluir</th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                      </div>
                  
                      <div class="modal-container">
                        <div class="modal">
                          <form>
                            <h1>Cadastro de Produto</h1><br>
                            <label for="m-produto">Produto</label>
                            <input id="m-produto" type="text" required />
                    
                            <label for="m-estado">Estado</label>
                            <input id="m-estado" type="text" required />
                    
                            <label for="m-valor">Valor</label>
                            <input id="m-valor" type="number" required />
                            <h2> Observações </h2>
                            <ol>
                                <p>Existem algumas regras importantes a serem consideradas ao  vender um console usado. Aqui estão algumas delas:</p>
                                <li>É necessário com que o produto esteja em boas condições para venda, não permitido que o mesmo esteja danificado ou com quaisquer defeitos que impossibilite o uso.
                                </li>
                                <li>O console deve estar totalmente higienizado e com sua limpeza em dia, tanto externamente quanto internamente
                                </li>
                                <li>Não é possivel realizar a venda faltando algum componente do console, como controles, cabos ou peças internas
                                </li>
                             <br>
                            <h2>Caso esteja cumprindo todas essas especificações, pode prosseguir!</h2>

                            </ol>
                            <button id="btnSalvar">Salvar</button>
                            <button>
                            <a class="nav-link text-white" href="/index.html">Voltar a Página Principal</a>
                        </button>
                          </form>
                        </div>
                      </div>
                </main>
                <footer class="border-top text-muted bg-light">
                    <div class="container">
                        <div class="row py-3">
                            <div class="col-12 col-md-4 text-center">
                                &copy; 2023 - Mago dos Games Ltda ME
                                <br>
                                Rua Benjamin Knobel, 33, Marília/SP
                                <br>
                                CPNJ 99.999.999/0001-99
                            </div>
                            <div class="col-12 col-md-4 text-center">
                                <a href="/privacidade.html" class="text-decoration-none text-dark">
                                    Política de Privacidade
                                </a>
                                <br>
                                <a href="/termos.html" class="text-decoration-none text-dark">
                                    Termos de Uso
                                </a>
                                <br>
                                <a href="/quemsomos.html" class="text-decoration-none text-dark">
                                    Quem Somos
                                </a>
                                <br>
                                <a href="/trocas.html" class="text-decoration-none text-dark">
                                    Trocas e Devoluções
                                </a>
                            </div>
                            <div class="col-12 col-md-4 text-center">
                                <a href="/contato.html" class="text-decoration-none text-dark">
                                    Contato pelo Site
                                </a>
                                <br>
                                E-mail:
                                <a href="mailto:magodosgames@gmail.com" class="text-decoration-none text-dark">
                                    magodosgames@gmail.com
                                </a>
                                <br>
                                Telefone:
                                <a href="phone:14998069022" class="text-decoration-none text-dark">
                                    (14) 99806-9022
                                </a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <script src="/bolo4/my_app_name/webroot/js/bootstrap.bundle.min.js"></script>
            <script src="/bolo4/my_app_name/webroot/js/script.js"></script>
        </body>
    </html>