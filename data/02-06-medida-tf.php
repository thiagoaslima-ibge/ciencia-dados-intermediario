<?php
// Titulo da unidade
$moduleTitle = "Pré-processamento de dados";
// Titulo do topico
$topicTitle = "Identificação e conversão de tipos de dados";
// Titulo da pagina
$pageTitle = "Medida TF-IDF";
// Subtitulo da pagina
$pageSubtitle = "Como aplicar a TF-IDF na estruturação de textos";
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

			<p>Apesar da frequência de termo e da frequência binária serem maneiras mais simples de representar numericamente o peso de cada termo em uma DTM, elas possuem algumas limitações. </p>

			<p>Por exemplo, considere um corpus onde os documentos correspondem a notícias de jornais. Suponha que você deseja criar um modelo de classificação capaz de identificar quais dos textos correspondem a notícias sobre o tema “meio ambiente”. </p>

			<p>Neste problema, podemos supor a priori que palavras como “desmatamento”, “floresta” e “carbono” devam aparecer em textos sobre meio ambiente, mas raramente aparecerão em textos de notícias sobre outros assuntos. Por outro lado, palavras como “urgente” e “política”, provavelmente aparecem em diversas notícias, não somente naquelas sobre meio ambiente. </p>

			<p>Como fazer um modelo reconhecer que, na verdade, as palavras que melhor discriminam um assunto específico são aquelas não tão frequentes no corpus como um todo, porém presentes com frequência acima do esperado apenas nos documentos que abordam tal assunto? </p>

			<p>É exatamente para isso que existe a medida TF-IDF (Term Frequency – Inverse Document Frequency). Ela tem por objetivo medir o quanto a ocorrência de um determinado termo (token) está concentrada em poucos documentos, ou seja, em documentos que abordam algum tema específico. </p>

			<p>Como o seu nome diz, ela combina duas medidas: TF (<i>Term Frequency</i>) e IDF (<i>Inverse Document Frequency</i>). </p>

			<p>Para compreender a medida TF, suponha que f(di,tj) corresponde à frequência do termo j (tj) em um documento	 i (di). Considere ainda que fmax corresponde à frequência do termo que aparece com o maior número de ocorrências no documento di. Podemos então calcular TF(di,tj) utilizando a fórmula abaixo:</p>

		
			<!-- Imagem grande [inicio] -->
			<figure class="img-container">
				<div class="col-xs-22 col-xs-offset-1 col-sm-17 col-sm-offset-2 col-md-13 col-md-offset-4 col-lg-10 col-lg-offset-6 gutter-sm-right">
					<picture>
						<img class="image" style="height: 100%;width: 100%;" src="dist/img/un02/formula02-06-01.svg" alt="formula">
					</picture>
				</div>
			</figure>
			<!-- Imagem grande [fim] -->

			<p>Veja que o valor da medida de TF é calculado para um termo específico (tj) em um documento específico (di). </p>

			<p>Observe ainda que quanto mais frequente for o termo em um documento, maior será o seu valor de TF nesse documento específico. O termo mais frequente do documento receberá o valor de 1 para TF enquanto os outros receberão valores abaixo de 1. </p>

			<p>Quanto à medida IDF, considere que o corpus com o qual estamos trabalhando possui N documentos e que o termo tj aparece em um total de nj documentos deste corpus. O valor de IDF(tj), isto é, a <i>inverse term frequency</i> do termo tj, pode ser calculado com o uso da fórmula a seguir: </p>

			<!-- Imagem grande [inicio] -->
			<figure class="img-container">
				<div class="col-xs-22 col-xs-offset-1 col-sm-17 col-sm-offset-2 col-md-13 col-md-offset-4 col-lg-10 col-lg-offset-6 gutter-sm-right">
					<picture>
						<img class="image" style="height: 100%;width: 100%;" src="dist/img/un02/formula02-06-02.svg" alt="formula">
					</picture>
				</div>
			</figure>
			<!-- Imagem grande [fim] -->

			<p>Assim, quanto mais comum o termo no corpus, menor será o seu valor de IDF.</p> 

			<p>Agora que conhecemos as medidas de TF e IDF, podemos calcular o valor da TF-IDF, que basicamente consiste em uma combinação de ambas.  A medida TF-IDF para um termo tj em um documento di é definida da seguinte maneira:<p>

			<!-- Imagem grande [inicio] -->
			<figure class="img-container">
				<div class="col-xs-22 col-xs-offset-1 col-sm-17 col-sm-offset-2 col-md-13 col-md-offset-4 col-lg-10 col-lg-offset-6 gutter-sm-right">
					<picture>
						<img class="image" style="height: 100%;width: 100%;" src="dist/img/un02/formula02-06-03.svg" alt="formula">
					</picture>
				</div>
			</figure>
			<!-- Imagem grande [fim] -->

			<p>Assim, os termos com maior TF-IDF passam a ser os que melhor definem a categoria de um determinado documento. Por isso, nos problemas de classificação, regressão e análise de agrupamentos, a medida TF-IDF é a mais frequentemente adotada para representar os pesos dos termos de uma DTM.</p>
			

		</div>	


	<!--	Atividade Interativa 10: 

		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">


			<p>Como exercício prático do cálculo da medida de TF-IDF, considere um corpus formado por 1000 notícias. Suponha que a palavra “floresta” apareça em apenas 8 documentos do corpus e que a palavra “política” apareça em 50 documentos.</p>

			<p>Seja um documento específico d em que a palavra “floresta” ocorre 10 vezes e “política” ocorre 1 vez. Suponha que “floresta” seja a palavra que ocorre o maior número de vezes em d. Calcule o valor da medida TF-IDF para as palavras “floresta” e “política” neste documento d.</p>

			<p>Escreva sua solução e depois clique em <strong>Visualizar Resposta</strong> para comparar.</p> 

			BOTÃO: Visualizar Resposta
			RESPOSTA:

			<p>Primeiro calculamos o TF do termo “floresta” no documento d:
			<br>TF<sub>(d, floresta)</sub> = 8 / 8 = 1,00


			<p>Em seguida, calculamos o IDF de floresta no corpus:
			<br>IDF<sub>(floresta)</sub> = log2(1000 / 8) =  6,97


			<p>Assim, é possível calcular o TF-IDF de floresta em d: 
			<br>TF-IDF<sub>(d, floresta)</sub> = 1,00 x 6,97 = 6,97

			<p>Agora o mesmo procedimento para o termo “política”
			<br>TF<sub>(d, política)</sub> = 1 / 8 = 0,125
			<br>IDF<sub>(política)</sub> = log2(1000 / 50) =  4,32
			<br>TF-IDF<sub>(d, política)</sub> = 0,125 x 4,32 = 0,54

			<p>Veja que a palavra “floresta” fica com um peso TF-IDF muito maior do que o peso TF-IDF da palavra “política” no documento d. </p>


		</div>

		<!--FIM ATIVIDADE 10 -->



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

			<p>É importante mencionar que existem outras abordagens para estruturar textos além da baseada no uso de DTMs e na medida de TF-IDF. Uma abordagem que se tornou muito popular nos anos recentes é a baseada em <i>embeddings</i> semânticos, mas não será tratado neste curso. Mas faça parte da construção de conhecimento organizacional e compartilhe no [inserir ícone] Fórum Colaborativo o que você sabe sobre a técnica.</p>


			<h2>Criando notebooks em python</h2> 

			<p>Para uma demonstração das técnicas de pré-processamento de textos acesse o programa <a hef="https://colab.research.google.com/drive/1pbhQWM0-uTyymE1X2ZYBfQR5uBm7HmOg?usp=sharing"><a>Módulo 2 Unidade 1(d) - Proc. de Textos - Matriz Documento-Termo.ipynb</a> e <a href="https://colab.research.google.com/drive/1k2niaQj75OApQVQVq4ec3zLrPCJOboGd?usp=sharing"><a>Módulo 2 Unidade 1(e) - Proc. de Textos - Fluxo Completo.ipynb</a> que está disponível no Google Colab. </p>

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

			<p>Você já utiliza a técnica de Medida TF-IDF nos seus processos de trabalho?</p>
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

		</div>
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

					<p><a href="https://iaexpert.academy/2019/04/12/word-embedding-transformando-palavras-em-numeros/">Artigo: Word Embedding: transformando palavras em números</a></p>

					<p><a href="https://web.stanford.edu/~jurafsky/slp3/">Capítulo de livro: “Vector Semantics and Embeddings”</a></p>

					<p><a href="https://www.youtube.com/watch?v=RVx_QYZPGaU">Vídeo: TF-IDF (Term Frequency - Inverse Document Frequency)</a></p>

					
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




