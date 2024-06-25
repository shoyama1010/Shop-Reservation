<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'shop_id' => 'required|exists:shops,id',
            'reservation_datetime' => 'required|date',
            'number_of_people' => 'required|integer',
        ]);

        Reservation::create([
            'user_id' => Auth::id(),
            'shop_id' => $request->shop_id,
            'reservation_datetime' => $request->reservation_datetime,
            'number_of_people' => $request->number_of_people,
        ]);

        return redirect()->route('thanks');
    }
}
