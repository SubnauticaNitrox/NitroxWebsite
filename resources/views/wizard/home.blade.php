@section('title', 'Wizard: Installing Nitrox · Subnautica Multiplayer Mod')
@section('description', 'Get started by installing the Nitrox Mod. Follow the steps carefully and you will be ready to play in no time!')

@section('og:title', 'Wizard: Installing Nitrox · Subnautica Multiplayer Mod')
@section('og:description', 'Get started by installing the Nitrox Mod. Follow the steps carefully and you will be ready to play in no time!')
@section('og:image', asset('/assets/img/favicon.png'))

<x-layouts.default>
<div class="section pt-5 mt-4">
    <div class="container">
        <div class="row mt-5 pt-3 d-flex justify-content-center wizard-container">
            <div class="col p-2 rounded">
                <div class="wizard-img" style="border-radius: 24px; overflow: hidden;"></div>
            </div>
        <div class="col-md-8 p-5 text-left">
            <h6>Wizard</h6>
            <h1 class="font-weight-bold">Nitrox Install Wizard</h1>
            <hr>
            <h2 class="pt-5">Fresh install or update from previous version?</h2>
            <p>Choose if you would like to install a new version of nitrox or update to the latest version.</p>
            <div class="row pt-5">
            <div class="col-6 pr-md-2">
                <a href="{{ route('wizard.choose.fresh') }}" class="btn btn-primary btn-rounded btn-block btn-lg px-5 py-3">New installation</a>
            </div>
            <div class="col-6 pl-md-2">
                <a href="{{ route('wizard.choose.update') }}" class="btn btn-secondary btn-rounded btn-block btn-lg px-5 py-3">Update</a>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

</x-layouts.default>
