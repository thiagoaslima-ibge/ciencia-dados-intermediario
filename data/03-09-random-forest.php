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
			<p>
				Suponha que seu computador está travando com frequência e você deseja descobrir o motivo. 
				Em vez de chamar apenas um técnico para examiná-lo, você poderia optar por chamar vários.
				Neste caso, se uma determinada causa para o problema for mais citada do que qualquer outra,
				você a consideraria como a diagnóstico correto. Ou seja, a causa do problema de travamento seria determinada
				de acordo com uma espécie de votação majoritária, onde cada técnico daria o seu voto. A sua expectativa é que
				considerar a opinião mais prevalente de um grupo de técnicos é mais confiável do que levar em conta a opinião
				de um único profissional.
			</p>
			<p>
				A Floresta Aleatória (<i>Random Forest</i> – <span class="small-caps">RF</span>) é uma técnica de classificação
				que trabalha com uma ideia similar. Ela combina as decisões de múltiplos modelos para otimizar a eficácia do 
				processo de classificação. Mais especificamente, uma <span class="small-caps">RF</span> é um <strong>modelo de 
				classificação composto</strong>, que é formado por um conjunto <i>(ensemble)</i> de classificadores do tipo árvore
				de decisão. Cada árvore de decisão do grupo é gerada com o uso de subconjuntos independentes e aleatórios de atributos e 
				objetos. Para prever a classe de um novo objeto, cada classificador individual vota e a classe mais popular 
				é devolvida ao usuário.
			</p>
			<p>
				A Figura 7 resume o funcionamento de um classificador <span class="small-caps">RF</span>. Nas subseções a seguir,
				utilizaremos essa figura como base para explicar as etapas de treinamento e classificação da
				<span class="small-caps">RF</span>.
			</p>
		</section>	
			
		<!-- Imagem média [inicio] -->
		<figure class="img-container">
		<div
			class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right"
		>
			<picture>
			<img
				class="image"
				src="dist/img/un03/figura07.svg"
				alt="Princípio de funcionamento da Random Forest."
			/>
			</picture>
		</div>
		<figcaption
			class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption"
		>
			<div class="img-container__top-line"></div>
			Figura 7: Princípio de funcionamento da Random Forest.
		</figcaption>
		</figure>
		<!-- Imagem média [fim] -->
		
		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Etapa de Treinamento</h2>
			<p>
				Um modelo <span class="small-caps">RF</span> combina uma série de <i>k</i> modelos de árvore de decisão,
			 	AD<sub>1</sub>, AD<sub>2</sub>, ..., AD<sub>k</sub>, com o objetivo de criar um modelo composto otimizado
				de classificação. Cada árvore de decisão individual é também chamada de classificador base
				(<i>base classifier</i>).
			</p>
			<p>
				Como ocorre com qualquer técnica de classificação, antes de qualquer coisa precisamos de uma base de dados
				de treinamento <i>D</i>, composta por <i>d</i> objetos. O treinamento das <i>k</i> árvores de decisão 
				(lado esquerdo da Figura 7) que compõem a <span class="small-caps">RF</span> é feito em <i>k</i> iterações.
				Para cada iteração (<i>i=1, 2, ..., k</i>), um conjunto de treinamento <i>D<sub>i</sub></i>, com d objetos é gerado a partir de
				um processo de amostragem com reposição. Sendo assim, cada D<sub>i</sub> tem o mesmo número de objetos do que 
				a base de treinamento original <i>D</i>, porém alguns objetos podem aparecer mais de uma vez, enquanto outros
				podem não ocorrer em D<sub>i</sub>. Esse processo também é conhecido como <i>bootstrapping</i>.
			</p>
			<p>
				A cada iteração <i>i</i>, uma árvore de decisão <i>AD<sub>i</sub></i> é treinada a partir de <i>D<sub>i</sub></i> com o uso do
			 	algoritmo <span class="small-caps">CART</span> (ou outro algoritmo de construção de <span class="small-caps">ADs</span>). 
				As árvores devem ser criadas com tamanho máximo e sem poda. Entretanto, a cada nó de <i>AD<sub>i</sub></i>,
				apenas um <strong>subconjunto de atributos candidatos</strong> é considerado para decidir qual será a melhor
				divisão. Esse subconjunto é <strong>definido de maneira aleatória</strong>.
			</p>
			<p>
				O modelo final será então composto por diversas árvores, que possuirão estruturas diferentes em termos de
				quantidade e disposição dos nós (Figura 8), uma vez que cada uma foi treinada a partir de um subconjunto
				diferente de observações e atributos, sempre determinados de forma independente e aleatória. Daí, o nome 
				Floresta Aleatória.
			</p>
		</section>
		
		<!-- Imagem média [inicio] -->
		<figure class="img-container">
		<div
			class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right"
		>
			<picture>
			<img
				class="image"
				src="dist/img/un03/figura08.svg"
				alt="Um classificador Random Forest ."
			/>
			</picture>
		</div>
		<figcaption
			class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption"
		>
			<div class="img-container__top-line"></div>
			Figura 8: Um classificador Random Forest é composto por um grupo de k árvores de decisão com estrutura distinta.
		</figcaption>
		</figure>
		<!-- Imagem média [fim] -->

		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Etapa de Classificação</h2>
				<p>
					Uma vez que a <span class="small-caps">RF</span> tenha sido gerada, o processo para classificar um novo objeto
					(lado direito da Figura 7) é muito simples. Durante a classificação, cada árvore vota 
					(ou seja, determina individualmente a classe do objeto) e a classe mais votada é retornada.
				</p>
		</section>
		
		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Discussão</h2>
				<p>
					Um modelo <span class="small-caps">RF</span> tende a ter um desempenho preditivo superior do que cada uma de 
					suas árvores de decisão individualmente. Intuitivamente, podemos ter a percepção de que os classificadores base
					(árvores) que compõem a <span class="small-caps">RF</span> até poderão cometer erros de classificação,
					porém a <span class="small-caps">RF</span> propriamente dita só errará a classificação de um novo objeto
					quando mais da metade deles se equivocarem. 
				</p>
				<p>
					De fato, muitos trabalhos recentes demonstram que, nos mais diversos domínios de aplicação, 
					as <span class="small-caps">RFs</span> possuem
					desempenho preditivo tão bom quanto o de métodos bem mais complexos e computacionalmente caros, 
					como as redes neurais profundas. Elas oferecem ainda a vantagem de serem eficientes em bases de dados 
					muito volumosas, já que consideram um número reduzido de atributos candidatos para gerar cada nó. 
					Ainda falando sobre eficiência, é importante observar que as etapas de treinamento e classificação
					da <span class="small-caps">RF</span> são facilmente paralelizáveis, pois cada árvore individual pode ser alocada
					a uma diferente <span class="small-caps">CPU</span> do computador.
				</p>
				<p>
					As <span class="small-caps">RFs</span> obtêm melhores resultados quando há diversidade entre os classificadores base
					que a compõem, ou seja, de maneira ideal, deve existir baixa correlação entre as suas <span class="small-caps">ADs</span>. Diferentes observações
					empíricas demonstraram que as <span class="small-caps">RFs</span> não são sensíveis ao número de atributos selecionados como candidatos a cada nó.
					Considerando uma base composta por <i>d</i> atributos, tipicamente <i>log2(d + 1)</i> costumam ser escolhidos.
				</p>
				<p>
					Em resumo, um modelo <span class="small-caps">RF</span> tende a possuir acurácia muito superior a uma árvore de decisão gerada pelo <span class="small-caps">CART</span>. 
					Esta melhora na acurácia ocorre principalmente porque o modelo composto reduz a variância dos classificadores
					individuais. Porém, uma importante desvantagem das <span class="small-caps">RFs</span> em relação ao <span class="small-caps">CART</span> – e que é relevante para problemas
					no âmbito do serviço público – é o fato de que uma <strong><span class="small-caps">RF</span> não é diretamente interpretável</strong>, ao contrário do que
					ocorre com uma árvore de decisão.
				</p>
		</section>	
			
		<!-- Destaque [inicio] -->
		<section class="feature feature--example">
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
					<h2 class="feature__title">Ensembles</h2>
					<p>
						A técnica Random Forest é a mais conhecida dentre as técnicas para a construção de modelos
						compostos, mais conhecidos como ensembles (ou <i>ensemble models</i>). Porém existem algumas outras técnicas
						para o aprendizado de <i>ensembles</i>, como <i>Bagging Meta-Estimator</i>, <i>AdaBoost</i> e <i>Gradient Boosting</i>,
						entre outras. Para uma introdução ao tema, consulte o artigo disponibilizado em
						<a href="https://www.analyticsvidhya.com/blog/2018/06/comprehensive-guide-for-ensemble-models/">
						https://www.analyticsvidhya.com/blog/2018/06/comprehensive-guide-for-ensemble-models/
						</a>
					</p>
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