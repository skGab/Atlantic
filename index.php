<?php
get_template_part('partials/header');
$home = get_stylesheet_directory_uri();
?>

<!-- intro -->
<section id="intro">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo $home ?>/assets/images/banner_home_mob.png" class="mob d-block w-100 d-sm-none" alt="Banner Home Mobile">
                <img src="<?php echo $home ?>/assets/images/banner_home_desk.png" class="desk w-100 d-none d-sm-block" alt="Banner Home Desktop">

                <div class="text-white carousel-caption mx-auto text-start mb-5 pb-5" data-aos="fade-right" data-aos-duration="1500">
                    <div class="mb-3">
                        <button class="px-0 py-0 border-0 bg-transparent me-3" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <img loading="lazy" class="w-100" src="<?php echo $home ?>/assets/icons/seta_sem_preenchida.svg" alt="Seta esquerda">
                        </button>

                        <button class="px-0 py-0 border-0 bg-transparent" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <img loading="lazy" class="w-100" src="<?php echo $home ?>/assets/icons/seta_preenchida.svg" alt="Seta direita">
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
                        <a href="https://materiais.atlantichub.com/quer-levar-sua-empresa-para-portugal" class="text-white" target="_blank">
                            SAIBA MAIS
                        </a>
                    </button>
                </div>
            </div>

            <div class="carousel-item">
                <img src="<?php echo $home ?>/assets/images/banner_home_mob2.png" class="mob d-block w-100 d-sm-none" alt="Banner Home Mobile">
                <img src="<?php echo $home ?>/assets/images/banner_home_desk2.png" class="desk d-block w-100 d-none d-sm-block" alt="Banner Home Desktop">

                <div class="text-white carousel-caption mx-auto text-start mb-5 pb-5">
                    <div class="mb-3">
                        <button class="px-0 py-0 border-0 bg-transparent me-3" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/seta_sem_preenchida.svg" alt="Seta esquerda">
                        </button>

                        <button class="px-0 py-0 border-0 bg-transparent" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/seta_preenchida.svg" alt="Seta direita">
                        </button>
                    </div>

                    <h2 class="text-white mb-2">
                        SEU ENDEREÇO FISCAL <br>
                        <strong>
                            EM PORTUGAL
                        </strong>
                    </h2>

                    <p class="small mb-3 d-md-none">E o seu escritório virtual para sua empresa em uma localização privilegiada e estratégica.</p>

                    <p class="mb-3 d-none d-md-block">E o seu escritório virtual para sua empresa em uma <br> localização privilegiada e estratégica.</p>

                    <button class="btn py-1 px-3">
                        <a href="https://materiais.atlantichub.com/bb-escritorio-avancado-internacional-em-portugal" class="text-white" target="_blank">
                            SAIBA MAIS
                        </a>
                    </button>
                </div>
            </div>

            <div class="carousel-item">
                <img src="<?php echo $home ?>/assets/images/banner_home_mob3.png" class="mob d-block w-100 d-md-none" alt="Banner Home 3">
                <img src="<?php echo $home ?>/assets/images/banner_home_desk3.png" class="desk d-block w-100 d-none d-md-block" alt="Banner Home 3">

                <div class="text-white carousel-caption mx-auto text-start mb-5 pb-5">
                    <div class="mb-3">
                        <button class="px-0 py-0 border-0 bg-transparent me-3" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/seta_sem_preenchida.svg" alt="Seta esquerda">
                        </button>

                        <button class="px-0 py-0 border-0 bg-transparent" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/seta_preenchida.svg" alt="Seta direita">
                        </button>
                    </div>

                    <h2 class="text-white mb-3 mb-md-2"><strong>PORTUGAL 2030</strong></h2>

                    <p class="small mb-3 d-md-none">Um Acordo de Parceria que vai gerar grandes oportunidades.</p>
                    <p class="mb-5 d-none d-md-block">Um Acordo de Parceria que vai gerar grandes oportunidades.</p>

                    <button class="btn py-1 px-3">
                        <a href="https://www.atlantichub.com/2022/09/13/apoio-as-empresas-em-portugal" class="text-white" target="_blank">
                            SAIBA MAIS
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MOMENTO EMPRESA -->
<section id="momento_empresa" class="pb-md-5">
    <div class="container px-4 py-5">
        <div class="row justify-content-md-center align-items-md-end pbmd--5">
            <div class="col-12 mb-5 text-md-center">
                <h2 class="h2 mb-0">QUAL O MOMENTO</h2>
                <span class="h5">da sua empresa em Portugal ?</span>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-bottom">
                <div class="card text-center mx-auto position-relative">
                    <div class="box position-absolute d-md-none"></div>

                    <figure class="mb-0 p-0 position-relative d-flex align-items-center justify-content-center">
                        <img loading="lazy" src="<?php echo $home ?>/assets/images/banner_quero-conhecer.webp" class="img-fluid" alt="Banner quero conhecer">

                        <h3 class="position-absolute text-white mb-0 p-0 h4">Quero <br> conhecer</h3>
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
                            <a href="/quero-conhecer-portugal/">
                                SAIBA MAIS
                            </a>
                        </button>
                    </div>
                    <div class="box box-left d-none d-md-block position-absolute"></div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-5 my-sm-0 my-md-0" data-aos="fade-up" data-aos-duration="1200" data-aos-anchor-placement="top-bottom">
                <div class="card text-center mx-auto position-relative">
                    <div class="box box-desk position-absolute"></div>

                    <figure class="mb-0 p-0 position-relative d-flex align-items-center justify-content-center">
                        <img loading="lazy" src="<?php echo $home ?>/assets/images/banner_ja-decidi.webp" class="img-fluid" alt="Thumb Já decidi">
                        <h3 class="h5 position-absolute text-white mb-0 p-0">Já decidi e <br> quero avançar</h3>
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
                            <a href="/ja-decidi-e-quero-avancar/">
                                SAIBA MAIS
                            </a>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="top-bottom">
                <div class="card text-center mx-auto position-relative">
                    <div class="box position-absolute d-md-none"></div>

                    <figure class="mb-0 p-0 position-relative d-flex align-items-center justify-content-center">
                        <img loading="lazy" src="<?php echo $home ?>/assets/images/banner_ja-em-portugal.webp" class="img-fluid" alt="Thumb já em Portugal">
                        <h3 class="position-absolute text-white mb-0 px-4 h5">Já estou em Portugal e quero tracionar</h3>
                    </figure>

                    <div class="card-body ajuste w-100">
                        <div>
                            <h5 class="card-title fw-bold">Portugal 2030</h5>
                            <p class="card-text">Apoio global e integrado para a internacionalização de empresas</p>
                        </div>
                        <hr>
                        <div>
                            <h5 class="card-title fw-bold">Endereço Fiscal</h5>
                            <p class="card-text">Sua empresa com escritório virtual em um endereço privilegiado</p>
                        </div>
                        <hr>
                        <div>
                            <h5 class="card-title fw-bold">Portugal Ventures</h5>
                        </div>
                        <hr>
                        <div>
                            <h5 class="card-title fw-bold">Escritório <br>
                                Avançado Internacional</h5>
                            <p class="card-text">Sua empresa tem presença garantida no exterior</p>
                        </div>
                        <button class="mt-3 bg-transparent fw-bold py-1">
                            <a href="/ja-estou-em-portugal-e-quero-tracionar/">
                                SAIBA MAIS
                            </a>
                        </button>
                    </div>
                    <div class="box box-right d-none d-md-block position-absolute"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FALAR COM ESPECIALISTAS -->
