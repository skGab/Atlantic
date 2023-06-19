<?php

/**
 * Template Name: Post
 */

get_template_part('partials/header');
$home = get_stylesheet_directory_uri();

?>


<style>
    main {
        background-color: #fff !important;
    }
</style>

<!-- CONTEÚDO DO POST -->
<section id="conteudo" class="container py-5 mt-5">
    <div class="row justify-content-lg-between w-100 mx-0 mt-lg-5">
        <div class="col-12 d-lg-none d-flex align-items-center w-100 mb-4">
            <a href="#" class="text-secondary bg-light rounded-pill px-4 py-1 me-2">Categorias</a>
            <a href="#" class="text-secondary bg-light rounded-pill px-4 py-1 me-2">Tags</a>
        </div>
        <div class="col-lg-7 col-12">
            <h1 class="text-primary fw-normal mb-lg-4 mb-3">
                Portugal, um dos países queridinhos para congressos e convenções
            </h1>
            <img src="<?= $home; ?>/assets/images/img-post1.jpg" class="d-block w-100 mb-lg-4 mb-3" alt="Capa do Post">
            <h2 class="h5 card-title text-secondary">
                Tempo estimado de Leitura: 7min

            </h2>
            <time datetime="2021-12-13" class="small text-secondary">Postado em 12 de julho de 2022 / eventos</time>
            <h5 class="text-secondary small my-3">Compartilhe:</h5>
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
            </div>

            <p class="text-primary">
                De acordo com o relatório da Associação Internacional de Congressos e Incentivos (ICCA) relativo a 2019, Portugal foi
                o 10º país do mundo que mais recebeu e organizou congressos e convenções, tendo subido uma posição desde o ano anterior,
                2018, e mantendo o sétimo lugar a nível europeu.
            </p>
            <p class="text-primary">
                No ranking das cidades, Lisboa destacava-se em 2º lugar mundial e europeu, tendo subido quatro posições desde 2018.
            </p>
            <p class="text-primary">
                O novo relatório de 2022 mostrou que Portugal é, agora, o 7º destino preferido do mundo para congressos, subindo três
                pontos no ranking mundial, e Lisboa segue sendo a segunda cidade mais requisitada.
            </p>
            <h5 class="text-primary text-uppercase my-3 pt-2">
                PORTUGAL E O MUNDO
            </h5>
            <p class="text-primary">
                De acordo com os dados do relatório divulgado em 2 de junho pelo Turismo de Portugal, olhando só para a Europa, o país
                subiu um lugar, figurando como o sexto destino mais procurado para este tipo de eventos.
            </p>
            <p class="text-primary">
                Por cidades, Lisboa manteve o segundo lugar em ambos os rankings, enquanto Porto, acompanhando a consolidação do país,
                subiu para 14ª posição a nível europeu e para a 16ª a nível mundial.
            </p>
            <p class="text-primary">
                Dado que os anos de 2020 e 2021 foram atípicos para todos os segmentos do setor do turismo e a indústria MICE (relativa
                à organização de reuniões, convenções e exibições) não foi exceção, a ICCA desenvolveu o Destination Performance Index
                que, segundo o Turismo de Portugal, tem como objetivo “reconhecer e recompensar o esforço dos destinos” designadamente
                no que diz respeito a “ganhar a licitação original, políticas Covid, adaptabilidade e capacidades tecnológicas para
                converter eventos no local em virtuais/híbridos”.
            </p>
            <p class="text-primary">
                Ainda conforme o Turismo de Portugal, no total, desde 2016, o Programa de Captação de Eventos Corporativos e Congressos
                Internacionais captou 347 novos congressos para o país, e em 2020 e 2021, “apesar do contexto vivido”, atraiu 30.
            </p>
            <p class="text-primary">
                Para este ano, tendo como enquadramento o recente modelo de apoio à captação de eventos Associativos/Corporativos no
                âmbito do Programa Portugal Events, encontram-se já captados 73 congressos internacionais/nacionais em todo o país.
            </p>
            <h5 class="text-primary text-uppercase my-3 pt-2">
                EVENTOS
            </h5>
            <p class="text-primary">
                Portugal oferece os mais variados eventos ao longo do ano. Confira alguns deles:
            </p>
            <p class="text-primary">
                <strong>Web Summit</strong>
            </p>
            <p class="text-primary pb-3">
                A Web Summit é a maior conferência da Europa em tecnologias, realizada anualmente desde 2009.
                Todos os anos, mais de 70 mil participantes e empresas se reúnem para discutir e redefinir o futuro da tecnologia no
                mundo.
            </p>
            <p class="text-primary">
                <strong>Encontro com a Ciência e Tecnologia</strong>
            </p>
            <p class="text-primary pb-3">
                Promovido pela Fundação para a Ciência e a Tecnologia em colaboração com a Ciência Viva e com a Comissão Parlamentar de
                Educação e Ciência, contando ainda com o apoio institucional do Ministério da Ciência, Tecnologia e Ensino Superior, o
                encontro anual da ciência, tecnologia e inovação em Portugal é um fórum de debate e apresentação de novas ideias e
                parcerias entre os profissionais da área.
            </p>
            <p class="text-primary">
                <strong>Future.Works Tech Conference</strong>
            </p>
            <p class="text-primary">
                O antigo Landing Festival reúne desenvolvedores, profissionais e empreendedores da área de tecnologia com oportunidades
                de trabalho na Europa, palestras e fóruns de discussão.
            </p>
            <h5 class="text-primary text-uppercase my-3 pt-2">
                ATLANTIC STATION
            </h5>
            <p class="text-primary">
                O Atlantic Station é um hub de inovação em Lisboa que gera conexões entre os atores dos ecossistemas brasileiro e
                europeu.
            </p>
            <p class="text-primary">
                Em um ambiente plural com startups, grandes empresas, fundos de investimento, mentores e universidades, todos podem
                trocar experiências, gerar negócios e cocriar novas soluções.
            </p>
            <p class="text-primary">
                O hub também promove Happy Hours para integração da comunidade, salas de reunião, lounge, estúdio para gravação de
                vídeos e muito mais.
            </p>
            <p class="text-primary">
                No Atlantic Station LABS, projetos inovadores podem ser acelerados através da conexão com o Ecossistema de Inovação
                Europeu, em busca de promover interação, networking e negócios.
            </p>
            <p class="text-primary">
                Além disso, você também poderá participar de eventos da comunidade que ajudarão a impulsionar seus negócios.
            </p>
            <p class="text-primary">
                <strong>Visite o site e saiba mais!</strong>
            </p>

            <!-- FALAR COM ESPECIALISTAS -->
            <section id="especialitas" class="container-fluid d-lg-block d-none px-0 mt-5 pt-5">
                <div class="row position-relative w-100 mx-0">
                    <div class="col-12 px-0">
                        <img class="img-cover" src="<?= $home; ?>/assets/images/img-contact-post.jpg" alt="Vista de Portugal" style="max-height: 150px !important;">
                    </div>
                    <div class="col-4 bg-primary py-5 ps-4 position-absolute bottom-0 ms-4" style="top: -3rem;">
                        <div class="ps-2 pe-4">
                            <h3 class="h5 fw-light text-white mb-3 pb-1">Quer levar sua empresa para Portugal?</h3>
                        </div>
                        <div class="ps-2 pb-3">
                            <a href="#" class="h6 mb-0 fw-normal text-white text-uppercase border border-white rounded-pill px-3 py-1">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- INFORMAÇÕES DO AUTOR -->
            <section id="autor" class="d-lg-block d-none container-fluid px-0 pt-5 pb-4">
                <div class="row w-100 mx-0">
                    <div class="col-12">
                        <h4 class="h1 text-secondary mb-4">Sobre o autor</h4>
                        <div class="container-fluid px-0 mb-4 pb-2">
                            <div class="row align-items-start w-100 mx-0">
                                <div class="col-4 position-relative">
                                    <div class="box"></div>
                                    <div class="img-autor">
                                        <img class="img-cover" src="<?= $home; ?>/assets/images/img-autor.jpg" alt="Autor - Benício Filho">
                                    </div>
                                </div>
                                <div class="col-7">
                                    <p class="small text-primary">
                                        Benício Filho – Formado em eletrônica, graduado em Teologia pela PUC SP, com MBA pela FGV em Gestão Estratégica
                                        e Econômica de Negócios, pós-graduado em Vendas pelo Instituto Venda Mais, Mestrando pela Universidade Metodista
                                        de São Paulo na área de Educação e pós-graduado em Psicanálise pelo Instituto Kadmon de Psicanálise. Atualmente
                                        também está concluindo o curso de bacharelado em Filosofia pela universidade Salesiana Dom Bosco. Atua no mercado
                                        de tecnologia desde 1998. Fundador do Grupo Ravel de Tecnologia, Cofundador dá Palestras & Conteúdo, Sócio da
                                        Core Angels (Fundo de Investimento Internacional para Startups), sócio fundador da Agência Incandescente, sócio
                                        fundador do Conexão Europa e da Atlantic Hub (Empresa de Internacionalização de Negócios em Portugal), atua
                                        também como Mentor e Investidor Anjo de inúmeras Startups (onde possui cerca de 30 Startups em seu Portfólio),
                                        além de participar de programas de aceleração como SEBRAE Capital Empreendedor, SEBRAE Like a Boss, Inovativa
                                        (Governo Federal) entre outros. Palestrando desde 2016 sobre temas como Cultura de Inovação, Cultura de Startups,
                                        Liderança, Empreendedorismo, Vendas, Espiritualidade e Essência, já esteve presente em mais de 230 eventos
                                        (número atualizado em dezembro de 2020). É conselheiro do ITESCS (Instituto de Tecnologia de São Caetano do Sul),
                                        bem como em outras empresas e associações. Lançou em dezembro de 2019 o seu primeiro livro “Vidas Ressignificadas”
                                        e em dezembro de 2020 “Do Caos ao Recomeço”.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- COMENTÁRIOS -->
            <section id="comentarios" class="container-fluid px-0 d-lg-block d-none pb-5">
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
            </section>

            <!-- POSTS RELACIONADOS -->
            <section id="destaque-artigos" class="container-fluid px-0 d-lg-block d-none py-5 mt-5">
                <div class="row justify-content-lg-between align-items-lg-center w-100 mx-0 px-4">
                    <div class="col-12">
                        <h1 class="text-secondary fw-normal mb-4">Posts relacionados</h1>
                    </div>
                    <div class="col-12 d-lg-none d-flex align-items-center w-100 mb-4">
                        <a href="#" class="text-secondary bg-light rounded-pill px-4 py-1 me-2">Categorias</a>
                        <a href="#" class="text-secondary bg-light rounded-pill px-4 py-1 me-2">Tags</a>
                    </div>

                    <div class="col-5 me-3 px-0 mb-5 pb-4">
                        <div class="card bg-light w-100 rounded-0 border-0">
                            <div class="position-relative">
                                <img src="<?= $home; ?>/assets/images/img-post1.jpg" class="card-img-top rounded-0" alt="Capa do Post" style="height: 200px !important;">
                            </div>
                            <div class="box1"></div>
                            <div class="card-body px-4 pb-4">
                                <div class="d-flex align-items-center my-3">
                                    <a href="#" class="small text-secondary bg-secondary text-light fw-light rounded-pill px-3 py-0 me-0">Nome da tag</a>
                                    <time datetime="2021-12-13" class="small text-secondary bg-light rounded-pill px-2 py-0">13 de dez. 2021</time>
                                </div>
                                <h2 class="h5 card-title text-secondary">Portugal, um dos países queridinhos para congressos e convenções</h2>
                                <p class="card-text small text-primary">
                                    De acordo com o relatório da Associação Internacional de Congressos...
                                </p>
                                <a href="#" class="text-secondary d-flex w-100 align-items-center">
                                    Ler mais
                                    <span class="material-symbols-outlined ms-3" style="font-size: 30px;">
                                        arrow_right_alt
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 me-3 px-0 mb-5 pb-4">
                        <div class="card bg-light w-100 rounded-0 border-0">
                            <div class="position-relative">
                                <img src="<?= $home; ?>/assets/images/img-post1.jpg" class="card-img-top rounded-0" alt="Capa do Post" style="height: 200px !important;">
                            </div>
                            <div class="box1"></div>
                            <div class="card-body px-4 pb-4">
                                <div class="d-flex align-items-center my-3">
                                    <a href="#" class="small text-secondary bg-secondary text-light fw-light rounded-pill px-3 py-0 me-0">Nome da tag</a>
                                    <time datetime="2021-12-13" class="small text-secondary bg-light rounded-pill px-2 py-0">13 de dez. 2021</time>
                                </div>
                                <h2 class="h5 card-title text-secondary">Portugal, um dos países queridinhos para congressos e convenções</h2>
                                <p class="card-text small text-primary">
                                    De acordo com o relatório da Associação Internacional de Congressos...
                                </p>
                                <a href="#" class="text-secondary d-flex w-100 align-items-center">
                                    Ler mais
                                    <span class="material-symbols-outlined ms-3" style="font-size: 30px;">
                                        arrow_right_alt
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 me-3 px-0 mb-5 pb-4">
                        <div class="card bg-light w-100 rounded-0 border-0">
                            <div class="position-relative">
                                <img src="<?= $home; ?>/assets/images/img-post1.jpg" class="card-img-top rounded-0" alt="Capa do Post" style="height: 200px !important;">
                            </div>
                            <div class="box1"></div>
                            <div class="card-body px-4 pb-4">
                                <div class="d-flex align-items-center my-3">
                                    <a href="#" class="small text-secondary bg-secondary text-light fw-light rounded-pill px-3 py-0 me-0">Nome da tag</a>
                                    <time datetime="2021-12-13" class="small text-secondary bg-light rounded-pill px-2 py-0">13 de dez. 2021</time>
                                </div>
                                <h2 class="h5 card-title text-secondary">Portugal, um dos países queridinhos para congressos e convenções</h2>
                                <p class="card-text small text-primary">
                                    De acordo com o relatório da Associação Internacional de Congressos...
                                </p>
                                <a href="#" class="text-secondary d-flex w-100 align-items-center">
                                    Ler mais
                                    <span class="material-symbols-outlined ms-3" style="font-size: 30px;">
                                        arrow_right_alt
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 me-3 px-0 mb-5 pb-4">
                        <div class="card bg-light w-100 rounded-0 border-0">
                            <div class="position-relative">
                                <img src="<?= $home; ?>/assets/images/img-post1.jpg" class="card-img-top rounded-0" alt="Capa do Post" style="height: 200px !important;">
                            </div>
                            <div class="box1"></div>
                            <div class="card-body px-4 pb-4">
                                <div class="d-flex align-items-center my-3">
                                    <a href="#" class="small text-secondary bg-secondary text-light fw-light rounded-pill px-3 py-0 me-0">Nome da tag</a>
                                    <time datetime="2021-12-13" class="small text-secondary bg-light rounded-pill px-2 py-0">13 de dez. 2021</time>
                                </div>
                                <h2 class="h5 card-title text-secondary">Portugal, um dos países queridinhos para congressos e convenções</h2>
                                <p class="card-text small text-primary">
                                    De acordo com o relatório da Associação Internacional de Congressos...
                                </p>
                                <a href="#" class="text-secondary d-flex w-100 align-items-center">
                                    Ler mais
                                    <span class="material-symbols-outlined ms-3" style="font-size: 30px;">
                                        arrow_right_alt
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="pesquisa col-3 d-lg-inline d-none">
            <div class="bg-light w-100 rounded-0 border-0 px-4 py-4 mb-5">
                <h2 class="h5 card-title text-secondary pt-3">Pesquisar</h2>
                <form class="search-form position-relative mb-5 pb-3 d-flex">
                    <input class="form-control search-form-input" type="text" aria-label="Pesquisar">
                    <img src="<?= $home; ?>/assets/icons/icon-search-blue.svg" alt="">
                </form>
            </div>

            <div id="categorias" class="bg-light w-100 rounded-0 border-0 px-4 pt-4 pb-5 mb-5">
                <h2 class="h5 card-title text-secondary pt-3 mb-4">Categorias</h2>

                <a href="#" class="text-primary small d-block mb-0">Blog</a>
                <a href="#" class="text-primary small d-block mb-0">Business</a>
                <a href="#" class="text-primary small d-block mb-0">Europa</a>
                <a href="#" class="text-primary small d-block mb-0">Eventos</a>
                <a href="#" class="text-primary small d-block mb-0">Investimentos</a>
                <a href="#" class="text-primary small d-block mb-0">Marketing</a>
                <a href="#" class="text-primary small d-block mb-0">Pesquisa</a>
                <a href="#" class="text-primary small d-block mb-0">Portugal Além Mar</a>
                <a href="#" class="text-primary small d-block mb-0">Portugal Além Mar</a>
                <a href="#" class="text-primary small d-block mb-0">Portugal para minha empresa</a>
                <a href="#" class="text-primary small d-block mb-0">Ressignificando Portugal</a>
                <a href="#" class="text-primary small d-block mb-0">Tendências</a>
            </div>

            <div id="tags" class="bg-light w-100 rounded-0 border-0 px-4 pt-4 pb-5 mb-5">
                <h2 class="h5 card-title text-secondary pt-3 mb-4">Tags</h2>

                <a href="#" class="text-primary small d-block mb-0">2022 abrir empresa em Portugal</a>
                <a href="#" class="text-primary small d-block mb-0">Atlantic Connection</a>
                <a href="#" class="text-primary small d-block mb-0">Atlantic Hub</a>
                <a href="#" class="text-primary small d-block mb-0">Atlantic Ignition</a>
                <a href="#" class="text-primary small d-block mb-0">Atlantic MarketFit</a>
                <a href="#" class="text-primary small d-block mb-0">Atlantic Station</a>
                <a href="#" class="text-primary small d-block mb-0">Brasileiros em Portugal</a>
                <a href="#" class="text-primary small d-block mb-0">Business</a>
                <a href="#" class="text-primary small d-block mb-0">Conexão COREangels</a>
                <a href="#" class="text-primary small d-block mb-0">Atlantic covid-19</a>
                <a href="#" class="text-primary small d-block mb-0">Empreendedorismo</a>
                <a href="#" class="text-primary small d-block mb-0">Empreender</a>
                <a href="#" class="text-primary small d-block mb-0">Empreender em portugal</a>
                <a href="#" class="text-primary small d-block mb-0">Empresa</a>
                <a href="#" class="text-primary small d-block mb-0">Empresa em portugal</a>
                <a href="#" class="text-primary small d-block mb-0">Europa</a>
                <a href="#" class="text-primary small d-block mb-0">Inovação</a>
                <a href="#" class="text-primary small d-block mb-0">Internacionalizar</a>
                <a href="#" class="text-primary small d-block mb-0">Internacionalização</a>
                <a href="#" class="text-primary small d-block mb-0">Internacionalização de empresas</a>
                <a href="#" class="text-primary small d-block mb-0">Internacionalização de negócios</a>
                <a href="#" class="text-primary small d-block mb-0">Investidor Anjo</a>
                <a href="#" class="text-primary small d-block mb-0">Investimento</a>
                <a href="#" class="text-primary small d-block mb-0">Investimento em Portugal</a>
                <a href="#" class="text-primary small d-block mb-0">Investimento em startups</a>
                <a href="#" class="text-primary small d-block mb-0">Investimentos</a>
                <a href="#" class="text-primary small d-block mb-0">Lisboa MarketFit</a>
                <a href="#" class="text-primary small d-block mb-0">Market fit</a>
                <a href="#" class="text-primary small d-block mb-0">Marketing</a>
                <a href="#" class="text-primary small d-block mb-0">Marketing digital</a>
                <a href="#" class="text-primary small d-block mb-0">Morar em portugal</a>
                <a href="#" class="text-primary small d-block mb-0">Negócios em portugal</a>
                <a href="#" class="text-primary small d-block mb-0">Negócios</a>
                <a href="#" class="text-primary small d-block mb-0">Networking</a>
                <a href="#" class="text-primary small d-block mb-0">Pandemia</a>
                <a href="#" class="text-primary small d-block mb-0">Portugal</a>
                <a href="#" class="text-primary small d-block mb-0">Reabertura de Portugal</a>
                <a href="#" class="text-primary small d-block mb-0">Rotina Startup</a>
                <a href="#" class="text-primary small d-block mb-0">Startups</a>
                <a href="#" class="text-primary small d-block mb-0">Transformação Digital</a>
                <a href="#" class="text-primary small d-block mb-0">Web Summit</a>
            </div>

            <div class="container-fluid px-0 mt-5">
                <div class="row w-100 mx-0">
                    <div class="col-12 d-lg-flex d-none justify-content-center align-items-center w-100 mb-4 pb-2">
                        <a href="#" class="mx-2">
                            <img src="<?= $home; ?>/assets/icons/facebook.svg" alt="ícone do Facebook">
                        </a>
                        <a href="#" class="mx-2">
                            <img src="<?= $home; ?>/assets/icons/instagram.svg" alt="Ícone do Instagram">
                        </a>
                        <a href="#" class="mx-2">
                            <img src="<?= $home; ?>/assets/icons/youtube.svg" alt="Ícone do Youtube">
                        </a>
                        <a href="#" class="mx-2">
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
            <div class=" ps-2 pe-4">
                <h3 class="fw-light text-white mb-3 pb-1">Quer levar <br> sua empresa para Portugal?</h3>
            </div>
            <div class="ps-2">
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
                                <img class="img-cover" src="<?= $home; ?>/assets/images/img-autor.jpg" alt="Autor - Benício Filho">
                            </div>
                        </div>
                        <div class="col-7">
                            <h4 class="text-secondary mb-0">Sobre o autor</h4>
                        </div>
                    </div>
                </div>

                <p class="small text-primary">
                    Benício Filho – Formado em eletrônica, graduado em Teologia pela PUC SP, com MBA pela FGV em Gestão Estratégica
                    e Econômica de Negócios, pós-graduado em Vendas pelo Instituto Venda Mais, Mestrando pela Universidade Metodista
                    de São Paulo na área de Educação e pós-graduado em Psicanálise pelo Instituto Kadmon de Psicanálise. Atualmente
                    também está concluindo o curso de bacharelado em Filosofia pela universidade Salesiana Dom Bosco. Atua no mercado
                    de tecnologia desde 1998. Fundador do Grupo Ravel de Tecnologia, Cofundador dá Palestras & Conteúdo, Sócio da
                    Core Angels (Fundo de Investimento Internacional para Startups), sócio fundador da Agência Incandescente, sócio
                    fundador do Conexão Europa e da Atlantic Hub (Empresa de Internacionalização de Negócios em Portugal), atua
                    também como Mentor e Investidor Anjo de inúmeras Startups (onde possui cerca de 30 Startups em seu Portfólio),
                    além de participar de programas de aceleração como SEBRAE Capital Empreendedor, SEBRAE Like a Boss, Inovativa
                    (Governo Federal) entre outros. Palestrando desde 2016 sobre temas como Cultura de Inovação, Cultura de Startups,
                    Liderança, Empreendedorismo, Vendas, Espiritualidade e Essência, já esteve presente em mais de 230 eventos
                    (número atualizado em dezembro de 2020). É conselheiro do ITESCS (Instituto de Tecnologia de São Caetano do Sul),
                    bem como em outras empresas e associações. Lançou em dezembro de 2019 o seu primeiro livro “Vidas Ressignificadas”
                    e em dezembro de 2020 “Do Caos ao Recomeço”.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- COMENTÁRIOS -->
