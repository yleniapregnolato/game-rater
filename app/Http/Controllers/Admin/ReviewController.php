<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ReviewController extends Controller
{
    public function index() {
        return view('admin.reviews.index');
    }

    public function create() {
        return view("admin.reviews.create");
    }

    public function store(Request $request) {
        $data = $request->all();
        $review = new Review();
        $review->fill($data);
        $review->slug = Str::slug($request->title);
        $review->save();

    }

}
