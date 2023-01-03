@section('title', __('download.meta.title'))
@section('description', __('download.meta.description'))

@section('og:title', __('download.meta.title'))
@section('og:description', __('download.meta.description'))
@section('og:image', asset('/assets/img/favicon.png'))

<x-layouts.default>
    <div class="section home-cover cover-download overflow-hidden">
        <div class="container">
            <div class="row">

            <div class="col-md-8 text-left pb-3 pt-3">
                <span class="badge badge-primary">{{ __('download.header.alpha') }}</span>
                <h1 class="mt-3 font-weight-bold display-3">{{ __('download.header.title') }}</h1>
                <p class="lead opacity-75 mt-4">{{ __('download.header.subtitle') }}</p>

                <div class="row">
                    <div class="col d-flex align-items-center my-4">
                        <a href="{{ route('download.start') }}" class="btn btn-lg btn-primary btn-rounded py-3 px-4 mr-4 ripple">
                            <div class="d-flex px-2">
                                <div class="d-flex align-items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="24" height="24" class="mr-2"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 12v7H5v-7H3v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zm-6 .67l2.59-2.58L17 11.5l-5 5-5-5 1.41-1.41L11 12.67V3h2z"/></svg>
                                </div>
                                <div class="d-flex">{{ __('download.header.download') }}</div>
                            </div>
                        </a>
                        <p class="opacity-75 mb-0 d-md-block d-none">{{ __('download.header.version') }}&nbsp;{{ $version['version'] }}&nbsp;·&nbsp;{{ $version['filesize'] }} MB</p>
                    </div>
                </div>
                <p class="opacity-75 mb-0 d-md-none d-block">{{ __('download.header.version') }}&nbsp;{{ $version['version'] }}&nbsp;·&nbsp;{{ $version['filesize'] }} MB</p>
            </div>

            </div>
        </div>
    </div>

    <div class="section dark-secondary py-4">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 text-center mb-2 mt-2">
                    <h6 class="text-white opacity-75">{{ __('download.header.stores') }}</h6>
                </div>
            </div>
            <div class="row d-flex justify-content-center platform-logos">
                <div class="col-md-2 col-4">
                    <img src="{{ asset('/assets/img/logos/steam.png') }}" class="img-fluid" style="filter: invert(1);">
                </div>
                <div class="col-md-2 col-4">
                    <img src="{{ asset('/assets/img/logos/epic.png') }}" class="img-fluid" style="filter: invert(1); opacity: .25" data-toggle="tooltip" data-placement="bottom" title="Currently not available">
                </div>
                <div class="col-md-2 col-4">
                    <img src="{{ asset('/assets/img/logos/windows.png') }}" class="img-fluid" style="filter: invert(1); opacity: .25" data-toggle="tooltip" data-placement="bottom" title="Currently not available">
                </div>
            </div>
        </div>
    </div>


    <div class="section pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb-5">
                    <div class="white-secondary p-5">
                        <h1 class="font-weight-bold display-4">{{ __('download.changelog') }}</h1>
                        <div class="changelog-entry mt-4 mb-5">
                            <h6>{{ Carbon\Carbon::parse($changelog['released'])->format('d.m.Y · H:i') }}</h6>
                            <h3>Nitrox&nbsp;{{ $version['version'] }}</h3>
                            <ul>
                                @foreach ($changelog['patchnotes'] as $patchnote)
                                    <li>{{ $patchnote }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <a href="{{ route('pages.changelog') }}" class="btn ripple btn-link">{{ __('download.changelog_older') }}</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 text-left">
                            <h3 class="font-weight-bold">
                                {!! __('download.sidebar') !!}
                            </h3>
                        </div>
                    </div>

                    <div class="row mb-4 mt-4">
                        <div class="col-md-12 text-left">
                            <h6>Install Guide</h6>
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0qMHaOVH0Ek?rel=0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-layouts.partials.footer-extended></x-layouts.partials.footer-extended>

</x-layouts.default>
