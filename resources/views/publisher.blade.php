@extends('master')
@section('card_content')
<div class="row d-flex justify-content-center">
    <p class="fs-2 bg-secondary text-white">{{ $title }}</p>
    <div class="row d-flex justify-content-center">
      @foreach($publisher as $publish)
        <div class="card mx-1 my-1" style="width: 15rem;">
            <img src="{{ $publish->image }}" class="card-img-top pt-2" alt="...">
            <div class="card-body">
              <h5 class="card-title text-truncate">{{ $publish->name }}</h5>
              <p class="card-text">{{ $publish->address }}</p>
              <a href="/publisher/{{ $publish->id }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
      @endforeach
    </div>
</div>
@endsection
