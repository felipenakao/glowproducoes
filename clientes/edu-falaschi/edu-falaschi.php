<?php
$cont = 3;

$page_title = 'Edu Falaschi / Almah';

$nome = 'edu-falaschi';

$left = 'hotpage-portfolio-video-left';

$right = 'hotpage-portfolio-video-right';

/* CAPA */

$capa = 'capa.jpg';

/* COR DE FUNDO */
$fundo = '#cccccc';

/* TITULOS VIDEOS */

$titulo = array('Pleased to meet you', 'Speranza', 'Nova Era (acoustic version)', 'Live in Manifesto');

/* URL VIDEOS */
$video = array('212344036', '188277861', '146198025', '138233494', '212129513');

/* COR DA LETRA VIDEOS */
$letra = array('black', 'black', 'black', 'black');

/* CONTADOR */
$n = 0;

/* REDES SOCIAIS */

$site = array( 'http://www.edufalaschi.com.br','block');

$facebook = array( 'edufalaschi.officialpage','block');

$instagram = array( 'edu_falaschi','block');

$youtube = array( 'EduFalaschiOfficial','block');

//* BIOGRAFIA */
$bio =

array(

	'


							Eduardo Teixeira da Fonseca Vasconcellos (São Paulo, 18 de maio de 1972) mais conhecido pelo seu nome artístico, Eduardo Falaschi é um cantor, compositor e produtor musical brasileiro de renome internacional.
','
							Após integrar os grupos Angra, Mitrium, Venus e Symbols, o músico atualmente lidera a banda de heavy metal Almah. Ao longo da carreira, já vendeu mais de 1 milhão de discos, tem 15 álbuns gravados, diversas turnês mundiais (2 vezes no Rock in Rio: 2011/2013), além de ser criador de composições marcantes como "Nova Era", "Heroes of Sand", "Bleeding Heart", "Wishing Well", "Spread Your Fire" e "Angels and Demons".


	','
							Em 24 de maio de 2012, publicou uma nota anunciando sua saída do Angra para se dedicar a sua então banda Almah. O último grande show de Edu com o Angra foi no Rock in Rio 2011, onde depois de alguns meses Edu Falaschi anunciou sua saída da banda, que foi motivada por diversas desavenças dentro do grupo, somadas a sérios problemas de saúde causados por Refluxo Gástrico, doença comum em cantores que utilizam muito o apoio do diafragma.
		',

'
Em março de 2016 Edu Falaschi surpreende a todos e lança o álbum "Moonlight", com versões acústicas dos maiores sucessos de sua carreira, comemorando seus 25 anos de trabalho. O álbum traz arranjos emocionantes, no formato Piano, Violão, Voz e Quarteto de Cordas. Como linha central, Edu convidou o pianista Tiago Mineiro, importante músico da cena brasileira, e o maestro Adriano Machado para os arranjos de cordas. O álbum ainda conta com as participações especiais de Derico (flautas e sax) e Sandamí (percussão). O trabalho é uma viagem em grande estilo pela carreira de Edu.

'
	);

//* TEXTOS DOS VIDEOS *//

$p = array(

/*PRIMEIRO TEXTO*/
'
<p>
Nessa mega produção, descaracterizamos totalmente o Manifesto Rock Bar, para criar um ambiente pós apocalíptico, navegando entre todos os conflitos da atualidade com citações aos governadores dos estados chave da terra.
</p>

<p>
O clipe gira em torno de um contraste que mostra um futuro promissor em que a tecnologia ajuda a humanidade ou um futuro horrível onde a ganância nos engole.
</p>

<p>
Contamos com um figurino diferenciado, máscara de gases e roupas de guerras. Nosso terceiro trabalho com o Edu Falaschi, do Almah.
</p>


',
/*SEGUNDO TEXTO*/
'
<p>
Nessa viagem entre o sonho e a realidade, Edu Falaschi aparece em carros custom antigos (usados especialmente para o clipe) fugindo da cidade, indo para paisagens arborizadas, retratando o alívio e a paz.
</p>

',
/*TERCEIRO TEXTO*/
'
<p>
Gravado em um luxuoso hotel localizado em Poços de Calda - MG, a versão acústica do clássico do Angra "Nova Era", entrega nesse belo clipe, a serenidade desse clássico do metal, sendo extremamente bem interpretado pelo pianista mestre Tiago Mineiro e por um impecável quarteto de corda feminino.</p>

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
