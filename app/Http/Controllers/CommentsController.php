<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;
class CommentsController extends Controller
{
    //



    public function postComment(Request $request)
    {
        $this->validate($request, [
            'comment' => 'required'
        ]);
        $comment = Comment::create([
            'ticket_id' => $request->input('ticket_id'),
            'user_id' => Auth::user()->id,
            'comment' => $request->input('comment')
        ]);
        // send mail if the user commenting is not the ticket owner
        // if($comment->ticket->user->id !== Auth::user()->id) {
        //     $mailer->sendTicketComments($comment->ticket->user, Auth::user(), $comment->ticket, $comment);
        // }
        return redirect()->back()->with("success", "Your comment has been submitted.");
    }
}
