<?php get_header(); ?>
<section id="sec01">
    <div class="container">
        <center>
            <p><strong class="en">404 NOT FOUND</strong></p>
            <div class="btn_area">
                <a href="<?php echo home_url( '/' ); ?>" class="btn_arrow en">
                    TOP
                </a>
            </div>
        </center>
    </div>
</section>
<?php get_footer(); ?>

<style>
#sec01 {
    padding: 300px 0 0px;
}

strong {
    font-size: 42px;
    font-weight: 300 !important;
}

@media screen and (max-width: 1024px) {
    #sec01 {
        padding: 150px 0 0px;
    }

    strong {
        font-size: 32px;
    }

}
</style>