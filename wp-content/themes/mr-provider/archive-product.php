<?php get_header(); ?>
<?php get_template_part('partials/inner-banner'); ?>
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
                        $p_terms = get_terms('product-type', array('orderby' => 'date', 'order' => 'ASC'));
                        $p = 1;
                        foreach ( $p_terms as $p_term ) {
                            $id = $p_term->term_id;
                            $taxonomy = $p_term->taxonomy;
                            $p_titles = $p_term->name;
                            $p_title = wp_trim_words( $p_titles, 5, '...' );
                            $p_image = get_field('image', $taxonomy . '_' . $id);
                            $p_link = get_term_link($id);
                    ?>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="product-box" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="<?php echo $p; ?>00" data-aos-offset="0">
                                <a href="<?php echo $p_link; ?>" title="<?php echo $p_title; ?>"><img src="<?php echo $p_image; ?>" alt=""></a>
                                <a href="<?php echo $p_link; ?>" title="<?php echo $p_title; ?>">
                                    <div class="p-content">
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