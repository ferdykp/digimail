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

        ClientWed::create($validated);

        return back()->with('success', 'thanks');
    }

    public function sendLink(invitation $invitation)
    {
        $slug = $invitation->clientWed->slug;
        $guestName = urlencode($invitation->name);
        $link = url("/invite/{$slug}?guest={guestName}");

        $message = urlencode("Halo {$invitation->name}! \n"
            . "Kami mengundangmu ke pernikahan kami 💍\n\n"
            . "Lihat undangan di sini:\n{$link}");

        $waNumber = preg_replace('/[^0-9]/', '', $invitation->noWa);
        return redirect()->away("https://wa.me/{$waNumber}?text={$message}");
    }

    public function sendViaFonnte(Invitation $invitation)
    {
        $slug = $invitation->clientWed->slug;
        $guestName = urlencode($invitation->name);
        $link = url("/invite/{$slug}?guest={$guestName}");

        $message = "Halo {$invitation->name}! 💐\nKami mengundangmu ke pernikahan kami 💍\nLihat undangan di sini:\n{$link}";

        $response = Http::withHeaders([
            'Authorization' => env('FONNTE_TOKEN'),
        ])->post('https://api.fonnte.com/send', [
            'target' => $invitation->noWa,
            'message' => $message,
        ]);

        return $response->json();
    }
}
