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
		<div
			class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right"
		>
			<picture>
			<source
				srcset="dist/img/image16.png"
				media="(min-width:1200px)"
			/>
			<source
				srcset="dist/img/image16.png"
				media="(min-width:600px)"
			/>
			<source
				srcset="dist/img/image16.png"
				media="(min-width:1px)"
			/>
			<img
				class="image"
				src="dist/img/image16.png"
				alt="Representação gráfica de uma base de dados de treinamento com objetos de duas classes."
			/>
			</picture>
		</div>
		<figcaption
			class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption"
		>
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
				atributos preditivos, X<sub>1</sub> e X<sub>2</sub>, e um atributo classe Y ∈  {-1, 1} – o <span class="small-caps">SVM</span> adota essa notação em vez de {0, 1}. 
				Veja que há 4 objetos com o rótulo de classe 1 e que há outros 5 da classe -1
			</p>
		
		<!-- Tabela [inicio] -->
		<div class="table-container">
				<table class="table">
					<caption class="table__title">Tabela 7: Base de dados para treinamento de um modelo <span class="small-caps">SVM</span>.</caption>
					<thead>
						<tr>
							<th scope="col">X<sub>1</sub></th>
							<th scope="col">X<sub>2</sub></th>
							<th scope="col">Y</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>5</td>
							<td>1</td>
						</tr>
						<tr>
							<td>4</td>
							<td>5</td>
							<td>1</td>
						</tr>
						<tr>
							<td>2</td>
							<td>8</td>
							<td>1</td>
						</tr>
						<tr>
							<td>3</td>
							<td>6</td>
							<td>1</td>
						</tr>
						<tr>
							<td>8</td>
							<td>3</td>
							<td>-1</td>
						</tr>
						<tr>
							<td>7</td>
							<td>4</td>
							<td>-1</td>
						</tr>
						<tr>
							<td>10</td>
							<td>2</td>
							<td>-1</td>
						</tr>
						<tr>
							<td>10</td>
							<td>5</td>
							<td>-1</td>
						</tr>
						<tr>
							<td>8</td>
							<td>7</td>
							<td>-1</td>
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

		<!-- Imagem média [inicio] -->
		<figure class="img-container">
		<div
			class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right"
		>
			<picture>
			<source
				srcset="dist/img/image17.png"
				media="(min-width:1200px)"
			/>
			<source
				srcset="dist/img/image17.png"
				media="(min-width:600px)"
			/>
			<source
				srcset="dist/img/image17.png"
				media="(min-width:1px)"
			/>
			<img
				class="image"
				src="dist/img/image17.png"
				alt="Um classificador Random Forest ."
			/>
			</picture>
		</div>
		<figcaption
			class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption"
		>
			<div class="img-container__top-line"></div>
			Figura 13. Infinitos hiperplanos separadores com erro de treinamento igual a zero.
		</figcaption>
		</figure>
		<!-- Imagem média [fim] -->
		</section>

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

			<!-- Imagem média [inicio] -->
		<figure class="img-container">
		<div
			class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right"
		>
			<picture>
			<source
				srcset="dist/img/image18.png"
				media="(min-width:1200px)"
			/>
			<source
				srcset="dist/img/image18.png"
				media="(min-width:600px)"
			/>
			<source
				srcset="dist/img/image18.png"
				media="(min-width:1px)"
			/>
			<img
				class="image"
				src="dist/img/image18.png"
				alt="Um classificador Random Forest ."
			/>
			</picture>
		</div>
		<figcaption
			class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption"
		>
			<div class="img-container__top-line"></div>
			Figura 14: <i><span class="small-caps">MMH</span></i> é o hiperplano de margem máxima e <i>d</i> é a margem máxima. 
			Pontos acima (ou à esquerda) de <span class="small-caps">H1</span> pertencem à classe +1 e pontos abaixo (ou à direita) 
			de <span class="small-caps">H2</span> pertencem à classe -1. Os pontos destacados são os mais próximos de <span class="small-caps">MMH</span>
			para cada classe e são chamados de Support Vectors (<span class="small-caps">SVs</span>).
		</figcaption>
		</figure>
		<!-- Imagem média [fim] -->
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<P>
				Ok, mas como a busca é realizada? Para começar, a equação de um hiperplano separador pode ser escrita como: 
				<i>WX + b</i> = 0, onde <i>W</i> = {<i>w<sub>1</sub>, w<sub>2</sub>, ..., w<sub>n</sub></i>} é um vetor de pesos e <i>b</i> é um escalar.
				Qualquer ponto que satisfaça à equação cairá sobre a linha da fronteira. Em nosso exemplo, 
				temos dois atributos preditivos, X<sub>1</sub> e X<sub>2</sub>. Logo a equação do hiperplano separador seria escrita como:
			</P>
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
				wx<sub>i</sub> + b ≥ 1	    se y<sub>i</sub> = 1
			</p>
			<p>
				wx<sub>i</sub> + b ≤ -1	    se y<sub>i</sub> = -1
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
				s.a.  y<sub>i</sub> (wx<sub>i</sub> + b) ≥ 1
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
			
			<!-- Não sei como passar para o html -->
			<p>d(z)=∑_(i=1)^l▒〖yi×αi×xi×t+bo〗</p>
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
		<div
			class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right"
		>
			<picture>
			<source
				srcset="dist/img/image19.png"
				media="(min-width:1200px)"
			/>
			<source
				srcset="dist/img/image19.png"
				media="(min-width:600px)"
			/>
			<source
				srcset="dist/img/image19.png"
				media="(min-width:1px)"
			/>
			<img
				class="image"
				src="dist/img/image19.png"
				alt="Um classificador Random Forest ."
			/>
			</picture>
		</div>
		<figcaption
			class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption"
		>
			<div class="img-container__top-line"></div>
			Figura 15:  Representação gráfica de uma base de dados de treinamento com objetos de duas classes, onde a fronteira de decisão é não linear.
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
		<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>Passo 1: transformamos os dados de entrada originais para uma dimensão maior utilizando um mapeamento não linear.</li>
				<li>Passo 2: procuramos por um hiperplano separador linear no novo espaço. Mais precisamente, buscamos a <span class="small-caps">MMH</span> no novo espaço.</li>
			</ul>
		<!-- Lista não ordenada [fim] -->
		</div>	
		
		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<p>
			Mas como escolher o mapeamento? Como assegurar que, no novo espaço, haverá uma separação linear? 
			Felizmente existe uma solução padrão: aplicar uma <strong>função Kernel</strong> aos dados originais. Trata-se de um tipo 
			de função que garante a existência de uma separação linear no novo espaço e que nos possibilita evitar 
			cálculos complexos para realizar a operação de mapeamento. Alguns exemplos de função Kernel são: 
			Kernel polinomial de grau p, Gaussian Radial Basis Function Kernel (<span class="small-caps">RBF</span>) e Sigmoid Kernel.  Veja mais em: 
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
		
		
		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
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