<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Guest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show()
    {
        return Guest::all();
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
