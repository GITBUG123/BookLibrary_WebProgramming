<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategoryList(Request $request)
    {
        $id = $request->id;
        $showCategoryBooklist = Category::select('books.id as id','books.publisher_id as publisher_id', 'books.title as title', 'books.author as author', 'books.year as year', 'books.synopsis as synopsis', 'books.image as image', 'categories.name as name')->join('book_categories', 'categories.id', '=', 'book_categories.category_id')->join('books', 'book_categories.book_id', '=', 'books.id')->where('book_categories.category_id','=', $id)->distinct()->get();
        return view('category', compact('showCategoryBooklist'));
    }
}
