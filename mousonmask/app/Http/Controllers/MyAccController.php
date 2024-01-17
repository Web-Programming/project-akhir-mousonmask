<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Models\User;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Customer;


class MyAccController extends Controller
{
    // public function showWishlist(){
    //     $user = User::find(auth()->id());
    //     $wishlist = $user->wishlist;
    //     $menus = Menu::all();

    //     return view('myacc', compact('wishlist', 'menus'));
    // }

    public function addToWishlist($menuId)
    {
        $user = auth()->user();

        if ($user) {
            $existingWishlistItem = Wishlist::where('user_id', $user->id)
                ->where('menu_id', $menuId)
                ->first();

            if (!$existingWishlistItem) {
                // Tambahkan baris ini untuk menggabungkan data menu
                $menuData = Menu::find($menuId);

                Wishlist::create([
                    'user_id' => $users->id,
                    'menu_id' => $menuId,
                    'nama_menu' => $menuData->nama_menu,
                    // Tambahkan kolom lain yang perlu diisi dari tabel menus
                ]);

                return redirect()->back()->with('success', 'Menu added to wishlist.');
            } else {
                return redirect()->back()->with('error', 'Menu already in wishlist.');
            }
        }

        return redirect()->route('login')->with('error', 'Please login to add to wishlist.');
    }


    public function index()
    {
        $user = Auth::user();
        $user = User::where('id', $user->id)->first();
        return view('myacc', compact('user', 'user'));
    }

}
