<?php
// Titulo da unidade
$moduleTitle = "Pré-processamento de dados";
// Titulo do topico
$topicTitle = "Técnicas de pré-processamento de dados";
// Titulo da pagina
$pageTitle = "Limpeza de Dados";
// Subtitulo da pagina
$pageSubtitle = "Como aplicar técnicas de limpeza de dados para redução de erros e otimização das respostas";
// Inclusao do cabeçalho do curso	
include "head.php";
?>

<script>	
	var exerciseCompletion = 0;
	
	var feedback01 = {
    type: "true-or-false",
    correctAnswer: [1],
		missFeedback: [
			"<strong>A sentença é falsa</strong>. A crítica manual faz parte do processo de aprendizado, entendimento e crítica dos dados. Apesar de não ser um método automático ou rápido, é um método eficaz e especializado, pois assim conseguimos analisar cautelosamente particularidades presentes na base de dados.",
		]
	};

	var feedback02 = {
    type: "true-or-false",
    correctAnswer: [0],
		missFeedback: [
			"<strong>A sentença é verdadeira</strong>. O ato de imputar pode ser descrito como o de fazer inferência sobre um valor ausente a partir de informações presentes na base de dados. Dados esses que podem ser da própria unidade de investigação como de um conjunto de outras unidades.",
		]
	};

	var feedback03 = {
    type: "true-or-false",
    correctAnswer: [1],
		missFeedback: [
			"<strong>A sentença é falsa</strong>. É verdade de que nenhuma técnica de imputação será melhor do que o valor verdadeiro da base de dados, contudo algumas informações quando ausentes fazem falta na análise geral da informação e, portanto, é necessário o uso de alguma técnica de imputação para diminuir o impacto dessa ausência. Existe uma grande variedade de técnicas de imputação que podem ser usadas e algumas podem se aproximar bastante do valor real.",
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
				<p>“Você pode ter dados sem informação, mas não pode ter informação sem dados.”</p>
				<footer>
					<p class="quote__author"><span class="small-caps">Daniel Keys Moran
			</span> <span class="old-style-figures"></p>
				</footer>
			</blockquote>
			<!-- Citacao em bloco [fim] -->


			<p>O que você já sabe sobre a etapa de limpeza de dados?</p>
			<p>Avalie respondendo as seguintes questões.</p>


			<!-- VERDADEIRO OU FALSO 01 -->
			<form class="true-or-false" id="exercise01">
				<h2>Questão 1</h2>
				<p class="row true-or-false__item" id="exercise03-01">
					<span class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0">						
						<button class="btn true-or-false__btn-answer" id="exercise01-01__0" type="button" title="Verdadeiro">V</button>
						<button class="btn true-or-false__btn-answer" id="exercise01-01__1" type="button" title="Falso">F</button>						
					</span>
					<span class="col-xs-22 col-xs-offset-1 col-sm-19 col-sm-offset-0">
						<span>O uso de críticas individuais e manuais a unidades de investigação da base de dados são desaconselhadas quando estamos trabalhando com técnicas associadas à ciência de dados.</span>
						<span class="exercise__feedback true-or-false__exercise-feedback" id="exercise01-01__comment"></span>
					</span>
				</p>

					<div class="row">
					<div class="col-xs-12 exercise__action-group">							
						<button class="btn btn--main exercise__btn-check-answer" type="button" onclick="trueOrFalse()" disabled="disabled">Confirmar</button>
					</div>
				</div>
			</form>
			<!-- FIM VERDADEIRO OU FALSO -->
		

			<!-- VERDADEIRO OU FALSO 02 -->
			<form class="true-or-false" id="exercise02">
				<h2>Questão 2</h2>
				<p class="row true-or-false__item" id="exercise02-01">
					<span class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0">						
						<button class="btn true-or-false__btn-answer" id="exercise02-01__0" type="button" title="Verdadeiro">V</button>
						<button class="btn true-or-false__btn-answer" id="exercise02-01__1" type="button" title="Falso">F</button>						
					</span>
					<span class="col-xs-22 col-xs-offset-1 col-sm-19 col-sm-offset-0">
						<span>O ato de imputar pode ser descrito como o de fazer inferência sobre um valor ausente a partir de informações presentes na base de dados. Dados esses que podem ser da própria unidade de investigação como de um conjunto de outras unidades.</span>
						<span class="exercise__feedback true-or-false__exercise-feedback" id="exercise02-01__comment"></span>
					</span>
				</p>

					<div class="row">
					<div class="col-xs-12 exercise__action-group">							
						<button class="btn btn--main exercise__btn-check-answer" type="button" onclick="trueOrFalse()" disabled="disabled">Confirmar</button>
					</div>
				</div>
			</form>
			<!-- FIM VERDADEIRO OU FALSO -->

			<!-- VERDADEIRO OU FALSO 03 -->
			<form class="true-or-false" id="exercise03">
				<h2>Questão 3</h2>
				<p class="row true-or-false__item" id="exercise03-01">
					<span class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0">						
						<button class="btn true-or-false__btn-answer" id="exercise03-01__0" type="button" title="Verdadeiro">V</button>
						<button class="btn true-or-false__btn-answer" id="exercise03-01__1" type="button" title="Falso">F</button>						
					</span>
					<span class="col-xs-22 col-xs-offset-1 col-sm-19 col-sm-offset-0">
						<span>Toda imputação é desaconselhada, pois nenhuma técnica de imputação será melhor que a informação original dos dados.</span>
						<span class="exercise__feedback true-or-false__exercise-feedback" id="exercise03-01__comment"></span>
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
			<p>Nesta etapa, será realizada a limpeza dos dados do projeto que o grupo está desenvolvendo. </p>

			<p>Para isso, é importante saber que os dados originais da base de dados utilizada podem conter muitas partes irrelevantes, ausentes ou incoerentes. Para lidar com esta situação, a limpeza de dados é essencial. </p>

			<p>O processo de limpeza dos dados pode ser feito tanto de forma manual quanto através de uso de algoritmos. Isso vai depender da estrutura dos dados e da ferramenta disponível para uso. O importante é entender a estrutura, a distribuição e as fragilidades dos dados e identificar as suas informações mais valiosas.</p>

			<p>A seguir você verá algumas técnicas de limpeza das ocorrências mais frequentes, tais como: duplicação de registros e valores nulos, incorretos ou ausentes.</p>
		</div>
		
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">	

			<h2>Duplicação de registros</h2>

			<p>Um caso simples e comum de sujeira nos dados é a duplicação de registros. Uma forma simples de identificar registros duplicados é através da distribuição de alguma variável chave ou de um conjunto de variáveis que consigam singularizar cada registro como sendo único, como por exemplo o CPF na base de dados de clientes de uma empresa ou o CNPJ na base de dados de uma pesquisa amostral por empresas.</p> 

			<p>Há de se atentar se a duplicação, caso haja, é factível ou não. Na verdade, toda e qualquer incoerência identificada deve ser criticada antes do descarte.</p> 

			<p>Por exemplo, é comum que a base de dados de uma seguradora ou plano de saúde repita o CPF do titular do plano para o próprio e para seus dependentes sem um campo de distinção entre eles. </p>

			<p>Os registros apenas se distinguiriam entre si pelas demais variáveis da base como número de incidentes ou acionamento do plano. Há ainda os casos em que nem essa informação será dada separadamente, portanto, caberá ao cientista de dados decidir se essas duplicações são relevantes ou não para o modelo que será utilizado.</p>
		</div>
		
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">	

			<h2>Valores nulos, incorretos ou ausentes</h2>

			<p>Valores <strong>nulos</strong> são aqueles em que a informação não significa nada ou não tem valor algum para aquele tipo de variável, isto é, a informação disponível não tem como ser interpretada para aquela variável.</p> 
			
			<p>Um caso típico é o tipo da variável ser diferente do tipo esperado de resposta, como por exemplo um valor numérico na informação “Nome” que é uma variável categórica, como no exemplo a seguir:

					<!-- Tabela [inicio] -->
			<div class="table-container">
				<table class="table">
					<caption class="table__title">Nome e Idade de indivíduos de uma base qualquer</caption>
					<thead>
						<tr>
							<th scope="col">Nome</th>
							<th class="table__numeric-col-heading" scope="col">Idade</th>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">Pedro</th>
							<td class="table__numeric-values">39</td>
						</tr>

						<tr>
							<th scope="row">João</th>
							<td class="table__numeric-values">40</td>
						</tr>

						<tr>
							<th scope="row">Ana</th>
							<td class="table__numeric-values">51</td>
						</tr>

						<tr>
							<th scope="row">Juliana</th>
							<td class="table__numeric-values">30</td>
						</tr>

						<tr>
							<th scope="row">Humberto</th>
							<td class="table__numeric-values">25</td>
						</tr>

						<tr>
							<th scope="row">Raquel</th>
							<td class="table__numeric-values">63</td>
						</tr>

						<tr>
							<th scope="row" bgcolor="#c2adeb">17</th>
							<td class="table__numeric-values">17</td>
						</tr>

						<tr>
							<th scope="row">André</th>
							<td class="table__numeric-values">40</td>
						</tr>
						
					</tbody>
				</table>
			</div>
			<!-- Tabela [fim] -->

			<p>Esses casos são fáceis de serem identificados porque são claramente erros. O tratamento nem sempre é trivial e varia de caso a caso.</p>

			<p>Há diversos motivos que podem levar a valores nulos: problemas de cadastro, erro de integração de bases de dados com consequente perda de informação no processo, entre outros. </p>

			<p>A identificação de <strong>valores incorretos</strong> é mais complexa pois, por mais estranha que uma informação aparente, muitas das vezes não temos como saber ao certo se está correta ou não. </p>

			<p>Para auxiliar nesse processo, é comum criar um conjunto de relações entre variáveis e limites aceitáveis de respostas para cada variável. Dessa forma, pelo menos, evitamos que erros grotescos e não factíveis permaneçam na base de dados. Esse conjunto de críticas é chamado de <strong>plano de crítica</strong>. </p>

			<p>Para evidenciar uma crítica que poderia ser utilizada no plano de crítica de uma pesquisa domiciliar do IBGE, por exemplo, suponha que essa pesquisa pergunte ao informante se ele tem trabalho formal e sua renda mensal.</p> 

			<p>Aqueles que informarem terem trabalho formal não poderiam ter suas rendas mensais inferiores a um salário-mínimo e, se tiverem, deveriam ser tratados. Esse tratamento pode ser a correção ou exclusão dessa informação. </p>

			<p>Quando se opta apenas pela exclusão desses registros, normalmente ficamos com duas opções: ou supomos o valor como “zero” (sem informação) ou como valor ausente – também conhecido como não-resposta. </p>

			<p>Quando não temos a informação de alguma variável – valor ausente – precisamos entender se a razão dessa ausência é porque a informação não existe de fato e, portanto, o campo deve manter-se vazio; ou se essa informação existe e não está na base por qualquer outro motivo. Esse último caso deve ser tratado sempre que possível. </p>	
		</div>	

		<!-- Destaque [inicio] -->
		<section class="feature feature--example">
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
				<p>É preciso sempre averiguar se os casos de ausência de informação são casos de não-resposta ou se são coerentes, senão será atribuído valores a unidades para as quais não faz sentido ter valor algum.</p>
			</div>
		</section>
		<!-- Destaque [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Voltando ao exemplo utilizado na unidade anterior (reproduzido abaixo), não faz sentido que o último registro tenha informações de renda, ocupação ou estado civil dado que o indivíduo é um bebê.</p>

			<!-- Tabela [inicio] -->
			<div class="table-container">
				<table class="table">
					<caption class="table__title">Exemplo de base de dados no formato estruturado</caption>
					<thead>
						<tr>
							<th scope="col">Idade</th>
							<th scope="col">Renda</th>
							<th scope="col">Ocupação</th>
							<th scope="col">Sexo</th>
							<th scope="col">Estado civil</th>
							
						</tr>
					</thead>
					<tbody>
						<tr>
							<td scope="row">67</td>
							<td scope="row"">2.590,00</td>
							<td scope="row">Aposentada</td>
							<td scope="row">F</td>
							<td scope="row">Casada</td>
						</tr>

						<tr>
							<td scope="row">18</td>
							<td scope="row">900,00</td>
							<td scope="row">Estagiário</td>
							<td scope="row">M</td>
							<td scope="row">Solteriro</td>
						</tr>

						<tr>
							<td scope="row">40</td>
							<td scope="row">8.000,00</td>
							<td scope="row">Engenheiro</td>
							<td scope="row">M</td>
							<td scope="row">Casado</td>
						</tr>

						<tr>
							<td scope="row">1</td>
							<td scope="row">-</td>
							<td scope="row">-</td>
							<td scope="row">F</td>
							<td scope="row"">-</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- Tabela [fim] -->

			<p>Quanto aos <strong>dados ausentes</strong>, eles podem ser classificados em dois tipos: aqueles nos quais não se tem nenhuma informação sobre a unidade de investigação além das informações cadastrais ou de registro, chamados de “não-resposta de unidades”; e aqueles em que se têm informações de algumas variáveis, mas não de todas, conhecidos como “itens perdidos” ou “não-respostas ao item”. </p>

			<p>Por exemplo, suponha que um indivíduo aleatório tenha sido selecionado para participar de uma pesquisa domiciliar.

			<p>Caso esse indivíduo se recuse a responder à pesquisa, isso seria um caso de não-resposta de uma unidade; já no caso dele responder à pesquisa, mas se recusar a informar o valor da sua renda familiar, por exemplo, seria um caso de não-resposta ao item.

			<p>Há diversos motivos que podem levar a dados ausentes: problemas de cadastro na identificação de uma unidade de coleta no caso de uma pesquisa amostral, erro de integração de bases de dados e perda de informação no processo, recusa na prestação de informação, entre outros. 

			<p>Três formas mais comuns de lidar com os valores nulos ou ausentes são (Lohr [2010]):  

			<!-- Lista de definicao [inicio] -->
			<dl class="definition-list">
				<dt>Prevenção</dt>
				<dd>Avaliar a origem dos problemas e obter soluções para evitar que o problema aconteça é sempre a melhor opção. Contudo, nem sempre isso é possível e, mesmo que seja, isso não ajuda a solucionar o problema já existente.</dd>
				<dt>Usar sub-amostras de não-respondentes para fazer inferência sobre os dados:</dt>
				<dd>Nesse caso, criar-se-ia uma amostra dos não-respondentes e seria feito um esforço extra para obter suas reais informações. A partir disso, seria possível criar um modelo específico para os demais não-respondentes. Nesse caso, assume-se a hipótese de que os não-respondentes têm características similares.</dd>
				<dt>Usar um modelo para predizer os valores dos não-respondentes, ajuste dos pesos amostrais em cada classe, métodos de imputação e modelos paramétricos:</dt>
				<dd>Essa abordagem é a mais comum e a mais simples de ser implementada, pois trabalha-se com as informações já obtidas das demais unidades da base de dados. Apesar de nem sempre o modelo escolhido ser um modelo simples de ser implementado, esses procedimentos não precisam revisitar outras etapas do processo de trabalho, como a etapa de coleta de dados, por exemplo.</dd>
			</dl>
			<!-- Lista de definicao [fim] -->

			<p>O mais comum é utilizar modelos matemáticos ou estatísticos para fazer a correção dos dados apontados como nulos ou incorretos. Para esse tratamento, damos o nome <strong>imputação de dados</strong>. Os principais métodos de imputação serão abordados mais adiante.</p>
		</div>	


		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Criando notebooks com python</h2>
			<p>Para um exemplo prático de processo de limpeza de dados implementado em Python, acesse o programa <a href="https://colab.research.google.com/drive/1W02iOU5W7Jaq6TXNHeS1rKxd3OE_igCP?usp=sharing"> Módulo 2 Unidade 2(c) - Limpeza de Dados.ipynb</a> que está disponível no Google Colab. </p>


			<!--FORUM COLABORATIVO -->
			<div class="text-with-icon">
				<div class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" aria-hidden="true" />
				</div>
				<p class="pullquote">
					Para treinar, recrie o programa com outros exemplos da sua área de trabalho e compartilhe no <strong>Fórum Colaborativo</strong>.
				</p>
				</div>
			</div>
			<!--FIM FORUM COLABORATIVO -->
		</div>

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<p>Se você domina o R, transforme o código de Python para R e colabore no desenvolvimento do curso.</p> 
 
			<p>Se você tiver mais exemplos aplicados em sua área de atuação, compartilhe o código no perfil do curso no Google Colab.</p>

			<h2>Compartilhando experiências</h2>
			<p>Você já utiliza técnicas de limpeza de dados nos seus processos de trabalho?</p>
			

			<!--FORUM COLABORATIVO -->
			<div class="text-with-icon">
				<div class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" aria-hidden="true" />
				</div>
				<p class="pullquote">
					Colabore com a construção do curso, descrevendo no <strong>Fórum Colaborativo</strong> um ou mais casos de utilização das técnicas em processos de trabalho na sua área de atuação.
				</p>
				</div>
			<!--FIM FORUM COLABORATIVO -->

			<button class="btn modal_call" id="faq001">Abrir modal</button>
		</div>

				


		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Atividade 2 - Projeto</h2>
			
			<!--ATIVIDADES + Wiki -->
			Tarefas:

			1. identificar os tipos de ocorrências e aplicar as técnicas de limpeza necessárias no conjunto de dados que está sendo utilizado na resolução do problema; e

			2. descrever o processo no <strong>Fórum de Atividades do Módulo 2</strong>  e, após comentários dos demais participantes e medidores, inserir a descrição na Wiki <strong>Documentação das Atividades</strong>. 



		</div>	

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
					<p>Livro: Sampling: Design and Analysis; Lohr, Sharon L.. Second edition. Arizona State University. Brook/Cole, Cengage Learning. 2010. </p>

					<p><a href="https://www.forbes.com/sites/gilpress/2016/03/23/data-preparation-most-time-consuming-least-enjoyable-data-science-task-survey-says/?sh=62c85b4e6f63]">Artigo: Limpeza de big data: tarefa de ciência de dados mais demorada e menos agradável, diz pesquisa</a> </p>

					<p><a href="https://www.infoworld.com/article/3228245/the-80-20-data-science-dilemma.html">Artigo: O dilema da ciência de dados 80/20</a> </p>

					<p><a href="https://www.youtube.com/watch?v=pbksL5cpeSk&amp;list=PLxI8Can9yAHfsMKsLoHT5rKwOEffPgyWe&amp;index=13">Vídeo: Introdução à Ciência de Dados - Preparação e Pré-Processamento de Dados - Parte 1</a> </p>

					<p><a href="https://www.youtube.com/watch?v=8VwLb7M-5-g">Vídeo: Introdução à Ciência de Dados - Preparação e Pré-Processamento de Dados - Parte 2</a> </p>

					<p><a href="https://www.youtube.com/watch?v=10kmcTfoxiM">Vídeo: Mineração de Dados - Preparação e limpeza de dados</a> </p>

					<p><a href="https://www.kaggle.com/learn/data-cleaning">Curso: Data Cleaning - Kaggle</a> </p>

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




