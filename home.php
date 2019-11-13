<?php get_header(); ?>

<section id="banners" class="module-small home-banners">
    <div class="container"><div class="row shop_isle_bannerss_section">
            <div class="col-sm-4">
                <div class="content-box mt-0 mb-0">
                    <div class="content-box-image">
                        <a href="#"><img src="http://cx26071.tmweb.ru/wp-content/themes/vip-shop/assets/images/banner1.jpg"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="content-box mt-0 mb-0">
                    <div class="content-box-image">
                        <a href="#"><img src="http://cx26071.tmweb.ru/wp-content/themes/vip-shop/assets/images/banner2.jpg"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="content-box mt-0 mb-0">
                    <div class="content-box-image">
                        <a href="#"><img src="http://cx26071.tmweb.ru/wp-content/themes/vip-shop/assets/images/banner3.jpg"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    content1
    <div class="container-fluid row">
        <div class="col-sm-12 blog-main">
            <?php get_template_part( 'content', get_post_format() ); ?>
        </div> <!-- /.blog-main -->
    </div> <!-- /.row -->
</section>

<section>
    banner2
</section>

<section>
    content 2
</section>

<section>
    banner 3
</section>

<section>
    content 3
</section>

<?php get_footer(); ?>



