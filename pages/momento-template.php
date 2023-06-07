<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/partials/header.php';
?>

<!-- INTRO -->
<section id="intro">
    <div class="container px-4 py-5">
        <div class="row">
            <div class="col">
                <h3>Portugal tem sido um dos destaques da União Europeia em termos de crescimento econômico nos últimos anos.</h3>

                <p>O país tem se beneficiado de políticas fiscais e monetárias prudentes, bem como de reformas estruturais que visam melhorar a competitividade e atrair investimentos estrangeiros.</p>

                <p>Para os empreendedores brasileiros, Portugal oferece um ecossistema empresarial vibrante e próspero, com muitas oportunidades de negócios em diversos setores.</p>

                <p>Uma das principais vantagens de expandir os negócios para Portugal é a posição estratégica do país, que funciona como uma porta de entrada para o mercado europeu e africano.</p>

                <p>Outra vantagem é que Portugal tem uma população qualificada e educada, com profissionais de diversas áreas e um sistema educacional de alta qualidade. Isso significa que é possível encontrar talentos locais para trabalhar em sua empresa e, ao mesmo tempo, contribuir para a economia local.</p>

                <h2>Fale conosco e conheça as oportunidades
                    de negócios.</h2>

                <figure class="mb-0">
                    <img loading="lazy" class="img-fluid" src="" alt="Bandeira Portugal">
                </figure>
            </div>
        </div>
    </div>
</section>

<!-- RELACIONADOS -->
<section id="relacionados">
    <div class="container px-4 py-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <a href=""><img loading="lazy" src="/assets/icons/seta-direita-azul.svg" alt="Seta direita azul"></a>
                    <div class="card-body">
                        <h3 class="card-title">Atlantic Connection</h3>
                        <p class="card-text">O maior evento global sobre o ecossistema Brasil e Portugal</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <a href=""><img loading="lazy" src="/assets/icons/seta-direita-azul.svg" alt="Seta direita azul"></a>
                    <div class="card-body">
                        <h3 class="card-title">Missões empresariais</h3>
                        <p class="card-text">A oportunidade mais efetiva de network para seus negóciose Portugal</p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <a href=""><img loading="lazy" src="/assets/icons/seta-direita-azul.svg" alt="Seta direita azul"></a>
                    <div class="card-body">
                        <h3 class="card-title">MarketFit</h3>
                        <p class="card-text">Um diagnóstico preliminar e seguro sobre a aderência ao mercado</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CONTATO -->
<section id="contato">
    <div class="container px-4 py-5">
        <div class="row">
            <div class="col-12">
                <h2>QUER FALAR COM ESPECIALISTA PARA A INTERNACIONALIZAÇÃO?</h2>
                <figure class="mb-0">
                    <img loading="lazy" class="img-fluid" src="" alt="Thumb contato">
                </figure>
            </div>

            <div class="col-12">
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

                    <button type="submit" class="bg-transparent border-0 btn">ENVIAR <img src="" alt="Seta Direita"></button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
$root = $_SERVER['DOCUMENT_ROOT'];
require $root . '/partials/footer.php';
?>