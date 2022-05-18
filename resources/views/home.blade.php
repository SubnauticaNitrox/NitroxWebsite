@section('title', __('pages.home.meta.title'))
@section('description', __('pages.home.meta.description'))

@section('og:title', __('pages.home.meta.title'))
@section('og:description', __('pages.home.meta.description'))
@section('og:image', asset('/assets/img/favicon.png'))

<x-layouts.default>
    <div class="section home-cover cover coverHome overflow-hidden">
        <div class="cover-image">
            <div class="header-unit home-cover"></div>
        </div>
        <div class="container pb-0">
            <div class="row" style="perspective: 400px;">

                <div class="col-md-8 offset-md-2 text-center mt-5 about-intro pt-md-5">
                    <h1 class="pt-md-5 mt-3 font-weight-bold opacity-75">{!! __('pages.home.hero_over') !!}</h1>
                    <h1 class="mt-3 font-weight-bold display-3">{!!__('pages.home.hero_slogan') !!}</h1>
                    <a href="{{ route('download') }}" class="btn btn-lg btn-primary btn-loading btn-rounded mt-4 mb-4 px-5 py-3 ripple">
                        {{ __('pages.home.hero_cta') }}
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
                        {!! __('pages.home.explore') !!}
                    </h3>
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
                                <h6 class="pb-5">{{ __('pages.home.feature.multiplayer.headline') }}</h6>
                                <h1 class="font-weight-bold display-3">{{ __('pages.home.feature.multiplayer.title') }}</h1>
                                <p class="lead">{{ __('pages.home.feature.multiplayer.description') }}</p>
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
                                <h6 class="pb-5">{{ __('pages.home.feature.stores.headline') }}</h6>
                                <h1 class="font-weight-bold display-3">{{ __('pages.home.feature.stores.title') }}</h1>
                                <p class="lead">{{ __('pages.home.feature.stores.description') }}</p>
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
                                        <img src="{{ asset('/assets/img/logos/windows.png') }}" class="img-fluid" style="filter: invert(1); opacity: .25" data-toggle="tooltip" data-placement="bottom" title="{{ __('pages.home.feature.stores.tooltip') }}">
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
                                <h6 class="pb-5">{{ __('pages.home.feature.gameplay.headline') }}</h6>
                                <h1 class="font-weight-bold display-3">{{ __('pages.home.feature.gameplay.title') }}</h1>
                                <p class="lead">{{ __('pages.home.feature.gameplay.description') }}</p>
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
                                <h6 class="pb-5">{{ __('pages.home.feature.code.headline') }}</h6>
                                <h1 class="font-weight-bold">{{ __('pages.home.feature.code.title') }}</h1>
                                <p class="lead">{{ __('pages.home.feature.code.description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="nitrox-card nc-5">
                        <div class="row">
                            <div class="col text-white">
                                <h6 class="pb-5">{{ __('pages.home.feature.community.headline') }}</h6>
                                <h1 class="font-weight-bold">{{ __('pages.home.feature.community.title') }}</h1>
                                <p class="lead">{{ __('pages.home.feature.community.description') }}</p>

                                <h1 class="display-2 font-weight-bold pt-3">{{ __('pages.home.feature.community.download_count') }}</h1>
                                <h6>{{ __('pages.home.feature.community.downloads') }}</h6>

                                <h1 class="display-2 font-weight-bold pt-3">{{ __('pages.home.feature.community.discord_count') }}</h1>
                                <h6>{{ __('pages.home.feature.community.discord') }}</h6>
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
                                <h6 class="pb-5">{{ __('pages.home.feature.launcher.headline') }}</h6>
                                <h1 class="font-weight-bold display-3 pt-2">{{ __('pages.home.feature.launcher.title') }}</h1>
                                <p class="lead">{{ __('pages.home.feature.launcher.description') }}</p>
                                <p class="font-weight-500">
                                    <a href="{{ route("features.launcher") }}">{{ __('pages.home.feature.launcher.view') }}
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
                                <h6 class="pb-5">{{ __('pages.home.feature.chat.headline') }}</h6>
                                <h1 class="font-weight-bold display-3 pt-2">{{ __('pages.home.feature.chat.title') }}</h1>
                                <p class="lead">{{ __('pages.home.feature.chat.description') }}</p>
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
                                <h6 class="pb-5">{{ __('pages.home.feature.upnp.headline') }}</h6>
                                <h1 class="font-weight-bold display-3 pt-2">{{ __('pages.home.feature.upnp.title') }}</h1>
                                <p class="lead">{{ __('pages.home.feature.upnp.description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row pt-5 mt-5 mb-5">
                <div class="col-md-10 mt-5 mb-5">
                    <h6 class="pb-5">{{ __('pages.home.feature.lang.headline') }}</h6>
                    <h1 class="font-weight-bold"><span class="opacity-75">{{ __('pages.home.feature.lang.title') }}</span> {{ __('pages.home.feature.lang.languages') }}</h1>
                    <p class="lead mt-3 font-weight-bold">
                        <a href="https://hosted.weblate.org/engage/subnauticanitrox/" target="_blank">{{ __('pages.home.feature.lang.link') }}</a>
                    </p>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-md-4 mb-5">
                    <div class="nitrox-card nc-empty h-100">
                        <div class="row pb-4">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">{{ __('pages.home.feature.host.headline') }}</h6>
                                <p class="lead">{{ __('pages.home.feature.host.description') }}</p>
                                <h1 class="display-1 font-weight-bold pt-3 text-center">{{ __('pages.home.feature.host.number') }}<sup class="fnote"><a class="text-white opacity-5" href="#footnote-2">2</a></sup></h1>
                                <h6 class="text-center">{{ __('pages.home.feature.host.subtitle') }}</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="nitrox-card nc-empty h-100">
                        <div class="row pb-4">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">{{ __('pages.home.feature.play.headline') }}</h6>
                                <p class="lead">{{ __('pages.home.feature.play.description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="nitrox-card nc-empty h-100">
                        <div class="row pb-4">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">{{ __('pages.home.feature.server.headline') }}</h6>
                                <p class="lead"{{ __('pages.home.feature.server.number') }}></p>
                                <h1 class="display-1 font-weight-bold pt-3 text-center">{{ __('pages.home.feature.server.number') }}<sup class="fnote"><a class="text-white opacity-5" href="#footnote-3">3</a></sup></h1>
                                <h6 class="text-center">{{ __('pages.home.feature.server.subtitle') }}</h6>
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
                    <h1 class="font-weight-bold display-3">{{ __('pages.home.nextsteps.get.title') }}</h1>
                    <p class="lead pt-2">{{ __('pages.home.nextsteps.get.description') }}</p>
                    <a href="{{ route('download') }}" class="btn btn-lg btn-primary btn-loading btn-rounded mt-4 mb-4 px-5 py-3" style="animation-delay: .1s;">{{ __('pages.home.nextsteps.get.download') }}</a>
                    <p class="text-muted">{{ __('pages.home.nextsteps.get.latest_version') }}&nbsp;{{ $version['version'] }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="col-md-12 sm-cover-faq p-5 mt-3 rounded text-left">
                        <h6 class="pb-5">{{ __('pages.home.nextsteps.wiki.title') }}</h6>
                        <h2 class="font-weight-bold pt-5">{{ __('pages.home.nextsteps.wiki.description') }}</h2>
                        <a href="{{ route('wiki.home') }}" class="btn btn-lg btn-outline mt-4 mb-4">{{ __('pages.home.nextsteps.wiki.link') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-layouts.partials.footer-extended></x-layouts.partials.footer-extended>

</x-layouts.default>
