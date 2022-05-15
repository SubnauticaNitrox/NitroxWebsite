<div>
<nav class="navbar navbar-expand-lg navbar-dark bg-darkish fixed-top">
    <div class="container pt-2 pb-2">
        <a class="navbar-brand p-0" href="{{ route('home') }}">
            Nitrox
        </a>
        <button class="navbar-toggler p-1" style="outline: none; border: none;" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <div class="position-relative icon-box">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <div class="d-block d-lg-none">
                <div class="border-bottom mb-3 mt-3" style="opacity: .25;"></div>
            </div>
            <ul class="navbar-nav mr-auto ml-auto text-left">
                <li class="nav-item {% if currentUrl() == baseUrl() ~ urlFor("home") %} active{% endif %}">
                <a class="nav-link px-3 ripple" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {% if currentUrl() == baseUrl() ~ urlFor("wiki.home") %} active{% endif %}">
                <a class="nav-link px-3 ripple" href="{{ route('wiki.home') }}">Guides</a>
                </li>
                <li class="nav-item {% if currentUrl() == baseUrl() ~ urlFor("about.about") %} active{% endif %}">
                <a class="nav-link px-3 ripple" href="{{ route('about.about') }}">About</a>
                </li>
                <li class="nav-item {% if currentUrl() == baseUrl() ~ urlFor("community") %} active{% endif %}">
                <a class="nav-link px-3 ripple" href="{{ route('community') }}">Community</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 ripple" href="https://nitroxblog.rux.gg">Blog</a>
                </li>
            </ul>

            <div class="d-block d-lg-none">
                <div class="pt-4"></div>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('download') }}" class="btn btn-sm {{ Route::current()->getName() !== 'download' ? 'btn-primary' : 'btn-light' }} btn-rounded px-3 font-weight-500">Download</a>
                </li>
            </ul>
            <ul class="navbar-nav d-none flex-row">
                <li class="nav-item mr-3 mr-md-0">
                    <a class="nav-link ripple" href="https://discord.gg/E8B4X9s" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Discord" data-offset="0 5 0 0">
                        <img src="{{ asset('/assets/img/Discord.svg') }}" alt="Discord Logo" width="20px" height="20px">
                    </a>
                </li>
                <li class="nav-item mr-3 mr-md-0">
                    <a class="nav-link ripple" href="https://twitter.com/modnitrox" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Twitter" data-offset="0 5 0 0">
                        <img src="{{ asset('/assets/img/Twitter.svg') }}" alt="Twitter" width="20px" height="20px">
                    </a>
                </li>
                <li class="nav-item mr-3 mr-md-0">
                    <a class="nav-link ripple" href="https://www.reddit.com/r/SubnauticaNitrox/" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Reddit" data-offset="0 5 0 0">
                        <img src="{{ asset('/assets/img/Reddit.svg') }}" alt="Reddit" width="20px" height="20px">
                    </a>
                </li>
                <li class="nav-item mr-3 mr-md-0">
                    <a class="nav-link ripple" href="https://github.com/SubnauticaNitrox/Nitrox" target="_blank" data-toggle="tooltip" data-placement="bottom" title="GitHub" data-offset="0 5 0 0">
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
                    <span class="">
                        From the Nitrox Blog: Why we left NexusMods.
                    </span>
                            <a href="https://on.rux.gg/cTkeO" target="_blank" class="stretched-link">Read more
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
