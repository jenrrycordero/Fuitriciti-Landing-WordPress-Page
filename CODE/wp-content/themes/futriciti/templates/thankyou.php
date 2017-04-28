<?php
/**
 * Template Name: Thankyou Template
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/touch.png" rel="apple-touch-icon-precomposed">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
    <script>
        // conditionizr.com
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>/assets/conditionizr/',
            tests: {
                safari: ['class'],
                chrome: ['class'],
                firefox: ['class'],
                opera: ['class']
            }
        });
        conditionizr.polyfill('//html5shiv.googlecode.com/svn/trunk/html5.js', ['ie6', 'ie7', 'ie8']);
        conditionizr.polyfill('//oss.maxcdn.com/respond/1.4.2/respond.min.js', ['ie6', 'ie7', 'ie8']);

        //isMobile features.
        var extraClass = "";
        if ( isMobile.phone ) extraClass += " phone";
        if ( isMobile.apple.phone ) extraClass += " iphone";
        if ( isMobile.apple.tablet ) extraClass += " ipad";
        document.getElementsByTagName("html").className += extraClass;
    </script>
    <?php
    the_field('custom_css',             'option');
    the_field('custom_js_header',       'option');
    the_field('custom_gtm_tracking',    'option');
    the_field('typekit_script',         'option');
    the_field('custom_css');
    the_field('custom_js');
    ?>
</head>
<body id="page-wrapper" <?php body_class(); ?>>
<?php if ( function_exists( 'gtm4wp_the_gtm_tag' ) ) { gtm4wp_the_gtm_tag(); } ?>

<!-- wrapper -->
<div id="content-wrapper" class="container-fluid no-padding">

<?php
//VARIABLES//----------------------------------------------------
$page_bg = get_field('page_background', 'options');
$main_logo = get_field('main_logo', 'options');
$title = get_field('tankyou_title');
$subtitle = get_field('tankyou_subtitle');
//END VARIABLES DECLARATIONS//-----------------------------------------
?>
<section class="thanks-container" style="background-image: url('<?= $page_bg; ?>')">
    <div class="thanks-wrapper">
        <h1><?= $title; ?></h1>
        <h2><?= $subtitle; ?></h2>

        <div class='box-scene'>
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <div class='box'>
                    <div class='front face'>
                        <figure class="arrow"></figure>
                    </div>
                    <div class="side face">
                        <figure class="arrow"></figure>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="line-box-holder-2 thanks-line">
        <div class="relative super-line"></div>
    </div>
</section>

</div><!-- #content-wrapper -->

<?php
the_field('custom_js_footer', 'option');
?>
<?php wp_footer(); ?>
</body>
</html>
