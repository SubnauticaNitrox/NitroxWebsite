@section('title', 'Nitrox Server · Features')
@section('description', 'Nitrox features a powerful multiplayer server, all while being extremely lightweight and resource efficient.')

@section('og:title', 'Nitrox Server · Features')
@section('og:description', 'Nitrox features a powerful multiplayer server, all while being extremely lightweight and resource efficient.')
@section('og:image', asset('/assets/img/favicon.png'))

<x-layouts.default>
    <x-layouts.partials.features-navigation></x-layouts.partials.features-navigation>

    <div class="section dark-section text-white">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-12 my-5 py-5">
                    <div class="mt-mb-5 pt-md-5">

                    </div>
                    <h1 class="display-4 font-weight-bold pt-5 mt-5">Nitrox Server <br>Lightweight & powerful.</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <h3 class="font-weight-bold">
                        Nitrox servers <span class="opacity-5">are powerful, yet easy to host. With optimised code written for Subnautica. It runs exteremly lightweight and requires hardly any resources, for the best game performance.</span></h3>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-4 mb-5">
                    <div class="nitrox-card nc-empty h-100">
                        <div class="row pb-4">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">Host</h6>
                                <p class="lead">Easily host a large player event with support up to 100 players.</p>
                                <h1 class="display-1 font-weight-bold pt-3 text-center">100<sup class="fnote"><a class="text-white opacity-5" href="#footnote-1">1</a></sup></h1>
                                <h6 class="text-center">Max. Slots</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="nitrox-card nc-empty h-100">
                        <div class="row pb-4">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">Connect</h6>
                                <p class="lead">Automatic portforwading through use of UPNP for fast setup.</p>
                                <h1 class="display-1 font-weight-bold pt-3 text-center">UPNP</h1>
                                <h6 class="text-center">Technology</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="nitrox-card nc-empty h-100">
                        <div class="row pb-4">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">Play</h6>
                                <p class="lead">Host or find permanent servers to play on, in the Nitrox community.</p>
                                <h1 class="display-1 font-weight-bold pt-3 text-center">24/7<sup class="fnote"><a class="text-white opacity-5" href="#footnote-2">2</a></sup></h1>
                                <h6 class="text-center">Servers</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row pb-5">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">What's included?</h1>
                    <p class="lead">Nitrox server includes everything you need to start, host and play Subnautica in multiplayer mode.</p>
                    <ul class="lead">
                        <li>Server console</li>
                        <li>Built in chat system</li>
                        <li>Configurable server port</li>
                        <li>Max. 100 connected players</li>
                        <li>Automatic save function</li>
                        <li>Configurable game mode setting</li>
                        <li>Public server mode</li>
                        <li>Private password protected server</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="section section-dark text-white dark-secondary">
        <div class="container">
            <div class="row d-flex">
                <div class="col-12 mt-5 mb-4">
                    <ol class="small opacity-5 pl-3">
                        <li id="footnote-1">Max. 100 server players, recommened player count 5.</li>
                        <li id="footnote-2">Public servers are not hosted by Nitrox and 100% uptime not ensured. Third party servers are not moderated by the Nitrox team.</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

</x-layouts.default>
