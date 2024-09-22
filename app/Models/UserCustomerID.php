<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCustomerID extends Model
{
    use HasFactory;

    protected $table = 'user_customerid';

    protected $fillable = [
        'user_id',
        'CustomerID',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
