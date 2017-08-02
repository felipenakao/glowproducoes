<?php
$home = 'http://glowproducoes.com.br/sites/glow2017';
$page_title = 'Áudio';
$nome = 'servicos-audio';
include '../../header.php';
$mysqli = mysqli_connect("localhost","glowprod_admin","halamena@8","glowprod_db");
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

?>
<link rel="stylesheet"  href="http://glowproducoes.com.br/sites/glow2017/servicos/audio/css/servicos-audio.css"/>
<div class="background-servicos">
	<div class="wrapper">
			<div class="content">
				 	<nav id="submenu" class="navbar navbar-default navbar-fixed-top" role="navigation">
		      		<ul class="nav navbar-nav">
									<li class>
											<a class="page-scroll" href="#gravacao-e-producao">Gravação e Produção</a>
									</li>
									<li class="submenu-dots"> • </li>
									<li>
											<a class="page-scroll" href="#aovivo">Ao Vivo</a>
									</li>
									 <li class="submenu-dots"> • </li>
									<li>
											<a class="page-scroll" href="#trilha-sonora">Trilha Sonora</a>
									</li>
									<li class="submenu-dots"> • </li>
									<li>
											<a class="page-scroll" href="#locucao">Locuções</a>
									</li>
		          </ul>
		    	</nav>

					<div id="gravacao-e-producao" class="servico-template">
							<div class="servico-audio-top">
									<div style="color: white" class="servico-audio-texto-left">
											<h2 class="servico-audio-texto-titulo">GRAVAÇÃO E PRODUÇÃO</h2>
                      <div style="color: white" class="servico-audio-foto-right mobile"></div>

											<p>
												Gente qualificada e profissional para cuidar desde a gravação até a direção da sua obra, produção avançada com recursos modernos e de fácil acesso.
											</p>

											<p>
												Gente qualificada e profissional para cuidar desde a gravação até a direção da sua obra, produção avançada com recursos modernos e de fácil acesso.
											</p>
									</div>
									<div style="color: white" class="servico-audio-foto-right desktop"></div>
							</div>
							<div class="soundcloud-middle">
                <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/334245107%3Fsecret_token%3Ds-cKe53&amp;color=d45847&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
              </div>
					</div>


					<div id="aovivo" class="servico-template">
							<div class="servico-audio-top">
									<div style="color: white" class="servico-audio-texto-left">
											<h2 class="servico-audio-texto-titulo">AO VIVO</h2>
                      <div style="color: white" class="servico-audio-foto-right mobile"></div>
													<p>
														No estúdio a gente edita, mas ao vivo, a gente edita também!
													</p>
													<p>
														Nosso compromisso é sempre a melhor qualidade de áudio, sempre prezando pela microfonação correta do ambiente e captando a essência do ao vivo, com o requinte do estúdio.
													</p>
									</div>

									<div style="color: white" class="servico-audio-foto-right desktop"></div>
							</div>



							<div class="vimeo-middle">
								<?php $audio_vimeo_2 = array('199684460','204756581');
									for ($av2 = 0; $av2 < count($audio_vimeo_2); $av2++){
										$audio_vimeo_loop_2 = $audio_vimeo_2[$av2];
										$query = "SELECT * FROM portfolio WHERE video = $audio_vimeo_loop_2";
										$result = $mysqli->query($query);
										$row = $result->fetch_array(MYSQLI_BOTH);
										?>
								<a href="//vimeo.com/<?php echo $row[video]?>" data-lity>
									<div class="thumb_vimeo_img lazy vimeo-middle-gallery-2" data-src="<?php echo $row[thumbnail]?>">
										<div class="play"></div>
									</div>
									<h3><?php echo $row[cliente]?> - <?php echo $row[producao]?></h3>
								</a>
								<?php } ?>
							</div>

							<div class="soundcloud-middle">

                <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/334372064%3Fsecret_token%3Ds-Fw8gH&amp;color=f8ca4d&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>

									</div>



					</div>

          <div id="trilha-sonora" class="servico-template">
							<div class="servico-audio-top">
									<div style="color: white" class="servico-audio-texto-left">
											<h2 class="servico-audio-texto-titulo">TRILHA SONORA</h2>
                      <div style="color: white" class="servico-audio-foto-right mobile"></div>
													<p>
                            Sonorizar traz um novo patamar de profissionalismo, seja em qualquer trabalho, fazer uma trilha sonora personalizada conta muito para o resultado final do vídeo/filme.
                          </p>
									</div>

									<div style="color: white" class="servico-audio-foto-right desktop"></div>
							</div>



							<div class="vimeo-middle">
								<?php $audio_vimeo_3 = array('222897221','222896008');
									for ($av3 = 0; $av3 < count($audio_vimeo_3); $av3++){
										$audio_vimeo_loop_3 = $audio_vimeo_3[$av3];
										$query3 = "SELECT * FROM none WHERE video = $audio_vimeo_loop_3";
										$result3 = $mysqli->query($query3);
										$row3 = $result3->fetch_array(MYSQLI_BOTH);
										?>
								<a href="//vimeo.com/<?php echo $row3[video]?>" data-lity>
									<div class="thumb_vimeo_img lazy vimeo-middle-gallery-2" data-src="<?php echo $row3[thumbnail]?>">
										<div class="play"></div>
									</div>
									<h3><?php echo $row3[cliente]?> - <?php echo $row3[producao]?></h3>
								</a>
								<?php } ?>
							</div>

							<div class="soundcloud-middle">

