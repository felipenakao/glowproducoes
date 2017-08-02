<?php
$cont = 0;

$page_title = 'Arte Kerosene';

$nome = 'arte-kerosene';

$left = 'hotpage-portfolio-video-left';

$right = 'hotpage-portfolio-video-right';

/* CAPA */

$capa = 'capa.jpg';

/* COR DE FUNDO */
$fundo = '#cccccc';

/* TITULOS VIDEOS */

$titulo = array('Amor Você Não Está Gorda');

/* URL VIDEOS */
$video = array('142110704');

/* COR DA LETRA VIDEOS */
$letra = array('black', 'black', 'black', 'black');

/* CONTADOR */
$n = 0;

/* REDES SOCIAIS */

$site =  array('','none');

$facebook = array('artekerosene','block');

$instagram = array('artekerosene','block');

$youtube = array('artekeroseneVEVO','block');



//* BIOGRAFIA */
$bio =

array(
'
Arte Kerosene é o equilíbrio perfeito entre música, bom humor, poesia, ironia e filosofia, com aquele toque de sagacidade, tão característico do rock and roll. Desde 2013 em atividade, a banda integra o cenário independente com a proposta de levar ao público um estilo próprio e perspicaz, nomeado pelos integrantes de Rock Popular Brasileiro. Único e cheio de personalidade, o Arte Kerosene traz Gabriel Azeite na guitarra, gaita e vocal, Elias Nadim no baixo e vocal e Victor Padovan na bateria e backing vocal.Com muita irreverência e sarcasmo, a banda canta sobre aspectos do cotidiano, desde críticas comportamentais até questões sociais e existenciais. E claro, como não poderia deixar de ser, o mais clássico dos temas: o amor. ar e renovar o que já existe no cenário cultural contemporâneo.
',
'
Também sutilmente romântico, o Arte Kerosene já gravou o EP “A Primeira Peça” (2013) e tem o lançamento do primeiro álbum, “A Dança da Esperança”, previsto para o final desse ano.
O disco traz notas afinadas de talento, malícia e percepção aguda da realidade, como a música “Amor, você não está gorda", intitulada pelo grupo como "a canção mais romântica da história, sem exageros".
',
'
Após participações em festivais de música independente, Arte Kerosene já conquistou prêmios de Artista Revelação (Manifesto Rock Fest 2014) e Melhor Canção (Manifesto Rock Fest 2015) com “Amor, você não está gorda”. A banda recebe fortes influências de Jorge Ben Jor, Frank Zappa,
Gabriel o Pensador, The Beatles, além de inúmeros artistas nacionais e internacionais, o que garante a diversidade e sonoridade original da banda. O Kerosene, presente no nome da banda, é o combustível para a Arte, e a Arte, combustível para transformação da vida. E esse é o objetivo do Arte Kerosene: usar a Arte para transformar e renovar o que já existe no cenário cultural contemporâneo.
'



);

//* TEXTOS DOS VIDEOS *//

$p = array(

/*PRIMEIRO TEXTO*/
'
<p>
Muito humor nesse clipe que retrata uma situação engraçada do cotidiano. Nessa produção seguimos a risca a letra, recriando cada momento descrito.

</p>
<p>
Foram dois dias de muita risada nessa produção impecável.
</p>
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
