<?php

namespace App\Http\Controllers;

use App\Models\clientWed;
use App\Models\invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InvitationController extends Controller
{
    public function show($slug)
    {
        $client = clientWed::where('slug', $slug)->firstOrFail();
        $guests = $client->invitations()->latest()->get();

        return view('invite.show', compact('client', 'guest'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'clientWed_id' => 'required|exists:clientWeds, id',
            'name' => 'required|string',
            'noWa' => 'required|integer|max:20',
            'is_attending' => 'required|boolean',
            'message' => 'required|string'
        ]);
    }
}
