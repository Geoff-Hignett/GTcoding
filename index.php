<?php get_header(); ?>

<?php

    while(have_posts()){
        the_post();
?>

    <a href="<?php the_permalink(); ?>"></a>
    <h3><?php the_title(); ?></h3>
    <?php the_excerpt(); ?>

<?php    
}

?>

<?php get_footer(); ?>