@section('title', __('pages.team.meta.title'))
@section('description', __('pages.team.meta.description'))

@section('og:title', __('pages.team.meta.title'))
@section('og:description', __('pages.team.meta.description'))
@section('og:image', asset('/assets/img/favicon.png'))

<x-layouts.default>
    <div class="section home-cover cover-team overflow-hidden">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 text-center">
                    <h1 class="animated fadeIn mt-5">{{ __('pages.team.title') }}</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="section mt-3 pt-5 team">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-4">Developers</h2>
                        </div>
                        <div class="col-md-12 mb-3">
                            <h6 class="text-yellow font-weight-bold">Sea Dragon</h6>
                            <h5>Mod creator</h5>
                            <ul class="mt-3 mb-4">
                                <li>Sunrunner</li>
                            </ul>
                        </div>

                        <div class="col-md-12 mb-3">
                            <h6 class="text-purple font-weight-bold">Ghost Leviathan</h6>
                            <h5>Tenured developers</h5>
                            <ul class="mt-3 mb-4">
                                <li>Killzoms</li>
                                <li>Jannify</li>
                                <li>HeN</li>
                                <li>Measurity</li>
                                <li>MadMax</li>
                                <li>Marijn</li>
                                <li>Nes</li>
                                <li>Rux</li>
                                <li>Dartasen</li>
                            </ul>
                        </div>
                        <div class="col-md-12 mb-3">
                            <h6 class="text-orange font-weight-bold">Alterra HQ</h6>
                            <h5>Modders and contributors</h5>
                            <ul class="mt-3 mb-4">
                                <li>CatSZekely</li>
                                <li>Garsia</li>
                                <li>RabidCrab</li>
                                <li>AquariusSidhe</li>
                                <li>Amarok</li>
                                <li>Grandoth</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-4">Support Team</h2>
                        </div>
                        <div class="col-md-12 mb-3">
                            <h6 class="text-red font-weight-bold">Sea Emperor</h6>
                            <h5>Owner of the Discord Server</h5>
                            <ul class="mt-3 mb-4">
                                <li>Werewolfs</li>
                            </ul>
                        </div>

                        <div class="col-md-12 mb-3">
                            <h6 class="text-pink font-weight-bold">Reaper Leviathans</h6>
                            <h5>Server admins</h5>
                            <ul class="mt-3 mb-4">
                                <li>Shalix</li>
                                <li>CriticalCookie</li>
                                <li>InfamousJay</li>
                            </ul>
                        </div>

                        <div class="col-md-12 mb-3">
                            <h6 class="text-cyan font-weight-bold">Arctic Peepers</h6>
                            <h5>Long-term staff</h5>
                            <ul class="mt-3 mb-4">
                                <li>DekanCraft</li>
                                <li>NinjaPedroX</li>
                                <li>TheLxkas</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <h2 class="mb-4 mt-3">Github contributors</h2>
                    <a href="https://github.com/SubnauticaNitrox/Nitrox/graphs/contributors" target="_blank">View all GitHub contributors</a>
                </div>
            </div>


        </div>
    </div>


    <div class="section pt-4 mt-4 mb-3 pb-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ __('pages.team.join') }}</h4>
                            <p class="card-text">
                                {{ __('pages.team.join_description') }}
                            </p>
                            <a href="https://discord.gg/E8B4X9s" class="card-link">Discord</a>
                            <a href="https://www.reddit.com/r/SubnauticaNitrox/" class="card-link">Reddit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
