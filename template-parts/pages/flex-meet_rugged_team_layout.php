<?php
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
$title = get_sub_field('title');
?>
<!--  section meet team rugged start -->
<div id="<?php echo $section_id; ?>" class="meet_team_rugged_sect_start <?php echo $section_class; ?>">
    <div class="container">

        <?php if(!empty($title)): ?>
            <h2 class="heading text-center"><?php echo $title; ?></h2>
        <?php endif; ?>


         <?php if( have_rows('team_members') ): ?>
            <div class="meet_team_rugged_sect_inner">
            <div class="three_col_main">

               
                <!-- row start -->
                <div class="slicer owl-carousel"> 

                    <?php $counter=0; while ( have_rows('team_members') ) : the_row();
                      $photo = get_sub_field('photo');
                      $name = get_sub_field('name');
                      $designation = get_sub_field('designation');
                      $linkedin_profile_link = get_sub_field('linkedin_profile_link');
                     ?>
                     <?php if ($counter % 6 == 0) : ?>
                        <div class="slider-inner d-flex flex-wrap">
                    <?php endif; ?>
                    <div class="content">
                        <div class="content-inner"> 
                            <div class="image-box">
                                <?php if(!empty($photo)): ?>
                                <div class="image">
                                <?php echo wp_get_attachment_image( $photo, 'full' ); ?>
                                </div>
                                <?php else: ?>
                                <div class="image">
                                <span class="noImage">FPO</span>
                                </div>
                                <?php endif; ?>

                                <div class="information">
                                <?php if(!empty($name)): ?>
                                    <p class="tilte"><?php echo $name; ?></p>
                                    <?php endif; ?>
                                    
                                    <?php if(!empty($designation)): ?>
                                    <div class="position"><?php echo $designation; ?></div>
                                    <?php endif; ?>

                                </div>
                            </div>
                            
                            <?php if(!empty($linkedin_profile_link)): ?>
                            <div class="linkdin_share">
                                <!-- likdin start -->
                                <a target="_blank" href="<?php echo $linkedin_profile_link; ?>" class="comm_btn white_border btn_outline btn_orange"> 	
                                    <span class="btn_arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21.406" height="20.457" viewBox="0 0 21.406 20.457" class="default_arrow">
                                                <path id="linkedin" d="M4.864,154.647v13.81H.265v-13.81Zm.293-4.264a2.38,2.38,0,0,1-2.592,2.383H2.536A2.371,2.371,0,0,1,0,150.383,2.4,2.4,0,0,1,2.592,148,2.372,2.372,0,0,1,5.156,150.383Zm16.249,10.159v7.915H16.821v-7.386c0-1.853-.669-3.122-2.327-3.122a2.513,2.513,0,0,0-2.355,1.672,3.457,3.457,0,0,0-.153,1.129v7.706H7.4c.056-12.514,0-13.81,0-13.81h4.585v2.007h-.028a4.551,4.551,0,0,1,4.167-2.327C19.148,154.327,21.406,156.305,21.406,160.542Z" transform="translate(0 -148)" fill="#fff"/>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                                            <path id="Path_316952" data-name="Path 316952" d="M28.5,0V7H0v3H28.5v7l9-8.5Z" fill="#000"></path>
                                        </svg>
                                    </span>
                                </a>
                                <!-- likdin end -->
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if (($counter + 1) % 6 == 0) : ?>
                        </div>
                    <?php endif; ?>
                    <?php $counter++; endwhile; ?>
                    
                </div>    
                <!-- row end -->
                                
            </div>
        </div>
    <?php endif; ?>
    </div>
</div>
</div>

<?php if(is_page("about")): ?>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>

 
<?php endif; ?>