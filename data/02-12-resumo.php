<?php
// Titulo da unidade
$moduleTitle ="Pré-processamento de dados";
// Titulo do topico
$topicTitle ="Resumo do Módulo";
// Titulo da pagina
$pageTitle ="";
// Subtitulo da pagina
$pageSubtitle ="Principais destaques sobre Pré-Processamento de Dados";
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

	<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		
		<p>
			Este módulo abordou os diferentes tipos de dados que podem ser utilizados em processos de ciência de dados e as técnicas básicas que possibilitam o pré-processamento (preparação) destes dados. A seguir, relacionamos os principais destaques do módulo:  
		</p>
			<!-- Lista não ordenada [inicio] -->
		<ul class="bulleted-list">
			<li>Reconhecer as principais características dos dados estruturados, semiestruturados e não estruturados;
			<li>Reconhecer e aplicar as diferentes técnicas de pré-processamento para conversão de dados não estruturados (texto e imagens) em dados estruturados (formato tabular);
			<li>Reconhecer as diferentes técnicas de limpeza, transformação, integração e redução da dimensionalidade de bases de dados relevantes para a resolução de um determinado problema de ciência de dados;
			<li>Aplicar as diferentes técnicas de limpeza de bases de dados relevantes para a resolução de um problema de ciência de dados;
			<li>Aplicar as diferentes técnicas de transformação de bases de dados relevantes para a resolução de um problema de ciência de dados;
			<li>Aplicar as diferentes técnicas de integração de bases de dados relevantes para a resolução de um problema de ciência de dados;
			<li> Aplicar as diferentes técnicas de redução da dimensionalidade de bases de dados relevantes para a resolução de um problema de ciência de dados; e 
			<li>Explicar o processo do grupo na etapa de identificação do problema e preparação dos dados.
			</li>
		</ul>
	
		<button class="btn modal_call" id="faq001">Abrir modal</button>
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
					<p>HAN, J.; KAMBER, M.; PEI, J.  Data mining: concepts and techniques. 3. ed. São Francisco: Morgan Kaufmann, 2011.</p>
					 
					<p>JURAFSKY, D; MARTIN, J. H. Speech and Language Processing. 3. ed (draft). [S.l.]: Stanford, 2023.<a href="https://web.stanford.edu/~jurafsky/slp3/">Disponível em: https://web.stanford.edu/~jurafsky/slp3/</a>. Acesso em 06 mar. 2023. </p>
					 
					<p>MCKINNEY, W.  Python for data analysis: data wrangling with pandas, numpy, and jupyter. 3. ed. Sebastopol: O’Reilly, 2022.</p>

					<p>PESCO, D. U; BORTOLOSSI, H. J. Matrizes e Imagens Digitais. | [S.l.]: Niterói, 2009.<a href="http://www.cdme.im-uff.mat.br/matrix/matrix-html/matrix-br.html">Disponível em: http://www.cdme.im-uff.mat.br/matrix/matrix-html/matrix-br.html. Acesso em 06 mar. 2023</a></p>
				</div>
					</div>
			</article>
</main>			


<?php
include "foot.php";
?>

<!-- <script type="text/javascript" id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js" /> -->





</body>

</html>