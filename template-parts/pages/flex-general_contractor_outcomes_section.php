<?php
$left_title = get_sub_field('left_title');
$right_content = get_sub_field('right_content');
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
$select_layout = get_sub_field('select_layout');
?>

<?php if($select_layout == "Layout1"){ ?>
<section id="<?php echo $section_id; ?>" class="rr_comm_card_design_sec <?php echo $section_class; ?>">
    <div class="container">
        <div class="rr_comm_card_design_row">
                <div class="rr_comm_card_design_top d-flex flex-wrap justify-space-between">
                    <?php if(!empty($left_title)): ?>
                    <h2 class="w-100"><?php echo $left_title; ?></h2>
                    <?php endif; ?>
                    <?php if(!empty($right_content)): ?>
                    <div class="w-100 rr_small_para"> 
                         <?php echo $right_content; ?>
                    </div>
                    <?php endif; ?>
                </div>

                <?php if( have_rows('add_process_steps') ): ?>
                <div class="rr_comm_card_design_btm">
                    <ul class="rr_comm_card_design_list d-flex justify-space-between flex-wrap">
                        <?php while ( have_rows('add_process_steps') ) : the_row();
                          $add_image = get_sub_field('add_image');
                          $add_title = get_sub_field('add_title');
                          $add_content = get_sub_field('add_content');
                         ?>
                        <li class="rr_comm_card_design_single w-100">
                            <a href="javascript:void(0)">
                                 <?php if(!empty($add_image)): ?>
                                    <figure>
                                        <?php echo wp_get_attachment_image( $add_image['ID'], 'full' ); ?>
                                    </figure>
                                <?php endif; ?>

                                <div class="rr_comm_card_design_data">
                                <?php if(!empty($add_title)): ?>
                                <h3><?php echo $add_title; ?></h3>
                                <?php endif; ?>
                               <?php if(!empty($add_content)): ?>
                                <div class="rr_small_para">
                                    <p><?php echo $add_content; ?></p>
                                </div>
                                <?php endif; ?>

                                </div>

                            </a>    
                        </li>
                         <?php endwhile; ?>
                       
                    </ul>
                </div>
                <?php endif; ?>

        </div>
    </div>
</section>
<?php } ?>

<?php if($select_layout == "Layout2"){ ?>
<section id="" class="rr_comm_card_design_sec rr_comm_card_design_sec_two_column">
    <div class="container">
        <div class="rr_comm_card_design_row">
            <div class="rr_comm_card_design_top d-flex flex-wrap justify-space-between">
                <?php if(!empty($left_title)): ?>
                <h2 class="w-100"><?php echo $left_title; ?></h2>
                <?php endif; ?>
                <?php if(!empty($right_content)): ?>
                <div class="w-100 rr_small_para"><?php echo $right_content; ?></div>
                <?php endif; ?>
            </div>

            <?php if( have_rows('add_process_steps') ): ?>
            <div class="rr_comm_card_design_btm">
                <ul class="rr_comm_card_design_list d-flex justify-space-between flex-wrap">
                    <?php while ( have_rows('add_process_steps') ) : the_row();
                          $add_image = get_sub_field('add_image');
                          $add_title = get_sub_field('add_title');
                          $add_content = get_sub_field('add_content');
                         ?>
                    <li class="rr_comm_card_design_single w-100">
                        <a href="javascript:void(0)">
                            <?php if(!empty($add_image)): ?>
                                    <figure>
                                        <?php echo wp_get_attachment_image( $add_image['ID'], 'full' ); ?>
                                    </figure>
                                <?php endif; ?>

                            <div class="rr_comm_card_design_data">
                                <?php if(!empty($add_title)): ?>
                                <h3><?php echo $add_title; ?></h3>
                                <?php endif; ?>
                                <?php if(!empty($add_content)): ?>
                                <div class="rr_small_para">
                                    <p><?php echo $add_content; ?></p>
                                </div>
                                <?php endif; ?>

                            </div>

                        </a>
                    </li>
                     <?php endwhile; ?>
                </ul>
            </div>
             <?php endif; ?>

        </div>
    </div>
</section>
<?php } ?>