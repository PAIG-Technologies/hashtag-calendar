<!DOCTYPE html>
<html translate="no">
<head>
    <!-- Basic Page Needs ================================================== -->
    <title> <?php bloginfo("title"); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="google" content="notranslate">
    <!-- CSS ================================================== -->

<?php $enable_google_search =  getCustomThemeValue("enable_google_search", "yes");
if($enable_google_search == 'no'):
?>
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">

<?php endif; ?>

    <?php
        $google_id =  getCustomThemeValue("google_analytics", false);
        if(isset($google_id) && $google_id !=false  && $enable_google_search !== 'no' ) :
        ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-<?php echo $google_id; ?>"></script>
        <script>

            window.dataLayer = window.dataLayer || [];

            function gtag(){dataLayer.push(arguments);}

            gtag('js', new Date());

            gtag('config', 'UA-<?php echo $google_id; ?>');

        </script>
    <?php endif; ?>
    <?php


    $facebook_pixel =  getCustomThemeValue("facebook_pixel", "201889034433353");

    if(isset($facebook_pixel) && $enable_google_search !== 'no'):
        ?>
        <!-- Facebook Pixel Code -->
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '<?php echo $facebook_pixel; ?>');
            fbq('track', 'PageView');
        </script>
        <noscript>
            <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?php echo $facebook_pixel; ?>&ev=PageView&noscript=1" />
        </noscript>
        <!-- End Facebook Pixel Code -->
    <?php endif; ?>



    <?php wp_head(); ?>
</head>

<body>
<?php wp_body_open(); ?>
<!-- Wrapper -->
<div id="wrapper">
    <!-- Header Container
================================================== -->
    <header id="header-container">
        <!-- Topbar -->
        <!-- Header -->
        <div id="header">
            <div id="top-bar" class="bg-header">
                <div class="container">

                        <div class="flex flex-wrap justify-between px3 items-center">
                            <!-- Left Side Content -->
                            <div class="p cs-hidden md:block lg:block">
                                <!-- Top bar -->
                                <ul class="top-bar-menu">
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:<?php echo str_replace(" ","",getCustomThemeValue("phone_number1", "1300007244")) ?>"> <?php echo getCustomThemeValue("phone_number1", "1300 00 PAIG") ?>
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:<?php echo getCustomThemeValue("email_address", "admin@paigtechnologies.com.au") ?>"><?php echo getCustomThemeValue("email_address", "admin@paigtechnologies.com.au") ?>
                                        </a>
                                    </li>
                                </ul>

                            </div>


                            <div class="portal-logo-mobile md:hidden lg:hidden w-1/3 text-center order-last pr-5">
                                <?php  $show_hastag_logo = getCustomThemeValue("show_hashtag_portal_logo","yes");
                                if($show_hastag_logo == 'yes'):?>
                                <?php  $hashtag_portal_url = getCustomThemeValue("hashtag_portal_url","https://www.hashtagportal.com/"); ?>
                                <a href="<?php echo $hashtag_portal_url; ?>" >
                                <img src="<?php echo getCustomThemeValue("hashtag_portal_logo_white", "https://www.hashtagportal.com/wp-content/uploads/1/2020/07/Portal-white-.png") ?>"/>
                                </a>
                                <?php endif; ?>

                            </div>

                            <!-- Left Side Content -->
                            <div class="flex flex-wrap items-center">
                                <!-- Social Icons -->
                                <ul class="social-icons">
                                    <?php $socialItems = getPaigSocialMedia();
                                    foreach ($socialItems as $socialItem) :
                                        if (!empty(getCustomThemeValue($socialItem))) :
                                            ?>
                                            <li>
                                                <a class="<?php echo $socialItem ?>" target="_blank"
                                                   href="<?php echo getCustomThemeValue($socialItem) ?>">
                                                    <i class="icon-<?php echo $socialItem ?>"></i>
                                                </a>
                                            </li>
                                        <?php endif;
                                    endforeach; ?>
                                </ul>
                            </div>
                            <!-- Left Side Content / End -->

                        </div>

                </div>

            </div>
            <div class="container">
                <div class="flex items-center justify-between py-5">
                    <!-- Logo -->
                    <div id="logo" class="flex-1">
                        <a href="<?php echo getCustomThemeValue("custom_logo_url", site_url()) ?>">
                            <?php if (has_custom_logo()) :
                                echo wp_get_attachment_image(get_theme_mod('custom_logo'), 'full');
                            else : ?>
                                <h3>  <?php bloginfo('name'); ?></h3>
                            <?php endif; ?>
                        </a>
                    </div>
                    <!-- Mobile Navigation -->
                    <div class="mmenu-trigger">
                        <button class="hamburger hamburger--collapse" type="button">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
                        </button>
                    </div>


                    <!-- Main Navigation -->
                    <nav id="navigation" class="style-1">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary_menu',
                            'menu_class' => 'flex flex-wrap items-center',
                            'container' => 'ul',
                            'menu_id' => 'responsive',
                            'walker' => new Hashtag\Theme\WP_Bootstrap_Navwalker()
                        ));
                        ?>
                    </nav>

                    <!-- Main Navigation / End -->

                </div>
            </div>
        </div>
        <!-- Header / End -->
    </header>
    <!-- Header Container / End -->