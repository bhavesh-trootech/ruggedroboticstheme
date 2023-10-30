<?php
$add_title = get_sub_field('add_title');
$add_subtext = get_sub_field('add_subtext');
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
$count = count(get_sub_field('add_services')); 
$indexLast = $count-1;
?>
<!-- Pricing Overview section -->
<section id="<?php echo $section_id; ?>" class="rr_full_service_sec <?php echo $section_class; ?>">
    <div class="container">
        <div class="rr_full_service_top">
           <?php if(!empty($add_title)): ?>
            <h2><?php echo $add_title; ?></h2>
            <?php endif; ?>
            <?php if(!empty($add_subtext)): ?>
            <p><?php echo $add_subtext; ?></p>
        <?php endif; ?>
        </div>

        <?php if( have_rows('add_services') ): ?>
        <div class="pricing_overview_card">
            <?php $i = 1; while ( have_rows('add_services') ) : the_row();
              $add_service_subtext = get_sub_field('add_service_subtext');
              $add_service_title = get_sub_field('add_service_title');
             ?>
             <?php if ($i < $count): ?>
            <div class="pricing_overview_card_box ">
                <?php if(!empty($add_service_subtext)): ?>
                <span><?php echo $add_service_subtext; ?></span>
                 <?php endif; ?>

                <?php if(!empty($add_service_title)): ?>
                <h4><?php echo $add_service_title; ?></h4>
                 <?php endif; ?>

            </div>
        <?php endif; ?>
          <?php $i++; endwhile; ?>

            <?php $rows = get_sub_field( 'add_services' ); // get all the rows from and page ID
                $end_row = end( $rows ); // get the end row
                $add_service_subtext = $end_row['add_service_subtext' ]; // get the sub field value 
                $add_service_title = $end_row['add_service_title' ]; // get the sub field value 
                $add_link = $end_row['add_link' ];
                if(!empty($add_link)):
                $link_url = $add_link['url'];
                $link_title = $add_link['title'];
                $link_target = $add_link['target'] ? $add_link['target'] : '_self';
                endif;
                ?>

            <div class="pricing_overview_card_box dark_red">
                <span><?php echo $add_service_subtext; ?></span>
                <h4><?php echo $add_service_title; ?></h4>
                <?php if(!empty($link_url)): ?>
                <a target="<?php echo $link_target; ?>" href="<?php echo $link_url; ?>" class="comm_btn btn_underline btn_underline_white rr_dark_border btn_red"><?php echo $link_title; ?>
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
        <?php endif; ?>

    </div>
</section>