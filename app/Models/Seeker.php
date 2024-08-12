<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seeker extends Authenticable
{
    use HasFactory;
    protected $guarded=[];
}
