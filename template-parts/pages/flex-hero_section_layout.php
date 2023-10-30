<?php
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
$select_layout = get_sub_field('select_layout');
$hero_sub_title = get_sub_field('hero_sub_title');
$hero_title = get_sub_field('hero_title');
$hero_description = get_sub_field('hero_description');
$hero_button_1 = get_sub_field('hero_button_1');
if(!empty($hero_button_1)):
$btn1_url = $hero_button_1['url'];
$btn1_title = $hero_button_1['title'];
$btn1_target = $hero_button_1['target'] ? $hero_button_1['target'] : '_self';
endif;
$hero_button_2 = get_sub_field('hero_button_2');
if(!empty($hero_button_2)):
$btn2_url = $hero_button_2['url'];
$btn2_title = $hero_button_2['title'];
$btn2_target = $hero_button_2['target'] ? $hero_button_2['target'] : '_self';
endif;
$hero_image = get_sub_field('hero_image');
$hero_background_image = get_sub_field('hero_background_image');
?>

<?php if($select_layout == "Layout1"){ ?>
<section id="<?php echo $section_id; ?>" class="rr_home_banner_sec <?php echo $section_class; ?>">
    <div class="container">
        <div class="rr_home_banner_row">
            <div class="rr_home_banner_left">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>
                <?php if(!empty($hero_sub_title)): ?>
                <span class="subtitle"><?php echo $hero_sub_title; ?></span>
                <?php endif; ?>
                
                <?php if(!empty($hero_title)): ?>
                <h1><?php echo $hero_title; ?></h1>
               <?php endif; ?>

               <?php if(!empty($hero_description)): ?>
                <?php echo $hero_description; ?>
               <?php endif; ?>

               <div class="btn-group">
                <?php if(!empty($btn1_url)): ?>
                    <a target="<?php echo $btn1_target; ?>" href="<?php echo $btn1_url; ?>" class="comm_btn btn_outline btn_orange"><?php echo $btn1_title; ?>
                        <span class="btn_arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                            <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                                    <g id="Group_2985" data-name="Group 2985" transform="translate(-194.5 -12)">
                                        <path id="Polygon_6" data-name="Polygon 6" d="M8.5,0,17,9H0Z" transform="translate(232 12) rotate(90)" fill="#f25c07"/>
                                        <line id="Line_5" data-name="Line 5" x1="32" transform="translate(194.5 20.5)" fill="none" stroke="#f25c07" stroke-width="3"/>
                                    </g>
                             </svg>
                        </span>
                    </a>
                    <?php endif; ?>

                    <?php if(!empty($btn2_url)): ?>
                    <a target="<?php echo $btn2_target; ?>" href="<?php echo $btn2_url; ?>" class="comm_btn btn_underline rr_dark_border btn_orange "><?php echo $btn2_title; ?>
                        <span class="btn_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                                <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"/>
                            </svg>
                           <svg id="Group_2985"  class="hover_arrow" data-name="Group 2985" xmlns="http://www.w3.org/2000/svg" width="22.063" height="12.31" viewBox="0 0 22.063 12.31">
                                <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.063) rotate(90)" fill="#f25c07"/>
                                <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.156)" fill="none" stroke="#f25c07" stroke-width="3"/>
                            </svg>
                        </span>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php if(!empty($hero_image)): ?>
            <div class="rr_home_banner_right">
                <figure>
                  <?php echo wp_get_attachment_image( $hero_image, 'full' ); ?>
                <figure>
            </div>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php } ?>

