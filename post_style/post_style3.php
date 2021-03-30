<?php
    $img_id = get_post_thumbnail_id();
    $img_url = wp_get_attachment_image_src($img_id);
    $img_url = $img_url[0];
?>
<div class="culture_left_bottom_news_block_part">
    <div class="culture_left_bottom_news_block_part_thumbnail">
        <table><tr><td>
            <img src="<?php echo $img_url;?>" class="culture_left_bottom_news_block_part_thumbnail_img">
        </td></tr></table>
    </div>
    <div class="culture_left_bottom_news_block_part_right">
        <div class="culture_left_bottom_news_block_part_title">
            <?php $category = get_the_category();?>
            <table><tr><td>
                <a  class="index_news_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </td></tr></table>
        </div>
        <div class="culture_left_bottom_news_block_part_author">
            <p>作者/
            <?php 
                echo get_the_author_meta( 'display_name', $post->post_author ); 
                echo"     ";
                the_date('Y-m-d H:i l');
                
            ?>
            </p>
        </div>
        <div class="culture_left_bottom_news_block_part_content">
            <span><?php the_content();?></span>
        </div>
    </div>
</div>
                