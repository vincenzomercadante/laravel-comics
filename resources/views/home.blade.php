@extends('layout.app')

@section('title', 'COMICS - HOME')

@section('main-content')
<main class="home">
    <div class="container">
        <h1 class="text-uppercase">current series</h1>
        
        <div class="row gy-5">
            @foreach ($comics as $comic)
            <div class="col-2">
                <div class="card-custom">
                    <div class="img-container">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <h3 class="mt-3 text-uppercase">{{$comic['series']}}</h3>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-2">
                <div class="btn-custom text-center text-uppercase">load more</div>
            </div>
        </div>
    </div>
</main>

@endsection