@extends('layouts.app')

@section('content')
    <div class="comics-container py-4">
        <div class="container">
            <button class="btn btn-primary text-uppercase fw-bold">current series</button>
            <div class="row row-cols-6 g-3 mt-3">
                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $comic['thumb'] }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic['series'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justufy-content-center mt-3">
                <button class="btn btn-primary text-uppercase fw-bold m-auto">load more</button>
            </div>
        </div>
    </div>
    
@endsection