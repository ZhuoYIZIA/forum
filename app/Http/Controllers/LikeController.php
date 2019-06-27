<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;
use App\Reply;
use Symfony\Component\HttpFoundation\Response;

class LikeController extends Controller
{
    public function likeIt(Reply $reply)
    {
        $reply->like()->create([
            // 'user_id' => auth()->id(),
            'user_id' => '1'
        ]);
    }

    public function unlikeIt(Reply $reply)
    {
        $reply->like()->where('user_id' , '1')->first()->delete();
        return Response(null,Response::HTTP_NO_CONTENT);
    }
}
