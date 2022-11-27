@extends('layouts.home')
@section('title', $showBookCategorylist[0]->title)
@section('container')
<div class="container" style="min-height: 100vh">
    <h1 class="d-flex justify-content-center p-3 m-0 text-white">Book Detail</h1>
    <div class="row d-flex justify-content-center">
        <p class="border-bottom border-3 m-0 p-0" style="width: 30%"></p>
    </div>
    <div class="row d-flex justify-content-evenly mt-4 m-0 p-2 bg-light rounded">
        <div class="col-5 d-flex justify-content-center">
            <img src="{{$showBookCategorylist[0]->image}}" width="380px" height="510px">
        </div>
        <div class="col-6">
            <li class="list-group-item">
                <p class="fw-normal fs-6 p-0 m-0 text-muted text-uppercase">{{$showBookCategorylist[0]->author}}</p>
            </li>
            <li class="list-group-item ">
                <p class="fw-semibold fs-1 m-0 pb-2">{{$showBookCategorylist[0]->title}}</p>
                <div class="row">
                    <p class="border-bottom border-3 m-0 p-0" style="width: 50%"></p>
                </div>
            </li>
            <div class="pt-2 pb-2">
                @if (count($showBookCategorylist) < 1)
                    <a class="btn btn-outline-secondary btn-sm" disabled>No Category</a>
                @else
                    @foreach ($showBookCategorylist as $book)
                        <a class="btn btn-outline-secondary btn-sm" href="{{route('book_category_list', ['id' => $book->CID])}}">{{$book->name}}</a>
                    @endforeach
                @endif
            </div>
            <li class="list-group-item d-flex gap-2">
                <p class="fw-bold fs-5 pt-2 pb-2 m-0">Year:</p>
                <p class="fw-bold fs-5 pt-2 pb-2 m-0 text-muted">{{$showBookCategorylist[0]->year}}</p>
            </li>
            <li class="list-group-item d-flex gap-2">
                <p class="fw-bold fs-5 pt-2 pb-2 m-0">Published by:</p>
                <a href="{{route('publisher_Detail', ['id' => $showBookCategorylist[0]->publisher->id])}}">
                    <p class="fw-bold fs-5 pt-2 pb-2 m-0 text-muted">{{$showBookCategorylist[0]->publisher->name}}</p>
                </a>
            </li>
            <li class="list-group-item">
                <p class="fw-bold fs-5 pb-2 m-0">Synopsis:</p>
                <p class="fw-semibold fs-5 pb-2 m-0 text-muted">{{$showBookCategorylist[0]->synopsis}}</p>
            </li>
        </div>
    </div>
</div>
@endsection
