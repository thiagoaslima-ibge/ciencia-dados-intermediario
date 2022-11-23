<?php
// Titulo da unidade
$moduleTitle = "";
// Titulo do topico
$topicTitle = "Métodos de classificação";
// Titulo da pagina
$pageTitle = "Algoritmos de classificação: Árvores de Decisão";
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
			<p>Grande parte dos algoritmos de classificação propostos na literatura baseia-se na construção de <strong>modelos caixa-preta</strong>. Isto é: modelos projetados para maximizar o desempenho preditivo (acurácia) do classificador, mas que não explicam suas previsões de uma maneira que os humanos possam entender.</p>
			<p>No entanto, para as instituições governamentais, por questões legais, éticas e de transparência, oferecer ferramentas para que usuários possam interpretar as classificações produzidas por um modelo costuma representar algo tão importante quanto a própria acurácia do modelo. Em outras palavras, grande parte dos problemas no âmbito da administração pública requer a utilização de <strong>modelos de classificação interpretáveis</strong>. Um classificador interpretável possui a habilidade de “explicar” as suas classificações para os usuários através, por exemplo, da apresentação de regras de classificação no formato: <span class="code-inline">SE &lt;condição&gt; ENTÃO &lt;rótulo(s) de classe&gt;</span>.</p>
			<p>No campo da ciência de dados, a técnica de árvore de decisão (AD) é a mais conhecida e utilizada para o aprendizado de classificadores interpretáveis. Isto é justificado pelo fato de as ADs possuírem uma estrutura gráfica e intuitiva, que representa um conjunto de regras de classificação e é semelhante a um fluxograma, tornando natural a interpretação do modelo de classificação. A Figura 3 mostra um exemplo baseado em uma AD real, extraída a partir de dados da Pesquisa Mensal de Empregos, que classifica o tipo de ocupação de trabalhadores analfabetos como “trabalhador doméstico” em função de seu sexo e idade. Esta árvore revela que, de acordo com a base de dados da PME, mulheres acima dos 60 anos <em>têm maior chance</em> de exercer trabalho doméstico, ao contrário das mulheres abaixo dessa idade e dos homens.</p>
		</section>

		<!-- Imagem média [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right">
				<picture>
					<img class="image" src="dist/img/un03/figura03.svg" alt="Descrição da imagem.">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Figura 3: Árvore de decisão que classifica trabalhadores analfabetos como pessoa que executa serviço doméstico ou não.
			</figcaption>
		</figure>
		<!-- Imagem média [fim] -->

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Observe atentamente a figura. Uma AD é uma estrutura que possui as seguintes características:</p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>É desenhada com a raiz no topo e as folhas na parte inferior. Sendo assim, a raiz dessa árvore é o atributo “Sexo”.</li>
				<li>Cada nó interno (representado como um retângulo na Figura 3) consiste em um teste sobre um atributo preditivo (neste caso, os atributos “Sexo” e “Idade”).</li>
				<li>Uma ramificação, partindo de um nó interno, representa um resultado para o teste (por exemplo, Idade ≤ 60) </li>
				<li>Cada nó folha representa um rótulo de classe (neste exemplo, Trabalhador Doméstico = “Sim” ou Trabalhador Doméstico = “Não”). </li>
				<li>Um novo objeto é classificado seguindo um caminho na árvore, do nó raiz até um nó folha. </li>
			</ul>
			<!-- Lista não ordenada [fim] -->

			<p>Uma AD é formada por um conjunto de regras de classificação, uma vez que existe sempre um único caminho da raiz para cada folha e este caminho representa uma expressão da regra utilizada para classificar um objeto. Folhas diferentes podem produzir a mesma classificação, mas cada uma por uma razão diferente (pois cada caminho representa uma regra diferente). Por exemplo, a AD da Figura 3 é composta por três regras:</p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>SE (Sexo = ‘M’) ENTÃO (Trabalhador Doméstico = ‘Não’)</li>
				<li>SE (Sexo = ‘F’) e (Idade ≤ 60) ENTÃO (Trabalhador Doméstico = ‘Não’)</li>
				<li>SE (Sexo = ‘F’) e (Idade > 60) ENTÃO (Trabalhador Doméstico = ‘Sim’)</li>
			</ul>
			<!-- Lista não ordenada [fim] -->

			<p>
				Nas últimas décadas, diversos algoritmos para o aprendizado de ADs foram propostos, sendo os algoritmos CHAID, C4.5 e CART os mais conhecidos. Neste curso, apresentaremos o algoritmo CART, uma vez que ele possui implementações em código aberto nas linguagens R e Python que são muito populares entre os cientistas de dados. Para aprender sobre os algoritmos CHAID e C4.5 você pode consultar os links <a href="https://sefiks.com/2020/03/18/a-step-by-step-chaid-decision-tree-example/">https://sefiks.com/2020/03/18/a-step-by-step-chaid-decision-tree-example/</a>
				e <a href="https://www.futurelearn.com/info/courses/data-mining-with-weka/0/steps/25391">https://www.futurelearn.com/info/courses/data-mining-with-weka/0/steps/25391</a>, respectivamente. Na subseção a seguir, vamos mostrar como o CART constrói uma árvore de decisão.
			</p>
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Etapa de treinamento</h2>

			<p>Uma AD é composta por uma série de questões. A resposta da primeira questão determina a questão seguinte, e assim sucessivamente até que um nó folha seja alcançado. Caso as questões sejam bem formuladas (na melhor ordem possível), um pequeno número delas poderá ser suficiente para classificar corretamente um objeto.</p>
			<p>Portanto, um aspecto fundamental para a construção de uma AD consiste na estratégia para a escolha dos atributos preditivos que estarão mais próximos da raiz da árvore (ou seja, os atributos que são inicialmente avaliados para determinar a classe à qual um objeto pertence). Uma <strong>medida de seleção de atributos</strong> (também chamada de medida de diversidade) é utilizada durante a construção da árvore para produzir um ranking de atributos preditivos. O atributo com melhor escore no ranking é aquele que consegue realizar o melhor trabalho de produzir nós mais puros (nós que separem os objetos da base de treino em grupos onde um único rótulo de classe predomine). Em outras palavras, é o atributo que diminui ao máximo a diversidade dos objetos de treino. Os conceitos de impureza e pureza são exemplificados na Figura 4. Neste exemplo, considere um BD com 18 observações cujo atributo classe possui dois rótulos: “S” ou “N”. No lado esquerdo da figura, temos um exemplo de divisão impura, em que não há predominância de nenhum rótulo classe nas partições produzidas. Já no lado direito, temos um exemplo de divisão que gera partições puras, ou seja, partições em que há predominância de um rótulo de classe.</p>
		</section>

		<!-- Imagem média [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right">
				<picture>
					<img class="image" src="dist/img/un03/figura04.svg" alt="Descrição da imagem.">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Figura 4: Partições impuras versus partições puras
			</figcaption>
		</figure>
		<!-- Imagem média [fim] -->

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>O algoritmo CART utiliza o índice de Gini para computar a impureza das partições geradas por um atributo. A fórmula é apresentada a seguir. Considere que <i>m</i> é o número de classes e <i>p<sub>i</sub></i> é a probabilidade de um objeto <i>t</i> pertencer à classe <i>y<sub>i</sub></i> no conjunto de dados <i>D</i>.</p>
		</section>

		<math xmlns="http://www.w3.org/1998/Math/MathML" mode="display">
			<mrow>
				<mi>Gini</mi>
				<mo>(</mo>
				<mo>D</mo>
				<mo>)</mo>
			</mrow>
			<mo>&equals;</mo>
			<mrow>
				<mn>1</mn>
				<mo>&minus;</mo>
				<munderover>
					<mo>&sum;</mo>
					<mrow>
						<mi>m</mi>
					</mrow>
					<mrow>
						<mi>i</mi>
						<mo>&equals;</mo>
						<mn>1</mn>
					</mrow>
				</munderover>
				<msubsup>
					<mo>p</mo>
					<mi>i</mi>
					<mn>2</mn>
				</msubsup>
			</mrow>
		</math>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Para que seja possível entender como o índice de Gini é usado na prática, faremos a demonstração com o uso da base de dados abaixo, baseada no exemplo previamente apresentado sobre as informações de trabalhadores analfabetos na PME.</p>

			<!-- Quadro [inicio] -->
			<div class="table-container">
				<table class="table table--text-table">
					<caption class="table__title">Quadro 3: Base com os dados de trabalhadores analfabetos.</caption>
					<thead>
						<tr>
							<th scope="col">Idade</th>
							<th scope="col">UF</th>
							<th scope="col">sexo</th>
							<th scope="col">trabalho_doméstico (classe)</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td scope="row">≤ 60</td>
							<td>MG</td>
							<td>M</td>
							<td>Não</td>
						</tr>
						<tr>
							<td scope="row">> 60</td>
							<td>SP</td>
							<td>F</td>
							<td>Sim</td>
						</tr>
						<tr>
							<td scope="row">> 60</td>
							<td>MG</td>
							<td>F</td>
							<td>Sim</td>
						</tr>
						<tr>
							<td scope="row">≤ 60</td>
							<td>SP</td>
							<td>M</td>
							<td>Não</td>
						</tr>
						<tr>
							<td scope="row">≤ 60</td>
							<td>SP</td>
							<td>F</td>
							<td>Não</td>
						</tr>
						<tr>
							<td scope="row">> 60</td>
							<td>MG</td>
							<td>F</td>
							<td>Sim</td>
						</tr>
						<tr>
							<td scope="row">≤ 60</td>
							<td>SP</td>
							<td>M</td>
							<td>Não</td>
						</tr>
						<tr>
							<td scope="row">> 60</td>
							<td>MG</td>
							<td>M</td>
							<td>Não</td>
						</tr>
						<tr>
							<td scope="row">≤ 60</td>
							<td>MG</td>
							<td>F</td>
							<td>Sim</td>
						</tr>
						<tr>
							<td scope="row">> 60</td>
							<td>SP</td>
							<td>F</td>
							<td>Sim</td>
						</tr>
						<tr>
							<td scope="row">≤ 60</td>
							<td>MG</td>
							<td>F</td>
							<td>Não</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- Quadro [fim] -->

			<p>A estratégia básica empregada pelo CART é construir a árvore por etapas, ou seja, nó por nó. A cada etapa, todos os atributos preditivos disponíveis deverão ser avaliados, o que significa que o índice de Gini deverá ser calculado para cada um deles. O atributo que resultar no menor valor será escolhido para fazer parte da árvore, pois ele é o que gera as partições que, em média, são as mais puras. Vamos examinar um exemplo passo a passo para entender como é feito.</p>
			<p>Na base de dados do Quadro 3, os atributos preditivos são “idade”, “UF” e “sexo” e o atributo classe é “trabalho_doméstico”. Na primeira rodada do CART, haverá a decisão sobre qual dos três atributos preditivos entrará como nó raiz da árvore. A decisão ocorre em função do resultado dos cálculos a seguir:</p>

			<h4>Difinindo o nó raiz</h4>

			<!-- Lista de definicao [inicio] -->
			<dl class="definition-list">
				<dt>Idade</dt>
				<dd>
					<math xmlns="http://www.w3.org/1998/Math/MathML" mode="inline">
						<mrow>
							<mi>(≤ 60) : (> 60)</mi>
						</mrow>
						<mo>&equals;</mo>
						<mrow>
							<mfrac>
								<mn>6</mn>
								<mn>11</mn>
							</mfrac>
							<mo>×</mo>
							<mrow>
								<mo>[</mo>
								<mn>1</mn>
								<mo>&minus;</mo>
								<msup>
									<mrow>
										<mo>(</mo>
										<mfrac>
											<mn>5</mn>
											<mn>6</mn>
										</mfrac>
										<mo>)</mo>
									</mrow>
									<mn>2</mn>
								</msup>
								<mo>&minus;</mo>
								<msup>
									<mrow>
										<mo>(</mo>
										<mfrac>
											<mn>1</mn>
											<mn>6</mn>
										</mfrac>
										<mo>)</mo>
									</mrow>
									<mn>2</mn>
								</msup>
								<mo>]</mo>
								<mo>+</mo>
								<mfrac>
									<mn>5</mn>
									<mn>11</mn>
								</mfrac>
								<mo>&times;</mo>
								<mo>[</mo>
								<mn>1</mn>
								<mo>&minus;</mo>
								<mrow>
									<msup>
										<mrow>
											<mo>(</mo>
											<mfrac>
												<mn>1</mn>
												<mn>5</mn>
											</mfrac>
											<mo>)</mo>
										</mrow>
										<mn>2</mn>
									</msup>
								</mrow>
								<mo>&minus;</mo>
								<mrow>
									<msup>
										<mrow>
											<mo>(</mo>
											<mfrac>
												<mn>4</mn>
												<mn>5</mn>
											</mfrac>
											<mo>)</mo>
										</mrow>
										<mn>2</mn>
									</msup>
								</mrow>
								<mo>]</mo>
							</mrow>
							<mo>=</mo>
							<mrow>
								<mn>0,30</mn>
							</mrow>
					</math>
				</dd>
				<dt>UF</dt>
				<dd>
					<math xmlns="http://www.w3.org/1998/Math/MathML" mode="inline">
						<mrow>
							<mi>(MG) : (SP)</mi>
						</mrow>
						<mo>&equals;</mo>
						<mrow>
							<mfrac>
								<mn>6</mn>
								<mn>11</mn>
							</mfrac>
							<mo>×</mo>
							<mrow>
								<mo>[</mo>
								<mn>1</mn>
								<mo>&minus;</mo>
								<msup>
									<mrow>
										<mo>(</mo>
										<mfrac>
											<mn>3</mn>
											<mn>6</mn>
										</mfrac>
										<mo>)</mo>
									</mrow>
									<mn>2</mn>
								</msup>
								<mo>&minus;</mo>
								<msup>
									<mrow>
										<mo>(</mo>
										<mfrac>
											<mn>3</mn>
											<mn>6</mn>
										</mfrac>
										<mo>)</mo>
									</mrow>
									<mn>2</mn>
								</msup>
								<mo>]</mo>
								<mo>+</mo>
								<mfrac>
									<mn>5</mn>
									<mn>11</mn>
								</mfrac>
								<mo>&times;</mo>
								<mo>[</mo>
								<mn>1</mn>
								<mo>&minus;</mo>
								<mrow>
									<msup>
										<mrow>
											<mo>(</mo>
											<mfrac>
												<mn>3</mn>
												<mn>5</mn>
											</mfrac>
											<mo>)</mo>
										</mrow>
										<mn>2</mn>
									</msup>
								</mrow>
								<mo>&minus;</mo>
								<mrow>
									<msup>
										<mrow>
											<mo>(</mo>
											<mfrac>
												<mn>2</mn>
												<mn>5</mn>
											</mfrac>
											<mo>)</mo>
										</mrow>
										<mn>2</mn>
									</msup>
								</mrow>
								<mo>]</mo>
							</mrow>
							<mo>=</mo>
							<mrow>
								<mn>0,49</mn>
							</mrow>
					</math>
				</dd>

				<dt>Sexo</dt>
				<dd>
					<math xmlns="http://www.w3.org/1998/Math/MathML" mode="inline">
						<mrow>
							<mi>(F) : (M)</mi>
						</mrow>
						<mo>&equals;</mo>
						<mrow>
							<mfrac>
								<mn>7</mn>
								<mn>11</mn>
							</mfrac>
							<mo>×</mo>
							<mrow>
								<mo>[</mo>
								<mn>1</mn>
								<mo>&minus;</mo>
								<msup>
									<mrow>
										<mo>(</mo>
										<mfrac>
											<mn>2</mn>
											<mn>7</mn>
										</mfrac>
										<mo>)</mo>
									</mrow>
									<mn>2</mn>
								</msup>
								<mo>&minus;</mo>
								<msup>
									<mrow>
										<mo>(</mo>
										<mfrac>
											<mn>5</mn>
											<mn>7</mn>
										</mfrac>
										<mo>)</mo>
									</mrow>
									<mn>2</mn>
								</msup>
								<mo>]</mo>
								<mo>+</mo>
								<mfrac>
									<mn>4</mn>
									<mn>11</mn>
								</mfrac>
								<mo>&times;</mo>
								<mo>[</mo>
								<mn>1</mn>
								<mo>&minus;</mo>
								<mrow>
									<msup>
										<mrow>
											<mo>(</mo>
											<mfrac>
												<mn>4</mn>
												<mn>4</mn>
											</mfrac>
											<mo>)</mo>
										</mrow>
										<mn>2</mn>
									</msup>
								</mrow>
								<mo>&minus;</mo>
								<mrow>
									<msup>
										<mrow>
											<mo>(</mo>
											<mfrac>
												<mn>0</mn>
												<mn>4</mn>
											</mfrac>
											<mo>)</mo>
										</mrow>
										<mn>2</mn>
									</msup>
								</mrow>
								<mo>]</mo>
							</mrow>
							<mo>=</mo>
							<mrow>
								<mn>0,26</mn>
							</mrow>
					</math>
				</dd>
			</dl>
			<!-- Lista de definicao [fim] -->

			<p>Como o índice de Gini para o atributo “sexo” é menor, isto significa que ele gera as partições que em média são as mais puras. Portanto, deve ser escolhido para entrar na raiz da árvore.</p>
			<p>Ok, mas como os cálculos mostrados foram feitos? Ao definir partições, o CART sempre realiza divisões binárias, ou seja, de cada nó interno sempre serão feitos dois testes que resultam na geração de duas partições. Então, para cada atributo A candidato a entrar como nó da AD, o CART realiza a soma ponderada da impureza de cada uma das duas partições resultantes. Isto é feito com o uso da fórmula a seguir, em que <i>D<sub>1</sub></i> e <i>D<sub>2</sub></i> são as duas partições geradas pela divisão binária:</p>

			<math xmlns="http://www.w3.org/1998/Math/MathML" mode="display">
				<mrow>
					<msub>
						<mi>Gini</mi>
						<mi>A</mi>
					</msub>
					<mo>(</mo>
					<mi>D</mi>
					<mo>)</mo>
				</mrow>
				<mo>&equals;</mo>
				<mrow>
					<mfrac>
						<mi>|D1|</mi>
						<mi>|D|</mi>
					</mfrac>
					<mi>Gini(D1)</mi>
				</mrow>
				<mo>+</mo>
				<mrow>
					<mfrac>
						<mi>|D2|</mi>
						<mi>|D|</mi>
					</mfrac>
					<mi>Gini(D2)</mi>
				</mrow>
			</math>

			<p>Observe, por exemplo, como foi feito o cálculo para o atributo “sexo”. Esse atributo gera a divisão binária (sexo= “F”) e (sexo = “M”). No exemplo apresentado, a primeira parte do cálculo (antes do sinal de adição), refere-se ao cálculo da impureza da partição gerada por (sexo = “F”). O valor 7/11 refere-se ao fato de que das 11 pessoas da base, 7 são do sexo feminino. O valor 2/7 indica que 2 dessas 7 mulheres são da classe “Não”, enquanto 5/7 indica que 5 das 7 mulheres são da classe “Sim”. De maneira análoga, a segunda parte do cálculo refere-se à impureza da partição gerada por (sexo = “M”).</p>
			<p>Agora que o cálculo foi explicado, veja na Tabela 7 como ficam as partições da base de treinamento após o particionamento pelo atributo sexo. É importante notar que a partição gerada por (sexo = “M”) possui maior pureza, uma vez que todos os objetos são da classe “Não”. Já a partição definida por (sexo = “F”) é menos pura, pois temos 2 objetos da classe “Não” e 5 da classe “Sim”.</p>

			<!-- Quadro [inicio] -->
			<div class="table-container">
				<table class="table table--text-table">
					<caption class="table__title">Quadro 4: Partições definidas pelo atributo “sexo”</caption>
					<thead>
						<tr>
							<th scope="col">Sexo</th>
							<th scope="col">Partição</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" rowspan="7">F</th>
							<td>>60, SP, Sim</td>
						</tr>
						<tr>
							<td>>60, MG, Sim</td>
						</tr>
						<tr>
							<td>≤60, SP, Não</td>
						</tr>
						<tr>
							<td>>60, MG, Sim</td>
						</tr>
						<tr>
							<td>≤60, MG, Sim</td>
						</tr>
						<tr>
							<td>>60, SP, Sim</td>
						</tr>
						<tr>
							<td>≤60, MG, Não</td>
						</tr>

						<tr>
							<th scope="row" rowspan="4">M</th>
							<td>≤60, MG, Não</td>
						</tr>
						<tr>
							<td>≤60, SP, Não</td>
						</tr>
						<tr>
							<td>≤60, SP, Não</td>
						</tr>
						<tr>
							<td>>60, MG, Não</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- Quadro [fim] -->

			<p>A árvore de decisão parcial, definida em função dessas partições é apresentada na Figura 5:</p>
		</section>

		<!-- Imagem pequena [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<img class="image" src="dist/img/un03/figura05.svg" alt="Descrição da imagem.">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Figura 5: AD parcial gerada após a primeira rodada do CART
			</figcaption>
		</figure>
		<!-- Imagem pequena [fim] -->

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Não precisamos fazer mais nada com os dados da partição (sexo = “M”) que é perfeitamente pura. Porém, ainda podemos investigar “idade” e “UF” para identificar qual é capaz de gerar uma boa divisão para os dados da partição (sexo = “F”). Basta usar novamente o índice de Gini, porém desta vez considerando apenas as 7 observações referentes à partição (sexo = “F”).</p>

			<!-- Lista de definicao [inicio] -->
			<dl class="definition-list">
				<dt>Idade</dt>
				<dd>
					<math xmlns="http://www.w3.org/1998/Math/MathML" mode="inline">
						<mrow>
							<mi>(≤ 60) : (> 60)</mi>
						</mrow>
						<mo>&equals;</mo>
						<mrow>
							<mfrac>
								<mn>3</mn>
								<mn>7</mn>
							</mfrac>
							<mo>×</mo>
							<mrow>
								<mo>[</mo>
								<mn>1</mn>
								<mo>&minus;</mo>
								<msup>
									<mrow>
										<mo>(</mo>
										<mfrac>
											<mn>2</mn>
											<mn>3</mn>
										</mfrac>
										<mo>)</mo>
									</mrow>
									<mn>2</mn>
								</msup>
								<mo>&minus;</mo>
								<msup>
									<mrow>
										<mo>(</mo>
										<mfrac>
											<mn>1</mn>
											<mn>3</mn>
										</mfrac>
										<mo>)</mo>
									</mrow>
									<mn>2</mn>
								</msup>
								<mo>]</mo>
								<mo>+</mo>
								<mfrac>
									<mn>4</mn>
									<mn>7</mn>
								</mfrac>
								<mo>&times;</mo>
								<mo>[</mo>
								<mn>1</mn>
								<mo>&minus;</mo>
								<mrow>
									<msup>
										<mrow>
											<mo>(</mo>
											<mfrac>
												<mn>0</mn>
												<mn>4</mn>
											</mfrac>
											<mo>)</mo>
										</mrow>
										<mn>2</mn>
									</msup>
								</mrow>
								<mo>&minus;</mo>
								<mrow>
									<msup>
										<mrow>
											<mo>(</mo>
											<mfrac>
												<mn>4</mn>
												<mn>4</mn>
											</mfrac>
											<mo>)</mo>
										</mrow>
										<mn>2</mn>
									</msup>
								</mrow>
								<mo>]</mo>
							</mrow>
							<mo>=</mo>
							<mrow>
								<mn>0,19</mn>
							</mrow>
					</math>
				</dd>
				<dt>UF</dt>
				<dd>
					<math xmlns="http://www.w3.org/1998/Math/MathML" mode="inline">
						<mrow>
							<mi>(MG) : (SP)</mi>
						</mrow>
						<mo>&equals;</mo>
						<mrow>
							<mfrac>
								<mn>4</mn>
								<mn>7</mn>
							</mfrac>
							<mo>×</mo>
							<mrow>
								<mo>[</mo>
								<mn>1</mn>
								<mo>&minus;</mo>
								<msup>
									<mrow>
										<mo>(</mo>
										<mfrac>
											<mn>1</mn>
											<mn>4</mn>
										</mfrac>
										<mo>)</mo>
									</mrow>
									<mn>2</mn>
								</msup>
								<mo>&minus;</mo>
								<msup>
									<mrow>
										<mo>(</mo>
										<mfrac>
											<mn>3</mn>
											<mn>4</mn>
										</mfrac>
										<mo>)</mo>
									</mrow>
									<mn>2</mn>
								</msup>
								<mo>]</mo>
								<mo>+</mo>
								<mfrac>
									<mn>3</mn>
									<mn>7</mn>
								</mfrac>
								<mo>&times;</mo>
								<mo>[</mo>
								<mn>1</mn>
								<mo>&minus;</mo>
								<mrow>
									<msup>
										<mrow>
											<mo>(</mo>
											<mfrac>
												<mn>1</mn>
												<mn>3</mn>
											</mfrac>
											<mo>)</mo>
										</mrow>
										<mn>2</mn>
									</msup>
								</mrow>
								<mo>&minus;</mo>
								<mrow>
									<msup>
										<mrow>
											<mo>(</mo>
											<mfrac>
												<mn>2</mn>
												<mn>3</mn>
											</mfrac>
											<mo>)</mo>
										</mrow>
										<mn>2</mn>
									</msup>
								</mrow>
								<mo>]</mo>
							</mrow>
							<mo>=</mo>
							<mrow>
								<mn>0,40</mn>
							</mrow>
					</math>
				</dd>
			</dl>
			<!-- Lista de definicao [fim] -->

			<p>Desta forma, o atributo “idade” é o escolhido para particionar o subconjunto de dados definido pela partição (sexo = “F”). A Figura 8 mostra os novos particionamentos por ele gerados.</p>

			<!-- Quadro [inicio] -->
			<div class="table-container">
				<table class="table table--text-table">
					<caption class="table__title">Quadro 5: Partições definidas pelo atributo “idade” na partição (sexo = “F”)</caption>
					<thead>
						<tr>
							<th scope="col">Sexo</th>
							<th scope="col">Idade</th>
							<th scope="col">Partição</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row" rowspan="7">F</th>
							<td scope="row" rowspan="3">≤60, SP, Sim</td>
							<td>≤60, SP, F, Não</td>
						</tr>
						<tr>
							<td>≤60, MG, F, Sim</td>
						</tr>
						<tr>
							<td>≤60, MG, F, Não</td>
						</tr>
						<tr>
							<td scope="row" rowspan="4">>60</td>
							<td>>60, SP, F, Sim</td>
						</tr>
						<tr>
							<td>>60, MG, F, Sim</td>
						</tr>
						<tr>
							<td>>60, MG, F, Sim</td>
						</tr>
						<tr>
							<td>>60, SP, F, Sim</td>
						</tr>

						<!-- Partições para M -->
						<!-- 	
						<tr>
							<th scope="row" rowspan="4" colspan="2">M</th>
							<td>≤ 60, MG, M, Não</td>
						</tr>
						<tr><td>≤60, SP, M, Não</td></tr>
						<tr><td>≤60, SP, M, Não</td></tr>
						<tr><td>>60, MG, M, Não</td></tr>
						-->
					</tbody>
				</table>
			</div>
			<!-- Quadro [fim] -->

			<p>Veja que agora a partição definida por (sexo = “F” e idade > 60) possui todos os objetos da classe “Sim”. Já a partição (sexo = “F” e idade ≤ 60) possui dois objetos da classe “Não” e um da classe “Sim”. No entanto, ela tem um número muito reduzido de objetos e, em seu modo típico de operação, o CART vai considerar que não vale mais a pena tentar dividi-la. Em vez disso, O CART simplesmente irá definir que esta partição gera um nó folha da classe “Não”, pois essa é a classe majoritária da partição. Assim, o algoritmo encerra o seu processamento gerando a AD mostrada na Figura 6, de acordo com a Figura 3 apresentada anteriormente.</p>
		</section>

		<!-- Imagem pequena [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<img class="image" src="dist/img/un03/figura06.svg" alt="Descrição da imagem.">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Figura 6: AD final gerada pelo CART
			</figcaption>
		</figure>
		<!-- Imagem pequena [fim] -->

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Etapa de Classificação</h2>

			<p>Uma vez que a AD tenha sido gerada, classificar um novo objeto é trivial: basta seguir um caminho da raiz até um nó folha de acordo com as características do objeto. Por exemplo, considere o <span class="code-inline">novoObj = (sexo=”F”, idade > 60)</span>. De acordo com a AD gerada, o objeto deve ser classificado como “Sim”, independente da variável UF do objeto, pois essa variável não foi considerada pelo modelo criado.</p>
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Discussão</h2>

			<p>Tanto o CART como todos os outros algoritmos para o aprendizado de árvores de decisão usam estratégias parecidas: são recursivos, constroem a árvore utilizando uma abordagem <i>top-down</i> e possuem como meta a construção de árvores que possuam o menor tamanho e a maior acurácia possíveis.</p>

			<p>O CART consegue gerar apenas árvores binárias, por causa da fórmula que utiliza para seleção de atributos. No exemplo apresentado, isso não foi um problema, pois todos os atributos preditivos possuíam apenas dois valores distintos. Mas e se existir um atributo preditivo com mais de dois valores, como por exemplo “Raça” com os valores {“amarela”, “branca”, “preta”}? Neste caso, O CART avaliará todas as divisões binárias possíveis, que são:</p>

			<math mode="display">
				<mtext>(amarela) : (branca, preta)</mtext>
			</math>
			<math mode="display">
				<mtext>(branca) : (amarela, preta)</mtext>
			</math>
			<math mode="display">
				<mtext>(preta) : (amarela, branca)</mtext>
			</math>

			<p>E se houvesse atributos preditivos contínuos? Neste caso, supondo um atributo contínuo <i>A</i>, o CART tentará encontrar o melhor ponto de divisão ordenando os valores de <i>A</i> de maneira ascendente e depois testando todas as possibilidades considerando os pontos médios entre cada par de valor. Ou seja: se existem <i>v</i> valores distintos, então <i>v-1</i> possíveis divisões serão consideradas. Por exemplo, suponha um atributo salário que apareça com os quatro seguintes valores distintos na base 1.500, 2.000, 4.000 e 10.000. Neste caso, o CART avaliaria três possíveis divisões:</p>

			<math mode="display">
				<mtext>(≤ 1.750) : (> 1.750)</mtext>
				<mtext>&ensp;&ndash;&ensp;</mtext>
				<mtext mathvariant="italic">1.750 é o ponto médio entre 1.500 e 2.000&nbsp;</mtext>
			</math>
			<math mode="display">
				<mtext>(≤ 3.000) : (> 3.000)</mtext>
				<mtext>&ensp;&ndash;&ensp;</mtext>
				<mtext mathvariant="italic">3.000 é o ponto médio entre 2.000 e 4.000&nbsp;</mtext>
			</math>
			<math mode="display">
				<mtext>(≤ 7.000) : (> 7.000)</mtext>
				<mtext>&ensp;&ndash;&ensp;</mtext>
				<mtext mathvariant="italic">7.000 é o ponto médio entre 4.000 e 10.000</mtext>
			</math>

			<p>No exemplo apresentado na Figura 8, o CART encerrou o seu processamento quando ocorreu uma situação em que uma das partições ainda não processada possuía um número pequeno de observações (apenas 3 observações). Na prática, a maioria das ferramentas de ciência de dados permite que o usuário configure este número mínimo de observações que leva ao fim do processamento. Outro critério de parada que pode ser definido para o CART é a profundidade (número de níveis) máxima da árvore.</p>
			<p>Quando uma árvore é construída, muitos ramos podem refletir sujeira ou terem sido criados sob influência de <i>outliers</i>. O CART pode utilizar uma técnica de poda com o intuito de identificar e remover estes ramos. As árvores podadas tendem a ser menores e menos complexas, portanto, mais fáceis de serem compreendidas pelos usuários de uma ferramenta de ciência de dados. Na maioria das vezes também são mais eficazes para a classificação de novos casos. Uma breve introdução ao tema é apresentada em <a href="https://www.youtube.com/watch?v=u4kbPtiVVB8&t=7s">https://www.youtube.com/watch?v=u4kbPtiVVB8&t=7s</a>.</p>
			<p>Por fim, vamos aos pontos positivos e negativos da técnica de AD. Um primeiro ponto positivo é a eficiência, ou seja, usando o CART ou qualquer outro algoritmo de AD podemos gerar o modelo de classificação em um tempo computacional baixo. No entanto, muito mais importante que isso e o que podemos considerar como principal aspecto positivo é o fato de uma AD ser um modelo interpretável, o que constitui requisito necessário em muitas aplicações relacionadas ao serviço público. Por outro lado, a principal desvantagem é que nem sempre um algoritmo de AD consegue produzir um modelo com desempenho preditivo similar ao de métodos mais sofisticados, como Random Forest e Redes Neurais.</p>

			<div class="text-with-icon">
				<div class="icon-container">
					<img src="dist/img/written-process-icon.svg" aria-hidden="true" />
				</div>
				<p class="pullquote">
					Dado o BD abaixo, calcule o índice de Gini para os atributos preditivos “Idade” e “Renda”
				</p>
			</div>

		<!-- Quadro [inicio] -->
		<div class="table-container">
			<table class="table table--text-table">
				<thead>
					<tr>
						<th scope="col"></th>
						<th scope="col">Idade</th>
						<th scope="col">Renda</th>
						<th scope="col">classe</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>[1]</td>
						<td>&le;40</td>
						<td>&le8k</td>
						<td>N</td>
					</tr>
					<tr>
						<td>[2]</td>
						<td>&le;40</td>
						<td>&le8k</td>
						<td>N</td>
					</tr>
					<tr>
						<td>[3]</td>
						<td>&le;40</td>
						<td>&gt;8k</td>
						<td>N</td>
					</tr>
					<tr>
						<td>[4]</td>
						<td>&le;40</td>
						<td>&gt;8k</td>
						<td>N</td>
					</tr>
					<tr>
						<td>[5]</td>
						<td>&le;40</td>
						<td>&le;8k</td>
						<td>N</td>
					</tr>
					<tr>
						<td>[6]</td>
						<td>&le;40</td>
						<td>&le;8k</td>
						<td>N</td>
					</tr>
					<tr>
						<td>[7]</td>
						<td>&le;40</td>
						<td>&gt;8k</td>
						<td>N</td>
					</tr>
					<tr>
						<td>[8]</td>
						<td>&le;40</td>
						<td>&gt;8k</td>
						<td>N</td>
					</tr>
					<tr>
						<td>[9]</td>
						<td>&le;40</td>
						<td>&le;8k</td>
						<td>N</td>
					</tr>
					<tr>
						<td>[10]</td>
						<td>&le;40</td>
						<td>&le;8k</td>
						<td>N</td>
					</tr>
					<tr>
						<td>[11]</td>
						<td>&le;40</td>
						<td>&gt;8k</td>
						<td>N</td>
					</tr>
					<tr>
						<td>[12]</td>
						<td>&le;40</td>
						<td>&gt;8k</td>
						<td>N</td>
					</tr>
					<tr>
						<td>[13]</td>
						<td>&gt;40</td>
						<td>&le;8k</td>
						<td>I</td>
					</tr>
					<tr>
						<td>[14]</td>
						<td>&gt;40</td>
						<td>&le;8k</td>
						<td>N</td>
					</tr>
					<tr>
						<td>[15]</td>
						<td>&gt;40</td>
						<td>&gt;8k</td>
						<td>I</td>
					</tr>
					<tr>
						<td>[16]</td>
						<td>&gt;40</td>
						<td>&le;8k</td>
						<td>N</td>
					</tr>
					<tr>
						<td>[17]</td>
						<td>&gt;40</td>
						<td>&le;8k</td>
						<td>I</td>
					</tr>
					<tr>
						<td>[18]</td>
						<td>&gt;40</td>
						<td>&gt;8k</td>
						<td>N</td>
					</tr>
					<tr>
						<td>[19]</td>
						<td>&gt;40</td>
						<td>&gt;8k</td>
						<td>I</td>
					</tr>
					<tr>
						<td>[20]</td>
						<td>&gt;40</td>
						<td>&le;8k</td>
						<td>N</td>
					</tr>
					<tr>
						<td>[21]</td>
						<td>&gt;40</td>
						<td>&gt;8k</td>
						<td>I</td>
					</tr>
					<tr>
						<td>[22]</td>
						<td>&gt;40</td>
						<td>&le;8k</td>
						<td>N</td>
					</tr>
					<tr>
						<td>[23]</td>
						<td>&gt;40</td>
						<td>&gt;8k</td>
						<td>I</td>
					</tr>
					<tr>
						<td>[24]</td>
						<td>&gt;40</td>
						<td>&le;8k</td>
						<td>I</td>
					</tr>

				</tbody>
			</table>
		</div>
		<!-- Quadro [fim] -->

		</section>

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