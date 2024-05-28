<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            "review" => "required|string|max:255",
            "rating" => "required|numeric|between:1,5",
            "image" => "image|file|max:10000",
        ], [
            'review.required' => 'The review field is required!',
            'review.string' => 'The review field must be a string!',
            'review.max' => 'The review may not be greater than :max characters!',
            'rating.required' => 'The rating field is required!',
            'rating.numeric' => 'The rating must be a number!',
            'rating.between' => 'The rating must be between 1 and 5!',
            'image.image' => 'The file must be an image!',
            'image.max' => 'The maximum file size of the image is 10MB!',
        ]);

        $user_id = Auth::user()->id;
        $date = now();

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('images', ['disk' => 'public']);
            Review::create([
                'image' => $validatedData['image'],
                'review' => $validatedData['review'],
                'rating' => $validatedData['rating'],
                'date' => $date,
                'serviceOrder_id' => $id,
            ]);
        } else {
            Review::create([
                'review' => $validatedData['review'],
                'rating' => $validatedData['rating'],
                'date' => $date,
                'serviceOrder_id' => $id,
            ]);
        }
        return back()->with('addReview_success', 'Your review has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            "review" => "required|string|max:255",
            "rating" => "required|numeric|between:1,5",
            "image" => "image|file|max:10000",
        ], [
            'review.required' => 'Review wajib diisi!',
            'review.string' => 'Review wajib berupa karakter!',
            'review.max' => 'Maksimal :max karakter!',
            'rating.required' => 'Rating wajib diisi!',
            'rating.numeric' => 'Rating wajib berupa angka!',
            'rating.between' => 'Rating wajib berada dalam rentang 1 sampai 5!',
            'image.image' => 'File wajib berupa gambar!',
            'image.max' => 'Maksimal ukuran gambar 10MB!',
        ]);

        $date = now();
        $review = Review::where('serviceOrder_id', $id)->first();

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::disk('public')->delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('images', ['disk' => 'public']);

            $review->update([
                'image' => $validatedData['image'],
                'review' => $validatedData['review'],
                'rating' => $validatedData['rating'],
                'date' => $date,
            ]);
        } else {
            $review->update([
                'review' => $validatedData['review'],
                'rating' => $validatedData['rating'],
                'date' => $date
            ]);
        }

        return back()->with('updateReview_success', 'Your review has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $review = Review::where('id', $id)->first();
        if ($review->image != null) {
            Storage::disk('public')->delete($review->image);
        }
        $review->delete();
        return back()->with('deleteReview_success', 'Your review has been deleted!');
    }
}
