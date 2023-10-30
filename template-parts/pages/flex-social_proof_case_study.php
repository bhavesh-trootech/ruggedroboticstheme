<?php
$add_image = get_sub_field('add_image');
$add_sub_title = get_sub_field('add_sub_title');
$add_heading = get_sub_field('add_heading');
$add_content = get_sub_field('add_content');
$add_link_text = get_sub_field('add_link_text');
$add_link_url = get_sub_field('add_link_url');
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>
<!--  Social Proof - Case Study section -->
<section id="<?php echo $section_id; ?>" class="social_proof_sec pilot_page_social_proof <?php echo $section_class; ?>">
    <div class="container">
        <div class="social_proof_sec_row">
            <div class="social_proof_sec_left">
                <?php if(!empty($add_image)): ?>
                <figure>
                    <?php echo wp_get_attachment_image( $add_image['ID'], 'full' ); ?>
                </figure>
                <?php endif; ?>
            </div>
            <div class="social_proof_sec_right">
                <?php if(!empty($add_sub_title)): ?>
                <span class="sub_label"><?php echo $add_sub_title; ?></span>
                <?php endif; ?>
                <?php if(!empty($add_heading)): ?>
                <h2><?php echo $add_heading; ?></h2>
                <?php endif; ?>
                <?php echo $add_content; ?>
                <?php if(!empty($add_link_url)): ?>
                <a target="_self" href="<?php echo $add_link_url; ?>" class="comm_btn btn_underline rr_dark_border btn_orange "> <?php echo $add_link_text; ?> 
                <span class="btn_arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                        <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"/>
                    </svg>
                    <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="22.061" height="12.31" viewBox="0 0 22.061 12.31"   class="hover_arrow">
                  <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.061) rotate(90)" fill="#f25c07"/>
                  <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.155)" fill="none" stroke="#f25c07" stroke-width="3"/>
                </svg>
                </span>
                </a>
                 <?php endif; ?>
            </div>
        </div>
    </div>
</section>