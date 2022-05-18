@section('title', __('pages.about.meta.title'))
@section('description', __('pages.about.meta.description'))

@section('og:title', __('pages.about.meta.title'))
@section('og:description', __('pages.about.meta.description'))
@section('og:image', asset('/assets/img/favicon.png'))

<x-layouts.default>
    <x-layouts.partials.features-navigation></x-layouts.partials.features-navigation>

    <div class="section home-cover cover-team overflow-hidden">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-left">
                    <h1 class="mt-5 display-4 font-weight-bold">{{ __('pages.about.title') }}</h1>

                    <div class="credits opacity-75 d-flex pt-5">
                        <p class="mr-3">{{ __('pages.about.quote') }}</p>
                        <svg width="162px" height="24px" viewBox="0 0 162 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 48.2 (47327) - http://www.bohemiancoding.com/sketch -->
                            <title>PCGN_NavLogo</title>
                            <desc>Created with Sketch.</desc>
                            <defs>
                                <polygon id="path-1" points="0.6371 0 23.7161 0 23.7161 23.9997 0.6371 23.9997"></polygon>
                                <polygon id="path-3" points="37.8812 0 0.0002 0 0.0002 23.9999 37.8812 23.9999 37.8812 0"></polygon>
                            </defs>
                            <g id="Nav/320/Closed" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-79.000000, -19.000000)">
                                <g id="Logo/White" transform="translate(79.000000, 19.000000)">
                                    <g id="Page-1">
                                        <polygon id="Fill-1" fill="#FFFFFF" points="157.3587 0.4929 157.3587 8.0699 151.4597 0.4929 147.7537 0.4929 147.7537 14.8279 151.6847 14.8279 151.6847 6.9649 157.8297 14.8279 161.2897 14.8279 161.2897 0.4929"></polygon>
                                        <g id="Group-16">
                                            <path d="M139.3042,23.9342 C144.1702,23.9342 147.0962,21.6662 147.0962,17.7532 L147.0962,17.6872 C147.0962,14.0052 144.3672,12.7562 139.8302,11.6382 C138.0222,11.1782 137.6272,10.9482 137.6272,10.5862 L137.6272,10.5212 C137.6272,10.1592 137.9562,9.9612 138.6792,9.9612 C140.1922,9.9612 142.4932,10.5862 144.4002,11.6382 L146.7672,7.2002 C144.5972,5.8842 141.6712,5.1282 138.7122,5.1282 C134.0432,5.1282 130.8872,7.3312 130.8872,11.2772 L130.8872,11.3422 C130.8872,15.0572 133.6822,16.2742 138.2192,17.3922 C140.0272,17.8522 140.3562,18.0822 140.3562,18.4442 L140.3562,18.5102 C140.3562,18.9372 139.9942,19.1012 139.2712,19.1012 C137.2332,19.1012 134.8002,18.4442 132.6302,17.0962 L130.0992,21.3372 C132.6632,23.0462 135.8192,23.9342 139.3042,23.9342" id="Fill-2" fill="#FFFFFF"></path>
                                            <path d="M118.7378,12.986 C118.9678,11.342 119.8558,10.291 121.1048,10.291 C122.4198,10.291 123.4398,11.277 123.6038,12.986 L118.7378,12.986 Z M130.4088,15.025 C130.4088,9.567 127.4498,5.129 121.0718,5.129 C115.6798,5.129 111.8338,9.206 111.8338,14.565 L111.8338,14.63 C111.8338,20.219 115.8118,23.934 121.6958,23.934 C125.5758,23.934 128.1078,22.324 129.8828,20.022 L125.8718,16.833 C124.6888,18.049 123.5708,18.673 122.2228,18.673 C120.6118,18.673 119.3628,17.852 118.8368,16.274 L130.3768,16.274 C130.4088,15.88 130.4088,15.42 130.4088,15.025 Z" id="Fill-4" fill="#FFFFFF"></path>
                                            <path d="M80.3706,23.5075 L87.8336,23.5075 L87.8336,14.0055 C87.8336,12.4935 88.8196,11.6385 89.9046,11.6385 C90.9896,11.6385 91.8776,12.4935 91.8776,14.0055 L91.8776,23.5075 L99.3406,23.5075 L99.3406,14.0055 C99.3406,12.4935 100.3266,11.6385 101.4116,11.6385 C102.4956,11.6385 103.3846,12.4935 103.3846,14.0055 L103.3846,23.5075 L110.8476,23.5075 L110.8476,11.6715 C110.8476,7.6275 108.4806,5.1285 104.6336,5.1285 C101.8716,5.1285 100.0636,6.3785 98.5516,8.0875 C97.5646,6.1815 95.6906,5.1285 93.2586,5.1285 C90.7926,5.1285 88.9836,6.4775 87.8336,7.9555 L87.8336,5.5565 L80.3706,5.5565 L80.3706,23.5075 Z" id="Fill-6" fill="#FFFFFF"></path>
                                            <path d="M71.8604,16.8659 C71.8604,18.5759 70.8744,19.6279 69.5584,19.6279 C68.6054,19.6279 67.8494,18.9369 67.8494,17.8859 L67.8494,17.8189 C67.8494,16.7009 68.6714,15.8139 70.1504,15.8139 C70.7754,15.8139 71.4324,15.9449 71.8604,16.1099 L71.8604,16.8659 Z M77.3504,7.5949 C75.7724,6.0159 73.4054,5.2609 69.7564,5.2609 C66.6324,5.2609 64.2654,5.7859 62.1934,6.5759 L63.5094,11.5399 C65.0874,10.9149 66.6324,10.5209 68.4734,10.5209 C70.7754,10.5209 71.7944,11.4739 71.7944,13.1179 L71.7944,13.4139 C71.0054,13.0849 69.0654,12.7569 67.5534,12.7569 C63.3774,12.7569 60.7144,14.7619 60.7144,18.3449 L60.7144,18.4109 C60.7144,21.9619 63.1474,23.9339 66.5994,23.9339 C68.8354,23.9339 70.5124,23.0469 71.7614,21.6989 L71.7614,23.5079 L79.2244,23.5079 L79.2244,13.2819 C79.2244,10.6849 78.6984,8.9419 77.3504,7.5949 Z" id="Fill-8" fill="#FFFFFF"></path>
                                            <g id="Group-12" transform="translate(36.000000, 0.000000)">
                                                <mask id="mask-2" fill="white">
                                                    <use xlink:href="#path-1"></use>
                                                </mask>
                                                <g id="Clip-11"></g>
                                                <path d="M13.5571,23.9997 C17.7321,23.9997 21.2181,22.5867 23.7161,20.5487 L23.7161,9.8957 L12.5711,9.8957 L12.5711,14.8277 L16.5161,14.8277 L16.5161,17.1287 C15.9241,17.4577 15.2011,17.6547 13.8861,17.6547 C10.6641,17.6547 8.3951,15.4197 8.3951,12.1647 L8.3951,12.0987 C8.3951,8.9757 10.5651,6.6747 13.5571,6.6747 C15.4641,6.6747 17.1411,7.3967 18.6531,8.6797 L22.9601,3.4847 C20.4611,1.3147 17.2721,-0.0003 13.3281,-0.0003 C6.0611,-0.0003 0.6371,5.1287 0.6371,11.9997 L0.6371,12.0657 C0.6371,19.1997 6.3901,23.9997 13.5571,23.9997" id="Fill-10" fill="#FFFFFF" mask="url(#mask-2)"></path>
                                            </g>
                                            <g id="Group-15">
                                                <mask id="mask-4" fill="white">
                                                    <use xlink:href="#path-3"></use>
                                                </mask>
                                                <g id="Clip-14"></g>
                                                <path d="M13.0522,9.2389 C13.0522,10.8829 11.7372,11.7699 9.7642,11.7699 L7.6932,11.7699 L7.6932,6.6409 L9.7972,6.6409 C11.8352,6.6409 13.0522,7.4959 13.0522,9.1729 L13.0522,9.2389 Z M34.2692,14.4449 C33.3372,16.0199 32.1382,17.0959 30.0752,17.0959 C27.5442,17.0959 25.7682,14.9919 25.7682,11.9999 L25.7682,11.9339 C25.7682,9.1729 27.4782,6.9039 30.0752,6.9039 C32.1792,6.9039 33.3952,8.0539 34.2502,9.6979 C34.7122,6.9359 35.9972,4.5099 37.8802,2.6319 C35.9472,0.9999 33.3942,-0.0001 30.1742,-0.0001 C25.8502,-0.0001 22.1282,2.0329 19.9602,5.2509 C18.5422,2.0829 15.0162,0.4929 10.3562,0.4929 L0.0002,0.4929 L0.0002,23.5079 L7.6932,23.5079 L7.6932,17.2599 L10.1922,17.2599 C13.5722,17.2599 16.3612,16.3789 18.2082,14.6849 C19.3812,20.3489 24.3172,23.9999 29.8782,23.9999 C33.3982,23.9999 35.9702,22.9389 37.8812,21.3289 C36.0212,19.4889 34.7462,17.1279 34.2692,14.4449 Z" id="Fill-13" fill="#FFFFFF" mask="url(#mask-4)"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section mt-3 pt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mb-5 font-weight-bold">{{ __('pages.about.why') }}</h1>
                </div>
                <div class="col-md-4 mb-3">
                    <p class="lead" style="font-weight: 500">{!! __('pages.about.multiplayer') !!}</p>
                </div>
                <div class="col-md-4 mb-3">
                    <p class="lead" style="font-weight: 500">{!! __('pages.about.opensource') !!}</p>
                </div>
                <div class="col-md-4 mb-3">
                    <p class="lead" style="font-weight: 500">{!!  __('pages.about.servers') !!}</p>
                </div>
            </div>

        </div>
    </div>

    <div class="section dark-section">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mb-5 mt-4 font-weight-bold">{{ __('pages.about.metrics') }}</h1>
                </div>
                <div class="col-md-4 mb-3">
                    <h1 class="font-weight-bold">{{ __('pages.about.download_count') }}</h1>
                    <h6>{{ __('pages.about.downloads') }}</h6>
                </div>
                <div class="col-md-4 mb-3">
                    <h1 class="font-weight-bold">{{ __('pages.about.user_count') }}</h1>
                    <h6>{{ __('pages.about.users') }}</h6>
                </div>
                <div class="col-md-4 mb-3">
                    <h1 class="font-weight-bold">{{ __('pages.about.discord_members') }}</h1>
                    <h6>{{ __('pages.about.discord') }}</h6>
                </div>
            </div>


            <div class="row d-flex mb-4 mt-2">
                <div class="col-md-12">
                    <h3 class="mb-4 mt-4 font-weight-bold"></h3>
                </div>
                <div class="col-md-2 col-6 text-center mb-3 my-auto">
                    <a href="https://www.pcgameshardware.de/Subnautica-Spiel-55121/News/Nitrox-Mod-Multiplayer-Coop-1272188/" target="_blank">
                        <img src="{{ asset('/assets/img/press/PCGH_Logo.png') }}" alt="PC Games Hardware" class="img-fluid">
                    </a>
                </div>

                <div class="col-md-2 col-6 text-center mb-3 my-auto">
                    <a href="https://www.pcgamer.com/play-subnautica-in-co-op-with-this-new-mod/" target="_blank">
                        <img src="{{ asset('/assets/img/press/PC_Gamer_logo.png') }}" alt="PC Gamer" class="img-fluid">
                    </a>
                </div>

                <div class="col-md-2 col-6 text-center mb-3 my-auto">
                    <a href="https://zinegaming.com/2020/03/07/subnautica-multiplayer-mod-nitrox-released-for-the-latest-version/" target="_blank">
                        <img src="{{ asset('/assets/img/press/zine-2.png') }}" alt="ZineGaming" class="img-fluid">
                    </a>
                </div>

                <div class="col-md-2 col-6 text-center mb-3 my-auto">
                    <a href="https://www.pcgamesn.com/subnautica/subnautica-nitrox-mod" target="_blank">
                        <svg width="162px" height="24px" viewBox="0 0 162 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 48.2 (47327) - http://www.bohemiancoding.com/sketch -->
                            <title>PCGN_NavLogo</title>
                            <desc>Created with Sketch.</desc>
                            <defs>
                                <polygon id="path-1" points="0.6371 0 23.7161 0 23.7161 23.9997 0.6371 23.9997"></polygon>
                                <polygon id="path-3" points="37.8812 0 0.0002 0 0.0002 23.9999 37.8812 23.9999 37.8812 0"></polygon>
                            </defs>
                            <g id="Nav/320/Closed" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(-79.000000, -19.000000)">
                                <g id="Logo/White" transform="translate(79.000000, 19.000000)">
                                    <g id="Page-1">
                                        <polygon id="Fill-1" fill="#f65002" points="157.3587 0.4929 157.3587 8.0699 151.4597 0.4929 147.7537 0.4929 147.7537 14.8279 151.6847 14.8279 151.6847 6.9649 157.8297 14.8279 161.2897 14.8279 161.2897 0.4929"></polygon>
                                        <g id="Group-16">
                                            <path d="M139.3042,23.9342 C144.1702,23.9342 147.0962,21.6662 147.0962,17.7532 L147.0962,17.6872 C147.0962,14.0052 144.3672,12.7562 139.8302,11.6382 C138.0222,11.1782 137.6272,10.9482 137.6272,10.5862 L137.6272,10.5212 C137.6272,10.1592 137.9562,9.9612 138.6792,9.9612 C140.1922,9.9612 142.4932,10.5862 144.4002,11.6382 L146.7672,7.2002 C144.5972,5.8842 141.6712,5.1282 138.7122,5.1282 C134.0432,5.1282 130.8872,7.3312 130.8872,11.2772 L130.8872,11.3422 C130.8872,15.0572 133.6822,16.2742 138.2192,17.3922 C140.0272,17.8522 140.3562,18.0822 140.3562,18.4442 L140.3562,18.5102 C140.3562,18.9372 139.9942,19.1012 139.2712,19.1012 C137.2332,19.1012 134.8002,18.4442 132.6302,17.0962 L130.0992,21.3372 C132.6632,23.0462 135.8192,23.9342 139.3042,23.9342" id="Fill-2" fill="#FFFFFF"></path>
                                            <path d="M118.7378,12.986 C118.9678,11.342 119.8558,10.291 121.1048,10.291 C122.4198,10.291 123.4398,11.277 123.6038,12.986 L118.7378,12.986 Z M130.4088,15.025 C130.4088,9.567 127.4498,5.129 121.0718,5.129 C115.6798,5.129 111.8338,9.206 111.8338,14.565 L111.8338,14.63 C111.8338,20.219 115.8118,23.934 121.6958,23.934 C125.5758,23.934 128.1078,22.324 129.8828,20.022 L125.8718,16.833 C124.6888,18.049 123.5708,18.673 122.2228,18.673 C120.6118,18.673 119.3628,17.852 118.8368,16.274 L130.3768,16.274 C130.4088,15.88 130.4088,15.42 130.4088,15.025 Z" id="Fill-4" fill="#FFFFFF"></path>
                                            <path d="M80.3706,23.5075 L87.8336,23.5075 L87.8336,14.0055 C87.8336,12.4935 88.8196,11.6385 89.9046,11.6385 C90.9896,11.6385 91.8776,12.4935 91.8776,14.0055 L91.8776,23.5075 L99.3406,23.5075 L99.3406,14.0055 C99.3406,12.4935 100.3266,11.6385 101.4116,11.6385 C102.4956,11.6385 103.3846,12.4935 103.3846,14.0055 L103.3846,23.5075 L110.8476,23.5075 L110.8476,11.6715 C110.8476,7.6275 108.4806,5.1285 104.6336,5.1285 C101.8716,5.1285 100.0636,6.3785 98.5516,8.0875 C97.5646,6.1815 95.6906,5.1285 93.2586,5.1285 C90.7926,5.1285 88.9836,6.4775 87.8336,7.9555 L87.8336,5.5565 L80.3706,5.5565 L80.3706,23.5075 Z" id="Fill-6" fill="#FFFFFF"></path>
                                            <path d="M71.8604,16.8659 C71.8604,18.5759 70.8744,19.6279 69.5584,19.6279 C68.6054,19.6279 67.8494,18.9369 67.8494,17.8859 L67.8494,17.8189 C67.8494,16.7009 68.6714,15.8139 70.1504,15.8139 C70.7754,15.8139 71.4324,15.9449 71.8604,16.1099 L71.8604,16.8659 Z M77.3504,7.5949 C75.7724,6.0159 73.4054,5.2609 69.7564,5.2609 C66.6324,5.2609 64.2654,5.7859 62.1934,6.5759 L63.5094,11.5399 C65.0874,10.9149 66.6324,10.5209 68.4734,10.5209 C70.7754,10.5209 71.7944,11.4739 71.7944,13.1179 L71.7944,13.4139 C71.0054,13.0849 69.0654,12.7569 67.5534,12.7569 C63.3774,12.7569 60.7144,14.7619 60.7144,18.3449 L60.7144,18.4109 C60.7144,21.9619 63.1474,23.9339 66.5994,23.9339 C68.8354,23.9339 70.5124,23.0469 71.7614,21.6989 L71.7614,23.5079 L79.2244,23.5079 L79.2244,13.2819 C79.2244,10.6849 78.6984,8.9419 77.3504,7.5949 Z" id="Fill-8" fill="#FFFFFF"></path>
                                            <g id="Group-12" transform="translate(36.000000, 0.000000)">
                                                <mask id="mask-2" fill="white">
                                                    <use xlink:href="#path-1"></use>
                                                </mask>
                                                <g id="Clip-11"></g>
                                                <path d="M13.5571,23.9997 C17.7321,23.9997 21.2181,22.5867 23.7161,20.5487 L23.7161,9.8957 L12.5711,9.8957 L12.5711,14.8277 L16.5161,14.8277 L16.5161,17.1287 C15.9241,17.4577 15.2011,17.6547 13.8861,17.6547 C10.6641,17.6547 8.3951,15.4197 8.3951,12.1647 L8.3951,12.0987 C8.3951,8.9757 10.5651,6.6747 13.5571,6.6747 C15.4641,6.6747 17.1411,7.3967 18.6531,8.6797 L22.9601,3.4847 C20.4611,1.3147 17.2721,-0.0003 13.3281,-0.0003 C6.0611,-0.0003 0.6371,5.1287 0.6371,11.9997 L0.6371,12.0657 C0.6371,19.1997 6.3901,23.9997 13.5571,23.9997" id="Fill-10" fill="#FFFFFF" mask="url(#mask-2)"></path>
                                            </g>
                                            <g id="Group-15">
                                                <mask id="mask-4" fill="white">
                                                    <use xlink:href="#path-3"></use>
                                                </mask>
                                                <g id="Clip-14"></g>
                                                <path d="M13.0522,9.2389 C13.0522,10.8829 11.7372,11.7699 9.7642,11.7699 L7.6932,11.7699 L7.6932,6.6409 L9.7972,6.6409 C11.8352,6.6409 13.0522,7.4959 13.0522,9.1729 L13.0522,9.2389 Z M34.2692,14.4449 C33.3372,16.0199 32.1382,17.0959 30.0752,17.0959 C27.5442,17.0959 25.7682,14.9919 25.7682,11.9999 L25.7682,11.9339 C25.7682,9.1729 27.4782,6.9039 30.0752,6.9039 C32.1792,6.9039 33.3952,8.0539 34.2502,9.6979 C34.7122,6.9359 35.9972,4.5099 37.8802,2.6319 C35.9472,0.9999 33.3942,-0.0001 30.1742,-0.0001 C25.8502,-0.0001 22.1282,2.0329 19.9602,5.2509 C18.5422,2.0829 15.0162,0.4929 10.3562,0.4929 L0.0002,0.4929 L0.0002,23.5079 L7.6932,23.5079 L7.6932,17.2599 L10.1922,17.2599 C13.5722,17.2599 16.3612,16.3789 18.2082,14.6849 C19.3812,20.3489 24.3172,23.9999 29.8782,23.9999 C33.3982,23.9999 35.9702,22.9389 37.8812,21.3289 C36.0212,19.4889 34.7462,17.1279 34.2692,14.4449 Z" id="Fill-13" fill="#FFFFFF" mask="url(#mask-4)"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>

                <div class="col-md-2 col-6 text-center mb-3 my-auto">
                    <a href="https://www.thegamer.com/subnautica-how-play-multiplayer-nitrox-mod/" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" id="_15_-_TheGamer" data-name="15 - TheGamer" viewBox="0 0 316.58 66.71"><defs><style>.cls-1,.cls-2{fill:none;stroke:#f60;stroke-linejoin:round;}.cls-1{stroke-width:4.48px;}.cls-2{stroke-width:2.69px;}.cls-3{fill:#fff;}</style></defs><title>tg-logo-full-colored-light</title><path class="cls-1" d="M465.77,1832.37l-3.45-3.45a2.69,2.69,0,0,1,0-3.8l3.43-3.43" transform="translate(-459.3 -1793.68)"/><path class="cls-2" d="M470,1817.44l3-3a2.69,2.69,0,0,1,3.8,0l10.67,10.67a2.69,2.69,0,0,1,0,3.8l-10.67,10.67a2.69,2.69,0,0,1-3.8,0l-3-3" transform="translate(-459.3 -1793.68)"/><path class="cls-1" d="M519.53,1821.67l3.45,3.45a2.69,2.69,0,0,1,0,3.8l-3.43,3.43" transform="translate(-459.3 -1793.68)"/><path class="cls-2" d="M515.3,1836.6l-3,3a2.69,2.69,0,0,1-3.8,0l-10.67-10.67a2.69,2.69,0,0,1,0-3.8l10.67-10.67a2.69,2.69,0,0,1,3.8,0l3,3" transform="translate(-459.3 -1793.68)"/><path class="cls-1" d="M487.3,1800.15l3.45-3.45a2.69,2.69,0,0,1,3.8,0l3.43,3.43" transform="translate(-459.3 -1793.68)"/><path class="cls-2" d="M502.23,1804.38l3,3a2.69,2.69,0,0,1,0,3.8l-10.67,10.67a2.69,2.69,0,0,1-3.8,0l-10.67-10.67a2.69,2.69,0,0,1,0-3.8l3-3" transform="translate(-459.3 -1793.68)"/><path class="cls-1" d="M498,1853.91l-3.45,3.45a2.69,2.69,0,0,1-3.8,0l-3.43-3.43" transform="translate(-459.3 -1793.68)"/><path class="cls-2" d="M483.07,1849.68l-3-3a2.69,2.69,0,0,1,0-3.8l10.67-10.67a2.69,2.69,0,0,1,3.8,0l10.67,10.67a2.69,2.69,0,0,1,0,3.8l-3,3" transform="translate(-459.3 -1793.68)"/><path class="cls-3" d="M560.32,1811.52v6h-10.8v21.59h-6v-21.59h-10.8v-6h27.57Z" transform="translate(-459.3 -1793.68)"/><path class="cls-3" d="M590.6,1811.52v27.57h-5.94v-10.8H568.39v10.8h-5.93v-27.57h5.93v10.8h16.27v-10.8h5.94Z" transform="translate(-459.3 -1793.68)"/><path class="cls-3" d="M619.77,1817.49H600.32v4.82H616v6H600.32v4.82h19.45v6H594.31v-27.57h25.46v6Z" transform="translate(-459.3 -1793.68)"/><path class="cls-3" d="M650.36,1819.79h-6v-2.3H628.72v15.62h15.62V1829h-6v-6h12v10.41a5.69,5.69,0,0,1-5.71,5.67h-16.2a5.65,5.65,0,0,1-5.67-5.67v-16.23a5.65,5.65,0,0,1,5.67-5.67h16.2a5.69,5.69,0,0,1,5.71,5.67v2.6Z" transform="translate(-459.3 -1793.68)"/><path class="cls-3" d="M675.74,1811.52a5.69,5.69,0,0,1,5.7,5.67v21.9h-6v-8.88H659.81v8.88h-5.93v-21.9a5.65,5.65,0,0,1,5.67-5.67h16.2Zm-0.31,12.71v-6.74H659.81v6.74h15.62Z" transform="translate(-459.3 -1793.68)"/><path class="cls-3" d="M709.81,1811.52H716v27.57h-6V1820.6c-3.1,3.68-6.43,7.73-9.5,11.33l-9.53-11.3v18.45H685v-27.57h6.13l9.34,11.14Z" transform="translate(-459.3 -1793.68)"/><path class="cls-3" d="M745.33,1817.49H725.88v4.82h15.66v6H725.88v4.82h19.45v6H719.87v-27.57h25.46v6Z" transform="translate(-459.3 -1793.68)"/><path class="cls-3" d="M775.88,1824.35a5.71,5.71,0,0,1-5.7,5.67h-0.27c2,2.3,4.06,4.75,6,7v2h-6.13l-7.62-9.07-7.89,0q0.11,0,.11.23a0.19,0.19,0,0,1-.11,0v8.84h-5.94v-27.53h21.86a5.71,5.71,0,0,1,5.7,5.67v7.12Zm-21.63-.31h15.62v-6.55H754.25V1824Z" transform="translate(-459.3 -1793.68)"/></svg>
                    </a>
                </div>



            </div>
        </div>
    </div>


    <div class="section pt-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center mb-5">
                    <span class="badge badge-primary mb-3">{{ __('pages.about.download_title') }}</span>
                    <h1>{{ __('pages.about.download_header') }}</h1>
                    <p class="lead pt-2">{{ __('pages.about.download_description') }}</p>
                    <a href="{{ route('download') }}" class="btn ripple btn-lg btn-primary btn-rounded mt-3 mb-4"  style="animation-delay: .1s;">Download</a>
                    <p class="text-muted">{{ __('pages.about.version') }}{{ $version['version'] }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{ asset('/assets/img/launcher-cut.png') }}" class="img-fluid" alt="Nitrox Launcher">
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
