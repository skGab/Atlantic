<?php

/**
 * Template Name: Blog
 */

get_template_part('partials/header');
$home = get_stylesheet_directory_uri();

?>

<!-- ARTIGOS EM DESTAQUE -->
<section id="destaque-artigos" class="container py-5 mt-5">
    <div class="row justify-content-lg-between w-100 mx-0 mt-lg-5">
        <div class="col-lg-10 col-12">
            <h1 class="text-primary d-lg-block d-none fw-normal text-uppercase mb-4">Blog</h1>
            <h1 class="text-primary d-lg-none d-block fw-normal text-uppercase display-4 mb-3">Blog</h1>
        </div>
        <div class="col-12 d-lg-none d-flex align-items-center w-100 mb-4">
            <a href="#" class="text-secondary bg-light rounded-pill px-4 py-1 me-2">Categorias</a>
            <a href="#" class="text-secondary bg-light rounded-pill px-4 py-1 me-2">Tags</a>
        </div>

        <div class="col-lg-5 col-12 mb-4">
            <div class="card bg-light w-100 rounded-0 border-0">
                <div class="position-relative">
                    <img src="<?= $home; ?>/assets/images/img-post1.jpg" class="card-img-top rounded-0" alt="Capa do Post">
                    <div class="info-post">
                        <a href="/tags" class="small text-secondary bg-secondary text-light fw-light rounded-pill px-3 py-1 me-2">Nome da tag</a>
                        <time datetime="2021-12-13" class="small text-secondary bg-light rounded-pill px-3 py-1 me-2">13 de dez. 2021</time>
                    </div>
                </div>
                <div class="box1"></div>
                <div class="card-body px-4 pb-4">
                    <h2 class="h5 card-title text-secondary">Portugal, um dos países queridinhos para congressos e convenções</h2>
                    <p class="card-text small text-primary">
                        De acordo com o relatório da Associação Internacional de Congressos...
                    </p>
                    <a href="/post" class="text-secondary d-flex w-100 align-items-center">
                        Ler mais
                        <span class="material-symbols-outlined ms-3" style="font-size: 30px;">
                            arrow_right_alt
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-5 col-12 d-flex flex-column mb-lg-0 mb-4">
            <div class="card bg-light w-100 rounded-0 border-0 position-relative mb-lg-5 mb-4">
                <div class="row g-0">
                    <div class="col-6">
                        <img src="<?= $home; ?>/assets/images/img-post2.jpg" class="img-cover rounded-0" alt="Capa do Post" style="height: 198px !important;">
                    </div>
                    <div class="col-6">
                        <div class="card-body">
                            <h2 class="h5 card-title text-secondary mb-0 mt-lg-2">Atlantic Connection</h2>
                            <time datetime="2021-12-13" class="card-text small text-primary">13 de dez. 2021</time>
                            <a href="/post" class="text-secondary d-flex w-100 align-items-center mt-lg-5 mt-2 pt-lg-3">
                                Ler mais
                                <span class="material-symbols-outlined ms-1" style="font-size: 30px;">
                                    arrow_right_alt
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box2"></div>
            </div>

            <div class="card bg-light w-100 rounded-0 border-0 position-relative mb-lg-3">
                <div class="row g-0">
                    <div class="col-6">
                        <img src="<?= $home; ?>/assets/images/img-post2.jpg" class="d-block w-100 h-100 rounded-0" alt="Capa do Post" style="height: 198px !important;">
                    </div>
                    <div class="col-6">
                        <div class="card-body">
                            <h2 class="h5 card-title text-secondary mb-0 mt-lg-2">Atlantic Connection</h2>
                            <time datetime="2021-12-13" class="card-text small text-primary">13 de dez. 2021</time>
                            <a href="/post" class="text-secondary d-flex w-100 align-items-center mt-lg-5 mt-2 pt-lg-3">
                                Ler mais
                                <span class="material-symbols-outlined ms-1" style="font-size: 30px;">
                                    arrow_right_alt
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box2"></div>
            </div>
        </div>

        <div class="col-2 d-lg-inline d-none pb-4 px-0">
            <div class="card bg-light w-100 h-100 align-items-strech rounded-0 border-0 position-relative">
                <div class="row flex-column g-0">
                    <div class="col-12">
                        <img src="<?= $home; ?>/assets/images/img-post2.jpg" class="d-block w-100 h-100 rounded-0" alt="Capa do Post">
                    </div>
                    <div class="col-12">
                        <div class="card-body">
                            <h2 class="h5 card-title text-secondary mt-3 mb-5 mb-0">
                                Conquest One – Um case Market Fit de sucesso!
                            </h2>
                            <time datetime="2021-12-13" class="card-text small text-primary pt-5 mt-4">13 de dez. 2021</time>
                            <a href="/post" class="text-secondary d-flex w-100 align-items-center mt-lg-4 mt-3">
                                Ler mais
                                <span class="material-symbols-outlined ms-1" style="font-size: 30px;">
                                    arrow_right_alt
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box1"></div>
            </div>
        </div>
    </div>
