<?php

namespace EmejiasInventory\Entities;

use Illuminate\Support\Str;

class Warehouse extends Entity
{
    protected $fillable = ['name', 'description', 'status', 'slug'];

    public function setNameAttribute($value)
    {
    	$this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function getEditUrlAttribute()
    {
    	return route('warehouses.edit', [$this, $this->slug]);
    }
}
