<?php
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
$image1 = get_sub_field('image1');
$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$description = get_sub_field('description');
?>
<!-- Our Values Section Start -->
<section id="<?php echo $section_id; ?>" class="mission-pag-our-values-wrapper <?php echo $section_class; ?>">
    <div class="container">
        <div class="mission-pag-our-values-outer">
            <?php if(!empty($image1)): ?>
            <div class="mission-pag-our-values-img">
                <?php echo wp_get_attachment_image( $image1, 'full' ); ?>
            </div>
            <?php endif; ?>

            <div class="mission-pag-our-values-content text-center">
                    <?php if(!empty($subtitle)): ?>
                    <span class="subtitle"><?php echo $subtitle; ?></span>
                    <?php endif; ?>

                    <?php if(!empty($title)): ?>
                    <h2><?php echo $title; ?></h2>
                    <?php endif; ?>

                    <?php echo $description; ?> 
            </div>

        </div>
    </div>
</section>
<!-- Our Values Section End -->