<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </head>

    <style>
        .bg-lightblue{
            background-color: #11151B
        }
        .color-dark{
            background-color: #3F3F3F
        }
        .color-2{
            background-color: #252733
        }
        .border-end{
            border-color: #3F3F3F !important;
        }
        .zoom {
            transition: transform .2s;
        }
        .zoom:hover {
            transform: scale(1.1);
        }
        hr{
            border-width: 4px;
            color: white;
            opacity: 100%!important,
        }
        .bgimg{
            background-image: url(https://thumbs.gfycat.com/ConcernedNaughtyDanishswedishfarmdog-max-1mb.gif);
            background-attachment: fixed;
            background-size: cover;
        }
        a{
            text-decoration: none;
            color: black;
        }
    </style>

    <p class="fw-bolder fs-3 d-flex justify-content-center text-white color-2 m-0 p-3">Giant Book Supplier</p>
    @include('layouts.navbar')

    <body>
        <div class="bgimg">
            @yield('container')
        </div>
    </body>

    @include('layouts.footer')
</html>


