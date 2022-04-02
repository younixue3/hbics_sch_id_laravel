<?php

namespace App\Http\Controllers\Front\Data;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use App\Models\Publikasis;
use App\Models\PublikasisComments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store_data($request, $key)
    {
        $publikasi = Publikasis::where('randKey', $key)->firstOrFail();
        $comment = Comments::create([
            'name' => $request->name,
            'comment' => $request->comment
        ]);
        $publikasiscomments = PublikasisComments::create([
            'comment' => $comment->id,
            'publikasi' => $publikasi->id
        ]);
    }
}
