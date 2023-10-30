<?php
$add_image = get_sub_field('add_image');
$add_sub_title = get_sub_field('add_sub_title');
$add_heading = get_sub_field('add_heading');
$add_content = get_sub_field('add_content');
$add_link = get_sub_field('add_link');
$add_button_text = get_sub_field('add_button_text');
$add_button_link = get_sub_field('add_button_link');
// if(!empty($add_link)):
// $link_url = $add_link['url'];
// $link_title = $add_link['title'];
// $link_target = $add_link['target'] ? $add_link['target'] : '_self';
// endif;
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>
<div id="<?php echo $section_id; ?>" class="work_with_us_main_image_card_main work_with_us_main_image_card_main_2 <?php echo $section_class; ?>">
        <div class="container">
            <div class="work_with_us_main_image_card">
                 <?php if(!empty($add_image)): ?>
                <div class="img_overlay" style="background-image: url('<?php echo wp_get_attachment_url($add_image); ?>');">
                     <?php echo wp_get_attachment_image( $add_image, "full" );  ?>
                </div>
            <?php endif; ?>

                <div class="information">
                       <?php if(!empty($add_sub_title)): ?>
                        <span class="text_orange text_top"><?php echo $add_sub_title; ?></span>
                       <?php endif; ?>
                        <?php if(!empty($add_heading)): ?>
                        <h2 class="text_white "><?php echo $add_heading; ?></h2>
                        <?php endif; ?>
                        <?php if(!empty($add_content)): ?>
                        <div class="text_white description" ><?php echo $add_content; ?></div> 
                        <?php endif; ?>
                        <?php if(!empty($add_button_link)): ?>
                        <div class="button_wrapper">    
                            <div class="secondary-btns2">
                                <a href="<?php echo $add_button_link; ?>" class="comm_btn btn_underline btn_underline_white rr_dark_border btn_orange"><?php echo $add_button_text; ?>
                                    <span class="btn_arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                                            <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                                            <path id="Path_316952" data-name="Path 316952" d="M28.5,0V7H0v3H28.5v7l9-8.5Z" fill="#000"></path>
                                        </svg>
                                    </span>
                                </a>    
                            </div>  
                        </div>    
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>