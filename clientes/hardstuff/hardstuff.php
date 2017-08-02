<?php
$cont = 0;

$page_title = 'Hardstuff';

$nome = 'hardstuff';

$left = 'hotpage-portfolio-video-left';

$right = 'hotpage-portfolio-video-right';

/* CAPA */

$capa = 'capa.jpg';

/* COR DE FUNDO */
$fundo = '#cccccc';

/* TITULOS VIDEOS */

$titulo = array('Hardstuff');

/* URL VIDEOS */
$video = array('205303907');

/* COR DA LETRA VIDEOS */
$letra = array('black', 'black', 'black', 'black');

/* CONTADOR */
$n = 0;

/* REDES SOCIAIS */

$site =  array('http://www.hardstuff.com.br','block');

$facebook = array('bandahardstuff','block');

$instagram = array('','none');

$youtube = array('bandahardstuff','block');



//* BIOGRAFIA */
$bio = array(

'
Atuando na noite paulistana desde 2012, a Hardstuff conseguiu sua boa reputação tocando o melhor do Rock de todas as épocas, com um repertório variado de hits. O nome sugestivo não nega a especialidade em Hard Rock — estilo consagrado por ícones como Van Halen, Whitesnake, Bon Jovi, Guns ´n´ Roses, Led Zeppelin, Deep Purple entre outros.</p>
','
Tendo como prioridade levar ao público a experiência completa que um show de Rock proporciona, com atenção do figurino à performance, a Hardstuff consolidou seu nome na noite paulistana tocando em importantes casas do estilo. O quarteto experiente formado pelos irmãos Ricardo Flausino (baixo) e Rodrigo Flausino (guitarra), Rodrigo Grecco (vocal) e Olavo Oliveira (bateria)  tem no currículo bandas como Children Of The Beast (Iron Maiden Cover), Rock Stock, Destroyer Kiss Cover e Heaven & Hell (Dio Tribute), além de trabalhos solo e em grupos autorais.
','
Com mais e mais shows e o aumento do público, em 2016 veio o projeto autoral com o EP "Hardstuff", financiado com sucesso pelos fãs através de crowdfunding e produzido pelo ganhador do Grammy Latino Paulo Anhaia. O resultado é um Hard Rock vigoroso e melódico, com sonoridade que remete ao som de bandas como Eclipse, Gotthard, Whitesnake e Van Halen. Agora além do trabalho na noite, a banda segue agendando shows em festivais e eventos para públicos ainda maiores.
'
);

//* TEXTOS DOS VIDEOS *//

$p = array(

/*PRIMEIRO TEXTO*/
'
<p>
Gravado na tradicional Shibuya Garage, o clipe conta a história de uma ex que vai até o bar para fazer ciúme para o personagem principal.
</p>

<p>
Nos 3 dias de filmagem, tivemos até uma fuga de moto filmada da garupa por um de nossos cinegrafistas.
</p>


',
	/*SEGUNDO TEXTO*/
'



',
	/*TERCEIRO TEXTO*/
'



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
