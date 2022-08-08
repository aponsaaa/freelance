<?php

namespace App\Models;

use App\Models\User;
use App\Models\ExperienceUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailUser extends Model
{

    // use HasFactory;
    use SoftDeletes;

    public $table = 'detail_user';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'users_id',
        'photo',
        'role',
        'contact_number',
        'biography',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // One to one
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    // one to many
    public function experience_user()
    {
        return $this->hasMany('App\Models\ExperienceUser', 'detail_user_id');
    }
}
