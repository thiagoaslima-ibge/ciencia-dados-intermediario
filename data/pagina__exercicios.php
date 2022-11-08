<?php
	$moduleTitle = "Agilidade decisória"; //TITULO DA UNIDADE
	$topicTitle = "Prática cotidiana"; //TITULO DO TOPICO
	$pageTitle = "Exercícios"; //TITULO DA PAGINA	
	include "head.php";
?>

<script>	
	var exerciseCompletion = 0;
	var feedback01 = {//FEEDBACK: Exercicio 1
    type: "multiple-choice",
    correctValue: "1",
    hitFeedback: "<b>Parabéns!</b> Você selecionou a opção correta. Por conseguinte, a adoção de políticas descentralizadoras faz parte de um processo de gerenciamento das formas de ação.",
    missFeedback: "<b>Atenção!</b> Você não selecionou a opção correta.  A nível organizacional, o novo modelo estrutural aqui preconizado não pode mais se dissociar dos conhecimentos estratégicos para atingir a excelência."
  };
  var feedback02 = {//FEEDBACK: Exercicio 1
    type: "multiple-choice",
    correctValue: "4",
    hitFeedback: "<b>Parabéns!</b> Você selecionou a opção correta. Por conseguinte, a adoção de políticas descentralizadoras faz parte de um processo de gerenciamento das formas de ação.",
    missFeedback: "<b>Atenção!</b> Você não selecionou a opção correta.  A nível organizacional, o novo modelo estrutural aqui preconizado não pode mais se dissociar dos conhecimentos estratégicos para atingir a excelência."
	};
	var feedback03 = {
    type: "true-or-false",
    correctAnswer: [0,1,0],
		missFeedback: [
			"<strong>A sentença é verdadeira</strong>. A nível organizacional, o desenvolvimento contínuo de distintas formas de atuação auxilia a preparação e a composição de alternativas às soluções ortodoxas.",
			"<strong>A sentença é falsa</strong>. A nível organizacional, o desenvolvimento contínuo de distintas formas de atuação auxilia a preparação e a composição de alternativas às soluções ortodoxas.",
			"<strong>A sentença é verdadeira</strong>. A nível organizacional, o desenvolvimento contínuo de distintas formas de atuação auxilia a preparação e a composição de alternativas às soluções ortodoxas."
		]
	};
	var feedback04 = {
    type: "relate-cols",
    correctAnswer: [3,4,2,5,1]
	};
	var feedback05 = {
		type: "crosswords",
		correctAnswer: ["R", "E", "C", "E", "N", "S", "O", "I", "B", "G", "E", "N", "S", "S", "E", "S", "I", "G", "I", "L", "O", "M", "A", "N", "U", "A", "L", "L", "D", "V", "S", "E", "T", "O", "R", "C", "E", "N", "S", "I", "T", "Á", "R", "I", "O", "R", "S", "C", "T", "U", "A", "L", "D", "T", "D", "O", "U", "M", "S", "C", "R", "A", "C", "H", "Á", "A"]
	};
</script>

