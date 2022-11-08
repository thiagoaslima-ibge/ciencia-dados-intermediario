<?php
// Titulo da unidade
$moduleTitle = "";
// Titulo do topico
$topicTitle = "Métodos de classificação";
// Titulo da pagina
$pageTitle = "Algoritmos de classificação";
// Subtitulo da pagina
$pageSubtitle = "Neste curso, seis diferentes algoritmos de classificação serão apresentados e explicados. A seguir, apresentamos um breve resumo sobre cada um deles.";
// Inclusao do cabeçalho do curso	
include "head.php";
?>

<style>
	main::before {
		content: '.';
		font-size: 0;
		position: fixed;
		top: 10px;
		left: 10px;
		right: 10px;
		bottom: 10px;
		background-color: rgba(135, 100, 205, 0.8);
		z-index: -1;
	}
	main > div {
		z-index: 2;
	}
	body > header, body > footer {
		z-index: 3;
	}
</style>

<main class="page-content okgo">
	<div class="splash-page__content">
		<div class="row" style="opacity: 1">

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


			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
				<!-- Lista de definicao [inicio] -->
				<dl class="definition-list">
					<dt><i>K-Nearest Neighbours</i> (<i>k</i>-NN)</dt>
					<dd>Este algoritmo executa a tarefa de classificação de um novo objeto <i>t</i> em dois passos: primeiro, o algoritmo encontra os <i>k</i> objetos da base de treinamento que sejam mais similares a <i>t</i>. Tipicamente, a similaridade é computada em termos de alguma medida de distância, como a distância euclidiana, por exemplo. Em seguida, <i>t</i> é classificado com a classe mais comum entre os k objetos.</dd>
					<dt>Naïve Bayes</dt>
					<dd>Classificador probabilístico que aplica o Teorema de Bayes e outros conceitos de probabilidade, como independência condicional, para determinar a classe mais provável de um novo objeto.</dd>
					<dt>Árvore de Decisão</dt>
					<dd>Esta técnica constrói um modelo de classificação na forma de uma árvore, em que cada nó interno representa um teste sobre um atributo (ex.: o texto de um comentário possui a palavra “adorei”?) e cada folha consiste em um rótulo de classe (ex.: comentário POSITIVO ou comentário NEGATIVO). Um novo objeto é classificado através da aplicação de sucessivos testes que encontrarão um caminho na árvore, desde o nó raiz até um nó folha.</dd>
					<dt>Random Forest</dt>
					<dd>Constrói um grupo (<i>ensemble</i>) de <i>k</i> árvores de decisão a partir da execução de <i>k</i> iterações sobre a base de dados de treinamento. Cada árvore de decisão do grupo é gerada com o uso de subconjuntos independentes e aleatórios de atributos e instâncias. Para prever a classe de um novo objeto, cada classificador individual vota e a classe mais popular é devolvida ao usuário.</dd>
					<dt>Support Vector Machine (SVM)</dt>
					<dd>Técnica baseada em princípios da geometria analítica e otimização numérica em que os dados de treino são separados em duas classes através da busca por uma fronteira de decisão que maximiza a distância entre os objetos de treino destas duas classes. O classificador SVM possui o formato de uma equação matemática. Uma vez determinada, esta equação poderá ser aplicada para classificar novos objetos.</dd>
					<dt>Rede Neural Multi-Layer Perceptron (MLP)</dt>
					<dd>Uma rede neural MLP é uma estrutura formada por um conjunto de nós (denominados neurônios artificiais) e arestas estruturados em três camadas: de entrada, oculta (<i>hidden</i>) e de saída. Cada aresta possui um peso associado. Um algoritmo de redes neurais emprega um processo de treinamento que visa determinar o melhor conjunto de pesos para a rede, o conjunto capaz de minimizar os erros de classificação. Assim como ocorre com o SVM, o classificador gerado por um algoritmo de rede neural também possui o formato de uma equação matemática.</dd>
				</dl>
				<!-- Lista de definicao [fim] -->

				<p>As próximas páginas explicarão cada um desses algoritmos.</p>
			</div>

		</div>
	</div>
</main>

<?php include "foot.php"; ?>
<!-- Inclua o script a seguir para utilizar o componente Tooltip -->
<script src="dist/js/vendor/tooltipster.bundle.min.js"></script>

<!-- Inclua o script a seguir para utilizar o componente Tooltip -->
<script src="dist/js/vendor/tooltipster.bundle.min.js"></script>

<!-- Inclua o script a seguir para utilizar o componente Carrossel -->
<script src="dist/js/vendor/slick.min.js"></script>

<script>
	//Aplicar estilo de spash page
	splashPage("splash-page--example");
</script>

</body>

</html>