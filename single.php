<?php

/**
 * Template Name: Post
 */

get_template_part('partials/header');
$home = get_stylesheet_directory_uri();

while (have_posts()) :
    the_post();
?>
    <style>
        main {
            background-color: #fff !important;
        }
    </style>

    <!-- CONTEÚDO DO POST -->
    <section id="conteudo" class="container py-5 mt-5">
        <div class="row justify-content-lg-between w-100 mx-0 mt-lg-5">
            <div class="col-lg-7 col-12">
                <h1 class="text-primary fw-normal mb-lg-4 mb-3" data-aos="fade-right" data-aos-duration="1200">
                    <?php the_title(); ?>
                </h1>

                <?php if (has_post_thumbnail()) :
                    $thumb_url = get_the_post_thumbnail_url();  ?>
                    <img src="<?php echo $thumb_url ?>" class="d-block w-100 mb-lg-4 mb-3" alt="Capa do Post">
                <?php else : ?>
                    <img src="<?php echo $home ?>/assets/images/default_post_thumb.webp" class="d-block w-100 mb-lg-4 mb-3" alt="Capa do Post">
                <?php endif ?>

                <!-- IMPLEMENTAR TEMPO ESTIMADO -->
                <!-- <h2 class="h5 card-title text-secondary">
                    Tempo estimado de Leitura: 7min
                </h2> -->

                <time datetime="2021-12-13" class="small text-secondary">Postado em <?php the_date(); ?></time>

                <!-- IMPLEMENTAR COMPARTILHAMENTO -->
                <!-- <h5 class="text-secondary small my-3">Compartilhe:</h5>

                <div class="d-flex align-items-center w-100 mb-4 pb-2">
                    <a href="#" class="me-3">
                        <img src="<?= $home; ?>/assets/icons/facebook-gray.svg" alt="ícone do Facebook">
                    </a>
                    <a href="#" class="me-3">
                        <img src="<?= $home; ?>/assets/icons/instagram-gray.svg" alt="Ícone do Instagram">
                    </a>
                    <a href="#" class="me-3">
                        <img src="<?= $home; ?>/assets/icons/twitter-gray.svg" alt="Ícone do Twitter">
                    </a>
                    <a href="#" class="me-3">
                        <img src="<?= $home; ?>/assets/icons/whatsapp-gray.svg" alt="Ícone do Youtube">
                    </a>
                    <a href="#" class="me-3">
                        <img src="<?= $home; ?>/assets/icons/linkedin-gray.svg" alt="Ícone do Youtube">
                    </a>
                    <a href="#" class="me-3">
                        <img src="<?= $home; ?>/assets/icons/envelop-gray.svg" alt="Ícone do Youtube">
                    </a>
                </div> -->

                <div class="text-primary mt-4">
                    <?php the_content(); ?>
                </div>

                <!-- FALAR COM ESPECIALISTAS -->
                <section id="especialitas" class="container-fluid d-lg-block d-none px-0 mt-5 pt-5">
                    <div class="row position-relative w-100 mx-0">
                        <div class="col-12 px-0">
                            <img class="img-cover" src="<?= $home; ?>/assets/images/banner_especialistas.png" alt="Vista de Portugal" style="max-height: 150px !important;">
                        </div>
                        <div class="col-4 bg-primary py-5 ps-4 position-absolute bottom-0 ms-4" style="top: -3rem;">
                            <div class="ps-2 pe-4" data-aos="fade-right" data-aos-duration="1500">
                                <h3 class="h5 fw-light text-white mb-3 pb-1">Quer levar sua empresa para Portugal?</h3>
                            </div>
                            <div class="ps-2 pb-3" data-aos="fade-right" data-aos-duration="1800">
                                <a href="#" class="h6 mb-0 fw-normal text-white text-uppercase border border-white rounded-pill px-3 py-1">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- INFORMAÇÕES DO AUTOR -->
                <section id="autor" class="d-lg-block d-none container-fluid px-0 pt-5 pb-4">
                    <div class="row w-100 mx-0">
                        <div class="col-12">
                            <h4 class="h1 text-secondary mb-4" data-aos="fade-right" data-aos-duration="1500">Sobre o autor</h4>
                            <div class="container-fluid px-0 mb-4 pb-2">
                                <div class="row align-items-start w-100 mx-0">
                                    <div class="col-4 position-relative">
                                        <div class="box"></div>
                                        <div class="img-autor">
                                            <?php echo get_avatar(get_the_author_meta('ID'), 150); ?>
                                        </div>
                                    </div>
                                    <div class="col-7" data-aos="fade-left" data-aos-duration="1500">
                                        <p class="small text-primary">
                                            <?php echo get_the_author_meta('description'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- COMENTÁRIOS -->
                <!-- <section id="comentarios" class="container-fluid px-0 d-lg-block d-none pb-5">
                    <div class="row w-100 mx-0">
                        <div class="col-6">
                            <h5 class="h3 text-primary"><span>0</span> Comentários</h5>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="container-fluid px-0">
                                <form class="row justify-content-end align-items-center w-100 mx-0">
                                    <label class="col-4 px-0 col-form-label text-secondary fw-bold">Ordenar por:</label>
                                    <div class="col-6 px-0">
                                        <select class="form-select fw-light text-secondary" aria-label="Default select example">
                                            <option selected>Mais antigo</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="container-fluid px-0">
                                <div class="row w-100 mx-0">
                                    <div class="col-2 px-0">
                                        <img src="<?= $home; ?>/assets/images/img-comment-autor.jpg" alt="Foto de Perfil do Autor do comentário" class="img-comentario-autor">
                                    </div>
                                    <div class="col-10">
                                        <form class="mb-3">
                                            <textarea placeholder="Escreva um comentário..." name="comentario" id="comentario" rows="5" class="form-control bg-light"></textarea>
                                        </form>
                                        <div class="d-flex align-items-center">
                                            <img class="icon-plugin me-2" src="../assets/icons/facebook-gray.svg" alt="Ícone Facebook">
                                            <span class="text-primary small">Plugin de comentários do Facebook</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->

                <!-- POSTS RELACIONADOS -->
                <section id="destaque-artigos" class="container-fluid px-0 d-lg-block d-none py-5 mt-5">
                    <div class="row justify-content-lg-between align-items-lg-start w-100 mx-0 px-4">
                        <div class="col-12">
                            <h1 class="text-secondary fw-normal mb-4">Posts relacionados</h1>
                        </div>
                        <div class="col-12 d-lg-none d-flex align-items-center w-100 mb-4">
                            <a href="#" class="text-secondary bg-light rounded-pill px-4 py-1 me-2">Categorias</a>
                            <a href="#" class="text-secondary bg-light rounded-pill px-4 py-1 me-2">Tags</a>
                        </div>

                        <?php
                        $related_args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4, // Altere este número para quantos posts você deseja mostrar
                            'post__not_in' => array(get_the_ID()), // Exclui o post atual
                            // 'author' => get_the_author_meta('ID'), // Filtra pelos posts do mesmo autor
                        );

                        $related_query = new WP_Query($related_args);

                        if ($related_query->have_posts()) {
                            while ($related_query->have_posts()) {
                                $related_query->the_post();

                                $categories = get_the_category();
                        ?>

                                <div class="col-5 flex-grow-1 me-3 px-0 mb-5 pb-4" data-aos="fade-up" data-aos-duration="1500">
                                    <div class="card bg-light w-100 rounded-0 border-0">
                                        <div class="position-relative">
                                            <img src="<?= $home; ?>/assets/images/img-post1.jpg" class="card-img-top rounded-0" alt="Capa do Post" style="height: 200px !important;">
                                        </div>

                                        <div class="box1"></div>

                                        <div class="card-body px-4 pb-4">
                                            <div class="d-flex align-items-center my-3">
                                                <a href="#" class="small text-secondary bg-secondary text-light fw-light rounded-pill px-3 py-0 me-0"><?php echo $categories[0]->name ?></a>

                                                <time datetime="2021-12-13" class="small text-secondary bg-light rounded-pill px-2 py-0"><?php the_date(); ?></time>
                                            </div>

                                            <h2 class="h5 card-title text-secondary"><?php echo get_the_title() ?></h2>

                                            <p class="card-text small text-primary">
                                                <?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?>
                                            </p>

                                            <a href="<?php the_permalink() ?>" class="text-secondary d-flex w-100 align-items-center">
                                                Ler mais
                                                <span class="material-symbols-outlined ms-3" style="font-size: 30px;">
                                                    arrow_right_alt
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        wp_reset_postdata(); // Reset the query
                        ?>
                    </div>
                </section>
            </div>

            <div class="pesquisa col-3 d-lg-inline d-none">
                <!-- IMPLEMENTAR PESQUISA -->
                <!-- <div class="bg-light w-100 rounded-0 border-0 px-4 py-4 mb-5">
                    <h2 class="h5 card-title text-secondary pt-3">Pesquisar</h2>
                    <form class="search-form position-relative mb-5 pb-3 d-flex" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                        <input class="form-control search-form-input" type="text" aria-label="Pesquisar" value="<?php echo get_search_query(); ?>">
                        <button type="submit" class="border-0 bg-transparent p-0">
                            <img src="<?= $home; ?>/assets/icons/icon-search-blue.svg" alt="">
                        </button>
                    </form>

                    <?php echo get_search_form() ?>
                </div> -->

                <div id="categorias" class="bg-light w-100 rounded-0 border-0 px-4 pt-4 pb-5 mb-5" data-aos="fade-left" data-aos-duration="1500">
                    <h2 class="h5 card-title text-secondary pt-3 mb-4">Categorias</h2>
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)) :
                        foreach ($categories as $category) :
                    ?>

                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="text-primary d-block mb-0">
                                <?php echo esc_html($category->name); ?>
                            </a>

                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>

                <div id="tags" class="bg-light w-100 rounded-0 border-0 px-4 pt-4 pb-5 mb-5" data-aos="fade-left" data-aos-duration="1800">
                    <h2 class="h5 card-title text-secondary pt-3 mb-4">Tags</h2>

                    <?php
                    $tags = get_the_tags();
                    if (!empty($tags)) :
                        foreach ($tags as $tag) :
                    ?>

                            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="text-primary d-block mb-0">
                                <?php echo esc_html($tag->name); ?>
                            </a>

                    <?php
                        endforeach;
                    endif;
                    ?>
                </div>

                <div class="container-fluid px-0 mt-5">
                    <div class="row w-100 mx-0">
                        <div class="col-12 d-lg-flex d-none justify-content-center align-items-center w-100 mb-4 pb-2">
                            <a href="#" class="mx-2" data-aos="fade-up" data-aos-duration="1200">
                                <img src="<?= $home; ?>/assets/icons/facebook.svg" alt="ícone do Facebook">
                            </a>
                            <a href="#" class="mx-2" data-aos="fade-up" data-aos-duration="1500">
                                <img src="<?= $home; ?>/assets/icons/instagram.svg" alt="Ícone do Instagram">
                            </a>
                            <a href="#" class="mx-2" data-aos="fade-up" data-aos-duration="1800">
                                <img src="<?= $home; ?>/assets/icons/youtube.svg" alt="Ícone do Youtube">
                            </a>
                            <a href="#" class="mx-2" data-aos="fade-up" data-aos-duration="2000">
                                <img src="<?= $home; ?>/assets/icons/twitter.svg" alt="Ícone do Twitter">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FALAR COM ESPECIALISTAS -->
    <section id="especialitas" class="container-fluid d-lg-none d-block px-0 mt-5">
        <div class="row position-relative w-100 mx-0">
            <div class="col-12 px-0">
                <img class="img-cover" src="<?= $home; ?>/assets/images/img-contact-post.jpg" alt="Vista de Portugal">
            </div>
            <div class="col-7 bg-primary py-5 ps-4 position-absolute bottom-0 ms-4">
                <div class="ps-2 pe-4" data-aos="fade-right" data-aos-duration="1500">
                    <h3 class="fw-light text-white mb-3 pb-1">Quer levar <br> sua empresa para Portugal?</h3>
                </div>
                <div class="ps-2" data-aos="fade-right" data-aos-duration="1500">
                    <a href="#" class="h6 mb-0 fw-normal text-white text-uppercase border border-white rounded-pill px-3 py-1">Saiba mais</a>
                </div>
            </div>
        </div>
    </section>

    <!-- INFORMAÇÕES DO AUTOR -->
    <section id="autor" class="d-lg-none pt-5 pb-4">
        <div class="container">
            <div class="row w-100 mx-0">
                <div class="col-12">
                    <div class="container-fluid px-0 mb-4 pb-2">
                        <div class="row align-items-end w-100 mx-0">
                            <div class="col-5 position-relative">
                                <div class="box"></div>
                                <div class="img-autor">
                                    <?php echo get_avatar(get_the_author_meta('ID'), 150); ?>
                                </div>
                            </div>
                            <div class="col-7" data-aos="fade-right" data-aos-duration="1500">
                                <h4 class="text-secondary mb-0">Sobree o autor</h4>
                            </div>
                        </div>
                    </div>

                    <p class="small text-primary" data-aos="fade-left" data-aos-duration="1500">
                        <?php echo get_the_author_meta('description'); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- COMENTÁRIOS -->
    <!-- <section id="comentarios" class="d-lg-none d-block pb-5">
        <div class="container">
            <div class="row w-100 mx-0">
                <div class="col-12">
                    <h5 class="text-secondary"><span>0</span> Comentários</h5>
                </div>
                <div class="col-12 mb-3">
                    <div class="container-fluid px-0">
                        <form class="row align-items-center w-100 mx-0">
                            <label class="col-4 px-0 col-form-label text-secondary fw-bold">Ordenar por:</label>
                            <div class="col-6 px-0">
                                <select class="form-select fw-light text-secondary" aria-label="Default select example">
                                    <option selected>Mais antigo</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12">
                    <div class="container-fluid px-0">
                        <div class="row w-100 mx-0">
                            <div class="col-2 px-0">
                                <img src="<?= $home; ?>/assets/images/img-comment-autor.jpg" alt="Foto de Perfil do Autor do comentário" class="img-comentario-autor">
                            </div>
                            <div class="col-10">
                                <form class="mb-2">
                                    <textarea placeholder="Escreva um comentário..." name="comentario" id="comentario" rows="5" class="form-control bg-light"></textarea>
                                </form>
                                <div class="d-flex align-items-center">
                                    <img class="icon-plugin me-2" src="../assets/icons/facebook-gray.svg" alt="Ícone Facebook">
                                    <span class="text-primary small">Plugin de comentários do Facebook</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- POSTS RELACIONADOS -->
    <section id="destaque-artigos" class="container-fluid px-0 d-lg-none d-block py-5">
        <div class="row w-100 mx-0 px-3">
            <div class="col-12">
                <h1 class="text-secondary fw-normal mb-4">Posts relacionados</h1>
            </div>

            <?php
            $related_args_mob = array(
                'post_type' => 'post',
                'posts_per_page' => 3, // Altere este número para quantos posts você deseja mostrar
                'post__not_in' => array(get_the_ID()), // Exclui o post atual
                // 'author' => get_the_author_meta('ID'), // Filtra pelos posts do mesmo autor
            );

            $related_query_mob = new WP_Query($related_args_mob);

            if ($related_query_mob->have_posts()) {
                while ($related_query_mob->have_posts()) {
                    $related_query_mob->the_post();

                    $categories = get_the_category();
            ?>
                    <div class="col-lg-4 col-12 mb-4" data-aos="fade-right" data-aos-duration="1500">
                        <div class="card bg-light w-100 rounded-0 border-0 position-relative">
                            <div class="row g-0">
                                <div class="col-6">
                                    <img src="<?= $home; ?>/assets/images/img-post2.jpg" class="d-block w-100 h-100 rounded-0" alt="Capa do Post">
                                </div>
                                <div class="col-6">
                                    <div class="card-body">
                                        <h2 class="h6 card-title text-secondary mb-0"><?php echo get_the_title() ?></h2>
                                        <time datetime="2021-12-13" class="card-text small text-primary"><?php the_date(); ?></time>
                                        <a href="<?php the_permalink() ?>" class="text-secondary d-flex w-100 align-items-center mt-2">
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
            <?php
                }
            }
            wp_reset_postdata(); // Reset the query
            ?>
        </div>
    </section>
<?php
endwhile;
get_template_part('partials/footer');
?>