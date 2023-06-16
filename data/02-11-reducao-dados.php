<?php
// Titulo da unidade
$moduleTitle ="Pré-processamento de dados";
// Titulo do topico
$topicTitle ="Técnicas de pré-processamento de dados";
// Titulo da pagina
$pageTitle ="Redução de dados";
// Subtitulo da pagina
$pageSubtitle ="Como o processo de redução de dados otimiza os resultados";
// Inclusao do cabeçalho do curso	
include "head.php";
?>

<main class="page-content okgo">

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

	<div class="row">

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		
			<!-- Citacao em bloco [inicio] -->
			<blockquote class="quote" cite="http://www.google.com.br/">
				<p>“Você pode ter um conjunto de dados ridiculamente grande e complexo, mas se tiver as ferramentas e metodologias certas, isso não será um problema.”</p>
				<footer>
					<p class="quote__author"><span class="small-caps">Aaron Koblin
			</span> <span class="old-style-figures"></p>
				</footer>
			</blockquote>
			<!-- Citacao em bloco [fim] -->

			<p>Outra forma de melhorar o processamento dos dados é através da redução da dimensionalidade da base retirando variáveis que não acrescentam valor aos resultados de forma significativa.</p>

			<p>A ciência de dados é usada, principalmente, para lidar com grande volume de dados. Por isso, o processamento computacional torna-se cada vez mais complexo. Para aumentar a eficiência e reduzir os custos utiliza-se o processo de redução de dados.</p> 

			<p>Suas principais abordagens são: seleção de subconjuntos de atributos, redução de numerosidade e redução de dimensionalidade.</p> 

			<p>Existem diversos métodos que identificam conjuntos de variáveis não	 correlacionadas entre si e que explicam a maior parte da variabilidade dos dados.</p>

			<h2>Seleção de subconjunto de atributos</h2>
			<p>É a opção por utilizar os atributos altamente relevantes em detrimento dos menos relevantes. Não há uma definição restrita para a seleção dos atributos. Essa seleção pode ser feita subjetivamente. Uma das formas de seleção dos atributos, pode ser usar o nível de significância e o valor p do atributo - o atributo com valor p maior que o nível de significância pode ser descartado.</p>

			<h2>Redução de numerosidade </h2>
			<p>Permite que os dados sejam substituídos ou estimados por alternativas de representação de dados menores, tais como modelos paramétricos (que armazenam apenas os parâmetros do modelo em vez dos dados reais) ou métodos não paramétricos tais como agrupamento, amostragem e o uso de histogramas.</p>

			<h2>Redução de dimensionalidade </h2>
			<p>A redução do tamanho dos dados por mecanismos de codificação pode ser com ou sem perdas. Se após a reconstrução a partir dos dados compactados, os dados originais puderem ser recuperados, essa redução será chamada de redução sem perdas. Caso contrário, será denominada redução com perdas. </p>

			<p>Os dois métodos mais conhecidos de redução de dimensionalidade que atendem a esses princípios são: transformação de Wavelet e PCA (Principal Component Analysis) ou Análise de Componentes Principais.</p>

			<p>A técnica mais	 popular com relação à redução de dimensionalidade de dados
			numéricos é a PCA que converte as variáveis originais (que são tipicamente correlacionadas) num conjunto de variáveis não correlacionadas (linearmente) que se designam por componentes principais (PCs) ou variáveis latentes, sendo cada PC ordenada pela de forma decrescente pela sua variabilidade (variância) da qual explicam os dados.</p>

			<h2>Ponto de Reflexão</h2>
			<!-- Citacao em bloco [inicio] -->
			<blockquote class="quote" cite="http://www.google.com.br/">
				<p>“Todas as estatísticas têm pontos fora da curva.”</p>
				<footer>
					<p class="quote__author"><span class="small-caps">Nenia Campbell
			</span> <span class="old-style-figures"></p>
				</footer>
			</blockquote>
			<!-- Citacao em bloco [fim] -->
			<p>Você sabe o que são outliers?</p>
			<p>Considere um estrato de alguma unidade da federação referente ao comércio de atacado de matérias primas agrícolas e animais vivos, conforme tabela abaixo:</p>
			
			<!-- Tabela [inicio] -->
			<div class="table-container">
			<h5>Informações sobre número de funcionários, salário anual total e receita anual de um grupo de empresas do comércio atacadista de matérias-primas agrícolas e animais vivos. </h5>
				<table class="table">
					<caption class="table__title">Exemplo de tabela</caption>
					<thead>
						<tr>
							<th scope="col">Obs</th>
							<th class="table__numeric-col-heading" scope="col">Empresa</th>
							<th class="table__numeric-col-heading" scope="col">CNAE</th>
							<th class="table__numeric-col-heading" scope="col">Número de funcionários</th>
							<th class="table__numeric-col-heading" scope="col">Salário anual</th>
							<th class="table__numeric-col-heading" scope="col">Receita anual</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="table__numeric-values">1</td>
							<td class="table__numeric-values">0xxxx421</td>
							<td class="table__numeric-values">4623</td>
							<td class="table__numeric-values">8</td>
							<td class="table__numeric-values">511.615</td>
							<td class="table__numeric-values">57.673.098</td>
						</tr>

						<tr>
						<td class="table__numeric-values">2</td>
							<td class="table__numeric-values">3xxxx890</td>
							<td class="table__numeric-values">4623</td>
							<td class="table__numeric-values">7</td>
							<td class="table__numeric-values">128.814</td>
							<td class="table__numeric-values">6.258.305</td>
							
						</tr>
						
						<tr>
						<td class="table__numeric-values">3</td>
							<td class="table__numeric-values">1xxxx119</td>
							<td class="table__numeric-values">4621</td>
							<td class="table__numeric-values">7</td>
							<td class="table__numeric-values">88.486</td>
							<td class="table__numeric-values">2.600.132</td>
							
						</tr>
						
						<tr>
						<td class="table__numeric-values">4</td>
							<td class="table__numeric-values">0xxxx546</td>
							<td class="table__numeric-values">4623</td>
							<td class="table__numeric-values">4</td>
							<td class="table__numeric-values">83.817</td>
							<td class="table__numeric-values">2.141.988</td>
							
						</tr>

						<tr>
						<td class="table__numeric-values">5</td>
							<td class="table__numeric-values">5xxxx858</td>
							<td class="table__numeric-values">4623</td>
							<td class="table__numeric-values">-</td>
							<td class="table__numeric-values">-</td>
							<td class="table__numeric-values">-</td>
							
						</tr>
					</tbody>
				</table>
			</div>	
			<!-- Tabela [fim] -->

			<p>Percebeu que o último item não contém respostas sobre variáveis muito importantes para a pesquisa e que precisam ser imputadas?</p>

			<p>Se não tratarmos o primeiro item, que tem comportamento outlier para o estrato, o valor imputado certamente sofrerá um forte impacto em sua estimativa. </p>

			<p>Os outliers são dados que se diferenciam drasticamente de todos os outros. Em outras palavras, um outlier é um valor que foge da normalidade e que pode (e provavelmente irá) causar anomalias nos resultados obtidos por meio de algoritmos e sistemas de análise.</p>

			<p>Os outliers podem se apresentar de várias formas, tais como: dados discrepantes;
			observações fora do comum; anomalias; valores atípicos; pontos fora da distribuição dos dados; entre outros.</p>

			<p>Existem várias formas de identificarmos outliers: de forma manual, através de gráficos ou de métodos estatísticos. Conforme o volume de dados aumenta, mais difícil fica de utilizar o primeiro método, pois seria muito custoso.</p>	

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<q><p>Gráficos são ferramentas simples para identificação de outliers porque neles os outliers se isolam naturalmente das demais observações.</p></q>

				<q><p>Se várias observações se “isolam” apresentando um comportamento similar, devem ser analisadas com cuidado, pois podem não ser outliers e devem ser tratados de forma diferente.</p></q>

				<q><p>Uma maneira mais complexa, porém, bastante precisa, de encontrar outliers em uma análise de dados é encontrar a distribuição estatística que mais se aproxima à distribuição dos dados e utilizar métodos estatísticos para detectar os pontos discrepantes.</p></q>

				<q><p>Padronizou-se a distribuição normal (supõe simetria na distribuição dos dados) na detecção de outliers, mas deve-se sempre ter um olhar crítico sobre essa adoção, pois a assimetria de alguns atributos pode mascarar o resultado.</p></q>  

				<q><p>Após encontrados os outliers, costumam ser adotadas as seguintes ações: exclusão do item, substituição do valor (imputação), isolamento do item para uma análise separada das demais.</p></q>
			</aside>
			<!-- Realce [fim] -->	

			<h2>Compartilhando experiências</h2>
			<p>Você já utiliza técnicas de redução de dados nos seus processos de trabalho?</p>

			<!--FORUM COLABORATIVO -->
			<div class="text-with-icon">
				<div class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" aria-hidden="true" />
				</div>
				<p class="pullquote">
					Colabore com a construção do curso, descrevendo no <strong>Fórum Colaborativo</strong> um ou mais casos de utilização das técnicas em processos de trabalho na sua área de atuação.
				</p>
			</div>			
			<!-- FIM FORUM COLABORATIVO -->						
	
		<button class="btn modal_call" id="faq001">Abrir modal</button>
		</div>

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

		<h2>Estudo de caso</h2>
		<p>Vamos fazer um estudo de caso de geoprocessamento da Região Serrana do Rio de Janeiro: o que inclui parte dos municípios de Guapimirim e Teresópolis, conforme a imagem abaixo que corresponde a 1/64 da imagem original do satélite Sentinel-2.</p>

		<figure>
				<source srcset="dist/img/un02/img11-geoprocessamento.png" media="(min-width:1200px)" />
				<source srcset="dist/img/un02/img11-geoprocessamento.png" media="(min-width:600px)" />
				<source srcset="dist/img/un02/img11-geoprocessamento.png" media="(min-width:1px)" />
				<img class="image" src="dist/img/un02/img11-geoprocessamento.png" alt="Imagem de geoprocessamento"/>
			
		</figure>

		<p>A imagem original possui 13 bandas em três níveis de resolução (10m, 20m, 60m), conforme tabela a seguir:</p>

				<figure>
				<source srcset="dist/img/un02/img12-geoproc-tabela.png" media="(min-width:1200px)" />
				<source srcset="dist/img/un02/img12-geoproc-tabela.png" media="(min-width:600px)" />
				<source srcset="dist/img/un02/img12-geoproc-tabela.png" media="(min-width:1px)" />
				<img class="image" src="dist/img/un02/img12-geoproc-tabela.png" alt="Tabela de geoprocessamento"/>
			
		</figure>		

		<p>Portanto, inicialmente é necessário fazer uma normalização das resoluções e também o fracionamento da imagem original para 4, 16 e 64 partes iguais.</p>


		<p>Nos próximos módulos, tentaremos descobrir os elementos (rótulos) que estão presentes na região, como por exemplo, vegetação, rochas, áreas urbanas, etc. No módulo de classificação, adicionaremos a informação desses elementos na base de treino, e a partir disso, tentaremos classificar corretamente os novos rótulos na base de teste. Já no módulo de agrupamento, vamos deixar que os dados formem grupos, e a partir desses grupos formados, tentaremos nomeá-los de acordo com os elementos.</p>

		

		<!--ATIVIDADES + Wiki -->
		<h2>Atividade 4 - Projeto</h2>
		Tarefas:

		1. identificar os tipos de ocorrências e aplicar as técnicas de redução necessárias no conjunto de dados que está sendo utilizado na resolução do problema;
		2. descrever o processo no <strong>Fórum de Atividades do Módulo 2</strong> e, após comentários dos demais participantes e medidores, inserir a descrição na Wiki <strong>Documentação das Atividades</strong>;
		3. avaliar o andamento do projeto de outro grupo indicado pelos mediadores; e
		4. apresentar o projeto do grupo nesta etapa no <strong>Ponto de Encontro</strong> para explicar os processos aplicados, as dificuldades encontradas, os resultados obtidos etc.
		</div>

	</div>	
		
