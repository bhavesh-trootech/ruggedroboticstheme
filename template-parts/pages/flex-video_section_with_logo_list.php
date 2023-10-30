<?php
$section_id = get_sub_field('section_id');
$section_class = get_sub_field('section_class');
$add_video_subtitle = get_sub_field('add_video_subtitle');
$add_video_title = get_sub_field('add_video_title');
$select_video = get_sub_field('select_video');
$video_url = get_sub_field('video_url');
$video_poster_image = get_sub_field('video_poster_image');
$logo_list_title = get_sub_field('logo_list_title');

function videoType($video_url) {
    if (strpos($video_url, 'youtube') > 0) {
        return 'youtube';
    } elseif (strpos($video_url, 'vimeo') > 0) {
        return 'vimeo';
    } else {
        return 'unknown';
    }
}
?>

<section id="<?php echo $section_id; ?>" class="rr_video_block rr_bg_orange <?php echo $section_class; ?>">
    <div class="container">
        <div class="rr_video_heading text-center"> 
            <?php if(!empty($add_video_subtitle)): ?>
            <span class="subtitle"><?php echo $add_video_subtitle; ?></span>
            <?php endif; ?>
            <?php if(!empty($add_video_title)): ?>
            <h2 class=""><?php echo $add_video_title; ?></h2>
           <?php endif; ?>
        </div>

        <?php if(!empty($video_url)): ?>
        <div class="rr_home_video">
        <?php  if(videoType($video_url) == "youtube") { 
            $video_id = explode("?v=", $video_url);
            $video_id = $video_id[1];
            ?>
            <?php if(!empty($video_id)): ?>
                <iframe height="1160" width="650"  style="width:100%; height: 650px;"
                src="https://www.youtube.com/embed/<?php echo $video_id; ?>"> 
                </iframe>
            <?php else: ?>
            <iframe height="1160" width="650"  style="width:100%; height: 650px;"
                src="<?php echo $video_url; ?>"> 
                </iframe>
            <?php endif; ?>
        <?php } elseif(videoType($video_url) == "vimeo") { ?>
            <iframe src="<?php echo $video_url; ?>" width="1160" height="650" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        <?php } else { ?>
            <video width="1160" height="650" controls poster="<?php echo wp_get_attachment_url($video_poster_image); ?>" loop playsinline>
                <source src="<?php echo $video_url; ?>" type="video/mp4"> 
            </video>
        <?php } ?>
        </div>
       <?php endif; ?>

       <?php if( have_rows('add_logo_list') ): ?>
        <div class="client_logo_sec rr_logo_bg_design ">
            <?php if(!empty($logo_list_title)): ?>
            <div class="client_logo_title">
                <h2><?php echo $logo_list_title; ?></h2>
            </div>
            <?php endif; ?>
            
            <div class="client_logo_row">
                <?php while ( have_rows('add_logo_list') ) : the_row();
                $logo_image = get_sub_field('logo_image');
                ?>
                <figure>
                    <?php echo wp_get_attachment_image( $logo_image, 'full' ); ?>
                </figure> 
                <?php endwhile; ?>
            </div> 
        </div>
        <?php endif; ?> 

    </div>
</section>