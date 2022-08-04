@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($book)) Edit @else Register @endif</h1>
    <hr>

    <div class="col-8 m-auto">

        @if (@isset($errors) && count($errors) > 0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif
        @if(isset($book))
            <form class="form-control" action="{{ url("books/$book->id") }}" name="formEdit" id="formEdit" method="POST">
                @method('PUT')
        @else
            <form class="form-control" action="{{ url('books') }}" name="formCad" id="formCad" method="POST">
        @endif
            @csrf
            <div class="col-6 m-auto mt-3 mb-3">
                <input class="form-control" type="text" name="title" id="title" placeholder="Title:" value="{{$book->title ?? ''}}" required>
            </div>
            <div class="col-6 m-auto mt-3 mb-3">
                <select class="form-control" name="id_user" id="id_user" required>
                    <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Autor'}}</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 m-auto mt-3 mb-3">
                <input class="form-control" type="text" name="pages" id="pages" placeholder="Pages:" value="{{$book->pages ?? ''}}" required>
            </div>
            <div class="col-6 m-auto mt-3 mb-3">
                <input class="form-control" type="text" name="price" id="price" placeholder="Price:" value="{{$book->price ?? ''}}" required>
            </div>
            <div class="col-6 m-auto mt-3 mb-3">
                <input class="form-control btn btn-primary" type="submit" value="@if(isset($book)) EDIT @else REGISTER @endif">
            </div>
        </form>
    </div>
@endsection
