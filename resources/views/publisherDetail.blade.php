@extends('layouts.home')
@section('title', $publisher->name)
@section('container')
<div class="container" style="min-height: 100vh">
    <h1 class="d-flex justify-content-center p-3 m-0 text-white">{{$publisher->name}}</h1>
    <div class="row d-flex justify-content-center">
        <p class="border-bottom border-3 m-0 p-0" style="width: 30%"></p>
    </div>
    <div class="d-flex justify-content-center">
        <div class="row d-flex justify-content-center p-3 m-3 bg-light rounded" style="width: 60%">
            <div class=" d-flex justify-content-evenly gap-3">
                <div class="col-3 border-end d-flex justify-content-evenly">
                    <img src="{{$publisher->image}}" width="120px" height="120px">
                </div>
                <div class="col align-self-center">
                    <p class="card-text pb-1 m-0"><span class="fw-bold">Address: </span>{{$publisher->address}}</p>
                    <p class="card-text pb-1 m-0 "><span class="fw-bold">Phone: </span>{{$publisher->phone}}</p>
                    <p class="card-text p-0 m-0 "><span class="fw-bold">Email: </span> {{$publisher->email}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-evenly m-0 mt-4">
        @if (count($publisher->books) < 1)
            <h1 class="text-center">No Published Book Found!!!</h1>
        @else
            @foreach ($publisher->books as $book)
                <div class="card mb-5 p-0 zoom" style="width: 15rem;">
                    <img class="card-img-top" src="{{$book->image}}" alt="Book" height="310px">
                    <div class="card-body d-grid text-center">
                        <h5 class="card-title text-center m-2">{{$book->title}}</h5>
                        <div class="overflow-hidden text-center m-2" style="max-height: 85px">
                            <p class="card-text">by {{$book->author}}</p>
                        </div>
                        <div class="d-flex justify-content-evenly align-self-end">
                            <a href="{{route('book_Detail', ['id' => $book->id])}}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection
