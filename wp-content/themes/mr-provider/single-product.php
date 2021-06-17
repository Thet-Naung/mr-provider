<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>
<?php 
    $p = get_fields();
    $galleries = $p['gallery'];
    $specifications = $p['specification'];
    $product_content = $p['product_content'];
    $description = $p['description'];
    $features = $p['features'];
?>
<div class="single-product pd60">
    <div class="container">
        <div data-aos="fade-up" data-aos-easing="ease" data-aos-delay="300" data-aos-offset="0">
            <div class="heading-style">
                <h1 class="title-black"><?php echo $post->post_title; ?> </h1>
            </div>
            <hr>
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?>
        </div>
    
        <?php
            if ( have_posts() ) { ?>
                <?php
                    while ( have_posts() ) { the_post();
                        $id = $post->ID;
                        $p_title = $post->post_title;
                        $p_image = get_the_post_thumbnail_url($id);  
                        $p_link = get_permalink($id);
                ?>
                    <div class="row">
                        <div class="col-lg-7">
                            <?php if ( $galleries ) { ?>
                                <div class="p-gallery" data-aos="fade-up-right" data-aos-easing="ease" data-aos-delay="500" data-aos-offset="0">
                                    <!-- Swiper -->
                                    <div class="swiper-container gallery-top">
                                        <div class="swiper-wrapper">
                                            <?php foreach ( $galleries as $gallery ) { 
                                                $img = aq_resize($gallery, 790, 450, true, true, true);    
                                            ?>
                                                <div class="swiper-slide">
                                                <a data-fancybox="gallery" href="<?php echo $gallery; ?>"><img src="<?php echo $img; ?>" alt="<?php echo $p_title; ?>" class="w-100"></a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <!-- Add Arrows -->
                                        <div class="swiper-button-next single-product-next"></div>
                                        <div class="swiper-button-prev single-product-prev"></div>
                                    </div>
                                    <div class="swiper-container gallery-thumbs">
                                        <div class="swiper-wrapper">
                                            <?php foreach ( $galleries as $gallery ) { 
                                                $thumb = aq_resize($gallery, 100, 70, true, true, true);    
                                            ?>
                                                <div class="swiper-slide">
                                                    <img src="<?php echo $thumb; ?>" alt="<?php echo $p_title; ?>" class="w-100">
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php }else { ?>
                                <div class="p-image" data-aos="fade-up-right" data-aos-easing="ease" data-aos-delay="500" data-aos-offset="0">
                                    <img src="<?php echo $p_image; ?>" alt="<?php echo $p_title; ?>">
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-lg-5">
                            <?php if ( $specifications ) { ?>
                                <div class="p-specific" data-aos="fade-up-left" data-aos-easing="ease" data-aos-delay="600" data-aos-offset="0">
                                    <h3 class="title-black">Specification</h3>
                                    <table class="table table-bordered table-striped">
                                        <tbody>
                                            <?php foreach ( $specifications as $specifi ) { ?>
                                                <tr>
                                                    <?php if ($specifi['title']) { echo '<td>'.$specifi['title'].'</td>'; } ?>
                                                    <?php if ($specifi['text']) { echo '<td>'.$specifi['text'].'</td>'; } ?>
                                                    <?php if ($specifi['second_text']) { echo '<td>'.$specifi['second_text'].'</td>'; } ?>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            <?php } else { ?>
                                <?php echo apply_filters('the_content', $post->post_content); ?>
                            <?php } ?>
                        </div>
                        <div class="col-12">
                            <?php if ( $product_content ) { ?>
                                <div class="p-description" data-aos="zoom-out" data-aos-delay="400">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <?php foreach ( $product_content as $pkey => $p_content ) { ?>
                                            <a class="nav-item nav-link <?php if ( $pkey == 0 ) { echo 'active'; }else { echo ' '; } ?>" id="<?php echo 'description'.$pkey.'-tab'; ?>" data-toggle="tab" href="#<?php echo 'description'.$pkey; ?>" role="tab" aria-controls="nav-description" aria-selected="true"><?php echo $p_content['title']; ?></a>
                                        <?php } ?>
                                    
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <?php foreach ( $product_content as $pkey => $p_content ) { ?>
                                            <div class="tab-pane fade <?php if ( $pkey == 0 ) { echo 'show active'; }else { echo ' '; } ?>" id="<?php echo 'description'.$pkey; ?>" role="tabpanel" aria-labelledby="<?php echo 'description'.$pkey.'-tab'; ?>"><?php echo $p_content['content']; ?></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>