<section id="falar_especialistas" class="pb-5">
    <div class="bg position-relative">

        <div class="card align-items-center justify-content-center d-flex position-absolute px-4 py-3" data-aos="fade-right" data-aos-duration="800" data-aos-anchor-placement="top-bottom">
            <div class="px-4 py-3 py-md-0 d-block flex-0" data-aos="fade-left" data-aos-duration="1500" data-aos-anchor-placement="top-bottom">
                <h4 class="h3 card-title text-white lh-md-base mb-md-4">Quer falar com nossos especialistas para a internacionalização?</h4>

                <button class="btn text-white border py-2 py-md-1"><a href="/contato" class="text-white">FALE CONOSCO</a></button>
            </div>
        </div>

        <img loading="lazy" src="<?php echo $home ?>/assets/images/banner_falar-especialistas.png" class="img-fluid d-sm-none" alt="Banner Falar com Especialistas">

        <img loading="lazy" src="<?php echo $home ?>/assets/images/banner_especialistas.png" class="w-100 d-none d-sm-block" alt="Banner Falar com Especialistas">

    </div>

    <div class="container px-3 py-5">
        <div class="row noticias align-items-center">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
                'post__in' => array(3644, 1220),
                'category_name'  => 'destaques'
            );
            $posts = new WP_Query($args);
            if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post();

                    $categories = get_the_category();
            ?>

                    <div class="col-12 col-md-6">
                        <div class="card border-0">
                            <div class="card-body">
                                <p class="mb-3"><?php echo ucfirst($args['category_name']); ?></p>

                                <div class="d-flex align-items-center">
                                    <h3 class="card-title me-3 mb-0"><?php echo get_the_title() ?></h3>

                                    <a href="<?php the_permalink(); ?>"><img loading="lazy" class="d-md-none" src="<?php echo $home ?>/assets/icons/seta-direita-azul.svg" alt="Seta direita azul"></a>

                                    <a href="<?php the_permalink(); ?>"><img loading="lazy" class="d-none  d-md-block" width="50px" src="<?php echo $home ?>/assets/icons/seta-direita-azul.svg" alt="Seta direita azul"></a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>