<main class="page-content">	
	<header class="page-header col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">
		<?php				
			echo "<p class='page-header__topic-title'><span class='page-header__topic-tag-style'>$topicTitle</span></p>";
			echo "<h1 class='page-header__page-title'>$pageTitle</h1>"
		?>
		<p class="lead">No mundo atual, o desenvolvimento contínuo de distintas formas de atuação deve passar por modificações independentemente das condições financeiras e administrativas exigidas.</p>
	</header>
	
	<!-- <CONTEUDO -->
	<div class="row">	
		<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<!-- MULTIPLA ESCOLHA -->
			<form id="exercise01">
				<h2 class="no-top-margin">Exercício 1</h2>
        <p>Podemos já vislumbrar o modo pelo qual a estrutura atual da organização aponta para a melhoria do fluxo de informações. Selecione a <strong>opção correta</strong> e clique em <strong>Confirmar</strong>.</p>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt01" title="Selecione para escolher a opção 1.">					
					<input id="multiplechoice01_opt01" name="multiplechoice01" type="radio" value="1">
					A prática cotidiana prova que a contínua expansão de nossa atividade exige a precisão e a definição das diversas correntes de pensamento.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt02" title="Selecione para escolher a opção 2.">					
					<input id="multiplechoice01_opt02" name="multiplechoice01" type="radio" value="2">
					Pensando mais a longo prazo, o desafiador cenário globalizado oferece uma interessante oportunidade para verificação do orçamento setorial. 
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt03" title="Selecione para escolher a opção 3.">					
					<input id="multiplechoice01_opt03" name="multiplechoice01" type="radio" value="3">
					A certificação de metodologias que nos auxiliam a lidar com o surgimento do comércio virtual é uma das consequências das regras de conduta normativas.
				</label>
				<label class="col-xs-22 col-xs-offset-2 col-sm-24 col-sm-offset-0 multiple-choice__label" for="multiplechoice01_opt04" title="Selecione para escolher a opção 4.">					
					<input id="multiplechoice01_opt04" name="multiplechoice01" type="radio" value="4">
					Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a complexidade dos estudos efetuados estende o alcance e a importância dos conhecimentos estratégicos para atingir a excelência.
				</label>
				<div class="row">
					<div class="col-xs-24 exercise__action-group">							
						<button class="btn btn--main exercise__btn-check-answer" type="button" onclick="multipleChoice()" disabled="disabled">Confirmar</button>							
						<div class="exercise__feedback"></div>
					</div>
				</div>
			</form>

      <!-- MULTIPLA ESCOLHA COM IMAGENS -->
			<form id="exercise02">
				<h2>Exercício 2</h2>
        <p>Podemos já vislumbrar o modo pelo qual a estrutura atual da organização aponta para a melhoria do fluxo de informações. Selecione a <strong>opção correta</strong> e clique em <strong>Confirmar</strong>.</p>
				<div class="row">
					<label class="col-xs-22 col-xs-offset-2 col-sm-offset-0 col-md-11" for="multiplechoice02_opt01" title="Selecione para escolher a opção 1.">						
						<input class="multiple-choice__input--img" id="multiplechoice02_opt01" name="multiplechoice02" type="radio" value="1">
						<img class="image" src="dist/img/example-img001--lg.jpg" alt="Descrição da imagem..">
					</label>
					<label class="col-xs-22 col-xs-offset-2 col-sm-offset-0 col-md-11 col-md-offset-1" for="multiplechoice02_opt02" title="Selecione para escolher a opção 2.">						
						<input class="multiple-choice__input--img" id="multiplechoice02_opt02" name="multiplechoice02" type="radio" value="2">
						<img class="image" src="dist/img/example-img002--lg.jpg" alt="Descrição da imagem..">
					</label>
					<label class="col-xs-22 col-xs-offset-2 col-sm-offset-0 col-md-11" for="multiplechoice02_opt03" title="Selecione para escolher a opção 3.">						
						<input class="multiple-choice__input--img" id="multiplechoice02_opt03" name="multiplechoice02" type="radio" value="3">
						<img class="image" src="dist/img/example-img003--lg.jpg" alt="Descrição da imagem..">
					</label>
					<label class="col-xs-22 col-xs-offset-2 col-sm-offset-0 col-md-11 col-md-offset-1" for="multiplechoice02_opt04" title="Selecione para escolher a opção 4.">						
						<input class="multiple-choice__input--img" id="multiplechoice02_opt04" name="multiplechoice02" type="radio" value="4">
						<img class="image" src="dist/img/example-img004--lg.jpg" alt="Descrição da imagem..">
					</label>
				</div>
				<div class="row">
					<div class="col-xs-24 exercise__action-group">							
						<button class="btn btn--main exercise__btn-check-answer" type="button" onclick="multipleChoice()" disabled="disabled">Confirmar</button>							
						<div class="exercise__feedback"></div>
					</div>
				</div>
			</form>

			<!-- VERDADEIRO OU FALSO -->
			<form class="true-or-false" id="exercise03">
				<h2>Exercício 3</h2>
				<p>Pensando mais a longo prazo, o aumento do diálogo entre os diferentes setores produtivos cumpre um papel essencial na formulação do levantamento das variáveis envolvidas.</p>
				<p class="row true-or-false__item" id="exercise03-01">
					<span class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0">						
						<button class="btn true-or-false__btn-answer" id="exercise03-01__0" type="button" title="Verdadeiro">V</button>
						<button class="btn true-or-false__btn-answer" id="exercise03-01__1" type="button" title="Falso">F</button>							
					</span>
					<span class="col-xs-22 col-xs-offset-1 col-sm-19 col-sm-offset-0">
						<span>As experiências acumuladas demonstram que a valorização de fatores subjetivos garante a contribuição de um grupo importante na determinação das formas de ação.</span>
						<span class="exercise__feedback true-or-false__exercise-feedback" id="exercise03-01__comment"></span>
					</span>
				</p>
				<p class="row true-or-false__item" id="exercise03-02">
					<span class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0">						
						<button class="btn true-or-false__btn-answer" id="exercise03-02__0" type="button" title="Verdadeiro">V</button>
						<button class="btn true-or-false__btn-answer" id="exercise03-02__1" type="button" title="Falso">F</button>							
					</span>
					<span class="col-xs-22 col-xs-offset-1 col-sm-19 col-sm-offset-0">
						<span>Todas estas questões, devidamente ponderadas, levantam dúvidas sobre se a execução dos pontos do programa agrega valor ao estabelecimento das novas proposições.</span>
						<span class="exercise__feedback true-or-false__exercise-feedback" id="exercise03-02__comment"></span>
					</span>
				</p>
				<p class="row true-or-false__item" id="exercise03-03">
					<span class="col-xs-22 col-xs-offset-1 col-sm-5 col-sm-offset-0">						
						<button class="btn true-or-false__btn-answer" id="exercise03-03__0" type="button" title="Verdadeiro">V</button>
						<button class="btn true-or-false__btn-answer" id="exercise03-03__1" type="button" title="Falso">F</button>							
					</span>
					<span class="col-xs-22 col-xs-offset-1 col-sm-19 col-sm-offset-0">
						<span>A certificação de metodologias que nos auxiliam a lidar com o fenômeno da Internet nos obriga à análise de todos os recursos funcionais envolvidos.</span>
						<span class="exercise__feedback true-or-false__exercise-feedback" id="exercise03-03__comment"></span>
					</span>
				</p>
				<div class="row">
					<div class="col-xs-12 exercise__action-group">							
						<button class="btn btn--main exercise__btn-check-answer" type="button" onclick="trueOrFalse()" disabled="disabled">Confirmar</button>
					</div>
				</div>
			</form>

			<form class="relate-cols" id="exercise04">
			<h2>Exercício 4</h2>
				<p>Pensando mais a longo prazo, o aumento do diálogo entre os diferentes setores produtivos cumpre um papel essencial na formulação do levantamento das variáveis envolvidas.</p>
				<div class="row">
					<ol class="col-xs-24 col-sm-10 numeric-list">
						<li>Novo modelo estrutural.</li>
						<li>Acompanhamento das preferências de consumo.</li>
						<li>Expansão dos mercados mundiais.</li>
						<li>Estrutura atual da organização.</li>
						<li>Desenvolvimento contínuo.</li>
					</ol>
					<ul class="col-xs-24 col-sm-14 gutter-sm-left relate-cols__form">
						<li class="relate-cols__item">							
							<input class="relate-cols__input" type="text" maxlength="1">
							<span class="relate-cols__label">É importante questionar o quanto o aumento do diálogo entre os diferentes setores produtivos.</span>
							<div class="exercise__feedback relate-cols__exercise-feedback"></div>
						</li>
						<li class="relate-cols__item">							
							<input class="relate-cols__input" type="text" maxlength="1">
							<span class="relate-cols__label">Neste sentido, o consenso sobre a necessidade de qualificação ainda não demonstrou convincentemente que vai participar na mudança do retorno esperado a longo prazo.</span>
							<div class="exercise__feedback relate-cols__exercise-feedback"></div>
						</li>
						<li class="relate-cols__item">							
							<input class="relate-cols__input" type="text" maxlength="1">
							<span class="relate-cols__label">Existem dúvidas a respeito de como o desenvolvimento contínuo de distintas formas de atuação estimula a padronização das novas proposições.</span>
							<div class="exercise__feedback relate-cols__exercise-feedback"></div>
						</li>
						<li class="relate-cols__item">							
							<input class="relate-cols__input" type="text" maxlength="1">
							<span class="relate-cols__label">O incentivo ao avanço tecnológico, assim como a execução dos pontos do programa facilita a criação do impacto na agilidade decisória.</span>
							<div class="exercise__feedback relate-cols__exercise-feedback"></div>
						</li>
						<li class="relate-cols__item">							
							<input class="relate-cols__input" type="text" maxlength="1">
							<span class="relate-cols__label">A certificação de metodologias que nos auxiliam a lidar com a constante divulgação das informações.</span>
							<div class="exercise__feedback relate-cols__exercise-feedback"></div>
						</li>
					</ul>                        
				</div>				
				<div class="row">
					<div class="col-xs-12 exercise__action-group">							
						<button type="button" class="btn btn--main exercise__btn-check-answer" onclick="relateCols()" disabled="disabled">Confirmar</button>
					</div>
				</div>
			</form>

			<form id="exercise05">
				<h2>Exercício 5</h2>
				<p>O cuidado em identificar pontos críticos na hegemonia do ambiente político obstaculiza a apreciação da importância das direções preferenciais no sentido do progresso. Ainda assim, existem dúvidas a respeito de como o início da atividade geral de formação de atitudes possibilita uma melhor visão global dos modos de operação convencionais.</p>
				<p><button class="btn" onclick="autofillCrosswords();" type="button">PREENCHER</button></p>
				<ol class="numeric-list">
					<li>Pessoa responsável por coletar os dados necessários à realização da pesquisa.</li>
					<li>Processo de obter informações sobre a totalidade dos membros de uma determinada população.</li>
					<li>Órgão coordenador e produtor de informações estatísticas e geográficas.</li>
					<li>Exploração de matas e florestas nativas ou plantadas. Exemplo de atividade florestal.</li>
					<li>Confidencialidade das informações coletadas.</li>
					<li>Instrumento que contém as instruções e os procedimentos da coleta.</li>
					<li>Área de trabalho onde se localizam os estabelecimentos que serão visitados pelo Recenseador.</li>
					<li>Unidades federativas autônomas de maior abrangência territorial na organização políticoadministrativa do Brasil.</li>
					<li>Computador de mão que será utilizado no Censo Agropecuário 2017 para registrar, armazenar e transmitir os dados coletados.</li>
					<li>Credencial usada pelo Recenseador que o identificará como representante oficial do IBGE.</li>
				</ol>
				<div class="table-container">
					<table class="crosswords">
						<tbody>
							<tr><!-- Linha 1 -->
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td data-wordindex="1">
									<input class="tooltip001" data-tooltip-content="#tooltip001_content" type="text" maxlength="1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
						</tr>
						<tr><!-- Linha 2 -->
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr><!-- Linha 3 -->
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td data-wordindex="2">
								<input class="tooltip002" data-tooltip-content="#tooltip002_content" type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr><!-- Linha 4 -->
							<td></td>
							<td data-wordindex="3">
								<input class="tooltip003" data-tooltip-content="#tooltip003_content" type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr><!-- Linha 5 -->
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr><!-- Linha 6 -->
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td data-wordindex="4">
								<input class="tooltip004" data-tooltip-content="#tooltip004_content" type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr><!-- Linha 7 -->
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td data-wordindex="5">
								<input class="tooltip005" data-tooltip-content="#tooltip005_content" type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>                                
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
						</tr>
						<tr><!-- Linha 8 -->
							<td data-wordindex="6">
								<input class="tooltip006" data-tooltip-content="#tooltip006_content" type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr><!-- Linha 9 -->
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>
									<input type="text" maxlength="1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>
									<input type="text" maxlength="1">
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
						</tr>
						<tr><!-- Linha 10 -->
							<td></td>
							<td data-wordindex="7">
								<input class="tooltip007" data-tooltip-content="#tooltip007_content" type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1" disabled="disabled">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td data-wordindex="8">
								<input class="tooltip008" data-tooltip-content="#tooltip008_content" type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
						</tr>
						<tr><!-- Linha 11 -->
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr><!-- Linha 12 -->
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr><!-- Linha 13 -->
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr><!-- Linha 14 -->
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td data-wordindex="9">
								<input class="tooltip009" data-tooltip-content="#tooltip009_content" type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr><!-- Linha 15 -->
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr><!-- Linha 16 -->
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td data-wordindex="10">
								<input class="tooltip010" data-tooltip-content="#tooltip010_content" type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
						</tr>
						<tr><!-- Linha 17 -->
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<input type="text" maxlength="1">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>			
			<div class="row">
					<div class="col-xs-12 exercise__action-group">							
							<button class="btn btn--main exercise__btn-check-answer" type="button" onclick="crosswordPuzzle()" disabled="disabled">Confirmar</button>							
					</div>
			</div>
		</form>

		</div>
	</div>
	<!-- /CONTEUDO> -->

	<div class="tooltip_templates">
		<span id="tooltip001_content">
			Pessoa responsável por coletar os dados necessários à realização da pesquisa.
		</span>
		<span id="tooltip002_content">
			Processo de obter informações sobre a totalidade dos membros de uma determinada população.
		</span>
		<span id="tooltip003_content">
			Órgão coordenador e produtor de informações estatísticas e geográficas.
		</span>
		<span id="tooltip004_content">
			Exploração de matas e florestas nativas ou plantadas. Exemplo de atividade florestal.
		</span>
		<span id="tooltip005_content">
			Confidencialidade das informações coletadas.
		</span>
		<span id="tooltip006_content">
			Instrumento que contém as instruções e os procedimentos da coleta.
		</span>
		<span id="tooltip007_content">
			Área de trabalho onde se localizam os estabelecimentos que serão visitados pelo Recenseador.
		</span>
		<span id="tooltip008_content">
			Unidades federativas autônomas de maior abrangência territorial na organização políticoadministrativa do Brasil.
		</span>
		<span id="tooltip009_content">
			Computador de mão que será utilizado no Censo Agropecuário 2017 para registrar, armazenar e transmitir os dados coletados.
		</span>
		<span id="tooltip010_content">
			Credencial usada pelo Recenseador que o identificará como representante oficial do IBGE.
		</span>
</div>  
	
</main>

<article class="modal" id="modal_retry">
	<header class="modal__header" style="padding-bottom:0;">			
		<h2 class="modal__heading-1">Atenção</h2>
		<button class="btn modal__btn-close">Fechar</button>
	</header>
	<p>Você não selecionou a opção correta. Tente novamente!</p>	
</article>

<?php
	include "foot.php";
?>

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

</body></html>