@extends('master')
@section('card_content')
    <div class="col">
        <div class="row">
            <p class="fs-2 bg-secondary text-white">{{ $title }}</p>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 border">
                <img class="mt-2" src="{{ $book->image }}" alt="" width="100%" height="1000px">
                <p class="mt-3">Title: {{ $book->title }}</p>
                <p>Author: {{ $book->author }}</p>
                <p>Publisher: {{ $book->publisher->name }}</p> 
                <p>Year: {{ $book->year }}</p>
                <p>Synopsis:</p>
                <p>{{ $book->synopsis }}</p>
                
            </div>
        </div>
    </div>
@endsection