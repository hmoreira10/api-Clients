<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'commercial_name', 'cnpj', 'company_id'];

    public function headquarter()
    {
        return $this->belongsTo('App\Models\Company', 'company_id');
    }
    public function subsidiarys()
    {
        return $this->belongsToMany('App\Models\Company', 'client_company', 'client_id', 'company_id');
    }
}
