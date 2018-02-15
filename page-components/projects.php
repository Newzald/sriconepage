<div class="row mb-3">
    <div class="col-lg-6 unpad">
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ));
        }
        ?>
    </div>
    <div class="col-lg-6 case-desc p-5 pb-lg-2">
        <h1 class="display-4 expo"><?php the_title(); ?></h1>
        <div class="lead">
            <?php the_content(); ?>
        </div>
    </div>
</div>
