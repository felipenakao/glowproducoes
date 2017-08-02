<?php
$cont = 0;

$page_title = 'Mc K.I.Q';

$nome = 'kiq';

$left = 'hotpage-portfolio-video-left';

$right = 'hotpage-portfolio-video-right';

/* CAPA */

$capa = 'capa.jpg';

/* COR DE FUNDO */
$fundo = '#cccccc';

/* TITULOS VIDEOS */

$titulo = array('Kit Diferente','Ví você passando','Bandida do Futuro');

/* URL VIDEOS */
$video = array('158868923');

/* COR DA LETRA VIDEOS */
$letra = array('black', 'black', 'black', 'black');

/* CONTADOR */
$n = 0 ;

/* REDES SOCIAIS */

$site = array('#','none');

$facebook = array('mckiqofc','block');

$instagram = array('mckiq_oficial','block');

$youtube = array('channel/UC3El6V_vLmMQfF-Crld58Lg','block');

//* BIOGRAFIA */
$bio = array(

	'


						Caique Seixas mais conhecido como MC KIQ é um cantor e compositor que segue o estilo do funk ostentação e se apresenta em shows em casas noturnas na terra da garoa e no interior.
','


	','



	');

//* TEXTOS DOS VIDEOS *//

$p = array(

/*PRIMEIRO TEXTO*/
'
<p>Com o intuito de mostrar o extremo contraste que há, o clipe teve cenas gravadas na comunidade Jardim Jaqueline, próximo à casa do artista, e na cobertura do prédio da UOL, em São Paulo, ilustrando os principais polos comerciais da cidade.</p>

<p>A música foi gravada e produzida nos estúdios da Glow, mesma produtora responsável por toda a parte de vídeo. “Foi muito gentil da parte do UOL abrir as portas do heliponto para a nossa equipe. Conseguimos um pôr do sol maravilhoso!”, disse o diretor Rodrigo Rossi.</p>


',
	/*SEGUNDO TEXTO*/
'
<p>Com participação dos grandes repentistas Cajú & Castanha, a música retrata a criatividade do povo brasileiro e fala dos apelidos de personalidades conhecidas, tais como Pelé, Chacrinha, Tiririca, Lampião e muitos outros. Gravado no centro de São Paulo, o clipe conta com muito bom humor e finaliza com uma batalha de rima entre Fabio Brazza e os repentistas convidados.
</p>


',
	/*TERCEIRO TEXTO*/
'

<p>Fugindo um pouco do rap, Brazza mostra que também tem muito swing e samba no pé nesse clipe gravado na região do Capão Redondo, zona sul de São Paulo. Junto do Grupo Reduto e ao som de seu cavaco, fala da garra do povo brasileiro e vibra por um país que pode dar certo.
</p>

',
	/*QUARTA TEXTO*/
'

<p>Com rimas mais do que bem pensadas, Brazza fez uma música inteira na qual todas as palavras de cada verso começam com uma mesma letra específica do alfabeto, indo de A a Z. Para facilitar a compreensão do espectador, produzimos, em parceria com o Irra Studio, um lyric video, o qual assumimos toda a parte da filmagem enquanto deixamos a parte gráfica na mão de nossos parceiros.
</p>

',

'

<p>

Com rimas mais do que bem pensadas, Brazza fez uma música inteira na qual todas as palavras de cada verso começam com uma mesma letra específica do alfabeto, indo de A a Z. Para facilitar a compreensão do espectador, produzimos, em parceria com o Irra Studio, um lyric video, o qual assumimos toda a parte da filmagem enquanto deixamos a parte gráfica na mão de nossos parceiros.

</p>


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
