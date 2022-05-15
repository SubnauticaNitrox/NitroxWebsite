@section('title', 'Nitrox Launcher · Subnautica Multiplayer Mod')
@section('description', 'The Nitrox Launcher is your entry to the multiplayer subnautica experience.')

@section('og:title', 'Nitrox Launcher · Subnautica Multiplayer Mod')
@section('og:description', 'The Nitrox Launcher is your entry to the multiplayer subnautica experience.')
@section('og:image', asset('/assets/img/favicon.png'))

<x-layouts.default>
    <x-layouts.partials.features-navigation></x-layouts.partials.features-navigation>

    <div class="section overflow-hidden d-none d-md-block" id="launcher-stick-trigger">
        <div class="d-flex position-absolute vh-100 w-100" style="z-index: 1">
            <svg class="float-anim text-fade-out" id="launcher-scroll-arrow" style="position: absolute;bottom: 26px;left: 50%;right: 50%;"width="28" height="12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 2l10.336 6.89a3 3 0 0 0 3.328 0L26 2" stroke="#fff" stroke-opacity=".75" stroke-width="4" stroke-linecap="round" filter="url(#filter0_b)"/><defs><filter id="filter0_b" x="-4" y="-4" width="36" height="19.395" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feFlood flood-opacity="0" result="BackgroundImageFix"/><feGaussianBlur in="BackgroundImage" stdDeviation="2"/><feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur"/><feBlend in="SourceGraphic" in2="effect1_backgroundBlur" result="shape"/></filter></defs></svg>

            <div class="col-md-8 text-center mx-auto my-auto text-fade-out"  id="launcher-intro">
                <h1 class="font-weight-bold display-3 text-white">All in one<br>multiplayer.</h1>
            </div>
        </div>
        <div class="container pb-5">

            <div class="row" id="launcher-stick">

                <div class="col-md-8 offset-md-2 text-center mb-5">
                    <div class="my-5 pt-5"></div>
                    <div class="my-5 pt-5"></div>
                    <div class="my-5 pt-5"></div>
                    <div class="my-5 pt-5"></div>
                    <h6 class="d-inline-block py-1 px-2 badge-outline border">Coming soon</h6>
                    <h1 class="font-weight-bold display-3">Nitrox Launcher.</h1>
                </div>
                <div class="embed-responsive embed-responsive-16by9 rounded-xl shadow-lg overflow-hidden" id="launcher-anim" >
                    <video src="{{ asset('/assets/img/video/launcher-trailer-16s.mp4') }}" autoplay loop muted poster="{{ asset('/assets/img/video/launcher.jpg') }}" class="embed-responsive-item"></video>
                </div>
            </div>
        </div>
    </div>

    <div class="section d-block d-md-none">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="my-5 pt-5"></div>

                    <h1 class="font-weight-bold">Nitrox Launcher.</h1>
                </div>
                <div class="col-12 pt-5">
                    <img src="{{ asset('/assets/img/video/launcher.jpg') }}" class="img-fluid rounded-xl shadow-lg overflow-hidden "alt="">
                </div>
            </div>
        </div>
    </div>


    <div class="section mb-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 mt-5">
                    <h3 class="font-weight-bold">
                        Preview the new Nitrox Launcher. <span class="opacity-5">Your entry to the multiplayer experience. Carefully designed to be easy to use. Coming soon.</span></h3>
                </div>
            </div>
        </div>
    </div>


    <div class="section mb-5 mt-4 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-4">
                    <div class="grey h-100">
                        <div class="row">
                            <div class="col text-center">
                                <img src="{{ asset('/assets/img/launcher/options.png') }}" class="img-fluid pt-2" alt="Launcher">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 my-5 pt-5">
                    <div class="py-5">
                        <div class="row">
                            <div class="col text-left">
                                <h3 class="font-weight-bold">
                                    Redesigned from the ground up. <span class="opacity-5">With a focus on providing helpful information. Fast access to multiplayer. Detailed diagnostics. Everything you need to host a server.</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row position-relative">

                <div class="col-md-6 fluid-img-wrapper">
                    <div class="fluid-img-container launcher-home">
                        <figure class="nitrox-fluid-img image-home"></figure>

                    </div>
                </div>

                <div class="col-md-6 mt-5 pt-5">
                    <h3 class="font-weight-bold mt-md-5">
                        Your hub for everything Nitrox.
                    </h3>
                    <p class="lead">
                        With the redesigned launcher you can easily stay up-to-date with everything Nitrox related. Be first to get the latest versions, detailed information to enhance your server experience and a community tab with access to 24/7 community-hosted servers.
                    </p>

                    <p class="lead font-weight-500">
                        <span class="material-icons" style="vertical-align: text-bottom;">sports_esports</span>
                        Multiplayer patcher</p>
                    <p class="lead font-weight-500">
                        <span class="material-icons" style="vertical-align: text-bottom;">dns</span>
                        Server console</p>
                    <p class="lead font-weight-500">
                        <span class="material-icons" style="vertical-align: text-bottom;">router</span>
                        Automatic portforwading</p>
                    <p class="lead font-weight-500">
                        <span class="material-icons" style="vertical-align: text-bottom;">verified</span>
                        Diagnostics</p>
                </div>

            </div>
        </div>
    </div>


    <div class="section" id="trigger1">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4 mt-4 my-auto">
                    <h3 class="font-weight-bold mt-md-5">
                        Smart settings
                    </h3>
                    <p class="lead">
                        Bought multiple copies of Subnautica? No problem. The Nitrox Launcher can automatically detect all your Subnautica game installations, allowing you to quickly choose between different store versions. Simplifying the setup and removing the need to manually specify a path.
                    </p>
                </div>
                <div class="col-md-8 mt-4">
                    <div class="grey h-100">
                        <div class="row">
                            <div class="col text-center">
                                <img src="{{ asset('/assets/img/launcher/smart.png') }}" class="img-fluid w-100 pt-5 pr-5" alt="Launcher">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-md-4 mt-4 order-1 order-md-2 my-auto">
                    <h3 class="font-weight-bold mt-md-5">
                        Server
                    </h3>
                    <p class="lead">
                        Nitrox Server is integrated into the launcher. This allows for a quick setup of your very own multiplayer instance. Thanks to UPNP Nitrox automatically takes care of port forwarding. The server is lightweight and easy to run without using lots of system resources.
                    </p>
                    <p class="font-weight-500">
                        <a href="{{ route('features.server') }}">Learn more
                            <span class="material-icons" style="position: absolute;font-size: 20px;margin: 2px 0px 0px -2px;">
                                    chevron_right
                                </span>
                        </a>
                    </p>
                </div>
                <div class="col-md-8 mt-4 order-2 order-md-1">
                    <div class="grey h-100">
                        <div class="row">
                            <div class="col text-center">
                                <img src="{{ asset('/assets/img/launcher/server.png') }}" class="img-fluid w-100 pt-4 pl-4" alt="Launcher">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


