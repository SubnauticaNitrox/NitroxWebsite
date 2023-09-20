@section('title', __('community.meta.title'))
@section('description', __('community.meta.description'))

@section('og:title', __('community.meta.title'))
@section('og:description',  __('community.meta.description'))
@section('og:image', asset('/assets/img/favicon.png'))

<x-layouts.default>

<div class="section home-cover bg-black cover coverHome overflow-hidden">
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center mt-5 mb-5">
                <h1 class="font-weight-bold">{{ __('community.title') }}</h1>
                <p class="font-weight-500">{{ __('community.subtitle') }}</p>
            </div>
       </div>
    </div>
</div>

<div class="section mb-5 mt-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-4">
                <div class="grey p-5 h-100">
                    <div class="row">
                        <div class="col text-center">
                            <div class="d-inline-block">
                                <span class="icon-wrapper">
                                    <img src="{{ asset('/assets/img/Discord.svg') }}" width="56px" alt="Discord" style="padding: .75rem; background-color: #5865F2;">
                                </span>
                            </div>

                            <h2 class="font-weight-bold mt-4">Discord</h2>
                            <p>{{ __('community.discord') }}</p>
                            <p class="font-weight-500">
                                <a href="https://discord.gg/E8B4X9s" target="_blank">{{ __('community.discord_join') }}
                                    <span class="material-icons" style="position: absolute;font-size: 20px;margin: 2px 0px 0px -2px;">
                                        chevron_right
                                    </span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="grey p-5 h-100">
                    <div class="row">
                        <div class="col text-center">
                            <div class="d-inline-block">
                                <span class="icon-wrapper">
                                    <img src="{{ asset('/assets/img/logos/social/bluesky-2.png') }}" width="56px" alt="Bluesky" style="background-color: #1da1f1;">
                                </span>
                            </div>

                            <h2 class="font-weight-bold mt-4">Bluesky</h2>
                            <p>{{ __('community.bluesky') }}</p>
                            <p class="font-weight-500">
                                <a href="https://twitter.com/modnitrox" target="_blank">{{ __('community.bluesky_follow') }}
                                    <span class="material-icons" style="position: absolute;font-size: 20px;margin: 2px 0px 0px -2px;">
                                        chevron_right
                                    </span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="grey p-5 h-100">
                    <div class="row">
                        <div class="col text-center">
                            <div class="d-inline-block">
                                <span class="icon-wrapper">
                                    <img src="{{ asset('/assets/img/Reddit.svg') }}" width="56px" alt="Reddit" style="padding: .75rem; background-color: #ff4600;">
                                </span>
                            </div>

                            <h2 class="font-weight-bold mt-4">Reddit</h2>
                            <p>{{ __('community.reddit') }}</p>
                            <p class="font-weight-500">
                                <a href="https://www.reddit.com/r/SubnauticaNitrox/" target="_blank">{{ __('community.reddit_join') }}
                                    <span class="material-icons" style="position: absolute;font-size: 20px;margin: 2px 0px 0px -2px;">
                                        chevron_right
                                    </span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="grey p-5 h-100">
                    <div class="row">
                        <div class="col text-center">
                            <div class="d-inline-block">
                                <span class="icon-wrapper">
                                    <img src="{{ asset('/assets/img/github.svg') }}" width="56px" height="56px" alt="GitHub" style="padding: .75rem; background-color: #6e5494;">
                                </span>
                            </div>

                            <h2 class="font-weight-bold mt-4">GitHub</h2>
                            <p>{{ __('community.github') }}</p>
                            <p class="font-weight-500">
                                <a href="https://github.com/SubnauticaNitrox/Nitrox" target="_blank">{{ __('community.github_link') }}
                                    <span class="material-icons" style="position: absolute;font-size: 20px;margin: 2px 0px 0px -2px;">
                                        chevron_right
                                    </span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="grey p-5 h-100">
                    <div class="row">
                        <div class="col text-center">
                            <div class="d-inline-block">
                                <span class="icon-wrapper">
                                    <img src="{{ asset('/assets/img/Twitter.svg') }}" width="56px" alt="Twitter" style="padding: .75rem; background-color: #1da1f1;">
                                </span>
                            </div>

                            <h2 class="font-weight-bold mt-4">Twitter</h2>
                            <p>{{ __('community.twitter') }}</p>
                            <p class="font-weight-500">
                                <a href="https://twitter.com/modnitrox" target="_blank">{{ __('community.twitter_follow') }}
                                    <span class="material-icons" style="position: absolute;font-size: 20px;margin: 2px 0px 0px -2px;">
                                        chevron_right
                                    </span>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</x-layouts.default>
