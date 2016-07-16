<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $primaryKey = 'CustomerID';
	
	public $incrementing=false; //menyatakan bahwa ini bukan incremen atau AI
	
	protected $fillable = [
		'CustomerID',
		'CompanyName',
		'ContactName',
		'ContactTitle',
		'Address',
		'City',
		'Region',
		'PostalCode',
		'Country',
		'Phone',
		'Fax'
	];
}
