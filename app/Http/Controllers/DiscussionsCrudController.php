<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscussionsCrudController extends Controller
{
    public function reply(Request $request, int $id)
    {
        Message::create([
            'discussion_id' => $id,
            'sender_id' =>Auth::id(),
            'context' => $request->context
        ]);
        return back();
    }
}
