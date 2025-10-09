@section('title', __('home.meta.title'))
@section('description', __('home.meta.description'))

@section('og:title', __('home.meta.title'))
@section('og:description', __('home.meta.description'))
@section('og:image', asset('/assets/img/favicon.png'))

<x-layouts.default>
    <div class="section home-cover cover coverHome overflow-hidden">
    <div id="particles-js"></div>
        <div class="cover-image">
            <div class="header-unit home-cover"></div>
        </div>
        <div class="container pb-0">
            <div class="row" style="perspective: 400px;">

                <div class="col-md-8 offset-md-2 text-center mt-5 about-intro pt-md-5">
                    <span class="d-sm-inline-flex align-items-center gap-1 py-2 px-3 me-2 mb-2 mb-lg-0 rounded-pill text-white bg-darkish">Version 1.8.0.0 out now!</span>
                    <h1 class="pt-md-5 mt-3 font-weight-bold opacity-75">{!! __('home.hero_over') !!}</h1>
                    <h1 class="mt-3 font-weight-bold display-3">{!!__('home.hero_slogan') !!}</h1>
                    <a href="{{ route('download') }}" class="btn btn-lg btn-primary btn-loading btn-rounded mt-4 mb-4 px-5 py-2">
                        <div class="d-flex flex-column align-items-center">
                            <span>{{ __('home.hero_cta') }}</span>
                            <small class="opacity-75" style="font-size: 0.75rem">{{ $stats['downloads'] ?? '500K+' }} downloads</small>
                        </div>
                    </a>
                    <div class="mt-2 btn-disclaimer d-block">
                        <small class="text-muted">
                            Available for 
                            @if(isset($version['platforms']))
                                @php
                                    $platforms = [];
                                    foreach($version['platforms'] as $platform => $data) {
                                        switch($platform) {
                                            case 'windows':
                                                $platforms[] = 'Windows';
                                                break;
                                            case 'linux':
                                                $platforms[] = 'Linux';
                                                break;
                                            case 'macos':
                                                $platforms[] = 'macOS';
                                                break;
                                            default:
                                                $platforms[] = ucfirst($platform);
                                        }
                                    }
                                @endphp
                                {{ implode(', ', $platforms) }}
                            @else
                                Windows
                            @endif
                        </small>
                    </div>
                </div>

                <div class="col-md-12 mt-5 text-center move-up mb-5">
                    <!-- <img src="{{ asset('/assets/img/launcher-2022.jpg') }}" class="img-fluid mt-3 rounded" alt="Nitrox Launcher">-->
                    <div class="embed-responsive embed-responsive-16by9 rounded-xl shadow-lg overflow-hidden">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/mMtrFA6nmvI" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section my-5 pb-4" id="trigger2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 py-5 mt-4" id="reveal2">
                    <h3 class="font-weight-bold">
                        {!! __('home.explore') !!}
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="nitrox-card nc-1 ">
                        <div class="row pb-5">
                            <div class="col-md-6 text-white">
                                <h6 class="pb-5">{{ __('home.feature.multiplayer.headline') }}</h6>
                                <h1 class="font-weight-bold display-3">{{ __('home.feature.multiplayer.title') }}</h1>
                                <p class="lead">{{ __('home.feature.multiplayer.description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="nitrox-card nc-2 ">
                        <div class="row pb-5">
                            <div class="col-md-6 text-white py-3">
                                <h6 class="pb-5">{{ __('home.feature.stores.headline') }}</h6>
                                <h1 class="font-weight-bold display-3">{{ __('home.feature.stores.title') }}</h1>
                                <p class="lead">{{ __('home.feature.stores.description') }}</p>
                            </div>
                            <div class="col-md-6 my-auto">
                                <div class="row row-cols-3 justify-content-center">
                                    <div class="col">
                                        <img src="{{ asset('/assets/img/logos/steam.png') }}" class="img-fluid" style="filter: invert(1);">
                                    </div>
                                    <div class="col">
                                        <img src="{{ asset('/assets/img/logos/epic.png') }}" class="img-fluid" style="filter: invert(1);">
                                    </div>
                                    <div class="col">
                                        <img src="{{ asset('/assets/img/logos/windows.png') }}" class="img-fluid" style="filter: invert(1);">
                                        <sup class="fnote" style="position: absolute; top: 3em; margin-left: -8px"><a class="text-white opacity-5 p-1 d-none" href="#footnote-1">1</a></sup>
                                    </div>
                                    <div class="col">
                                        <img src="{{ asset('/assets/img/logos/mac.png') }}" class="img-fluid" style="filter: invert(1); opacity: .25" data-toggle="tooltip" data-placement="bottom" title="Currently unavailable">
                                    </div>
                                    <div class="col">
                                        <img src="{{ asset('/assets/img/logos/linux.png') }}" class="img-fluid" style="filter: invert(1);">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mt-5">
                    <div class="nitrox-card nc-3 ">
                        <div class="row pb-5">
                            <div class="col-md-6 text-white">
                                <h6 class="pb-5">{{ __('home.feature.gameplay.headline') }}</h6>
                                <h1 class="font-weight-bold display-3">{{ __('home.feature.gameplay.title') }}</h1>
                                <p class="lead">{{ __('home.feature.gameplay.description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <div class="nitrox-card nc-4 h-100">
                        <div class="row">
                            <div class="col text-white">
                                <h6 class="pb-5">{{ __('home.feature.code.headline') }}</h6>
                                <h1 class="font-weight-bold">{{ __('home.feature.code.title') }}</h1>
                                <p class="lead">{{ __('home.feature.code.description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="nitrox-card nc-5">
                        <div class="row">
                            <div class="col text-white">
                                <h6 class="pb-5">{{ __('home.feature.community.headline') }}</h6>
                                <h1 class="font-weight-bold">{{ __('home.feature.community.title') }}</h1>
                                <p class="lead">{{ __('home.feature.community.description') }}</p>

                                <h1 class="display-2 font-weight-bold pt-3">{{ $stats['downloads'] ?? __('home.feature.community.download_count') }}</h1>
                                <h6>{{ __('home.feature.community.downloads') }}</h6>

                                <h1 class="display-2 font-weight-bold pt-3">{{ $stats['discord_members'] ?? __('home.feature.community.discord_count') }}</h1>
                                <h6>{{ __('home.feature.community.discord') }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section mt-5 mb-5 dark-section">
        <div class="container">
            <div class="row pt-5 mt-5">

                <div class="col-md-12">
                    <div class="nitrox-card nc-launcher">
                        <div class="row pb-5">
                            <div class="col-md-6 text-white  platform-logos">
                                <h6 class="pb-5">{{ __('home.feature.launcher.headline') }}</h6>
                                <h1 class="font-weight-bold display-3 pt-2">{{ __('home.feature.launcher.title') }}</h1>
                                <p class="lead">{{ __('home.feature.launcher.description') }}</p>
                            

                            </div>
                            <div class="col-md-6 mt-5 mt-md-0">
                                <img src="{{ asset('/assets/img/launcher-2022-full.jpg') }}" alt="Launcher Screenshot" class="img-fluid my-auto">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-5">
                    <div class="nitrox-card nc-chat">
                        <div class="row pb-0">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">{{ __('home.feature.chat.headline') }}</h6>
                                <h1 class="font-weight-bold display-3 pt-2">{{ __('home.feature.chat.title') }}</h1>
                                <p class="lead">{{ __('home.feature.chat.description') }}</p>
                            </div>
                            <div class="col-md-12 mt-5">
                                <img src="{{ asset('/assets/img/chat-2.png') }}" alt="Launcher Screenshot" class="img-fluid my-auto">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mt-5">
                    <div class="nitrox-card nc-ports h-100">
                        <div class="row pb-0">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">{{ __('home.feature.upnp.headline') }}</h6>
                                <h1 class="font-weight-bold display-3 pt-2">{{ __('home.feature.upnp.title') }}</h1>
                                <p class="lead">{{ __('home.feature.upnp.description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row pt-5 mt-5 mb-5">
                <div class="col-md-10 mt-5 mb-5">
                    <h6 class="pb-5">{{ __('home.feature.lang.headline') }}</h6>
                    <h1 class="font-weight-bold"><span class="opacity-75">{{ __('home.feature.lang.title') }}</span> {{ __('home.feature.lang.languages') }}</h1>
                    <p class="lead mt-3 font-weight-bold">
                        <a href="https://hosted.weblate.org/engage/subnauticanitrox/" target="_blank">{{ __('home.feature.lang.link') }}</a>
                    </p>
                </div>
            </div>

            <div class="row pb-5">
                <div class="col-md-4 mb-5">
                    <div class="nitrox-card nc-empty h-100">
                        <div class="row pb-4">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">{{ __('home.feature.host.headline') }}</h6>
                                <p class="lead">{{ __('home.feature.host.description') }}</p>
                                <h1 class="display-1 font-weight-bold pt-3 text-center">{{ __('home.feature.host.number') }}<sup class="fnote"><a class="text-white opacity-5" href="#footnote-2">1</a></sup></h1>
                                <h6 class="text-center">{{ __('home.feature.host.subtitle') }}</h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="nitrox-card nc-empty h-100">
                        <div class="row pb-4">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">{{ __('home.feature.play.headline') }}</h6>
                                <p class="lead">{{ __('home.feature.play.description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="nitrox-card nc-empty h-100">
                        <div class="row pb-4">
                            <div class="col-md-12 text-white platform-logos">
                                <h6 class="pb-5">{{ __('home.feature.server.headline') }}</h6>
                                <p class="lead"{{ __('home.feature.server.number') }}></p>
                                <h1 class="display-1 font-weight-bold pt-3 text-center">{{ __('home.feature.server.number') }}<sup class="fnote"><a class="text-white opacity-5" href="#footnote-3">2</a></sup></h1>
                                <h6 class="text-center">{{ __('home.feature.server.subtitle') }}</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section pt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mb-5">
                    <h1 class="font-weight-bold display-3">{{ __('home.nextsteps.get.title') }}</h1>
                    <p class="lead pt-2">{{ __('home.nextsteps.get.description') }}</p>
                    <a href="{{ route('download') }}" class="btn btn-lg btn-primary btn-loading btn-rounded mt-4 mb-4 px-5 py-3" style="animation-delay: .1s;">{{ __('home.nextsteps.get.download') }}</a>
                    <p class="text-muted">{{ __('home.nextsteps.get.latest_version') }}&nbsp;{{ $version['version'] }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="col-md-12 sm-cover-faq p-5 mt-3 rounded text-left">
                        <h6 class="pb-5">{{ __('home.nextsteps.wiki.title') }}</h6>
                        <h2 class="font-weight-bold pt-5">{{ __('home.nextsteps.wiki.description') }}</h2>
                        <a href="{{ route('wiki.home') }}" class="btn btn-lg btn-outline mt-4 mb-4">{{ __('home.nextsteps.wiki.link') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-layouts.partials.footer-extended></x-layouts.partials.footer-extended>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

        <script>
            particlesJS("particles-js", {
                "particles": {
                    "number": {
                        "value": 9,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#ffffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "src": "img/github.svg",
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": false,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 4,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": false,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });
            var count_particles,
                stats,
                update;
            stats = new Stats;
            stats.setMode(0);
            stats.domElement.style.position = 'absolute';
            stats.domElement.style.left = '0px';
            stats.domElement.style.top = '0px';
            document.body.appendChild(stats.domElement);
            count_particles = document.querySelector('.js-count-particles');
            update = function() {
                stats.begin();
                stats.end();
                if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
                    count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
                }
                requestAnimationFrame(update);
            };
            requestAnimationFrame(update);;
        </script>

    @endpush

</x-layouts.default>
