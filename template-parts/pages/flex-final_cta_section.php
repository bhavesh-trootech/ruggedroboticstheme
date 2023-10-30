<?php
$select_design = get_sub_field('select_design');
$add_heading = get_sub_field('add_heading');
$add_sub_text = get_sub_field('add_sub_text');
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>
<?php if($select_design == "Design1"){ ?>
<section id="<?php echo $section_id; ?>" class="rr_comm_footer_cta_sec rr_bg_orange <?php echo $section_class; ?>">
    <div class="container">
    <div class="rr_comm_footer_cta_main_row d-flex justify-space-between  flex-wrap">
        <div class="rr_comm_footer_cta_lft d-flex  flex-wrap flex-direction">
            <?php if(!empty($add_heading)): ?>
            <h2 class="uppercase"><?php echo $add_heading; ?></h2>
            <?php endif; ?>
            <?php if(!empty($add_sub_text)): ?>
            <p><?php echo $add_sub_text; ?></p>
             <?php endif; ?>
        </div>
        <?php if( have_rows('add_boxes') ): ?>
        <div class="rr_comm_footer_cta_rgt">
                <ul class="rr_comm_footer_cta_row">
                    <?php while ( have_rows('add_boxes') ) : the_row();
                      $add_title = get_sub_field('add_title');
                      $add_description = get_sub_field('add_description');
                      $add_link = get_sub_field('add_link');
                      $link_url = $add_link['url'];
                      $link_title = $add_link['title'];
                      $link_target = $add_link['target'] ? $add_link['target'] : '_self';
                     ?>
                    <li class="rr_comm_footer_cta_single">
                        <?php if(!empty($add_title)): ?>
                        <h3><?php echo $add_title; ?></h3>
                        <?php endif; ?>

                       <?php if(!empty($add_description)): ?>
                        <div><p><?php echo $add_description; ?></p></div>
                        <?php endif; ?>
                        
                        <?php if(!empty($link_url)): ?>
                        <a target="<?php echo $link_target; ?>" href="<?php echo $link_url; ?>" class="comm_btn btn_underline rr_white_border btn_orange "><?php echo $link_title; ?><span class="btn_arrow">
                              <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="12.672" height="12.31" viewBox="0 0 12.672 12.31" class="default_arrow">
                                <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(12.672) rotate(90)" fill="#f25c07"/>
                                <line id="Line_8" data-name="Line 8" x1="9.414" transform="translate(0 6.155)" fill="none" stroke="#f25c07" stroke-width="3"/>
                              </svg>
                              <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="22.061" height="12.31" viewBox="0 0 22.061 12.31"   class="hover_arrow">
                                <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.061) rotate(90)" fill="#f25c07"/>
                                <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.155)" fill="none" stroke="#f25c07" stroke-width="3"/>
                              </svg>
                            </span>
                        </a>
                    <?php endif; ?>
                    </li>
                <?php endwhile; ?>
                </ul>
        </div>
         <?php endif; ?>
    </div>
    </div>
</section>
<?php } ?>

