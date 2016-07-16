<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'categories', 'categories/*',
        'product', 'product/*',
        'employee', 'employee/*',
        'supplier', 'supplier/*',
        'customer', 'customer/*',
        'shipper', 'shipper/*',
        'order', 'order/*'
    ];
}