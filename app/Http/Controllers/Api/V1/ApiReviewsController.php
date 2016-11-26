<?php

namespace App\Http\Controllers\Api\V1;

use App\Review;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ReviewsController;
use App\Http\Requests\StoreReviewsRequest;

use App\Http\Requests\UpdateReviewsRequest;

class ApiReviewsController extends Controller
{
    protected $reviews_controller;

    /**
     * ApiReviewsController constructor.
     * @param ReviewsController $item
     */
    public function __construct(ReviewsController $item)
    {
        $this->reviews_controller = $item;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return Review::all();
    }

    public function show($id)
    {
        return Review::findOrFail($id);
    }


    public function update(UpdateReviewsRequest $request, $id)
    {
        $review = Review::findOrFail($id);
        $review->update($request->all());

        return $review;
    }

    public function store(StoreReviewsRequest $request)
    {
        return $this->reviews_conroller->store();
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return '';
    }
}