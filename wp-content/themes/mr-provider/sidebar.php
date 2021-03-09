<?php //dynamic_sidebar( 'main-sidebar-widget-area' ); ?> 
<?php 
    $general = get_field('general_setting','option');
    $address = $general['contact_address'];
    $number = $general['contact_number'];
    $email = $general['contact_email'];
    $open_hour = $general['open_hour'];
?>
<?php if ( is_singular('service') ) { ?>
<div class="service-sidebar" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="300" data-aos-offset="0">
    <h3>Related Services</h3>
    <?php 
        $args = array(
            'post_type'   => 'service',
            'posts_per_page' => 5,
            'orderby' => 'DESC'
        );
        
        $services = get_posts( $args );
    ?>
    <?php if ($services) { ?>
        <ul>
            <?php foreach ( $services as $service ) { 
                $service_title = $service->post_title;    
            ?>
                <li><a href="<?php echo get_permalink($service->ID); ?>" title="<?php $service_title; ?>"><?php echo $service_title; ?></a></li>
            <?php } ?>
        </ul>
    <?php } ?>
</div>
<?php } ?>
<?php if ( is_singular('post') ) { ?>
<div class="service-sidebar" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="300" data-aos-offset="0">
    <h3>Latest Post</h3>
    <?php 
        $args = array(
            'post_type'   => 'post',
            'posts_per_page' => 5,
            'orderby' => 'DESC'
        );
        
        $news = get_posts( $args );
    ?>
    <?php if ($news) { ?>
        <ul>
            <?php foreach ( $news as $new ) { 
                $new_contents = $new->post_excerpt;    
                $new_content = wp_trim_words($new_contents, 12);
            ?>
                <li><a href="<?php echo get_permalink($new->ID); ?>" title="News & Activities"><?php echo $new_content; ?></a></li>
            <?php } ?>
        </ul>
    <?php } ?>
</div>
<?php } ?>
<div class="contact-sidebar" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="500" data-aos-offset="0">
    <h3>Contact Us</h3>
    <div class="media">
        <i class="fas fa-map-marker-alt"></i>   
        <div class="media-body">
            <?php echo $address; ?>
        </div>
    </div>
    <div class="media">
        <i class="fas fa-phone-alt"></i> 
        <div class="media-body">
            <?php echo contact_link($number,'tel'); ?>
        </div>
    </div>
    <div class="media">
        <i class="fas fa-envelope"></i>  
        <div class="media-body">
            <?php echo contact_link($email,'mailto'); ?>
        </div>
    </div>
</div>