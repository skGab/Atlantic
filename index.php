<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/partials/header.php';
?>

<!-- intro -->
<section id="intro">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img loading="lazy" src="./assets/images/banner_home_mob.png" class="mob d-block w-100 d-sm-none" alt="Banner Home Mobile">
                <img loading="lazy" src="./assets/images/banner_home_desk.png" class="desk w-100 d-none d-sm-block" alt="Banner Home Desktop">

                <div class="text-white carousel-caption text-start mb-5 pb-5">
                    <div class="mb-3">
                        <button class="px-0 py-0 border-0 bg-transparent me-3" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <img loading="lazy" class="w-100" src="./assets/icons/seta_sem_preenchida.svg" alt="Seta esquerda">
                        </button>

                        <button class="px-0 py-0 border-0 bg-transparent" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <img loading="lazy" class="w-100" src="./assets/icons/seta_preenchida.svg" alt="Seta direita">
                        </button>
                    </div>

                    <p class="small mb-2">Acesse e conquiste o mercado Português e Europeu <br class="d-none d-lg-block"> com todo o nosso suporte em todas as etapas de</p>

                    <h1 class="h3 text-white mb-3">
                        <strong>
                            INTERNACIONALIZAÇÃO
                        </strong> <br>
                        DE SUA EMPRESA.
                    </h1>

                    <button class="btn py-1 px-3">
                        <a href="" class="text-white">
                            SAIBA MAIS
                        </a>
                    </button>
                </div>
            </div>

            <div class="carousel-item">
                <img loading="lazy" src="./assets/images/banner_home_mob2.png" class="mob d-block w-100 d-sm-none" alt="Banner Home Mobile">
                <img loading="lazy" src="./assets/images/banner_home_desk2.png" class="desk d-block w-100 d-none d-sm-block" alt="Banner Home Desktop">

                <div class="text-white carousel-caption text-start mb-5 pb-5">
                    <div class="mb-3">
                        <button class="px-0 py-0 border-0 bg-transparent me-3" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <img loading="lazy" class="img-fluid" src="./assets/icons/seta_sem_preenchida.svg" alt="Seta esquerda">
                        </button>

                        <button class="px-0 py-0 border-0 bg-transparent" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <img loading="lazy" class="img-fluid" src="./assets/icons/seta_preenchida.svg" alt="Seta direita">
                        </button>
                    </div>

                    <h1 class="h2 text-white mb-2">
                        SEU ENDEREÇO FISCAL
                        <strong>
                            EM PORTUGAL
                        </strong> <br>
                    </h1>

                    <p class="small mb-3">E o seu escritório virtual para sua empresa em uma localização privilegiada e estratégica.</p>

                    <button class="btn py-1 px-3">
                        <a href="" class="text-white">
                            SAIBA MAIS
                        </a>
                    </button>
                </div>
            </div>

            <div class="carousel-item">
                <img loading="lazy" src="./assets/images/banner_home_mob3.png" class="mob d-block w-100 d-sm-none" alt="Banner Home 3">
                <img loading="lazy" src="./assets/images/banner_home_desk3.png" class="desk d-block w-100 d-none d-sm-block" alt="Banner Home 3">

                <div class="text-white carousel-caption text-start mb-5 pb-5">
                    <div class="mb-3">
                        <button class="px-0 py-0 border-0 bg-transparent me-3" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <img loading="lazy" class="img-fluid" src="./assets/icons/seta_sem_preenchida.svg" alt="Seta esquerda">
                        </button>

                        <button class="px-0 py-0 border-0 bg-transparent" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <img loading="lazy" class="img-fluid" src="./assets/icons/seta_preenchida.svg" alt="Seta direita">
                        </button>
                    </div>

                    <h1 class="h2 text-white mb-3"><strong>PORTUGAL 2030</strong></h1>

                    <p class="small mb-3">Um Acordo de Parceria que vai gerar grandes oportunidades.</p>

                    <button class="btn py-1 px-3">
                        <a href="" class="text-white">
                            SAIBA MAIS
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MOMENTO EMPRESA -->
<section id="momento_empresa" class="pb-5">
    <div class="container px-4 py-5">
        <div class="row">
            <div class="col-12 mb-5">
                <h2 class="h1 mb-0">QUAL O MOMENTO</h2>
                <span class="h5">da sua empresa em Portugal ?</span>
            </div>

            <div class="col-12">
                <div class="card text-center mx-auto position-relative">
                    <div class="box position-absolute"></div>
                    <figure class="mb-0 p-0 position-relative">
                        <img loading="lazy" src="/assets/images/banner_quero-conhecer.webp" class="img-fluid" alt="...">
                        <h3 class="position-absolute start-50 translate-middle-x text-white mb-0 p-0">Quero conhecer</h3>
                    </figure>
                    <div class="card-body w-100">
                        <div>
                            <h5 class="card-title fw-bold">Atlantic Connection</h5>
                            <p class="card-text">O maior evento global sobre o ecossistema Brasil e Portugal</p>
                        </div>
                        <hr>
                        <div>
                            <h5 class="card-title fw-bold">Missões empresariais</h5>
                            <p class="card-text">A oportunidade mais efetiva de network para seus negócios</p>
                        </div>
                        <hr>
                        <div>
                            <h5 class="card-title fw-bold">MarketFit</h5>
                            <p class="card-text">Um diagnóstico preliminar e seguro sobre a aderência ao mercado</p>
                        </div>
                        <button class="mt-3 bg-transparent fw-bold py-1">
                            SAIBA MAIS
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-12 my-5">
                <div class="card text-center mx-auto position-relative">
                    <div class="box position-absolute"></div>

                    <figure class="mb-0 p-0 position-relative">
                        <img loading="lazy" src="/assets/images/banner_ja-decidi.webp" class="img-fluid" alt="Thumb Já decidi">
                        <h3 class="h5 position-absolute start-50 translate-middle-x text-white mb-0 p-0">Já decidi e quero avançar</h3>
                    </figure>

                    <div class="card-body w-100">
                        <div>
                            <h5 class="card-title fw-bold">Market Access</h5>
                            <p class="card-text">Apoio global e integrado para a internacionalização de empresas</p>
                        </div>
                        <hr>
                        <div>
                            <h5 class="card-title fw-bold">Ignition</h5>
                            <p class="card-text">Auxilia o processo de transculturização e preparar a empresa para o mercado internacional</p>
                        </div>
                        <hr>
                        <div>
                            <h5 class="card-title fw-bold">Scale Out</h5>
                            <p class="card-text">3 fases para a internacionalização efetiva</p>
                        </div>
                        <button class="mt-3 bg-transparent fw-bold py-1">
                            SAIBA MAIS
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card text-center mx-auto position-relative">
                    <div class="box position-absolute"></div>

                    <figure class="mb-0 p-0 position-relative">
                        <img loading="lazy" src="/assets/images/banner_ja-em-portugal.webp" class="img-fluid" alt="Thumb já em Portugal">
                        <h3 class="position-absolute start-50 translate-middle-x text-white mb-0 p-0 h5">Já estou em Portugal e quero tracionar</h3>
                    </figure>

                    <div class="card-body ajuste w-100">
                        <div>
                            <h5 class="card-title fw-bold">Atlantic Connection</h5>
                            <p class="card-text">O maior evento global sobre o ecossistema Brasil e Portugal</p>
                        </div>
                        <hr>
                        <div>
                            <h5 class="card-title fw-bold">Missões empresariais</h5>
                            <p class="card-text">A oportunidade mais efetiva de network para seus negócios</p>
                        </div>
                        <hr>
                        <div>
                            <h5 class="card-title fw-bold">MarketFit</h5>
                            <p class="card-text">Um diagnóstico preliminar e seguro sobre a aderência ao mercado</p>
                        </div>
                        <button class="mt-3 bg-transparent fw-bold py-1">
                            SAIBA MAIS
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FALAR COM ESPECIALISTAS -->
<section id="falar_especialistas" class="pb-5">
    <div class="bg position-relative">
        <div class="card position-absolute px-4 py-3">
            <div class="card-body">
                <h4 class="card-title text-white">Quer falar com nossos especialistas para a internacionalização?</h4>
                <button class="btn text-white border ">FALE CONOSCO</button>
            </div>
        </div>
        <img loading="lazy" src="/assets/images/banner_falar-especialistas.webp" class="w-100" alt="Banner Falar com Especialistas">
    </div>

    <div class="container px-3 py-5">
        <div class="row noticias">
            <div class="col-12">
                <div class="card border-0">
                    <div class="card-body">
                        <p class="mb-3">Destaque</p>
                        <div class="d-flex align-items-center">
                            <h3 class="card-title me-3 mb-0">Como abrir uma empresa <br> em Portugal?</h3>
                            <a href=""><img src="/assets/icons/seta-direita-azul.svg" alt="Seta direita azul"></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card border-0 pt-5">
                    <div class="card-body">
                        <p class="mb-3">Destaque</p>
                        <div class="d-flex align-items-center">
                            <h3 class="card-title me-3 mb-0">Somos especializados na internacionalização de empresas brasileiras – Conheça a Atlantic Hub</h3>
                            <a href=""><img src="/assets/icons/seta-direita-azul.svg" alt="Seta direita azul"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BLOG -->
