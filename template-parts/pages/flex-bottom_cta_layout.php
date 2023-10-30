<?php
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
$select_layout = get_sub_field('select_layout');
$title = get_sub_field('title');
$link_text = get_sub_field('link_text');
$cta_link = get_sub_field('cta_link');
?>

<?php if($select_layout == "Layout1"){ ?>
<section id="<?php echo $section_id; ?>" class="carrier_good_fit_start _orange_bg <?php echo $section_class; ?>">
    <div class="container">
           <div class="carrier_good_fit_innner">
                <?php if(!empty($title)): ?>
                <div class="carrier_good_fit_start_left text_white w50">
                    <h2><?php echo $title; ?></h2>
                </div>
                 <?php endif; ?>

                 <?php if(!empty($link_text)): ?>
                <div class="carrier_good_fit_right text_white w50">
                        <p><?php echo $link_text; ?></p>
                </div>  
                 <?php endif; ?>

           </div>                         
    </div>
</section>
<?php } ?>

<?php if($select_layout == "Layout2"){ ?>
    <section id="<?php echo $section_id; ?>" class="carrier_contact_us_call _orange_bg <?php echo $section_class; ?>">
    <div class="container">
          <div class="carrier_contact_us_Call_inner _orange_bg d-flex align-center justify-space-between">
                <?php if(!empty($title)): ?>
                <div class="carrier_contact_us_call_left text_white">
                    <h3><?php echo $title; ?></h3>
                </div>
                <?php endif; ?>
                
                <?php if(!empty($link_text)): ?>
                <div class="carrier_contact_us_call_right text_white">
                    <a target="_self" href="<?php echo $cta_link; ?>" class="comm_btn btn_underline btn_underline_white rr_dark_border btn_orange btn_white "><?php echo $link_text; ?><span class="rr_color_txt"></span> <span class="btn_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                                <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                                <path id="Path_316952" data-name="Path 316952" d="M28.5,0V7H0v3H28.5v7l9-8.5Z" fill="#000"></path>
                            </svg>
                        </span>
                    </a>
                </div>
                <?php endif; ?>

          </div>              
    </div>
</section>
<?php } ?>