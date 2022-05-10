<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Front\Data\LikesController as DataController;

class LikesController extends Controller
{
    public function __construct(DataController $data)
    {
        $this->data = $data;
    }

    public function liked(Request $request, $randKey)
    {
        $like = $this->data->insert_like($request, $randKey);
        return $like;
    }

    public function getliked($randKey)
    {
        $like = $this->data->get_like($randKey);
        return $like;
    }
}
