
<?php
$this_num=1;
if(isset($_POST['this_num'])){$this_num=$_POST['this_num'];}
?>

<?php if($this_num==1): ?>
<div class="warpper">
    <div id="index_slider1">
        <?php echo do_shortcode('[smartslider3 slider="2"]');?>
    </div>


    <div id="intro_div">
        <div id="intro_div_top">
            <table>
                <tr class="intro_div_tr1">
                    <td class="intro_div_td1">
                        机构简介
                    </td>
                </tr>
                <tr class="intro_div_tr2">
                    <td class="intro_div_td2">
                        <p class="intro_p">韵雅文化发展研究院的研究团队由数十名教授、博士构成。</p>
                        <p class="intro_p">
                            下设有中西文化比较课程研究所，文学研究所，世贸组织与法制研究所，对外文化交流研究所，书画艺术研究所等多个研究单位。
                        </p>
                        <p class="intro_p">
                            所长皆由学术界知名人士担任。
                        </p>
                    </td>
                </tr>
                <tr class="intro_div_tr1">
                    <td class="intro_div_td1">
                        活动宗旨
                    </td>
                </tr>
                <tr class="intro_div_tr2">
                    <td class="intro_div_td2">
                        <p class="intro_p">
                            研究院致力于学贯中西型的学术和课程研究，
                        </p>
                        <p class="intro_p">
                            立足于国学和西学的比较、贯通、与应用传习。
                        </p>
                    </td>
                </tr>
            </table>
        </div>
        <div id="intro_div_bottom">
            
        </div>
    </div>
    
    <div id="index_disp">
        <div id="disp_left">
        
        </div>
        <div id="disp_right">
            <div id="display_div_top">
                <img id="scholar_img" src="<?php echo get_template_directory_uri(). "/img/guzhengkun.png"?>"  alt="学者介绍">
            </div>
            <div id="display_div_bottom">
                <p id="display_div_bottom_p_title">
                    辜正坤
                </p>
                <p id="display_div_bottom_p">
                    现任韵雅文化发展研究院院长<br>北大博导、教授
                </p>
                <p id="display_div_bottom_p">
                    任国际中西文化比较协会会长<br>中国外国文学学会莎士比亚研究会会长<br>前北大世界文学研究所所长
                </p>
            </div>
        </div>
    </div>


<?php
    if(have_posts()):
    the_post();
?>
    <div id="index_news">
        <table class="news_container">
            <tr id="news_row_1">
                <td colspan="7">学术新闻</td>
            </tr>
            <tr id="news_row_2">
                <td id="news_row_2_col_1"></td>
                <td id="news_row_2_col_2">
                    <?php include('post_style/post_style1.php'); ?>
                </td>
                <td id="news_row_2_col_3"></td>

<?php
    endif;
    if(have_posts()):
    the_post();
?>

                <td id="news_row_2_col_4">
                    <?php include('post_style/post_style1.php'); ?>
                </td>
                <td id="news_row_2_col_5"></td>

<?php
    endif;
    if(have_posts()):
    the_post();
?>

                <td id="news_row_2_col_6">
                    <?php include('post_style/post_style1.php'); ?>
                </td>
                <td id="news_row_2_col_7"></td>
            </tr>
        </table>
    </div>
    
<?php endif; ?>



    
    <div id="bottom_pic">
        <table>
            <tr>
                <td id="bottom_info_td">
                    <p id="bottom_info_p">
                        地址：北京市海淀区颐和园路5号 韵雅文化发展研究院 邮编：100871<br>
                        电话：010-7517381   传真：010-7512269   E-mail：yunya@pku.edu.cn
                    </p>
                </td>
            </tr>
        </table>
    </div>
</div>
<?php endif; ?>
