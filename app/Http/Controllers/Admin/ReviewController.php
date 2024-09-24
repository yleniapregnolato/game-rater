<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index() {
        return view('admin.reviews.index');
    }

    public function create() {
        return view("admin.reviews.create");
    }

}
