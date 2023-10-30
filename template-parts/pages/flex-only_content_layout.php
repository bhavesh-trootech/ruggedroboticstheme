<?php
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
$description = get_sub_field('description');
?>

<section id="<?php echo $section_id; ?>" class="rr_privacy_terms_data_sec <?php echo $section_class; ?>">
    <div class="container mini_container">
        <div class="rr_privacy_terms_data_row">
            <?php echo $description; ?>
        </div>
    </div>
</section>
