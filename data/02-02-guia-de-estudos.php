<?php
// Titulo da unidade
$moduleTitle = "Pré-processamento de dados";
// Titulo do topico
$topicTitle = "Abertura";
// Titulo da pagina
$pageTitle = "Guia de estudos";
// Subtitulo da pagina
$pageSubtitle = "Como este módulo está organizado para facilitar a sua aprendizagem?";
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
			<h2 class="no-top-margin">Objetivos </h2>
			<p>
				Este módulo tem como objetivo geral de aprendizagem: reconhecer e aplicar as principais técnicas de identificação, conversão e pré-processamento de dados para resolução do problema.
			</p>
			<p>
				Você vai precisar de aproximadamente <strong>12 horas</strong> para concluir o estudo deste Módulo, atingindo os seguintes objetivos:
			</p>
			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				<li>reconhecer e descrever dados estruturados, semiestruturados e não estruturados para estudar, explorar e analisar os tipos de dados no problema;
				<li>reconhecer e aplicar as diferentes técnicas de pré-processamento específicas de conversão de dados não estruturados (texto e imagens) em dados estruturados para inserção dos dados no formato
					tabular nos processos de classificação, regressão e agrupamento <i>(clustering)</i> na etapa de análise de dados do problema;
				<li>reconhecer as diferentes técnicas de limpeza, transformação, integração e redução da dimensionalidade de bases de dados relevantes para a resolução do problema;
				<li>aplicar as diferentes técnicas de limpeza de bases de dados relevantes para a resolução do problema;
				<li>aplicar as diferentes técnicas de transformação de bases de dados relevantes para a resolução do problema;
				<li>aplicar as diferentes técnicas de integração de bases de dados relevantes para a resolução do problema;
				<li>aplicar as diferentes técnicas de redução da dimensionalidade de bases de dados relevantes para a resolução do problema; e
					explicar o processo do grupo na etapa de identificação do problema e preparação dos dados.
				</li>
				</li>
			</ul>

			<h2>Roteiro do Módulo 2 </h2>
			<p>Para facilitar a sua aprendizagem, o módulo está organizado nas seguintes unidades:</p>
			<ul class="bulleted-list">
				<li>identificação e conversão de tipos de dados; e
				<li>técnicas de pré-processamento de dados.
				</li>
				</li>
			</ul>

		</div>

	</div>



</main>

<?php
include "foot.php";
?>

<!-- Inclua o script a seguir para utilizar o componente Tooltip -->
<script src="dist/js/vendor/tooltipster.bundle.min.js"></script>



</body>

</html>