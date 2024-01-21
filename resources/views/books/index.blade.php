<!-- @extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">{{ __('Books') }}</div>

        <div class="card-body">
            <a href="{{route('books.create')}}" class="btn btn-primary">Create New Book</a>
            <div class="mt-3">
                <h3>List of Books</h3>
                <ul class="list-group">
                    @forelse($books as $book)
                        <li class="list-group-item">
                            {{$book->name}} | {{$book->author->name}}
                            <span class="float-right d-flex">
                                <a href="{{route('books.edit', [$book])}}"
                                   class="btn btn-warning btn-sm mr-2">Edit</a>
                                <form action="{{route('books.destroy', [$book])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </span>
                        </li>
                    @empty
                        <li class="list-group-item">No Books Added Yet</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection -->

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>How to Join Table in Laravel 8 using Eloquent Model</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">    
            <br />
            <h1 class="text-center text-primary">How to Join Multiple Table in Laravel 8 using Eloquent Model</h1>
            <br />
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Buku</th>
                            <th>Nama Author</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                            <tr>
                                <td>{{$book->name}} </td>
                                <td>{{$book->author->name}}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html