@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        
        <div class="col-12">
            <h2>
                {{ $topic->name }}
            </h2>

            <div class="mt-3">
                <h4>Descrizione:</h4>
                <p>{{ $topic->description }}</p>
            </div>

            <div class="mt-3">
                <h4>Libri associati:</h4>
                <ul>
                    @foreach ($topic->books as $book)
                        <li>
                            <a href="{{ route('books.show', $book->slug) }}">{{ $book->title }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div>
            <a class="btn btn-primary" href="{{ url()->previous() }}">Torna indietro</a>
        </div>

    </div>
</div>
@endsection