<?php
$add_image = get_sub_field('add_image');
$add_heading = get_sub_field('add_heading');
$add_content = get_sub_field('add_content');
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>

<section id="<?php echo $section_id; ?>" class="rr_comm_img_con_sec comm_border_line_design comm_doodle_design diamond_doddle rr_first_img_cont_sec <?php echo $section_class; ?>">
    <div class="container">
        <div class="rr_comm_img_con_row d-flex align-center flex-wrap justify-space-between">
            <?php if(!empty($add_image)): ?>
            <div class=" rr_comm_img_col w-100">
                <figure>
                    <?php echo wp_get_attachment_image( $add_image['ID'], 'full' ); ?>
                </figure>   
            </div>
            <?php endif; ?>
            <div class="rr_comm_con_col w-100">
                <?php if(!empty($add_heading)): ?>
                <h2><?php echo $add_heading; ?></h2>
                <?php endif; ?>
                <?php if(!empty($add_content)): ?>
                <div class="rr_small_para">
                    <?php echo $add_content; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>