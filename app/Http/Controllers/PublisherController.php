<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function gbContact()
    {
        return view('contact');
    }

    public function index()
    {
        $publishers = Publisher::paginate(8);
        return view('publisherList', compact('publishers'));
    }

    public function showPublisherDetail(Request $request)
    {
        $publisher = Publisher::find($request->id);
        return view('publisherDetail', compact('publisher'));
    }
}