</main>	

			<!-- Janela modal [inicio] --> 

			<article class="modal" id="modal_faq001">
				<header class="modal__header">			
					<h2 class="modal__heading-1">Para saber mais </h2>
					<button class="btn modal__btn-close">Fechar</button>
				</header>
				<div class="row modal__content">
					<div class="col-xs-24">

					<p><a href="https://www.youtube.com/watch?v=BpsR21apXuM">Vídeo: Mineração de Dados - Redução e transformação dos dados </a></p>
					<p><a href="https://www.youtube.com/watch?v=FzuxCz-tc0M">Vídeo: Seleção e Redução de Atributos com PCA e FLDA </a></p>
					<p><a href="https://www.aquare.la/o-que-sao-outliers-e-como-trata-los-em-uma-analise-de-dados/">Artigo: Outliers, o que são e como tratá-los em uma análise de dados? </a></p>
				</div>
					</div>
			</article>


<?php
include "foot.php";
?>

<!-- <script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js" /> -->

<!-- Inclua o script a seguir para utilizar o componente Tooltip -->
<script src="dist/js/vendor/tooltipster.bundle.min.js"></script>

<!-- Inclua o script a seguir para utilizar o componente Carrossel -->
<script src="dist/js/vendor/slick.min.js"></script>



</body>

</html>