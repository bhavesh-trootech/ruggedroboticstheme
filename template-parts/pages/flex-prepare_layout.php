<?php
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>

<section id="<?php echo $section_id; ?>" class="rr_steps_sec rr_blue_bg <?php echo $section_class; ?>">
    <div class="container">
        <div class="rr_steps_sec_inner">

<?php if( have_rows('add_steps') ): ?>
  <?php while ( have_rows('add_steps') ) : the_row();
        $add_image = get_sub_field('add_image');
        $add_step_number_text = get_sub_field('add_step_number_text');
        $add_label = get_sub_field('add_label');
        $add_title = get_sub_field('add_title');
        $add_description = get_sub_field('add_description');
       ?>
          <div class="rr_steps_row d-flex flex-wrap">
              <div class="step_left">
                <?php if(!empty($add_image)): ?>
                <div class="step_icon">
                   <?php echo wp_get_attachment_image( $add_image, 'full' ); ?>
                </div>
                <?php endif; ?>
                 <?php if(!empty($add_step_number_text) ||  !empty($add_label)): ?>
                <div class="step-title">
                  <h2><?php echo $add_step_number_text; ?> <span><?php echo $add_label; ?></span></h2>
                </div>
                <?php endif; ?>

              </div>
              <div class="step_right">
                <div class="step-content">
                  <?php if(!empty($add_title)): ?>
                  <h2><?php echo $add_title; ?></h2>
                  <?php endif; ?>

                  <?php echo $add_description; ?>

                </div>
              </div>
          </div>
          <?php endwhile; ?>
        <?php endif; ?>

        </div>
    </div>
</section>