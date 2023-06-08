<?php
require("../partials/header.php");
?>

<!-- BANNER INTRO -->
<section id="banner-contato" class="banner justify-content-center pt-5">
    <div class="mask-banner"></div>
    <div class="container">
        <div class="row w-100">
            <div class="title-banner col-4 ms-3">
                <h1 class="text-white text-uppercase">Contato</h1>
                <span>Contato</span>
            </div>
        </div>
    </div>
</section>

<!-- FALE CONOSCO -->
<section id="fale-conosco" class="container py-5">
    <div class="row w-100 mx-0">
        <div class="col-12">
            <h1 class="text-primary text-uppercase fw-normal mb-3">Fale conosco</h1>
            <h2 class="h6 text-primary mb-5">
                Se você está interessado em nossos serviços ou está a procura de um desafio profissional emocionante,
                em uma empresa jovem e dinâmica, mande-nos uma mensagem.
            </h2>
        </div>

        <form class="col-12">
            <div class="mb-3">
                <input type="text" class="form-control" id="nome" aria-describedby="nome" placeholder="Nome Completo*">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Seu email*">
            </div>
            <div class="mb-3">
                <input type="tel" class="form-control" id="telefone" aria-describedby="telefone" placeholder="Telefone*">
            </div>
            <div class="mb-5">
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
            <button type="submit" class="btn text-primary d-flex align-items-center bg-transparent text-uppercase me-auto pt-0">
                Enviar
                <span class="material-symbols-outlined ms-2" style="font-size: 35px;">
                    arrow_right_alt
                </span>
            </button>
        </form>
    </div>
</section>

<!-- ONDE ESTAMOS -->
<section id="onde-estamos" class="container pb-5">
    <div class="row w-100 mx-0 px-3">
        <div class="col-12 border-top border-primary px-0 pt-5">
            <h1 class="display-4 text-secondary fw-normal mb-4">Onde estamos</h1>
        </div>

        <div class="col-12 px-0 mb-4 pb-2">
            <h2 class="h6 text-primary text-uppercase mb-2">Portugal</h2>
            <address>
                <p class="text-primary">Av. Mar. Gomes da Costa 19, 1800-255 Lisboa, Portugal</p>
            </address>
            <a href="mailto:info@atlantichub.com" class="d-flex w-100 align-items-center mb-1">
                <img class="me-2" src="../assets/icons/icon-envelop.svg" alt="Ícone de e-mail">
                info@atlantichub.com
            </a>
            <a href="tel:+351910297331" class="d-flex w-100 align-items-center mb-1">
                <img class="me-2" src="../assets/icons/icon-phone.svg" alt="Ícone de telefone">
                +351 910 297 331
            </a>
        </div>
        
        <div class="col-12 px-0 mb-4">
            <h2 class="h6 text-primary text-uppercase mb-2">Brazil</h2>
            <address>
                <p class="text-primary">Alameda Terracota, 185 - Cerâmica, São Caetano do Sul - SP, 09531-190</p>
            </address>
            <a href="mailto:info@atlantichub.com" class="d-flex w-100 align-items-center mb-1">
                <img class="me-2" src="../assets/icons/icon-envelop.svg" alt="Ícone de e-mail">
                info@atlantichub.com
            </a>
            <a href="tel:+351910297331" class="d-flex w-100 align-items-center mb-1">
                <img class="me-2" src="../assets/icons/icon-phone.svg" alt="Ícone de telefone">
                +351 910 297 331
            </a>
        </div>
    </div>
</section>

<?php
require("../partials/footer.php");
?>