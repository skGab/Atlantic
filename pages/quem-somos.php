<?php

/**
 * Template Name: Quem somos
 * Author: Black Beans
 */

get_template_part('partials/header');
$home = get_stylesheet_directory_uri();
?>

<!-- QUEM SOMOS -->
<section id="megaheader" class="py-5 py-md-0">
    <div class="container px-4 py-5 py-md-5">
        <div class="row pt-md-5 align-items-md-center">
            <div class="col-12 col-lg-5 col-xxl-4 text-white mb-md-4 mb-xl-0">
                <div class="title position-relative">
                    <!-- MOBILE -->
                    <h1 class="display-3 mb-4 text-white d-md-none">QUEM <br>
                        <strong class="fw-bold">SOMOS</strong>
                    </h1>
                    <!-- DESKTOP -->
                    <h1 class="display-5 mb-4 text-white d-none d-md-block">QUEM <br class="d-md-none">
                        <strong class="fw-bold">SOMOS</strong>
                    </h1>

                    <!-- MOBILE -->
                    <h2 class="display-3 mb-4 text-white position-absolute fw-bold d-md-none">
                        QUEM <br class="d-md-none">
                        <strong class="fw-bold">SOMOS</strong>
                    </h2>
                    <!-- DESKTOP -->
                    <h2 class="display-6 mb-4 text-white position-absolute fw-bold d-none d-md-block">
                        QUEM <br class="d-md-none">
                        <strong class="fw-bold">SOMOS</strong>
                    </h2>
                </div>

                <p>Fundada em 2016, a Atlantic Hub é uma empresa global, com sede em Lisboa (Portugal) e em São Paulo (Brasil), especializada em fomentar negócios e parcerias dentro do ecossistema de empresas e startups luso-brasileiras.
                </p>

                <p>Apoiamos empresários brasileiros, no processo de internacionalização de empresas a partir de Portugal. Nosso foco é oferecer todo o suporte necessário, através de serviços e realização de eventos, que direcionam, escalam e preparam empresas para um resultado positivo e duradouro.</p>

                <p class="mb-0">Contamos com uma equipe de especialistas altamente preparada e qualificada para auxiliar a sua empresa a alcançar suas metas e objetivos.</p>
            </div>

            <figure class="col-lg-7 col-xxl-8 mb-0 d-none d-md-block">
                <img loading="lazy" src="<?php echo $home ?>/assets/images/video_quem-somos_deks.png" class="img-fluid" alt="Video Quem Somos Desktop">
            </figure>
        </div>
    </div>
</section>

