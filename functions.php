<?php


function load_jquery()
{
<<<<<<< HEAD
    wp_register_script("jquery", get_template_directory_uri() . "/js/jquery-3.4.1.min.js");
    wp_enqueue_script("jquery", get_template_directory_uri() . "/js/jquery-3.4.1.min.js");
=======
    echo'<script type="text/javascript"src="'.get_template_directory_uri(). "/js/jquery-3.4.1.min.js".'"></script>';
>>>>>>> e31e6fa (2021-03-29)
}

function load_vue()
{
<<<<<<< HEAD
    wp_register_script("vue", get_template_directory_uri() . "/js/vue.min.js");
    wp_enqueue_script("vue", get_template_directory_uri() . "/js/vue.min.js");
}
function load_style()
{
    wp_register_style("global_style", get_template_directory_uri() . "/css/style.css");
    wp_enqueue_style("global_style", get_template_directory_uri() . "/css/style.css");
=======
    echo'<script type="text/javascript" src="'.get_template_directory_uri().  "/js/vue.min.js".'"></script>';
}

function load_index_style()
{
    echo'<link rel="stylesheet" ype="text/css" href="'.get_template_directory_uri().  "/style.css".'">';
}

function load_tool()
{
    echo'<script type="text/javascript"src="'.get_template_directory_uri(). "/js/tool.js".'"></script>';
}

function load_indexjs()
{
    echo'<script type="text/javascript"src="'.get_template_directory_uri(). "/js/index.js".'"></script>';
>>>>>>> e31e6fa (2021-03-29)
}

add_action('main_index_loader', 'load_jquery');
add_action('main_index_loader', 'load_vue');
<<<<<<< HEAD
add_action('main_index_loader', 'load_style');
=======
add_action('main_index_loader', 'load_tool');
add_action('main_index_loader', 'load_index_style');
>>>>>>> e31e6fa (2021-03-29)

function main_index_loader()
{
    do_action('main_index_loader');
}
<<<<<<< HEAD
=======

function utf8_strlen($string = null) {
    // 将字符串分解为单元
preg_match_all("/./us", $string, $match);
// 返回单元个数
return count($match[0]);
}

function slice_content($text,$slice_length)
{
    $length=utf8_strlen($text);
    if($length<$slice_length)
    {
        return($text);
    }else
    {
        return(mb_substr($text,0,$slice_length,'utf-8')."....");
    }
}
add_theme_support('post-thumbnails');
add_theme_support('custom-background');

add_action('init', 'wpdaxue_change_author_base');
function wpdaxue_change_author_base() {
    global $wp_rewrite;
    $author_slug = 'profile'; // 更改前缀为 profile
    $wp_rewrite->author_base = $author_slug;
}
?>
>>>>>>> e31e6fa (2021-03-29)
