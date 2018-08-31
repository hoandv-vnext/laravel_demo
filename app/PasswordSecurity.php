<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordSecurity extends Model
{
    // table
    protected $table='password_securities';

    protected $fillable = [
        'user_id', 'google2fa_enable', 'google2fa_secret',
    ];

    // 2fa: user link
    protected $guarded = [];
 
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