<!-- FOCO -->
<section id="foco" class="pb-5 pt-md-5">
    <div class="container px-4 px-md-0 pb-5 pt-md-5">
        <div class="row justify-content-center">
            <figure class="col-12 mb-4 text-center d-md-none">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/video-quem-somos.png" alt="Video Quem Somos">
            </figure>

            <div class="title col-12 text-center text-white mb-4">
                <h2 class="h1 fw-normal mb-3">O foco da nossa <br class="d-md-none">
                    caminhada <br>
                    <span class="fw-light small d-md-none"># PROPÓSITO</span>
                    <span class="fw-light fs-3 d-none d-md-block"># PROPÓSITO</span>
                </h2>

                <p>A Atlantic Hub nasceu para sanar uma dor do mercado na qual os empresários enfrentam no processo de <br class="d-none d-md-block"> internacionalização de suas empresas, e muitas vezes desistem retornando para o seu país de origem. A Atlantic Hub <br class="d-none d-md-block"> nasce para derrubar as barreiras da expansão de negócios para a Europa, via Portugal.</p>
            </div>

            <div class="col-12 col-md-6 col-lg-4 col-xxl-3 px-md-2 px-4 mb-md-3 mb-lg-0">
                <div class="card px-3 h-100 py-5 py-md-2 text-center">
                    <div class="card-body d-flex justify-content-center flex-column">
                        <img src="<?php echo $home ?>/assets/icons/valores_icone.png" width="26px" class="mx-auto mb-3" alt="Icone Valores">

                        <h3 class="card-title mb-3 fw-bold d-md-none">Valores <br>
                            (Como agimos?)</h3>

                        <h3 class="card-title mb-3 fw-bold d-none d-md-block h6">Valores <br>
                            (Como agimos?)</h3>

                        <p class="card-text d-md-none">A Atlantic Hub possui como maior princípio saber ouvir o cliente para servi-lo da melhor maneira possível, e trabalhar com ética e foco nos objetivos da empresa cliente.</p>

                        <p class="card-text d-none d-md-block small">A Atlantic Hub possui como maior princípio saber ouvir o cliente para servi-lo da melhor maneira possível, e trabalhar com ética e foco nos objetivos da empresa cliente.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 col-xxl-3 px-md-2 px-4 my-5 mt-md-0 mb-md-3 mb-xxl-0">
                <div class="card px-3 h-100 py-5 py-md-2 text-center">
                    <div class="card-body  d-flex justify-content-center flex-column ">
                        <img src="<?php echo $home ?>/assets/icons/visao_icone.png" width="36px" class="mx-auto mb-3" alt="Icone Visão">

                        <h3 class="card-title mb-3 fw-bold d-md-none">Visão
                            <br>
                            (Onde queremos chegar?)
                        </h3>
                        <h3 class="card-title mb-3 fw-bold d-none d-md-block h6">Visão
                            <br>
                            (Onde queremos chegar?)
                        </h3>
                        <p class="card-text d-md-none">Desejamos nos tornar a maior empresa em número de empresas auxiliadas em seu processo de expansão internacional em Portugal;</p>

                        <p class="card-text d-none d-md-block small">Desejamos nos tornar a maior empresa em número de empresas auxiliadas em seu processo de expansão internacional em Portugal;</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 col-xxl-3 px-md-2 px-4 mb-5 mb-md-0">
                <div class="card px-3 h-100 py-5 py-md-2 text-center">
                    <div class="card-body d-flex justify-content-center flex-column ">
                        <img src="<?php echo $home ?>/assets/icons/missao_icone.png" width="37px" class="mx-auto mb-3" alt="Icone Missão">

                        <h3 class="card-title mb-3 fw-bold d-md-none">Missão <br>
                            (Qual o nosso compromisso?)</h3>

                        <h3 class="card-title mb-3 fw-bold d-none d-md-block h6">Missão <br>
                            (Qual o nosso compromisso?)</h3>

                        <p class="card-text d-md-none">Alcançar os objetivos de 100% dos nossos clientes, sendo muitas vezes pegar "nos braços" ou "no colo" em seu extremo, ou seja, "vestirmos a camisa" da empresa do cliente como se fossemos mesmo parte dela.</p>

                        <p class="card-text d-none d-md-block small">Alcançar os objetivos de 100% dos nossos clientes, sendo muitas vezes pegar "nos braços" ou "no colo" em seu extremo, ou seja, "vestirmos a camisa" da empresa do cliente como se fossemos mesmo parte dela.</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 col-xxl-3 px-md-2 px-4">
                <div class="card px-3 h-100 py-5 py-md-2 text-center">
                    <div class="card-body d-flex justify-content-center flex-column ">

                        <img src="<?php echo $home ?>/assets/icons/posicionamento_icone.png" width="40px" class="mx-auto mb-3" alt="Icone Posicionamento">

                        <h3 class="card-title mb-3 fw-bold d-md-none">Posicionamento <br>
                            (Como nos diferenciamos?)</h3>

                        <h3 class="card-title mb-3 fw-bold d-none d-md-block h6">Posicionamento <br>
                            (Como nos diferenciamos?)</h3>

                        <p class="card-text d-md-none">Nosso diferencial é possuirmos um processo de internacionalização empresarial completo, com um cuidado especial e jeito Atlantic Hub humano nosso de ser.</p>

                        <p class="card-text d-none d-md-block small ">Nosso diferencial é possuirmos um processo de internacionalização empresarial completo, com um cuidado especial e jeito Atlantic Hub humano nosso de ser.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section id="cta" class="py-md-4">
    <div class="container px-4 py-5">
        <div class="row">
            <div class="col text-center position-relative">
                <span class="bg d-none d-md-block display-1 position-absolute">
                    Pronto para internacionalizar sua empresa?
                </span>
                <h2 class="display-3 mb-4 d-md-none">Pronto para internacionalizar sua empresa?</h2>
                <h2 class="display-5 mb-5 d-none d-md-block">Pronto para internacionalizar sua empresa?</h2>
                <a href=""><img loading="lazy" src="<?php echo $home ?>/assets/icons/seta_internacionalizar.png" alt="Seta para direita"></a>
            </div>
        </div>
    </div>
