<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneModel extends Model
{
    public function repairs()
    {
        return $this->hasMany(Repair::class);
    }
    public function manufacturer()
    {
        return $this->belongsTo(PhoneManufacturer::class);
    }
}
