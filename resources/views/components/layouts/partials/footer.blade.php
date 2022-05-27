<div class="section dark-section">
    <div class="container">
        <footer class="pt-5 pb-4">
            <div class="row">
                <div class="col-12">
                    <a class="navbar-brand p-0 text-white" href="{{ route('home') }}">
                        Nitrox
                    </a>
                    <div class="border-bottom mb-5 mt-4" style="opacity: .25;"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-3">
                    <h6 class="opacity-5 mb-3">{{ __('footer.getstarted') }}</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('wiki.home') }}">{{ __('footer.nav.guides') }}</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('wiki.article.install') }}">{{ __('footer.nav.install') }}</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('wiki.article.run') }}">{{ __('footer.nav.server_setup') }}</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('wiki.article.join') }}">{{ __('footer.nav.server_join') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <h6 class="opacity-5 mb-3">{{ __('footer.mod') }}</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('download') }}">{{ __('footer.nav.download') }}</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('pages.changelog') }}">{{ __('footer.nav.changelog') }}</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('features.open-source') }}">{{ __('footer.nav.contribute') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <h6 class="opacity-5 mb-3">{{ __('footer.learnmore') }}</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a class="text-muted" href="https://nitroxblog.rux.gg" target="_blank">{{ __('footer.nav.devblog') }}</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('about.about') }}">{{ __('footer.nav.about') }}</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('about.team') }}">{{ __('footer.nav.team') }}</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('features.resources') }}">{{ __('footer.nav.resources') }}</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md-3">
                    <h6 class="opacity-5 mb-3">{{ __('footer.connect') }}</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a class="text-muted" href="https://discord.gg/E8B4X9s" target="_blank">Discord Server</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="https://twitter.com/modnitrox" target="_blank">Twitter</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="https://www.reddit.com/r/SubnauticaNitrox/" target="_blank">Reddit</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('community') }}">{{ __('footer.nav.community') }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12"><div class="border-bottom mb-4 mt-4" style="opacity: .25;"></div></div>
                <div class="col-md-6 col-12">
                    <a class="d-inline-block text-decoration-none mb-3 mr-2" target="_blank" href="https://hosted.weblate.org/engage/subnauticanitrox/">
                        <img src="https://hosted.weblate.org/widgets/subnauticanitrox/-/website/svg-badge.svg" alt="Translation status" />
                    </a>
                    <small class="d-inline-block mt-3 mb-3 text-white">© 2022 Nitrox &#183</small>
                    <small class="d-inline-block mt-3 mb-3">
                        <a class="text-white opacity-5" href="https://github.com/keyboardfox" target="_blank">Design + Code by Rux</a>
                    </small>
                </div>
                <div class="col-md-6 col-12">
                    <ul class="nav">
                        <li class="nav-item ml-md-auto">
                            <a class="nav-link p-2 mr-2 link-bg ripple text-center" style="width: 42px" href="https://discord.gg/E8B4X9s" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Discord" data-offset="0, 5, 0, 0">
                                <img width="24px" src="{{ asset('/assets/img/Discord.svg') }}" alt="Discord Logo">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2 mr-2 link-bg ripple text-center" style="width: 42px" href="https://twitter.com/modnitrox" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Twitter" data-offset="0, 5, 0, 0">
                                <img width="24px" src="{{ asset('/assets/img/Twitter.svg') }}" alt="Twitter">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2 mr-2 link-bg ripple text-center" style="width: 42px" href="https://www.reddit.com/r/SubnauticaNitrox/" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Reddit" data-offset="0, 5, 0, 0">
                                <img width="24px" src="{{ asset('/assets/img/Reddit.svg') }}" alt="Reddit">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2 mr-2 link-bg ripple text-center" style="width: 42px" href="https://github.com/SubnauticaNitrox/Nitrox" target="_blank" data-toggle="tooltip" data-placement="bottom" title="GitHub" data-offset="0, 5, 0, 0">
                                <img width="24px" src="{{ asset('/assets/img/github.svg') }}" alt="GitHub">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2 mr-2 link-bg text-center d-flex" data-toggle="modal" data-target="#translationSelectModal">
                                <div style="cursor: pointer; margin: 1px 0" class="d-flex">
                                    <span class="material-icons">language</span>
                                    <span class="d-inline text-uppercase ml-2">{{ str_replace('_', '-', app()->getLocale()) }}</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </footer>
    </div>
</div>
