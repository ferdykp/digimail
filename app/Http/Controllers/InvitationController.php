<?php

namespace App\Http\Controllers;

use App\Models\ClientWed;
use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InvitationController extends Controller
{
    /**
     * Menampilkan halaman undangan berdasarkan slug.
     */
    public function show($slug)
    {
        // Ambil data client berdasarkan slug
        $client = ClientWed::where('slug', $slug)->firstOrFail();

        // Ambil daftar tamu undangan yang sudah mengisi form
        $guests = $client->invitations()->latest()->get();

        // Kirim data ke view
        return view('guest.index', compact('client', 'guests'));
    }

    /**
     * Simpan data konfirmasi kehadiran tamu.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'clientWed_id' => 'required|exists:clientWeds,id',
            'name' => 'required|string|max:255',
            'noWa' => 'required|string|max:20',
            'is_attending' => 'required|boolean',
            'message' => 'required|string|max:500',
        ]);

        // Simpan ke tabel invitations, bukan clientWed
        Invitation::create($validated);

        return back()->with('success', 'Thank you for your response!');
    }

    /**
     * Kirim link undangan via WhatsApp.
     */
    public function sendLink(Invitation $invitation)
    {
        $slug = $invitation->clientWed->slug;
        $guestName = urlencode($invitation->name);
        $link = url("/invite/{$slug}?guest={$guestName}");

        $message = urlencode("Halo {$invitation->name}! 💍\nKami mengundangmu ke pernikahan kami.\n\nLihat undangan di sini:\n{$link}");

        $waNumber = preg_replace('/[^0-9]/', '', $invitation->noWa);
        return redirect()->away("https://wa.me/{$waNumber}?text={$message}");
    }

    /**
     * Kirim undangan via API Fonnte.
     */
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
