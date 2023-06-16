<?php
// Titulo da unidade
$moduleTitle = "Pré-processamento de dados";
// Titulo do topico
$topicTitle = "Técnicas de pré-processamento de dados";
// Titulo da pagina
$pageTitle = "Visão geral das técnicas";
// Subtitulo da pagina
$pageSubtitle = "Como a qualidade da base de dados impacta a análise dos resultados";
// Inclusao do cabeçalho do curso	
include "head.php";
?>

<script>	
	var exerciseCompletion = 0;

	var feedback06 = {
    type: "true-or-false",
    correctAnswer: [1],
		missFeedback: [
			"<strong>A sentença é verdadeira</strong>. A nível organizacional, o desenvolvimento contínuo de distintas formas de atuação auxilia a preparação e a composição de alternativas às soluções ortodoxas.",
		]
	};

   
</script>



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
				<p>“Você pode ter um conjunto de dados ridiculamente grande e complexo, mas se tiver as ferramentas e metodologias certas, isso não será um problema.”</p>
				<footer>
					<p class="quote__author"><span class="small-caps">Aaron Koblin
			</span> <span class="old-style-figures"></p>
				</footer>
			</blockquote>
			<!-- Citacao em bloco [fim] -->


			<p>O que você já sabe sobre a etapa de limpeza de dados?</p>
			<p>Avalie respondendo as seguintes questões.</p>

			<!-- VERDADEIRO OU FALSO questões 6,7, 8-->
			<form class="true-or-false" id="exercise03">
				<h2>Exercício 3</h2>
				<p>Pensando mais a longo prazo, o aumento do diálogo entre os diferentes setores produtivos cumpre um papel essencial na formulação do levantamento das variáveis envolvidas.</p>
				<p class="row true-or-false__item" id="exercise03-01">
					<span class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0">						
						<button class="btn true-or-false__btn-answer" id="exercise03-01__0" type="button" title="Verdadeiro">V</button>
						<button class="btn true-or-false__btn-answer" id="exercise03-01__1" type="button" title="Falso">F</button>							
					</span>
					<span class="col-xs-22 col-xs-offset-1 col-sm-19 col-sm-offset-0">
						<span>As experiências acumuladas demonstram que a valorização de fatores subjetivos garante a contribuição de um grupo importante na determinação das formas de ação.</span>
						<span class="exercise__feedback true-or-false__exercise-feedback" id="exercise03-01__comment"></span>
					</span>
				</p>
				<p class="row true-or-false__item" id="exercise03-02">
					<span class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0">						
						<button class="btn true-or-false__btn-answer" id="exercise03-02__0" type="button" title="Verdadeiro">V</button>
						<button class="btn true-or-false__btn-answer" id="exercise03-02__1" type="button" title="Falso">F</button>							
					</span>
					<span class="col-xs-22 col-xs-offset-1 col-sm-19 col-sm-offset-0">
						<span>Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a execução dos pontos do programa agrega valor ao estabelecimento das novas proposições.</span>
						<span class="exercise__feedback true-or-false__exercise-feedback" id="exercise03-02__comment"></span>
					</span>
				</p>
				<p class="row true-or-false__item" id="exercise03-03">
					<span class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0">						
						<button class="btn true-or-false__btn-answer" id="exercise03-03__0" type="button" title="Verdadeiro">V</button>
						<button class="btn true-or-false__btn-answer" id="exercise03-03__1" type="button" title="Falso">F</button>							
					</span>
					<span class="col-xs-22 col-xs-offset-1 col-sm-19 col-sm-offset-0">
						<span>A certificação de metodologias que nos auxiliam a lidar com o fenômeno da Internet nos obriga à análise de todos os recursos funcionais envolvidos.</span>
						<span class="exercise__feedback true-or-false__exercise-feedback" id="exercise03-03__comment"></span>
					</span>
				</p>
				<div class="row">
					<div class="col-xs-12 exercise__action-group">							
						<button class="btn btn--main exercise__btn-check-answer" type="button" onclick="trueOrFalse()" disabled="disabled">Confirmar</button>
					</div>
				</div>
			</form>
			<!-- FIM VERDADEIRO OU FALSO -->

			<br>
			
			<p>Então, como foi? Já sabe tudo sobre pré-processamento ou ainda precisa estudar mais um pouco? </p>

			<p>Até aqui você definiu o problema de negócio e identificou o tipo dos dados que serão utilizados para análise e resolução do seu problema. Agora você irá iniciar uma etapa essencial para o sucesso do projeto: o pré-processamento dos dados. </p> 

			<p>É na etapa de pré-processamento dos dados que você irá confirmar a qualidade da sua base de dados e, quando necessário, tratá-los a fim de deixar a base pronta para uso. Essa é uma etapa fundamental que precede a realização de análises e predições, em que nos atemos à preparação, organização e estruturação dos dados. </p>

			<p>Para que isso seja feito de forma adequada, algumas ações são importantes de serem feitas, tais como: investigar a origem das informações, entender as variáveis que compõem esse conjunto da dados e, ainda, analisar as suas principais características. </p>
		</div>
		

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>Na ciência de dados, independente do problema proposto ou do modelo escolhido para tratar esse problema, é de extrema importância averiguar a qualidade dos dados que serão utilizados. </q>
			</aside>
			<!-- Realce [fim] -->

			<p>De forma resumida, podemos dizer que o pré-processamento de dados é, então, um conjunto de técnicas usadas para representar dados brutos em formatos úteis e eficientes.</p>

			<p>Podemos ainda definir esta etapa como sendo composta principalmente por três processos: limpeza, transformação e redução de dados. Cada um deles envolve diversas atividades. </p>

			<p>Cada processo pode ser definido da seguinte forma:</p>

			<!-- Lista de definicao [inicio] -->
			<dl class="definition-list">
				<dt>Limpeza:</dt>
				<dd>é o momento em que identificamos dados incorretos, incompletos ou irrelevantes e averiguamos a necessidade de correção, complementação ou exclusão deles. A decisão de cada ação vai depender de cada técnica que será usada e da base de dados em questão;</dd>
				<dt>Transformação:</dt> 
				<dd>neste processo, verificamos se modificar uma ou mais variáveis da base de dados original contribui para o melhor desempenho do modelo. Esse processo também engloba integração de bases externas, assim como criação de novas variáveis a partir das informações disponíveis; e</dd>
				<dt>Redução dos dados:</dt>
				<dd>é quando analisamos se há redundância nas variáveis a fim de reduzir a dimensionalidade da base de dados e o volume de dados a fim aumentar a eficiência no processamento.</dd>
			</dl>
			<!-- Lista de definicao [fim] -->

		</div>	

		<!-- Destaque [inicio] -->
		<section class="feature feature--example">
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
				<p>A negligência a essa etapa pode acarretar resultados irreais, imprecisos ou incoerentes com a realidade do processo ou do fenômeno estudado, pois os dados sem tratamento podem mascarar o seu real comportamento. </p>
			</div>
		</section>	


		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Em muitos casos serão encontradas inconsistências nos dados – o que é natural em uma base de dados de grande porte – e para que o seu modelo não seja afetado por essas inconsistências, essas informações devem ser corrigidas ou excluídas, dependendo do problema e do modelo utilizado. Portanto, um correto pré-processamento é fundamental para garantir a qualidade e a confiabilidade das nossas conclusões.</p> 

			<p>Alguns exemplos triviais de serem identificados na etapa de pré-processamento dos dados são: duplicação de registros, valores nulos ou ausentes, incoerência entre variáveis, valores anômalos, uso de diferentes unidades de medidas, uso de tipos de variáveis distintos, falta de padronização, dentre outros. </p>

			<p>É importante conhecer os dados que você tem antes de iniciar os processos mencionados acima. Para isso, é fundamental realizar uma análise exploratória dos dados para que você identifique suas principais características, pois essas informações podem auxiliar nas decisões sobre os tratamentos da base.</p>

			<p>Se quiser saber um pouco sobre Análise Exploratória de Dados clique em</p> 

			<button class="btn modal_call" id="faq001">Abrir modal</button>

		</div>

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<br>
			<p>A seguir, você verá algumas técnicas dos processos de limpeza, transformação e redução dos dados.</p>

			<h2>Compartilhando experiências</h2>
						<!--FORUM COLABORATIVO -->
			<div class="text-with-icon">
				<div class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" aria-hidden="true" />
				</div>
				<p class="pullquote">
					Colabore com a construção do curso, descrevendo no <strong>Fórum Colaborativo</strong> um ou mais casos de utilização das técnicas em processos de trabalho na sua área de atuação.
				</p>
			</div>			
			<!-- FIM FORUM COLABORATIVO -->	

			<button class="btn modal_call" id="faq002">Abrir modal</button>


		</div>	
