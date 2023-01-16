@extends('layout.main')

@section('title-page')
    HOME
@endsection

@section('content')
    <section class="container">
        <h1 class="text-center text-white">Lista Film</h1>
        <ul class="row">
            @foreach ($movies as $movie)
                <div class="ms_card card col-3 m-2" style="width: 18rem;">
                    <div class="card-body">
                        <h2 class="card-title">{{ $movie->title }}</h2>
                        <h3 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h3>
                        <p class="card-text">Lingua: {{ $movie->nationality }}</p>
                        <p class="card-text">Data di uscita: {{ $movie->date }}</p>
                        <p class="card-text">Voto: {{ $movie->vote }}</p>
                    </div>
                </div>
            @endforeach
        </ul>
    </section>
@endsection
