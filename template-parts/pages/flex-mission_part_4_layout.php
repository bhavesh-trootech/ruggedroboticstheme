<?php
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
$image = get_sub_field('image');
$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$description = get_sub_field('description');
$link_text = get_sub_field('link_text');
$link = get_sub_field('link');
?>

<section id="<?php echo $section_id; ?>" class="rr_home_banner_sec our-plateform <?php echo $section_class; ?>">
    <div class="container">
        <div class="rr_home_banner_row">
            <div class="rr_home_banner_left">
                <?php if(!empty($subtitle)): ?>
                <span class="subtitle"><?php echo $subtitle; ?></span>
                 <?php endif; ?>

                <?php if(!empty($title)): ?>
                <h2><?php echo $title; ?></h2>
                 <?php endif; ?>

                <?php if(!empty($description)): ?>
                <p class="intro-text"><?php echo $description; ?></p>
                 <?php endif; ?>

                <?php if(!empty($link)): ?>
                <div class="btn-group">
                    <a target="_self" href="<?php echo $link; ?>" class="comm_btn btn_underline rr_dark_border btn_orange "><?php echo $link_text; ?></span>                        
                        <span class="btn_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                                <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
                            </svg>
                            <svg id="Group_2985" class="hover_arrow" data-name="Group 2985" xmlns="http://www.w3.org/2000/svg" width="22.063" height="12.31" viewBox="0 0 22.063 12.31">
                            <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.063) rotate(90)" fill="#f25c07"></path>
                            <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.156)" fill="none" stroke="#f25c07" stroke-width="3"></line>
                            </svg>
                        </span>
                    </a>
                </div>
                 <?php endif; ?>

            </div>

            <?php if(!empty($image)): ?>
            <div class="rr_home_banner_right">
                <figure>
                    <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                </figure>
            </div>
            <?php endif; ?>

        </div>
    </div>
</section>