</section>

<!-- NOSSA EQUIPE -->
<section id="nossa-equipe" class="py-md-5">
    <div class="container px-4 py-5">
        <div class="row mb-5">
            <div class="col-12">
                <h2 class="mb-5">NOSSA EQUIPE</h2>
            </div>

            <section id="splide_equipe" class="splide" aria-label="Splide Equipe">
                <div class="splide__track">
                    <ul class="splide__list">
                        <!-- EDUARDO -->
                        <li class="splide__slide text-center">
                            <figure class="mb-4">
                                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/equipe/thumb_eduardo.webp" alt="Foto Eduardo">
                            </figure>

                            <div class="info mb-5">
                                <h3 class="fw-bold h5">EDUARDO MIGLIORELLI</h3>
                                <p>CEO / CO-FOUNDER</p>
                            </div>

                            <figure class="col mb-0">
                                <a href="" target="_blank">
                                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/facebook.svg" alt="Icone Facebook">
                                </a>
                                <a href="" target="_blank" class="mx-2">
                                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/instagram.svg" alt="Icone Instagram">
                                </a>
                                <a href="" target="_blank">
                                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/twitter.svg" alt="Icone Twitter">
                                </a>
                            </figure>
                        </li>
                        <!-- BENIFICIO -->
                        <li class="splide__slide text-center">
                            <figure class="mb-4">
                                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/equipe/benicio_thumb_desk.webp" alt="Foto Benicio">
                            </figure>

                            <div class="info mb-5">
                                <h3 class="fw-bold h5">BENÍCIO FILHO</h3>
                                <p>COUNTRY MANAGER BRAZIL / CO-FOUNDER</p>
                            </div>

                            <figure class="col mb-0">
                                <a href="" target="_blank">
                                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/facebook.svg" alt="Icone Facebook">
                                </a>
                                <a href="" target="_blank" class="mx-2">
                                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/instagram.svg" alt="Icone Instagram">
                                </a>
                                <a href="" target="_blank">
                                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/twitter.svg" alt="Icone Twitter">
                                </a>
                            </figure>
                        </li>
                        <!-- THIAGO -->
                        <li class="splide__slide text-center">
                            <figure class="mb-4">
                                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/equipe/tiago_thumb_desk.webp" alt="Foto Tiago">
                            </figure>

                            <div class="info mb-5">
                                <h3 class="fw-bold h5">THIAGO MATSUMOTO</h3>
                                <p>CMO / CO-FOUNDER</p>
                            </div>

                            <figure class="col mb-0">
                                <a href="" target="_blank">
                                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/facebook.svg" alt="Icone Facebook">
                                </a>
                                <a href="" target="_blank" class="mx-2">
                                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/instagram.svg" alt="Icone Instagram">
                                </a>
                                <a href="" target="_blank">
                                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/twitter.svg" alt="Icone Twitter">
                                </a>
                            </figure>
                        </li>
                        <!-- NELSON -->
                        <li class="splide__slide text-center">
                            <figure class="mb-4">
                                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/equipe/nelson_thumb.webp" alt="Foto Tiago">
                            </figure>

                            <div class="info mb-5">
                                <h3 class="fw-bold h5">NELSON CORRÊA</h3>
                                <p>CFO / CO-FOUNDER</p>
                            </div>

                            <figure class="col mb-0">
                                <a href="" target="_blank">
                                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/facebook.svg" alt="Icone Facebook">
                                </a>
                                <a href="" target="_blank" class="mx-2">
                                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/instagram.svg" alt="Icone Instagram">
                                </a>
                                <a href="" target="_blank">
                                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/twitter.svg" alt="Icone Twitter">
                                </a>
                            </figure>
                        </li>
                        <!-- jOÃO -->
                        <li class="splide__slide text-center">
                            <figure class="mb-4">
                                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/equipe/joao_thumb.webp" alt="Foto Tiago">
                            </figure>

                            <div class="info mb-5">
                                <h3 class="fw-bold h5">JOÃO CABRAL</h3>
                                <p>HEAD OF INNOVATION</p>
                            </div>

                            <figure class="col mb-0">
                                <a href="" target="_blank">
                                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/facebook.svg" alt="Icone Facebook">
                                </a>
                                <a href="" target="_blank" class="mx-2">
                                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/instagram.svg" alt="Icone Instagram">
                                </a>
                                <a href="" target="_blank">
                                    <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/icons/twitter.svg" alt="Icone Twitter">
                                </a>
                            </figure>
                        </li>
                    </ul>
                </div>
            </section>
        </div>

        <div class="row text-center align-items-center justify-content-center py-5 position-relative">

            <div class="detail position-absolute p-0">
                <img loading="lazy" class="w-100 d-md-none" src="<?php echo $home ?>/assets/images/atlantic-detail.png" alt="Atlantic Team">
                <img loading="lazy" class="w-100 d-none d-md-block" src="<?php echo $home ?>/assets/images/team_atlantic_desk.png" alt="Atlantic Team">
            </div>

            <div class="col-5 col-md-4 col-lg-2 text-md-center text-end">
                <img loading="lazy" class="mb-3" width="170" height="171" src="<?php echo $home ?>/assets/images/equipe/feliciana_thumb.webp" alt="Foto equipe Mob">
                <p class="mb-0 small">Feliciana Nogueira - Gestora de Relacionamento</p>
            </div>

            <div class="col-5 col-md-4 col-lg-2 text-md-center text-start ">
                <img loading="lazy" class="mb-3" width="170" height="171" src="<?php echo $home ?>/assets/images/equipe/carla_thumb.webp" alt="Foto equipe">
                <p class="mb-0 small">Carla Rigolo - Executiva de Negócios e Relacionamento</p>
            </div>

            <div class="col-5 col-md-4 col-lg-2 text-md-center text-end">
                <img loading="lazy" class="mb-3" width="170" height="171" src="<?php echo $home ?>/assets/images/equipe/luciana_thumb.webp" alt="Foto equipe">
                <p class="mb-0 small">Luciana de Carvalho Viana - Gestora de Missões Empresariais</p>
            </div>

            <div class="col-5 col-md-4 col-lg-2 text-md-center text-start">
                <img loading="lazy" class="mb-3" width="170" height="171" src="<?php echo $home ?>/assets/images/equipe/joao2_thumb.webp" alt="Foto equipe">
                <p class="mb-0 small">João Paulo Fleury Teixeira - Financeiro</p>
            </div>

            <div class="col-5 col-md-4 col-lg-2 text-md-center text-end">
                <img loading="lazy" class="mb-3" width="170" height="171" src="<?php echo $home ?>/assets/images/equipe/paloma_thumb.webp" alt="Foto equipe">
                <p class="mb-0 small">Paloma Braga Abreu - Analista de Marketing</p>
            </div>

            <div class="col-5 col-md-4 col-lg-2 text-md-center text-start">
                <img loading="lazy" class="mb-3" width="170" height="171" src="<?php echo $home ?>/assets/images/equipe/diego_thumb.webp" alt="Foto equipe">
                <p class="mb-0 small">Diego Maia - Consultor de Projetos</p>
            </div>

            <div class="col-5 col-md-4 col-lg-2 text-md-center text-start">
                <img loading="lazy" class="mb-3" width="170" height="171" src="<?php echo $home ?>/assets/images/equipe/daniella_thumb.webp" alt="Foto equipe">
                <p class="mb-0 small">Daniella Rabaçal - Head of Administration and Finance</p>
            </div>
        </div>
    </div>