<?php if($select_layout == "Layout2"){ ?>
<!-- Hero section -->
<section id="<?php echo $section_id; ?>" class="rr_home_banner_sec gc_leadership <?php echo $section_class; ?>">
    <div class="container">
        <div class="rr_home_banner_row">
            <div class="rr_home_banner_left">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>
                <?php if(!empty($hero_sub_title)): ?>
                <span class="top_sub_heading"><?php echo $hero_sub_title; ?></span>
               <?php endif; ?>

                 <?php if(!empty($hero_title)): ?>
                <h1><?php echo $hero_title; ?></h1>
               <?php endif; ?>
                <?php if(!empty($hero_description)): ?>
                <?php echo $hero_description; ?>
               <?php endif; ?>


                <div class="btn-group">
                    <?php if(!empty($btn1_url)): ?>
                    <a target="<?php echo $btn1_target; ?>" href="<?php echo $btn1_url; ?>" class="comm_btn btn_outline btn_blue"><?php echo $btn1_title; ?>
                        <span class="btn_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                                <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                                    <g id="Group_2985" data-name="Group 2985" transform="translate(-194.5 -12)">
                                        <path id="Polygon_6" data-name="Polygon 6" d="M8.5,0,17,9H0Z" transform="translate(232 12) rotate(90)" fill="#00a7e1"/>
                                        <line id="Line_5" data-name="Line 5" x1="32" transform="translate(194.5 20.5)" fill="none" stroke="#00a7e1" stroke-width="3"/>
                                    </g>
                             </svg>
                        </span>
                    </a>
                     <?php endif; ?>

                     <?php if(!empty($btn2_url)): ?>
                    <a target="<?php echo $btn2_target; ?>" href="<?php echo $btn2_url; ?>" class="comm_btn btn_underline rr_dark_border btn_blue">
                        <?php $contentp = apply_filters( 'the_content', $btn2_title ); 
                         $removepbefore = str_replace("<p>","",$contentp);
                         $removepafter = str_replace("</p>","",$removepbefore);
                         $finalcontent = str_replace("”",'"',$removepafter);
                         echo $finalcontent;
                        ?>
                        <span class="btn_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                                <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"/>
                            </svg>
                            <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="22.061" height="12.31" viewBox="0 0 22.061 12.31" class="hover_arrow">
                                <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.061) rotate(90)" fill="#00a7e1"/>
                                <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.155)" fill="none" stroke="#00a7e1" stroke-width="3"/>
                            </svg>
                        </span>
                    </a>
                    <?php endif; ?>

                </div>
            </div>
            <?php if(!empty($hero_image)): ?>
            <div class="rr_home_banner_right">
                <figure>
                <?php echo wp_get_attachment_image( $hero_image, 'full' ); ?>
                </figure>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php } ?>

<?php if($select_layout == "Layout5"){ ?>
<section id="<?php echo $section_id; ?>" class="rr_pricing_banner_sec rr_banner-doddle  rr_banner_dark <?php echo $section_class; ?>">
    <div class="container">

        <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
        ?>

        <div class="rr_pricing_banner_row d-flex flex-direction justify-center align-center"> 

           <?php if(!empty($hero_title)): ?>
                <h1><?php echo $hero_title; ?></h1>
               <?php endif; ?>
                <?php if(!empty($hero_description)): ?>
                <?php echo $hero_description; ?>
               <?php endif; ?>

             <?php if(!empty($btn1_url)): ?>
            <a target="<?php echo $btn1_target; ?>" href="<?php echo $btn1_url; ?>" class="comm_btn btn_outline btn_outline_white btn_red"><?php echo $btn1_title; ?>
                        <span class="btn_arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                            <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#FFF"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                            <g id="Group_2986" data-name="Group 2986" transform="translate(-137.5 -12)">
                                <path id="Polygon_6" data-name="Polygon 6" d="M8.5,0,17,9H0Z" transform="translate(175 12) rotate(90)" fill="#e62636"/>
                                <line id="Line_5" data-name="Line 5" x1="32" transform="translate(137.5 20.5)" fill="none" stroke="#e62636" stroke-width="3"/>
                            </g>
                        </svg>

                    </span>
            </a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php } ?>

<?php if($select_layout == "Layout4"){ ?>
<section id="<?php echo $section_id; ?>" class="pilot_project_sec <?php echo $section_class; ?>">
    <div class="container">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
        ?>
        <?php if(!empty($hero_sub_title)): ?>
        <span class="top_sub_heading subtitle"><?php echo $hero_sub_title; ?></span>
        <?php endif; ?>
        <div class="pilot_project_sec_row d-flex">
            <?php if(!empty($hero_title)): ?>
            <div class="pilot_project_left">
                
                <h1><?php echo $hero_title; ?></h1>
            </div>
            <?php endif; ?>
            <?php if(!empty($hero_description)): ?>
            <div class="pilot_project_right">
                <?php echo $hero_description; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php } ?>

