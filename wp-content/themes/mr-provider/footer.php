    <?php 
        $general = get_field('general_setting','option');
        $address = $general['contact_address'];
        $number = $general['contact_number'];
        $email = $general['contact_email'];
        $open_hour = $general['open_hour'];
    ?>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <p><?php echo $address; ?></p>
                    <p>Phone: <?php echo contact_link($number, 'tel:'); ?></p>
                    <p>Email: <?php echo contact_link($email, 'mailto:'); ?></p>
                    <p>Opening Hours: <?php echo $open_hour; ?></p>
                </div>
                <div class="col-md-4">
                    <h3>Useful Links</h3>
                    <div class="row">
                        <div class="col-6">
                            <?php  
                                wp_nav_menu(array(
                                    'theme_location' => 'footer1',
                                    'menu' => 'footer1-menu',
                                    'depth' => 0,
                                    'menu_class' => 'menu',
                                    'container' => '',
                                    'container_class' => ''
                                ));
                            ?>
                        </div>
                        <div class="col-6">
                            <?php  
                                wp_nav_menu(array(
                                    'theme_location' => 'footer2',
                                    'menu' => 'footer2-menu',
                                    'depth' => 0,
                                    'menu_class' => 'menu',
                                    'container' => '',
                                    'container_class' => ''
                                ));
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p>
                        <a href="//www.b360mm.com/contact/" target="_blank" title="B360 Website Development Service in Yangon, Myanmar">
                            Transformed by <span class="service-owner"> B360 Company Limited</span> 
                        </a> 
                        <!-- <img src="<?php echo ASSET_URL.'images/b360-copyright.png'; ?>" class="img-fluid service-owner-logo" alt="B360 Website Development Service in Yangon, Myanmar"> -->
                    </p>
                </div>
                <div class="col-md-7">
                    <?php  
                        wp_nav_menu(array(
                            'theme_location' => 'footer3',
                            'menu' => 'footer3-menu',
                            'depth' => 0,
                            'menu_class' => 'menu',
                            'container' => '',
                            'container_class' => ''
                        ));
                    ?>
                </div>
            </div>
        </div>   
    </div>
<?php wp_footer(); ?>
</body>
</html>