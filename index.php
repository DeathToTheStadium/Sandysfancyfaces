<?php get_header() ?>


<article class="container shadow">
    <?php 
    dynamic_sidebar( "section-1" );
    dynamic_sidebar( "section-2" );
    dynamic_sidebar( "section-3" );       
    ?>
<?php 

if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
 
?>

</article>



<?php get_footer() ?>