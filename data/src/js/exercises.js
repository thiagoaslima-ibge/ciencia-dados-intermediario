$(function() {	
		
	$("input[name^='multiplechoice']").click(function(e) {//Ativar confirmação de exercício múltipla escolha    
    var exerciseIndex = $(this).closest("form").attr("id").substring(8,10);    
    $("#exercise" + exerciseIndex + " .exercise__feedback")
      .attr('class', 'exercise__feedback')
      .empty();//Limpar caixas de feedback
    $("#exercise" + exerciseIndex + " .exercise__btn-check-answer")
      .prop("disabled", false);//Habilitar botao de avanco
  });
	
	$(".true-or-false__btn-answer").click(function() {//Checar interacoes em verdadeiro ou falso
		var exerciseIndex = $(this).closest("form").attr("id").substring(8,10);
		$(this).addClass("true-or-false__btn-answer--checked");//Adicionar classe a resposta selecionada
		$(this).siblings().removeClass("true-or-false__btn-answer--checked");//Remover classe dos irmaos da resposta selecionada
		var allBtns = ($("#exercise" + exerciseIndex + " .true-or-false__btn-answer")).length / 2;//Coletar quantidade de afirmacoes
		var selectedOptionsLength = ($("#exercise" + exerciseIndex + " .true-or-false__btn-answer--checked"))
																	.length;//Coletar numero de afirmacoes avaliadas
		if(selectedOptionsLength >= allBtns)//Testar quantidade de afirmacoes contra afirmacoes avaliadas
			$("#exercise" + exerciseIndex + " .exercise__btn-check-answer")
				.prop("disabled", false);//Habilitar botao de confirmacao
	});

	$(".relate-cols input").keyup(function(e) {//Checar campos do relacionar colunas
		var exerciseIndex = $(event.target).closest("form").attr("id").substring(8,10);
		var exerciseId = "#exercise" + exerciseIndex;
		var allFields = ($(exerciseId + ".relate-cols input")).length;//Coletar quantidade de campos
		var filledFields = [];//Definir array de respostas

		$(exerciseId + ".relate-cols input").each(function(i) {//Executar para cada campo
		if($(this).prop("value") != "")//Verificar se o campo nao esta vazio
				filledFields.push($(this).prop("value"));//Adicionar valor preenchido ao array de respostas
		});		
		if(filledFields.length >= allFields) //Checar se a quantidade de resposta e maior ou igual a quantidade de campos
			$(exerciseId + " .exercise__btn-check-answer").prop("disabled", false);//Habilitar botao de confirmacao
  });
	
	$(".crosswords input").keyup(function(e) {//Checar campos das palavras cruzadas
		var exerciseIndex = $(this).closest("form").attr("id").substring(8,10);
		var exerciseId = "#exercise" + exerciseIndex;
		if (!this.value.match(/^[a-záàâãéêíóôõúç]$/i)) {//Restringir entrada de dados a letras
      this.value = '';//Remover qualquer caracter que não for letra
    }
		var allFields = ($(exerciseId + " .crosswords input")).length / 2;//Coletar quantidade de campos
		var filledFields = [];//Definir array de respostas
		$(exerciseId + " .crosswords input").each(function(i) {//Executar para cada campo
			if($(this).prop("value") != "")//Verificar se o campo nao esta vazio
				filledFields.push($(this).prop("value"));//Adicionar valor preenchido ao array de respostas
		});
		if(e.keyCode == 8){//Usuario pressiona backspace
		  filledFields.slice(-1);//Selecionar ultimo item do array
	  }		
		if(filledFields.length >= allFields) {//Habilitar correção do exercicio
			$(exerciseId + " .exercise__btn-check-answer").prop("disabled", false);//Habilitar botao de confirmacao
		}
  });
	
});