<?php if($select_layout == "Layout3"){ ?>
<section id="<?php echo $section_id; ?>" class="rr_home_banner_sec service_banner <?php echo $section_class; ?>" style="background-image: url('<?php echo wp_get_attachment_url($hero_background_image); ?>');">
                    <div class="t-shape">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/banner-t-shape.svg');" alt="">
                    </div>

                    <div class="container">
                        <div class="rr_home_banner_inner"> 

                            <div class="u-shape">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/banner-u-shape.svg');" alt="">
                            </div>

                            <div class="breadcrumb purple">
                                <?php echo do_shortcode("[breadcrumb]"); ?>
                            </div>

                            <div class="rr_home_banner_row"> 
                                <div class="rr_home_banner_left">
                                    <?php if (!empty($hero_sub_title)) { ?>
                                        <span class="top_sub_heading"><?php echo $hero_sub_title; ?></span>
                                    <?php } ?>

                                    <?php if (!empty($hero_title)) { ?>
                                        <h1><?php echo $hero_title; ?></h1>
                                    <?php } ?>

                                    <?php if (!empty($hero_description)) { ?>
                                        <div class="rspv-content">
                                            <?php echo $hero_description; ?> 
                                        </div>
                                    <?php } ?>

                                    
                                        <div class="btn-group">
                                            <?php if(!empty($btn1_url)): ?> 
                                                <a target="<?php echo $btn1_target; ?>" href="<?php echo $btn1_url; ?>" class="comm_btn diff-btn white_border  btn_outline btn_purple"><?php echo $btn1_title; ?>
                                                    <span class="btn_arrow">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                                                        <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#fff"></path>
                                                    </svg>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                                                        <path id="Path_316952" data-name="Path 316952" d="M28.5,0V7H0v3H28.5v7l9-8.5Z" fill="#fff"></path>
                                                    </svg></span>
                                                </a>
                                            <?php endif; ?>

                                            <?php if(!empty($btn2_url)): ?>
                                                <a target="<?php echo $btn2_target; ?>" href="<?php echo $btn2_url; ?>" class="comm_btn diff-btn btn_underline rr_dark_border btn_orange "><?php echo $btn2_title; ?>
                                                    <span class="btn_arrow">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                                                            <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#fff"/> 
                                                        </svg>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                                                            <path id="Path_316952" data-name="Path 316952" d="M28.5,0V7H0v3H28.5v7l9-8.5Z" fill="#fff"/>
                                                        </svg>
                                                    </span>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    
                                </div> 

                                <?php if (!empty($hero_description)) { ?>
                                    <div class="rr_home_banner_right d-flex justify-right"> 
                                        <div class="rr_home_banner_right_content"> 
                                            <?php echo $hero_description; ?> 
                                        </div>
                                    </div>
                                <?php } ?> 
                            </div>
                        </div> 
                    </div>
                </section> 
<?php } ?>

<?php if($select_layout == "Layout6"){ ?>
    <section id="<?php echo $section_id; ?>" class="rr_home_banner_sec rr_home_banner_full <?php echo $section_class; ?>" style="background-image: url('<?php echo wp_get_attachment_url($hero_background_image); ?>');">
   
    <div class="down-arrow-shape">
        <img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow.png');" alt="">
    </div>

    <div class="o-shape">
        <img src="<?php echo get_template_directory_uri(); ?>/images/o-shape-orng.png');" alt="">
    </div>

  <div class="container">
    <div class="rr_home_banner_row">

    <div class="u-shape">
        <img src="<?php echo get_template_directory_uri(); ?>/images/u-shape-orng.png');" alt="">
    </div>

      <div class="rr_home_banner_left"> 
        <?php if (!empty($hero_title)) { ?>
        <h1 class="hero_head"><?php echo $hero_title; ?></h1> 
        <?php } ?>
        
        <?php echo $hero_description; ?>
      
        <div class="btn-group"> 
            <?php if(!empty($btn1_url)): ?> 
            <a target="<?php echo $btn1_target; ?>" href="<?php echo $btn1_url; ?>" class="comm_btn white_border btn_outline btn_orange"><?php echo $btn1_title; ?>                         
                <span class="btn_arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                        <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                        <path id="Path_316952" data-name="Path 316952" d="M28.5,0V7H0v3H28.5v7l9-8.5Z" fill="#000"></path>
                    </svg>
                </span>
            </a>
            <?php endif; ?>

            <div class="underlin-btn-last"> 
                <?php if(!empty($btn2_url)): ?>
                <a target="<?php echo $btn2_target; ?>" href="<?php echo $btn2_url; ?>" class="comm_btn btn_underline btn_underline_white rr_dark_border btn_orange"><?php echo $btn2_title; ?>                        <span class="btn_arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                            <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                            <path id="Path_316952" data-name="Path 316952" d="M28.5,0V7H0v3H28.5v7l9-8.5Z" fill="#000"></path>
                        </svg>
                    </span>
                </a>   
                <?php endif; ?>
            </div>

        </div>
      </div> 
    </div>
  </div>
</section>
<?php } ?>

