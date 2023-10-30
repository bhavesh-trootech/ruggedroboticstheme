<?php
$select_layout = get_sub_field('select_layout');
$add_title = get_sub_field('add_title');
$add_description = get_sub_field('add_description');
$add_form_title = get_sub_field('add_form_title');
$add_form_embeded_code = get_sub_field('add_form_embeded_code');
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>

<?php if($select_layout == "Layout1") { ?>
<section class="form_block ptb90">
  <div class="container">
    <div class="form_block_inner d-flex flex-wrap">
      <?php if(!empty($add_title)): ?>
      <div class="form_title">
        <h2><?php echo $add_title; ?></h2>
      </div>
      <?php endif; ?>
        <?php if(!empty($add_description)): ?>
      <div class="form_content">
        <p><?php echo $add_description; ?></p>
      </div>
       <?php endif; ?>

    </div>
    <div class="form-inner">
      <div class="form-inner-block">
         <?php if(!empty($add_form_title)): ?>
        <h4><?php echo $add_form_title; ?></h4>
         <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<?php if($select_layout == "Layout2") { ?>
<!--  Contact form section -->
<section id="<?php echo $section_id; ?>" class="form_block pilot_wrapper <?php echo $section_class; ?>">
    <div class="container">  
        <div class="form-inner">
            <div class="form-inner-block">
                <?php if(!empty($add_form_title)): ?>
                <h4><?php echo $add_form_title; ?></h4>
                <?php endif; ?>
                
                <?php if(!empty($add_form_embeded_code)): ?>
                <div class="hs-form">
                 <?php echo $add_form_embeded_code; ?>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
<?php } ?>

