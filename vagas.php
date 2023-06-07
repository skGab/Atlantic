<?php
include("partials/header.php");
?>

<!-- MAIN INTRO -->
<section id="banner-vagas" class="banner pt-5">
    <div class="mask-banner"></div>
    <div class="container">
        <div class="row w-100">
            <div class="title-banner col-4 ms-3">
                <h1 class="text-white text-uppercase">Vagas</h1>
                <span>Vagas</span>
            </div>
            <div class="text-banner pe-4 pt-3 ms-3">
                <p class="text-white pe-5">
                    <small>
                        Se você tem espírito empreendedor e gosta de ampliar horizontes, inscreva-se para as vagas ou deixe seu currículo.
                    </small>
                </p>
            </div>
            <form class="filter-banner bg-light col-7 mt-3 ms-3 px-3 py-2">
                <label class="mb-2 text-primary"><strong>Filtrar por:</strong></label>
                <select class="form-select" aria-label="Área de atuação">
                    <option selected class="ps-0">Área de atuação</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select" aria-label="Estado">
                    <option selected class="ps-0">Estado</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select" aria-label="Local de trabalho">
                    <option selected class="ps-0">Local de trabalho</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </form>
        </div>
    </div>
</section>



<?php
include("partials/footer.php");
?>