@extends('layouts.home')
@section('title', 'Publishers')
@section('container')
<div class="container p-0" style="min-height: 100vh">
    <h1 class="d-flex justify-content-center p-3 m-0 text-white">Publishers List</h1>
    <div class="row d-flex justify-content-center">
        <p class="border-bottom border-3 m-0 p-0" style="width: 30%"></p>
    </div>
    <div class="row d-flex justify-content-evenly m-0 mt-4">
        @if (count($publishers) < 1)
            <h1 class="d-flex justify-content-center p-3 m-0 text-secondary fs-5">No Publisher Found!!!</h1>
        @else
            @foreach ($publishers as $publisher)
            <div class="card mb-5 p-0 zoom" style="width: 14rem;">
                <a href="{{route('publisher_Detail', ['id' => $publisher->id])}}" >
                    <img class="card-img-top" src="{{$publisher->image}}" alt="Book" height="210px">
                    <div class="card-body d-grid">
                        <h5 class="card-title text-center text-black m-2">{{$publisher->name}}</h5>
                        <div class="overflow-hidden text-center m-2" style="max-height: 85px">
                            <p class="card-text text-center text-muted m-2 ">{{$publisher->address}}</p>
                        </div>
                        <div class="d-flex justify-content-center align-self-end">
                            <a href="{{route('publisher_Detail', ['id' => $publisher->id])}}" class="border-bottom border-primary border-2 text-black">More Detail...</a>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
            <div class="d-flex text-center justify-content-center p-3">
                {{ $publishers->links() }}
            </div>
        @endif
    </div>
</div>
@endsection
