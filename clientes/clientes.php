
	<section id="artistas" class="home-section">
		<div class="title">
			<h2 class="content-title">ARTISTAS / CLIENTES</h2> <div class="content-title-bar"></div><h3 class="content-sub-title">Um pessoalzinho que já é de casa</h3>
		</div>

		<div id="artistas-destaque">

			<?php $artistas = array(
				array('fat-family','edu-falaschi','brazza','biel','furia-inc','hardstuff','kiq','arte-kerosene','mirandous','manifesto','olb-producoes','allezy'),
				array('Fat Family','Edu Falaschi / Almah','Brazza','Biel','Furia Inc.','Hardstuff','MC K.I.Q','Arte Kerosene','Mirandous','Manifesto','Olb Produções','Allezy'));
				for($ad=0;$ad < count($artistas[0]);$ad++){
			?>
				<a id="artistas-destaque-box-<?php echo $ad?>" class="artistas-destaque-box" href="http://glowproducoes.com.br/sites/glow2017/clientes/<?php echo $artistas[0][$ad]?>" >
						<div class="artistas-destaque-box-title">
								<?php echo $artistas[1][$ad] ?>
						</div>
			 	</a>
			 	<?php }?>
		 </div>

	 </section>
