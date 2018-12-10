@extends('Layout.index')

@section('content')
    <!-- In Design Start -->
    <div class="col-md-6 col-xl-4">
            <div class="card bg-c-blue in-design-card">
                <div class="card-block p-b-10">
                    <p class="f-w-400 m-b-5">In design</p>
                    <h4 class="f-16 m-b-20">New Projects</h4>
                    <div class="inner-dark-card blue-drak-card">
                        <div class="row">
                            <div class="col-sm-6 b-r-default">
                                <h3 class="d-inline-block num-top">11,000</h3>
                                <p class="text-uppercase d-inline-block">Few Months <br>
                                    in Design</p>
                            </div>
                            <div class="col-sm-6">
                                <h3 class="d-inline-block m-r-20 m-b-0 num-top">19</h3>
                                <p class="text-uppercase d-inline-block">Days to <br>
                                    Finish</p>
                            </div>
                        </div>
                    </div>
                    <div class="f-right">
                        <canvas id="design-graph-1"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xl-4">
            <div class="card bg-c-pink in-design-card">
                <div class="card-block p-b-10">
                    <p class="f-w-400 m-b-5">Users</p>
                    <h4 class="f-16 m-b-20">News Users</h4>
                    <div class="inner-dark-card pink-drak-card">
                        <div class="row">
                            <div class="col-sm-6 b-r-default">
                                <h3 class="d-inline-block num-top">5,879</h3>
                                <p class="text-uppercase d-inline-block">Total Users <br>
                                    in Design</p>
                            </div>
                            <div class="col-sm-6">
                                <h3 class="d-inline-block m-r-20 m-b-0 num-top">28</h3>
                                <p class="text-uppercase d-inline-block">Days of <br>
                                Register</p>
                            </div>
                        </div>
                    </div>
                    <div class="f-right">
                        <canvas id="design-graph-2"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-xl-4">
            <div class="card bg-c-yellow in-design-card">
                <div class="card-block p-b-10">
                    <p class="f-w-400 m-b-5">Followers</p>
                    <h4 class="f-16 m-b-20">More Followers</h4>
                    <div class="inner-dark-card yellow-drak-card">
                        <div class="row">
                            <div class="col-sm-6 b-r-default">
                                <h3 class="d-inline-block num-top">5,000</h3>
                                <p class="text-uppercase d-inline-block">Followers <br>
                                    in Design</p>
                            </div>
                            <div class="col-sm-6">
                                <h3 class="d-inline-block m-r-20 m-b-0 num-top">in</h3>
                                <p class="text-uppercase d-inline-block">Few days<br>
                                    </p>
                            </div>
                        </div>
                    </div>
                    <div class="f-right">
                        <canvas id="design-graph-3"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <!-- In Design End -->

        <div class="col-md-6 col-xl-12 ">
                <div class="card ">
                    <div class="card-header">
                        <h5>Weather Today</h5>
                    </div>
                    <div class="card-block weather-update">

                        <div class="row">
                            <div class="col-md-12 text-center">
                                <svg version="1.1" id="cloudSun" class="climacon climacon_cloudSun" viewBox="15 15 70 70">
                                    <clipPath id="cloudFillClip">
                                        <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"/>
                                    </clipPath>
                                    <clipPath id="sunCloudFillClip">
                                        <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"/>
                                    </clipPath>
                                    <g class="climacon_iconWrap climacon_cloudSun-iconWrap">
                                        <g clip-path="url(#cloudFillClip)">
                                            <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud"  >
                                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-orth" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"/>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"/>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"/>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"/>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"/>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"/>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"/>
                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"/>
                                                </g>
                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                                    <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"/>
                                                </g>
                                            </g>
                                        </g>
                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M44.033,65.641c-8.836,0-15.999-7.162-15.999-15.998c0-8.835,7.163-15.998,15.999-15.998c6.006,0,11.233,3.312,13.969,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.26,65.641,47.23,65.641,44.033,65.641z"/>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="col-md-12 text-center">
                                <h2 class="p-b-30 f-w-400">23 ° C</h2>
                            </div>
                        </div>
                        <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
@endsection