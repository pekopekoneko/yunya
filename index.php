<<<<<<< HEAD
<?php
get_header();
get_footer();
?>
=======
<?php get_header(); ?>




<?php include_once('index_store.php');?>

<?php if($this_num==4): ?>
<?php
    $this_block=1;
    if(isset($_POST['this_block'])){$this_num=$_POST['this_block'];}
?>

<?php
$sticky = get_option('sticky_posts');
rsort( $sticky );
$sticky = array_slice( $sticky, 0, 5);
query_posts( array( 'post__in' => $sticky, 'category_name' => 'culture_communication' ));
?>

<div class="warpper">
        <div class="culture_style">
            <div id="culture_left">
                <div id="culture_left_top">
                    <?php if(have_posts()): ?>
                    <?php the_post(); ?>
                    <?php include('post_style/post_style2.php'); ?>
                    <?php endif; ?>
                    <?php #echo"测试语句";?>
                </div>
                <div id="culture_left_bottom">
                    <div id="culture_left_bottom_title">
                        <table><tr><td>
                            <p>最新</p>
                        </td></tr></table>
                    </div>
                    <div id="culture_left_bottom_choose_block">
                        <table>
                            <tr>
                                <td id="culture_left_bottom_choose_block1">全部</td>
                                <td id="culture_left_bottom_choose_block2">专栏</td>
                                <td id="culture_left_bottom_choose_block3">文学</td>
                                <td id="culture_left_bottom_choose_block4">阅读</td>
                                <td id="culture_left_bottom_choose_block5">评论</td>
                                <td id="culture_left_bottom_choose_block6">会议</td>
                            </tr>
                        </table>
                    </div>
                    <div id="culture_left_bottom_news_block">
                        
<?php
if(!isset($_POST['category_name'])){$category_name="culture_communication";}
query_posts(array( 'category_name' => $category_name,'posts_per_page' => 5));
if (have_posts()):
while(have_posts()):
the_post();
?>
<?php include('post_style/post_style3.php'); ?>
<?php endwhile;endif; ?>    
                        
                    </div>
                </div>
            </div>
            <div id="culture_right">
                <div id="culture_right_top">
                
                </div>
                <div id="culture_right_bottom">
                
                </div>
            </div>
        </div>
        
    </div>

    <div class="warpper">
        <div id="culture_block">
            <div id="culture_left">
                
            </div>
            <div id="culture_right">
            
            </div>
        </div>
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


<script type="text/javascript">
    //以下代码为菜单色块渲染代码
    var now_block=<?php echo"$this_block";?>;
    if(now_block==1)
    {
        $("#culture_left_bottom_choose_block1").css('background','#FDF9F8');
        $("#culture_left_bottom_choose_block1").css('color','#374322');
    }else if(now_block==2)
    {
        $("#culture_left_bottom_choose_block2").css('background','#FDF9F8');
        $("#culture_left_bottom_choose_block2").css('color','#374322');
    }else if(now_block==3)
    {
        $("#culture_left_bottom_choose_block2").css('background','#FDF9F8');
        $("#culture_left_bottom_choose_block2").css('color','#374322');
    }else if(now_block==4)
    {
        $("#culture_left_bottom_choose_block2").css('background','#FDF9F8');
        $("#culture_left_bottom_choose_block2").css('color','#374322');
    }else if(now_block==5)
    {
        $("#culture_left_bottom_choose_block2").css('background','#FDF9F8');
        $("#culture_left_bottom_choose_block2").css('color','#374322');
    }else if(now_block==6)
    {
        $("#culture_left_bottom_choose_block2").css('background','#FDF9F8');
        $("#culture_left_bottom_choose_block2").css('color','#374322');
    }
    
    var temp_color_block1=$('#culture_left_bottom_choose_block1').css('background')
    var temp_fontcolor_block1=$("#culture_left_bottom_choose_block1").css('color');
    $('#culture_left_bottom_choose_block1').mouseover(function(){
        $('#culture_left_bottom_choose_block1').css('background-color','#FDF9F8');
        $('#culture_left_bottom_choose_block1').css('color','#374322');
    })
    $('#culture_left_bottom_choose_block1').mouseleave(function(){
        $('#culture_left_bottom_choose_block1').css('background-color',temp_color_block1);
        $('#culture_left_bottom_choose_block1').css('color',temp_fontcolor_block1);
    })
    
    var temp_color_block2=$('#culture_left_bottom_choose_block2').css('background')
    var temp_fontcolor_block2=$("#culture_left_bottom_choose_block2").css('color');
    $('#culture_left_bottom_choose_block2').mouseover(function(){
        $('#culture_left_bottom_choose_block2').css('background-color','#FDF9F8');
        $('#culture_left_bottom_choose_block2').css('color','#374322');
    })
    $('#culture_left_bottom_choose_block2').mouseleave(function(){
        $('#culture_left_bottom_choose_block2').css('background',temp_color_block2);
        $('#culture_left_bottom_choose_block2').css('color',temp_fontcolor_block2);
    })
    
    var temp_color_block3=$('#culture_left_bottom_choose_block2').css('background')
    var temp_fontcolor_block3=$("#culture_left_bottom_choose_block2").css('color');
    $('#culture_left_bottom_choose_block3').mouseover(function(){
        $('#culture_left_bottom_choose_block3').css('background-color','#FDF9F8');
        $('#culture_left_bottom_choose_block3').css('color','#374322');
    })
    $('#culture_left_bottom_choose_block3').mouseleave(function(){
        $('#culture_left_bottom_choose_block3').css('background',temp_color_block3);
        $('#culture_left_bottom_choose_block3').css('color',temp_fontcolor_block3);
    })
    
    var temp_color_block4=$('#culture_left_bottom_choose_block2').css('background')
    var temp_fontcolor_block4=$("#culture_left_bottom_choose_block2").css('color');
    $('#culture_left_bottom_choose_block4').mouseover(function(){
        $('#culture_left_bottom_choose_block4').css('background-color','#FDF9F8');
        $('#culture_left_bottom_choose_block4').css('color','#374322');
    })
    $('#culture_left_bottom_choose_block4').mouseleave(function(){
        $('#culture_left_bottom_choose_block4').css('background',temp_color_block4);
        $('#culture_left_bottom_choose_block4').css('color',temp_fontcolor_block4);
    })
    
    var temp_color_block5=$('#culture_left_bottom_choose_block2').css('background')
    var temp_fontcolor_block5=$("#culture_left_bottom_choose_block2").css('color');
    $('#culture_left_bottom_choose_block5').mouseover(function(){
        $('#culture_left_bottom_choose_block5').css('background-color','#FDF9F8');
        $('#culture_left_bottom_choose_block5').css('color','#374322');
    })
    $('#culture_left_bottom_choose_block5').mouseleave(function(){
        $('#culture_left_bottom_choose_block5').css('background',temp_color_block5);
        $('#culture_left_bottom_choose_block5').css('color',temp_fontcolor_block5);
    })
    
    var temp_color_block6=$('#culture_left_bottom_choose_block2').css('background')
    var temp_fontcolor_block6=$("#culture_left_bottom_choose_block2").css('color');
    $('#culture_left_bottom_choose_block6').mouseover(function(){
        $('#culture_left_bottom_choose_block6').css('background-color','#FDF9F8');
        $('#culture_left_bottom_choose_block6').css('color','#374322');
    })
    $('#culture_left_bottom_choose_block6').mouseleave(function(){
        $('#culture_left_bottom_choose_block6').css('background',temp_color_block6);
        $('#culture_left_bottom_choose_block6').css('color',temp_fontcolor_block6);
    })
    
