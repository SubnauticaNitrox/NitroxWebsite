@section('title', 'Changelog · Subnautica Multiplayer Mod')
@section('description', 'View the latest changelog and version history for the Nitrox Mod releases.')

@section('og:title', 'Changelog · Subnautica Multiplayer Mod')
@section('og:description', 'View the latest changelog and version history for the Nitrox Mod releases.')
@section('og:image', asset('/assets/img/favicon.png'))

<x-layouts.default>

<div class="section home-cover cover-team overflow-hidden">
    <div id="particles-js"></div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 class="mt-5 font-weight-bold" data-toc-skip>Changelog</h1>
                    <p class="lead mt-4">View the latest changelog and version history for the Nitrox Mod releases.</p>
                    <p class="opacity-75 mb-0">Latest version: <a href="{{ route('download') }}">Download</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="section pt-5">
        <div class="container">
            <div class="row">

                <div class="col-md-3 d-none d-md-block">
                    <nav id="toc" data-toggle="toc" class="sticky-top" style="top: 102px;"></nav>
                </div>

                <div class="col-md-8">

                    @foreach ($changelogs as $changelog)
                        <div class="changelog-entry mb-5">
                            <h6>{{ Carbon\Carbon::parse($changelog['released'])->format('d.m.Y · H:i') }}</h6>
                            <h3 style="padding-top: 132px; margin-top: -132px;">Nitrox&nbsp;version {{ $changelog['version'] }}</h3>

                            <ul>
                                @foreach ($changelog['patchnotes'] as $patchnote)
                                    <li>{{ $patchnote }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach

                </div>

            </div>

        </div>
    </div>

    <div class="section border-top pt-5 mt-5 mb-5" data-toc-skip>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card" style="border: none">
                        <div class="card-body text-center">
                            <h4 class="card-title" data-toc-skip>Want to join the team?</h4>
                            <p class="card-text">
                                You too can be a contributor for this mod. You can develop for Nitrox or join the support team! Simply apply in the discord server or subreddit page
                            </p>
                            <a href="https://discord.gg/E8B4X9s" class="card-link">Discord</a>
                            <a href="https://www.reddit.com/r/SubnauticaNitrox/" class="card-link">Reddit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</x-layouts.default>
