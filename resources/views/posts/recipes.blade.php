@extends('layouts.master')

@section('content')

  <h2>{{$kitchenNm->name}} Kitchen</h2>
  <hr>

    <div class="row" style="margin: 0; padding: 0">
        <div class="col-md-10 card-deck">
            <div class="row">
                <div class="row" style="text-align: center;">
                    @foreach ($recipes as $recipe)
                        <div class="col-md-4">
                            <div class="card mb-2">
                                <div class="card-header bg-dark text-white">
                                    {{ $recipe->Kitchens->name }}
                                </div>

                                <div class="card-body">
                                    <div class="card-text">
                                        <img src="{{ asset('' . $recipe->image) }}" alt="" width="100%" height="200px">
                                    </div>

                                    <div class="card-header bg-light text-dark">
                                        {{ $recipe->name }}
                                    </div>

                                    <hr>
                                    <a href="{{ '/details/' . $recipe->id }}" class="btn btn-primary">Show more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="col-md-2">
            <div class="card ml-3" style="max-width: 15rem;">
                <div class="card-header bg-secondary text-white"> Stats.</div>
                <div class="card-body">
                    <p class="card-text"> Kitchens: {{ $count }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            {{ $recipes->links() }}
        </div>
    @endsection
