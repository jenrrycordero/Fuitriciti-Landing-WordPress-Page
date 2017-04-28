<?php
/**
 * Template Name: Home Template
 */
?>

<?php get_header(); ?>

<?php
//VARIABLES//----------------------------------------------------
$page_bg = get_field('page_background', 'options');
   /* banner */
$banner_background = get_field('banner_background');
$banner_title = get_field('banner_title');
$banner_figure_1 = get_field('banner_figure_1');
$banner_figure_2 = get_field('banner_figure_2');
$banner_video_url = get_field('banner_video_url');
   /*  What  */
$what_left_image = get_field('what_left_image');
$what_left_video = get_field('what_left_video');
$what_left_mark = get_field('what_left_mark');
$what_center_image = get_field('what_center_image');
$what_center_logo = get_field('what_center_logo');
$what_right_title = get_field('what_right_title');
$what_right_content = get_field('what_right_content');
$what_right_mark = get_field('what_right_mark');
$what_right_button_title = get_field('what_right_button_title');
$what_right_button_url = get_field('what_right_button_url');
   /*  How  */
$how_first_title = get_field('how_first_title');
$how_first_content = get_field('how_first_content');
$how_parameter_1_title = get_field('how_parameter_1_title');
$how_parameter_2_title = get_field('how_parameter_2_title');
$how_first_line_title = get_field('how_first_line_title');
$how_middle_line_title = get_field('how_middle_line_title');
$wave_background = get_field('wave_background');
$wave_background_mobile = get_field('wave_background_mobile');
$how_big_title = get_field('how_big_title');
$how_second_title = get_field('how_second_title');
$how_second_content = get_field('how_second_content');
$how_right_water_mark = get_field('how_right_water_mark');
$how_large_background = get_field('how_large_background');
$how_figure_1 = get_field('how_figure_1');
   /*  Contact Us  */
$contact_title = get_field('contact_title');
$contact_subtitle = get_field('contact_subtitle');
$contact_id_form = get_field('contact_id_form');
   /*     Who      */
$who_section_title = get_field('who_section_title');
$how_section_content = get_field('how_section_content');
$how_water_mark = get_field('how_water_mark');
//END VARIABLES DECLARATIONS//-----------------------------------------
?>

<div class="form-box text-center">
    <a href="#" class="close-form-x">X</a>
    <!--form HTML code here-->
    <div class="form-container">
        <h2 class="contact-us-title"><?= $contact_title ?></h2>
        <p><?= $contact_subtitle ?></p>

        <div class="form-box-container">
            <?php
            if ($contact_id_form && is_numeric($contact_id_form))
                gravity_form($contact_id_form, false, false, false, true, true);
            ?>
        </div>
    </div>
</div>

<!--<div class="landing-banner">-->
    <?php
        $banner_video_url = get_field('banner_video_url');
    ?>

    <div class="landing-banner-bg">
        <div class="overlay-banner"></div>
        <div class="video-banner-container" style="background-image: url('<?= $banner_background; ?>')"></div>
        <?php if($banner_video_url): ?>
            <div id="video-background-0" class="player0" data-property="{videoURL:'<?= $banner_video_url; ?>',containment:'.landing-banner-bg',startAt:0,mute:true,autoPlay:true,loop:true,opacity:1,optimizeDisplay:true,showYTLogo:false,showControls:false}"></div>
        <?php endif; ?>

        <!--<video poster="<?/*= $banner_background; */?>" id="bgvid" playsinline autoplay muted loop>
            <source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">
            <source src="http://thenewcode.com/assets/videos/polina.mp4" type="video/mp4">
        </video>-->
    </div>

    <!-- Figures Moving -->
    <?php if($banner_video_url=='' || $banner_video_url==NULL): ?>
        <div class="banner-figure-1" style="background-image: url('<?php echo $banner_figure_1; ?>')"></div>
    <?php endif; ?>

    <div class="banner-title"><h1><?= $banner_title; ?></h1></div>

<!--</div>-->
    <div class='box-scene box-scene-banner jump-to'>
        <a href="#what">
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