<?php if($select_layout == "Layout7"){ ?>
<section id="<?php echo $section_id; ?>" class="rr_home_banner_sec service_banner how-it-work-banner <?php echo $section_class; ?>" style="background-image: url('<?php echo wp_get_attachment_url($hero_background_image); ?>');">
  <div class="t-shape">
    <img src="<?php echo get_template_directory_uri(); ?>/images/o-blue.png');" alt="shape-img">
  </div>
  <div class="container">
    <div class="rr_home_banner_inner">
      <div class="u-shape">
        <img src="<?php echo get_template_directory_uri(); ?>/images/diamond-blue.png');" alt="shape-img">
      </div> 
      <div class="breadcrumb blue">
        <?php echo do_shortcode("[breadcrumb]"); ?>
      </div> 
      <div class="rr_home_banner_row">
        <div class="rr_home_banner_left"> 
        <?php if (!empty($hero_title)) { ?>
            <h1><?php echo $hero_title; ?></h1>
        <?php } ?>
          <?php if (!empty($hero_description)) { ?>
          <div class="rspv-content">  
            <?php echo $hero_description; ?> 
          </div>
          <?php } ?>

          <div class="btn-group">
             <?php if(!empty($btn1_url)): ?> 
            <a target="<?php echo $btn1_target; ?>" href="<?php echo $btn1_url; ?>" class="comm_btn white_border btn_outline btn_blue"><?php echo $btn1_title; ?>                       
                <span class="btn_arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                    <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                    <path id="Path_316952" data-name="Path 316952" d="M28.5,0V7H0v3H28.5v7l9-8.5Z" fill="#000"></path>
                </svg></span>
            </a>
        <?php endif; ?>
        <?php if(!empty($btn2_url)): ?>
            <a target="<?php echo $btn2_target; ?>" href="<?php echo $btn2_url; ?>" class="comm_btn btn_underline btn_underline_white rr_dark_border btn_blue"><?php echo $btn2_title; ?> <span class="btn_arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                        <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                        <path id="Path_316952" data-name="Path 316952" d="M28.5,0V7H0v3H28.5v7l9-8.5Z" fill="#000"></path>
                    </svg>
                </span>
            </a>
            <?php endif; ?>

          </div>
        </div>
        <?php if (!empty($hero_description)) { ?>
        <div class="rr_home_banner_right d-flex justify-right">
          <div class="rr_home_banner_right_content">
            <?php echo $hero_description; ?>
          </div>
        </div>
        <?php } ?> 

      </div>
    </div>
  </div>
</section>
<?php } ?>

<?php if($select_layout == "Layout9"){ ?>
<section id="<?php echo $section_id; ?>" class="rr_home_banner_sec rr_carrier_banner <?php echo $section_class; ?>">
    <div class="container">
        <div class="rr_home_banner_row justify-space-between ">
            <div class="rr_home_banner_left">
                <?php /* echo do_shortcode("[breadcrumb]");  */?>

                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>

                <?php if (!empty($hero_title)) { ?>
                <h1><?php echo $hero_title; ?></h1>
                <?php } ?>

                <?php echo $hero_description; ?>

                <div class="btn-group">
                    <?php if(!empty($btn1_url)): ?> 
                    <a target="<?php echo $btn1_target; ?>" href="<?php echo $btn1_url; ?>" class="comm_btn white_border btn_outline btn_orange"> <?php echo $btn1_title; ?>        
                        <span class="btn_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                                <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                                <path id="Path_316952" data-name="Path 316952" d="M28.5,0V7H0v3H28.5v7l9-8.5Z" fill="#000"></path>
                            </svg>
                        </span>
                    </a>
                     <?php endif; ?>
                </div>
            </div>
            
            <?php if(!empty($hero_image)): ?>
            <div class="rr_home_banner_right"> 
                <div class="rounded_image_wrapper">
                    <figure>
                        <?php echo wp_get_attachment_image( $hero_image, 'full' ); ?>
                    </figure>
                </div>    
            </div>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php } ?>

