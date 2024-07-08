<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public function product() {
        return $this->hasMany(Product::class, 'vendor_code', 'vendor_code');
    }
}
