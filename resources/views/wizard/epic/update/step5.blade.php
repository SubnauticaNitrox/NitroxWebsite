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
                <x-layouts.partials.wizard-nav :step1="true" :step2="true" :step3="true" />

                <div class="wizard-main pl-5 pr-5">
                    <h6>Step 4</h6>
                    <h2>Open Nitrox</h2>

                    <p class="pt-4">Right click, NitroxLauncher and run as administrator. Select "Yes" if a dialog appears.</p>
                    <video alt="Video from Gyazo" class="embed-responsive" autoplay muted loop playsinline controls><source src="https://i.gyazo.com/13f043bcf1af1e2dc1bddb9a90f411b2.mp4" type="video/mp4" /></video>

                </div>

                <div class="wizard-footer border-top mt-4 pt-4 d-flex justify-content-between">
                    <a href="{{ route('wizard.epic.update.step5') }}" class="btn btn-outline-secondary">Back</a>
                    <a href="{{ route('wizard.epic.update.step6') }}" class="btn btn-secondary text-right">Continue</a>
                </div>

            </div>
        </div>
    </div>
</div>
</x-layouts.default>
