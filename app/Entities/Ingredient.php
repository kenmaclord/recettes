<?php

namespace App\Entities;

use Illuminate\Support\Str;
use Potassium\App\Entities\Entity;

class Ingredient extends Entity
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function setPrixAttribute($value)
    {
        $value = str_replace(",", ".", $value);

        $this->attributes['prix'] = (float)$value * 100;
    }

    public function getPrixAttribute($value)
    {
        return number_format($value / 100, 2, ',', ' ') . " €/kg";
    }
}
