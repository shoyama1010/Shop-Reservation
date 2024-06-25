<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'shop_id' => 'required|exists:shops,id',
        ]);

        Favorite::create([
            'user_id' => Auth::id(),
            'shop_id' => $request->shop_id,
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $favorite = Favorite::where('user_id', Auth::id())->where('shop_id', $id)->firstOrFail();
        $favorite->delete();

        return redirect()->back();
    }
}
