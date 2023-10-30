<?php 
//solution filters
add_action('wp_ajax_filter_solution_by_select', 'filter_solution_by_select');
add_action('wp_ajax_nopriv_filter_solution_by_select', 'filter_solution_by_select');
function filter_solution_by_select() {
    $catslug = $_POST['catslug'];

    $termsSolN = get_terms( array(
        'taxonomy'   => 'solution_category',
        'hide_empty' => true,
    ) );
   foreach ( $termsSolN as $termsh ) {
	   $termsCats[] = $termsh->slug;
	  }

    if($catslug == "all"){
    $args = array(
        'post_type' => 'solutions',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'tax_query' => array(
        array(
            'taxonomy' => 'solution_category',
            'field'    => 'slug',
            'terms'    => $termsCats
        )
      )
    );
   }else{
   	$args = array(
        'post_type' => 'solutions',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'tax_query' => array(
        array(
            'taxonomy' => 'solution_category',
            'field'    => 'slug',
            'terms'    => array( $catslug )
        )
      )
    );
   }


    $solutions_posts = new WP_Query( $args );
    ?>

    <?php if ($solutions_posts->have_posts()) {  

        while ($solutions_posts->have_posts()){  
            $solutions_posts->the_post();  
            $postId = get_the_ID();
             ?>
             <div class="solutions_post">
                    <div class="solutions_post_inner"> 
                        <div class="solutions_post_image d-flex">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( "full" ); } ?>
                            <div class="solution_button">
                                <a target="_self" href="<?php echo home_url('/pilot/'); ?>" class="comm_btn btn_underline btn_underline_white rr_dark_border btn_orange">
                                    GET STARTED     
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" class="default_arrow">
                                    <g id="Group_1519" data-name="Group 1519" transform="translate(1.707 -0.5)">
                                        <path id="Path_310238" data-name="Path 310238" d="M4.163,8.639h6.155V3.983l6.518,6.155-6.518,6.155V11.638H4.163ZM0,21H21V0H0Z" transform="translate(-1.707 0.5)" fill="#fff"/>
                                    </g>
                                </svg> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="21" viewBox="0 0 38 21">
                                    <path id="Path_310238" data-name="Path 310238" d="M7.97,8.639H23.514V3.984l6.517,6.154-6.517,6.155V11.639H7.97ZM0,21H38V0H0Z" fill="#fff"/>
                                </svg> 
                                </a>
                            </div>
                        </div>
                        <div class="solutions_post_content bg-light-cream">
                           <?php $termsSols = get_the_terms( $postId , array( 'solution_category') ); ?>
                           <?php if(!empty($termsSols)): ?>
                            <div class="cat_list d-flex">
                                <?php foreach ($termsSols as $termVal) { 
                                   $category_color_class = get_field( 'category_color_class', 'solution_category_' . $termVal->term_id );
                                    ?>
                                    <span class="category <?php echo $category_color_class; ?>"><?php echo $termVal->name; ?></span>
                                <?php } ?>
                            </div>
                           <?php endif; ?>

                            <h3><a href="<?php echo home_url('/pilot/'); ?>"><?php the_title(); ?></a></h3>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
             <?php 
        }  
    } 

    wp_reset_postdata();
    ?>

 <?php
    wp_die();
}

