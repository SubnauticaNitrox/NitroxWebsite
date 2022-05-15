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
                <x-layouts.partials.wizard-nav :step1="true" :step2="true" :step3="true" :step4="true" />

                <div class="wizard-main pl-5 pr-5 pb-4">
                    <i class="material-icons text-success md-48 mt-4 mb-4">check_circle</i>
                    <h6>Complete</h6>
                    <h2>You have sucessfully installed the Nitrox Mod!</h2>

                    <p class="pt-4">If you have any questions or need help, join our discord server.</p>
                    <a href="https://discord.gg/E8B4X9s" target="_blank" class="btn btn-lg btn-primary">Join Nitrox on Discord</a>
                </div>

                <div class="wizard-footer border-top mt-4 pt-4 d-flex justify-content-between">
                    <a href="{{ route('wizard.steam.step5') }}" class="btn btn-outline-secondary">Back</a>
                    <a href="{{ route('wizard.home') }}" class="btn btn-secondary text-right">Start over</a>
                </div>

            </div>
        </div>
    </div>
</div>
</x-layouts.default>
