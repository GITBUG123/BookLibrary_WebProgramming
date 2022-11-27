<nav class="navbar navbar-expand-lg navbar-light bg-lightblue sticky-top shadow-sm m-0 p-0">
    <div class="container">
        <div class="p-2 d-flex">
            <a class="navbar-brand fs-4 fw-semibold me-3 text-white" href="/">Home</a>
            <ul class="border-start border-2 ps-2 navbar-nav m-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle show fs-5 fw-semibold text-white" href="#" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                    <ul class="dropdown-menu mt-2 rounded" aria-labelledby="dropdownMenuButton">
                        @foreach ($categoriesData as $category)
                        <li>
                            <a class="dropdown-item" href="{{route('book_category_list', ['id' => $category->id])}}">{{$category->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 fw-semibold text-white" href="/publishers">Publisher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 fw-semibold text-white" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
        <div class="ms-auto p-2">
            <form class="form" method="get" action="{{route('search_book')}}">
                @csrf
                <div class="form-group d-flex">
                    <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Book Name">
                    <button type="submit" class="btn btn-outline-secondary color-dark text-white fw-semibold">Search</button>
                </div>
            </form>
        </div>
    </div>
</nav>
