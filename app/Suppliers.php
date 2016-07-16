<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    protected $primaryKey = 'SupplierID';
	
	public $incrementing=false; //menyatakan bahwa ini bukan incremen atau AI
	
	protected $fillable = [
		'CompanyName',
		'ContactNama',
		'ContactTitle',
		'Address',
		'City',
		'Region',
		'PostalCode',
		'Country',
		'Phone',
		'Fax',
		'HomePage'
	];
	
	protected function products () {
		return $this->hasMany(Product::class, 'SupplierID');
	}
}
