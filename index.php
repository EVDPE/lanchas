<!DOCTYPE html>
<html>
    <head>
        <title>Parallax</title>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="css/style.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/> <!--bootstrap-->
        <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
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
    <body>
    <?php
        require 'include/header.php';
    ?>
        
        <section id="home" data-type="parallax_section" data-speed="10">
            <article>
                <div class="lanchas-presentacion">
                    <div class="container-imagen-presentacion">
                        <img class="imagen-presentacion" src="img/lancha1.jpg"/>
                    </div>
                    <div class="texto-presentacion">
                        <h2>Lancha 400</h2>
                        <p>Nova embarcação de console central,  para a pesca e passeios em família. Barco com design moderno e tecnologia de ponta. Seus moldes são totalmente usinados em CNC garantindo o acabamento perfeito, com alta precisão nos detalhes. Casco que navega rápido e baixo consumo de combustível. Com espaço muito bom no console central para o banheiro e volumes extras.</p>
                    </div>
                </div>
            </article>
        </section>
        <section id="section2" data-type="parallax_section" data-speed="10">
             <article>
                <div class="lanchas-presentacion">
                    <div class="container-imagen-presentacion">
                        <img class="imagen-presentacion" src="img/lancha1.jpg"/>
                    </div>
                    <div class="texto-presentacion">
                        <h2>Lancha 400</h2>
                        <p>Nova embarcação de console central,  para a pesca e passeios em família. Barco com design moderno e tecnologia de ponta. Seus moldes são totalmente usinados em CNC garantindo o acabamento perfeito, com alta precisão nos detalhes. Casco que navega rápido e baixo consumo de combustível. Com espaço muito bom no console central para o banheiro e volumes extras.</p>
                    </div>
                </div>
            </article>
        </section>
        <section id="section3" data-type="parallax_section" data-speed="10">
             <article>
                 <div class="lanchas-presentacion">
                    <div class="container-imagen-presentacion">
                        <img class="imagen-presentacion" src="img/lancha1.jpg"/>
                    </div>
                    <div class="texto-presentacion">
                        <h2>Lancha 400</h2>
                        <p>Nova embarcação de console central,  para a pesca e passeios em família. Barco com design moderno e tecnologia de ponta. Seus moldes são totalmente usinados em CNC garantindo o acabamento perfeito, com alta precisão nos detalhes. Casco que navega rápido e baixo consumo de combustível. Com espaço muito bom no console central para o banheiro e volumes extras.</p>
                    </div>
                </div>
            </article>
        </section>
        <section id="section4" data-type="parallax_section" data-speed="10">
             <article>
                 <div class="lanchas-presentacion">
                    <div class="container-imagen-presentacion">
                        <img class="imagen-presentacion" src="img/lancha1.jpg"/>
                    </div>
                    <div class="texto-presentacion">
                        <h2>Lancha 400</h2>
                        <p>Nova embarcação de console central,  para a pesca e passeios em família. Barco com design moderno e tecnologia de ponta. Seus moldes são totalmente usinados em CNC garantindo o acabamento perfeito, com alta precisão nos detalhes. Casco que navega rápido e baixo consumo de combustível. Com espaço muito bom no console central para o banheiro e volumes extras.</p>
                    </div>
                </div>
            </article>
        </section>
        
    </body>
</html>
