<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function allJoinFacade()
{
    $menus = Menu::all();
    $result = DB::select('select us.*, menus.nama as nama_menu from menus, users where menus.id = users.id_jenis makanan');
    return view('menu', ['all' => $result, 'menus' => $menus]);
}


    public function create()
    {
        return view('menu.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_menu' => 'required|min:5|max:150',
            'harga' => 'required|min:5|max:150',
            'foto' => 'required|image|max:5000'
        ]);
    
        $ext = $request->foto->getClientOriginalExtension();
        $nama_file = "foto-" . time() . "." . $ext;
        $path = $request->foto->storeAs('public', $nama_file);
    
        $menu = new Menu();
        $menu->nama_menu = $validatedData['nama_menu'];
        $menu->harga = $validatedData['harga'];
        $menu->foto = $nama_file;
        $menu->save();
    
        session()->flash('info', "Data menu $menu->nama_menu berhasil disimpan ke database");
        return redirect()->route('menu.index');
    }
    

    public function index()
    {
        $menus = Menu::all();

        return view('menu', compact('menus'));
    }

    public function edit(Menu $menu)
    {
        return view('menu.edit', ['menu' => $menu]);
    }

    public function update(Request $request, Menu $menu)
    {
        $validatedData = $request->validate([
            'nama_menu' => 'required|min:5|max:150',
            'harga' => 'required|min:5|max:150',
        ]);

        $menu->update($validatedData);

        session()->flash('info', "Data menu $menu->nama_menu berhasil diubah");
        return redirect()->route('menu.index');
    }

    public function destroy(Menu $menu)
    {
        $this->authorize('delete', Menu::class);

        $menu->delete();
        return redirect()->route('menu.index')->with("info", "Menu $menu->nama_menu berhasil dihapus");
    }

    public function addToWishlist($menuId)
    {
       
        $user = auth()->user();

        if ($user) {
           
            $existingWishlistItem = Wishlist::where('user_id', $user->id)
                ->where('menu_id', $menuId)
                ->first();

            if (!$existingWishlistItem) {
        
                Wishlist::create([
                    'user_id' => $user->id,
                    'menu_id' => $menuId,
                ]);

                return redirect()->back()->with('success', 'Menu added to wishlist.');
            } else {
                return redirect()->back()->with('error', 'Menu already in wishlist.');
            }
        }

        return redirect()->route('login')->with('error', 'Please login to add to wishlist.');
    }

    public function cart()
    {
        return $this->hasMany(Cart::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function indexApi()
    {
        $menus = Menu::all();

        return response()->json(['menus' => $menus], 200);
    }

    
}
