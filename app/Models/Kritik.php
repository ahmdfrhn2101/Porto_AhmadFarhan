<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Kritik extends Model
{
    use HasFactory;
    protected $table="Kritiks";
    protected $primaryKey= "id";
    protected $fillable=["Email","Kritik"];
}
