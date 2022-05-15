@section('title', 'Open Source Nitrox · Features')
@section('description', 'Open source code is at the heart of the Nitrox mod. From the community that built it up to the support maintaining it.')

@section('og:title', 'Open Source Nitrox · Features')
@section('og:description', 'Open source code is at the heart of the Nitrox mod. From the community that built it up to the support maintaining it.')
@section('og:image', asset('/assets/img/favicon.png'))

<x-layouts.default>
    <x-layouts.partials.features-navigation></x-layouts.partials.features-navigation>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <div class="my-5 py-5">
                        <div class="mt-md-5 pt-md-5"></div>
                    </div>

                    <h1 class="font-weight-bold display-3">Powered by<br>open source.</h1>
                    <div class="mt-5 pt-5"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="section white-secondary">
        <div class="container">
            <div class="row py-5">

                <div class="col-md-10">
                    <div class="mt-5 pt-5"></div>

                    <h3 class="font-weight-bold">
                        Open source is at the core of Nitrox.
                        <span class="opacity-5">The mod is in the very early stages of development; however, a solid foundation has been laid for the community to iterate on.</span>
                    </h3>

                    <div class="mt-5"></div>


                    <div class="d-flex mb-4">
                        <div class="my-auto">
                            <span class="material-icons text-primary" style="font-size: 2rem;">source</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-weight-bold">GNU General Public License v3.0</h4>
                            <p class="mb-1">SubnauticaNitrox/Nitrox is licensed under the GNU General Public License v3.0.</p>
                            <a href="https://github.com/SubnauticaNitrox/Nitrox/blob/master/LICENSE.txt" target="_blank">Learn more
                                <span class="material-icons" style="position: absolute;font-size: 20px;margin: 2px 0px 0px -2px;">
                                    chevron_right
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="d-flex mb-4">
                        <div class="my-auto">
                            <span class="material-icons text-success" style="font-size: 2rem;">code</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="font-weight-bold">Dev resources</h4>
                            <p class="mb-1">Read our getting started and code contributing guideline on GitHub. </p>
                            <a href="https://github.com/SubnauticaNitrox/Nitrox/wiki" target="_blank" class="mr-4 pr-2">Code wiki
                                <span class="material-icons" style="position: absolute;font-size: 20px;margin: 2px 0px 0px -2px;">
                                    chevron_right
                                </span>
                            </a>
                            <a href="https://github.com/SubnauticaNitrox/Nitrox/blob/master/CONTRIBUTING.md" target="_blank">Contributing
                                <span class="material-icons" style="position: absolute;font-size: 20px;margin: 2px 0px 0px -2px;">
                                    chevron_right
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="mt-5 pt-5"></div>

                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <div class="mt-5 pt-5"></div>

                    <h1 class="font-weight-bold">
                        Do you want to be part of the team?<br>
                        <span class="opacity-5">Here are ways you can contribute.</span>
                    </h1>
                    <div class="mt-5"></div>

                </div>
            </div>
            <div class="row mb-5 pb-5">

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
                                <p>Are you interested in developing the mod? Read our get started guide to begin, and contribute from code to translations to the Nitrox project on GitHub.</p>
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
                                <p>Are you an expert with everything Nitrox and have a passion to support new players? Join and apply to be part of the help team on Discord.</p>
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
            </div>
        </div>
    </div>

</x-layouts.default>
