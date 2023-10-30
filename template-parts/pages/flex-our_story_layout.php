<?php
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$description = get_sub_field('description');
?>
<section id="<?php echo $section_id; ?>" class="about-our-story <?php echo $section_class; ?>">
    <div class="container">
        <div class="about-our-story">
            <?php if(!empty($subtitle)): ?>
                <span class="subtitle"><?php echo $subtitle; ?></span>
            <?php endif; ?>

            <?php if(!empty($title)): ?>
                <h2><?php echo $title; ?></h2>
            <?php endif; ?>
                
            <?php if(!empty($description)): ?>
                <div class="info intro-text o-96">
                    <?php echo $description; ?>
                </div>
            <?php endif; ?>
        </div>                            
    </div>                            
</section>