<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gadget;

class employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $fillable = [
        'emp_name',
        'designation',
        'salary',
    ];

    public function gadget()
    {
        return $this->hasMany(Gadget::class,'emp_id');
    }
}
