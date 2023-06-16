<?php
// Titulo da unidade
$moduleTitle = "Pré-processamento de dados";
// Titulo do topico
$topicTitle = "Identificação e conversão de tipos de dados";
// Titulo da pagina
$pageTitle = "Dados estruturados, semiestruturados e não estruturados.";
// Subtitulo da pagina
$pageSubtitle = "Como identificar os tipos de dados para coleta e interpretação";
// Inclusao do cabeçalho do curso	
include "head.php";
?>

<link href="dist/css/vendor/prism.css" rel="stylesheet" />

<script>
	var exerciseCompletion = 0;
</script>

<main class="page-content okgo">

	<!-- Cabecalho da página -->
	<header class="page-header col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<?php
		echo "<p class='page-header__topic-title'><span class='page-header__topic-tag-style'>$topicTitle</span></p>";
		echo "<h1 class='page-header__page-title'>$pageTitle</h1>"
		?>
	</header>

	<!-- <CONTEUDO -->
	<div class="row">
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<!-- Citacao em bloco [inicio] -->
			<blockquote class="quote" cite="http://www.google.com.br/">
				<p>“Os dados falarão com você, caso esteja disposto a ouvi-los.”</p>
				<footer>
					<p class="quote__author"><span class="small-caps">Jim Bergeson</span> <span class="old-style-figures"></p>
				</footer>
			</blockquote>
			<!-- Citacao em bloco [fim] -->

			<p>Como fazer o seu trabalho em menos tempo e com qualidade? Como explorar novas fontes de dados? Quais são e onde estão os dados que você precisa para o processo de trabalho? </p>

			<p>Vivemos a era do BIG DATA, conceito com base nos princípios de volume, variedade e velocidade de produção e armazenamento de dados. Mas, para definir os parâmetros necessários para localização e extração, é preciso identificar e estruturar os tipos de dados para viabilizar a análise e resolução do problema.</p>

			<p>Com crescente volume de dados gerados a cada segundo, por milhões de brasileiros e organizações, espalhados por diversas fontes (pessoas, registros administrativos, empresas, smartphones, internet, aplicativos, imagens de satélite etc.), o IBGE se volta para a construção de um novo processo integrado de coleta, organização, análise e disseminação de informações geográficas e estatísticas.</p>
		</div>



		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<!-- Realce [inicio]-->
			<aside class="pullquote">
				<q> Coletar, organizar e disseminar dados é a essência do IBGE. Nosso desafio é saber como esse processo pode se tornar cada vez mais célere e eficiente mantendo nossa tradicional qualidade e confiabilidade.</q>
			</aside>
			<!-- Realce [fim] -->


			<p>Na etapa anterior, o grupo analisou o contexto da cultura de dados no IBGE e formulou o problema inicial a ser trabalhado ao longo da oficina.</p>

			<p>Nesta etapa, o grupo irá identificar a estrutura dos dados aplicados ao problema, prepará-los e preprocessá-los.</p>

			<p>Um processo de ciência de dados pode envolver a análise de dados de diferentes tipos. Você saberia identificar quais são e como se apresentam?</p>

			<h4> Identifique os tipos de dados apresentados nas questões abaixo:</h4>

			<!-- MULTIPLA ESCOLHA 1-->
			<script>
				var feedback01 = { //FEEDBACK: Exercicio 1
					type: "multiple-choice",
					correctValue: "2",
					hitFeedback: "<b>Parabéns!</b> Você selecionou a opção correta. Dados não estruturados são a maioria dos dados disponíveis e os mais difíceis de organizar e extrair informações. Por não ter uma estrutura padronizada, o uso de dados não estruturados requer uma observação um pouco mais apurada.",
					missFeedback: "<b>Atenção!</b> Você não selecionou a opção correta. O exemplo apresentado é de dado não estruturado. Dados não estruturados são a maioria dos dados disponíveis e os mais difíceis de organizar e extrair informações. Por não ter uma estrutura padronizada, o uso de dados não estruturados requer uma observação um pouco mais apurada."
				};
			</script>

			<h5> Questão 1 - Tipo de dados apresentados nas respostas deixadas na caixa de comentários de pesquisas do IBGE:</h5>
			<br />

			<ul class="bulleted-list">
				<li>“Fácil e prático, parabéns IBGE!! Achei ótimo mesmo, parabéns!!”</li>
				<li>“Não tive nenhuma dificuldade para realizar o preenchimento. Concluí o processo em 5 minutos”</li>
				<li>“Achei o questionário grande demais. Ele travou no meio do processo :(”</li>
				<li>“Gostaria de parabenizar o IBGE pela novidade, é mais prático preencher a pesquisa pela Internet”</li>
			</ul>
			<form id="exercise01">
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt01" title="Selecione para escolher a opção 1.">
					<input id="multiplechoice01_opt01" name="multiplechoice01" type="radio" value="1">
					Semiestruturado
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt02" title="Selecione para escolher a opção 2.">
					<input id="multiplechoice01_opt02" name="multiplechoice01" type="radio" value="2">
					Não estruturado
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt03" title="Selecione para escolher a opção 3.">
					<input id="multiplechoice01_opt03" name="multiplechoice01" type="radio" value="3">
					Estruturado
				</label>
				<div class="row">
					<div class="col-xs-24 exercise__action-group">
						<button class="btn btn--main exercise__btn-check-answer" type="button" onclick="multipleChoice()" disabled="disabled">Confirmar</button>
						<div class="exercise__feedback"></div>
					</div>
				</div>
			</form>
			<br>

			<!-- FIM EXERCICIO -->
		</div>


		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<!-- MULTIPLA ESCOLHA 2-->

			<script>
				var feedback02 = { //FEEDBACK: Exercicio 2
					type: "multiple-choice",
					correctValue: "3",
					hitFeedback: "<b>Parabéns! Você selecionou a opção correta. Dados Estruturados são aqueles representados no formato tabular (isto é, dispostos em linhas e colunas), possuindo uma estrutura fixa e pré-definida (cada linha – ou observação – segue o mesmo formato que as outras da tabela).",
					missFeedback: "<b>Atenção! Você não selecionou a opção correta. O exemplo apresentado é de dado estruturado. Dados Estruturados são aqueles representados no formato tabular (isto é, dispostos em linhas e colunas), possuindo uma estrutura fixa e pré-definida (cada linha – ou observação – segue o mesmo formato que as outras da tabela)."
				};
			</script>

			<h5> Questão 2 - Tipo de dados apresentados na tabela abaixo:</h5>
			<br />

			<form id="exercise02">

				<!-- Tabela [inicio] -->

				<div class="table-container">
					<table class="table tabletext-table">

						<thead>
							<tr>
								<th class="table__numeric-col-heading" scope="col">idade</th>
								<th class="table__numeric-col-heading" scope="col">renda</th>
								<th class="table__numeric-col-heading" scope="col">ocupação</th>
								<th class="table__numeric-col-heading" scope="col">sexo</th>
								<th class="table__numeric-col-heading" scope="col">estado civil</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="table__numeric-values">67</td>
								<td class="table__numeric-values">2.590,00</td>
								<td class="table__numeric-values">aposentada</td>
								<td class="table__numeric-values">F</td>
								<td class="table__numeric-values">casada</td>
							</tr>
							<tr>
								<td class="table__numeric-values">18</td>
								<td class="table__numeric-values">900</td>
								<td class="table__numeric-values">estagiário</td>
								<td class="table__numeric-values">M</td>
								<td class="table__numeric-values">solteiro</td>

							</tr>
							<tr>
								<td class="table__numeric-values">40</td>
								<td class="table__numeric-values">8.000,00</td>
								<td class="table__numeric-values">engenheiro</td>
								<td class="table__numeric-values">M</td>
								<td class="table__numeric-values">casado</td>
							</tr>
							<tr>
								<td class="table__numeric-values">1</td>
								<td class="table__numeric-values"></td>
								<td class="table__numeric-values"></td>
								<td class="table__numeric-values">F</td>
								<td class="table__numeric-values"></td>
							</tr>
						</tbody>
					</table>
				</div>

				<!-- Tabela [fim] -->
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt01" title="Selecione para escolher a opção 1.">
					<input id="multiplechoice01_opt01" name="multiplechoice01" type="radio" value="1">
					Semiestruturado
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt02" title="Selecione para escolher a opção 2.">
					<input id="multiplechoice01_opt02" name="multiplechoice01" type="radio" value="2">
					Não estruturado
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt03" title="Selecione para escolher a opção 3.">
					<input id="multiplechoice01_opt03" name="multiplechoice01" type="radio" value="3">
					Estruturado
				</label>
				<div class="row">
					<div class="col-xs-24 exercise__action-group">
						<button class="btn btn--main exercise__btn-check-answer" type="button" onclick="multipleChoice()" disabled="disabled">Confirmar</button>
						<div class="exercise__feedback"></div>
					</div>
				</div>
			</form>
			<!-- FIM EXERCICIO -->
			<br>
		</div>

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<!-- MULTIPLA ESCOLHA 3-->
			<script>
				var feedback03 = { //FEEDBACK: Exercicio 3
					type: "multiple-choice",
					correctValue: "1",
					hitFeedback: "<b>Parabéns!</b> Você selecionou a opção correta. Dados semiestruturados são aqueles que contêm alguma estrutura de atributos, porém esta não é fixa e tampouco pré-definida. Os formatos JSON e XML podem ser utilizados para representar dados semiestruturados. A diferença entre os modelos é que o JSON representa informações com o uso de pares chave/valor enquanto o modelo XML adota o uso de tags.",
					missFeedback: "<b>Atenção!</b> Você não selecionou a opção correta. O exemplo apresentado é de dado semiestruturado. Dados semiestruturados são aqueles que contêm alguma estrutura de atributos, porém esta não é fixa e tampouco pré-definida. Os formatos JSON e XML podem ser utilizados para representar dados semiestruturados. A diferença entre os modelos é que o JSON representa informações com o uso de pares chave/valor enquanto o modelo XML adota o uso de tags."
				};
			</script>

			<h5> Questão 3 - Tipo de dado apresentado no código abaixo</h5>
			<br />

			<form id="exercise03">
				<code class="code-display">
					<pre>
[{
	"idade": 67,
	"renda": 2550,
	"ocupacao": "aposentada",
	"sexo": "F",
	"estado_civil": "Casada"
},
{
	"idade": 18,
	"renda": [0, 900],
	"ocupacao": [ "estudante", "estagiário"],
	"sexo": "M",
	"estado_civil": "Solteiro"
},
{
	"idade": 40,
	"renda": [8000, 1500, 3000],
	"ocupacao": [ "engenheiro", "professor", "cientista de dados" ],
	"sexo": "M",
	"estado_civil": "Casado"
},
{
	"idade": 1,
	"sexo": "F"
}]
					</pre>
				</code>

				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt01" title="Selecione para escolher a opção 1.">
					<input id="multiplechoice01_opt01" name="multiplechoice01" type="radio" value="1">
					Semiestruturado
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt02" title="Selecione para escolher a opção 2.">
					<input id="multiplechoice01_opt02" name="multiplechoice01" type="radio" value="2">
					Não estruturado
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt03" title="Selecione para escolher a opção 3.">
					<input id="multiplechoice01_opt03" name="multiplechoice01" type="radio" value="3">
					Estruturado
				</label>
				<div class="row">
					<div class="col-xs-24 exercise__action-group">
						<button class="btn btn--main exercise__btn-check-answer" type="button" onclick="multipleChoice()" disabled="disabled">Confirmar</button>
						<div class="exercise__feedback"></div>
					</div>
				</div>
			</form>
			<!-- FIM EXERCICIO 3 -->
			<br>
		</div>

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<!-- MÚLTIPLA ESCOLHA 4 -->
			<script>
				var feedback04 = { //FEEDBACK: Exercicio 4
					type: "multiple-choice",
					correctValue: "2",
					hitFeedback: "<b>Parabéns!</b> Você selecionou a opção correta. Além dos dados estruturados e semiestruturados, muitas aplicações importantes da ciência de dados precisam fazer uso de outros tipos de dados, como imagens, textos, vídeo e áudio, que não contêm nenhuma marca de estruturação (atributos pré-definidos), sendo por isso chamados de dados não estruturados.",
					missFeedback: "<b>Atenção!</b> Você não selecionou a opção correta. Além dos dados estruturados e semiestruturados, muitas aplicações importantes da ciência de dados precisam fazer uso de outros tipos de dados, como imagens, textos, vídeo e áudio, que não contêm nenhuma marca de estruturação (atributos pré-definidos), sendo por isso chamados de dados não estruturados. "
				};
			</script>


			<h5> Questão 4 - Tipo de dado apresentado na imagem abaixo</h5>
			<!-- Imagem grande [inicio] -->

			<figure class="img-container">
				<picture>
					<img class="image" style="height: 100%;width: 100%;" src="dist/img/un02/img02-03-01.png" alt="Imagem de satélite">
				</picture>

				<figcaption>
					<div class="img-container__top-line"></div>
					<small class="img-container__img-src"><a href="http://www2.dgi.inpe.br/catalogo/explore">Fonte: INPE - Divisão de Geração de Imagens </a></small>
				</figcaption>
			</figure>
			<!-- Imagem grande [fim] -->

			<form id="exercise04">
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt01" title="Selecione para escolher a opção 1.">
					<input id="multiplechoice01_opt01" name="multiplechoice01" type="radio" value="1">
					Semiestruturado
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt02" title="Selecione para escolher a opção 2.">
					<input id="multiplechoice01_opt02" name="multiplechoice01" type="radio" value="2">
					Não estruturado
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt03" title="Selecione para escolher a opção 3.">
					<input id="multiplechoice01_opt03" name="multiplechoice01" type="radio" value="3">
					Estruturado
				</label>
				<div class="row">
					<div class="col-xs-24 exercise__action-group">
						<button class="btn btn--main exercise__btn-check-answer" type="button" onclick="multipleChoice()" disabled="disabled">Confirmar</button>
						<div class="exercise__feedback"></div>
					</div>
				</div>
			</form>
			<!-- FIM EXERCICIO 4 -->
			<br>
		</div>
		<br>


		<!-- QUESTÕES 5 e 6 -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h4>Questão 5</h4>
			<p>Os formatos JSON e XML podem ser utilizados para representar dados semiestruturados. A diferença entre os modelos é que o JSON representa informações com o uso de pares chave/valor enquanto o modelo XML adota o uso de tags. Analise a situação a seguir para representar os dados no formato JSON e depois clique em <strong>Visualizar Resposta</strong> para comparar: </p>

			<p>A POG (Produção de Ovos de Galinha) é uma pesquisa do IBGE com edição trimestral que investiga um painel de informantes composto por todos os estabelecimentos que produzem ovos de galinha e possuem 10.000 ou mais galinhas poedeiras. A produção de ovos compreende tanto ovos para consumo como ovos para incubação.  Os dados coletados pela pesquisa são divulgados no SIDRA (sistema de divulgação do IBGE), tabulados por trimestre e Unidade da Federação.</p> 

			<p>A partir da descrição acima, utilize o formato JSON para representar os dados da produção dos estados do sudeste no 4º trimestre de 2017. </p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>Espírito Santo: 76.143 mil dúzias de ovos</li>
				<li>Minas Gerais: 82.816 mil dúzias de ovos</li>
				<li>Rio de Janeiro: 1.308 mil dúzias de ovos</li>
				<li>São Paulo: 254.014 mil dúzias de ovos</li>
			</ul>
			<!-- FIM -->

			<pre><code contenteditable class="language-json" style="outline:none !important;">{
				
}
</code></pre>

			<button class="btn btn-show-content" target="hidden_btn_1" type="button" onclick="showResposta()">Visualizar resposta</button>
			<code style="display:none" id="hidden_btn_1" class="code-display">
				<pre>
[
 {
  "uf": "ES",
  "ano": 2017,
  "trimestre": 4,
  "ovos": 76143
 },
 {
  "uf": "MG",
  "ano": 2017,
  "trimestre": 4,
  "ovos": 82816
 },
 {
  "uf": "RJ",
  "ano": 2017,
  "trimestre": 4,
  "ovos": 1308
 },
 {
  "uf": "SP",
  "ano": 2017,
  "trimestre": 4,
  "ovos": 254014
 }
]
				</pre>
			</code>
		</div>

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h4>Questão 6</h4>
			<p>No Módulo 1, você viu dois tipos de problema/tarefa de ciência de dados em que se aplica aprendizado supervisionado: classificação e regressão.</p>

			<p>Um modelo de regressão seria capaz de estimar a renda de uma pessoa a partir de sua ocupação e sexo, mas outros modelos são possíveis. </p>
		</div>

		<!-- FORUM COLABORATIVO -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Descreva e compartilhe no <span class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" style="height:1.4em;width:auto;margin:0 -0.2em;" aria-hidden="true" />
				</span><strong>Fórum Colaborativo</strong> um exemplo prático aplicando aprendizado supervisionado que poderia ser gerado a partir da base de dados apresentada na tabela a seguir.
			</p>
		</div>
		<br>
		<!--FIM -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<table class="table">
				<caption class="table__title">Exemplo de base de dados no formato estruturado</caption>
				<tbody>
					<tr>
						<th scope="col">Idade</th>
						<th scope="col">Renda</th>
						<th scope="col">Ocupação</th>
						<th scope="col">Sexo</th>
						<th scope="col">Estado civil</th>
					</tr>
					<tr>
						<td scope="row" class="table__numeric-values">67</td>
						<td class="table__numeric-values">2.590</td>
						<td>Aposentada</td>
						<td>F</td>
						<td>Casada</td>
					</tr>
					<tr>
						<td scope="row" class="table__numeric-values">18</td>
						<td class="table__numeric-values">900</td>
						<td>Estagiário</td>
						<td>M</td>
						<td>Solteiro</td>
					</tr>
					<tr>
						<td scope="row" class="table__numeric-values">40</td>
						<td class="table__numeric-values">8.000</td>
						<td>Engenheiro</td>
						<td>M</td>
						<td>Casado</td>
					</tr>
					<tr>
						<td scope="row" class="table__numeric-values">1</td>
						<td class="table__numeric-values">-</td>
						<td>-</td>
						<td>F</td>
						<td>-</td>
					</tr>
				</tbody>
			</table>
			<br />

		</div>

		<!-- FIM QUESTÕES 5 e 6 -->

		<!-- FORUM COLABORATIVO -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<p>
				E então, como foi sua avaliação? Se você é praticamente um experto em identificar os tipos de dados, colabore trazendo mais informações e fontes de aprendizagem sobre o tema no <span class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" style="height:1.4em;width:auto;margin:0 -0.2em;" aria-hidden="true" />
				</span><strong>Fórum Colaborativo</strong> e respondendo as dúvidas apresentadas no fórum.
			</p>


			<p>Mas, caso você não se sinta tão por dentro do assunto, clique nos respectivos tipos para compreender melhor, converse com os mediadores e aproveite o <span class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" style="height:1.4em;width:auto;margin:0 -0.2em;" aria-hidden="true" />
				</span><strong>Fórum Colaborativo</strong> para promover a aprendizagem coletiva no grupo. Todas as dúvidas e dicas são importantes para o aprimoramento do curso.</p>
		</div>
		<!--FIM -->

		<!--MODAIS DADOS-->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<div style="display: flex">
				<div style="text-align:center">
					<img src="dist/img/un02/img02-03-estruturado.svg">
					<button class="btn modal_call" id="faq001">Dados <br /> estruturados</button>
				</div>

				<div style="text-align:center">
					<img src="dist/img/un02/img02-03-semiestruturado.svg">
					<button class="btn modal_call" id="faq002">Dados <br />semiestruturados</button>
				</div>

				<div style="text-align:center">
					<img src="dist/img/un02/img02-03-desestruturado.svg">
					<button class="btn modal_call" id="faq003">Dados <br />desestruturados</button>
				</div>
			</div>

		</div>
		<!--FIM -->



		<!-- Conteudo -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Ponto de reflexão</h2>
			<p>Quais são e onde estão os dados que o IBGE utiliza em seus diversos produtos e quais desafios essas fontes apresentam para extração e análise?</p>

			<p>É importante mencionar que a maioria das ferramentas e algoritmos de ciência de dados requer o uso de bases de dados do tipo estruturado. Quando os dados a serem analisados não são originalmente desse tipo (ou seja, se forem do tipo semiestruturado ou não estruturado), torna-se necessário convertê-los para o formato estruturado. O que será melhor explicado mais adiante.</p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>A maior parte da informação disponível no mundo não está - e, de fato, jamais esteve! - armazenada no formato estruturado. Ao invés disso, encontra-se disponibilizada digitalmente como texto e imagem: livros, jornais, revistas, páginas Web, perfis e posts de redes sociais, arquivos PDF, imagens do Instagram etc.</q>
			</aside>
			<!-- Realce [fim] -->

			<p>Muitos problemas atuais de ciência de dados são resolvidos com o uso de dados não estruturados, o que torna este tipo de dado muito importante.</p>

			<p>Dentro do IBGE há uma grande quantidade de imagens e de textos que pode ser utilizada para a construção de modelos potencialmente úteis para a instituição. No entanto, em comparação com o dado estruturado, textos, imagens, e outros tipos de dados não estruturados são bem mais difíceis de serem processados e analisados.</p>

			<p>Além disso, a maioria das ferramentas e algoritmos de ciência de dados não é capaz de processar dados não estruturados diretamente, exigindo com que estes sejam pré-processados, visando a sua transformação em dados do tipo estruturado.</p>

			<p>Quais são os principais desafios na sua área para utilização de dados não estruturados em processos de trabalho?</p>

		</div>

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h2 class="no-top-margin">Criando notebooks em python</h2>


			<!-- Lista de definicao [inicio] -->
			<dl class="definition-list">
				<dt>Com dados estruturados</dt>
				<dd>Para saber como importar e consultar dados estruturados, acesse o programa <a href="https://colab.research.google.com/drive/1HYBZXbOWWYQ2mdmo90Qipm4SdmUKbWhr?usp=sharing">“Módulo 2 Unidade 1(a) - Dados Estruturados.ipynb”</a> que está disponível no Google Colab.</dd>
			</dl>
			<!-- Lista de definicao [fim] -->
		</div>

		<!-- FORUM COLABORATIVO -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Para treinar, recrie o programa com outros exemplos da sua área de trabalho e compartilhe no <span class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" style="height:1.4em;width:auto;margin:0 -0.2em;" aria-hidden="true" />
				</span><strong>Fórum Colaborativo</strong>.
			</p>
		</div>
		<!--FIM -->

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<!-- Lista de definicao [inicio] -->

			<dl class="definition-list">
				<dt>Com dados semiestruturados</dt>
				<dd>Para saber como importar e consultar dados semiestruturados, acesse o programa <a href="https://colab.research.google.com/drive/1DX9POfuWoJzduCnFT6Ylqx7zVdE_4SFF?usp=sharing">“Módulo 2 Unidade 1(b) - Dados Semiestruturados.ipynb”</a> que está disponível no Google Colab. </dd>
			</dl>
			<!-- Lista de definicao [fim] -->
		</div>


		<!-- FORUM COLABORATIVO -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Para treinar, recrie o programa com outros exemplos da sua área de trabalho e compartilhe no <span class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" style="height:1.4em;width:auto;margin:0 -0.2em;" aria-hidden="true" />
				</span><strong>Fórum Colaborativo</strong>.
			</p>
		</div>
		<!--FIM -->


		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<!-- Lista de definicao [inicio] -->
			<dl class="definition-list">
				<dt>Com dados não estruturados</dt>
				<dd>Para saber como importar e consultar dados não estruturados, acesse o programa <a href="https://colab.research.google.com/drive/1DX9POfuWoJzduCnFT6Ylqx7zVdE_4SFF?usp=sharing">“Módulo 2 Unidade 1(c) - Dados Não Estruturados.ipynb”</a> que está disponível no Google Colab. </dd>
			</dl>
			<!-- Lista de definicao [fim] -->
		</div>


		<!-- FORUM COLABORATIVO -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Para treinar, recrie o programa com outros exemplos da sua área de trabalho e compartilhe no <span class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" style="height:1.4em;width:auto;margin:0 -0.2em;" aria-hidden="true" />
				</span><strong>Fórum Colaborativo</strong>.
			</p>
		</div>
		<!--FIM -->


		<!-- Conteudo -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2 class="no-top-margin">Compartilhando experiências</h2>
			<p>Você sabe criar notebooks em R? </p>
		</div>

		<!-- FORUM COLABORATIVO -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Para treinar, recrie o programa com outros exemplos da sua área de trabalho e compartilhe no <span class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" style="height:1.4em;width:auto;margin:0 -0.2em;" aria-hidden="true" />
				</span><strong>Fórum Colaborativo</strong>.
			</p>
		</div>
		<!--FIM -->
</main>

<!-- Janela modal 1[inicio] -->

<article class="modal" id="modal_faq001">
	<header class="modal__header">
		<h2 class="modal__heading-1">Dados estruturados</h2>
		<button class="btn modal__btn-close">Fechar</button>
	</header>
	<div class="row modal__content">
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<p>A vida seria bem mais fácil se todos os dados e informações viessem em ordem, como no caso dos dados estruturados. Por exemplo, uma planilha organizada com todas as informações que precisamos analisar para tomar decisão, criar um produto etc.
			<p>

			<p>Dados estruturados são aqueles representados no formato tabular (isto é, dispostos em linhas e colunas), possuindo uma estrutura fixa e pré-definida (cada linha – ou observação – segue o mesmo formato que as outras da tabela). Um exemplo é apresentado a seguir, que ilustra uma tabela contendo dados hipotéticos que poderiam ter sido coletados por uma pesquisa domiciliar do IBGE.</p>

			<!-- Tabela [inicio] -->
			<div class="table-container">
				<h5>Informações econômicas de um grupo de empresas do comércio atacadista de matérias-primas agrícolas e animais vivos.</h5>
				<table class="table">
					<tbody>
						<tr>
							<th scope="col">Idade</th>
							<th scope="col">Renda</th>
							<th scope="col">Ocupação</th>
							<th scope="col">Sexo</th>
							<th scope="col">Estado civil</th>
						</tr>
						<tr>
							<td scope="row" class="table__numeric-values">67</td>
							<td class="table__numeric-values">2.590</td>
							<td>Aposentada</td>
							<td>F</td>
							<td>Casada</td>
						</tr>
						<tr>
							<td scope="row" class="table__numeric-values">18</td>
							<td class="table__numeric-values">900</td>
							<td>Estagiário</td>
							<td>M</td>
							<td>Solteiro</td>
						</tr>
						<tr>
							<td scope="row" class="table__numeric-values">40</td>
							<td class="table__numeric-values">8.000</td>
							<td>Engenheiro</td>
							<td>M</td>
							<td>Casado</td>
						</tr>
						<tr>
							<td scope="row" class="table__numeric-values">1</td>
							<td class="table__numeric-values">-</td>
							<td>-</td>
							<td>F</td>
							<td>-</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- Tabela [fim] -->

			<p>Veja que a tabela com os dados da pesquisa possui 4 linhas e 5 colunas. Cada linha é utilizada para armazenar uma observação da base de dados enquanto as colunas são utilizadas para representar os atributos que descrevem as características das observações.</p>

			<p>No jargão da ciência de dados, uma observação também pode ser chamada de registro, tupla, objeto, instância, exemplo ou vetor de características (feature vector). </p>

			<p>Já um atributo pode também ser chamado de variável ou campo (field). Dessa forma, na tabela acima, cada observação corresponde a uma pessoa cujos dados foram coletados pela pesquisa. Cada pessoa é descrita por exatamente cinco atributos: idade, renda, ocupação, sexo e estado civil.</p>

			<p><strong>Vantagens:</strong></p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>torna difícil a representação de objetos cujo formato natural não seja tabular, tais como mapas, taxonomias e grafos (redes de nós interconectados); e </li>

				<li>força todos os objetos armazenados na tabela a compartilharem o mesmo conjunto de atributos, mesmo que alguns destes atributos não façam sentido para certos objetos. Por exemplo, a quarta linha da Tabela 1, armazena os dados de um bebê de 1 ano de idade. Este bebê compartilha desnecessariamente os atributos “renda”, “ocupação” e “estado civil” com os adultos armazenados na tabela (ainda que possuam valor nulo, os atributos existem na linha referente ao bebê).</li>

			</ul>
			<!-- Lista não ordenada [fim] -->

		</div>

	</div>
</article>

<!--FIM-->


<!-- Janela modal 2[inicio] -->

<article class="modal" id="modal_faq002">
	<header class="modal__header">
		<h2 class="modal__heading-1">Dados semiestruturados</h2>
		<button class="btn modal__btn-close">Fechar</button>
	</header>
	<div class="row modal__content">
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<p>Os dados semiestruturados possuem alguns atributos de descrição e uma estrutura flexível. Nos dias atuais, o principal modelo para a representação de dados semiestruturados é o <a hef="https://json-ld.org/">JSON (<i>Javascript Object Notation</i>)</a>, onde cada observação da base de dados é armazenada como um <strong>conjunto de pares atributo/valor</strong>.</p>

			<p>A técnica utilizada pelo JSON para representar informações é bastante simples, porém muito eficaz: para cada valor representado, atribui-se um nome de atributo (ou chave) que descreve o seu significado. Por exemplo, para representar a idade de 40 anos, utiliza-se a seguinte sintaxe: </p>

			<p>"idade": 40 </p>

			<p>Um par chave/valor deve ser representado pela chave entre aspas duplas, seguida de dois pontos, seguido do valor. Os valores podem possuir apenas 3 tipos básicos: numérico (inteiro ou real), booleano e <i>string</i>. A partir dos tipos básicos, é possível construir o tipo complexo “array”. Os arrays são delimitados por colchetes (entre os símbolos “[“ e “]”), com seus elementos separados entre vírgulas: </p>

			<p>"ocupacao": ["engenheiro", "professor", "cientista de dados"]</p>

			<p>A partir dos tipos básicos, também é possível construir o tipo complexo “objeto”. Objetos devem ser especificados entre chaves (entre os símbolos “{“ e “}”):

			<figure class="code-display">
				<figcaption>

					<p>&ensp;{</p>
					<p>&emsp;"idade": 40,</p>
					<p>&emsp;"renda": [8000, 1500, 3000],</p>
					<p>&emsp;"ocupacao": ["engenheiro", "professor", "cientista de dados"],</p>
					<p>&emsp;"sexo": "M",</p>
					<p>&emsp;"estado_civil": "Casado"</p>
					<p>&ensp;},</p>

				</figcaption>
			</figure>

			<p>Os objetos podem ser compostos por múltiplos pares chave/valor, por <i>arrays</i> e por outros objetos. Desta forma, uma base de dados de objetos JSON pode representar com facilidade conjuntos de dados tabulares ou não tabulares.</p>

			<p>Por exemplo, observe a seguir uma base de dados JSON contendo dados coletados por uma pesquisa referentes a quatro diferentes pessoas. Observe que a base de dados é representada como um <i>array</i> de objetos JSON:</p>

			<figure class="code-display">
				<figcaption>
					<p>[</p>
					<p>&emsp;{</p>
					<p>&emsp;&emsp;"idade": 67,</p>
					<p>&emsp;&emsp;"renda": 2550,</p>
					<p>&emsp;&emsp;"ocupacao": "aposentada",</p>
					<p>&emsp;&emsp;"sexo": "F",</p>
					<p>&emsp;&emsp;"estado_civil": "Casada"</p>
					<p>&ensp;},</p>

					<p>&ensp;{</p>
					<p>&emsp;&emsp;"idade": 18,</p>
					<p>&emsp;&emsp;"renda": [0, 900],</p>
					<p>&emsp;&emsp;"ocupacao": ["estudante", "estagiário"],</p>
					<p>&emsp;&emsp;"sexo": "M",</p>
					<p>&emsp;&emsp;"estado_civil": "Solteiro"</p>
					<p>&ensp;},</p>

					<p>&ensp;{</p>
					<p>&emsp;&emsp;"idade": 40,</p>
					<p>&emsp;&emsp;"renda": [8000, 1500, 3000],</p>
					<p>&emsp;&emsp;"ocupacao": ["engenheiro", "professor", "cientista de dados"],</p>
					<p>&emsp;&emsp;"sexo": "M",</p>
					<p>&emsp;&emsp;"estado_civil": "Casado"</p>
					<p>&ensp;},</p>

					<p>&ensp;{</p>
					<p>&emsp;&emsp;"idade": 1,</p>
					<p>&emsp;&emsp;"sexo": "F"</p>
					<p>&ensp;}</p>
					<p>]</p>
				</figcaption>
			</figure>

			<p><strong>Vantagens:</strong></p>
			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>natureza autodescritiva, o que significa que basta olhar para o arquivo para entender os dados representados;</li>

				<li>ao contrário do que ocorre com o formato tabular, o modelo JSON permite com que seja possível registrar com facilidade os dados de pessoas que possuem mais de uma ocupação, bastando para isso armazenar as descrições e rendas correspondentes de cada ocupação em <i>arrays</i>; e</li>

				<li>não exige que cada objeto da base compartilhe o mesmo conjunto de atributos. Veja que dessa vez, torna-se possível descrever o bebê utilizando apenas os atributos “idade” e “sexo” (uma vez que não faz sentido representar a “ocupação”, “renda” e “estado civil” para esta observação).</li>


			</ul>
			<!-- Lista não ordenada [fim] -->


			<p><strong>Desvantagens:</strong></p>
			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>a principal desvantagem do formato JSON em relação ao formato estruturado/tabular é que uma base de dados tabular é mais simples de ser visualizada e manipulada; e </li>

				<li>o modelo JSON exige que as chaves (nomes dos atributos) sejam armazenadas junto com os valores em todas as observações uma vez que diferentes observações podem ser descritas por diferentes conjuntos de atributos. Por isso, se diz que uma base de dados JSON possui estrutura flexível. Já no formato tabular, que possui estrutura rígida, basta uma única linha de cabeçalho para indicar os nomes de todos os atributos.</li>

			</ul>
			<!-- Lista não ordenada [fim] -->

			<p>Além do modelo JSON, outro modelo que pode ser empregado para a representação de dados não estruturados é XML (<i>eXtensible Markup Language</i>), onde as informações devem ser demarcadas entre tags. Um exemplo é apresentado abaixo, onde os dados de uma pessoa de 40 anos estão representados em XML. Compare com a representação JSON desta mesma pessoa demonstrada acima. </p>

			<figure>
				<img src="dist/img/un02/formula-02-03-json.svg">
			</figure>

			<p>Comparou? E então, qual dos dois modelos você achou mais interessante, JSON ou XML? </p>

			<p>É indiscutível que o modelo JSON se tornou mais popular nos últimos anos, provavelmente porque é capaz de representar informações semiestruturadas de uma maneira mais compacta e que muitos consideram mais elegante.</p>

			<!-- FORUM COLABORATIVO -->
			<div class="text-with-icon">
				<div class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" aria-hidden="true" />
				</div>
				<p class="pullquote">
					Quais você já conhecia e/ou utiliza? Fique à vontade para comentar no <strong>Fórum Colaborativo</strong>.
				</p>
			</div>
			<!--FIM -->


		</div>

	</div>
</article>

<!--FIM-->

<!-- Janela modal 3[inicio] -->
<article class="modal" id="modal_faq003">
	<header class="modal__header">
		<h2 class="modal__heading-1">Dados desestruturados</h2>
		<button class="btn modal__btn-close">Fechar</button>
	</header>
	<div class="row modal__content">
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Muitas aplicações importantes da ciência de dados precisam fazer uso de dados como imagens, textos, vídeo e áudio, que não contêm nenhuma marca de estruturação (atributos pré-definidos), sendo por isso chamados de dados não estruturados. A seguir, são apresentados três exemplos de problemas reais e modernos de ciência de dados resolvidos com o uso de dados não estruturados:</p>

			<ul class="bulleted-list">
				<li>um sistema que recebe como entrada a foto do rosto de uma pessoa e, como saída, retorna a sua idade estimada (observe que se trata de um problema de regressão);</li>

				<li>um aplicativo que “ouve” uma música e a classifica com um ou mais dos seguintes rótulos: “relaxante”, “alegre”, “triste” ou “dançante” (neste caso, trata-se de um problema de classificação); e</li>

				<li>um sistema de classificação que recebe um conjunto de textos do twitter contendo comentários sobre um determinado produto, e classifica cada um deles como “positivo” ou “negativo” (esse tipo de sistema é chamado de analisador de sentimentos).</li>
			</ul>

			<p>Observe abaixo um exemplo hipotético de base de dados não estruturada. Considere que ela armazena os comentários de 4 diferentes pessoas que preencheram o questionário de uma pesquisa do IBGE através do sistema online na Internet e as respectivas classificações de cada comentário como POSITIVO ou NEGATIVO.

			<ul class="numeric-list">
				<li> “Fácil e prático, parabéns IBGE!! Achei ótimo mesmo, parabéns!!”, POSITIVO</li>
				<li>“Não tive nenhuma dificuldade para realizar o preenchimento. Concluí o processo em 5 minutos”, POSITIVO
				<li>“Achei o questionário grande demais. Ele travou no meio do processo :(”, NEGATIVO</li>
				<li>“Gostaria de parabenizar o IBGE pela novidade, é mais prático preencher a pesquisa pela Internet”, POSITIVO</li>
				</li>

				<p>A partir dessa base de dados, seria possível construir um modelo de análise de sentimentos capaz de classificar cada um dos comentários como “POSITIVO” ou “NEGATIVO”. Assim, seria possível monitorar em tempo real a opinião das pessoas sobre o sistema para preenchimento da pesquisa através da Internet.</p>


		</div>
</article>

<!--FIM-->




<!-- Janela modal 4[inicio] -->

<article class="modal" id="modal_faq004">
	<header class="modal__header">
		<h2 class="modal__heading-1">Para saber mais </h2>
		<button class="btn modal__btn-close">Fechar</button>
	</header>
	<div class="row modal__content">
		<div class="col-xs-24">
			<p><a href="https://esr.rnp.br/ciencia-de-dados/dados-estruturados-nao-estruturados-e-semiestruturados/">Artigo: Dados estruturados, não-estruturados e semiestruturados: diferenças e similaridades </a></p>

			<p><a href="https://www.mongodb.com/unstructured-data">Artigo: Dados não estruturados</a>.</p>

			<p><a href="https://www.ibm.com/cloud/blog/structured-vs-unstructured-data">Artigo: Dados estruturados vs dados não estruturados</a> </p>

			<p><a href=" https://www.digitalhouse.com/br/blog/dataset/">Artigo: Datasets: entenda o que são e suas principais características</a> </p>

			<p><a href="https://www.linkedin.com/learning-login/share?forceAccount=false&amp;redirect=https%3A%2F%2Fwww.linkedin.com%2Flearning%2Ffundamentos-do-big-data-tecnicas-e-conceitos%3Ftrk%3Dshare_ent_url%26shareId%3DxwCSWRGLTBuvAX5V%252BAbkzQ%253D%253D">Vídeo: Fundamentos do Big Data: Técnicas e Conceitos</a></p>

			<p><a href="https://escoladedados.org/tutoriais/visualizacao-de-dados-multidimensionais-uma-abordagem-mao-na-massa/">Tutorial: VISUALIZAÇÃO DE DADOS MULTIDIMENSIONAIS – UMA ABORDAGEM MÃO NA MASSA</a></p>

			<p><a href="https://escoladedados.org/tutoriais/visualizando-dados-nao-estruturados/">Tutorial: VISUALIZANDO DADOS NÃO ESTRUTURADOS</a></p>

			<p><a href="https://www.json.org/json-en.html">Site: Especificação JSON (página oficial do projeto)</a> ou o pequeno tutorial apresentado em <a href="https://www.devmedia.com.br/json-tutorial/25275]">https://www.devmedia.com.br/json-tutorial/25275</a></p>

			<p><a href="http://www.ic.uff.br/~vanessa/papers/moro2009-jai.pdf ">Minicurso: “Desmistificando XML: da Pesquisa à Prática Industrial”</a></p>

			<p><a href="https://developers.google.com/search/docs/advanced/guidelines/how-search-works?hl=pt-br">Página: Como a pesquisa google funciona </p>

		</div>
	</div>
</article>
<!-- Janela modal [fim] -->



</main>

<article class="modal" id="modal_retry">
	<header class="modal__header" style="padding-bottom:0;">
		<h2 class="modal__heading-1">Atenção</h2>
		<button class="btn modal__btn-close">Fechar</button>
	</header>
	<p>Você não selecionou a opção correta. Tente novamente!</p>
</article>

<?php
include "foot.php";
?>

<!-- Inclua o script a seguir para utilizar os exercicios -->
<script src="dist/js/exercises.min.js"></script>

<script>
	$('#exercise04 .relate-cols__input').keyup(function() { // Relacionar colunas: limite de caracteres
		this.value = this.value.replace(/[^1-5\.]/g, '');
	});
	// Tooltip
	$('.tooltip001').tooltipster({
		maxWidth: 300
	});
	$('.tooltip002').tooltipster({
		maxWidth: 300
	});
	$('.tooltip003').tooltipster({
		maxWidth: 300
	});
	$('.tooltip004').tooltipster({
		maxWidth: 300
	});
	$('.tooltip005').tooltipster({
		maxWidth: 300
	});
	$('.tooltip006').tooltipster({
		maxWidth: 300
	});
	$('.tooltip007').tooltipster({
		maxWidth: 300
	});
	$('.tooltip008').tooltipster({
		maxWidth: 300
	});
	$('.tooltip009').tooltipster({
		maxWidth: 300
	});
	$('.tooltip010').tooltipster({
		maxWidth: 300
	});
</script>

<script>
	var $btns = document.querySelectorAll('.btn-show-content');
	$btns.forEach($btn => {
		$btn.addEventListener('click', () => {
			const id = $btn.getAttribute('target');
			const $target = document.querySelector('#' + id);
			if ($target) {
				$target.removeAttribute('style');
			}
		}, {
			once: true
		})
	})
</script>

<script src="dist/js/vendor/prism.js"></script>

</body>

</html>