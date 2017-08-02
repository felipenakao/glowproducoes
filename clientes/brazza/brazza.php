<?php

$cont = 3;

$page_title = 'Fabio Brazza';

$nome = 'brazza';

$left = 'hotpage-portfolio-video-left';

$right = 'hotpage-portfolio-video-right';

/* CAPA */

$capa = 'capa.jpg';

/* COR DE FUNDO */
$fundo = '#cccccc';

/* TITULOS VIDEOS */

$titulo = array('A gente gosta de inventar – part. Caju & Castanha', 'O Brasil que pode dar certo – part. Grupo Reduto', 'ABCdário','Auschwitz');

/* URL VIDEOS */
$video = array('194748083', '181012519', '220513255','194446121');

/* COR DA LETRA VIDEOS */
$letra = array('black', 'black', 'black', 'black');

/* CONTADOR */
$n = 0;

/* REDES SOCIAIS */

$site = array( 'http://www.fabiobrazza.com','block');

$facebook = array( 'FabioBrazza','block');

$instagram = array( 'fabiobrazza','block');

$youtube = array( 'FabioBrazza','block');

//* BIOGRAFIA */
$bio = array(
'
FABIO BRAZZA, neto do poeta concreto Ronaldo Azeredo, é também poeta, músico e improvisador e já conta com mais de 1 milhão de seguidores nas redes socias. Começou a ganhar visibilidade pela parceria com o Desimpedidos, maior canal dedicado a futebol do YouTube, onde ficou conhecido como criador das batalhas de rap entre times de futebol. Sua paixão pelo futebol, somada a sua habilidade em criar rimas se transformaram em um convite para ser o repórter oficial da Florida Cup, onde teve oportunidade de fazer homenagens em forma de improviso para grandes nomes do esporte como Ronaldo Fenômeno, Ronaldinho Gaúcho e Chicharito; vídeos que acabaram sendo compartilhandos pelos próprios jogadores e foram parar em canais como a Televisa (MEX), NBC (USA) e Bundesliga (GER).
',
'
Fabio Brazza faz hip-hop popular brasileiro. Música brasileira e hip-hop numa fusão perfeita com as melhores letras do rap nacional da atualidade, crítica social, alegria, ritmo e poesia enchendo os olhos e o coração. Mas seu talento, inteligência e dom de improvisar rimas já fizeram com que ele dividisse o microfone com grandes nomes do gênero, como Gabriel o Pensador, Edi Rock do Racionais MC’s e Chali 2na do Jurassic 5. Em abril de 2014 lançou seu primeiro álbum, Filho da Pátria, e já foi parar na lista dos 10 artistas que estão reinventando a música brasileira do site americano Wondering Sound.
',
'
Entre videoclipes, poesias e improvisos de rap, já conta com mais de 110 milhões de visualizações nos seus vídeos e vem transformando a cabeça de uma geração de jovens que, depois de conhecerem seu trabalho, mudaram a relação com o conhecimento. Atualmente está lançando seu segundo álbum, Tupi, or not Tupi que conta com as participações de Arnaldo Antunes. Caju e Castanha e Paula Lima e assinou contrato com uma editora para escrever um livro que conta sua história mesclada com trechos de músicas e poesias próprias.	</p>
'
);

//* TEXTOS DOS VIDEOS *//

$p = array(

/*PRIMEIRO TEXTO*/
'
<p>
Com participação dos grandes repentistas Cajú & Castanha, a música retrata a criatividade do povo brasileiro e fala dos apelidos de personalidades conhecidas, tais como Pelé, Chacrinha, Tiririca, Lampião e muitos outros.
</p>

<p>
Gravado no centro de São Paulo, o clipe conta com muito bom humor e finaliza com uma batalha de rima entre Fabio Brazza e os repentistas convidados.
</p>

',
	/*SEGUNDO TEXTO*/
'

<p>
Fugindo um pouco do rap, Brazza mostra que também tem muito swing e samba no pé nesse clipe gravado na região do Capão Redondo, zona sul de São Paulo.
</p>

<p>
Junto do Grupo Reduto e ao som de seu cavaco, fala da garra do povo brasileiro e vibra por um país que pode dar certo.
</p>

',
	/*TERCEIRO TEXTO*/
'

<p>
Com rimas mais do que bem pensadas, Brazza fez uma música inteira na qual todas as palavras de cada verso começam com uma mesma letra específica do alfabeto, indo de A a Z.
</p>

<p>
Para facilitar a compreensão do espectador, produzimos, em parceria com o Irra Studio, um lyric video, o qual assumimos toda a parte da filmagem enquanto deixamos a parte gráfica na mão de nossos parceiros.
</p>


',
	/*QUARTA TEXTO*/
'

<p>
Baseado no livro “Em busca de sentido” de Viktor Frankl, a poesia de Fabio Brazza faz uma homenagem às vítmas do holocausto judaico, ressaltando os limites da curta vida vivida nos campos de concentração de Auschwitz.
</p>

<p>
A gravação aconteceu no estúdio NaCena com o violinista Davi Graton, spalla da OSESP e o maestro Lua Lafaiette. Tudo foi gravado ao vivo e em take único, tanto no áudio quanto no vídeo.
</p>


',



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