</section>

<!-- DADOS -->
<section id="dados" class="position-relative py-md-5">
    <figure class="mb-0 position-absolute top-50 start-50 translate-middle">
        <img loading="lazy" src="<?php echo $home ?>/assets/images/nossos-numeros.png" alt="Nossos numeros">
    </figure>

    <div class="container px-4 py-5 text-center">
        <div class="row align-items-md-center">
            <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                <h3 class="h6 mb-0 d-md-none">FUNDAÇÃO</h3>

                <h3 class="h5 mb-0 d-none d-md-block">FUNDAÇÃO</h3>

                <strong class="fw-bold h1">2016</strong>
            </div>

            <div class="col-6 col-lg-3 mb-4 mb-lg-0">
                <h3 class="h6 mb-0 d-md-none">CLIENTES</h3>

                <h3 class="h5 mb-0 d-none d-md-block">CLIENTES</h3>

                <strong class="fw-bold h1">110</strong>
            </div>

            <div class="col-6 col-lg-3">
                <h3 class="h6 mb-0 d-md-none">EMPRESÁRIOS <br> LEVADOS À PORTUGAL</h3>

                <h3 class="h5 mb-0 d-none d-md-block">EMPRESÁRIOS <br class="d-md-none"> LEVADOS À PORTUGAL</h3>

                <strong class="fw-bold h1">+800</strong>
            </div>

            <div class="col-6 col-lg-3">
                <h3 class="h6 mb-0 d-md-none">REDE DE <br> CONTATOS</h3>

                <h3 class="h5 mb-0 d-none d-md-block">REDE DE <br class="d-md-none"> CONTATOS</h3>

                <strong class="fw-bold h1">+ 30 mil</strong>
            </div>
        </div>
    </div>
