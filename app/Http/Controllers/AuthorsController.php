<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Author as AuthorResource;
use App\Http\Resources\AuthorCollection;

class AuthorsController extends Controller
{
    public function index() {
        return new AuthorCollection(Author::all());
    }
}
