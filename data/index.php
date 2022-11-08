<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="pt-br" dir="ltr" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="pt-br" dir="ltr" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="pt-br" dir="ltr" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt-br" dir="ltr" class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Escola Virtual IBGE | Nome do curso</title>
    <meta name="description" content="Página de carregamento.">
		<meta name="msapplication-config" content="browserconfig.xml">    
    
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="custom-favicon.png">    
    
    <script src="dist/js/scorm.min.js"></script>
    <script src="dist/js/menu.js"></script>
    <script src="src/js/nav.js"></script>
    <style>
      .loading {
        font-size:4em;
        font-family: Sans-serif;
        font-weight:100;
        text-align:center;
        margin-top:20%;
        animation-name: pulse;
        -webkit-animation-name: pulse;
        animation-duration: 1.5s;	
        -webkit-animation-duration: 1.5s;
        animation-iteration-count: infinite;
        -webkit-animation-iteration-count: infinite;
      }
      @keyframes pulse {
        0% {
          transform: scale(0.9,0.9);
          opacity: 0.7;		
        }
        50% {
          transform: scale(1,1);
          opacity: 1;	
        }	
        100% {
          transform: scale(0.9,0.9);
          opacity: 0.7;	
        }			
      }

      @-webkit-keyframes pulse {
        0% {
          -webkit-transform: scale(0.9,0.9);
          opacity: 0.7;		
        }
        50% {
          -webkit-transform: scale(1,1);
          opacity: 1;	
        }	
        100% {
          -webkit-transform: scale(0.9,0.9);
          opacity: 0.7;	
        }			
      }			
    </style>
  </head>

  <body onload="iniciaNavegacao()" onunload="encerraNavegacao()" onbeforeunload="encerraNavegacao()">
    <!--[if lt IE 7]>
        <p class="obsoletebrowser">Você está usando um navegador de internet obsoleto. Por favor atualize para uma melhor experiência.</p>
    <![endif]-->
        
    <p class="loading">Carregando</p>
      
    <script src="dist/js/vendor/jquery-1.12.1.min.js"></script>				
  </body>
</html>