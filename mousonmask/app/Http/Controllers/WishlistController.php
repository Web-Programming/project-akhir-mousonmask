<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function addToWishlist(Request $request)
{
    // Validasi request
    $request->validate([
        'name' => 'required|string',
        'price' => 'required|numeric',
        'image' => 'nullable|string',
    ]);

    // Simpan ke database
    $wishlistItem = Wishlist::create([
        'user_id' => auth()->id(), // Sesuaikan dengan kebutuhan autentikasi Anda
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'image' => $request->input('image'),
    ]);

    return response()->json($wishlistItem);
}

public function removeFromWishlist(Request $request)
{
    // Validasi request
    $request->validate([
        'name' => 'required|string',
    ]);

    // Hapus dari database
    Wishlist::where('user_id', auth()->id())
        ->where('name', $request->input('name'))
        ->delete();

    return response()->json(['message' => 'Successfully removed from wishlist']);
}

}
