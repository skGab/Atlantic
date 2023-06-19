<?php

/**
 * Template Name: Momentos
 */

get_template_part('partials/header');
$home = get_stylesheet_directory_uri();

$current_page =  $_SERVER['REQUEST_URI'];

if ($current_page === "/quero-conhecer-portugal/") {
    $banner = $home . '/assets/images/banner-momento.jpg';
}

if ($current_page === "/ja-decidi-e-quero-avancar/") {
    $banner = $home . '/assets/images/banner_ja_decidi.png';
}

if ($current_page === "/ja-estou-em-portugal-e-quero-tracionar/") {
    $banner = $home . '/assets/images/banner_ja_estou.png';
}
?>

<!-- BANNER INTRO -->
<section id="banner-momento" class="banner justify-content-center pt-5">
    <div class="mask-banner-dark"></div>
    <div class="container">
        <div class="row w-100 mx-0">
            <div class="title-banner col-lg-8 col-12 ms-lg-5 ms-3">
                <?php if ($current_page === "/quero-conhecer-portugal/") : ?>
                    <h1 class="text-white text-uppercase">Quero conhecer portugal<br> para os meus negócios</h1>
                    <span class="d-lg-none d-block px-5" style="line-height: 50px;">Quero conhecer portugal<br> para os meus negócios</span>
                    <span class="d-lg-block d-none px-0" style="line-height: 50px;">Quero conhecer portugal<br> para os meus negócios</span>
                <?php elseif ($current_page === "/ja-decidi-e-quero-avancar/") : ?>
                    <h1 class="text-white text-uppercase">JÁ DECIDI E QUERO AVANÇAR COM <br> MEUS NEGÓCIOS EM PORTUGAL</h1>
                    <span class="d-lg-none d-block px-5" style="line-height: 50px;">JÁ DECIDI E QUERO AVANÇAR COM <br> MEUS NEGÓCIOS EM PORTUGAL</span>
                    <span class="d-lg-block d-none px-0" style="line-height: 50px;">JÁ DECIDI E QUERO AVANÇAR COM <br> MEUS NEGÓCIOS EM PORTUGAL</span>
                <?php else : ?>
                    <h1 class="text-white text-uppercase">Já estou em Portugal e quero tracionar</h1>
                    <span class="d-lg-none d-block px-5" style="line-height: 50px;">Já estou em Portugal <br> e quero tracionar</span>
                    <span class="d-lg-block d-none px-0" style="line-height: 50px;">Já estou em Portugal <br> e quero tracionar</span>
                <?php endif ?>

            </div>
        </div>
    </div>

    <style>
        #banner-momento {
            background-image: url(<?php echo $banner ?>)
        }
    </style>
</section>

<!-- INTRO -->
<section id="intro" class="d-block position-relative">
    <figure class="mb-0 col-3 position-absolute left-0 bottom-0 ms-5 pe-lg-5 d-lg-block d-none">
        <img loading="lazy" class="img-fluid pe-lg-4" src="<?= $home; ?>/assets/images/bandeira-portugal.png" alt="Bandeira Portugal">
    </figure>
    <div class="container px-4 pt-4">
        <div class="row justify-content-lg-between mx-0 pt-5 pb-lg-5">
            <div class="col-lg-5 col-12 text-primary pe-lg-4">
                <h3 class="mb-4">Portugal tem sido um dos destaques da União Europeia em termos de crescimento econômico nos últimos anos.</h3>

                <p class="mb-4">O país tem se beneficiado de políticas fiscais e monetárias prudentes, bem como de reformas estruturais que visam melhorar a competitividade e atrair investimentos estrangeiros.</p>

                <div class="container-fluid px-0">
                    <div class="row justify-content-lg-end w-100 mx-0">
                        <div class="col-lg-7 col-12 px-lg-2 px-0">
                            <p>Para os empreendedores brasileiros, Portugal oferece um ecossistema empresarial vibrante e próspero, com muitas oportunidades de negócios em diversos setores.</p>

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 col-12 text-primary">
                <p>Uma das principais vantagens de expandir os negócios para Portugal é a posição estratégica do país, que funciona como uma porta de entrada para o mercado europeu e africano.</p>

                <p>Outra vantagem é que Portugal tem uma população qualificada e educada, com profissionais de diversas áreas e um sistema educacional de alta qualidade. Isso significa que é possível encontrar talentos locais para trabalhar em sua empresa e, ao mesmo tempo, contribuir para a economia local.</p>

                <h2 class="text-secondary fw-normal h4">Fale conosco e conheça as oportunidades<br>
                    de negócios.</h2>
            </div>

            <figure class="mb-0 col-12 px-0 d-lg-none d-block" style="margin-left: -1rem;">
                <img loading="lazy" class="img-fluid" src="<?= $home; ?>/assets/images/bandeira-portugal.png" alt="Bandeira Portugal">
            </figure>
        </div>
    </div>
</section>

<!-- RELACIONADOS -->
<section id="relacionados" class="d-block bg-dark py-5">
    <div class="container px-4 pt-5">
        <div class="row">
            <div class="col-lg-4 col-12 mb-4 pb-3">
                <div class="card bg-transparent border-0">
                    <div class="card-body">
                        <div class="row w-100 mx-0">
                            <div class="col-9 pt-1">
                                <h3 class="card-title h1 text-secondary">Atlantic Connection</h3>
                                <p class="card-text text-white">O maior evento global sobre o ecossistema Brasil e Portugal</p>
                            </div>
                            <a href="#" class="col-3">
                                <span class="material-symbols-outlined border border-primary text-secondary rounded-pill p-1 me-auto">
                                    east
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-4 pb-3">
                <div class="card bg-transparent border-0">
                    <div class="card-body">
                        <div class="row w-100 mx-0">
                            <div class="col-9 pt-1">
                                <h3 class="card-title h1 text-secondary">Missões empresariais</h3>
                                <p class="card-text text-white">A oportunidade mais efetiva de network para seus negóciose Portugal</p>
                            </div>
                            <a href="#" class="col-3">
                                <span class="material-symbols-outlined border border-primary text-secondary rounded-pill p-1 me-auto">
                                    east
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-4 pb-3">
                <div class="card bg-transparent border-0">
                    <div class="card-body">
                        <div class="row w-100 mx-0">
                            <div class="col-9 pt-1">
                                <h3 class="card-title h1 text-secondary">MarketFit</h3>
                                <p class="card-text text-white">Um diagnóstico preliminar e seguro sobre a aderência ao mercado</p>
                            </div>
                            <a href="#" class="col-3">
                                <span class="material-symbols-outlined border border-primary text-secondary rounded-pill p-1 me-auto">
                                    east
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_template_part('partials/footer');
?>