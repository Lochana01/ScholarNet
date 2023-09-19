<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use App\Http\Requests\StoreDiscussionRequest;
use App\Http\Requests\UpdateDiscussionRequest;
use Illuminate\Http\Request;

class DiscussionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve and pass the discussions to the view
        $discussions = Discussion::all();
    
        return view('lms_discussion_view', compact('discussions'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDiscussionRequest $request)
    {
            // Validate the form data
        $request->validate([
            'discussion_title' => 'required|string',
            'discussion_content' => 'required|string',
        ]);

        try{
            $user = auth()->user(); // Assuming you are using Laravel's authentication

       
            $discussion = new Discussion([
                'discussion_title' => $request->input('discussion_title'),
                'discussion_content' => $request->input('discussion_content'),
                'user_name' => $user->name,
                'user_type' => $user->user_type,
            ]);

            // Save the discussion to the database
            $discussion->save();

            return redirect('/lms_discussion')->with('status', 'success');

        } catch (Exception $e) {
            return redirect('/lms_discussion')->with('status', 'error');
        }
    }

    public function addComment(Request $request, Discussion $discussion)
    {
        $newComment = $request->input('new_comment');
        $existingComments = $discussion->discussion_comments;

        // Append the new comment to the existing comments
        $discussion->update([
            'discussion_comments' => $existingComments . "\n" . $newComment
        ]);

        return redirect()->back()->with('status', 'Comment added successfully');
    }
        

    /**
     * Display the specified resource.
     */
    // public function show(Discussion $discussion)
    // {
    //     $user_name = $discussion->user_name;
    //     $user_type = $discussion->user_type;
    
    //     // Pass the discussion and user information to the view
    //     return view('lms_discussion_view', compact('discussion', 'user_name', 'user_type'));
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Discussion $discussion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiscussionRequest $request, Discussion $discussion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discussion $discussion)
    {
        //
    }
}
