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

            <div class="mt-3">
                <h4>Descrizione:</h4>
                <p>{{ $book->description }}</p>
            </div>

            <div class="mt-3">
                <h4>Rating:</h4>
                <div>{{ $book->rating }} su {{ $book->votes }}</div>
            </div>

            <div class="mt-3">
                <h4>Topics:</h4>
                @foreach ($book->topics as $topic)
                    <a class="badge bg-secondary" href="#">{{ $topic->name }}</a>
                @endforeach
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