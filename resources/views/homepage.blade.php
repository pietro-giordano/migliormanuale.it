@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">

        <h2>Ultimi libri inseriti</h2>

        <div class="col mt-2">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Titolo</th>
                        <th scope="col">Autore</th>
                        <th scope="col">Rating</th>
                        <th scope="col">Data inserimento</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td scope="row">
                                <a href="{{ route('books.show', $book->slug) }}">
                                    {{ $book->title }}
                                </a>
                            </td>
                            <td>
                                {{ $book->author }}
                            </td>
                            <td>
                                {{ $book->rating }}
                            </td>
                            <td>
                                {{ $book->created_at }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection