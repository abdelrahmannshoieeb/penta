@extends('layout.master')

@section('css')
<style>
        img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel="alternate" type="application/rss+xml" title="Rovex &raquo; Feed" href="https://demo.awaikenthemes.com/rovex/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Rovex &raquo; Comments Feed" href="https://demo.awaikenthemes.com/rovex/comments/feed/" />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/demo.awaikenthemes.com\/rovex\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.2"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function() {
                    n.DOMReady = !0
                }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <link rel='stylesheet' id='elementor-frontend-css' href='https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.26.4' media='all' />
    <link rel='stylesheet' id='elementor-post-1810-css' href='https://demo.awaikenthemes.com/rovex/wp-content/uploads/elementor/css/post-1810.css?ver=1739436260' media='all' />
    <link rel='stylesheet' id='elementor-post-1814-css' href='https://demo.awaikenthemes.com/rovex/wp-content/uploads/elementor/css/post-1814.css?ver=1739436260' media='all' />
    <style id='wp-emoji-styles-inline-css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='classic-theme-styles-inline-css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: rgb(252, 252, 252);
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none
        }
    </style>
    <style id='global-styles-inline-css'>
        :root {
            --wp--preset--aspect-ratio--square: 1;
            --wp--preset--aspect-ratio--4-3: 4/3;
            --wp--preset--aspect-ratio--3-4: 3/4;
            --wp--preset--aspect-ratio--3-2: 3/2;
            --wp--preset--aspect-ratio--2-3: 2/3;
            --wp--preset--aspect-ratio--16-9: 16/9;
            --wp--preset--aspect-ratio--9-16: 9/16;
            --wp--preset--color--black: rgb(255, 255, 255);
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: rgb(208, 0, 0);
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flex {
            display: flex;
        }



        .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        .is-layout-flex> :is(*, div) {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        .is-layout-grid> :is(*, div) {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }



        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :root :where(.wp-block-pullquote) {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css' href='https://demo.awaikenthemes.com/rovex/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=6.0.2' media='all' />
    <link rel='stylesheet' id='elementskit-parallax-style-css' href='https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementskit/modules/parallax/assets/css/style.css?ver=3.7.8' media='all' />
    <link rel='stylesheet' id='elementor-icons-css' href='https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.34.0' media='all' />
    <link rel='stylesheet' id='elementor-post-9-css' href='https://demo.awaikenthemes.com/rovex/wp-content/uploads/elementor/css/post-9.css?ver=1739436260' media='all' />
    <link rel='stylesheet' id='widget-heading-css' href='https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementor/assets/css/widget-heading.min.css?ver=3.26.4' media='all' />
    <link rel='stylesheet' id='e-animation-fadeInUp-css' href='https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementor/assets/lib/animations/styles/fadeInUp.min.css?ver=3.26.4' media='all' />
    <link rel='stylesheet' id='widget-text-editor-css' href='https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementor/assets/css/widget-text-editor.min.css?ver=3.26.4' media='all' />
    <link rel='stylesheet' id='widget-image-css' href='https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementor/assets/css/widget-image.min.css?ver=3.26.4' media='all' />
    <link rel='stylesheet' id='swiper-css' href='https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5' media='all' />
    <link rel='stylesheet' id='e-swiper-css' href='https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min.css?ver=3.26.4' media='all' />
    <link rel='stylesheet' id='widget-image-carousel-css' href='https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementor/assets/css/widget-image-carousel.min.css?ver=3.26.4' media='all' />
    <link rel='stylesheet' id='widget-text-path-css' href='https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementor/assets/css/widget-text-path.min.css?ver=3.26.4' media='all' />
    <link rel='stylesheet' id='widget-icon-box-css' href='https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementor/assets/css/widget-icon-box.min.css?ver=3.26.4' media='all' />
    <link rel='stylesheet' id='widget-counter-css' href='https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementor/assets/css/widget-counter.min.css?ver=3.26.4' media='all' />
    <link rel='stylesheet' id='elementor-post-12-css' href='https://demo.awaikenthemes.com/rovex/wp-content/uploads/elementor/css/post-12.css?ver=1739436261' media='all' />
    <link rel='stylesheet' id='ekit-widget-styles-css' href='https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css?ver=3.3.7' media='all' />
    <link rel='stylesheet' id='ekit-widget-styles-pro-css' href='https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementskit/widgets/init/assets/css/widget-styles-pro.css?ver=3.7.8' media='all' />
    <link rel='stylesheet' id='ekit-responsive-css' href='https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css?ver=3.3.7' media='all' />
    <link rel='stylesheet' id='rovex-font-css' href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&amp;display=swap' media='all' />
    <link rel='stylesheet' id='rovex-css-variable-css' href='https://demo.awaikenthemes.com/rovex/wp-content/themes/rovex/assets/css/css-variable.css?ver=1.0.0' media='all' />
    <link rel='stylesheet' id='fontawesome-6.4.0-css' href='https://demo.awaikenthemes.com/rovex/wp-content/themes/rovex/assets/css/all.min.css?ver=1.0.0' media='all' />
    <link rel='stylesheet' id='bootstrap-5.3.2-css' href='https://demo.awaikenthemes.com/rovex/wp-content/themes/rovex/assets/css/bootstrap.min.css?ver=1.0.0' media='all' />
    <link rel='stylesheet' id='rovex-style-css' href='https://demo.awaikenthemes.com/rovex/wp-content/themes/rovex/style.css?ver=1.0.0' media='all' />
 
    <script src="https://demo.awaikenthemes.com/rovex/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
    <script src="https://demo.awaikenthemes.com/rovex/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
    <script src="https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementskit/modules/parallax/assets/js/jarallax.js?ver=3.7.8" id="jarallax-js"></script>
    <link rel="https://api.w.org/" href="https://demo.awaikenthemes.com/rovex/wp-json/" />
    <link rel="alternate" title="JSON" type="application/json" href="https://demo.awaikenthemes.com/rovex/wp-json/wp/v2/pages/12" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://demo.awaikenthemes.com/rovex/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.7.2" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="https://demo.awaikenthemes.com/rovex/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdemo.awaikenthemes.com%2Frovex%2F&amp;format=xml" />
    <meta name="generator" content="Elementor 3.26.4; features: e_element_cache; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <script type="text/javascript">
        var elementskit_module_parallax_url = "https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementskit/modules/parallax/";
    </script>
    <style>
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
        .e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
            background-image: none !important;
        }

        @media screen and (max-height: 1024px) {

            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }

        @media screen and (max-height: 640px) {

            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
            .e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
                background-image: none !important;
            }
        }
    </style>
@endsection
@section('admin-content')
    <div 
     data-elementor-type="wp-page" data-elementor-id="12" class="elementor elementor-12" style="background-color: white;">
        <div class="elementor-element elementor-element-3aa22f3 our-service e-flex e-con-boxed e-con e-parent" data-id="3aa22f3" data-element_type="container">
     
            <div class="e-con-inner" >
                <div   dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" class="elementor-element elementor-element-3f3ce22 e-con-full e-flex e-con e-child" data-id="3f3ce22" data-element_type="container">
                    <div class="elementor-element elementor-element-3d8dba7 e-con-full e-flex e-con e-child" data-id="3d8dba7" data-element_type="container">
                        <div class="elementor-element elementor-element-801cc70 section-title at-heading-animation at-animation-heading-none elementor-widget elementor-widget-heading" data-id="801cc70" data-element_type="widget" data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                        </div>
                        <div class="elementor-element elementor-element-6e35b7a at-heading-animation at-animation-heading-none elementor-widget elementor-widget-heading" data-id="6e35b7a" data-element_type="widget" data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default" style="color: #32373c;">{{ __('design.graphic_services') }} 
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-fb28902 e-con-full e-flex e-con e-child" data-id="fb28902" data-element_type="container">
                        <div class="elementor-element elementor-element-712f73c elementor-align-right elementor-tablet-align-left elementor-invisible elementor-widget elementor-widget-button" data-id="712f73c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a style="background-color: #0693e3;" class="elementor-button elementor-button-link elementor-size-sm" href="https://demo.awaikenthemes.com/rovex/services/">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4401 11.0001C17.0996 11.0001 14.9665 8.77909 14.9665 6.34009V5.34009H13.0465V6.34009C13.0465 8.11409 13.7934 9.77809 14.9656 11.0001H3.12012V13.0001H14.9656C13.7934 14.2221 13.0465 15.8861 13.0465 17.6601V18.6601H14.9665V17.6601C14.9665 15.2211 17.0996 13.0001 19.4401 13.0001H20.4001V11.0001H19.4401Z" fill="currentColor"></path>
                                                </svg> </span>
                                            <span class="elementor-button-text" style="color:#fff;">{{ __('design.view_all_services') }}</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-ceaebe8 e-con-full e-flex e-con e-child" data-id="ceaebe8" data-element_type="container">
                    <div class="elementor-element elementor-element-045e2f7 our-services-boxes elementor-invisible elementor-widget elementor-widget-elementskit-tab" data-id="045e2f7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="elementskit-tab.default">
                        <div class="elementor-widget-container">
                            <div class="ekit-wid-con">
                                <div class="elementkit-tab-wraper vertical  elementskit-fitcontent-tab ">
                                    <ul class="nav nav-tabs elementkit-tab-nav  tab-nav-fluid"   dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
                                        <li class="elementkit-nav-item elementor-repeater-item-c7b0a5b">
                                            <a class="elementkit-nav-link  active right-pos" style="background-color: #0693e3; color: #fff;" id="content-c7b0a5b67b208e7917fc-tab" data-ekit-handler-id="ui-ux-design" data-ekit-toggle="tab" data-target="#content-c7b0a5b67b208e7917fc" href="#content-c7b0a5b67b208e7917fc"
                                                data-ekit-toggle-trigger="click"
                                                aria-describedby="content-c7b0a5b67b208e7917fc">
                                                <span class="elementskit-tab-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4401 11.0001C17.0996 11.0001 14.9665 8.77909 14.9665 6.34009V5.34009H13.0465V6.34009C13.0465 8.11409 13.7934 9.77809 14.9656 11.0001H3.12012V13.0001H14.9656C13.7934 14.2221 13.0465 15.8861 13.0465 17.6601V18.6601H14.9665V17.6601C14.9665 15.2211 17.0996 13.0001 19.4401 13.0001H20.4001V11.0001H19.4401Z" fill="currentColor"></path>
                                                    </svg></span>
                                                <div class="ekit-tab-title-group">
                                                    <span class="elementskit-tab-title">UI/UX Design</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="elementkit-nav-item elementor-repeater-item-2290172">
                                            <a style="background-color: #0693e3; color: #fff;" class="elementkit-nav-link  right-pos" id="content-229017267b208e7917fc-tab" data-ekit-handler-id="digital-marketing-design" data-ekit-toggle="tab" data-target="#content-229017267b208e7917fc" href="#content-229017267b208e7917fc"
                                                data-ekit-toggle-trigger="click"
                                                aria-describedby="content-229017267b208e7917fc">
                                                <span class="elementskit-tab-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4401 11.0001C17.0996 11.0001 14.9665 8.77909 14.9665 6.34009V5.34009H13.0465V6.34009C13.0465 8.11409 13.7934 9.77809 14.9656 11.0001H3.12012V13.0001H14.9656C13.7934 14.2221 13.0465 15.8861 13.0465 17.6601V18.6601H14.9665V17.6601C14.9665 15.2211 17.0996 13.0001 19.4401 13.0001H20.4001V11.0001H19.4401Z"></path>
                                                    </svg></span>
                                                <div class="ekit-tab-title-group">
                                                    <span class="elementskit-tab-title">Digital Marketing Design</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="elementkit-nav-item elementor-repeater-item-a8d6b13">
                                            <a style="background-color:#0693e3; color: #fff;" class="elementkit-nav-link  right-pos" id="content-a8d6b1367b208e7917fc-tab" data-ekit-handler-id="motion-graphics" data-ekit-toggle="tab" data-target="#content-a8d6b1367b208e7917fc" href="#content-a8d6b1367b208e7917fc"
                                                data-ekit-toggle-trigger="click"
                                                aria-describedby="content-a8d6b1367b208e7917fc">
                                                <span class="elementskit-tab-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4401 11.0001C17.0996 11.0001 14.9665 8.77909 14.9665 6.34009V5.34009H13.0465V6.34009C13.0465 8.11409 13.7934 9.77809 14.9656 11.0001H3.12012V13.0001H14.9656C13.7934 14.2221 13.0465 15.8861 13.0465 17.6601V18.6601H14.9665V17.6601C14.9665 15.2211 17.0996 13.0001 19.4401 13.0001H20.4001V11.0001H19.4401Z"></path>
                                                    </svg></span>
                                                <div class="ekit-tab-title-group">
                                                    <span class="elementskit-tab-title">Motion Graphics</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content elementkit-tab-content">
                                        <div class="tab-pane elementkit-tab-pane elementor-repeater-item-c7b0a5b  active show" id="content-c7b0a5b67b208e7917fc" role="tabpanel"
                                            aria-labelledby="content-c7b0a5b67b208e7917fc-tab">
                                            <div class="animated fadeIn">

                                                <div class="widgetarea_warper widgetarea_warper_editable" data-elementskit-widgetarea-key="045e2f7" data-elementskit-widgetarea-index="c7b0a5b">
                                                    <div class="widgetarea_warper_edit" data-elementskit-widgetarea-key="045e2f7" data-elementskit-widgetarea-index="c7b0a5b">
                                                        <i class="eicon-edit" aria-hidden="true"></i>
                                                        <span>Edit Content</span>
                                                    </div>

                                                    <div class="ekit-widget-area-container">
                                                        <div data-elementor-type="wp-post" data-elementor-id="7464" class="elementor elementor-7464">
                                                            <div class="elementor-element elementor-element-5f678e1 e-con-full service-tab-image e-flex e-con e-child" data-id="5f678e1" data-element_type="container">
                                                                <div class="elementor-element elementor-element-cac2548 at-image-animation at-animation-image-none elementor-widget elementor-widget-image" data-id="cac2548" data-element_type="widget" data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async" width="1200" height="800" src="https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/service-image-1.jpg" class="attachment-full size-full wp-image-461" alt="" srcset="https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/service-image-1.jpg 1200w, https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/service-image-1-300x200.jpg 300w, https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/service-image-1-1024x683.jpg 1024w, https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/service-image-1-768x512.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px" />
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-9567d40 elementor-absolute service-box-item elementor-widget__width-inherit ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="9567d40" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="elementskit-icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="ekit-wid-con"> <!-- link opening -->
                                                                            <!-- end link opening -->

                                                                            <div class="elementskit-infobox text-left text-left icon-top-align elementor-animation-   image-active">
                                                                                <div class="elementskit-box-header elementor-animation-">
                                                                                    <div class="elementskit-info-box-icon  " style="background-color: #8ed1fc;">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                                                            <path d="M26.8043 5.66368H25.177V1.5955C25.177 0.968226 24.668 0.45459 24.0361 0.45459H5.96341C5.33613 0.45459 4.82704 0.963681 4.82704 1.5955V5.66368H3.19522C2.14068 5.66368 1.28613 6.52277 1.28613 7.57277V23.0091C1.28613 24.0637 2.14522 24.9182 3.19522 24.9182H11.6043L9.86341 26.6137H9.23613C8.30431 26.6137 7.54522 27.3728 7.54522 28.3V28.7773H5.79977C5.59068 28.7773 5.41795 28.95 5.41795 29.1591C5.41795 29.3682 5.59068 29.541 5.79977 29.541H24.1861C24.3952 29.541 24.568 29.3682 24.568 29.1591C24.568 28.95 24.3952 28.7773 24.1861 28.7773H22.4407V28.3C22.4407 27.3682 21.6816 26.6137 20.7543 26.6137H20.127L18.3861 24.9182H26.7952C27.8498 24.9182 28.7043 24.0591 28.7043 23.0091V7.57277C28.7134 6.51823 27.8543 5.66368 26.8043 5.66368ZM21.6816 28.3046V28.7819H8.31795V28.3046C8.31795 27.7955 8.73159 27.3773 9.24522 27.3773H20.7589C21.268 27.3773 21.6816 27.7955 21.6816 28.3046ZM20.918 12.8137L26.3634 14.65C26.3634 14.65 26.3589 14.65 26.3543 14.65L23.668 14.8682C23.2861 14.9 22.9907 15.1955 22.9589 15.5773L22.718 18.2637L20.918 12.8137ZM21.1589 12.091C20.8816 12 20.577 12.0682 20.368 12.2773C20.1589 12.4864 20.0861 12.791 20.1816 13.0682L21.4452 16.8637H5.96341C5.75431 16.8637 5.58613 16.6955 5.58613 16.4864V3.9955H24.4089V13.1728L21.1589 12.091ZM5.96341 1.21823H24.0316C24.2407 1.21823 24.4089 1.38641 24.4089 1.5955V3.23641H5.59068V1.5955C5.59068 1.38641 5.75886 1.21823 5.96341 1.21823ZM3.19522 6.42732H4.8225V16.491C4.8225 17.1182 5.33159 17.6319 5.95886 17.6319H21.6952L21.9907 18.5137C22.0998 18.8364 22.3907 19.0455 22.7225 19.0455C22.7543 19.0455 22.7861 19.0455 22.818 19.041C23.1861 18.9955 23.468 18.7046 23.4952 18.3364L23.727 15.641L26.4134 15.4228C26.7861 15.391 27.077 15.1137 27.118 14.7455C27.1634 14.3773 26.9452 14.0364 26.5952 13.9182L25.1725 13.441V6.42732H26.7998C27.4316 6.42732 27.9498 6.94095 27.9498 7.57732V19.5819H2.04977V7.57277C2.04977 6.94095 2.56341 6.42732 3.19522 6.42732ZM19.0361 26.6137H10.9634L12.6998 24.9182H17.2998L19.0361 26.6137ZM26.8043 24.1591H3.19522C2.56341 24.1591 2.04522 23.6455 2.04522 23.0091V20.341H27.9452V23.0091C27.9498 23.641 27.4361 24.1591 26.8043 24.1591Z" fill="black"></path>
                                                                                            <path d="M14.9994 21.032C14.3267 21.032 13.7812 21.5774 13.7812 22.2456C13.7812 22.9183 14.3267 23.4638 14.9994 23.4638C15.6722 23.4638 16.2176 22.9183 16.2176 22.2456C16.2176 21.5774 15.6722 21.032 14.9994 21.032ZM14.9994 22.7047C14.7494 22.7047 14.5449 22.5002 14.5449 22.2502C14.5449 22.0002 14.7494 21.8002 14.9994 21.8002C15.2494 21.8002 15.454 22.0047 15.454 22.2502C15.454 22.5002 15.2494 22.7047 14.9994 22.7047Z" fill="black"></path>
                                                                                            <path d="M13.9725 10.0181V8.51356C13.9725 8.02265 13.5725 7.6272 13.0862 7.6272H9.05888C8.56797 7.6272 8.16797 8.0272 8.16797 8.51356V12.5408C8.16797 13.0317 8.56797 13.4272 9.05888 13.4272H11.1043C11.4043 14.6181 12.4816 15.4999 13.7634 15.4999C15.2771 15.4999 16.5134 14.2681 16.5134 12.7499C16.5134 11.309 15.3907 10.1227 13.9725 10.0181ZM8.93615 12.5408V8.51356C8.93615 8.44538 8.9907 8.38629 9.06342 8.38629H13.0907C13.1589 8.38629 13.218 8.44083 13.218 8.51356V10.0636C11.9952 10.3136 11.068 11.3817 11.0271 12.6681H9.06342C8.9907 12.6636 8.93615 12.609 8.93615 12.5408ZM13.768 14.7408C12.6725 14.7408 11.7816 13.8499 11.7816 12.7545C11.7816 11.659 12.6725 10.7681 13.768 10.7681C14.8634 10.7681 15.7543 11.659 15.7543 12.7545C15.7498 13.8499 14.8589 14.7408 13.768 14.7408Z" fill="black"></path>
                                                                                            <path d="M18.2774 6.72742C18.141 6.52742 17.9137 6.40469 17.6683 6.40015H17.6637C17.4228 6.40015 17.1956 6.51833 17.0546 6.71378L15.3319 9.15469C15.1728 9.38196 15.1501 9.67742 15.2774 9.92287C15.4046 10.1683 15.6546 10.3229 15.9319 10.3274L19.3319 10.3592H19.341C19.6137 10.3592 19.8683 10.2092 19.9956 9.96833C20.1274 9.72287 20.1092 9.42742 19.9547 9.20015L18.2774 6.72742ZM15.9546 9.5956L17.6456 7.15469L19.3183 9.5956H15.9546Z" fill="black"></path>
                                                                                            <path d="M7.03611 2.6091H7.44521C7.6543 2.6091 7.82702 2.43637 7.82702 2.22728C7.82702 2.01819 7.6543 1.84546 7.44521 1.84546H7.03611C6.82702 1.84546 6.6543 2.01819 6.6543 2.22728C6.6543 2.43637 6.82702 2.6091 7.03611 2.6091Z" fill="black"></path>
                                                                                            <path d="M8.56834 2.6091H8.97743C9.18652 2.6091 9.35925 2.43637 9.35925 2.22728C9.35925 2.01819 9.18652 1.84546 8.97743 1.84546H8.56834C8.35925 1.84546 8.18652 2.01819 8.18652 2.22728C8.18652 2.43637 8.35925 2.6091 8.56834 2.6091Z" fill="black"></path>
                                                                                            <path d="M10.0996 2.6091H10.5087C10.7178 2.6091 10.8905 2.43637 10.8905 2.22728C10.8905 2.01819 10.7178 1.84546 10.5087 1.84546H10.0996C9.8905 1.84546 9.71777 2.01819 9.71777 2.22728C9.71777 2.43637 9.8905 2.6091 10.0996 2.6091Z" fill="black"></path>
                                                                                            <path d="M11.6318 2.6091H12.0409C12.25 2.6091 12.4227 2.43637 12.4227 2.22728C12.4227 2.01819 12.25 1.84546 12.0409 1.84546H11.6318C11.4227 1.84546 11.25 2.01819 11.25 2.22728C11.25 2.43637 11.4227 2.6091 11.6318 2.6091Z" fill="black"></path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="box-body">
                                                                                    <h3 class="elementskit-info-box-title">
                                                                                        UI/UX Design </h3>
                                                                                    <p>{{ __('design.ui_ux_brief') }}.</p>
                                                                                    <div class="box-footer disable_hover_button">
                                                                                        <div class="btn-wraper">
                                                                                            <a style="color: #0693e3;" href="https://demo.awaikenthemes.com/rovex/services/ui-ux-design" target="_self" rel="" class="elementskit-btn whitespace--normal elementor-animation-">
                                                                                                {{ __('design.read_more') }}
                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4401 11.0001C17.0996 11.0001 14.9665 8.77909 14.9665 6.34009V5.34009H13.0465V6.34009C13.0465 8.11409 13.7934 9.77809 14.9656 11.0001H3.12012V13.0001H14.9656C13.7934 14.2221 13.0465 15.8861 13.0465 17.6601V18.6601H14.9665V17.6601C14.9665 15.2211 17.0996 13.0001 19.4401 13.0001H20.4001V11.0001H19.4401Z" fill="currentColor"></path>
                                                                                                </svg>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                 
                                    
                                        <div class="tab-pane elementkit-tab-pane elementor-repeater-item-2290172 " id="content-229017267b208e7917fc" role="tabpanel"
                                            aria-labelledby="content-229017267b208e7917fc-tab">
                                            <div class="animated fadeIn">

                                                <div class="widgetarea_warper widgetarea_warper_editable" data-elementskit-widgetarea-key="045e2f7" data-elementskit-widgetarea-index="2290172">
                                                    <div class="widgetarea_warper_edit" data-elementskit-widgetarea-key="045e2f7" data-elementskit-widgetarea-index="2290172">
                                                        <i class="eicon-edit" aria-hidden="true"></i>
                                                        <span>Edit Content</span>
                                                    </div>

                                                    <div class="ekit-widget-area-container">
                                                        <div data-elementor-type="wp-post" data-elementor-id="7500" class="elementor elementor-7500">
                                                            <div class="elementor-element elementor-element-1bb424f e-con-full service-tab-image e-flex e-con e-child" data-id="1bb424f" data-element_type="container">
                                                                <div class="elementor-element elementor-element-b1438e2 at-image-animation at-animation-image-none elementor-widget elementor-widget-image" data-id="b1438e2" data-element_type="widget" data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async" width="1200" height="800" src="https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/service-image-4.jpg" class="attachment-full size-full wp-image-1062" alt="" srcset="https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/service-image-4.jpg 1200w, https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/service-image-4-300x200.jpg 300w, https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/service-image-4-1024x683.jpg 1024w, https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/service-image-4-768x512.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px" />
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-6a87678 elementor-absolute service-box-item elementor-widget__width-inherit ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="6a87678" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="elementskit-icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="ekit-wid-con"> <!-- link opening -->
                                                                            <!-- end link opening -->

                                                                            <div class="elementskit-infobox text-left text-left icon-top-align elementor-animation-   image-active">
                                                                                <div class="elementskit-box-header elementor-animation-">
                                                                                    <div class="elementskit-info-box-icon" style="background-color: #8ed1fc;">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                                                            <path d="M26.8043 5.66368H25.177V1.5955C25.177 0.968226 24.668 0.45459 24.0361 0.45459H5.96341C5.33613 0.45459 4.82704 0.963681 4.82704 1.5955V5.66368H3.19522C2.14068 5.66368 1.28613 6.52277 1.28613 7.57277V23.0091C1.28613 24.0637 2.14522 24.9182 3.19522 24.9182H11.6043L9.86341 26.6137H9.23613C8.30431 26.6137 7.54522 27.3728 7.54522 28.3V28.7773H5.79977C5.59068 28.7773 5.41795 28.95 5.41795 29.1591C5.41795 29.3682 5.59068 29.541 5.79977 29.541H24.1861C24.3952 29.541 24.568 29.3682 24.568 29.1591C24.568 28.95 24.3952 28.7773 24.1861 28.7773H22.4407V28.3C22.4407 27.3682 21.6816 26.6137 20.7543 26.6137H20.127L18.3861 24.9182H26.7952C27.8498 24.9182 28.7043 24.0591 28.7043 23.0091V7.57277C28.7134 6.51823 27.8543 5.66368 26.8043 5.66368ZM21.6816 28.3046V28.7819H8.31795V28.3046C8.31795 27.7955 8.73159 27.3773 9.24522 27.3773H20.7589C21.268 27.3773 21.6816 27.7955 21.6816 28.3046ZM20.918 12.8137L26.3634 14.65C26.3634 14.65 26.3589 14.65 26.3543 14.65L23.668 14.8682C23.2861 14.9 22.9907 15.1955 22.9589 15.5773L22.718 18.2637L20.918 12.8137ZM21.1589 12.091C20.8816 12 20.577 12.0682 20.368 12.2773C20.1589 12.4864 20.0861 12.791 20.1816 13.0682L21.4452 16.8637H5.96341C5.75431 16.8637 5.58613 16.6955 5.58613 16.4864V3.9955H24.4089V13.1728L21.1589 12.091ZM5.96341 1.21823H24.0316C24.2407 1.21823 24.4089 1.38641 24.4089 1.5955V3.23641H5.59068V1.5955C5.59068 1.38641 5.75886 1.21823 5.96341 1.21823ZM3.19522 6.42732H4.8225V16.491C4.8225 17.1182 5.33159 17.6319 5.95886 17.6319H21.6952L21.9907 18.5137C22.0998 18.8364 22.3907 19.0455 22.7225 19.0455C22.7543 19.0455 22.7861 19.0455 22.818 19.041C23.1861 18.9955 23.468 18.7046 23.4952 18.3364L23.727 15.641L26.4134 15.4228C26.7861 15.391 27.077 15.1137 27.118 14.7455C27.1634 14.3773 26.9452 14.0364 26.5952 13.9182L25.1725 13.441V6.42732H26.7998C27.4316 6.42732 27.9498 6.94095 27.9498 7.57732V19.5819H2.04977V7.57277C2.04977 6.94095 2.56341 6.42732 3.19522 6.42732ZM19.0361 26.6137H10.9634L12.6998 24.9182H17.2998L19.0361 26.6137ZM26.8043 24.1591H3.19522C2.56341 24.1591 2.04522 23.6455 2.04522 23.0091V20.341H27.9452V23.0091C27.9498 23.641 27.4361 24.1591 26.8043 24.1591Z" fill="black"></path>
                                                                                            <path d="M14.9994 21.032C14.3267 21.032 13.7812 21.5774 13.7812 22.2456C13.7812 22.9183 14.3267 23.4638 14.9994 23.4638C15.6722 23.4638 16.2176 22.9183 16.2176 22.2456C16.2176 21.5774 15.6722 21.032 14.9994 21.032ZM14.9994 22.7047C14.7494 22.7047 14.5449 22.5002 14.5449 22.2502C14.5449 22.0002 14.7494 21.8002 14.9994 21.8002C15.2494 21.8002 15.454 22.0047 15.454 22.2502C15.454 22.5002 15.2494 22.7047 14.9994 22.7047Z" fill="black"></path>
                                                                                            <path d="M13.9725 10.0181V8.51356C13.9725 8.02265 13.5725 7.6272 13.0862 7.6272H9.05888C8.56797 7.6272 8.16797 8.0272 8.16797 8.51356V12.5408C8.16797 13.0317 8.56797 13.4272 9.05888 13.4272H11.1043C11.4043 14.6181 12.4816 15.4999 13.7634 15.4999C15.2771 15.4999 16.5134 14.2681 16.5134 12.7499C16.5134 11.309 15.3907 10.1227 13.9725 10.0181ZM8.93615 12.5408V8.51356C8.93615 8.44538 8.9907 8.38629 9.06342 8.38629H13.0907C13.1589 8.38629 13.218 8.44083 13.218 8.51356V10.0636C11.9952 10.3136 11.068 11.3817 11.0271 12.6681H9.06342C8.9907 12.6636 8.93615 12.609 8.93615 12.5408ZM13.768 14.7408C12.6725 14.7408 11.7816 13.8499 11.7816 12.7545C11.7816 11.659 12.6725 10.7681 13.768 10.7681C14.8634 10.7681 15.7543 11.659 15.7543 12.7545C15.7498 13.8499 14.8589 14.7408 13.768 14.7408Z" fill="black"></path>
                                                                                            <path d="M18.2774 6.72742C18.141 6.52742 17.9137 6.40469 17.6683 6.40015H17.6637C17.4228 6.40015 17.1956 6.51833 17.0546 6.71378L15.3319 9.15469C15.1728 9.38196 15.1501 9.67742 15.2774 9.92287C15.4046 10.1683 15.6546 10.3229 15.9319 10.3274L19.3319 10.3592H19.341C19.6137 10.3592 19.8683 10.2092 19.9956 9.96833C20.1274 9.72287 20.1092 9.42742 19.9547 9.20015L18.2774 6.72742ZM15.9546 9.5956L17.6456 7.15469L19.3183 9.5956H15.9546Z" fill="black"></path>
                                                                                            <path d="M7.03611 2.6091H7.44521C7.6543 2.6091 7.82702 2.43637 7.82702 2.22728C7.82702 2.01819 7.6543 1.84546 7.44521 1.84546H7.03611C6.82702 1.84546 6.6543 2.01819 6.6543 2.22728C6.6543 2.43637 6.82702 2.6091 7.03611 2.6091Z" fill="black"></path>
                                                                                            <path d="M8.56834 2.6091H8.97743C9.18652 2.6091 9.35925 2.43637 9.35925 2.22728C9.35925 2.01819 9.18652 1.84546 8.97743 1.84546H8.56834C8.35925 1.84546 8.18652 2.01819 8.18652 2.22728C8.18652 2.43637 8.35925 2.6091 8.56834 2.6091Z" fill="black"></path>
                                                                                            <path d="M10.0996 2.6091H10.5087C10.7178 2.6091 10.8905 2.43637 10.8905 2.22728C10.8905 2.01819 10.7178 1.84546 10.5087 1.84546H10.0996C9.8905 1.84546 9.71777 2.01819 9.71777 2.22728C9.71777 2.43637 9.8905 2.6091 10.0996 2.6091Z" fill="black"></path>
                                                                                            <path d="M11.6318 2.6091H12.0409C12.25 2.6091 12.4227 2.43637 12.4227 2.22728C12.4227 2.01819 12.25 1.84546 12.0409 1.84546H11.6318C11.4227 1.84546 11.25 2.01819 11.25 2.22728C11.25 2.43637 11.4227 2.6091 11.6318 2.6091Z" fill="black"></path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="box-body">
                                                                                    <h3 class="elementskit-info-box-title">
                                                                                        Digital Marketing Design </h3>
                                                                                    <p>{{ __('design.digital_marketing_design_brief') }}.</p>
                                                                                    <div class="box-footer disable_hover_button">
                                                                                        <div class="btn-wraper">
                                                                                            <a href="https://demo.awaikenthemes.com/rovex/services/digital-marketing-design" target="_self" rel="" class="elementskit-btn whitespace--normal elementor-animation-">
                                                                                            {{ __('design.read_more') }}

                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4401 11.0001C17.0996 11.0001 14.9665 8.77909 14.9665 6.34009V5.34009H13.0465V6.34009C13.0465 8.11409 13.7934 9.77809 14.9656 11.0001H3.12012V13.0001H14.9656C13.7934 14.2221 13.0465 15.8861 13.0465 17.6601V18.6601H14.9665V17.6601C14.9665 15.2211 17.0996 13.0001 19.4401 13.0001H20.4001V11.0001H19.4401Z" fill="currentColor"></path>
                                                                                                </svg>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane elementkit-tab-pane elementor-repeater-item-a8d6b13 " id="content-a8d6b1367b208e7917fc" role="tabpanel"
                                            aria-labelledby="content-a8d6b1367b208e7917fc-tab">
                                            <div class="animated fadeIn">

                                                <div class="widgetarea_warper widgetarea_warper_editable" data-elementskit-widgetarea-key="045e2f7" data-elementskit-widgetarea-index="a8d6b13">
                                                    <div class="widgetarea_warper_edit" data-elementskit-widgetarea-key="045e2f7" data-elementskit-widgetarea-index="a8d6b13">
                                                        <i class="eicon-edit" aria-hidden="true"></i>
                                                        <span>Edit Content</span>
                                                    </div>

                                                    <div class="ekit-widget-area-container">
                                                        <div data-elementor-type="wp-post" data-elementor-id="7504" class="elementor elementor-7504">
                                                            <div class="elementor-element elementor-element-4f2c879 e-con-full service-tab-image e-flex e-con e-child" data-id="4f2c879" data-element_type="container">
                                                                <div class="elementor-element elementor-element-6d82b00 at-image-animation at-animation-image-none elementor-widget elementor-widget-image" data-id="6d82b00" data-element_type="widget" data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <img loading="lazy" decoding="async" width="1200" height="800" src="https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/service-image-5.jpg" class="attachment-full size-full wp-image-1061" alt="" srcset="https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/service-image-5.jpg 1200w, https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/service-image-5-300x200.jpg 300w, https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/service-image-5-1024x683.jpg 1024w, https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/service-image-5-768x512.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px" />
                                                                    </div>
                                                                </div>
                                                                <div class="elementor-element elementor-element-fafeb1b elementor-absolute service-box-item elementor-widget__width-inherit ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box" data-id="fafeb1b" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="elementskit-icon-box.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="ekit-wid-con"> <!-- link opening -->
                                                                            <!-- end link opening -->

                                                                            <div class="elementskit-infobox text-left text-left icon-top-align elementor-animation-   image-active">
                                                                                <div class="elementskit-box-header elementor-animation-">
                                                                                    <div class="elementskit-info-box-icon " style="background-color: #8ed1fc;">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                                                            <path d="M26.8043 5.66368H25.177V1.5955C25.177 0.968226 24.668 0.45459 24.0361 0.45459H5.96341C5.33613 0.45459 4.82704 0.963681 4.82704 1.5955V5.66368H3.19522C2.14068 5.66368 1.28613 6.52277 1.28613 7.57277V23.0091C1.28613 24.0637 2.14522 24.9182 3.19522 24.9182H11.6043L9.86341 26.6137H9.23613C8.30431 26.6137 7.54522 27.3728 7.54522 28.3V28.7773H5.79977C5.59068 28.7773 5.41795 28.95 5.41795 29.1591C5.41795 29.3682 5.59068 29.541 5.79977 29.541H24.1861C24.3952 29.541 24.568 29.3682 24.568 29.1591C24.568 28.95 24.3952 28.7773 24.1861 28.7773H22.4407V28.3C22.4407 27.3682 21.6816 26.6137 20.7543 26.6137H20.127L18.3861 24.9182H26.7952C27.8498 24.9182 28.7043 24.0591 28.7043 23.0091V7.57277C28.7134 6.51823 27.8543 5.66368 26.8043 5.66368ZM21.6816 28.3046V28.7819H8.31795V28.3046C8.31795 27.7955 8.73159 27.3773 9.24522 27.3773H20.7589C21.268 27.3773 21.6816 27.7955 21.6816 28.3046ZM20.918 12.8137L26.3634 14.65C26.3634 14.65 26.3589 14.65 26.3543 14.65L23.668 14.8682C23.2861 14.9 22.9907 15.1955 22.9589 15.5773L22.718 18.2637L20.918 12.8137ZM21.1589 12.091C20.8816 12 20.577 12.0682 20.368 12.2773C20.1589 12.4864 20.0861 12.791 20.1816 13.0682L21.4452 16.8637H5.96341C5.75431 16.8637 5.58613 16.6955 5.58613 16.4864V3.9955H24.4089V13.1728L21.1589 12.091ZM5.96341 1.21823H24.0316C24.2407 1.21823 24.4089 1.38641 24.4089 1.5955V3.23641H5.59068V1.5955C5.59068 1.38641 5.75886 1.21823 5.96341 1.21823ZM3.19522 6.42732H4.8225V16.491C4.8225 17.1182 5.33159 17.6319 5.95886 17.6319H21.6952L21.9907 18.5137C22.0998 18.8364 22.3907 19.0455 22.7225 19.0455C22.7543 19.0455 22.7861 19.0455 22.818 19.041C23.1861 18.9955 23.468 18.7046 23.4952 18.3364L23.727 15.641L26.4134 15.4228C26.7861 15.391 27.077 15.1137 27.118 14.7455C27.1634 14.3773 26.9452 14.0364 26.5952 13.9182L25.1725 13.441V6.42732H26.7998C27.4316 6.42732 27.9498 6.94095 27.9498 7.57732V19.5819H2.04977V7.57277C2.04977 6.94095 2.56341 6.42732 3.19522 6.42732ZM19.0361 26.6137H10.9634L12.6998 24.9182H17.2998L19.0361 26.6137ZM26.8043 24.1591H3.19522C2.56341 24.1591 2.04522 23.6455 2.04522 23.0091V20.341H27.9452V23.0091C27.9498 23.641 27.4361 24.1591 26.8043 24.1591Z" fill="black"></path>
                                                                                            <path d="M14.9994 21.032C14.3267 21.032 13.7812 21.5774 13.7812 22.2456C13.7812 22.9183 14.3267 23.4638 14.9994 23.4638C15.6722 23.4638 16.2176 22.9183 16.2176 22.2456C16.2176 21.5774 15.6722 21.032 14.9994 21.032ZM14.9994 22.7047C14.7494 22.7047 14.5449 22.5002 14.5449 22.2502C14.5449 22.0002 14.7494 21.8002 14.9994 21.8002C15.2494 21.8002 15.454 22.0047 15.454 22.2502C15.454 22.5002 15.2494 22.7047 14.9994 22.7047Z" fill="black"></path>
                                                                                            <path d="M13.9725 10.0181V8.51356C13.9725 8.02265 13.5725 7.6272 13.0862 7.6272H9.05888C8.56797 7.6272 8.16797 8.0272 8.16797 8.51356V12.5408C8.16797 13.0317 8.56797 13.4272 9.05888 13.4272H11.1043C11.4043 14.6181 12.4816 15.4999 13.7634 15.4999C15.2771 15.4999 16.5134 14.2681 16.5134 12.7499C16.5134 11.309 15.3907 10.1227 13.9725 10.0181ZM8.93615 12.5408V8.51356C8.93615 8.44538 8.9907 8.38629 9.06342 8.38629H13.0907C13.1589 8.38629 13.218 8.44083 13.218 8.51356V10.0636C11.9952 10.3136 11.068 11.3817 11.0271 12.6681H9.06342C8.9907 12.6636 8.93615 12.609 8.93615 12.5408ZM13.768 14.7408C12.6725 14.7408 11.7816 13.8499 11.7816 12.7545C11.7816 11.659 12.6725 10.7681 13.768 10.7681C14.8634 10.7681 15.7543 11.659 15.7543 12.7545C15.7498 13.8499 14.8589 14.7408 13.768 14.7408Z" fill="black"></path>
                                                                                            <path d="M18.2774 6.72742C18.141 6.52742 17.9137 6.40469 17.6683 6.40015H17.6637C17.4228 6.40015 17.1956 6.51833 17.0546 6.71378L15.3319 9.15469C15.1728 9.38196 15.1501 9.67742 15.2774 9.92287C15.4046 10.1683 15.6546 10.3229 15.9319 10.3274L19.3319 10.3592H19.341C19.6137 10.3592 19.8683 10.2092 19.9956 9.96833C20.1274 9.72287 20.1092 9.42742 19.9547 9.20015L18.2774 6.72742ZM15.9546 9.5956L17.6456 7.15469L19.3183 9.5956H15.9546Z" fill="black"></path>
                                                                                            <path d="M7.03611 2.6091H7.44521C7.6543 2.6091 7.82702 2.43637 7.82702 2.22728C7.82702 2.01819 7.6543 1.84546 7.44521 1.84546H7.03611C6.82702 1.84546 6.6543 2.01819 6.6543 2.22728C6.6543 2.43637 6.82702 2.6091 7.03611 2.6091Z" fill="black"></path>
                                                                                            <path d="M8.56834 2.6091H8.97743C9.18652 2.6091 9.35925 2.43637 9.35925 2.22728C9.35925 2.01819 9.18652 1.84546 8.97743 1.84546H8.56834C8.35925 1.84546 8.18652 2.01819 8.18652 2.22728C8.18652 2.43637 8.35925 2.6091 8.56834 2.6091Z" fill="black"></path>
                                                                                            <path d="M10.0996 2.6091H10.5087C10.7178 2.6091 10.8905 2.43637 10.8905 2.22728C10.8905 2.01819 10.7178 1.84546 10.5087 1.84546H10.0996C9.8905 1.84546 9.71777 2.01819 9.71777 2.22728C9.71777 2.43637 9.8905 2.6091 10.0996 2.6091Z" fill="black"></path>
                                                                                            <path d="M11.6318 2.6091H12.0409C12.25 2.6091 12.4227 2.43637 12.4227 2.22728C12.4227 2.01819 12.25 1.84546 12.0409 1.84546H11.6318C11.4227 1.84546 11.25 2.01819 11.25 2.22728C11.25 2.43637 11.4227 2.6091 11.6318 2.6091Z" fill="black"></path>
                                                                                        </svg>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="box-body">
                                                                                    <h3 class="elementskit-info-box-title">
                                                                                        Motion Graphics </h3>
                                                                                    <p>{{ __('design.motion_paragraph_breif') }}.</p>
                                                                                    <div class="box-footer disable_hover_button">
                                                                                        <div class="btn-wraper">
                                                                                            <a href="https://demo.awaikenthemes.com/rovex/services/motion-graphics" target="_self" rel="" class="elementskit-btn whitespace--normal elementor-animation-">
                                                                                            {{ __('design.read_more') }}

                                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4401 11.0001C17.0996 11.0001 14.9665 8.77909 14.9665 6.34009V5.34009H13.0465V6.34009C13.0465 8.11409 13.7934 9.77809 14.9656 11.0001H3.12012V13.0001H14.9656C13.7934 14.2221 13.0465 15.8861 13.0465 17.6601V18.6601H14.9665V17.6601C14.9665 15.2211 17.0996 13.0001 19.4401 13.0001H20.4001V11.0001H19.4401Z" fill="currentColor"></path>
                                                                                                </svg>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="elementor-element elementor-element-16b825e border-radius-section e-flex e-con-boxed e-con e-parent" data-id="16b825e" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-element elementor-element-5db3568 e-flex e-con-boxed e-con e-child" data-id="5db3568" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-element elementor-element-dcf418e e-con-full e-flex e-con e-child" data-id="dcf418e" data-element_type="container">
                    <div class="elementor-element elementor-element-e1e7b37 e-con-full how-it-work-images e-flex e-con e-child" data-id="e1e7b37" data-element_type="container">
                        <div class="elementor-element elementor-element-a581441 contact-now-circle at-image-animation at-animation-image-none elementor-widget elementor-widget-image" data-id="a581441" data-element_type="widget" data-settings="{&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="613" height="617" src="https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/how-work-image-circle.png" class="attachment-full size-full wp-image-1377" alt="" srcset="https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/how-work-image-circle.png 613w, https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/how-work-image-circle-298x300.png 298w, https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/how-work-image-circle-150x150.png 150w" sizes="(max-width: 613px) 100vw, 613px" />
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-434b9ef elementor-absolute image-anime how-it-work-image at-image-animation at-animation-image-none elementor-widget elementor-widget-image" data-id="434b9ef" data-element_type="widget" data-settings="{&quot;_position&quot;:&quot;absolute&quot;,&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img loading="lazy" decoding="async" width="423" height="423" src="https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/how-it-work-image.jpg" class="attachment-full size-full wp-image-1378" alt="" srcset="https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/how-it-work-image.jpg 423w, https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/how-it-work-image-300x300.jpg 300w, https://demo.awaikenthemes.com/rovex/wp-content/uploads/2025/01/how-it-work-image-150x150.jpg 150w" sizes="(max-width: 423px) 100vw, 423px" />
                            </div>
                        </div>
                    </div>
                    <div dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}" class="elementor-element elementor-element-5f4e941 e-con-full e-flex e-con e-child" data-id="5f4e941" data-element_type="container">
                        <div class="elementor-element elementor-element-7dd1d36 work-faq-accordion elementor-invisible elementor-widget elementor-widget-elementskit-accordion" data-id="7dd1d36" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;ekit_we_effect_on&quot;:&quot;none&quot;}" data-widget_type="elementskit-accordion.default">
                            <div class="elementor-widget-container">
                                <div class="ekit-wid-con">
                                    <div class="elementskit-accordion accoedion-primary" id="accordion-67b1bed7a586d">


                                        <div class="elementskit-card active">
                                            <div class="elementskit-card-header" id="primaryHeading-0-7dd1d36">
                                                <a href="#collapse-f5ecd0467b1bed7a586d" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-f5ecd0467b1bed7a586d" aria-expanded="true" aria-controls="Collapse-f5ecd0467b1bed7a586d">

                                                <span class="number"></span>


                                                    <span class="ekit-accordion-title">{{__('design.strategy')}}</span>


                                                    <div class="ekit_accordion_icon_group">
                                                        <div class="ekit_accordion_normal_icon">
                                                            <!-- Normal Icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" >
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4401 11.0001C17.0996 11.0001 14.9665 8.77909 14.9665 6.34009V5.34009H13.0465V6.34009C13.0465 8.11409 13.7934 9.77809 14.9656 11.0001H3.12012V13.0001H14.9656C13.7934 14.2221 13.0465 15.8861 13.0465 17.6601V18.6601H14.9665V17.6601C14.9665 15.2211 17.0996 13.0001 19.4401 13.0001H20.4001V11.0001H19.4401Z" fill="currentColor"></path>
                                                            </svg>
                                                        </div>

                                                        <div class="ekit_accordion_active_icon">
                                                            <!-- Active Icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4401 11.0001C17.0996 11.0001 14.9665 8.77909 14.9665 6.34009V5.34009H13.0465V6.34009C13.0465 8.11409 13.7934 9.77809 14.9656 11.0001H3.12012V13.0001H14.9656C13.7934 14.2221 13.0465 15.8861 13.0465 17.6601V18.6601H14.9665V17.6601C14.9665 15.2211 17.0996 13.0001 19.4401 13.0001H20.4001V11.0001H19.4401Z" fill="currentColor"></path>
                                                            </svg>
                                                        </div>
                                                    </div>


                                                </a>
                                            </div>

                                            <div id="Collapse-f5ecd0467b1bed7a586d" class=" show collapse" aria-labelledby="primaryHeading-0-7dd1d36" data-parent="#accordion-67b1bed7a586d">

                                                <div class="elementskit-card-body ekit-accordion--content">
                                                    <p>{{ __('design.strategy_p') }}.</p>
                                                </div>

                                            </div>

                                        </div><!-- .elementskit-card END -->


                                        <div class="elementskit-card ">
                                            <div class="elementskit-card-header" id="primaryHeading-1-7dd1d36">
                                                <a href="#collapse-ed3b3ec67b1bed7a586d" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-ed3b3ec67b1bed7a586d" aria-expanded="false" aria-controls="Collapse-ed3b3ec67b1bed7a586d">

                                                    <span class="number"></span>


                                                    <span class="ekit-accordion-title">{{__('design.concept_development')}}</span>


                                                    <div class="ekit_accordion_icon_group">
                                                        <div class="ekit_accordion_normal_icon">
                                                            <!-- Normal Icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4401 11.0001C17.0996 11.0001 14.9665 8.77909 14.9665 6.34009V5.34009H13.0465V6.34009C13.0465 8.11409 13.7934 9.77809 14.9656 11.0001H3.12012V13.0001H14.9656C13.7934 14.2221 13.0465 15.8861 13.0465 17.6601V18.6601H14.9665V17.6601C14.9665 15.2211 17.0996 13.0001 19.4401 13.0001H20.4001V11.0001H19.4401Z" fill="currentColor"></path>
                                                            </svg>
                                                        </div>

                                                        <div class="ekit_accordion_active_icon">
                                                            <!-- Active Icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4401 11.0001C17.0996 11.0001 14.9665 8.77909 14.9665 6.34009V5.34009H13.0465V6.34009C13.0465 8.11409 13.7934 9.77809 14.9656 11.0001H3.12012V13.0001H14.9656C13.7934 14.2221 13.0465 15.8861 13.0465 17.6601V18.6601H14.9665V17.6601C14.9665 15.2211 17.0996 13.0001 19.4401 13.0001H20.4001V11.0001H19.4401Z" fill="currentColor"></path>
                                                            </svg>
                                                        </div>
                                                    </div>


                                                </a>
                                            </div>

                                            <div id="Collapse-ed3b3ec67b1bed7a586d" class=" collapse" aria-labelledby="primaryHeading-1-7dd1d36" data-parent="#accordion-67b1bed7a586d">

                                                <div class="elementskit-card-body ekit-accordion--content">
                                                    <p>{{ __('design.concept_development_p') }}.</p>
                                                </div>

                                            </div>

                                        </div><!-- .elementskit-card END -->


                                        <div class="elementskit-card ">
                                            <div class="elementskit-card-header" id="primaryHeading-2-7dd1d36">
                                                <a href="#collapse-388eac467b1bed7a586d" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-388eac467b1bed7a586d" aria-expanded="false" aria-controls="Collapse-388eac467b1bed7a586d">

                                                    <span class="number"></span>


                                                    <span class="ekit-accordion-title">{{__('design.design')}}</span>


                                                    <div class="ekit_accordion_icon_group">
                                                        <div class="ekit_accordion_normal_icon">
                                                            <!-- Normal Icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4401 11.0001C17.0996 11.0001 14.9665 8.77909 14.9665 6.34009V5.34009H13.0465V6.34009C13.0465 8.11409 13.7934 9.77809 14.9656 11.0001H3.12012V13.0001H14.9656C13.7934 14.2221 13.0465 15.8861 13.0465 17.6601V18.6601H14.9665V17.6601C14.9665 15.2211 17.0996 13.0001 19.4401 13.0001H20.4001V11.0001H19.4401Z" fill="currentColor"></path>
                                                            </svg>
                                                        </div>

                                                        <div class="ekit_accordion_active_icon">
                                                            <!-- Active Icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4401 11.0001C17.0996 11.0001 14.9665 8.77909 14.9665 6.34009V5.34009H13.0465V6.34009C13.0465 8.11409 13.7934 9.77809 14.9656 11.0001H3.12012V13.0001H14.9656C13.7934 14.2221 13.0465 15.8861 13.0465 17.6601V18.6601H14.9665V17.6601C14.9665 15.2211 17.0996 13.0001 19.4401 13.0001H20.4001V11.0001H19.4401Z" fill="currentColor"></path>
                                                            </svg>
                                                        </div>
                                                    </div>


                                                </a>
                                            </div>

                                            <div id="Collapse-388eac467b1bed7a586d" class=" collapse" aria-labelledby="primaryHeading-2-7dd1d36" data-parent="#accordion-67b1bed7a586d">

                                                <div class="elementskit-card-body ekit-accordion--content">
                                                    <p>{{ __('design.design_p') }}.</p>
                                                </div>

                                            </div>

                                        </div><!-- .elementskit-card END -->


                                        <div class="elementskit-card ">
                                            <div class="elementskit-card-header" id="primaryHeading-3-7dd1d36">
                                                <a href="#collapse-58774d167b1bed7a586d" class="ekit-accordion--toggler elementskit-btn-link collapsed" data-ekit-toggle="collapse" data-target="#Collapse-58774d167b1bed7a586d" aria-expanded="false" aria-controls="Collapse-58774d167b1bed7a586d">

                                                    <span class="number"></span>


                                                    <span class="ekit-accordion-title">{{__('design.development')}}</span>


                                                    <div class="ekit_accordion_icon_group">
                                                        <div class="ekit_accordion_normal_icon">
                                                            <!-- Normal Icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4401 11.0001C17.0996 11.0001 14.9665 8.77909 14.9665 6.34009V5.34009H13.0465V6.34009C13.0465 8.11409 13.7934 9.77809 14.9656 11.0001H3.12012V13.0001H14.9656C13.7934 14.2221 13.0465 15.8861 13.0465 17.6601V18.6601H14.9665V17.6601C14.9665 15.2211 17.0996 13.0001 19.4401 13.0001H20.4001V11.0001H19.4401Z" fill="currentColor"></path>
                                                            </svg>
                                                        </div>

                                                        <div class="ekit_accordion_active_icon">
                                                            <!-- Active Icon -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.4401 11.0001C17.0996 11.0001 14.9665 8.77909 14.9665 6.34009V5.34009H13.0465V6.34009C13.0465 8.11409 13.7934 9.77809 14.9656 11.0001H3.12012V13.0001H14.9656C13.7934 14.2221 13.0465 15.8861 13.0465 17.6601V18.6601H14.9665V17.6601C14.9665 15.2211 17.0996 13.0001 19.4401 13.0001H20.4001V11.0001H19.4401Z" fill="currentColor"></path>
                                                            </svg>
                                                        </div>
                                                    </div>


                                                </a>
                                            </div>

                                            <div id="Collapse-58774d167b1bed7a586d" class=" collapse" aria-labelledby="primaryHeading-3-7dd1d36" data-parent="#accordion-67b1bed7a586d">

                                                <div class="elementskit-card-body ekit-accordion--content">
                                                    <p>{{ __('design.development_p') }}.</p>
                                                </div>

                                            </div>

                                        </div><!-- .elementskit-card END -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection


