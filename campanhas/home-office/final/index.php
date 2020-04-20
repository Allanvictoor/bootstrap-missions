<!doctype html>
<html lang="pt-br">
<head>
    <?php
    include('../final/includes/head.php');
    ?>
</head>
<body>
<div class="clearfix">
    <div class="header">
        <?php
        include('../final/includes/nav.php');
        ?>
    </div>
    <div class="body">
        <section class="color-one">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 w-100 mt-5">
                                    <div class="row">
                                        <img width="100%"
                                             src="https://www.codefest.co.uk/demo/codelander/assets/images/header.png"
                                             alt="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 w-100 mt-5">
                                    <div class="row">
                                        <div class="m-lg-5">
                                            <p class="header-subtitle w-100">Equipes em home-office?</p>
                                            <h1 class="header-title w-100"><b>Organize e potencialize seus times.</b>
                                            </h1>
                                            <p class="header-title-text w-100">Com a adoção de home-office nunca uma
                                                intranet
                                                foi
                                                tão
                                                importante e estratégica para seu negócio como um ambiente que
                                                centraliza
                                                sua
                                                comunicação e produção.
                                            </p>
                                            <div class="learn-more-btn-section w-100">
                                                <p class="learn-more-btn">Quero conhecer as vantagens</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="strategy-section-bg-graphics-section">
                <img src="https://www.codefest.co.uk/demo/codelander/assets/images/strategy-section-bg.png">
            </div>
        </section>
        <section class="color-two">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <div class="strategy-container">
                                    <div class="col-lg-3 col-md-6 strategy-card-section">
                                        <div class="strategy-card">
                                            <div class="strategy-card-icon-section">
                                                <img src="./imagens/internet.png" alt="">
                                            </div>
                                            <h2>Comunicação Fácil e Eficiente</h2>
                                            <p>Work synchronization and automated services</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 strategy-card-section">
                                        <div class="strategy-card">
                                            <div class="strategy-card-icon-section">
                                                <img src="./imagens/list.png">
                                            </div>
                                            <h2>Controle de Atividades</h2>
                                            <p>Work synchronization and automated services</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 strategy-card-section">
                                        <div class="strategy-card">
                                            <div class="strategy-card-icon-section">
                                                <img src="./imagens/group.png">
                                            </div>
                                            <h2>Fluxos de Processos e Equipes</h2>
                                            <p>Work synchronization and automated services</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 strategy-card-section">
                                        <div class="strategy-card">
                                            <div class="strategy-card-icon-section">
                                                <img src="./imagens/webinar.png">
                                            </div>
                                            <h2>Capacitação e Integração</h2>
                                            <p>Work synchronization and automated services</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-25 services-section-bg-graphics">
                <img class="w-100"
                     src="https://www.codefest.co.uk/demo/codelander/assets/images/services-section-bg.png">
            </div>
        </section>
        <section class="color-three">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <div class="services-container">
                                    <div class="col-lg-6 services-title-section w-100">
                                        <p class="services-subtitle">Módulos e Ferramentas</p>
                                        <h2 class="services-title">Dicas que valem ouro</h2>
                                        <p class="services-text">Saiba como alguns de nossas módulos podem contribuir
                                            para suas atividades de home-office tornando o ambiente muito mais
                                            organizado e produtivo.</p>
                                        <img src="https://www.codefest.co.uk/demo/codelander/assets/images/services-header.png"
                                             width="100%">
                                    </div>
                                    <script>
                                        $(document).ready(function () {
                                            $('.icone-minus').hide();
                                            $('.accordion-section').click(function () {
                                                $('.icone-plus').hide();
                                                $('.icone-minus').show();
                                            });
                                            $('.accordion-section-one').click(function () {
                                                $('.icone-plus').show();
                                                $('.icone-minus').hide();
                                            });
                                        });
                                    </script>
                                    <div class="col-lg-6">
                                        <div id="accordion">
                                            <div id="headingOne">
                                                <div class="accordion-section w-100" data-toggle="collapse"
                                                     data-target="#collapseOne" aria-expanded="false"
                                                     aria-controls="collapseOne">
                                                    <div class="d-flex justify-content-between">
                                                        <p>Agenda</p>
                                                        <i class="fas fa-plus icone-plus"></i>
                                                        <i class="fas fa-minus icone-minus"></i>
                                                    </div>
                                                </div>
                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                     data-parent="#accordion">
                                                    <div class="card-body">
                                                        Quem possui reuniões externas ou internas ainda que sejam
                                                        remotas demandam
                                                        organização e detalhamento. Nosso módulo permite criar reuniões
                                                        com assuntos
                                                        de pauta permitindo organização e também consultar a
                                                        disponibilidade de cada
                                                        um.
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="headingTwo">
                                                <div class="accordion-section w-100" data-toggle="collapse"
                                                     data-target="#collapseTwo" aria-expanded="false"
                                                     aria-controls="collapseTwo">
                                                    <div class="d-flex justify-content-between">
                                                        <p>Tarefas</p>
                                                        <i class="fas fa-plus"></i>
                                                    </div>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                     data-parent="#accordion">
                                                    <div class="card-body">
                                                        Todos realizamos atividades diariamente mas em home-office saber
                                                        o que cada
                                                        um faz se torna mais difícil. Usando o módulo de tarefas, todo
                                                        colaborador e
                                                        seu time podem organizar, especificar e distribuir melhor suas
                                                        atividades
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="headingThree">
                                                <div class="accordion-section w-100" data-toggle="collapse"
                                                     data-target="#collapseThree" aria-expanded="false"
                                                     aria-controls="collapseThree">
                                                    <div class="d-flex justify-content-between">
                                                        <p>Requisições</p>
                                                        <i class="fas fa-plus"></i>
                                                    </div>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                     data-parent="#accordion">
                                                    <div class="card-body">
                                                        Processos são um conjunto de fluxos definidos e todo
                                                        departamento tem
                                                        necessidade de controlar. Desde coisas simples como Solicitação
                                                        de Férias
                                                        até processo internos da empresa. Requisições te ajuda a
                                                        organizar isto com
                                                        etapas e responsáveis.
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="headingFour">
                                                <div class="accordion-section w-100" data-toggle="collapse"
                                                     data-target="#collapseFour" aria-expanded="false"
                                                     aria-controls="collapseFour">
                                                    <div class="d-flex justify-content-between">
                                                        <p>Timeline</p>
                                                        <i class="fas fa-plus"></i>
                                                    </div>
                                                </div>
                                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                                     data-parent="#accordion">
                                                    <div class="card-body">
                                                        Aqui é onde você ganha o engajamento da empresa! Usar a timeline
                                                        para gerar
                                                        conteúdos de endomarketing e aproximar quem está mais distante
                                                        seja em outro
                                                        departamento ou mesmo em home-office é fundamental!
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="headingFive">
                                                <div class="accordion-section w-100" data-toggle="collapse"
                                                     data-target="#collapseFive" aria-expanded="false"
                                                     aria-controls="collapseFive">
                                                    <div class="d-flex justify-content-between">
                                                        <p class="mob-grand">Chat, Comunicado Interno, Avisos</p>
                                                        <i class="fas fa-plus"></i>
                                                    </div>
                                                </div>
                                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                                     data-parent="#accordion">
                                                    <div class="card-body">
                                                        A comunicação centralizada é primordial para o ambiente
                                                        corporativo uma vez
                                                        ninguém quer que algumas discussões ou assuntos sejam tratados
                                                        de forma
                                                        desorganizada em grupos de WhatsApp ou em emails que se perderão
                                                        a tantos
                                                        outros.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="color-four">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <img src="https://www.codefest.co.uk/demo/codelander/assets/images/services-sales-header.png"
                                         width="100%" alt="">
                                </div>
                                <div class="col-lg-6">
                                    <div class="services-title-section w-100 section-text-top">
                                        <p class="services-subtitle">Our services</p>
                                        <h2 class="services-title">Sales Growth</h2>
                                        <p class="services-text">
                                            You can talk about your secondary services here, or maybe
                                            promote your excellent customer service approach. Always grab your website
                                            visitors'
                                            attention.
                                        </p>
                                        <div class="w-100 btn-section-four"><p>View Pricing</p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pricing-section-left-bg-graphics">
                <img src="https://www.codefest.co.uk/demo/codelander/assets/images/pricing-section-left-bg.png">
            </div>
        </section>
        <section class="color-five">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="pricing-title">
                                <h2>Pricing</h2>
                                <p>Offer multiple packages or monthly subscriptions? Why not showcase your featured
                                    price
                                    plans here, bold and beautifully.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 pricing-card-section">
                                    <div class="pricing-card featured-card">
                                        <p class="pricing-rate">$199</p>
                                        <p class="pricing-period">Basic</p>
                                        <p class="pricing-text">Starter plan with all the basics included</p>
                                        <div class="w-100 pricing-all-plan-features-section">
                                            <ul>
                                                <li>Core Business System</li>
                                                <li>Team Management</li>
                                                <li>Dual Infrastructure</li>
                                                <li>Customized Features</li>
                                            </ul>
                                        </div>
                                        <div class="learn-more-btn">Enquire</div>
                                    </div>
                                </div>
                                <div class="col-lg-4 pricing-card-section">
                                    <div class="pricing-card featured">
                                        <p class="pricing-rate">$499</p>
                                        <p class="pricing-period">Growth</p>
                                        <p class="pricing-text">The sensible option for growing companies</p>
                                        <div class="w-100 pricing-all-plan-features-section">
                                            <ul>
                                                <li>Core Business System</li>
                                                <li>Team Management</li>
                                                <li>Dual Infrastructure</li>
                                                <li>Customized Features</li>
                                            </ul>
                                        </div>
                                        <div class="learn-more-btn">Enquire</div>
                                    </div>
                                </div>
                                <div class="col-lg-4 pricing-card-section">
                                    <div class="pricing-card featured-card">
                                        <p class="pricing-rate">$1299</p>
                                        <p class="pricing-period">Corporate</p>
                                        <p class="pricing-text">Everything a global company needs</p>
                                        <div class="w-100 pricing-all-plan-features-section">
                                            <ul>
                                                <li>Core Business System</li>
                                                <li>Team Management</li>
                                                <li>Dual Infrastructure</li>
                                                <li>Customized Features</li>
                                            </ul>
                                        </div>
                                        <div class="learn-more-btn">Enquire</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pricing-section-right-bg-graphics">
                <img src="https://www.codefest.co.uk/demo/codelander/assets/images/pricing-section-right-bg.png">
            </div>
        </section>
        <section class="color-six">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="clients-section">
                                <div class="clients-container">
                                    <div class="clients-title-section">
                                        <p class="clients-subtitle">Our clients</p>
                                        <h2 class="clients-title">Client Showcase</h2>
                                    </div>
                                </div>
                            </div>
                            <div id="carouselExampleIndicators" class="carousel slide w-100 mb-5" data-ride="carousel">
                                <ol class="carousel-indicators" style="margin-bottom: -2rem">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="client-slide-left"
                                             src="https://www.codefest.co.uk/demo/codelander/assets/images/logo4.png"
                                             alt="First slide">
                                        <img class="client-slide-left"
                                             src="https://www.codefest.co.uk/demo/codelander/assets/images/logo1.png"
                                             alt="First slide">
                                        <img class="client-slide-left"
                                             src="https://www.codefest.co.uk/demo/codelander/assets/images/logo2.png"
                                             alt="First slide">
                                        <img class="client-slide-left"
                                             src="https://www.codefest.co.uk/demo/codelander/assets/images/logo3.png"
                                             alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="client-slide-left"
                                             src="https://www.codefest.co.uk/demo/codelander/assets/images/logo2.png"
                                             alt="First slide">
                                        <img class="client-slide-left"
                                             src="https://www.codefest.co.uk/demo/codelander/assets/images/logo1.png"
                                             alt="First slide">
                                        <img class="client-slide-left"
                                             src="https://www.codefest.co.uk/demo/codelander/assets/images/logo3.png"
                                             alt="First slide">
                                        <img class="client-slide-left"
                                             src="https://www.codefest.co.uk/demo/codelander/assets/images/logo4.png"
                                             alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="client-slide-left"
                                             src="https://www.codefest.co.uk/demo/codelander/assets/images/logo3.png"
                                             alt="First slide">
                                        <img class="client-slide-left"
                                             src="https://www.codefest.co.uk/demo/codelander/assets/images/logo1.png"
                                             alt="First slide">
                                        <img class="client-slide-left"
                                             src="https://www.codefest.co.uk/demo/codelander/assets/images/logo2.png"
                                             alt="First slide">
                                        <img class="client-slide-left"
                                             src="https://www.codefest.co.uk/demo/codelander/assets/images/logo4.png"
                                             alt="First slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog-section-right-bg">
                <img src="https://www.codefest.co.uk/demo/codelander/assets/images/blog-section-right-bg.png">
            </div>
        </section>
        <section class="color-seven">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="blog-container">
                                <div class="blog-title-section">
                                    <p class="blog-subtitle">Recent updates</p>
                                    <h2 class="blog-title">Featured Stories</h2>
                                </div>
                                <div class="blog-posts-section">
                                    <div class="col-lg-4 blog-post-card-container">
                                        <div class="blog-post-card">
                                            <div class="blog-post-icon">
                                                <img class="w-100"
                                                     src="https://www.codefest.co.uk/demo/codelander/assets/images/blog-card-1.png">
                                            </div>
                                            <h3 class="blog-post-title w-100">Remote Working</h3>
                                            <p class="blog-post-text">Making it easier to connect with every client
                                                worldwide</p>
                                            <a class="blog-post-link" href="#news">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 blog-post-card-container">
                                        <div class="blog-post-card">
                                            <div class="blog-post-icon mb-4">
                                                <img class="w-100"
                                                     src="https://www.codefest.co.uk/demo/codelander/assets/images/blog-card-2.png">
                                            </div>
                                            <h3 class="blog-post-title w-100">Google Rankings</h3>
                                            <h4 class="blog-post-subtitle">Keywords</h4>
                                            <p class="blog-post-text mb-4">We've ranked number one on Google for
                                                multiple keywords. Read about our SEO strategies</p>
                                            <a class="nav-link learn-more-btn" href="#news">Read More</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 blog-post-card-container">
                                        <div class="blog-post-card">
                                            <div class="blog-post-icon">
                                                <img src="https://www.codefest.co.uk/demo/codelander/assets/images/blog-card-3.png">
                                            </div>
                                            <h3 class="blog-post-title w-100">Communication</h3>
                                            <p class="blog-post-text">We've made our client support services easy to
                                                access</p>
                                            <a class="blog-post-link" href="#news">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="color-eight">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="row">
                                        <div class="section-text-top-img">
                                            <img src="https://www.codefest.co.uk/demo/codelander/assets/images/contact-header-img.png"
                                                 width="100%" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <div class="row">
                                        <div class="services-title-section w-100 section-text-top-contact">
                                            <p class="services-subtitle"><b>Entre em contato</b></p>
                                            <h2 class="services-title"><b>Dúvidas?</b></h2>
                                            <h2 class="services-title"><b>Nós podemos lhe ajudar</b></h2>
                                            <p class="services-text">Nosso time de vendas poderá responder suas dúvidas
                                                e até
                                                mesmo marcar uma apresentação sem compromisso para lhe explicar as
                                                vantagens de
                                                nossa intranet.
                                            </p>
                                            <div>
                                                <div class="btn-section-eight w-100 mb-2" type="button"
                                                     data-toggle="modal"
                                                     data-target="#exampleModal">
                                                    <p>Solicite uma apresentação</p>
                                                </div>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-dark text-white">
                                                                <h5 class="modal-title m-auto services-title-max"
                                                                    id="exampleModalLabel">Faça
                                                                    contato</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="container-fluid">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <p class="mb-auto ml-1 services-subtitle">
                                                                                    Nome:</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <input class="w-100 form-control"
                                                                                       type="text">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <p class="mb-auto ml-1 services-subtitle">
                                                                                    Email:</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <input class="w-100 form-control"
                                                                                       type="email">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <p class="mb-auto ml-1 services-subtitle">
                                                                                    Nome da
                                                                                    empresa:</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <input class="w-100 form-control"
                                                                                       type="text">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <p class="mb-auto ml-1 services-subtitle">
                                                                                    Telefone:</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <input class="w-100 form-control"
                                                                                       type="tel">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <p class="mb-auto ml-1 services-subtitle">
                                                                                    Como soube
                                                                                    do
                                                                                    vivaIntra:</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <select class="w-100 custom-select"
                                                                                        name="" id="">
                                                                                    <option value="">Selecione</option>
                                                                                    <option value="">Google</option>
                                                                                    <option value="">Facebook</option>
                                                                                    <option value="">Revistas</option>
                                                                                    <option value="">E-mail</option>
                                                                                    <option value="">Outros</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <p class="mb-auto ml-1 services-subtitle">
                                                                                    Mensagem:</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="row">
                                                                                <textarea
                                                                                        class="w-100 form-control"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Fechar
                                                                </button>
                                                                <button type="button" class="btn btn-primary">Enviar
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="footer">
        <?php
        include('../final/includes/rodape.php');
        ?>
    </div>
</div>
</body>
</html>