<!-- BLOG -->
<section id="blog_home" class="py-5">
    <div class="container px-4 pt-5">
        <div class="row mb-5 justify-content-between">

            <div class="col-12 mb-5" data-aos="fade-right" data-aos-duration="1500">
                <div class="d-flex align-items-center">
                    <h2 class="me-5">BLOG</h2>
                    <a href="/blog" class="small align-items-center d-flex d-md-none">
                        Ver Todos
                        <img loading="lazy" src="<?php echo $home ?>/assets/icons/seta_direita_azul_blog.svg" class="img-fluid ms-3" alt="Seta direita azul Blog">
                    </a>

                    <a href="/blog" class="align-items-center d-flex d-none d-md-flex">
                        Ver Todos
                        <img loading="lazy" src="<?php echo $home ?>/assets/icons/seta_direita_azul_blog.svg" class="img-fluid ms-3" alt="Seta direita azul Blog">
                    </a>
                </div>
            </div>

            <?php

            $blog_args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
            );
            $blog_posts = new WP_Query($blog_args);
            if ($blog_posts->have_posts()) : while ($blog_posts->have_posts()) : $blog_posts->the_post();

                    $blog_categories = get_the_category();
            ?>

                    <div class="col-12 col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-duration="1500">
                        <div class="card mx-auto border-0 bg-transparent position-relative">
                            <div class="box position-absolute"></div>

                            <img loading="lazy" src="<?php echo $home ?>/assets/images/post_thumb1.webp" width="350" class="img-fluid" alt="">

                            <div class="card-body px-md-0">
                                <p class="text-white small px-2 py-1 mb-3"><?php echo $categories[0]->name ?></p>

                                <h3 class="card-title mb-3">
                                    <?php echo get_the_title() ?>
                                </h3>

                                <div class="card-text mb-3">
                                    <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                </div>

                                <a href="<?php the_permalink() ?>" class="d-flex align-items-center">
                                    Ler mais
                                    <img loading="lazy" class="img-fluid ms-4" src="<?php echo $home ?>/assets/icons/seta_direita_azul_blog.svg" alt="Seta direita azul Blog">
                                </a>
                            </div>
                        </div>
                    </div>

            <?php endwhile;
            endif; ?>
        </div>

        <div class="row">
            <div class="col-12 mb-4" data-aos="fade-right" data-aos-duration="1500">
                <div class="d-flex align-items-center">
                    <h2 class="me-5">EVENTOS</h2>
                    <!-- <a href="" class="d-flex align-items-center">Ver todos <img loading="lazy" src="<?php echo $home ?>/assets/icons/seta_direita_azul_blog.svg" class="img-fluid ms-4" alt=""></a> -->
                </div>
            </div>
        </div>
    </div>

    <section id="splide_eventos" class="splide" aria-label="Splide Eventos">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <a href="https://materiais.atlantichub.com/atlantic-connection-2023?src=98ae1986600e4c29a707e3fc91dc2208&" target="_blank">
                        <img loading="lazy" src="<?php echo $home ?>/assets/images/eventos/evento_1.webp" class="img-fluid" alt="Thumb Evento">
                    </a>
                </li>
            </ul>
        </div>
    </section>
</section>

