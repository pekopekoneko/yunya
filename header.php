<html>

<head>
    <?php
<<<<<<< HEAD
    wp_head();
    main_index_loader();
    ?>
    <!-- <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/style.css'> -->
</head>

<body>
    <div class="inner_warpper">
        <div id="header">
            <table id="header_table">
                <tr class="header_table_row1">
                    <td class="header_icon_td">
                        <img class="header_icon" src="<?php echo get_template_directory_uri(); ?>/img/icon.png" alt="韵雅文化发展研究院">
                    </td>
                    <td class="header_img_td">
                        <img class="header_img" src="<?php echo get_template_directory_uri(); ?>/img/header.jpg" alt="韵雅文化发展研究院">
                    </td>
                    <td class="header_right_td">

                    </td>
                </tr>
            </table>
            <table class="header_table2">
                <tr class="header_table_row2">
                    <td id="menu_td1" class="normal_td">
                        首&nbsp&nbsp页
                    </td>
                    <td id="menu_td2" class="normal_td">
                        中西文化
                    </td>
                    <td id="menu_td3" class="normal_td">
                        创新产品
                    </td>
                    <td id="menu_td4" class="normal_td">
                        文化交流
                    </td>
                    <td id="menu_td5" class="normal_td">
                        社会互动
                    </td>
                    <td id="menu_td6" class="innormal_td_left">

                    </td>
                    <td id="menu_td7" class="innormal_td_right">
                        <input type="text" placeholder="S E A R C H">
                    </td>
                </tr>
            </table>
=======
    main_index_loader();
    ?>
</head>
<body>
    <div class="warpper">
        <div id="header">
            <div id="header_warpper_row1">
                <div id="header_icon_div">
                    <img id="header_icon" src="<?php echo get_template_directory_uri(); ?>/img/icon.png" alt="韵雅文化发展研究院">
                </div>
                <div id="header_banner_div">
                    <img id="header_banner" src="<?php echo get_template_directory_uri(); ?>/img/header.jpg" alt="韵雅文化发展研究院">
                </div>
                <div id="header_block_div">
                    
                </div>
            </div>
            <div id="header_warpper_row2">
                <table id="header_menu_table">
                    <tr id="header_menu_tr">
                        <td class="normal_menu_td" id="normal_menu_td1">
                            首&nbsp&nbsp页
                        </td>
                        <td class="normal_menu_td" id="normal_menu_td2">
                            中西文化
                        </td>
                        <td class="normal_menu_td" id="normal_menu_td3">
                            文化发展
                        </td>
                        <td class="normal_menu_td" id="normal_menu_td4">
                            文化交流
                        </td>
                        <td class="normal_menu_td" id="normal_menu_td5">
                            创新产品
                        </td>
                        <td class="normal_menu_td" id="normal_menu_td6">
                            社会互动
                        </td>
                        <td id="unique_menu_left">
                            
                        </td>
                        <td id="unique_menu_td_right">
                            <form id="index_search" name="index_search" method="get" action="<?php get_template_directory_uri('home'); ?>/">
                            <input id="header_search" name="s" type="text" placeholder="S E A R C H">
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
>>>>>>> e31e6fa (2021-03-29)
        </div>
    </div>