@section('title', 'Wizard: Installing Nitrox · Subnautica Multiplayer Mod')
@section('description', 'Get started by installing the Nitrox Mod. Follow the steps carefully and you will be ready to play in no time!')

@section('og:title', 'Wizard: Installing Nitrox · Subnautica Multiplayer Mod')
@section('og:description', 'Get started by installing the Nitrox Mod. Follow the steps carefully and you will be ready to play in no time!')
@section('og:image', asset('/assets/img/favicon.png'))

<x-layouts.default>
<div class="section pt-5 mt-4">
    <div class="container">
        <div class="row mt-5 pt-3 d-flex justify-content-center wizard-container">
            <div class="col-md-12 p-5 text-left">
                <x-layouts.partials.wizard-nav :step1="true" />

                <div class="wizard-main pl-5 pr-5 pb-4">
                    <h6>Step 2</h6>
                    <h2>Verify Integrity</h2>

                    <p class="pt-4">
                    Go to your Subnautica install location, open the folder "Subnautica Data" and <b>delete the folder named "Managed"</b>.</p>

                    <p>Then go to the Epic Games Library, find Subnautica and click on the (...) and Verify</p>
                </div>

                <div class="wizard-footer border-top mt-4 pt-4 d-flex justify-content-between">
                    <a href="{{ route('wizard.choose.update') }}" class="btn btn-outline-secondary">Back</a>
                    <a href="{{ route('wizard.epic.update.step3') }}" class="btn btn-secondary text-right">Continue</a>
                </div>

            </div>
        </div>
    </div>
</div>
</x-layouts.default>
