<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'document_number'];

    public function headquarter()
    {
        return $this->belongsTo('App\Models\Company', 'company_id');
    }
    public function subsidiarys()
    {
        return $this->hasMany('App\Models\Company', 'client_id');
    }
}
