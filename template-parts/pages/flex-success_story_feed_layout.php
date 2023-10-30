<?php
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>

<section id="<?php echo $section_id; ?>" class="rr_sucess_story_list_sec <?php echo $section_class; ?>">
  <div class="container">
    <div class="rr_sucess_story_list_row">

    <div class="filter_left filter_case_study">
                    <div class="filter-inner">
                        <h6>FILTER BY:</h6>
                        <div class="filter_dropdown"> 
                            <span class="dropdown_value">All</span> 
                            <ul class="dropdown">
                                <li class="mostrecent">Most Recent</li>
                                <li class="mostpopular">Most Popular</li>
                                <li class="allcasestudy">All</li>
                            </ul> 
                        </div>
                    </div>
      </div>

      <?php
$argscheckmax = array(
        'post_type' => 'case_studies',
        'post_status' => 'publish',
        'orderby' => 'meta_value_num',
        'meta_key' => 'casestudy_custom_count',
        'posts_per_page' => -1,
    );

    $querymax = new WP_Query($argscheckmax);
    $querymaxPost = $querymax->found_posts;

    if($querymaxPost>=4){
     $maxPopular = ceil($querymaxPost/4);
    }else{
     $maxPopular = 1;
    }



      $argsAllCaseStudy = array(
        'post_type' => 'case_studies',
        'post_status' => 'publish',
        'paged' => -1,
    );
    $allcasestudy_posts = new WP_Query( $argsAllCaseStudy );

    $argsCaseStudy = array(
        'post_type' => 'case_studies',
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'paged' => 1,
    );
    $casestudy_posts = new WP_Query( $argsCaseStudy );
    $countTotlePost = $allcasestudy_posts->found_posts;
    if($countTotlePost>=4){
     $maxPages = ceil($countTotlePost/4);
    }else{
     $maxPages = 1;
    }
    ?>
    <?php if ( $casestudy_posts->have_posts() ) : ?>
      <ul class="rr_sucess_story_list_data d-flex align-start justify-start flex-wrap">
       <?php while ( $casestudy_posts->have_posts() ) : $casestudy_posts->the_post();
        $postId = get_the_ID();
        $link = get_field("link", $postId);
        ?>
        <li class="rr_sucess_story_single <?php echo get_post_meta($postId, 'casestudy_custom_count', true); ?>">
        	<?php if (has_post_thumbnail( $postId ) ): ?>
              <figure class="rr_sucess_story_single_img">
                <?php the_post_thumbnail( "full" ); ?>
              </figure>
              <?php else: ?>
              <div class="rr_sucess_story_single_img no_img">
               <span class="placeholder_img_text">No Image</span>
              </div>
            <?php endif; ?>

              <div class="rr_sucess_story_content d-flex flex-direction flex-wrap  align-start">
                  <h3><?php the_title(); ?></h3>
                  <?php the_content(); ?>
                  <?php if(!empty($link)): ?>
                  <a onclick="updateCount(<?php echo $postId; ?>)" id="caseStudyReadMore" data-postid="<?php echo $postId; ?>"  href="<?php echo $link; ?>" class="comm_btn btn_underline rr_dark_border btn_orange"> <span class="rr_color_txt">Read  </span> the case study 
                    <span class="btn_arrow">
                        <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="12.672" height="12.31" viewBox="0 0 12.672 12.31"  class="default_arrow">
                          <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(12.672) rotate(90)" fill="#f25c07"/>
                          <line id="Line_8" data-name="Line 8" x1="9.414" transform="translate(0 6.155)" fill="none" stroke="#f25c07" stroke-width="3"/>
                        </svg>

                        <svg id="Group_2985" class="hover_arrow" data-name="Group 2985" xmlns="http://www.w3.org/2000/svg" width="22.063" height="12.31" viewBox="0 0 22.063 12.31">
                            <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.063) rotate(90)" fill="#f25c07"></path>
                            <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.156)" fill="none" stroke="#f25c07" stroke-width="3"></line>
                        </svg>
                    </span>
                  </a>
                  <?php endif; ?>
              </div>
        </li>
    <?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
      </ul>
      <?php endif; ?>

      <div class="btn_load_more_box d-flex justify-center">
        <a id="btn_load_more" class="btn_load_more comm_btn down_arrow_effect btn_outline btn_orange" data-maxp="<?php echo $maxPages; ?>" data-popularmaxp="<?php echo $maxPopular; ?>">Load more					
                <span class="btn_arrow">
                  <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17.5" viewBox="0 0 17 17.5"  class="default_arrow">
                    <g id="Group_2986" data-name="Group 2986" transform="translate(-132.75 -11.75)">
                      <path id="Polygon_6" data-name="Polygon 6" d="M8.5,0,17,9H0Z" transform="translate(149.75 29.25) rotate(180)" fill="#1c110a"/>
                      <line id="Line_6" data-name="Line 6" x1="13" transform="translate(141.25 11.75) rotate(90)" fill="none" stroke="#1c110a" stroke-width="3"/>
                    </g>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="17" height="26" viewBox="0 0 17 26"  class="hover_arrow">
                      <g id="Group_2986" data-name="Group 2986" transform="translate(-132.75 -7.5)">
                        <path id="Polygon_6" data-name="Polygon 6" d="M8.5,0,17,9H0Z" transform="translate(149.75 33.5) rotate(180)" fill="#f25c07"/>
                        <line id="Line_5" data-name="Line 5" y1="22" transform="translate(141.25 7.5)" fill="none" stroke="#f25c07" stroke-width="3"/>
                      </g>
                  </svg>
                </span>
        </a>
      </div>

    </div>
  </div>

</section>