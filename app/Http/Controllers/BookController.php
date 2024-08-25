<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        return view('product.index');
    }
    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            "bookname"    => "required",
            "bookdesc"  => "required",
            "bookimg"  => "required|mimes:png,jpg",
        ]);
        
        $imageName = time().'.'.$request->bookimg->extension();
        $request->bookimg->move(public_path('bookimages'),$imageName);

        
        $books = new Book;

        $books->bookimg = $imageName;
        $books->bookname = $request->bookname;
        $books->bookdesc = $request->bookdesc;

        $books->save();
        return back()->withSuccess("Book Listed Successfuly!!!!!!!!!");

    }


        
        

    }


