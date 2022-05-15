@section('title', 'Nitrox for Subnautica · Subnautica Multiplayer Mod')
@section('description', 'Nitrox is a free multiplayer mod for the game Subnautica developed by the community.')

@section('og:title', 'Nitrox for Subnautica · Subnautica Multiplayer Mod')
@section('og:description', 'Nitrox is a free multiplayer mod for the game Subnautica developed by the community.')
@section('og:image', asset('/assets/img/favicon.png'))

<x-layouts.default>
    <div class="section home-cover cover coverHome overflow-hidden">
        <div class="cover-image">
            <div class="header-unit home-cover"></div>
        </div>
        <div class="container pb-0">
            <div class="row" style="perspective: 400px;">

                <div class="col-md-8 offset-md-2 text-center mt-5 about-intro pt-md-5">
                    <h1 class="pt-md-5 mt-3 font-weight-bold opacity-75"><span>Subnautica</span> <span>Nitrox</span></h1>
                    <h1 class="mt-3 font-weight-bold display-3"><span>Your</span> <span>multiplayer</span> <span>mod</span> <span>for</span> <span>Subnautica.</span></h1>
                    <a href="{{ route('download') }}" class="btn btn-lg btn-primary btn-loading btn-rounded mt-4 mb-4 px-5 py-3 ripple">
                        Download for free
                    </a>
                </div>

                <div class="col-md-12 mt-5 text-center move-up ">
                    <img src="{{ asset('/assets/img/launcher-2022.jpg') }}" class="img-fluid mt-3 rounded" alt="Nitrox Launcher">
                </div>

            </div>
        </div>
    </div>



    <div class="section my-5 pb-4" id="trigger2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 py-5 mt-4" id="reveal2">
                    <h3 class="font-weight-bold">
                        Experience Subnautica <span class="opacity-5">like a completely new game. Team up. Explore new depths. Build epic bases.</span></h3>
                </div>
            </div>
        </div>
    </div>



    <div class="section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="nitrox-card nc-1 ">
                        <div class="row pb-5">
                            <div class="col-md-6 text-white">
                                <h6 class="pb-5">The mod</h6>
                                <h1 class="font-weight-bold display-3">Nitrox multiplayer</h1>
                                <p class="lead">Finally begin playing Subnautica together with your friends. Join or create your very own server.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="nitrox-card nc-2 ">
                        <div class="row pb-5">
                            <div class="col-md-6 text-white py-3">
                                <h6 class="pb-5">Supported Store Versions</h6>
                                <h1 class="font-weight-bold display-3">Cross platform</h1>
                                <p class="lead">Compatible with your favourite stores. Native cross-play support built into the mod allowing for seamless multiplayer.</p>
                            </div>
                            <div class="col-md-6 my-auto">
                                <div class="row">
                                    <div class="col">
                                        <img src="{{ asset('/assets/img/logos/steam.png') }}" class="img-fluid" style="filter: invert(1);">
                                    </div>
                                    <div class="col">
                                        <img src="{{ asset('/assets/img/logos/epic.png') }}" class="img-fluid" style="filter: invert(1);">
                                    </div>
                                    <div class="col">
                                        <img src="{{ asset('/assets/img/logos/windows.png') }}" class="img-fluid" style="filter: invert(1); opacity: .25" data-toggle="tooltip" data-placement="bottom" title="Currently not available">
                                        <sup class="fnote" style="position: absolute; top: 3em; margin-left: -8px"><a class="text-white opacity-5 p-1" href="#footnote-1">1</a></sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="nitrox-card nc-3 ">
                        <div class="row pb-5">
                            <div class="col-md-6 text-white">
                                <h6 class="pb-5">Gameplay</h6>
                                <h1 class="font-weight-bold display-3">Your gameplay</h1>
                                <p class="lead">Play Subnautica, from a survival play-through with your friends to a creative build session.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <div class="nitrox-card nc-4 h-100">
                        <div class="row">
                            <div class="col text-white">
                                <h6 class="pb-5">Code base</h6>
                                <h1 class="font-weight-bold">Open source</h1>
                                <p class="lead">Regular support and updates from the generous contributors. Contribute and make the mod better.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="nitrox-card nc-5">
                        <div class="row">
                            <div class="col text-white">
                                <h6 class="pb-5">Community</h6>
                                <h1 class="font-weight-bold">Player base</h1>
                                <p class="lead">Be part of the large, growing Nitrox community. Find new servers, get help and talk to other Nitrox players.</p>

                                <h1 class="display-2 font-weight-bold pt-3">1 M</h1>
                                <h6>Downloads</h6>

                                <h1 class="display-2 font-weight-bold pt-3">27 K</h1>
                                <h6>Discord Members</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section mt-5 mb-5 dark-section">
        <div class="container">
            <div class="row pt-5 mt-5">

                <div class="col-md-12">
                    <div class="nitrox-card nc-launcher">
                        <div class="row pb-5">
                            <div class="col-md-6 text-white  platform-logos">
                                <h6 class="pb-5">Experience</h6>
                                <h1 class="font-weight-bold display-3 pt-2">Nitrox Launcher</h1>
                                <p class="lead">Use the Nitrox Launcher, currently available for Windows. Featuring a well designed user interface to make playing multiplayer even easier.</p>
                                <p class="font-weight-500">
                                    <a href="{{ route("features.launcher") }}">View work in progress concepts
                                        <span class="material-icons" style="position: absolute;font-size: 20px;margin: 2px 0px 0px -2px;">
                                            chevron_right
                                        </span>
                                    </a>
                                </p>
                                <img src="{{ asset('/assets/img/logos/windows.png') }}" alt="Windows Logo" height="68px" class="mr-3 mt-3">

                            </div>
                            <div class="col-md-6 mt-5 mt-md-0">
                                <img src="{{ asset('/assets/img/launcher-2022-full.jpg') }}" alt="Launcher Screenshot" class="img-fluid my-auto">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-5">
                    <div class="nitrox-card nc-chat">
                        <div class="row pb-0">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">Communication</h6>
                                <h1 class="font-weight-bold display-3 pt-2">In-game messaging</h1>
                                <p class="lead">Stay in touch with the Nitrox cross-platform compatibile built in game messaging system.</p>
                            </div>
                            <div class="col-md-12 mt-5">
                                <img src="{{ asset('/assets/img/chat-2.png') }}" alt="Launcher Screenshot" class="img-fluid my-auto">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-5">
                    <div class="nitrox-card nc-ports h-100">
                        <div class="row pb-0">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">UPNP Support</h6>
                                <h1 class="font-weight-bold display-3 pt-2">Automatic port forwarding</h1>
                                <p class="lead">Nitrox automatically opens the required ports making it possible to connect to your friends straight away without any need for third party VPN software.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row pt-5 mt-5 mb-5">
                <div class="col-md-10 mt-5 mb-5">
                    <h6 class="pb-5">Community added languages</h6>
                    <h1 class="font-weight-bold"><span class="opacity-75">Nitrox also speaks your language.</span> English, German, French, Spanish, Romanian, Finnish, Russian, Italian, Hungarian, Slovakian...</h1>
                    <p class="lead mt-3 font-weight-bold">
                        <a href="https://github.com/SubnauticaNitrox/Nitrox" target="_blank">Contribute & add your language.</a>
                    </p>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-md-4 mb-5">
                    <div class="nitrox-card nc-empty h-100">
                        <div class="row pb-4">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">Host</h6>
                                <p class="lead">Easily host a large player event with support up to 100 players.</p>
                                <h1 class="display-1 font-weight-bold pt-3 text-center">100<sup class="fnote"><a class="text-white opacity-5" href="#footnote-2">2</a></sup></h1>
                                <h6 class="text-center">Max. Slots</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="nitrox-card nc-empty h-100">
                        <div class="row pb-4">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">Play</h6>
                                <p class="lead">Randomized starter Escape Pod, Randomized & Saved Seeds for Resources and Fauna, New Save system, Plants & Farming... and so much more.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="nitrox-card nc-empty h-100">
                        <div class="row pb-4">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">Public Server</h6>
                                <p class="lead">Find permanent servers to play on, in the Nitrox Discord.</p>
                                <h1 class="display-1 font-weight-bold pt-3 text-center">24/7<sup class="fnote"><a class="text-white opacity-5" href="#footnote-3">3</a></sup></h1>
                                <h6 class="text-center">Servers</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section pt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <h1 class="font-weight-bold display-3">Get the mod</h1>
                    <p class="lead pt-2">Download the Nitrox Mod for free and start playing Multiplayer!</p>
                    <a href="{{ route('download') }}" class="btn btn-lg btn-primary btn-loading btn-rounded mt-4 mb-4 px-5 py-3" style="animation-delay: .1s;">Download</a>
                    <p class="text-muted">Latest version&nbsp;{{ $version['version'] }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="col-md-12 sm-cover-faq p-5 mt-3 rounded text-left">
                        <h6 class="pb-5">Getting Started</h6>
                        <h2 class="font-weight-bold pt-5">Read the install guide and FAQ's</h2>
                        <a href="{{ route('wiki.home') }}" class="btn btn-lg btn-outline mt-4 mb-4">Visit Guides</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-layouts.partials.footer-extended></x-layouts.partials.footer-extended>

</x-layouts.default>
