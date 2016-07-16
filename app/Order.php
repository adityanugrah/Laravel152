<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $primaryKey = 'OrderID';
	
	protected $fillable = [
		'CustomerID',
		'EmployeeID',
		'OrderDate',
		'RequiredDate',
		'ShippedDate',
		'ShipVia',
		'Freight',
		'ShipName',
		'ShipAddress',
		'ShipCity',
		'ShipRegion',
		'ShipPostalCode',
		'ShipCountry'
	];
}
