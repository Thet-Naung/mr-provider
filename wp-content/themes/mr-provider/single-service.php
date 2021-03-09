<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>
<?php 
    $s = get_fields();
    $services = $s['services'];
?>
<div class="single-service pd60">
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
                        $s_title = $post->post_title;
                        $s_image = get_the_post_thumbnail_url($id);  
                        $s_link = get_permalink($id);
                        $s_content = $post->post_content;
                ?>
                    <div class="row">
                        <div class="col-lg-9 offset-lg-1">
                            <div class="scontent" data-aos="zoom-in-up" data-aos-easing="ease" data-aos-delay="400" data-aos-offset="0">
                                <?php echo apply_filters('the_content', $s_content); ?>
                                <?php if(!$services) { ?>
                                    <div class="text-center mt-4">
                                        <img src="<?php echo $s_image; ?>" alt="Service" class="img-fluid"> 
                                    </div>
                                <?php } ?>
                                <?php if ( $services ) { ?>
                                    <div class="services">
                                        <?php foreach ( $services as $skey => $service ) { 
                                            if ( $skey%2 == 0 )  {  
                                        ?>
                                            <div class="service-gp">
                                                <div class="row">
                                                    <div class="col-md-6 order-lg-first">
                                                        <?php echo apply_filters('the_content', $service['content']) ?>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <img src="<?php echo $service['image']; ?>" alt="Service Image" class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }else { ?>
                                                <div class="service-gp">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <?php echo apply_filters('the_content', $service['content']) ?>
                                                        </div>
                                                        <div class="col-md-6 order-lg-first">
                                                            <img src="<?php echo $service['image'] ?>" alt="Service Image" class="w-100">
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
        <?php } ?>
    </div>
</div>
<?php get_footer(); ?>