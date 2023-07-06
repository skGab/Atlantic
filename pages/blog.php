<?php

/**
 * Template Name: Blog
 */

get_template_part('partials/header');
$home = get_stylesheet_directory_uri();

?>

<!-- ARTIGOS EM DESTAQUE -->
<section id="destaque-artigos" class="container py-5 mt-5">
    <div class="row justify-content-lg-between w-100 mx-0 mt-lg-5">
        <div class="col-lg-10 col-12" data-aos="fade-right" data-aos-duration="1200">
            <h1 class="text-primary d-lg-block d-none fw-normal text-uppercase mb-4">Blog</h1>
            <h1 class="text-primary d-lg-none d-block fw-normal text-uppercase display-4 mb-3">Blog</h1>
        </div>

        <div class="col-lg-5 col-12 mb-4" data-aos="fade-right" data-aos-duration="1200">
            <?php
            $destaque_args = array(
                'post_type' => 'post',
                'posts_per_page' => 1,
                'category_name' => 'destaques'
            );
            $destaque_posts = new WP_Query($destaque_args);
            if ($destaque_posts->have_posts()) : while ($destaque_posts->have_posts()) : $destaque_posts->the_post();
            ?>
                    <div class="card bg-light w-100 rounded-0 border-0">
                        <div class="position-relative">
                            <img src="<?php the_post_thumbnail_url() ?>" class="card-img-top rounded-0" alt="Capa do Post">

                            <div class="info-post">
                                <a href="" class="small text-secondary bg-secondary text-light fw-light rounded-pill px-3 py-1 me-2"><?php echo ucfirst($destaque_args['category_name']); ?></a>
                                <time datetime="2021-12-13" class="small text-secondary bg-light rounded-pill px-3 py-1 me-2"><?php the_date(); ?></time>
                            </div>
                        </div>

                        <div class="box1"></div>

                        <div class="card-body px-4 pb-4">
                            <h2 class="h5 card-title text-secondary"><?php echo get_the_title() ?></h2>

                            <p class="card-text small text-primary">
                                <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                            </p>

                            <a href="<?php the_permalink() ?>" class="text-secondary d-flex w-100 align-items-center">
                                Ler mais
                                <span class="material-symbols-outlined ms-3" style="font-size: 30px;">
                                    arrow_right_alt
                                </span>
                            </a>
                        </div>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>

        <?php
        $blog_args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
        );
        $blog_posts = new WP_Query($blog_args);
        ?>
        <div class="col-lg-5 col-12 d-flex flex-column mb-lg-0 mb-4" data-aos="fade-left" data-aos-duration="1200">
            <?php
            if ($blog_posts->have_posts()) :
                $blog_posts->the_post();
            ?>
                <div class="card bg-light w-100 rounded-0 border-0 position-relative mb-lg-5 mb-4">
                    <div class="row g-0">
                        <div class="col-12 col-sm-6">
                            <img src="<?php the_post_thumbnail_url() ?>" class="img-cover rounded-0" alt="Capa do Post" style="height: 198px !important;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="card-body">
                                <h2 class="h5 card-title text-secondary mb-0 mt-lg-2"><?php echo get_the_title() ?></h2>
                                <time datetime="2021-12-13" class="card-text small text-primary"><?php the_date(); ?></time>
                                <a href="<?php the_permalink() ?>" class="text-secondary d-flex w-100 align-items-center mt-lg-5 mt-2 pt-lg-3">
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

                <?php
                if ($blog_posts->have_posts()) :
                    $blog_posts->the_post();
                ?>
                    <div class="card bg-light w-100 rounded-0 border-0 position-relative mb-lg-3">
                        <div class="row g-0">
                            <div class="col-12 col-sm-6">
                                <img src="<?php the_post_thumbnail_url() ?>" class="d-block w-100 h-100 rounded-0" alt="Capa do Post" style="height: 198px !important;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="card-body">
                                    <h2 class="h5 card-title text-secondary mb-0 mt-lg-2"><?php echo get_the_title() ?></h2>
                                    <time datetime="2021-12-13" class="card-text small text-primary"><?php the_date(); ?></time>
                                    <a href="<?php the_permalink() ?>" class="text-secondary d-flex w-100 align-items-center mt-lg-5 mt-2 pt-lg-3">
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

        <div class="col-2 d-lg-inline d-none pb-4 px-0" data-aos="fade-left" data-aos-duration="1200">
            <?php if ($blog_posts->have_posts()) :
                        $blog_posts->the_post(); ?>
                <div class="card bg-light w-100 h-100 align-items-strech rounded-0 border-0 position-relative">
                    <div class="row flex-column g-0">
                        <div class="col-12">
                            <img src="<?php the_post_thumbnail_url() ?>" class="d-block w-100 h-100 rounded-0" alt="Capa do Post">
                        </div>
                        <div class="col-12">
                            <div class="card-body">
                                <h2 class="h5 card-title text-secondary mt-3 mb-5 mb-0">
                                    <?php echo get_the_title() ?>
                                </h2>
                                <time datetime="2021-12-13" class="card-text small text-primary pt-5 mt-4"><?php the_date(); ?></time>
                                <a href="<?php the_permalink() ?>" class="text-secondary d-flex w-100 align-items-center mt-lg-4 mt-3">
                                    Ler mais
                                    <span class="material-symbols-outlined ms-1" style="font-size: 30px;">
                                        arrow_right_alt
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box1"></div>
                </div>
    <?php endif;
                endif;
            endif; ?>
        </div>
    </div>
</section>

