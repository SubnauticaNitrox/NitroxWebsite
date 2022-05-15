@section('title', 'Guides & Wiki · Official Nitrox Website')
@section('description', 'Official Nitrox Mod Guides and Wiki. Learn how to install and use the Subnautica Nitrox Mod.')

<x-layouts.default>
    <div class="dimmer hide">

    </div>

    <div class="section home-cover bg-black">
        <div class="container pb-5">
            <div class="row">

                <div class="col-md-8 offset-md-2 text-center mt-5">
                    <h1 class="font-weight-bold">Welcome to Nitrox Support</h1>
                    <p class="font-weight-500">Browse the helpful guides and read the first steps<br>how to get started using Nitrox.</p>
                </div>

                <div class="col-md-6 offset-md-3 mb-5 mt-4">
                    <div class="search-bar text-left position-relative" style="z-index:30">
                        <div class="d-flex">
                            <input type="text" id="searchBar" onkeyup="searchAutocomplete()" placeholder="Search for something..." class="form-control form-control-lg w-100">
                            <button class="btn btn-link nav-search mt-1 d-md-none d-flex">Close</button>
                        </div>
                        <div class="search-links white-secondary">
                            <h6 class="opacity-5 mb-3" style="color: black">Quick links</h5>
                                <ul id="autocompleteList" class="">
                                    <li><a href="{{ route('wiki.article.install') }}">Install Nitrox Mod Steam and Epic Games</a></li>
                                    <li><a href="{{ route('wiki.article.run') }}">Run and host a Nitrox Server</a></li>
                                    <li><a href="{{ route('wiki.article.join') }}">Join a Nitrox Server</a></li>
                                    <li><a href="{{ route('wizard.home') }}">Nitrox Upgrade and Install Wizard</a></li>

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
                            <h5 class="card-title">Installing Nitrox</h5>
                            <p class="card-text">Let's get started by installing the Nitrox Mod. Follow the steps carefully and you will be ready to play in no time!</p>
                            <a href="{{ route('wiki.article.install') }}" class="card-link stretched-link">Read more</a>
                        </div>
                    </div>
                </div>

                <!-- CARD -->
                <div class="col-md-4 mt-3">
                    <div class="card card-hover h-100">
                        <div class="card-body">
                            <h5 class="card-title">Running the server</h5>
                            <p class="card-text">After installing the mod you can start playing together by running and hosting the Nitrox server.</p>
                            <a href="{{ route('wiki.article.run') }}" class="card-link stretched-link">Read more</a>
                        </div>
                    </div>
                </div>

                <!-- CARD -->
                <div class="col-md-4 mt-3">
                    <div class="card card-hover h-100">
                        <div class="card-body">
                            <h5 class="card-title">Joining a server</h5>
                            <p class="card-text">Want to join another server? Learn how to add and join other Nitrox servers and play Subnautica multiplayer.</p>
                            <a href="{{ route('wiki.article.join') }}" class="card-link stretched-link">Read more</a>
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
                        <h1>Install & Upgrade Wizard</h1>
                        <p>Our new Interactive Nitrox Wizard guides you step by step through the install and upgrade process. Simply answer each step and get an instant answer. Try it out today!</p>
                        <a href="{{ route('wizard.home') }}">Start Nitrox Wizard
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
                    <h1 class="font-weight-500 mb-4">Get Support</h1>
                    <p>Our support team is here to help.<br>Join on Discord and we will find a solution.</p>
                    <p class="font-weight-500 mt-4">
                        <a href="https://discord.gg/E8B4X9s" target="_blank" class="btn btn-light btn-rounded">Join Nitrox Discord</a>
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
                    <h2>Frequently asked questions</h2>
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
                                            <span class="d-flex align-items-center">How do I install Nitrox?</span>
                                            <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#191919" width="30px" height="30px"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"></path><path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"></path></svg></span>
                                        </div>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseStart" class="collapse" aria-labelledby="headingStart" data-parent="#accordionFaq">
                                <div class="card-body">
                                    <p>Please use the Nitrox Install Wizard, or read through the guides to learn how to install the Mod.</p>
                                    <ul class="disc">
                                        <li>Nitrox Wizard: <a href="{{ route('wizard.home') }}">Open wizard</a></li>
                                        <li>Up-to-date Install Guide: <a href="{{ route('wiki.article.install') }}">View guide</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn w-100 collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="d-flex justify-content-between">
                                            <span class="d-flex align-items-center">What is the current status?</span>
                                            <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#191919" width="30px" height="30px"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"></path><path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"></path></svg></span>
                                        </div>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionFaq">
                                <div class="card-body">
                                    <p>The mod is in the very early stages of development; however, a solid foundation has been laid for the community to iterate on. The following milestones have been completed:</p>
                                    <ul class="disc">
                                        <li>Client / Server Communication</li>
                                        <li>Player movement</li>
                                        <li>Picking up / Dropping item syncing</li>
                                        <li>Long-range world syncing</li>
                                        <li>Base building</li>
                                        <li>Furniture building</li>
                                        <li>Most furniture interactions (containers / medkit fabricators / chargers / etc)</li>
                                        <li>Power management</li>
                                        <li>Seamoth &amp; Exosuit Syncing</li>
                                        <li>Basic cyclops syncing</li>
                                        <li>Rudimentary chat system</li>
                                        <li>New HUD for remote players</li>
                                        <li>Basic player animations</li>
                                        <li>Integration with&nbsp;<a href="https://github.com/pardeike/Harmony" target="_blank">Harmony</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn w-100 ripple collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="d-flex justify-content-between">
                                            <span class="d-flex align-items-center">How can I play this mod?</span>
                                            <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#191919" width="30px" height="30px"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"></path><path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"></path></svg></span>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFaq">
                                <div class="card-body">
                                    Download the installer from the "Download" section.  Keep in mind that this is still in development and can have bugs.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <h2 class="mb-0">
                                    <button class="btn w-100 ripple collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        <div class="d-flex justify-content-between">
                                            <span class="d-flex align-items-center">Is Nitrox compatible with Subnautica: Below Zero?</span>
                                            <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#191919" width="30px" height="30px"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"></path><path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"></path></svg></span>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionFaq">
                                <div class="card-body">
                                    Currently the Nitrox mod only works with the base game of Subnautica. The addition of support for Below Zero is planned, but will not release before the current Nitrox version is stable.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn w-100 ripple collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <div class="d-flex justify-content-between">
                                            <span class="d-flex align-items-center">How can I get help?</span>
                                            <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#191919" width="30px" height="30px"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"></path><path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"></path></svg></span>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFaq">
                                <div class="card-body">
                                    Please first read the steps on our wiki. If that doesn't work, please ask our help chat in the discord channel.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn w-100 ripple collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <div class="d-flex justify-content-between">
                                            <span class="d-flex align-items-center">How can I contribute?</span>
                                            <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#191919" width="30px" height="30px"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"></path><path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"></path></svg></span>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFaq">
                                <div class="card-body">
                                    Simply submit a pull request on the <a href="https://github.com/SubnauticaNitrox/Nitrox" target="_blank">GitHub page</a>. Feel free to also join us in our <a href="https://discord.gg/E8B4X9s" target="_blank">discord channel</a> to discuss and exchange feedback or ideas with other contributors, developers and players.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn w-100 ripple collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <div class="d-flex justify-content-between">
                                            <span class="d-flex align-items-center">How can I donate?</span>
                                            <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#191919" width="30px" height="30px"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"></path><path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"></path></svg></span>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionFaq">
                                <div class="card-body">
                                    We do not accept donations to the mod.  Those wishing to give money can do so here: <a href="https://www.doctorswithoutborders.org/" target="_blank">https://www.doctorswithoutborders.org/</a></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn w-100 ripple collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <div class="d-flex justify-content-between">
                                            <span class="d-flex align-items-center">Why the name 'Nitrox'?</span>
                                            <span class="d-flex align-items-center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#191919" width="30px" height="30px"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"></path><path d="M15.88 9.29L12 13.17 8.12 9.29c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.59 4.59c.39.39 1.02.39 1.41 0l4.59-4.59c.39-.39.39-1.02 0-1.41-.39-.38-1.03-.39-1.42 0z"></path></svg></span>
                                        </div>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionFaq">
                                <div class="card-body">
                                    Nitrox is an alternative air mixture, used by scuba divers, to achieve longer bottom times. As a mod, it will provide a new dimension of gameplay to extend your enjoyment.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-layouts.default>
