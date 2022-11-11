<?php
// Titulo da unidade
$moduleTitle = "";
// Titulo do topico
$topicTitle = "Métodos de classificação";
// Titulo da pagina
$pageTitle = "Algoritmos de classificação: Árvores de Decisão";
// Subtitulo da pagina
$pageSubtitle = "";
// Inclusao do cabeçalho do curso	
include "head.php";
?>

<style>
	.cover-image-overlay {
		position: relative;
	}

	.cover-image-overlay::before {
		content: '.';
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		font-size: 0;
		color: transparent;
		background-color: rgba(135, 100, 205, 0.5);
	}
</style>

<main class="page-content okgo">

	<div class="row">

		<!-- Cabecalho da página -->
		<header class="page-header col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<?php
			echo "<p class='page-header__topic-title'><span class='page-header__topic-tag-style'>$topicTitle</span></p>";
			echo "<h1 class='page-header__page-title'>$pageTitle</h1>";
			if ($pageSubtitle != '') {
				echo "<p class='lead'>$pageSubtitle</p>";
			}
			?>
		</header>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Grande parte dos algoritmos de classificação propostos na literatura baseia-se na construção de <strong>modelos caixa-preta</strong>. Isto é: modelos projetados para maximizar o desempenho preditivo (acurácia) do classificador, mas que não explicam suas previsões de uma maneira que os humanos possam entender.</p>
			<p>No entanto, para as instituições governamentais, por questões legais, éticas e de transparência, oferecer ferramentas para que usuários possam interpretar as classificações produzidas por um modelo costuma representar algo tão importante quanto a própria acurácia do modelo. Em outras palavras, grande parte dos problemas no âmbito da administração pública requer a utilização de <strong>modelos de classificação interpretáveis</strong>. Um classificador interpretável possui a habilidade de “explicar” as suas classificações para os usuários através, por exemplo, da apresentação de regras de classificação no formato: <span class="code-inline">SE &lt;condição&gt; ENTÃO &lt;rótulo(s) de classe&gt;</span>.</p>
			<p>No campo da ciência de dados, a técnica de árvore de decisão (AD) é a mais conhecida e utilizada para o aprendizado de classificadores interpretáveis. Isto é justificado pelo fato de as ADs possuírem uma estrutura gráfica e intuitiva, que representa um conjunto de regras de classificação e é semelhante a um fluxograma, tornando natural a interpretação do modelo de classificação. A Figura 4 mostra um exemplo baseado em uma AD real, extraída a partir de dados da Pesquisa Mensal de Empregos, que classifica o tipo de ocupação de trabalhadores analfabetos como “trabalhador doméstico” em função de seu sexo e idade. Esta árvore revela que, de acordo com a base de dados da PME, mulheres acima dos 60 anos <em>têm maior chance</em> de exercer trabalho doméstico, ao contrário das mulheres abaixo dessa idade e dos homens.</p>
		</section>

		<!-- Imagem média [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/example-img002--lg.jpg" media="(min-width:1200px)">
					<source srcset="dist/img/example-img002--md.jpg" media="(min-width:600px)">
					<source srcset="dist/img/example-img002--sm.jpg" media="(min-width:1px)">
					<img class="image" src="dist/img/example-img002--lg.jpg" alt="Descrição da imagem.">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Árvore de decisão que classifica trabalhadores analfabetos como pessoa que executa serviço doméstico ou não.
			</figcaption>
		</figure>
		<!-- Imagem média [fim] -->

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Observe atentamente a figura. Uma AD é uma estrutura que possui as seguintes características:</p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>É desenhada com a raiz no topo e as folhas na parte inferior. Sendo assim, a raiz dessa árvore é o atributo “Sexo”.</li>
				<li>Cada nó interno (representado como um retângulo na Figura 4) consiste em um teste sobre um atributo preditivo (neste caso, os atributos “Sexo” e “Idade”).</li>
				<li>Uma ramificação, partindo de um nó interno, representa um resultado para o teste (por exemplo, Idade ≤ 60) </li>
				<li>Cada nó folha representa um rótulo de classe (neste exemplo, Trabalhador Doméstico = “Sim” ou Trabalhador Doméstico = “Não”). </li>
				<li>Um novo objeto é classificado seguindo um caminho na árvore, do nó raiz até um nó folha. </li>
			</ul>
			<!-- Lista não ordenada [fim] -->

			<p>Uma AD é formada por um conjunto de regras de classificação, uma vez que existe sempre um único caminho da raiz para cada folha e este caminho representa uma expressão da regra utilizada para classificar um objeto. Folhas diferentes podem produzir a mesma classificação, mas cada uma por uma razão diferente (pois cada caminho representa uma regra diferente). Por exemplo, a AD da Figura 4 é composta por três regras:</p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>SE (Sexo = ‘M’) ENTÃO (Trabalhador Doméstico = ‘Não’)</li>
				<li>SE (Sexo = ‘F’) e (Idade ≤ 60) ENTÃO (Trabalhador Doméstico = ‘Não’)</li>
				<li>SE (Sexo = ‘F’) e (Idade > 60) ENTÃO (Trabalhador Doméstico = ‘Sim’)</li>
			</ul>
			<!-- Lista não ordenada [fim] -->
			
			<p>
				Nas últimas décadas, diversos algoritmos para o aprendizado de ADs foram propostos, sendo os algoritmos CHAID, C4.5 e CART os mais conhecidos. Neste curso, apresentaremos o algoritmo CART, uma vez que ele possui implementações em código aberto nas linguagens R e Python que são muito populares entre os cientistas de dados. Para aprender sobre os algoritmos CHAID e C4.5 você pode consultar os links <a href="https://sefiks.com/2020/03/18/a-step-by-step-chaid-decision-tree-example/">https://sefiks.com/2020/03/18/a-step-by-step-chaid-decision-tree-example/</a>
				e <a href="https://www.futurelearn.com/info/courses/data-mining-with-weka/0/steps/25391">https://www.futurelearn.com/info/courses/data-mining-with-weka/0/steps/25391</a>, respectivamente. Na subseção a seguir, vamos mostrar como o CART constrói uma árvore de decisão.
			</p>
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Etapa de treinamento</h2>
		</section>
	</div>

</main>

<?php include "foot.php"; ?>

<script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js" />

<!-- Inclua o script a seguir para utilizar o componente Tooltip -->
<script src="dist/js/vendor/tooltipster.bundle.min.js"></script>

<!-- Inclua o script a seguir para utilizar o componente Carrossel -->
<script src="dist/js/vendor/slick.min.js"></script>

</body>

</html>