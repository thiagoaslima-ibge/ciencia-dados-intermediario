<?php
// Titulo da unidade
$moduleTitle = "";
// Titulo do topico
$topicTitle = "O processo de classificação de dados";
// Titulo da pagina
$pageTitle = "Receitas dos classificadores: modo de fazer";
// Subtitulo da pagina
$pageSubtitle = "";
// Inclusao do cabeçalho do curso	
include "head.php";
?>

<main class="page-content okgo">

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

	<div class="row">

		<!-- Imagem [início] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right">
				<picture>
					<img class="image" src="dist/img/unidade-03/cozinhando.jpeg" alt="Imagem de alguém preparando uma receita.">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Assim como para preparar uma receita culinária é importante saber como se dá o preparo, para analisar dados, é importante saber como se constroem os classificadores.
			</figcaption>
		</figure>
		<!-- Imagem [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>A construção de classificadores precisos e eficientes é considerada um dos grandes desafios na área de Ciência de Dados. Por este motivo, foram desenvolvidos diversos algoritmos para a execução desta tarefa, cada qual baseado em um princípio matemático diferente – conforme veremos a partir da próxima unidade. Seria algo como o preparo de um prato que pode ser feito de várias maneiras diferentes.</p>
			<p>Apesar de adotarem princípios diferentes, todos os algoritmos realizam a classificação de dados em um processo composto por duas etapas: <strong>aprendizado (ou treinamento)</strong> e <strong>classificação</strong>.</p>
			<p>Na primeira etapa, conhecida como “aprendizado”, o classificador é, de fato, construído.</p>
			<p>Na segunda etapa, conhecida como “classificação”, o modelo é utilizado para prever o rótulo de classe de um novo objeto.</p>
			<p>Estas etapas são exemplificadas na figura Etapa de Aprendizado e na figura Etapa de classificação, que ilustram, respectivamente, a construção e a utilização de um modelo de classificação a partir de uma base de dados de uma pesquisa sobre mobilidade urbana. Mais especificamente, o modelo classifica uma pessoa como usuária de transporte público ou não (atributo Y) com base em sua renda e idade (atributos X).</p>
			<p>Observe como a figura a seguir ilustra o modelo de classificação criado a partir da base de dados de treinamento. Após uma análise mais detalhada, continue a leitura.</p>
		</div>

		<!-- Imagem [início] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right">
				<picture>
					<img class="image" src="dist/img/unidade-03/etapa-aprendizado-01.png" alt="Representacao da etapa de aprendizado">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Etapa de aprendizado
			</figcaption>
		</figure>
		<!-- Imagem [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Perceba que, na etapa de aprendizado, a base de dados de treinamento (lado esquerdo da figura) deve ser processada pelo algoritmo de classificação para que o classificador seja construído (lado direito da figura). Nesse exemplo, utilizou-se o algoritmo de árvore de decisão, que é apenas um dentre os vários algoritmos de classificação existentes, conforme veremos em breve.  A principal característica do algoritmo de árvore de decisão é que ele gera um modelo de classificação gráfico e autoexplicativo. Veja que, de acordo com o modelo gerado, uma pessoa de renda alta é classificada com o rótulo “Não” (não usa transporte público) e as pessoas de renda baixa são classificadas como “Sim” (usuárias de transporte público). Por sua vez, a classificação das pessoas de renda média depende também do atributo idade (os mais velhos são classificados como “Não” e os mais novos como “Sim”).</p>
			<p>A figura a seguir ilustra como o modelo de classificação criado na etapa de aprendizado é utilizado para classificar novos objetos. Após uma análise mais detalhada, continue a leitura.</p>
		</div>

		<!-- Imagem [início] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right">
				<picture>
					<img class="image"src="dist/img/unidade-03/etapa-classificacao-02.png" alt="Representacao da etapa de classificação">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Etapa de classificação
			</figcaption>
		</figure>
		<!-- Imagem [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Perceba agora que, na etapa de classificação, nosso objetivo é classificar novos objetos. No exemplo, o classificador construído na primeira etapa é empregado para obter o rótulo de classe de uma nova pessoa (novo objeto) que tem 28 anos e possui renda média. No caso da árvore de decisão, o processo é bastante intuitivo, consistindo apenas em aplicar os dados dessa nova pessoa sobre o modelo de classificação. Tais dados levarão até uma folha da árvore e é esta folha que definirá a classe do novo objeto. Para o exemplo apresentado, veja que o modelo previu que o novo objeto é da classe “Sim”. </p>
		</div>

		<!-- Destaque [inicio] -->
		<section class="feature feature--example">
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
				<p>Uma outra forma de descrever a classificação com uma visão matemática é considerar que se trata, no processo de aprendizado, de uma função alvo <code>y = f(x)</code> capaz de mapear um conjunto de valores de atributos x para um dos valores pré-determinados de rótulos de classe <code>yi &isin; Y</code>.</p>
			</div>
		</section>
		<!-- Destaque [fim] -->
</main>

<!-- Janela modal [inicio] -->
<article class="modal" id="modal_faq001">
	<header class="modal__header">			
		<h2 class="modal__heading-1"></h2>
		<button class="btn modal__btn-close">Fechar</button>
	</header>
	<div class="row modal__content">
		<div class="col-xs-24">
			<p>Os atributos do conjunto X são “escolaridade”, “idade”, “sexo” e “raça”.</p>
			<p>O atributo Y é “condição de ocupação”.</p>
			<p>O atributo “id” não seria usado no modelo, pois ele não descreve qualquer propriedade de uma pessoa, servindo apenas para identificar uma observação da base de dados.</p>
		</div>
	</div>
</article>
<!-- Janela modal [fim] -->

<!-- Conteudo dos tooltips [inicio] -->
<div class="tooltip_templates">
	<span id="tooltip001_content">Objetos cuja classe é conhecida.</span>
	<span id="tooltip002_content">Objetos cuja classe é desconhecida.</span>
</div>
<!-- Conteudo dos tooltips [fim] -->

<?php
include "foot.php";
?>

<!-- Inclua o script a seguir para utilizar o componente Tooltip -->
<script src="dist/js/vendor/tooltipster.bundle.min.js"></script>

<!-- Inclua o script a seguir para utilizar o componente Tooltip -->
<script src="dist/js/vendor/tooltipster.bundle.min.js"></script>

<!-- Inclua o script a seguir para utilizar o componente Carrossel -->
<script src="dist/js/vendor/slick.min.js"></script>

<script>
	/* Ativacao do componente Carrossel */
	buildCarrossel(".panel-slider");
</script>

</body>

</html>