<?php
$cont = 1;

$hotpage_video_id = array(
    '0'     => array(),
    '1' 	=> array('150966666','150966667','150967132'),
    '2'     => array(''),
	'3' 	=> array(),

	);

$page_title = 'Mirandous';

$nome = 'mirandous';

$left = 'hotpage-portfolio-video-left';

$right = 'hotpage-portfolio-video-right';

/* CAPA */

$capa = 'capa.jpg';

/* COR DE FUNDO */
$fundo = '#cccccc';

/* TITULOS VIDEOS */

$titulo = array('Rock ‘N’ Roll Dreamer','Recording sessions');

/* URL VIDEOS */
$video = array('149252593');

$fotografia = array('','fotografia-1');

/* COR DA LETRA VIDEOS */
$letra = array('black', 'black', 'black', 'black');

/* CONTADOR */
$n = 0;

/* REDES SOCIAIS */


$site =  array('','none');

$facebook = array('mirandousmusic','block');

$instagram = array('','none');

$youtube = array('channel/UCSOPYsoi6IYr3ypluGkVY1Q','block');

//* BIOGRAFIA */
$bio = array(

'

Formada em 2014,  a banda é composta por Caio (voz, guitarras e composições), Rodrigo Moura (baixo) e Ique Schmitt (bateria). Com atitude, o trio faz um som à base de guitarras e com espírito de garagem.

',


'

Com influências do rock inglês, o grupo herdou muito da sonoridade das décadas passadas, com letras que traduzem o inconformismo inerente ao rock e ao punk.

',

'



  '


);

//* TEXTOS DOS VIDEOS *//

$p = array(

/*PRIMEIRO TEXTO*/
'
<p>

Estrelado pela modelo paulista Camila Lops e coreografado pela premiada bailarina Patricia Bergantin, o clipe conta a história de um sonhador, que, por meio da música, é levado por uma musa a um passeio pelo seu próprio subconsciente.

</p>

',
	/*SEGUNDO TEXTO*/
'
<p>

O filme, dirigido por Rodrigo Rossi e filmado pela Glow Produções nos estúdios da E3 Fotografia, contou com efeitos especiais como mega-projeções. Tudo para criar uma atmosfera onírica.
</p>


',
	/*TERCEIRO TEXTO*/
'



',
	/*QUARTA TEXTO*/
'



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
