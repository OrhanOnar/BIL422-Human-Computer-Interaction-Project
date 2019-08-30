

        <!-- JS -->
    <script src="<?php echo ASSETS; ?>js/jquery-2.1.4.min.js"></script>

    <script src="<?php echo ASSETS; ?>js/mfn.menu.js"></script>
    <script src="<?php echo ASSETS; ?>js/jquery.plugins.js"></script>
    <script src="<?php echo ASSETS; ?>js/jquery.jplayer.min.js"></script>
    <script src="<?php echo ASSETS; ?>js/animations/animations.js"></script>
    <script src="<?php echo ASSETS; ?>js/scripts.js"></script>

    <script src="<?php echo ASSETS; ?>plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo ASSETS; ?>plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?php echo ASSETS; ?>plugins/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
    <script src="<?php echo ASSETS; ?>plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="<?php echo ASSETS; ?>plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="<?php echo ASSETS; ?>plugins/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="<?php echo ASSETS; ?>plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="<?php echo ASSETS; ?>plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="<?php echo ASSETS; ?>plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="<?php echo ASSETS; ?>plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>

    <script>

        var tpj = jQuery;
        var revapi1;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1_2").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_2");
            } else {
                revapi1 = tpj("#rev_slider_1_2").show().revolution({
                    sliderType: "hero",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {},
                    responsiveLevels: [1240, 1024, 778, 480],
                    gridwidth: [1400, 1024, 778, 480],
                    gridheight: [680, 700, 500, 500],
                    lazyType: "smart",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
                    },
                    shadow: 0,
                    spinner: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "on",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        disableFocusListener: false,
                    }
                });
            }
        });
        /*]]>*/
    </script>
    
    <script>
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img.logo-main");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "content/buddy/images/retina-buddy.png").width(retinaLogoW).height(retinaLogoH);
                var stickyEl = jQuery("#logo img.logo-sticky");
                var stickyLogoW = stickyEl.width();
                var stickyLogoH = stickyEl.height();
                stickyEl.attr("src", "content/buddy/images/retina-buddy.png").width(stickyLogoW).height(stickyLogoH);
                var mobileEl = jQuery("#logo img.logo-mobile");
                var mobileLogoW = mobileEl.width();
                var mobileLogoH = mobileEl.height();
                mobileEl.attr("src", "content/buddy/images/retina-buddy.png").width(mobileLogoW).height(mobileLogoH);
            }
        });
    </script>