{{--    <div id="test-section" class="overflow-hidden d-none d-md-block">--}}
{{--        <div id="test-text" class="vh-100" style="background-image: url(../assets/img/screenshots/subnautica-multiplayer-2.jpg); background-size: cover; background-position: center">--}}
{{--            <div class="vh-100 d-flex" >--}}
{{--                <div class="" id="start-test-inner"></div>--}}
{{--                <div class="vh-100 w-100" style="background: rgba(0, 0, 0, 0.5);" id="test-inner" >--}}
{{--                    <div class="d-flex text-center vh-100">--}}
{{--                        <div class="text-white my-auto mx-auto col-lg-6 col-md-8">--}}
{{--                            <h6 class="pb-3">Nitrox mod</h6>--}}
{{--                            <h1 class="font-weight-bold display-3">Start your multiplayer adventure.</h1>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <style media="screen">
        svg.text-fade-out.faded {
            transition-duration: .2s
        }
        .text-fade-out.faded {
            opacity: 0;
            -webkit-transition: all .125s ease-in-out;
            -moz-transition: all .125s ease-in-out;
            -ms-transition: all .125s ease-in-out;
            -o-transition: all .125s ease-in-out;
            transition: all .125s ease-in-out;
        }
        .text-fade-out  {
            opacity: 1;
            -webkit-transform: none;
            -moz-transform: none;
            -ms-transform: none;
            -o-transform: none;
            transform: none;
        }

    </style>

    @push('scripts')
        <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
{{--        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>--}}
        <script type="text/javascript" src="{{ asset('/assets/js/gsap.js') }}"></script>
        <script>
            // init controller
            var controller = new ScrollMagic.Controller();
        </script>
        <script>
            // build Tween
            var tween = new TimelineMax()
                .from("#launcher-anim", 1.5, {scale: 4, y:-500})
                .to("#launcher-anim", 0.5, {scale: 1, delay: 5, y:0});


            // build scene
            new ScrollMagic.Scene({
                triggerElement: "#gsap-trigger",
                triggerHook: "onEnter", // show, when scrolled 10% into view
                duration: "3000", // use full viewport
                offset: 50 // move trigger to center of element
            })
                .setTween(tween)
                //.addIndicators({name: "GSAP"}) // add indicators (requires plugin)
                .setClassToggle("#launcher-intro, #launcher-scroll-arrow", "faded") // add class toggle

                .addTo(controller);


            $(function () { // wait for document ready
                // build scene
                var scene = new ScrollMagic.Scene({triggerElement: "#launcher-stick-trigger", duration: "650", pushFollowers: false})
                    .setPin("#launcher-stick")
                    //.addIndicators({name: "1 (duration: 250)"}) // add indicators (requires plugin)

                    .addTo(controller)

            });
        </script>

    @endpush

</x-layouts.default>
