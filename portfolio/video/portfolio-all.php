<div class="portfolio-all-video">
    <a href="http://vimeo.com/<?php echo $dado["video"];?>" data-lity>
      <div class="all-video">
          <div style="background-image:url('<?php echo getVimeoThumb($dado["video"])?>');" class="thumb_vimeo_portfolio">
            <div class="play"></div>
          </div>
      </div>
    </a>
    <h3><?php echo utf8_encode($dado["cliente"]);?> - <?php echo utf8_encode($dado["producao"]);?></h3>
    <div class="all-meta">Cliente: <?php echo utf8_encode($dado["cliente"]);?></div>
    <div class="all-meta">Produção: <?php echo utf8_encode($dado["producao"]);?></div>
    <div class="all-meta">Ano: <?php echo $dado["ano"]?></div>
    <div style="background:<?php echo $port_video_color[$dado["categoria"]]?>"  class="all-cat">
      <?php echo $port_video_cat[$dado["categoria"]]?>
    </div>
</div>
