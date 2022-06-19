@extends('layout.app')




@section("content")

<div class="welcome-text-area">
    <div class="area-bg"></div>
    <div class="welcome-area">
        <div class="container">
            <div class="row flex-v-center">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <div class="welcome-text">
                        <h1 class="wow fadeInUp" data-wow-delay="0.1s">Software de Gestão de Transfers</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">A Transfergest facilita a gestão eficaz
                            das empresas de transfers e transportes turísticos.
                            Economize tempo e dinheiro na gestão das operações diárias </p>
                        <div class="download-button mt60 xs-mt40 wow fadeInUp" data-wow-delay="0.3s">
                            <a class="left" href="#"><i class="fa fa-android"></i>
                                <div><span class="font18 font700">Agendar Demonstração</span></div>
                            </a>
                            <a class="left active" href="#"><i class="fa fa-apple"></i>
                                <div><span class="font18 font700">Saber mais</span></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="welcome-mockup right wow fadeInRight">
                        <img src="assest/img/home/home-mockup.png" alt="">
                        <div class="home-mockup-slider">
                            <div class="single-mockups">
                                <img src="assest/img/screenshot/top-screen-1.png" alt="">
                            </div>
                            <div class="single-mockups">
                                <img src="assest/img/screenshot/top-screen-2.png" alt="">
                            </div>
                            <div class="single-mockups">
                                <img src="assest/img/screenshot/top-screen-3.png" alt="">
                            </div>
                            <div class="single-mockups">
                                <img src="assest/img/screenshot/top-screen-4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--FEATURES TOP AREA-->
 <section class="features-top-area padding-100-30">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box mb50 center wow fadeInUp padding20 box-hover-1" data-wow-delay="0.1s">
                    <div class="box-img-icon features-box-icon">
                        <img src="assest/img/icon/design-tool.svg" alt="">
                    </div>
                    <h3 class="box-title">Creative Design</h3>
                    <p>Lorem ipsum dolor sit amt, consectet adop adipisicing elit, semeid do eiusmod porara
                        incididunt !</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb50 center  wow fadeInUp padding20 box-hover-1"
                    data-wow-delay="0.2s">
                    <div class="box-img-icon features-box-icon">
                        <img src="assest/img/icon/schedule.svg" alt="">
                    </div>
                    <h3 class="box-title">2 Month Free Trail</h3>
                    <p>Lorem ipsum dolor sit amt, consectet adop adipisicing elit, semeid do eiusmod porara
                        incididunt !</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb50 center wow fadeInUp padding20 box-hover-1"
                    data-wow-delay="0.2s">
                    <div class="box-img-icon features-box-icon">
                        <img src="assest/img/icon/tools.svg" alt="">
                    </div>
                    <h3 class="box-title">24/7 Hour Support</h3>
                    <p>Lorem ipsum dolor sit amt, consectet adop adipisicing elit, semeid do eiusmod porara
                        incididunt !</p>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-icon-box relative mb50 center wow fadeInUp padding20 box-hover-1 visible-sm"
                    data-wow-delay="0.1s">
                    <div class="box-img-icon features-box-icon">
                        <img src="assest/img/icon/quality.svg" alt="">
                    </div>
                    <h3 class="box-title">Quality Service</h3>
                    <p>Lorem ipsum dolor sit amt, consectet adop adipisicing elit, semeid do eiusmod porara
                        incididunt !</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--FEATURES TOP AREA END-->

