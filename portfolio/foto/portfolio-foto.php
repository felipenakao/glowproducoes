<?php
$home = 'http://www.glowproducoes.com.br';
$page_title = 'Portfólio - Foto';
$page_id = 'portfolio-foto';
include ('../../header.php');?>
  <link href="http://css.glowproducoes.com.br/portfolio.css" rel="stylesheet" media="all" type="text/css"/>
  <link href="css/portfolio-foto.css" rel="stylesheet" media="all" type="text/css"/>
  <?php include '../../dashboard-home.php';?>

    <div class="background-servicos">

        <div class="wrapper">

                <div class="content">
                    <div id="home-servicos-bg">

  <div  id="grid-portfolio">
    <div class="title">
      <h2 class="content-title">PORTFÓLIO - FOTO</h2> <div class="content-title-bar"></div> <h3 class="content-sub-title">Nossos trabalhos fotográficos separados por categorias</h3>
    </div>
            <div id="filters" class="button-group">
              <div class="span">Escolha por categoria:</div>
              <button id="filters-all" class="button is-checked" data-filter="*">Todas</button>
              <button id="filters-ensaio" class="button" data-filter=".ensaio">Ensaio</button>
              <button id="filters-bastidores" class="button" data-filter=".bastidores">Bastidores</button>
              <button id="filters-publicitario" class="button" data-filter=".publicitario">Publicitário</button>
              <button id="filters-eventos" class="button" data-filter=".shows">Shows e Eventos</button>
            </div>
            <div class="grid baguetteBoxOne gallery">
              <?php for($n=0;$n<12;$n++){ ?>
                 <a class="ensaio element-item opacity lazy" alt="Teste de Caption"  style="background-image: url(http://glowproducoes.com.br/sites/glow2017/servicos/foto/img/thumbnails/foto-ensaio-<?php echo $n ?>.jpg)" href="http://glowproducoes.com.br/sites/glow2017/servicos/foto/img/foto-ensaio-<?php echo $n ?>.jpg" ></a>
                 <a class="bastidores element-item opacity lazy" style="background-image: url(http://glowproducoes.com.br/sites/glow2017/servicos/foto/img/thumbnails/foto-bastidores-<?php echo $n ?>.jpg)" href="http://glowproducoes.com.br/sites/glow2017/servicos/foto/img/foto-bastidores-<?php echo $n ?>.jpg"></a>
                 <a class="publicitario element-item opacity lazy" style="background-image: url(http://glowproducoes.com.br/sites/glow2017/servicos/foto/img/thumbnails/foto-publicitario-<?php echo $n ?>.jpg)" href="http://glowproducoes.com.br/sites/glow2017/servicos/foto/img/foto-publicitario-<?php echo $n ?>.jpg"></a>
                 <a class="shows element-item opacity lazy" style="background-image: url(http://glowproducoes.com.br/sites/glow2017/servicos/foto/img/thumbnails/foto-shows-<?php echo $n ?>.jpg)" href="http://glowproducoes.com.br/sites/glow2017/servicos/foto/img/foto-shows-<?php echo $n ?>.jpg"></a>
               <?php } ;?>
            </div>
    </div>
                    <?php
                    include ('../../servicos/servicos.php');
                    include ('../../clientes/clientes.php');
                    include ('../../portfolio/portfolio.php');
                    include ('../../contato/contato.php');
                    ?>

                  </div>
                </div>

        </div>
    </div>


<?php include ('../../footer.php');?>
