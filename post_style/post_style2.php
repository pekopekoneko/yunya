<?php
    $img_id = get_post_thumbnail_id();
    $img_url = wp_get_attachment_image_src($img_id);
    $img_url = $img_url[0];
?>


<div id="culture_left_top_title">
    <table><tr><td>
        <p id="culture_left_top_title_p"><?php the_title();?></p>
    </td></tr></table>
</div>
<div id="culture_left_top_detail">
    <div id="culture_left_top_thumbnail">
        <table><tr><td>
            <img src="<?php echo $img_url;?>">
        </td></tr></table>
    </div>
    <div id="culture_left_top_right">
        <div id="culture_left_top_text">
            <div id="culture_left_top_author">
                <p>作者/<?php echo get_the_author_meta( 'display_name', $post->post_author ); ?></p>
            </div>
            <div id="culture_left_top_content">
                <?php the_content();?>
            </div>
        </div>
    </div>
</div>