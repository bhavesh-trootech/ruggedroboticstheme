<?php
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>
<section id="<?php echo $section_id; ?>" class="rr_full_img_content_block <?php echo $section_class; ?>">

  <div class="full_img_content_bottom_ele">
    <img src="<?php echo get_template_directory_uri(); ?>/images/solid-bottom-how-work.svg');" alt="">
  </div>


<?php if( have_rows('add_block') ): ?>
  <div class="container">
    <div class="rr_full_img_content_inner">

      <?php while ( have_rows('add_block') ) : the_row();
        $select_design = get_sub_field('select_design');
        $add_image = get_sub_field('add_image');
        $add_title = get_sub_field('add_title');
        $add_description = get_sub_field('add_description');
       ?>

       <?php if($select_design == "Title With Image"){ ?>
      <div class="rr_full_img_content_item">
        
        <?php if(!empty($add_image)): ?>
        <div class="rr_full_img">
          <?php echo wp_get_attachment_image( $add_image, 'full' ); ?>
        </div>
      <?php endif; ?>

        <div class="rr_full_content"> 
          <?php if(!empty($add_title)): ?>
           <h2><?php echo $add_title; ?></h2>
           <?php endif; ?>
           <?php if(!empty($add_description)): ?>
           <?php echo $add_description; ?>
            <?php endif; ?>
        </div>

      </div>
    <?php } elseif($select_design == "Only Title"){ ?>
        <?php if(!empty($add_title)): ?>
        <div class="rr_full_img_content_item title_only">
          <h2><?php echo $add_title; ?></h2>
        </div>
        <?php endif; ?>
    <?php  } ?>
  <?php endwhile; ?>

    </div>
  </div>
  <?php endif; ?>
</section>