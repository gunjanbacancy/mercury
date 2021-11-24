<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Http\Controllers\BaseController as BaseController;

class HotelController extends BaseController
{
    public function index()
    {   
        $hotels = Hotel::where('status',1)->with('hotelsReviews')->get();
        return $this->sendResponse($hotels->toArray(), 'Successfully fetch hotel list.');
    }

    public function getHotelById($id)
    {   
        if($id) { ;
            $hotel = Hotel::where(array('status' => 1))->with('hotelsReviews')->find($id);
            $data=[];
            if($hotel) {
                if(count($hotel->hotelsReviews) > 0) {
                    $reviews=[];
                    foreach($hotel->hotelsReviews as $review) {
                        $reviews[] = [
                            'title' => $review->title,
                            'description' => $review->description,
                            'author' => $review->author,
                            'created_at' => $review->created_at,
                        ];
                    }
                } else {
                    $reviews='Review not found';
                }
                $data = [
                    'name' => $hotel->name,
                    'star' => $hotel->star,
                    'review' => $reviews
                ];
                return $this->sendResponse($data, 'Successfully fetch hotel details.');
            } else {
                return $this->sendResponse(array(), 'Hotel not found.');
            }
        } else { 
            return $this->sendError(array(), 'Please enter valid hotel id');
        }
    }
}
