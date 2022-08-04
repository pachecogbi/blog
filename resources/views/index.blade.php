@extends('templates.template')

@section('content')
    <h1 class="text-center">Crud</h1>
    <hr>

    <div class="text-center mt-3 mb-4">
        <a href="{{url('books/create')}}">
            <button class="btn btn-success">REGISTER</button>
        </a>
    </div>

    <div class="col-8 m-auto">
        <table class="table text-center">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">TITLE</th>
                <th scope="col">AUTHOR</th>
                <th scope="col">PRICE</th>
                <th scope="col">ACTIONS</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                @php
                    $user = $book->find($book->id)->relUsers;
                @endphp
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->title}}</td>
                    <td>{{$user->name}}</td>
                    <td>${{$book->price}}</td>
                    <td>
                        <a href="{{url("books/$book->id")}}">
                            <button class="btn btn-dark">VIEW</button>
                        </a>
                        <a href="">
                            <button class="btn btn-primary">EDIT</button>
                        </a>
                        <a href="">
                            <button class="btn btn-danger">DELETE</button>
                        </a>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
