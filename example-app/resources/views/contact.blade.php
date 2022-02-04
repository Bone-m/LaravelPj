@extends('layouts.app')
@section('title')Contact
@endsection
@section('content')
    <h1>Написать отзыв:</h1>
    <form action="{{ route('contact-form')}}" method="post">


        @csrf
        <div class="form-group">
            <label for="email">Entre email</label>
            <input type="email" name="email" placeholder="Entre email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Entre name</label>
            <input type="text" name="name" placeholder="Entre name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Entre subject</label>
            <input type="text" name="subject" placeholder="Entre subject" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Entre message</label>
            <textarea name="message" placeholder="Entre message" id="message" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Отправить</button>

    </form>
@endsection
