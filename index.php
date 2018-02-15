<?php get_header(); ?>

   <!-- <div class="row">

        <div class="col-sm-8 blog-main"> -->
<?php get_template_part( 'page-components/about' ); ?>

        <div class="jumbotron-fluid header people low-clearance" id="team">
            <div class="container">
                <hr class="hr-w">
                <div class="row pb-5">
                    <h1 class="display-3 expo">The Team</h1>
                </div>

                <div class="row">

                <?php $query = new WP_Query( array( 'category_name' => 'chair' ) ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

                    get_template_part( 'page-components/chair', get_post_format() );

                endwhile; endif;
                ?>

                <?php $query = new WP_Query( array( 'category_name' => 'member' ) ); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

                    get_template_part( 'page-components/member', get_post_format() );

                endwhile; endif;
                ?>

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /#team -->

        <div class="container pt-5 pb-5 projects unpad" id="projects">

            <?php $query = new WP_Query( array( 'category_name' => 'project' ) ); ?>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

                get_template_part( 'page-components/projects', get_post_format() );

            endwhile; endif;
            ?>

        </div> <!-- /.projects -->

        <?php if ( is_active_sidebar( 'contact_form' ) ) : ?>
            <div id="contact_form" class="primary-sidebar widget-area" role="complementary">
                <?php dynamic_sidebar( 'contact_form' ); ?>
            </div><!-- #primary-sidebar -->
        <?php endif; ?>

        <div class="container about pl-xl-5 pr-xl-5 pb-5 pt-5" id="FAQ">
            <hr class="hr-c">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="mw-sans display-4 expo mt-4 mb-5">Frequently Asked Questions</h1>
                    <div id="accordion" role="tablist" aria-multiselectable="true">

                        <?php $query = new WP_Query( array( 'category_name' => 'faq' ) ); ?>
                        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

                            get_template_part( 'page-components/faq', get_post_format() );

                        endwhile; endif;
                        ?>

                    </div> <!-- /#accordion -->
                </div> <!-- /.col-sm-12-->
            </div> <!-- /.row -->
        </div> <!-- /#faq -->

        <?php //get_sidebar(); ?>

    <!-- </div> --> <!-- /.row -->

<?php get_footer(); ?>