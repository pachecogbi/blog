@extends('templates.template')

@section('content')
    <h1 class="text-center">Register</h1>
    <hr>

    <div class="col-8 m-auto">
        <form class="form-control" action="{{ url('books') }}" name="formCad" id="formCad" method="POST">
            @csrf
            <div class="col-6 m-auto mt-3 mb-3">
                <input class="form-control" type="text" name="title" id="title" placeholder="Title:">
            </div>
            <div class="col-6 m-auto mt-3 mb-3">
                <select class="form-control" name="id_user" id="id_user">
                    <option value="">Author</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 m-auto mt-3 mb-3">
                <input class="form-control" type="text" name="pages" id="pages" placeholder="Pages:">
            </div>
            <div class="col-6 m-auto mt-3 mb-3">
                <input class="form-control" type="text" name="price" id="price" placeholder="Price:">
            </div>
            <div class="col-6 m-auto mt-3 mb-3">
                <input class="form-control btn btn-primary" type="submit" value="REGISTER">
            </div>
        </form>
    </div>
@endsection
