@section('title', __('wiki.home.meta.title'))
@section('description', __('wiki.home.meta.description'))

<x-layouts.default>
    <div class="dimmer hide">

    </div>

    <div class="section home-cover bg-black">
        <div class="container pb-5">
            <div class="row">

                <div class="col-md-8 offset-md-2 text-center mt-5">
                    <h1 class="font-weight-bold">{{ __('wiki.home.title') }}</h1>
                    <p class="font-weight-500">{{ __('wiki.home.subtitle') }}</p>
                </div>

                <div class="col-md-6 offset-md-3 mb-5 mt-4">
                    <div class="search-bar text-left position-relative" style="z-index:30">
                        <div class="d-flex">
                            <input type="text" id="searchBar" onkeyup="searchAutocomplete()" placeholder="{{ __('wiki.home.search_placeholder') }}" class="form-control form-control-lg w-100">
                            <button class="btn btn-link nav-search mt-1 d-md-none d-flex">Close</button>
                        </div>
                        <div class="search-links white-secondary">
                            <h6 class="opacity-5 mb-3" style="color: black">{{ __('wiki.home.quick_links') }}</h5>
                                <ul id="autocompleteList" class="">
                                    <li><a href="{{ route('wiki.article.install') }}">{{ __('wiki.home.search_install') }}</a></li>
                                    <li><a href="{{ route('wiki.article.run') }}">{{ __('wiki.home.search_run') }}</a></li>
                                    <li><a href="{{ route('wiki.article.join') }}">{{ __('wiki.home.search_join') }}</a></li>
                                    <li><a href="{{ route('wizard.home') }}">{{ __('wiki.home.search_home') }}</a></li>

                                    <li style="display:none"><a href="https://discord.gg/E8B4X9s" target="_blank">Discord</a></li>
                                    <li style="display:none"><a href="https://github.com/SubnauticaNitrox/Nitrox" target="_blank">Contribute on GitHub</a></li>

                                </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Wiki Content -->

    <div class="section border-bottom mb-5 pb-5">
        <div class="container">
            <div class="row mt-5">
            </div>

            <div class="row">
                <!-- CARD -->
                <div class="col-md-4 mt-3">
                    <div class="card card-hover h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('wiki.home.cards.install') }}</h5>
                            <p class="card-text">{{ __('wiki.home.cards.install_more') }}</p>
                            <a href="{{ route('wiki.article.install') }}" class="card-link stretched-link">{{ __('wiki.home.readmore') }}</a>
                        </div>
                    </div>
                </div>

                <!-- CARD -->
                <div class="col-md-4 mt-3">
                    <div class="card card-hover h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('wiki.home.cards.server') }}</h5>
                            <p class="card-text">{{ __('wiki.home.cards.server_more') }}</p>
                            <a href="{{ route('wiki.article.run') }}" class="card-link stretched-link">{{ __('wiki.home.readmore') }}</a>
                        </div>
                    </div>
                </div>

                <!-- CARD -->
                <div class="col-md-4 mt-3">
                    <div class="card card-hover h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('wiki.home.cards.join') }}</h5>
                            <p class="card-text">{{ __('wiki.home.cards.join_more') }}</p>
                            <a href="{{ route('wiki.article.join') }}" class="card-link stretched-link">{{ __('wiki.home.readmore') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card text-center py-5" style="border: none">
                        <h1>{{ __('wiki.home.wizard') }}</h1>
                        <p>{{ __('wiki.home.wizard_more') }}</p>
                        <a href="{{ route('wizard.home') }}">{{ __('wiki.home.wizard_link') }}
                            <span class="material-icons" style="position: absolute;font-size: 20px;margin: 2px 0px 0px -2px;">
                              chevron_right
                          </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section home-cover overflow-hidden" style="background: linear-gradient(rgba(0, 0, 0, 0.45),rgba(0, 0, 0, .5)), url(../assets/img/header-2.jpg) center; background-size: cover;">
        <div class="container py-5">
            <div class="row py-5">

                <div class="col-md-8 text-left py-5">
                    <h1 class="font-weight-500 mb-4">{!! __('wiki.home.support') !!}</h1>
                    <p>{!! __('wiki.home.support_more') !!}</p>
                    <p class="font-weight-500 mt-4">
                        <a href="https://discord.gg/E8B4X9s" target="_blank" class="btn btn-light btn-rounded">{{ __('wiki.home.support_discord') }}</a>
                    </p>
                </div>

            </div>
        </div>
    </div>



    <!-- Wiki Content -->

    <div class="section mb-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12">
                    <h2>{{ __('wiki.home.faq.title') }}</h2>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="accordion" id="accordionFaq">
                        <div class="card">
                            <div class="card-header" id="headingStart">
                                <h2 class="mb-0">
                                    <button class="btn w-100 collapsed" type="button" data-toggle="collapse" data-target="#collapseStart" aria-expanded="true" aria-controls="collapseStart">
                                        <div class="d-flex justify-content-between">
                                            <span class="d-flex align-items-center">{!! __('wiki.home.faq.install_nitrox.question') !!}</span>
                                            <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#191919" width="30px" height="30px"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"></path><path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"></path></svg></span>
                                        </div>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseStart" class="collapse" aria-labelledby="headingStart" data-parent="#accordionFaq">
                                <div class="card-body">
                                    {!! __('wiki.home.faq.install_nitrox.answer') !!}
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn w-100 collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="d-flex justify-content-between">
                                            <span class="d-flex align-items-center">{!! __('wiki.home.faq.status.question') !!}</span>
                                            <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#191919" width="30px" height="30px"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"></path><path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"></path></svg></span>
                                        </div>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionFaq">
                                <div class="card-body">
                                    {!! __('wiki.home.faq.status.answer') !!}
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn w-100 ripple collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="d-flex justify-content-between">
                                            <span class="d-flex align-items-center">{{ __('wiki.home.faq.play.question') }}</span>
                                            <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#191919" width="30px" height="30px"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"></path><path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"></path></svg></span>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFaq">
                                <div class="card-body">
                                    {!! __('wiki.home.faq.play.answer') !!}
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <h2 class="mb-0">
                                    <button class="btn w-100 ripple collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        <div class="d-flex justify-content-between">
                                            <span class="d-flex align-items-center">{{ __('wiki.home.faq.bz.question') }}</span>
                                            <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#191919" width="30px" height="30px"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"></path><path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"></path></svg></span>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionFaq">
                                <div class="card-body">
                                    {!! __('wiki.home.faq.bz.answer') !!}
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn w-100 ripple collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <div class="d-flex justify-content-between">
                                            <span class="d-flex align-items-center">{{ __('wiki.home.faq.help.question') }}</span>
                                            <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#191919" width="30px" height="30px"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"></path><path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"></path></svg></span>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFaq">
                                <div class="card-body">
                                    {!! __('wiki.home.faq.help.answer') !!}
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn w-100 ripple collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <div class="d-flex justify-content-between">
                                            <span class="d-flex align-items-center">{{ __('wiki.home.faq.contribute.question') }}</span>
                                            <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#191919" width="30px" height="30px"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"></path><path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"></path></svg></span>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFaq">
                                <div class="card-body">
                                    {!! __('wiki.home.faq.contribute.answer') !!}
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn w-100 ripple collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <div class="d-flex justify-content-between">
                                            <span class="d-flex align-items-center">{{ __('wiki.home.faq.donate.question') }}</span>
                                            <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#191919" width="30px" height="30px"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"></path><path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"></path></svg></span>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionFaq">
                                <div class="card-body">
                                    {!! __('wiki.home.faq.donate.answer') !!}
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn w-100 ripple collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <div class="d-flex justify-content-between">
                                            <span class="d-flex align-items-center">{{ __('wiki.home.faq.why.question') }}</span>
                                            <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#191919" width="30px" height="30px"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"></path><path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"></path></svg></span>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionFaq">
                                <div class="card-body">
                                    {!! __('wiki.home.faq.why.answer') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-layouts.default>
