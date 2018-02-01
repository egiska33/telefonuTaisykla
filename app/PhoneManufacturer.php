<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneManufacturer extends Model
{
    public function phoneModels()
    {
        return $this->hasMany(PhoneModel::class);
    }
}
