<?php

namespace App\Http\Controllers;

use App\Models\ClientWed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

class ClientWedController extends Controller
{
    public function index()
    {
        return view('clientWed.index');
    }

    public function dashboard()
    {
        $clients = ClientWed::where('user_id', Auth::id())->latest()->get();

        $totalGuests = 0;
        $openedInvites = 0;
        $totalWishes = 0;

        return view('clientWed.dashboard', compact(
            'clients',
            'totalGuests',
            'openedInvites',
            'totalWishes'
        ));
    }

    public function create()
    {
        return view('clientWed.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'slug' => 'required|unique:client_weds',
            'groom' => 'required|string',
            'groomParents' => 'required|string',
            'bride' => 'required|string',
            'brideParents' => 'required|string',
            'weddingDate' => 'required|date',
            'location' => 'required|string',
            'mapLink' => 'required|url',
            'story' => 'required|string',
            'norek' => 'required|string',
            'pictwed' => 'required|image|max:2048'
        ]);

        if ($request->hasFile('pictwed')) {
            $validated['pictwed'] = $request->file('pictwed')
                ->store('weddings', 'public');
        }

        $validated['user_id'] = Auth::id();

        ClientWed::create($validated);

        return redirect()->route('clientWed.dashboard')
            ->with('success', 'Undangan berhasil dibuat');
    }

    public function edit(ClientWed $clientWed)
    {
        return view('clientWed.edit', compact('clientWed'));
    }

    public function update(Request $request, ClientWed $clientWed)
    {
        $validated = $request->validate([
            'slug' => 'required|unique:client_weds,slug,' . $clientWed->id,
            'groom' => 'required|string',
            'groomParents' => 'required|string',
            'bride' => 'required|string',
            'brideParents' => 'required|string',
            'weddingDate' => 'required|date',
            'location' => 'required|string',
            'mapLink' => 'required|url',
            'story' => 'required|string',
            'norek' => 'required|string'
        ]);

        if ($request->hasFile('pictwed')) {
            $validated['pictwed'] = $request->file('pictwed')
                ->store('weddings', 'public');
        }

        $clientWed->update($validated);

        return redirect()->route('clientWed.dashboard')
            ->with('success', 'Undangan diperbarui');
    }

    public function destroy(ClientWed $clientWed)
    {
        $clientWed->delete();
        return back()->with('success', 'Undangan dihapus');
    }

    // 🌍 PUBLIC PAGE BY SLUG
    public function public($slug)
    {
        $wedding = ClientWed::where('slug', $slug)->firstOrFail();
        return view('clientWed.public', compact('wedding'));
    }
}
