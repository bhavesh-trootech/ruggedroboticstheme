<?php
$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$description = get_sub_field('description');
$display_section = get_sub_field('display_section');
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>

<?php if($display_section ==1): ?>
<section id="<?php echo $section_id; ?>" class="rr_partner_types bg-black <?php echo $section_class; ?>">
    <div class="rr_partner_types_inner"> 
        <div class="container">
            <div class="hor_head_sec d-flex align-center flex-wrap">
                <div class="hor_head_title">
                    <?php if(!empty($subtitle)): ?>
                    <span class="subtitle"><?php echo $subtitle; ?></span>
                    <?php endif; ?>

                    <?php if(!empty($title)): ?>
                    <h2><?php echo $title; ?></h2>
                    <?php endif; ?>

                </div>  
                
                <?php if(!empty($description)): ?>
                <div class="hor_head_content">
                    <?php echo $description; ?>
                </div>
                <?php endif; ?>

            </div>

           <?php if( have_rows('add_types') ): ?>
            <div class="partner_type_inner d-flex flex-wrap">

            	<?php while ( have_rows('add_types') ) : the_row();
                $photo = get_sub_field('photo');
                $subtitle = get_sub_field('subtitle');
                $title = get_sub_field('title');
                $description = get_sub_field('description');
                 ?>
                <div class="partner-item">
                    <div class="partner-item-inner bg-light-cream">
                       <?php if(!empty($photo)): ?>
                        <div class="partner-img d-flex">
                             <?php echo wp_get_attachment_image( $photo, 'full' ); ?>
                        </div>
                        <?php endif; ?>

                        <div class="partner-content text-center">
                        	<?php if(!empty($subtitle)): ?>
                            <span class="subtitle"><?php echo $subtitle ; ?></span>
                            <?php endif; ?>

                            <?php if(!empty($title)): ?>
                            <h3><a href="#"><?php echo $title ; ?></a></h3>
                            <?php endif; ?>

                            <?php if(!empty($description)): ?>
                            <p><?php echo $description ; ?></p>
                            <?php endif; ?>

                        </div>
                    </div> 
                </div>
                <?php endwhile; ?>

            </div>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php endif; ?>