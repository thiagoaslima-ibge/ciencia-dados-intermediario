<?php
// Titulo da unidade
$moduleTitle = "";
// Titulo do topico
$topicTitle = "Métodos de classificação";
// Titulo da pagina
$pageTitle = "Algoritmos de classificação: <i>Support Vector Machine</i> (SVM)";
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
			<p>
				<span class="small-caps">SVM</span> é um algoritmo desenvolvido em grande parte na <span class="small-caps">AT&T Bell</span>, cujo primeiro artigo
				científico contendo a sua descrição foi publicado no início dos anos 90. Ele é, sem dúvida, o mais complexo
				dentre os algoritmos de classificação introduzidos neste curso. Porém, a sua intuição não é difícil de ser
				entendida. Veja a seguir.
			</p>
			<p>
				Considere a base de treinamento representada graficamente na Figura 12. Nela, temos objetos de duas classes –
				quadradinhos vermelhos e bolinhas azuis – e uma fronteira de decisão gerada por algum algoritmo de classificação.
				Esta fronteira de decisão separa os objetos dessas classes. Ela pode também ser chamada de <strong>hiperplano separador</strong>.
				A figura mostra ainda dois novos objetos <i>A</i> e <i>B</i>, que deverão ser classificados de acordo com o hiperplano separador.
			</p>
		</section>

		<!-- Imagem média [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/unidade-03/image16.png" media="(min-width:1200px)" />
					<source srcset="dist/img/unidade-03/image16.png" media="(min-width:600px)" />
					<source srcset="dist/img/unidade-03/image16.png" media="(min-width:1px)" />
					<img class="image" src="dist/img/unidade-03/image16.png" alt="Representação gráfica de uma base de dados de treinamento com objetos de duas classes." />
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Figura 12. Representação gráfica de uma base de dados de treinamento com objetos de duas classes. Apresenta-se ainda um hiperplano separador dos objetos dessas classes e dois novos objetos A e B.
			</figcaption>
		</figure>
		<!-- Imagem média [fim] -->

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Observando a figura, vemos que <i>A</i> está muito distante da fronteira gerada pelo algoritmo. Sendo assim,
				se você “arriscasse” uma predição para <i>A</i>, certamente diria que é um objeto da classe quadradinho vermelho
				com <strong>muita confiança</strong>. Por outro lado, o novo objeto <i>B</i> está muito próximo da fronteira, mas ainda do lado dos
				objetos da classe quadradinho vermelho. É natural pensar que caso essa fronteira se movimentasse um pouco,
				talvez <i>B</i> passasse para o lado das bolinhas azuis. Na prática, a movimentação da fronteira pode ocorrer em
				diferentes situações. Por exemplo, se obtivermos novos objetos de treinamento e construirmos novamente o modelo
				com a base de dados modificada. Ou então se usarmos a mesma base de treinamento, porém empregando outro algoritmo
				para aprender o modelo.
			</p>
			<p>
				Sendo assim, intuitivamente, temos muito mais confiança na predição de <i>A</i> do que de <i>B</i>. Em outras palavras,
				se tivéssemos que escolher um dentre os dois novos objetos para apostar qual deles é da classe quadradinho vermelho,
				certamente preferiríamos apostar em <i>A</i> para não corrermos risco de perder dinheiro! E o <span class="small-caps">SVM</span> trabalha exatamente
				considerando essa ideia: a partir de uma base de dados de treinamento, é interessante encontrar uma fronteira de
				decisão que nos permita fazer todas as classificações de forma correta e com a maior confiança possível. Para tal,
				o <span class="small-caps">SVM</span> busca pela fronteira que tenha a máxima distância para os objetos das duas classes.
			</p>
			<p>
				Na próxima seção, apresentamos a ideia básica adotada na etapa de treinamento do algoritmo. Como mencionado no
				início da seção, o algoritmo é complexo e utiliza diversas técnicas matemáticas (desde princípios da geometria
				analítica até técnicas de otimização). Uma explicação detalhada sobre o <span class="small-caps">SVM</span> necessita de muitas páginas de texto
				e se encontra fora do escopo de nosso curso. Porém, pode ser encontrada em
				<a href="https://see.stanford.edu/materials/aimlcs229/cs229-notes3.pdf">
					https://see.stanford.edu/materials/aimlcs229/cs229-notes3.pdf
				</a>.
			</p>

		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Etapa de Treinamento</h2>
			<p>
				O princípio para treinar um classificador <span class="small-caps">SVM</span> será explicado com o uso da base de dados da Tabela 7. Ela contém dois
				atributos preditivos, X<sub>1</sub> e X<sub>2</sub>, e um atributo classe <span class="code-inline">Y ∈ {-1, 1}</span> – o <span class="small-caps">SVM</span> adota essa notação em vez de {0, 1}.
				Veja que há 4 objetos com o rótulo de classe 1 e que há outros 5 da classe -1
			</p>

			<!-- Tabela [inicio] -->
			<div class="table-container">
				<table class="table">
					<caption class="table__title">Tabela 7: Base de dados para treinamento de um modelo <span class="small-caps">SVM</span>.</caption>
					<thead>
						<tr>
							<th class="table__numeric-col-heading" scope="col">X<sub>1</sub></th>
							<th class="table__numeric-col-heading" scope="col">X<sub>2</sub></th>
							<th class="table__numeric-col-heading" scope="col">Y</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="table__numeric-values">1</td>
							<td class="table__numeric-values">5</td>
							<td class="table__numeric-values">1</td>
						</tr>
						<tr>
							<td class="table__numeric-values">4</td>
							<td class="table__numeric-values">5</td>
							<td class="table__numeric-values">1</td>
						</tr>
						<tr>
							<td class="table__numeric-values">2</td>
							<td class="table__numeric-values">8</td>
							<td class="table__numeric-values">1</td>
						</tr>
						<tr>
							<td class="table__numeric-values">3</td>
							<td class="table__numeric-values">6</td>
							<td class="table__numeric-values">1</td>
						</tr>
						<tr>
							<td class="table__numeric-values">8</td>
							<td class="table__numeric-values">3</td>
							<td class="table__numeric-values">-1</td>
						</tr>
						<tr>
							<td class="table__numeric-values">7</td>
							<td class="table__numeric-values">4</td>
							<td class="table__numeric-values">-1</td>
						</tr>
						<tr>
							<td class="table__numeric-values">10</td>
							<td class="table__numeric-values">2</td>
							<td class="table__numeric-values">-1</td>
						</tr>
						<tr>
							<td class="table__numeric-values">10</td>
							<td class="table__numeric-values">5</td>
							<td class="table__numeric-values">-1</td>
						</tr>
						<tr>
							<td class="table__numeric-values">8</td>
							<td class="table__numeric-values">7</td>
							<td class="table__numeric-values">-1</td>
						</tr>
					</tbody>
				</table>
			</div>
			<!-- Tabela [fim] -->
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Se representarmos essa base de dados graficamente, veremos que os dados são <strong>linearmente separáveis</strong>.
				Isso significa que uma linha reta (hiperplano) pode ser desenhada de modo que os objetos da classe +1
				fiquem de um lado e os da classe -1 do outro (dizemos que a reta gera um modelo com erro de treinamento igual a 0).
				Mais precisamente, infinitos hiperplanos separadores poderiam ser desenhados como mostra a Figura 13.
				Todos esses hiperplanos classificam perfeitamente os objetos de treinamento. Porém, não há garantias de que
				a mesma performance se repetirá para novos objetos. Desta forma, o <span class="small-caps">SVM</span> deverá escolher um deles,
				baseado em quão bem funcionará para novos objetos.
			</p>
		</section>

		<!-- Imagem média [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/unidade-03/image17.png" media="(min-width:1200px)" />
					<source srcset="dist/img/unidade-03/image17.png" media="(min-width:600px)" />
					<source srcset="dist/img/unidade-03/image17.png" media="(min-width:1px)" />
					<img class="image" src="dist/img/unidade-03/image17.png" alt="Um classificador Random Forest ." />
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Figura 13. Infinitos hiperplanos separadores com erro de treinamento igual a zero.
			</figcaption>
		</figure>
		<!-- Imagem média [fim] -->


		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Mas então, qual hiperplano será escolhido? A resposta é: o <span class="small-caps">SVM</span> irá procurar
				pelo <strong>hiperplano de margem máxima</strong> (<i>Maximum Margin Hyperplane</i> – <span class="small-caps">MMH</span>). Basicamente é o hiperplano que consegue
				classificar perfeitamente os objetos de treino e, ao mesmo tempo, é capaz de produzir a maior distância (margem)
				entre qualquer objeto da classe -1 e qualquer outro objeto da classe 1. A Figura 14 mostra um exemplo.
			</p>
			<p>
				Mas por que encontrar o <span class="small-caps">MMH</span>? Da intuição apresentada no início da aula, nós vimos que em um hiperplano onde
				a margem é pequena, qualquer perturbação na fronteira de decisão pode ter impacto significante na classificação.
				Em outras palavras, fronteiras com margem pequena são mais suscetíveis ao superajuste – quando o classificador se
				ajustou em excesso ao conjunto de treinamento. Portanto, quanto maior a margem, maior a confiança da predição e
				menor a chance de ter havido superajuste.
			</p>
		</section>

		<!-- Imagem média [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-3 col-md-8 col-md-offset-5 col-lg-6 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/unidade-03/image18.png" media="(min-width:1200px)" />
					<source srcset="dist/img/unidade-03/image18.png" media="(min-width:600px)" />
					<source srcset="dist/img/unidade-03/image18.png" media="(min-width:1px)" />
					<img class="image" src="dist/img/unidade-03/image18.png" alt="Um classificador Random Forest ." />
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Figura 14: <i><span class="small-caps">MMH</span></i> é o hiperplano de margem máxima e <i>d</i> é a margem máxima.
				Pontos acima (ou à esquerda) de <span class="small-caps">H1</span> pertencem à classe +1 e pontos abaixo (ou à direita)
				de <span class="small-caps">H2</span> pertencem à classe -1. Os pontos destacados são os mais próximos de <span class="small-caps">MMH</span>
				para cada classe e são chamados de Support Vectors (<span class="small-caps">SVs</span>).
			</figcaption>
		</figure>
		<!-- Imagem média [fim] -->

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Ok, mas como a busca é realizada? Para começar, a equação de um hiperplano separador pode ser escrita como:
				<i>WX + b</i> = 0, onde <i>W</i> = {<i>w<sub>1</sub>, w<sub>2</sub>, ..., w<sub>n</sub></i>} é um vetor de pesos e <i>b</i> é um escalar.
				Qualquer ponto que satisfaça à equação cairá sobre a linha da fronteira. Em nosso exemplo,
				temos dois atributos preditivos, X<sub>1</sub> e X<sub>2</sub>. Logo a equação do hiperplano separador seria escrita como:
			</p>
			<p>
				<i>w<sub>1</sub>x<sub>1</sub> + w<sub>2</sub>x<sub>2</sub> + b</i> = 0
			</p>
			<p>
				Podemos reescalar os parâmetros w e b de forma que 2 hiperplanos paralelos H1 e H2 sejam expressos
				na forma abaixo. Assim, qualquer objeto sobre ou acima de H1 pertence à classe +1 e qualquer objeto
				sobre ou abaixo de H2 pertence à classe -1 (ambos são mostrados na Figura 14).
			</p>
			<p>
				H1: <i>w<sub>1</sub>x<sub>1</sub> + w<sub>2</sub>x<sub>2</sub> + b</i> = 1
			</p>
			<p>
				H2: <i>w<sub>1</sub>x<sub>1</sub> + w<sub>2</sub>x<sub>2</sub> + b</i> = -1
			</p>
			<p>
				Observando a Figura 14, podemos notar que temos dois pontos, um quadradinho e uma bolinha, que são os
				mais próximos de H1 e H2, respectivamente. Eles são chamados de <strong>Support Vectors</strong> (<span class="small-caps">SVs</span>).
				O objetivo do <span class="small-caps">SVM</span> é exatamente encontrar esses <span class="small-caps">SV’s</span> e, por consequência, encontrar a <span class="small-caps">MMH</span>.
			</p>
			<p>
				Treinar o SVM, na verdade, envolve estimar os parâmetros w e b do modelo. Eles devem ser escolhidos de
				modo que as duas condições sejam satisfeitas:
			</p>
			<p>
				wx<sub>i</sub> + b ≥ 1 se y<sub>i</sub> = 1
			</p>
			<p>
				wx<sub>i</sub> + b ≤ -1 se y<sub>i</sub> = -1
			</p>
			<P>
				Essas inequações acima podem ser reescritas como:
			</P>
			<p>
				y<sub>i</sub> (wx<sub>i</sub> + b) ≥ 1
			</p>
			<p>
				Não seria difícil resolvê-la, mas o <span class="small-caps">SVM</span> impõe um requisito adicional: a margem deve ser máxima!
				E maximizar a margem equivale a minimizar a seguinte função objetivo:
			</p>
			<p>
				f(w) = ||w||<sup>2</sup> / 2
			</p>
			<p>
				Então, temos o problema final definido:
			</p>
			<p>
				Minimizar ||w||<sup>2</sup> / 2
			</p>
			<p>
				s.a. y<sub>i</sub> (wx<sub>i</sub> + b) ≥ 1
			</p>
			<p>
				A função objetivo é quadrática e as restrições lineares em <i>w</i> e <i>b</i>. Trata-se de um problema de otimização
				convexo, resolvido pelo método padrão “multiplicador de Lagrange”
				(consulte <a href="https://see.stanford.edu/materials/aimlcs229/cs229-notes3.pdf">
					https://see.stanford.edu/materials/aimlcs229/cs229-notes3.pdf</a> para obter detalhes).
				Não é algo trivial de ser resolvido, mas felizmente os softwares estatísticos costumam ter pacotes
				para resolver problemas deste tipo.
			</p>
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Etapa de Classificação</h2>
			<p>
				O produto final do treinamento de um classificador <span class="small-caps">SVM</span>
				é uma equação que define a <span class="small-caps">MMH</span> e é baseada na formulação Lagrangiana:
			</p>

			<math xmlns:mml="http://www.w3.org/1998/Math/MathML" display="block">
				<mi>d</mi>
				<mo>(</mo>
				<mi>z</mi>
				<mo>)</mo>
				<mo>=</mo>
				<mrow>
					<msubsup>
						<mo stretchy="false">∑</mo>
						<mrow>
							<mi>i</mi>
							<mo>=</mo>
							<mn>1</mn>
						</mrow>
						<mrow>
							<mi>l</mi>
						</mrow>
					</msubsup>
					<mrow>
						<mi>y</mi>
						<mi>i</mi>
						<mo>×</mo>
						<mi>α</mi>
						<mi>i</mi>
						<mo>×</mo>
						<mi>x</mi>
						<mi>i</mi>
						<mo>×</mo>
						<mi>t</mi>
						<mo>+</mo>
						<mi>b</mi>
						<mi>o</mi>
					</mrow>
				</mrow>
			</math>

			<p>
				É a partir dessa fórmula que podemos classificar novos objetos. Basicamente, basta “plugar” as
				informações de um novo objeto (representado na fórmula por <i>t</i>). Se o resultado for positivo, o
				novo objeto será classificado como +1 e se o resultado for negativo, ele será classificado como -1.
			</p>
			<p>
				Os componentes da fórmula são os seguintes:
			</p>
		</section>

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>l: número de <span class="small-caps">SV’s</span></li>
				<ul class="bulleted-list bulleted-list--sublist">
					<li>Para dados linearmente separáveis, os <span class="small-caps">SV’s</span> são um subconjunto dos objetos de treino.</li>
					<li>Veja que no somatório, os <span class="small-caps">SV’s</span> são os únicos objetos da base de treinamento que são levados em consideração.</li>
				</ul>
				<li>xi: é um SV.</li>
				<li>yi: rótulo de classe do SV xi</li>
				<li>t: objeto de teste</li>
				<li>&alpha; e bo: parâmetros numéricos determinados pelo algoritmo <span class="small-caps">SVM</span> (&alpha;i são multiplicadores Lagrangianos)</li>
			</ul>
			<!-- Lista não ordenada [fim] -->
		</div>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Discussão</h2>
			<p>
				Para o algoritmo <span class="small-caps">SVM</span>, os <span class="small-caps">SV’s</span> são os objetos de treinamento essenciais. Incrivelmente, se todos os outros
				objetos forem removidos e o treinamento repetido, o mesmo hiperplano separador será encontrado. Com isso,
				o <span class="small-caps">SVM</span> consegue definir um modelo de classificação baseado em pouquíssimos elementos da base de dados original.
			</p>
			<p>
				Nosso exemplo abordou uma situação onde os dados eram linearmente separáveis. Porém, o <span class="small-caps">SVM</span> pode ser estendido
				para o caso em que os dados possuem fronteira de decisão não linear, isto é, quando não é possível traçar uma
				reta que separe perfeitamente as classes, como é o caso da base de dados representada na Figura 15.
			</p>
		</section>

		<!-- Imagem média [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right">
				<picture>
					<source srcset="dist/img/unidade-03/image19.png" media="(min-width:1200px)" />
					<source srcset="dist/img/unidade-03/image19.png" media="(min-width:600px)" />
					<source srcset="dist/img/unidade-03/image19.png" media="(min-width:1px)" />
					<img class="image" src="dist/img/unidade-03/image19.png" alt="Um classificador Random Forest ." />
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Figura 15: Representação gráfica de uma base de dados de treinamento com objetos de duas classes, onde a fronteira de decisão é não linear.
			</figcaption>
		</figure>
		<!-- Imagem média [fim] -->
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Para situações deste tipo, o <span class="small-caps">SVM</span> é estendido com dois passos:
			</p>
		</section>

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<!-- Lista de definicao [inicio] -->
			<dl class="definition-list">
				<dt>Passo 1:</dt>
				<dd>transformamos os dados de entrada originais para uma dimensão maior utilizando um mapeamento não linear.</dd>
				<dt>Passo 2:</dt>
				<dd>procuramos por um hiperplano separador linear no novo espaço. Mais precisamente, buscamos a <span class="small-caps">MMH</span> no novo espaço.</dd>
			</dl>
			<!-- Lista de definicao [fim] -->
		</div>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Mas como escolher o mapeamento? Como assegurar que, no novo espaço, haverá uma separação linear?
				Felizmente existe uma solução padrão: aplicar uma <strong>função Kernel</strong> aos dados originais. Trata-se de um tipo
				de função que garante a existência de uma separação linear no novo espaço e que nos possibilita evitar
				cálculos complexos para realizar a operação de mapeamento. Alguns exemplos de função Kernel são:
				Kernel polinomial de grau p, Gaussian Radial Basis Function Kernel (<span class="small-caps">RBF</span>) e Sigmoid Kernel. Veja mais em:
				<a href="https://www.kdnuggets.com/2016/06/select-support-vector-machine-kernels.html">
					https://www.kdnuggets.com/2016/06/select-support-vector-machine-kernels.html
				</a>.
			</p>
			<p>
				Conforme visto, o <span class="small-caps">SVM</span> realiza apenas a classificação binária. Porém, é possível estendê-lo para a
				classificação multiclasse utilizando abordagens simples. Por exemplo, dados <i>m</i> rótulos de classes, treinar
				<i>m</i> classificadores binários (um para cada rótulo classe). Neste caso, um objeto de teste será associado
				ao maior valor positivo entre as previsões de todos os classificadores. Há algumas outras abordagens
				possíveis e mais informações podem ser obtidas em
				<a href="https://www.kdnuggets.com/2020/08/one-vs-rest-one-multi-class-classification.html">
					https://www.kdnuggets.com/2020/08/one-vs-rest-one-multi-class-classification.html
				</a>.
			</p>
			<p>
				O <span class="small-caps">SVM</span> é efetivo em espaços de grande dimensão e, nestes casos, costuma ter performance preditiva superior
				à de métodos mais simples, como <span class="small-caps">CART</span>, <span class="small-caps">k-NN</span> e naïve Bayes. Ele tem sido utilizado para resolver problemas
				práticos das mais diversas áreas – o algoritmo é versátil, tendo em vista que diferentes funções Kernel
				podem ser especificadas como função de mapeamento. Suas principais desvantagens são a complexidade, o fato
				de ser um classificador caixa-preta e o alto tempo de treinamento.
			</p>
		</section>

</main>

<?php include "foot.php"; ?>

<script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js" />

<!-- Inclua o script a seguir para utilizar o componente Tooltip -->
<script src="dist/js/vendor/tooltipster.bundle.min.js"></script>

<!-- Inclua o script a seguir para utilizar o componente Carrossel -->
<script src="dist/js/vendor/slick.min.js"></script>

</body>

</html>