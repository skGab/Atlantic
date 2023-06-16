<?php

/**
 * Template Name: Momentos
 */

get_template_part('partials/header');
$home = get_stylesheet_directory_uri();

?>

<!-- BANNER INTRO -->
<section id="banner-momento" class="banner justify-content-center pt-5" style="background: url('<?= $home; ?>/assets/images/banner-momento.jpg') no-repeat center center;">
    <div class="mask-banner-dark"></div>
    <div class="container">
        <div class="row w-100 mx-0">
            <div class="title-banner col-lg-8 col-12 ms-lg-5 ms-3">
                <h1 class="text-white text-uppercase">Quero conhecer portugal<br> para os meus negócios</h1>
                <span class="d-lg-none d-block px-5" style="line-height: 50px;">Quero conhecer portugal<br> para os meus negócios</span>
                <span class="d-lg-block d-none px-0" style="line-height: 50px;">Quero conhecer portugal<br> para os meus negócios</span>
            </div>
        </div>
    </div>
</section>

<!-- INTRO -->
<section id="intro">
    <div class="container px-4 py-4 my-2">
        <div class="row d-lg-none d-flex mx-0">
            <div class="col-12 text-primary">
                <h3>Portugal tem sido um dos destaques da União Europeia em termos de crescimento econômico nos últimos anos.</h3>

                <p>O país tem se beneficiado de políticas fiscais e monetárias prudentes, bem como de reformas estruturais que visam melhorar a competitividade e atrair investimentos estrangeiros.</p>

                <p>Para os empreendedores brasileiros, Portugal oferece um ecossistema empresarial vibrante e próspero, com muitas oportunidades de negócios em diversos setores.</p>

                <p>Uma das principais vantagens de expandir os negócios para Portugal é a posição estratégica do país, que funciona como uma porta de entrada para o mercado europeu e africano.</p>

                <p>Outra vantagem é que Portugal tem uma população qualificada e educada, com profissionais de diversas áreas e um sistema educacional de alta qualidade. Isso significa que é possível encontrar talentos locais para trabalhar em sua empresa e, ao mesmo tempo, contribuir para a economia local.</p>

                <h2 class="text-secondary fw-normal">Fale conosco e conheça as oportunidades
                    de negócios.</h2>

                <figure class="mb-0">
                    <img loading="lazy" class="img-fluid" src="<?= $home; ?>/assets/images/bandeira-portugal.png" alt="Bandeira Portugal">
                </figure>
            </div>
        </div>
        <div class="row d-lg-flex d-none mx-0 py-5">
            <div class="col-6 text-primary">
                <h3>Portugal tem sido um dos destaques da União Europeia em termos de crescimento econômico nos últimos anos.</h3>

                <p>O país tem se beneficiado de políticas fiscais e monetárias prudentes, bem como de reformas estruturais que visam melhorar a competitividade e atrair investimentos estrangeiros.</p>

                <div class="container-fluid px-0">
                    <div class="row w-100 mx-0">
                        <figure class="mb-0 col-6">
                            <img loading="lazy" class="img-fluid" src="<?= $home; ?>/assets/images/bandeira-portugal.png" alt="Bandeira Portugal">
                        </figure>
                        <div class="col-6">
                            <p>Para os empreendedores brasileiros, Portugal oferece um ecossistema empresarial vibrante e próspero, com muitas oportunidades de negócios em diversos setores.</p>

                        </div>
                    </div>
                </div>

            </div>

            <div class="col-6 text-primary">
                <p>Uma das principais vantagens de expandir os negócios para Portugal é a posição estratégica do país, que funciona como uma porta de entrada para o mercado europeu e africano.</p>

                <p>Outra vantagem é que Portugal tem uma população qualificada e educada, com profissionais de diversas áreas e um sistema educacional de alta qualidade. Isso significa que é possível encontrar talentos locais para trabalhar em sua empresa e, ao mesmo tempo, contribuir para a economia local.</p>

                <h2 class="text-secondary fw-normal h4">Fale conosco e conheça as oportunidades<br>
                    de negócios.</h2>
            </div>
        </div>
    </div>
</section>

