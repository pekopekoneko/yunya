<?php
    if(have_posts()):
    while(have_posts()):
?>

<img src="<?php the_post_thumbnail_url() ?>">
<?php
    
    the_post();
    the_content();
?>

<?php comments_template(); ?>

<?php 
    endwhile;
    endif; 
?>