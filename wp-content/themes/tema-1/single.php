<?php get_header() ?>
    <!-- Contenido Articulo -->
    <div class="container">
      <div class="row">
        <!-- articulo -->
        <div class="col-12 col-md-9 my-5">


	        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	        <?php
	              if ( has_post_thumbnail() ) {
	                the_post_thumbnail('post-thumbnail', array( 'class' => 'img-fluid' ));
	              } 
	        ?> 	
          <h2 class="my-3"> <?php the_title(); ?> </h2>
          <p class="lead"> <?php echo get_the_date(); ?> </p>
          <div class="text-justify">
            <?php the_excerpt(); ?>
            <?php the_content(); ?>
          </div>
		<?php endwhile; endif; ?>


        </div>
        <!-- fin articulo -->
        <!-- aside -->
        <div class="col-12 col-md-3">
          <div class="my-3">
            <h3>lorem ipsum</h3>
            <img src="images/articulo1.png" alt="" class="img-fluid">
          </div>

          <div class="my-3">
            <h3>lorem ipsum</h3>
            <img src="images/articulo1.png" alt="" class="img-fluid">
          </div>

          <div class="my-3">
            <h3>lorem ipsum</h3>
            <img src="images/articulo1.png" alt="" class="img-fluid">
          </div> 
        </div>
        <!-- fin aside -->
      </div>
    </div>
    <!-- Fin Contenido Articulo -->

<?php get_footer(); ?>