<!-- NOTÍCIAS -->
<section id="noticias" class="container py-5">
    <div class="row justify-content-lg-between w-100 mx-0">
        <div class="col-lg-10 col-12 pe-5" data-aos="fade-right" data-aos-duration="1200">
            <h1 class="d-lg-none d-block text-primary fw-normal text-uppercase display-4 mb-3 pe-5">Acompanhe as noticias</h1>
            <h1 class="d-lg-block d-none text-primary fw-normal text-uppercase mb-4">Acompanhe as noticias</h1>
        </div>

        <div class="col-12 d-lg-none d-flex align-items-center w-100 mb-4 pb-2">
            <a href="https://www.facebook.com/atlantichub/" target="_blank" class="me-2">
                <img src="<?= $home; ?>/assets/icons/facebook.svg" alt="ícone do Facebook">
            </a>
            <a href="https://www.instagram.com/atlantic.hub/" target="_blank" class="me-2">
                <img src="<?= $home; ?>/assets/icons/instagram.svg" alt="Ícone do Instagram">
            </a>
            <a href="https://www.youtube.com/channel/UCVo_n0KQDbeZ4GpmQ-ey8dA/videos" target="_blank" class="me-2">
                <img src="<?= $home; ?>/assets/icons/youtube.svg" alt="Ícone do Youtube">
            </a>
        </div>

        <div class="col-lg-8 col-12 mb-5">
            <?php

            $noticias_args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'category_name' => "europa"
            );
            $noticias_posts = new WP_Query($noticias_args);
            if ($noticias_posts->have_posts()) : while ($noticias_posts->have_posts()) : $noticias_posts->the_post();
            ?>
                    <div class="card bg-transparent w-100 rounded-0 border-0 position-relative mb-lg-4 mb-5" data-aos="fade-right" data-aos-duration="1200">
                        <div class="row align-items-lg-center g-0">
                            <div class="col-12 col-sm-6 mb-4 mb-sm-0">
                                <img src="<?php the_post_thumbnail_url() ?>" class="img-cover rounded-0" alt="Capa do Post">
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="card-body py-0">
                                    <h2 class="h5 card-title text-secondary mb-2 pb-1">
                                        <?php echo get_the_title() ?>
                                    </h2>
                                    <p class="card-text text-primary mb-0 py-lg-3">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                    </p>
                                    <a href="<?php the_permalink() ?>" class="text-secondary d-flex w-100 align-items-center">
                                        Ler mais
                                        <span class="material-symbols-outlined ms-4" style="font-size: 40px;">
                                            arrow_right_alt
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="box2"></div>
                    </div>

                    <!-- <nav aria-label="Navegação dos posts">
                <ul class="pagination justify-content-lg-start justify-content-center align-items-center pt-lg-5 mt-2 mb-0">
                    <li class="page-item">
                        <a class="px-3" href="#">
                            <img src="<?= $home; ?>/assets/icons/double-arrow-left.svg" alt="Ícone de link para a primeira página de posts">
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="px-3" href="#">
                            <img src="<?= $home; ?>/assets/icons/arrow-left.svg" alt="Ícone de link para a página de posts anterior">
                        </a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">5</a>
                    </li>
                    <li class="page-item">
                        <a class="px-3" href="#">
                            <img src="<?= $home; ?>/assets/icons/arrow-right.svg" alt="Ícone de link para a próxima página de posts">
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="px-3" href="#">
                            <img src="<?= $home; ?>/assets/icons/double-arrow-right.svg" alt="Ícone de link para a última página de posts">
                        </a>
                    </li>
                </ul>
            </nav> -->

            <?php endwhile;
            endif; ?>
        </div>

        <div class="pesquisa col-3 d-lg-inline d-none" >
            <!-- <div class="bg-light w-100 rounded-0 border-0 px-4 py-4 mb-5">
                <h2 class="h5 card-title text-secondary pt-3">Pesquisar</h2>
                <form class="search-form position-relative mb-5 pb-3 d-flex">
                    <input class="form-control search-form-input" type="text" aria-label="Pesquisar">
                    <img src="<?= $home; ?>/assets/icons/icon-search-blue.svg" alt="">
                </form>
            </div> -->

            <div id="categorias" class="bg-light w-100 rounded-0 border-0 px-4 pt-4 pb-5 mb-5" data-aos="fade-left" data-aos-duration="1500">
                <h2 class="h5 card-title text-secondary pt-3 mb-4">Categorias</h2>
                <?php
                $categories = get_categories();
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

            <div id="tags" class="bg-light w-100 rounded-0 border-0 px-4 pt-4 pb-5 mb-5" data-aos="fade-left" data-aos-duration="1500">
                <h2 class="h5 card-title text-secondary pt-3 mb-4">Tags</h2>

                <?php
                $tags = get_tags( array('number' => 21) );
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
                        <a href="https://www.facebook.com/atlantichub/" target="_blank" class=" mx-2">
                            <img src="<?= $home; ?>/assets/icons/facebook.svg" alt="ícone do Facebook">
                        </a>
                        <a href="https://www.instagram.com/atlantic.hub/" target="_blank" class="mx-2">
                            <img src="<?= $home; ?>/assets/icons/instagram.svg" alt="Ícone do Instagram">
                        </a>
                        <a href="https://www.youtube.com/channel/UCVo_n0KQDbeZ4GpmQ-ey8dA/videos" target="_blank" class="mx-2">
                            <img src="<?= $home; ?>/assets/icons/youtube.svg" alt="Ícone do Youtube">
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
get_template_part('partials/footer');
?>