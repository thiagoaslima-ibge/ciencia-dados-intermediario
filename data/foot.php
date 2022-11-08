<footer class="main-footer">
	<nav class="navigation">		
		<ul class="navigation__menu">
			<li class="navigation__item">
				<a class="navigation__link" id="voltar" href="#" title="Ir para página anterior">					
					<svg xmlns="http://www.w3.org/2000/svg" class="navigation__icon-back" width="24" height="24" viewBox="0 0 24 24">
						<path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/><path d="M0 0h24v24H0z" fill="none"/>
					</svg>
					<span class="navigation__label">Voltar</span>
				</a>
			</li>
			<li class="navigation__item">
				<a class="navigation__link navigation__link--proceed" href="#" title="Ir para próxima página">
					<span class="navigation__label">Avançar</span>					
					<svg xmlns="http://www.w3.org/2000/svg" class="navigation__icon-forward" width="24" height="24" viewBox="0 0 24 24">
						<path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/><path d="M0 0h24v24H0z" fill="none"/>
					</svg>
				</a>
			</li>
		</ul>
	</nav>
</footer>

<article class="menu">
	<h4 class="menu__label">
		Sumário
		<button class="btn menu__btn-close" title="Selecione para fechar o menu do curso.">Fechar</button>
	</h4>
	<!-- Conteúdo do menu no arquivo nav.js -->
	<ul class="menu__level-0" id="menu_course" role="menubar" aria-labelledby="menu_btn">
	</ul>
</article>

<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
	<ul class="progress-bar__indicator" id="paginacao">
		<li class="progress-bar__current-page"></li>
		<li class="progress-bar__line-divider"></li>
		<li class="progress-bar__page-total"></li>
		<li class="progress-bar__percentage"></li>
	</ul>
</div>
		
<script src="dist/js/vendor/jquery-1.12.1.min.js"></script>
<script src="dist/js/main.min.js"></script>