<section id="blog_home" class="py-5">
    <div class="container px-4 pt-5">
        <div class="row mb-5">
            <div class="col-12 mb-5">
                <div class="d-flex align-items-center">
                    <h2 class="h1 me-5">BLOG</h2>
                    <a href="" class="small align-items-center d-flex">
                        Ver Todos
                        <img loading="lazy" src="./assets/icons/seta_direita_azul_blog.svg" class="img-fluid ms-3" alt="Seta direita azul Blog">
                    </a>
                </div>
            </div>

            <div class="col-12 mb-5">
                <div class="card border-0 bg-transparent position-relative">
                    <div class="box position-absolute"></div>
                    <img loading="lazy" src="/assets/images/post_thumb1.webp" width="350" class="img-fluid" alt="">
                    <div class="card-body">
                        <p class="text-white small px-2 py-1 mb-3">Nome da tag</p>
                        <h3 class="card-title mb-3 h2">
                            Portugal, um dos países queridinhos para congressos e convenções
                        </h3>
                        <div class="card-text mb-3 small ">
                            De acordo com o relatório da Associação Internacional de Congressos e Incentivos (ICCA) relativo a 2019...
                        </div>
                        <a href="" class="d-flex align-items-center">
                            Ler mais
                            <img loading="lazy" class="img-fluid ms-4" src="./assets/icons/seta_direita_azul_blog.svg" alt="Seta direita azul Blog">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-5">
                <div class="card border-0 bg-transparent position-relative">
                    <div class="box position-absolute"></div>
                    <img loading="lazy" src="/assets/images/post_thumb1.webp" width="350" class="img-fluid" alt="">
                    <div class="card-body">
                        <p class="text-white small px-2 py-1 mb-3">Nome da tag</p>
                        <h2  class="card-title mb-3 h2">
                            Portugal, um dos países queridinhos para congressos e convenções
                        </h2>
                        <div class="card-text mb-3 small">
                            De acordo com o relatório da Associação Internacional de Congressos e Incentivos (ICCA) relativo a 2019...
                        </div>
                        <a href="" class="d-flex align-items-center">
                            Ler mais
                            <img loading="lazy" class="img-fluid ms-4" src="./assets/icons/seta_direita_azul_blog.svg" alt="Seta direita azul Blog">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-5">
                <div class="card border-0 bg-transparent position-relative">
                    <div class="box position-absolute"></div>
                    <img loading="lazy" src="/assets/images/post_thumb1.webp" width="350" class="img-fluid" alt="">
                    <div class="card-body">
                        <p class="text-white small px-2 py-1 mb-3">Nome da tag</p>
                        <h2 class="card-title mb-3 h2">
                            Portugal, um dos países queridinhos para congressos e convenções
                        </h2>
                        <div class="card-text mb-3 small">
                            De acordo com o relatório da Associação Internacional de Congressos e Incentivos (ICCA) relativo a 2019...
                        </div>
                        <a href="" class="d-flex align-items-center">
                            Ler mais
                            <img loading="lazy" class="img-fluid ms-4" src="./assets/icons/seta_direita_azul_blog.svg" alt="Seta direita azul Blog">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-4">
                <div class="d-flex align-items-center">
                    <h2 class="h1 me-5">EVENTOS</h2>
                    <a href="">Ver todos <img loading="lazy" src="/assets/icons/seta_direita_azul_blog.svg" class="img-fluid" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <section id="splide_eventos" class="splide" aria-label="Splide Eventos">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <a href="">
                        <img loading="lazy" src="/assets/images/evento_thumb.webp" class="img-fluid" alt="Thumb Evento">
                    </a>
                </li>

                <li class="splide__slide">
                    <a href="">
                        <img loading="lazy" src="/assets/images/evento_thumb3.png" class="img-fluid" alt="Thumb Evento">
                    </a>
                </li>

                <li class="splide__slide">
                    <a href="">
                        <img loading="lazy" src="/assets/images/evento_thumb2.png" class="img-fluid" alt="Thumb Evento">
                    </a>
                </li>
            </ul>
        </div>
    </section>
