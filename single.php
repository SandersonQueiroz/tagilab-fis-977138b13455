<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Odin
 * @since 2.2.0
 */

get_header(); ?>
<style>
body{  background-color: #03A1F0  !important;}
@media (min-width:992px) {
    #aside {
        width:250px;
    }
}

@media (max-width:992px) {
    #aside.pinned, #aside.pin-bottom {
        
        top: auto !important;
    }
}
img[Attributes Style] {
  width: 100%;
  height: 441px;
}
.responsive-image{width: 105% !important; height:auto;}
h1{font-size:x-large !important;}
</style>


<!-- main content -->
<div id="primary" class="<?php echo odin_classes_page_sidebar(); ?>">
 <div class="col offset-l1 l10 s12 white z-depth-1">
    <div class="row">
        <div class="col l9 ">
           

          	<?php
				// Start the Loop.
				while ( have_posts() ) : the_post(); ?>
                
                
                <div class="card medium" style="  margin: -10px; ">
                <div class="col s12 m12 l12" style="   margin-left: -20px; position:relative; ">
                  <?php  the_post_thumbnail('recent-posts', array('class'=>'responsive-image')); ?>
				  </div></div>
                  
              <div class="col s12 m12 l12" style="position:relative;">    
              
				<?php	get_template_part( 'content', get_post_format() );?>
                </div>
                <div class="col s12 m12 l12" style="position:relative;">  
				<?php	// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; echo '</div>';
				endwhile;
			?>
			

        </div>
        <div class="col l3">
            <div id="aside">
              
                <div class="divider"></div>
                <div class="card">
                    <div class="card-image">
                        <img src="//placehold.it/800x450/FF9800/EE00BB">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image">
                        <img src="//placehold.it/800x450/FF9800/EE00BB">
                        <span class="card-title">Card Title</span>
                    </div>
                    <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>

               
            </div>

        </div>

    </div>
</div>
</div>


<?php
 //get_sidebar();
get_footer();