<!--ABOUT AREA-->
<section class="about-area sky-gray-bg section-padding" id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn">
                    <h2>Software de Gestão <span>de Transfers</span> </h2>
                    <p>Simplifique a gestão das operações diárias com um software completo, fácil de usar e seguro.
                    </p>
                    <p>Visão geral dos serviços, maior controlo financeiro e informação centralizada no sistema.
                        O Transfergest está preparado para smartphone, tablet ou computador.</p>
                </div>
            </div>
        </div>
        <div class="row flex-v-center">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="about-content xs-mb50 xs-center">
                    <h3 class="mb30">Central Transfergest</h3>
                    <p>Irá melhorar a eficiência operacional da sua empresa.</p><br>
                    <p><b>Dashboard em tempo real</b> - Serviços, gráfico diário, operadores, reservas online,
                        parceiros, geolocalização e desempenho dos motoristas.</p>
                    <p><b>Serviços</b> - Gestão de transfers por zonas e km, consulta e pesquisa de serviços, preços
                        por grupo de viaturas ou por número de pessoas, emissão de voucher.</p>
                    <p><b>Escalas</b>- Gestão de transfers por zonas e km, consulta e pesquisa de serviços, preços
                        por grupo de viaturas ou por número de pessoas, emissão de voucher.</p>
                    <p><b>Operadores. Parceiros</b>- Criação, consultas de cobranças e comissões, tabelas de preços
                        personalizadas.</p>
                    <p><b>Staff</b>Criação, consultas de cobranças e vencimentos, diversas formas de remuneração.
                    </p>
                    <p><b>Viaturas</b>-Criação e gestão.</p>
                    <p><b>Produtos</b>- Criação de rotas, edição de preços por classes ou grupo de viaturas.</p>
                    <p><b>Gestão Financeira</b>- Gestão de contas com operadores, parceiros e staff.</p>
                    <p><b>Configuração</b>- Criação e gestão de utilizadores, gestão de clientes.</p>



                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="about-mockup right wow fadeIn">
                    <img src="assest/img/about/about-1.png" alt="">
                </div>
            </div>
        </div>
        <div class="row flex-v-center padding-top">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="about-mockup wow fadeIn xs-mb50">
                    <img src="assest/img/about/about-2.png" alt="">
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="about-content xs-center">
                    <h3 class="mb30">App Motoristas</h3>
                    <p>Irá melhorar a eficiência dos seus motoristas.</p><br>
                    <p class="mt20">A APP Motoristas reduz em 99% as falhas nos serviços de transfers A aplicação
                        pode ser instalada no smarthphone e permite que o seu motorista consulte em tempo real:</p>
                    <p><b>Escala de serviços</b>- Consultar serviços, navegar, ligar ao cliente, enviar localização
                        para cliente, criar extras e criar retorno.</p>
                    <p><b>Agenda mensal</b>- Consultar serviços por dia</p>
                    <p><b>Novo serviço </b>- Criar serviços, envie o voucher por email ao cliente e atribua o
                        serviço a si próprio.</p>
                    <p><b>Despesas</b>- Criar despesas, associa-las ao serviço e viatura.</p>
                    <p><b>Consultar cobranças</b>- Cobranças, produção propria e despesas.</p>
                    <p><b>Consultar vencimentos</b>- Consulta em tempo real de vencimento mensal</p>

                </div>
            </div>
        </div>
        <div class="row flex-v-center padding-top">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="about-content xs-center">
                    <h3 class="mb30">Área para Operadores</h3>
                    <p>Os seus Operadores têm acesso a uma área privada, para criar e consultar serviços.</p><br>
                    <p><b>Dashboard</b>- Para um controlo em tempo real do status diário, serviços confirmados,
                        pendentes, concluídos e cancelados.</p>
                    <p><b>Criação de serviços</b>- os seus operadores vão poder criar novos serviços e receber
                        informação dos mesmos em tempo real.</p>
                    <p><b>Consultas</b>- Existem dois tipos de consultas, um para os funcionários (sem visualização
                        de comissões) e outra para a administração com cálculo de cobranças e comissões.</p>
                    <p><b>Utilizadores</b>- Existem dois níveis de acesso, um para a administração do operador
                        turístico com privilégios totais ao sistema e outro que tem limitações sobre as consultas.
                    </p>

                    <a href="#" class="read-more mt30 inline-block">Read More</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="about-mockup right wow fadeIn xs-mt50">
                    <img src="assest/img/about/about-3.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--ABOUT AREA END-->