function multipleChoice() {//FUNCAO: Exercicio de multipla escolha  
  var exerciseIndex = $(event.target).closest("form").attr("id").substring(8,10);
  var exerciseId = "#exercise" + exerciseIndex;
  var feedbackObject = eval("feedback" + exerciseIndex);
	var selectedOption = $(exerciseId + " input[name^='multiplechoice']:checked").val();
	var indexRetry = getCookie("Retry");

  if (selectedOption == feedbackObject.correctValue) {
		$(exerciseId + " input[value='" + feedbackObject.correctValue + "']")
			.before("<svg xmlns='http://www.w3.org/2000/svg' class='exercise__icon' width='24' height='24' viewBox='0 0 24 24'><path fill='none' d='M0 0h24v24H0z'/><path d='M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z' fill='#060'/></svg>");
		$(exerciseId + " input[value!='" + feedbackObject.correctValue + "']")
			.before("<svg xmlns='http://www.w3.org/2000/svg' class='exercise__icon' width='24' height='24' viewBox='0 0 24 24'><path d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z' fill='#900'/><path d='M0 0h24v24H0z' fill='none'/></svg>");
		$(exerciseId + " .exercise__icon")
      .animate({
        marginLeft:"-1.26rem",
        opacity:1
			}, 1000, function() {});
    $(exerciseId + " .exercise__feedback")
      .append(feedbackObject.hitFeedback)
      .addClass("exercise__feedback--right")
      .slideToggle(1000);
    $(exerciseId + " input[name^='multiplechoice']")
			.prop("disabled", true);
		document.cookie = "Retry=0";		
  }
  else {
    if(indexRetry != 1) {
			var modalId = "#modal_retry";
			//$("body").addClass("overlay");
			$("body").prepend("<div id='overlay'></div>");
			$(modalId).fadeIn("slow");
			document.cookie = "Retry=1";			
		}
		else {
			$(exerciseId + " input[value='" + feedbackObject.correctValue + "']")
				.before("<svg xmlns='http://www.w3.org/2000/svg' class='exercise__icon' width='24' height='24' viewBox='0 0 24 24'><path fill='none' d='M0 0h24v24H0z'/><path d='M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z' fill='#060'/></svg>");
			$(exerciseId + " input[value!='" + feedbackObject.correctValue + "']")
				.before("<svg xmlns='http://www.w3.org/2000/svg' class='exercise__icon' width='24' height='24' viewBox='0 0 24 24'><path d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z' fill='#900'/><path d='M0 0h24v24H0z' fill='none'/></svg>");
			$(exerciseId + " .exercise__icon")
				.animate({
					marginLeft:"-1.26rem",
					opacity:1
				}, 1000, function() {});
			$(exerciseId + " .exercise__feedback")
				.append(feedbackObject.missFeedback)
				.addClass("exercise__feedback--wrong")
				.slideToggle(1000);
			$(exerciseId + " input[name^='multiplechoice']")
				.prop("disabled", true);
			document.cookie = "Retry=0";			
		}			
	}
	//$(exerciseId + " .exercise__btn-check-answer").prop("disabled", true);
	//Esse metodo exige que o usuario mude a resposta antes de confirmar novamente. Removido por demanda.
	
	checkExerciseCompletion();
};

function trueOrFalse() {
	var exerciseIndex = $(event.target).closest("form").attr("id").substring(8,10);
  var exerciseId = "#exercise" + exerciseIndex;
	var feedbackObject = eval("feedback" + exerciseIndex);
	var selectedOptions = $(exerciseId + " .true-or-false__btn-answer--checked");
	var answers = [];
	var references = []

	$(selectedOptions).each(function(i) {
		answers[i++] = parseInt($(this).attr("id").slice(-1));
		references[i++] = $(this).attr("id").slice(11,13);
	});
	references.shift();

	$(answers).each(function(i) {//Executar para cada resposta
		if(answers[i] != feedbackObject.correctAnswer[i]) {//Comparar resposta com argumentos			
			
			$(exerciseId + "-" + references[i] + "__comment")
				.append(feedbackObject.missFeedback[i])
				.addClass("exercise__feedback--wrong")
				.slideToggle(1000);			
			$(exerciseId + "-" + references[i] + "__0")
				.before("<svg xmlns='http://www.w3.org/2000/svg' class='exercise__icon' width='24' height='24' viewBox='0 0 24 24'><path d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z' fill='#900'/><path d='M0 0h24v24H0z' fill='none'/></svg>");//Atribuir icone de erro		
		}
		else			
			$(exerciseId + "-" + references[i] + "__0")
				.before("<svg xmlns='http://www.w3.org/2000/svg' class='exercise__icon' width='24' height='24' viewBox='0 0 24 24'><path fill='none' d='M0 0h24v24H0z'/><path d='M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z' fill='#060'/></svg>");//Atribuir icone de acerto		
	});

	$(exerciseId + " .exercise__icon")
		.animate({
			marginLeft: "-1.5em",
			opacity: 1
		}, 1000, function() {});	
	$(exerciseId + " button")
		.prop("disabled", true);
		
	checkExerciseCompletion();
};

