<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Game;

class ReviewController extends Controller
{
    public function index()
    {
        return view('admin.reviews.index');
    }

    public function create()
    {
        $games = Game::all();
        return view('admin.reviews.create', compact('games'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'max:255', 'min:5', 'unique:reviews'],
            'review' => ['nullable', 'min:10', 'max:5000'],
        ]);

        $review = new Review();
        $review->fill($validatedData);
        $review->slug = Str::slug($validatedData['title']);
        $review->save();
        return redirect()->route('admin.reviews.index')->with('success', 'Recensione salvata con successo!');
    }

    public function show(Review $review)
    {
        return view('admin.reviews.show', compact('review'));
    }
}
