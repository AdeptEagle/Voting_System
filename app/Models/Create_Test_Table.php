<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Create_Test_Table extends Model
{
    use HasFactory;
    protected $fillable = [
        'FirstName',
        'LastName',
        'Position'
    ];

    protected $table = 'Test';
}
