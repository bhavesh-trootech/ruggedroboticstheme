<?php
$select_layout = get_sub_field('select_layout');
$add_title = get_sub_field('add_title');
$add_subtext = get_sub_field('add_subtext');
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>

<?php if($select_layout == "Layout design1") { ?>
<!--  Roles (Ready for You) section -->
<section id="<?php echo $section_id; ?>" class="common_tab_section delivers_tab_sec <?php echo $section_class; ?>">
    <div class="container">
        <div class="common_tab_top_content">
            <?php if(!empty($add_title)): ?>
            <div class="common_tab_top_lft">
                <h2><?php echo $add_title; ?></h2>
            </div>
            <?php endif; ?>
            <?php if(!empty($add_subtext)): ?>
            <div class="common_tab_top_rgt">
            <?php echo $add_subtext; ?>
            </div>
            <?php endif; ?>
        </div>

        <?php if( have_rows('add_tabs') ): ?>
        <div class="common_tab_row">
            <div class="common_tab_inner_left">
                <div class="tab-menu">
                    <ul>
                        <?php $i=1 ;while ( have_rows('add_tabs') ) : the_row();
                          $tab_title = get_sub_field('tab_title');
                          $add_image = get_sub_field('add_image');
                          $add_big_title = get_sub_field('add_big_title');
                          $add_description = get_sub_field('add_description');
                          $add_link = get_sub_field('add_link');
                          if(!empty($add_link)):
                          $tab_url = $add_link['url'];
                          $link_title = $add_link['title'];
                          $tab_target = $add_link['target'] ? $add_link['target'] : '_self';
                          endif;
                         ?>
                        <li><a href="javascript:void(0)" class="tab-a rfyou <?php if($i == 1) { echo "active-a"; } ?>" data-id="tab<?php echo $i; ?>"><?php echo $tab_title; ?></a>
                            <div class="common_tab_inner_content desk-none">
                                <div class="tab rfyou <?php if($i == 1) { echo "tab-active"; } ?>" data-id="tab<?php echo $i; ?>">
                                    <?php if(!empty($add_image)): ?>
                                    <figure>
                                        <?php echo wp_get_attachment_image( $add_image, 'full' ); ?>
                                    </figure>
                                    <?php endif; ?>
                                    <?php if(!empty($add_big_title)): ?>
                                    <h3><?php echo $add_big_title; ?></h3>
                                    <?php endif; ?>
                                    <?php if(!empty($add_description)): ?>
                                    <p><?php echo $add_description; ?></p>
                                    <?php endif; ?>

                                    <?php if(!empty($add_link['url'])): ?>
                                    <a target="<?php echo $tab_target; ?>" href="<?php echo $tab_url; ?>" class="comm_btn btn_underline rr_dark_border btn_blue learnmore_btn"><?php echo $link_title; ?>
                                    <span class="btn_arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                                            <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#FFF"/>
                                        </svg>
                                         <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="22.061" height="12.31" viewBox="0 0 22.061 12.31" class="hover_arrow">
                                <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.061) rotate(90)" fill="#002a38"/>
                                <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.155)" fill="none" stroke="#002a38" stroke-width="3"/>
                            </svg>
                                    </span>
                                </a>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </li>
                        <?php $i++; endwhile; ?>
                    </ul>
                </div>
            </div>

            <div class="common_tab_inner_right">
             <div class="common_tab_inner_content mob-none">
                <?php $b=1; while ( have_rows('add_tabs') ) : the_row();
                          $tab_title = get_sub_field('tab_title');
                          $add_image = get_sub_field('add_image');
                          $add_big_title = get_sub_field('add_big_title');
                          $add_description = get_sub_field('add_description');
                          $add_link = get_sub_field('add_link');
                          if(!empty($add_link)):
                          $tab_url = $add_link['url'];
                          $link_title2 = $add_link['title'];
                          $tab_target = $add_link['target'] ? $add_link['target'] : '_self';
                          endif;
                        ?>
                <div class="tab rfyou <?php if($b == 1) { echo "tab-active"; } ?>" data-id="tab<?php echo $b; ?>">
                    <?php if(!empty($add_image)): ?>
                    <figure>
                        <?php echo wp_get_attachment_image( $add_image, 'full' ); ?>
                    </figure>
                    <?php endif; ?>
                    <?php if(!empty($add_big_title)): ?>
                    <h3><?php echo $add_big_title; ?></h3>
                    <?php endif; ?>
                    <?php if(!empty($add_description)): ?>
                    <p><?php echo $add_description; ?></p>
                    <?php endif; ?>
                    <?php if(!empty($add_link['url'])): ?>
                        <a target="<?php echo $tab_target; ?>" href="<?php echo $tab_url; ?>" class="comm_btn btn_underline rr_dark_border btn_blue learnmore_btn"><?php echo $link_title2; ?>
                            <span class="btn_arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                                    <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#FFF"/>
                                </svg>
                                <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="22.061" height="12.31" viewBox="0 0 22.061 12.31" class="hover_arrow">
                                <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.061) rotate(90)" fill="#002a38"/>
                                <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.155)" fill="none" stroke="#002a38" stroke-width="3"/>
                            </svg>
                            </span>
                        </a> 
                     <?php endif; ?>
                </div>
                <?php $b++; endwhile; ?>

             </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php } elseif($select_layout == "Layout design2") { ?>
        <section id="<?php echo $section_id; ?>" class="common_tab_section ready_for_everything test5 <?php echo $section_class; ?>">
    <div class="container">
        <div class="common_tab_top_content">
             <?php if(!empty($add_title)): ?>
            <div class="common_tab_top_lft">
               <h2><?php echo $add_title; ?></h2>
            </div>
            <?php endif; ?>
            <?php if(!empty($add_subtext)): ?>
            <div class="common_tab_top_rgt">
            <?php echo $add_subtext; ?>
            </div>
            <?php endif; ?>
        </div>

        <?php if( have_rows('add_tabs') ): ?>
        <div class="common_tab_row">
            <div class="common_tab_inner_left">
                <div class="tab-menu">
                    <ul>
                        <?php $r=1 ;while ( have_rows('add_tabs') ) : the_row();
                          $tab_title = get_sub_field('tab_title');
                          $add_image = get_sub_field('add_image');
                          $add_big_title = get_sub_field('add_big_title');
                          $add_description = get_sub_field('add_description');
                          $add_link = get_sub_field('add_link');
                          if(!empty($add_link)):
                          $tab_url = $add_link['url'];
                          $link_title = $add_link['title'];
                          $tab_target = $add_link['target'] ? $add_link['target'] : '_self';
                          endif;
                         ?>
                        <li><a href="javascript:void(0)" class="tab-a rfe <?php if($r == 1) { echo "active-a"; } ?>" data-id="tab2_<?php echo $r; ?>"><?php echo $tab_title; ?></a>
                            <div class="common_tab_inner_content desk-none">
                                <div class="tab rfe <?php if($r == 1) { echo "tab-active"; } ?>" data-id="tab2_<?php echo $r; ?>">
                                    <?php if(!empty($add_image)): ?>
                                    <figure>
                                        <?php echo wp_get_attachment_image( $add_image, 'full' ); ?>
                                    </figure>
                                    <?php endif; ?>
                                    <?php if(!empty($add_big_title)): ?>
                                    <h3><?php echo $add_big_title; ?></h3>
                                    <?php endif; ?>
                                    <?php if(!empty($add_description)): ?>
                                    <p><?php echo $add_description; ?></p>
                                    <?php endif; ?>

                                    <?php if(!empty($add_link['url'])): ?>
                                    <a target="<?php echo $tab_target; ?>" href="<?php echo $tab_url; ?>" class="comm_btn btn_underline rr_dark_border btn_blue bg_orange learnmore_btn"><?php echo $link_title; ?>
                                    <span class="btn_arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                                            <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#FFF"/>
                                        </svg>
                                        <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="22.061" height="12.31" viewBox="0 0 22.061 12.31"  class="hover_arrow">
                                            <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.061) rotate(90)" fill="#792f11"/>
                                            <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.155)" fill="none" stroke="#792f11" stroke-width="3"/>
                                        </svg>
                                    </span>
                                </a>
                                <?php endif; ?>
                                </div>
                            </div>
                        </li>
                         <?php $r++; endwhile; ?>
                    </ul>
                </div>
            </div>

            <div class="common_tab_inner_right">
             <div class="common_tab_inner_content mob-none">
                <?php $t=1; while ( have_rows('add_tabs') ) : the_row();
                          $tab_title = get_sub_field('tab_title');
                          $add_image = get_sub_field('add_image');
                          $add_big_title = get_sub_field('add_big_title');
                          $add_description = get_sub_field('add_description');
                          $add_link = get_sub_field('add_link');
                          if(!empty($add_link)):
                          $tab_url = $add_link['url'];
                          $link_title2 = $add_link['title'];
                          $tab_target = $add_link['target'] ? $add_link['target'] : '_self';
                          endif;
                        ?>
                <div class="tab rfe <?php if($t == 1) { echo "tab-active"; } ?>" data-id="tab2_<?php echo $t; ?>">
                    <?php if(!empty($add_image)): ?>
                    <figure>
                        <?php echo wp_get_attachment_image( $add_image, 'full' ); ?>
                    </figure>
                    <?php endif; ?>
                    <?php if(!empty($add_big_title)): ?>
                    <h3><?php echo $add_big_title; ?></h3>
                    <?php endif; ?>
                    <?php if(!empty($add_description)): ?>
                    <p><?php echo $add_description; ?></p>
                    <?php endif; ?>
                    <?php if(!empty($add_link['url'])): ?>
                    <a target="<?php echo $tab_target; ?>" href="<?php echo $tab_url; ?>" class="comm_btn btn_underline rr_dark_border btn_blue bg_orange learnmore_btn"><?php echo $link_title2; ?>
                        <span class="btn_arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                                <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#FFF"/>
                            </svg>
                            <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="22.061" height="12.31" viewBox="0 0 22.061 12.31"  class="hover_arrow">
                                            <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.061) rotate(90)" fill="#792f11"/>
                                            <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.155)" fill="none" stroke="#792f11" stroke-width="3"/>
                                        </svg>
                        </span>
                    </a>
                    <?php endif; ?>
                </div>
                 <?php $t++; endwhile; ?>

             </div>
            </div>
        </div>
    <?php endif; ?>

 
    </div>
</section>
    
<?php } ?>