</section>

<!-- CASES DE SUCESSO -->
<section id="cases" class="py-md-5">
    <div class="container px-4 py-4 py-md-5">
        <div class="row">
            <div class="col mb-5">
                <h2 class="mb-4">CASES <br class="d-md-none"> DE SUCESSO</h2>
                <p class="mb-0 mb-md-4">Confiram abaixo as empresas que confiaram no nosso trabalho!
                </p>
            </div>

            <section id="splide_cases" class="splide" aria-label="Splide Cases">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <figure class="mb-4 text-center">
                                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/cases/conquest_logo.png" alt="Logo Conquest">
                            </figure>

                            <div class="info px-5 text-start px-5 d-md-none">
                                <h3>Conquest One</h3>
                                <p>A TCIA é uma empresa com sede em Brasília e possui uma excelente expertise na gestão de estoques voltada para a área de engenharia de operações e manutenção para a infraestrutura de redes de telecomunicações. Por meio do programa Atlantic MarketFit, a Atlantic Hub avaliou todas as oportunidades de mercado para construir a entrada da empresa em território europeu com todas as fases do Scale Out. Criamos um modelo de negócios e, atualmente, nos encontramos na etapa da abertura da empresa e realização de visitas comerciais, a fim de construir um networking eficiente e promissor para a empresa.
                                </p>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <figure class="mb-4 text-center">
                                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/cases/brain_logo.png" alt="Logo Brain">
                            </figure>

                            <div class="info px-5 text-start d-md-none">
                                <h3>Brain</h3>
                                <p>A TCIA é uma empresa com sede em Brasília e possui uma excelente expertise na gestão de estoques voltada para a área de engenharia de operações e manutenção para a infraestrutura de redes de telecomunicações. Por meio do programa Atlantic MarketFit, a Atlantic Hub avaliou todas as oportunidades de mercado para construir a entrada da empresa em território europeu com todas as fases do Scale Out. Criamos um modelo de negócios e, atualmente, nos encontramos na etapa da abertura da empresa e realização de visitas comerciais, a fim de construir um networking eficiente e promissor para a empresa.
                                </p>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <figure class="mb-4 text-center">
                                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/cases/tcia_logo.png" alt="Logo TCIA">
                            </figure>

                            <div class="info px-5 text-start  d-md-none">
                                <h3>TCIA</h3>
                                <p>A TCIA é uma empresa com sede em Brasília e possui uma excelente expertise na gestão de estoques voltada para a área de engenharia de operações e manutenção para a infraestrutura de redes de telecomunicações. Por meio do programa Atlantic MarketFit, a Atlantic Hub avaliou todas as oportunidades de mercado para construir a entrada da empresa em território europeu com todas as fases do Scale Out. Criamos um modelo de negócios e, atualmente, nos encontramos na etapa da abertura da empresa e realização de visitas comerciais, a fim de construir um networking eficiente e promissor para a empresa.
                                </p>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <figure class="mb-4 text-center">
                                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/cases/brasillab_logo.png" alt="Logo BrasilLab">
                            </figure>

                            <div class="info px-5 text-start d-md-none">
                                <h3>BrasilLab</h3>
                                <p>A TCIA é uma empresa com sede em Brasília e possui uma excelente expertise na gestão de estoques voltada para a área de engenharia de operações e manutenção para a infraestrutura de redes de telecomunicações. Por meio do programa Atlantic MarketFit, a Atlantic Hub avaliou todas as oportunidades de mercado para construir a entrada da empresa em território europeu com todas as fases do Scale Out. Criamos um modelo de negócios e, atualmente, nos encontramos na etapa da abertura da empresa e realização de visitas comerciais, a fim de construir um networking eficiente e promissor para a empresa.
                                </p>
                            </div>
                        </li>

                        <li class="splide__slide">
                            <figure class="mb-4 text-center">
                                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/cases/apexbrasil_logo.png" alt="Logo ApexBrasil">
                            </figure>

                            <div class="info px-5 text-start d-md-none">
                                <h3>ApexBrasil</h3>
                                <p>A TCIA é uma empresa com sede em Brasília e possui uma excelente expertise na gestão de estoques voltada para a área de engenharia de operações e manutenção para a infraestrutura de redes de telecomunicações. Por meio do programa Atlantic MarketFit, a Atlantic Hub avaliou todas as oportunidades de mercado para construir a entrada da empresa em território europeu com todas as fases do Scale Out. Criamos um modelo de negócios e, atualmente, nos encontramos na etapa da abertura da empresa e realização de visitas comerciais, a fim de construir um networking eficiente e promissor para a empresa.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</section>