</section>

<!-- NOTÍCIAS -->
<section id="noticias" class="container py-5">
    <div class="row justify-content-lg-between w-100 mx-0">
        <div class="col-lg-10 col-12 pe-5">
            <h1 class="d-lg-none d-block text-primary fw-normal text-uppercase display-4 mb-3 pe-5">Acompanhe as noticias</h1>
            <h1 class="d-lg-block d-none text-primary fw-normal text-uppercase mb-4">Acompanhe as noticias</h1>
        </div>
        <div class="col-12 d-lg-none d-flex align-items-center w-100 mb-4 pb-2">
            <a href="#" class="me-2">
                <img src="<?= $home; ?>/assets/icons/facebook.svg" alt="ícone do Facebook">
            </a>
            <a href="#" class="me-2">
                <img src="<?= $home; ?>/assets/icons/instagram.svg" alt="Ícone do Instagram">
            </a>
            <a href="#" class="me-2">
                <img src="<?= $home; ?>/assets/icons/youtube.svg" alt="Ícone do Youtube">
            </a>
            <a href="#" class="me-2">
                <img src="<?= $home; ?>/assets/icons/twitter.svg" alt="Ícone do Twitter">
            </a>
        </div>

        <div class="col-lg-8 col-12 mb-5">
            <div class="card bg-transparent w-100 rounded-0 border-0 position-relative mb-lg-4 mb-5">
                <div class="row align-items-lg-center g-0">
                    <div class="col-6">
                        <img src="<?= $home; ?>/assets/images/img-post1.jpg" class="img-cover rounded-0" alt="Capa do Post">
                    </div>
                    <div class="col-6">
                        <div class="card-body py-0">
                            <h2 class="h5 card-title text-secondary mb-2 pb-1">
                                Portugal, um dos países queridinhos para congressos e convenções
                            </h2>
                            <p class="card-text small text-primary mb-0 py-lg-3">
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum...
                            </p>
                            <a href="/post" class="text-secondary d-flex w-100 align-items-center">
                                Ler mais
                                <span class="material-symbols-outlined ms-4" style="font-size: 40px;">
                                    arrow_right_alt
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box2"></div>
            </div>
            <div class="card bg-transparent w-100 rounded-0 border-0 position-relative mb-lg-4 mb-5">
                <div class="row align-items-lg-center g-0">
                    <div class="col-6">
                        <img src="<?= $home; ?>/assets/images/img-post1.jpg" class="img-cover rounded-0" alt="Capa do Post">
                    </div>
                    <div class="col-6">
                        <div class="card-body py-0">
                            <h2 class="h5 card-title text-secondary mb-2 pb-1">
                                Portugal, um dos países queridinhos para congressos e convenções
                            </h2>
                            <p class="card-text small text-primary mb-0 py-lg-3">
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum...
                            </p>
                            <a href="/post" class="text-secondary d-flex w-100 align-items-center">
                                Ler mais
                                <span class="material-symbols-outlined ms-4" style="font-size: 40px;">
                                    arrow_right_alt
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box2"></div>
            </div>
            <div class="card bg-transparent w-100 rounded-0 border-0 position-relative mb-lg-4 mb-5">
                <div class="row align-items-lg-center g-0">
                    <div class="col-6">
                        <img src="<?= $home; ?>/assets/images/img-post1.jpg" class="img-cover rounded-0" alt="Capa do Post">
                    </div>
                    <div class="col-6">
                        <div class="card-body py-0">
                            <h2 class="h5 card-title text-secondary mb-2 pb-1">
                                Portugal, um dos países queridinhos para congressos e convenções
                            </h2>
                            <p class="card-text small text-primary mb-0 py-lg-3">
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum...
                            </p>
                            <a href="/post" class="text-secondary d-flex w-100 align-items-center">
                                Ler mais
                                <span class="material-symbols-outlined ms-4" style="font-size: 40px;">
                                    arrow_right_alt
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box2"></div>
            </div>
            <div class="card bg-transparent w-100 rounded-0 border-0 position-relative mb-lg-4 mb-5">
                <div class="row align-items-lg-center g-0">
                    <div class="col-6">
                        <img src="<?= $home; ?>/assets/images/img-post1.jpg" class="img-cover rounded-0" alt="Capa do Post">
                    </div>
                    <div class="col-6">
                        <div class="card-body py-0">
                            <h2 class="h5 card-title text-secondary mb-2 pb-1">
                                Portugal, um dos países queridinhos para congressos e convenções
                            </h2>
                            <p class="card-text small text-primary mb-0 py-lg-3">
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum...
                            </p>
                            <a href="/post" class="text-secondary d-flex w-100 align-items-center">
                                Ler mais
                                <span class="material-symbols-outlined ms-4" style="font-size: 40px;">
                                    arrow_right_alt
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box2"></div>
            </div>
            <div class="card bg-transparent w-100 rounded-0 border-0 position-relative mb-lg-4 mb-5">
                <div class="row align-items-lg-center g-0">
                    <div class="col-6">
                        <img src="<?= $home; ?>/assets/images/img-post1.jpg" class="img-cover rounded-0" alt="Capa do Post">
                    </div>
                    <div class="col-6">
                        <div class="card-body py-0">
                            <h2 class="h5 card-title text-secondary mb-2 pb-1">
                                Portugal, um dos países queridinhos para congressos e convenções
                            </h2>
                            <p class="card-text small text-primary mb-0 py-lg-3">
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum...
                            </p>
                            <a href="/post" class="text-secondary d-flex w-100 align-items-center">
                                Ler mais
                                <span class="material-symbols-outlined ms-4" style="font-size: 40px;">
                                    arrow_right_alt
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box2"></div>
            </div>
            <div class="card bg-transparent w-100 rounded-0 border-0 position-relative mb-lg-4 mb-5">
                <div class="row align-items-lg-center g-0">
                    <div class="col-6">
                        <img src="<?= $home; ?>/assets/images/img-post1.jpg" class="img-cover rounded-0" alt="Capa do Post">
                    </div>
                    <div class="col-6">
                        <div class="card-body py-0">
                            <h2 class="h5 card-title text-secondary mb-2 pb-1">
                                Portugal, um dos países queridinhos para congressos e convenções
                            </h2>
                            <p class="card-text small text-primary mb-0 py-lg-3">
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum...
                            </p>
                            <a href="/post" class="text-secondary d-flex w-100 align-items-center">
                                Ler mais
                                <span class="material-symbols-outlined ms-4" style="font-size: 40px;">
                                    arrow_right_alt
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="box2"></div>
            </div>
            <nav aria-label="Navegação dos posts">
                <ul class="pagination justify-content-lg-start justify-content-center align-items-center pt-lg-5 mt-2 mb-0">
                    <li class="page-item">
                        <a class="px-3" href="#">
                            <img src="<?= $home; ?>/assets/icons/double-arrow-left.svg" alt="Ícone de link para a primeira página de posts">
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="px-3" href="#">
                            <img src="<?= $home; ?>/assets/icons/arrow-left.svg" alt="Ícone de link para a página de posts anterior">
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">5</a>
                    </li>
                    <li class="page-item">
                        <a class="px-3" href="#">
                            <img src="<?= $home; ?>/assets/icons/arrow-right.svg" alt="Ícone de link para a próxima página de posts">
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="px-3" href="#">
                            <img src="<?= $home; ?>/assets/icons/double-arrow-right.svg" alt="Ícone de link para a última página de posts">
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="pesquisa col-3 d-lg-inline d-none">
            <div class="bg-light w-100 rounded-0 border-0 px-4 py-4 mb-5">
                <h2 class="h5 card-title text-secondary pt-3">Pesquisar</h2>
                <form class="search-form position-relative mb-5 pb-3 d-flex">
                    <input class="form-control search-form-input" type="text" aria-label="Pesquisar">
                    <img src="<?= $home; ?>/assets/icons/icon-search-blue.svg" alt="">
                </form>
            </div>

            <div id="categorias" class="bg-light w-100 rounded-0 border-0 px-4 pt-4 pb-5 mb-5">
                <h2 class="h5 card-title text-secondary pt-3 mb-4">Categorias</h2>

                <a href="/categorias" class="text-primary small d-block mb-0">Blog</a>
                <a href="/categorias" class="text-primary small d-block mb-0">Business</a>
                <a href="/categorias" class="text-primary small d-block mb-0">Europa</a>
                <a href="/categorias" class="text-primary small d-block mb-0">Eventos</a>
                <a href="/categorias" class="text-primary small d-block mb-0">Investimentos</a>
                <a href="/categorias" class="text-primary small d-block mb-0">Marketing</a>
                <a href="/categorias" class="text-primary small d-block mb-0">Pesquisa</a>
                <a href="/categorias" class="text-primary small d-block mb-0">Portugal Além Mar</a>
                <a href="/categorias" class="text-primary small d-block mb-0">Portugal Além Mar</a>
                <a href="/categorias" class="text-primary small d-block mb-0">Portugal para minha empresa</a>
                <a href="/categorias" class="text-primary small d-block mb-0">Ressignificando Portugal</a>
                <a href="/categorias" class="text-primary small d-block mb-0">Tendências</a>
            </div>

            <div id="tags" class="bg-light w-100 rounded-0 border-0 px-4 pt-4 pb-5 mb-5">
                <h2 class="h5 card-title text-secondary pt-3 mb-4">Tags</h2>

                <a href="/tags" class="text-primary small d-block mb-0">2022 abrir empresa em Portugal</a>
                <a href="/tags" class="text-primary small d-block mb-0">Atlantic Connection</a>
                <a href="/tags" class="text-primary small d-block mb-0">Atlantic Hub</a>
                <a href="/tags" class="text-primary small d-block mb-0">Atlantic Ignition</a>
                <a href="/tags" class="text-primary small d-block mb-0">Atlantic MarketFit</a>
                <a href="/tags" class="text-primary small d-block mb-0">Atlantic Station</a>
                <a href="/tags" class="text-primary small d-block mb-0">Brasileiros em Portugal</a>
                <a href="/tags" class="text-primary small d-block mb-0">Business</a>
                <a href="/tags" class="text-primary small d-block mb-0">Conexão COREangels</a>
                <a href="/tags" class="text-primary small d-block mb-0">Atlantic covid-19</a>
                <a href="/tags" class="text-primary small d-block mb-0">Empreendedorismo</a>
                <a href="/tags" class="text-primary small d-block mb-0">Empreender</a>
                <a href="/tags" class="text-primary small d-block mb-0">Empreender em portugal</a>
                <a href="/tags" class="text-primary small d-block mb-0">Empresa</a>
                <a href="/tags" class="text-primary small d-block mb-0">Empresa em portugal</a>
                <a href="/tags" class="text-primary small d-block mb-0">Europa</a>
                <a href="/tags" class="text-primary small d-block mb-0">Inovação</a>
                <a href="/tags" class="text-primary small d-block mb-0">Internacionalizar</a>
                <a href="/tags" class="text-primary small d-block mb-0">Internacionalização</a>
                <a href="/tags" class="text-primary small d-block mb-0">Internacionalização de empresas</a>
                <a href="/tags" class="text-primary small d-block mb-0">Internacionalização de negócios</a>
                <a href="/tags" class="text-primary small d-block mb-0">Investidor Anjo</a>
                <a href="/tags" class="text-primary small d-block mb-0">Investimento</a>
                <a href="/tags" class="text-primary small d-block mb-0">Investimento em Portugal</a>
                <a href="/tags" class="text-primary small d-block mb-0">Investimento em startups</a>
                <a href="/tags" class="text-primary small d-block mb-0">Investimentos</a>
                <a href="/tags" class="text-primary small d-block mb-0">Lisboa MarketFit</a>
                <a href="/tags" class="text-primary small d-block mb-0">Market fit</a>
                <a href="/tags" class="text-primary small d-block mb-0">Marketing</a>
                <a href="/tags" class="text-primary small d-block mb-0">Marketing digital</a>
                <a href="/tags" class="text-primary small d-block mb-0">Morar em portugal</a>
                <a href="/tags" class="text-primary small d-block mb-0">Negócios em portugal</a>
                <a href="/tags" class="text-primary small d-block mb-0">Negócios</a>
                <a href="/tags" class="text-primary small d-block mb-0">Networking</a>
                <a href="/tags" class="text-primary small d-block mb-0">Pandemia</a>
                <a href="/tags" class="text-primary small d-block mb-0">Portugal</a>
                <a href="/tags" class="text-primary small d-block mb-0">Reabertura de Portugal</a>
                <a href="/tags" class="text-primary small d-block mb-0">Rotina Startup</a>
                <a href="/tags" class="text-primary small d-block mb-0">Startups</a>
                <a href="/tags" class="text-primary small d-block mb-0">Transformação Digital</a>
                <a href="/tags" class="text-primary small d-block mb-0">Web Summit</a>
            </div>

            <div class="container-fluid px-0 mt-5">
                <div class="row w-100 mx-0">
                    <div class="col-12 d-lg-flex d-none justify-content-center align-items-center w-100 mb-4 pb-2">
                        <a href="#" class="mx-2">
                            <img src="<?= $home; ?>/assets/icons/facebook.svg" alt="ícone do Facebook">
                        </a>
                        <a href="#" class="mx-2">
                            <img src="<?= $home; ?>/assets/icons/instagram.svg" alt="Ícone do Instagram">
                        </a>
                        <a href="#" class="mx-2">
                            <img src="<?= $home; ?>/assets/icons/youtube.svg" alt="Ícone do Youtube">
                        </a>
                        <a href="#" class="mx-2">
                            <img src="<?= $home; ?>/assets/icons/twitter.svg" alt="Ícone do Twitter">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
get_template_part('partials/footer');
?>