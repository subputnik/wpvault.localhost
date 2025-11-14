<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\Server;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $sites = Site::with('server')->paginate(20);

        return view('sites.index', compact('sites'));
    }

    public function create()
    {
        $servers = Server::all();
        return view('sites.create', compact('servers'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'       => 'required|string|max:255',
            'domain'     => 'required|string|max:255|unique:sites,domain',
            'server_id'  => 'nullable|exists:servers,id',
            'wp_version' => 'nullable|string|max:50',
            'description'=> 'nullable|string',
        ]);

        Site::create($data);

        return redirect()->route('sites.index')
            ->with('success', 'Сайт создан');
    }

    public function edit(Site $site)
    {
        $servers = Server::all();
        return view('sites.edit', compact('site', 'servers'));
    }

    public function update(Request $request, Site $site)
    {
        $data = $request->validate([
            'name'       => 'required|string|max:255',
            'domain'     => 'required|string|max:255|unique:sites,domain,' . $site->id,
            'server_id'  => 'nullable|exists:servers,id',
            'wp_version' => 'nullable|string|max:50',
            'description'=> 'nullable|string',
        ]);

        $site->update($data);

        return redirect()->route('sites.index')
            ->with('success', 'Сайт обновлён');
    }

    public function destroy(Site $site)
    {
        $site->delete();

        return redirect()->route('sites.index')
            ->with('success', 'Сайт удалён');
    }
}