<!--SCREENSHOT AREA-->
<section class="screenshot-area section-padding" id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn">
                    <h2>App <span>Motoristas</span></h2>
                    <p>A APP dos Motoristas é uma aplicação que pode ser instalada no smartphone dos seus
                        motoristas, possibilitando a comunicação em tempo real com a sua central de gestão do
                        software Transfergest.</p>
                    <p><b>A APP dos Motoristas permite:</b></p>
                    <p>Consultar serviços, consultar agenda mensal, consultar relatórios de cobranças, consultar
                        vencimento mensal, criar novos serviços (com a possibilidade de atribui-los a si próprio e
                        enviar voucher para o cliente), criar retornos, criar despesas e criar extras ao serviço.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="screenshot-slider-area wow fadeIn">
                    <div class="screenshot-slider">
                        <div class="single-screenshot">
                            <img src="assest/img/screenshot/screenshot-1.jpg" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="assest/img/screenshot/screenshot-8.jpg" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="assest/img/screenshot/screenshot-3.jpg" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="assest/img/screenshot/screenshot-4.jpg" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="assest/img/screenshot/screenshot-5.jpg" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="assest/img/screenshot/screenshot-6.jpg" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="assest/img/screenshot/screenshot-7.jpg" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="assest/img/screenshot/screenshot-8.jpg" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="assest/img/screenshot/screenshot-2.jpg" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="assest/img/screenshot/screenshot-3.jpg" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="assest/img/screenshot/screenshot-4.jpg" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="assest/img/screenshot/screenshot-5.jpg" alt="">
                        </div>
                        <div class="single-screenshot">
                            <img src="assest/img/screenshot/screenshot-6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SCREENSHOT AREA END-->

<!--TEAM AREA-->
<section class="team-area padding-100-70 sky-gray-bg" id="team">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn">
                    <h2>Estatísticas <span>Transfergest</span></h2>
                    <p>Com a utilização do software Transfergest, já ajudámos os nossos clientes a gerir:</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <div class="single-team team-style-1 mb30 center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member-image">
                        <img src="assest/img/team/member-1.jpg" alt="">
                    </div>
                    <div class="member-details">
                        <div class="name-and-designation">
                            <h4>Motoristas</h4>
                            <p>Registados</p>
                        </div>
                        <div class="social-bookmark">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <div class="single-team team-style-1 mb30 center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="member-image">
                        <img src="assest/img/team/member-2.jpg" alt="">
                    </div>
                    <div class="member-details">
                        <div class="name-and-designation">
                            <h4>Passageiros</h4>
                            <p>Transportados</p>
                        </div>
                        <div class="social-bookmark">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <div class="single-team team-style-1 mb30 center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="member-image">
                        <img src="assest/img/team/member-3.jpg" alt="">
                    </div>
                    <div class="member-details">
                        <div class="name-and-designation">
                            <h4>Serviços</h4>
                            <p>realizados</p>
                        </div>
                        <div class="social-bookmark">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                <div class="single-team team-style-1 mb30 center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member-image">
                        <img src="assest/img/team/member-4.jpg" alt="">
                    </div>
                    <div class="member-details">
                        <div class="name-and-designation">
                            <h4>Km</h4>
                            <p>Percorridos</p>
                        </div>
                        <div class="social-bookmark">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--TEAM AREA END-->


