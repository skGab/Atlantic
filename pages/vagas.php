<?php

/**
 * Template Name: Vagas
 */

get_template_part('partials/header');
$home = get_stylesheet_directory_uri();

?>
<!-- BANNER INTRO -->
<section id="banner-vagas" class="banner pt-5" style="background: url('<?= $home; ?>/assets/images/banner-vagas.jpg') no-repeat center center;">
    <div class="mask-banner"></div>
    <div class="container ps-lg-5">
        <div class="row w-100 ps-lg-5">
            <div class="title-banner col-lg-1 col-4 ms-3">
                <h1 class="text-white text-uppercase">Vagas</h1>
                <span>Vagas</span>
            </div>
            <div class="text-banner pe-4 pt-3 ms-3">
                <p class="text-white pe-5 pb-lg-5 mb-lg-5">
                    <small>
                        Se você tem espírito empreendedor e gosta de ampliar horizontes, inscreva-se para as vagas ou deixe seu currículo.
                    </small>
                </p>
            </div>
            <form class="filter-banner bg-light col-lg-9 col-7 mt-lg-5 mt-3 ms-3 ms-lg-auto me-lg-5 px-3 py-2">
                <label class="ps-lg-4 me-lg-2 mb-2 text-primary"><strong>Filtrar por:</strong></label>
                <select class="form-select ms-4 me-5" aria-label="Área de atuação">
                    <option selected class="ps-0">Área de atuação</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <select class="form-select me-5" aria-label="Estado">
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

<!-- VAGAS -->
<section id="vagas" class="container py-5 mt-5 px-0">
    <div class="row w-100 mx-0">
        <div class="col-lg-4 col vaga mb-lg-0 mb-5 pb-lg-5 px-lg-5 px-4 border-end border-secondary">
            <div class="mb-4">
                <h2 class="text-center rounded-pill text-white text-uppercase fw-light bg-secondary h6 mb-0 py-2">Área de atuação | SP | Presencial</h2>
            </div>
            <h1 class="text-primary fw-bold mb-3">Título da Vaga</h1>
            <p class="text-primary fw-light mb-4">
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
                <br><br>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
            </p>
            <a type="button" class="text-secondary fw-bold d-flex align-items-center mb-3" data-bs-toggle="modal" data-bs-target="#modal-vaga">
                Ver mais
                <span class="material-symbols-outlined ms-3">
                    expand_more
                </span>
            </a>
            <a href="#candidate-se" class="btn btn-outline-primary text-uppercase rounded-pill mb-lg-5">Candidate-se</a>
        </div>
        <div class="col-12 d-lg-none d-block px-0 bg-light mb-5" style="height: 2px;"></div>

        <div class="col-lg-4 col vaga mb-lg-0 mb-5 pb-lg-5 px-lg-5 px-4 border-end border-secondary">
            <div class="mb-4">
                <h2 class="text-center rounded-pill text-white text-uppercase fw-light bg-secondary h6 mb-0 py-2">Área de atuação | SP | Presencial</h2>
            </div>
            <h1 class="text-primary fw-bold mb-3">Título da Vaga</h1>
            <p class="text-primary fw-light mb-4">
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
                <br><br>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
            </p>
            <a type="button" class="text-secondary fw-bold d-flex align-items-center mb-3" data-bs-toggle="modal" data-bs-target="#modal-vaga">
                Ver mais
                <span class="material-symbols-outlined ms-3">
                    expand_more
                </span>
            </a>
            <a href="#candidate-se" class="btn btn-outline-primary text-uppercase rounded-pill mb-lg-5">Candidate-se</a>
        </div>
        <div class="col-12 d-lg-none d-block px-0 bg-light mb-5" style="height: 2px;"></div>

        <div class="col-lg-4 col vaga mb-lg-0 mb-5 pb-lg-5 px-lg-5 px-4">
            <div class="mb-4">
                <h2 class="text-center rounded-pill text-white text-uppercase fw-light bg-secondary h6 mb-0 py-2">Área de atuação | SP | Presencial</h2>
            </div>
            <h1 class="text-primary fw-bold mb-3">Título da Vaga</h1>
            <p class="text-primary fw-light mb-4">
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
                <br><br>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
            </p>
            <a type="button" class="text-secondary fw-bold d-flex align-items-center mb-3" data-bs-toggle="modal" data-bs-target="#modal-vaga">
                Ver mais
                <span class="material-symbols-outlined ms-3">
                    expand_more
                </span>
            </a>
            <a href="#candidate-se" class="btn btn-outline-primary text-uppercase rounded-pill mb-lg-5">Candidate-se</a>
        </div>
        <div class="col-12 d-lg-none d-block px-0 bg-light mb-5" style="height: 2px;"></div>
        
        <div class="col-lg-4 col vaga mb-lg-0 mb-5 pb-lg-5 px-lg-5 px-4 border-end border-secondary">
            <div class="mb-4">
                <h2 class="text-center rounded-pill text-white text-uppercase fw-light bg-secondary h6 mb-0 py-2">Área de atuação | SP | Presencial</h2>
            </div>
            <h1 class="text-primary fw-bold mb-3">Título da Vaga</h1>
            <p class="text-primary fw-light mb-4">
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
                <br><br>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
            </p>
            <a type="button" class="text-secondary fw-bold d-flex align-items-center mb-3" data-bs-toggle="modal" data-bs-target="#modal-vaga">
                Ver mais
                <span class="material-symbols-outlined ms-3">
                    expand_more
                </span>
            </a>
            <a href="#candidate-se" class="btn btn-outline-primary text-uppercase rounded-pill mb-lg-5">Candidate-se</a>
        </div>
        <div class="col-12 d-lg-none d-block px-0 bg-light mb-5" style="height: 2px;"></div>

        <div class="col-lg-4 col vaga mb-lg-0 mb-5 pb-lg-5 px-lg-5 px-4 border-end border-secondary">
            <div class="mb-4">
                <h2 class="text-center rounded-pill text-white text-uppercase fw-light bg-secondary h6 mb-0 py-2">Área de atuação | SP | Presencial</h2>
            </div>
            <h1 class="text-primary fw-bold mb-3">Título da Vaga</h1>
            <p class="text-primary fw-light mb-4">
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
                <br><br>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
            </p>
            <a type="button" class="text-secondary fw-bold d-flex align-items-center mb-3" data-bs-toggle="modal" data-bs-target="#modal-vaga">
                Ver mais
                <span class="material-symbols-outlined ms-3">
                    expand_more
                </span>
            </a>
            <a href="#candidate-se" class="btn btn-outline-primary text-uppercase rounded-pill mb-lg-5">Candidate-se</a>
        </div>
        <div class="col-12 d-lg-none d-block px-0 bg-light mb-5" style="height: 2px;"></div>

        <div class="col-lg-4 col vaga mb-lg-0 mb-5 pb-lg-5 px-lg-5 px-4">
            <div class="mb-4">
                <h2 class="text-center rounded-pill text-white text-uppercase fw-light bg-secondary h6 mb-0 py-2">Área de atuação | SP | Presencial</h2>
            </div>
            <h1 class="text-primary fw-bold mb-3">Título da Vaga</h1>
            <p class="text-primary fw-light mb-4">
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
                <br><br>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
            </p>
            <a type="button" class="text-secondary fw-bold d-flex align-items-center mb-3" data-bs-toggle="modal" data-bs-target="#modal-vaga">
                Ver mais
                <span class="material-symbols-outlined ms-3">
                    expand_more
                </span>
            </a>
            <a href="#candidate-se" class="btn btn-outline-primary text-uppercase rounded-pill mb-lg-5">Candidate-se</a>
        </div>
    </div>
