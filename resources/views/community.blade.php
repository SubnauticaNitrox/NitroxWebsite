@section('title', 'Nitrox Community · Subnautica Multiplayer Mod')
@section('description', 'Be part of the large, growing Nitrox community. Find new servers, get help and talk to other Nitrox players.')

@section('og:title', 'Nitrox Community · Subnautica Multiplayer Mod')
@section('og:description', 'Be part of the large, growing Nitrox community. Find new servers, get help and talk to other Nitrox players.')
@section('og:image', asset('/assets/img/favicon.png'))

<x-layouts.default>

<div class="section home-cover bg-black cover coverHome overflow-hidden">
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center mt-5 mb-5">
                <h1 class="font-weight-bold">Nitrox community</h1>
                <p class="font-weight-500">Join the large Nitrox community <br>with players from around the world.</p>
            </div>
       </div>
    </div>
</div>

<div class="section mb-5 mt-4">
    <div class="container">
        <div class="row">
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
                            <p>Join our active Discord server to find servers to play on, get help from the support team and much more.</p>
                            <p class="font-weight-500">
                                <a href="https://discord.gg/E8B4X9s" target="_blank">Join Discord
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
                            <p>Follow the Nitrox Twitter account to always be up to date on latest developments, events, and releases.</p>
                            <p class="font-weight-500">
                                <a href="https://twitter.com/modnitrox" target="_blank">Follow on Twitter
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
                            <p>Join the Nitrox Subreddit to stay informed about latest releases and post community content.</p>
                            <p class="font-weight-500">
                                <a href="https://www.reddit.com/r/SubnauticaNitrox/" target="_blank">Join Subreddit
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
                            <p>Want to be part of the team? Contribute from code to translations to the Nitrox project on GitHub.</p>
                            <p class="font-weight-500">
                                <a href="https://github.com/SubnauticaNitrox/Nitrox" target="_blank">Contribute on GitHub
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