<!-- DEPOIMENTOS -->
<section id="depoimentos" class="py-md-5">
    <div class="container px-4 py-4 py-5">
        <div class="row pb-4 justify-content-center">
            <div class="col-12" data-aos="fade-down" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">
                <h2 class="mb-4 mb-md-5">DEPOIMENTOS</h2>
            </div>

            <div class="col-12 col-md-6 mb-4 text-center" data-aos="fade-right" data-aos-duration="1800" data-aos-anchor-placement="bottom-bottom">
                <video id="myVideo1" width="480" class="img-fluid rounded-3" loop muted controls preload="none">
                    <source src="<?php echo $home ?>/assets/images/depoimentos/depoimento_1.mp4" type="video/mp4">
                    Seu navegador não suporta este video
                </video>
            </div>

            <div class="col-12 col-md-6 mb-0 text-center" data-aos="fade-left" data-aos-duration="1800" data-aos-anchor-placement="bottom-bottom">
                <video id="myVideo2" width="480" class="img-fluid rounded-3" loop muted controls preload="none">
                    <source src="<?php echo $home ?>/assets/images/depoimentos/depoimento_2.mp4" type="video/mp4">
                    Seu navegador não suporta este video
                </video>
            </div>
        </div>
    </div>
</section>

<!-- ATLANTIC VIDEOS -->
<section id="videos" class="py-5">
    <div class="container px-4 pt-3 pb-5 pt-md-5">
        <div class="row mb-5">
            <div class="col-12 mb-5" data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">
                <h2>ATLANTIC <br class="d-md-none"> VÍDEOS</h2>
            </div>

            <section id="splide_videos" class="splide" aria-label="Splide Videos" data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="bottom-bottom">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide text-center">
                            <iframe loading="lazy" height="315" class="w-100" src="https://www.youtube.com/embed/b_oSBjeYXTM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </li>

                        <li class="splide__slide text-center">
                            <iframe loading="lazy" height="315" class="w-100" src="https://www.youtube.com/embed/BcKT1tnYZNc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </li>
                    </ul>
                </div>
            </section>
        </div>

        <div class="row pt-5">
            <div class="col-12 mb-4" data-aos="fade-right" data-aos-duration="1800" data-aos-anchor-placement="bottom-bottom">
                <h2>NOSSOS <br class="d-md-none"> PARCEIROS</h2>
            </div>

            <section id="splide_parceiros" class="splide" aria-label="Splide Parceiros" data-aos="fade-left" data-aos-duration="1800" data-aos-anchor-placement="bottom-bottom">
                <div class="splide__track">
                    <ul class="splide__list align-items-center">
                        <li class="splide__slide">
                            <img loading="lazy" src="<?php echo $home ?>/assets/images/logo_footer3.png" class="img-fluid d-md-none" alt="Logo Conexão Mobile">

                            <img loading="lazy" src="<?php echo $home ?>/assets/images/parceiros/conexao_logo.png" class="img-fluid d-none d-md-block" alt="Logo Conexão Desktop">
                        </li>

                        <li class="splide__slide">
                            <img loading="lazy" src="<?php echo $home ?>/assets/images/logo-vertical-blackbeans.png" class="img-fluid d-md-none" alt="Logo BlackBeans Mobile">

                            <img loading="lazy" src="<?php echo $home ?>/assets/images/parceiros/blackbeans_logo.png" class="img-fluid d-none d-md-block" alt="Logo BlackBeans Desktop">
                        </li>

                        <li class="splide__slide">
                            <img loading="lazy" width="120" src="<?php echo $home ?>/assets/images/parceiros/bossanova_logo_desk.png" class="img-fluid d-md-none" alt="Logo Bossanova Mob">

                            <img loading="lazy" src="<?php echo $home ?>/assets/images/parceiros/bossanova_logo_desk.png" class="img-fluid d-none d-md-block" alt="Logo Bossanova Desktop">
                        </li>

                        <li class="splide__slide ">
                            <img loading="lazy" width="100px" src="<?php echo $home ?>/assets/images/parceiros/euro_logo_desk.png" class="img-fluid d-md-none " alt="Logo Euro Dicas Mob">

                            <img loading="lazy" src="<?php echo $home ?>/assets/images/parceiros/euro_logo_desk.png" class="img-fluid d-none d-md-block" alt="Logo Euro Dicas Mob">
                        </li>

                        <li class="splide__slide">
                            <img loading="lazy" width="120px" src="<?php echo $home ?>/assets/images/parceiros/salomao_logo_desk.png" class="img-fluid d-md-none" alt="Logo Brasil Salomão Mob">

                            <img loading="lazy" src="<?php echo $home ?>/assets/images/parceiros/salomao_logo_desk.png" class="img-fluid d-none d-md-block" alt="Logo Brasil Salomão Desktop">
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</section>

<?php
get_template_part('partials/footer');
?>