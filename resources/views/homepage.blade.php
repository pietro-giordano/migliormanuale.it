@extends('layouts.app')
@section('content')

<div class="container my-5">
    <div class="row">

        <h2>Ultimi libri inseriti</h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Data inserimento</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td scope="row">
                            <a href="#">
                                {{ $book->title }}
                            </a>
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
@endsection