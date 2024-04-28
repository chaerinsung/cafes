<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Cafe;
use Auth;

class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'body' => 'required|string',
        ]);

        $cafe = Cafe::findOrFail($id);
        $user = Auth::user();

        // Create a new comment
        $comment = new Comment([
            'body' => $request->input('body'),
            'cafe_id' => $cafe->id,
            'user_id' => $user->id,
        ]);
        
        // Save the comment
        $comment->save();

        // Redirect back to the cafe page with a success message
        return redirect()->route('cafes.show', $id . '#commentsSection')
            ->with('success', "Comment added successfully.");
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        
        // Check if the authenticated user is the owner of the comment
        if (Auth::check() && Auth::user()->id === $comment->user_id) {
            return view('comments.edit', compact('comment'));
        } else {
            // Unauthorized access, handle accordingly (redirect, error message, etc.)
        }
    }

    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);

        // Check if the authenticated user is the owner of the comment
        if (Auth::user()->id === $comment->user_id) {
            // Validate the request data
            $request->validate([
                'body' => 'required|string',
            ]);

            // Update the comment
            $comment->update([
                'body' => $request->input('body'),
            ]);

            return redirect()->route('cafes.show', $comment->cafe_id . '#commentsSection')
                ->with('success', 'Comment updated successfully.');
        }

        return redirect()->route('cafes.show', $comment->cafe_id . '#commentsSection')
            ->with('error', 'You are not authorized to update this comment.');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);

        // Check if the authenticated user is the owner of the comment
        if (Auth::user()->id === $comment->user_id) {
            // Delete the comment
            $comment->delete();

            return redirect()->back()->with('success', 'Comment deleted successfully.');
        }

        return redirect()->back()->with('error', 'You are not authorized to delete this comment.');
    }

    
}
