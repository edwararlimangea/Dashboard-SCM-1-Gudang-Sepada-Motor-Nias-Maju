<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    use HasFactory;
    protected $fillable = ['nama','posisi','username','password'];
    protected $table = 'pengguna';
    public $timestamps = true;
}