<section id="comentarios" class="d-lg-none d-block pb-5">
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
</section>

<!-- POSTS RELACIONADOS -->
<section id="destaque-artigos" class="container-fluid px-0 d-lg-none d-block py-5">
    <div class="row w-100 mx-0 px-3">
        <div class="col-12">
            <h1 class="text-secondary fw-normal mb-4">Posts relacionados</h1>
        </div>

        <div class="col-lg-4 col-12 mb-4">
            <div class="card bg-light w-100 rounded-0 border-0 position-relative">
                <div class="row g-0">
                    <div class="col-6">
                        <img src="<?= $home; ?>/assets/images/img-post2.jpg" class="d-block w-100 h-100 rounded-0" alt="Capa do Post">
                    </div>
                    <div class="col-6">
                        <div class="card-body">
                            <h2 class="h5 card-title text-secondary mb-0">Atlantic Connection</h2>
                            <time datetime="2021-12-13" class="card-text small text-primary">13 de dez. 2021</time>
                            <a href="#" class="text-secondary d-flex w-100 align-items-center mt-2">
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

        <div class="col-lg-4 col-12 mb-4">
            <div class="card bg-light w-100 rounded-0 border-0 position-relative">
                <div class="row g-0">
                    <div class="col-6">
                        <img src="<?= $home; ?>/assets/images/img-post2.jpg" class="d-block w-100 h-100 rounded-0" alt="Capa do Post">
                    </div>
                    <div class="col-6">
                        <div class="card-body">
                            <h2 class="h5 card-title text-secondary mb-0">Atlantic Connection</h2>
                            <time datetime="2021-12-13" class="card-text small text-primary">13 de dez. 2021</time>
                            <a href="#" class="text-secondary d-flex w-100 align-items-center mt-2">
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

        <div class="col-lg-4 col-12 mb-4">
            <div class="card bg-light w-100 rounded-0 border-0 position-relative">
                <div class="row g-0">
                    <div class="col-6">
                        <img src="<?= $home; ?>/assets/images/img-post2.jpg" class="d-block w-100 h-100 rounded-0" alt="Capa do Post">
                    </div>
                    <div class="col-6">
                        <div class="card-body">
                            <h2 class="h5 card-title text-secondary mb-0">Atlantic Connection</h2>
                            <time datetime="2021-12-13" class="card-text small text-primary">13 de dez. 2021</time>
                            <a href="#" class="text-secondary d-flex w-100 align-items-center mt-2">
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
    </div>
</section>

<?php
get_template_part('partials/footer');
?>