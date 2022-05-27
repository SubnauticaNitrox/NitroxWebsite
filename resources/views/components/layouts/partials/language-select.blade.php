<!-- Modal -->
<div class="modal fade" id="translationSelectModal" tabindex="-1" aria-labelledby="translationSelectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content rounded-xl">
            <div class="modal-header">
                <h5 class="modal-title mx-auto" id="translationSelectModalLabel">{{ __('lang-select.title') }}</h5>
                <button type="button" class="close p-2 mt-n1" data-dismiss="modal" aria-label="Close" style="position: absolute;right: 32px;">
                    <span class="material-icons">
                        close
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <p class="px-3">{{ __('lang-select.description') }}</p>
                <div class="row g-3 row-cols-1 row-cols-lg-2 g-3 px-4">
                    @foreach($available_locales as $locale_name => $available_locale)
                        @if($available_locale === $current_locale)
                            <a class="col text-decoration-none mb-3 px-2" href="{{ route('language', ['locale' => $available_locale]); }}">
                                <div class="border rounded-8 px-3 py-2 hover-bg active">
                                    <div class="text-dark">{{ $locale_name }}</div>
                                </div>
                            </a>
                        @else
                            <a class="col text-decoration-none mb-3 px-2" href="{{ route('language', ['locale' => $available_locale]); }}">
                                <div class="border rounded-8 px-3 py-2 hover-bg">
                                    <div class="text-dark">{{ $locale_name }}</div>
                                </div>
                            </a>
                        @endif
                    @endforeach
                    <a class="col text-decoration-none mb-3 px-2" target="_blank" href="https://hosted.weblate.org/engage/subnauticanitrox/">
                        <div class="position-relative">
                            <img src="https://hosted.weblate.org/widgets/subnauticanitrox/-/website/287x66-white.png" alt="Translation status" class="img-fluid rounded-8" />
                            <div class="position-absolute w-100 h-100 rounded-8" style="top: 0; box-shadow: inset 0px 0px 0px 1px #dee2e6;"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
