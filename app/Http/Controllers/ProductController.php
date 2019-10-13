<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProductsList() {
        $produits = Produit::orderBy('id')->paginate(4);
        return view('boutique')->with('produits', $produits);
    }
}
