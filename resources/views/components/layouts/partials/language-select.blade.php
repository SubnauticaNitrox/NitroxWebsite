<li class="nav-item dropdown">
    <a class="nav-link d-flex p-1 ml-2 ml-lg-3" href="#" id="navbarLanguageDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
        <span class="material-icons">language</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right mt-lg-3 position-absolute" aria-labelledby="navbarLanguageDropdown">
        @foreach($available_locales as $locale_name => $available_locale)
            @if($available_locale === $current_locale)
                <a class="dropdown-item" href="{{ route('language', ['locale' => $available_locale]); }}"><span>{{ $locale_name }}</span></a>
            @else
                <a class="dropdown-item" href="{{ route('language', ['locale' => $available_locale]); }}"><span>{{ $locale_name }}</span></a>
            @endif
        @endforeach
        <a class="dropdown-item" target="_blank" href="https://hosted.weblate.org/engage/subnauticanitrox/">
            <img src="https://hosted.weblate.org/widgets/subnauticanitrox/-/svg-badge.svg" alt="Translation status" />
        </a>
    </div>
</li>
