<?php $home = 'http://glowproducoes.com.br/sites/glow2017';
include '../../header.php';
include '../../dashboard.php';?>
<link href="http://css.glowproducoes.com.br/clientes.css" media="all" rel="stylesheet" type="text/css">
    <div class="background-servicos">
        <div class="wrapper">
            <div class="content baguetteBoxOne gallery hotpage-grid">
              <div class="title title-service">
                <div class="content-sub-title">Clientes</div><div class="content-title-bar"></div><h1 class="content-title"><?php echo $page_title; ?></h1>
          		</div>
                <div style="background-image: url('img/<?php echo $capa; ?>');" class="hotpage-bg"></div>
                    <div class="hotpage-content">
                        <div class='top-info'>
                            <p class="thumb-mobile"><?php echo $bio[0]?></p>

                            <a href="img/thumb-0.jpg" style="background-image: url('img/thumb-0.jpg')" class="bio-thumb img-left shadow opacity"></a>

                            <div class="bio-txt">
                                <p class="thumb-desktop"><?php echo $bio[0]?></p>
                                <p class="thumb-desktop"><?php echo $bio[1]?></p>
                                <p class="thumb-desktop"><?php echo $bio[3]?></p>
                                <p class="thumb-desktop"><?php echo $bio[4]?></p>
                            </div>
                        </div>
                        <div class="galeria">
                            <p class="thumb-mobile"><?php echo $bio[1]?></p>
                            <a href="img/thumb-1.jpg" style="background-image: url('img/thumb-1.jpg')" class="img-galeria-3 shadow opacity thumb-top"></a>
                            <a href="img/thumb-2.jpg" style="background-image: url('img/thumb-2.jpg')" class="img-galeria-3 shadow opacity thumb-bottom"></a>
                            <a href="img/thumb-3.jpg" style="background-image: url('img/thumb-3.jpg')" class="img-galeria-3 shadow opacity thumb-bottom"></a>
                            <p class="thumb-mobile">
                                <?php echo $bio[2]; ?>
                            </p>
                            <p class="thumb-mobile">
                                <?php echo $bio[3]; ?>
                            </p>
                        </div>
                    </div>
                <div class="hotpage-content">
                        <?php

                        while ( $n <= $cont ) {
                          $directory = count ( glob ( "img/galeria/" . $n . "/large/*.jpg" ) );
                          $hotpage_video_hide = count ( $hotpage_video_id [$n] );
                          $hotpage_fotografia_hide = count ( $fotografia [$n] );
                        if (empty ( $video[$n] )) {
                          $displayvideo = 'none';
                        } else {
                        $displayvideo = 'flex';
                        }
                        if (empty ( $fotografia[$n] )) {
                          $displayfoto = 'none';
                        } else {
                        $displayfoto = 'flex';
                        }?>

                        <section id="hotpage-portfolio-<?php echo $n ?>" class="hotpage-portfolio-grid <?php echo $align ?>">
                            <h2 class="thumb-mobile" style="color:<?php echo $letra[$n] ?>"><?php echo $titulo[$n]; ?></h2>
                            <?php	if (empty($video[$n])) {
                            ?>
                            <a href="img/<?php echo $fotografia[$n]; ?>.jpg" class=" hotpage-portolio-foto shadow" style="display: <?php echo $displayfoto?>;background-image: url('img/<?php echo $fotografia[$n]; ?>.jpg');background-size: cover;"></a>
                            <?php } else { ?>
                               <div class="hotpage-portfolio-video shadow" style="display: <?php echo $displayvideo?>">
                                   <iframe src="https://player.vimeo.com/video/<?php echo $video[$n] ?>" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                               </div>
                              <?php } if(empty($fotografia[$n]) && empty($video[$n]) ){

                                $txt_100 = 'hotpage-portfolio-txt-100';

                              } else{
                                $txt_100 = 'hotpage-portfolio-txt';

                              } ?>

                                        <div class="hotpage-portfolio-txt shadow <?php echo $txt_100 ?>">
                                            <h2 class="thumb-desktop" style="color:<?php echo $letra[$n]; ?>"><?php echo $titulo[$n]; ?></h2>
                                            <?php echo $p[$n]; ?>
                                        </div>


                                <div style='<?php echo $none ?>' class='hotpage-portfolio-gallery col-12'>
                                    <?php
                                    if ($hotpage_fotografia_hide >= 0) {
                                        for($fotocont = 0; $fotocont < $directory; $fotocont ++) { ?>
                                            <a href="img/galeria/<?php echo $n; ?>/large/<?php echo $fotocont;?>.jpg" data-src="img/galeria/<?php echo $n ?>/thumbnail/<?php echo $fotocont; ?>.jpg" class="img-galeria-4 col-6 shadow opacity lazy"></a>
                                    <?php } } ?>
                                </div>
                                <div id="hotpage_video_gallery_grid">
                                    <?php
                                    $mysqli = mysqli_connect("localhost","glowprod_admin","halamena@8","glowprod_db");
                                    if ($mysqli->connect_errno) {
                                        printf("Connect failed: %s\n", $mysqli->connect_error);
                                        exit();
                                    }
                                    if ($hotpage_video_hide >= 0) {
                                        for($hotpage_video_start = 0; $hotpage_video_start < $hotpage_video_hide; $hotpage_video_start ++) {
                                        $vimeoloop = $hotpage_video_id[$n][$hotpage_video_start];
                                        $query = "SELECT * FROM portfolio WHERE video = $vimeoloop";
                                        $result = $mysqli->query($query);
                                        $row = $result->fetch_array(MYSQLI_BOTH);
                                    ?>
                                    <div id="hotpage_video_gallery_<?php echo $hotpage_video_start ?>" class="hotpage_video_gallery">
                                        <a href="http://vimeo.com/<?php echo $row[video];?>" data-src="<?php echo $row[thumbnail] ?>" data-lity class="thumb_vimeo_img lazy shadow">
                                            <div class="play"></div>
                                        </a>
                                        <h3><?php echo $row[producao];?></h3>
                                    </div>
                                    <?php } } ?>
                                </div>
                        </section>

                        <?php
                        if ($n % 2 === 0) {
                          $align = $left;
                        } else {
                          $align = $right;
                        }
                          $n ++;
                        }
                        ?>

                        <section style="display: <?php echo $extra_display ?>" class="extra">
                        <?php

                        for($extra_count = 0;$extra_count < count($extra);$extra_count++){?>

                              <h2><?php echo $extra[$extra_count]?></h2>
                              <ul>
                                <?php for($extra_gallery_count = 0;$extra_gallery_count < count($extra_video[$extra_count]);$extra_gallery_count++){
                                    $extraloop = $extra_video[$extra_count][$extra_gallery_count];
                                    $query = "SELECT * FROM portfolio WHERE video = $extraloop";
                                    $result = $mysqli->query($query);
                                    $row = $result->fetch_array(MYSQLI_BOTH); ?>
                                    <li class="hotpage_video_gallery">
                                        <div class="titulo_top"><?php echo $extra_titulo_top[$extra_count][$extra_gallery_count] ?></div>
                                        <a href="http://vimeo.com/<?php echo $extra_video[$extra_count][$extra_gallery_count] ?>" data-src="<?php echo $row['thumbnail']?>" data-lity class="thumb_vimeo_img lazy shadow">
                                        <div class="play"></div>
                                        </a>
                                        <h3><?php echo $extra_titulo[$extra_count][$extra_gallery_count] ?></h3>
                                    </li>
                                <?php } ?>
                              </ul>

                          <?php } ?>

                        </section>
                          <div class="hotpage-social-grid">
                            <h2>Siga <?php echo $page_title; ?> nas redes sociais:</h2>
                            <a id="hotpage-site" class="hotpage-social-icon" style="display:<?php echo $site[1] ?>" target="_blank" href="<?php echo $site[0]?>"></a>
                            <a id="hotpage-facebook" class="hotpage-social-icon" style="display:<?php echo $facebook[1]?>"  target="_blank" href="https://www.facebook.com/<?php echo $facebook[0]?>/"></a>
                            <a id="hotpage-instagram" class="hotpage-social-icon" style="display:<?php echo $instagram[1]?>"  target="_blank" href="https://www.instagram.com/<?php echo $instagram[0]?>/?hl=pt"></a>
                            <a id="hotpage-youtube" class="hotpage-social-icon" style="display:<?php echo $youtube[1]?>"  target="_blank" href="https://www.youtube.com/<?php echo $youtube[0]?>/videos"></a>
                          </div>
                      </div>
            </div>

              <div id="home-servicos-bg">
            <?php
            include '../../servicos/servicos.php';
            include '../../clientes/clientes.php';
            include '../../portfolio/portfolio.php';
            include '../../contato/contato.php';
            ?>
          </div>

        </div>
    </div>
    <?php include '../../footer.php';?>