@section('scripts')
<link rel='stylesheet' id='elementor-post-7464-css' href='https://demo.awaikenthemes.com/rovex/wp-content/uploads/elementor/css/post-7464.css?ver=1739436262' media='all' />
    <link rel='stylesheet' id='elementor-post-7500-css' href='https://demo.awaikenthemes.com/rovex/wp-content/uploads/elementor/css/post-7500.css?ver=1739436262' media='all' />
    <link rel='stylesheet' id='elementor-post-7504-css' href='https://demo.awaikenthemes.com/rovex/wp-content/uploads/elementor/css/post-7504.css?ver=1739436262' media='all' />
    <script src="https://demo.awaikenthemes.com/rovex/wp-includes/js/dist/hooks.min.js?ver=4d63a3d491d11ffd8ac6" id="wp-hooks-js"></script>
 
    <script src="https://demo.awaikenthemes.com/rovex/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=6.0.2" id="swv-js"></script>
    <script id="contact-form-7-js-before">
        var wpcf7 = {
            "api": {
                "root": "https:\/\/demo.awaikenthemes.com\/rovex\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            },
            "cached": 1
        };
    </script>

    <script src="https://demo.awaikenthemes.com/rovex/wp-content/themes/rovex/assets/js/magiccursor.js?ver=1.0.0" id="magiccursor-js"></script>
    <script src="https://demo.awaikenthemes.com/rovex/wp-content/themes/rovex/assets/js/SplitText.js?ver=1.0.0" id="SplitText-js"></script>
    <script src="https://demo.awaikenthemes.com/rovex/wp-content/themes/rovex/assets/js/ScrollTrigger.min.js?ver=1.0.0" id="ScrollTrigger-js"></script>
    <script src="https://demo.awaikenthemes.com/rovex/wp-content/themes/rovex/assets/js/function.js?ver=1.0.0" id="theme-js-js"></script>
    <script src="https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js?ver=3.3.7" id="elementskit-framework-js-frontend-js"></script>
    <script id="elementskit-framework-js-frontend-js-after">
        var elementskit = {
            resturl: 'https://demo.awaikenthemes.com/rovex/wp-json/elementskit/v1/',
        }
    </script>
    <script src="https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js?ver=3.3.7" id="ekit-widget-scripts-js"></script>
    <script src="https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementskit/modules/parallax/assets/js/anime.js?ver=3.7.8" id="animejs-js"></script>
    <script defer src="https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementskit/modules/parallax/assets/js/parallax-frontend.js?ver=3.7.8" id="elementskit-parallax-frontend-defer-js"></script>
    <script src="https://demo.awaikenthemes.com/rovex/wp-includes/js/imagesloaded.min.js?ver=5.0.0" id="imagesloaded-js"></script>
    <script src="https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js?ver=0.2.1" id="jquery-numerator-js"></script>
    <script src="https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.26.4" id="elementor-webpack-runtime-js"></script>
    <script src="https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.26.4" id="elementor-frontend-modules-js"></script>
    <script src="https://demo.awaikenthemes.com/rovex/wp-includes/js/jquery/ui/core.min.js?ver=1.13.3" id="jquery-ui-core-js"></script>
    <script id="elementor-frontend-js-before">
        var elementorFrontendConfig = {
            "environmentMode": {
                "edit": false,
                "wpPreview": false,
                "isScriptDebug": false
            },
            "i18n": {
                "shareOnFacebook": "Share on Facebook",
                "shareOnTwitter": "Share on Twitter",
                "pinIt": "Pin it",
                "download": "Download",
                "downloadImage": "Download image",
                "fullscreen": "Fullscreen",
                "zoom": "Zoom",
                "share": "Share",
                "playVideo": "Play Video",
                "previous": "Previous",
                "next": "Next",
                "close": "Close",
                "a11yCarouselPrevSlideMessage": "Previous slide",
                "a11yCarouselNextSlideMessage": "Next slide",
                "a11yCarouselFirstSlideMessage": "This is the first slide",
                "a11yCarouselLastSlideMessage": "This is the last slide",
                "a11yCarouselPaginationBulletMessage": "Go to slide"
            },
            "is_rtl": false,
            "breakpoints": {
                "xs": 0,
                "sm": 480,
                "md": 768,
                "lg": 1025,
                "xl": 1440,
                "xxl": 1600
            },
            "responsive": {
                "breakpoints": {
                    "mobile": {
                        "label": "Mobile Portrait",
                        "value": 767,
                        "default_value": 767,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "mobile_extra": {
                        "label": "Mobile Landscape",
                        "value": 880,
                        "default_value": 880,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "tablet": {
                        "label": "Tablet Portrait",
                        "value": 1024,
                        "default_value": 1024,
                        "direction": "max",
                        "is_enabled": true
                    },
                    "tablet_extra": {
                        "label": "Tablet Landscape",
                        "value": 1200,
                        "default_value": 1200,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "laptop": {
                        "label": "Laptop",
                        "value": 1366,
                        "default_value": 1366,
                        "direction": "max",
                        "is_enabled": false
                    },
                    "widescreen": {
                        "label": "Widescreen",
                        "value": 2400,
                        "default_value": 2400,
                        "direction": "min",
                        "is_enabled": false
                    }
                },
                "hasCustomBreakpoints": false
            },
            "version": "3.26.4",
            "is_static": false,
            "experimentalFeatures": {
                "container": true,
                "e_swiper_latest": true,
                "e_nested_atomic_repeaters": true,
                "e_onboarding": true,
                "e_css_smooth_scroll": true,
                "home_screen": true,
                "nested-elements": true,
                "editor_v2": true,
                "e_element_cache": true,
                "link-in-bio": true,
                "floating-buttons": true,
                "launchpad-checklist": true
            },
            "urls": {
                "assets": "https:\/\/demo.awaikenthemes.com\/rovex\/wp-content\/plugins\/elementor\/assets\/",
                "ajaxurl": "https:\/\/demo.awaikenthemes.com\/rovex\/wp-admin\/admin-ajax.php",
                "uploadUrl": "https:\/\/demo.awaikenthemes.com\/rovex\/wp-content\/uploads"
            },
            "nonces": {
                "floatingButtonsClickTracking": "a907da0215"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
                "body_background_background": "classic",
                "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                "global_image_lightbox": "yes",
                "lightbox_enable_counter": "yes",
                "lightbox_enable_fullscreen": "yes",
                "lightbox_enable_zoom": "yes",
                "lightbox_enable_share": "yes",
                "lightbox_title_src": "title",
                "lightbox_description_src": "description"
            },
            "post": {
                "id": 12,
                "title": "Rovex%20%E2%80%93%20Design%20Agency%20WordPress%20Theme",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>
    <script src="https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.26.4" id="elementor-frontend-js"></script>
    <script src="https://demo.awaikenthemes.com/rovex/wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.min.js?ver=3.3.7" id="animate-circle-js"></script>
    <script id="elementskit-elementor-js-extra">
        var ekit_config = {
            "ajaxurl": "https:\/\/demo.awaikenthemes.com\/rovex\/wp-admin\/admin-ajax.php",
            "nonce": "dd53605e3c"
        };
    </script>
    @endsection