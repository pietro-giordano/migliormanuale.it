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
                <h5>Descrizione:</h5>
                <p>{{ $book->description }}</p>
            </div>

            <div class="mt-3">
                <livewire:rating-system :$book> 
            </div>

            <div class="mt-3">
                <h5>Topics:</h5>
                @foreach ($book->topics as $topic)
                    <a class="badge bg-secondary" href="{{ route('topics.show', $topic->slug) }}">{{ $topic->name }}</a>
                @endforeach
            </div>
        </div>

        <div class="col-6">
            <div>
                <img src="{{ $book->image }}" alt="Immagine non disponibile">
            </div>
        </div>

        <div>
            <a class="btn btn-primary" href="{{ route('homepage') }}">Torna indietro</a>
        </div>

    </div>
</div>
@endsection