<div class="container about pl-xl-5 pr-xl-5 pb-5 pt-3" id="resolution">
    <div class="row">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/brand/logo_color.svg" height="250" width="250" alt="graphics/dep/brand-inverted.svg">
    </div>

    <hr class="hr-c">

    <div class="row">
        <div class="col-sm-12">
            <h1 class="mw-sans expo mt-4 mb-4">
                <?php if ( is_active_sidebar( 'about_section_header' ) ) : ?>
                    <div id="about-section-header" class="primary-sidebar widget-area" role="complementary">
                        <?php dynamic_sidebar( 'about_section_header' ); ?>
                    </div><!-- #primary-sidebar -->
                <?php endif; ?>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?php if ( is_active_sidebar( 'about_section_left' ) ) : ?>
                <div id="about-section-1" class="primary-sidebar widget-area" role="complementary">
                <?php dynamic_sidebar( 'about_section_left' ); ?>
                </div><!-- #primary-sidebar -->
            <?php endif; ?>
        </div>
        <div class="col-md-6">
            <?php if ( is_active_sidebar( 'about_section_right' ) ) : ?>
                <div id="about-section-2" class="primary-sidebar widget-area" role="complementary">
                <?php dynamic_sidebar( 'about_section_right' ); ?>
                </div><!-- #primary-sidebar -->
            <?php endif; ?>
        </div>
    </div>
</div>