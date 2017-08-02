<?php
$cont = 1;

$page_title = 'Manifesto Rock Bar';

$nome = 'manifesto';

$left = 'hotpage-portfolio-video-left';

$right = 'hotpage-portfolio-video-right';

/* CAPA */

$capa = 'capa.jpg';

/* COR DE FUNDO */
$fundo = '#cccccc';

/* TITULOS VIDEOS */

$titulo = array('Conheça o Manifesto','Restaurante do rock');

/* URL VIDEOS */
$video = array('166874855','169041997');

$fotografia = array('','');

/* COR DA LETRA VIDEOS */
$letra = array('black', 'black', 'black', 'black');

/* CONTADOR */
$n = 0;

/* REDES SOCIAIS */

$site =  array('http://manifestobar.com.br/bar/','block');

$facebook = array('manifestobaroficial','block');

$instagram = array('manifestobar','block');

$youtube = array('ManifestoBar666','block');


//* BIOGRAFIA */
$bio =
array(

	'




							Mantendo as características de pub de Rock, mas com porte de casa de shows, o Manifesto Bar está há vinte anos fazendo a festa dos fãs de Rock em São Paulo. Localizado no Itaim Bibi, bairro nobre na Zona Sul paulistana, com fácil acesso. Contando com deliciosos lanches, drink’s e porções.
	Dividida em dois andares, no salão principal música ao vivo com um super palco onde recebemos desde bandas internacionais a bandas covers e autorais.

',
'







	Paredes decoradas com fotos e instrumentos músicais autografados por grandes músicos que já passaram pelo local como: AC/DC, Megadeth, Kiss, Motorhead, Scorpions, Deep Purple, Adrenaline Mob, Foo Fighters, Metallica, Iron Maiden, Saxon, Skid Row, Motörhead, Winger, Megadeth, Rainbow, Red Hot Chilli Peppers, Marillion, Manowar, Helloween, Ramones, Black Label Society entre outros.


	',

	'

	No segundo andar o famoso Secret Room personalizado pela Jägermeister, com dois pole dance, onde contamos com DJs residentes, convidados e personalidades, que dividem as pick ups com apresentações de shows e jam sessions.
	Estivemos presentes nas edições 2013 e 2015 do mega festival ‘Monsters Of Rock




	'


)

;

//* TEXTOS DOS VIDEOS *//

$p = array(

/*PRIMEIRO TEXTO*/
'
<p>
Uma casa de rock, feita para quem gosta de rock, nesse institucional, fizemos uma demonstração de como é a experiência de um cliente dentro da casa, mostrando todos os espaços e processos.


</p>

<p>
Também fizemos a filmagem das melhores bandas de são paulo, que são sempre presença garantida no Manifesto Rock bar.
</p>

',
	/*SEGUNDO TEXTO*/
'


<p>
Na alta culinária, o Garde Manger diz que você começa a comer pelos olhos, depois pelo nariz para então comer com a boca.
</p>

<p>
Tendo isso em mente, a Glow fez questão de captar a essência de cada prato, dando água na boca só de ver.
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
$extra_display = 'flex!important';
$extra = array('Participações em Festivais','Premiações','Gravado no Manifesto');
$extra_video = array(array('223509159','223508981','118806294'),
array('154252842'),
array('212344036'));

$extra_titulo_top = array(array('Rockfest 2015/2016','Girls N Rock 2016','Tribute Fest 2014/2015'),
array('Videoclipe - Rockfest 2015','Prêmio Rockfest 2016','Prêmio Girls N Rock 2016'),
array('Videoclipe','EM BREVE'));

$extra_titulo = array(array('Finger Hooks - Cherry Cigarette','Black Jeans - Circus','Tribute Fest 2014/2015'),
array('Finger Hooks - Try'),
array('Almah - Pleased To Meet You','217716059'));

?>

<?php
	include '../loop-clientes.php';
?>
