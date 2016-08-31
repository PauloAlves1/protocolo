<?php
    session_start();
    $v_nome = $_SESSION['usuario'];
    $v_matricula = $_SESSION['matricula'];
    $v_tipo_usuario = $_SESSION['ref_cod_tipo_user'];
 //   $v_setor = $_SESSION['nome_setor']; 

  date_default_timezone_set('America/Sao_Paulo');
  $date = date('Y-m-d H:i');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Protocolo</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />

     <!-- Modal Page-->
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script> 
    <script type="text/javascript">
        $(document).ready(function(){
            $("a[rel=modal]").click( function(ev){
                ev.preventDefault();

                //alterado
                var id = '.window';

                var alturaTela = $(document).height();
                var larguraTela = $(window).width();

                //colocando o fundo preto
                $('#mascara').css({'width':larguraTela,'height':alturaTela});
                $('#mascara').fadeIn(1000); 
                $('#mascara').fadeTo("slow",0.8);

                var left = ($(window).width() /2) - ( $(id).width() / 2 );
                var top = ($(window).height() / 2) - ( $(id).height() / 2 );
                
                $(id).css({'top':top,'left':left});
                
                //inserido 
                href = $(this).attr("href");
                $('.window').load(href);

                
                $(id).show();   
            });

            $("#mascara").click( function(){
                $(this).hide();
                $(".window").hide();
            });

            $('.fechar').click(function(ev){
                ev.preventDefault();
                $("#mascara").hide();
                $(".window").hide();
         });
        });
    </script>
    <style type="text/css">

        .window{
            display:none;
            width: 800px;
            height: 1000px;
            position: absolute;
            left:0;
            top:0;
            background:#FFF;
            z-index:9900;
            padding:10px;
            border-radius:1px;
        }

        #mascara{
            position:absolute;
            left:0;
            top:0;
            z-index:9000;
            background-color:#000;
            display:none;
        }
        .center {
            position: absolute;
            left: 33%;
            text-align: center;
        }

        .fechar{display:block; text-align:center;}

        </style> 

   </head>
<body>
  <?php 
        include_once("cabecalho.php");
        
        $link = $_GET["link"];
        $page[1] = "protocolo.php";
        $page[2] = "deferidos.php";
        
        $page[3] = "#";

        if(!empty($link)){
          if (file_exists($page[$link])){
            include $page[$link];
          }else{
            include "protocolo.php";
          }       
        } else {
          include "protocolo.php";
        }
        
  ?>
</body>
</html>