<!-- NOSSOS PARCEIROS -->
<section id="nossos-parceiros" class="pb-5">
    <div class="container px-4 py-5">
        <div class="row gap-bottom align-items-center justify-content-center">
            <div class="col-12">
                <h2 class="mb-4 mb-md-4">NOSSOS <br class="d-md-none"> PARCEIROS</h2>
            </div>

            <figure class="col-6 col-md-4 col-lg-2 text-center">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/federacao_logo.png" alt="Logo Federação">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/nodap_logo.png" alt="Logo Nodap">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/bauc_logo.png" alt="Logo Bauc">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/portugal_logo.png" alt="Logo Portugal Ventures">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/nacionalidade_logo.png" alt="Logo Nacionalidade">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/conexao_logo.png" alt="Logo Conexão Europa">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/blackbeans_logo.png" alt="Logo Black Beans">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/salomao_logo.png" alt="Logo Brasil Salomão">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/bossanova_logo.png" alt="Logo Bossanova">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/euro_logo.png" alt="Logo EuroDicas">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/martinhal_logo.png" alt="Logo Martinhal">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/logo_random3.png" alt="Logo Câmara">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/por_logo.png" alt="Logo Camara">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/camara_logo.png" alt="Logo Camara">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/logo_random.png" alt="Logo Camara">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/investsp_logo.png" alt="Logo Invest SP">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/digitalks_logo.png" alt="Logo Digitalks">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/world.png" alt="Logo World">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/itescs_logo.png" alt="Logo Itescs">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/celepar_logo.png" alt="Logo Celepar">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/sae_logo.png" alt="Logo SAE BRASIL">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/ourinvest_logo.png" alt="Logo OURINVEST">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/abcasa_logo.png" alt="Logo ABCCASA">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/inodev_logo.png" alt="Logo INODEV">
            </figure>
            <figur class="col-6 col-md-4 col-lg-2 text-center mb-0" e>
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/conselho_logo.png" alt="Logo Conselho">
            </figur>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/logo_random2.png" alt="Logo Casa de Portugal">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/fcj_logo.png" alt="Logo FCJ">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/abd_logo.png" alt="Logo ABDi">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/hakingrio_logo.png" alt="Logo Hacking Rio">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/startup_logo.png" alt="Logo Startupi">
            </figure>
            <figure class="col-6 col-md-4 col-lg-2 text-center mb-0">
                <img loading="lazy" class="img-fluid" src="<?php echo $home ?>/assets/images/parceiros/logo_mds.png" alt="Logo MDS">
            </figure>
        </div>
    </div>
</section>

<?php
get_template_part('partials/footer');
?>