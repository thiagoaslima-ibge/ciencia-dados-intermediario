var arquivo = document.location.href.substring(document.location.href.lastIndexOf('/') + 1, document.location.href.length);
var paginaAtual = indicePagina(arquivo);
var ultimaPaginaLiberada = paginaAtual;

function indicePagina(arq) {
    for (var i = 0; i < paginas.length; i++)
        if (paginas[i].arquivo == arq) return i;
    return 0;
}

function menu() {
	if ($( "#menu_course" ) != undefined) {
		var codigoMenu = "";
		var fim = (environment == "prd") ? ultimaPaginaLiberada : (paginas.length - 1);
		var nvl1 = undefined;
		var nvl2 = undefined;
		for (var i = 1; i <= fim; i++) {
			if (paginas[i].nvl1 != nvl1) {
				if (nvl1 != undefined) {
					if (nvl2 != undefined)
						codigoMenu += "</ul></li>";
					codigoMenu += "</ul></li>";
				}
				if (paginas[i].nvl1 != undefined)
					if (paginas[i].nvl2 != undefined)
						codigoMenu += "<li><span class='menu__label'>"+paginas[i].nvl1+"</span><ul class='menu__level-1' role='menu'><li><a href='javascript:void(0);' class='menu__collapsible-btn' aria-haspopup='true'>"+paginas[i].nvl2+" <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z'/><path d='M0 0h24v24H0z' fill='none'/></svg></a><ul class='menu__level-2' role='menu'>";
					else
						codigoMenu += "<li><a href='javascript:void(0);' class='menu__collapsible-btn' aria-haspopup='true'>"+paginas[i].nvl1+" <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z'/><path d='M0 0h24v24H0z' fill='none'/></svg></a><ul class='menu__level-1' role='menu'>";
			} else if (paginas[i].nvl2 != nvl2) {
				if (nvl2 != undefined)
					codigoMenu += "</ul></li>";
				if (paginas[i].nvl2 != undefined)
					codigoMenu += "<li><a href='javascript:void(0);' class='menu__collapsible-btn' aria-haspopup='true'>"+paginas[i].nvl2+" <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'><path d='M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z'/><path d='M0 0h24v24H0z' fill='none'/></svg></a><ul class='menu__level-2' role='menu'>";
			}
			codigoMenu += "<li><a href='"+paginas[i].arquivo+"' title='Ir para "+paginas[i].titulo+"' role='menuitem'>"+paginas[i].titulo+"</a></li>";
			nvl1 = paginas[i].nvl1;
			nvl2 = paginas[i].nvl2;
		}
		if (nvl1 != undefined) {
			if (nvl2 != undefined)
				codigoMenu += "</ul></li>";
			codigoMenu += "</ul></li>";
		}
		$( "#menu_course" ).append(codigoMenu);
		if(environment != "prd") {
			$( "#menu_course" ).addClass("menu__dev");
			$(document).off("click",".menu__collapsible-btn");
		}	
	}
}

function iniciaNavegacao() {
	SCOInitialize(true);	
	var lesson_location = SCOGetValue("cmi.core.lesson_location");
	if (lesson_location != undefined && lesson_location != '') {
		ultimaPaginaLiberada = parseInt(lesson_location);
	}
	if (paginaAtual == 0) {
		document.cookie = "session_time=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
		if (ultimaPaginaLiberada == 0)
			ultimaPaginaLiberada = 1;
		document.location.replace(paginas[ultimaPaginaLiberada].arquivo);
	} else if (paginaAtual >= ultimaPaginaLiberada) {
		SCOSetValue("cmi.core.lesson_location", paginaAtual);
		if (paginaAtual == paginas.length - 1)
			SCOSetStatusCompleted();
		SCOCommit();
		ultimaPaginaLiberada = paginaAtual;
	}
	
	// Paginação
	if (document.getElementById("paginacao") != undefined)		
		paginacao();

	// Página anterior
	if (document.getElementById("voltar") != undefined)
		document.getElementById("voltar").href = paginaAnterior();
	
	// Preenche o conteúdo do menu
	menu();
	
	// Ativa botão de avançar
	if (ultimaPaginaLiberada > paginaAtual) {
		allowProgress();
	}
}

function encerraNavegacao() {
	SCOFinish();
}

function paginaAnterior() {
	return (paginaAtual == 0) ? "" : paginas[paginaAtual-1].arquivo;
}

function proximaPagina() {
	return (paginaAtual == paginas.length - 1) ? "" : paginas[paginaAtual+1].arquivo;
}

function paginacao() {	
	$('.progress-bar__current-page').html(paginaAtual);
	$('.progress-bar__page-total').html(paginas.length - 1);
}