<?php if($select_layout == "Layout8"){ ?>
    <section id="<?php echo $section_id; ?>" class="rr_home_banner_sec gc_leadership mission-wrapper <?php echo $section_class; ?>">
    <div class="container">
        <div class="rr_home_banner_row justify-space-between flex-wrap">
            <div class="rr_home_banner_left">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>
                <?php if(!empty($hero_sub_title)): ?>
                <span class="top_sub_heading"><?php echo $hero_sub_title; ?></span>
                <?php endif; ?>

                <?php if(!empty($hero_title)): ?>
                <h1><?php echo $hero_title; ?></h1>
                <?php endif; ?>

                <?php if(!empty($hero_description)): ?>
                <?php echo $hero_description; ?>
                <?php endif; ?>

            </div>
            
            <?php if(!empty($hero_image)): ?>
            <div class="rr_home_banner_right">
                <figure>
                    <?php echo wp_get_attachment_image( $hero_image, 'full' ); ?>
                </figure>
            </div>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php } ?>

<?php if($select_layout == "Layout10"){ ?>
<section id="<?php echo $section_id; ?>" class="rr_home_banner_sec gc_leadership mission-wrapper rr_ready_for_you_banner rr_banner_dots_bg <?php echo $section_class; ?>">
    <div class="container">
        <div class="rr_home_banner_row justify-space-between flex-wrap">
            <div class="rr_home_banner_left">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>
                <?php if(!empty($hero_title)): ?>
                <h1><?php echo $hero_title; ?></h1>
                 <?php endif; ?>

                <?php if(!empty($hero_description)): ?>
                <div class="o-80">
                    <?php echo $hero_description; ?>
                </div> 
                 <?php endif; ?>

                
                <div class="btn-group">
                    <?php if(!empty($btn1_url)): ?> 
                    <a  target="<?php echo $btn1_target; ?>" href="<?php echo $btn1_url; ?>" class="comm_btn white_border btn_outline btn_blue"><?php echo $btn1_title; ?>                        
                        <span class="btn_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                                <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                                <g id="Group_2985" data-name="Group 2985" transform="translate(-194.5 -12)">
                                    <path id="Polygon_6" data-name="Polygon 6" d="M8.5,0,17,9H0Z" transform="translate(232 12) rotate(90)" fill="#fff"/>
                                    <line id="Line_5" data-name="Line 5" x1="32" transform="translate(194.5 20.5)" fill="none" stroke="#fff" stroke-width="3"/>
                                </g>
                            </svg>
                        </span>
                    </a>
                    <?php endif; ?>
                    <?php if(!empty($btn2_url)): ?>
                    <a  target="<?php echo $btn2_target; ?>" href="<?php echo $btn2_url; ?>" class="comm_btn btn_underline btn_underline_white rr_dark_border btn_blue"><?php echo $btn2_title; ?>                        
                        <span class="btn_arrow">
                            <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="12.672" height="12.31" viewBox="0 0 12.672 12.31"  class="default_arrow">
                                <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(12.672) rotate(90)" fill="#fff"/>
                                <line id="Line_8" data-name="Line 8" x1="9.414" transform="translate(0 6.155)" fill="none" stroke="#fff" stroke-width="3"/>
                            </svg>
                            <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="22.061" height="12.31" viewBox="0 0 22.061 12.31" class="hover_arrow">
                                <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.061) rotate(90)" fill="#00a7e1"/>
                                <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.155)" fill="none" stroke="#00a7e1" stroke-width="3"/>
                            </svg>
                        </span>
                    </a>
                    <?php endif; ?>

                </div>
            </div>
           <?php if(!empty($hero_image)): ?>
            <div class="rr_home_banner_right">
                <figure>
                    <?php echo wp_get_attachment_image( $hero_image, 'full' ); ?>
                </figure>
            </div>
            <?php endif; ?>

        </div>
    </div>
