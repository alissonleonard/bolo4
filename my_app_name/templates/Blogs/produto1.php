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
        <link rel="stylesheet" href="/bolo4/my_app_name/webroot/css/fontawesome.min.css">
        <link rel="stylesheet" href="/bolo4/my_app_name/webroot/css/solid.min.css">
        
        <link rel="stylesheet" href="/bolo4/my_app_name/webroot/css/bootstrap-icons.css">
        <link rel="stylesheet" href="/bolo4/my_app_name/webroot/css/style.css">
        <title>Mago dos Games :: Página Principal</title>
    </head>

    <body>
    <div class="d-flex flex-column wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger border-bottom shadow-sm mb-3">
            <div class="container">
                <a class="navbar-brand" href="/"><b>Mago dos Games</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target=".navbar-collapse">
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
                                <span class="badge rounded-pill bg-light text-danger position-absolute ms-4 mt-0"
                                    title="5 produto(s) no carrinho"><small>5</small></span>
                                <a href="/carrinho.html" class="nav-link text-white">
                                <i class="fa-solid fa-cart-shopping"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="flex-fill">
                <div class="container">
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <img src="/bolo4/my_app_name/webroot/img/produtos/1.jpg" class="img-thumbnail" id="imgProduto">
                            <br class="clearfix">
                            <div class="row my-3 gx-3">
                                <div class="col-3">
                                    <img src="/bolo4/my_app_name/webroot/img/produtos/1.jpg" class="img-thumbnail" onclick="trocarImagem(this)">
                                </div>
                                <div class="col-3">
                                    <img src="/bolo4/my_app_name/webroot/img/produtos/produtos_details1/02.jpg" class="img-thumbnail" onclick="trocarImagem(this)">
                                </div>
                                <div class="col-3">
                                    <img src="/bolo4/my_app_name/webroot/img/produtos/produtos_details1/03.jpg" class="img-thumbnail" onclick="trocarImagem(this)">
                                </div>
                                <div class="col-3">
                                    <img src="/bolo4/my_app_name/webroot/img/produtos/produtos_details1/04.jpg" class="img-thumbnail" onclick="trocarImagem(this)">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h1>Playstation 4</h1>
                            <p>
                                Jogos incríveis e entretenimiento sem fim. Os jogos mais incríveis estão no PS4, com 1TB de armazenamento. O console PS4 oferece excelente poder de jogabilidade, entretenimento incrível tecnologia HDR vibrante.
                            </p>
                            <p>
                                Com o console PlayStation 4, líder mundial de vendas por anos, você poderá desfrutar de horas de jogo e excelente navegabilidade para desfrutar de filmes, séries e conteúdo online.

                                Não só isso, o controle DualShock combina recursos revolucionários e sem precedentes, preservando a precisão, conforto e exatidão em cada movimento.
                                
                                Adaptado às suas necessidades
                                Salve as suas aplicações, fotos, vídeos e muito mais no disco rígido, que tem uma capacidade de 1 TB.
                                Por ter um processador de 8 núcleos e um gráfico, fornecem uma experiência dinâmica, respostas ágeis e transições suaves de imagens de alta definição.
                                Por outro lado, tem uma porta USB e saída HDMI, que permitem conectar acessórios e carregar a bateria do controle enquanto você joga.
                                
                                Você poderá reproduzir música, assistir seus filmes e séries favoritos através dos aplicativos para download.
                            </p>
                            <p>
                                <button class="btn btn-lg btn-danger mb-3 mb-xl-0 me-2">
                                    <i class="bi-cart"></i>
                                    Adicionar ao Carrinho
                                </button>
                                <button class="btn btn-lg btn-outline-danger">
                                    <i class="bi-heart"></i>
                                    Adicionar aos Favoritos
                                </button>
                            </p>
                        </div>
                    </div>
                </div>
            </main>
        

              <footer class="border-top text-muted bg-light">
                <div class="container">
                    <div class="row py-3">
                        <div class="col-12 col-md-4 text-center">
                            &copy; 2023 - Mago dos Games Ltda ME<br>
                            Rua Benjamin Knobel, 33, Marília/SP <br>
                            CPNJ 99.999.999/0001-99
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <a href="/privacidade.html" class="text-decoration-none text-dark">
                                Política de Privacidade
                            </a><br>
                            <a href="/termos.html" class="text-decoration-none text-dark">
                                Termos de Uso
                            </a><br>
                            <a href="/quemsomos.html" class="text-decoration-none text-dark">
                                Quem Somos
                            </a><br>
                            <a href="/trocas.html" class="text-decoration-none text-dark">
                                Trocas e Devoluções
                            </a>
                        </div>
                        <div class="col-12 col-md-4 text-center">
                            <a href="/contato.html" class="text-decoration-none text-dark">
                                Contato pelo Site
                            </a><br>
                            E-mail: <a href="mailto:magodosgames@gmail.com" class="text-decoration-none text-dark">
                                magodosgames@gmail.com
                            </a><br>
                            Telefone: <a href="phone:14998069022" class="text-decoration-none text-dark">
                                (14) 99806-9022
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="/bolo4/my_app_name/webroot/js/bootstrap.bundle.min.js"></script>
        <script>
function trocarImagem(el) {
    var imgProduto = document.getElementById("imgProduto");
    imgProduto.src = el.src;
}

        </script>
    </body>
    
    </html>