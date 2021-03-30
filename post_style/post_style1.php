<?php
    $img_id = get_post_thumbnail_id();
    $img_url = wp_get_attachment_image_src($img_id);
    $img_url = $img_url[0];
?>
<div class="news_title" >
    <table><tr><td>
        <img src="<?php echo $img_url;?>" class="index_thumbnail_img">
    </td></tr></table>
</div>
<div class="news_content">
    <table><tr><td  class="index_news_title_td">
        <a  class="index_news_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </td></tr>
    <tr><td class="index_news_content">
            <?php the_content();?>
    </td></tr></table>
                        
</div>