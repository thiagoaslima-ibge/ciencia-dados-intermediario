<?php
// Titulo da unidade
$moduleTitle = "";
// Titulo do topico
$topicTitle = "O processo de classificação de dados";
// Titulo da pagina
$pageTitle = "Classificadores não descansam";
// Subtitulo da pagina
$pageSubtitle = "Uso cotidiano e uso institucional";
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

	<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<p>
			Talvez você não saiba, mas existe um classificador que trabalha para você 24 horas por dia, nos 7 dias da semana!
			Trata-se do filtro de spam de seu e-mail. Todo programa de filtragem de spam é, em essência, um modelo de classificação. Mais especificamente, um modelo que recebe como entrada um e-mail e a partir de seu texto e de outras informações, o classifica como “normal” ou “spam”. A figura a seguir ilustra o processo.
		</p>
	</div>

	<div class="row">
		<!-- Conteudo da pagina [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right">
				<picture>
					<img class="image" src="dist/img/01-spam-filter.jpeg" alt="Imagem representando um filtro de spam">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Classificador para filtro de spam
			</figcaption>
		</figure>


		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Classificação é o processo de ciência de dados que consiste
				em utilizar um modelo gerado por um programa de computador
				para <strong>determinar a classe de um objeto</strong>
				de maneira automática.
				Este modelo é chamado de <strong>modelo de classificação</strong>
				ou simplesmente <strong>classificador</strong>.
			</p>
			<p>
				Todo classificador possui o mesmo princípio de funcionamento
				do filtro de spam, independente do problema prático que ele esteja
				resolvendo: ele recebe um objeto como entrada, analisa as características
				do objeto e decide qual é a sua classe,considerando um conjunto
				de classes pré-definidas. No caso do filtro de spam,
				o objeto a ser a ser classificado é uma mensagem eletrônica
				e o conjunto de classes possíveis possui apenas dois elementos:
				{“normal”, “spam”}.
			</p>
			<p>
				Além da filtragem de spam, existem inúmeras outras aplicações práticas
				para a classificação, tanto no âmbito das pesquisas científicas quanto
				dentro das empresas. Vejamos quatro exemplos:
			</p>
		</div>

		<!-- Mosaico [inicio] -->
		<ul class="row photo-mosaic">

			<li class="col-xs-12 col-md-8">
				<figure class="photo-mosaic__img-container">
					<picture>
						<source srcset="dist/img/example-img001--lg.jpg" media="(min-width:1200px)">
						<source srcset="dist/img/example-img001--md.jpg" media="(min-width:600px)">
						<source srcset="dist/img/example-img001--sm.jpg" media="(min-width:1px)">
						<img class="image" src="dist/img/example-img001--lg.jpg" alt="Descrição da imagem.">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>As administradoras de cartão de crédito utilizam modelos de classificação para detectar se uma transação financeira é “legal” ou “suspeita”. </p>
					</figcaption>
				</figure>
			</li>

			<li class="col-xs-12 col-md-8">
				<figure class="photo-mosaic__img-container">
					<picture>
						<source srcset="dist/img/example-img002--lg.jpg" media="(min-width:1200px)">
						<source srcset="dist/img/example-img002--md.jpg" media="(min-width:600px)">
						<source srcset="dist/img/example-img002--sm.jpg" media="(min-width:1px)">
						<img class="image" src="dist/img/example-img002--lg.jpg" alt="Descrição da imagem.">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>Os bancos usam classificadores para classificar um cliente como de “alto”, “médio” ou “baixo” risco para um empréstimo bancário.</p>
					</figcaption>
				</figure>
			</li>

			<li class="col-xs-12 col-md-8">
				<figure class="photo-mosaic__img-container">
					<picture>
						<source srcset="dist/img/example-img003--lg.jpg" media="(min-width:1200px)">
						<source srcset="dist/img/example-img003--md.jpg" media="(min-width:600px)">
						<source srcset="dist/img/example-img003--sm.jpg" media="(min-width:1px)">
						<img class="image" src="dist/img/example-img003--lg.jpg" alt="Descrição da imagem.">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>As empresas de petróleo utilizam classificadores que analisam imagens de ressonância magnética de rochas e as classificam como de “alta permeabilidade” ou “baixa permeabilidade”. Rochas com alta permeabilidade possuem maior chance de conter petróleo.</p>
					</figcaption>
				</figure>
			</li>

			<li class="col-xs-12 col-md-8">
				<figure class="photo-mosaic__img-container">
					<picture>
						<source srcset="dist/img/example-img004--lg.jpg" media="(min-width:1200px)">
						<source srcset="dist/img/example-img004--md.jpg" media="(min-width:600px)">
						<source srcset="dist/img/example-img004--sm.jpg" media="(min-width:1px)">
						<img class="image" src="dist/img/example-img004--lg.jpg" alt="Descrição da imagem.">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>Classificadores de sentimento analisam textos que contém opiniões de pessoas sobre filmes, produtos, notícias e classificam a opinião como “positiva” ou “negativa”.</p>
					</figcaption>
				</figure>
			</li>

			<li class="col-xs-12 col-md-8">
				<figure class="photo-mosaic__img-container">
					<picture>
						<source srcset="dist/img/example-img001--lg.jpg" media="(min-width:1200px)">
						<source srcset="dist/img/example-img001--md.jpg" media="(min-width:600px)">
						<source srcset="dist/img/example-img001--sm.jpg" media="(min-width:1px)">
						<img class="image" src="dist/img/example-img001--lg.jpg" alt="Descrição da imagem.">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>Os portais de notícia utilizam sistemas de classificação para atribuir automaticamente a categoria de um artigo (“Esporte”, “Cultura”, “Economia” etc.).</p>
					</figcaption>
				</figure>
			</li>

			<li class="col-xs-12 col-md-8">
				<figure class="photo-mosaic__img-container">
					<picture>
						<source srcset="dist/img/example-img002--lg.jpg" media="(min-width:1200px)">
						<source srcset="dist/img/example-img002--md.jpg" media="(min-width:600px)">
						<source srcset="dist/img/example-img002--sm.jpg" media="(min-width:1px)">
						<img class="image" src="dist/img/example-img002--lg.jpg" alt="Descrição da imagem.">
					</picture>
					<figcaption class="photo-mosaic__img-caption">
						<p>As empresas farmacêuticas, utilizam sistemas de classificação para tentar prever o conjunto de reações adversas que novas drogas podem causar.</p>
					</figcaption>
				</figure>
			</li>
		</ul>
		<!-- Mosaico [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Mas e aqui no IBGE? Existem aplicações práticas para a classificação?</p>
			<p>Sim, certamente, e elas também são em grande número. Vejamos três exemplos:</p>
		</div>

		<!-- Carrossel [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-20 col-sm-offset-2 col-md-16 col-md-offset-4 col-lg-12 col-lg-offset-6">
			<ul class="panel-slider slider">
				<li>
					<p>Um classificador para identificar fraudes pode ser utilizado em pesquisa domiciliar para detectar se determinado questionário preenchido por um informante é “genuíno” (contém informações verdadeiras) ou “suspeito” (pode conter informações falsas).</p>
				</li>
				<li>
					<p>Na área de Geociências, um classificador de imagens de satélite pode ser utilizado para mapear a cobertura e o uso da terra, isto é, identificar áreas correspondentes a plantações, rios, áreas urbanas etc.</p>
				</li>
				<li>
					<p>Um classificador de textos pode ser empregado em pesquisa econômica para determinar automaticamente o código de atividade econômica da empresa em função do texto fornecido por ela para descrever as atividades que realiza. Com isto, torna-se possível separar automaticamente empresas que são da indústria, do comércio, de serviços e da construção civil.</p>
				</li>
			</ul>
		</div>
		<!-- Carrossel [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>É importante mencionar que o IBGE utiliza algoritmos de classificação há muitos anos, especialmente com o objetivo de apoiar o processo de crítica e imputação de dados de questionários. Porém, a crescente disseminação do conhecimento sobre ciência de dados na instituição e a contínua evolução de nosso parque tecnológico (máquinas com maior espaço de armazenamento e maior capacidade de memória e processamento), permite com que, nos dias atuais, seja possível utilizar modelos de classificação para resolver novos tipos de problemas, como os mencionados acima.</p>

			<div class="text-with-icon">
				<div class="icon-container">
					<img src="dist/img/written-process-icon.svg" aria-hidden="true" />
				</div>
				<p class="pullquote">
					Pense em um ou mais exemplos de aplicações para a tarefa de classificação no setor em que você trabalha no IBGE.
				</p>
			</div>
		</div>

</main>

<?php
include "foot.php";
?>

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