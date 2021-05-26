@extends('layouts.master')

@section('content')
    <!-- /*start features -->
    <div class="features txtCenter">
        <div class="container">

            <div class="row">
                <div class="col-sm-4 col-lg-4">

                    <h2>{{ $details->Kitchens->name .' '. $details->name }}</h2>

                    <iframe width="350" height="220" src="{{ $details->video }}" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>

                </div>
                <div class="col-sm-8 col-lg-8">

                    <div class="tab-content ">
                        <div class="tab-pane active container" id="tab1">
                            <div class="mt-2">
                                <h3 class="mainColor LogoFont"
                                    style="font-weight: bold; border-bottom: 4px solid; width: fit-content;">
                                    About :
                                </h3>
                                <p class="ml-3">
                                    {{ $details->About }}
                                </p>
                            </div>
                            <hr>
                            <div class="mt-2">
                                <h3 class="mainColor LogoFont"
                                    style="font-weight: bold; border-bottom: 4px solid; width: fit-content;">
                                    Ingrdients :
                                </h3>
                                <p class="ml-3">
                                    {{ $details->ingredients }}
                                </p>
                            </div>
                            <hr>
                            {{-- <p class="mt-3">
                            <h3 class="mainColor LogoFont"
                                style="font-weight: bold; border-bottom: 4px solid; width: fit-content;">
                                Direction :
                            </h3>
                            {{ $details->direction }}
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End features -->
@endsection
