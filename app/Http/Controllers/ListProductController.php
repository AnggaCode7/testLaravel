<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function tampilkan()
    {
        $data = [
            ['id' => 1, 'produk' => 'Produk 1'],
            ['id' => 2, 'produk' => 'Produk 2'],
            ['id' => 3, 'produk' => 'Produk 3'],
            // Data lainnya...
        ];

        // Mengirim data ke view
        return view('list_product', ['data' => $data]);
    }
}