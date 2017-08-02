<?php
$page_title = 'Servico - Vídeo';
$nome = 'servicos-video';
include '../../header.php';
include 'txt.php';
$vermais = '<div id="vermais"><a href="http://www.glowproducoes.com.br/sites/glow2017/portfolio/video/portfolio-video.php"><div class="vermais">TODOS OS VÍDEOS</div></a></div>';
$mysqli = mysqli_connect("localhost","glowprod_admin","halamena@8","glowprod_db");
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }?>
  <link rel="stylesheet" href="css/servico-video.css" />
  <link rel="stylesheet" href="css/servico-video-mobile.css" />
    <div class="background-servicos">
      <div class="wrapper">
        <nav id="submenu" class="navbar navbar-default navbar-fixed-top" role="navigation">
          <ul class="nav navbar-nav">
            <li class><a class="page-scroll" href="#videoclipe">Videoclipe</a></li>
            <li class="submenu-dots"> • </li>
            <li><a class="page-scroll" href="#aovivo">Gravação Ao Vivo</a></li>
            <li class="submenu-dots"> • </li>
            <li><a class="page-scroll" href="#institucional">Institucional</a></li>
            <li class="submenu-dots"> • </li>
            <li><a class="page-scroll" href="#eventos">Eventos</a></li>
            <li class="submenu-dots"> • </li>
            <li><a class="page-scroll" href="#youtuber">Seja um Youtuber</a></li>
            <li class="submenu-dots"> • </li>
            <li><a class="page-scroll" href="#drone">Imagens Aéreas</a></li>
          </ul>
        </nav>
        <div class="content">
            <section class="servico-section" id="videoclipe">
                <div class="capa" id="videoclipe-capa">
                  <div class="servico-color-left">
                    <div class="servico-texto-left">
                      <h2 class="servico-texto-titulo desktop">VIDEOCLIPES</h2>
                      <div style="background-position-x: 100%;background-position-y: 25%;background-size: 140%;" class="capa-mobile" id="videoclipe-capa">
                         <h2 class="servico-texto-titulo mobile">VIDEOCLIPES</h2>
                      </div>
                      <p><?php echo $texto[0][0];?></p>
                      <p><?php echo $texto[0][1];?></p>
                      <div class="video-100% mobile">
                         <iframe src="https://player.vimeo.com/video/149252593" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                      </div>
                      <p><?php echo $texto[0][2];?></p>
                    </div>
                  </div>
                </div>
                <div class="desktop" id="videoclipe-featured">
                  <div id='videoclipe-featured-video'>
                    <iframe src="https://player.vimeo.com/video/149252593" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                  </div>
                  <div id='videoclipe-featured-texto'>
                    <p><?php echo $texto[0][3];?></p>
                    <p><?php echo $texto[0][5];?></p>
                  </div>
                  <div id="videoclipe-featured-texto-2">
                    <p><?php echo $texto[0][4];?></p>
                  </div>
                </div>
                <div id="videoclipe-fotos" class="baguetteBoxOne gallery">
                  <div class="flex">
                    <?php for($n1=1;$n1<=5;$n1++){?>
                      <a href="http://sv.img.glowproducoes.com.br/foto-videoclipe-<?php echo $n1 ?>.jpg" id="videoclipe-bastidores-<?php echo $n1 ?>" style="background-image: url('http://sv.img.glowproducoes.com.br/thumbnail/foto-videoclipe-<?php echo $n1 ?>.jpg')" class="videoclipe-fotos-square opacity"></a>
                    <?php };?>
                  </div>
                  <div class="legenda">BASTIDORES</div>
                </div>

                <p class="mobile"><?php echo $texto[0][3];?></p>

                <div class="bottom-vimeo">
                  <?php



                  $thumb_vimeo_1_txt = array('Brazza - A Gente Gosta de Inventar Part. Caju e Castanha','MC K.I.Q - Kit Diferente','Fat Family - Mexe esse pescoço','Hardstuff - Hardstuff','Almah - Pleased To Meet You','Kath Bellsavvy - Red Lips');
                  $thumb_vimeo_1_id = array('194748083','158868923','166172090','205303907','182054267','136163616');

                  for($n11 = 0; $n11 < count($thumb_vimeo_1_id); $n11++){
                    $vimeoloop = $thumb_vimeo_1_id[$n11];
                    $query = "SELECT * FROM portfolio WHERE video = $vimeoloop";
                    $result = $mysqli->query($query);
                    $row = $result->fetch_array(MYSQLI_BOTH);



                    ?>
                      <a id="thumb_vimeo_1_id_<?php echo $n11 ?>" class="bottom-vimeo-list" href="//vimeo.com/<?php echo $thumb_vimeo_1_id[$n11]?>" data-lity>
                        <div class="thumb_vimeo_img" style="background-image: url('<?php echo $row[thumbnail]?>')" ><div class="play"></div></div>
                        <h3><?php echo $thumb_vimeo_1_txt[$n11];?></h3>
                      </a>

                  <?php }

                  ?>
                </div>

                <?php echo $vermais; ?>

            </section>

            <section class="servico-section" id="aovivo">
            	<div class="capa" id="aovivo-capa"></div>
            	<div id="aovivo-texto-grid">
            			<div id="aovivo-texto-left">
            				<div class="capa-mobile" id="aovivo-capa" >
            					<h2 style="text-align:center;text-shadow: 5px 5px 10px black!important;" class="servico-texto-titulo mobile">GRAVAÇÃO AO VIVO</h2>
            				</div>
            					<h2 class="servico-texto-titulo desktop">GRAVAÇÃO AO VIVO</h2>
            					<p><?php echo $texto[1][0];?></p>
            					<p><?php echo $texto[1][1];?></p>
            					<p class="desktop"><?php echo $texto[1][2];?></p>
            			</div>

            			<div id="aovivo-video-right">
            					<iframe src="https://player.vimeo.com/video/199684460" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            			</div>

            			<div id="aovivo-texto-center">
            				<p class="mobile"><?php echo $texto[1][2];?></p>
            				<p class="desktop"><?php echo $texto[1][3];?></p>
            			</div>
            		</div>
            	<div class="bottom-fotos baguetteBoxOne gallery">
            			<?php for ($n2=1; $n2 <= 4; $n2++) { ?>
            				<a id="foto-shows-<?php echo $n2 ?>" href="http://sv.img.glowproducoes.com.br/foto-shows-<?php echo $n2 ?>.jpg" class="bottom-fotos-list-4 opacity" style="background-image:url('http://sv.img.glowproducoes.com.br/thumbnail/foto-shows-<?php echo $n2 ;?>.jpg')">
            				</a>
            			<?php } ?>
            		</div>
            	<p class="mobile"><?php echo $texto[1][3];?></p>
            	<div class="bottom-vimeo" id="aovivo-bottom-vimeo">
            			<?php $sv2 = array(
            				array('159187535','204756581','210690043','139500809'),
            				array('Furia Inc. - The Cage','Gavi - Humor de Domingo','Zá Santori - Live Teaser','Ted Marengos - Rock and Roll to You'));
            				for ($n22 = 0; $n22 < 4; $n22++){
                      $vimeoloop = $sv2[0][$n22];
                      $query = "SELECT * FROM portfolio WHERE video = $vimeoloop";
                      $result = $mysqli->query($query);
                      $row = $result->fetch_array(MYSQLI_BOTH);

            					?>
            					<a class="aovivo-bottom-vimeo bottom-vimeo-list" href="//vimeo.com/<?php echo $sv2[0][$n22];?>" data-lity>
            						<div class="thumb_vimeo_img" style="background-image: url('<?php echo $row[thumbnail] ?>')">
            							<div class="play"></div>
            						</div>
            						<h3><?php echo $sv2[1][$n22] ;?></h3>
            					</a>
            				 <?php } ?>
            		<div id="aovivo-legenda" class="legenda">SHOW / AO VIVO</div>
            	</div>
            	<div id="vermais"><a href="http://www.glowproducoes.com.br/sites/glow2017/portfolio/video/portfolio-video.php">
            			 <div class="vermais">TODOS OS VÍDEOS</div></a>
            		</div>
            </section>



            <section class="servico-section" id="institucional">
            		<div id="institucional-capa" class="capa-mobile"></div>

            		<div class="capa" id="institucional-capa"></div>

            		<h2 style="color:black!important;padding-top:10px;padding-bottom:0px;font-size: 19pt;"  class="servico-texto-titulo mobile align-center">INSTITUCIONAL / PUBLICITÁRIO</h2>

            		<p class="mobile" style="color:black"><?php echo $texto[2][0];?></p>

            		<div id="institucional-texto-grid">
            			<div id="institucional-video-left">
            				<iframe src="https://player.vimeo.com/video/172985098" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            			</div>
            			<div id="institucional-texto-right">
            				<h2 class="servico-texto-titulo desktop">INSTITUCIONAL / PUBLICITÁRIO</h2>
            				<p class="desktop" style="color:black"><?php echo $texto[2][0] ;?></p>
            				<p style="color:black"><?php echo $texto[2][1] ;?></p>
            				<p class="desktop" style="color:black"><?php echo $texto[2][2] ;?></p>
            			</div>
            		</div>

            		<div class="bottom-vimeo">
            			<?php
            			$thumb_vimeo_3_id = array('183278354','169041997','156923794','166874855','213384652','193787662');
            			$thumb_vimeo_3_txt = array('Clear Aligner','Manifesto Restaurante Do Rock','Fernando Hashimoto - Schagel Drums','Manifesto - Institucional','Allezy - Lookbook','Escola do Bairro');
            			for($thumb_n=0;$thumb_n < count($thumb_vimeo_3_id);$thumb_n++) {
                    $vimeoloop = $thumb_vimeo_3_id[$thumb_n];
            				$query = "SELECT * FROM portfolio WHERE video = $vimeoloop";
            				$result = $mysqli->query($query);
            				$row = $result->fetch_array(MYSQLI_BOTH) ?>

            						<a class="bottom-vimeo-list" href="//vimeo.com/<?php echo $thumb_vimeo_3_id[$thumb_n];?>" data-lity>
            							<div class="thumb_vimeo_img lazy" style="background-image:url(<?php echo $row[thumbnail]?>)");>
            								<div class="play"></div>
            							</div>
            							<h3><?php echo $thumb_vimeo_3_txt[$thumb_n];?></h3>
            						</a>

            			<?php } ?>
            		</div>

            		<p class="mobile" style="color:black"><?php echo $texto[2][2] ;?></p>

            		<div id="institucional-fotos" class="baguetteBoxOne gallery shadow bottom-fotos">
            			<?php $contador = 16; for($s3 = 1 ; $s3 <= $contador; $s3++ ) { ?>
            			<a href="http://sv.img.glowproducoes.com.br/foto-institucional-<?php echo $s3 ;?>.jpg" id="servico-foto-3-id-<?php echo $s3 ;?>" class="institucional-fotos opacity lazy" style="background-image:url('http://sv.img.glowproducoes.com.br/thumbnail/foto-institucional-<?php echo $s3 ;?>.jpg')"></a>
            			<?php } ;?>
            		</div>

            		<div class="servico-video-bottom-title desktop">AÇÃO INTERATIVA</div>

            		<div class="bottom-vimeo desktop" id="institucional-acao-vimeo">
            			<div class="bottom-vimeo-list institucional-acao-vimeo">
            				<a href="//vimeo.com/122281893" data-lity>
            					<div class="thumb_vimeo_img" style="background-image:url('https://i.vimeocdn.com/video/629861656_1280x720.jpg');"><div class="play"></div></div>
            					<h3>Jorge e Mateus na Deezer</h3>
            				</a>
            			</div>
            			<div class="bottom-vimeo-list institucional-acao-vimeo">
            			<a href="//vimeo.com/180370866" data-lity>
            				<div class="thumb_vimeo_img" style="background-image:url('https://i.vimeocdn.com/video/629861097_1280x720.jpg');"><div class="play"></div></div>
            				<h3>Allezy - Beco do Batman</h3>
            			</a>
            			</div>
            		</div>

            		<div id="relacionados" class="desktop">
            			<div class="relacionados-title">SERVIÇOS RELACIONADOS</div>
            			<a href="#drone">
            				<div id="relacionados-imagens-aereas" class="relacionados-list">
            					<h3>Imagens Aéreas</h3>
            				</div>
            			</a>

            			<a href="http://www.glowproducoes.com.br/sites/glow2017/servicos/foto">
            				<div id="relacionados-fotos-promocionais" class="relacionados-list">
            					<h3>Fotos Promocionais</h3>
            				</div>
            			</a>

            			<a href="http://www.glowproducoes.com.br/sites/glow2017/servicos/site">
            				<div id="relacionados-desenvolvimento-de-site" class="relacionados-list">
            					<h3>Desenvolvimento de Site</h3>
            				</div>
            			</a>
            		</div>

            		<div style="background-image: url('http://www.glowproducoes.com.br/sites/glow2017/servicos/video/img/background-eventos-top.jpg');height:157px;background-repeat:no-repeat;" id="vermais">
            			<a href="http://www.glowproducoes.com.br/sites/glow2017/portfolio/video/portfolio-video.php">
            				<div class="vermais">TODOS OS VÍDEOS</div>
            			</a>
            		</div>
            </section>

            <section class="servico-section" id="eventos">
            	<div class="capa-mobile" id="eventos-capa">
            		<h2 style="width:46%;" class="servico-texto-titulo mobile">EVENTOS / FESTAS</h2>
            	</div>
            	<div class="capa" id="eventos-capa">
            		<div id="eventos-texto-left">
            			<h2 class="servico-texto-titulo desktop">EVENTOS / FESTAS</h2>
            			<p><?php echo $texto[3][0];?></p>
            			<p class="desktop"><?php echo $texto[3][1];?></p>
            			<p class="desktop"><?php echo $texto[3][2];?></p>
            		</div>
            	</div>
            	<div id="eventos-fotos" class="bottom-fotos baguetteBoxOne gallery">
            		<div id="eventos-video-left" class="desktop">
            			<iframe src="https://player.vimeo.com/video/209995540" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            		</div>
            		<div id="eventos-fotos-right">
            			<?php for ($n4=1; $n4 <= 4 ; $n4++) { ?>
            				 <a href="http://sv.img.glowproducoes.com.br/foto-princip-eventos-<?php echo $n4;?>.jpg" class="eventos-fotos-right opacity lazy" style="background-image:url(http://sv.img.glowproducoes.com.br/thumbnail/foto-princip-eventos-<?php echo $n4?>.jpg)"></a>
            			<?php } ?>

            			<a href="http://sv.img.glowproducoes.com.br/foto-eventos-1.jpg" class="eventos-fotos-right opacity mobile lazy" style="background-image:url(http://sv.img.glowproducoes.com.br/thumbnail/foto-eventos-1.jpg)"></a>
            			<a href="http://sv.img.glowproducoes.com.br/foto-eventos-2.jpg" class="eventos-fotos-right opacity mobile lazy" style="background-image:url(http://sv.img.glowproducoes.com.br/thumbnail/foto-eventos-2.jpg)"></a>

            		</div>

                <div class="desktop eventos-fotos-pattern" >


            		<a href="http://sv.img.glowproducoes.com.br/foto-eventos-1.jpg" class="bottom-fotos-list-4 opacity desktop lazy" style="background-image:url(http://sv.img.glowproducoes.com.br/thumbnail/foto-eventos-1.jpg)"></a>
            		<a href="http://sv.img.glowproducoes.com.br/foto-eventos-2.jpg" class="bottom-fotos-list-4 opacity desktop lazy" style="background-image:url(http://sv.img.glowproducoes.com.br/thumbnail/foto-eventos-2.jpg)"></a>
            		<p class="mobile"><?php echo $texto[3][1];?></p>
            		<div id="eventos-video-left" class="mobile">
            				 <iframe src="https://player.vimeo.com/video/209995540" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            		</div>
            		<p class="mobile"><?php echo $texto[3][2];?></p>
            		<?php for ($n44=3; $n44 <= 8 ; $n44++) {
            			 ?>
            			<a href="http://sv.img.glowproducoes.com.br/foto-eventos-<?php echo $n44 ?>.jpg" class="bottom-fotos-list-4 opacity lazy" style="background-image:url(http://sv.img.glowproducoes.com.br/thumbnail/foto-eventos-<?php echo $n44 ?>.jpg)"></a>
            		<?php } ?>
                  </div>

            	</div>
            	<div id="eventos-bottom-vimeo" class="bottom-vimeo">
            	<?php
            	$servico_video_4_bottom_vimeo = array(
            	array('213735498','213744675',' 223384831','169041997'),
            	array('Rejane Casamento','Larissa Debutante','Isabela Arantes - Festa de 12 anos','Quatro'));
            	for($n444 = 0; $n444 < count($servico_video_4_bottom_vimeo[0]); $n444++) {
                $vimeoloop = $servico_video_4_bottom_vimeo[0][$n444];
            		$query = "SELECT * FROM portfolio WHERE video = $vimeoloop";
            		$result = $mysqli->query($query);
            		$row = $result->fetch_array(MYSQLI_BOTH)
            		?>
            	<a href="http://vimeo.com/<?php echo $servico_video_4_bottom_vimeo[0][$n444]?>" data-lity id="eventos-bottom-vimeo-<?php echo $n444 ?>" class="eventos-bottom-vimeo bottom-vimeo-list">
            	<div class="thumb_vimeo_img lazy" style="background-image:url(<?php echo $row[thumbnail] ?>)">
            	<div class="play"></div>
            	</div>
            	<h3><?php echo $servico_video_4_bottom_vimeo[1][$n444]?></h3>
            	</a>
            	<?php } ?>
            	</div>
            	<div id="vermais"><a href="http://www.glowproducoes.com.br/sites/glow2017/portfolio/video/portfolio-video.php">
            	<div class="vermais">TODOS OS VÍDEOS</div></a>
            	</div>
            </section>

            <section class="servico-section" id="youtuber">

            			<div class="capa" id="youtuber-capa">

            				<div class="capa-mobile mobile" id="youtuber-capa">
            					<h2 style="font-size:24pt" class="servico-texto-titulo align-center">SEJA UM <img style="vertical-align:baseline;" src="http://glowproducoes.com.br/sites/glow2017/servicos/video/img/youtuber.png" width="100px"/></span></h2>
            				</div>

            				<div id="youtuber-video-left">
                      <iframe src="https://player.vimeo.com/video/213387099" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            				</div>

            				<div class="desktop " id="youtuber-texto-right">
            					<h2 class="servico-texto-titulo">SEJA UM YOUTUBER</h2>
            					<p><?php echo $texto[4][0] ;?></p>
            				</div>

            			</div>

            			<p class="mobile"><?php echo $texto[4][0] ;?></p>


            			<?php $n5 = array(
            			array('207498642','153056604','137165255','222254802','208857949'),
            			array('Luckas Moura - E essa boca aí ( part. João Guilherme )','Furia Inc. - Metal Land 2015 (Diário)','Release - Banda Luppa','Arte e Psicanálise - Inspiração','Vilela - Bety'));
                  ?>


            			<div id="youtuber-bottom-vimeo">
                    <?php
                      $vimeoloop = $n5[0][0];
                      $query = "SELECT * FROM portfolio WHERE video = $vimeoloop";
                      $result = $mysqli->query($query);
                      $row = $result->fetch_array(MYSQLI_BOTH)
                    ?>
            				<div class="youtuber-bottom-vimeo bottom-vimeo-list">
            					<a href="//vimeo.com/<?php echo $n5[0][0] ?>" data-lity class="thumb_vimeo_img lazy" style="background-image:url(<?php echo $row[thumbnail]?>)">
            						<div class="play"></div>
            					</a>
            					<h3><?php echo $n5[1][0] ?></h3>
            				</div>



                    <?php
                      $vimeoloop = $n5[0][1];
                      $query = "SELECT * FROM portfolio WHERE video = $vimeoloop";
                      $result = $mysqli->query($query);
                      $row = $result->fetch_array(MYSQLI_BOTH)
                    ?>

            				<div class="youtuber-bottom-vimeo bottom-vimeo-list">
            					<a href="//vimeo.com/<?php echo $n5[0][1] ?>" data-lity class="thumb_vimeo_img lazy" style="background-image:url(<?php echo $row[thumbnail]?>)">
            						<div class="play"></div>
            					</a>
            					<h3><?php echo $n5[1][1] ?></h3>
            				</div>


                    <?php
                      $vimeoloop = $n5[0][2];
                      $query = "SELECT * FROM portfolio WHERE video = $vimeoloop";
                      $result = $mysqli->query($query);
                      $row = $result->fetch_array(MYSQLI_BOTH)
                    ?>
            				<div class="youtuber-bottom-vimeo bottom-vimeo-list">
            					<a href="//vimeo.com/<?php echo $n5[0][2] ?>" data-lity class="thumb_vimeo_img lazy" style="background-image:url(<?php echo $row[thumbnail]?>)">
            						<div class="play"></div>
            					</a>
            					<h3><?php echo $n5[1][2] ?></h3>
            				</div>

                    <?php
                      $vimeoloop = $n5[0][3];
                      $query = "SELECT * FROM portfolio WHERE video = $vimeoloop";
                      $result = $mysqli->query($query);
                      $row = $result->fetch_array(MYSQLI_BOTH)
                    ?>

            				<div class="youtuber-bottom-vimeo bottom-vimeo-list">
            					<a href="//vimeo.com/<?php echo $n5[0][3] ?>" style="background-image:url(<?php echo $row[thumbnail]?>)" data-lity class="thumb_vimeo_img lazy">
            						<div class="play"></div>
            					</a>
            					<h3><?php echo $n5[1][3] ?></h3>
            				</div>
            			</div>

            			<div id="youtuber-box">
            				<div id="youtuber-box-left">
            					<div>
            						<h3 class="servico-texto-titulo">Áudio React</h3>
            						<p><?php echo $texto[4][1] ;?></p>
            					</div>


            				</div>
            				<div id="youtuber-box-right">
                      <?php
                        $vimeoloop = $n5[0][4];
                        $query = "SELECT * FROM portfolio WHERE video = $vimeoloop";
                        $result = $mysqli->query($query);
                        $row = $result->fetch_array(MYSQLI_BOTH)
                      ?>
                      <div id="audio-react-1">
                        <a href="//vimeo.com/<?php echo $n5[0][4] ?>" style="background-image:url(<?php echo $row[thumbnail] ?>)" data-lity class="thumb_vimeo_img lazy">
                          <div class="play"></div>
                        </a>
                        <h3><?php echo $n5[1][4] ?></h3>
                      </div>



                    </div>
            			</div>

            			<div style="width: 620px;" class="desktop"id="relacionados">
            				<div class="relacionados-title">SERVIÇOS RELACIONADOS</div>
            				<a href="http://www.glowproducoes.com.br/sites/glow2017/servicos/foto">
            					<div id="relacionados-fotos-promocionais" class="relacionados-list">
            						<h3>Fotos Promocionais</h3>
            					</div>
            				</a>

            				<a href="http://www.glowproducoes.com.br/sites/glow2017/servicos/site">
            					<div id="relacionados-desenvolvimento-de-site" class="relacionados-list">
            						<h3>Desenvolvimento de Site</h3>
            					</div>
            				</a>
            			</div>

            			<div id="vermais">
            				<a href="http://www.glowproducoes.com.br/sites/glow2017/portfolio/video/portfolio-video.php">
            					<div class="vermais">TODOS OS VÍDEOS</div>
            				</a>
            			</div>

            </section>




            <section class="servico-section" id="drone">
            	<div class="capa" id="drone-capa">
            		<div id="drone-texto-left">
            		<h2 class="servico-texto-titulo desktop">IMAGENS AÉREAS</h2>
            		<div class="capa-mobile" id="drone-capa">
            				 <h2 class="servico-texto-titulo mobile">IMAGENS<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AÉREAS</h2>
            		</div>
            		<p><?php echo $texto[5][0] ?></p>

            		<p class="desktop">
            			<?php echo $texto[5][1] ?>
            		</p>
            	</div>
            </div>

            <div id="drone-video-grid">
            <div id="drone-video-left">
              <?php

                $query = "SELECT * FROM portfolio WHERE video = 213383382";

                $result = $mysqli->query($query);
                $row = $result->fetch_array(MYSQLI_BOTH)
              ?>

              <a href="//vimeo.com/213383382" data-lity class="thumb_vimeo_img lazy" style="background-image:url(<?php echo $row[thumbnail]?>)">
                <div class="play"></div>
              </a>
            </div>
            <p class="mobile">
            	<?php echo $texto[5][1] ?>
            </p>
            <div class="baguetteBoxOne gallery" id="drone-fotos">

            		<?php for($n6=1;$n6<=4;$n6++) { ?> <a class="drone-fotos opacity lazy" style="background-image:url(http://glowproducoes.com.br/sites/glow2017/servicos/video/img/thumbnail/foto-aereas-<?php echo $n6 ?>.jpg)" href="http://glowproducoes.com.br/sites/glow2017/servicos/video/img/foto-aereas-<?php echo $n6 ?>.jpg"></a>
            		<?php }?>

            </div>

            </div>
            <div id="vermais">
            	<a href="http://www.glowproducoes.com.br/sites/glow2017/portfolio/video/portfolio-video.php">
            		<div class="vermais">TODOS OS VÍDEOS</div>
            	</a>
            </div>
            </section>

            <div id="home-servicos-bg">

            <?php include '../../servicos/servicos.php';?>
            <?php include '../../clientes/clientes.php';?>
            <?php include '../../portfolio/portfolio.php';?>
            <?php include '../../contato/contato.php';?>

            </div>

        </div>
      </div>
    </div>
 <?php
 include '../../footer.php';
 ?>
