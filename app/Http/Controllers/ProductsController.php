<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list(){

         return Products::all();

    }

    public function create(){

        $product = Products::create(
            request()->validate([
                'name' => ['string','required'],
                'price' => ['numeric','required'],
                'quantity' => ['integer','required']
            ])
        );

        return $product;
    }

    public function update($id){

        $data = request()->validate([
            'name' => ['string'],
            'price' => ['numeric'],
            'quantity' => ['integer']
        ]);

        Products::where('id',$id)->update($data);

    }

    public function delete($id){

        Products::find($id)->delete();

    }
}