</section>

<!-- DEPOIMENTOS -->
<section id="depoimentos">
    <div class="container px-4 py-4 py-5">
        <div class="row pb-4">
            <div class="col-12">
                <h2 class="mb-4">DEPOIMENTOS</h2>
            </div>

            <figure class="col-12 mb-4 text-center">
                <img loading="lazy" src="/assets/images/depoimento1.webp" class="img-fluid" alt="Thumb Depoimento 1">
            </figure>

            <figure class="col-12 mb-0 text-center">
                <img loading="lazy" src="/assets/images/depoimento2.webp" class="img-fluid" alt="Thumb Depoimento 2">
            </figure>
        </div>
    </div>
</section>

<!-- ATLANTIC VIDEOS -->
<section id="videos" class="py-5">
    <div class="container px-4 pt-3 pb-5">
        <div class="row mb-5">
            <div class="col-12 mb-5">
                <h2 class="h1">ATLANTIC <br> VÍDEOS</h2>
            </div>

            <section id="splide_videos" class="splide" aria-label="Splide Videos">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide text-center">
                            <a href="">
                                <img loading="lazy" class="img-fluid" src="./assets/images/video.webp" alt="Video Thumb">
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
        </div>

        <div class="row pt-5">
            <div class="col-12 mb-4">
                <h2 class="h1">NOSSOS <br> PARCEIROS</h2>
            </div>

            <section id="splide_parceiros" class="splide" aria-label="Splide Parceiros">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img loading="lazy" src="./assets/images/logo_footer3.png" class="img-fluid" alt="Logo Conexão">
                        </li>
                        <li class="splide__slide">
                            <img loading="lazy" src="./assets/images/logo-vertical-blackbeans.png" class="img-fluid" alt="Logo BlackBeans">
                        </li>
                        <li class="splide__slide">
                            <img loading="lazy" src="./assets/images/logo_bossanova.png" class="img-fluid" alt="Logo Bossanova">
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</section>

<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/partials/footer.php';
?>