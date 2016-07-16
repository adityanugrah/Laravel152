<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shippers extends Model
{
    protected $primaryKey = 'ShipperID';

    protected $fillable = [
        'CompanyName',
        'Phone',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'ShipperID');
    }
}
