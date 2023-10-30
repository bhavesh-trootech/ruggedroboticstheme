<?php
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>

<section id="<?php echo $section_id; ?>" class="rr_home_img_con_sec_main <?php echo $section_class; ?>">

 <?php if( have_rows('add_sections') ): ?>
    <?php $i=1; while ( have_rows('add_sections') ) : the_row();
      $add_image = get_sub_field('add_image');
      $add_subtitle = get_sub_field('add_subtitle');
      $add_title = get_sub_field('add_title');
      $add_content = get_sub_field('add_content');
      $add_button_text = get_sub_field('add_button_text');
      $add_button_link = get_sub_field('add_button_link');
      $add_row_class = get_sub_field('add_row_class');
     ?>
    <section class="rr_home_img_con_sec rr_comm_img_con_sec comm_border_line_design rr_first_img_cont_sec <?php echo $add_row_class; ?> ">
    <?php if($i==2): ?>
        <div class="dotted-circle">
            <img src="<?php echo get_template_directory_uri(); ?>/images/circle-dotted-orange.png" alt="">
        </div>
    <?php endif; ?>

    <div class="container">
        <div class="rr_comm_img_con_row d-flex align-center flex-wrap justify-space-between">
        <?php if(!empty($add_image)): ?>
        <div class=" rr_comm_img_col w-100"> 
            <?php echo wp_get_attachment_image( $add_image, 'full' ); ?>
        </div>
        <?php endif; ?>

        <div class="rr_comm_con_col w-100">
             <?php if(!empty($add_subtitle)): ?>
            <span class="subtitle"><?php echo $add_subtitle; ?></span>
            <?php endif; ?>
 
             <?php if(!empty($add_title)): ?>
            <h2><?php echo $add_title; ?></h2>
            <?php endif; ?>
            
             <?php if(!empty($add_content)): ?>
            <div class="rr_small_para">
               <?php echo $add_content; ?>
            </div>
            <?php endif; ?>

             <?php if(!empty($add_button_link)): ?>
            <a target="_self" href="<?php echo $add_button_link; ?>" class="comm_btn btn_underline rr_dark_border btn_orange">
                <?php echo $add_button_text; ?>                      
                <span class="btn_arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                        <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                        <path id="Path_316952" data-name="Path 316952" d="M28.5,0V7H0v3H28.5v7l9-8.5Z" fill="#000"></path>
                    </svg>
                </span>
            </a>
            <?php endif; ?>

        </div>
        </div>
    </div>
    </section>
    <?php $i++; endwhile; ?>
    <?php endif; ?>

</section>