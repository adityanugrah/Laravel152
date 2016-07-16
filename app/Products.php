<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{	
    protected $primaryKey = 'ProductID';
	
	protected $fillable = [
		'ProductName',
		'SupplierID',
		'CategoryID',
		'QuantityPerUnit',
		'UnitPrice',
		'UnitsInStock',
		'UnitsOnOrder',
		'ReorderLevel',
		'Discontinued'
	];
	
	public function category () {
		return $this->belongsTo(Category::class, 'CategoryID');
	}
	
	public function suppliers () {
		return $this->belongsTo(Suppliers::class, 'SupplierID');
	}
}