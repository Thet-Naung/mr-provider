<?php get_header(); ?>
<?php
    $hm = get_fields();
    $ab_gp = $hm['about_group'];
    $ab_title = $ab_gp['title'];
    $ab_img = $ab_gp['image'];
    $ab_mobile = $ab_gp['mobile_image'];
    $ab_content = $ab_gp['content'];
    $s_gp = $hm['service_group'];
    $service_title = $s_gp['title'];
    $services = $s_gp['service'];
    $p_gp = $hm['product_group'];
    $product_title = $p_gp['title'];
    $products = $p_gp['product'];
    $n_gp = $hm['news_group'];
    $news_title = $n_gp['title'];
    $news = $n_gp['news'];
?>
    <!-- about -->
    <section class="hm-ab pd60">
        <div class="container">
            <?php if ( $ab_title ) { ?><h1 class="border-text border-text-white"><?php echo $ab_title; ?></h1> <?php } ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="ab-img" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="200" data-aos-offset="0">
                        <?php if($ab_img){ ?><img src="<?php echo $ab_img; ?>" alt="<?php echo $ab_title; ?>" class="d-lg-block d-none"><?php } ?>
                        <?php if($ab_mobile){ ?><img src="<?php echo $ab_mobile; ?>" alt="<?php echo $ab_title; ?>" class="d-lg-none d-block"><?php } ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ab-content" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="300" data-aos-offset="0">
                        <?php if ( $ab_title ) { ?><h2 class="title-black"><?php echo $ab_title; ?></h2> <?php } ?>
                        <?php if ( $ab_content ) { echo $ab_content; } ?>
                    </div>
                    <div class="btn-space" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400" data-aos-offset="0">
                        <a href="/about-us/" title="about page" class="btn btn-primary hover-filled-slide-up">read more</a>
                    </div>
                </div>    
            </div>
        </div>
    </section>
    <!-- end about -->

    <!-- service -->
    <section class="hm-service">
        <div class="service-bg pd60">
            <div class="container">
                <div class="heading-style" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="200" data-aos-offset="0">
                    <?php if ( $service_title ) { ?>
                        <h1 class="border-text border-text-black"><?php echo $service_title; ?> <h2 class="title-white"><?php echo $service_title; ?></h2> </h1>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php if ( $services ) { ?>
            <div class="services">
                <div class="container">
                    <div class="row">
                        <?php 
                        $s = 3;
                        foreach ( $services as $service ) { 
                            $id = $service->ID;
                            $s_title = $service->post_title;
                            $s_content = $service->post_excerpt;
                            $thumb = get_post_thumbnail_id($id);
                            $s_images = wp_get_attachment_image_src($thumb, 'full');
                            $s_image = aq_resize($s_images[0], 218, 300, true, true);  
                            $s_link = get_permalink($id);
                        ?>
                            <div class="col-lg-3 col-6">
                                <div class="service-box" data-aos="zoom-in-up" data-aos-easing="ease" data-aos-delay="<?php echo $s; ?>00" data-aos-offset="0">
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
                </div>
            </div>
        <?php } ?>
        <div class="btn-space text-center" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400" data-aos-offset="0">
            <a href="/service/" title="about page" class="btn btn-primary hover-filled-slide-up">view more</a>
        </div>
    </section>
    <!-- end service -->

    <!-- product -->
    <section class="hm-product pd60">
        <div class="container">
            <div class="heading-style" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="300" data-aos-offset="0">
                <?php if ( $product_title ) { ?>
                    <h1 class="border-text border-text-gray"><?php echo $product_title; ?> <h2 class="title-black"><?php echo $product_title; ?></h2> </h1>
                <?php } ?>
            </div>
            <div class="products" data-aos="zoom-in-up" data-aos-easing="ease" data-aos-delay="500" data-aos-offset="0">
                <?php if ( $products ) { ?>
                <div class="swiper-container product-slide">
                    <div class="swiper-wrapper">
                    
                        <?php foreach ( $products as $product ) { 
                            $id = $product->ID;
                            $p_titles = $product->post_title;
                            $p_title = wp_trim_words( $p_titles, 5, '...' );
                            $thumb = get_post_thumbnail_id($id);
                            $p_images = wp_get_attachment_image_src($thumb, 'full');
                            $p_image = aq_resize($p_images[0], 350, 249, true, true);
                            $p_link = get_permalink($id);
                            $p_terms = get_the_terms($id, 'product-type');
                            foreach ($p_terms as $p_term){
                                $p_term_name = $p_term->name;
                            }
                        ?>
                            <div class="swiper-slide">
                                <div class="product-box">
                                    <a href="<?php echo $p_link; ?>" title="<?php echo $p_title; ?>"><img src="<?php echo $p_image; ?>" alt=""></a>
                                    <a href="<?php echo $p_link; ?>" title="<?php echo $p_title; ?>">
                                        <div class="p-content">
                                            <span class="badge"><?php echo $p_term_name; ?></span>
                                                <h4><?php echo $p_title; ?></h4>
                                                <div class="border-line"></div>
                                                <a href="<?php echo $p_link; ?>" title="<?php echo $p_title; ?>">View Detail</a>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php  } ?>
                    
                    </div>
                </div>
                <?php } ?>
                <!-- Add Arrows -->
                <div class="swiper-button-next product-next"></div>
                <div class="swiper-button-prev product-prev"></div>
            </div>
        </div>
        <div class="btn-space text-center" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="<?php echo $s; ?>00" data-aos-offset="0">
            <a href="/product/" title="about page" class="btn btn-primary hover-filled-slide-up">view more</a>
        </div>
    </section>
    <!-- end product -->

    <!-- latest new -->
    <section class="hm-news">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-12">
                    <div class="heading-style" data-aos="zoom-in-up" data-aos-easing="ease" data-aos-delay="300" data-aos-offset="0">
                        <?php if ( $news_title ) { ?>
                            <h1 class="border-text border-text-white"><?php echo $news_title; ?> <h2 class="title-black"><?php echo $news_title; ?></h2> </h1>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-4  d-sm-block d-none">
                    <div class="btn-space text-right" data-aos="zoom-in-up" data-aos-easing="ease" data-aos-delay="400" data-aos-offset="0">
                        <a href="/news-activities/" title="about page" class="btn btn-primary hover-filled-slide-up">view more</a>
                    </div>
                </div>
            </div>
        </div>
        <?php if ( $news ) { ?>
            <div class="news">
                <div class="container-fluid p-0">
                    <div class="row">
                        <?php foreach ( $news as $new ) { 
                            $id = $new->ID;
                            $n_content = $new->post_excerpt;
                            $n_image = wp_get_attachment_image_src(get_post_thumbnail_id($id),'full');
                            $n_date = get_the_date('M d, Y', $id);
                            $n_link = get_permalink($id);
                        ?>
                            <div class="col-lg-3 col-sm-6 news-col">
                                <div class="news-box" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="500" data-aos-offset="0">
                                    <a href="<?php echo $n_link; ?>" title="News Page">
                                        <?php echo $n_content; ?>
                                        <div class="date">
                                            <span><?php echo $n_date; ?></span>
                                        </div>
                                        <div class="news-overlay" style="background: url(<?php echo $n_image[0]; ?>) center no-repeat;">
                                            <div class="n-inner-overlay">
                                                <?php echo $n_content; ?>
                                            </div>    
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                            <div class="col-12">
                            <div class="btn-space text-center d-sm-none d-block">
                                <a href="/news-activities/" title="about page" class="btn btn-primary hover-filled-slide-up">view more</a>
                            </div>
                            </div>
                    </div>            
                </div>
            </div>
        <?php } ?>
        <div class="container">
            <div class="best-service" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="300" data-aos-offset="0">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 d-flex align-items-center">
                        <h4>Looking For Best Services For Your Next Business?</h4>
                    </div>
                    <div class="col-xl-2 col-lg-3 d-sm-flex align-items-center">
                        <div class="text-sm-right text-center">
                            <a href="/service/" title="Service Page" class="btn btn-default hover-filled-slide-up">read more</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 d-sm-block d-none">
                        <img src="/wp-content/uploads/2021/02/call-to-action.png" alt="service image" class="service-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end latest new -->
<?php get_footer(); ?>