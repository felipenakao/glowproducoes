<?php
$cont = 0;

$page_title = 'Fat Family';

$nome = 'fat-family';

$left = 'hotpage-portfolio-video-left';

$right = 'hotpage-portfolio-video-right';

/* CAPA */

$capa = 'capa.jpg';

/* COR DE FUNDO */
$fundo = '#cccccc';

/* TITULOS VIDEOS */

$titulo = array('Mexe esse pescoço');

/* URL VIDEOS */
$video = array('166172090');

/* COR DA LETRA VIDEOS */
$letra = array('black', 'black', 'black', 'black');

/* CONTADOR */
$n = 0;

/* REDES SOCIAIS */

$site = array('http://fatfamilyoficial.com.br','block');

$facebook = array( 'FATFAMILYOFICIAL','block');

$instagram = array('fatfamilyoficial','block');

$youtube = array('','none');



//* BIOGRAFIA */
$bio = array(
'
Fat Family é um conjunto musical brasileiro, original da cidade de Sorocaba, São Paulo, formado inicialmente pelos irmãos Sidney, Celinho, Celinha, Simone, Suzetti, Kátia e Deise Cipriano. Suely (ex-enfermeira padrão) entrou no grupo a partir do segundo álbum da banda no ano de 1999. Inspirados por cantores norte americanos como Whitney Houston, Chaka Khan, Aretha Franklin, James Brown, e a tradicional música gospel negra estadunidense, o grupo atraiu notoriedade rapidamente no Brasil e no mundo.
',
'
O grupo Fat Family atraiu a atenção do Brasil no final da década de 90, mais precisamente em 1998. Em programas de televisão os irmãos de peso integrantes do grupo (fato que dá nome a banda), começaram a se apresentar inspirados em grupos vocais norte-americanos do estilo gospel. O grupo também ficou conhecido pela sua "coreografia do pescoço", que todos os fãs tentavam imitar, mas o julgavam difícil. Além do integrante Celinho ensinar para o público como se fazia o pescoço em vários programas. Mas vozes sincronizadas, agudas e graves com bastante nitidez, é o que mais se destacava.
'
);

//* TEXTOS DOS VIDEOS *//

$p = array(

/*PRIMEIRO TEXTO*/
'
<p>
Com participações especiais de Thiago Abravanel(Neto do Silvio Santos) , Lucas Santos e Nicholas Torres (novela Carrossel), o single "Mexe esse pescoço" do consagrado grupo Fat Family traz a rotina de sua casa, onde todos são contagiados mexendo o pescoço, metaforizando o alívio dos problemas.</p>



',
	/*SEGUNDO TEXTO*/
'

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
