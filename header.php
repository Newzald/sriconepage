<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
</head>

<body>
<nav class="navbar navbar-expand-md">
    <div class="container unpad">

        <a class="navbar-brand" href="#">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/brand/logo.svg" width="50" height="50" alt="graphics/dep/brand-old">
            <span style="vertical-align: middle; padding-left: 15px;">SRIC</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#proposal">Contact</a>
                </li>
                <li class="nav-item">
                    <!-- TODO: Add notification with information/instructions-->
                    <a class="nav-link" href="https://securelb.imodules.com/s/990/2014/index.aspx?sid=990&gid=1&pgid=1170&cid=2498&appealcode=bardgiving">Contribute</a>
                </li>
            </ul>
        </div>

    </div>
</nav>
<div class="header jumbotron-fluid double-low-clearance header-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mw-sans">
                <div class="row">
                    <h2>SRIC</h2>
                </div>
                <div class="row mt-3 mb-4">
                    <nav class="nav flex-column">
                        <a class="nav-link" href="#resolution">[ How we work ]</a>
                        <a class="nav-link" href="#team">[ Who we are ]</a>
                        <a class="nav-link" href="#projects">[ What we've done ]</a>
                    </nav>
                </div>
            </div>
            <div class="col-lg-8 unmargin">

                    <?php $query = new WP_Query( array( 'category_name' => 'welcome' ) ); ?>
                    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

                        get_template_part( 'page-components/lead', get_post_format() );

                    endwhile; endif;
                    ?>
            </div>
        </div>
    </div>
</div>

