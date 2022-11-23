<?php
// Titulo da unidade
$moduleTitle = "";
// Titulo do topico
$topicTitle = "Como avaliar a qualidade de um classificador";
// Titulo da pagina
$pageTitle = "Estimativa da eficácia de um modelo de classificação";
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
			<p>
				Ao longo desse módulo, aprendemos que, para criar um classificador basta termos em mãos uma base de 
				dados de treinamento e escolhermos um algoritmo de classificação. Entretanto, antes de colocar um 
				classificador em produção é preciso <strong>estimar a sua eficácia</strong> (ou desempenho preditivo), isto é, determinar, 
				com algum grau de certeza, se o classificador terá um bom desempenho para classificar novos objetos. 
				Afinal de contas, um classificador que faz muitas previsões erradas não teria utilidade prática. 
				Mas como fazer essa estimativa? O princípio fundamental empregado na avaliação de classificadores consiste em 
				<strong>utilizar um conjunto de dados de teste</strong> formado por objetos que <strong>não estiveram envolvidos no processo de 
				treinamento</strong> do classificador.  Basicamente, deve-se aferir se o modelo gerado com os dados de treinamento 
				conseguirá acertar uma quantidade significativa de classificações quando aplicado aos objetos de teste. 
				Ou seja, iremos verificar se a <strong>acurácia</strong> (percentual de classificações corretas) do modelo será alta com os 
				objetos de teste – objetos que não fizeram parte do treinamento e que, por isso, são “novos objetos” para o 
				classificador. 
			</p>
			<p>
				As duas próximas subseções introduzem, respectivamente, os métodos para avaliação de classificadores e 
				as medidas que podem ser empregadas para mensurar diferentes aspectos relacionados ao desempenho 
				preditivo de um classificador
			</p>
		</section>
			
		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>1. Métodos para a Avaliação de Modelos de Classificação </h2>
			<p>
				O método conhecido como <i>holdout</i> é o mais simples dentre os utilizados para a avaliação de modelos de 
				classificação. Nesta abordagem, a base de dados rotulada é dividida de forma aleatória em dois conjuntos 
				(ou partições) independentes: conjunto de treinamento e conjunto de teste (Figura 15). Tipicamente, dois terços 
				dos dados são alocados para treino e o terço restante é alocado para teste. A divisão deve ser feita de maneira 
				aleatória, mas idealmente o processo deve garantir que cada classe seja adequadamente representada tanto no 
				conjunto de treinamento como no de teste (processo conhecido como estratificação). Uma vez que as duas 
				partições tenham sido definidas, a partição de treino é usada para criar o modelo e a partição de teste para 
				testá-lo – testar significa medir a acurácia (e outros indicadores) do modelo na partição de teste. 
			</p>
		</section>

			<!-- Imagem média [inicio] -->
			<figure class="img-container">
		<div
			class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right"
		>
			<picture>
				<table style="width:100%">
					<tr>
						<td style="width:50%; background:lightyellow">TREINO</td>
						<td style="width:50%; background:lightgray">TESTE</td>
					</tr>
				</table>
			</picture>
		</div>
		<figcaption
			class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption"
		>
			<div class="img-container__top-line"></div>
			Figura 15. Partições geradas pelo método <i>holdout</i>. 
		</figcaption>
		</figure>
		<!-- Imagem média [fim] -->
			
		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				O método <i>holdout</i> é simples, mas tem uma desvantagem importante: para estimar se um classificador possui boa 
				qualidade ou não, ele aposta todas as suas fichas em uma <strong>única avaliação</strong> envolvendo um modelo construído com uma 
				partição de treino e testado com uma partição de teste, ambas definidas de forma aleatória. Fazer um único teste 
				usando apenas essas duas partições parece um pouco arriscado, não?
			</p>
			<p>
				Felizmente, existem técnicas capazes de obter estimativas mais confiáveis para o desempenho preditivo 
				de um classificador.  Uma delas é a validação cruzada (<i>cross-validation</i>). Nesta técnica, a base rotulada 
				é dividida em <i>k</i> partições (<i>folds</i>) <i>D<sub>1</sub>, D<sub>2</sub>, ..., D<sub>k</sub></i>, onde todas deverão ter o tamanho igual ou 
				aproximadamente igual. Na Figura 16, apresenta-se um exemplo onde <i>k</i>=10, um dos valores mais comumente 
				utilizados. Após a divisão, são realizadas <i>k</i> rodadas de treino e teste. A cada iteração <i>i</i>, 
				a partição <i>D<sub>i</sub></i> é reservada para teste e as <i>k-1</i> partições restantes são utilizadas para treinar o modelo. 
				Por exemplo, para <i>k</i>=1, reserva-se as observações pertencentes a <i>D<sub>1</sub></i> para teste, e utiliza-se as 
				observações pertencentes a <i>D<sub>2</sub></i> até as pertencentes a <i>D<sub>10</sub></i> para treinamento. Quando <i>k</i>=2, reserva-se as 
				observações de <i>D<sub>2</sub></i> para teste, e utiliza-se as observações de <i>D<sub>1</sub></i> e <i>D<sub>3</sub></i> até <i>D<sub>10</sub></i> para treinamento. 
				E assim, sucessivamente. A acurácia final estimada para o modelo será igual à acurácia média das <i>k</i> rodadas. 
				Sendo assim, ao contrário do que ocorre com o método <i>holdout</i>, na validação cruzada a estimativa da acurácia 
				não é feita considerando o resultado obtido sobre uma única partição de treino e uma única teste, mas é na 
				verdade uma média do desempenho preditivo de <i>k</i> modelos diferentes, testados sobre <i>k</i> bases de testes diferente. 
				Isso constitui uma importante vantagem.
			</p>
		</section>

		<!-- Imagem média [inicio] -->
		<figure class="img-container">
		<div class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right">
			<picture>
			<table style="width:100%">
					<tr>
						<td style="width:10%; text-align:center; border-left: 1px solid lightgrey">1</td>
						<td style="width:10%; text-align:center; border-left: 1px solid lightgrey">2</td>
						<td style="width:10%; text-align:center; border-left: 1px solid lightgrey">3</td>
						<td style="width:10%; text-align:center; border-left: 1px solid lightgrey">4</td>
						<td style="width:10%; text-align:center; border-left: 1px solid lightgrey">5</td>
						<td style="width:10%; text-align:center; border-left: 1px solid lightgrey">6</td>
						<td style="width:10%; text-align:center; border-left: 1px solid lightgrey">7</td>
						<td style="width:10%; text-align:center; border-left: 1px solid lightgrey">8</td>
						<td style="width:10%; text-align:center; border-left: 1px solid lightgrey">9</td>
						<td style="width:10%; text-align:center; border-left: 1px solid lightgrey;border-right: 1px solid lightgrey">10</td>
					</tr>
				</table>
			</picture>
		</div>
		<figcaption
			class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption"
		>
			<div class="img-container__top-line"></div>
			Figura 16. Partições geradas pelo método de validação cruzada, quando <i>k</i>=10. 
		</figcaption>
		</figure>
		<!-- Imagem média [fim] -->

		<!-- Destaque [inicio] -->
	<section class="feature feature--example">
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<h2 class="feature__title">Para saber mais:</h2>
			<p>
				É importante comentar que além da validação cruzada, existem outras técnicas para estimar a qualidade 
				de classificadores, dentre as quais:
			</p>
		<!-- Lista não ordenada [inicio] -->
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<ul class="bulleted-list">
			<li>
				Validação cruzada repetida<a href="https://machinelearningmastery.com/repeated-k-fold-cross-validation-with-python/">
				https://machinelearningmastery.com/repeated-k-fold-cross-validation-with-python/
			</a>
			</li>
			<li>
				<i>leave-one-out</i><a href="https://www.statology.org/leave-one-out-cross-validation/">
				https://www.statology.org/leave-one-out-cross-validation/</a>
			</li>
			<li>
				<i>bootstrap</i><a href="https://sebastianraschka.com/blog/2016/model-evaluation-selection-part2.html">
				https://sebastianraschka.com/blog/2016/model-evaluation-selection-part2.html</a>
			</li>
		</div>
		<!-- Lista não ordenada [Fim] -->
	</section>
		<!-- Destaque [fim] -->

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