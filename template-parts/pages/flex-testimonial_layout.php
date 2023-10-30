<?php
$add_title = get_sub_field('add_title');
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>
<!-- rr_testimonial_sec section -->
<section id="<?php echo $section_id; ?>" class="rr_testimonial_sec <?php echo $section_class; ?>">
    <div class="container">
         <?php if(!empty($add_title)): ?>
        <h2 class="rr_label_design rr_testimonial_title"><?php echo $add_title; ?></h2>
        <?php endif; ?>
       <?php if( have_rows('add_testimonials') ): ?>
        <div class="rr_testimonial_row owl-carousel owl-theme">
          <?php $i=1 ;while ( have_rows('add_testimonials') ) : the_row();
              $testimonial_content = get_sub_field('testimonial_content');
              $company_designation = get_sub_field('company_designation');
             ?>
            <div class="rr_testimonial_single_col">
                <div class="rr_testimonial_main">
                    <?php if(!empty($testimonial_content)): ?>
                    <div class="rr_testimonial_data">
                    <?php echo $testimonial_content; ?>
                    </div>
                     <?php endif; ?>

                    <?php if(!empty($company_designation)): ?>
                    <div class="rr_testimonial_author_deg">
                    <p><?php echo $company_designation; ?></p>
                   </div>
                   <?php endif; ?>

                </div>
            </div>
            <?php $i++; endwhile; ?>

        </div>
    <?php endif; ?>
    </div>
</section>