<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>
<div class="hm-service service-list pd60">
    <div class="container">
        <div class="heading-style">
            <h1 class="border-text border-text-white">Services We Offer <h2 class="title-black">Services We Offer</h2> </h1>
        </div>
        <div class="services">
            <?php
                if ( have_posts() ) { ?>
                    <div class="row">
                        <?php
                            $s = 1;
                            while ( have_posts() ) { the_post();
                                $id = $post->ID;
                                $s_title = $post->post_title;
                                $s_content = $post->post_excerpt;
                                $thumb = get_post_thumbnail_id($id);
                                $s_images = wp_get_attachment_image_src($thumb, 'full');
                                $s_image = aq_resize($s_images[0], 254, 350, true, true);
                                $s_link = get_permalink($id);
                        ?>
                            <div class="col-md-3">
                                <div class="service-box" data-aos="fade-up-right" data-aos-easing="ease" data-aos-delay="<?php echo $s; ?>00" data-aos-offset="0">
                                    <div class="service-inner-box">
                                        <img src="<?php echo $s_image; ?>" alt="<?php echo $s_title; ?>">
                                        <div class="s-overlay">
                                            <div class="overlay-box">
                                                <img src="/wp-content/uploads/2021/03/world.png" alt="<?php echo $s_title; ?>">
                                                <p><?php echo $s_content; ?></p>
                                                <a href="<?php echo $s_link ?>" title="<?php echo $s_title; ?>">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="<?php echo $s_link; ?>" title="<?php echo $s_title; ?>"><h3><?php echo $s_title; ?></h3></a>
                                </div>
                            </div>
                        <?php $s++; } ?>
                    </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>