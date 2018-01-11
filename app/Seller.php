<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    
     public function seller_name($id){

        $seller = Seller::find($id);

        $name = $seller->name;

        // $name = $seller->name;

        // $img = $product->imagepath;

        return $seller->name;
    
    }

}
