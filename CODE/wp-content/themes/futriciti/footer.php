<?php

?>

	</div><!-- #content-wrapper -->

<?php
$page_bg = get_field('page_background', 'options');

$footer_copy = get_field('copyright', 'option');
$siteBy_label = get_field('site_by_label', 'option');
?>

<?php if ( get_field('social_display_on_footer', 'option') ) : ?>

<?php endif; ?>

<footer id="colophon" class="site-footer <?php echo $footer_extra_class?>" role="contentinfo" style="background-image: url('<?= $page_bg; ?>');">
    <div class="footer-wrapper">
        <div class="footer-box">
            <h2 class="super-footer-title">
                <?= the_field('footer_title', get_option( 'page_on_front' )); ?>
            </h2>
        </div>

        <div class='box-scene footer-box-scene'>
            <a href="#" class="open-form">
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

        <div class="site-info">
            <?php do_shortcode($footer_copy); ?>
        </div>
        <div class="site-by">
            <?php render_site_by($siteBy_label, false); ?>
        </div>
    </div>
</footer><!-- #colophon -->
<?php
if ( get_field("display_back_to_top", "option") ) render_back_top();
?>
<?php
the_field('custom_js_footer', 'option');
?>
<?php wp_footer(); ?>
</body>
</html>