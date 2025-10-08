<?php

namespace App\Http\Controllers;

use App\Models\clientWed;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class ClientWedController extends Controller
{
    public function index()
    {
        $clients = ClientWed::latest()->get();
        return view('clientWed.index', compact('clients'));
    }

    public function create()
    {
        return view('clientWed.create');
    }

    public function store(request $request)
    {
        $validated = $request->validate([
            'slug' => 'required|unique:client_weds',
            'groom' => 'required|string',
            'groomParents' => 'required|string',
            'bride' => 'required|string',
            'brideParents' => 'required|string',
            'weddingDate' => 'required|date',
            'location' => 'required|string',
            'mapLink' => 'required|string',
            'pictwed' => 'required|string',
            'story' => 'required|string',
            'norek' => 'required|integer'
        ]);

        ClientWed::create($validated);
        return redirect()->route('clientWed.index')->with('success', 'Undangan Berhasil di Buat');
    }

    public function show(ClientWed $clientWed)
    {
        return view('clientWed.show', compact('clientWed'));
    }

    public function edit(ClientWed $clientWed)
    {
        return view('clientWed.edit', compact('clientWed'));
    }

    public function update(Request $request, ClientWed $clientWed)
    {
        $validated = $request->validate([
            'slug' => 'required|unique:client_weds',
            'groom' => 'required|string',
            'groomParents' => 'required|string',
            'bride' => 'required|string',
            'brideParents' => 'required|string',
            'weddingDate' => 'required|date',
            'location' => 'required|string',
            'mapLink' => 'required|string',
            'pictwed' => 'required|string',
            'story' => 'required|string',
            'norek' => 'required|integer'
        ]);

        $clientWed->update($validated);

        return redirect('clientWed.index')->with('success', 'Berhasil di update');
    }

    public function destroy(clientWed $clientWed)
    {
        $clientWed->delete();
        return back()->with('success', 'Undangan di hapus');
    }
}
