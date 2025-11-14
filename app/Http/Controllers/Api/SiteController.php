<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * GET /api/sites
     */
    public function index()
    {
        return Site::with('server')->paginate(20);
    }

    /**
     * POST /api/sites
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'domain'      => 'required|string|max:255|unique:sites,domain',
            'server_id'   => 'nullable|exists:servers,id',
            'wp_version'  => 'nullable|string|max:50',
            'description' => 'nullable|string',
        ]);

        $site = Site::create($data);

        return response()->json($site, 201);
    }

    /**
     * GET /api/sites/{site}
     */
    public function show(Site $site)
    {
        return $site->load('server');
    }

    /**
     * PUT/PATCH /api/sites/{site}
     */
    public function update(Request $request, Site $site)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'domain'      => 'required|string|max:255|unique:sites,domain,' . $site->id,
            'server_id'   => 'nullable|exists:servers,id',
            'wp_version'  => 'nullable|string|max:50',
            'description' => 'nullable|string',
        ]);

        $site->update($data);

        return response()->json($site);
    }

    /**
     * DELETE /api/sites/{site}
     */
    public function destroy(Site $site)
    {
        $site->delete();

        return response()->json(['message' => 'Site deleted successfully']);
    }
}