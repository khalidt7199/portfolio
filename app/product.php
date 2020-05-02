<?php

namespace App;
use App\subcategory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
   protected $primaryKey = "productid";
   public function subcategory(){
    return $this->hasOne(subcategory::class, 'subcatID', 'subcategoryname');
   }

}
