@extends('layouts.home')
@section('title', $showCategoryBooklist[0]->name)
@section('container')
    <div class="container p-0" style="min-height: 100vh">
        <h1 class="d-flex justify-content-center p-3 m-0 text-white">{{$showCategoryBooklist[0]->name}}</h1>
        <div class="row d-flex justify-content-center">
            <p class="border-bottom border-3 m-0 p-0" style="width: 30%"></p>
        </div>
        <div class="row d-flex justify-content-evenly m-0 mt-4">
            @if (count($showCategoryBooklist) < 1)
                <h1>No Books Found!!!</h1>
            @else
                @foreach ($showCategoryBooklist as $book)
                    <div class="card mb-5 p-0 zoom" style="width: 15rem">
                        <img class="card-img-top" src="{{$book->image}}" alt="Book" height="310px">
                        <div class="card-body d-grid text-center">
                            <h5 class="card-title">{{$book->title}}</h5>
                            <div class="overflow-hidden mb-2" style="max-height: 85px">
                                <p class="card-text">by {{$book->author}}</p>
                            </div>
                            <div class="d-flex justify-content-center align-self-end">
                                <a href="{{route('book_Detail', ['id' => $book->id])}}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