<!--PRICING AREA AREA-->
<section class="pricing-area padding-top" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn">
                    <h2>Os <span>nossos</span> Planos</h2>
                    <p>O Transfergest tem os preços mais competitivos do mercado! Sem surpresas extras, nem
                        complicações…</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="single-price border-radious5 center sm-mb50 xs-mb50 wow fadeIn box-hover-21">
                    <div class="area-bg"></div>
                    <div class="price-hidding padding70">
                        <h3 class="font30">STANDART</h3>
                    </div>
                    <div class="price-rate">
                        <h3 class="font42"><sup></sup>45€
                            <sub>/mês</sub>
                        </h3>
                    </div>
                    <div class="price-details mb20">
                        <ul>
                            <li>100mb Disk Space</li>
                            <li>2 Subdomains</li>
                            <li>5 Email Accounts</li>
                            <li>Webmail Support</li>
                        </ul>
                    </div>
                    <div class="price-button padding50 font14 uppercase">
                        <a href="#" class="purchase-button">Agendar <br> demostração</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-price active border-radious5 center sm-mb50 xs-mb50 wow fadeIn box-hover-21">
                    <div class="area-bg"></div>
                    <div class="price-hidding padding70">
                        <h3 class="font30">ADVANCED</h3>
                    </div>
                    <div class="price-rate">
                        <h3 class="font42"><sup></sup>54€
                            <sub>/mês</sub>
                        </h3>
                    </div>
                    <div class="price-details mb20">
                        <ul>
                            <li>500mb Disk Space</li>
                            <li>10 Subdomains</li>
                            <li>20 Email Accounts</li>
                            <li>Webmail Support</li>
                        </ul>
                    </div>
                    <div class="price-button padding50 font14 uppercase">
                        <a href="#" class="purchase-button">Agendar <br> demostração</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="single-price border-radious5 center wow fadeIn box-hover-21">
                    <div class="area-bg"></div>
                    <div class="price-hidding padding70">
                        <h3 class="font30">ENTERPRISE</h3>
                    </div>
                    <div class="price-rate">
                        <h3 class="font42"><sup></sup>Sob consulta

                        </h3>
                    </div>
                    <div class="price-details mb20">
                        <ul>
                            <li>1000mb Disk Space</li>
                            <li>50 Subdomains</li>
                            <li>100 Email Accounts</li>
                            <li>Webmail Support</li>
                        </ul>
                    </div>
                    <div class="price-button padding50 font14 uppercase">
                        <a href="#" class="purchase-button">Agendar <br> Demonstração</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--PRICING AREA AREA END-->

