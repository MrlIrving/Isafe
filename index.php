<?php 
require_once("sistema/conexao.php")
 ?>

<!DOCTYPE html>
<html>

<head>
  <title>Isafe</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shortcut icon" type="image/x-icon" href="img/isafe.jpg">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">

  <!-- =======================================================
    Theme Name: Isafe
    Theme URL: https://bootstrapmade.com/isafe-free-parallax-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->
        <a class="navbar-brand" href="index.php">Isafe</a>

      </div>
      <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="current"><a href="#intro">Home</a></li>
          <li><a href="#about">Sobre nós</a></li>
          <li><a href="#services">Serviços</a></li>
          <li><a href="#portfolio">Trabalhos</a></li>
          <li><a href="#team">Time</a></li>
          <li><a href="#contact">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- intro area -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="item active">
            <div class="carousel-background"><img src="img/intro/intro1.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Isafe</h2>
                <p class="animated fadeInUp">Bem-vindo ao iSafe seu portal confiável para segurança da informação, seja você um especialista em tecnologia ou alguém interessado em proteger seus dados pessoais online, o iSafe é o seu destino para informações confiáveis e atualizadas sobre segurança da informação.</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Leia Mais</a>
              </div>
            </div>
          </div>
          
          <!-- Slide 2 -->
          <div class="item">
            <div class="carousel-background"><img src="img/intro/intro2.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Recursos</span></h2>
                <p class="animated fadeInUp">No iSafe, nossa missão é capacitar você com os recursos necessários para enfrentar os desafios da segurança cibernética com confiança e conhecimento. Explore nossa coleção de recursos e comece a fortalecer sua segurança online hoje mesmo!</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Leia Mais</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="item">
            <div class="carousel-background"><img src="img/intro/intro3.png" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Sobre nós</span></h2>
                <p class="animated fadeInUp">Desde a nossa fundação, nosso compromisso tem sido capacitar indivíduos e organizações a protegerem seus dados e informações no mundo digital em constante evolução.</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Leia Mais</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon fa fa-angle-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon fa fa-angle-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <!-- About -->
  <section id="about" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Sobre nós</h2>
            <div class="heading-line"></div>
            <p>Protegendo seus dados hoje para garantir seu futuro digital amanhã: iSafe, sua segurança em boas mãos.</p>
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-md-6 about-img">
          <img src="img/sobrenos.png" alt="">
        </div>

        <div class="col-md-6 content">
          <p>Bem-vindo à iSafe, uma empresa apaixonada pela segurança da informação e comprometida em proteger organizações em um mundo digital em constante evolução. Fundada em 2024, a iSafe é uma líder no setor de segurança cibernética, oferecendo soluções inovadoras e serviços de consultoria de excelência para garantir a proteção contra ameaças digitais.</p>
          <p>Nossa equipe é composta por especialistas em segurança altamente qualificados, dedicados a assegurar que nossos clientes operem em ambientes digitais seguros e confiáveis. Combinamos anos de experiência prática, conhecimento profundo das últimas tendências e tecnologias em segurança da informação, além de um compromisso inabalável com a excelência em serviço ao cliente.</h3>
          <p>
          Na iSafe, acreditamos que a segurança da informação é fundamental para o sucesso sustentável de qualquer organização moderna. Oferecemos uma ampla gama de soluções e serviços personalizados, incluindo avaliação de riscos, testes de penetração, conformidade regulatória, monitoramento de segurança em tempo real, resposta a incidentes e treinamento especializado.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Parallax 1 -->
  <section id="parallax1" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="color-light">
            <h2 class="wow bounceInDown" data-wow-delay="0.5s">Os detalhes da perfeição</h2>
            <p class="lead wow bounceInUp" data-wow-delay="1s">Nós misturamos todas as coisas e deixamos juntas</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Serviços</h2>
            <div class="heading-line"></div>
            <p>Temos construído produtos, plataformas e experiências digitais exclusivas nos últimos 6 anos.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="carousel-service" class="service carousel slide">

            <!-- slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Avaliação de Riscos e Vulnerabilidades</h4>
                      <p>Identificação e análise de vulnerabilidades em sistemas e redes.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="img/screenshots/1.png" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Testes de Penetração</h4>
                      <p>Identificação e correção de vulnerabilidades antes que sejam exploradas por ameaças reais.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="img/screenshots/2.png" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Conformidade Regulatória</h4>
                      <p>Auditoria e análise de conformidade para garantir aderência às políticas internas e externas.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="img/screenshots/3.png" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-service" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-service" data-slide-to="1"></li>
              <li data-target="#carousel-service" data-slide-to="2"></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Works -->
  <section id="portfolio" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Trabalhos</h2>
            <div class="heading-line"></div>
            <p>Aqui estão alguns dos tipos de trabalho que esse site poderia realizar</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">

          <ul id="og-grid" class="og-grid">
            <li>
              <a href="#" data-largesrc="img/works/t1.jpg" data-title="Consultoria em Assuntos Diplomáticos" data-description="Fornecemos consultoria especializada para governos, organizações internacionais e empresas em questões diplomáticas, auxiliando na formulação de políticas externas, negociações e estratégias de relações internacionais.">
                <img src="img/works/thumbs/t1.png" alt="" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/works/t2.jpg" data-title="Mediação de Conflitos Internacionais" data-description="Oferecemos serviços de mediação para ajudar na resolução de conflitos entre países, organizações ou grupos étnicos, facilitando o diálogo e buscando soluções pacíficas e sustentáveis.">
                <img src="img/works/thumbs/t2.png" alt="" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/works/t3.jpg" data-title="Desenvolvimento de Programas de Capacitação em Relações Internacionais" data-description="Criamos e implementamos programas de capacitação e treinamento em relações internacionais para indivíduos e organizações interessadas em aprimorar suas habilidades e conhecimentos em áreas como diplomacia, comércio internacional, resolução de conflitos e cooperação global.">
                <img src="img/works/thumbs/t3.png" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/works/t4.jpg" data-title="Desenvolvimento de Projetos de Cooperação Internacional" data-description="Trabalhamos no desenvolvimento e implementação de projetos de cooperação internacional em áreas como desenvolvimento econômico, educação, saúde e meio ambiente, promovendo o intercâmbio de conhecimentos e recursos entre países e organizações.">
                <img src="img/works/thumbs/t4.png" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/works/t5.jpg" data-title="Facilitação de Parcerias Internacionais" data-description="Auxiliamos na identificação e desenvolvimento de parcerias estratégicas entre governos, empresas e organizações da sociedade civil em todo o mundo, promovendo a colaboração em projetos de interesse mútuo.">
                <img src="img/works/thumbs/t5.png" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/works/t6.jpg" data-title="Análise de Política Externa" data-description="Realizamos análises e estudos sobre políticas externas de diferentes países, avaliando seu impacto nas relações internacionais e fornecendo insights para formuladores de políticas, acadêmicos e empresas.">
                <img src="img/works/thumbs/t6.png" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/works/t7.jpg" data-title="Promoção do Intercâmbio Cultural e Educacional" data-description="Organizamos programas de intercâmbio cultural e educacional para estudantes, profissionais e comunidades, facilitando experiências de aprendizado e colaboração transculturais.">
                <img src="img/works/thumbs/t7.png" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/works/t8.jpg" data-title="Gestão de Eventos Internacionais" data-description="Planejamos e gerenciamos conferências, seminários e workshops internacionais sobre temas como diplomacia, comércio internacional, direitos humanos e desenvolvimento sustentável.">
                <img src="img/works/thumbs/t8.png" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/works/t9.jpg" data-title="Advocacia e Sensibilização Internacional" data-description="Engajamo-nos na advocacia e sensibilização internacional em questões como direitos humanos, igualdade de gênero, justiça social e sustentabilidade ambiental, trabalhando para promover mudanças positivas em nível global.">
                <img src="img/works/thumbs/t9.png" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/works/t10.jpg" data-title="Treinamento em Diplomacia e Negociação Internacional" data-description="Oferecemos programas de treinamento em diplomacia, negociação e mediação internacional para diplomatas, funcionários públicos, profissionais de negócios e membros da sociedade civil.">
                <img src="img/works/thumbs/t10.png" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/works/t11.jpg" data-title="Análise de Risco Político e Geopolítico" data-description="Realizamos análises de risco político e geopolítico para empresas e investidores, avaliando os fatores políticos e de segurança que podem impactar operações comerciais em diferentes partes do mundo.">
                <img src="img/works/thumbs/t11.png" alt="img01" />
              </a>
            </li>
            <li>
              <a href="#" data-largesrc="img/works/t12.jpg" data-title="Assessoria em Comunicação Intercultural" data-description="Oferecemos consultoria e treinamento em comunicação intercultural para empresas, instituições e profissionais que trabalham em contextos globais, ajudando a minimizar mal-entendidos culturais, promover a colaboração eficaz e construir relacionamentos positivos em ambientes multiculturais.">
                <img src="img/works/thumbs/t12.png" alt="img01" />
              </a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </section>

  <!-- Parallax 2 -->
  <section id="parallax2" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="clients">
            <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="#"><img src="img/clients/01.png" alt="" /></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section id="team" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Nosso Time</h2>
            <div class="heading-line"></div>
            <p>Trabalhamos em conjunto para alcançar nossos objetivos, valorizando a inovação, a criatividade e o trabalho em equipe.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
            <img src="img/team/1.jpg" alt="" class="img-circle img-responsive" />
            <h4>Marcela</h4>
            <p>Direção</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/2.jpg" alt="" class="img-circle img-responsive" />
            <h4>Marcos</h4>
            <p>Web Designer</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/3.jpg" alt="" class="img-circle img-responsive" />
            <h4>Juliana</h4>
            <p>Assistencia</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
          <div class="box-team wow bounceInUp">
            <img src="img/team/4.jpg" alt="" class="img-circle img-responsive" />
            <h4>Carol</h4>
            <p>Gerente Comercial</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Fale Conosco</h2>
            <div class="heading-line"></div>
            <p>Se você tiver alguma dúvida ou apenas quiser dizer 'olá' ao Global Connect Solutions, preencha o formulário abaixo e
              entraremos em contato com você dentro de 24 horas. </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div id="sendmessage">Sua mensagem foi enviada. Obrigada!</div>
          <div id="errormessage"></div>

          <form action="" method="post" class="form-horizontal contactForm" role="form">
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" data-rule="email"
                  data-msg="Por favor, use um email valido" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Objetivo" data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                  placeholder="Mensagem"></textarea>
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-theme btn-lg btn-block">Enviar mensagem</button>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </section>

  <!-- Bottom widget -->
  <section id="bottom-widget" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-widget wow bounceInLeft">
            <i class="fa fa-map-marker fa-4x"></i>
            <h5>Escritório principal</h5>
            <p>
              109 Borough High Street,<br />London
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInUp">
            <i class="fa fa-phone fa-4x"></i>
            <h5>Telefone</h5>
            <p>
              +55 11943256624<br> +55 11964512307

            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInRight">
            <i class="fa fa-envelope fa-4x"></i>
            <h5>Email</h5>
            <p>
              hello@isafessecurity.com<br />sales@isafesecurity.com
            </p>
          </div>
        </div>
      </div>
      <div class="row mar-top30">
        <div class="col-md-12">
          <h5>Estamos nas redes sociais</h5>
          <ul class="social-network">
            <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
            <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
            <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
            <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright &copy; Isafe. All rights reserved.</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Alstar
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- js -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/stellar.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="js/custom.js"></script>

</body>

</html>