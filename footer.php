<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

		</div><!-- #main -->


	</div><!-- .container -->

		 <footer class="page-footer blue darken-4">
          <div class="container borda">
            <div class="row">
              <div class="col l4 s12 borda">
                <h6 class="bold white-text">Institucional</h6>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                </ul>
              </div>
              <div class="col l4 s12 borda">
                <h6 class="bold white-text">Departamentos</h6>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                </ul>
              </div>
                            <div class="col l4 s12 borda">
                <h6 class="bold white-text">Cursos</h6>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col l6 s12 borda">
              	<img class="center-align" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_fis_color.png">
                <h6 class="bold white-text">Faculdade de Integração do Sertão</h6>
                <p class="grey-text text-lighten-4">Rua João Luiz de Melo, 2110, Bairro Tancredo Neves CEP: 56909-205 Serra Talhada - PE
Contato: sesst@fis.edu.br</p>
              </div>
             
             	<div class="col l4 offset-l1 s12">
               		
               		<div class="row">
               			<div class="col l6 m6 s12 borda">
               			<h6 class="bold white-text">Telefones uteis</h6>
		                <ul>
		                  <li><a class="grey-text text-lighten-3" href="#!">(87) 3831.1472</a></li>
		                  <li><a class="grey-text text-lighten-3" href="#!">(87) 3831.2067</a></li>
		                  <li><a class="grey-text text-lighten-3" href="#!">(87) 3831.1749</a></li>
		                  <li><a class="grey-text text-lighten-3" href="#!">(87) 3831.8811</a></li>
		                </ul>
		                </div>
		                <div class="col l6 m6 s12">
               			<h6 class="bold white-text">Redes Sociais</h6>
		                <ul>
		                  <li><a class="grey-text text-lighten-3" href="#!">Face</a></li>
		                  <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
		                  <li><a class="grey-text text-lighten-3" href="#!">Instagran</a></li>
		                  <li><a class="grey-text text-lighten-3" href="#!">G+</a></li>
		                </ul>
		                </div>
               		</div>
               		<div class="row">
               			<div class="col l12 m12 m12 borda">
               			<h6 class="bold white-text">Acessibilidade</h6>
		                <ul>
		                  <li><a class="grey-text text-lighten-3" href="#!">Item 1</a></li>
		                  <li><a class="grey-text text-lighten-3" href="#!">Item 2</a></li>
		                </ul>
		                </div>

               		</div>

              	</div>
              </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            Todos os direitos reservados a FIS © 2014 Copyright.
            <a class="grey-text text-lighten-4 right" href="http://www.fis.edu.br">www.fis.edu.br</a>
            </div>
          </div>
        </footer>
	
<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.font-accessibility.min.js"></script>
 
	
		<script>
	$(function(){
		/* Basic demo */
		$('#font-setting-basic').easyView({
			container: '#basic'
		});

		/* Custom buttons */
		$('#font-setting-buttons').easyView({
			container: '*',
			increaseSelector: '.increase-me',
			decreaseSelector: '.decrease-me',
			normalSelector: '.reset-me',
			contrastSelector: '.change-me'
		});

	});
	</script>
      <script src="<?php echo get_template_directory_uri(); ?>/assets/js/materialize.js"></script>

	  <script type="text/javascript">
		  $( document ).ready(function(){
		  	$(".button-collapse").sideNav();
			$('.slider').slider({full_width: true});
   			$('.modal-trigger').leanModal();
			$('#aside').pushpin({ top:110, bottom:300 });  
		  });




	  </script>
	
 
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/retina.js"></script>	
					
</body>
</html>
