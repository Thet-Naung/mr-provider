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
                    <div id="fb-root"></div> <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="x3czE58V"></script>
                    <div class="fb-page" data-href="https://www.facebook.com/minthitsarprovider" data-tabs="timeline" data-width="" data-height="246" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/minthitsarprovider" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/minthitsarprovider">Mr. Provider</a></blockquote></div>
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