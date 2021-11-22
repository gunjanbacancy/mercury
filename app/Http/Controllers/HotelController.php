<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Http\Controllers\BaseController as BaseController;

class HotelController extends BaseController
{
    public function index()
    {   
        $hotels = Hotel::where('status',1)->get();
        return $this->sendResponse($hotels->toArray(), 'Successfully fetch hotel list.');
    }
}
