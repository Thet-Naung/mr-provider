<?php get_header(); ?>
<?php $obj = get_queried_object(); ?>
<div class="hm-product product-list pd60">
    <div class="container">
        <div class="heading-style">
            <h1 class="border-text border-text-gray">Product <h2 class="title-black">Product</h2> </h1>
        </div>
        <?php
            if ( have_posts() ) { ?>
            <div class="products">
                <div class="row">
                    <?php
                        $p = 1;
                        while ( have_posts() ) { the_post();
                            $id = $post->ID;
                            $p_titles = $post->post_title;
                            $p_title = wp_trim_words( $p_titles, 3, '...' );
                            $thumb = get_post_thumbnail_id($id);
                            $p_images = wp_get_attachment_image_src($thumb, 'full');
                            $p_image = aq_resize($p_images[0], 350, 249, true, true); 
                            $p_link = get_permalink($id);
                    ?>
                        <div class="col-md-4">
                            <div class="product-box" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="<?php echo $p; ?>00" data-aos-offset="0">
                                <a href="<?php echo $p_link; ?>" title="<?php echo $p_title; ?>"><img src="<?php echo $p_image; ?>" alt=""></a>
                                <a href="<?php echo $p_link; ?>" title="<?php echo $p_title; ?>">
                                    <div class="p-content">
                                        <span class="badge"><?php echo $obj->name; ?></span>
                                            <h4><?php echo $p_title; ?></h4>
                                            <div class="border-line"></div>
                                            <a href="<?php echo $p_link; ?>" title="<?php echo $p_title; ?>">View Detail</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php $p++; } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>