</main>
			
									

		<!-- Janela modal 1 [inicio] --> 

		<article class="modal" id="modal_faq001">
			<header class="modal__header">			
				<h2 class="modal__heading-1">Análise Exploratória de Dados</h2>
				<button class="btn modal__btn-close">Fechar</button>
			</header>
			<div class="row modal__content">
				<div class="col-xs-24">
			</div>
		

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">		

					<!-- Citacao em bloco [inicio] -->
					<blockquote class="quote" cite="http://www.google.com.br/">
						<p>“A análise exploratória de dados nunca pode ser toda a história, mas nada mais pode servir como pedra fundamental.”</p>
						<footer>
						<p class="quote__author"><span class="small-caps">John W. Tukey
						</span> <span class="old-style-figures"></p>
						</footer>
					</blockquote>
					<!-- Citacao em bloco [fim] -->

					<p>Suponha que você esteja trabalhando com os dados de uma pesquisa econômica por empresas do IBGE cujo objetivo é, dentre outros, retratar a distribuição de número de funcionários, também chamado de pessoal ocupado (PO), e do total de salários pagos para esses funcionários (SALÁRIO).</p> 

					<p>Suponha, ainda, que esteja trabalhando com uma sub-base de dados das empresas pertencentes à atividade de comércio e reparação de veículos automotores e motocicletas.</p>

					<p>Uma das críticas <span class="ttorigin tooltip001" data-tooltip-content="#tooltip001_content"> Estudo pormenorizado dos fatos que deram origem aos dados relativos à ocorrência de um fenômeno.</span> que poderiam ser feitas nesse caso seria o de cruzamento dessas informações. Uma vez que são variáveis que costumam ter comportamento parecido, pois quanto maior o número de funcionários de uma empresa maior será a sua folha salarial total.

					<p>Agora, observe o seguinte gráfico:</p>

					<!-- Imagem grande [inicio] -->
					<figure class="img-container">
							<picture>
								<img class="image" style="height: 100%;width: 100%;" src="dist/img/un02/img02-08-grafico-po.svg" alt="gráfico PO x salário">
							</picture>

						<figcaption>
							<small class="img-container__img-src">Gráfico de dispersão das informações de PO x SALÁRIO</small>
						</figcaption>	

					</figure>
					<!-- Imagem grande [fim] -->

					<p>O que foi possível perceber?

					<p>Veja que o gráfico de dispersão das informações de PO x SALÁRIO pode ser bastante eficaz, pois aponta de forma clara pontos discrepantes da distribuição conjunta dessas variáveis.</p>

					<p>Pelo gráfico, é possível observar que a distribuição de PO se concentra nos valores abaixo de 200 e que os salários se concentram na faixa abaixo de R$ 1 bilhão.</p> 

					<p>A partir dessas informações, fica claro que se deve averiguar com cautela os casos referentes às unidades que se encontram nas extremidades do gráfico porque tanto podem ser erros como podem ser outliers e, em ambos os casos, devem ser tratados conforme veremos mais adiante. </p>

					<!-- Realce [inicio] -->
					<aside class="pullquote">
						<q>Através da análise exploratória de dados você consegue identificar as principais características da base de dados.</q>
					</aside>
					<!-- Realce [fim] -->


					<p>É nesta etapa que você poderá fazer a identificação de valores inconsistentes, identificar a existência de outliers e entender a distribuição das variáveis da base de dados.</p> 

					<p>Você verá a seguir, sucintamente, exemplos de aplicação da identificação dos tipos de variáveis, a análise descritiva e a análise gráfica em Análise Exploratória de Dados.</p>

					<h2>Tipos de variáveis</h2>
					<p>O entendimento dos dados começa com identificação do tipo das variáveis, que podem ser classificadas como numéricas ou categóricas. Dentre elas, pode haver ainda subclassificações, como por exemplo as variáveis numéricas que podem ser discretas (0, 1, 2, 3, ...) ou contínuas (0, 0,1, 0,2, ..., 1, ..., 3, 3,1...). </p>

					<p>Observe o exemplo a seguir:</p>

					<!-- Tabela [inicio] -->
					<div class="table-container">
					<h5>Informações socioeconômicas por domicílio</h5>
						<table class="table">
							<caption class="table__title">Exemplo de tabela</caption>
							<thead>
								<tr>
									<th class="table__numeric-col-heading" scope="col">Domicílio</th>
									<th class="table__numeric-col-heading" scope="col">Renda familiar média</th>
									<th class="table__numeric-col-heading" scope="col">Classe social</th>
									<th class="table__numeric-col-heading" scope="col">Classe social numérica</th>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="table__numeric-values">#1</td>
									<td class="table__numeric-values">R$ 3.250</td>
									<td class="table__numeric-values">C</td>
									<td class="table__numeric-values">3</td>
								</tr>

								<tr>
								<td class="table__numeric-values">#2</td>
									<td class="table__numeric-values">R$ 12.900</td>
									<td class="table__numeric-values">A</td>
									<td class="table__numeric-values">5</td>
								</tr>
								
								<tr>
								<td class="table__numeric-values">#3</td>
									<td class="table__numeric-values">R$ 890</td>
									<td class="table__numeric-values">E</td>
									<td class="table__numeric-values">1</td>
								</tr>
								
								<tr>
								<td class="table__numeric-values">#4</td>
									<td class="table__numeric-values">R$ 606</td>
									<td class="table__numeric-values">E</td>
									<td class="table__numeric-values">1</td>
								</tr>

								<tr>
								<td class="table__numeric-values">#5</td>
									<td class="table__numeric-values">R$ 5.195</td>
									<td class="table__numeric-values">C</td>
									<td class="table__numeric-values">3</td>
								</tr>
							</tbody>
						</table>
					</div>	
					<!-- Tabela [fim] -->

					<p>Se você precisasse dividir esse grupo em dois grupos para analisar estratos, qual seria a melhor variável para separá-los?</p> 

					<p>Percebeu que as três variáveis (Renda familiar média, Classe social e Classe social numérica) informam a mesma coisa? </p>

					<p>A partir da identificação das variáveis, você pode selecionar o melhor tratamento para esse dado, bem como as técnicas possíveis de serem aplicadas. Por exemplo, modelos de regressão geralmente utilizam-se de variáveis numéricas, contudo, caso haja necessidade de incorporar uma variável qualitativa ao modelo, pode-se transformar essa variável em uma variável numérica, como demonstrado acima.</p>


					<h2>Análise descritiva</h2>
					<p>Estatísticas básicas como média, mediana, moda, desvio-padrão, mínimo e máximo (para variáveis numéricas) e tabelas de frequências (para variáveis categóricas) são exemplos de medidas importantes para entender o comportamento de cada variável, além de identificar tendências e possíveis comportamento atípicos ou anomalias. </p>

					<p>Outras estatísticas importantes são as medidas entre variáveis, como covariância e correlação, que nos ajudam a interpretar como elas se relacionam entre si e nos ajudam a escolher as variáveis importantes para o modelo.</p>

					<h2>Análise gráfica</h2>
					<p>Suponha que você esteja trabalhando com uma variável de Receita de um banco de dados de empresas e quando representa graficamente, em um <i>boxplot</i>, as variáveis de distribuição da Receita de Fabricação de chapas de aço em um domínio qualquer, observa o seguinte:</p>

										<!-- Imagem grande [inicio] -->
					<figure class="img-container">
							<picture>
								<img class="image" style="height: 100%;width: 100%;" src="dist/img/un02/img02-08-grafico-aluminio.svg" alt="gráfico fabricação de chapas">
							</picture>
					
						<figcaption>
							<small class="img-container__img-src">Gráfico de distribuição da Receita de Fabricação de chapas de aço em um domínio qualquer.</small>
						</figcaption>
					</figure>
					<!-- Imagem grande [fim] -->

					<p>A partir da análise do gráfico, você nota que há valores negativos na base que revela a existência de uma empresa com valor de receita negativo. </p>

					<p>Muito possivelmente isso ocorre em função de algum erro de preenchimento ou interpretação da variável, pois não existem Receitas negativas. O que poderia existir é Lucro negativo (ou ainda, Prejuízo). E, portanto, esses precisariam ser corrigidos.</p> 

					<p>Você pode perceber que há pelo menos um valor na base de dados que não condiz com a natureza da variável.</p>

					<p>Gráficos podem ser ferramentas importantes no entendimento do comportamento de uma variável. Com o auxílio visual de como os dados estão distribuídos, você pode rapidamente identificar pontos de concentração, simetria e valores discrepantes, ou até mesmo associar a variável a algum modelo de distribuição conhecido, auxiliando ainda mais o entendimento do comportamento desses dados.</p> 

					<p>Vários são os exemplos de gráficos que podem ser utilizados para essa finalidade. Os mais comuns são: histograma, boxplot, de dispersão, ramo de folha etc.</p>

					<p>Para saber como utilizar as técnicas para exploração de dados na prática com a linguagem Python, acesse os seguintes programas <a href="https://colab.research.google.com/drive/1vbM3SVb56ovG_m3DjgYMe2QKmmOWFQej?usp=sharing">“Módulo 2 Unidade 2(a) - Exploração de Dados.ipynb”</a> e <a href="https://colab.research.google.com/drive/1vR9nP5nnci0XvKSQslcERDCqnI9whTMM?usp=sharing]">“Módulo 2 Unidade 2(b) - Gráficos para Análise Exploratória.ipynb”.</a>Ambos estão disponíveis no Google Colab.</p>


					<p>Se você domina o R, transforme o código de Python para R e colabore no desenvolvimento do curso.</p>

					<p>Se você tiver mais exemplos aplicados em sua área de atuação, compartilhe o código no perfil do curso no Google Colab.</p>

					
					<!--FORUM COLABORATIVO -->
					<div class="text-with-icon">
						<div class="icon-container">
							<img src="dist/img/un02/icone-colab.svg" aria-hidden="true" />
						</div>
						<p class="pullquote">
							Para aprimorar o curso, compartilhe no <strong>Fórum Colaborativo</strong>.
						</p>
						</div>
					<!--FIM FORUM COLABORATIVO -->

		</div>
		</article>
			
		<!-- Janela modal [fim] -->


		<!-- Janela modal 2 [inicio] --> 

			<article class="modal" id="modal_faq002">
				<header class="modal__header">			
					<h2 class="modal__heading-1">Para saber mais </h2>
					<button class="btn modal__btn-close">Fechar</button>
				</header>
				<div class="row modal__content">
					<div class="col-xs-24">

					<p><a href="https://medium.com/data-hackers/pr%C3%A9-processamento-de-dados-com-python-53b95bcf5ff4#:~:text=O%20pr%C3%A9%2Dprocessamento%20de%20dados,realiza%C3%A7%C3%A3o%20de%20an%C3%A1lises%20e%20modelagem">Artigo: Pré-processamento de dados com Python</a></p>

					<p><a href="https://medium.com/datarisk-io/descomplicando-o-eda-como-aplicar-a-an%C3%A1lise-explorat%C3%B3ria-de-dados-na-pr%C3%A1tica-5047b00288c1#:~:text=O%20EDA%20Local%20%C3%A9%20uma,dados%2C%20conectando%20fatos%20ou%20situa%C3%A7%C3%B5es">Artigo: Descomplicando o EDA: como aplicar a análise exploratória de dados na prática [link:</a></p>

					<p><a href="https://bolt.mph.ufl.edu/6050-6052/unit-1/">Site: Unidade 1: Análise Exploratória de Dados</a></p>

					<p><a href="https://online.stat.psu.edu/stat200/lesson/1/1.1/1.1.2">Site: 1.1.2 - Variáveis explicativas e de resposta</a></p>

					<p><a href="https://www.youtube.com/watch?v=pbksL5cpeSk">Vídeo: Introdução à Ciência de Dados - Preparação e Pré-Processamento de Dados - Parte 1</a></p>

					<p><a href="https://www.youtube.com/watch?v=8VwLb7M-5-g">Vídeo: Introdução à Ciência de Dados - Preparação e Pré-Processamento de Dados - Parte 2</a></p>

					<p><a href="https://www.kaggle.com/code/aliceadativa/an-lise-de-dados-do-ibge-manaus-am/notebook">Notebook: Análise de dados do IBGE (Manaus-AM) </a></p>

					<p><a href="https://www.youtube.com/watch?v=0_F_8fLelEU">Vídeo: Aprenda a criar um boxplot usando Python (curso Python para Machine Learning - Aula 20)</a></p>

					<p><a href="https://www.youtube.com/watch?v=qtY3VBghp1w">Vídeo: Como criar HISTOGRAMAS em Python (curso Python para Machine Learning - Aula 18)</a></p>

					<p><a href="https://www.ibm.com/br-pt/cloud/learn/exploratory-data-analysis#:~:text=A%20an%C3%A1lise%20explorat%C3%B3ria%20de%20dados%20(EDA)%20%C3%A9%20usada%20por%20cientistas,m%C3%A9todos%20de%20visualiza%C3%A7%C3%A3o%20de%20dados">Artigo: Análise exploratória de dados</a></p>

					<p><a href="https://escoladedados.org/tutoriais/analise-exploratoria-de-dados/">Tutorial: ANÁLISE EXPLORATÓRIA DE DADOS – PARTE I </a></p>

					<p><a href="https://escoladedados.org/tutoriais/analise-exploratoria-de-dados-parte-ii/">Tutorial: ANÁLISE EXPLORATÓRIA DE DADOS – PARTE II</a></p>

					<p><a href=" https://escoladedados.org/tutoriais/analise-com-estatistica-descritiva-para-leigos/">Tutorial: ANÁLISE COM ESTATÍSTICA DESCRITIVA PARA LEIGOS</a></p>		


				</div>
					</div>
			</article>

	</div>		
</main>
<?php
	include "foot.php";
?>
<!-- Inclua o script a seguir para utilizar o componente Tooltip -->
<script src="dist/js/vendor/tooltipster.bundle.min.js"></script>

<!-- Inclua o script a seguir para utilizar a biblioteca Animate on Scroll -->
<script src="dist/js/vendor/aos.min.js"></script>

<!-- Inclua os dois scripts a seguir para utilizar a biblioteca de gráficos Chart.js -->
<script src="dist/js/vendor/Chart.bundle.min.js"></script>
<script src="dist/js/vendor/chartjs-plugin-datalabels.js"></script>

<!-- Inclua o script a seguir para incorporar videos do YouTube -->
<script src="https://www.youtube.com/iframe_api"></script>

<!-- Inclua o script a seguir para utilizar a biblioteca Leaflet -->
<script src="dist/js/vendor/leaflet.js"></script>


<!-- Inclua o script a seguir para utilizar os exercicios -->
<script src="dist/js/exercises.min.js"></script>

<script>
	$('#exercise04 .relate-cols__input').keyup(function () {// Relacionar colunas: limite de caracteres
		this.value = this.value.replace(/[^1-5\.]/g,'');
	});
	// Tooltip
	$('.tooltip001').tooltipster({ maxWidth: 300 });
	$('.tooltip002').tooltipster({ maxWidth: 300 });
	$('.tooltip003').tooltipster({ maxWidth: 300 });
	$('.tooltip004').tooltipster({ maxWidth: 300 });
	$('.tooltip005').tooltipster({ maxWidth: 300 });
	$('.tooltip006').tooltipster({ maxWidth: 300 });
	$('.tooltip007').tooltipster({ maxWidth: 300 });
	$('.tooltip008').tooltipster({ maxWidth: 300 });
	$('.tooltip009').tooltipster({ maxWidth: 300 });
	$('.tooltip010').tooltipster({ maxWidth: 300 });
</script>


</script>

</body></html>			




