<?php
$map_iframe_code = get_sub_field('map_iframe_code');
$title = get_sub_field('title');
$description = get_sub_field('description');
$phone = get_sub_field('phone');
$address = get_sub_field('address');
$email = get_sub_field('email');
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>

<section id="<?php echo $section_id; ?>" class="rr_map_contact_sec rr_u_doodle rr_diamond_doodle <?php echo $section_class; ?>">
  <div class="container">
      <div class="rr_map_contact_row d-flex flex-wrap">
       <?php if(!empty($map_iframe_code)): ?>
        <div class="rr_map_col w-100">
          <div id="map"><?php echo $map_iframe_code; ?></div>
        </div>
        <?php endif; ?>

        <div class="rr_contact_col  w-100">

          <?php if(!empty($title)): ?>
            <h2><?php echo $title; ?></h2>
            <?php endif; ?>

            <?php if(!empty($description)): ?>
            <?php echo $description; ?>
            <?php endif; ?>

            <?php if(!empty($phone)): ?>
            <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
            <?php endif; ?>

            <?php if(!empty($address)): ?>
            <div class="address">
              <p><?php echo $address; ?></p>
              <?php endif; ?>
            </div>

            <?php if(!empty($email)): ?>
            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
            <?php endif; ?>

        </div>
      </div>
  </div>
</section>