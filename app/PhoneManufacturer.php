<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneManufacturer extends Model
{
    protected $fillable = ['name'];
    public function phoneModels()
    {
        return $this->hasMany(PhoneModel::class);
    }
}
