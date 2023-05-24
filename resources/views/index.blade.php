@extends('master')
@section('card_content')
<div class="row d-flex justify-content-center">
    <p class="fs-2 bg-secondary text-white">{{$title}}</p>
    <div class="row d-flex justify-content-center">
      @if ($books->count())
        @foreach ($books as $book)
          <div class="card mx-1 my-1" style="width: 15rem;">
            <img src="{{ $book->image }}" class="card-img-top pt-2" alt="...">
            <div class="card-body">
              <h5 class="card-title text-truncate">{{ $book->title }}</h5>
              <p class="card-text text-truncate">
                <span>by</span>
                <br>
                <span>{{ $book->author }}</span>
              </p>
              <a href="/detail/{{ $book->id }}" class="btn btn-primary">Detail</a>
            </div>
          </div>
        @endforeach   
      @else
        <h1>HAHA</h1> 
      @endif  
      
        
    </div>
</div>

@endsection