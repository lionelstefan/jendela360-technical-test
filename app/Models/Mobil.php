<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\TransactionPenjualan;

class Mobil extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use SoftDeletes;

    protected $table ='mobil';

    protected $guarded = [];

    protected $fillable = [
        'nama',
        'harga',
        'stock',
    ];

    public function transaction()
    {
        return $this->hasMany(TransactionPenjualan::class);
    }
}