function relateCols() {
	var exerciseIndex = $(event.target).closest("form").attr("id").substring(8,10);
  var exerciseId = "#exercise" + exerciseIndex;
	var feedbackObject = eval("feedback" + exerciseIndex);
	var answers = [];
	$(exerciseId + ".relate-cols input").each(function(i) {
		answers.push(parseInt($(this).val()));
		if (answers[i] == feedbackObject.correctAnswer[i]) {//Comparar respostas com gabarito
			$(this).before("<svg xmlns='http://www.w3.org/2000/svg' class='exercise__icon' width='24' height='24' viewBox='0 0 24 24'><path fill='none' d='M0 0h24v24H0z'/><path d='M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z' fill='#060'/></svg>");//Atribuir icone de acerto
		}
		else {
			$(this).nextAll(".exercise__feedback").append("A resposta correta é " + feedbackObject.correctAnswer[i] + ".").addClass("exercise__feedback--wrong").slideDown(1000);//Adicionar comentario de erro
			$(this).before("<svg xmlns='http://www.w3.org/2000/svg' class='exercise__icon' width='24' height='24' viewBox='0 0 24 24'><path d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z' fill='#900'/><path d='M0 0h24v24H0z' fill='none'/></svg>");//Atribuir icone de erro
		}
	});
	$(exerciseId + ".relate-cols svg").animate({//Animar exibicao dos icones
		marginLeft: "-1.25em",
		opacity: 1
	}, 2000, function() {});
	$(exerciseId + " .exercise__btn-check-answer").prop("disabled", true);

	checkExerciseCompletion();
};

function crosswordPuzzle() {//FUNCAO: Exercicio de palavra cruzada
	var exerciseIndex = $(event.target).closest("form").attr("id").substring(8,10);
  var exerciseId = "#exercise" + exerciseIndex;
	var feedbackObject = eval("feedback" + exerciseIndex);	
	var answers = new Array();//Criar array de respostas vazio
	$(exerciseId + " .crosswords input").not(exerciseId + " .crosswords input:disabled").each(function(n) {//Executar para cada campo habilitado da palavra cruzada
		answers.push($(this).val().toUpperCase());//Registrar valor do campo no array de respostas (em caixa alta)
	});
	$(exerciseId + " .crosswords input").not(exerciseId + " .crosswords input:disabled").each(function(n) {//Executar para cada campo habilitado da palavra cruzada
		if (answers[n] == feedbackObject.correctAnswer[n])//Comparar respostas com gabarito
			$(this).addClass("rightOption");//Adicionar a classe de identificacao de acerto
		else {
			$(this).addClass("wrongOption").val(feedbackObject.correctAnswer[n]);//Adicionar a classe de identificacao de erro
		}
	});

	checkExerciseCompletion();
};

function autofillCrosswords() {
	var exerciseIndex = $(event.target).closest("form").attr("id").substring(8,10);
  var exerciseId = "#exercise" + exerciseIndex;
	var feedbackObject = eval("feedback" + exerciseIndex);
	$(exerciseId + " .crosswords input").not(exerciseId + " .crosswords input:disabled").each(function(n) {//Executar para cada campo nao desabilitado
		$(this).val(feedbackObject.correctAnswer[n]);//Aplicar valor do gabarito de resposta (ver na pagina)
	});
	$(exerciseId + " .exercise__btn-check-answer").prop("disabled", false);//Habilitar botao de confirmacao
}

function checkExerciseCompletion() {
	var numbExercises = $("form").length;	
	exerciseCompletion = exerciseCompletion + 1;
	if(numbExercises == exerciseCompletion) {
		$(".page-content").addClass("okgo");//Adicionar classe para permissao de avanco
		proceed();//Executar funcao de permissao de avanco
	}
};