<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCategory;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(8);
        return view('booksList', compact('books'));
    }

    public function searchBook(Request $request)
    {
        $books = Book::where('title', 'LIKE', "%$request->search%")->paginate(8)->withQueryString();
        return view('booksList', compact('books'));
    }

    public function showBookDetails(Request $request)
    {
        $showBookCategorylist = Book::select('book_categories.book_id as BCBID', 'book_categories.category_id as BCCID', 'books.publisher_id as publisher_id', 'publishers.name as publisher_name', 'books.title as title', 'books.author as author', 'books.year as year', 'books.synopsis as synopsis', 'books.image as image', 'categories.id as CID', 'categories.name as name')->join('book_categories', 'books.id', '=', 'book_categories.book_id')->join('categories', 'book_categories.category_id', '=', 'categories.id')->join('publishers', 'books.publisher_id', '=', 'publishers.id')->where('book_categories.book_id','=', $request->id)->distinct()->groupby('book_categories.book_id', 'book_categories.category_id', 'books.publisher_id', 'publishers.name', 'books.title', 'books.author', 'books.year', 'books.synopsis', 'books.image', 'categories.id', 'categories.name')->get();
        return view('bookDetail', compact('showBookCategorylist'));
    }
}
