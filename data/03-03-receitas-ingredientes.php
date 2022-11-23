<?php
// Titulo da unidade
$moduleTitle = "";
// Titulo do topico
$topicTitle = "O processo de classificação de dados";
// Titulo da pagina
$pageTitle = "Receitas dos classificadores: ingredientes";
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

	<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<p>Pensou em um ou mais exemplos de aplicações para a tarefa de classificação no setor em que você trabalha no IBGE?</p>
	</div>

	<div class="row">
		<!-- Imagem [início] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right">
				<picture>
					<img class="image" src="dist/img/un03/mise-en-plase.jpeg" alt="Imagem de ingredientes organizados numa bancada.">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Tal qual em uma receita culinária, em que é importante saber quais são os ingredientes e como se dá o preparo, você vai ver agora o que é necessário para construir um classificador.
			</figcaption>
		</figure>
		<!-- Imagem [fim] -->


		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			
			<p>
				Na tarefa de classificação, a partir de uma base de dados contendo 
				<span class="ttorigin tooltip001" data-tooltip-content="#tooltip001_content">objetos pré-classificados</span>, 
				o objetivo é construir um modelo capaz de classificar automaticamente 
				<span class="ttorigin tooltip002" data-tooltip-content="#tooltip002_content">novos objetos</span>
				em função de suas características.
				Desta forma, para que seja possível construir um classificador, 
				“apenas” dois ingredientes são necessários: uma boa base de dados de treinamento e um bom algoritmo de classificação.
			</p>
			<p>
				Uma boa <strong>base de dados de treinamento</strong> (ou base de dados rotulada) deve conter objetos pré-classificados, de acordo com um número finito de classes pré-definidas.
			</p>
			<p>
				Um bom <strong>algoritmo de classificação</strong> fica encarregado de construir o modelo de classificação a partir da base de dados de treinamento. Os seguintes algoritmos serão tratados em nosso curso:  <i>k-</i>Nearest Neighbours (<i>k-</i>NN), naïve Bayes,Random Forest,  Support Vector Machine (SVM) e Rede Neural Multi-layer Perceptron (MLP).
			</p>
			<p>
				Imagine que você precisa montar uma base de dados de treinamento com o objetivo de possibilitar a criação de um classificador de sentimentos capaz de determinar se é positivo ou negativo cada comentário feito pelos informantes que preencheram questionário de uma pesquisa do IBGE através da internet.
			</p>
		</div>

		<!-- Quadro [inicio] -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<div class="table-container">
				<table class="table table--text-table">
					<caption class="table__title">
						Quadro 1: Exemplo de base de dados de treinamento para criação de classificador
					</caption>
					<thead>
						<tr>
							<th scope="col">X</th>
							<th scope="col">Y</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>“Fácil e prático, parabéns IBGE!! Achei ótimo mesmo, parabéns!!”</td>
							<td>POSITIVO</td>
						</tr>
						<tr>
							<td>“Não tive nenhuma dificuldade para realizar o preenchimento. Concluí o processo em 5 minutos”</td>
							<td>POSITIVO</td>
						</tr>
						<tr>
							<td>“Achei o questionário grande demais. Ele travou no meio do processo :(”</td>
							<td>NEGATIVO</td>
						</tr>
						<tr>
							<td>“Gostaria de parabenizar o IBGE pela novidade, é mais prático preencher a pesquisa pela Internet”</td>
							<td>POSITIVO</td>
						</tr>
						<tr>
							<td>“Não gostei”</td>
							<td>NEGATIVO</td>
						</tr>
						<tr>
							<td>“Tudo funcionou perfeitamente”</td>
							<td>POSITIVO</td>
						</tr>
						<tr>
							<td>“Não consegui entender o sistema”</td>
							<td>NEGATIVO</td>
						</tr>
					</tbody>
				</table>
		</div>
		</div>
		<!-- Quadro [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Um classificador deste tipo poderia ser utilizado para monitorar, em tempo real, a opinião das pessoas sobre qualquer pesquisa do IBGE que estivesse na fase de coleta. A base de dados possui 7 observações, sendo 4 delas da classe POSITIVO e as 3 restantes da classe NEGATIVO.</p>
			<p>Recorde do Módulo I que a classificação é um problema ao qual se aplica aprendizado supervisionado.  Nesse tipo de problema de ciência de dados, a base de dados de treinamento sempre possuirá duas categorias de atributos, X e Y, na qual X é um conjunto de atributos preditivos e Y é um atributo especial, também chamado atributo classe.</p>
			<p>Os atributos X, ou atributos preditivos, são aqueles que descrevem as características (<i>features</i>) dos objetos, podendo ser tanto numéricos como categóricos. No exemplo acima, a parte X de cada observação da base de treinamento corresponde a uma frase, mais precisamente a um comentário realizado por um informante da pesquisa. É importante apenas relembrar que toda base de treinamento para classificação de textos precisa ser transformada em uma base de dados estruturada na etapa de pré-processamento (detalhes no Módulo II). </p>
			<p>Os atributos Y, ou atributo especial ou atributo classe, são aqueles que são alvo da classificação. O atributo classe é sempre do tipo categórico, e essa é a característica-chave que diferencia a classificação da regressão (como introduzido no Módulo I).</p>
			<p>No exemplo apresentado, o conjunto pré-definido de classes é {“POSITIVO”, “NEGATIVO”}. As classes também são chamadas de <strong>rótulos de classe</strong> ou simplesmente rótulos. É importante observar que, nos problemas de classificação, em geral, as classes são disjuntas, ou seja, um comentário pode ser “POSITIVO” ou “NEGATIVO”, mas nunca será as duas coisas ao mesmo tempo, da mesma forma que um e-mail é “normal” ou “spam”, nunca os dois.</p>
			<p>A criação de um classificador é realizada através do processamento da base de treinamento por um algoritmo de classificação, que se encarregará de aprender a mapear as características dos objetos (X) em rótulos de classes (Y). Uma vez que tenha sido criado, testado e aprovado no teste, um modelo de classificação poderá ser colocado em produção, podendo assim ser utilizado para classificar novos objetos, que são os objetos de classe desconhecida. Aprenderemos como testar e avaliar a qualidade de um classificador na unidade final deste módulo.</p>
			<p>No exemplo do classificador de sentimentos, os objetos podem ser classificados em apenas duas classes: “POSITIVO” e “NEGATIVO”. Por isso, o problema é considerado um problema de classificação binário. Problemas que envolvem mais de duas classes são chamados de problemas de classificação multiclasse. Um exemplo seria o problema da classificação de imagens de satélite, onde o objeto de interesse, que é uma imagem, pode ser classificado em ao menos três classes: “plantação”, “rio” ou “área urbana”.</p>
			<p>Vamos ver se você está acompanhando tudo até aqui?</p>
		</div>

		<!-- Imagem [início] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right">
				<picture>
					<img class="image" src="dist/img/un03/PME.png" alt="imagem sugestiva de uma base de dados da PME">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Um extrato de alguns dados relativos a <abbr title="Pesquisa Mensal de Emprego">PME</abbr>
			</figcaption>
		</figure>
		<!-- Imagem [fim] -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Considere uma base de dados obtida a partir da extração de um subconjunto da <abbr title="Pesquisa Mensal de Emprego">PME</abbr>, que armazena o id, escolaridade, idade, sexo, raça e condição de ocupação de pessoas residentes em uma determinada capital brasileira. Considere ainda que a condição de ocupação pode ser “PO” (pessoa ocupada) ou “PD” (pessoa desocupada).</p>
			<p>Suponha que desejamos utilizar a base de dados para construir um classificador capaz de prever a condição de ocupação de uma pessoa a partir de suas características. Neste caso, quais atributos da base de dados formariam o conjunto X e qual seria o atributo Y?</p>
			<p>Reflita alguns minutos e depois confira sua resposta com a que se apresenta.</p>

			<button class="btn modal_call" id="faq001">Veja a resposta</button>
		</div>

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