<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<!-- Mirrored from wpriverthemes.com/gixus/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2024 15:10:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <link rel="icon" type="image/png" href="{{asset('assets/wp-content/plogo.png')}}">


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="xmlrpc.php" />
    <title>Pentacode</title>
    <meta name='robots' content='max-image-preview:large' />
    <style>
        img:is([sizes="auto" i], [sizes^="auto," i]) {
            contain-intrinsic-size: 3000px 1500px
        }
    </style>
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='preconnect' href='https://fonts.gstatic.com/' crossorigin />
    <link rel="alternate" type="application/rss+xml" title="Gixus - Business Consulting WordPress Theme &raquo; Feed"
        href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml"
        title="Gixus - Business Consulting WordPress Theme &raquo; Comments Feed" href="comments/feed/index.html" />
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/wpriverthemes.com\/gixus\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.1"
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
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
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
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
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
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
    <link rel='stylesheet' id='hfe-widgets-style-css'
        href="{{asset('assets/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend7406.css?ver=2.0.1')}}"
        media='all' />
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
            background-color: #32373c;
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
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
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

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
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
    <link rel='stylesheet' id='contact-form-7-css'
        href="{{ asset('assets/wp-content/plugins/contact-form-7/includes/css/styles37ad.css') }}?ver=6.0.1"
        media='all' />
    <link rel='stylesheet' id='hfe-style-css'
        href="{{ asset('assets/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor7406.css') }}?ver=2.0.1"
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min444a.css') }}?ver=5.32.0"
        media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href="{{ asset('assets/wp-content/plugins/elementor/assets/css/frontend.min18be.css') }}?ver=3.25.10"
        media='all' />
    <link rel='stylesheet' id='swiper-css'
        href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css') }}?ver=8.4.5"
        media='all' />
    <link rel='stylesheet' id='e-swiper-css'
        href="{{ asset('assets/wp-content/plugins/elementor/assets/css/conditionals/e-swiper.min18be.css') }}?ver=3.25.10"
        media='all' />
    <link rel='stylesheet' id='elementor-post-9-css'
        href="{{ asset('assets/wp-content/uploads/elementor/css/post-9034e.css') }}?ver=1732951279" media='all' />
    <link rel='stylesheet' id='elementor-post-25-css'
        href="{{ asset('assets/wp-content/uploads/elementor/css/post-25034e.css') }}?ver=1732951279" media='all' />
    <link rel='stylesheet' id='elementor-post-28-css'
        href="{{ asset('assets/wp-content/uploads/elementor/css/post-28034e.css') }}?ver=1732951279" media='all' />
    <link rel='stylesheet' id='elementor-post-352-css'
        href="{{ asset('assets/wp-content/uploads/elementor/css/post-352034e.css') }}?ver=1732951279" media='all' />
    <link rel='stylesheet' id='gixus-fonts-css'
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        media='all' />
    <link rel='stylesheet' id='bootstrap-css-css'
        href="{{ asset('assets/wp-content/themes/gixus/assets/css/bootstrap.min.css') }}" media='all' />
    <link rel='stylesheet' id='fontawesome-css'
        href="{{ asset('assets/wp-content/themes/gixus/assets/css/font-awesome.min.css') }}" media='all' />
    <link rel='stylesheet' id='magnific-popup-css-css'
        href="{{ asset('assets/wp-content/themes/gixus/assets/css/magnific-popup.css') }}" media='all' />
    <link rel='stylesheet' id='swiper-bundle-css-css'
        href="{{ asset('assets/wp-content/themes/gixus/assets/css/swiper-bundle.min.css') }}" media='all' />
    <link rel='stylesheet' id='animate-css-css'
        href="{{ asset('assets/wp-content/themes/gixus/assets/css/animate.min.css') }}" media='all' />
    <link rel='stylesheet' id='validnavs-css-css'
        href="{{ asset('assets/wp-content/themes/gixus/assets/css/validnavs.css') }}" media='all' />
    <link rel='stylesheet' id='helper-css-css'
        href="{{ asset('assets/wp-content/themes/gixus/assets/css/helper.css') }}" media='all' />
    <link rel='stylesheet' id='gixus-unittest-css'
        href="{{ asset('assets/wp-content/themes/gixus/assets/css/unit-test.css') }}" media='all' />
    <link rel='stylesheet' id='gixus-style-css'
        href="{{ asset('assets/wp-content/themes/gixus/assets/css/style.css') }}" media='all' />
    <link rel='stylesheet' id='gixus-style-css'
        href="{{ asset('assets/wp-content/themes/gixus/assets/css/logo.css') }}" media='all' />
    <link rel='stylesheet' id='hfe-icons-list-css'
        href="{{ asset('assets/wp-content/plugins/elementor/assets/css/widget-icon-list.min44b4.css') }}?ver=3.24.3"
        media='all' />
    <link rel='stylesheet' id='hfe-social-icons-css'
        href="{{ asset('assets/wp-content/plugins/elementor/assets/css/widget-social-icons.min2401.css') }}?ver=3.24.0"
        media='all' />
    <link rel='stylesheet' id='hfe-social-share-icons-brands-css'
        href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands52d5.css') }}?ver=5.15.3"
        media='all' />
    <link rel='stylesheet' id='hfe-social-share-icons-fontawesome-css'
        href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome52d5.css') }}?ver=5.15.3"
        media='all' />
    <link rel='stylesheet' id='hfe-nav-menu-icons-css'
        href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid52d5.css') }}?ver=5.15.3"
        media='all' />
    <link rel="preload" as="style"
        href="https://fonts.googleapis.com/css?family=Outfit:400,600,500&amp;display=swap&amp;ver=1732371252" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Outfit:400,600,500&amp;display=swap&amp;ver=1732371252"
        media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Outfit:400,600,500&amp;display=swap&amp;ver=1732371252" />
    </noscript>
    <link rel='stylesheet' id='google-fonts-1-css'
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.7.1"
        media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css') }}?ver=5.15.3"
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href="{{ asset('assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css') }}?ver=5.15.3"
        media='all' />
    <script
        src="{{ asset('assets/wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js') }}">
    </script>
    <script id="jquery-js-after">
        ! function($) {
            "use strict";
            $(document).ready(function() {
                $(this).scrollTop() > 100 && $(".hfe-scroll-to-top-wrap").removeClass("hfe-scroll-to-top-hide"), $(
                    window).scroll(function() {
                    $(this).scrollTop() < 100 ? $(".hfe-scroll-to-top-wrap").fadeOut(300) : $(
                        ".hfe-scroll-to-top-wrap").fadeIn(300)
                }), $(".hfe-scroll-to-top-wrap").on("click", function() {
                    $("html, body").animate({
                        scrollTop: 0
                    }, 300);
                    return !1
                })
            })
        }(jQuery);
    </script>
    <link rel="https://api.w.org/" href="{{ asset('assets/wp-json/') }}" />
    <link rel="alternate" type="application/json" href="{{asset('assets/wp-json/index.html')}}" />
    <link rel="alternate" title="JSON" type="application/json" href="{{asset('assets/wp-json/wp/v2/pages/25.json')}}" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <meta name="generator" content="WordPress 6.7.1" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed"
        href="{{asset('assets/wp-json/oembed/1.0/embed26a6.json?url=https%3A%2F%2Fwpriverthemes.com%2Fgixus%2F')}}" />
    <link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embedbe9a?url=https%3A%2F%2Fwpriverthemes.com%2Fgixus%2F&amp;format=xml" />
    <meta name="generator" content="Redux 4.5.0" />
    <style>
        /* Varialbes */
        :root {
            --font-default: 'Outfit', sans-serif;
            --font-heading: 'Outfit', sans-serif;
            --fontawesome: "Font Awesome 5 Pro";
            --black: #000000;
            --dark: #1f2b38;
            --dark-secondary: #022b6d;
            --dark-optional: #3e00a7;
            --white: #ffffff;
            --color-primary: #246BFD;
            --color-secondary: #0846C6;
            --color-optional: #ff214a;
            --color-style-two: #f94735;
            --color-heading: #04000b;
            --color-paragraph: #666666;
            --box-shadow-primary: -1px 3px 10px 0 rgba(0, 0, 0, 0.6);
            --box-shadow-secondary: 0 10px 30px 0 rgba(44, 130, 237, 0.4);
            --box-shadow-regular: 0px 2px 12px 0px #e7e7e7;
            --bg-gray: #F7F7F7;
            --bg-gray-secondary: #D8E7EF;
            --bg-gradient: linear-gradient(90deg, #246BFD 0%, #3e00a7 100%);
            --bg-gradient-reverse: linear-gradient(90deg, #f94735 0%, #ff214a 100%);
        }
    </style>

    <meta name="generator"
        content="Elementor 3.25.10; features: additional_custom_breakpoints, e_optimized_control_loading, e_element_cache; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <style>
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
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
    <link rel="icon" href="wp-content/uploads/2024/10/cropped-logo-32x32.png" sizes="32x32" />
    <link rel="icon" href="{{asset('assets/wp-content/uploads/2024/10/cropped-logo-192x192.png')}}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{asset('assets/wp-content/uploads/2024/10/cropped-logo-180x180.png')}}" />
    <meta name="msapplication-TileImage"
        content="https://wpriverthemes.com/gixus/wp-content/uploads/2024/10/cropped-logo-270x270.png" />
    <style id="gixus_options-dynamic-css" title="dynamic-css" class="redux-options-output">
        body {
            font-family: Outfit;
            font-weight: 400;
            font-style: normal;
            color: #666666;
            font-size: 16px;
        }

        h1 {
            font-family: Outfit;
            font-weight: 600;
            font-style: normal;
            font-size: 40px;
        }

        h2 {
            font-family: Outfit;
            font-weight: 600;
            font-style: normal;
            font-size: 36px;
        }

        h3 {
            font-family: Outfit;
            font-weight: 600;
            font-style: normal;
            font-size: 28px;
        }

        h4 {
            font-family: Outfit;
            font-weight: 600;
            font-style: normal;
            font-size: 22px;
        }

        h5 {
            font-family: Outfit;
            font-weight: 600;
            font-style: normal;
            font-size: 18px;
        }

        h6 {
            font-family: Outfit;
            font-weight: 600;
            font-style: normal;
            font-size: 14px;
        }

        .title {
            font-family: Outfit;
            font-weight: 600;
            font-style: normal;
            font-size: 50px;
        }

        .sub-title {
            font-family: Outfit;
            font-weight: 500;
            font-style: normal;
            font-size: 20px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @yield('styles')
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('assets/wp-content/themes/gixus/assets/css/test.css') }}">
</head>

<body
    class="home page-template page-template-page-templates page-template-home page-template-page-templateshome-php page page-id-25 wp-embed-responsive ehf-header ehf-footer ehf-template-gixus ehf-stylesheet-gixus elementor-default elementor-kit-9 elementor-page elementor-page-25">
    <div id="page" class="hfeed site">

        @include('layout.header')

        <!DOCTYPE html>
        <html lang="en-US">

        <head>
            <!-- ========== Meta Tags ========== -->
            <meta charset="UTF-8" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Gixus - Business Consulting Template">


        <body
            class="home page-template page-template-page-templates page-template-home page-template-page-templateshome-php page page-id-25 wp-embed-responsive ehf-header ehf-footer ehf-template-gixus ehf-stylesheet-gixus elementor-default elementor-kit-9 elementor-page elementor-page-25">
            <!-- Start Preloader 
    ============================================= -->
            <div id="preloader">
                <div id="gixus-preloader" class="gixus-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 248.69 248.69" class="animated-circle-main">
                                <defs>
                                    <style>
                                        .cls-1,
                                        .cls-3,
                                        .cls-4,
                                        .cls-5 {
                                            fill: #fff;
                                        }

                                        .cls-2 {
                                            fill: #ed1c24;
                                        }

                                        .cls-3,
                                        .cls-4,
                                        .cls-5 {
                                            stroke: #ed1c24;
                                            stroke-miterlimit: 10;
                                        }

                                        .cls-3 {
                                            stroke-width: 24px;
                                        }

                                        .cls-4 {
                                            stroke-width: 28px;
                                        }

                                        .cls-5 {
                                            stroke-width: 9px;
                                        }
                                    </style>
                                </defs>
                                <g id="Layer_1" data-name="Layer 1">
                                    <!-- Outermost circle -->
                                    <circle class="animated-circle cls-1" cx="124.35" cy="124.35" r="110.34" />
                                    <!-- Second circle (outer red circle) -->
                                    <path class="cls-2 animated-circle" d="M491.62,497.75A124.56,124.56,0,0,0,370.43,594.2a123.24,123.24,0,0,0-2.92,20.1q-.24,3.87-.24,7.8t.24,7.79A124.35,124.35,0,1,0,491.62,497.75Zm0,220.69A96.35,96.35,0,1,1,588,622.1,95.73,95.73,0,0,1,491.62,718.44Z" transform="translate(-367.27 -497.75)" />
                                    <!-- Third circle -->
                                    <circle class="animated-circle cls-3" cx="124.49" cy="124.67" r="79.85" />
                                    <!-- Fourth circle -->
                                    <circle class="animated-circle cls-4" cx="124.49" cy="124.67" r="47.13" />
                                    <!-- Fifth circle -->
                                    <circle class="animated-circle cls-5" cx="124.49" cy="124.67" r="24.18" />
                                    <!-- Sixth circle -->
                                    <circle class="animated-circle cls-5" cx="124.49" cy="124.67" r="11.69" />
                                </g>
                            </svg>
                        </div>
                    </div>
                    <div class="loader">
                        <div class="row">
                            <div class="col-3 loader-section section-left">
                                <div class="bg"></div>
                            </div>
                            <div class="col-3 loader-section section-left">
                                <div class="bg"></div>
                            </div>
                            <div class="col-3 loader-section section-right">
                                <div class="bg"></div>
                            </div>
                            <div class="col-3 loader-section section-right">
                                <div class="bg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Preloader -->
            @yield('admin-content')


            @include('layout.footer')

    </div><!-- #page -->
    <script type='text/javascript'>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <script src="{{ asset('assets/wp-includes/js/dist/hooks.min4fdd.js?ver=4d63a3d491d11ffd8ac6') }}" id="wp-hooks-js">
    </script>
    <script src="{{ asset('assets/wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6') }}" id="wp-i18n-js">
    </script>
    <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({
            'text direction\u0004ltr': ['ltr']
        });
    </script>
    <script src="{{ asset('assets/wp-content/plugins/contact-form-7/includes/swv/js/index37ad.js?ver=6.0.1')}}"
        id="swv-js"></script>
    <script id="contact-form-7-js-before">
        var wpcf7 = {
            "api": {
                "root": "https:\/\/wpriverthemes.com\/gixus\/wp-json\/",
                "namespace": "contact-form-7\/v1"
            },
            "cached": 1
        };
    </script>
    <script src="{{ asset('assets/wp-content/plugins/contact-form-7/includes/js/index37ad.js?ver=6.0.1') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/count-to.js') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/circle-progress.js') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/validnavs.js') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/jquery.circleType.js') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/gsap.js') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/wp-content/themes/gixus/assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/wp-content/plugins/elementor/assets/js/webpack.runtime.min18be.js?ver=3.25.10') }}">
    </script>
    <script src="{{ asset('assets/wp-content/plugins/elementor/assets/js/frontend-modules.min18be.js?ver=3.25.10') }}">
    </script>
    <script src="{{ asset('assets/wp-includes/js/jquery/ui/core.minb37e.js?ver=1.13.3') }}"></script>

    <!-- Inline script section -->
    <script>
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
                "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
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
            "version": "3.25.10",
            "is_static": false,
            "experimentalFeatures": {
                "additional_custom_breakpoints": true,
                "container": true,
                "e_swiper_latest": true,
                "e_nested_atomic_repeaters": true,
                "e_optimized_control_loading": true,
                "e_onboarding": true,
                "e_css_smooth_scroll": true,
                "home_screen": true,
                "nested-elements": true,
                "editor_v2": true,
                "e_element_cache": true,
                "link-in-bio": true,
                "floating-buttons": true
            },
            "urls": {
                "assets": "{{ url('wp-content/plugins/elementor/assets/') }}",
                "ajaxurl": "{{ url('wp-admin/admin-ajax.php') }}",
                "uploadUrl": "{{ url('wp-content/uploads') }}"
            },
            "nonces": {
                "floatingButtonsClickTracking": "a46fbdd38f"
            },
            "swiperClass": "swiper",
            "settings": {
                "page": [],
                "editorPreferences": []
            },
            "kit": {
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
                "id": 25,
                "title": "Gixus%20%E2%80%93%20Business%20Consulting%20WordPress%20Theme",
                "excerpt": "",
                "featuredImage": false
            }
        };
    </script>

    @livewireScripts
    <script src="{{ asset('assets/wp-content/plugins/elementor/assets/js/frontend.min18be.js?ver=3.25.10') }}"></script>
</body>

<!-- Mirrored from wpriverthemes.com/gixus/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Dec 2024 15:10:48 GMT -->

</html>


<!-- Page cached by LiteSpeed Cache 6.5.2 on 2024-12-21 23:16:21 -->