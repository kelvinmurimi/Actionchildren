<?php
declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['department_name','slug'];


    //Department Has Many Staff
    public function staff(){
        return $this->hasMany(Staff::class);
    }
}
