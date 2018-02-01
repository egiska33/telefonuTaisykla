<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function model()
    {
        return $this->belongsTo(PhoneModel::class);
    }
}
