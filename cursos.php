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
      	
      	 	<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					// Include the page content template.
			  the_post_thumbnail(); 
				
				endwhile;
			?>
       
        <div class="caption center-align"></div>
      </li>
      
      </li>
    </ul>
</div><!-- FIM Slide prioncipal -->

<div class="section no-pad-bot">
    <div class="row">
      <div class="col s12 amarelo margem">
	 
       <style>
.ui-tabs.ui-tabs-vertical {
    padding: 0;
    
}
.ui-tabs.ui-tabs-vertical .ui-widget-header {
    border: none;
}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav {
    float: left;
   
   
    border-radius: 4px 0 0 4px;
    
}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav li {
    clear: left;
    
    margin: 0.2em 0;
   border-bottom: 1px solid gray;
    border-width: 1px 0 1px 1px;
    border-radius: 4px 0 0 4px;
    overflow: hidden;
    position: relative;
    right: -2px;
    z-index: 2;
}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav li a {
    display: block;
    width: 100%;
    padding: 0.6em 1em;
}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav li a:hover {
    cursor: pointer;
}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active {
    margin-bottom: 0.2em;
    padding-bottom: 0;
   
}
.ui-tabs.ui-tabs-vertical .ui-tabs-nav li:last-child {
    margin-bottom: 10px;
}
.ui-tabs.ui-tabs-vertical .ui-tabs-panel {
    float: left;
    
    
    border-radius: 0;
    position: relative;
    left: -1px;
}
</style>
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
 
 <div class="row margem">
 

 
 <div class="col l8 s12 white  z-depth-1" style="min-height:532px;  margin-top: 8px;">
 <div id="tabs"> 
    <ul class="col s12 m12 l3" style="position:relative;min-height: 200px;">
      
    	<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();?>
			// correção do bug que evitava a pagina funcionar 		 
			 <span class="<?php the_content(); ?>"> </span>	
                                            
              <?php                              
					echo"<h4 style='text-align:center'>";
				the_title();
				echo"</h4>";
				endwhile;
			?>
    
    
 <?php $id =get_the_ID(); 
         $pegartitulos = get_pages( array( 'child_of' =>$id, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
  
	    foreach( $pegartitulos as $pages ):		
		$contents = $pages->post_content;
      ?>
          <li>
            <a href="#<?php echo $pages->ID; ?>"><?php echo $pages->post_title; ?></a>
        </li>
          
       
	<?php endforeach; ?>

       
         
    </ul>
          <?php
	$mypages = get_pages( array( 'child_of' =>$id, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
     foreach( $mypages as $page ) {		
		$content = $page->post_content;
	  ?>
          <div id="<?php echo $page->ID; ?>" class="col s12 m12 l9">
		<h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
		<div class="entry"><?php echo $content; ?></div>
         </div>
	<?php
	}	
?> 

	
</div> 
<script>
$('#tabs')
    .tabs()
    .addClass('ui-tabs-vertical ui-helper-clearfix');
</script>
		
       
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
