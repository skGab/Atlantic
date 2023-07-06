<?php

/**
 * Template Name: Categorias
 */

get_template_part('partials/header');
$home = get_stylesheet_directory_uri();

?>

<!-- CATEGORIAS -->
<section id="noticias" class="container py-5 mt-5">
    <div class="row justify-content-lg-between w-100 mx-0 mt-lg-5">

        <?php if (have_posts()) : ?>
            <div class="col-lg-10 col-12 pe-5 mb-4">
                <h1 class="d-lg-none d-block text-primary fw-normal display-4 mb-3 pe-5">Categoria - <?php single_cat_title(); ?></h1>
                <h1 class="d-lg-block d-none text-primary fw-normal mb-4">Categoria - <?php single_cat_title(); ?> </h1>
            </div>

            <!-- <div class="pesquisa col-lg-3 col-12 d-lg-none d-inline">
            <div class="bg-light w-100 rounded-0 border-0 px-4 py-4 mb-4 mt-2">
                <h2 class="h5 card-title text-secondary pt-3">Pesquisar</h2>
                <form class="search-form position-relative mb-5 pb-3 d-flex">
                    <input class="form-control search-form-input" type="text" aria-label="Pesquisar">
                    <img src="<?= $home; ?>/assets/icons/icon-search-blue.svg" alt="">
                </form>
            </div>
        </div> -->

            <div class="col-lg-8 col-12 mb-5">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="card bg-transparent w-100 rounded-0 border-0 position-relative mb-lg-4 mb-5">
                        <div class="row align-items-lg-center g-0">
                            <div class="col-12 col-sm-6 mb-4 mb-sm-0">
                                <img src="<?php the_post_thumbnail_url() ?>" class="img-cover rounded-0" alt="Capa do Post">
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="card-body py-0">
                                    <h2 class="h5 card-title text-secondary mb-2 pb-1">
                                        <?php the_title(); ?>
                                    </h2>
                                    <p class="card-text text-primary mb-0 py-lg-3">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>" class="text-secondary d-flex w-100 align-items-center">
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

                <?php endwhile; ?>

                <?php the_posts_navigation(); ?>

            <?php else : ?>
                <p>No posts found for this tag.</p>
            <?php endif; ?>
            </div>

            <div class="pesquisa col-lg-3 col-12 d-lg-inline d-none">
                <!-- <div class="bg-light w-100 rounded-0 border-0 px-4 py-4 mb-5">
                <h2 class="h5 card-title text-secondary pt-3">Pesquisar</h2>
                <form class="search-form position-relative mb-5 pb-3 d-flex">
                    <input class="form-control search-form-input" type="text" aria-label="Pesquisar">
                    <img src="<?= $home; ?>/assets/icons/icon-search-blue.svg" alt="">
                </form>
            </div> -->

                <div id="categorias" class="bg-light w-100 rounded-0 border-0 px-4 pt-4 pb-5 mb-5">
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
            </div>
    </div>
</section>

<?php
get_template_part('partials/footer');
?>