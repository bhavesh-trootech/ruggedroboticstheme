<?php
$select_layout = get_sub_field('select_layout');
$add_subtitle = get_sub_field('add_subtitle');
$add_title = get_sub_field('add_title');
$add_content = get_sub_field('add_content');
$add_link = get_sub_field('add_link');
if(!empty($add_link)):
$link_url = $add_link['url'];
$link_title = $add_link['title'];
$link_target = $add_link['target'] ? $add_link['target'] : '_self';
endif;
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>

<?php if($select_layout == "Layout1") { ?>
<!-- asap bottom-cta section -->
<section id="<?php echo $section_id; ?>" class="asap_cta_sec <?php echo $section_class; ?>">
    <div class="container">
        <div class="asap_cta_sec_row d-flex align-center">
            <div class="asap_cta_sec_left">
                 <?php if(!empty($add_subtitle)): ?>
                <span class="sub_label"><?php echo $add_subtitle; ?></span>
                <?php endif; ?>
                <?php if(!empty($add_title)): ?>
                <h2><?php echo $add_title; ?></h2>
                <?php endif; ?>

            </div>
            <div class="asap_cta_sec_right">
                <?php if(!empty($add_content)): ?>
                <p><?php echo $add_content; ?></p>
               <?php endif; ?>
                <?php if(!empty($link_url)): ?>
                <a target="<?php echo $link_target; ?>" href="<?php echo $link_url; ?>" class="comm_btn btn_underline rr_dark_border btn_blue"> <?php echo $link_title; ?>
                <span class="btn_arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                        <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"/>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                        <path id="Path_316952" data-name="Path 316952" d="M28.5,0V7H0v3H28.5v7l9-8.5Z" fill="#000"/>
                    </svg>
                </span>
                </a>
            <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>

<?php if($select_layout == "Layout2") { ?>
    <section id="<?php echo $section_id; ?>" class="asap_cta_sec asap_cta_sec_orange_two <?php echo $section_class; ?>">
        <div class="container">
            <div class="asap_cta_sec_row d-flex align-center">
                <div class="asap_cta_sec_left">
                    <?php if(!empty($add_subtitle)): ?>
                    <span class="sub_label text_orange"><?php echo $add_subtitle; ?></span>
                     <?php endif; ?>
                    <?php if(!empty($add_title)): ?>
                    <h2><?php echo $add_title; ?></h2>
                    <?php endif; ?>
                </div>
                <div class="asap_cta_sec_right">
                     <?php if(!empty($add_content)): ?>
                    <p><?php echo $add_content; ?></p>
                    <?php endif; ?>
                    <?php if(!empty($add_link['url'])): ?>
                    <a target="<?php echo $link_target; ?>" href="<?php echo $link_url; ?>" class="comm_btn btn_underline rr_dark_border btn_orange "><?php echo $link_title; ?>                        <span class="btn_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                                <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
                            </svg>
                           <svg id="Group_2985" class="hover_arrow" data-name="Group 2985" xmlns="http://www.w3.org/2000/svg" width="22.063" height="12.31" viewBox="0 0 22.063 12.31">
                                <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.063) rotate(90)" fill="#f25c07"></path>
                                <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.156)" fill="none" stroke="#f25c07" stroke-width="3"></line>
                            </svg>
                        </span>
                    </a>
                     <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

<?php if($select_layout == "Layout3") { ?>
<section id="" class="asap_cta_sec asap_cta_sec_black_layout  rr_work_with_rugged"> 
    <div class="container">
        <div class="asap_cta_sec_row d-flex align-center">
            <div class="asap_cta_sec_left">
                <?php if(!empty($add_subtitle)): ?>
                <span class="sub_label text_orange"><?php echo $add_subtitle; ?></span>
                <?php endif; ?>
                <?php if(!empty($add_title)): ?>
                <h2><?php echo $add_title; ?></h2>
                <?php endif; ?>

            </div>
            <div class="asap_cta_sec_right">
                <?php if(!empty($add_content)): ?>
                <p><?php echo $add_content; ?></p>
                <?php endif; ?>
                 
                 <?php if(!empty($add_link['url'])): ?>
                <a target="<?php echo $link_target; ?>" href="<?php echo $link_url; ?>" class="comm_btn btn_underline rr_dark_border btn_white "><?php echo $link_title; ?> <span class="btn_arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17"
                            class="default_arrow">
                            <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000">
                            </path>
                        </svg>
                        <svg id="Group_2985" class="hover_arrow" data-name="Group 2985"
                            xmlns="http://www.w3.org/2000/svg" width="22.063" height="12.31" viewBox="0 0 22.063 12.31">
                            <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z"
                                transform="translate(22.063) rotate(90)" fill="#F25C07"></path>
                            <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.156)" fill="none"
                                stroke="#F25C07" stroke-width="3"></line>
                        </svg>
                    </span>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php } ?>