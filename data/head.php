<?php 
  $nomeDoCurso = 'Intermediário em Ciência de Dados';
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="pt-br" dir="ltr" class="no-js curso-tecnologia lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="pt-br" dir="ltr" class="no-js curso-tecnologia lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="pt-br" dir="ltr" class="no-js curso-tecnologia lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt-br" dir="ltr" class="no-js curso-tecnologia"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">		
  <title>Escola Virtual IBGE | <?php echo $nomeDoCurso; ?></title>
  <meta name="description" content="Página de conteúdo do curso.">
  <meta name="msapplication-config" content="browserconfig.xml">
  
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="icon" type="image/png" href="favicon.png">
  <link rel="apple-touch-icon" href="custom-favicon.png">
  <link rel="preload" href="dist/fonts/Roboto-Black.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="dist/fonts/Roboto-BlackItalic.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="dist/fonts/Roboto-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="dist/fonts/Roboto-BoldItalic.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="dist/fonts/Roboto-Italic.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="dist/fonts/Roboto-Medium.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="dist/fonts/Roboto-MediumItalic.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="dist/fonts/Roboto-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="dist/css/main.css">
  
  <script src="dist/js/scorm.min.js"></script>
  <script src="dist/js/menu.js"></script>
  <script src="dist/js/nav.min.js"></script>
  <script>  
    var nextPage = proximaPagina();//Proxima pagina
  </script>
</head>
<body onload="iniciaNavegacao()" onunload="encerraNavegacao()" onbeforeunload="encerraNavegacao()">
<!-- <body onunload="encerraNavegacao()" onbeforeunload="encerraNavegacao()"> -->
  <!--[if lt IE 7]>
    <p class="obsoletebrowser">Você está usando um navegador de internet obsoleto. Por favor atualize para uma melhor experiência.</p>
  <![endif]-->
  
  <header class="main-header">
    <ul class="functions">
      <li class="functions__group">
        <label class="switch">
          <input type="checkbox" class="btn__dark-mode">
          <span class="slider round"></span>
        </label>        
        <span class="switch__text-label">Modo escuro</span>
      </li>
      <li class="functions__group">
        <button class="functions__btn btn_menu" id="menu_btn" title="Selecione para ver o menu do curso." aria-haspopup="true" aria-controls="menu_course">Menu</button>
      </li>
    </ul>
    <h1 class="main-header__heading-1" title="Nome do curso"><?php echo $nomeDoCurso; ?></h1>
      <?php
        echo "<h2 class='main-header__heading-2' title='$moduleTitle'>$moduleTitle</h2>"
      ?>
  </header>