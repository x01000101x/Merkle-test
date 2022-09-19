<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function create()
    {
        request()->validate([
            'name' => 'required|string',
            'address' => 'required',
            'phone' => 'required|numeric',
            'note' => 'required'
        ]);

        $guest = new Guest;
        $guest->name = request('name');
        $guest->address = request('address');
        $guest->phone = request('phone');
        $guest->note = request('note');
        $guest->save();

        return response()->json([
            "message" => "berhasil dibuat",
            "data" => [
                'name' => $guest->name,
                'address' => $guest->address,
                'phone' => $guest->phone,
                'note' => $guest->note
            ]
        ], 200);
    }

    public function show()
    {
        return [
            Guest::select('name', 'note')->get()
        ];
    }
}
