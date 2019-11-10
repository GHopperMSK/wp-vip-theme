<?php get_header(); ?>

<section>
    content1
    <div class="row">
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



