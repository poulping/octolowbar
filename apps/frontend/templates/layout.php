<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en" xmlns:fb="http://ogp.me/ns/fb#"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" xmlns:fb="http://ogp.me/ns/fb#"> <!--<![endif]-->
<head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php echo javascript_include_tag('vendor/modernizr-2.6.2.min.js') ?>
    </head>
    <body>
        <header class="m-header">
            <div class="l-wrapped">
                <div class="intro">
                    <h1 class="m-logo_ode"><a href="/">Ode to Barlow</a></h1>
                    <h2>8 Years at Twist Image</h2>
                    Sed posuere consectetur est at lobortis. Maecenas sed diam eget risus varius blandit sit amet non magna.
                </div>
                <div class="m-bonhomme"></div>
                <div class="m-comment_box_wrapper">
                    <div class="comment_box">
                        <p>“Sed posuere consectetur est at lobortis. Maecenas sed diam eget risus varius blandit sit amet non.”</p>
                        <p>“Maecenas sed diam eget risus varius blandit sit amet non.”</p>
                        <p>“Sed posuere consectetur est at lobortis.”</p>
                    </div>
                </div>
            </div>
        </header>
        <div id="container">
            <div class="l-wrapped">
                <?php echo $sf_content ?>
            </div>
        </div>

        <!-- Modal -->
        <div id="modal-item-view" class="modal hide fade">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <!-- Content is remotely added here -->
            </div>
            <div class="modal-footer">&nbsp;</div>
        </div>
        <?php include_javascripts() ?>

    </body>
</html>
