<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-darkish fixed-top">
    <div class="container pt-2 pb-2">
        <a class="navbar-brand p-0" href="{{ route('home') }}">
            Nitrox
        </a>
        <div class="d-flex flex-columns">
            <button class="navbar-toggler p-1" style="outline: none; border: none;" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <div class="position-relative icon-box">
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </div>
            </button>
            <ul class="navbar-nav d-flex d-lg-none">
                <span data-toggle="tooltip" data-placement="bottom" title="{{ __('lang-select.title') }}">
                    <a class="nav-link d-flex p-1 ml-2 ml-lg-3" data-toggle="modal" data-target="#translationSelectModal" >
                        <span class="material-icons" style="cursor: pointer">language</span>
                    </a>
                </span>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarText">
            <div class="d-block d-lg-none">
                <div class="border-bottom mb-3 mt-3" style="opacity: .25;"></div>
            </div>
            <ul class="navbar-nav mr-auto ml-auto text-left">
                <li class="nav-item">
                <a class="nav-link px-3" href="{{ route('home') }}">{{ __('navigation.home') }} <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link px-3" href="{{ route('wiki.home') }}">{{ __('navigation.guides') }}</a>
                </li>
                <li class="nav-item}">
                <a class="nav-link px-3" href="{{ route('about.about') }}">{{ __('navigation.about') }}</a>
                </li>
                <li class="nav-item">
                <a class="nav-link px-3" href="{{ route('community') }}">{{ __('navigation.community') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3" href="https://nitroxblog.rux.gg">{{ __('navigation.blog') }}</a>
                </li>
            </ul>

            <div class="d-block d-lg-none">
                <div class="pt-4"></div>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('download') }}" class="btn btn-sm {{ Route::current()->getName() !== 'download' ? 'btn-primary' : 'btn-light' }} btn-rounded px-3 font-weight-500">Download</a>
                </li>
                <a class="nav-link p-1 ml-2 ml-lg-3 d-none d-lg-flex" data-toggle="modal" data-target="#translationSelectModal">
                    <span class="material-icons" style="cursor: pointer" data-toggle="tooltip" data-placement="bottom" title="{{ __('lang-select.title') }}">language</span>
                </a>
            </ul>
            <ul class="navbar-nav d-none flex-row">
                <li class="nav-item mr-3 mr-md-0">
                    <a class="nav-link" href="https://discord.gg/E8B4X9s" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Discord" data-offset="0 5 0 0">
                        <img src="{{ asset('/assets/img/Discord.svg') }}" alt="Discord Logo" width="20px" height="20px">
                    </a>
                </li>
                <li class="nav-item mr-3 mr-md-0">
                    <a class="nav-link" href="https://twitter.com/modnitrox" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Twitter" data-offset="0 5 0 0">
                        <img src="{{ asset('/assets/img/Twitter.svg') }}" alt="Twitter" width="20px" height="20px">
                    </a>
                </li>
                <li class="nav-item mr-3 mr-md-0">
                    <a class="nav-link" href="https://www.reddit.com/r/SubnauticaNitrox/" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Reddit" data-offset="0 5 0 0">
                        <img src="{{ asset('/assets/img/Reddit.svg') }}" alt="Reddit" width="20px" height="20px">
                    </a>
                </li>
                <li class="nav-item mr-3 mr-md-0">
                    <a class="nav-link" href="https://github.com/SubnauticaNitrox/Nitrox" target="_blank" data-toggle="tooltip" data-placement="bottom" title="GitHub" data-offset="0 5 0 0">
                        <img src="{{ asset('/assets/img/github.svg') }}" alt="GitHub" width="20px" height="20px">
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>

    @if(request()->routeIs('home'))
        <div class="nav-top ribbon-down">
            <div class="ribbon">
                <div class="container ribbon-color">
                    <div class="row">
                        <div class="col">
                            <span>
                                Nitrox Dev Blog &mdash; Subnautica 2.0.
                            </span>
                            <a href="https://nitroxblog.rux.gg/2022/12/11/subnautica-2-0/" target="_blank" class="stretched-link">{{ __('navigation.read_more') }}
                                <span class="material-icons" style="position: absolute;font-size: 20px;margin: 1px 0px 0px -2px;">
                             chevron_right
                         </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
