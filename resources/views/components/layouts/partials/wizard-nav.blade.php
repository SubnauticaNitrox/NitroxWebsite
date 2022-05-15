@props([
    'step1' => false,
    'step2' => false,
    'step3' => false,
    'step4' => false,
])

<div class="row cols-md-5">
    <div class="col">
        <div class="d-flex">
            <div class="p-2 rounded-pill my-auto mr-2 {{ $step1 ? 'bg-primary text-white' : 'text-primary' }}" style="{{ $step1 ? '' : 'background: #007bff4d' }}"><div style="width: 22px; height: 22px;" class="text-center">1</div></div>
            <p class="mb-0 my-auto {{ $step1 ? 'font-weight-bold' : '' }}">Choose platform</p>
        </div>
    </div>

    <div class="col">
        <div class="d-flex">
            <div class="p-2 rounded-pill my-auto mr-2 {{ $step2 ? 'bg-primary text-white' : 'text-primary' }}" style="{{ $step2 ? '' : 'background: #007bff4d' }}"><div style="width: 22px; height: 22px;" class="text-center">2</div></div>
            <p class="mb-0 my-auto {{ $step2 ? 'font-weight-bold' : '' }}">Download</p>
        </div>
    </div>

    <div class="col">
        <div class="d-flex">
            <div class="p-2 rounded-pill my-auto mr-2 {{ $step3 ? 'bg-primary text-white' : 'text-primary' }}" style="{{ $step3 ? '' : 'background: #007bff4d' }}"><div style="width: 22px; height: 22px;" class="text-center">3</div></div>
            <p class="mb-0 my-auto {{ $step3 ? 'font-weight-bold' : '' }}">Install</p>
        </div>
    </div>

    <div class="col">
        <div class="d-flex">
            <div class="p-2 rounded-pill my-auto mr-2 {{ $step4 ? 'bg-primary text-white' : 'text-primary' }}" style="{{ $step4 ? '' : 'background: #007bff4d' }}"><div style="width: 22px; height: 22px;" class="text-center">4</div></div>
            <p class="mb-0 my-auto {{ $step4 ? 'font-weight-bold' : '' }}">Done</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mt-2 mb-3">
        <hr>
    </div>
</div>