<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/334372315%3Fsecret_token%3Ds-UJR7v&amp;color=c24366&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe></div>

					</div>

          <div id="locucao" class="servico-template">
              <div class="servico-audio-top">
                  <div style="color: white" class="servico-audio-texto-left">
                      <h2 class="servico-audio-texto-titulo">LOCUÇÕES</h2>
                      <div style="color: white" class="servico-audio-foto-right mobile">

                        <iframe src="https://player.vimeo.com/video/172985098?color=de2e28&title=0&byline=0&portrait=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                      </div>
                          <p>
                            O cuidado e o carinho com a voz na hora da gravação de uma locução é compromisso na Glow, contamos com especialistas em tratamento de voz avançado, sendo referência no mercado nacional de qualidade de áudio em locução.
                          </p>

                  </div>

                  <div style="color: white" class="servico-audio-foto-right desktop">

                    <iframe src="https://player.vimeo.com/video/172985098?color=de2e28&title=0&byline=0&portrait=0" width="878" height="494" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                  </div>
              </div>

              <div class="soundcloud-middle">

              <iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/334372118%3Fsecret_token%3Ds-812ON&amp;color=249aa7&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                  </div>


                  <div id="relacionados" class="desktop">
                    <div class="relacionados-title">SERVIÇOS RELACIONADOS</div>
                    <a href="http://www.glowproducoes.com.br/sites/glow2017/servicos/video/#youtuber-box">
                      <div id="relacionados-video-audio-react" class="relacionados-list">
                        <h3>Áudio React</h3>
                      </div>
                    </a>

                    <a href="http://www.glowproducoes.com.br/sites/glow2017/servicos/video/#videoclipe">
                      <div id="relacionados-video-videoclipe" class="relacionados-list">
                        <h3>Videoclipe</h3>
                      </div>
                    </a>

                    <a href="http://www.glowproducoes.com.br/sites/glow2017/servicos/video/#aovivo">
                      <div id="relacionados-video-aovivo" class="relacionados-list">
                        <h3>Ao Vivo</h3>
                      </div>
                    </a>
                  </div>

          </div>

          <div id="home-servicos-bg">
        <?php
        include '../../servicos/servicos.php';
        include '../../clientes/clientes.php' ;
        include '../../portfolio/portfolio.php';
        include '../../contato/contato.php';
        ?>
      </div>

			</div>


	</div>
</div>
<?php
include '../../footer.php';
?>
