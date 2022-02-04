@extends('layouts.app')
@section('title')Отзывы
@endsection
@section('content')
    <h1>Отзывы посетителей сайта:</h1>
    @foreach($data as $el)
        <div class="alert alert-light">
            <h3>
                {{ $el->subject }}
            </h3>
            <p>{{$el->email}}</p>
            <p><h4>{{$el->message}}</h4></p>
            <p><small>{{$el->created_at}}</small></p>

        </div>
    @endforeach
@endsection
