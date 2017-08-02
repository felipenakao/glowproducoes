<?php
$home = 'http://glowproducoes.com.br/sites/glow2017';
$page_title = 'Portfólio - Vídeo';
$page_id = 'video';
include ('../../header.php');
?>
  <link rel="stylesheet" href="http://glowproducoes.com.br/sites/glow2017/css/portfolio.css">
  <link rel="stylesheet" href="http://glowproducoes.com.br/sites/glow2017/portfolio/video/css/portfolio-video.css">
      <div class="background-servicos">
          <div class="wrapper">
              <div class="content">

                <div id="home-servicos-bg">

                  <div id="grid-portfolio">
                    <div class="title">
                      <h2 class="content-title">PORTFÓLIO - VÍDEO</h2> <div class="content-title-bar"></div> <h3 class="content-sub-title">Nossos trabalhos de vídeo separados por categorias</h3>
                    </div>
                    <div id="featured">
                        <div class="featured-video shadow">
                            <iframe src="https://player.vimeo.com/video/185567873?color=7fef8f&title=0&byline=0&portrait=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <div class="featured-texto">
                            <h3>Demo Reel 2016</h3>
                            <p>Uma compilação de alguns de nossos trabalhos realizados no ano de 2016.</p>
                        </div>
                    </div>

                    <div id="filters" class="button-group"> <div class="span">Escolha por categoria:</div>
                      <button id="filters-all" class="button is-checked" data-filter="*">Todas</button>

                      <button id="filters-videoclipe" class="button" data-filter=".0">Videoclipe</button>
                      <button id="filters-aovivo" class="button" data-filter=".1">Ao Vivo</button>
                      <button id="filters-publicitario" class="button" data-filter=".2">Publicitário</button>
                        <button id="filters-eventos" class="button" data-filter=".3">Eventos</button>
                        <button id="filters-youtuber" class="button" data-filter=".4">Youtuber</button>
                        <button id="filters-aereas" class="button" data-filter=".5">Aéreas</button>
                        <p><img src="img/search.png"><input id="quicksearch" type="text" class="quicksearch" placeholder="Procurar vídeo" /></p>
                    </div>

                    <div class="grid baguetteBoxOne gallery">

                        <?php
                        $port_video_cat = array ( 'VIDEOCLIPE','AO VIVO','PUBLICITÁRIO','EVENTOS','YOUTUBER','AÉREAS');
                        $port_video_color = array ( '#3cb16b','#c87327','#8950ae','#b1b042','#c93232','#3e8eb7');
                        $mysqli = mysqli_connect("localhost","glowprod_admin","halamena@8","glowprod_db");

                          if ($mysqli->connect_errno) {
                              printf("Connect failed: %s\n", $mysqli->connect_error);
                              exit();
                          }

                        $query = "SELECT * FROM portfolio ORDER by rand() ";
                        $result = $mysqli->query($query);
                        while( $row = $result->fetch_array(MYSQLI_BOTH) ){
                          ?>

                          <a class="element-item portfolio-all-video <?php echo $row[4]?>" href="http://vimeo.com/<?php echo $row[0];?>" data-lity>

                              <div style="background-image:url(<?php echo $row[5]?>)" class="thumb_vimeo_portfolio lazy"><div class="play"></div></div>
                          		<h3><?php echo utf8_encode($row[1]);?> - <?php echo utf8_encode($row[2]);?></h3>
                          		<div class="all-meta">Ano: <?php echo $row[3]?></div>
                          		<div style="background:<?php echo $port_video_color[$row[4]]?>" class="all-cat">
                          			<?php echo $port_video_cat[$row[4]]?>
                          		</div>

                            </a>

                        <?php } ?>

                      </div>
                  </div>
                  <?php include('../../servicos/servicos.php'); ?>
                  <?php include('../../clientes/clientes.php'); ?>
                  <?php include('../portfolio.php'); ?>
                  <?php include('../../contato/contato.php'); ?>
                </div>

              </div>

          </div>

      </div>

<?php

include ('../../footer.php'); ?>
