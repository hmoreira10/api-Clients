<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'comercial_name', 'cnpj', 'company_id'];

    public function headquarter()
    {
        return $this->belongsTo('App\Models\Company', 'company_id');
    }
    public function subsidiarys()
    {
        return $this->hasMany('App\Models\Company');
    }
    public function clients()
    {
        return $this->belongsToMany('App\Models\Client', 'client_company', 'company_id', 'client_id');
    }
    public function clientsHeadquarter()
    {
        return $this->hasMany('App\Models\Client');
    }
}
