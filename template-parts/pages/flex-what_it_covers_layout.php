<?php
$title = get_sub_field('title');
$description = get_sub_field('description');
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
?>

<section id="<?php echo $section_id; ?>" class="rr_solutions_posts ptb90 <?php echo $section_class; ?>">
    <div class="container">
        <div class="hor_head_sec d-flex align-center flex-wrap">
            <?php if(!empty($title)): ?>
            <div class="hor_head_title">
                <h2><?php echo $title; ?></h2>
            </div> 
            <?php endif; ?>

            <?php if(!empty($description)): ?>
            <div class="hor_head_content">
                <?php echo $description; ?>
            </div> 
            <?php endif; ?>

        </div>

        <div class="rr_solutions_post_listing">


            <div class="post_filters d-flex flex-wrap">
                <div class="filter_left">
                    <div class="filter-inner">
                        <h6>FILTER BY SOLUTION TYPE:</h6>
                        <div class="filter_dropdown"> 
                            <span class="dropdown_value">All</span> 
                            <?php $termsSol = get_terms( array(
                                    'taxonomy'   => 'solution_category',
                                    'hide_empty' => true,
                                ) ); ?>
                           <?php if(!empty($termsSol)): ?>
                            <ul class="dropdown">
                                <li data-slug="all">All</li>
                                <?php foreach ( $termsSol as $term ) { ?>
                                <li data-id="<?php echo $term->term_id; ?>" data-slug="<?php echo $term->slug; ?>"><?php echo $term->name; ?></li>
                                <?php } ?>
                            </ul> 
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="filter_right">
                    <div class="filter-inner">
                        <h6>SEARCH FOR SOLUTIONS</h6>
                        <div class="filter_serach"> 
                            <form action="" method="post">
                                <div class="form-input">
                                    <input type="text" placeholder="Type Here" name="search_solution" id="search_solution">
                                    <input type="submit" value="">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            $argsSol = array(
              'post_type' => 'solutions',
              'post_status' => 'publish',
              'posts_per_page' => -1,
              'order' => 'DESC',
           );
            $querySol = new WP_Query( $argsSol );
           ?>

            <?php if ( $querySol->have_posts() ) : ?>
                <div class="solutions_posts d-flex flex-wrap">
                <?php
                while ( $querySol->have_posts() ) :
                $querySol->the_post();
                $postId = get_the_ID();
                ?>
                <div class="solutions_post <?php echo $postId; ?>">
                    <div class="solutions_post_inner"> 
                        <div class="solutions_post_image d-flex <?php if (has_post_thumbnail()) { ?>has_img<?php } else {  ?> no_img<?php } ?>">
                        
                            <?php if ( has_post_thumbnail() ) { ?>
                                <?php the_post_thumbnail( "full" );  ?>
                            <?php  } else { ?>
                                <span class="placeholder_img_text">No Image</span>
                            <?php } ?>
                             
                            <div class="solution_button">
                                <a target="_self" href="<?php echo home_url('/pilot/'); ?>" class="comm_btn btn_underline btn_underline_white rr_dark_border btn_orange">
                                    GET STARTED     
                                    <span class="right_arrow"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" class="solution_default_arrow">
                                            <g id="Group_1519" data-name="Group 1519" transform="translate(1.707 -0.5)">
                                                <path id="Path_310238" data-name="Path 310238" d="M4.163,8.639h6.155V3.983l6.518,6.155-6.518,6.155V11.638H4.163ZM0,21H21V0H0Z" transform="translate(-1.707 0.5)" fill="#fff"/>
                                            </g>
                                        </svg> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="21" viewBox="0 0 38 21" class="solution_hover_arrow">
                                            <path id="Path_310238" data-name="Path 310238" d="M7.97,8.639H23.514V3.984l6.517,6.154-6.517,6.155V11.639H7.97ZM0,21H38V0H0Z" fill="#fff"/>
                                        </svg> 
                                    </span>
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
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                </div>
                <?php else : ?>
                    <p><?php esc_html_e( 'Sorry, no solutions found.' ); ?></p>
                <?php  endif; ?>

            
        </div>
    </div>
</section>