<div class="landing-content-box" style="background-image: url('<?= $page_bg; ?>')">

    <div class="top-angle" style="background-image: url('<?= $page_bg; ?>')"></div>

   <section id="what">

       <span class="trigger-what"></span>

       <div class="video-container">
           <div id="video" style="background: url('<?= $what_left_image ?>');">
               <?php if ( $what_left_video ) : ?>
                   <div id="video-background" class="player" data-property="{videoURL:'<?= $what_left_video; ?>',containment:'#video',startAt:0,mute:true,autoPlay:true,loop:true,opacity:1,optimizeDisplay:true,showYTLogo:false,showControls:false}"></div>
                   <a href="<?= $what_left_video; ?>" rel="foobox" class="foobox-item btn-play-overlay">
                       <i class="fa fa-play" aria-hidden="true"></i>
                   </a>
               <?php endif; ?>
           </div>
       </div>

       <span class="trigger-what-mark-right"></span><!--#-->

       <div class="what-left-water-mark-box">
           <?php if ( $what_left_mark ) : ?>
               <div id="what-left-water-mark" style="background-image: url('<?= $what_left_mark; ?>')"></div>
           <?php endif; ?>
       </div>

       <div class="what-center-box">
           <img src="<?= $what_center_image ?>" class="what-center-image">
           <img src="<?= $what_center_logo; ?>" class="logo-center">
       </div>

       <div class="what-right-content hidden-xs">
           <div class="relative what-right-text-box">
                <h2 class="relative super-title"><?= $what_right_title; ?></h2>

                <div class="line-box-holder">
                    <div class="relative super-line"></div>
                </div>

                <p class="what-right-content-text relative"><?= $what_right_content; ?></p>
                <div class="animated-btn relative">
                    <a href="<?= $what_right_button_url; ?>" rel="foobox" class="btn foobox-item"><span class="large-btn"><?= $what_right_button_title; ?></span></a>
                </div>
           </div>
       </div>

       <img class="what-right-mark" src="<?= $what_right_mark ?>"><!--#-->
   </section>

    <div class="what-right-content-xs visible-xs">
        <div class="relative what-right-text-box">
            <h2 class="relative super-title"><?= $what_right_title; ?></h2>

            <div class="line-box-holder">
                <div class="relative super-line"></div>
            </div>

            <p class="what-right-content-text relative"><?= $what_right_content; ?></p>
            <div class="animated-btn relative">
                <a href="<?= $what_right_button_url; ?>" rel="foobox" class="btn foobox-item"><span><?= $what_right_button_title; ?></span></a>
            </div>
        </div>
    </div>

    <section id="how">
        <span class="trigger-how"></span>

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="relative how-first-title"><?= $how_first_title ?></h3>
                    <p class="how-first-text"><?= $how_first_content ?></p>
                </div>
                <div class="col-sm-6 text-right to-the-left">
                    <div class="relative first-variable"><?= $how_parameter_1_title ?></div>
                    <div class="relative second-variable"><?= $how_parameter_2_title ?></div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid no-padding">
            <div class="row no-margin">
                <div class="col-xs-12 no-padding">
                    <img src="<?= $wave_background ?>" data-srcm="<?= $wave_background_mobile; ?>" alt="waves statistics" class="center-block img-responsive waves">
                </div>
            </div>
        </div>

        <span class="trigger-big-text"></span>

        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="relative big-title"><?= $how_big_title ?></h2>
                </div>
            </div>
        </div>

        <span class="trigger-second-text"></span>

        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <div class="how-second-content-box">
                        <h2 class="relative super-title"><?= $how_second_title; ?></h2>
                        <p class="what-right-content-text relative"><?= $how_second_content; ?></p>
                    </div>
                </div>
            </div>
        </div>

        <span class="trigger-second-mark"></span><!--&&&-->

        <div class="line-box-holder-2">
            <div class="relative super-line"></div>
        </div>

        <div class="container-fluid no-padding">
            <div class="row no-margin">
                <div class="col-sm-7 col-sm-offset-5 no-padding">
                    <div class="relative how-water-mark" style="background-image: url('<?= $how_right_water_mark; ?>')"><!--Water Mark Here--></div><!--&&&-->
                </div>
            </div>
        </div>
    </section>

</div>

<div class="relative how-large-bg-box">
    <div class="how-large-bg" style="background-image: url('<?= $how_large_background; ?>')"></div>
</div>

<!--  Get All Founders  -->
<div id="who" class="landing-content-box-2" style="background-image: url('<?= $page_bg; ?>');">
    <div class="black-box-who">

        <div class="container">
            <div class="row">
                <div class="col-sm-7 hidden-xs">
                    <div class="owl-carousel owl-theme">
                        <?php
                        $args = array('post_type' => 'founder');
                        $founder_thumb = new WP_Query( $args );

                        while ($founder_thumb->have_posts()): $founder_thumb->the_post();
                            $id = get_the_ID();
                            ?>
                            <div class="item">
                                <a href="#founder-<?= $id ?>" data-toggle="modal" data-target="#founder-<?= $id ?>" class="founder-open">
                                    <img src="<?= the_post_thumbnail_url( 'square-large' ); ?>" alt="<?= the_title(); ?>" class="img-responsive center-block">
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>

                <div class="col-sm-5 special-padding-box">
                    <div class="line-box-holder-3">
                        <div class="relative super-line"></div>
                    </div>

                    <div class="who-box-container">
                        <h2 class="relative"><?= $who_section_title; ?></h2>
                        <p class="relative"><?= $how_section_content; ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div><!--/.black-box-who-->

    <?php
    //$how_water_mark = get_field('how_water_mark');
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-7 col-sm-8 col-sm-offset-2">
                <div class="founders-thumbs-box">
                    <?php
                        $args = array('post_type' => 'founder', 'order' => 'ASC');
                        $founders = new WP_Query( $args );

                        while ($founders->have_posts()) : $founders->the_post();
                           $id = get_the_ID();

                        ?>
                        <div class="col-xs-6 thumbnail-box">
                            <a href="#founder-<?= $id ?>" data-toggle="modal" data-target="#founder-<?= $id ?>" class="founder-open founder-tumbnail">
                                <img src="<?= the_field('founder_image', $id); ?>" alt="<?= the_title(); ?>" class="img-responsive center-block">
                                <div class="thum-overlay"></div>
                                <div class="tum-label">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                <div class="rotated-square"></div>
                            </a>
                            <a href="" class="founder-open" data-toggle="modal" data-target="#founder-<?= $id ?>"><h4 class="text-center"><?= the_title(); ?></h4></a>

                            <!-- Modal -->
                            <div class="modal fade" id="founder-<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="<?= the_field('founder_image', $id); ?>" alt="<?= the_title(); ?>" class="img-responsive center-block">
                                            <h4 class="text-center founder-modal-title"><?= the_title(); ?></h4>

                                            <?= the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Of Modal-->

                        </div><!--/.thumbnail-box -->

                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>


</div>


<?php get_footer(); ?>