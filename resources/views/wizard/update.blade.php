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

                <h6>Step 1</h6>
                <h2 class="font-weight-bold">Which platform do you wish to update on?</h2>

                <div class="row pt-5 pb-5">
                    <div class="col-6">
                        <a href="{{ route('wizard.steam.update.step2') }}" class="btn btn-outline-secondary w-100 platform-logos">
                            <img src="{{ asset('/assets/img/logos/steam.png') }}" class="img-fluid" width="200px">
                            <p>Steam</p>
                        </a>
                    </div>

                    <div class="col-6">
                        <a href="{{ route('wizard.epic.update.step2') }}" class="btn btn-outline-secondary w-100 platform-logos">
                            <img src="{{ asset('/assets/img/logos/epic.png') }}" class="img-fluid" width="200px">
                            <p>Epic Games</p>
                        </a>
                    </div>

                </div>

                <div class="wizard-footer border-top mt-4 pt-4 d-flex justify-content-between">
                    <a href="{{ route('wizard.home') }}" class="btn btn-outline-secondary">Back</a>
                </div>

            </div>
        </div>
    </div>
</div>
</x-layouts.default>
