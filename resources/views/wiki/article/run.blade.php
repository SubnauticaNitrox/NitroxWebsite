@section('title', 'Guide: Join a Nitrox Server · Official Nitrox Website')
@section('description', 'How to join and play multiplayer on a Nitrox Server for Subnautica')

<x-layouts.default>

<div class="section pt-5 mt-5">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <h1>Running the Nitrox Server</h1>
                <p class="lead">After installing the mod you can start playing together by running and hosting the Nitrox server.</p>

                <hr class="pb-2">

                <div class="alert alert-warning">
                    <b>Important notes:</b>
                    <ul>
                    <li>The Nitrox server needs an open port to communicate through. This can be achieved by port forwarding or through the use of a VPN service like Hamachi if you do not know or want to port forward.</li>
                    <li>Nitrox uses port <kbd>11000 UDP</kbd></li>
                    <li>In some cases, your Firewall may be blocking this connection. If you or others can't connect, make sure that both you and the host of the server have a firewall exception for the <kbd>Subnautica.exe</kbd> and <kbd>NitroxServer-Subnautica.exe</kbd></li>
                    </ul>
                </div>

                <p>Follow these steps to run/host a Nitrox server.
                <ol>
                    <li>Run NitroxLauncher as Administrator</li>
                    <li>Click on Server, then Start Server</li>
                </ol>

                <b>If you look in the server window you can find information about:</b>
                    <ul>
                        <li>Game Mode</li>
                        <li>Server Password</li>
                        <li>Admin Password</li>
                        <li>Your local IP for LAN or if you are joining the server yourself</li>
                        <li>It shows you the IP others need to input, if you are Port Forwarding your server</li>
                    </ul>
                </p>
                <br>
                <h6>More information</h6>
                <p><b>Port Forwarding help:</b>
                As every router is different, we recommend you to visit the website <a target="_blank" rel="nofollow" href="https://portforward.com/router.htm">https://portforward.com/router.htm</a> to learn how to port forward for your router.
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
