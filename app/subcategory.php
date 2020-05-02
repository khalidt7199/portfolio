<?php

namespace App;
use App\product;
use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{protected $primaryKey = 'subcatID';
   public function product(){
       return $this->hasOne(product::Class, 'subcatID','subcategoryname');
   }
}
