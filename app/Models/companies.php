<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    protected $table = 'companies';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'email', 'logo', 'website', 'phone'];
}
