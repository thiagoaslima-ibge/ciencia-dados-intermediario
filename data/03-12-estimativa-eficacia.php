<?php
// Titulo da unidade
$moduleTitle = "";
// Titulo do topico
$topicTitle = "Como avaliar a qualidade de um classificador";
// Titulo da pagina
$pageTitle = "Estimativa da eficácia de um modelo de classificação";
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
				Ao longo desse módulo, aprendemos que, para criar um classificador basta termos em mãos uma base de 
				dados de treinamento e escolhermos um algoritmo de classificação. Entretanto, antes de colocar um 
				classificador em produção é preciso <strong>estimar a sua eficácia</strong> (ou desempenho preditivo), isto é, determinar, 
				com algum grau de certeza, se o classificador terá um bom desempenho para classificar novos objetos. 
				Afinal de contas, um classificador que faz muitas previsões erradas não teria utilidade prática. 
				Mas como fazer essa estimativa? O princípio fundamental empregado na avaliação de classificadores consiste em 
				<strong>utilizar um conjunto de dados de teste</strong> formado por objetos que <strong>não estiveram envolvidos no processo de 
				treinamento</strong> do classificador.  Basicamente, deve-se aferir se o modelo gerado com os dados de treinamento 
				conseguirá acertar uma quantidade significativa de classificações quando aplicado aos objetos de teste. 
				Ou seja, iremos verificar se a <strong>acurácia</strong> (percentual de classificações corretas) do modelo será alta com os 
				objetos de teste – objetos que não fizeram parte do treinamento e que, por isso, são “novos objetos” para o 
				classificador. 
			</p>
			<p>
				As duas próximas subseções introduzem, respectivamente, os métodos para avaliação de classificadores e 
				as medidas que podem ser empregadas para mensurar diferentes aspectos relacionados ao desempenho 
				preditivo de um classificador
			</p>
		</section>
			
		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>1. Métodos para a Avaliação de Modelos de Classificação </h2>
			<p>
				O método conhecido como <i>holdout</i> é o mais simples dentre os utilizados para a avaliação de modelos de 
				classificação. Nesta abordagem, a base de dados rotulada é dividida de forma aleatória em dois conjuntos 
				(ou partições) independentes: conjunto de treinamento e conjunto de teste (Figura 18). Tipicamente, dois terços 
				dos dados são alocados para treino e o terço restante é alocado para teste. A divisão deve ser feita de maneira 
				aleatória, mas idealmente o processo deve garantir que cada classe seja adequadamente representada tanto no 
				conjunto de treinamento como no de teste (processo conhecido como estratificação). Uma vez que as duas 
				partições tenham sido definidas, a partição de treino é usada para criar o modelo e a partição de teste para 
				testá-lo – testar significa medir a acurácia (e outros indicadores) do modelo na partição de teste. 
			</p>
		</section>

			<!-- Imagem média [inicio] -->
			<figure class="img-container">
		<div
			class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right"
		>
			<picture>
			<source
				srcset="dist/img/image22.png"
				media="(min-width:1200px)"
			/>
			<source
				srcset="dist/img/image22.png"
				media="(min-width:600px)"
			/>
			<source
				srcset="dist/img/image22.png"
				media="(min-width:1px)"
			/>
			<img
				class="image"
				src="dist/img/image21.png"
				alt="Partições geradas pelo método holdout. "
			/>
			</picture>
		</div>
		<figcaption
			class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption"
		>
			<div class="img-container__top-line"></div>
			Figura 18: Partições geradas pelo método <i>holdout</i>. 
		</figcaption>
		</figure>
		<!-- Imagem média [fim] -->
			
		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				O método <i>holdout</i> é simples, mas tem uma desvantagem importante: para estimar se um classificador possui boa 
				qualidade ou não, ele aposta todas as suas fichas em uma <strong>única avaliação</strong> envolvendo um modelo construído com uma 
				partição de treino e testado com uma partição de teste, ambas definidas de forma aleatória. Fazer um único teste 
				usando apenas essas duas partições parece um pouco arriscado, não?
			</p>
			<p>
				Felizmente, existem técnicas capazes de obter estimativas mais confiáveis para o desempenho preditivo 
				de um classificador.  Uma delas é a validação cruzada (<i>cross-validation</i>). Nesta técnica, a base rotulada 
				é dividida em <i>k</i> partições (<i>folds</i>) <i>D<sub>1</sub>, D<sub>2</sub>, ..., D<sub>k</sub></i>, onde todas deverão ter o tamanho igual ou 
				aproximadamente igual. Na Figura 19, apresenta-se um exemplo onde <i>k</i>=10, um dos valores mais comumente 
				utilizados. Após a divisão, são realizadas <i>k</i> rodadas de treino e teste. A cada iteração <i>i</i>, 
				a partição <i>D<sub>i</sub></i> é reservada para teste e as <i>k-1</i> partições restantes são utilizadas para treinar o modelo. 
				Por exemplo, para <i>k</i>=1, reserva-se as observações pertencentes a <i>D<sub>1</sub></i> para teste, e utiliza-se as 
				observações pertencentes a <i>D<sub>2</sub></i> até as pertencentes a <i>D<sub>10</sub></i> para treinamento. Quando <i>k</i>=2, reserva-se as 
				observações de <i>D<sub>2</sub></i> para teste, e utiliza-se as observações de <i>D<sub>1</sub></i> e <i>D<sub>3</sub></i> até <i>D<sub>10</sub></i> para treinamento. 
				E assim, sucessivamente. A acurácia final estimada para o modelo será igual à acurácia média das <i>k</i> rodadas. 
				Sendo assim, ao contrário do que ocorre com o método <i>holdout</i>, na validação cruzada a estimativa da acurácia 
				não é feita considerando o resultado obtido sobre uma única partição de treino e uma única teste, mas é na 
				verdade uma média do desempenho preditivo de <i>k</i> modelos diferentes, testados sobre <i>k</i> bases de testes diferente. 
				Isso constitui uma importante vantagem.
			</p>
		</section>

		<!-- Imagem média [inicio] -->
		<figure class="img-container">
		<div class="col-xs-22 col-xs-offset-1 col-sm-14 col-sm-offset-3 col-md-11 col-md-offset-5 col-lg-8 col-lg-offset-7 gutter-sm-right">
			<picture>
			<source
				srcset="dist/img/image23.png"
				media="(min-width:1200px)"
			/>
			<source
				srcset="dist/img/image23.png"
				media="(min-width:600px)"
			/>
			<source
				srcset="dist/img/image23.png"
				media="(min-width:1px)"
			/>
			<img
				class="image"
				src="dist/img/image23.png"
				alt="Partições geradas pelo método de validação cruzada, quando k=10."
			/>
			</picture>
		</div>
		<figcaption
			class="col-xs-22 col-xs-offset-1 col-sm-4 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption"
		>
			<div class="img-container__top-line"></div>
			Figura 19: Partições geradas pelo método de validação cruzada, quando <i>k</i>=10. 
		</figcaption>
		</figure>
		<!-- Imagem média [fim] -->

		<!-- Destaque [inicio] -->
	<section class="feature feature--example">
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<h2 class="feature__title">Para saber mais:</h2>
			<p>
				É importante comentar que além da validação cruzada, existem outras técnicas para estimar a qualidade 
				de classificadores, dentre as quais:
			</p>
		<!-- Lista não ordenada [inicio] -->
			<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<ul class="bulleted-list">
			<li>
				Validação cruzada repetida<a href="https://machinelearningmastery.com/repeated-k-fold-cross-validation-with-python/">
				https://machinelearningmastery.com/repeated-k-fold-cross-validation-with-python/
			</a>
			</li>
			<li>
				<i>leave-one-out</i><a href="https://www.statology.org/leave-one-out-cross-validation/">
				https://www.statology.org/leave-one-out-cross-validation/</a>
			</li>
			<li>
				<i>bootstrap</i><a href="https://sebastianraschka.com/blog/2016/model-evaluation-selection-part2.html">
				https://sebastianraschka.com/blog/2016/model-evaluation-selection-part2.html</a>
			</li>
		</div>
		<!-- Lista não ordenada [Fim] -->
	</section>
		<!-- Destaque [fim] -->

	<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<h2>2. Métricas de Desempenho Preditivo</h2>
		<p>
			Nessa seção, apresentaremos métricas capazes de medir diferentes aspectos que definem a efetividade de um 
			classificador. As métricas que apresentaremos podem ser calculadas a partir de uma importante estrutura 
			conhecida como <strong>matriz de confusão</strong> (<span class="small-caps">MC</span>). 
		</p>
		<p>
			A finalidade de uma <span class="small-caps">MC</span> é armazenar todos os diferentes tipos de erros e acertos realizados pelo classificador 
			ocorridos durante o processamento de um conjunto de objetos de teste. Trata-se simplesmente de uma matriz quadrada 
			que indica as classificações corretas e erradas após o classificador ter sido testado. Mais formalmente, 
			uma <span class="small-caps">MC</span> é uma matriz quadrada <i>m</i> x <i>m</i>, onde <i>m</i> representa o número de rótulos de classe envolvidos no problema. 
			Cada célula <i>c<sub>ij</sub></i> denota o número de objetos de teste que o classificador associou à classe <i>i</i> e que, de fato, 
			pertencem à classe <i>j</i>. Desta forma, as células da diagonal principal sempre irão conter o número de objetos 
			corretamente classificados pelo modelo.
		</p>
		<p>
			A Tabela 8 apresenta o formato de uma <span class="small-caps">MC</span> hipotética produzida após o processo de teste de um classificador 
			em um problema com <i>m</i> = 3, ou seja, um problema de classificação multiclasse envolvendo 3 classes, neste caso 
			{“a”, “b”, “c”}. Nessa matriz, como em qualquer outra, as classes reais estão nas linhas e as preditas nas 
			colunas. Veja que neste exemplo, o classificador acertou a maioria das classificações 
			(a maior parte dos resultados caiu na diagonal principal).
		</p>
	
	</section>	
		
		<!-- Tabela [inicio] -->
	<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
				<div class="table-container">
					<table class="table tabletext-table">
						<caption class="table__title">Tabela 8:  Matriz de confusão hipotética em um problema com 3 classes (<i>m</i> = 3)</caption>
					<th></th>	
					<th>a</th>
					<th>b</th>
					<th>c</th>
				</tr>
				<tr>
					<th>a</th>
					<td>49</td>
					<td>14</td>
					<td>7</td>
				</tr>
				<tr>
					<th>b</th>
					<td>7</td>
					<td>315</td>
					<td>0</td>
				</tr>
				<tr>
					<th>c</th>
					<td>8</td>
					<td>0</td>
					<td>77</td>
				</tr>
			</table>
			</div>
		</section>
		<!-- Tabela [FIM] -->
		
		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Considere a primeira linha, que trata dos resultados referentes ao rótulo de classe “a”. O valor 49 
				indica que 49 objetos da base de teste cuja classe real é “a” foram corretamente classificados como classe 
				“a”. Já o valor 14 indica o número de objetos cuja classe real é “a”, mas que foram incorretamente 
				classificados como “b”. Por fim, o valor 7 indica o número de objetos cuja classe real é “a”, mas que 
				foram incorretamente classificados como “c”. De maneira análoga a segunda e terceira linha da tabela 
				apresentam os resultados referentes às classes “b” e “c”, respectivamente.
			</p>
			<p>
				A partir dessa matriz, torna-se possível calcular diferentes medidas de desempenho. A seguir apresentaremos 
				as 4 mais conhecidas: Acurácia (<i>acuraccy</i>), Precisão (<i>precision</i>), Revocação (<i>recall</i>) e Medida <span class="small-caps">F1</span> (<i>f1 measure</i>). 
			</p>
			<p>
				<strong>Acurácia (<i>Ac</i>)</strong> esta medida avalia o desempenho médio do classificador, consistindo na proporção de 
				instâncias corretamente classificadas durante o processo de teste. Nesta fórmula, <i>d</i> é o total de objetos 
				de teste, <i>m</i> é o número de classes e <i>TP<sub>k</sub></i> corresponde ao número de objetos da classe <i>k</i> que foram corretamente 
				classificados como <i>k</i> durante o processo de teste do classificador. <i><span class="small-caps">TP</span></i> é a abreviação de <i>True Positives</i> – ou 
				verdadeiro positivos (sempre corresponde a um valor que faz parte da diagonal principal da <span class="small-caps">MC</span>).
			</p>
		</section>

		<math xmlns:mml="http://www.w3.org/1998/Math/MathML" display="block">
			<mi>A</mi><mi>c</mi><mi> </mi><mo>=</mo><mfrac><mrow><mn>1</mn></mrow><mrow><mi>d</mi></mrow></mfrac><mrow><munderover><mo stretchy="false">∑</mo><mrow><mi>k</mi><mo>=</mo><mn>1</mn></mrow><mrow><mi>m</mi></mrow></munderover><mrow><msub><mrow><mi>T</mi><mi>P</mi></mrow><mrow><mi>k</mi></mrow></msub></mrow></mrow></math>
	
	<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<p>
			No caso da <span class="small-caps">MC</span> da Tabela 8, o total de objetos da base de teste é <i>d</i> = 477 (soma dos valores de todas as células da matriz). 
			Sendo assim, a Acurácia do classificador na base de teste é calculada da seguinte forma:
		</p>
		<p>
			Ac = (49 + 315 + 77) / 477 = 0,9245
		</p>
		<p>
			Ou seja, o classificador acertou a classe de 92,45% dos objetos de teste.
		</p>
		<p>
			Entretanto, também é interessante avaliar o desempenho do classificador <strong>por classe</strong>, pois muitas vezes o 
			classificador pode ser efetivo para classificar objetos de uma determinada classe, mas não ser efetivo para 
			outras. Para tal, podemos fazer uso das medidas de Precisão e Revocação.
		</p>
			<strong>Precisão (Pr)</strong> a precisão da classe ck mede a quantidade de exemplos classificados como 
			positivos, que de fato são positivos. 
	
	<math xmlns:mml="http://www.w3.org/1998/Math/MathML" display="block">
		<mrow><mrow><mi mathvariant="normal">Pr</mi></mrow><mo>⁡</mo><mrow><mfenced separators="|"><mrow><msub><mrow><mi>c</mi></mrow><mrow><mi>k</mi></mrow></msub></mrow></mfenced></mrow></mrow><mo>=</mo><mfrac><mrow><msub><mrow><mi>T</mi><mi>P</mi></mrow><mrow><mi>k</mi></mrow></msub></mrow><mrow><msub><mrow><mi>T</mi><mi>P</mi></mrow><mrow><mi>k</mi></mrow></msub><mo>+</mo><mi> </mi><msub><mrow><mi>F</mi><mi>P</mi></mrow><mrow><mi>k</mi></mrow></msub></mrow></mfrac><mi> </mi></math>

		<p>
			Então vamos começar pela classe “a”. Considerando a <span class="small-caps">MC</span> da Tabela 8, quem são os <span class="small-caps">TPs</span> (<i>True Positives</i>) 
			dessa classe? São os objetos de teste que são “a” e foram classificados como “a”. Esta informação está 
			representada em uma única célula da matriz, que é a célula [1,1] (49 casos). 
			E quem são os <span class="small-caps">FPs</span> (<i>False Positives</i> – ou falsos positivos) da classe “a”? São os objetos que não são “a”, 
			mas que o classificador equivocadamente classificou como “a” durante o processo de teste. Esses objetos 
			podem ser achados na 1a coluna da matriz, nas linhas 2 e 3 (linhas referentes às classes reais “b” e “c”). 
			Ou seja, o denominador é o total da coluna “a”.
		</p>
		<p>
			Tendo identificado os <span class="small-caps">TPs</span> e <span class="small-caps">FPs</span>, o cálculo de <span class="small-caps">Pr</span>(“a”) é trivial. Basta fazer:
		</p>
		<p>
			<span class="small-caps">Pr</span>(“a”) = <span class="small-caps">TP</span><sub>a</sub> / (<span class="small-caps">TP</span><sub>a</sub> + <span class="small-caps">FP</span><sub>a</sub>) = 49 / (49 + 7 + 8) = 49 / 64 = 0,7656
		</p>
		<p>
			Analogamente, para as classes “b” e “c”, temos:
		</p>
		<p>
			<span class="small-caps">Pr</span>(“b”) = <span class="small-caps">TP</span><sub>b</sub> / (<span class="small-caps">TP</span><sub>b</sub> + <span class="small-caps">FP</span><sub>c</sub>) = 315 / (315 + 14 + 0) = 315 / 329 = 0,9574
		</p>
		<p>
			<span class="small-caps">Pr</span>(“c”) = <span class="small-caps">TP</span><sub>c</sub> / (<span class="small-caps">TP</span><sub>c</sub> + <span class="small-caps">FP<sub>c</sub>) = 77 / (77 + 7 + 0) = 77 / 84 = 0,9167
		</p>
		<p>
			Veja que a classe “a” tem um valor de precisão bem menor que o das outras duas classes. 
			Observando a matriz, podemos notar que realmente esta é a classe com a maior proporção de falsos positivos. 
		</p>
		<p>
			Agora que temos a Precisão de cada classe, precisamos arrumar um jeito de computar um valor que represente 
			a Precisão do classificador. Para tal, basta calcular a média dos 3 valores. Esse cálculo pode ser feito 
			usando a abordagem macro ou a abordagem micro.
		</p>
		<p>
			<span class="small-caps">Pr</span><sub>macro</sub> = somar os 3 valores e dividir por 3 = (0,7656 + 0,9574 + 0,9167) / 3 = 0,8799
		</p>
		<p>
			<span class="small-caps">Pr</span><sub>micro</sub> = soma ponderada dos 3 valores, dividido pelo total de registros da base de dados de teste. 
			Ou seja, para cada classe <i>k</i> eu pego a <i><span class="small-caps">Pr</span><sub>k</sub></i> e multiplico pelo número de registros da classe <i>k</i> na base de 
			dados de teste (total das linhas da Tabela 8).  
		</p>
		<p>
			<span class="small-caps">Pr</span><sub>micro</sub> = (0,7656 * 70 + 0,9574 * 322 + 0,9167 * 85) / 477 = 0,9220
		</p>
		<p>
			<strong>Revocação (Re)</strong> a revocação ou <i>recall</i> da classe c<sub>k</sub> mede a porcentagem de exemplos positivos reais que 
			foram classificados como positivos.
		</p>

		<math xmlns:mml="http://www.w3.org/1998/Math/MathML" display="block">
			<mrow><mrow><mi mathvariant="normal">Re</mi></mrow><mo>⁡</mo><mrow><mfenced separators="|"><mrow><msub><mrow><mi>c</mi></mrow><mrow><mi>k</mi></mrow></msub></mrow></mfenced></mrow></mrow><mo>=</mo><mfrac><mrow><msub><mrow><mi>T</mi><mi>P</mi></mrow><mrow><mi>k</mi></mrow></msub></mrow><mrow><msub><mrow><mi>T</mi><mi>P</mi></mrow><mrow><mi>k</mi></mrow></msub><mo>+</mo><mi> </mi><msub><mrow><mi>F</mi><mi>N</mi></mrow><mrow><mi>k</mi></mrow></msub></mrow></mfrac><mi> </mi></math>

		<p>
			Mais uma vez, vamos começar pela classe “a”. Considerando a <span class="small-caps">MC</span> da Tabela 8, os <span class="small-caps">FNs</span> 
			(<i>False Negatives</i> ou falsos negativos) são os objetos cuja classe real é “a”, mas que o classificador 
			equivocadamente classificou como “b” ou “c” durante o processo de teste. Esses objetos podem ser achados 
			na 1a linha da matriz, nas colunas 2 e 3 (linhas referentes às classes preditas como “b” e “c”). Ou seja, 
			o denominador é o total da linha “a”.
		</p>
		<p>
			Tendo identificado os <span class="small-caps">TPs</span> e <span class="small-caps">FNs</span>, o cálculo de <span class="small-caps">Re</span>(“a”) é trivial. Basta fazer:
		</p>
		<p>
			<span class="small-caps">Re</span>(“a”) = <span class="small-caps">TP</span><sub>a</sub> / (<span class="small-caps">TP</span><sub>a</sub> + <span class="small-caps">FN</span><sub>a</sub>) = 49 / (49 + 14 + 7) = 49 / 70 = 0,7000
		</p>
		<p>
			Analogamente, para as classes “b” e “c”, temos:
		</p>
		<p>
			<span class="small-caps">Re</span>(“b”) = <span class="small-caps">TP</span><sub>b</sub> / (<span class="small-caps">TP</span><sub>b</sub> + <span class="small-caps">FN</span><sub>c</sub>) = 315 / (315 + 7+ 0) = 315 / 322 = 0,9783
		</p>
		<p>
			<span class="small-caps">Re</span>(“c”) = <span class="small-caps">TP</span><sub>c</sub> / (<span class="small-caps">TP</span><sub>c</sub> + <span class="small-caps">FN</span><sub>c</sub>) = 77 / (77 + 8 + 0) = 77 / 85 = 0,9059
		</p>
		<p>
			Podemos então usar a abordagem macro ou micro para obter o Recall do classificador:
		</p>
		<p>
			<span class="small-caps">Re</span><sub>macro</sub> = (0,7000 + 0,9783 + 0,9059) / 3 = 0,8614
		</p>
		<p>
			<span class="small-caps">Re</span><sub>micro</sub> = (0,7000 * 70 + 0,9783 * 322 + 0,9059 * 85) / 477 = 0,9246
		</p>
		<p>
			<strong>Medida F1 (<i>F1</i>)</strong> trata-se da média harmônica entre a Precisão e a Revocação. É útil, pois na maior parte das 
			situações práticas um classificador costuma ter um bom desempenho em uma das medidas, mas ruim na outra 
			(não foi o caso de nosso exemplo, onde a <span class="small-caps">MC</span> ficou muito boa e, por isso, os valores de todas as medidas 
			ficaram altos). 
		</p>

		<math xmlns:mml="http://www.w3.org/1998/Math/MathML" display="block"><mrow><mrow><mi mathvariant="normal">F</mi><mn>1</mn></mrow><mo>⁡</mo><mrow><mfenced separators="|"><mrow><msub><mrow><mi>c</mi></mrow><mrow><mi>k</mi></mrow></msub></mrow></mfenced></mrow></mrow><mo>=</mo><mfrac><mrow><mn>2</mn><mi> </mi><mo>×</mo><mi mathvariant="normal">P</mi><mi mathvariant="normal">r</mi><mo>(</mo><msub><mrow><mi>c</mi></mrow><mrow><mi>k</mi></mrow></msub><mo>)</mo><mo>×</mo><mi mathvariant="normal">R</mi><mi mathvariant="normal">e</mi><mo>(</mo><msub><mrow><mi>c</mi></mrow><mrow><mi>k</mi></mrow></msub><mo>)</mo></mrow><mrow><mi mathvariant="normal">P</mi><mi mathvariant="normal">r</mi><mfenced separators="|"><mrow><msub><mrow><mi>c</mi></mrow><mrow><mi>k</mi></mrow></msub></mrow></mfenced><mo>+</mo><mi mathvariant="normal">R</mi><mi mathvariant="normal">e</mi><mo>(</mo><msub><mrow><mi>c</mi></mrow><mrow><mi>k</mi></mrow></msub><mo>)</mo></mrow></mfrac></math>
	
		<p>
			Também calculamos a F1 por classe e depois tiramos a média macro ou micro. Sendo assim, abaixo estamos 
			apresentando apenas o exemplo do cálculo de F1 para a classe “a”:
		</p>
		<p>
			<span class="small-caps">F1</span>(“a”) = 2 x <span class="small-caps">Pr</span>(“a”) x <span class="small-caps">Re</span>(“a”) / (<span class="small-caps">Pr</span>(“a”) + <span class="small-caps">Re</span>(“a”)) = 2 x 0,7656 x 0,7000 / (0,7656 + 0,7000) = 0,7313
		</p>
	</section>
	
	<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<h2>Caso Especial – Classificação Binária</h2>
		<p>
			Provavelmente, o maior número de problemas práticos de classificação é binário. Por exemplo, considerando 
			o <span class="small-caps">IBGE</span>, um problema real deste tipo seria a identificação de fraudes em questionário 
			(classes {“Sim”, “Não”}, onde “Sim” significa questionário fraudulento e “Não” questionário legítimo).
		</p>
		<p>
			Como o problema binário é muito comum, o jeito mais usado pelas ferramentas de ciência de dados para 
			calcular as medidas neste tipo de problema é considerar (arbitrariamente) uma das classes como “positiva” 
			e outra como “negativa”. No exemplo da Tabela 9 (hipotético), temos duas classes “C1” e “C2”, onde “C1” 
			foi considerada a classe “positiva” e “C2” a “negativa” pela ferramenta de ciência de dados.
		</p>
	</section>
		
	
		<!-- Tabela [inicio] -->
		<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
				<div class="table-container">
					<table class="table tabletext-table">
						<caption class="table__title">Tabela 9. Matriz de confusão hipotética em um problema binário (<i>m</i> = 2)</caption>
					<td></td>
					<th>C1</th>
					<th>C2</th>
				</tr>
				<tr>
					<th>C1</th>
					<td>318 (TP)</td>
					<td>6 (FN)</td>
				</tr>
				<tr>
					<th>C2</th>
					<td>6 (FP)</td>
					<td>170 (TN)</td>
				</tr>
			</table>
			</div>
		</section>
		<!-- Tabela [FIM] -->
	
	
	<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<p>
			A partir dessa matriz, se o usuário desejar, é possível calcular a <span class="small-caps">Pr</span>, <span class="small-caps">Re</span> e <span class="small-caps">F1</span> do classificador 
			diretamente, usando a chamada “abordagem binária”. Veja o exemplo a seguir, onde realiza-se o cálculo 
			da precisão:
		</p>
		<p>
			<span class="small-caps">Pr</span> = <span class="small-caps">TP</span> / (<span class="small-caps">TP</span> + <span class="small-caps">FP</span>) = 318 / (318 + 6) = 0,9815
		</p>
	</section>

	<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<h2>Problemas com Classes Desbalanceadas</h2>
		<p>
			Os exemplos das Tabelas 8 e 9 apresentaram matrizes de confusão onde o desempenho preditivo para todos os 
			rótulos de classe foi muito bom. Porém, não é isso que ocorre sempre na prática, especialmente em problemas 
			onde as classes são <strong>desbalanceadas</strong>, isto é, quando o classificador foi treinado com uma base em que havia 
			predominância de objetos de uma determinada classe. Nesta situação, o classificador tende a apresentar maior 
			eficácia para os objetos da classe majoritária e, muitas vezes, apresenta um desempenho ruim para os objetos 
			da(s) classe(s) minoritária(s).
		</p>
		<p>
			Por exemplo, considere o problema de identificar fraudes em questionários. Neste caso, é comum que a base 
			rotulada possua muito mais objetos da classe “Não” (questionário legítimo) do que da classe “Sim” 
			(questionário fraudulento). Então, quando ela for dividida nas partições de treino e teste, a partição de 
			treino ficará naturalmente com mais objetos da classe “Não” do que da classe “Sim”. Tipicamente, o 
			classificador aprenderá classificar melhor os objetos “Não” do que os objetos “Sim”, já que ele foi 
			apresentado a mais exemplos de objetos da classe “Não”. 
		</p>
		<p>
			Por exemplo, a <span class="small-caps">MC</span> da Tabela 10, poderia ser uma MC gerada após o teste do classificador de fraudes em 
			questionários. Veja que para a classe majoritária (“Não”), o classificador acertou 35033 classificações e 
			errou 2122, obtendo acurácia de 0,94 (ou 94%). Porém, na classe minoritária (“Sim”), o classificador teve 
			um desempenho bem pior, acertando 7009 classificações e errando 4678, ou seja, a acurácia para essa classe 
			específica é 0,6 (ou 60%). Isso pode representar um problema em um bom número de aplicações, onde deseja-se
			 um desempenho parecido para a classificação de qualquer rótulo. Para conhecer algumas técnicas básicas 
			 para o tratamento de bases de dados com classes desbalanceadas, consulte 
			 <a href="https://tatianaesc.medium.com/trabalhando-com-classes-desbalanceadas-em-problemas-machine-learning-29ee8db4a049">
			 https://tatianaesc.medium.com/trabalhando-com-classes-desbalanceadas-em-problemas-machine-learning-29ee8db4a049
			 </a>
		</p>
	</section>

	<!-- Tabela [inicio] -->
	<section class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
				<div class="table-container">
					<table class="table tabletext-table">
						<caption class="table__title">Tabela 9. Matriz de confusão hipotética em um problema binário (<i>m</i> = 2)</caption>
					<td></td>
					<th>Sim</th>
					<th>Não</th>
				</tr>
				<tr>
					<th>Sim</th>
					<td>7009</td>
					<td>4678</td>
				</tr>
				<tr>
					<th>Não</th>
					<td>2122</td>
					<td>35033</td>
				</tr>
			</table>
			</div>
		</section>
		<!-- Tabela [FIM] -->

		<!-- Destaque [inicio] -->
	<section class="feature feature--example">
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<p>
				Há diversas outras medidas de desempenho preditivo para classificadores. Para uma referência completa 
				não apenas sobre essas medidas, mas sobre outros assuntos relacionados à avaliação e classificadores, 
				consulte a apresentação disponibilizada em: 
				<a href="https://www.site.uottawa.ca/~nat/Talks/CanadianAI-Tutorial.pptx">
				https://www.site.uottawa.ca/~nat/Talks/CanadianAI-Tutorial.pptx
				</a>
			</p>
		</div>
	</section>
	<!-- Destaque [fim] -->
	
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