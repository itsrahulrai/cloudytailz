<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetVisit extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'services', 'message', 'status'];
}
