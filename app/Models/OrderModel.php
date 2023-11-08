<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class OrderModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'orders';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_customer',
        'phone',
        'address',
        'created_at',
        'status'
    ];

    // Override the asDateTime method to set the desired timezone
    protected function asDateTime($value)
    {
        return Carbon::parse($value)->setTimezone('Asia/Ho_Chi_Minh');
    }

    public function scopeSearch($query)
    {
        if ($key = request()->key) {
            $query = $query->where('name', 'like', '%' . $key . '%');
        }
        return $query;
    }
}

