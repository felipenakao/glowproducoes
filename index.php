
<?php $page_title = "Página inicial";
$nome = "home";
include 'header.php';?>
<link href="http://css.glowproducoes.com.br/swiper.min.css" rel="stylesheet" media="all" type="text/css"/>
    <div class="background-home">
        <div class="wrapper">

            <div class="content">
                <div id="home-servicos-bg">
                      <?php include 'slider.php' ;?>

                    <section id="demo" class="home-section">
                        <div class="title">
                            <h2 class="content-title">DEMO REEL</h2> <div class="content-title-bar"></div> <h3 class="content-sub-title">Orgulhosamente, feito pela gente</h3>
                        </div>
                        <div id="video-iframe">
                            <iframe  width="100%" height="100%" src="https://player.vimeo.com/video/185567873"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                    </section>

                    <?php include 'servicos/servicos.php' ;?>
                    <?php include 'clientes/clientes.php' ;?>
                    <?php include 'portfolio/portfolio.php' ;?>
                    <?php include 'contato/contato.php' ;?>
                    <section id="instagram-home" class="home-section">
                        <div class="title">
                            <h2 class="content-title">INSTAGRAM</h2> <div class="content-title-bar"></div> <h3 class="content-sub-title">Nossa correria do dia-a-dia</h3>
                        </div>
                          <div id="instafeed"></div>
                    </section>
              </div>
            </div>
        </div>
    </div>
<?php include 'footer.php' ;?>
