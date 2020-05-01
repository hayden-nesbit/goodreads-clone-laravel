<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Resources\Book as BookResource;
use App\Http\Resources\BookCollection;

class BookController extends Controller
{
    public function index() {
        return new BookCollection(Book::all());
    }
}
