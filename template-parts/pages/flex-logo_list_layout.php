<?php
$select_layout = get_sub_field('select_layout');
$logo_section_title = get_sub_field('logo_section_title');
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>

<?php if($select_layout == "Layout1") { ?>
<!--  Social Proof-Client Logos section -->
<section id="<?php echo $section_id; ?>" class="client_logo_sec <?php echo $section_class; ?>">
    <div class="container">
        <?php if(!empty($logo_section_title)): ?>
        <div class="client_logo_title">
            <h2><?php echo $logo_section_title ; ?></h2>
        </div>
    <?php endif; ?>
       <?php if( have_rows('add_logos') ): ?>
        <div class="client_logo_row">
            <?php while ( have_rows('add_logos') ) : the_row();
                $logoImage = get_sub_field('add_logo');
            ?>
            <figure>
                <?php echo wp_get_attachment_image( $logoImage["ID"], 'full' ); ?>
            </figure>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    </div>
</section>
<?php } ?>


<?php if($select_layout == "Layout2") { ?>
    <section id="<?php echo $section_id; ?>" class="client_logo_sec rr_logo_bg_design <?php echo $section_class; ?>">
    <div class="container">
          <?php if(!empty($logo_section_title)): ?>
        <div class="client_logo_title">
            <h2><?php echo $logo_section_title ; ?></h2>
        </div>
    <?php endif; ?>
        <?php if( have_rows('add_logos') ): ?>
        <div class="client_logo_row">
            <?php while ( have_rows('add_logos') ) : the_row();
                $logoImage = get_sub_field('add_logo');
            ?>
            <figure>
                <?php echo wp_get_attachment_image( $logoImage["ID"], 'full' ); ?>
            </figure>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    </div>
</section>

<?php } ?>

<?php if($select_layout == "Layout3") { ?>
    <section id="<?php echo $section_id; ?>" class="client_logo_sec rr_logo_bg_design rr_partner_logo_bg_design <?php echo $section_class; ?>">
  <div class="container">
    <?php if(!empty($logo_section_title)): ?>
    <div class="client_logo_title">
      <h2><?php echo $logo_section_title ; ?></h2>
    </div>
    <?php endif; ?>

    <?php if( have_rows('add_logos') ): ?>
    <div class="client_logo_row">
        <?php while ( have_rows('add_logos') ) : the_row();
        $logoImage = get_sub_field('add_logo');
        ?>
      <figure>
        <?php echo wp_get_attachment_image( $logoImage["ID"], 'full' ); ?>
      </figure>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php } ?>

<?php if($select_layout == "Layout4") { ?>
  <section id="<?php echo $section_id; ?>" class="client_logo_sec resource_logos <?php echo $section_class; ?>">
        <div class="resource_logos_inner"> 
            <div class="container">
                <?php if(!empty($logo_section_title)): ?>
                <div class="client_logo_title">
                    <h2><?php echo $logo_section_title ; ?></h2>
                </div>
                <?php endif; ?>
                <?php if( have_rows('add_logos') ): ?>
                <div class="client_logo_row">
                   <?php while ( have_rows('add_logos') ) : the_row();
                    $logoImage = get_sub_field('add_logo');
                    ?>
                    <figure>
                        <?php echo wp_get_attachment_image( $logoImage["ID"], 'full' ); ?>
                    </figure>
                    <?php endwhile; ?>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </section>
<?php } ?>