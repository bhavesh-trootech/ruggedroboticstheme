<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ruggedrobotics
 */


?>

<?php get_header(); ?>

	<?php // variables ?>
	<?php 
		$banner_image = get_field('banner_image');
		$banner_title = get_field('banner_title');

		$category = get_the_category();
		$firstCategory = $category[0]->cat_name;

	?>
	
	
	
	<section class="rr_comm_privacy_terms_banner rr_terms_banner rr_banner_dark rr_article_banner_sec blog_banner_sec">
		<div class="container">
			<div class="rr_comm_privacy_terms_row">
				<div class="breadcrumb purple">
					<?php //echo do_shortcode("[breadcrumb]");
					 if ( function_exists('yoast_breadcrumb') ) {
		                  yoast_breadcrumb( '<p class="breadcrumbs purple" id="breadcrumbs">','</p>' );
		                }
					 ?>
				</div>  
				<div class="rr_comm_content_pr_tr">
					<p class="intro-text text_white">Posted: <?php the_time('F jS, Y'); ?></p>

					<?php if ($banner_title!='') { ?>
						<h1><?php echo $banner_title; ?></h1>
					<?php } else { ?>
						<h1><?php the_title(); ?></h1>
					<?php } ?>
					
				</div>
				<img src="/wp-content/uploads/2023/10/white_3_img.svg" alt="white_3_img" class="light_3img">
				<img src="/wp-content/uploads/2023/10/white_8_img.svg" alt="white_8_img" class="light_8img">
			</div>
		</div>
	</section> 

	<div class="single-post-content"> 
		<section class="article_single_data_sec">
			<div class="container mini_container">
				<div class="article_single_data_row comm_866_box">
					
					<?php if (has_post_thumbnail()) { ?>
						<div class="article_feature_img_box">
						<?php 
							add_image_size( 'custom_size_products', 866, 455, true);
							the_post_thumbnail('custom_size_products'); 
						?>
					    </div>
                    <?php } elseif(!empty($banner_image)) {  ?>
                    	<div class="article_feature_img_box">
						<?php echo wp_get_attachment_image( $banner_image, 'full' ); ?> 
						</div>
					<?php } else { ?>
						<div class="article_feature_img_box no-img">
						<span class="placeholder_img_text">No Image</span>
						</div>
					<?php } ?>
  
					<div class="article_single_data">
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="post-content">
							<?php the_content(); ?>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</section> 
	</div>

	<?php
    
    	// Set the arguments for the query
    	$args = array(
    	  'numberposts'		=> 3,
    	  'post_type'		=> 'post', // or 'post', 'page'
    	  'orderby' 		=> 'date', // or 'date', 'rand'
    	  'order' 		=> 'DESC', // or 'DESC'
		  'category'	=> $firstCategory,
    	);


$related_articles = get_field("related_articles", get_the_ID());
 if(!empty($related_articles)){
 	$myposts = $related_articles;
 }else{
 	// Get the posts
     $myposts = get_posts($args);
 }
      ?>


	<div class="blog-post-listing related-articles">
		<div class="container">
			<div class="related-article-heading">
				<h2>Related Articles</h2>
			</div>
			<div class="post-main d-flex flex-wrap">
				
				<?php $counter = 0; foreach($myposts as $post) {
					$counter++;
					setup_postdata( $post );

					if ($counter >= 4) {
				        break;
				    }
				?> 

				<div id="post-<?php the_ID(); ?>" class="blog-post">
					<div class="blog-inner">  
						<div class="post-image <?php if (has_post_thumbnail()) { ?>has_img<?php } else {  ?> no_img<?php } ?>">
							<?php if (has_post_thumbnail()) { ?>
								<?php 
									add_image_size( 'custom_size_products', 385, 385, true);
									the_post_thumbnail('custom_size_products'); 
								?>
							<?php } else {  ?>
								<span class="placeholder_img_text">No Image</span>
							<?php } ?>
						</div>
						<div class="post-content"> 
							<h5><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h5>
							<div class="post-content-text">
								<p><?php echo wp_trim_words( $post->post_content, 22, '...' ); ?> </p>
							</div>
							<a target="_self" href="<?php the_permalink(); ?>" class="comm_btn btn_underline rr_dark_border btn_purple"> 
								<span class="rr_color_txt">READ</span> THE ARTICLE                    
								<span class="btn_arrow">
									<svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="12.672" height="12.31" viewBox="0 0 12.672 12.31"  class="default_arrow">
										<path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(12.672) rotate(90)" fill="#ac0c99"/>
										<line id="Line_8" data-name="Line 8" x1="9.414" transform="translate(0 6.155)" fill="none" stroke="#ac0c99" stroke-width="3"/>
									</svg>
									<svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="22.061" height="12.31" viewBox="0 0 22.061 12.31" class="hover_arrow">
										<path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.061) rotate(90)" fill="#ac0c99"/>
										<line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.155)" fill="none" stroke="#ac0c99" stroke-width="3"/>
									</svg>
								</span>
							</a> 
						</div>
					</div>
				</div>
			 
				<?php } ?>

			</div>
		</div>
	</div>

		<?php 
    $page_for_posts = get_option( 'page_for_posts' );
	if( have_rows('content', $page_for_posts) ): ?>
	    <?php while( have_rows('content', $page_for_posts) ): the_row();
	      get_template_part( 'template-parts/pages/flex', get_row_layout());
	     ?>
	      <?php endwhile; ?>
     <?php endif; ?>

<?php get_footer(); ?>