//search solution by search input
//solution filters
add_action('wp_ajax_filter_solution_by_input', 'filter_solution_by_input');
add_action('wp_ajax_nopriv_filter_solution_by_input', 'filter_solution_by_input');
function filter_solution_by_input() {
    $searchWord = $_POST['searchWord'];

    $termsSolN = get_terms( array(
        'taxonomy'   => 'solution_category',
        'hide_empty' => true,
    ) );
   foreach ( $termsSolN as $termsh ) {
	   $termsCats[] = strtolower($termsh->name);
	  }
	  $searchWordLower = strtolower($searchWord);

	  if (in_array($searchWordLower, $termsCats)){
	  	$capitalCat = ucfirst($searchWordLower);

		  	$args = array(
	        'post_type' => 'solutions',
	        'post_status' => 'publish',
	        'posts_per_page' => -1,
	        'taxonomy' => 'solution_category',
	        'term' =>  $capitalCat
	    );

	  } else{
	  	$args = array(
	    'post_type' => 'solutions',
	    's' => $searchWord, 
	    'post_status' => 'publish',
	    'posts_per_page' => -1, 
	    );

	  }

    $solutions_posts = new WP_Query( $args );
    ?>

    <?php if ($solutions_posts->have_posts()) {  

        while ($solutions_posts->have_posts()){  
            $solutions_posts->the_post();  
            $postId = get_the_ID();
             ?>
             <div class="solutions_post">
                    <div class="solutions_post_inner"> 
                        <div class="solutions_post_image d-flex">
                            <?php if ( has_post_thumbnail() ) { the_post_thumbnail( "full" ); } ?>
                            <div class="solution_button">
                                <a target="_self" href="<?php echo home_url('/pilot/'); ?>" class="comm_btn btn_underline btn_underline_white rr_dark_border btn_orange">
                                    GET STARTED     
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" class="default_arrow">
                                    <g id="Group_1519" data-name="Group 1519" transform="translate(1.707 -0.5)">
                                        <path id="Path_310238" data-name="Path 310238" d="M4.163,8.639h6.155V3.983l6.518,6.155-6.518,6.155V11.638H4.163ZM0,21H21V0H0Z" transform="translate(-1.707 0.5)" fill="#fff"/>
                                    </g>
                                </svg> 
                                <svg xmlns="http://www.w3.org/2000/svg" width="38" height="21" viewBox="0 0 38 21">
                                    <path id="Path_310238" data-name="Path 310238" d="M7.97,8.639H23.514V3.984l6.517,6.154-6.517,6.155V11.639H7.97ZM0,21H38V0H0Z" fill="#fff"/>
                                </svg> 
                                </a>
                            </div>
                        </div>
                        <div class="solutions_post_content bg-light-cream">
                           <?php $termsSols = get_the_terms( $postId , array( 'solution_category') ); ?>
                           <?php if(!empty($termsSols)): ?>
                            <div class="cat_list d-flex">
                                <?php foreach ($termsSols as $termVal) { 
                                   $category_color_class = get_field( 'category_color_class', 'solution_category_' . $termVal->term_id );
                                    ?>
                                    <span class="category <?php echo $category_color_class; ?>"><?php echo $termVal->name; ?></span>
                                <?php } ?>
                            </div>
                           <?php endif; ?>

                            <h3><a href="<?php echo home_url('/pilot/'); ?>"><?php the_title(); ?></a></h3>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
             <?php 
        }  
    }else{
        echo '<p class="noposts">No solutions found.</p>';
    }
    wp_reset_postdata();
    ?>

 <?php
    wp_die();
}

//case study increment count 
add_action('wp_ajax_update_count_case_study', 'update_count_case_study');
add_action('wp_ajax_nopriv_update_count_case_study', 'update_count_case_study');
function update_count_case_study() {
    $postId = $_POST['postId'];

    $count = (int)get_post_meta($postId, 'casestudy_custom_count', true);
      update_post_meta($postId, 'casestudy_custom_count', $count + 1);
      return 'Count incremented'.$count;
die();
}
/****/

//case study load more ajax
function load_more_casestudy() {
    $page = $_POST['page'];
    $popular = $_POST['popular'];

    $args = array(
        'post_type' => 'case_studies',
        'post_status' => 'publish',
        'paged' => $page,
        'posts_per_page' => 4,
    );

    if ($popular == "true") {
        $args['orderby'] = 'meta_value_num'; // Change to your custom field for popularity
        $args['meta_key'] = 'casestudy_custom_count'; // Change to your custom field for popularity
    } else {
        $args['orderby'] = 'date';
        $args['order'] = 'DESC';
    }

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
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
            <?php
        endwhile;
    endif;

    wp_reset_postdata();

    ?>
    <script>


    </script>
    <?php
    die();
}
add_action('wp_ajax_load_more_casestudy', 'load_more_casestudy');
add_action('wp_ajax_nopriv_load_more_casestudy', 'load_more_casestudy');
