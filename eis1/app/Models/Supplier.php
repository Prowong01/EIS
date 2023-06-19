<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'tb_suppliers';
    protected $primaryKey = 'sup_id';
    public $timestamps = false;
    protected $fillable = [
        'sup_name',
        'sup_shop',
        'sup_address',
        'sup_phone',
        'sup_fax',
        'sup_email',
        'sup_shippingFee'
    ];
}