</script>




<?php endif; ?>






<script type="text/javascript">
    //以下代码为菜单色块渲染代码
    var now_state=<?php echo"$this_num";?>;
    if(now_state==1)
    {
        $('#normal_menu_td1').css('background','#8C6C29');
    }else if(now_state==2)
    {
        $('#normal_menu_td2').css('background','#8C6C29');
    }else if(now_state==3)
    {
        $('#normal_menu_td3').css('background','#8C6C29');
    }else if(now_state==4)
    {
        $('#normal_menu_td4').css('background','#8C6C29');
    }else if(now_state==5)
    {
        $('#normal_menu_td5').css('background','#8C6C29');
    }else if(now_state==6)
    {
        $('#normal_menu_td6').css('background','#8C6C29');
    }
    
    var temp_color_td1=$('#normal_menu_td1').css('background-color')
    $('#normal_menu_td1').mouseover(function(){
        $('#normal_menu_td1').css('background-color','#8C6C29')
    })
    $('#normal_menu_td1').mouseleave(function(){
        $('#normal_menu_td1').css('background-color',temp_color_td1)
    })
    var temp_color_td2=$('#normal_menu_td2').css('background-color')
    $('#normal_menu_td2').mouseover(function(){
        $('#normal_menu_td2').css('background-color','#8C6C29')
    })
    $('#normal_menu_td2').mouseleave(function(){
        $('#normal_menu_td2').css('background-color',temp_color_td2)
    })
    var temp_color_td3=$('#normal_menu_td3').css('background-color')
    $('#normal_menu_td3').mouseover(function(){
        $('#normal_menu_td3').css('background-color','#8C6C29')
    })
    $('#normal_menu_td3').mouseleave(function(){
        $('#normal_menu_td3').css('background-color',temp_color_td3)
    })
    var temp_color_td4=$('#normal_menu_td4').css('background-color')
    $('#normal_menu_td4').mouseover(function(){
        $('#normal_menu_td4').css('background-color','#8C6C29')
    })
    $('#normal_menu_td4').mouseleave(function(){
        $('#normal_menu_td4').css('background-color',temp_color_td4)
    })
    var temp_color_td5=$('#normal_menu_td5').css('background-color')
    $('#normal_menu_td5').mouseover(function(){
        $('#normal_menu_td5').css('background-color','#8C6C29')
    })
    $('#normal_menu_td5').mouseleave(function(){
        $('#normal_menu_td5').css('background-color',temp_color_td5)
    })
    var temp_color_td6=$('#normal_menu_td6').css('background-color')
    $('#normal_menu_td6').mouseover(function(){
        $('#normal_menu_td6').css('background-color','#8C6C29')
    })
    $('#normal_menu_td6').mouseleave(function(){
        $('#normal_menu_td6').css('background-color',temp_color_td6)
    })
    $('#normal_menu_td1').click(function(){
        var this_num = {"this_num":1};
        post("<?php echo home_url(); ?>",this_num)
    })
    $('#normal_menu_td2').click(function(){
        var this_num = {"this_num":2};
        post("<?php echo home_url(); ?>",this_num)
    })
    $('#normal_menu_td3').click(function(){
        var this_num = {"this_num":3};
        post("<?php echo home_url(); ?>",this_num)
    })
    $('#normal_menu_td4').click(function(){
        var this_num = {"this_num":4};
        post("<?php echo home_url(); ?>",this_num)
    })
    $('#normal_menu_td5').click(function(){
        var this_num = {"this_num":5};
        post("<?php echo home_url(); ?>",this_num)
    })
    $('#normal_menu_td6').click(function(){
        var this_num = {"this_num":6};
        post("<?php echo home_url(); ?>",this_num)
    })
</script>
<!--<?php echo get_page_link(1);?>-->
<?php get_footer(); ?>
</div>
>>>>>>> e31e6fa (2021-03-29)
