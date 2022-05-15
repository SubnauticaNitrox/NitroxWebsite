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
                    <h6 class="opacity-5 mb-3">Get Started</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('wiki.home') }}">Nitrox Guides</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('wiki.article.install') }}">Install Guide</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('wiki.article.run') }}">Server Setup</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('wiki.article.join') }}">Join a Server</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <h6 class="opacity-5 mb-3">Mod</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('download') }}">Download Nitrox</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('pages.changelog') }}">Changelog</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('features.open-source') }}">Contribute</a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <h6 class="opacity-5 mb-3">Learn more</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a class="text-muted" href="https://nitroxblog.rux.gg" target="_blank">Dev Blog</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('about.about') }}">About</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('about.team') }}">Team</a>
                        </li>
                        <li class="mb-2">
                            <a class="text-muted" href="{{ route('features.resources') }}">Resources</a>
                        </li>
                    </ul>
                </div>

                <div class="col-6 col-md-3">
                    <h6 class="opacity-5 mb-3">Connect</h6>
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
                            <a class="text-muted" href="{{ route('community') }}">Community</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mt-2">
                    <div class="border-bottom mb-4 mt-4" style="opacity: .25;"></div>
                    <div class="d-flex flex-row">
                        <small class="d-block mt-3 mb-3 text-white">© 2022 Nitrox&nbsp;&#183;&nbsp;</small>

                        <small class="d-block mt-3 mb-3">
                            <a class="text-white opacity-5" href="https://github.com/keyboardfox" target="_blank">Design + Code by Rux</a>
                        </small>
                        <ul class="nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link p-2 mr-2 link-bg ripple text-center" style="width: 42px" href="https://discord.gg/E8B4X9s" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Discord" data-offset="0 5 0 0">
                                    <img width="24px" src="{{ asset('/assets/img/Discord.svg') }}" alt="Discord Logo">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2 mr-2 link-bg ripple text-center" style="width: 42px" href="https://twitter.com/modnitrox" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Twitter" data-offset="0 5 0 0">
                                    <img width="24px" src="{{ asset('/assets/img/Twitter.svg') }}" alt="Twitter">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2 mr-2 link-bg ripple text-center" style="width: 42px" href="https://www.reddit.com/r/SubnauticaNitrox/" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Reddit" data-offset="0 5 0 0">
                                    <img width="24px" src="{{ asset('/assets/img/Reddit.svg') }}" alt="Reddit">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-2 mr-2 link-bg ripple text-center" style="width: 42px" href="https://github.com/SubnauticaNitrox/Nitrox" target="_blank" data-toggle="tooltip" data-placement="bottom" title="GitHub" data-offset="0 5 0 0">
                                    <img width="24px" src="{{ asset('/assets/img/github.svg') }}" alt="GitHub">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
