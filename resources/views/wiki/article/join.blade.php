@section('title', 'Guide: Join a Nitrox Server · Official Nitrox Website')
@section('description', 'How to join and play multiplayer on a Nitrox Server for Subnautica')

<x-layouts.default>

<!-- Wiki Content -->
<div class="section pt-5 mt-5">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <h1>Joining a Nitrox Server</h1>
                <p class="lead">How to join and play multiplayer on a Nitrox Server for Subnautica.</p>

                <hr class="pb-2">

                <h3 class="mt-4 pt-2">Step 1</h3>
                <p>After downloading and unzipping the mod, open the Nitrox Launcher.</p>

                <div class="alert alert-warning">
                    <b>Important:</b> Make sure to run as Administrator.
                </div>

                <h3 class="mt-4 pt-2">Step 2</h3>
                <p>Press on "Multiplayer".</p>
                <img src="{{ asset('/assets/img/wiki/join/step1') }}.jpg" alt="Press on Multiplayer" class="img-fluid">

                <h3 class="mt-4 pt-2">Step 3</h3>
                <p>Press "Add server IP".</p>
                <img src="{{ asset('/assets/img/wiki/join/step2') }}.jpg" alt="Press on Add server IP" class="img-fluid">

                <h3 class="mt-4 pt-2">Step 4</h3>
                <p>A dialog will open. Enter a name for the server. Then enter the server IP under host. Finally, press "Add server".</p>
                <img src="{{ asset('/assets/img/wiki/join/step3') }}.jpg" alt="Press on Multiplayer" class="img-fluid">

                <h3 class="mt-4 pt-2">Step 5</h3>
                <p>You will now see the server with the name you gave it in the list. Click on "Connect to..." to join that server.</p>
                <img src="{{ asset('/assets/img/wiki/join/step4') }}.jpg" alt="Press on Multiplayer" class="img-fluid">

                <h3 class="mt-4 pt-2">Step 6</h3>
                <p>Last but not least, enter your username and pick a colour of your liking. Then, press "Join".</p>
                <img src="{{ asset('/assets/img/wiki/join/step5') }}.jpg" alt="Press on Multiplayer" class="img-fluid">

                <div class="mt-4 alert alert-secondary">
                    If you are connecting to someones server, <b>they must provide the IP for you</b>. They can find that IP from the <a href="{{ route('wiki.article.run') }}">server window</a>.
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Helpful -->
<div class="section border-top border-bottom pt-5 mt-5 mb-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="container">
                    <!-- initial -->
                    <div class="helpFeedback-initial">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-flex flex-row">
                                    <h5 class="mt-1 mr-3 pt-1">Was this article helpful?</h5>
                                    <div class="">
                                        <button class="btn btn-outline-primary px-5 mr-3" onclick="helpFeedbackYes()" id="helpFeedbackYes">Yes</button>
                                        <button class="btn btn-outline-primary px-5" onclick="helpFeedbackNo()" id="helpFeedbackNo">No</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- it was helpful -->
                    <div class="helpFeedback-answer-yes">
                        <h5 class="mt-1">Thanks for your feedback, we are happy it was helpful!</h5>
                        <p class="opacity-75">Let us know your experience on the discord server.</p>
                        <a href="https://discord.gg/E8B4X9s" target="_blank" class="btn btn-lg btn-primary">Join Nitrox on Discord</a>
                    </div>

                    <!-- not helpful -->
                    <div class="helpFeedback-answer-no">
                        <h5 class="mt-1">Sorry about that.</h5>
                        <p class="opacity-75">Let us know what went wrong by joining the discord.</p>
                        <a href="https://discord.gg/E8B4X9s" target="_blank" class="btn btn-lg btn-primary">Get help on Discord</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</x-layouts.default>
