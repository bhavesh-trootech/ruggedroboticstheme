<?php
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>
 <?php if( have_rows('add_benifits') ): ?>
<section id="<?php echo $section_id; ?>" class="content_boxxes bg-orange <?php echo $section_class; ?>">
    <div class="container">
        <div class="content_box_inner d-flex flex-wrap">
                <?php while ( have_rows('add_benifits') ) : the_row();
                      $title = get_sub_field('title');
                      $description = get_sub_field('description');
                     ?>
            <div class="content_box_item">
                <div class="content_box_item_inner">
                    <div class="box_icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon1.svg');" alt="">
                    </div>
                   <?php if(!empty($title)): ?>
                    <h3><?php echo $title; ?></h3>
                    <?php endif; ?>

                    <?php echo $description; ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>