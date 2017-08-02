<?php
$cont = 2;

$page_title = 'Allezy';

$nome = 'allezy';

$left = 'hotpage-portfolio-video-left';

$right = 'hotpage-portfolio-video-right';

/* CAPA */

$capa = 'capa.jpg';

/* COR DE FUNDO */
$fundo = '#cccccc';

/* TITULOS VIDEOS */

$titulo = array('Graffiti ataca o centro de São Paulo!','Fotos promocionais coleção 2016','Lookbook 2016');

/* URL VIDEOS */
$video = array('172985098','','213384652');

$fotografia = array('','fotografia-1','');

/* COR DA LETRA VIDEOS */
$letra = array('black', 'black', 'black', 'black');

/* CONTADOR */
$n = 0;

/* REDES SOCIAIS */

$site = array('https://www.allezyshop.com','block');

$facebook = array('allezybrasil','block');

$instagram = array('allezyshop','block');

$youtube = array( 'channel/UCW9IkIpa8iNUFJDyGSc1DzA','block');

//* BIOGRAFIA */
$bio = array(
'
A arte e cultura das ruas estampadas peças exclusivas. Nosso coração pulsa onde o graffiti habita. Apoiamos a cultura, Graffiti, música, dança e muito mais através de produtos exclusivos. Nos preocupamos com o presente e futuro. Parte de nossas peças são confeccionadas em malha com matéria prima reciclada (garrafa-pet ou tecido reciclado). Criamos, desenvolvemos e vendemos produtos exclusivos, edição limitada, confeccionados com estampas de artistas brasileiros. 
');

//* TEXTOS DOS VIDEOS *//

$p = array(

/*PRIMEIRO TEXTO*/
'
<p>
Este vídeo institucional contamos com imagens incríveis de drone, uma narrativa envolvente e uma pós edição linda mostrando a verdadeira essência do que a arte representa para a marca.
</p>

<p>
Além disso filmamos o processo criativo do artista Hope que grafita um de seus personagens na parede de um estacionamento vazio.
</p>

',
	/*SEGUNDO TEXTO*/
'
<p>
Ensaio com a cara do centro de São Paulo, mostrando a rotina e a diversidade da região.
</p>

<p>
As fotos foram tiradas em diversas pontos turísticos da cidade como na praça Antonio Prado, Vale do Anhangabaú, Santa Efigênia e Liberdade.
</p>


',
	/*TERCEIRO TEXTO*/
'
<p>

Neste trabalho os modelos, vestidos com roupas da Allezy, interagem com diversos objetos de maneira divertida, mostrando o estilo e a personalidade de cada produto.

</p>

',
	/*QUARTA TEXTO*/
'



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
