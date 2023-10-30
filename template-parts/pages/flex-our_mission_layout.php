<?php
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
$image = get_sub_field('image');
$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$description = get_sub_field('description');
$link_text = get_sub_field('link_text');
$link = get_sub_field('link');
$person1_image = get_sub_field('person1_image');
$person1_name = get_sub_field('person1_name');
$person1_designation = get_sub_field('person1_designation');
$person2_image = get_sub_field('person2_image');
$person2_name = get_sub_field('person2_name');
$person2_designation = get_sub_field('person2_designation');
?>
<section id="<?php echo $section_id; ?>" class="about-mission-main <?php echo $section_class; ?>">
    <div class="container">
        <div class="about-mission-inner">
             <?php if(!empty($image)): ?>
            <div class="image">
                <div class="image-one">
                    <?php echo wp_get_attachment_image( $image, 'full' ); ?>
                </div>
            </div>
           <?php endif; ?>

            <div class="information">
                <?php if(!empty($subtitle)): ?>
                    <span class="subtitle"><?php echo $subtitle; ?></span>
                <?php endif; ?>
                
                <?php if(!empty($title)): ?>
                    <h2><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php if(!empty($description)): ?>
                <div class="info-content o-96 intro-text">
                    <?php echo $description; ?>
                </div>
                <?php endif; ?>
 
                <?php if(!empty($link)): ?>
                    <a target="_self" href="<?php echo $link; ?>" class="comm_btn btn_underline rr_dark_border btn_orange"><?php echo $link_text; ?><span
                            class="rr_color_txt"></span> <span class="btn_arrow">
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
        <div class="goal">
            <div class="goal-inner d-flex flex-wrap justify-center">
                <div class="goal-one">
                    <?php if(!empty($person1_image)): ?>
                    <div class="goal-image d-flex justify-center">
                         <?php echo wp_get_attachment_image( $person1_image, 'full' ); ?>
                    </div>
                    <?php endif; ?>

                    <div class="person-detail">
                        <?php if(!empty($person1_name)): ?>
                            <span class="subtitle"><?php echo $person1_name; ?></span>
                        <?php endif; ?>

                        <?php if(!empty($person1_designation)): ?>
                            <h3 class="designation d-flex justify-center"><span><?php echo $person1_designation; ?></span></h3>
                        <?php endif; ?>
                    </div> 

                </div>
                <div class="goal-two">
                    <?php if(!empty($person2_image)): ?>
                    <div class="goal-image d-flex justify-center">
                       <?php echo wp_get_attachment_image( $person2_image, 'full' ); ?>
                    </div>
                    <?php endif; ?>

                    <div class="person-detail"> 
                        <?php if(!empty($person2_name)): ?>
                            <span class="subtitle"><?php echo $person2_name; ?></span>
                        <?php endif; ?>

                        <?php if(!empty($person2_designation)): ?>
                            <h3 class="designation d-flex justify-center"><span><?php echo $person2_designation; ?></span></h3>
                        <?php endif; ?>
                    </div> 

                </div>
            </div>
        </div>
    </div>
</section>