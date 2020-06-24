<?php get_header() ?>


<article class="container shadow opacity">
    <?php 
    dynamic_sidebar( "section-1" );
    dynamic_sidebar( "section-2" );
    dynamic_sidebar( "section-3" );    
    ?>
    <section class="row mt-5">

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
            <!-- Card -->
            <div class="card hoverable">
                <!-- Card image -->
                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/58.jpg" alt="Card image cap">
                <!-- Card content -->
                <div class="card-body">
                    <!-- Title -->
                    <a href="#!" class="black-text"><?php the_title() ?></a>
                    <!-- Text -->
                    <p class="card-title text-muted font-small mt-3 mb-2"><?php the_excerpt() ?></p>
                    <button type="button" class="btn btn-flat text-primary p-0 mx-0">Read more<i class="fa fa-angle-right ml-2"></i></button>
                </div>
            </div>
            <!-- Card -->
        </div>
        <!-- Grid column -->
    <?php endwhile;
          endif;
    ?>
   </section>

</article>



<?php get_footer() ?>