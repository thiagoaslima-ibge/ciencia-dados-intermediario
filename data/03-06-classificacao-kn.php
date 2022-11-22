<?php
// Titulo da unidade
$moduleTitle = "";
// Titulo do topico
$topicTitle = "Métodos de classificação";
// Titulo da pagina
$pageTitle = "Algoritmos de classificação: k-NN";
// Subtitulo da pagina
$pageSubtitle = "";
// Inclusao do cabeçalho do curso	
include "head.php";
?>

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
			<p>O k-NN (k-<i>nearest-neighbors</i> – <strong>k vizinhos mais próximos</strong>) é provavelmente o mais simples dos algoritmos de classificação. Seu princípio de funcionamento é baseado no aprendizado por analogia: ele determina a classe de um novo objeto levando em conta apenas um pequeno número de objetos da base de treinamento, avaliados como os mais <strong>similares</strong> ao novo objeto. Esses são considerados os seus vizinhos mais próximos, daí o nome do algoritmo.</p>
			<p>A seguir, as etapas de treinamento e classificação do k-NN serão explicadas. Em seguida, discutiremos algumas características chave do algoritmo, assim como seus pontos fortes e fracos. Utilizaremos a mesma abordagem para os demais métodos de classificação cobertos ao longo desta unidade.</p>
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Etapa de treinamento</h2>
			<p>O k-NN é considerado um algoritmo “preguiçoso” (<i>lazy learner</i>), pois ele não cria um modelo na etapa de treinamento. Ao invés disso, a única coisa que o k-NN faz nesta etapa é importar a base de dados de treinamento para a memória. É isso mesmo, você não entendeu errado: o k-NN praticamente não trabalha na etapa de treinamento, a única coisa que ele faz é a importação do conjunto de dados de treinamento.</p>
			<p>Mas, na verdade, o k-NN não é tão preguiçoso assim. O que de fato ocorre é que ele prefere se esforçar apenas na etapa de classificação. Neste momento, quando um novo objeto é apresentado, o ­k­-NN o classificará com base na sua similaridade em relação aos objetos de treinamento. Ele precisará trabalhar (e muito!) para executar essa ação, como veremos a seguir.</p>
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Etapa de classificação</h2>
			<p>Uma vez que os objetos de treinamento tenham sido importados para a memória, o k-NN poderá realizar a classificação de um novo objeto – que denotaremos por <span class="code-inline">novoObj</span> – empregando dois passos:</p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li><strong>Passo 1:</strong> <br> o algoritmo irá procurar os <i>k</i> objetos que sejam <strong>mais similares</strong> a <span class="code-inline">novoObj</span> na base de dados de treinamento. Como veremos em breve, a similaridade é normalmente definida em termos de uma medida de distância, como a distância euclidiana.</li>
				<li><strong>Passo 2:</strong> <br> a classe mais frequente entre os <i>k</i> objetos encontrados será atribuída para <span class="code-inline">novoObj</span>. O valor de <i>k</i> é um parâmetro de entrada, definido pelo usuário do algoritmo.</li>
			</ul>
			<!-- Lista não ordenada [fim] -->

			<p>A seguir um exemplo que mostra detalhadamente o funcionamento do k-NN. Suponha que desejamos implementar um classificador capaz de determinar se uma pessoa ganha mais de 5 salários mínimos em função de seus anos de estudo e total de horas trabalhadas por semana. Para isso, considere que temos a nossa disposição a base de dados de treinamento da Tabela 1, contendo dados extraídos de um censo hipotético. Veja que ela possui 6 observações (objetos) e 3 atributos: anos de estudo, quantidade de horas trabalhadas por semana e classe de renda. Os dois primeiros atributos formam o conjunto de atributos preditivos (X) enquanto o último corresponde ao atributo classe (Y), possuindo dois valores, “≤ 5 S.M.” (renda mensal igual ou inferior a 5 salários mínimos) e “> 5 S.M.” (renda mensal superior a 5 salários mínimos).</p>
		</section>

		<!-- Tabela [inicio] -->
		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<div class="table-container">
				<table class="table tabletext-table">
					<caption class="table__title">Base de treinamento para a classificação da classe de renda</caption>
					<thead>
						<tr>
							<th class="table__numeric-col-heading" scope="col">anos de estudo</th>
							<th class="table__numeric-col-heading" scope="col">horas trabalhadas</th>
							<th class="table__numeric-col-heading" scope="col">classe de renda</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="table__numeric-values">12</td>
							<td class="table__numeric-values">50</td>
							<td class="table__numeric-values">&gt; 5 S.M.</td>
						</tr>
						<tr>
							<td class="table__numeric-values">19%</td>
							<td class="table__numeric-values">98%</td>
							<td class="table__numeric-values">36%</td>
						</tr>
						<tr>
							<td class="table__numeric-values">36%</td>
							<td class="table__numeric-values">19%</td>
							<td class="table__numeric-values">98%</td>
						</tr>
						<tr>
							<td class="table__numeric-values">21%</td>
							<td class="table__numeric-values">87%</td>
							<td class="table__numeric-values">42%</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
		<!-- Tabela [fim] -->

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>Na etapa de treinamento, o <i>k</i>-NN irá simplesmente importar a base de dados para a memória. Nenhum modelo será criado, pois o <i>k</i>-NN é preguiçoso na hora de treinar.</p>
			<p>
				Na etapa de classificação, suponha que desejamos classificar a renda de uma nova pessoa com 10 anos de estudo e que trabalha 44 horas por semana, que denotaremos por <span class="code-inline">novoObj = (10, 44)</span>.
				Considere ainda que o parâmetro <i>k</i> foi estabelecido com o valor 3. Dessa forma, o algoritmo <i>k</i>-NN irá computar a similaridade entre <span class="code-inline">novoObj</span> e todos os objetos contidos no conjunto de treinamento.
				Após o cálculo, serão selecionados os 3 objetos considerados mais similares de <span class="code-inline">novoObj</span>.
				A classe que mais se repete entre estes <i>k</i> vizinhos mais próximos será a classe do novo objeto.
			</p>
			<p>
				Ok, mas como isso é feito na prática?
				Como podemos medir a similaridade entre objetos?
				A abordagem mais comum é considerar que cada objeto é um ponto em um espaço <i>n</i>-dimensional (onde <i>n</i> corresponde ao número de atributos preditivos do base de dados de treinamento) e então utilizar uma medida capaz de computar a distância entre cada par de objetos.
				Se a distância entre dois objetos é pequena, então se considera que eles são similares. Caso contrário, são considerados dissimilares.
			</p>
			<p>
				Um exemplo de medida deste tipo é a distância euclidiana. Dados dois objetos X<sub>1</sub> = (x<sub>11</sub>, x<sub>12</sub>, ..., x<sub>1n</sub>) e X<sub>2</sub> = (x<sub>21</sub>, x<sub>22</sub>, ..., x<sub>2n</sub>), ambos descritos por <i>n</i> atributos, a distância euclidiana entre eles, denotada por <i>DE</i>(X<sub>1</sub>, X<sub>2</sub>), pode ser calculada por:
			</p>
		</section>

			<math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
				<mrow>
					<mi>DE</mi>
					<mo>(</mo>
					<mrow>
						<msub>
							<mi>X</mi>
							<mn>1</mn>
						</msub>
						<mo>,</mo>
						<msub>
							<mi>X</mi>
							<mn>2</mn>
						</msub>
					</mrow>
					<mo>)</mo>
				</mrow>
				<mo>=</mo>
				<msqrt>
					<munderover>
						<mo>&sum;</mo>
						<mn>
							<mrow>
								<mi>i</mi>
								<mo>=</mo>
								<mi>1</mi>
							</mrow>
						</mn>
						<mi>n</mi>
					</munderover>
					<msup>
						<mrow>
							<mo>(</mo>
							<mrow>
								<msub>
									<mi>x</mi>
									<mrow>
										<mn>1</mn>
										<mi>i</mi>
									</mrow>
								</msub>
							</mrow>
							<mo>-</mo>
							<mrow>
								<msub>
									<mi>x</mi>
									<mrow>
										<mn>2</mn>
										<mi>i</mi>
									</mrow>
								</msub>
							</mrow>
							<mo>)</mo>
						</mrow>
						<mn>2</mn>
					</msup>
				</msqrt>
			</math>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Quase sempre, nós precisamos normalizar os valores de cada atributo antes de utilizar a distância euclidiana.
				Isso ajuda a impedir com que atributos com faixas de valores mais largas (ex.: idade) dominem atributos com faixas menores (ex.: anos de estudo).
				Por exemplo, podemos normalizar um valor <i>v</i> de um dado atributo <i>A</i> para a faixa entre [0, 1], utilizando a fórmula abaixo.
				Nesta fórmula, considere que V<sub>norm</sub> é o valor normalizado e min<sub>A</sub> e max<sub>A</sub>, representam, respectivamente, o menor e o maior valor de <i>A</i> na base de dados (para saber mais sobre normalização e outras técnicas de pré-processamento, consulte o Módulo 2 de nosso curso).
			</p>
		</section>

			<math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
				<mrow>
					<msub>
						<mi>v</mi>
						<mn>norm</mn>
					</msub>
					<mo>=</mo>
					<mfrac>
						<mrow>
							<mi>v</mi>
							<mo>-</mo>
							<msub>
								<mi>min</mi>
								<mn>A</mn>
							</msub>
						</mrow>
						<mrow>
							<msub>
								<mi>max</mi>
								<mn>A</mn>
							</msub>
							<mo>-</mo>
							<msub>
								<mi>min</mi>
								<mn>A</mn>
							</msub>
						</mrow>
					</mfrac>
				</mrow>
			</math>

			<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Vamos agora mostrar os cálculos de forma prática.
				Para obter a classe de <span class="code-inline">novoObj = (10, 44)</span>, é preciso primeiro normalizar tanto os dados da base de treino como do <span class="code-inline">novoObj</span>.
				Vamos exemplificar usando os dados do <span class="code-inline">novoObj</span>, mas o processo seria análogo para todos os demais objetos da base de treinamento.
			</p>

			<p>
				Observando nossos dados, temos que para o atributo anos de estudo, o menor valor registrado é 7 e o maior 16; para o atributo horas trabalhadas, temos 30 como menor valor e 50 como o maior (levando em conta tanto a base de treinamento como os dados do novo objeto a ser classificado). Sendo assim, os valores normalizados dos atributos do <span class="code-inline">novoObj</span> podem ser calculados da seguinte forma:
			</p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>Valor normalizado de “anos de estudo” para <span class="code-inline">novoObj = (10 – 7) / (16 – 7) = 0.33</span></li>
				<li>Valor normalizado de “horas trabalhadas” para <span class="code-inline">novoObj = (44 – 30) / (50 – 30) = 0.70</span></li>
			</ul>
			<!-- Lista não ordenada [fim] -->

			<!-- Tabela [inicio] -->
			<div class="table-container">
				<table class="table">
					<caption class="table__title">
						Base para classificação da classe de renda, com os atributos anos de estudo e horas trabalhadas normalizados para a faixa [0, 1].
					</caption>
					<thead>
						<tr>
							<th class="table__numeric-col-heading" scope="col">anos de estudo</th>
							<th class="table__numeric-col-heading" scope="col">horas trabalhadas</th>
							<th class="table__numeric-col-heading" scope="col">classe de renda</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="table__numeric-values">0.56</td>
							<td class="table__numeric-values">1.00</td>
							<td class="table__numeric-values">&gt; 5 S.M.</td>
						</tr>
						<tr>
							<td class="table__numeric-values">0.00</td>
							<td class="table__numeric-values">0.75</td>
							<td class="table__numeric-values">&le; 5 S.M.</td>
						</tr>
						<tr>
							<td class="table__numeric-values">1.00</td>
							<td class="table__numeric-values">0.50</td>
							<td class="table__numeric-values">&gt; 5 S.M.</td>
						</tr>
						<tr>
							<td class="table__numeric-values">0.56</td>
							<td class="table__numeric-values">0.00</td>
							<td class="table__numeric-values">&le; 5 S.M.</td>
						</tr>
						<tr>
							<td class="table__numeric-values">0.67</td>
							<td class="table__numeric-values">0.75</td>
							<td class="table__numeric-values">&gt; 5 S.M.</td>
						</tr>
						<tr>
							<td class="table__numeric-values">0.44</td>
							<td class="table__numeric-values">0.10</td>
							<td class="table__numeric-values">&le; 5 S.M.</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- Tabela [fim] -->

			<p>
				Agora podemos executar o passo 1 da classificação,
				que consiste em encontrar os <span class="code-inline">k = 3</span> objetos da base de treinamento mais similares a <span class="code-inline">novoObj</span>.
				Para isso, precisamos calcular a distância euclidiana entre ele e todos os objetos da base de treinamento.
				Por exemplo, a distância entre <span class="code-inline">novoObj = (0.33, 0.70)</span> e o primeiro objeto da base de treinamento – que denotaremos por <span class="code-inline">X<sub>1</sub> = (0.56, 1.00)</span> – é calculada da seguinte maneira:
			</p>
			</section>

			<math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
				<mrow>
					<mo>
						<mi>DE</mi>
						<mo data-mjx-texclass="OPEN">(</mo>
						<mi>novoObj,</mi>
						<msub>
							<mi>X</mi>
							<mn>1</mn>
						</msub>
						<mo data-mjx-texclass="CLOSE">)</mo>
					</mo>
	
					<mo>&equals;</mo>
	
					<msqrt>
						<msup>
							<mrow>
								<mo data-mjx-texclass="OPEN">(</mo>
								<mn>0,33</mn>
								<mo>&minus;</mo>
								<mn>0,56</mn>
								<mo data-mjx-texclass="CLOSE">)</mo>
							</mrow>
							<mn>2</mn>
						</msup>
						<mo>+</mo>
						<msup>
							<mrow>
								<mo data-mjx-texclass="OPEN">(</mo>
								<mn>0,70</mn>
								<mo>&minus;</mo>
								<mn>1,00</mn>
								<mo data-mjx-texclass="CLOSE">)</mo>
							</mrow>
							<mn>2</mn>
						</msup>
					</msqrt>
	
					<mo>&equals;</mo>
	
					<msqrt>
						<msup>
							<mrow>
								<mo data-mjx-texclass="OPEN">(</mo>
								<mn> -0,23 </mn>
								<mo data-mjx-texclass="CLOSE">)</mo>
							</mrow>
							<mn>2</mn>
						</msup>
						<mo>+</mo>
						<mo style="color:darkred">&iquest;&iquest;</mo>
					</msqrt>
				</mrow>
			</math>

			<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
			De maneira análoga, calcula-se a distância entre <i>novoObj</i> e os objetos restantes da base de treinamento, chegando ao resultado obtido na Tabela 3, onde os valores das distâncias euclidianas foram acrescentados na última coluna. Nesta figura, marcamos em vermelho negrito os 3 vizinhos mais próximos de <i>novoObj</i> – são os objetos com menor valor calculado para distância euclidiana.
			</p>

			<!-- Tabela [inicio] -->
			<div class="table-container">
				<table class="table">
					<caption class="table__title">
					Base para classificação da classe de renda normalizada e com a informação da distância euclidiana entre cada observação e o <i>novoObj</i>.
					</caption>
					<thead>
						<tr>
							<th class="table__numeric-col-heading" scope="col">anos de estudo</th>
							<th class="table__numeric-col-heading" scope="col">horas trabalhadas</th>
							<th class="table__numeric-col-heading" scope="col">classe de renda</th>
							<th class="table__numeric-col-heading" scope="col">distância euclidiana para <i>novoObj</i></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="table__numeric-values">0.56</td>
							<td class="table__numeric-values">1.00</td>
							<td class="table__numeric-values">&gt; 5 S.M.</td>
							<td class="table__numeric-values">0.38</td>
						</tr>
						<tr>
							<td class="table__numeric-values">0.00</td>
							<td class="table__numeric-values">0.75</td>
							<td class="table__numeric-values">&le; 5 S.M.</td>
							<td class="table__numeric-values">0.33</td>
						</tr>
						<tr>
							<td class="table__numeric-values">1.00</td>
							<td class="table__numeric-values">0.50</td>
							<td class="table__numeric-values">&gt; 5 S.M.</td>
							<td class="table__numeric-values">0.70</td>
						</tr>
						<tr>
							<td class="table__numeric-values">0.56</td>
							<td class="table__numeric-values">0.00</td>
							<td class="table__numeric-values">&le; 5 S.M.</td>
							<td class="table__numeric-values">0.74</td>
						</tr>
						<tr>
							<td class="table__numeric-values">0.67</td>
							<td class="table__numeric-values">0.75</td>
							<td class="table__numeric-values">&gt; 5 S.M.</td>
							<td class="table__numeric-values">0.34</td>
						</tr>
						<tr>
							<td class="table__numeric-values">0.44</td>
							<td class="table__numeric-values">0.10</td>
							<td class="table__numeric-values">&le; 5 S.M.</td>
							<td class="table__numeric-values">0.61</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- Tabela [fim] -->

			<p>
			Tendo encontrado os vizinhos mais próximos, realizar a classificação torna-se trivial. Basta ver a classe que mais se repete nesses vizinhos. Neste caso, dois dos vizinhos são da classe “> 5 S.M.” e um é da classe “≤ 5 S.M.”. Sendo assim, <i>novoObj</i> será classificado como “> 5 S.M.”. 
			</p>

			<p>Como último comentário, vale a pena mencionar que a base de dados de nosso exemplo foi inspirada em uma base de dados real que contém dados extraídos do censo dos EUA. Ela pode ser obtida em <a href="https://archive.ics.uci.edu/ml/datasets/census+income">https://archive.ics.uci.edu/ml/datasets/census+income</a></p>
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
					<h2>Discussão</h2>
	
					<p>Vamos iniciar comentando algumas características do <i>k</i>-NN. Conforme visto, o processo de classificação se baseia em associar o objeto a ser classificado à classe mais comum entre seus <i>k</i> vizinhos mais próximos. Note que quando <span class="code-inline">k = 1</span>, o novo objeto será associado à classe do objeto de treinamento mais próximo no espaço <i>n</i>-dimensional.</p>
					<p>Mas como identificar um bom valor para o parâmetro <i>k</i>?  Em primeiro lugar, é recomendada a utilização de um valor ímpar, para que não ocorra empate no momento de classificar o novo objeto (caso o problema seja de classificação binária). Mas qual valor ímpar? <span class="code-inline">k = 1</span>? <span class="code-inline">k = 3</span>? <span class="code-inline">k = 5</span>? Algum valor maior? Na prática, isso depende do problema e costuma ser determinado em um processo experimental. Neste processo, a base de treinamento é dividida em 2 partições, denominadas partição de treino e partição de validação. Por exemplo, 1/3 das observações podem ser alocadas na partição de validação e 2/3 na de treino. Então, partindo de <span class="code-inline">k = 1</span>, utilizamos a partição de validação para estimar a taxa de erro do classificador na partição de treino. O processo é repetido diversas vezes, para diferentes valores de <i>k</i>. Será escolhido o valor de <i>k</i> que resultar no processo de classificação com menor taxa de erros.</p>
					<p>Em nosso exemplo, utilizamos a distância euclidiana para identificar os vizinhos mais próximos. Essa medida pode ser utilizada quando os atributos preditivos são do tipo contínuo. Mas e se nossa base de dados possuir atributos categóricos, como “raça” ou “UF”? A abordagem mais básica consiste em simplesmente comparar o valor do atributo categórico no objeto X<sub>1</sub> com o correspondente no objeto X<sub>2</sub>. Se os valores são idênticos, a diferença entre eles será considerada 0 (ex.: o valor da UF em X<sub>1</sub> e X<sub>2</sub> é “MG”). Caso contrário, é definida como 1 (ex.: a UF em X<sub>1</sub> é “RJ” e em X<sub>2</sub> é “MG”). Mas há outras abordagens mais sofisticadas.</p>
					<p>Na verdade, o algoritmo <i>k</i>-NN é muito simples, porém computar a similaridade entre objetos é algo bem mais difícil. Além da distância euclidiana existem outras fórmulas de distância que podem ser mais ou menos adequadas dependendo do problema e das características dos atributos preditivos da base de treinamento. Detalhes podem ser encontrados em <a href="https://www.kdnuggets.com/2020/11/most-popular-distance-metrics-knn.html">https://www.kdnuggets.com/2020/11/most-popular-distance-metrics-knn.html</a>.</p>
					<p>Com relação aos prós e contras, o <i>k</i>-NN possui como principal aspecto positivo o fato de ser um algoritmo de fácil implementação e entendimento. Por outro lado, uma importante desvantagem é que o <i>k</i>-NN precisa consultar todo o conjunto de treinamento para classificar um novo exemplo. Isso faz com que a memória de armazenamento utilizada seja muito grande. Outra desvantagem relevante é o tempo computacional elevado na etapa de classificação quando se está trabalhando com um espaço de alta dimensão.</p>
					<p>Para informações adicionais sobre o k-NN, consulte <a href="https://towardsdatascience.com/knn-in-python-835643e2fb53">https://towardsdatascience.com/knn-in-python-835643e2fb53</a>.</p>
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