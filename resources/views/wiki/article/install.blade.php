@section('title', 'Guide: Installing Nitrox · Official Nitrox Website')
@section('description', 'Get started by installing the Nitrox Mod. Follow the steps carefully and you will be ready to play in no time!')

<x-layouts.default>

<!-- Wiki Content -->
<div class="section pt-5 mt-5">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <h1>Installing Nitrox</h1>
                <p class="lead">Get started by installing the Nitrox Mod. Follow the steps carefully and you will be ready to play in no time!</p>

                <h2 class="mt-4 mb-3">Tutorial</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0qMHaOVH0Ek?rel=0" allowfullscreen></iframe>
                </div>
                <p>
                    <ol>
                        <li>Download Nitrox here: <a href="{{ route('download') }}" target="_blank">Download</a></li>
                        <li>Unzip the file where you want the launcher to be located - Do NOT launch it while it is zipped. It will not save progress and have more bugs</li>
                        <li>Run NitroxLauncher as Administrator</li>
                        <li>Click Options, click Change and then choose the folder you have Subnautica installed into</li>
                    </ol>

                    <b>Example locations:</b>
                    <ul>
                        <li>Epic Games: C:\Program Files\Epic Games\Subnautica</li>
                        <li>Steam: C:\Program Files\Steam\steamapps\common\Subnautica</li>
                    </ul>
                </p>
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
