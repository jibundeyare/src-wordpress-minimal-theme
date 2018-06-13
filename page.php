<?php
get_header();

if ( have_posts() ):
    while (have_posts()):
        the_post();
?>
    <article>
        <h1><?php the_title(); ?></h1>
<?php
        if ( has_post_thumbnail() ):
            the_post_thumbnail( 'medium' );
        endif;
?>
        <div><?php the_content(); ?></div>
    </article>
<?php
    endwhile;
endif;

get_footer();

