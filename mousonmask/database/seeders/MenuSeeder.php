<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $menuData = [
            'snack' => [
                ['id_jenisMakanan' => 2, 'nama_menu' => 'Torilla with Bolognese and Cheese', 'harga' => 2.99, 'foto' => 'https://tse3.mm.bing.net/th?id=OIP.CiuAgf6j3D1taLtQ3EzN9AHaFj&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 2, 'nama_menu' => 'Fried Wonton with Sour Spicy Sauce', 'harga' => 2.69, 'foto' => 'https://tse2.mm.bing.net/th?id=OIP.afwIXrNiJKbVLbfHTMGFHQHaJ4&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 2, 'nama_menu' => 'Potato Sticks with Dipping Sauce', 'harga' => 2.00, 'foto' => 'https://tse4.mm.bing.net/th?id=OIP.G0-VSkKoFW5BHHlmbWBKBwHaFP&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 2, 'nama_menu' => 'Popcorn Chicken', 'harga' => 3.00, 'foto' => 'https://tse4.mm.bing.net/th?id=OIP.yi3uQb4_pdGvgoLxT9vpjAHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 2, 'nama_menu' => 'Spicy Honey Chicken Wings', 'harga' => 3.22, 'foto' => 'https://tse2.mm.bing.net/th?id=OIP.XmbsOTbH3m-zM6Rpx80HgAHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 2, 'nama_menu' => 'Banana Turon with Caramel', 'harga' => 1.69, 'foto' => 'https://tse2.mm.bing.net/th?id=OIP.c6VRUTOCpyAC_6coVwn-DwHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 2, 'nama_menu' => 'Loaded Nachos with Chicken Mayo', 'harga' => 2.35, 'foto' => 'https://tse1.mm.bing.net/th?id=OIP.p5z4FtE-LH__3jXheaCV6QHaH5&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 2, 'nama_menu' => 'Garlic Cheese Bread', 'harga' => 2.10, 'foto' => 'https://tse3.mm.bing.net/th?id=OIP.DXIj4r5NEb72P0smgNGMigHaFF&pid=Api&P=0&h=180'],
               
            ],
            'appetizer' => [
                ['id_jenisMakanan' => 1, 'nama_menu' => 'Artisan Cheese Plate', 'harga' => 15.00, 'foto' => 'https://tse3.mm.bing.net/th?id=OIP.yj0lsGkIN5QtZi3Jo9rc7wHaGR&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 1, 'nama_menu' => 'Bruschetta', 'harga' => 8.00, 'foto' => 'https://tse4.mm.bing.net/th?id=OIP.4-aDQrUwyM6B6vxTZrXAJAHaEz&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 1, 'nama_menu' => 'Caesar Salad', 'harga' => 5.12, 'foto' => 'https://tse4.mm.bing.net/th?id=OIP.QmHw_37gNHByVUGMekg3awHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 1, 'nama_menu' => 'Shrimp Cocktail', 'harga' => 10.00, 'foto' => 'https://tse2.mm.bing.net/th?id=OIP.R3QKd3XafMBUMH_tktFQEgHaE8&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 1, 'nama_menu' => 'Caprese Skewers', 'harga' => 7.50, 'foto' => 'https://tse1.mm.bing.net/th?id=OIP.7cIwTBHkkYJt2JSFHib3UAHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 1, 'nama_menu' => 'Spinach and Artichoke Dip', 'harga' => 9.00, 'foto' => 'https://tse4.mm.bing.net/th?id=OIP._C5NTz1y153qrsJmiDeKNgHaFC&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 1, 'nama_menu' => 'Stuffed Mushrooms', 'harga' => 6.35, 'foto' => 'https://tse3.mm.bing.net/th?id=OIP.8CyOKwbqSKXZwsPSPLO6EgHaE8&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 1, 'nama_menu' => 'Deviled Eggs', 'harga' => 7.10, 'foto' => 'https://tse4.mm.bing.net/th?id=OIP.QUZ0--hojQe1OV40SJlBDgHaE8&pid=Api&P=0&h=180'],
                
            ],
            'alcohol' => [
                ['id_jenisMakanan' => 3, 'nama_menu' => 'Martini', 'harga' => 12.00, 'foto' => 'https://tse1.mm.bing.net/th?id=OIP.3ZV0fYQZbEmRY2y8yehM1wHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 3, 'nama_menu' => 'Margarita', 'harga' => 8.50, 'foto' => 'https://tse3.mm.bing.net/th?id=OIP.Zljihe1OVdpMs8JO5C0C_AHaE8&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 3, 'nama_menu' => 'Old Fashioned', 'harga' => 12.50, 'foto' => 'https://tse1.mm.bing.net/th?id=OIP.STfR97mTboXVcMYRVhHMfAHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 3, 'nama_menu' => 'Mojito', 'harga' => 11.45, 'foto' => 'https://tse2.mm.bing.net/th?id=OIP._Zeuj-mSku2-dVCgVaEDMAHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 3, 'nama_menu' => 'Craft Beer (pint)', 'harga' => 6.50, 'foto' => 'https://tse2.mm.bing.net/th?id=OIP.lg2YFtzLZx8pz8Jx0q6qsAHaEm&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 3, 'nama_menu' => 'Wine by the Glass', 'harga' => 13.20, 'foto' => 'https://tse2.mm.bing.net/th?id=OIP.fE_O2ERZDAeMVIBZijFAjQHaE8&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 3, 'nama_menu' => 'Whiskey Sour', 'harga' => 14.00, 'foto' => 'https://tse1.mm.bing.net/th?id=OIP.-qaun2STZ7J1C9q1RADaBwHaE8&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 3, 'nama_menu' => 'Cosmopolitan', 'harga' => 16.20, 'foto' => 'https://tse4.mm.bing.net/th?id=OIP.GNomUD5tyfXSJ4MHRC0qJQHaHa&pid=Api&P=0&h=180'],
                
            ],
            'nonAlcohol' => [
                ['id_jenisMakanan' => 4, 'nama_menu' => 'Lemonade', 'harga' => 3.99, 'foto' => 'https://tse2.mm.bing.net/th?id=OIP.O4-BlwnK5XddkVPnAKuEVQHaE8&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 4, 'nama_menu' => 'Virgin Mojito', 'harga' => 7.00, 'foto' => 'https://tse2.mm.bing.net/th?id=OIP.srPfMqNzMSam8jw0JpYnEQHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 4, 'nama_menu' => 'Shirley Temple', 'harga' => 4.00, 'foto' => 'https://tse1.mm.bing.net/th?id=OIP.M8OS8YtsYUVzT738-yKeLAHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 4, 'nama_menu' => 'Iced Tea', 'harga' => 3.00, 'foto' => 'https://tse2.mm.bing.net/th?id=OIP.E_gCRT8XQRVS_WM6U8oLTgHaFj&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 4, 'nama_menu' => 'Soda (per can)', 'harga' => 3.00, 'foto' => 'https://tse4.mm.bing.net/th?id=OIP.HuiZ0wKn4fJzdUo9nFpqOQHaFj&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 4, 'nama_menu' => 'Mocktail (non-alcoholic)', 'harga' => 7.69, 'foto' => 'https://tse1.mm.bing.net/th?id=OIP.i6Po_-gOp0NXSJXIhA_ODQHaJ9&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 4, 'nama_menu' => 'Brewed Coffee', 'harga' => 5.35, 'foto' => 'https://tse1.mm.bing.net/th?id=OIP.gyi2811SPA3O1YcuPtJiSwHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 4, 'nama_menu' => 'Matchless Coffee', 'harga' => 6.10, 'foto' => 'https://tse1.mm.bing.net/th?id=OIP.7UntTq1JqkCiTLMEB-IwvwHaE8&pid=Api&P=0&h=180'],
                
            ],
            'dessert' => [
                ['id_jenisMakanan' => 5, 'nama_menu' => 'Chocolate Lava Cake', 'harga' => 12.50, 'foto' => 'https://tse4.mm.bing.net/th?id=OIP.UqPA6l0j5zEUC34D2WyFpAHaJw&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 5, 'nama_menu' => 'Cheesecake (slice)', 'harga' => 10.99, 'foto' => 'https://tse1.mm.bing.net/th?id=OIP.S-q_0M8EpT3xB4SviRG9tAHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 5, 'nama_menu' => 'Tiramisu', 'harga' => 14.00, 'foto' => 'https://tse2.mm.bing.net/th?id=OIP.g6OCL5qbY-Nnp-jUe3qzeQHaE7&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 5, 'nama_menu' => 'Apple Pie (slice)', 'harga' => 5.20, 'foto' => 'https://tse4.mm.bing.net/th?id=OIP.DuFc4e9W7H6789dtveuQcQHaE8&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 5, 'nama_menu' => 'Crème Brûlée', 'harga' => 13.22, 'foto' => 'https://tse4.mm.bing.net/th?id=OIP.1Xc5cFVVnIY6b-rACqGqeQHaE7&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 5, 'nama_menu' => 'Brownie Sundae', 'harga' => 14.60, 'foto' => 'https://tse3.mm.bing.net/th?id=OIP.TxM8wBI4P8J-EBGZaK8a6wHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 5, 'nama_menu' => 'Key Lime Pie (slice)', 'harga' => 9.35, 'foto' => 'https://tse2.mm.bing.net/th?id=OIP.9vdkk310qAFXV-o3B__CcwHaHa&pid=Api&P=0&h=180'],
                ['id_jenisMakanan' => 5, 'nama_menu' => 'Strawberry Shortcake', 'harga' => 8.10, 'foto' => 'https://tse2.mm.bing.net/th?id=OIP.XMYMOFgxzRkPuAoWLF7dCwHaHa&pid=Api&P=0&h=180'],
                
            ],
           
        ];

        foreach ($menuData as $category => $items) {
            foreach ($items as $item) {
                $item['category'] = $category;
                DB::table('menus')->insert($item);
            }
        }
    }
}