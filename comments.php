<?php
    if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
        die ('Please do not load this page directly. Thanks!');
?>

<?php
   if (!empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {
       // if there's a password
       // and it doesn't match the cookie
   ?>
   <li class="decmt-box">
       <p><a href="#addcomment">请输入密码再查看评论内容.</a></p>
   </li>
   <?php
       } else if ( !comments_open() ) {
   ?>
   <li class="decmt-box">
       <p><a href="#addcomment">评论功能已经关闭!</a></p>
   </li>
   <?php
       } else if ( !have_comments() ) {
   ?>
   <li class="decmt-box">
       <p><a href="#addcomment">还没有任何评论，你来说两句吧</a></p>
   </li>
   <?php
       } else {
           wp_list_comments('type=comment&callback=aurelius_comment');
       }
   ?>
   
<?php   function aurelius_comment($comment, $args, $depth)
{
   $GLOBALS['comment'] = $comment; ?>
   <li class="comment" id="li-comment-<?php comment_ID(); ?>">
        <div class="gravatar"> <?php if (function_exists('get_avatar') && get_option('show_avatars')) { echo get_avatar($comment, 48); } ?>
 <?php comment_reply_link(array_merge( $args, array('reply_text' => '回复','depth' => $depth, 'max_depth' => $args['max_depth']))) ?> </div>
        <div class="comment_content" id="comment-<?php comment_ID(); ?>">
            <div class="clearfix">
                    <?php printf(__('<cite class="author_name">%s</cite>'), get_comment_author_link()); ?>
                    <div class="comment-meta commentmetadata">发表于：<?php echo get_comment_time('Y-m-d H:i'); ?></div>
                    &nbsp;&nbsp;&nbsp;<?php edit_comment_link('修改'); ?>
            </div>
            <div class="comment_text">
                <?php if ($comment->comment_approved == '0') : ?>
                    <em>你的评论正在审核，稍后会显示出来！</em><br />
        <?php endif; ?>
        <?php comment_text(); ?>
            </div>
        </div>
    </li>
<?php } ?>



<?php if ( comments_open() ) : ?>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php printf(__('你需要先 <a href="%s">登录</a> 才能发表评论.'), get_option('siteurl')."/wp-login.php?redirect_to=".urlencode(get_permalink()));?></p>
<?php else : ?>
<?php $defaults = array(
    'comment_notes_before' => '',
    'label_submit'         => __( '提交评论' ),
    'comment_notes_after' =>''
);
comment_form($defaults);
 endif;
else :  ?>
<p><?php _e('对不起评论已经关闭.'); ?></p>
<?php endif; ?>