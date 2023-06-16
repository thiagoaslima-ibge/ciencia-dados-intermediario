<?php
// Titulo da unidade
$moduleTitle = "Pré-processamento de dados";
// Titulo do topico
$topicTitle = "Identificação e conversão de tipos de dados";
// Titulo da pagina
$pageTitle = "Matriz Documento-Termo";
// Subtitulo da pagina
$pageSubtitle = "Como aplicar na estruturação de dados textuais";
// Inclusao do cabeçalho do curso	
include "head.php";
?>

<style>
	.empty-input {
		display: block;
		width: 100%;
		height: 100%;
		border: none;
		border-bottom: 1px solid lightgray;
		background: transparent;
	}

	#exercise-01 tr,
	#resposta001 tr {
		height: 72px;
	}
</style>

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

			<p>Você sabe como o google tradutor funciona?</p>

			<p>Veja no vídeo a seguir:</p>

			<!-- Video incorporado (YouTube) [inicio] -->
			<div class="video-wrapper">
				<div class="video-wrapper__iframe video-wrapper__iframe--focusable" id="youtube-video--example01"></div>
			</div>
			<!-- Video incorporado (YouTube) [fim] -->

			<p>Com o crescente aumento do volume e variedade de textos digitais produzidos dentro das organizações, as técnicas para pré-processamento de texto têm se tornado uma das mais importantes ferramentas da ciência de dados. </p>

			<p>Tais técnicas têm por objetivo transformar o texto escrito em linguagem natural (Português, Inglês, Espanhol etc.) para um formato de representação que possa ser usado por algoritmos que realizam o aprendizado de modelos supervisionados e não supervisionados. </p>

			<p>Você sabe quais são e como aplicá-las com o objetivo de converter textos em uma matriz numérica, conhecida como Matriz Documento-Termo?</p>

			<p>Qualquer aplicação que envolva o <span class="ttorigin tooltip001" data-tooltip-content="#tooltip001_content">Processamento de Linguagem Natural – PLN (em inglês, NLP – <i>natural language processing</i>)</span> fará uso de um <strong>corpus</strong>.</p>

			<p>Um corpus é simplesmente a coleção de textos que compõem os dados fonte (ou “dados crus” – <i>raw data</i>) para a criação de um modelo. </p>

			<p>O tamanho e a complexidade dos textos que formam o corpus variam de aplicação para aplicação. Por exemplo, se o objetivo é construir um modelo para detecção de plágio em TCCs de alunos da ENCE, o corpus deverá ser formado por um conjunto de artigos, livros, monografias, dissertações, teses etc. </p>

			<p>Se, por outro lado, deseja-se construir um analisador de sentimentos de mensagens do twitter (por exemplo, comentários de diferentes pessoas a respeito do IBGE ou sobre o último Censo Demográfico), o corpus deverá ser formado por um conjunto de postagens de usuários nesta rede social. </p>

			<p>Note que, no caso da primeira aplicação, o corpus será formado por documentos grandes, escritos com uma linguagem mais formal enquanto no segundo caso o corpus será composto por textos curtos em linguagem informal. </p>

			<p>Em aplicações de processamento de linguagem natural, um texto é chamado de <strong>documento</strong>, mesmo que, na prática, ele represente algo mais simples, como um post ou comentário em uma rede social. Sendo assim, podemos definir corpus como uma coleção de documentos. </p>

			<p>Observe, a seguir, um exemplo de corpus formado por 4 documentos. Suponha que cada um deles corresponda a um comentário de um informante que preencheu o questionário de uma pesquisa do IBGE através de um sistema na Internet:</p>
			<br />

			<ul class="numeric-list">
				<li>“Fácil e prático, parabéns IBGE!! Achei ótimo mesmo, parabéns!!”</li>
				<li>“Não tive nenhuma dificuldade para realizar o preenchimento. Concluí o processo em 5 minutos”</li>
				<li>“Achei o questionário grande demais. Ele travou no meio do processo :(”</li>
				<li>“Gostaria de parabenizar o IBGE pela novidade, é mais prático preencher a pesquisa pela Internet”</li>
			</ul>

			<p>Uma abordagem muito utilizada para estruturar os documentos do corpus consiste em modelar cada um deles como uma estrutura conhecida como <strong>bag of words (BOW)</strong>, literalmente um “saco de palavras”. Trata-se de um vetor que registra a frequência de cada palavra do documento. </p>
		</div>


		<!-- ATIVIDADE INTERATIVA 7 -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<p>Utilizando o exemplo anterior, como você acha que ficaria o vetor BOW correspondente ao texto “Fácil e prático, parabéns IBGE!! Achei ótimo mesmo, parabéns!!” em ordem alfabética? Preencha o quadro a seguir e depois clique em <strong>Visualizar Resposta</strong> para comparar:</p>

			<h5><i>Bag of words</i> (BOW) da frase “Fácil e prático, parabéns IBGE!! Achei ótimo mesmo, parabéns!!”</h5>
			<div style="display:grid; grid-template-columns: 1fr 1fr; gap: 15px; align-items: flex-start;">
				<form id="exercise-01">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Palavra</th>
								<th scope="col">Número de ocorrências</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<input type="text" class="empty-input" />
								</td>
								<td class="table__numeric-values">
									<input type="text" class="empty-input" />
								</td>
							</tr>

							<tr>
								<td>
									<input type="text" class="empty-input" />
								</td>
								<td class="table__numeric-values">
									<input type="text" class="empty-input" />
								</td>
							</tr>

							<tr>
								<td>
									<input type="text" class="empty-input" />
								</td>
								<td class="table__numeric-values">
									<input type="text" class="empty-input" />
								</td>
							</tr>

							<tr>
								<td>
									<input type="text" class="empty-input" />
								</td>
								<td class="table__numeric-values">
									<input type="text" class="empty-input" />
								</td>
							</tr>
							<tr>
								<td>
									<input type="text" class="empty-input" />
								</td>
								<td class="table__numeric-values">
									<input type="text" class="empty-input" />
								</td>
							</tr>

							<tr>
								<td>
									<input type="text" class="empty-input" />
								</td>
								<td class="table__numeric-values">
									<input type="text" class="empty-input" />
								</td>
							</tr>

							<tr>
								<td>
									<input type="text" class="empty-input" />
								</td>
								<td class="table__numeric-values">
									<input type="text" class="empty-input" />
								</td>
							</tr>

							<tr>
								<td>
									<input type="text" class="empty-input" />
								</td>
								<td class="table__numeric-values">
									<input type="text" class="empty-input" />
								</td>
							</tr>

						</tbody>
					</table>
				</form>

				<table class="table" id="resposta001" style="display:none">
					<thead>
						<tr>
							<th scope="col">Palavra</th>
							<th scope="col">Número de ocorrências</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>achei</td>
							<td class="table__numeric-values">1</td>
						</tr>

						<tr>
							<td>e</td>
							<td class="table__numeric-values">1</td>
						</tr>

						<tr>
							<td>fácil</td>
							<td class="table__numeric-values">1</td>
						</tr>

						<tr>
							<td>ibge</td>
							<td class="table__numeric-values">1</td>
						</tr>
						<tr>
							<td>mesmo</td>
							<td class="table__numeric-values">1</td>
						</tr>

						<tr>
							<td>ótimo</td>
							<td class="table__numeric-values">1</td>
						</tr>

						<tr>
							<td>parabéns</td>
							<td class="table__numeric-values">2</td>
						</tr>

						<tr>
							<td>prático</td>
							<td class="table__numeric-values">1</td>
						</tr>

					</tbody>
				</table>
			</div>
			<br />

			<button type="button" class="btn btn--main" data-show-resposta target="resposta001" onclick="checkExerciseCompletion()">Visualizar resposta</button>
			<br />
			<br />
		</div>

		<!-- FIM DA ATIVIDADE-->


		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Mas como gerar os BOWs?</p>

			<p>O primeiro e mais importante passo é identificar e separar cada <span class="ttorigin tooltip002" data-tooltip-content="#tooltip002_content"><i>token</i></span> presente no documento. Essa tarefa é conhecida como tokenização.</p>

			<p>Em geral, converte-se o texto original para minúsculo e removem-se os sinais de pontuação. Em seguida, a separação dos tokens se torna trivial.</p>

			<p>O segundo passo da etapa de pré-processamento consiste em garantir que os vetores BOW não sejam preenchidos com palavras desnecessárias. </p>

			<p>Mas o que seriam estas palavras desnecessárias?</p>

			<p>São palavras muito frequentes, porém utilizadas apenas para ajudar a construir frases, tais como artigos, preposições, pronomes etc. Essas palavras normalmente não são tão discriminativas quanto substantivos, verbos e adjetivos, sendo conhecidas como <i>stop words</i>.</p>

			<p>O BOW apresentado acima, por exemplo, contém a conjunção “e”, que é um exemplo de <i>stop word</i>.</p>

			<p>As ferramentas de ciência de dados geralmente oferecem ao usuário a possibilidade de aplicar <i>stop lists</i> ao processo de geração de BOWs. </p>

			<p>A <i>stop list</i> é uma espécie de dicionário contendo a relação de stop words para um determinado idioma, ou seja, ela contém as palavras que serão descartadas de qualquer BOW. </p>

			<p>Um exemplo de <i>stop list</i> para o idioma português é mostrado a seguir: </p>

			<!-- Bloco de codigo [inicio] -->
			<p>
				<code class="code-display">
					<pre>["a", "as",  "e",  "eu", "ele",  "este",  ..."um", "uns"] </pre>
				</code>
			</p>
			<!-- Bloco de codigo [fim] -->


			<p>Um último passo que pode ser executado na etapa de pré-processamento é a redução das variações linguísticas, visando diminuir o número de itens lexicais (tokens) presentes nos BOWs. </p>

			<p>Dentre as possíveis maneiras de alcançar este objetivo, pode-se por exemplo aplicar a operação conhecida como <i>stemming</i>.</p>


			<p>Trata-se do processo de utilizar um algoritmo (denominado <i>stemmer</i>) capaz de transformar formas variantes das palavras (plural, feminino, gerúndio etc.) para uma representação única e concisa, denominada <i>stem</i>. Um exemplo é apresentado no quadro a seguir: </p>

			<h5>Exemplo de Stems</h5>

			<table class="table">
				<thead>
					<tr>
						<th scope="col">Palavra</th>
						<th scope="col">Stem</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>pesquisa</td>
						<td>pesquis</td>
					</tr>

					<tr>
						<td>pesquisas</td>
						<td>pesquis</td>
					</tr>

					<tr>
						<td>pesquisar</td>
						<td>pesquis</td>
					</tr>

					<tr>
						<td>pesquisado</td>
						<td>pesquis</td>
					</tr>
				</tbody>
			</table>

			<br>

		</div>

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<p>Para gerar um BOW, o único passo obrigatório é a tokenização. A remoção de <i>stop words</i> é quase sempre realizada, porém é opcional. O processo de <i>stemming</i> também é opcional e nem sempre precisa ser executado. </p>

			<p>Uma vez que um BOW tenha sido construído para cada documento do corpus, podemos finalmente obter uma versão estruturada do corpus, representada sob a forma de uma <strong>Matriz Documento-Termo</strong> (<i>Document-Term Matrix</i> – DTM). </p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>Trata-se de uma matriz onde cada documento é tratado como uma observação e o conjunto de todos os termos distintos identificados formam o conjunto de variáveis do problema.</q>
			</aside>
			<!-- Realce [fim] -->

			<p>Mais especificamente, na DTM cada linha i é um documento di e cada coluna j é um termo tj e os valores de cada célula i,j correspondem ao número de vezes em que o termo tj aparece no documento di.</p>

			<p>Para que o conceito fique claro, analise a Matriz Documento-Termo (DTM) abaixo e complete as lacunas logo a seguir com as informações da tabela:</p>

			<h5>Matriz Documento-Termo (DTM)</h5>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">documento/termos</th>
						<th scope="col" style="text-align:right" class="table__numeric-values">t1</th>
						<th scope="col" style="text-align:right" class="table__numeric-values">t2</th>
						<th scope="col" style="text-align:right" class="table__numeric-values">t3</th>
						<th scope="col" style="text-align:right" class="table__numeric-values">t4</th>
						<th scope="col" style="text-align:right" class="table__numeric-values">t5</th>
					</tr>
				</thead>
				<tbody>

					<tr>
						<td>d1</td>
						<td class="table__numeric-values">6</td>
						<td class="table__numeric-values">3</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">3</td>
						<td class="table__numeric-values">10</td>
					</tr>

					<tr>
						<td>d2</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">7</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">16</td>
					</tr>

					<tr>
						<td>d3</td>
						<td class="table__numeric-values">2</td>
						<td class="table__numeric-values">5</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">11</td>
					</tr>

				</tbody>
			</table>
			<br>
		</div>


		<!-- ATIVIDADE INTERATIVA 8 -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h4>Exercício - complete as lacunas</h4>

			<form id="exercio-02">
				A tabela apresenta um exemplo de Matriz Documento-Termo que poderia ter sido gerada a partir de um corpus composto por
				<input type="text" name="02-01" inputmode="numeric" style="width:3ch;text-align:right;"></input>
				documentos e <input type="text" name="02-02" inputmode="numeric" style="width:3ch;text-align:right;"></input> diferentes termos.</p>

				<p>Nesta matriz, tem-se por exemplo que o termo t1 ocorre <input type="text" name="02-03" inputmode="numeric" style="width:3ch;text-align:right;"></input> vezes no documento d1,
					<input type="text" name="02-04" inputmode="numeric" style="width:3ch;text-align:right;"></input> vezes no documento d2 e
					<input type="text" name="02-05" inputmode="numeric" style="width:3ch;text-align:right;"></input> vezes no documento d3.
				</p>
			</form>

			<button type="button" class="btn btn--main" data-show-resposta target="resposta002" onclick="checkExerciseCompletion()">Visualizar resposta</button>
			<p id="resposta002" style="display: none;"> Resposta: 3, 5, 6, 0 e 2 </p>

			<br />
			<br />

			<p>Em vez das frequências dos termos, também é possível utilizar outros valores nas células da DTM. Por exemplo, é possível gerar uma <strong>DTM binária</strong>, onde cada célula irá apenas indicar se um termo está ou não contido no respectivo documento, desconsiderando a sua frequência, conforme tabela a seguir:</p>

			<h4 class="img-container__img-src">DTM binária </h4>
			<table class="table">
				<thead>
					<tr>
						<th scope="col">documento/termos</th>
						<th scope="col" style="text-align:right" class="table__numeric-values">t1</th>
						<th scope="col" style="text-align:right" class="table__numeric-values">t2</th>
						<th scope="col" style="text-align:right" class="table__numeric-values">t3</th>
						<th scope="col" style="text-align:right" class="table__numeric-values">t4</th>
						<th scope="col" style="text-align:right" class="table__numeric-values">t5</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>d1</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">1</td>
					</tr>

					<tr>
						<td>d2</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">1</td>
					</tr>

					<tr>
						<td>d3</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">1</td>
					</tr>

				</tbody>
			</table>

			<br>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>Apesar de descartar informações relevantes (a frequência das palavras), a DTM binária oferece a vantagem de ser mais simples e, muitas vezes, é suficiente para a resolução de certos tipos de problemas.</q>
			</aside>
			<!-- Realce [fim] -->

		</div>
		<!-- FIM DA ATIVIDADE -->

		<!-- ATIVIDADE INTERATIVA 9 -->
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<h4>Exercicio</h4>

			<p>Para exercitar um pouco a aplicação da técnica, insira os dados da DTM correspondente do corpus abaixo, descartando as stop words e depois clique em <strong>Visualizar Resposta</strong> para comparar.</p>

			<p>d1: Pesquisa Anual de Serviços - PAS</p>
			<p>d2: Pesquisa de Serviços de Hospedagem – PSH</p>
			<p>d3: Pesquisa Anual de Comércio – PAC</p>
		</div>

		<div class="col-xs-14 col-xs-offset-5">
			<form>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">&nbsp;</th>
							<th scope="col" style="text-align:right">
								<input type="text" class="empty-input" />
							</th>
							<th scope="col" style="text-align:right">
								<input type="text" class="empty-input" />
							</th>
							<th scope="col" style="text-align:right">
								<input type="text" class="empty-input" />
							</th>
							<th scope="col" style="text-align:right">
								<input type="text" class="empty-input" />
							</th>
							<th scope="col" style="text-align:right">
								<input type="text" class="empty-input" />
							</th>
							<th scope="col" style="text-align:right">
								<input type="text" class="empty-input" />
							</th>
							<th scope="col" style="text-align:right">
								<input type="text" class="empty-input" />
							</th>
							<th scope="col" style="text-align:right">
								<input type="text" class="empty-input" />
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>d1</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
						</tr>

						<tr>
							<td>d2</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
						</tr>

						<tr>
							<td>d3</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
							<td class="table__numeric-values">
								<input type="text" class="empty-input" />
							</td>
						</tr>

					</tbody>
				</table>
			</form>
		</div>

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<br /><br />
			<button type="button" class="btn btn--main" data-show-resposta target="resposta003" onclick="checkExerciseCompletion()">Visualizar resposta</button>
			<br /><br />
		</div>

		<div id="resposta003" class="col-xs-14 col-xs-offset-5" style="display: none;">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">&nbsp;</th>
						<th scope="col" style="text-align:right">anual</th>
						<th scope="col" style="text-align:right">comércio</th>
						<th scope="col" style="text-align:right">hospedagem</th>
						<th scope="col" style="text-align:right">pac</th>
						<th scope="col" style="text-align:right">pas</th>
						<th scope="col" style="text-align:right">pesquisa</th>
						<th scope="col" style="text-align:right">psh</th>
						<th scope="col" style="text-align:right">serviço</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>d1</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">1</td>
					</tr>

					<tr>
						<td>d2</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">1</td>
					</tr>

					<tr>
						<td>d3</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">1</td>
						<td class="table__numeric-values">0</td>
						<td class="table__numeric-values">0</td>
					</tr>

				</tbody>
			</table>
		</div>

		<br />
		<br />

	</div>
	<!-- FIM DA ATIVIDADE -->


	<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

		<p>Como foi o resultado?</p>
		<p>
			Colabore com a construção do curso, descrevendo no <span class="icon-container">
				<img src="dist/img/un02/icone-colab.svg" style="height:1.4em;width:auto;margin:0 -0.2em;" aria-hidden="true" />
			</span><strong>Fórum Colaborativo</strong> um ou mais casos de utilização das técnicas em processos de trabalho na sua área de atuação.
		</p>



		<h2>Compartilhando experiências</h2>

		<p>Você já utiliza a Matriz Documento-Termo nos seus processos de trabalho?</p>

		<p>
			Colabore com a construção do curso, descrevendo no <span class="icon-container">
				<img src="dist/img/un02/icone-colab.svg" style="height:1.4em;width:auto;margin:0 -0.2em;" aria-hidden="true" />
			</span><strong>Fórum Colaborativo</strong> um ou mais casos de utilização das técnicas em processos de trabalho na sua área de atuação.
		</p>

		<button class="btn modal_call" id="faq001">Abrir modal</button>

	</div>
	</div>

</main>

<!-- Conteudo dos tooltips [inicio] -->
<div class="tooltip_templates">
	<span id="tooltip001_content">Vertente da inteligência artificial que ajuda computadores a entender, interpretar e manipular a linguagem humana.</span>
	<span id="tooltip002_content">uma palavra ou termo do documento.</span>
</div>
<!-- Conteudo dos tooltips [fim] -->




<!-- Janela modal 1 [inicio] -->

<article class="modal" id="modal_faq001">
	<header class="modal__header">
		<h2 class="modal__heading-1">Para saber mais </h2>
		<button class="btn modal__btn-close">Fechar</button>
	</header>
	<div class="row modal__content">
		<div class="col-xs-24">

			<p><a href="https://www.kdnuggets.com/2017/12/general-approach-preprocessing-text-data.html">Artigo: Uma abordagem geral para o pré-processamento de dados de texto</a></p>

			<p><a href="https://www.youtube.com/watch?v=ivTIgsLUfc4">Vídeo: Introdução ao processamento de linguagem natural: pipeline geral para trabalhar com textos</a></p>

			<p><a href="https://www.youtube.com/watch?v=RVx_QYZPGaU">Vídeo: TF-IDF (Term Frequency - Inverse Document Frequency)</a></p>

			<p><a href="http://infolab.stanford.edu/~ullman/mmds/ch1n.pdf">Capítulo de Livro: Mining of Massive Datasets (Cap. 1 – Seção 1.3.1) - Importance of Words in Documents </a></p>

		</div>
	</div>
</article>
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
	/* Configuracao e ativacao da incorporacao de video do YouTube [inicio] */
	function onYouTubeIframeAPIReady() {
		//Funcao que cria o player do YouTube. O primeiro parametro e o elemento, o segundo a ID do video
		buildYouTubePlayer('youtube-video--example01', '_GdSC1Z1Kzsp');
	};
</script>


<script>
	function ex02() {

	}
	var $btns = document.querySelectorAll('[data-show-resposta]');
	$btns.forEach(function($btn) {
		$btn.addEventListener('click', function() {
			var target = $btn.getAttribute('target');
			var $target = document.querySelector('#' + target);
			if ($target) {
				$target.removeAttribute('style');
			}
		})
	})
</script>

</body>

</html>