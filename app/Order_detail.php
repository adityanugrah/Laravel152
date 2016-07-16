<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    //
	
	protected $fillable = [
		'OrderID',
		'ProductID',
		'UnitPrice',
		'Quantity',
		'Discount',
		'created_at',
		'updated_at'
	];
}
