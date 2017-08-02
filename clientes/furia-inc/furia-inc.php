<?php

$cont = 3;

$page_title = 'Furia Inc.';

$nome = 'furia-inc';

$hotpage_video_id = array(
    '0'     => array(),
    '1' 	=> array(),
    '2'     => array('164682857','164682346','164680517','164680514','164680512','164680510'),
	'3' 	=> array(),

	);

  $fotografia = array('','','','','','');

$left = 'hotpage-portfolio-video-left';

$right = 'hotpage-portfolio-video-right';

/* CAPA */

$capa = 'capa.jpg';

/* COR DE FUNDO */
$fundo = '#cccccc';

/* TITULOS VIDEOS */

$titulo = array('The Cage','Pitchblack Downfall','Live in Carioca’s Club','Metal Land Festival 2015');

/* URL VIDEOS */
$video = array('159187535','138505664','','153056604');

/* COR DA LETRA VIDEOS */
$letra = array('black', 'black', 'black', 'black');

/* CONTADOR */
$n = 0;

/* REDES SOCIAIS */

$site =  array('http://www.furiainc.com.br','block');

$facebook = array('furiainc','block');

$instagram = array('furiainc','block');

$youtube = array('furiainc','block');

//* BIOGRAFIA */
$bio = array(
'
Banda brasileira de Metal formada em 2009 pelos irmãos Neto e Gustavo Romão, Victor Cutrale e Bruno Nicolozzi. Seu primeiro registro foi o EP ”Creatin A World “ em 2010, sendo destaque na edição #139 (Agosto/2010) da renomada revista "Roadie Crew”, na sessão “Garagem Demos”. O Furia começou como um projeto de irmãos por volta de 2005, após um longo período se fortaleceu mostrando seu trabalho no cenário metal brasileiro, sendo finalistas do “Manifesto Rock Fest” (2009), participaram do “X Pedrock Festival” (MG), foram eleitos como a 4ª melhor banda do Estado de São Paulo por voto popular pelo site Whiplash.net (2010).
',
'
Em 2011 lançaram o EP “Before The World Ends”, produzido por Brendan Duffey, no Norcal Studios, novamente, foram destaque na edição #152 (Set/2011), da revista Roadie Crew. Finalistas do “Wacken Metal Battle” (2011/SP), com ótimas críticas e repercussões abriram alguns shows na famosa “Casa do Metal”, “Manifesto Bar”, em São Paulo: Paul Di’ Anno (Iron Maiden/Killers); Poisonblack (Finlândia); Dr. Sin; Korzus e Punk Metal Allstars com participações: East Bay Ray (Dead Kennedys); Schmier (Destruction); Mike Clark (Suicidal Tendencies). Show extra do Rock In Rio 2011 em São Paulo.
',
'
Convidado pelo vocalista Edu Falaschi (ex-Angra), Victor Cutrale fez uma participação na faixa “Zombies Dictators” no álbum Motion (2011), participando também do festival Metal Open Air 2012.
',
'
Atualmente a banda esta trabalhando na divulgação do seu álbum “debut” Murder Nature (2014), contendo 13 faixas, com participações de Felipe Andreoli (Angra) e Antonio Araújo (Korzus). O álbum foi produzido por Brendan Duffey e Adriano Daga no Norcal Studios (Angra, André Matos, Torture Squad e Almah).
');

//* TEXTOS DOS VIDEOS *//

$p = array(

/*PRIMEIRO TEXTO*/
'

<p>
Dia especial, clipe especial.
</p>

<p>
Nesse dia, Furia Inc abriu para a consagrada banda francesa Gojira e aproveitou para gravar um clipe lindo no tradicional Carioca Club em São Paulo-SP.
</p>

',
	/*SEGUNDO TEXTO*/
'
<p>
Nessa produção cinematográfica, usamos sangue artificial, mais de 50 litros de um material altamente inflamável para jogar fogo em barris de petróleo, além de recursos de ponta, incluindo uma grua de 2 metros de altura e câmeras com sensor de cinema (Blackmagic Design Pocket) e super slow motion (Sony FS700).</p>


',
	/*TERCEIRO TEXTO*/
'

<p>

Além do clipe, no show em que Furia Inc abriu para a banda Gojira, foram gravados 7 vídeos da banda tocando ao vivo, cobertura que foi inteiramente feita pela Glow Produções, usando um total de 6 câmeras posicionadas estrategicamente para obtenção das melhores imagens.
</p>


',
	/*QUARTA TEXTO*/
'

<p>

Nesse vídeo diário, acompanhamos a banda durante sua apresentação no Metal Land Festival 2015, um evento consagrado em que dividiram o palco com grandes nomes da cena do metal nacional como Sepultura, Andre Matos e Krisiun.
</p>

',

'




'


);

/* FOTOS PARA GALERIA DO VIDEO */

if ($n == 0) {

	$align = $right;

} else {

	$align = $align;
}
?>

    <?php
	include '../loop-clientes.php';
?>
