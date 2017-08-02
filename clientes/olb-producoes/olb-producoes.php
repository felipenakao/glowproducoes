<?php

$cont = 1;

$page_title = 'OLB Produções';

$nome = 'olb-producoes';

$left = 'hotpage-portfolio-video-left';

$right = 'hotpage-portfolio-video-right';

/* CAPA */

$capa = 'capa.jpg';

/* COR DE FUNDO */
$fundo = '#cccccc';

/* TITULOS VIDEOS */

$titulo = array('Time 4 Music 2016','Val Donato - Lágrimas de Crocodilo (Premiação T4M 2015)');

/* URL VIDEOS */
$video = array('203966979','212840898');

$hotpage_video_id = array(
    '0'     => array('199684460','212839296','212841338')


	);

$fotografia = array('','');

/* COR DA LETRA VIDEOS */
$letra = array('black', 'black', 'black', 'black');

/* CONTADOR */
$n = 0;

/* REDES SOCIAIS */

$site =  array('http://www.olbproducoes.com.br/','block');

$facebook = array('olbproducoes','block');

$instagram = array('olbproducoes','block');

$youtube = array('channel/UCYxgUYGs6tFUxee8juaOBGg','block');


//* BIOGRAFIA */
$bio = array(

  '
Um dos festivais de música autoral de maior referência no país onde são aceitos todos os estilos de música. Neste evento as bandas fazem um circuito por grandes casas de show até chegarem à grande final.


',


'


',

'


  '


);


//* TEXTOS DOS VIDEOS *//

$p = array(

/*PRIMEIRO TEXTO*/
'
<p>
Um dos festivais de música autoral de maior referência no país onde são aceitos todos os estilos de música. Neste evento as bandas fazem um circuito por grandes casas de show até chegarem à grande final.</p>



',
	/*SEGUNDO TEXTO*/
'
<p>
Ao som do piano e o clima de suspense de “Lágrimas de Crocodilo”, o Bistrô Esmeralda se transformou em um cenário ideal para quem procura afogar as mágoas.
</p>

<p>
O roteiro conta a história de um rapaz desiludido que procura preencher um vazio existente dentro de si, mas acaba tendo alucinações por causa da alegria alheia dos que estão a sua volta.
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

	$align = $left;
}
?>

<?php
	include '../loop-clientes.php';
?>
