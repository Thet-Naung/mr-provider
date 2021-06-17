<?php 
/* 
 Template Name: About Us
 */

?>
<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>
<section class="hm-ab ab-pg pd60">
    <?php
        if ( have_posts() ) {
            while ( have_posts() ) { the_post();
                $id = $post->ID;
                $ab_content = $post->post_content;
                $ab_field = get_fields($id);
                $ab_title = $ab_field['title'];
                $ab_img = $ab_field['image'];
                $ab_mobile = $ab_field['mobile_image'];
                $ab_mission = $ab_field['our_mission'];
                $ab_vision = $ab_field['our_vision'];
                $ab_motive = $ab_field['our_motive'];
                $founder = $ab_field['founder'];
                $founder_title = $founder['title'];
                $founder_message = $founder['founder_message'];

            ?>
                <?php if ( $ab_title ) { ?><h1 class="border-text border-text-white"><?php echo $ab_title; ?></h1> <?php } ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ab-img" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="300" data-aos-offset="0">
                                <?php if($ab_img){ ?><img src="<?php echo $ab_img; ?>" alt="<?php echo $ab_title; ?>" class="d-lg-block d-none"><?php } ?>
                                <?php if($ab_mobile){ ?><img src="<?php echo $ab_mobile; ?>" alt="<?php echo $ab_title; ?>" class="d-lg-none d-block"><?php } ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ab-content" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400" data-aos-offset="0">
                                <?php if ( $ab_title ) { ?><h2 class="title-black"><?php echo $ab_title; ?></h2> <?php } ?>
                                <?php if ( $ab_content ) { echo $ab_content; } ?>
                            </div>
                        </div>    
                    </div>
                </div>
                
                <div class="our-goal">
                    <div class="container">
                        <div class="row align-content-center justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="ab-obj" data-aos="zoom-in-up" data-aos-delay="500">
                                    <h3 class="title-black">Our Vision</h3>
                                    <?php echo $ab_vision; ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="ab-obj" data-aos="zoom-in-up" data-aos-delay="500">
                                    <h3 class="title-black">Our Mission</h3>
                                    <?php echo $ab_mission; ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="ab-obj" data-aos="zoom-in-up" data-aos-delay="500">
                                    <h3 class="title-black">Our Motive</h3>
                                    <?php echo $ab_motive; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="obj-bg">
                    <div class="container">
                        <div class="ab-message" data-aos="fade-up" data-aos-delay="600">
                            <h3 class="text-center"><?php echo $founder_title; ?></h3>
                            <div class="row">
                                <div class="col-lg-5 col-12">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="Min Thitsar" class="founder">
                                </div>
                                <div class="col-lg-7 col-12">
                                    <?php echo $founder_message; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <?php
            }
        }
    ?>
</section>
<?php get_footer(); ?>