<!--FAQS AREA AREA-->
<section class="faqs-area padding-top" id="faqs">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12">
                <div class="area-title text-center wow fadeIn">
                    <h2>Perguntas <span>Frequentes</span></h2>
                    <p>Aqui vai poder ver a resposta as principais perguntas colocadas pelos utilizadores
                        Transfergest.</p>
                </div>
            </div>
        </div>
        <div class="row flex-v-center">
            <div class="col-md-4">
                <div class="faqs-mockup hidden-sm xs-center xs-mb50">
                    <img src="assest/img/faqs-mockup.png" alt="">
                </div>
            </div>
            <div class="col-md-offset-1 col-md-7">
                <div class="panel-group sm-mb50 xs-mb50" id="accordion-main">
                    <!-- start tab content -->
                    <div class="panel panel-default active">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main"
                                href="#collapseOne">
                                <div class="panel-title">
                                    <span>01</span>
                                    <span>O software Transfergest tem alguma fidelização?</span>
                                    <i class="pull-right fa fa-angle-down"></i>
                                </div>
                            </a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">Sim, a transfergest tem uma fidelização de um ano. Só desta
                                forma podemos disponibilizar um software desta dimensão pelo preço mais competitivo
                                do mercado.</div>
                        </div>
                    </div>
                    <!-- end tab content -->

                    <!-- start tab content -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main"
                                href="#collapseTwo">
                                <div class="panel-title">
                                    <span>02</span>
                                    <span>Os modulos extras têm alguma fidelização?</span>
                                    <i class="pull-right fa fa-angle-down"></i>
                                </div>
                            </a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="panel-body">Sim, os modulos extras tem uma fidelização de um ano, a contar
                                após a data de activação.</div>
                        </div>
                    </div>
                    <!-- end tab content -->

                    <!-- start tab content -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main"
                                href="#collapseThree">
                                <div class="panel-title">
                                    <span>03</span>
                                    <span>Quanto tempo demora a ativação do software?</span>
                                    <i class="pull-right fa fa-angle-down"></i>
                                </div>
                            </a>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">Após o envio da documentação necessária, a assinatura do
                                contrato e o pagamento da taxa de ativação, o tempo em média é de 48h.</div>
                        </div>
                    </div>
                    <!-- end tab content -->

                    <!-- start tab content -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main"
                                href="#collapseFour">
                                <div class="panel-title">
                                    <span>04</span>
                                    <span>Como funciona a formação inicial?</span>
                                    <i class="pull-right fa fa-angle-down"></i>
                                </div>
                            </a>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">A formação inicial normalmente é dada via web. Com esta formação
                                de +/- 3 horas e o acompanhamento via telefone durante o 1º mês, garantimos a
                                autonomia desejável para um bom manuseamento do software transfergest.</div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main"
                                href="#collapseFive">
                                <div class="panel-title">
                                    <span>05</span>
                                    <span>O que inclui a taxa de ativação?</span>
                                    <i class="pull-right fa fa-angle-down"></i>
                                </div>
                            </a>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">A taxa de ativação no valor de 140€ + IVA serve para os
                                processos de contratualização, pré instalação do sistema, formação inicial e apoio
                                via telefone durante o 1º mês.</div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-main"
                                href="#collapseSix">
                                <div class="panel-title">
                                    <span>06</span>
                                    <span>É possível ligar o Transfergest a outros softwares?</span>
                                    <i class="pull-right fa fa-angle-down"></i>
                                </div>
                            </a>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse">
                            <div class="panel-body">Sim é possível, a transfergest dispõem de API para ligação com
                                outros softwares do mercado. Mediante uma análise cuidada e orçamentação das horas
                                de implementação é possível desenvolvermos a ligação com os seus parceiros de
                                negócio.</div>
                        </div>
                    </div>


                    <!-- end tab content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--FAQS AREA AREA END-->


    <!--CONTACT US AREA-->
<section id="contact" class="section-padding">
<div class="container">
    <div class="row">
        <div class="col-lg-12 menucontatos">
            <div class="row verde">
                <div class="col-lg-12 ">
                    <center> Contacto </center>
                </div>
            </div>
            <div class="row">
                <form>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text" class="form-control" id="nome">
                    </div>
                    <div class="form-group">
                        <label>Apelido:</label>
                        <input type="text" class="form-control" id="apelido">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                  <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label>Telemovel:</label>
                    <input type="text" class="form-control" id="telemovel">
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>Sexo:</label>
                        <div class="radio">
                            <label><input type="radio" name="sexo" checked>Masculino</label>
                            <label><input type="radio" name="sexo">Feminino</label>
                          </div>
                    </div>
                    <div class="form-group">
                        <label>Nacionalidade:</label>
                        <select class="form-control" id="nacionalidade">
                            <option>Portuguesa</option>
                            <option>Brasileira</option>
                            <option>Espanhola</option>
                            <option>Inglesa</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>Documento:</label>
                        <input type="text" class="form-control" id="documento">
                    </div>
                    <div class="form-group">
                        <label>Documento:</label>
                        <input type="text" class="form-control" id="documento">
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label>Nº Contribuinte</label>
                        <input type="text" class="form-control" id="contribuinte">
                    </div>
                    <div class="form-group">
                        <label>Nº documento</label>
                        <input type="text" class="form-control" id="contribuinte">
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 pull-right">
                    <div class="form-group">
                       <center><button class="btn">Enviar</button> </center>
                    </div>
                </div>
                </form>
            </div>
            <div class="row verde">
                <div class="col-lg-12">
                    <center>Footer</center>
                </div>
            </div>
        </div>
    </div>

</div>
</section>

