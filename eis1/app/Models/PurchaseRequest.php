<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PurchaseRequest extends Model
{
    use HasFactory;

    protected $table = 'tb_purchaserequests';
    protected $primaryKey = 'pr_id';
    public const CREATED_AT = 'pr_cdate';
    public const UPDATED_AT = null;
    public function PurchaseOrder(): HasOne
    {
        return $this->hasOne(PurchaseOrder::class);
    }
    public function PRStatus(): BelongsTo
    {
        return $this->belongsTo(PRStatus::class,  'pr_status');
    }
    public function Supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class,  'pr_supplierID');
    }
    public function Product(): BelongsTo
    {
        return $this->belongsTo(Product::class,  'pr_prodID');
    }
    protected $fillable = [
        'pr_ddate',
        'pr_qty',
        'pr_uom',
        'pr_supplierID',
        'pr_subtot',
        'pr_tax',
        'pr_total',
        'pr_prodID',
        'pr_status',
        'pr_requestedBy',
        'pr_approvedBy'
    ];
}
