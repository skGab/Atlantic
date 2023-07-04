<?php

/**
 * Template Name: Contato
 */

get_template_part('partials/header');
$home = get_stylesheet_directory_uri();

?>

<!-- BANNER INTRO -->
<section id="banner-contato" class="banner justify-content-center pt-5" style="background: url('<?= $home; ?>/assets/images/banner-contato.jpg') no-repeat center center;">
    <div class="mask-banner"></div>
    <div class="container">
        <div class="row w-100">
            <div class="title-banner col-lg-1 col-4 ms-lg-5 ms-3">
                <h1 class="text-white text-uppercase" data-aos="fade-right" data-aos-duration="1500">Contato</h1>
                <span data-aos="fade-right" data-aos-duration="1500">Contato</span>
            </div>
        </div>
    </div>
</section>

<!-- FALE CONOSCO -->
<section id="fale-conosco" class="container py-5">
    <div class="row justify-content-lg-between w-100 mx-0 py-lg-5">
        <div class="form col-lg-7 col-12 mx-lg-5 ps-lg-0 pe-lg-5" data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="top-bottom">
            <h1 class="text-primary text-uppercase fw-normal mb-3 pe-lg-5">Fale conosco</h1>
            <h2 class="h6 text-primary mb-5 pe-lg-4">
                Se você está interessado em nossos serviços ou está a procura de um desafio profissional emocionante,
                em uma empresa jovem e dinâmica, mande-nos uma mensagem.
            </h2>
            <form class="row pe-lg-5">
                <div class="col-lg-6 col-12 mb-3">
                    <input type="text" class="form-control" id="nome" aria-describedby="nome" placeholder="Nome Completo*">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Seu email*">
                </div>
                <div class="col-lg-6 col-12 mb-3">
                    <input type="tel" class="form-control" id="telefone" aria-describedby="telefone" placeholder="Telefone*">
                </div>
                <div class="col-lg-6 col-12 mb-5">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Motivo do contato</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-0">
                    <textarea class="form-control" id="mensagem" rows="4" placeholder="Mensagem*"></textarea>
                </div>
                <button type="submit" class="btn text-primary d-flex justify-content-lg-end align-items-center bg-transparent text-uppercase me-auto pt-0" disabled>
                    Enviar
                    <span class="material-symbols-outlined ms-2" style="font-size: 35px;">
                        arrow_right_alt
                    </span>
                </button>
            </form>
        </div>

        <div class="col-lg-3 col-12 me-lg-4 pe-lg-0" >
            <div class="border-top border-primary d-lg-none d-block px-0 pt-5">
                <h1 class="display-4 text-secondary fw-normal mb-4" data-aos="fade-left" data-aos-duration="1500">Onde estamos</h1>
            </div>
            <div class="d-lg-block d-none px-0 pt-5">
                <h1 class="h3 text-secondary fw-normal mb-4" data-aos="fade-left" data-aos-duration="1500">Onde estamos</h1>
            </div>

            <div class="mb-4 pb-2" data-aos="fade-left" data-aos-duration="1800">
                <h2 class="h6 text-primary text-uppercase mb-2">Portugal</h2>
                <address>
                    <p class="text-primary">Av. Mar. Gomes da Costa 19, 1800-255 Lisboa, Portugal</p>
                </address>
                <a href="mailto:info@atlantichub.com" class="d-flex w-100 align-items-center mb-1">
                    <img class="me-2" src="<?= $home; ?>/assets/icons/icon-envelop.svg" alt="Ícone de e-mail">
                    info@atlantichub.com
                </a>
                <a href="tel:+351910297331" class="d-flex w-100 align-items-center mb-1">
                    <img class="me-2" src="<?= $home; ?>/assets/icons/icon-phone.svg" alt="Ícone de telefone">
                    +351 910 297 331
                </a>
            </div>

            <div class="mb-4" data-aos="fade-left" data-aos-duration="1800">
                <h2 class="h6 text-primary text-uppercase mb-2">Brazil</h2>
                <address>
                    <p class="text-primary">Alameda Terracota, 185 - Cerâmica, São Caetano do Sul - SP, 09531-190</p>
                </address>
                <a href="mailto:info@atlantichub.com" class="d-flex w-100 align-items-center mb-1">
                    <img class="me-2" src="<?= $home; ?>/assets/icons/icon-envelop.svg" alt="Ícone de e-mail">
                    info@atlantichub.com
                </a>
                <a href="tel:+351910297331" class="d-flex w-100 align-items-center mb-1">
                    <img class="me-2" src="<?= $home; ?>/assets/icons/icon-phone.svg" alt="Ícone de telefone">
                    +351 910 297 331
                </a>
            </div>
        </div>
    </div>
</section>

<?php
get_template_part('partials/footer');
?>