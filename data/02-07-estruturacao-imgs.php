<?php
// Titulo da unidade
$moduleTitle = "Pré-processamento de dados";
// Titulo do topico
$topicTitle = "Identificação e conversão de tipos de dados";
// Titulo da pagina
$pageTitle = "Estruturação de Imagens";
// Subtitulo da pagina
$pageSubtitle = "Como explorar a estrutura RGB de uma Imagem";
// Inclusao do cabeçalho do curso	
include "head.php";
?>




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
	
			<p>Você conhece e aplica alguma técnica básica para pré-processar bancos de dados de imagens, isto é, para transformar coleções de imagens em dados estruturados?</p>

			<p>No IBGE, há muitas aplicações para a ciência de dados que envolvem a utilização de imagens. Um exemplo na área de geociências é a detecção automática de entidades (rios, plantações, prédios etc.) a partir de conjuntos de imagens de mapas ou fotos de satélite.</p>

			<p>Para começar, analise a imagem em preto e branco apresentada abaixo:	</p>
			
		<!-- Imagem grande [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-17 col-sm-offset-2 col-md-13 col-md-offset-4 col-lg-10 col-lg-offset-6 gutter-sm-right">
				<picture>
					<img class="image" style="height: 100%;width: 100%;" src="dist/img/un02/img02-07-coracaopb.svg" alt="coração preto e branco">
				</picture>
			</div>
		</figure>
		<!-- Imagem grande [fim] -->
		
		<p>Através das linhas formadas pelos quadradinhos pretos você facilmente identifica que se trata do desenho de um coração, correto? 

		<p>Entretanto, computadores não são capazes de “olhar” para uma imagem e entender o seu significado. Na verdade, as máquinas processam imagens como se elas fossem matrizes numéricas. </p>

		<p>O tamanho da matriz vai depender do número de pixels empregado para representar a imagem. De maneira simples, um pixel (acrônimo para <i>picture element</i>) pode ser definido como o menor componente de uma imagem. </p>

		<p>De maneira informal, o pixel é um “pontinho” em alguma cor – o menor pontinho que pode ser representado na tela. No caso da imagem demonstrada acima, cada pixel corresponde a um quadradinho preto ou branco (não estamos vendo os brancos, mas eles existem!). </p>

		<p>Desta forma, é possível representar a imagem do coração utilizando uma matriz binária 8x8, bastando adotar o valor 0 para representar um pixel preto e 1 para um pixel branco (este é um padrão seguido em qualquer software). </p>

		<p>Veja o resultado na seguinte matriz: </p>
		
		<!-- Imagem grande [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-17 col-sm-offset-2 col-md-13 col-md-offset-4 col-lg-10 col-lg-offset-6 gutter-sm-right">
				<picture>
					<img class="image" style="height: 100%;width: 100%;" src="dist/img/un02/tabelas-02-07-01.svg" alt="matriz binaria">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Matriz para representação de imagem binária
			</figcaption>
		</figure>
		<!-- Imagem grande [fim] -->

		<p>Conseguiu identificar a imagem de coração? </p>

		<p>Para facilitar a visualização, os valores 0 estão representados em vermelho.</p>

		<p>Veja que seria possível desenhar o coração usando uma matriz 6x7, já que a primeira e a última linha e a última coluna contêm apenas pixels brancos. Porém o formato 8x8 é comumente adotado como dimensão mínima para uma imagem. </p>

		<p>Imagens em tons de cinza também podem ser representadas por matrizes. Neste caso, o valor de cada célula da matriz determinará a intensidade do pixel correspondente. </p>

		<p>Por exemplo, é comum o uso de 256 tons de cinza diferentes. O valor 0 continua sendo usado para representar a cor “preta”, mas a cor “branca” passa a ser associada ao valor 255. Os demais valores, de 1 a 254, representam os diferentes tons de cinza. Quanto maior o valor, mais claro é o tom de cinza. </p>

		<p>O quadro a seguir exibe um exemplo de matriz 8x8 capaz agora de representar a imagem do coração em tons de cinza:</p>

		<!-- Imagem grande [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-17 col-sm-offset-2 col-md-13 col-md-offset-4 col-lg-10 col-lg-offset-6 gutter-sm-right">
				<picture>
					<img class="image" style="height: 100%;width: 100%;" src="dist/img/un02/tabelas-02-07-02.svg" alt="Descrição da imagem.">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Matriz para representação de imagem em tons de cinza
			</figcaption>
		</figure>
		<!-- Imagem grande [fim] -->

		<p>É importante mencionar que algumas aplicações necessitam de ainda mais tons de cinza e, por consequência, adotam faixas de valores maiores. Veja que continuamos adotando o branco (255) como “cor de fundo”. Entretanto, na maioria das vezes, os mapas e demais tipos de imagens com as quais iremos trabalhar no IBGE são coloridos. </p>

		<p>Será que matrizes também são capazes de representar imagens com cores? A resposta é sim, mas a diferença é que precisaremos utilizar 3 matrizes para representar uma única imagem colorida. </p>

		<p>Nesta abordagem, utiliza-se uma matriz para especificar a intensidade de vermelho (red), outra para a intensidade de verde (green) e outra para a intensidade de azul (blue) de cada pixel. O valor 0 representa ausência de intensidade e 255 a intensidade máxima. </p>

		<p>Essa abordagem é possível porque quase todas as cores podem ser geradas a partir do vermelho, verde e azul. Por isso, essa representação em 3 matrizes é conhecida como representação RGB – <i>red, green, blue</i> – de uma imagem.</p>

		<p>Para que o conceito fique mais claro, considere o desenho do coração apresentado abaixo, agora em cores (mais especificamente em coral): </p>

		<br>
		<!-- Imagem grande [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-17 col-sm-offset-2 col-md-13 col-md-offset-4 col-lg-10 col-lg-offset-6 gutter-sm-right">
				<picture>
					<img class="image" style="height: 100%;width: 100%;" src="dist/img/un02/img02-07-coracaocoral.svg" alt="coracao coral">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Coração coral em pixels.
			</figcaption>
		</figure>
		<!-- Imagem grande [fim] -->

		
		<p>Coral é a cor obtida através da intensidade 255 para o vermelho, 127 para o verde e 80 para azul, podendo ser representada através da notação RGB(255, 127, 80) – para conhecer o valor RGB de outras cores, consulte <a hef="https://www.w3schools.com/colors/colors_rgb.asp.">https://www.w3schools.com/colors/colors_rgb.asp</a> </p>
	
		</div>	


		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<p>A seguir, são apresentadas matrizes que seriam usadas para representar a imagem 8x8 desta nova versão do coração:</p>
		<!-- Imagem grande [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-17 col-sm-offset-2 col-md-13 col-md-offset-4 col-lg-10 col-lg-offset-6 gutter-sm-right">
				<picture>
					<img class="image" style="height: 100%;width: 100%;" src="dist/img/un02/tabelas-02-07-03.svg" alt="matriz rbg">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Matrizes RGB para a representação de uma imagem colorida
			</figcaption>
		</figure>
		<!-- Imagem grande [fim] -->

		<!-- Imagem grande [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-17 col-sm-offset-2 col-md-13 col-md-offset-4 col-lg-10 col-lg-offset-6 gutter-sm-right">
				<picture>
					<img class="image" style="height: 100%;width: 100%;" src="dist/img/un02/tabelas-02-07-04.svg" alt="matriz rbg">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Matrizes RGB para a representação de uma imagem colorida
			</figcaption>
		</figure>
		<!-- Imagem grande [fim] -->

		<!-- Imagem grande [inicio] -->
		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-17 col-sm-offset-2 col-md-13 col-md-offset-4 col-lg-10 col-lg-offset-6 gutter-sm-right">
				<picture>
					<img class="image" style="height: 100%;width: 100%;" src="dist/img/un02/tabelas-02-07-05.svg" alt="matriz rbg">
				</picture>
			</div>
			<figcaption class="col-xs-22 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3 col-lg-2 img-container__caption">
				<div class="img-container__top-line"></div>
				Matrizes RGB para a representação de uma imagem colorida
			</figcaption>
		</figure>
		<!-- Imagem grande [fim] -->


		<p>Mais uma vez, adotamos o branco (255, 255, 255) como cor de fundo da imagem (tudo que não fizer parte da linha que compõe o coração está em branco).</p>

		<p>Pronto, você viu como representar de forma estruturada imagens em preto e branco, em tons de cinza e até mesmo coloridas.</p>

		</div>

<!--ATIVIDADE INTERATIVA 11 
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

		<p>Para praticar, converta a figura 8x8 abaixo para o formato estruturado utilizando matrizes RGB. A figura em questão está representada na cor “lima”, RGB(181,230,29). Depois clique em <strong>Visualizar Resposta</strong> para comparar</p>

		<figure class="img-container">
			<div class="col-xs-22 col-xs-offset-1 col-sm-17 col-sm-offset-2 col-md-13 col-md-offset-4 col-lg-10 col-lg-offset-6 gutter-sm-right">
				<picture>
					<img class="image" style="height: 100%;width: 100%;" src="dist/img/un02/img02-07-lima.svg" alt="matriz lima">
				</picture>
			</div>
		</figure>

		RESPOSTAS:
		dist/img/un02/tabelas-02-07-06.svg
		dist/img/un02/tabelas-02-07-07.svg
		dist/img/un02/tabelas-02-07-08.svg

		</div>
<!-- FIM ATIVIDADE 11 -->	
	


		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			
			<!--FORUM COLABORATIVO -->
			<div class="text-with-icon">
				<div class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" aria-hidden="true" />
				</div>
				<p class="pullquote">
					Fique à vontade para compartilhar suas ideias e considerações sobre a prática no <strong>Fórum Colaborativo</strong>.
				</p>
			</div>			
			<!-- FIM FORUM COLABORATIVO -->	

			<p>Mas como os algoritmos geram modelos a partir de um banco de dados de imagens? </p>

			<p>Bem, já vimos que para gerar um modelo supervisionado ou não supervisionado a partir de bases de dados textuais, precisamos gerar uma DTM que corresponderá à versão estruturada do texto. </p>

			<p>No caso de uma aplicação de ciência de dados que usa imagens, a abordagem é parecida: cada imagem (dado não estruturado) será tratada como uma observação e será convertida para uma versão na forma de matriz (formato estruturado). </p>

			<p>Simples, não? </p>

			<p>É claro que, na prática, as matrizes costumam ser muito maiores do que as do tipo 8x8 pixels que foram apresentadas em nossos exemplos, uma vez que imagens reais costumam ter resolução muito maior.</p>
 

			<p>Por exemplo, imagens geradas por satélites podem ter uma resolução espacial de 0,3m/pixel – o que significa que cada pixel na imagem corresponde a uma área de 30cm x 30cm da superfície terrestre. Neste cenário, uma imagem de satélite cobrindo uma área de aproximadamente 1Km² teria 3300x3300 pixels.</p>

			<p>É importante deixar claro que a estruturação de imagens RGB é uma das possíveis abordagens para estruturar imagens. Ela é a mais simples, porém existem outras, que podem ser mais interessantes para determinados tipos de aplicação. </p>

			<p>Por exemplo, para um sistema de reconhecimento facial, pode ser mais interessante caracterizar as imagens de rostos através de outras propriedades, como a distância entre os olhos, o tamanho do nariz etc. </p>

			<p>As ferramentas de ciência de dados que conseguem gerar modelos diretamente a partir de bases de dados textuais ou de imagens, normalmente realizam internamente a conversão destes dados para o formato estruturado. Ou seja, elas aplicam técnicas de conversão similares às apresentadas nesta unidade, porém o fazem de forma automática e transparente para o usuário.  

			<h2>Criando notebooks em python</h2> 

			<p>Para uma demonstração das técnicas de pré-processamento de imagens em preto e branco e coloridas, acesse o programa <a hef="https://drive.google.com/file/d/1oc0k9c8wk0YpaoEUuLmsmAtNwFI4LccW/view?usp=sharing"><a>Módulo 2 Unidade 1(f) - Proc. de Imagens.ipynb</a> que está disponível no Google Colab. </p>

			<p>Para treinar, recrie o programa com outros exemplos da sua área de trabalho e compartilhe no Fórum.</p>
 
			<p>Se você domina o R, transforme o código de Python para R e colabore no desenvolvimento do curso. </p>
 
			<p>Se você tiver mais exemplos aplicados em sua área de atuação, compartilhe o código no perfil do curso no Google Colab.</p>

						<!--FORUM COLABORATIVO -->
			<div class="text-with-icon">
				<div class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" aria-hidden="true" />
				</div>
				<p class="pullquote">
					Fique à vontade para compartilhar suas ideias e considerações sobre a prática no <strong>Fórum Colaborativo</strong>. 
				</p>
			</div>
		 	<!-- fim FORUM COLABORATIVO -->


			<h2>Compartilhando experiências</h2>

			<p>Você já utiliza a técnica de conversão de imagens nos seus processos de trabalho?</p>
			<!--FORUM COLABORATIVO -->
			<div class="text-with-icon">
				<div class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" aria-hidden="true" />
				</div>
				<p class="pullquote">
					Colabore com a construção do curso, descrevendo no <strong>Fórum Colaborativo</strong> um ou mais casos de utilização das técnicas em processos de trabalho na sua área de atuação.
				</p>
			</div>
			<!-- fim FORUM COLABORATIVO -->

			<button class="btn modal_call" id="faq001">Abrir modal</button>

		</div>	


		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
			<h2>Atividade 1-Projeto</h2>

			<!--ATIVIDADES + Wiki -->
			<div class="text-with-icon">
				<div class="icon-container">
					<img src="dist/img/un02/written-process-icon.svg" aria-hidden="true" />
				</div>
				<div class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" aria-hidden="true" />
				</div>
				
				<div class="pullquote">
					<ul class="numeric-list">Tarefas:
						<li>analisar o problema definido no Módulo 1 e identificar os tipos de dados que serão utilizados, explicando como determinaram essa classificação, as principais características, facilidades, dificuldades desse tipo de dados e estratégias já utilizadas para a resolução do problema; </li>
						<li>identificar os tipos de ocorrências e aplicar pelo menos uma das técnicas de conversão de dados não estruturados no conjunto de dados que está sendo utilizado na resolução do problema; e</li>
						<li>descrever o processo no <strong>Fórum de Atividades do Módulo 2</strong> e, após comentários dos demais participantes e medidores, inserir a descrição na Wiki <strong>Documentação das Atividades</strong>.</li>
					</ul>
				</div>	

			</div>
			<!-- fim -->

	</div>
</main>
			
									




		<!-- Janela modal 1 [inicio] --> 

			<article class="modal" id="modal_faq001">
				<header class="modal__header">			
					<h2 class="modal__heading-1">Para saber mais </h2>
					<button class="btn modal__btn-close">Fechar</button>
				</header>
				<div class="row modal__content">
					<div class="col-xs-24">

					<p>Um artigo interessante contendo mais informações sobre a conversão de imagens para números é apresentado em <a href="https://www.kdnuggets.com/2020/01/convert-picture-numbers.html">https://www.kdnuggets.com/2020/01/convert-picture-numbers.html</a>.

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
	$('#exercise04 .relate-cols__input').keyup(function () {// Relacionar colunas: limite de caracteres
		this.value = this.value.replace(/[^1-5\.]/g,'');
	});
	// Tooltip
	$('.tooltip001').tooltipster({ maxWidth: 300 });
	$('.tooltip002').tooltipster({ maxWidth: 300 });
	$('.tooltip003').tooltipster({ maxWidth: 300 });
	$('.tooltip004').tooltipster({ maxWidth: 300 });
	$('.tooltip005').tooltipster({ maxWidth: 300 });
	$('.tooltip006').tooltipster({ maxWidth: 300 });
	$('.tooltip007').tooltipster({ maxWidth: 300 });
	$('.tooltip008').tooltipster({ maxWidth: 300 });
	$('.tooltip009').tooltipster({ maxWidth: 300 });
	$('.tooltip010').tooltipster({ maxWidth: 300 });
</script>


</script>

</body></html>			




