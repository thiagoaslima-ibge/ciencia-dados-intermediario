<?php
// Titulo da unidade
$moduleTitle = "Pré-processamento de dados";
// Titulo do topico
$topicTitle = "Identificação e conversão de tipos de dados";
// Titulo da pagina
$pageTitle = "Visão Geral da conversão de dados";
// Subtitulo da pagina
$pageSubtitle = "Como a conversão de dados não estruturados pode ser aplicado na produção do IBGE";
// Inclusao do cabeçalho do curso	
include "head.php";
?>


<main class="page-content okgo">

	<!-- Cabecalho da página -->
	<header class="page-header col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<?php
		echo "<p class='page-header__topic-title'><span class='page-header__topic-tag-style'>$topicTitle</span></p>";
		echo "<h1 class='page-header__page-title'>$pageTitle</h1>"
		?>

	</header>

	<div class="row">

		<!-- Conteudo da pagina [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<!-- Citacao em bloco [inicio] -->
			<blockquote class="quote" cite="http://www.google.com.br/">
				<p>“Os dados são apenas resumos de milhares de histórias – conte algumas dessas histórias para ajudar a tornar os dados significativos.”</p>
				<footer>
					<p class="quote__author"><span class="small-caps">Chip &amp; Dan Heath
						</span> <span class="old-style-figures"></p>
				</footer>
			</blockquote>
			<!-- Citacao em bloco [fim] -->

			<p>Pense em exemplos de problemas de ciência de dados do IBGE que podem ser resolvidos com o uso de bases de dados compostas por texto ou imagens. São inúmeros! </p>

			<p>Um sistema classificador capaz de atribuir automaticamente o código CNAE de uma empresa em função de um texto descrevendo as atividades que a empresa realiza.</p>

			<p>Um sistema de classificação semântica de imagens de mapas, capaz de detectar os elementos de interesse presentes na imagem (ex.: um rio, uma ponte etc.).</p>

			<p>Como você viu no início desta unidade, dados não estruturados são aqueles que não obedecem a um modelo pré-definido e não se encontram naturalmente divididos em observações e variáveis, cada qual com seu tipo e faixas de valores possíveis. Textos, imagens de satélite, fotos, vídeos e arquivos de áudio são exemplos de informação não estruturada. </p>

			<p> <a href="https://www.pcmag.com/news/90-percent-of-the-big-data-we-generate-is-an-unstructured-mess"> De acordo com estimativas recentes</a>, 90% da informação digital produzida diariamente no mundo é não estruturada. Logo, não é surpresa que muitas aplicações modernas e importantes da ciência de dados envolvam o emprego de dados não estruturados. Alguns exemplos são: </p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>Classificação de músicas em um conjunto de emoções, por exemplo: “Triste”, “Relaxante”, “Alegre” etc. (problema de classificação);</li>
				<li> Segmentação de usuários: detectar grupos de usuários com perfil similar em uma rede social em função dos comentários por eles realizados (problema de agrupamento);</li>
				<li>Classificação semântica de imagens: consiste em identificar os diferentes componentes de uma imagem (por exemplo, uma foto de satélite), como “Montanhas”, “Rio”, “Ponte” etc. (observe que se trata de um problema de classificação); e</li>
				<li>Detecção de plágio: analisar dois textos e atribuir um escore de similaridade entre eles variando de 0.0 (totalmente dissimilares) a 5.0 (extremamente similares) – problema de regressão</li>
			</ul>

			<!-- Lista não ordenada [fim] -->
		</div>


		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<!-- Realce [inicio]-->
			<aside class="pullquote">
				<q> Apesar de sua vasta disponibilidade e aplicabilidade, uma desvantagem associada aos dados não estruturados é que eles não podem ser diretamente processados pela maior parte dos algoritmos e ferramentas de ciência de dados.</q>
			</aside>
			<!-- Realce [fim] -->

			<p>Para que o motivo fique claro, relembre algo que foi apresentado no Módulo 1, os formatos de base de dados requeridos para a construção de modelos supervisionados (classificação e regressão) e de modelos não supervisionados (agrupamentos).
			<p>

			<p>Recorde que para que seja possível construir um modelo supervisionado, é preciso especificar um conjunto de variáveis preditoras (variáveis X) e uma variável alvo (variável Y) na base de dados de treinamento.</p>

			<p>Como você poderia realizar essa especificação em coleções de textos, fotos, vídeos e áudio, uma vez que objetos destes tipos não estão naturalmente organizados em variáveis? </p>

			<p>De maneira análoga, recorde que os modelos não supervisionados tentam identificar observações com características (valores de atributos) similares em uma base de dados. Como isso pode ser possível com dados não estruturados, onde a divisão em atributos não é explícita?</p>

			<p>Será que é possível contornar os problemas descritos acima? Há alguma abordagem padrão adotada pelas empresas e demais organizações que precisam construir modelos baseados em dados não estruturados? </p>

			<p>A resposta para ambas as perguntas é sim, a solução existe e provavelmente é menos complicada do que você pode estar imaginando. </p>

			<p>Basicamente, ela consiste em converter os dados não estruturados para estruturados antes da criação do modelo. Isto é, a solução é transformar cada objeto do tipo texto, imagem, áudio ou vídeo em um conjunto de variáveis (na maioria das vezes numéricas), cujos valores sejam capazes de caracterizar o objeto da melhor forma possível. </p>

			<p>Suponha que você deseja construir um modelo de regressão para estimar a área plantada de um determinado produto a partir de uma foto de satélite. Para tal, você precisaria de um conjunto de dados de treinamento contendo fotos de satélite, correto? </p>

			<p>Porém, os algoritmos de regressão não são capazes de processar as fotos diretamente. Desta forma, antes de gerar o modelo de regressão, torna-se preciso transformar cada foto em um conjunto de medidas – neste caso específico, variáveis contínuas – capazes de caracterizar a foto. </p>

			<p>Esse conjunto de medidas é chamado de vetor de características (<i>feature vector</i>). No caso das imagens de satélite, uma abordagem muito comum é a caracterização através de bandas espectrais.</p>

			<p>Deste modo, a base de dados original, não estruturada, é transformada em uma base estruturada, onde cada observação não é mais uma foto, mas sim um vetor com medidas numéricas que representam as características presentes na foto.</p>

			<p>Nesta unidade você conhecerá algumas técnicas básicas para realizar a conversão de textos e imagens para o formato estruturado. Mais especificamente, Matriz Documento-Termo e Medida TF-IDF, que abordam a conversão de textos, e Exploração da Estrutura RGB de uma Imagem, que aborda a conversão de imagens. </p>

			<p>O foco em bases textuais e de imagens se dá pelo fato de estes dois tipos de dado não estruturado oferecerem um maior potencial de uso em aplicações práticas do IBGE. </p>

			<h2>Compartilhando experiências</h2>
			<p>Você já utiliza técnicas de conversão de dados não estruturados nos seus processos de trabalho?</p>

			<!--FORUM COLABORATIVO -->
			<div class="text-with-icon">
				<div class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" aria-hidden="true" />
				</div>
				<p class="pullquote">
					Colabore com a construção do curso, descrevendo no <strong>Fórum Colaborativo</strong> um ou mais casos de utilização das técnicas em processos de trabalho na sua área de atuação.
				</p>
			</div>

			<button class="btn modal_call" id="faq001">Abrir modal</button>
		</div>
</main>






<!-- Janela modal [inicio] -->

<article class="modal" id="modal_faq001">
	<header class="modal__header">
		<h2 class="modal__heading-1">Para saber mais </h2>
		<button class="btn modal__btn-close">Fechar</button>
	</header>
	<div class="row modal__content">
		<div class="col-xs-24">
			<p><a href="https://acervolima.com/como-converter-dados-nao-estruturados-em-dados-estruturados-usando-python/">Tutorial: COMO CONVERTER DADOS NÃO ESTRUTURADOS EM DADOS ESTRUTURADOS USANDO PYTHON?</a></p>
			<p><a href="link: https://www.mongodb.com/unstructured-data/examples">Site: Exemplos de dados não estruturados</a>.</p>

			<p><a href="https://www.youtube.com/watch?v=fud2ePnX8ZQ&amp;list=PLTYhWEH3DGrQXAJc-BldYfnroDWzbfwtd&amp;index=11">Vídeo: AULA 05 - Visualização de Dados Não Estruturados - Parte 1: documentos</a> </p>

			<p><a href=" https://www.youtube.com/watch?v=y1bjaoITYds&amp;list=PLTYhWEH3DGrQXAJc-BldYfnroDWzbfwtd&amp;index=12">Vídeo: AULA 05 - Visualização de Dados Não Estruturados - Parte 2: imagens</a> </p>
		</div>
	</div>
</article>
<!-- Janela modal [fim] -->
</main>
<?php
include "foot.php";
?>
<!-- Inclua o script a seguir para utilizar o componente Tooltip -->
<script src="dist/js/vendor/tooltipster.bundle.min.js"></script>

<!-- Inclua o script a seguir para utilizar o componente Carrossel -->
<script src="dist/js/vendor/slick.min.js"></script>

<!-- Inclua o script a seguir para utilizar a biblioteca Animate on Scroll -->
<script src="dist/js/vendor/aos.min.js"></script>

<!-- Inclua os dois scripts a seguir para utilizar a biblioteca de gráficos Chart.js -->
<script src="dist/js/vendor/Chart.bundle.min.js"></script>
<script src="dist/js/vendor/chartjs-plugin-datalabels.js"></script>

<!-- Inclua o script a seguir para incorporar videos do YouTube -->
<script src="https://www.youtube.com/iframe_api"></script>

<!-- Inclua o script a seguir para utilizar a biblioteca Leaflet -->
<script src="dist/js/vendor/leaflet.js"></script>

<script>
	/* Ativacao do componente Carrossel */
	buildCarrossel(".panel-slider");

	AOS.init(); // Acionar Animate-On-Scroll
	$('.page-content').scroll(function() {
		AOS.refresh();
	}); // Rodar Animate-On-Scroll quando for acionada a barra de rolagem	

	/* Configuracao e ativacao da incorporacao de video do YouTube [inicio] */
	function onYouTubeIframeAPIReady() {
		//Funcao que cria o player do YouTube. O primeiro parametro e o elemento, o segundo a ID do video
		buildYouTubePlayer('youtube-video--example01', 'Xo7CgqhyhLc');
	};
	/* Configuracao e ativacao da incorporacao de video do YouTube [fim] */

	/* Configuracao e ativacao do grafico de linha [inicio] */
	// Cor das linhas (precisa ser definida aqui pois nao aceita a variavel SASS)
	var chartColor = 'rgba(19,133,0,1)';
	// ID do canvas do grafico
	var chartId1 = '#grafico-linha';
	// Labels do eixo X (o primeiro e último sao valores nulos para fazer o espacamento lateral)
	var chartLabels1 = ['', '1980', '1990', '2000', '2010', '2020', ''];
	// Unidade dos valores do eixo Y
	var chartDataLabels1 = 'Milhões de unidades';
	// Dados (o primeiro e último sao valores nulos para fazer o espacamento lateral)
	var chartData1 = [, 52.23, 61.24, 65.3, 61.5, 78.6, ];
	// Chamada da funcao de construcao do grafico com as variaveis
	buildLineChart(chartId1, chartLabels1, chartDataLabels1, chartData1);
	/* Configuracao e ativacao do grafico de linha [fim] */

	/* Configuracao e ativacao do grafico de barra [inicio] */
	// ID do canvas do grafico
	var chartId2 = '#grafico-barra';
	// Labels do eixo Y (os labels precisam ser 'quebrados' para não serem cortados)
	var chartLabels2 = [
		["Comércio varejista de artigos", "do vestuário e acessórios"],
		["Comércio varejista de mercadorias", "em geral, com…²"],
		["Lanchonetes, casas de chá,", "de sucos e similares"],
		["Atividades de associações de", "defesa dos direitos sociais"],
		"Cabelereiros",
		"Restaurantes e similares"
	];
	// Unidade dos valores do eixo X
	var chartDataLabels2 = 'Milhões de unidades';
	// Dados
	var chartData2 = [51.94, 42.15, 38.78, 23.04, 21.03, 10.92];
	// Chamada da funcao de construcao do grafico com as variaveis
	buildBarChart(chartId2, chartLabels2, chartDataLabels2, chartData2);
	/* Configuracao e ativacao do grafico de barra [fim] */

	var mymap = L.map('mapid') // Designacao do objeto mapa
		.setView([-22.912161949999998, -43.23117510590559], 4); // Designacao do ponto central e zoom
	var marker = L.icon({
		iconUrl: 'dist/img/marker.png', // Designacao da imagem do marcador
		shadowUrl: 'dist/img/marker__shadow.png', // Designacao da imagem da sombra do marcador

		iconSize: [36, 46], // Tamanho do icone
		shadowSize: [36, 9], // Tamanho da somba
		iconAnchor: [18, 46], // Ponto de origem do marcador
		shadowAnchor: [18, 5], // Ponto de origem da sombra
		popupAnchor: [1, -32] // Ponto de origem relativo do popup
	});

	L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', { // Designacao do tile
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	}).addTo(mymap);
	L.marker([-22.912161949999998, -43.23117510590559], {
			icon: marker
		}).addTo(mymap) // Designacao do popip
		.bindPopup("<b>Olá</b>, eu sou um <a href='http://www.ibge.gov.br' target='_blank'>popup</a>.")
		.openPopup();
	L.marker([-30.0655321, -51.23631893507668], {
			icon: marker
		}).addTo(mymap) // Designacao do tooltip
		.bindTooltip("Olá, eu sou um tooltip.");
	L.circle([-23.60005845, -46.720158347269496], { // Designacao da geometria
			radius: 150000,
			color: '#138500'
		}).addTo(mymap)
		.bindTooltip("Olá, eu sou outro tooltip.");;
</script>

</body>

</html>