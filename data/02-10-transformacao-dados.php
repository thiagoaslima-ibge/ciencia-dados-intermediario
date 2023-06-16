<?php
// Titulo da unidade
$moduleTitle ="Pré-processamento de dados";
// Titulo do topico
$topicTitle ="Técnicas de pré-processamento de dados";
// Titulo da pagina
$pageTitle ="Transformação de dados";
// Subtitulo da pagina
$pageSubtitle ="Como aplicar técnicas de transformação de dados para melhoria da qualidade da informação";
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
		

			<p>Na etapa de pré-processamento, não devemos nos ater apenas à limpeza de dados, mas também atuar no enriquecimento da base.</p> 

			<p>Nesse processo é onde representamos os dados originais em formatos mais apropriados e adequados para o processo de modelagem. </p>

			<p>Esse tipo de procedimento também pode melhorar a velocidade de processamento dos dados e, nos casos de volumes muito grande de dados, esse tipo de gerenciamento dos dados pode salvar um tempo razoável de processamento. </p>

			<p>Existe uma infinidade de formas de transformar os seus dados e as mais utilizadas são: normalização, discretização, método de binning, métodos de imputação e integração de dados. Você conhecerá um pouco sobre elas a seguir.</p>

			<h2>Normalização </h2>
			<p>Considere um pequeno estrato de alguma unidade da federação referente ao comércio de atacado de matérias primas agrícolas e animais vivos, conforme tabela abaixo.</p>

			
			<!-- Tabela [inicio] -->
			<div class="table-container">
			<h5>Informações econômicas de um grupo de empresas do comércio atacadista de matérias-primas agrícolas e animais vivos.</h5>
				<table class="table">
					<caption class="table__title">Exemplo de tabela</caption>
					<tbody>
						<tr>
							<th scope="col">Obs</th>
							<td class="table__numeric-values">1</td>
							<td class="table__numeric-values">2</td>
							<td class="table__numeric-values">3</td>
							<td class="table__numeric-values">4</td>
							<td class="table__numeric-values">5</td>
						</tr>

						<tr>
							<th scope="col">Empresa</th>
							<td class="table__numeric-values">0xxxx4221</td>
							<td class="table__numeric-values">3xxxx890</td>
							<td class="table__numeric-values">1xxxx119</td>
							<td class="table__numeric-values">0xxxx546</td>
							<td class="table__numeric-values">5xxxx858</td>
						</tr>
						
						<tr>
							<th scope="col">CNAE</th>
							<td class="table__numeric-values">4623</td>
							<td class="table__numeric-values">4623</td>
							<td class="table__numeric-values">4621</td>
							<td class="table__numeric-values">4623</td>
							<td class="table__numeric-values">4623</td>
						</tr>
						
						<tr>
							<th scope="col">Número de funcionários</th>
							<td class="table__numeric-values">8</td>
							<td class="table__numeric-values">7</td>
							<td class="table__numeric-values">7</td>
							<td class="table__numeric-values">4</td>
							<td class="table__numeric-values" bgcolor="#c2adeb">-</td>
						</tr>

						<tr>
							<th scope="col">Salário anual</th>
							<td class="table__numeric-values">511.615</td>
							<td class="table__numeric-values">128.814</td>
							<td class="table__numeric-values">88.486</td>
							<td class="table__numeric-values">83.817</td>
							<td class="table__numeric-values" bgcolor="#c2adeb">-</td>					
						</tr>

						<tr>
							<th scope="col">Receita anual</th>
							<td class="table__numeric-values"><font color="#6632cd">57.673.098</font></td>
							<td class="table__numeric-values">6.258.305</td>
							<td class="table__numeric-values">2.600.132</td>
							<td class="table__numeric-values">2.141.988</td>
							<td class="table__numeric-values" bgcolor="#c2adeb">-</td>
						</tr>	

					</tbody>
				</table>
			</div>	
			<!-- Tabela [fim] -->

			<p>Alguma informação na tabela te chama atenção? Você diria que existe alguma informação que se destaca ou diverge das demais? 

			<p>Observe que as variáveis <i>Salário Anual</i> e <i>Receita Anual</i> possuem ordens de grandeza bem distintas. Essa característica pode dificultar a crítica dessas variáveis, pois nem sempre fica claro se a empresa como um todo é grande comparativamente às outras ou se apenas uma variável específica que destoa das demais.</p> 

			<p>Ao aplicarmos a técnica de padronização, <i>Salário Anual Padronizado</i> e <i>Receita Anual Padronizada</i>, respectivamente Salário Anual e Receita Anual, conforme as duas últimas colunas das tabela abaixo, o que que você consegue observar que alteração de comportamento da tabela anterior para essa?</p>	
	</div>
	
	<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">		
			
			<!-- Tabela [inicio] -->
			<div class="table-container">
			<h5>Informações econômicas e informações econômicas padronizadas de um grupo de empresas do comércio atacadista de matérias-primas agrícolas e animais vivos.</h5>
				<table class="table">
					<caption class="table__title">Exemplo de tabela</caption>
					<tbody>
						<tr>
							<th scope="col">Obs</th>
							<td class="table__numeric-values">1</td>
							<td class="table__numeric-values">2</td>
							<td class="table__numeric-values">3</td>
							<td class="table__numeric-values">4</td>
							<td class="table__numeric-values">5</td>
						</tr>

						<tr>
							<th scope="col">Empresa</th>
							<td class="table__numeric-values">0xxxx4221</td>
							<td class="table__numeric-values">3xxxx890</td>
							<td class="table__numeric-values">1xxxx119</td>
							<td class="table__numeric-values">0xxxx546</td>
							<td class="table__numeric-values">5xxxx858</td>
						</tr>
						
						<tr>
							<th scope="col">CNAE</th>
							<td class="table__numeric-values">4623</td>
							<td class="table__numeric-values">4623</td>
							<td class="table__numeric-values">4621</td>
							<td class="table__numeric-values">4623</td>
							<td class="table__numeric-values">4623</td>
						</tr>
						
						<tr>
							<th scope="col">Número de funcionários</th>
							<td class="table__numeric-values">8</td>
							<td class="table__numeric-values">7</td>
							<td class="table__numeric-values">7</td>
							<td class="table__numeric-values">4</td>
							<td class="table__numeric-values">-</td>
						</tr>

						<tr>
							<th scope="col">Salário anual</th>
							<td class="table__numeric-values">511.615</td>
							<td class="table__numeric-values">128.814</td>
							<td class="table__numeric-values">88.486</td>
							<td class="table__numeric-values">83.817</td>
							<td class="table__numeric-values">-</td>					
						</tr>

						<tr>
							<th scope="col">Receita anual</th>
							<td class="table__numeric-values">57.673.098</td>
							<td class="table__numeric-values">6.258.305</td>
							<td class="table__numeric-values">2.600.132</td>
							<td class="table__numeric-values">2.141.988</td>
							<td class="table__numeric-values">-</td>
						</tr>

						<tr>
							<th scope="col" colspan="6" bgcolor="#686868">Padronizado</th>
						</tr>	

						<tr>
							<th scope="col" bgcolor="#c2adeb">Salário anual</th>
							<td class="table__numeric-values">1,49</td>
							<td class="table__numeric-values">-0,36</td>
							<td class="table__numeric-values">-0,56</td>
							<td class="table__numeric-values">-0,58</td>
							<td class="table__numeric-values">-</td>				
						</tr>

						<tr>
							<th scope="col" bgcolor="#c2adeb">Receita anual</th>
							<td class="table__numeric-values">1,50</td>
							<td class="table__numeric-values">-0,40</td>
							<td class="table__numeric-values">-0,54</td>
							<td class="table__numeric-values">-0,56</td>
							<td class="table__numeric-values">-</td>
						</tr>	
	
					</tbody>
				</table>
			</div>	
			<!-- Tabela [fim] -->

				<p>Na tabela acima, com a criação das variáveis <i>Salário Anual Padronizado</i> e <i>Receita Anual Padronizada</i> podemos perceber que a coerência entre essas variáveis se aproxima. E que, com isso, é fácil notar que a primeira observação destoa de forma equivalente (homogêneo) nessas duas variáveis, ou seja, não parece ser um erro de digitação, mas sim uma presença de outlier.</p>

				<p>Agora vamos considerar um outro exemplo. Considerarmos um domínio referente ao comércio de varejo de lojas de tecidos de alguma unidade da federação, conforme tabela abaixo. Você consegue notar que há uma semelhança entre esse estrato e o estrato analisado anteriormente? </p>
	</div>
	
	<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">			

			<!-- Tabela [inicio] -->	
			<div class="table-container">
			<h5>Principais variáveis econômicas de algumas empresas do comércio varejista de lojas de tecidos.</h5>
				<table class="table">
					<caption class="table__title">Exemplo de tabela</caption>
					<tbody>
						<tr>
							<th scope="col">Obs</th>
							<td class="table__numeric-values">1</td>
							<td class="table__numeric-values">2</td>
							<td class="table__numeric-values">3</td>
							<td class="table__numeric-values">4</td>
							<td class="table__numeric-values">5</td>
						</tr>

						<tr>
							<th scope="col">Empresa</th>
							<td class="table__numeric-values">0xxxx444</td>
							<td class="table__numeric-values">1xxxx363</td>
							<td class="table__numeric-values">0xxxx517</td>
							<td class="table__numeric-values">0xxxx648</td>
							<td class="table__numeric-values">3xxxx364</td>
						</tr>
						
						<tr>
							<th scope="col">CNAE</th>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
						</tr>
						
						<tr>
							<th scope="col">Número de funcionários</th>
							<td class="table__numeric-values">15</td>
							<td class="table__numeric-values">9</td>
							<td class="table__numeric-values">11</td>
							<td class="table__numeric-values">19</td>
							<td class="table__numeric-values" bgcolor="#c2adeb">-</td>
						</tr>

						<tr>
							<th scope="col">Salário anual</th>
							<td class="table__numeric-values">219.795</td>
							<td class="table__numeric-values">289.005</td>
							<td class="table__numeric-values">303.739</td>
							<td class="table__numeric-values">338.118</td>
							<td class="table__numeric-values" bgcolor="#c2adeb">-</td>					
						</tr>

						<tr>
							<th scope="col">Receita anual</th>
							<td class="table__numeric-values">4.863.637</td>	
							<td class="table__numeric-values">2.693.912</td>
							<td class="table__numeric-values">1.761.553</td>
							<td class="table__numeric-values">795.763</td>
							<td class="table__numeric-values" bgcolor="#c2adeb">-</td>
						</tr>	

						<tr>
						
						</tr>
					</tbody>
				</table>
			</div>	
			<!-- Tabela [fim] -->

			<p>Para a tabela acima, vemos que essa situação pode não se repetir, pois o valor de <i>Receita Anual</i> da primeira observação diverge bastante das demais. Para confirmar isso, vamos repetir a técnica feita anteriormente.</p>

			<p>Ao aplicarmos a padronização, notamos, no entanto, que na primeira observação não apenas a <i>Receita Anual</i> destoou, como já era esperado, mas o <i>Salário Anual</i> também, mas para a direção contrária. </p>

			<p>Consegue reparar, conforme tabela que segue, que dessa forma fica muito fácil visualizar a relação entre os valores unidimensionalmente através das variáveis padronizadas? </p>

	</div>

	<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">		
			<!-- Tabela [inicio] -->
			<div class="table-container">
			<h5>Principais variáveis econômicas e principais variáveis econômicas padronizadas de algumas empresas do comércio varejista de lojas de tecidos.</h5>
				<table class="table">
					<caption class="table__title">Exemplo de tabela</caption>
					<tbody>
						<tr>
							<th scope="col">Obs</th>
							<td class="table__numeric-values">1</td>
							<td class="table__numeric-values">2</td>
							<td class="table__numeric-values">3</td>
							<td class="table__numeric-values">4</td>
							<td class="table__numeric-values">5</td>
						</tr>

						<tr>
							<th scope="col">Empresa</th>
							<td class="table__numeric-values">0xxxx444</td>
							<td class="table__numeric-values">1xxxx363</td>
							<td class="table__numeric-values">0xxxx517</td>
							<td class="table__numeric-values">0xxxx648</td>
							<td class="table__numeric-values">3xxxx364</td>
						</tr>
						
						<tr>
							<th scope="col">CNAE</th>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
						</tr>
						
						<tr>
							<th scope="col">Número de funcionários</th>
							<td class="table__numeric-values">15</td>
							<td class="table__numeric-values">9</td>
							<td class="table__numeric-values">11</td>
							<td class="table__numeric-values">19</td>
							<td class="table__numeric-values">10</td>
						</tr>


						<tr>
							<th scope="col">Salário anual</th>
							<td class="table__numeric-values">219.795</td>
							<td class="table__numeric-values">289.005</td>
							<td class="table__numeric-values">303.739</td>
							<td class="table__numeric-values">338.118</td>
							<td class="table__numeric-values">-</td>					
						</tr>

						<tr>
							<th scope="col">Receita anual</th>
							<td class="table__numeric-values">4.863.637</td>	
							<td class="table__numeric-values">2.693.912</td>
							<td class="table__numeric-values">1.761.553</td>
							<td class="table__numeric-values">795.763</td>
							<td class="table__numeric-values">-</td>
						</tr>

						<tr>
							<th scope="col" colspan="6" bgcolor="#686868">Padronizado</th>
						</tr>	

						<tr>
							<th scope="col" bgcolor="#c2adeb">Salário anual</th>
							<td class="table__numeric-values">-1,37</td>
							<td class="table__numeric-values">0,03</td>			
							<td class="table__numeric-values">0,32</td>
							<td class="table__numeric-values">1,02</td>
							<td class="table__numeric-values">-</td>					
						</tr>

						<tr>
							<th scope="col" bgcolor="#c2adeb">Receita anual</th>
							<td class="table__numeric-values">1,34</td>	
							<td class="table__numeric-values">0,10</td>
							<td class="table__numeric-values">-0,44</td>
							<td class="table__numeric-values">-1,00</font></td>
							<td class="table__numeric-values">-</td>
						</tr>	
	
					</tbody>
				</table>
			</div>	
			<!-- Tabela [fim] -->

			<p>Os exemplos aqui apresentados são meramente ilustrativos, pois idealmente são necessárias mais observações para conseguirmos avaliar estatisticamente a distribuição de uma variável, mas apresentam a ideia de como a padronização - um dos métodos de normalização - pode ser aplicada em processos de transformação de dados.</p>

			<p>A normalização é uma técnica usada, portanto, para redimensionar os valores de variáveis numéricas para um intervalo comum. Normalmente, esse intervalo se compreende entre -1,0 a 1,0 ou 0,0 a 1,0; e isso é recomendado quando os limites dos valores dos atributos são muito diferentes entre si.</p>

			<p>A normalização também é recomendada quando variáveis semelhantes estão descritas em unidades de medidas diferentes, evitando possíveis problemas de comparabilidade no momento de aplicação dos modelos. </p>

			<p>Um exemplo clássico dessas diferenças pode ser encontrado em variáveis de medidas de distância e pesos, tais como metros x pés e quilos x libras. </p>

			<!-- Realce [inicio]-->
			<aside class="pullquote">
				<q><p> Essa técnica ajuda bastante na comparabilidade entre variáveis com unidades de medidas distintas e na comparabilidade de variáveis quando uma tem a distribuição muito mais espaçada do que a outra. </p></q>
			</aside>
			<!-- Realce [fim] -->
	</div>
	
	<div class="col-xs-22 col-xs-offset-1 col-sm-18 col-sm-offset-3 col-md-14 col-md-offset-5 col-lg-10 col-lg-offset-7">

			<p>A normalização é normalmente feita de três formas: por reescala, padronização ou distância interquartílica, conforme fórmulas abaixo, sendo a última técnica a que sofre menos influência dos outliers; mas sendo as duas primeiras as mais frequentes.</p>

			<p>Cada técnica pode ser definida da seguinte forma:</p>

			
			<!-- Lista de definicao [inicio] -->
			<dl class="definition-list"> 

				<dt> Reescala</dt>
					<figure>
						<picture>
							<source srcset="dist/img/un02/formula02-10-01.svg" media="(min-width:1200px)" />
							<source srcset="dist/img/un02/formula02-10-01.svg" media="(min-width:600px)" />
							<source srcset="dist/img/un02/iformula02-10-01.svg" media="(min-width:1px)" />
							<img class="image" src="dist/img/un02/formula02-10-01.svg" alt="formula reescala"/>
						</picture>
					</figure>
				<dt>Padronização</dt>
					<figure>
						<picture>
							<source srcset="dist/img/un02/formula02-10-02.svg" media="(min-width:1200px)" />
							<source srcset="dist/img/un02/formula02-10-02.svg" media="(min-width:600px)" />
							<source srcset="dist/img/un02/iformula02-10-02.svg" media="(min-width:1px)" />
							<img class="image" src="dist/img/un02/02-formula10-02.svg" alt="formula padronização"/>
						</picture>
					</figure>

				<dt>Distância interquartílica</dt>	
					<figure>
						<picture>
							<source srcset="dist/img/un02/formula02-10-03.svg" media="(min-width:1200px)" />
							<source srcset="dist/img/un02/formula02-10-03.svg" media="(min-width:600px)" />
							<source srcset="dist/img/un02/iformula02-10-03.svg" media="(min-width:1px)" />
							<img class="image" src="dist/img/un02/formula02-10-03.svg" alt="formula interquartílica"/>
						</picture>
					</figure>			
			</dl>
			<!-- Lista de definicao [fim] -->
			


			<p>Exemplos de aplicação da técnica de Padronização foram usados ao longo do texto de Normalização.</p>

			<h2>Discretização</h2>
			<p>É o processo de transferência de funções contínuas, modelos, variáveis e equações em contrapartes discretas. Isso é importante, pois alguns algoritmos só trabalham com entradas de valores discretos, não conseguindo prever valores contínuos. </p>

			<p>A discretização cria um número limitado de valores para os atributos. Um exemplo de discretização é quando associamos uma renda familiar a uma classe social, conforme tabela a seguir que fora apresentado na seção Tipo de variáveis:</p>

	

			<!-- Tabela [inicio] -->
			<div class="table-container">
			<h5>Informações socioeconômicas por domicílio</h5>
				<table class="table">
					<caption class="table__title">Exemplo de tabela</caption>
					<thead>
						<tr>
							<th class="table__numeric-col-heading" scope="col">Domicílio</th>
							<th class="table__numeric-col-heading" scope="col">Renda familiar média</th>
							<th class="table__numeric-col-heading" scope="col">Classe social</th>
							<th class="table__numeric-col-heading" scope="col">Classe social numérica</th>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="table__numeric-values">#1</td>
							<td class="table__numeric-values">R$ 3.250</td>
							<td class="table__numeric-values">C</td>
							<td class="table__numeric-values">3</td>
						</tr>

						<tr>
						<td class="table__numeric-values">#2</td>
							<td class="table__numeric-values">R$ 12.900</td>
							<td class="table__numeric-values">A</td>
							<td class="table__numeric-values">5</td>
						</tr>
						
						<tr>
						<td class="table__numeric-values">#3</td>
							<td class="table__numeric-values">R$ 890</td>
							<td class="table__numeric-values">E</td>
							<td class="table__numeric-values">1</td>
						</tr>
						
						<tr>
						<td class="table__numeric-values">#4</td>
							<td class="table__numeric-values">R$ 606</td>
							<td class="table__numeric-values">E</td>
							<td class="table__numeric-values">1</td>
						</tr>

						<tr>
						<td class="table__numeric-values">#5</td>
							<td class="table__numeric-values">R$ 5.195</td>
							<td class="table__numeric-values">C</td>
							<td class="table__numeric-values">3</td>
						</tr>
					</tbody>
				</table>
			</div>	
			<!-- Tabela [fim] -->

			<p>Lembra que há três variáveis (Renda familiar média, Classe social e Classe social numérica) que informam a mesma coisa? </p>

			<p>A categorização é justamente quando criamos uma variável categórica a partir de uma variável não categórica que normalmente do tipo numérica. </p>

			<h2>Método de binning</h2>
			<p>O método de binning é um processo de suavização de dados, usado para minimizar os efeitos de pequenos erros de observação. Os valores dos dados originais são divididos em pequenos intervalos conhecidos como compartimentos (bins) e, em seguida, são substituídos por um valor geral calculado para esse compartimento. </p>

			<p>Pode-se substituir todos os dados em um segmento por seus valores médios ou limites. Esse método pode ser feito de duas formas distintas: por frequência ou largura. Para explicar melhor cada processo, vamos utilizar o exemplo a seguir.</p>

			<p>Suponha uma base com os dados [5, 8, 9, 15, 15, 21, 21, 23,24, 25,26,28, 29, 34,40]. Caso os dados fossem divididos em 3 grupos, os agrupamentos por frequência - mesma quantidade de elementos em cada grupo - seriam compostos por 5 elementos cada um, enquanto os agrupamentos por largura - intervalos divididos em tamanhos iguais - se dividiriam nos intervalos [5,16], [17,28] e [29,40].</p>

			<p> Dessa forma, teríamos as seguintes possibilidades de agrupamentos:</p>

			<p>Lista ordenada por frequências iguais:</p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
				
					<ul class="bulleted-list bulleted-list--sublist">
						<li>Bin 1: [5, 8, 9, 15, 15]</li>
						<li>Bin 2: [21, 21, 23, 24, 25]</li>
						<li>Bin 3: [26, 28, 29, 34, 40]</li>
					</ul>
				</li>
				<br>
				<p>Ou</p>
				<p>Lista ordenada por larguras iguais:</p>
					<ul class="bulleted-list bulleted-list--sublist">
						<li>Bin 1: [5, 8, 9, 15, 15]</li>
						<li>Bin 2: [21, 21, 23, 24, 25, 26, 28]</li>
						<li>Bin 3: [29, 34, 40] </li>
					</ul>
				</li>
				<br>

				<p>Vamos utilizar o agrupamento por frequência para continuar o exemplo.
				</p>
				<p>No caso de optarmos pela suavização pela mediana, como a mediana para cada grupo seria, respectivamente, 9, 23 e 29, então os novos grupos seriam:</p>
					<ul class="bulleted-list bulleted-list--sublist">
						<li>Bin 1’: [9, 9, 9, 9, 9]</li>
						<li>Bin 2’: [23, 23, 23, 23, 23]</li>
						<li>Bin 3’: [29, 29, 29, 29, 29]</li>
					</ul>
					<br>

				<p>Já no caso de suavização pela fronteira, os novos grupos poderiam ser descritos da seguinte forma:</p>	
					<ul class="bulleted-list bulleted-list--sublist">
						<li>Bin 1’: [5, 5, 5, 15, 15]</li>
						<li>Bin 2’: [21, 21, 21, 25, 25]</li>
						<li>Bin 3’: [26, 26, 26, 40, 40]</li>
					</ul>
			<!-- Lista não ordenada [fim] -->

			<h2>Métodos de imputação</h2>
			<p>Sempre que estamos modificando alguma informação original da base de dados, estamos fazendo uma imputação de dados.</p> 

			<p>De forma geral, os métodos de imputação baseiam-se em modelos matemáticos ou estatísticos, contudo também podem ser feitos por dedução lógica ou análise crítica de um especialista do assunto.</p>  

			<p>Os principais métodos de imputação podem ser classificados em métodos em que:</p>

			<!-- Lista não ordenada [inicio] -->
			<ul class="bulleted-list">
					<ul class="bulleted-list bulleted-list--sublist">
						<li>Atribui-se o valor da média, mediana ou moda dos demais registros desse mesmo atributo;</li>
						<li>Através das informações conhecidas da unidade, cria-se uma relação entre as demais unidades que possuam o atributo de interesse para a construção de um modelo;</li>
						<li>Utiliza-se a unidade com características mais próximas da que está sendo tratada para estimar os valores ausentes;</li>
						<li>Utiliza-se uma função de regressão para ajustar os valores que serão tratados, podendo ser linear (com uma variável independente) ou múltipla (com várias variáveis independentes); e</li>
						<li>Agrupam-se os dados semelhantes em um cluster (agrupamento) para fazer as estimações necessárias.</li>
					</ul>
			</ul>
			<p>Em alguns casos, é muito pertinente calcular essas medidas dentro de classes ou até mesmo misturar técnicas a fim de chegar a resultados mais robustos.</p>

			<p>Observe a seguir exemplos de uso de alguns métodos de imputação, utilizando como modelo uma pesquisa econômica do IBGE, com dados hipotéticos</p>

			<h3>Atribuição do valor da média, mediana ou moda das demais observações</h3>
			<p>Suponha um domínio de interesse de alguma unidade da federação referente ao comércio de varejo de lojas de tecidos. Agora observe na tabela abaixo alguns dados sobre variáveis econômicas:</p>	


			<!-- Tabela [inicio] -->
			<div class="table-container">
			<h5>Principais variáveis de algumas empresas do comércio varejista de lojas de tecidos com suas respectivas variáveis de cadastro.</h5>
				<table class="table">
					<caption class="table__title">Exemplo de tabela</caption>
					<tbody>
						<tr>
							<th scope="col">Obs</th>
							<td class="table__numeric-values">1</td>
							<td class="table__numeric-values">2</td>
							<td class="table__numeric-values">3</td>
							<td class="table__numeric-values">4</td>
							<td class="table__numeric-values">5</td>
						</tr>

						<tr>
							<th scope="col">Empresa</th>
							<td class="table__numeric-values">0xxxx444</td>
							<td class="table__numeric-values">1xxxx363</td>
							<td class="table__numeric-values">0xxxx517</td>
							<td class="table__numeric-values">0xxxx648</td>
							<td class="table__numeric-values">3xxxx364</td>
						</tr>
						
						<tr>
							<th scope="col">CNAE</th>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
						</tr>
						
						<tr>
							<th scope="col">Número de funcionários</th>
							<td class="table__numeric-values">15</td>
							<td class="table__numeric-values">9</td>
							<td class="table__numeric-values">11</td>
							<td class="table__numeric-values">19</td>
							<td class="table__numeric-values" bgcolor="#c2adeb">-</td>
						</tr>

						<tr>
							<th scope="col">Salário anual</th>
							<td class="table__numeric-values">219.795</td>
							<td class="table__numeric-values">289.005</td>			
							<td class="table__numeric-values">303.739</td>
							<td class="table__numeric-values">338.118</td>
							<td class="table__numeric-values" bgcolor="#c2adeb">-</td>					
						</tr>

						<tr>
							<th scope="col">Receita anual</th>
							<td class="table__numeric-values">4.863.637</td>	
							<td class="table__numeric-values">2.693.912</td>
							<td class="table__numeric-values">1.761.553</td>
							<td class="table__numeric-values">795.763</font></td>
							<td class="table__numeric-values" bgcolor="#c2adeb">-</td>
						</tr>	

						<tr>
							<th scope="col" colspan="6" bgcolor="#686868">Cadastro de seleção</th>
						</tr>		
						

						<tr>
							<th scope="col">Número de Funcionário</th>
							<td class="table__numeric-values">13</td>
							<td class="table__numeric-values">8</td>
							<td class="table__numeric-values">11</td>
							<td class="table__numeric-values">16</td>
							<td class="table__numeric-values">10</td>
						</tr>

						<tr>
							<th scope="col">Salário Anual</th>							
							<td class="table__numeric-values">233.930</td>
							<td class="table__numeric-values">260.579</td>
							<td class="table__numeric-values">277.907</td>
							<td class="table__numeric-values">356.006</td>
							<td class="table__numeric-values">149.974</td>
						</tr>
						
						</tr>
					</tbody>
				</table>
			</div>	
			<!-- Tabela [fim] -->


			<p>Percebeu que o último item não contém respostas sobre variáveis muito importantes para a pesquisa, que precisam ser imputadas?</p>

			<p>Para isso, a forma mais simples seria calcular a média dos valores disponíveis dentre as demais empresas do mesmo estrato (com características similares), conforme tabela abaixo. </p>

			<p>Não há regra para essa escolha, pois poderíamos ter escolhido o uso da mediana, por exemplo. Portanto, basta ser coerente nas suas escolhas e realista no comportamento e relação das variáveis disponíveis para uso. Por isso, entender do assunto e das variáveis que estão sendo criticadas é tão importante quanto das técnicas em si. </p>



			<!-- Tabela [inicio] -->
			<div class="table-container">
			<h5>Principais variáveis de algumas empresas do comércio varejista de lojas de tecidos com suas respectivas variáveis de cadastro com informações imputadas</h5>
				<table class="table">
					<caption class="table__title">Exemplo de tabela</caption>
					<tbody>
						<tr>
							<th scope="col">Obs</th>
							<td class="table__numeric-values">1</td>
							<td class="table__numeric-values">2</td>
							<td class="table__numeric-values">3</td>
							<td class="table__numeric-values">4</td>
							<td class="table__numeric-values">5</td>
						</tr>

						<tr>
							<th scope="col">Empresa</th>
							<td class="table__numeric-values">0xxxx444</td>
							<td class="table__numeric-values">1xxxx363</td>
							<td class="table__numeric-values">0xxxx517</td>
							<td class="table__numeric-values">0xxxx648</td>
							<td class="table__numeric-values">3xxxx364</td>
						</tr>
						
						<tr>
							<th scope="col">CNAE</th>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
						</tr>
						
						<tr>
							<th scope="col">Número de funcionários</th>
							<td class="table__numeric-values">15</td>
							<td class="table__numeric-values">9</td>
							<td class="table__numeric-values">11</td>
							<td class="table__numeric-values">19</td>
							<td class="table__numeric-values" bgcolor="#c2adeb">10</td>
						</tr>

						<tr>
							<th scope="col">Salário anual</th>
							<td class="table__numeric-values">219.795</td>
							<td class="table__numeric-values">289.005</td>			
							<td class="table__numeric-values">303.739</td>
							<td class="table__numeric-values">338.118</td>
							<td class="table__numeric-values" bgcolor="#c2adeb">149.974</td>					
						</tr>

						<tr>
							<th scope="col">Receita anual</th>
							<td class="table__numeric-values">4.863.637</td>	
							<td class="table__numeric-values">2.693.912</td>
							<td class="table__numeric-values">1.761.553</td>
							<td class="table__numeric-values">795.763</font></td>
							<td class="table__numeric-values" bgcolor="#c2adeb">2.528.716</td>
						</tr>	

						<tr>
							<th scope="col" colspan="6" bgcolor="#686868">Cadastro de seleção</th>
						</tr>		
						

						<tr>
							<th scope="col">Número de Funcionário</th>
							<td class="table__numeric-values">13</td>
							<td class="table__numeric-values">8</td>
							<td class="table__numeric-values">11</td>
							<td class="table__numeric-values">16</td>
							<td class="table__numeric-values">10</td>
						</tr>

						<tr>
							<th scope="col">Salário Anual</th>							
							<td class="table__numeric-values">233.930</td>
							<td class="table__numeric-values">260.579</td>
							<td class="table__numeric-values">277.907</td>
							<td class="table__numeric-values">356.006</td>
							<td class="table__numeric-values">149.974</td>
						</tr>
						
						</tr>
					</tbody>
				</table>
			</div>	
			<!-- Tabela [fim] -->

			<h3>Imputação através das unidades com características mais próximas</h3>
			<p>Utilizando como referência o exemplo anterior, serão apresentados modelos para imputação através do uso da(s) unidade(s), dentre aquelas com informação, com características mais próximas às da unidade que está sendo tratada, de forma a usar sua estrutura para estimar os valores ausentes.</p>

			<p>Uma maneira de identificar a(s) unidade(s) mais próxima(s) é calculando a distância, ou seja, a diferença entre os valores das unidades, e utilizando a(s) com menor(es) distância(s).</p>

			<p>No caso abaixo, por exemplo, ocorre o cálculo da média ponderada entre as duas unidades mais próximas, usando como referência para o cálculo de distância a variável <i>“número de funcionários (cadastro de seleção)”</i> das empresas.</p>

			<p>Consegue perceber que as observações 2 e 3 são as mais próximas da observação 5 quando analisamos a variável <i>“número de funcionários (cadastro de seleção)”</i>?</p>



			<!-- Tabela [inicio] -->
			<div class="table-container">
			<h5>Principais variáveis de algumas empresas do comércio varejista de lojas de tecidos com suas respectivas variáveis de cadastro com informações imputadas pelo vizinho por número de funcionários.</h5>
				<table class="table">
					<caption class="table__title">Exemplo de tabela</caption>
					<tbody>
						<tr>
							<th scope="col">Obs</th>
							<td class="table__numeric-values">1</td>
							<td class="table__numeric-values">2</td>
							<td class="table__numeric-values">3</td>
							<td class="table__numeric-values">4</td>
							<td class="table__numeric-values">5</td>
						</tr>

						<tr>
							<th scope="col">Empresa</th>
							<td class="table__numeric-values">0xxxx444</td>
							<td class="table__numeric-values">1xxxx363</td>
							<td class="table__numeric-values">0xxxx517</td>
							<td class="table__numeric-values">0xxxx648</td>
							<td class="table__numeric-values">3xxxx364</td>
						</tr>
						
						<tr>
							<th scope="col">CNAE</th>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
						</tr>
						
						<tr>
							<th scope="col">Número de funcionários</th>
							<td class="table__numeric-values">15</td>
							<td class="table__numeric-values">9</td>
							<td class="table__numeric-values">11</td>
							<td class="table__numeric-values">19</td>
							<td class="table__numeric-values" bgcolor="#c2adeb">10</td>
						</tr>

						<tr>
							<th scope="col">Salário anual</th>
							<td class="table__numeric-values">219.795</td>
							<td class="table__numeric-values">289.005</td>			
							<td class="table__numeric-values">303.739</td>
							<td class="table__numeric-values">338.118</td>
							<td class="table__numeric-values" bgcolor="#c2adeb">149.974</td>					
						</tr>

						<tr>
							<th scope="col">Receita anual</th>
							<td class="table__numeric-values">4.863.637</td>	
							<td class="table__numeric-values"><font color="#6632cd">2.693.912</td></td>
							<td class="table__numeric-values"><font color="#6632cd">1.761.553</font></td>
							<td class="table__numeric-values">795.763</font></td>
							<td class="table__numeric-values" bgcolor="#c2adeb">2.072.339</td>
						</tr>	

						<tr>
							<th scope="col" colspan="6" bgcolor="#686868">Cadastro de seleção</th>
						</tr>		
						

						<tr>
							<th scope="col">Número de Funcionário</th>
							<td class="table__numeric-values">13</td>
							<td class="table__numeric-values"><font color="#6632cd">8</font></td>
							<td class="table__numeric-values"><font color="#6632cd">11</font></td>
							<td class="table__numeric-values">16</td>
							<td class="table__numeric-values"><font color="#6632cd">10</font></td>
						</tr>

						<tr>
							<th scope="col">Salário Anual</th>							
							<td class="table__numeric-values">233.930</td>
							<td class="table__numeric-values">260.579</td>
							<td class="table__numeric-values">277.907</td>
							<td class="table__numeric-values">356.006</td>
							<td class="table__numeric-values">149.974</td>
						</tr>
						
						</tr>
					</tbody>
				</table>
			</div>	
			<!-- Tabela [fim] -->

			<p>Com isso, vemos que as observações 2 e 3 são as mais próximas da observação 5 e, portanto, calculamos as médias dessas observações para completar as informações faltantes da observação 5.</p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<p><q>É importante que as variáveis escolhidas para o cálculo de distância contenham informações para todas as unidades da base.</q></p>
			</aside>
			<!-- Realce [fim] -->


			<p>Mas cabe ao analista verificar se a variável auxiliar que está sendo utilizada como medida de distância é ou não uma boa variável para medir a variabilidade ou a dispersão daquela variável.</p> 

			<p>No exemplo descrito, será que número de funcionários sozinha descreve bem o comportamento de uma empresa ou de uma economia?</p>

			<p>Vamos supor agora o mesmo exemplo, mas vamos utilizar como medida para distância o <i>salário anual médio</i> (salário/número de funcionários) oriundo do cadastro de seleção, que segue na última coluna da tabela abaixo. </p>

			<p>Você consegue observar quem são os mais próximos agora?</p>

			<!-- Tabela [inicio] -->
			<div class="table-container">
			<h5>Principais variáveis de algumas empresas do comércio varejista de lojas de tecidos com suas respectivas variáveis de cadastro com informações imputadas pelo vizinho por salário médio.</h5>
				<table class="table">
					<caption class="table__title">Exemplo de tabela</caption>
					<tbody>
						<tr>
							<th scope="col">Obs</th>
							<td class="table__numeric-values">1</td>
							<td class="table__numeric-values">2</td>
							<td class="table__numeric-values">3</td>
							<td class="table__numeric-values">4</td>
							<td class="table__numeric-values">5</td>
						</tr>

						<tr>
							<th scope="col">Empresa</th>
							<td class="table__numeric-values">0xxxx444</td>
							<td class="table__numeric-values">1xxxx363</td>
							<td class="table__numeric-values">0xxxx517</td>
							<td class="table__numeric-values">0xxxx648</td>
							<td class="table__numeric-values">3xxxx364</td>
						</tr>
						
						<tr>
							<th scope="col">CNAE</th>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
							<td class="table__numeric-values">4771</td>
						</tr>
						
						<tr>
							<th scope="col">Número de funcionários</th>
							<td class="table__numeric-values">15</td>
							<td class="table__numeric-values">9</td>
							<td class="table__numeric-values">11</td>
							<td class="table__numeric-values">19</td>
							<td class="table__numeric-values" bgcolor="#c2adeb">10</td>
						</tr>

						<tr>
							<th scope="col">Salário anual</th>
							<td class="table__numeric-values">219.795</td>
							<td class="table__numeric-values">289.005</td>			
							<td class="table__numeric-values">303.739</td>
							<td class="table__numeric-values">338.118</td>
							<td class="table__numeric-values" bgcolor="#c2adeb">149.974</td>					
						</tr>

						<tr>
							<th scope="col">Receita anual</th>
							<td class="table__numeric-values"><font color="#6632cd">4.863.637</font></td>	
							<td class="table__numeric-values">2.693.912</td>
							<td class="table__numeric-values">1.761.553</td>
							<td class="table__numeric-values"><font color="#6632cd">795.763</font></td>
							<td class="table__numeric-values" bgcolor="#c2adeb">3.507.679</td>
						</tr>	

						<tr>
							<th scope="col" colspan="6" bgcolor="#686868">Cadastro de seleção</th>
						</tr>		
						

						<tr>
							<th scope="col">Número de Funcionário</th>
							<td class="table__numeric-values">13</td>
							<td class="table__numeric-values">8</td>
							<td class="table__numeric-values">11</td>
							<td class="table__numeric-values">16</td>
							<td class="table__numeric-values">10</td>
						</tr>

						<tr>
							<th scope="col">Salário Anual</th>							
							<td class="table__numeric-values">233.930</td>
							<td class="table__numeric-values">260.579</td>
							<td class="table__numeric-values">277.907</td>
							<td class="table__numeric-values">356.006</td>
							<td class="table__numeric-values">149.974</td>
						</tr>

						<tr>
							<th scope="col">Salário Anual médio</th>							
							<td class="table__numeric-values"><font color="#6632cd">17.995</font></td>
							<td class="table__numeric-values">32.572</td>
							<td class="table__numeric-values">25.264</td>
							<td class="table__numeric-values"><font color="#6632cd">22.250</font></td>
							<td class="table__numeric-values"><font color="#6632cd">14.997</font></td>
						</tr>
						
						</tr>
					</tbody>
				</table>
			</div>	
			<!-- Tabela [fim] -->

			<p>As observações mais próximas agora são as 1 e 4 e, logo, são usadas para calcular as médias das variáveis para completar as informações faltantes da observação 5.</p>

			<h2>Integração de Dados</h2>
			<p>Muitas vezes, parte das informações necessárias para a melhor análise do trabalho encontra-se em bases externas que precisam ser incorporadas à base de trabalho para que sejam incluídas tanto na crítica dos dados quanto na modelagem do problema. Esse processo é chamado de Integração de dados.</p> 

			<p>Os novos dados podem precisar de transformações para que sejam mais bem aproveitados.</p>

			<p>A integração de dados consiste na transferência de informações já existentes de uma base de dados qualquer para outra qualquer. Não há limitação da quantidade de bases na integração. Algumas pessoas gostam, por exemplo, de trabalhar com uma base de dados única, onde estejam concentradas todas as informações disponíveis dos objetos de análise. </p>

			<p>Entretanto, é necessário observar qual o ganho real dessa integração na aplicação das técnicas que serão abordadas. Isso porque pode-se despender um tempo considerável nessa etapa, sem falar no tamanho da base, que ficará certamente maior que o tamanho original, implicando em perda na velocidade de processamento, e esses dados podem nem vir a serem utilizados.</p>

			<!-- Realce [inicio] -->
			<aside class="pullquote">
				<p><q>A integração só faz sentido quando de fato vamos utilizar os dados que serão integrados.</q></p>

			</aside>
			<!-- Realce [fim] -->

			<p>A integração pode acontecer de forma única, como para a criação de uma nova variável em uma base geral, sendo que neste caso ficará fixa. Ou pode acontecer em diversos momentos, sendo que neste caso será usada a informação existente no momento da integração, que poderá variar.</p> 

			<p>Deve-se tomar bastante cuidado para que os cruzamentos de informações sejam feitos corretamente, isto é, que a informação de uma base referente à unidade <i>abc</i> seja associada apenas à unidade abc da outra base. </p>

			<p>Para isso, normalmente são criadas chaves únicas de identificação para cada unidade em cada base de dados. Obviamente, o padrão para criação dessa chave única tem que estar presente em ambas as bases de dados. Um exemplo de chave de identificação é o CPF/CNPJ, pois normalmente cada indivíduo/empresa aparece nas bases de dados uma única vez.</p>  

			<p>Contudo, conforme descrito no exemplo presente em “Duplicação de registros”, pode acontecer disso não ser verdade e a chave de identificação ter que ser composta pela concatenação de variáveis ou pela enumeração da variável principal como no exemplo descrito na seção citada para a criação de uma chave única. </p> 

			<p>Para exemplificar o conceito apresentado acima, podemos dar um exemplo de uma suposta criação e recebimento de uma multa de trânsito. A criação da multa começa a partir da observação de uma infração de trânsito através de um controlador de trânsito (guarda, câmera etc.) que, normalmente, apenas detém a placa do veículo que cometeu a infração. </p>

			<p>Analise o esquema abaixo:</p>

			<h5>Esquematização de uma suposta geração de uma multa de trânsito.</h5>
			<figure class="img-container">
				<picture>
					<source srcset="dist/img/un02/img02-10-grafico-multa.svg" media="(min-width:1200px)" />
					<source srcset="dist/img/un02/img02-10-grafico-multa.svg" media="(min-width:600px)" />
					<source srcset="dist/img/un02/img02-10-grafico-multa.svg" media="(min-width:1px)" />
					<img class="image" src="dist/img/un02/img02-10-grafico-multa.svg" alt="Imagem de geoprocessamento"/>
				</picture>
			
			</figure>
			

			<p>Observe que a partir da informação da placa do veículo, buscam-se as demais informações do veículo numa base de dados geral do DETRAN, como o nome e CPF do proprietário do veículo.  Conhecendo as informações do dono do veículo, pode-se identificar o seu endereço numa outra base de dados onde estão armazenadas as informações pessoais de cada indivíduo. </p>

			<p>Com isso, podemos perceber que foi necessário o uso de duas ações em três bases distintas para a geração de uma base final com todas as informações necessárias para fazer uma multa de trânsito chegar ao destinatário final.</p>

			<h2>Criando notebooks em python</h2>
			<p>Para um exemplo prático de uso de técnicas de transformação de dados em Python, acesse o programa<a href="https://colab.research.google.com/drive/1VKkS3y6MuozdDE_J-q2w2j-TKkoxKp98?usp=sharing">“Módulo 2 Unidade 2(d) - Transformação de Dados.ipynb”</a>que está disponível no Google Colab.</p>

		
			<!--FORUM COLABORATIVO -->
			<div class="text-with-icon">
				<div class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" aria-hidden="true" />
				</div>
				<p class="pullquote">
					Para treinar, recrie o programa com outros exemplos da sua área de trabalho e compartilhe no <strong>Fórum Colaborativo</strong>. 
				</p>
			</div>
		 	<!-- fim FORUM COLABORATIVO -->

		 	<p>Veja também o programa bônus<a href="https://colab.research.google.com/drive/13guorWHJ6eUEdUvRMEKKUWgbdIxERmpG?usp=sharing">“Módulo 2 Unidade 2(e) - Bônus: Importação de Base da Internet.ipynb”</a>onde mostramos um exemplo simples de Web Scraping de base de dados CSV.</p>
 
			<p>Se você domina o R, transforme o código de Python para R e colabore no desenvolvimento do curso. </p>
 
			<p>Se você tiver mais exemplos aplicados em sua área de atuação, compartilhe o código no perfil do curso no Google Colab.</p>


			<!--FORUM COLABORATIVO -->
			<div class="text-with-icon">
				<div class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" aria-hidden="true" />
				</div>
				<p class="pullquote">
					Compartilhe e comente no <strong>Fórum Colaborativo</strong>. 
				</p>
			</div>
		 	<!-- fim FORUM COLABORATIVO -->


				<h2>Compartilhando experiências</h2>
				<p>Você já utiliza técnicas de conversão de dados não estruturados nos seus processos de trabalho?</p>

				<!--FORUM COLABORATIVO -->
			<div class="text-with-icon">
				<div class="icon-container">
					<img src="dist/img/un02/icone-colab.svg" aria-hidden="true" />
				</div>
				<p class="pullquote">
					Colabore com a construção do curso, descrevendo no <strong>Fórum Colaborativo</strong> um ou mais casos de utilização das técnicas em processos de trabalho na sua área de atuação.
				</p>
			</div>
	
		<button class="btn modal_call" id="faq001">Abrir modal</button>

			<h2>Atividade 3 - Projeto</h2>
			Tarefas:

			1. identificar os tipos de ocorrências e aplicar as técnicas de transformação necessárias no conjunto de dados que está sendo utilizado na resolução do problema; e

			2. descrever o processo no <strong> Fórum de Atividades do Módulo 2</strong> e, após comentários dos demais participantes e medidores, inserir a descrição na Wiki <strong>Documentação das Atividades</strong>. 
			


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

					<p><a href="https://www.youtube.com/watch?v=xD9-t4JmJm0">Vídeo: O que é normalização e para que serve (machine learning)</a></p>
					
					<p><a href="https://www.youtube.com/watch?v=Bukh5wjBHjs">Vídeo: Normalização e Padronização de Variáveis para Machine Learning</a></p>
					
					<p><a href="https://www.youtube.com/watch?v=k1zi4EwIXoc ">Vídeo: Como lidar com dados faltantes (NaN) em um Dataset (Python para machine learning - Aula 22)</a></p>
					
					<p><a href="https://www.youtube.com/watch?v=nzXC_nv22QI">Vídeo: Dados faltantes na linguagem R (Curso R para Machine Learning - Aula 14)</a></p>

					<p><a href="https://slideplayer.com.br/slide/355146/ ">Apresentação: Técnicas de pré-processamento</a></p>

					<p><a href="https://acervolima.com/binning-em-data-mining/">Site: BINNING EM DATA MINING</a></p>

					<p><a href="https://pt.linkedin.com/pulse/padroniza%C3%A7%C3%A3o-vs-normaliza%C3%A7%C3%A3o-jose-r-f-junior">Artigo: Padronização vs. Normalização</a></p>

					<p><a href="https://www.istat.it/en/files/2014/05/1982-004-ASA.pdf">Artigo: IMPUTING FOR MISSING SURVEY RESPONSES</a></p>

					<p><a href="https://biblioteca.ibge.gov.br/biblioteca-catalogo.html?id=224745&amp;view=detalhes">Dissertação de mestrado: A Ausência de resposta em pesquisas: uma aplicação de métodos de imputação</a></p>

					<p><a href="https://teses.usp.br/teses/disponiveis/45/45133/tde-15072019-104904/pt-br.php">Dissertação de mestrado: Avaliação de métodos de imputação na variável Receita das empresas da Pesquisa Anual de Comércio - PAC-IBGE</a></p>


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