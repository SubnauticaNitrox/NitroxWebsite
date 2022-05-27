@section('title', __('resources.meta.title'))
@section('description', __('resources.meta.description'))

@section('og:title', __('resources.meta.title'))
@section('og:description', __('resources.meta.description'))
@section('og:image', asset('/assets/img/favicon.png'))

<x-layouts.default>
    <x-layouts.partials.features-navigation></x-layouts.partials.features-navigation>

    <div class="section home-cover cover-team overflow-hidden">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 mt-md-5">
                    <h1 class="mt-5 display-4 font-weight-bold">{!! __('resources.title') !!}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section dark-section text-white pb-5">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">Logo</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-4">
                    <div class="nc-card white-secondary p-5 text-center">
                        <img src="{{ asset('/assets/img/brand/logo/NitroxLogo.png') }}" alt="Nitrox Logo Black" class="img-fluid">
                    </div>
                    <div class="mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="20px" height="20px" class="mr-2"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 12v7H5v-7H3v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zm-6 .67l2.59-2.58L17 11.5l-5 5-5-5 1.41-1.41L11 12.67V3h2z"></path></svg>
                        <a href="{{ asset('/assets/img/brand/logo/NitroxLogo.png') }}" download="NitroxLogo.png">
                            .png
                        </a>
                        <span>&nbsp;&#183;&nbsp;</span>
                        <a href="{{ asset('/assets/img/brand/logo/NitroxLogo.svg') }}" download="NitroxLogo.svg">
                            .svg
                        </a>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="nc-card dark-secondary p-5 text-center">
                        <img src="{{ asset('/assets/img/brand/logo/NitroxLogoWhite.png') }}" alt="Nitrox Logo White" class="img-fluid">
                    </div>
                    <div class="mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="20px" height="20px" class="mr-2"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 12v7H5v-7H3v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zm-6 .67l2.59-2.58L17 11.5l-5 5-5-5 1.41-1.41L11 12.67V3h2z"></path></svg>
                        <a href="{{ asset('/assets/img/brand/logo/NitroxLogoWhite.png') }}" download="NitroxLogoWhite.png">
                            .png
                        </a>
                        <span>&nbsp;&#183;&nbsp;</span>
                        <a href="{{ asset('/assets/img/brand/logo/NitroxLogoWhite.svg') }}" download="NitroxLogoWhite.svg">
                            .svg
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section dark-secondary text-white pt-5 pb-5">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">{{ __('resources.fonts') }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mt-4">
                    <h1 class="display-1 logo-font">Barlow</h1>
                    <div>
                        <p>Barlow is used as our Logo font. <span class="opacity-5">Barlow is a slightly rounded, low-contrast, grotesk type family. The Barlow project is led by Jeremy Tribby, a designer based in San Francisco, USA. To contribute, see</span> <a href="https://github.com/jpt/barlow" target="_blank">github.com/jpt/barlow</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 mt-4">
                    <h1 class="display-1 font-weight-bold">Inter</h1>
                    <div>
                        <p>Inter is used as our primary typography. <span class="opacity-5">Inter is a variable font family carefully crafted & designed for computer screens. The Inter project is led by Rasmus Andersson, a Swedish maker–of–software living in San Francisco. To contribute, see </span><a href="https://github.com/rsms/inter" target="_blank">github.com/rsms/inter</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section dark-section text-white pt-5 pb-5">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-bold">{{ __('resources.images') }}</h1>
                    <p class="lead">{!! __('resources.images_info') !!}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-4">
                    <div class="text-center">
                        <img src="{{ asset('/assets/img/screenshots/subnautica-multiplayer.jpg') }}" alt="Nitrox Gameplay" class="img-fluid">
                    </div>
                    <div class="mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="20px" height="20px" class="mr-2"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 12v7H5v-7H3v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zm-6 .67l2.59-2.58L17 11.5l-5 5-5-5 1.41-1.41L11 12.67V3h2z"></path></svg>
                        <a href="{{ asset('/assets/img/screenshots/subnautica-multiplayer.jpg') }}" download="subnautica-multiplayer-1.jpg">
                            .jpg
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="text-center">
                        <img src="{{ asset('/assets/img/screenshots/subnautica-multiplayer-2.jpg') }}" alt="Nitrox Gameplay" class="img-fluid">
                    </div>
                    <div class="mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="20px" height="20px" class="mr-2"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 12v7H5v-7H3v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zm-6 .67l2.59-2.58L17 11.5l-5 5-5-5 1.41-1.41L11 12.67V3h2z"></path></svg>
                        <a href="{{ asset('/assets/img/screenshots/subnautica-multiplayer-2.jpg') }}" download="subnautica-multiplayer-2.jpg">
                            .jpg
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="text-center">
                        <img src="{{ asset('/assets/img/screenshots/subnautica-3.jpg') }}" alt="Nitrox Gameplay" class="img-fluid">
                    </div>
                    <div class="mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="20px" height="20px" class="mr-2"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 12v7H5v-7H3v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zm-6 .67l2.59-2.58L17 11.5l-5 5-5-5 1.41-1.41L11 12.67V3h2z"></path></svg>
                        <a href="{{ asset('/assets/img/screenshots/subnautica-3.jpg') }}" download="subnautica-nitrox-3.jpg">
                            .jpg
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="text-center">
                        <img src="{{ asset('/assets/img/screenshots/subnautica-multiplayer-3.jpg') }}" alt="Nitrox Gameplay" class="img-fluid">
                    </div>
                    <div class="mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="20px" height="20px" class="mr-2"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 12v7H5v-7H3v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zm-6 .67l2.59-2.58L17 11.5l-5 5-5-5 1.41-1.41L11 12.67V3h2z"></path></svg>
                        <a href="{{ asset('/assets/img/screenshots/subnautica-multiplayer-3.jpg') }}" download="subnautica-multiplayer-3.jpg">
                            .jpg
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="text-center">
                        <img src="{{ asset('/assets/img/screenshots/subnautica-multiplayer-4.jpg') }}" alt="Nitrox Gameplay" class="img-fluid">
                    </div>
                    <div class="mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="20px" height="20px" class="mr-2"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 12v7H5v-7H3v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zm-6 .67l2.59-2.58L17 11.5l-5 5-5-5 1.41-1.41L11 12.67V3h2z"></path></svg>
                        <a href="{{ asset('/assets/img/screenshots/subnautica-multiplayer-4.jpg') }}" download="subnautica-multiplayer-4.jpg">
                            .jpg
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="text-center">
                        <img src="{{ asset('/assets/img/screenshots/subnautica-multiplayer-5.jpg') }}" alt="Nitrox Gameplay" class="img-fluid">
                    </div>
                    <div class="mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="20px" height="20px" class="mr-2"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 12v7H5v-7H3v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zm-6 .67l2.59-2.58L17 11.5l-5 5-5-5 1.41-1.41L11 12.67V3h2z"></path></svg>
                        <a href="{{ asset('/assets/img/screenshots/subnautica-multiplayer-5.jpg') }}" download="subnautica-multiplayer-5.jpg">
                            .jpg
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="text-center">
                        <img src="{{ asset('/assets/img/screenshots/subnautica-multiplayer-6.jpg') }}" alt="Nitrox Gameplay" class="img-fluid">
                    </div>
                    <div class="mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="20px" height="20px" class="mr-2"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 12v7H5v-7H3v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zm-6 .67l2.59-2.58L17 11.5l-5 5-5-5 1.41-1.41L11 12.67V3h2z"></path></svg>
                        <a href="{{ asset('/assets/img/screenshots/subnautica-multiplayer-6.jpg') }}" download="subnautica-multiplayer-6.jpg">
                            .jpg
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="text-center">
                        <img src="{{ asset('/assets/img/screenshots/subnautica-multiplayer-7.jpg') }}" alt="Nitrox Gameplay" class="img-fluid">
                    </div>
                    <div class="mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="20px" height="20px" class="mr-2"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 12v7H5v-7H3v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zm-6 .67l2.59-2.58L17 11.5l-5 5-5-5 1.41-1.41L11 12.67V3h2z"></path></svg>
                        <a href="{{ asset('/assets/img/screenshots/subnautica-multiplayer-7.jpg') }}" download="subnautica-multiplayer-7.jpg">
                            .jpg
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mt-4">
                    <div class="text-center">
                        <img src="{{ asset('/assets/img/screenshots/subnautica-multiplayer-8.jpg') }}" alt="Nitrox Gameplay" class="img-fluid">
                    </div>
                    <div class="mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="20px" height="20px" class="mr-2"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 12v7H5v-7H3v7c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-7h-2zm-6 .67l2.59-2.58L17 11.5l-5 5-5-5 1.41-1.41L11 12.67V3h2z"></path></svg>
                        <a href="{{ asset('/assets/img/screenshots/subnautica-multiplayer-8.jpg') }}" download="subnautica-multiplayer-8.jpg">
                            .jpg
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.default>