<?php if($select_design == "Design2") { ?>
<section id="<?php echo $section_id; ?>" class="rr_comm_footer_cta_sec rr_bg_red pricing_page <?php echo $section_class; ?>">
    <div class="container">
    <div class="rr_comm_footer_cta_main_row d-flex justify-space-between  flex-wrap">
        <div class="rr_comm_footer_cta_lft d-flex  flex-wrap flex-direction">
            <?php if(!empty($add_heading)): ?>
            <h2 class="uppercase"><?php echo $add_heading; ?></h2>
            <?php endif; ?>
            <?php if(!empty($add_sub_text)): ?>
            <div>
                <p><?php echo $add_sub_text; ?></p>
            </div>
            <?php endif; ?>
        </div>

        <?php if( have_rows('add_boxes') ): ?>
        <div class="rr_comm_footer_cta_rgt">
                <ul class="rr_comm_footer_cta_row">
                    <?php while ( have_rows('add_boxes') ) : the_row();
                      $add_title = get_sub_field('add_title');
                      $add_description = get_sub_field('add_description');
                      $add_link = get_sub_field('add_link');
                      $link_url = $add_link['url'];
                      $link_title = $add_link['title'];
                      $link_target = $add_link['target'] ? $add_link['target'] : '_self';
                     ?>
                    <li class="rr_comm_footer_cta_single">
                        <?php if(!empty($add_title)): ?>
                        <h3><?php echo $add_title; ?></h3>
                        <?php endif; ?>

                        <?php if(!empty($add_description)): ?>
                        <div><p><?php echo $add_description; ?></p></div>
                        <?php endif; ?>

                        <?php if(!empty($link_url)): ?>
                        <a target="<?php echo $link_target; ?>" href="<?php echo $link_url; ?>" class="comm_btn btn_underline rr_white_border btn_orange white_bg"><?php echo $link_title; ?><span class="btn_arrow">
                        <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="12.672" height="12.31" viewBox="0 0 12.672 12.31" class="default_arrow">
                                <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(12.672) rotate(90)" fill="#f25c07"/>
                                <line id="Line_8" data-name="Line 8" x1="9.414" transform="translate(0 6.155)" fill="none" stroke="#f25c07" stroke-width="3"/>
                              </svg>
                                <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="22.061" height="12.31" viewBox="0 0 22.061 12.31"   class="hover_arrow">
                                  <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.061) rotate(90)" fill="#f25c07"/>
                                  <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.155)" fill="none" stroke="#f25c07" stroke-width="3"/>
                                </svg>
                            </span>
                        </a>
                        <?php endif; ?>
                    </li>
                     <?php endwhile; ?>
                    
                </ul>
        </div>
    <?php endif; ?>
    </div>
    </div>
</section>
<?php } ?>

<?php if($select_design == "Design3") { ?>
<section id="<?php echo $section_id; ?>" class="rr_comm_footer_cta_sec rr_bg_orange rr_bg_purple <?php echo $section_class; ?>">
  <div class="container">
    <div class="rr_comm_footer_cta_main_row d-flex justify-space-between  flex-wrap">
      <div class="rr_comm_footer_cta_lft d-flex  flex-wrap flex-direction">
        <?php if(!empty($add_heading)): ?>
            <h2 class="uppercase"><?php echo $add_heading; ?></h2>
            <?php endif; ?>

         <?php if(!empty($add_sub_text)): ?>
        <div class="rr_comm_footer_cta_lft_content">
          <p><?php echo $add_sub_text; ?></p>
        </div>
         <?php endif; ?>
      </div>

      <?php if( have_rows('add_boxes') ): ?>
      <div class="rr_comm_footer_cta_rgt">
        <ul class="rr_comm_footer_cta_row">
            <?php while ( have_rows('add_boxes') ) : the_row();
              $add_title = get_sub_field('add_title');
              $add_description = get_sub_field('add_description');
              $add_link = get_sub_field('add_link');
              if(!empty($add_link)):
              $link_url = $add_link['url'];
              $link_title = $add_link['title'];
              $link_target = $add_link['target'] ? $add_link['target'] : '_self';
              endif;
             ?>
          <li class="rr_comm_footer_cta_single">
            <?php if(!empty($add_title)): ?>
            <h3><?php echo $add_title; ?></h3>
            <?php endif; ?>
            <?php if(!empty($add_description)): ?>
            <div class="rr_comm_footer_cta_single_content">
              <p><?php echo $add_description; ?></p>
            </div>
             <?php endif; ?>
           <?php if(!empty($add_link['url'])): ?>
            <a target="<?php echo $link_target; ?>" href="<?php echo $link_url; ?>" class="comm_btn dark_bg btn_underline rr_white_border btn_orange "> <?php echo $link_title; ?> <span class="btn_arrow">
            <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="12.672" height="12.31" viewBox="0 0 12.672 12.31" class="default_arrow">
                                <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(12.672) rotate(90)" fill="#f25c07"/>
                                <line id="Line_8" data-name="Line 8" x1="9.414" transform="translate(0 6.155)" fill="none" stroke="#f25c07" stroke-width="3"/>
                              </svg>
                              <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="22.061" height="12.31" viewBox="0 0 22.061 12.31"   class="hover_arrow">
                                  <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.061) rotate(90)" fill="#f25c07"/>
                                  <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.155)" fill="none" stroke="#f25c07" stroke-width="3"/>
                                </svg>
              </span>
            </a>
        <?php endif; ?>
          </li>
           <?php endwhile; ?>
        </ul>
      </div>
      <?php endif; ?>

    </div>
  </div>
</section>
<?php } ?>