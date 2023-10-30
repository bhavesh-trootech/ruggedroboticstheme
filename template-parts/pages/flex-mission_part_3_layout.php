<?php
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
$background_image = get_sub_field('background_image');
$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$description = get_sub_field('description');
?>

<section id="<?php echo $section_id; ?>" class="mission-pg-our-impact-wrapper <?php echo $section_class; ?>" style="background: url(<?php echo wp_get_attachment_url($background_image); ?>) no-repeat;">
    <div class="container">
        <div class="mission-pg-our-impact-outer">
            <div class="mission-pg-our-impact-detail-outer text-center">
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