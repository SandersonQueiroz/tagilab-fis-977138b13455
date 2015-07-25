<?php
/**
 * Template Name: Cursos
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package Odin
 * @since 2.2.0
 */
get_header(); ?>
 
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jssor.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jssor.slider.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/tabs.js"></script>
<style>
body{  background-color: #fdd406 !important;}
</style>
<div class="parallax-container slider"><!-- Slide prioncipal -->
     <ul class="slides">
      <li>
      	
      	  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cursos/<?php global $post; echo $post->post_name; ?>.png"> <!-- random image -->
       
        <div class="caption center-align"></div>
      </li>
      
      </li>
    </ul>
</div><!-- FIM Slide prioncipal -->

<div class="section no-pad-bot">
    <div class="row">
      <div class="col s12 amarelo margem">
	 
     
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
 
 <div class="row margem">
 

 
 <div class="col l8 s12 white  z-depth-1" style="min-height:532px;  margin-top: 8px;">
 
          <h4>Especificações do Curso</h4>

  				<ul class="collapsible popout" data-collapsible="accordion">
 <?php $id =get_the_ID(); 
      
    $mypages = get_pages( array( 'child_of' =>$id, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
     foreach( $mypages as $page ) {		
		$content = $page->post_content;
	  ?>
      

    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i><?php echo $page->post_title; ?></div>
      <div class="collapsible-body">
      
       <?php echo $content; ?> 
         </div>
         </li>
	<?php
	}	
?> 

	</ul>
 
       
       </div>
     
	  
	  
	  <!-- noticias do curso -->
	  
	  
	   <div class="col s12 m6 l4">

<div class="card">
        <div class="card-content">
          <span class="card-title grey-text text-darken-4">Noticias do Curso<i class="mdi-navigation-more-vert right"></i></span>
        </div>
          <ul class="collection">  
		   
             <?php 
			 
			 // seria com que os posts tivesse uma cateria cursos ou uma tag tipo direito
			 //
			 //
        $recent = new WP_Query("category_name=FIS&showposts=5"); 
        while($recent->have_posts()) : $recent->the_post();
        ?> 
             <li class="collection-item avatar selected">
                 <?php the_post_thumbnail('thumbnail', array('class' => 'circle')); ?>
                   <span class="email-title"> <?php the_title(); ?></span>
                  <p class="truncate grey-text ultra-small"> <?php echo the_date(); ?></p>
                     
                    </li>
                   
                    <?php endwhile; ?> </ul>
                    </div>
               </div>
           </div> 
      </div>
   </div>
 </div><!-- FIM linha4 -->


<div class="row amarelo margem"><!-- Inicio linha3 -->

<div class="row"><!-- Inicio linha4 -->

<div class="col s12 m6 l4">

<div class="card">
        <div class="card-content">
          <span class="card-title grey-text text-darken-4">Instagran #FIS<i class="mdi-navigation-more-vert right"></i></span>
        </div>
          <?php if ( dynamic_sidebar('revista_curso') ) : else : endif; ?>
      </div>

</div>


<div class="col s12 m6 l4">

<div class="card"> 
        <div class="card-content">
          <span class="card-title grey-text text-darken-4">Noticias do curso<i class="mdi-navigation-more-vert right"></i></span>
        </div>
           <?php if ( dynamic_sidebar('agenda_curso') ) : else : endif; ?>
      </div>

</div>


<div class="col s12 m6 l4">

<div class="card">
        <div class="card-content">
          <span class="card-title grey-text text-darken-4">Instagran #FIS<i class="mdi-navigation-more-vert right"></i></span>
        </div>
           <?php if ( dynamic_sidebar('media_curso') ) : else : endif; ?>
      </div>

</div>

</div><!-- FIM linha4 -->
<?php
get_footer();