</section>
<?php } ?>

<?php if($select_layout == "Layout11"){ ?>
<section id="<?php echo $section_id; ?>" class="rr_home_banner_sec rr_carrier_banner rr_ready_eve_banner <?php echo $section_class; ?>">

  <div class="container">
    <div class="breadcrumb orange">
        <?php echo do_shortcode("[breadcrumb]"); ?>
    </div>
    <div class="rr_home_banner_row justify-space-between ">
      <div class="rr_home_banner_left">
        <?php if (!empty($hero_title)) { ?>
        <h1><?php echo $hero_title; ?></h1>
        <?php } ?>

        <?php echo $hero_description; ?>

        <div class="btn-group">
            <?php if(!empty($btn1_url)): ?> 
            <a target="<?php echo $btn1_target; ?>" href="<?php echo $btn1_url; ?>" class="comm_btn white_border btn_outline btn_orange">
                <?php echo $btn1_title; ?>                        
                <span class="btn_arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                        <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                        <path id="Path_316952" data-name="Path 316952" d="M28.5,0V7H0v3H28.5v7l9-8.5Z" fill="#000"></path>
                    </svg>
                </span>
            </a>
            <?php endif; ?>
            <?php if(!empty($btn2_url)): ?>
            <a target="<?php echo $btn2_target; ?>" href="<?php echo $btn2_url; ?>" class="comm_btn btn_underline btn_underline_white rr_dark_border btn_orange"><?php echo $btn2_title; ?>                        <span class="btn_arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                        <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                        <path id="Path_316952" data-name="Path 316952" d="M28.5,0V7H0v3H28.5v7l9-8.5Z" fill="#000"></path>
                    </svg>
                </span>
            </a>
            <?php endif; ?>

        </div>
      </div>
      <?php if(!empty($hero_image)): ?>
      <div class="rr_home_banner_right">
        <div class="rounded_image_wrapper">
            <figure>
                <?php echo wp_get_attachment_image( $hero_image, 'full' ); ?>
            </figure>
        </div>
      </div>
      <?php endif; ?>

    </div>
  </div>
</section>
<?php } ?>


<?php if($select_layout == "Layout12"){ ?>
<section id="<?php echo $section_id; ?>" class="rr_home_banner_sec service_banner how-it-work-banner rr_sucess_story_banner <?php echo $section_class; ?>">
  <div class="t-shape">
    <img src="/wp-content/uploads/2023/10/X_story.png');" alt="shape-img">
  </div>
  <div class="container">
    <div class="rr_home_banner_inner">
      <div class="u-shape">
      <img src="/wp-content/uploads/2023/10/O_story.png" alt="shape-img">    
      </div> 
      <div class="breadcrumb orange uppercase">
        <?php echo do_shortcode("[breadcrumb]"); ?>
      </div> 
      <div class="rr_home_banner_row">
        <?php if (!empty($hero_title)) { ?>
        <div class="rr_home_banner_left"> 
          <h1><?php echo $hero_title; ?></h1>
        </div>
        <?php } ?>

        <div class="rr_home_banner_right d-flex justify-right">
          <div class="rr_home_banner_right_content">
          <?php echo $hero_description; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>

<?php if($select_layout == "Layout13"){ ?>
<section class="rr_comm_privacy_terms_banner rr_terms_banner rr_banner_dark ">
    <div class="container">
        <div class="rr_comm_privacy_terms_row">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>   
            <div class="rr_comm_content_pr_tr">
                <?php if (!empty($hero_title)) { ?>
                <h1><?php echo $hero_title; ?></h1>
                <?php } ?>
                <?php if (!empty($hero_sub_title)) { ?>
                <p><?php echo $hero_sub_title; ?></p>
            <?php } ?>
            </div>
            <img src="/wp-content/uploads/2023/10/white_3_img.svg" alt="white_3_img" class="light_3img">
            <img src="/wp-content/uploads/2023/10/white_8_img.svg" alt="white_8_img" class="light_8img">
        </div>
    </div>
</section>
<?php } ?>