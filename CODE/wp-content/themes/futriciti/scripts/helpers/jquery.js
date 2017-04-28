
/**
 * Function to replace images on the background or on the image itself. This function should be called on document
 * ready and as a callback of any ajax Call.
 *
 * @param {String} imgClass Class to find and replace the src attribute. Default img-lazy
 * @param {String} imgClassBackground Class to find and replace the background-image Css Attribute. Default img-bg-lazy
 * @param {String} imgClassLoaded Class used to identify elements whom images where replaced.
 */
function replace_images (imgClass, imgClassBackground, imgClassLoaded) {

    if ( !imgClass ) imgClass = "img-lazy";
    if ( !imgClassBackground ) imgClassBackground = "img-bg-lazy";
    if ( !imgClassLoaded ) imgClassLoaded = "img-lazy-loaded";

    /** IMG tag. Replace the image sd with the one with hd quality       **/
    jQuery(`.${imgClass}`).each(function () {
        const $this = jQuery(this);
        const img_hd = $this.data("img-hd");

        if (img_hd && !$this.is(`.${imgClassLoaded}`)) {
            jQuery("<img/>", {
                src: img_hd
            })
                .data("target", $this)
                .load(function () {
                    const $imgAssociated = jQuery(this).data("target");
                    $imgAssociated.attr('src', jQuery(this).attr("src")).addClass(imgClassLoaded);
                })
                .error(function() {
                    const $imgAssociated = jQuery(this).data("target");
                    $imgAssociated.attr('src', jQuery(this).attr("src")).addClass(imgClassLoaded);
                });
        }
    });

    /** replace the background image sd with the one with hd quality **/
    jQuery(`.${imgClassBackground}`).each(function () {
        const $this = jQuery(this);
        const img_hd = $this.data("img-hd");

        if (img_hd && !$this.is(".img-lazy-loaded")) {
            jQuery("<img/>", {
                src: img_hd
            })
                .data("target", $this)
                .load(function () {
                    const $imgAssociated = jQuery(this).data("target");
                    $imgAssociated.css({
                        'backgroundImage': "url('" + jQuery(this).attr("src") + "')"
                    }).addClass(imgClassLoaded);
                })
                .error(function () {
                    const $imgAssociated = jQuery(this).data("target");
                    $imgAssociated.css({
                        'backgroundImage': "url('" + jQuery(this).attr("src") + "')"
                    }).addClass(imgClassLoaded);
                });
        }
    });
}
