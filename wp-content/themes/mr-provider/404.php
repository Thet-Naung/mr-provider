<?php get_header(); ?>
<style>
.exclamation-icon {
    margin-top: 50px;
    margin-right: 50px;
}
.fa-exclamation-circle {
    font-size: 50px;
    color: #FFCD11;
}
.pg-not-found-wrap {
    padding-top: 200px;
    padding-bottom: 100px;
    text-align: center;
}
.error-no {
    font-size: 150px;
    line-height: 1;
}
.not-found-txt span {
    display: inline-block;
    position: relative;
    background: #fff;
    padding-left: 16px;
    padding-right: 16px;
    font-size: 30px;
}
</style>
<section class="pg-not-found-wrap">
    <div class="container">
        <div>
            <div class="d-flex justify-content-center">
                <div class="exclamation-icon"><i class="fas fa-exclamation-circle mt-5 mr-3"></i></div>
                <h3 class="error-no"><span>404</span></h3>
            </div>
            <p class="not-found-txt"><span>Oops... Page Not Found !</span></p>
            <div class="btn-space">
                <a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>" class="btn btn-primary">Back Home</a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
