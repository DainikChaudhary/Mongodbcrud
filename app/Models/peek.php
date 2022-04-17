<?php

namespace App\Models;

use App\Models;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class peek extends Eloquent
{
  

    // protected $connection="mongodb";
    // protected $collection="ajax";


    // protected $fillable=[


    // 	'name', 'address', 'age'



    // ];


     protected $connection = 'mongodb';
	protected $collection = 'ajax';



	protected $fillable = [
        'name', 'address', 'age'
    ];


}
