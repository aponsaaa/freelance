<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'order';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'buyer_id',
        'freelance_id',
        'service_id',
        'file',
        'note',
        'expired',
        'order_status_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // One to many
    public function user_buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id', 'id');
    }

    public function user_freelancer()
    {
        return $this->belongsTo(User::class, 'freelance_id', 'id');
    }

    // one to many
    public function service()
    {
        return $this->belongsTo('App\Models\Service', 'service_id', 'id');
    }
}
