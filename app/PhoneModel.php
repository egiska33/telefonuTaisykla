<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PhoneManufacturer;

class PhoneModel extends Model
{
    protected $fillable = ['phone_manufacturer_id', 'model'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function repairs()
    {
        return $this->hasMany(Repair::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function phoneManufacturer()
    {
        return $this->belongsTo(PhoneManufacturer::class);
    }
}