<!-- RELACIONADOS -->
<section id="relacionados" class="d-block bg-dark py-5">
    <div class="container px-4 pt-5">
        <div class="row">
            <div class="col-lg-4 col-12 mb-4 pb-3">
                <div class="card bg-transparent border-0">
                    <div class="card-body d-flex align-items-start">
                        <div class="pt-1">
                            <h3 class="card-title h1 text-secondary">Atlantic Connection</h3>
                            <p class="card-text text-white pe-5">O maior evento global sobre o ecossistema Brasil e Portugal</p>
                        </div>
                        <a href="#" class="d-flex align-items-center justify-content-center ms-auto">
                            <span class="material-symbols-outlined border border-primary text-secondary rounded-pill p-1">
                                east
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-4 pb-3">
                <div class="card bg-transparent border-0">
                    <div class="card-body d-flex align-items-start">
                        <div class="pt-1">
                            <h3 class="card-title h1 text-secondary">Missões empresariais</h3>
                            <p class="card-text text-white pe-5">A oportunidade mais efetiva de network para seus negóciose Portugal</p>
                        </div>
                        <a href="#" class="d-flex align-items-center justify-content-center ms-auto">
                            <span class="material-symbols-outlined border border-primary text-secondary rounded-pill p-1">
                                east
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-4 pb-3">
                <div class="card bg-transparent border-0">
                    <div class="card-body d-flex align-items-start">
                        <div class="pt-1">
                            <h3 class="card-title h1 text-secondary">MarketFit</h3>
                            <p class="card-text text-white pe-5">Um diagnóstico preliminar e seguro sobre a aderência ao mercado</p>
                        </div>
                        <a href="#" class="d-flex align-items-center justify-content-center ms-auto">
                            <span class="material-symbols-outlined border border-primary text-secondary rounded-pill p-1">
                                east
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTATO -->
<section id="contato" class="d-lg-none d-block bg-light py-4">
    <div class="container px-4 py-5">
        <div class="row px-3">
            <div class="col-12">
                <h2 class="text-secondary">QUER FALAR COM ESPECIALISTA PARA A INTERNACIONALIZAÇÃO?</h2>
                <figure class="position-relative mb-0">
                    <img loading="lazy" class="img-cover" src="<?= $home; ?>/assets/images/thumb-contato.jpg" alt="Thumb contato">
                    <div class="mask-contato"></div>
                    <div class="box"></div>
                </figure>
            </div>

            <div id="form-candidatura" class="col-12 mt-5">
                <form>
                    <div class="mb-3">
                        <input placeholder="Nome Completo*" type="text" class="form-control" id="name" aria-describedby="nameHelp">
                    </div>

                    <div class="mb-3">
                        <input placeholder="Seu e-mail*" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <input placeholder="Telefone*" type="tel" class="form-control" id="tel" aria-describedby="nameHelp">
                    </div>

                    <select class="form-select mb-3" aria-label="Motivo do contato">
                        <option selected>Motivo do contato</option>
                        <option value="motivo1">motivo1</option>
                        <option value="motivo2">motivo2</option>
                        <option value="motivo3">motivo3</option>
                    </select>

                    <div class="mb-3">
                        <textarea class="form-control" placeholder="Mensagem*" id="mensagem" style="height: 100px"></textarea>
                    </div>

                    <button type="submit" class="btn text-primary d-flex justify-content-lg-end align-items-center bg-transparent text-uppercase me-auto px-0 pt-0">
                        Enviar
                        <span class="material-symbols-outlined ms-2" style="font-size: 35px;">
                            arrow_right_alt
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<section id="contato" class="d-lg-block d-none bg-light">
    <div class="container-fluid p-0">
        <div class="row align-items-center w-100 mx-0 px-0">
            <div class="col-4 px-0">
                <figure class="position-relative mb-0">
                    <img loading="lazy" class="img-cover" src="<?= $home; ?>/assets/images/thumb-contato.jpg" alt="Thumb contato">
                    <div class="mask-contato"></div>
                    <div class="box" style="width: 62px; height: 62px; right: -1.75rem; bottom: 5rem;"></div>
                </figure>
            </div>
            <div class="col-6 ms-3" style="z-index: 10;">
                <h2 class="text-secondary d-flex h2 mb-3" style="margin-left: -5rem;">QUER FALAR COM ESPECIALISTA<br> PARA A INTERNACIONALIZAÇÃO?</h2>
                <div id="form-candidatura" class="col-10 mt-5 ms-4">
                    <form>
                        <div class="row">
                            <div class="col mb-3">
                                <input placeholder="Nome Completo*" type="text" class="form-control" id="name" aria-describedby="nameHelp">
                            </div>

                            <div class="col mb-3">
                                <input placeholder="Seu e-mail*" type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <input placeholder="Telefone*" type="tel" class="form-control" id="tel" aria-describedby="nameHelp">
                            </div>

                            <select class="col form-select mb-3" aria-label="Motivo do contato">
                                <option selected>Motivo do contato</option>
                                <option value="motivo1">motivo1</option>
                                <option value="motivo2">motivo2</option>
                                <option value="motivo3">motivo3</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <textarea class="form-control" placeholder="Mensagem*" id="mensagem" style="height: 100px"></textarea>
                        </div>

                        <button type="submit" class="btn text-primary d-flex justify-content-lg-end align-items-center bg-transparent text-uppercase ms-auto px-0 pt-0">
                            Enviar
                            <span class="material-symbols-outlined ms-2" style="font-size: 35px;">
                                arrow_right_alt
                            </span>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
get_template_part('partials/footer');
?>