<?php
$subtitle = get_sub_field('subtitle');
$title = get_sub_field('title');
$description = get_sub_field('description');
$select_case_studty = get_sub_field('select_case_studty');
$button = get_sub_field('button');
if(!empty($button)):
$btn1_url = $button['url'];
$btn1_title = $button['title'];
$btn1_target = $button['target'] ? $button['target'] : '_self';
endif;
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>

<section id="<?php echo $section_id; ?>" class="rr_sucess_story_list_sec rr_sucess_story_list_partner_sec <?php echo $section_class; ?>">
  <div class="container">
    <div class="hor_head_sec d-flex align-center flex-wrap">
        <div class="hor_head_title">
           <?php if(!empty($subtitle)): ?>
            <span class="subtitle"><?php echo $subtitle; ?></span>
            <?php endif; ?>
            
            <?php if(!empty($title)): ?>
            <h2><?php echo $title; ?></h2>
            <?php endif; ?>
        </div>  

        <?php if(!empty($description)): ?>
        <div class="hor_head_content">
            <?php echo $description; ?>
        </div>
        <?php endif; ?>

    </div>

    <div class="rr_sucess_story_list_row">
    <?php
        $featured_posts = get_sub_field('select_case_studty');
        if( $featured_posts ): ?>
      <ul class="rr_sucess_story_list_data d-flex align-start justify-start flex-wrap">
        <?php foreach( $featured_posts as $post ): 
        setup_postdata($post); 
        $postId = get_the_ID();
        $link = get_field("link", $postId);
        ?>
        <li class="rr_sucess_story_single">
          <div class="rr_sucess_story_single_inner"> 
            <?php if (has_post_thumbnail( $postId ) ): ?>
            <figure class="rr_sucess_story_single_img">
                <?php the_post_thumbnail( "full" ); ?>
            </figure>
            <?php endif; ?>

            <div class="rr_sucess_story_content d-flex flex-direction flex-wrap  align-start">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
                 <?php if(!empty($link)): ?>
                <a href="<?php echo $link; ?>" class="comm_btn btn_underline rr_dark_border btn_orange ">
                <span class="rr_color_txt">Read </span> the case study <span class="btn_arrow">
                    <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="12.672" height="12.31" viewBox="0 0 12.672 12.31" class="default_arrow">
                    <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(12.672) rotate(90)" fill="#f25c07"></path>
                    <line id="Line_8" data-name="Line 8" x1="9.414" transform="translate(0 6.155)" fill="none" stroke="#f25c07" stroke-width="3"></line>
                    </svg>
                    <svg id="Group_2985" class="hover_arrow" data-name="Group 2985" xmlns="http://www.w3.org/2000/svg" width="22.063" height="12.31" viewBox="0 0 22.063 12.31">
                    <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.063) rotate(90)" fill="#f25c07"></path>
                    <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.156)" fill="none" stroke="#f25c07" stroke-width="3"></line>
                    </svg>
                </span>
                </a>
                <?php endif; ?>
            </div>

          </div>
        </li>
         <?php endforeach; ?>
      </ul>
       <?php wp_reset_postdata(); ?>
      <?php endif; ?>

      <?php if(!empty($btn1_url)): ?>
      <div class="btn_load_more_box d-flex">
        <a target="<?php echo $btn1_target; ?>" href="<?php echo $btn1_url; ?>" id="btn_load_more" class="btn_load_more comm_btn down_arrow_effect btn_outline btn_orange"><?php echo $btn1_title; ?>
        <span class="btn_arrow">
          <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
              <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
          </svg>
          <svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
                <g id="Group_2985" data-name="Group 2985" transform="translate(-194.5 -12)">
                    <path id="Polygon_6" data-name="Polygon 6" d="M8.5,0,17,9H0Z" transform="translate(232 12) rotate(90)" fill="#f25c07"></path>
                    <line id="Line_5" data-name="Line 5" x1="32" transform="translate(194.5 20.5)" fill="none" stroke="#f25c07" stroke-width="3"></line>
                </g>
          </svg>
        </span>
        </a>
      </div>
    <?php endif; ?>

    </div>

  </div>
</section>