<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModels extends Model
{
   // use HasFactory;
   protected $table="user";
   protected $primaryKey="id";
   public $incrementing =true;
   protected $keyType='int';
   public $timestamps = false;
}