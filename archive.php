<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ruggedrobotics
 */

get_header();
?>

<?php // Variables ?>
<?php
$description = get_the_archive_description();
$category = get_category( get_query_var( 'cat' ) );
$cat_id = $category->term_id;
$banner_title = get_field('banner_title',  'category_' . $cat_id);

	$page_for_posts = get_option( 'page_for_posts' ); 
   	$banner_content = get_field('banner_content', $page_for_posts); 
?>

<?php if ($description!='' || $banner_title!='') { ?>
	<section id="" class="pilot_project_sec partner_banner_sec blog_banner_sec ">
	<div class="container">

			<?php //echo do_shortcode("[breadcrumb]");
                if ( function_exists('yoast_breadcrumb') ) {
                  yoast_breadcrumb( '<p class="breadcrumbs purple" id="breadcrumbs">','</p>' );
                }
			 ?>
	
		<div class="pilot_project_sec_row d-flex">
			<?php if ($banner_title!='') { ?>
				<div class="pilot_project_left">
					<h1><?php echo $banner_title; ?></h1>
				</div>
			<?php } ?>
			<?php if ( $description ) : ?>
				<div class="pilot_project_right intro-text">
					<?php echo wp_kses_post( wpautop( $description ) ); ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	</section>
<?php } ?>
 

<section class="blogs-main">

	<div class="category-block">
			<div class="container">
				<div class="category-menu-inner">
					<?php wp_nav_menu(array(
						'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
						'container_class' => 'company-menu',         // class of container (should you choose to use it)
						'menu' => __( 'Category Menu', 'bonestheme' ),   // nav name
						'menu_class' => 'nav catgeory-nav d-flex flex-wrap',            // adding custom nav class 
						'before' => '',                                 // before the menu
						'after' => '',                                  // after the menu
						'link_before' => '',                            // before each link
						'link_after' => '',                             // after each link
						'depth' => 0                                  // limit the depth of the nav 
					)); ?>
				</div>
			</div>
			
		</div>


		<div id="main" class="blog-post-listing" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
			<div class="container">
				<div class="post-main d-flex flex-wrap"> 

					 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
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
									<p><?php echo wp_trim_words( get_the_content(get_the_ID()), 22, '...' ); ?> </p>
								</div>
								<a target="_self" href="<?php the_permalink(); ?>" class="comm_btn btn_underline rr_dark_border btn_purple"> 
									<span class="rr_color_txt">READ</span> THE ARTICLE                    
									<span class="btn_arrow">
										<svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
											<path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
										</svg>
										<svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
											<path id="Path_316952" data-name="Path 316952" d="M28.5,0V7H0v3H28.5v7l9-8.5Z" fill="#000"></path>
										</svg>
									</span>
								</a> 
							</div>

						</div>
					</div>

        <?php endwhile; ?>
       <?php else : ?>
		<article id="post-not-found" class="hentry cf">
				<header class="article-header">
					<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
			</header>
				<section class="entry-content">
					<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
			</section>
			<footer class="article-footer">
					<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
			</footer>
		</article>
        <?php endif; ?>

        <div class="page-navigation">
		<?php wp_pagenavi(); ?>
		</div>

				</div>
			</div>
	</div>

	</section><!-- #main -->

	<?php 
    $page_for_posts = get_option( 'page_for_posts' );
	if( have_rows('content', $page_for_posts) ): ?>
	    <?php while( have_rows('content', $page_for_posts) ): the_row();
	      get_template_part( 'template-parts/pages/flex', get_row_layout());
	     ?>
	      <?php endwhile; ?>
     <?php endif; ?>

<?php
//get_sidebar();
get_footer();
