<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasmanyThrough;

class Product extends Model
{
    use HasFactory;

    protected $table = 'tb_products';
    protected $primaryKey = 'p_id';
    public $timestamps = false;
    public function ProductCategory(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class,  'p_ctg');
    }
    public function Supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class,  'p_supplierID');
    }
    public function ProductStatus(): BelongsTo
    {
        return $this->belongsTo(ProductStatus::class,  'p_status');
    }
    public function PurchaseRequest(): HasMany
{
    return $this->hasMany(PurchaseRequest::class);
}
    public function PurchaseOrder(): HasmanyThrough
    {
        return $this->hasManyThrough(PurchaseOrder::class, PurchaseRequest::class, 'pr_supplierID', 'po_prID');
    }
    protected $fillable = [
        'p_code',
        'p_name',
        'p_image',
        'p_ctg',
        'p_code',
        'p_desc',
        'p_price',
        'p_sellPrice',
        'p_stock',
        'p_supplierID',
        'p_status'
    ];
}
