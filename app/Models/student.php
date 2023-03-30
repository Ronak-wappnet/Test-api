<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $guarded = ['id'];
    protected $fillable=[
        'enrollment_no',
        'name',
    ];

    public function marks()
    {
        return $this->hasOne('App\Models\Marks');
    }
}