<!--CONTACT US AREA END-->


<br><br>
<div class="container">
    <div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 bootstrap">
                <button class="btn btn-success"> Sim </button>
                <button class="btn btn-danger" style="color: black;"> Não </button>
            </div>
        </div>
        <div class="row perfis">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="media">
                    <hr>
                    <div class="media-right form-inline">
                        <img src="https://conteudo.imguol.com.br/blogs/174/files/2018/05/iStock-648229868-1024x909.jpg"
                            class="media-object" style="width:60px">
                        <img src="https://conteudo.imguol.com.br/blogs/174/files/2018/05/iStock-648229868-1024x909.jpg"
                            class="media-object" style="width:60px">
                        <img src="https://conteudo.imguol.com.br/blogs/174/files/2018/05/iStock-648229868-1024x909.jpg"
                            class="media-object" style="width:60px">
                        <img src="https://conteudo.imguol.com.br/blogs/174/files/2018/05/iStock-648229868-1024x909.jpg"
                            class="media-object" style="width:60px">
                        <img src="https://conteudo.imguol.com.br/blogs/174/files/2018/05/iStock-648229868-1024x909.jpg"
                            class="media-object" style="width:60px">
                        <img src="https://conteudo.imguol.com.br/blogs/174/files/2018/05/iStock-648229868-1024x909.jpg"
                            class="media-object" style="width:60px">
                        <img src="https://conteudo.imguol.com.br/blogs/174/files/2018/05/iStock-648229868-1024x909.jpg"
                            class="media-object" style="width:60px">

                    </div>
                </div>
                <div class="texto">
                    Clique no motorista para <b> os serviços</b>
                </div>
            </div>
        </div>
    </div>


    <div class="form-group row">
        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
            <select class="form-control" id="combobox">
                <option>25</option>
            </select>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 pull-right">
            <input type="text" class="form-control " id="operador" value="Codigo Serv./Operador">
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12 segundadiv">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row verde">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            Confirmado chegada
                        </div>

                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 ">
                            01/06/2022 | 00:10
                        </div>

                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                            <select name="externo" id="externofelix" class="form-control comboboxfelix" >
                                <option>Externo Felix</option>
                            </select>
                        </div>

                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                            <button type="button" class="btn btn-success servicoenviado"> Serviço Enviado</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 col-sm-7">
                            <div class="row">
                                <div class="col">TG004810</div>
                            </div>
                            <div class="row">
                                <div class="col">Apps mobile - Operador</div>
                            </div>
                            <div class="row">
                                <div class="col">teste cliente postman</div>
                            </div>
                        </div>

                        <div class="col-md-2 col-lg-2 col-sm-3 ">
                            <div class="row">
                                <div class="col">1-4 pax</div>
                            </div>
                            <div class="row">
                                <div class="col text-primary">PT2333</div>
                            </div>
                            <div class="row">
                                <div class="col">398891797147</div>
                            </div>
                        </div>

                        <div class="col-md-1 col-lg-1 col-sm-2">
                            <div class="row">
                                <div class="col">1</div>
                            </div>
                            <div class="row">
                                <div class="col">11:10</div>
                            </div>
                        </div>

                        <div class="clearfix visible-sm-block"></div>


                        <div class="col-md-4 col-lg-4 col-sm-5">
                            <div class="row">
                                <div class="col">Armação de Pera, airport de Faro</div>
                            </div>
                            <div class="row">
                                <div class="col">Airport de Faro, armação de pera</div>
                            </div>
                            <div class="row">
                                <div class="col">48</div>
                            </div>
                        </div>

                        <div class="col-md-1 col-lg-1 col-sm-3">
                            <div class="row">
                                <div class="col umaecinq">01:50</div>
                            </div>
                        </div>

                        <div class="col-md-1 col-lg-1 col-sm-4">
                            <div class="row">
                                <div class="col umaecinq">02:00</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<br>


@endsection

