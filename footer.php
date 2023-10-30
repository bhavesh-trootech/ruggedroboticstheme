<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ruggedrobotics
 */

$add_copyright_text = get_field('add_copyright_text', 'option');
$top_text = get_field('top_text', 'option');
$footer_cta = get_field('footer_cta', 'option');
$link_url = $footer_cta['url'];
$link_title = $footer_cta['title'];
$link_target = $footer_cta['target'] ? $footer_cta['target'] : '_self';
?>

<footer class="footer_wrapper">
	<div class="container">
		<div class="footer_top">
            <?php if(!empty($top_text)): ?>
			<h2><?php echo $top_text; ?></h2>
		<?php endif; ?>

		<?php if(!empty($link_url)): ?>
			<a target="<?php echo $link_target; ?>" href="<?php echo $link_url; ?>" class="comm_btn btn_outline footer_btn btn_orange"><?php echo $link_title; ?>
				<span class="btn_arrow">
				<svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
					<path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#FFF"></path>
				</svg>
				<svg xmlns="http://www.w3.org/2000/svg" width="37.5" height="17" viewBox="0 0 37.5 17" class="hover_arrow">
					<path id="Path_316952" data-name="Path 316952" d="M28.5,0V7H0v3H28.5v7l9-8.5Z" fill="#FFF"></path>
				</svg></span>
			</a>
		<?php endif; ?>
		</div>
		<div class="footer_inner">
          <?php $use_cases_menu = get_field('use_cases_menu','option'); ?>
          <?php if($use_cases_menu): ?>
			<div class="footer_col">
				<div class="footer_menu">
					<div class="footer_link">
						<ul>
							<?php $i =1; foreach( $use_cases_menu as $menurow ) {
								$menurowNew = $menurow['add_page_link'];
								$usecase_url = $menurowNew['url'];
								$usecase_title = $menurowNew['title'];
								$usecase_target = $menurowNew['target'] ? $menurowNew['target'] : '_self';
							 ?>
                            <?php if($i == 1){ ?>
							<li class="footer_title"><a target="<?php echo $usecase_target; ?>" href="<?php echo $usecase_url; ?>"><?php echo $usecase_title; ?></a></li>
						   <?php } elseif($i == 2){ ?>
							<li class="footer_sub_title"><a target="<?php echo $usecase_target; ?>" href="<?php echo $usecase_url; ?>" class="rfy"><?php echo $usecase_title; ?></a></li>
                           <?php }elseif($usecase_title == "Ready For Anything"){ ?>
							<li class="footer_sub_title btm"><a target="<?php echo $usecase_target; ?>" href="<?php echo $usecase_url; ?>"><?php echo $usecase_title; ?></a></li>
                           <?php } else{ ?>
                           <li><a target="<?php echo $usecase_target; ?>" href="<?php echo $usecase_url; ?>" class="rfy"><?php echo $usecase_title; ?></a></li>
                          <?php }  ?>

						<?php $i++; } ?>
						</ul>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<?php $work_with_rugged_menu = get_field('work_with_rugged_menu','option'); ?>
			<div class="footer_col">
				<div class="footer_menu">
					<?php if($work_with_rugged_menu): ?>
					<div class="footer_link">
						<ul>
							<?php $y =1; foreach( $work_with_rugged_menu as $menurow ) {
								$menurowNew = $menurow['add_page_link'];
								$uwwrm_url = $menurowNew['url'];
								$uwwrm_title = $menurowNew['title'];
								$uuwwrm_target = $menurowNew['target'] ? $menurowNew['target'] : '_self';
							 ?>
							 <?php if($y == 1){ ?>
							<li class="footer_title"><a target="<?php echo $uuwwrm_target; ?>" href="<?php echo $uwwrm_url; ?>"><?php echo $uwwrm_title; ?></a></li>
						   <?php } else{ ?>
                           <li><a target="<?php echo $uuwwrm_target; ?>" href="<?php echo $uwwrm_url; ?>"><?php echo $uwwrm_title; ?></a></li>
                          <?php }  ?>

						<?php $y++; } ?>
						</ul>
					</div>	
					<?php endif; ?>

					<?php $about_menu = get_field('about_menu','option'); ?>
					<?php if($about_menu): ?>
					<div class="footer_link desk pb-0">
						<ul>
							<?php $z=1; foreach( $about_menu as $menurow ) {
								$menurowNew = $menurow['add_page_links'];
								$about_url = $menurowNew['url'];
								$abou_title = $menurowNew['title'];
								$abou_target = $menurowNew['target'] ? $menurowNew['target'] : '_self';
							 ?>
							 <?php if($z == 1){ ?>
							<li class="footer_title"><a target="<?php echo $abou_target; ?>" href="<?php echo $about_url; ?>"><?php echo $abou_title; ?></a></li>
						   <?php } else{ ?>
                           <li><a target="<?php echo $abou_target; ?>" href="<?php echo $about_url; ?>"><?php echo $abou_title; ?></a></li>
                          <?php }  ?>
						 <?php $z++; } ?>
						</ul>
					</div>
					<?php endif; ?>

				</div>
			</div>
			<div class="footer_col mob">
				<div class="footer_menu">
					<div class="footer_link pb-0">
						<?php $about_menuMob = get_field('about_menu','option'); ?>
					<?php if($about_menuMob): ?>
						<ul>
							<?php $rt =1; foreach( $about_menuMob as $menurow ) {
								$menurowNew = $menurow['add_page_links'];
								$about_url = $menurowNew['url'];
								$abou_title = $menurowNew['title'];
								$abou_target = $menurowNew['target'] ? $menurowNew['target'] : '_self';
							 ?>
							 <?php if($rt == 1){ ?>
							<li class="footer_title"><a target="<?php echo $abou_target; ?>" href="<?php echo $about_url; ?>"><?php echo $abou_title; ?></a></li>
						   <?php } else{ ?>
                           <li><a target="<?php echo $abou_target; ?>" href="<?php echo $about_url; ?>"><?php echo $abou_title; ?></a></li>
                          <?php }  ?>
						 <?php $rt++; } ?>
						</ul>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="footer_col">
				<div class="footer_menu">
					<?php $resourses_menu = get_field('resourses_menu','option'); ?>
					<?php if($resourses_menu): ?>
					<div class="footer_link">
						<ul>
							<?php $yu =1; foreach( $resourses_menu as $menurow ) {
								$menurowNew = $menurow['add_page_links'];
								$about_url = $menurowNew['url'];
								$abou_title = $menurowNew['title'];
								$abou_target = $menurowNew['target'] ? $menurowNew['target'] : '_self';
							 ?>
							 <?php if($yu == 1){ ?>
							<li class="footer_title"><a target="<?php echo $abou_target; ?>" href="<?php echo $about_url; ?>"><?php echo $abou_title; ?></a></li>
						   <?php } else{ ?>
                           <li><a target="<?php echo $abou_target; ?>" href="<?php echo $about_url; ?>"><?php echo $abou_title; ?></a></li>
                          <?php }  ?>
						 <?php $yu++; } ?>
						</ul>
					</div>
					<?php endif; ?>

                   <?php $social_icons = get_field('social_icons','option'); ?>
                   <?php if($social_icons): ?>
					<div class="social_icon">
						<?php $ui =1; foreach( $social_icons as $social ) {
								$sociallink = $social['add_social_link'];
							 ?>
                         <?php if($ui == 1){ ?>
						<a target="_blank" href="<?php echo $sociallink; ?>" class="footer_icon"> <svg xmlns="http://www.w3.org/2000/svg" width="25.089" height="20.376" viewBox="0 0 25.089 20.376">
							<path id="twitter" d="M69.089,258.42a11.055,11.055,0,0,1-2.579,2.658c.016.223.016.446.016.669A14.637,14.637,0,0,1,44,274.068a10.637,10.637,0,0,0,1.242.064,10.3,10.3,0,0,0,6.384-2.2,5.151,5.151,0,0,1-4.808-3.566,6.476,6.476,0,0,0,.971.08,5.438,5.438,0,0,0,1.353-.175,5.143,5.143,0,0,1-4.123-5.046v-.064a5.178,5.178,0,0,0,2.324.653,5.149,5.149,0,0,1-1.592-6.877,14.616,14.616,0,0,0,10.6,5.381,5.8,5.8,0,0,1-.127-1.178,5.147,5.147,0,0,1,8.9-3.518,10.124,10.124,0,0,0,3.264-1.242,5.128,5.128,0,0,1-2.261,2.834A10.311,10.311,0,0,0,69.089,258.42Z" transform="translate(-44 -256)" fill="#fff"/>
							</svg> 
						</a>
					<?php } elseif($ui == 2){ ?>
						<a target="_blank" href="<?php echo $sociallink; ?>" class="footer_icon"> <svg xmlns="http://www.w3.org/2000/svg" width="21.405" height="20.457" viewBox="0 0 21.405 20.457">
							<path id="linkedin" d="M4.864,154.647v13.81H.265v-13.81Zm.293-4.264a2.38,2.38,0,0,1-2.592,2.383H2.536A2.371,2.371,0,0,1,0,150.383,2.4,2.4,0,0,1,2.592,148,2.372,2.372,0,0,1,5.156,150.383Zm16.249,10.159v7.915H16.821v-7.386c0-1.853-.669-3.122-2.327-3.122a2.513,2.513,0,0,0-2.355,1.672,3.457,3.457,0,0,0-.153,1.129v7.706H7.4c.056-12.514,0-13.81,0-13.81h4.585v2.007h-.028a4.551,4.551,0,0,1,4.167-2.327C19.148,154.327,21.406,156.305,21.406,160.542Z" transform="translate(0 -148)" fill="#fff"/>
							</svg>
						</a>
					<?php } ?>
                   <?php $ui++; } ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	
</footer>

<?php if(!empty($add_copyright_text)):
$copyContent = apply_filters( 'the_content', $add_copyright_text );
 ?>

<div class="copyright_footer">
		<div class="container">
			<span><?php echo $copyContent; ?></span>
		</div>
</div>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
