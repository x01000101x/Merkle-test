<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdminResource;
use App\Models\Guest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show()
    {
        $perPage = request()->get('per-page');
        $Guest = Guest::paginate($perPage);
        $GuestCollection = AdminResource::collection($Guest);

        $GuestData['data'] = $GuestCollection;
        $GuestData['next_page_url'] = $Guest->nextPageUrl();

        return response()->json([
            'data' => $GuestData
        ], 200);
    }

    public function showById($id)
    {
        return Guest::where('id', $id)->first();
    }

    public function update($id)
    {
        $guest = new Guest;
        $guest->where('id', $id)->update([
            "name" => request('name'),
            "address" => request('address'),
            "phone" => request('phone'),
            "note" => request('note'),
        ]);

        return response()->json([
            'message' => 'berhasil update',
        ], 200);
    }

    public function delete($id)
    {
        Guest::destroy($id);

        return response()->json([
            'message' => 'berhasil hapus',
        ], 200);
    }
}
