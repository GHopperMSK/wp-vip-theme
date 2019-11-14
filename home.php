<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <?php get_template_part( 'content', get_post_format() ); ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>



