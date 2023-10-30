<?php
$add_title = get_sub_field('add_title');
$add_description = get_sub_field('add_description');
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>
<section class="rr_ready_boxes">
    <div class="container">
        <div class="hor_head_sec d-flex align-center flex-wrap">
            <?php if(!empty($add_title)): ?>
            <div class="hor_head_title">
                <h2><?php echo $add_title; ?></h2>
            </div>
            <?php endif; ?>

            <?php if(!empty($add_description)): ?>
            <div class="hor_head_content">
                <?php echo $add_description; ?>
            </div>
            <?php endif; ?>

        </div>

        <?php if( have_rows('add_use_case') ): ?>
        <div class="rr_ready_boxes_inner d-flex flex-wrap">
            
            <?php $i=1; while ( have_rows('add_use_case') ) : the_row();
              $add_title = get_sub_field('add_title');
              $add_description = get_sub_field('add_description');
              $add_button_text = get_sub_field('add_button_text');
              $add_button_link = get_sub_field('add_button_link');
             ?>
            <div class="rr_ready_box">
                <div class="rr_ready_box_inner">
                    <div class="rr_ready_box_content">    
                         <?php if(!empty($add_title)): ?>
                        <h3><?php echo $add_title; ?></h3>
                        <?php endif; ?>

                        <?php echo $add_description; ?>

                        <?php if(!empty($add_button_link)): ?>
                        <a target="_self" href="<?php echo $add_button_link; ?>" class="comm_btn btn_underline btn_underline_white rr_dark_border  <?php if($i ==1){ echo "btn_blue"; }else{ echo "btn_orange"; } ?>">
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
            <?php $i++; endwhile; ?>

        </div>
        <?php endif; ?>

    </div>
</section>