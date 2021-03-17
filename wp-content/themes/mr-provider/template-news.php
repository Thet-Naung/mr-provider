<?php 
// Template Name: News
get_header(); 

?>
<?php get_template_part('partials/inner-banner'); ?>

<main class="main-page">
    <div class="list-news pd60">
        <div class="container">
            <div class="heading-style">
                <h1 class="border-text border-text-white">News & Activities <h2 class="title-black">News & Activities</h2> </h1>
            </div>
            <div class="">
                <?php 
                    $args = array(
                        'post_type'   => 'post',
                        'posts_per_page' => -1,
                        'orderby' => 'DESC'
                    );
                    
                    $news = get_posts( $args );
                ?>
                <?php if ($news) { ?>
                    <div class="row">
                        <?php 
                        $n = 2;
                        foreach ($news as $new) {
                            $id = $new->ID;
                            $n_content = $new->post_excerpt;
                            $n_image = wp_get_attachment_image_src(get_post_thumbnail_id($id),'full');
                            $n_date = get_the_date('M d, Y', $id);
                            $n_link = get_permalink($id);
                        ?>
                            <div class="col-md-4">
                                <div class="inner-news-box" data-aos="fade-up-right" data-aos-easing="ease" data-aos-delay="<?php echo $n*2; ?>00" data-aos-offset="0">
                                    <div class="news-box" style="background: url(<?php echo $n_image[0]; ?>) center no-repeat;">
                                        <a href="<?php echo $n_link; ?>" title="News Page">
                                            <?php echo $n_content; ?>
                                            <div class="date">
                                                <span><?php echo $n_date; ?></span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="news-overlay">
                                        <!-- <div class="n-inner-overlay">
                                            <?php //echo $n_content; ?>
                                        </div>     -->
                                    </div>
                                </div>
                            </div>
                        <?php $n++; } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>