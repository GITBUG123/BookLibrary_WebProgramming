<footer class="bg-lightblue">
    <div class="container p-4">
        <div class="row ">
            <div class="col-5 align-self-center">
                <nav class="navbar navbar-expand-lg justify-content-center">
                    <ul class="navbar-nav pb-2">
                        <li class="nav-item">
                            <a class="nav-link fs-5 fw-semibold text-white p-0" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5 fw-semibold text-white p-0 ps-2 pe-2">/</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5 fw-semibold text-white p-0" href="/contact">Contact Us</a>
                        </li>
                    </ul>
                </nav>
                <a class="nav-link fs-4 fw-semibold" href="/"><h1 class="text-center m-0 pb-2 text-white">Giant Book Supplier</h1></a>
                <p class="pt-2 m-0 text-center text-muted fw-semibold fs-8">&copy; Happy Book Store 2022</p>
                <p class=" m-0 text-center text-muted fw-semibold fs-8">|| 2440094516 - Felice Cendekia ||</p>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-5 ps-3 pe-3 m-0">
                        <ul class="list-unstyled m-0">
                            <p class="fw-bolder fs-5 border-bottom border-1 border-secondary text-white">Category</p >
                            @foreach ($categoriesData as $category)
                                <li class="nav-item mb-2">
                                    <a class="nav-link text-white fs-6" href="{{route('book_category_list', ['id' => $category->id])}}">{{ $category->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-5 ps-3 pe-3 m-0">
                        <ul class="list-unstyled m-0">
                            <p class="fw-bolder fs-5 border-bottom border-1 border-secondary text-white">Publishers</p >
                            @foreach ($publishersData as $publisher)
                                <li class="nav-item mb-2">
                                    <a class="nav-link text-white fs-6" href="{{route('publisher_Detail', ['id' => $publisher->id])}}">{{$publisher->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
