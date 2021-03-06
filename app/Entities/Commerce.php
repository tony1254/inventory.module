<?php

namespace EmejiasInventory\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Commerce extends Model
{
    protected $fillable = [
        'id',
    	'name',
    	'patent_name',
    	'patent',
    	'address',
    	'phone',
    	'other_phone',
    	'nit',
    	'tax',
    	'profit',
    	'logo_path',
    	'slug'
    ];


    public function setNameAttribute($value)
    {
    	$this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

	public function getUrlAttribute()
	{
		return route('commerces.edit', [$this, $this->slug]);
	}

    public function getLogoFileAttribute()
    {
       return storage_path('app/'.$this->logo_path);
    }
}


