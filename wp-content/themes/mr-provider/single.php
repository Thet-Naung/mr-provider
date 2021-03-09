<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>
<?php
    $n_image = get_the_post_thumbnail_url();
    $n_date = get_the_date('M d, Y');
?>
    <main class="single-news pd60">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div data-aos="fade-up" data-aos-easing="ease" data-aos-delay="300" data-aos-offset="0">
                        <img src="<?php echo $n_image; ?>" alt="News Image" class="w-100">
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <div class="n-date" data-aos="fade-up-right" data-aos-easing="ease" data-aos-delay="500" data-aos-offset="0">
                            <span><?php echo 'Posted on '.$n_date; ?></span>
                        </div>
                        <div class="news-content" data-aos="zoom-in-up" data-aos-delay="700">
                            <?php echo apply_filters('the_content', $post->post_content); ?>
                        </div>
                    </div>
                </div>              
                <div class="col-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </main>
<?php get_footer(); ?>