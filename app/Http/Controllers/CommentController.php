<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\CommentModel;
use Carbon\Carbon;

class CommentController extends Controller
{
    public function save(CommentRequest $request, $postid) {
        $comment = new CommentModel;

        $comment->name = $request->name; 
        $comment->email = $request->email; 
        $comment->commentary_content = $request->message; 
        $comment->post_id = $postid;
        $comment->date = Carbon::now()->format('F j, Y'); 
        
        
        if($comment->save()) {
            return redirect()->back();
        } else {
            return redirect()->back()->with('failure', 'Something went wrong. Please return later.');
        }
    }
}
