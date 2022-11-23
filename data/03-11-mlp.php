<?php
// Titulo da unidade
$moduleTitle = "";
// Titulo do topico
$topicTitle = "Métodos de classificação";
// Titulo da pagina
$pageTitle = "Algoritmos de classificação: Multi-Layer Perceptron (MLP)";
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

	.lower-alpha-counter>li::before {
		content: counter(numlist, lower-alpha) '. ';
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
				O Multi-Layer Perceptron (<span class="small-caps">MLP</span>) é um subtipo de rede neural, que pode ser considerado como a porta de
				entrada dos modelos de redes neurais, pois são amplamente utilizados por serem mais simples. Por isso,
				antes de começarmos a falar sobre o <span class="small-caps">MLP</span>, precisamos fazer algumas definições de redes neurais.
			</p>
			<p>
				Uma Rede Neural Artificial (<span class="small-caps">RNA</span>) modela a relação entre um conjunto de entrada e um conjunto de saída.
				As <span class="small-caps">RNA’s</span> são aprendizes versáteis que podem ser aplicadas a praticamente qualquer tarefa de
				ciência de dados: classificação (prever o rótulo de classe de cada objeto),
				regressão (prever uma saída de valor contínuo) e até mesmo reconhecimento de padrões em modelos não
				supervisionados.
			</p>
			<p>
				Conforme ilustrado na Figura 13, o diagrama de rede define uma relação entre os dados de entrada
				(variáveis X) e os dados de saída (variável Y), sendo chamados, respectivamente, de Camada de Entrada
				e Camada de Saída, e cada elemento das camadas representa um nó (ou neurônio). Portanto, no exemplo
				da Figura 13 temos três nós na camada de entrada e apenas um nó na camada de saída. Cada ligação dos
				nós da camada de entrada é ponderado (valores w) de acordo com sua importância, esses pesos são então
				somados e transmitidos de acordo com uma função de ativação denotada por f.
			</p>
		</section>

		<!-- Imagem média [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right">
				<picture>
					<img class="image" src="dist/img/un03/figura13.svg" alt="Exemplo de diagrama de Rede Neural com 2 camadas." />
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Figura 13. Exemplo de diagrama de Rede Neural com 2 camadas.
			</figcaption>
		</figure>
		<!-- Imagem média [fim] -->

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Uma rede neural pode ser definida de acordo com as seguintes características:
			</p>
		</section>

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<ol class="numeric-list">
				<li><strong>Função de ativação</strong>: que transforma a conexão de um neurônio da rede de entrada para ser transmitido adiante.</li>
				<li><strong>Topologia de rede</strong>: que descreve o número de neurônios no modelo, bem como o número de camadas e a maneira como eles estão conectados.</li>
				<li><strong>O algoritmo de treinamento</strong>: que especifica como os pesos das conexões são calculados</li>
			</ol>
		</div>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>1. Função de ativação</h2>
			<p>
				É o mecanismo pelo qual o neurônio processa as informações e as repassa por toda a rede.
				As funções de ativação de <span class="small-caps">RNA</span> podem ser escolhidas com base em sua
				capacidade de demonstrar características matemáticas desejáveis e relacionamentos de modelo entre
				os dados.
			</p>
			<p>
				Talvez a mais utilizada seja a função de ativação sigmóide (ou logística), em que os valores de
				saída podem ser qualquer valor no intervalo de 0 a 1. Ainda existem várias outras opções de funções
				de ativação, tais como: linear, tangente hiperbólica, gaussiana, etc. Uma função de ativação linear
				resulta em uma rede neural muito semelhante a um modelo de regressão linear, enquanto uma função de
				ativação gaussiana resulta em um modelo chamado de rede Radial Basis Function (<span class="small-caps">RBF</span>).
			</p>
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>2. Topologia de rede</h2>
			<p>
				A topologia determina a complexidade das tarefas que podem ser aprendidas pela rede. Embora existam inúmeras
				formas de topologia de rede, elas podem ser diferenciadas por três características principais:
			</p>
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<ol class="numeric-list lower-alpha-counter">
				<li>O número de camadas</li>
				<li>O número de nós em cada camada </li>
				<li>A direção em que as informações caminham na rede</li>
			</ol>
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h3>2.a. Número de Camadas</h3>
			<p>
				Nós vimos na Figura 13 uma rede muito simples, com apenas duas camadas. Os sinais resultantes dos nós de
				entrada são recebidos pelo nó de saída, que usa sua própria função de ativação para gerar uma previsão
				final. Esse tipo de rede é chamado de rede de camada única (em inglês, single-layer network), pois só tem
				um conjunto de pesos.
			</p>
			<p>
				Como você pode esperar, uma maneira de criar redes mais complexas é adicionando camadas intermediárias
				(ou ocultas). Uma rede multicamada (em inglês, multilayer network) adiciona uma ou mais camadas ocultas
				(em inglês, hidden layers) que transmitem os sinais dos nós de entrada antes de alcançar o nó de saída.
				Na Figura 14 temos uma rede com apenas uma camada oculta (com três nós) e dois conjuntos de pesos
				(um conjunto que liga a camada de entrada com a camada oculta, e outro conjunto que liga a camada
				oculta com a camada de saída).
			</p>
		</section>

		<!-- Imagem média [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right">
				<picture>
					<img class="image" src="dist/img/un03/figura14.svg" alt="Exemplo de Rede com 3 camadas: Entrada, Oculta, Saída" />
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Figura 14. Exemplo de Rede com 3 camadas: Entrada, Oculta, Saída.
			</figcaption>
		</figure>
		<!-- Imagem média [fim] -->

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Além disso, no exemplo da Figura 14 temos uma rede multicamada totalmente conectada
				(em inglês, fully connected), o que significa que cada nó de uma camada anterior está conectado a cada
				nó da próxima camada, e embora ocorra na maioria dos casos, isso não é necessário.
			</p>
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h3>2.b. O número de nós em cada camada</h3>
			<p>
				O número de nós da camada de entrada é predeterminado pelo número de atributos nos dados de entrada.
				Em geral, é dado pela quantidade de variáveis X de interesse. Da mesma forma, o número de nós da camada de
				saída é predeterminado pelo número de resultados a serem modelados ou pelo número de rótulos de classe a
				serem classificados, de acordo com a variável alvo Y.
			</p>
			<p>
				No entanto, o número de nós na camada oculta é deixado para o usuário decidir antes de treinar o modelo.
				Infelizmente, não existe uma regra confiável para determinar esse número, mas deve-se levar em conta que
				grandes redes neurais geralmente são mais lentas para treinar.
				Uma prática recomendada é usar a parcimônia, ou seja, o menor número de nós que apresentem um desempenho
				satisfatório em um conjunto de dados de validação. Na maioria dos casos, mesmo com apenas um pequeno número
				de nós ocultos, a rede neural pode oferecer uma enorme capacidade de aprendizado.
			</p>
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h3>2.c. A direção do caminho da informação</h3>
			<p>
				Você deve ter notado que nos exemplos anteriores as pontas das setas foram usadas para indicar a direção
				para onde os sinais são enviados. Redes nas quais o sinal de entrada é alimentado continuamente em uma
				única direção até alcançar a camada de saída são chamadas de redes <i>feedforward</i>.
			</p>
			<p>
				Entretanto, se é permitido que os sinais sejam transmitidos em ambas as direções usando loops, essa rede é
				chamada de <i>feedback</i>. Apesar de seu potencial, as redes feedback ainda são pouco utilizadas na prática.
				Por outro lado, as redes feedforward têm sido amplamente aplicadas aos problemas do mundo real. Na verdade,
				a rede feedforward multicamada é a topologia padrão de uma <span class="small-caps">RNA</span>, e por isso também é chamada de
				<strong>Multi-layer Perceptron (<span class="small-caps">MLP</span>)</strong>.
			</p>
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>3. Algoritmo de Treinamento com retropropagação</h2>
			<p>
				Treinar uma rede neural ajustando os pesos de conexão é muito intensivo computacionalmente.
				À medida que a rede neural processa os dados de entrada, as conexões entre os neurônios são fortalecidas
				ou enfraquecidas, e os pesos de conexão refletem esses padrões observados ao longo do tempo. O algoritmo,
				que usa uma estratégia de retropropagação de erros, agora é conhecido simplesmente como retropropagação
				(em inglês, backpropagation).
				Em sua forma mais geral, pode ser descrito resumidamente:
			</p>
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<ol class="numeric-list">
				<li>iniciar os pesos;</li>
				<li>propagar os dados de entrada (feedforward);</li>
				<li>retropropagar os erros;</li>
				<li>Repete 2 e 3 até que o critério de parada seja satisfeito.</li>
			</ol>
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Na inicialização, normalmente, os pesos iniciais são definidos aleatoriamente. O algoritmo de
				retropropagação passa, portanto, por duas fases iterativas: feedfoward dos dados e retropropagação dos
				erros, em que cada iteração do algoritmo é conhecida como uma época (em inglês, epoch).
				Na fase Feedforward os neurônios são ativados em sequência, partindo da camada de entrada, passando pela
				camada oculta, até alcançar a camada de saída. Ao longo do caminho, são aplicados os pesos e a função de
				ativação em cada neurônio. Ao atingir a camada final, temos um valor estimado na saída.
			</p>
			<p>
				Na fase de retropropagação o valor estimado na saída da fase anterior é comparado com o valor real dos
				dados de treinamento. Essa diferença resulta em um erro que é propagado para trás na rede, para assim
				modificar os pesos e reduzir os erros das próximas épocas. Aqui, os erros partem da camada de saída,
				passando pela camada oculta, até alcançar os pesos da camada de entrada. Com o tempo, a rede usa as
				informações enviadas para trás para atualizar os pesos, e assim reduzir o erro total da rede.
			</p>
			<p>
				Ao fim do algoritmo, os critérios de parada podem ser: os erros da época anterior estão abaixo do limite
				especificado; ou a porcentagem de registros classificados incorretamente na época anterior está abaixo do
				limite especificado; ou quando atinge o número de épocas pré-determinado.
			</p>
			<p>
				O algoritmo de retropropagação usa a derivada da função de ativação de cada nó para identificar a
				direção do gradiente de cada um dos pesos. O gradiente sugere o quanto o erro pode ser reduzido caso
				haja uma mudança no peso. O algoritmo tentará atualizar os pesos que resultam na maior redução no erro
				total da rede, através de uma taxa de aprendizado (em inglês, learning rate). Quanto maior a taxa de
				aprendizado, mais rápido o algoritmo tentará otimizar os gradientes, o que pode reduzir o tempo de
				treinamento.
			</p>
		</section>

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Discussão</h2>
			<p>
				Entre as vantagens da utilização de redes neurais podemos enumerar: adaptação a problemas de
				classificação ou regressão, pois a saída pode ser discreta ou contínua; abordagens de modelagem mais
				precisas; necessita de poucas suposições sobre os relacionamentos subjacentes dos dados; geralmente a
				precisão da previsão é elevada; robusta, pois funciona mesmo quando os dados de treinamento contêm erros.
			</p>
			<p>
				Por outro lado, as desvantagens seriam: a dificuldade de interpretação de como os resultados foram
				gerados; o treinamento pode gerar modelos que subestimam ou sobrestimam os dados; dificuldade em obter
				a topologia mais adequada ao problema; computacionalmente intensivo e tempo longo para treinar,
				principalmente se a topologia da rede for complexa
			</p>
			<p>
				Em relação a esse último ponto, quando há mais de duas camadas ocultas, já pode ser considerado um
				problema de Deep Learning (que não está no escopo desse curso). Onde temos alguns outros tipos de redes
				neurais, tais como: Siamese Neural Network, Convolutional Neural Network, Long short term memory (<span class="small-caps">LSTM</span>)
				network, Deep belief network, etc.
			</p>
			<p><strong>Exemplo</strong></p>
			<p>Pegar uma base de exemplo e fazer o passo-a-passo via R ou Python</p>
			
			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q>Se você desejar aprofundar seus conhecimentos sobre os algoritmos apresentados nessa seção, poderá
					consultar o livro disponibilizado no <a href="https://dataminingbook.info/book_html/">site Datamining</a></q>
			</aside>
			<!-- Realce [fim] -->
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