</section>

<!-- FORMULÁRIO DE CANDIDATURA -->
<section id="form-candidatura" class="d-block bg-gray-light pt-lg-0 pt-5">
    <div class="container me-lg-0 pt-lg-0 pt-5 px-0">
        <div class="row align-items-lg-center w-100 mx-0">
            <div class="col-lg-6 col-12 py-lg-5">
                <h1 class="text-primary text-uppercase col-12">Candidate-se</h1>
                <p class="text-primary small col-lg-12 col-9">
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.
                </p>
    
                <form class="row text-end">
                    <div class="col-lg-6 col-12 mb-lg-2 mb-3">
                        <input type="text" class="form-control" id="nome" aria-describedby="nome" placeholder="Nome Completo*">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-2 mb-3">
                        <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Seu email*">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-2 mb-3">
                        <input type="tel" class="form-control" id="telefone" aria-describedby="telefone" placeholder="Telefone*">
                    </div>
                    <div class="col-lg-6 col-12 mb-lg-2 mb-3">
                        <input type="text" class="form-control" id="vaga" aria-describedby="vaga" placeholder="Vaga*">
                    </div>
                    <div class="mb-lg-2 mb-3">
                        <textarea class="form-control" id="mensagem" rows="5" placeholder="Mensagem*"></textarea>
                    </div>
                    <button type="submit" class="btn text-primary d-flex justify-content-lg-end align-items-center bg-transparent text-uppercase ms-auto">
                        Enviar
                        <span class="material-symbols-outlined ms-2" style="font-size: 35px;">
                            arrow_right_alt
                        </span>
                    </button>
                </form>
            </div>

            <div class="col-lg-6 col-12 ps-lg-5 px-0 position-relative mt-lg-0 mt-5">
                <div class="box"></div>
                <img class="img-cover" src="<?= $home; ?>/assets/images/img-form-candidatura.jpg" alt="Sala de trabalho">
            </div>
        </div>
    </div>
</section>

<!-- MODAL VAGA -->
<div class="modal fade" id="modal-vaga" tabindex="-1" aria-labelledby="modal-vaga" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-white">
            <div class="modal-body text-end pb-0 ps-4">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span class="material-symbols-outlined text-secondary" style="font-size: 35px;">
                        close
                    </span>
                </button>
                <div class="mb-4">
                    <h2 class="text-center rounded-pill text-white text-uppercase fw-light bg-secondary h6 mb-0 py-2">Área de atuação | SP | Presencial</h2>
                </div>
                <h1 class="text-start text-primary fw-bold mb-3 ps-2">Título da Vaga</h1>
                <p class="text-start text-primary fw-light mb-0 pe-2 ps-2">
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.
                    <br><br>
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.
                    <br><br>
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.
                    <br><br>
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.
                    <br><br>
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div>
</div>

<?php
get_template_part('partials/footer');
?>