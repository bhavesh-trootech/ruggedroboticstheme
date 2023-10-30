<?php
$title = get_sub_field('title');
$embedded_code = get_sub_field('embedded_code');
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>
<!-- job opening iframe start -->
<div id="<?php echo $section_id; ?>" class="job_opening_iframe_start <?php echo $section_class; ?>">
    <div class="container">
        
        <?php if(!empty($title)): ?>
        <h3><?php echo $title; ?></h3>
        <?php endif; ?>

        <div class="right-circle">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/10/job_opening_iframe_O.png" alt="">                       
        </div>
        <div class="left-image">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/10/job_opening_iframe_Door.png" alt="">
        </div>
        
        <?php if(!empty($embedded_code)): ?>
        <div class="job_opening_iframe_wrapper">
            <div class="responsive-iframe-container">
                <?php echo $embedded_code; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="bottom_right-cross">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2023/10/job_opening_iframe_T.png" alt="">                    
        </div>
    </div>
</div>
<!-- job opening iframe end -->