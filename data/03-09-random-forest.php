<?php
// Titulo da unidade
$moduleTitle = "";
// Titulo do topico
$topicTitle = "Métodos de classificação";
// Titulo da pagina
$pageTitle = "Algoritmos de classificação: Random Forest ou Floresta Aleatória";
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
			<p>Suponha que seu computador está travando com frequência e você deseja descobrir o motivo. Em vez de chamar apenas um técnico para examiná-lo, você poderia optar por chamar vários. Neste caso, se uma determinada causa para o problema for mais citada do que qualquer outra, você a consideraria como a diagnóstico correto. Ou seja, a causa do problema de travamento seria determinada de acordo com uma espécie de votação majoritária, onde cada técnico daria o seu voto. A sua expectativa é que considerar a opinião mais prevalente de um grupo de técnicos é mais confiável do que levar em conta a opinião de um único profissional.</p>
			<p>A Floresta Aleatória (<i>Random Forest</i> – RF) é uma técnica de classificação que trabalha com uma ideia similar. Ela combina as decisões de múltiplos modelos para otimizar a eficácia do processo de classificação. Mais especificamente, uma RF é um <strong>modelo de classificação composto</strong>, que é formado por um conjunto <i>(ensemble)</i> de classificadores do tipo árvore de decisão. Cada árvore de decisão do grupo é gerada com o uso de subconjuntos independentes e aleatórios de atributos e objetos. Para prever a classe de um novo objeto, cada classificador individual vota e a classe mais popular é devolvida ao usuário.</p>
			<p>A Figura 10 resume o funcionamento de um classificador RF. Nas subseções a seguir, utilizaremos essa figura como base para explicar as etapas de treinamento e classificação da RF.</p>

			<h2>Etapa de treinamento</h2>
			<p>Um modelo RF combina uma série de k modelos de árvore de decisão, AD1, AD2, ..., ADk, com o objetivo de criar um modelo composto otimizado de classificação. Cada árvore de decisão individual é também chamada de classificador base <i>(base classifier)</i>.</p>
			<p>Como ocorre com qualquer técnica de classificação, antes de qualquer coisa precisamos de uma base de dados de treinamento D, composta por d objetos. O treinamento das k árvores de decisão (lado esquerdo da Figura 10) que compõem a RF é feito em k iterações. Para cada iteração (i=1, 2, ..., k), um conjunto de treinamento Di, com d objetos é gerado a partir de um processo de amostragem com reposição. Sendo assim, cada Di tem o mesmo número de objetos do que a base de treinamento original D, porém alguns objetos podem aparecer mais de uma vez, enquanto outros podem não ocorrer em Di. Esse processo também é conhecido como bootstrapping. </p>

			<!-- Tabela [inicio] -->
			<div class="table-container">
				<table class="table">
					<caption class="table__title">Base com os dados de endividamento de casais jovens.</caption>
					<thead>
						<tr>
							<th scope="col">filhos</th>
							<th scope="col">escolaridade_resp</th>
							<th scope="col">dívida_cartão (classe)</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Não</td>
							<td>médio</td>
							<td>Sim</td>
						</tr>
						<tr>
							<td>Não</td>
							<td>médio</td>
							<td>Sim</td>
						</tr>
						<tr>
							<td>Sim</td>
							<td>superior</td>
							<td>Não</td>
						</tr>
						<tr>
							<td>Sim</td>
							<td>superior</td>
							<td>Não</td>
						</tr>
						<tr>
							<td>Sim</td>
							<td>médio</td>
							<td>Sim</td>
						</tr>
						<tr>
							<td>Não</td>
							<td>fundamental</td>
							<td>Não</td>
						</tr>
						<tr>
							<td>Não</td>
							<td>médio</td>
							<td>Sim</td>
						</tr>
						<tr>
							<td>Sim</td>
							<td>médio</td>
							<td>Sim</td>
						</tr>
						<tr>
							<td>Não</td>
							<td>médio</td>
							<td>Não</td>
						</tr>
						<tr>
							<td>Sim</td>
							<td>médio</td>
							<td>Sim</td>
						</tr>
						<tr>
							<td>Sim</td>
							<td>superior</td>
							<td>Sim</td>
						</tr>
						<tr>
							<td>Sim</td>
							<td>médio</td>
							<td>Sim</td>
						</tr>
						<tr>
							<td>Não</td>
							<td>médio</td>
							<td>Não</td>
						</tr>
						<tr>
							<td>Não</td>
							<td>superior</td>
							<td>Não</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- Tabela [fim] -->

			<p>Suponha que desejamos utilizar o algoritmo NB para treinar um modelo de classificação para prever se uma família possui ou não dívida de cartão de crédito em função de possuir ou não filhos e do nível de escolaridade do(a) responsável pela família. Com o algoritmo NB, a construção do modelo de classificação é muito barata do ponto de vista computacional, consistindo basicamente em montar uma <strong>tabela de probabilidades condicionais</strong> contendo um resumo dos dados contidos na base de dados de treinamento. A tabela referente ao nosso exemplo é mostrada na Tabela 5.</p>

			<!-- Tabela [inicio] -->
			<div class="table-container">
				<table class="table">
					<caption class="table__title">Modelo de classificação naïve Bayes gerado a partir da análise da base de dados de endividamento de casais jovens.</caption>
					<thead>
						<tr>
							<th scope="col" rowspan="2">dívida_cartão</th>
							<th scope="col" colspan="2">filhos</th>
							<th scope="col" colspan="3">escolaridade_resp</th>
						</tr>
						<tr>
							<th scope="col">Não</th>
							<th scope="col">Sim</th>
							<th scope="col">Fundamental</th>
							<th scope="col">Médio</th>
							<th scope="col">Superior</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Não (7/15)</td>
							<td>4/7</td>
							<td>3/7</td>
							<td>1/7</td>
							<td>2/7</td>
							<td>4/7</td>
						</tr>
						<tr>
							<td>Sim (8/15)</td>
							<td>3/8</td>
							<td>5/8</td>
							<td>0/8</td>
							<td>7/8</td>
							<td>1/8</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- Tabela [fim] -->

			<p>E o que são os valores de cada célula? Aqui vai a explicação. Inicialmente, observe a primeira coluna (“dívida_cartão”). Ela apresenta as probabilidades “a priori” de uma família estar endividada ou não. Para (dívida_cartão = “Não”) o valor é 7/15, isto é 7 das 15 famílias entrevistadas não possuem dívida, e para (dívida_cartão =”Sim”) o valor é 8/15, ou seja, 8 das 15 famílias entrevistadas estão endividadas.</p>
			<p>Da segunda célula em diante, as informações apresentadas são mais interessantes. Elas representam uma série de valores de <strong>probabilidades condicionais</strong>. Relembre que nosso objetivo é construir um classificador para prever se uma família está endividada em função de suas características (se possui ou não filhos e a escolaridade do(a) responsável). Por esta razão, as colunas 2 a 5 da tabela apresentam as probabilidades condicionais dos valores dos atributos preditivos “filhos” e “escolaridade_resp” dados os dois rótulos possíveis da classe “dívida_cartão” (“Sim” ou “Não”). </p>
			<p>Considere, por exemplo, o valor 4/7 localizado na célula referente ao cruzamento da linha (dívida_cartão = “Não”) com a coluna (possui_filhos = “Não”). Esse valor indica que, dentre as 7 famílias que não estão endividadas, 4 não possuem filhos. Utilizando a notação de probabilidade condicional, esse valor corresponde à P(possui_filhos = “Não” | dívida_cartão = “Não”). Agora veja o valor 3/8 localizado na célula logo abaixo. Ela corresponde ao cruzamento da linha (dívida_cartão = “Sim”) com a coluna (possui_filhos = “Não”). Sendo assim, o valor 3/8 indica que, dentre as 8 famílias endividadas, 3 não possuem filhos, representando o valor de P(possui_filhos = “Não” | dívida_cartão = “Sim”). E assim ocorre para todos os valores das demais células da tabela: basta você olhar o rótulo de classe referente à linha e o valor de atributo preditivo da coluna para entender o significado do conteúdo armazenado na célula correspondente.</p>
			<p>É muito importante que você não esqueça duas coisas. A primeira é que a tabela resumo é o modelo de classificação naïve Bayes. A segunda é que é possível gerá-la de forma muito rápida, pois os valores de todas as células da tabela podem ser computados com uma única varredura sobre a base de dados de treinamento (ou seja, percorrendo todos os objetos da base, do primeiro ao último, apenas uma vez).</p>
			<p>Ok, nosso modelo NB está criado. Mas como podemos classificar um novo objeto utilizando a tabela resumo? O processo é explicado a seguir.</p>
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Etapa de classificação</h2>

			<p>No algoritmo NB, a classificação de um novo objeto é realizada com o uso da regra de Bayes. Essa regra possibilita o cálculo da probabilidade de ocorrência de uma hipótese H, dada a observação de uma evidência <i>E</i>:</p>

			<math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
				<mrow>
					<mi>P</mi>
					<mo>(</mo>
					<mi>H</mi>
					<mo>|</mo>
					<mi>E</mi>
					<mo>)</mo>
				</mrow>
				<mo>&equals;</mo>
				<mrow>
					<mi>P</mi>
					<mo>(</mo>
					<mi>E</mi>
					<mo>|</mo>
					<mi>H&iquest;</mi>
					<mo>)</mo>
					<mo>&times;</mo>
					<mrow>
						<mi>P</mi>
						<mo>(</mo>
						<mi>H</mi>
						<mo>)</mo>
					</mrow>
					<mfrac>
						<mi>&iquest;</mi>
						<mrow>
							<mi>P</mi>
							<mo>(</mo>
							<mi>E</mi>
							<mo>)</mo>
						</mrow>
					</mfrac>
				</mrow>
			</math>

			<p>Como você já deve estar imaginado, quando a fórmula é usada em problemas de classificação, <i>E</i> e <i>H</i> possuem o seguinte significado:</p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>O evento <i>E</i> representa o conjunto de valores de atributos preditivos do novo objeto a ser classificado, ou seja, <span class="code-inline">E = (x<sub>1</sub>, x<sub>2</sub>, ..., x<sub>n</sub>)</span>.</li>
				<li>A hipótese <i>H</i> representa um rótulo de classe, ou seja <span class="code-inline">H &isin; {y<sub>1</sub>, y<sub>2</sub>, ..., y<sub>m</sub>}</span>.</li>
			</ul>
			<!-- Lista não ordenada [fim] -->

			<p>
				Observe que a evidência <i>E</i>, nosso novo objeto a ser classificado, é um objeto composto por um conjunto de valores de <i>n</i> atributos preditivos: <span class="code-inline">E = (x<sub>1</sub>, x<sub>2</sub>, ..., x<sub>n</sub>)</span>.
				Devemos avaliar todas as hipóteses possíveis, o que significa determinar a probabilidade de <i>E</i> pertencer a cada um dos <i>m</i> rótulos de classe existentes {y<sub>1</sub>, y<sub>2</sub>, ..., y<sub>m</sub>}.
			</p>

			<p>O algoritmo NB possui esse nome porque trata todos os atributos como independentes entre si, dado que o valor da classe é conhecido. Embora a suposição seja quase sempre falsa, ela nos permite <strong>dividir a evidência em partes independentes</strong> - exatamente os valores (x<sub>1</sub>, x<sub>2</sub>, ... , x<sub>n</sub>), fazendo com que a regra de Bayes possa ser reescrita da maneira a seguir. Veja que ela é utilizada para estimar a probabilidade do novo objeto pertencer a uma classe específica <i>y<sub>j</sub></i>:</p>

			<math xmlns="http://www.w3.org/1998/Math/MathML" display="block">
				<mi>P</mi>
				<mi>&iquest;</mi>
			</math>

			<p>Essa fórmula reescrita pode então ser utilizada para classificar um novo objeto de uma maneira simples. Mais especificamente, para classificar um novo objeto, o algoritmo NB simplesmente observa as características do novo objeto, recupera os valores correspondentes na tabela de probabilidades e os “pluga” diretamente à fórmula acima. Durante o cálculo, não será preciso utilizar o denominador da fórmula de Bayes, uma vez que ele seria igual tanto para o cálculo da estimativa do rótulo de classe “Não”, como do “Sim”.</p>

			<p>Veja agora como isso funciona na prática. Mostraremos, a seguir, como o algoritmo realiza o cálculo da estimativa para os dois rótulos de classe (dívida_cartão = “Não”) e (dívida_cartão = “Sim”), considerando o novo objeto novoObj = (filhos = “Sim”, escolaridade = “médio”):</p>

			<p><strong>Estimativa para endividado = "Não":</strong></p>

			<table style="margin-left: auto">
				<tr>
					<td style="padding: 5px 0; width:5%"></td>
					<td style="padding: 5px 0; width:20%"><b>3/7</b></td>
					<td style="padding: 5px 0; width:75%">
						<small>P(filhos= “Sim”| dívida_cartão = “Não”)</small>
					</td>
				</tr>
				<tr>
					<td style="padding: 5px 0; width:5%"></td>
					<td style="padding: 5px 0; width:20%"><b>2/7</b></td>
					<td style="padding: 5px 0; width:75%">
						<small>P(escolaridade = “médio” | dívida_cartão = “Não”)</small>
					</td>
				</tr>
				<tr>
					<td style="padding: 5px 0; width:5%">&times;</td>
					<td style="padding: 5px 0; width:20%"><b>7/15</b></td>
					<td style="padding: 5px 0; width:75%">
						<small>P(dívida_cartão = “Não”)</small>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="padding-right: 5%">
						<hr style="border: 2px solid" />
					</td>
					<td></td>
				</tr>
				<td style="padding: 5px 0; width:5%"></td>
				<td style="padding: 5px 0; width:20%"><b>0,0571</b></td>
				<td style="padding: 5px 0; width:75%">
					<small>P(dívida_cartão = “Não”| novoObj)</small>
				</td>
			</table>

			<p><br /></p>
			<p><strong>Estimativa para endividado = "Sim":</strong></p>

			<table style="margin-left: auto">
				<tr>
					<td style="padding: 5px 0; width:5%"></td>
					<td style="padding: 5px 0; width:20%"><b>5/8</b></td>
					<td style="padding: 5px 0; width:75%">
						<small>P(filhos= “Sim”| dívida_cartão = “Sim”)</small>
					</td>
				</tr>
				<tr>
					<td style="padding: 5px 0; width:5%"></td>
					<td style="padding: 5px 0; width:20%"><b>7/8</b></td>
					<td style="padding: 5px 0; width:75%">
						<small>P(escolaridade = “médio” | dívida_cartão = “Sim”)</small>
					</td>
				</tr>
				<tr>
					<td style="padding: 5px 0; width:5%">&times;</td>
					<td style="padding: 5px 0; width:20%"><b>8/15</b></td>
					<td style="padding: 5px 0; width:75%">
						<small>P(dívida_cartão = “Sim”)</small>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="padding-right: 5%">
						<hr style="border: 2px solid" />
					</td>
					<td></td>
				</tr>
				<td style="padding: 5px 0; width:5%"></td>
				<td style="padding: 5px 0; width:20%"><b>0,2916</b></td>
				<td style="padding: 5px 0; width:75%">
					<small>P(dívida_cartão = “Sim”| novoObj)</small>
				</td>
			</table>

			<p>O resultado do exemplo indica que há uma probabilidade estimada bem maior de a família pertencer à classe “Sim” (0,2916) do que à classe “Não” (0,0571). Logo, <i>novoObj</i> é classificado com o rótulo “Sim” pelo NB.</p>

			<p>Para finalizar, mostraremos um recurso que costuma ser utilizado por todas as ferramentas de ciência de dados. Para permitir com que os usuários visualizem o resultado de uma classificação feita pelo NB de uma forma mais agradável, essas ferramentas realizam a conversão dos valores calculados para valores percentuais. Isso é feito da seguinte maneira:</p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>Estimativa para (dívida_cartão = “Nao”) = 0,0571 ÷ (0,0571 + 0,2916) = 16,38%</li>
				<li>Estimativa para (dívida_cartão = “Sim”) = 0,2916 ÷ (0,0571 + 0,2916) = 83,62%</li>
			</ul>
			<!-- Lista não ordenada [fim] -->
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Discussão</h2>

			<p>Vamos iniciar a discussão falando sobre as “suposições ingênuas” usadas pelo NB. O algoritmo NB possui a palavra “naïve” (ingênuo) em seu nome porque se baseia em duas suposições relacionadas aos atributos da base de dados:</p>

			<!-- Lista ordenada [inicio] -->
			<ul class="numeric-list">
				<li>O efeito do valor de um atributo preditivo sobre um atributo classe é independente do valor dos outros atributos preditivos.</li>
				<li>Estimativa para (dívida_cartão = “Sim”) = 0,2916 ÷ (0,0571 + 0,2916) = 83,62%</li>
			</ul>
			<!-- Lista ordenada [fim] -->

			<p>
				Ambas as suposições raramente são verdadeiras na prática, porém são elas que permitem que seja possível utilizar a regra de Bayes de uma maneira válida, isto é, respeitando a Teoria da Probabilidade. Você deve ter notado que o exemplo apresentado envolveu apenas atributos preditivos do tipo categórico. Por isso a versão do algoritmo que foi descrita nesta seção é conhecida como <strong>naïve Bayes categórico</strong>. Mas e se a nossa base de dados também possuir atributos preditivos contínuos? Nesse caso, duas soluções são possíveis. A primeira consiste simplesmente em discretizar os atributos contínuos (convertê-los para faixas de valores – veja como fazer no Módulo 2). A outra solução é assumir que todos os atributos contínuos possuem distribuição gaussiana e computar de acordo com essa suposição (nesse caso, temos a versão conhecida como NB gaussiano).
			</p>
			<p>Outro problema em potencial é a possível existência de valores 0 em células da “tabelona de probabilidades”. Eles são gerados quando um valor de atributo preditivo não ocorre com um determinado rótulo de classe na base de dados de treino. No Quadro 5, é isto que a acontece na célula referente a (dívida_cartão = “Sim”) e (escolaridade = “fundamental”). Mas qual seria o problema do valor 0? O problema é que, no momento de estimarmos a probabilidade de uma classe, ele vai entrar como termo da multiplicação, gerando 0 como resultado da estimativa. Para contornar este problema, as ferramentas de ciência de dados costumam utilizar a técnica conhecida como Correção de Laplace (laplacian smoothing), que consiste basicamente em adicionar constantes ao numerador e denominador em cada célula da tabela que representa o modelo de classificação. Um exemplo é apresentado em <a href="https://courses.cs.washington.edu/courses/cse446/20wi/Section7/naive-bayes.pdf">https://courses.cs.washington.edu/courses/cse446/20wi/Section7/naive-bayes.pdf</a>.</p>
			<p>Por fim, uma breve análise dos pontos fortes e fracos do NB. Com relação aos aspectos positivos, podemos citar principalmente a simplicidade e eficiência (o NB é rápido, de baixo custo computacional). Outra característica positiva é o que o NB produz diretamente estimativas de probabilidade para cada classe. Por fim, como última vantagem, vale mencionar que o NB é uma boa “porta de entrada” para o estudo de Redes Bayesianas e outras técnicas mais sofisticadas que também se baseiam no Teorema de Bayes.</p>
			<p>Já o principal ponto fraco do NB é que seu desempenho preditivo costuma ser afetado quando os dados divergem muito das suposições ingênuas.</p>

		</section>

		<!-- Destaque [inicio] -->
		<section class="feature feature--example cover-image-overlay">
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
				<h2 class="feature__title">naïve Bayes – versões alternativas</h2>
				<p>Além do naïve Bayes categórico, existem versões alternativas do NB. A ferramenta scikit-learn, por exemplo, disponibiliza nada menos do que <a href="https://scikit-learn.org/stable/modules/naive_bayes.html">5 diferentes versões do algoritmo</a>. Dentre elas, destaca-se a versão conhecida como naïve Bayes multinomial, que é muito utilizada para a construção de classificadores a partir de bases de dados de texto. Detalhes completos sobre NB multinomial podem ser obtidos no <a href="https://web.stanford.edu/~jurafsky/slp3/">livro gratuito de PLN</a>. Outra versão bastante conhecida é o NB gaussiano. Para saber mais, <a href="https://www.inf.ufsc.br/~andre.zibetti/probabilidade/normal.html">consulte o link https://www.inf.ufsc.br/~andre.zibetti/probabilidade/normal.html</a></p>
			</div>
		</section>
		<!-- Destaque [fim] -->


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