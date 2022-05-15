<nav class="navbar navbar-expand-lg navbar-dark bg-darkish fixed-top features-navigation mt-n1 mt-md-0" style="top:73px">
    <div class="container pt-md-3 pt-0 pb-0">
        <div class="navbar-expand d-flex w-100" id="navbarText">
            <ul class="navbar-nav text-right mr-auto d-none d-md-block">
                <li class="nav-item">
                    <a class="nav-link px-0" href="#">Features <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="navbar-nav flex-row text-right">
                <li class="nav-item {% if currentUrl() == baseUrl() ~ route("features.launcher") %} active{% endif %}">
                <a class="nav-link px-3" href="{{ route('features.launcher') }}">Launcher <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {% if currentUrl() == baseUrl() ~ route("features.server") %} active{% endif %}">
                <a class="nav-link px-3" href="{{ route('features.server') }}">Server <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {% if currentUrl() == baseUrl() ~ route("features.open-source") %} active{% endif %}">
                <a class="nav-link px-3 d-block" href="{{ route('features.open-source') }}">Open Source <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {% if currentUrl() == baseUrl() ~ route("features.resources") %} active{% endif %}">
                <a class="nav-link px-3" href="{{ route('features.resources') }}">Resources <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>

    </div>
</nav>
