<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\CommentModel;
use Carbon\Carbon;

class CommentController extends Controller
{
    public function save(CommentRequest $request, $postid) {
        try {
            $comment = new CommentModel;

            $comment->name = $request->name; 
            $comment->email = $request->email; 
            $comment->commentary_content = $request->message; 
            $comment->post_id = $postid;
            $comment->date = Carbon::now()->format('F j, Y'); 
            $comment->save();
            
            return redirect()->back();
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with('failure', 'Somethin went wrong. Please return later.');
        }
    }
}
