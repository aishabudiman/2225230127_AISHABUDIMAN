<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_uas extends Model
{
    use HasFactory;

    protected $table = 'project_uas';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama',
        'email',
        'nomorwhatsapp',
        'pilihantempatduduk',
        'jumlahtiket',
    ];

}
