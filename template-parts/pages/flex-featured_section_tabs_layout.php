<?php
$add_title = get_sub_field('add_title');
$add_description = get_sub_field('add_description');
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>

<?php if( have_rows('add_pricing_tables') ): ?>
<section class="service_tabs_sec">
  <div class="container">
    <div class="service_tabs_heading d-flex flex-wrap">
      <div class="service_tab_title">
        <h2><?php echo $add_title; ?> </h2>
      </div>
      <div class="tab_heading_content">
        <p><?php echo $add_description; ?></p>
      </div>
    </div>

    <div class="service_tab_inner">
      <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
        <ul class="resp-tabs-list">
          <?php $i=1; while ( have_rows('add_pricing_tables') ) : the_row();
          $add_table_title = get_sub_field('add_table_title');
          ?>
          <li class="resp-tab-item"><?php echo $add_table_title; ?></li>
        <?php $i++; endwhile; ?>

        </ul>
        <div class="resp-tabs-container">
       

         <?php $y=1; while ( have_rows('add_pricing_tables') ) : the_row();
                      $add_table_title = get_sub_field('add_table_title');
                     ?>
 

          <div class="resp-tab-content ">
            <div class="resp-tab-conten-inner">
               <?php if( have_rows('add_header_titles') ): ?>
              <div class="features-heading d-flex">
                <?php $a=1; while ( have_rows('add_header_titles') ) : the_row();
                    $add_title = get_sub_field('add_title');
                   ?>
                <?php if($a ==1){ ?>
                <span class="feature-title"><?php echo $add_title; ?></span>
                <?php }elseif($a ==2) { ?>
                  <span class="feature-right-icon"><?php echo $add_title; ?></span>
                <?php } elseif($a ==3){ ?>
                <span class="feature-crossed-icon"><?php echo $add_title; ?></span>
                <?php } ?>
               
               <?php $a++; endwhile; ?>
              </div>
            <?php endif; ?>

               
             <?php if( have_rows('add_table_rows') ): ?>
              <div class="features">
                <?php $b=1 ;while ( have_rows('add_table_rows') ) : the_row();
                  $add_content = get_sub_field('add_content');
                  $layout_by_rugged_text = get_sub_field('layout_by_rugged_text');
                  $layout_by_rugged = get_sub_field('layout_by_rugged');
                  $lising_a_robot_text = get_sub_field('lising_a_robot_text');
                  $lising_a_robot = get_sub_field('lising_a_robot');
                 ?>
                <div class="feature-item d-flex">
                  <div class="feature-content">
                    <p><?php echo $add_content; ?></p>
                  </div>
                  <div class="icon-block">
                    <span><?php echo $layout_by_rugged_text; ?></span>
                    <?php if($layout_by_rugged == 1): ?>
                    <img src="<?php echo home_url(); ?>/wp-content/themes/ruggedrobotics/images/icon1.svg " alt="">
                  <?php else: ?>
                    <img src="<?php echo home_url(); ?>/wp-content/themes/ruggedrobotics/images/icon2.svg " alt="">
                    <?php endif; ?>
                  </div>

                  <div class="icon-block">
                    <span><?php echo $lising_a_robot_text; ?></span>

                    <?php if($lising_a_robot == 1): ?>
                    <img src="<?php echo home_url(); ?>/wp-content/themes/ruggedrobotics/images/icon1.svg " alt="">
                  <?php else: ?>
                    <img src="<?php echo home_url(); ?>/wp-content/themes/ruggedrobotics/images/icon2.svg " alt="">
                    <?php endif; ?>

                  </div>
                </div>
              <?php endwhile; ?>

              </div>
            <?php endif; ?>

            </div>
          </div>
          <?php $y++; endwhile; ?>



        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
