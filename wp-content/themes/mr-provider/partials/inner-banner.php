
<?php 
$general = get_field('general_setting', 'option'); 
$obj = get_queried_object();
$page_banner = get_field('banner', $obj->ID);
?>
<div class="inner-banner" style="background: url(<?php if($page_banner) { echo $page_banner; } else { echo $general['default_banner']; } ?>) no-repeat; background-size: cover; background-position: center;">
<!-- <div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-box" data-aos="flip-up" data-aos-easing="ease" data-aos-delay="800" data-aos-offset="0">
            <h1>
                <?php if (is_archive()) {
                    if ($obj->label == true) {
                        echo $obj->label;
                    }else {
                        echo $obj->name;
                    }
                }else {
                    echo $obj->post_title; 
                }
                ?>
            </h1>
            <?php
                //if ( function_exists('yoast_breadcrumb') ) {
                //yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                //}
            ?>
        </div>
    </div>
</div> -->
<div class="banner-overlay"></div>
</div>