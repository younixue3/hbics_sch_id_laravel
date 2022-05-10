<?php

namespace App\Http\Controllers\Front\Data;

use App\Http\Controllers\Controller;
use App\Models\InsightLikes;
use App\Models\Publikasis;
use Illuminate\Http\Request;

class LikesController extends Controller
{
    public function insert_like($request, $randKey)
    {
        $publikasi = Publikasis::where('randKey', $randKey)->first();
        $insight_like = InsightLikes::where('publikasi', $publikasi->id)->where('user', auth()->user()->id);
        if ($insight_like->first() !== null && $insight_like->first()->type === $request->type_like){
            $insight_like->delete();
        } else {
            InsightLikes::updateOrCreate(
                [
                    'publikasi' => $publikasi->id,
                    'user' => auth()->user()->id
                ],
                [
                    'type' => $request->type_like
                ]
            );
        }
    }
    public function get_like($randKey)
    {
        $publikasi = Publikasis::where('randKey', $randKey)->first();
        $live_like = InsightLikes::where('publikasi', $publikasi->id)->where('user', auth()->user()->id)->first();
        $total_like = $publikasi->count_likes();
        $compact = compact('live_like', 'total_like');
        return $compact;
    }
}
