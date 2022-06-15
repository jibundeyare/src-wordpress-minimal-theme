<?php
get_header();

if ( have_posts() ):
    while (have_posts()):
        the_post();
?>
    <article>
        <h2><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_time( get_option( 'date_format' ) ); ?></div>
<?php
        if ( has_post_thumbnail() ):
            the_post_thumbnail( 'thumbnail' );
        endif;
?>
        <div><?php the_content(); ?></div>
    </article>
<?php
    endwhile;
endif;

get_footer();

