@section('title', 'Download started... · Subnautica Multiplayer Mod')
@section('description', 'Nitrox is a free multiplayer mod for the game Subnautica developed by the community.')

@section('og:title', 'Download started... · Subnautica Multiplayer Mod')
@section('og:description', 'Nitrox is a free multiplayer mod for the game Subnautica developed by the community.')
@section('og:image', asset('/assets/img/favicon.png'))

<x-layouts.default>
<div class="section home-cover cover-download overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left mb-5">
                <h1 class="mt-5 font-weight-bold display-3">Download started</h1>
                <p class="lead opacity-75">Your download should start automatically in <span id="countdowntimer">2</span> seconds. If it doesn't, <a href="{{ $version['url'] }}" id="restartDownload">restart the download</a>.</p>
            </div>
        </div>
    </div>
</div>


<div class="section mt-5">
    <div class="container">
        <div class="row d-flex flex-row">
            <div class="col-md-12">
                <h1 class="mb-4 font-weight-bold">Next steps</h1>
            </div>

            <div class="col-md-8 mb-5">
                <h6 class="mb-3">Install video</h6>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0qMHaOVH0Ek?rel=0" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-md-4 mb-5">
                <h6 class="mb-3">Join the community</h6>
                    <div class="social d-flex justify-content-center py-5 mb-5 white-secondary">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://discord.gg/E8B4X9s" target="_blank">
                                    <img src="{{ asset('/assets/img/Discord.svg') }}" alt="Discord Logo" style="filter: invert(1);">
                                </a>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://twitter.com/modnitrox" target="_blank">
                                        <img src="{{ asset('/assets/img/Twitter.svg') }}" alt="Twitter" style="filter: invert(1);">
                                    </a>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.reddit.com/r/SubnauticaNitrox/" target="_blank">
                                    <img src="{{ asset('/assets/img/Reddit.svg') }}" alt="Reddit" style="filter: invert(1);">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://github.com/SubnauticaNitrox/Nitrox" target="_blank">
                                    <img src="{{ asset('/assets/img/github.svg') }}" alt="GitHub" width="24px" style="filter: invert(1);">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <h6 class="mb-3">Install and Upgrade Guide</h6>
                    <div class="social d-flex justify-content-center py-5 white-secondary">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('wizard.home') }}">
                                    Nitrox Install Wizard
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="section mt-5 pt-5 pb-3 border-top dark-secondary text-white">
    <div class="container">

        <!-- File information and stats -->
        <div class="row mb-4 mt-4">
            <div class="col-md-12">
                <h3 class="mb-4">Download information</h3>
            </div>

            <div class="col-3 text-left mb-3">
                <h6>File Size</h6>
                <h4>{{ $version['filesize'] }} MB</h4>
            </div>

            <div class="col-3 text-left mb-3">
                <h6>Version</h6>
                <h4>{{ $version['version'] }}</h4>
            </div>

            <div class="col-4 text-left mb-3">
                <h6>MD5 Hash</h6>
                <kbd>{{ $version['md5'] }}</kbd>
            </div>
        </div>

    </div>
</div>

@push('scripts')
<script>
var timeleft = 1;
var downloadTimer = setInterval(function(){
    if(timeleft <= 0){
        clearInterval(downloadTimer);
        document.getElementById("countdowntimer").innerHTML = "";
        document.location.href = '{{ $version['url'] }}';
    } else {
        document.getElementById("countdowntimer").innerHTML = timeleft;
    }
    timeleft -= 1;
}, 1000);
</script>
@endpush

</x-layouts.default>
