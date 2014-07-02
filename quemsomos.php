<!DOCTYPE html>
<html>
        <head>
        <title>Parallax</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/> <!--bootstrap-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css"/> 
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
               $('section[data-type=="parallax_section"]').each(function(){
                   var $bgobjeto=$(this);
                   $(window).scroll(function(){
                      $window = $(window);
                      var yPos=-($window.scrollTop() / $bgobjeto.data('speed'));
                      var coords = '50%'+yPos+'px';
                      $bgobjeto.css({backgroundPosition: coords});
                   });
               });
            });
            
        </script>
    </head>
    <body class="body-quem-somos">
    <?php
        require 'include/header.php';
    ?>
        
     <p class="quem-somos">
        
    </p>

               <section data-type="parallax_section" data-speed="10">
            <article>
                <div class="lanchas-presentacion-quemsomos">
                    <div class="container-imagen-presentacion-quemsomos">
                        <img class="imagen-presentacion-quemsomos" src="img/logo.jpg"/>
                    </div>
                    <div class="texto-presentacion-quemsomos">
                        <h2>Quem somos</h2>
                        <p>Desde 2011, quando foi fundada, a Vidraçaria <em>Mega Vidros</em> sempre procurou inovar e atender todas as necessidades do mercado.

Nossa empresa, tem como principal objetivo produtos e serviços de qualidade, com segurança e eficiência no atendimento, para total satisfação de nossos clientes.

A Vidraçaria atua no comércio, com a instalação de vidros comuns de 2mm à 20mm, temperados, vitrines, portas, boxes, tampos, prateleiras, molduras e espelho.

Nossos produtos são de primeira qualidade, e com preços muito acessível, sempre deixando o cliente satisfeito com o trabalho realizado.</p>
                    </div>
                </div>
            </article>
        </section> 
        
        
        
        
        
    </body>
</html>
