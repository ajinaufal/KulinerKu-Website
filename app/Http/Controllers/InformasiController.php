<?php

namespace App\Http\Controllers;

use App\Models\seller;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index($id)
    {
        $item = null;
        $products = seller::where('ID', 'like',"%". $id ."%")->get();
        foreach ($products as $key => $product) {
            if (mb_substr($product->ID, 0, 5) == $id) {
                $item = $product;
            }
        }
        $ID = mb_substr($item->ID, 0, 5);
        return view('informasi.index', [
            'product' => $product,
            'info' => 'Informasi',
            'id' => $ID,
        ]);
    }
}
