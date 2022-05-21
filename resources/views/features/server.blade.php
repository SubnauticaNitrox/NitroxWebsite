@section('title', __('server.meta.title'))
@section('description', __('server.meta.description'))

@section('og:title', __('server.meta.title'))
@section('og:description', __('server.meta.description'))
@section('og:image', asset('/assets/img/favicon.png'))

<x-layouts.default>
    <x-layouts.partials.features-navigation></x-layouts.partials.features-navigation>

    <div class="section dark-section text-white">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-12 my-5 py-5">
                    <div class="mt-mb-5 pt-md-5">

                    </div>
                    <h1 class="display-4 font-weight-bold pt-5 mt-5">{!! __('server.title') !!}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10">
                    <h3 class="font-weight-bold">
                        {!! __('server.features') !!}
                    </h3>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-md-4 mb-5">
                    <div class="nitrox-card nc-empty h-100">
                        <div class="row pb-4">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">{{ __('server.cards.host') }}</h6>
                                <p class="lead">{{ __('server.cards.host_info') }}</p>
                                <h1 class="display-1 font-weight-bold pt-3 text-center">100<sup class="fnote"><a class="text-white opacity-5" href="#footnote-1">1</a></sup></h1>
                                <h6 class="text-center">{{ __('server.cards.host_slots') }}</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="nitrox-card nc-empty h-100">
                        <div class="row pb-4">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">{{ __('server.cards.connect') }}</h6>
                                <p class="lead">{{ __('server.cards.connect_info') }}</p>
                                <h1 class="display-1 font-weight-bold pt-3 text-center">UPNP</h1>
                                <h6 class="text-center">{{ __('server.cards.connect_subtitle') }}</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="nitrox-card nc-empty h-100">
                        <div class="row pb-4">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">{{ __('server.cards.play') }}</h6>
                                <p class="lead">{{ __('server.cards.play_info') }}</p>
                                <h1 class="display-1 font-weight-bold pt-3 text-center">24/7<sup class="fnote"><a class="text-white opacity-5" href="#footnote-2">2</a></sup></h1>
                                <h6 class="text-center">{{ __('server.cards.play_subtitle') }}</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row pb-5">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">{{ __('server.features_included') }}</h1>
                    {!! __('server.feature_list') !!}
                </div>
            </div>

        </div>
    </div>

    <div class="section section-dark text-white dark-secondary">
        <div class="container">
            <div class="row d-flex">
                <div class="col-12 mt-5 mb-4">
                    <ol class="small opacity-5 pl-3">
                        <li id="footnote-1">{{ __('server.cards.host_footnote') }}</li>
                        <li id="footnote-2">{{ __('server.cards.play_footnote') }}</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

</x-layouts.default>
