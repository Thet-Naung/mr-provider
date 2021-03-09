<?php 
/* 
 Template Name: Contact Us
 */

?>
<?php get_header(); ?>
<?php 
    $general = get_field('general_setting','option');
    $address = $general['contact_address'];
    $number = $general['contact_number'];
    $email = $general['contact_email'];
    $open_hour = $general['open_hour'];
    $map = get_field('map','option');
?>
<?php get_template_part('partials/inner-banner'); ?>
<section class="contact-pg pd60">
    <?php
        if ( have_posts() ) {
            while ( have_posts() ) { the_post();
            ?>
               <div class="heading-style">
                    <h1 class="border-text border-text-white">Get In touch</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-info" data-aos="fade-up-right" data-aos-easing="ease" data-aos-delay="300" data-aos-offset="0">
                                <h3 class="title-black">Information</h3>
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
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-message" data-aos="fade-up-left" data-aos-easing="ease" data-aos-delay="300" data-aos-offset="0">
                                <h3 class="title-black">Send a message</h3>
                            </div>
                        </div>    
                    </div>
                </div>
    <?php
            }
        }
    ?>
</section>
<?php
    /*
    |--------------------------------------------------------------
    | Google Map Section
    |--------------------------------------------------------------
    |
    */
    ?>
<section class="map-section section-wrap">
    <div id="site-map" style="height: 500px;"></div>
</section>
<script>
var map;
function initMap() {
    var location = {lat: <?php echo $map['lat'] ?>,lng: <?php echo $map['lng'] ?> };
    	map = new google.maps.Map(document.getElementById('site-map'), {
    	center: location,
        zoom: 16,
    });
    var contentString = '<div id="content">'+
        '<div id="siteNotice">'+
        '</div>'+
        '<h1 id="firstHeading" class="firstHeading"><?php echo bloginfo('name'); ?></h1>'+
        '<div id="bodyContent">'+
        '<p><?php echo ($site_info['contact_address']) ? $site_info['contact_address'] : ''; ?></p>'+
        '</div>'+
        '</div>';

    var infowindow = new google.maps.InfoWindow({
        content: contentString
    });
    var marker = new google.maps.Marker({
        position: location,
        map:map,
        icon : '<?php echo ASSET_URL; ?>images/map.png',
        animation: google.maps.Animation.BOUNCE
    });
    marker.addListener('click', function() {
        infowindow.open(map, marker);
    });
    marker.addListener('click', function() {
    map.setZoom(18);
    map.setCenter(marker.getPosition());
    });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC44n4EJxputPRoWzorOaszqW-dFoVN8UE&callback=initMap" async defer></script>
<?php get_footer(); ?>