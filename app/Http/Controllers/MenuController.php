<?php

namespace App\Http\Controllers;

use App\Models\seller;
use Illuminate\Http\Request;

class MenuController extends Controller
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
        $ID = $item->ID;
        $NamaMakanan = explode('??', $item->NamaMakanan);
        $HargaMakanan = explode('??', $item->HargaMakanan);
        $FotoMakanan = explode('??', $item->URLFotoMakanan);
        $DeskripsiMakanan = explode('??', $item->DeskripsiMakanan);

        $data = array();
        for ($i=0; $i < count($FotoMakanan); $i++) { 
            $data[$i] = [
                'NamaMakanan' => $NamaMakanan[$i],
                'HargaMakanan' => $HargaMakanan[$i],
                'FotoMakanan' => $FotoMakanan[$i],
                'DeskripsiMakanan' => $DeskripsiMakanan[$i],
            ];
        }
        return view('menu.index',[
            'test' => $FotoMakanan,
            'data' => $data,
            'products' => $item,
            'info' => 'Menu',
            'id' => $ID,
        ]);
    }
}
