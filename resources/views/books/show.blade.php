@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        
        <div class="col-6">
            <h1>
                {{ $book->title }}
            </h1>

            <h3>
                {{ $book->author }}
            </h3>

            <div>
                <h4>Descrizione:</h4>
                <p>{{ $book->description }}</p>
            </div>

            <div>
                <h4>Rating:</h4>
                <div>{{ $book->rating }} su {{ $book->votes }}</div>
            </div>
        </div>

        <div class="col-6">
            <div>
                <img src="{{ $book->image }}" alt="Immagine non disponibile">
            </div>
        </div>

        <div>
            <a class="btn btn-primary" href="{{ url()->previous() }}">Torna indietro</a>
        </div>

    </div>
</div>
@endsection