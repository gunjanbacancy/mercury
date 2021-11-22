<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\HotelReview;
use Validator;
use App\Http\Controllers\BaseController as BaseController;

class HotelReviewController extends BaseController
{
    public function store(Request $request)
    {
        $input = $request->all();
        //dd($input);
        $validator = Validator::make($input, [
            'hotel_id' => 'required|numeric',
            'title' => 'required|string',
            'author' => 'required|string',
            'description' => 'required|string',
            'rating' => 'required|numeric',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }

        $review_create = HotelReview::create($input);
        return $this->sendResponse($review_create->toArray(), 'Successfully submit hotel review.');
    }

    public function show($id)
    {   
        $data = Hotel::with('hotelsReviews')->find($id);
        //dd($data);
        if (is_null($data)) {
            return $this->sendError('Unable to found hotel');
        }

        return $this->sendResponse($data->toArray(), 'Successfully fetch hotel details.');
    }
}
