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
                                    <i class="bi bi-cart" style="font-size:24px;line-height:24px;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

              <main class="flex-fill">
                <div class="container">
                    <div id="carouselMain" class="carousel slide carousel-dark" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="3000">
                                
                                <img src="/bolo4/my_app_name/webroot/img/slides/slide01.jpg" class="d-none d-md-block w-100" alt="">
                                <img src="/bolo4/my_app_name/webroot/img/slides/slide01.jpg" class="d-block d-md-none  w-100" alt="">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="/bolo4/my_app_name/webroot/img/slides/slide01small.jpg" class="d-none d-md-block w-100" alt="">
                                <img src="/bolo4/my_app_name/webroot/img/slides/slide01small.jpg" class="d-block d-md-none  w-100" alt="">
                            </div>
                            <div class="carousel-item" data-bs-interval="3000">
                                <img src="/bolo4/my_app_name/webroot/img/slides/slide002small.jpg" class="d-none d-md-block w-100" alt="">
                                <img src="/bolo4/my_app_name/webroot/img/slides/slide002small.jpg" class="d-block d-md-none  w-100" alt="">
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="visually-hidden">Próximo</span>
                        </button>
                    </div>
                    <hr class="mt-3">
                </div>
        
                <main class="flex-fill">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-5">
                                <form class="justify-content-center justify-content-md-start mb-3 mb-md-0">
                                    <div class="input-group input-group-sm">
                                        <input type="text" class="form-control" placeholder="Digite aqui o que procura">
                                        <button class="btn btn-danger">Buscar</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 col-md-7">
                                <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
                                    <form class="d-inline-block">
                                        <select class="form-select form-select-sm">
                                            <option>Ordenar pelo nome</option>
                                            <option>Ordenar pelo menor preço</option>
                                            <option>Ordenar pelo maior preço</option>
                                        </select>
                                    </form>
                                    <nav class="d-inline-block me-3">
                                        <ul class="pagination pagination-sm my-0">
                                            <li class="page-item">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">6</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
        
                        <hr mt-3>
        
                        <div class="row g-3">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                <div class="card text-center bg-light">
                                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                                        <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                                    </a>
                                    <a href="/bolo4/my_app_name/blogs/produto1">
                                        <img src="/bolo4/my_app_name/webroot/img/produtos/1.jpg" class="card-img-top">
                                    </a>
                                    <div class="card-header">
                                        R$ 2,300.00
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Playstation 4 Slim</h5>
                                        <p class="card-text truncar-3l">
                                            Com seu console PlayStation 4 você terá entretenimento garantido todos os dias. Sua tecnologia foi criada para colocar novos desafios para jogadores novatos e especialistas.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                            Adicionar ao Carrinho
                                        </a>
                                        <small class="text-success">5 em estoque</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                <div class="card text-center bg-light">
                                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                                        <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                                    </a>
                                    <a href="/bolo4/my_app_name/blogs/produto2">
                                        <img src="/bolo4/my_app_name/webroot/img/produtos/2.jpg" class="card-img-top">
                                    </a>
                                    <div class="card-header">
                                        R$ 4,699.00
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">PlayStation 5</h5>
                                        <p class="card-text truncar-3l">
                                            Com seu console PlayStation 5 você terá entretenimento garantido todos os dias. Sua tecnologia foi criada para colocar novos desafios para jogadores novatos e especialistas.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                            Adicionar ao Carrinho
                                        </a>
                                        <small class="text-success">12 em estoque</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                <div class="card text-center bg-light">
                                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                                        <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                                    </a>
                                    <a href="/produto3.html">
                                        <img src="/bolo4/my_app_name/webroot/img/produtos/3.jpg" class="card-img-top">
                                    </a>
                                    <div class="card-header">
                                        R$ 700,00
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">XBOX 360</h5>
                                        <p class="card-text truncar-3l">
                                            Com seu console Xbox 360 você terá entretenimento garantido todos os dias. Sua tecnologia foi criada para colocar novos desafios para jogadores novatos e especialistas.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-light disabled mt-2 d-block">
                                            <small>Reabastecendo Estoque</small>
                                        </a>
                                        <small class="text-danger">
                                            <b>Produto Esgotado</b>
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                <div class="card text-center bg-light">
                                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                                        <i class="bi-suit-heart-fill" style="font-size: 24px; line-height: 24px;"></i>
                                    </a>
                                    <a href="/produto4.html">
                                        <img src="/bolo4/my_app_name/webroot/img/produtos/4.jpg" class="card-img-top">
                                    </a>
                                    <div class="card-header">
                                        R$ 1,956.00
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">XBOX ONE S</h5>
                                        <p class="card-text truncar-3l">
                                            Com seu console Xbox One você terá entretenimento garantido todos os dias. Sua tecnologia foi criada para colocar novos desafios para jogadores novatos e especialistas.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                            Adicionar ao Carrinho
                                        </a>
                                        <small class="text-success">8 em estoque</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                <div class="card text-center bg-light">
                                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                                        <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                                    </a>
                                    <a href="/produto5.html">
                                        <img src="/bolo4/my_app_name/webroot/img/produtos/5.jpg" class="card-img-top">
                                    </a>
                                    <div class="card-header">
                                        R$ 4,599.00
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Xbox Series X</h5>
                                        <p class="card-text truncar-3l">
                                            Com seu console Xbox Series X você terá entretenimento garantido todos os dias. Sua tecnologia foi criada para colocar novos desafios para jogadores novatos e especialistas.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                            Adicionar ao Carrinho
                                        </a>
                                        <small class="text-success">12 em estoque</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                <div class="card text-center bg-light">
                                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                                        <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                                    </a>
                                    <a href="/produto6.html">
                                        <img src="/bolo4/my_app_name/webroot/img/produtos/6.jpg" class="card-img-top">
                                    </a>
                                    <div class="card-header">
                                        R$ 500,00
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Playstation 2 Slim</h5>
                                        <p class="card-text truncar-3l">
                                            Com seu console PlayStation 2 você terá entretenimento garantido todos os dias. Sua tecnologia foi criada para colocar novos desafios para jogadores novatos e especialistas.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                            Adicionar ao Carrinho
                                        </a>
                                        <small class="text-success">6 em estoque</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                <div class="card text-center bg-light">
                                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                                        <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                                    </a>
                                    <a href="/produto7.html">
                                        <img src="/bolo4/my_app_name/webroot/img/produtos/7.jpg" class="card-img-top">
                                    </a>
                                    <div class="card-header">
                                        R$ 400,00
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Playstation 1</h5>
                                        <p class="card-text truncar-3l">
                                            Com seu console PlayStation você terá entretenimento garantido todos os dias. Sua tecnologia foi criada para colocar novos desafios para jogadores novatos e especialistas.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                            Adicionar ao Carrinho
                                        </a>
                                        <small class="text-success">32 em estoque</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                <div class="card text-center bg-light">
                                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                                        <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                                    </a>
                                    <a href="/produto8.html">
                                        <img src="/bolo4/my_app_name/webroot/img/produtos/8.jpg" class="card-img-top">
                                    </a>
                                    <div class="card-header">
                                        R$ 1,100,00
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Xbox Classic</h5>
                                        <p class="card-text truncar-3l">
                                            Com seu console Xbox você terá entretenimento garantido todos os dias. Sua tecnologia foi criada para colocar novos desafios para jogadores novatos e especialistas.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                            Adicionar ao Carrinho
                                        </a>
                                        <small class="text-success">2 em estoque</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                <div class="card text-center bg-light">
                                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                                        <i class="bi-suit-heart-fill" style="font-size: 24px; line-height: 24px;"></i>
                                    </a>
                                    <a href="/produto9.html">
                                        <img src="/bolo4/my_app_name/webroot/img/produtos/9.jpg" class="card-img-top">
                                    </a>
                                    <div class="card-header">
                                        R$ 650,00
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Nintendo 64</h5>
                                        <p class="card-text truncar-3l">
                                            Com seu console Nintendo 64 você terá entretenimento garantido todos os dias. Sua tecnologia foi criada para colocar novos desafios para jogadores novatos e especialistas.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                            Adicionar ao Carrinho
                                        </a>
                                        <small class="text-success">3 em estoque</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                <div class="card text-center bg-light">
                                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                                        <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                                    </a>
                                    <a href="/produto10.html">
                                        <img src="/bolo4/my_app_name/webroot/img/produtos/10.jpg" class="card-img-top">
                                    </a>
                                    <div class="card-header">
                                        R$ 2,560,00
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Nintendo Switch</h5>
                                        <p class="card-text truncar-3l">
                                        Com seu console Switch você terá entretenimento garantido todos os dias. Sua tecnologia foi criada para colocar novos desafios para jogadores novatos e especialistas.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                            Adicionar ao Carrinho
                                        </a>
                                        <small class="text-success">10 em estoque</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                <div class="card text-center bg-light">
                                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                                        <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                                    </a>
                                    <a href="/produto11.html">
                                        <img src="/bolo4/my_app_name/webroot/img/produtos/11.jpg" class="card-img-top">
                                    </a>
                                    <div class="card-header">
                                        R$ 694,00
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Nintendo Wii</h5>
                                        <p class="card-text truncar-3l">
                                            Com seu console Wii você terá entretenimento garantido todos os dias. Sua tecnologia foi criada para colocar novos desafios para jogadores novatos e especialistas.

                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                            Adicionar ao Carrinho
                                        </a>
                                        <small class="text-success">8 em estoque</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                                <div class="card text-center bg-light">
                                    <a href="#" class="position-absolute end-0 p-2 text-danger">
                                        <i class="bi-suit-heart" style="font-size: 24px; line-height: 24px;"></i>
                                    </a>
                                    <a href="/produto12.html">
                                        <img src="/bolo4/my_app_name/webroot/img/produtos/12.jpg" class="card-img-top">
                                    </a>
                                    <div class="card-header">
                                        R$ 1,037.00
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Playstation 3</h5>
                                        <p class="card-text truncar-3l">
                                            Com seu console PlayStation 3 você terá entretenimento garantido todos os dias. Sua tecnologia foi criada para colocar novos desafios para jogadores novatos e especialistas.
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="carrinho.html" class="btn btn-danger mt-2 d-block">
                                            Adicionar ao Carrinho
                                        </a>
                                        <small class="text-success">5 em estoque</small>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <hr class="mt-3">
        
                        <div class="row pb-3">
                            <div class="col-12">
                                <div class="d-flex flex-row-reverse justify-content-center justify-content-md-start">
                                    <form class="d-inline-block">
                                        <select class="form-select form-select-sm">
                                            <option>Ordenar pelo nome</option>
                                            <option>Ordenar pelo menor preço</option>
                                            <option>Ordenar pelo maior preço</option>
                                        </select>
                                    </form>
                                    <nav class="d-inline-block me-3">
                                        <ul class="pagination pagination-sm my-0">
                                            <li class="page-item">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">5</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">6</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
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
    </body>
    
    </html>