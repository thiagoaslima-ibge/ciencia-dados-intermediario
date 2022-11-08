<?php
	$moduleTitle = "Agilidade decisória"; //TITULO DA UNIDADE
	$topicTitle = "Encerramento"; //TITULO DO TOPICO
	$pageTitle = "Página final"; //TITULO DA PAGINA	
	include "head.php";
?>

<main class="page-content okgo">
	
	<header class="page-header col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<?php				
			echo "<p class='page-header__topic-title'><span class='page-header__topic-tag-style'>$topicTitle</span></p>";
			echo "<h1 class='page-header__page-title'>$pageTitle</h1>"
		?>
		<p class="lead">No mundo atual, o desenvolvimento contínuo de distintas formas de atuação do <abbr title="Instituto Brasileiro de Geografia e Estatística">IBGE</abbr> deve passar por modificações independentemente das condições financeiras e administrativas exigidas.</p>
	</header>
	<div class="row">
	<!-- <CONTEUDO -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
      <p>Todavia, a execução dos pontos do programa desafia a capacidade de equalização das condições financeiras e administrativas exigidas. A nível organizacional, o surgimento do comércio virtual deve passar por modificações independentemente das regras de conduta normativas. No entanto, não podemos esquecer que a expansão dos mercados mundiais é uma das consequências de alternativas às soluções ortodoxas. Percebemos, cada vez mais, que o aumento do diálogo entre os diferentes setores produtivos agrega valor ao estabelecimento das direções preferenciais no sentido do progresso.</p>
      <button class="btn modal_call" id="referencias">Veja as referências dessa unidade</button>
		</div>

	<!-- /CONTEUDO> -->
	</div>

</main>

<article class="modal" id="modal_referencias">
	<header class="modal__header">			
		<h2 class="modal__heading-1">Referências da unidade</h2>
		<button class="btn modal__btn-close">Fechar</button>
	</header>
	<div class="row modal__content">
		<div class="col-xs-24">
      <ul class="unbulleted-list references">
        <li><span class="small-caps">Chiavenato</span>, Idalberto. <strong>Teoria geral da administração</strong>: abordagens prescritivas e normativas da administração. <span class="old-style-figures">4ª</span> edição. São Paulo: McGraw-Hill, Makron Books, <span class="old-style-figures">1993</span>.</li>
        <li>—. <strong>Administração</strong>: teoria, processos e prática. 3ª edição. São Paulo: Makron Books, 2004.</li>
        <li><span class="small-caps">Paladini</span>, Edson Pacheco. <strong>Gestão da Qualidade</strong>: teoria e prática. <span class="old-style-figures">3ª</span> edição. São Paulo: Atlas, <span class="old-style-figures">2012</span>.</li>
      </ul>
		</div>
	</div>
</article>

<?php
	include "foot.php";
?>

</body></html>