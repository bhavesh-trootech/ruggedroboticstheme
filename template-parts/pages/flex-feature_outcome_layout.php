<?php
    $section_id = get_sub_field('section_id');
    $section_class = get_sub_field('section_class');
    $is_image_position_left = get_sub_field('is_image_position_left');
    $heading_title = get_sub_field('heading_title');
    $heading_image = get_sub_field('heading_image');
?>
 

<section id="<?php echo $section_id; ?>" class="image_content_slider <?php if ($is_image_position_left) { ?>image_heading_right <?php } ?> <?php echo $section_class; ?>">
    <div class="container">
        <div class="image_content_slider_heading d-flex flex-wrap align-center">
            <div class="content_slider_heading">
                <h2><?php echo $heading_title; ?></h2>
            </div>
            <div class="image_slider_heading d-flex">
                <div class="image_slider_heading_inner d-flex">
                    <?php echo wp_get_attachment_image( $heading_image, 'full' ); ?>
                </div> 
            </div>
        </div>

        <?php if( have_rows('add_boxes') ): ?>
        <div class="image_content_slider_inner owl-carousel">
            <?php while ( have_rows('add_boxes') ) : the_row();
              $image = get_sub_field('image');
              $title = get_sub_field('title');
              $description= get_sub_field('description');
             ?>
            <div class="image_content_slide">
                <div class="image_content_slide_inner bg-black d-flex flex-wrap align-center">
                    <?php if(!empty($image)): ?>
                    <div class="slide-image">
                        <div class="slide-image-inner d-flex">
                            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                        </div>
                    </div>
                  <?php endif; ?>

                    <div class="slide-content o-80">
                        <?php if(!empty($title)): ?>
                        <h3><?php echo $title; ?></h3>
                        <?php endif; ?>
                        
                        <?php if(!empty($description)): ?>
                        <?php echo $description; ?>
                         <?php endif; ?>
                    </div>

                </div> 
            </div>
        <?php endwhile; ?>
            
        </div>   
    <?php endif; ?>

    </div>
</section>