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
                <x-layouts.partials.wizard-nav :step1="true" :step2="true" />

                <div class="wizard-main pl-5 pr-5">
                    <h6>Step 3</h6>
                    <h2>Download Nitrox</h2>

                    <p class="pt-4">Head over to the download section to download the latest version of the Nitrox Mod.<br> You can choose to download directly or via NexusMods.</p>
                    <a class="btn btn-primary" href="{{ route('download') }}" role="button" target="_blank">Downloads</a>
                </div>

                <div class="wizard-footer border-top mt-4 pt-4 d-flex justify-content-between">
                    <a href="{{ route('wizard.epic.update.step2') }}" class="btn btn-outline-secondary">Back</a>
                    <a href="{{ route('wizard.epic.update.step4') }}" class="btn btn-secondary text-right">Continue</a>
                </div>
            </div>
        </div>
    </div>
</div>
</x-layouts.default>
